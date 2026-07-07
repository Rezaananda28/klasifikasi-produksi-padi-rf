<?php

namespace App\Models;

use CodeIgniter\Model;

class DataProduksiModel extends Model
{
    protected $table = 'data_produksi';

    protected $primaryKey = 'id_produksi';

    protected $returnType = 'array';

    protected $allowedFields = [
        'wilayah',
        'bulan',
        'tahun',
        'jenis_padi',
        'luas_lahan',
        'sasaran_tanam',
        'sasaran_panen',
        'sasaran_produksi',
        'produktivitas'
    ];

    protected $useTimestamps = false;
}
