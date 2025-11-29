<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\ModelPelanggan;

class Petugas extends BaseController
{
    protected $buktiModel;

    public function bukti_bayar()
    {
        $nama = session()->get('nama');
        $tugas = session()->get('lokasi_bertugas');


        $pelanggan = new ModelPelanggan();
        $langgan = $pelanggan->where('kecamatan', $tugas)->findAll();

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

        return view('petugas/bukti_bayar', ['pelanggan' => $langgan, 'user' => $nama, 'title' => 'Unggah Bukti Pembayaran', 'lokasi' => $tugas]);
    }

    public function addBukti($id = null)
    { {
            if ($id != null) {
                //echo "lanjut edit";
                $query = $this->db->table('data_pelanggan')->getWhere(['id' => $id]);
                if ($query->resultID->num_rows > 0) {
                    $nama = session()->get('nama');
                    $tugas = $query->getRow();
                    $data = [
                        'users' => $tugas,
                        'user' => $nama,
                        'title' => 'unggah bukti'
                    ];
                    return view('petugas/add_bukti_bayar', $data);
                } else {
                    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
                }
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        }
    }

    public function prosesaddBukti($id)
    {
        $bukti = $this->request->getFile('bukti_foto');

        $pelanggan = $this->db->table('data_pelanggan')->where('id', $id)->get()->getRow();

        // Cek dan hapus file lama jika ada
        if ($pelanggan && !empty($pelanggan->foto_bukti)) {
            $oldFilePath = 'img/bukti_bayar/' . $pelanggan->foto_bukti;
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath); // Hapus file lama
            }
        }

        //pindahkan file ke folder img
        $bukti->move('img/bukti_bayar');

        //ambil nama file
        $bukti_bayar = $bukti->getName();

        $data = [
            'foto_bukti' => $bukti_bayar
        ];

        unset($data['_method']);
        $this->db->table('data_pelanggan')->where(['id' => $id])->update($data);
        return redirect()->to('petugas/bukti_bayar')->with('success', 'Bukti Pembayaran Berhasil di Tambahkan.');
    }

    public function logout()
    {
        // Hapus semua data sesi
        session()->destroy();

        // Redirect ke halaman login setelah logout
        return redirect()->to(base_url('/'));
    }
}
