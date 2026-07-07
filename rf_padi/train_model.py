# ==========================================
# IMPORT LIBRARY
# ==========================================

import os
import json
import joblib
import pymysql
from datetime import datetime

from sklearn.preprocessing import LabelEncoder
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier

from sklearn.metrics import (
    accuracy_score,
    precision_score,
    recall_score,
    f1_score,
    confusion_matrix,
    classification_report
)

from preprocessing import preprocessing_data
from labeling import labeling_data
from config import *


# ==========================================
# DATABASE CONNECTION
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
# STEP 1 - PREPROCESSING
# ==========================================

df = preprocessing_data()
df = df["data"]


# ==========================================
# STEP 2 - LABELING
# ==========================================

df = labeling_data(df)


# ==========================================
# STEP 3 - ENCODING
# ==========================================

encoder_wilayah = LabelEncoder()
encoder_jenis = LabelEncoder()
encoder_label = LabelEncoder()

df["wilayah"] = encoder_wilayah.fit_transform(df["wilayah"])
df["jenis_padi"] = encoder_jenis.fit_transform(df["jenis_padi"])
df["prioritas"] = encoder_label.fit_transform(df["prioritas"])


# ==========================================
# STEP 4 - FITUR & TARGET
# ==========================================

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

y = df["prioritas"]


# ==========================================
# STEP 5 - SPLIT DATA
# ==========================================

X_train, X_test, y_train, y_test = train_test_split(
    X,
    y,
    test_size=0.2,
    random_state=42,
    stratify=y
)


# ==========================================
# STEP 6 - TRAIN MODEL (RETRAIN)
# ==========================================

model = RandomForestClassifier(
    n_estimators=100,
    random_state=42
)

model.fit(X_train, y_train)


# ==========================================
# STEP 7 - EVALUASI MODEL
# ==========================================

y_pred = model.predict(X_test)

akurasi = accuracy_score(y_test, y_pred)
presisi = precision_score(y_test, y_pred, average="weighted")
recall = recall_score(y_test, y_pred, average="weighted")
f1 = f1_score(y_test, y_pred, average="weighted")

conf_matrix = confusion_matrix(y_test, y_pred).tolist()

report = classification_report(
    y_test,
    y_pred,
    target_names=encoder_label.classes_,
    output_dict=True
)


# ==========================================
# STEP 8 - SIMPAN MODEL & ENCODER
# ==========================================

os.makedirs("model", exist_ok=True)

joblib.dump(model, "model/random_forest.pkl")
joblib.dump(encoder_wilayah, "model/encoder_wilayah.pkl")
joblib.dump(encoder_jenis, "model/encoder_jenis.pkl")
joblib.dump(encoder_label, "model/encoder_label.pkl")


# ==========================================
# STEP 9 - SIMPAN METRICS KE DATABASE
# ==========================================

try:
    conn = koneksi()
    cursor = conn.cursor()

    cursor.execute("""
        INSERT INTO riwayat_klasifikasi 
        (jumlah_data, akurasi, terakhir_diperbarui)
        VALUES (%s, %s, %s)
    """, (
        int(len(df)),
        float(akurasi),
        datetime.now()
    ))

    conn.commit()
    cursor.close()
    conn.close()

except Exception as e:
    pass


# ==========================================
# OUTPUT JSON UNTUK CI4
# ==========================================

hasil = {
    "status": True,
    "jumlah_data": int(len(df)),
    "akurasi": float(akurasi),
    "presisi": float(presisi),
    "recall": float(recall),
    "f1_score": float(f1),
    "confusion_matrix": conf_matrix
}

print(json.dumps(hasil, ensure_ascii=False))