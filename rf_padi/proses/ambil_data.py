# ==========================================
# IMPORT LIBRARY
# ==========================================

import os
import sys
import pandas as pd
import pymysql

# ==========================================
# AGAR BISA MEMBACA config.py
# ==========================================

BASE_DIR = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))

sys.path.append(BASE_DIR)

from config import *

# ==========================================
# FUNGSI AMBIL DATA
# ==========================================

def ambil_data():

    print("===================================")
    print("TAHAP 1 - MENGAMBIL DATA PRODUKSI")
    print("===================================\n")

    # ======================================
    # KONEKSI DATABASE
    # ======================================

    try:

        conn = pymysql.connect(

            host=DB_HOST,
            user=DB_USER,
            password=DB_PASSWORD,
            database=DB_NAME

        )

        print("✓ Berhasil terhubung ke database.\n")

    except Exception as e:

        print("✗ Gagal terhubung ke database.")
        print(str(e))

        return None

    # ======================================
    # QUERY DATA
    # ======================================

    query = """

    SELECT *

    FROM data_produksi

    ORDER BY wilayah,
             jenis_padi,
             bulan

    """

    try:

        df = pd.read_sql(query, conn)

    except Exception as e:

        conn.close()

        print("✗ Gagal membaca data.")
        print(str(e))

        return None

    conn.close()

    # ======================================
    # INFORMASI DATASET
    # ======================================

    print("===================================")
    print("INFORMASI DATASET")
    print("===================================\n")

    print(f"Jumlah Data           : {len(df)}")
    print(f"Jumlah Kolom          : {len(df.columns)}")
    print(f"Jumlah Wilayah        : {df['wilayah'].nunique()}")
    print(f"Jumlah Jenis Padi     : {df['jenis_padi'].nunique()}")

    if "bulan" in df.columns:
        print(f"Jumlah Bulan          : {df['bulan'].nunique()}")

    # ======================================
    # NAMA KOLOM
    # ======================================

    print("\n===================================")
    print("NAMA KOLOM")
    print("===================================\n")

    for kolom in df.columns:

        print("-", kolom)

    # ======================================
    # TIPE DATA
    # ======================================

    print("\n===================================")
    print("TIPE DATA")
    print("===================================\n")

    print(df.dtypes)

    # ======================================
    # PREVIEW DATA
    # ======================================

    print("\n===================================")
    print("5 DATA PERTAMA")
    print("===================================\n")

    print(df.head())

    print("\n===================================")
    print("DATA BERHASIL DIAMBIL")
    print("===================================\n")

    # ======================================
    # RETURN DATAFRAME
    # ======================================

    return df


# ==========================================
# JALANKAN LANGSUNG
# ==========================================

if __name__ == "__main__":

    ambil_data()