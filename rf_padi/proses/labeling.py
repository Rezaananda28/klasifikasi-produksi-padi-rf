# ==========================================
# FUNGSI LABELING DATA
# ==========================================

def labeling(df):

    print("===================================")
    print("TAHAP 3 - LABELING DATA")
    print("===================================\n")

    # ======================================
    # MENENTUKAN BATAS QUARTILE
    # ======================================

    batas_rendah = df["sasaran_produksi"].quantile(0.33)

    batas_sedang = df["sasaran_produksi"].quantile(0.66)

    print("Batas Prioritas")

    print("-----------------------------")

    print(f"Rendah : <= {round(batas_rendah,2)}")

    print(f"Sedang : <= {round(batas_sedang,2)}")

    print(f"Tinggi : >  {round(batas_sedang,2)}")

    # ======================================
    # FUNGSI LABEL
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

    # ======================================
    # DISTRIBUSI LABEL
    # ======================================

    print("\n===================================")
    print("DISTRIBUSI LABEL")
    print("===================================\n")

    distribusi = df["prioritas"].value_counts()

    for label, jumlah in distribusi.items():

        print(f"{label:10s}: {jumlah} data")

    # ======================================
    # HASIL LABELING
    # ======================================

    print("\n===================================")
    print("HASIL LABELING")
    print("===================================\n")

    print(

        df[
            [
                "wilayah",
                "jenis_padi",
                "sasaran_produksi",
                "prioritas"
            ]
        ]

    )

    print("\n===================================")
    print("LABELING SELESAI")
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

    df = ambil_data()

    df = preprocessing(df)

    df = labeling(df)