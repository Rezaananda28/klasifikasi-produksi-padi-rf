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
# FUNGSI PREDIKSI
# ==========================================

def prediksi(model, encoder_label, X, df):

    print("===================================")
    print("TAHAP 6 - PREDIKSI RANDOM FOREST")
    print("===================================\n")

    # ======================================
    # MELAKUKAN PREDIKSI
    # ======================================

    hasil = model.predict(X)

    print("Prediksi berhasil dilakukan.")

    # ======================================
    # KEMBALIKAN LABEL
    # ======================================

    hasil = encoder_label.inverse_transform(hasil)

    df["prioritas"] = hasil

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

    # ======================================
    # KEMBALIKAN NILAI ENCODING
    # ======================================

    df["wilayah"] = encoder_wilayah.inverse_transform(

        df["wilayah"]

    )

    df["jenis_padi"] = encoder_jenis.inverse_transform(

        df["jenis_padi"]

    )

    # ======================================
    # HASIL PREDIKSI
    # ======================================

    print("\n===================================")
    print("HASIL PREDIKSI")
    print("===================================\n")

    print(

        df[
            [
                "wilayah",
                "jenis_padi",
                "prioritas"
            ]
        ]

    )

    # ======================================
    # DISTRIBUSI HASIL
    # ======================================

    print("\n===================================")
    print("DISTRIBUSI PRIORITAS")
    print("===================================\n")

    print(

        df["prioritas"].value_counts()

    )

    print("\n===================================")
    print("PREDIKSI SELESAI")
    print("===================================\n")

    # ======================================
    # RETURN DATAFRAME
    # ======================================

    return df


# ==========================================
# TEST
# ==========================================

if __name__ == "__main__":

    from ambil_data import ambil_data
    from preprocessing import preprocessing
    from labeling import labeling
    from encoding import encoding
    from load_model import load_model

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