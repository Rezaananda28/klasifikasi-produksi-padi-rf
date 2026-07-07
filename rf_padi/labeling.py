# ==========================================
# IMPORT LIBRARY
# ==========================================

import pandas as pd

# ==========================================
# FUNGSI MEMBUAT LABEL OTOMATIS
# ==========================================

def labeling_data(df):

    # ======================================
    # MENENTUKAN BATAS QUARTILE
    # ======================================

    batas_rendah = df["sasaran_produksi"].quantile(0.33)
    batas_sedang = df["sasaran_produksi"].quantile(0.66)

    # ======================================
    # FUNGSI PEMBUAT LABEL
    # ======================================

    def tentukan_prioritas(produksi):

        if produksi <= batas_rendah:
            return "Rendah"

        elif produksi <= batas_sedang:
            return "Sedang"

        else:
            return "Tinggi"

    # ======================================
    # MEMBUAT LABEL
    # ======================================

    df["prioritas"] = df["sasaran_produksi"].apply(tentukan_prioritas)

    return df