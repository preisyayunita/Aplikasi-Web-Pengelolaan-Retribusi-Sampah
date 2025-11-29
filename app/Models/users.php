<?php

namespace App\Models;

use CodeIgniter\Model;

class users extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nama_lengkap', 'email', 'password', 'role', 'lokasi_bertugas'];

    public function savePetugas($data)
    {
        // Hash password sebelum disimpan
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $this->insert($data);
    }
}
