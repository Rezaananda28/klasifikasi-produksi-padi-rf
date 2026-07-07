import os

# ==========================================
# DATABASE
# ==========================================

DB_HOST = "localhost"
DB_USER = "root"
DB_PASSWORD = ""
DB_NAME = "db_klasifikasi_produksi_padi_rf"

# ==========================================
# PATH
# ==========================================

BASE_DIR = os.path.dirname(os.path.abspath(__file__))

PROJECT_DIR = os.path.abspath(
    os.path.join(BASE_DIR, "..")
)

MODEL_DIR = os.path.join(PROJECT_DIR, "model")

# ==========================================
# FILE MODEL
# ==========================================

MODEL_PATH = os.path.join(
    MODEL_DIR,
    "random_forest.pkl"
)

ENCODER_WILAYAH_PATH = os.path.join(
    MODEL_DIR,
    "encoder_wilayah.pkl"
)

ENCODER_JENIS_PATH = os.path.join(
    MODEL_DIR,
    "encoder_jenis.pkl"
)

ENCODER_LABEL_PATH = os.path.join(
    MODEL_DIR,
    "encoder_label.pkl"
)