# ==========================================
# IMPORT LIBRARY
# ==========================================

from flask import Flask, request, jsonify

from predict import prediksi_data

# ==========================================
# MEMBUAT APLIKASI FLASK
# ==========================================

app = Flask(__name__)

# ==========================================
# API PREDIKSI
# ==========================================

@app.route("/predict", methods=["POST"])

def predict():

    try:

        data = request.get_json()

        hasil = prediksi_data(

            wilayah=data["wilayah"],

            jenis_padi=data["jenis_padi"],

            luas_lahan=float(data["luas_lahan"]),

            sasaran_tanam=float(data["sasaran_tanam"]),

            sasaran_panen=float(data["sasaran_panen"]),

            sasaran_produksi=float(data["sasaran_produksi"]),

            produktivitas=float(data["produktivitas"])

        )

        return jsonify({

            "status": True,

            "hasil_klasifikasi": hasil

        })

    except Exception as e:

        return jsonify({

            "status": False,

            "message": str(e)

        })

# ==========================================
# MENJALANKAN SERVER
# ==========================================

if __name__ == "__main__":

    app.run(

        host="0.0.0.0",

        port=5000,

        debug=False

    )