<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDesa extends Model
{
    protected $table            = 'tbl_desa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_kecamatan', 'nama_desa'];
}
