# ==========================================
# IMPORT LIBRARY
# ==========================================

import sys
import json
import joblib
import pymysql
import pandas as pd
import warnings

warnings.simplefilter(action="ignore", category=UserWarning)

from config import *
from preprocessing import preprocessing_data
from labeling import labeling_data

# ==========================================
# RESPONSE JSON
# ==========================================

def success(step, title, output=None):
    return {
        "status": True,
        "step": step,
        "title": title,
        "output": output
    }


def failed(step, title, message):
    return {
        "status": False,
        "step": step,
        "title": title,
        "message": str(message)
    }


# ==========================================
# DATABASE
# ==========================================

def koneksi():

    return pymysql.connect(

        host=DB_HOST,

        user=DB_USER,

        password=DB_PASSWORD,

        database=DB_NAME,

        cursorclass=pymysql.cursors.DictCursor

    )


# ==========================================
# LOAD MODEL
# ==========================================

def load_model():

    model = joblib.load(MODEL_PATH)

    encoder_wilayah = joblib.load(
        ENCODER_WILAYAH_PATH
    )

    encoder_jenis = joblib.load(
        ENCODER_JENIS_PATH
    )

    encoder_label = joblib.load(
        ENCODER_LABEL_PATH
    )

    return (
        model,
        encoder_wilayah,
        encoder_jenis,
        encoder_label
    )


# ==========================================
# STEP 1
# AMBIL DATA
# ==========================================

def step_ambil_data():

    try:

        conn = koneksi()

        query = """

        SELECT *

        FROM data_produksi

        ORDER BY

        wilayah,

        jenis_padi,

        bulan

        """

        df = pd.read_sql(query, conn)

        conn.close()

        return success(

    1,

    "Mengambil Data Produksi",

    {

        "jumlah_data": int(len(df)),
        "status": "Siap diproses"

    }

)

    except Exception as e:

        return failed(

            1,

            "Mengambil Data Produksi",

            e

        )


# ==========================================
# STEP 2
# PREPROCESSING
# ==========================================

def step_preprocessing():

    try:

        hasil = preprocessing_data()

        df = hasil["data"]

        info = hasil["info"]

        return success(

            2,

            "Preprocessing Data",

            {

                "jumlah_data_awal": info["jumlah_data_awal"],

                "jumlah_data_akhir": info["jumlah_data_akhir"],

                "jumlah_duplikat": info["jumlah_duplikat"],

                "jumlah_null": info["jumlah_null"]

            }

        )

    except Exception as e:

        return failed(

            2,

            "Preprocessing Data",

            e

        )


# ==========================================
# STEP 3
# LABELING
# ==========================================

def step_labeling():

    try:

        hasil = preprocessing_data()

        df = hasil["data"]

        df = labeling_data(df)

        distribusi = df["prioritas"].value_counts().to_dict()

        return success(

            3,

            "Labeling Data",

            {

                "jumlah_data": int(len(df)),

                "tinggi": int(distribusi.get("Tinggi", 0)),

                "sedang": int(distribusi.get("Sedang", 0)),

                "rendah": int(distribusi.get("Rendah", 0))

            }

        )

    except Exception as e:

        return failed(

            3,

            "Labeling Data",

            e

        )
    # ==========================================
# STEP 4
# ENCODING
# ==========================================

def step_encoding():

    try:

        hasil = preprocessing_data()

        df = hasil["data"]

        model, encoder_wilayah, encoder_jenis, encoder_label = load_model()

        df["wilayah"] = encoder_wilayah.transform(df["wilayah"])

        df["jenis_padi"] = encoder_jenis.transform(df["jenis_padi"])

        return success(

            4,

            "Encoding Data",

            {

                "jumlah_data": int(len(df)),

                "jumlah_wilayah": int(df["wilayah"].nunique()),

                "jumlah_jenis_padi": int(df["jenis_padi"].nunique())

            }

        )

    except Exception as e:

        return failed(

            4,

            "Encoding Data",

            e

        )


# ==========================================
# STEP 5
# LOAD MODEL
# ==========================================

def step_load_model():

    try:

        load_model()

        return success(

            5,

            "Memuat Model Random Forest",

            {

                "model": "random_forest.pkl",

                "encoder_wilayah": "encoder_wilayah.pkl",

                "encoder_jenis": "encoder_jenis.pkl",

                "encoder_label": "encoder_label.pkl",

                "status_model": "Berhasil dimuat"

            }

        )

    except Exception as e:

        return failed(

            5,

            "Memuat Model Random Forest",

            e

        )


