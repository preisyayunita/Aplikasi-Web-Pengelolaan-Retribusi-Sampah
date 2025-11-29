<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\member;
use App\Models\ModelKecamatan;
use App\Models\ModelDesa;
use App\Models\ModelKategori;
use App\Models\ModelPelanggan;
use App\Models\users;

class Pelanggan extends BaseController
{
    public function tambah_member()
    {
        $camat = new ModelKecamatan();
        $kategoriModel = new ModelKategori();

        // Ambil data dari database
        $kecamatan = $camat->findAll();
        $kategori = $kategoriModel->findAll();

        // Gabungkan data dalam satu array
        $data = [
            'kecamatan' => $kecamatan,
            'kategori' => $kategori,
            'title' => 'Tambah Pelanggan'
        ];

        // Kirim data ke view
        return view('pelanggan/tambah_member', $data);
    }

    public function history_pelanggan()
    {
        // Ambil user_id dari session
        $userId = session()->get('user_id');
        $nama = session()->get('nama');

        $elanggan = new ModelPelanggan();
        $langgan = $elanggan->where('user_id', $userId)->findAll();

        // Array bulan dalam bahasa Indonesia
        $bulanIndo = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember',
        ];

        // Format tanggal menjadi bulan
        foreach ($langgan as &$pelanggan) {
            $tanggal = $pelanggan['tanggal'];
            $bulanInggris = date('F', strtotime($tanggal));
            $tahun = date('Y', strtotime($tanggal));
            $pelanggan['bulan_tahun'] = $bulanIndo[$bulanInggris] . ' ' . $tahun;
        }

        return view('pelanggan/history', ['user' => $nama, 'pelanggan' => $langgan, 'title' => 'Riwayat Pembayaran']);
    }

    public function waiting_room()
    {
        return view('pelanggan/waiting_room');
    }

    public function proses_tambah_member()
    {
        // Ambil user_id dari session
        $userId = session()->get('user_id');

        $nama = $this->request->getVar('nama');
        $alamat = $this->request->getVar('alamat');
        $kecamatan = $this->request->getVar('kecamatan');
        $desa = $this->request->getVar('desa');
        $telp = $this->request->getVar('telp');
        $objek_retribusi = $this->request->getVar('kategori_retribusi'); // Memastikan nama sesuai dengan form
        $kat_retribusi = $this->request->getVar('keterangan');
        $biaya_retribusi = (int)$this->request->getVar('nominal');

        // Pastikan semua data yang diperlukan diisi
        if (empty($nama) || empty($alamat) || empty($kecamatan) || empty($desa) || empty($telp) || empty($objek_retribusi) || empty($kat_retribusi) || empty($biaya_retribusi)) {
            // Tangani error jika data tidak lengkap
            log_message('error', 'Data tidak lengkap: ' . json_encode(compact('nama', 'alamat', 'kecamatan', 'desa', 'telp', 'objek_retribusi', 'kat_retribusi', 'biaya_retribusi')));
            return redirect()->back()->withInput()->with('errors', 'Semua field harus diisi.');
        }

        $data = [
            "user_id" => $userId,
            "nama" => $nama,
            "alamat" => $alamat,
            "kecamatan" => $kecamatan,
            "desa" => $desa,
            "telp" => $telp,
            "objek_retribusi" => $objek_retribusi,
            "kat_retribusi" => $kat_retribusi,
            "biaya_retribusi" => $biaya_retribusi
        ];
        // $member = new member();
        // $member->save($data);
        // return redirect()->to('pelanggan/waiting_room');
        $member = new Member(); // Pastikan ini sesuai dengan nama model Anda
        if (!$member->save($data)) {
            // Tangani error jika penyimpanan gagal
            $errors = $member->errors();
            log_message('error', 'Error saving data: ' . json_encode($errors));
            return redirect()->back()->withInput()->with('errors', 'Gagal menyimpan data.');
        }

        return redirect()->to('pelanggan/waiting_room')->with('success', 'Data berhasil disimpan.');
    }

    public function getDesaByKecamatan()
    {
        if ($this->request->isAJAX()) {
            $kecamatanId = $this->request->getPost('id_kecamatan');

            // Ambil data desa dari model
            $desaModel = new ModelDesa();
            $desaList = $desaModel->where('nama_kecamatan', $kecamatanId)->findAll();

            // Kirim sebagai JSON
            return $this->response->setJSON($desaList);
        }
    }


    public function data_pribadi()
    {
        // Ambil user_id dari session
        $userId = session()->get('user_id');
        $nama = session()->get('nama');

        $member = new member();

        // Ambil data user berdasarkan user_id
        $mem = $member->where('user_id', $userId)->first();

        return view('pelanggan/data_pribadi', ['member' => $mem, 'user' => $nama, 'title' => 'Data Pribadi']);
    }

    public function logout()
    {
        // Hapus semua data sesi
        session()->destroy();

        // Redirect ke halaman login setelah logout
        return redirect()->to(base_url('/'));
    }
}
