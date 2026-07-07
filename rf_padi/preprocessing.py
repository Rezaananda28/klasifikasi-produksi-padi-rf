# ==========================================
# IMPORT LIBRARY
# ==========================================

import pandas as pd
import pymysql
import warnings

warnings.simplefilter(action="ignore", category=UserWarning)
from config import *

# ==========================================
# PREPROCESSING DATA
# ==========================================

def preprocessing_data():

    # ==============================
    # KONEKSI DATABASE
    # ==============================

    conn = pymysql.connect(
        host=DB_HOST,
        user=DB_USER,
        password=DB_PASSWORD,
        database=DB_NAME
    )

    # ==============================
    # AMBIL DATA
    # ==============================

    query = "SELECT * FROM data_produksi"

    df = pd.read_sql(query, conn)

    conn.close()

    # ==============================
    # INFORMASI DATA AWAL
    # ==============================

    jumlah_data_awal = len(df)

    jumlah_null = int(df.isnull().sum().sum())

    # ==============================
    # DROP KOLOM TIDAK DIPAKAI
    # ==============================

    df = df.drop(
        columns=[
            "id_produksi",
            "created_at",
            "updated_at"
        ],
        errors="ignore"
    )

    # ==============================
    # HAPUS DUPLIKAT
    # ==============================

    sebelum = len(df)

    df = df.drop_duplicates()

    sesudah = len(df)

    jumlah_duplikat = sebelum - sesudah

    # ==============================
    # AGREGASI DATA
    # ==============================

    df = df.groupby(
        ["wilayah", "jenis_padi"],
        as_index=False
    ).agg({

        "luas_lahan": "mean",
        "sasaran_tanam": "sum",
        "sasaran_panen": "sum",
        "sasaran_produksi": "sum",
        "produktivitas": "mean"

    })

    # ==============================
    # PEMBULATAN
    # ==============================

    df["luas_lahan"] = df["luas_lahan"].round(2)

    df["produktivitas"] = df["produktivitas"].round(2)

    # ==============================
    # HASIL PREPROCESSING
    # ==============================

    return {

        "data": df,

        "info": {

            "jumlah_data_awal": jumlah_data_awal,

            "jumlah_data_akhir": len(df),

            "jumlah_duplikat": jumlah_duplikat,

            "jumlah_null": jumlah_null

        }

    }