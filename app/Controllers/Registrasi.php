<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\users;

class Registrasi extends BaseController
{
    public function register()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('registrasi/index', $data);
    }

    public function registerProcess()
    {
        if (!$this->validate([
            'nama_lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama lengkap tidak boleh kosong'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email tidak boleh kosong'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'password tidak boleh kosong'
                ]
            ]
        ])) {
            $val = \Config\Services::validation();
            return redirect()->to('/registrasi/index')->withInput()->with('validation', $val);
        }

        $userModel = new users();

        $nama_lengkap = $this->request->getPost('nama_lengkap');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $role = 'pelanggan';

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Simpan data ke database
        $data = [
            'nama_lengkap' => $nama_lengkap,
            'email'    => $email,
            'password' => $hashedPassword,
            'role' => $role
        ];

        $userModel->save($data);

        return redirect()->to('/');
    }
}
