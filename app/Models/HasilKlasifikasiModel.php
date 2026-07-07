<?php

namespace App\Models;

use CodeIgniter\Model;

class HasilKlasifikasiModel extends Model
{
    protected $table = 'hasil_klasifikasi';

    protected $primaryKey = 'id_hasil';

    protected $returnType = 'array';

    protected $allowedFields = [
        'wilayah',
        'jenis_padi',
        'prioritas'
    ];

    protected $useTimestamps = false;
}
