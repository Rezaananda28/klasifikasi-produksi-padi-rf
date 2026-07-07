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
# FUNGSI LOAD MODEL
# ==========================================

def load_model():

    print("===================================")
    print("TAHAP 5 - MEMUAT MODEL RANDOM FOREST")
    print("===================================\n")

    # ======================================
    # LOKASI MODEL
    # ======================================

    print("Lokasi Model :")

    print(MODEL_DIR)

    print()

    # ======================================
    # LOAD RANDOM FOREST
    # ======================================

    model = joblib.load(

        os.path.join(
            MODEL_DIR,
            "random_forest.pkl"
        )

    )

    print("✓ Model Random Forest berhasil dimuat.")

    # ======================================
    # LOAD ENCODER LABEL
    # ======================================

    encoder_label = joblib.load(

        os.path.join(
            MODEL_DIR,
            "encoder_label.pkl"
        )

    )

    print("✓ Encoder Label berhasil dimuat.")

    print("\n===================================")
    print("MODEL SIAP DIGUNAKAN")
    print("===================================\n")

    # ======================================
    # RETURN
    # ======================================

    return model, encoder_label


# ==========================================
# TEST
# ==========================================

if __name__ == "__main__":

    model, encoder_label = load_model()