# ==========================================
# STEP 6
# PREDIKSI
# ==========================================

def step_prediksi():

    try:

        hasil = preprocessing_data()

        df = hasil["data"]

        model, encoder_wilayah, encoder_jenis, encoder_label = load_model()

        df["wilayah"] = encoder_wilayah.transform(df["wilayah"])

        df["jenis_padi"] = encoder_jenis.transform(df["jenis_padi"])

        X = df[

            [

                "wilayah",

                "jenis_padi",

                "luas_lahan",

                "sasaran_tanam",

                "sasaran_panen",

                "sasaran_produksi",

                "produktivitas"

            ]

        ]

        prediksi = model.predict(X)

        prediksi = encoder_label.inverse_transform(prediksi)

        df["prioritas"] = prediksi

        df["wilayah"] = encoder_wilayah.inverse_transform(df["wilayah"])

        df["jenis_padi"] = encoder_jenis.inverse_transform(df["jenis_padi"])

        distribusi = df["prioritas"].value_counts().to_dict()

        return success(

            6,

            "Prediksi Prioritas Produksi",

            {

                "jumlah_data": int(len(df)),

                "tinggi": int(distribusi.get("Tinggi", 0)),

                "sedang": int(distribusi.get("Sedang", 0)),

                "rendah": int(distribusi.get("Rendah", 0))

            }

        )

    except Exception as e:

        return failed(

            6,

            "Prediksi Prioritas Produksi",

            e

        )
    # ==========================================
# STEP 7
# SIMPAN HASIL
# ==========================================

def step_simpan_hasil():

    try:

        hasil = preprocessing_data()

        df = hasil["data"]

        model, encoder_wilayah, encoder_jenis, encoder_label = load_model()

        df["wilayah"] = encoder_wilayah.transform(df["wilayah"])
        df["jenis_padi"] = encoder_jenis.transform(df["jenis_padi"])

        X = df[
            [
                "wilayah",
                "jenis_padi",
                "luas_lahan",
                "sasaran_tanam",
                "sasaran_panen",
                "sasaran_produksi",
                "produktivitas"
            ]
        ]

        prediksi = model.predict(X)

        prediksi = encoder_label.inverse_transform(prediksi)

        df["prioritas"] = prediksi

        df["wilayah"] = encoder_wilayah.inverse_transform(df["wilayah"])
        df["jenis_padi"] = encoder_jenis.inverse_transform(df["jenis_padi"])

        conn = koneksi()

        cursor = conn.cursor()

        cursor.execute("TRUNCATE TABLE hasil_klasifikasi")

        for _, row in df.iterrows():

            cursor.execute(

                """
                INSERT INTO hasil_klasifikasi
                (
                    wilayah,
                    jenis_padi,
                    prioritas
                )
                VALUES
                (
                    %s,
                    %s,
                    %s
                )
                """,

                (

                    row["wilayah"],
                    row["jenis_padi"],
                    row["prioritas"]

                )

            )

        conn.commit()

        cursor.close()

        conn.close()

        return success(

            7,

            "Menyimpan Hasil Klasifikasi",

            {

                "jumlah_data": int(len(df)),

                "status": "Berhasil disimpan ke tabel hasil_klasifikasi"

            }

        )

    except Exception as e:

        return failed(

            7,

            "Menyimpan Hasil Klasifikasi",

            e

        )


# ==========================================
# MAIN
# ==========================================

if __name__ == "__main__":

    if len(sys.argv) < 2:

        print(json.dumps(

            failed(

                0,

                "System",

                "Parameter step tidak ditemukan."

            ),

            ensure_ascii=False

        ))

        sys.exit()

    step = sys.argv[1]

    if step == "ambil_data":

        hasil = step_ambil_data()

    elif step == "preprocessing":

        hasil = step_preprocessing()

    elif step == "labeling":

        hasil = step_labeling()

    elif step == "encoding":

        hasil = step_encoding()

    elif step == "load_model":

        hasil = step_load_model()

    elif step == "prediksi":

        hasil = step_prediksi()

    elif step == "simpan_hasil":

        hasil = step_simpan_hasil()

    else:

        hasil = failed(

            0,

            "System",

            "Step tidak dikenali."

        )

    print(

        json.dumps(

            hasil,

            ensure_ascii=False

        )

    )