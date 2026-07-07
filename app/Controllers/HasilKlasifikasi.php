<?php

namespace App\Controllers;

use App\Models\HasilKlasifikasiModel;

class HasilKlasifikasi extends BaseController
{
    protected $hasilModel;

    public function __construct()
    {
        $this->hasilModel = new HasilKlasifikasiModel();
    }

    public function index()
    {
        // Ambil seluruh hasil klasifikasi
        $hasil = $this->hasilModel->findAll();

        // Statistik
        $jumlahDataset = count($hasil);

        $jumlahKelas = count(
            array_unique(
                array_column($hasil, 'prioritas')
            )
        );

        $jumlahWilayah = count(
            array_unique(
                array_column($hasil, 'wilayah')
            )
        );

        $listWilayah = implode(
            ", ",
            array_unique(
                array_column($hasil, 'wilayah')
            )
        );

        $data = [

            'title' => 'Klasifikasi Prioritas Produksi',

            'hasil' => $hasil,

            'jumlahDataset' => $jumlahDataset,

            'jumlahKelas' => $jumlahKelas,

            'jumlahWilayah' => $jumlahWilayah,

            'listWilayah' => $listWilayah,

            // nanti bisa diganti otomatis jika ingin membaca dari model
            'akurasi' => '95%'

        ];

        return view('hasil-klasifikasi/index', $data);
    }

    public function proses()
    {
        // Lokasi python
        $python = 'python';

        // Lokasi predict.py
        $script = FCPATH . '../rf_padi/predict.py';

        // Jalankan Python
        exec("$python \"$script\"", $output, $status);

        if ($status != 0) {

            return redirect()->back()->with(

                'error',

                'Proses klasifikasi gagal dijalankan.'

            );
        }

        return redirect()->to('/klasifikasi')->with(

            'success',

            'Klasifikasi berhasil dilakukan.'

        );
    }
}
