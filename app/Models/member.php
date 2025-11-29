<?php

namespace App\Models;

use CodeIgniter\Model;

class member extends Model
{
    protected $table            = 'member_pelanggan';
    protected $primaryKey       = 'id';
    protected $allowedFields = ['user_id', 'validasi', 'nama', 'alamat', 'kecamatan', 'desa', 'telp', 'ktp', 'pbb', 'objek_retribusi', 'kat_retribusi', 'biaya_retribusi'];

    public function getAllPelanggan()
    {
        return $this->findAll();
    }

    public function getPelangganById($id)
    {
        return $this->find($id);
    }
}
