# ==========================================
# IMPORT LIBRARY
# ==========================================

import os
import joblib

# ==========================================
# PATH PROJECT
# ==========================================

BASE_DIR = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))

MODEL_DIR = os.path.join(BASE_DIR, "model")

# ==========================================
# FUNGSI ENCODING
# ==========================================

def encoding(df):

    print("===================================")
    print("TAHAP 4 - ENCODING DATA")
    print("===================================\n")

    # ======================================
    # LOAD ENCODER
    # ======================================

    encoder_wilayah = joblib.load(

        os.path.join(
            MODEL_DIR,
            "encoder_wilayah.pkl"
        )

    )

    encoder_jenis = joblib.load(

        os.path.join(
            MODEL_DIR,
            "encoder_jenis.pkl"
        )

    )

    print("✓ Encoder Wilayah berhasil dimuat.")

    print("✓ Encoder Jenis Padi berhasil dimuat.\n")

    # ======================================
    # ENCODING
    # ======================================

    df["wilayah"] = encoder_wilayah.transform(
        df["wilayah"]
    )

    df["jenis_padi"] = encoder_jenis.transform(
        df["jenis_padi"]
    )

    print("Encoding berhasil dilakukan.\n")

    # ======================================
    # MEMBENTUK FITUR
    # ======================================

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

    # ======================================
    # INFORMASI FITUR
    # ======================================

    print("===================================")
    print("FITUR MODEL")
    print("===================================\n")

    print("Jumlah Data :", len(X))

    print("Jumlah Fitur :", len(X.columns))

    print("\nNama Fitur :")

    for kolom in X.columns:

        print("-", kolom)

    print("\n===================================")
    print("HASIL ENCODING")
    print("===================================\n")

    print(X)

    print("\n===================================")
    print("ENCODING SELESAI")
    print("===================================\n")

    # ======================================
    # RETURN
    # ======================================

    return X, df


# ==========================================
# TEST
# ==========================================

if __name__ == "__main__":

    from ambil_data import ambil_data
    from preprocessing import preprocessing
    from labeling import labeling

    df = ambil_data()

    df = preprocessing(df)

    df = labeling(df)

    X, df = encoding(df)