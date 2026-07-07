# ==========================================
# IMPORT LIBRARY
# ==========================================

import os
import sys
import pymysql

# ==========================================
# AGAR BISA MEMBACA config.py
# ==========================================

BASE_DIR = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))

sys.path.append(BASE_DIR)

from config import *

# ==========================================
# FUNGSI SIMPAN HASIL
# ==========================================

def simpan_hasil(df):

    print("===================================")
    print("TAHAP 7 - MENYIMPAN HASIL")
    print("===================================\n")

    # ======================================
    # KONEKSI DATABASE
    # ======================================

    conn = pymysql.connect(

        host=DB_HOST,
        user=DB_USER,
        password=DB_PASSWORD,
        database=DB_NAME

    )

    cursor = conn.cursor()

    # ======================================
    # HAPUS DATA LAMA
    # ======================================

    print("Menghapus data hasil klasifikasi lama...")

    cursor.execute("TRUNCATE TABLE hasil_klasifikasi")

    print("✓ Data lama berhasil dihapus.\n")

    # ======================================
    # SIMPAN DATA BARU
    # ======================================

    print("Menyimpan hasil prediksi...\n")

    jumlah_data = 0

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

        jumlah_data += 1

    conn.commit()

    cursor.close()

    conn.close()

    # ======================================
    # INFORMASI HASIL
    # ======================================

    print("===================================")
    print("HASIL PENYIMPANAN")
    print("===================================\n")

    print(f"Jumlah Data Disimpan : {jumlah_data}")

    print("\nDistribusi Prioritas :\n")

    print(

        df["prioritas"].value_counts()

    )

    print("\n===================================")
    print("SELESAI MENYIMPAN HASIL")
    print("===================================\n")

    # ======================================
    # RETURN
    # ======================================

    return {

        "status": True,

        "jumlah_data": jumlah_data,

        "distribusi": df["prioritas"].value_counts().to_dict()

    }


# ==========================================
# TEST
# ==========================================

if __name__ == "__main__":

    from ambil_data import ambil_data
    from preprocessing import preprocessing
    from labeling import labeling
    from encoding import encoding
    from load_model import load_model
    from prediksi import prediksi

    df = ambil_data()

    df = preprocessing(df)

    df = labeling(df)

    X, df = encoding(df)

    model, encoder_label = load_model()

    df = prediksi(

        model,
        encoder_label,
        X,
        df

    )

    simpan_hasil(df)