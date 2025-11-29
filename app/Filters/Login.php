<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Login implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Periksa apakah pengguna telah login
        if (!session()->get('user_id')) {
            // Jika tidak ada sesi user_id, arahkan ke halaman login
            return redirect()->to(base_url('/'));
        }

        // Ambil peran (role) pengguna dari sesi
        $role = session()->get('role');

        // Ambil nama route saat ini
        // $currentRoute = $request->uri->getSegment(1);
        $currentRoute = $request->getUri()->getSegment(1);

        // Cek apakah peran pengguna memiliki hak akses untuk halaman yang diakses
        if (!$this->checkRoleAccess($role, $currentRoute)) {
            // Jika tidak memiliki hak akses, arahkan ke halaman beranda umum atau tampilkan pesan kesalahan.
            return redirect()->to('/' . $role);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Kosongkan saja, tidak ada tindakan setelah.
    }

    // Fungsi ini memeriksa hak akses pengguna untuk halaman yang diakses
    protected function checkRoleAccess($role, $currentRoute)
    {
        // Definisikan akses yang diizinkan untuk masing-masing peran
        $allowedRoutes = [
            'admin' => ['admin', 'admin/add_kategori', 'admin/store', 'admin/edit_kategori/(:num)', 'admin/update(:any)', 'admin/destroy(:segment)', 'admin/add_pelanggan', 'admin/store_pelanggan', 'admin/edit_pelanggan/(:num)', 'admin/update_pelanggan(:any)', 'admin/destroy_pelanggan(:segment)'], //admin/farmasi kayanya tidak memberikan efek apa apa
            'petugas' => ['petugas'],
            'pelanggan' => ['pelanggan'], //pendaftaran/chart kayanya tidak memberikan efek apa apa
        ];

        // Periksa apakah route saat ini diperbolehkan untuk peran pengguna
        return in_array($currentRoute, $allowedRoutes[$role]);
    }
}
