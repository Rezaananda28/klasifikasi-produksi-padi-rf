<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatKlasifikasiModel extends Model
{
    protected $table = 'riwayat_klasifikasi';

    protected $primaryKey = 'id_riwayat';

    protected $returnType = 'array';

    protected $allowedFields = [
        'jumlah_data',
        'akurasi',
        'terakhir_diperbarui'
    ];

    protected $useTimestamps = false;
}
