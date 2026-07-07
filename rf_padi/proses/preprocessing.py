# ==========================================
# IMPORT LIBRARY
# ==========================================

import pandas as pd

# ==========================================
# FUNGSI PREPROCESSING
# ==========================================

def preprocessing(df):

    print("===================================")
    print("TAHAP 2 - PREPROCESSING DATA")
    print("===================================\n")

    # ======================================
    # INFORMASI DATA AWAL
    # ======================================

    print("Jumlah Data Awal :", len(df))

    # ======================================
    # CEK MISSING VALUE
    # ======================================

    print("\n===================================")
    print("CEK MISSING VALUE")
    print("===================================\n")

    missing = df.isnull().sum()

    print(missing)

    # ======================================
    # CEK DUPLIKAT
    # ======================================

    print("\n===================================")
    print("CEK DATA DUPLIKAT")
    print("===================================\n")

    jumlah_duplikat = df.duplicated().sum()

    print("Jumlah Data Duplikat :", jumlah_duplikat)

    # ======================================
    # HAPUS DUPLIKAT
    # ======================================

    if jumlah_duplikat > 0:

        df = df.drop_duplicates()

        print("\nData duplikat berhasil dihapus.")

    else:

        print("\nTidak ditemukan data duplikat.")

    # ======================================
    # HAPUS KOLOM YANG TIDAK DIPERLUKAN
    # ======================================

    kolom_hapus = [
        "id_produksi",
        "created_at",
        "updated_at"
    ]

    kolom_tersedia = []

    for kolom in kolom_hapus:

        if kolom in df.columns:

            kolom_tersedia.append(kolom)

    if len(kolom_tersedia) > 0:

        df = df.drop(columns=kolom_tersedia)

        print("\nKolom yang dihapus :")

        for kolom in kolom_tersedia:

            print("-", kolom)

    else:

        print("\nTidak ada kolom yang perlu dihapus.")

    # ======================================
    # AGREGASI DATA
    # ======================================

    print("\n===================================")
    print("PROSES AGREGASI DATA")
    print("===================================\n")

    df = df.groupby(

        ["wilayah", "jenis_padi"],

        as_index=False

    ).agg({

        "luas_lahan": "max",

        "sasaran_tanam": "sum",

        "sasaran_panen": "sum",

        "sasaran_produksi": "sum",

        "produktivitas": "mean"

    })

    # ======================================
    # PEMBULATAN NILAI
    # ======================================

    df["luas_lahan"] = df["luas_lahan"].round(2)

    df["produktivitas"] = df["produktivitas"].round(2)

    # ======================================
    # HASIL PREPROCESSING
    # ======================================

    print("Jumlah Data Setelah Agregasi :", len(df))

    print("\n===================================")
    print("HASIL PREPROCESSING")
    print("===================================\n")

    print(df)

    print("\n===================================")
    print("PREPROCESSING SELESAI")
    print("===================================\n")

    # ======================================
    # RETURN DATAFRAME
    # ======================================

    return df