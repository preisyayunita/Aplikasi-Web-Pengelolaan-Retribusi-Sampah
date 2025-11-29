<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLokasi extends Model
{
    protected $table            = 'lokasi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['desa_kel', 'kecamatan', 'kode_petugas'];
}
