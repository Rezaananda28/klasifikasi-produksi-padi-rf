<?php

namespace App\Controllers;

use App\Models\DataProduksiModel;
use App\Models\HasilKlasifikasiModel;

class Dashboard extends BaseController
{
    protected $db;
    protected $hasilModel;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->hasilModel = new HasilKlasifikasiModel();
    }

    public function index()
    {
        // ==================================================
        // DATA PRODUKSI (TOTAL PER WILAYAH & JENIS PADI)
        // ==================================================

        $produksi = $this->db->query("
            SELECT
                wilayah,
                jenis_padi,
                MAX(luas_lahan) AS luas_lahan,
                SUM(sasaran_tanam) AS sasaran_tanam,
                SUM(sasaran_panen) AS sasaran_panen,
                SUM(sasaran_produksi) AS sasaran_produksi,
                AVG(produktivitas) AS produktivitas
            FROM data_produksi
            GROUP BY wilayah, jenis_padi
            ORDER BY wilayah ASC
        ")->getResultArray();

        // ==================================================
        // HASIL KLASIFIKASI
        // ==================================================

        $hasil = $this->hasilModel
            ->orderBy('wilayah', 'ASC')
            ->findAll();

        // ==================================================
        // STATISTIK
        // ==================================================

        $jumlahDataset = count($produksi);

        $jumlahWilayah = count(array_unique(array_column($produksi, 'wilayah')));

        $jumlahJenisPadi = count(array_unique(array_column($produksi, 'jenis_padi')));

        $jumlahKelas = count(array_unique(array_column($hasil, 'prioritas')));

        $listWilayah = implode(", ", array_unique(array_column($produksi, 'wilayah')));

        // ==================================================
        // INSIGHT PRODUKSI
        // ==================================================

        $tertinggi = null;
        $terendah = null;

        if (!empty($produksi)) {

            $tertinggi = $produksi[0];
            $terendah = $produksi[0];

            foreach ($produksi as $row) {

                if ($row['sasaran_produksi'] > $tertinggi['sasaran_produksi']) {
                    $tertinggi = $row;
                }

                if ($row['sasaran_produksi'] < $terendah['sasaran_produksi']) {
                    $terendah = $row;
                }
            }
        }

        // ==================================================
        // JENIS PADI PALING DOMINAN
        // ==================================================

        $jenis = [];

        foreach ($produksi as $row) {

            if (!isset($jenis[$row['jenis_padi']])) {
                $jenis[$row['jenis_padi']] = 0;
            }

            $jenis[$row['jenis_padi']] += $row['sasaran_produksi'];
        }

        arsort($jenis);

        $jenisDominan = key($jenis);

        // ==========================================
        // DATA CHART PRODUKSI PER WILAYAH
        // ==========================================

        $labelWilayah = [];
        $dataWilayah = [];

        foreach ($produksi as $row) {

            if (!isset($dataWilayah[$row['wilayah']])) {
                $dataWilayah[$row['wilayah']] = 0;
            }

            $dataWilayah[$row['wilayah']] += $row['sasaran_produksi'];
        }

        $labelWilayah = array_keys($dataWilayah);
        $dataWilayah = array_values($dataWilayah);

        // ==========================================
        // DATA CHART JENIS PADI
        // ==========================================

        $labelJenis = [];
        $dataJenis = [];

        foreach ($produksi as $row) {

            if (!isset($dataJenis[$row['jenis_padi']])) {
                $dataJenis[$row['jenis_padi']] = 0;
            }

            $dataJenis[$row['jenis_padi']] += $row['sasaran_produksi'];
        }

        $labelJenis = array_keys($dataJenis);
        $dataJenis = array_values($dataJenis);

        // ==================================================
        // DATA VIEW
        // ==================================================

        $data = [

            'title' => 'Dashboard',

            'produksi' => $produksi,

            'hasil' => $hasil,

            'jumlahDataset' => $jumlahDataset,

            'jumlahWilayah' => $jumlahWilayah,

            'jumlahJenisPadi' => $jumlahJenisPadi,

            'jumlahKelas' => $jumlahKelas,

            'listWilayah' => $listWilayah,

            'tertinggi' => $tertinggi,

            'terendah' => $terendah,
            'chartWilayahLabel' => $labelWilayah,
            'chartWilayahData'  => $dataWilayah,

            'chartJenisLabel'   => $labelJenis,
            'chartJenisData'    => $dataJenis,

            'jenisDominan' => $jenisDominan,

            'akurasi' => 95


        ];

        return view('dashboard/index', $data);
    }
}
