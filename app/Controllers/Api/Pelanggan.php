<?php

namespace App\Controllers\Api;

use App\Models\ModelKategori;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Pelanggan extends ResourceController
{
    use ResponseTrait;

    public function show($id = null)
    {
        // Inisialisasi model
        $model = new ModelKategori();

        // Cari data berdasarkan ID
        $data = $model->find($id);

        // Jika data tidak ditemukan, berikan respon error 404
        if (!$data) {
            return $this->failNotFound('Kategori tidak ditemukan');
        }

        // Jika data ditemukan, kembalikan hanya data yang dibutuhkan (keterangan dan nominal)
        return $this->respond($data, 200);  // Kembalikan seluruh data sebagai JSON
    }
}
