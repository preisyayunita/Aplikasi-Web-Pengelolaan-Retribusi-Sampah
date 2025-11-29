<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKategori extends Model
{
    protected $table            = 'kategori';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['kategori_retribusi', 'nominal', 'keterangan'];

    // Fungsi untuk mendapatkan harga berdasarkan kategori
    public function getHargaByKategori($kategori)
    {
        return $this->where('kategori_retribusi', $kategori)->first();  // Ambil satu baris data
    }
}
