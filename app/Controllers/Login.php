<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\member;
use App\Models\users;

class Login extends BaseController
{
    public function index()
    {
        session();
        $data = [
            'title' => 'Login',
            'validation' => \config\Services::validation()
        ];
        return view('login/index', $data);
    }

    public function proses_login()
    {
        if (!$this->validate([
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email tidak boleh kosong'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong'
                ]
            ]
        ])) {
            $val = \Config\Services::validation();
            return redirect()->to('/')->withInput()->with('validation', $val);
        }
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = new users();
        $users = $user->where('email', $email)->first();

        if ($users && password_verify($password, $users['password'])) {
            // Jika login berhasil, simpan data pengguna ke sesi (session)
            session()->set('user_id', $users['id']);
            session()->set('role', $users['role']);
            session()->set('nama', $users['nama_lengkap']);

            $role = $users['role'];

            switch ($role) {
                case 'admin':
                    return redirect()->to('/admin');
                    break;
                case 'petugas':
                    session()->set('lokasi_bertugas', $users['lokasi_bertugas']);
                    return redirect()->to('/petugas/bukti_bayar');
                    break;
                case 'pelanggan':
                    // Cek apakah user sudah mengisi form tambah member
                    $memberModel = new member();
                    $member = $memberModel->where('user_id', $users['id'])->first();

                    if ($member) {
                        // Cek nilai dari field validasi
                        if ($member['validasi'] == 1) {
                            // Jika validasi bernilai 1, arahkan ke halaman pelanggan
                            return redirect()->to('/pelanggan/history_pelanggan');
                        } else {
                            // Jika validasi bernilai 0, arahkan ke waiting_room
                            return redirect()->to('/pelanggan/waiting_room');
                        }
                    } else {
                        // Jika belum mengisi form tambah member, alihkan ke form tambah member
                        return redirect()->to('/pelanggan/tambah_member');
                    }
                    break;
                default:
                    // Jika peran tidak dikenali, Anda dapat mengarahkan ke halaman beranda umum atau menampilkan pesan kesalahan.
                    return redirect()->to('/');
                    break;
            }
        } else {
            // Jika login gagal, tampilkan pesan error
            session()->setFlashdata('error', 'Email atau Password yang anda masukkan salah');

            return redirect()->to('/login/index');
        }
    }

    public function lupaPassword()
    {
        return view('login/lupa_password');
    }

    public function processForgotPassword()
    {
        $email = $this->request->getPost('email');
        $userModel = new users();
        $user = $userModel->where('email', $email)->first();

        if ($user) {
            // Buat token untuk reset password
            $token = bin2hex(random_bytes(50));

            // Simpan token dan email pengguna di database (misalnya di tabel `password_resets`)
            $db = \Config\Database::connect();
            $db->table('reset_password')->insert(['email' => $email, 'token' => $token]);

            // Buat tautan reset password
            $resetLink = base_url("login/reset_password/$token");

            // Kirim email ke pengguna
            $emailService = \Config\Services::email();
            $emailService->setFrom('dlhkabupatenminahasa@gmail.com', 'Retribusi Sampah Kab. Minahasa');  // Atur alamat pengirim
            $emailService->setTo($email);                    // Email tujuan pengguna
            $emailService->setSubject('Reset Password');
            $emailService->setMessage("Klik tautan ini untuk mereset password Anda: $resetLink");

            if ($emailService->send()) {
                session()->setFlashdata('success', 'Link reset password telah dikirim ke email Anda.');
            } else {
                session()->setFlashdata('error', 'Gagal mengirim email reset password. ' . $emailService->printDebugger());
            }
        }

        return redirect()->to('login/lupa_password');
    }

    // Untuk menampilkan halaman reset password dengan token
    // Menampilkan halaman reset password dengan token
    public function resetPassword($token)
    {
        // Cek apakah token ada di database
        $db = \Config\Database::connect();
        $resetPasswordModel = $db->table('reset_password');
        $resetRequest = $resetPasswordModel->where('token', $token)->get()->getRow();  // Ubah disini

        if ($resetRequest) {
            // Tampilkan form untuk reset password
            return view('login/reset_password', ['token' => $token]);
        } else {
            // Token tidak valid
            session()->setFlashdata('pesan', 'Token reset password tidak valid.');
            return redirect()->to('/login/lupa_password');
        }
    }

    public function processResetPassword()
    {
        // Ambil data token dan password dari form
        $token = $this->request->getPost('token');
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirm_password');  // Misalnya, password konfirmasi

        // Cek apakah password dan konfirmasi password cocok
        if ($password !== $confirmPassword) {
            session()->setFlashdata('pesan', 'Password dan konfirmasi password tidak cocok.');
            return redirect()->to("/login/reset_password/$token");
        }

        // Cek token di database
        $db = \Config\Database::connect();
        $resetPasswordModel = $db->table('reset_password');
        $resetRequest = $resetPasswordModel->where('token', $token)->get()->getRow();

        if ($resetRequest) {
            // Token valid, lakukan update password di tabel users
            $userModel = new users();

            // Password baru akan di-hash sebelum disimpan
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Update password di tabel users
            $userModel->set('password', $hashedPassword)
                ->where('email', $resetRequest->email)
                ->update();

            // Hapus token setelah reset berhasil
            $resetPasswordModel->delete(['token' => $token]);

            // Menambahkan pesan sukses sebelum redirect
            session()->setFlashdata('success', 'Password berhasil diubah. Silakan login dengan password baru.');

            // Redirect ke halaman login
            return redirect()->to('/login');
        } else {
            // Token tidak valid
            session()->setFlashdata('error', 'Token reset password tidak valid.');
            return redirect()->to('/login');
        }
    }
}
