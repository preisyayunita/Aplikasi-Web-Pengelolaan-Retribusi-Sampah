<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKecamatan extends Model
{
    protected $table            = 'tbl_kecamatan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_kecamatan'];

    public function getCamat()
    {
        return $this->distinct()->select('nama_kecamatan')->findAll();
    }
}
