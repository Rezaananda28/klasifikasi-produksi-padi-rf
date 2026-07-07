<?php

namespace App\Controllers;

use App\Models\DataProduksiModel;

class DataProduksi extends BaseController
{
    protected $dataProduksiModel;

    public function __construct()
    {
        $this->dataProduksiModel = new DataProduksiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Produksi',
            'data_produksi' => $this->dataProduksiModel->findAll()
        ];

        return view('data-produksi/index', $data);
    }

    public function create()
    {
        return redirect()->to('/data-produksi');
    }

    public function store()
    {
        $luas = (float) $this->request->getPost('luas_lahan');
        $produksi = (float) $this->request->getPost('sasaran_produksi');

        $produktivitas = 0;

        if ($luas > 0) {
            $produktivitas = $produksi / $luas;
        }

        $this->dataProduksiModel->save([
            'wilayah' => $this->request->getPost('wilayah'),
            'bulan' => $this->request->getPost('bulan'),
            'tahun' => $this->request->getPost('tahun'),
            'jenis_padi' => $this->request->getPost('jenis_padi'),
            'luas_lahan' => $luas,
            'sasaran_tanam' => $this->request->getPost('sasaran_tanam'),
            'sasaran_panen' => $this->request->getPost('sasaran_panen'),
            'sasaran_produksi' => $produksi,
            'produktivitas' => $produktivitas,
        ]);

        return redirect()->to('/data-produksi')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        return view('data-produksi/edit', [
            'title' => 'Edit Data Produksi',
            'data' => $this->dataProduksiModel->find($id)
        ]);
    }

    // UPDATE
    public function update($id)
    {
        $luas = (float) $this->request->getPost('luas_lahan');
        $produksi = (float) $this->request->getPost('sasaran_produksi');

        // HITUNG ULANG PRODUKTIVITAS
        $produktivitas = 0;

        if ($luas > 0) {
            $produktivitas = $produksi / $luas;
        }

        $this->dataProduksiModel->update($id, [
            'wilayah' => $this->request->getPost('wilayah'),
            'bulan' => $this->request->getPost('bulan'),
            'tahun' => $this->request->getPost('tahun'),
            'jenis_padi' => $this->request->getPost('jenis_padi'),
            'luas_lahan' => $luas,
            'sasaran_tanam' => $this->request->getPost('sasaran_tanam'),
            'sasaran_panen' => $this->request->getPost('sasaran_panen'),
            'sasaran_produksi' => $produksi,
            'produktivitas' => $produktivitas,
        ]);

        return redirect()->to('/data-produksi')->with('success', 'Data berhasil diupdate');
    }

    // DELETE
    public function delete($id)
    {
        $this->dataProduksiModel->delete($id);

        return redirect()->to('/data-produksi')->with('success', 'Data berhasil dihapus');
    }
}
