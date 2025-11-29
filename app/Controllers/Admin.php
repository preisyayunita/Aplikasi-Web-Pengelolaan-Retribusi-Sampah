<?php

namespace App\Controllers;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Html;
use Mpdf\Mpdf;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;

use App\Models\ModelKategori;
use App\Models\ModelPelanggan;
use App\Models\member;
use App\Models\users;
use App\Models\SmsModel;
use App\Models\ModelKecamatan;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->kategori = new ModelKategori();
        $this->pelanggan = new ModelPelanggan();
        $this->users = new users();
        $this->smsModel = new SmsModel();
        // $this->smsRiwayat = new SmsModel();
    }

    public function index()
    {
        // Ambil user_id dari session
        $nama = session()->get('nama');
        // Menghitung jumlah data dalam tabel 'users'
        $jumlah = $this->db->table('users')->where('role', 'pelanggan')->countAllResults();

        $pelanggan = new ModelPelanggan();
        $langgan = $pelanggan
            ->select("DATE_FORMAT(tanggal, '%M %Y') as bulan, SUM(tarif_bulanan) as total_pendapatan")
            ->groupBy("DATE_FORMAT(tanggal, '%Y-%m')")
            ->orderBy("DATE_FORMAT(tanggal, '%Y-%m')")
            ->where('validasi', '1')
            ->findAll();

        // Pisahkan label dan data
        $labels = [];
        $data = [];

        foreach ($langgan as $row) {
            $labels[] = $row['bulan']; // Nama bulan (contoh: Januari)
            $data[] = $row['total_pendapatan']; // Total pendapatan
        }
        return view('admin/home_admin', ['user' => $nama, 'title' => 'Dashboard', 'jumlah' => $jumlah, 'labels' => json_encode($labels), 'data' => json_encode($data)]);
    }

    // public function akun_petugas()
    // {
    //     // Ambil user_id dari session
    //     $userId = session()->get('user_id');

    //     $user = new users();
    //     $use = $user->where('id', $userId)->first();
    //     return view('admin/akun_petugas', ['user' => $nama]);
    // }
    // public function akun_pelanggan()
    // {
    //     // Ambil user_id dari session
    //     $userId = session()->get('user_id');

    //     $user = new users();
    //     $use = $user->where('id', $userId)->first();
    //     return view('admin/akun_pelanggan', ['user' => $nama]);
    // }

    public function kategori()
    {
        // Ambil user_id dari session
        $nama = session()->get('nama');

        $builder = $this->db->table('kategori');
        $query = $builder->get();


        $kate = $query->getResult();

        $data = [
            'kategori' => $kate,
            'user' => $nama,
            'title' => 'Kategori Retribusi'
        ];

        return view('admin/kategori', $data);
    }

    public function create()
    {
        // Ambil user_id dari session
        $nama = session()->get('nama');
        return view('admin/add_kategori', ['user' => $nama, 'title' => 'Tambah Kategori']);
    }

    public function store()
    {
        $data = $this->request->getPost();

        $this->db->table('kategori')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('admin/kategori'))->with('success', 'Data Berhasil Disimpan!');
        }
    }

    public function edit($id = null)
    {
        if ($id != null) {
            //echo "lanjut edit";
            $query = $this->db->table('kategori')->getWhere(['id' => $id]);
            if ($query->resultID->num_rows > 0) {
                $nama = session()->get('nama');
                $kate = $query->getRow();
                $data = [
                    'kategori' => $kate,
                    'user' => $nama,
                    'title' => 'Edit Kategori'
                ];
                return view('admin/edit_kategori', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        unset($data['_method']);
        $this->db->table('kategori')->where(['id' => $id])->update($data);
        return redirect()->to(site_url('admin/kategori'))->with('success', 'Data Berhasil Disimpan!');
    }

    public function destroy($id)
    {
        $this->db->table('kategori')->where(['id' => $id])->delete();
        return redirect()->to(site_url('admin/kategori'))->with('success', 'Data Berhasil Dihapus!');
    }

    // public function pelanggan()
    // {
    //     $builder = $this->db->table('pelanggan');
    //     $query = $builder->get();

    //     $data['user'] = session()->get('nama');
    //     $data['pelanggan'] = $query->getResult();
    //     $data['title'] = 'Pelanggan';

    //     return view('admin/pelanggan', $data);
    // }

    // public function create_pelanggan()
    // {
    //     // Ambil user_id dari session
    //     $nama = session()->get('nama');
    //     return view('admin/add_pelanggan', ['user' => $nama, 'title' => 'Tambah Pelanggan']);
    // }

    // public function store_pelanggan()
    // {
    //     $data = $this->request->getPost();

    //     $this->db->table('pelanggan')->insert($data);

    //     if ($this->db->affectedRows() > 0) {
    //         return redirect()->to(site_url('admin/pelanggan'))->with('success', 'Data Berhasil Disimpan!');
    //     }
    // }

    // public function edit_pelanggan($id = null)
    // {
    //     if ($id != null) {
    //         //echo "lanjut edit";
    //         $query = $this->db->table('pelanggan')->getWhere(['id' => $id]);
    //         if ($query->resultID->num_rows > 0) {
    //             $data['user'] = session()->get('nama');
    //             $data['title'] = 'Edit Pelanggan';
    //             $data['pelanggan'] = $query->getRow();
    //             // var_dump($data['pelanggan']);
    //             // die();
    //             return view('admin/edit_pelanggan', $data);
    //         } else {
    //             throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    //         }
    //     } else {
    //         throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    //     }
    // }

    // public function ubahpelanggan($id)
    // {
    //     $data = $this->request->getPost();
    //     unset($data['_method']);
    //     $this->db->table('pelanggan')->where(['id' => $id])->update($data);
    //     return redirect()->to(site_url('admin/pelanggan'))->with('success', 'Data Berhasil Disimpan!');
    // }

    // public function destroy_pelanggan($id)
    // {
    //     $this->db->table('pelanggan')->where(['id' => $id])->delete();
    //     return redirect()->to(site_url('admin/pelanggan'))->with('success', 'Data Berhasil Dihapus!');
    // }

    // VALIDASI BERKAS

    public function validasi_berkas()
    {
        // Ambil user_id dari session
        $nama = session()->get('nama');
        $member = new member();
        $mem = $member->findAll();

        return view('admin/validasi_berkas', ['member' => $mem, 'user' => $nama, 'title' => 'Validasi Berkas']);
    }

    public function proses_validasi($id)
    {
        $member = new member();

        $data = [
            "validasi" => "1"
        ];

        $member->update($id, $data);

        return redirect()->to(site_url('admin/validasi_berkas'));
    }

    public function detail_member($id)
    {
        // Ambil user_id dari session
        $nama = session()->get('nama');

        $member = new member();
        // Ambil data berdasarkan ID
        $mem = $member->where(['id' => $id])->first();

        $data = [
            'member' => $mem,
            'user' => $nama,
            'title' => 'Detail Validasi'
        ];

        return view('admin/detail_validasi', $data);
    }

    // VALIDASI BUKTI PEMBAYARAN

    public function validasi_buktiBayar()
    {
        // Ambil user_id dari session
        $nama = session()->get('nama');
        $elanggan = new ModelPelanggan();
        $langgan = $elanggan->findAll();

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

        return view('admin/validasi_buktiBayar', ['pelanggan' => $langgan, 'user' => $nama, 'title' => 'Validasi Bukti']);
    }

    public function proses_validasi_buktiBayar($id)
    {
        $pelanggan = new ModelPelanggan();

        $data = [
            "validasi" => "1"
        ];

        $pelanggan->update($id, $data);

        session()->setFlashdata('success', 'Data berhasil di validasi');

        return redirect()->to(site_url('admin/validasi_buktiBayar'));
    }

    public function akunPelanggan()
    {
        // Inisialisasi model
        $userModel = new users();

        $user = $userModel->where('role', 'pelanggan')->get()->getResult();

        $nama = session()->get('nama');

        $data = [
            'users' => $user,
            'user' => $nama,
            'title' => 'Akun Pelanggan'
        ];

        // Mengirim data ke view
        return view('admin/akun_pelanggan', $data);
    }

    public function akunPetugas()
    {
        // Inisialisasi model
        $userModel = new users();

        // Mengambil data user dengan role 'pelanggan'
        $user = $userModel->where('role', 'petugas')->get()->getResult();

        $nama = session()->get('nama');

        $data = [
            'users' => $user,
            'user' => $nama,
            'title' => 'Akun Petugas'
        ];

        // Mengirim data ke view
        return view('admin/akun_petugas', $data);
    }

    public function destroy_pelanggan($id)
    {
        $user = new users();
        $member = new member();

        // Dapatkan data user yang akan dihapus untuk referensi
        $datauser = $user->find($id);

        if ($datauser) {
            // Menghapus data dari user
            $user->delete($id);

            // Cari dan hapus data terkait dari member
            $memberId = $this->hapusmemberpelanggan($datauser);
            if ($memberId !== null) {
                $member->delete($memberId);
            }
        }

        return redirect()->to(site_url('admin/akun_pelanggan'))->with('success', 'Data Berhasil Dihapus!');
    }

    private function hapusmemberpelanggan($datauser)
    {
        $member = new \App\Models\member();

        $member = $member->where('user_id', $datauser['id'])->first();

        return $member ? $member['id'] : null;
    }

    public function tambah_petugas()
    {
        // Ambil user_id dari session
        $nama = session()->get('nama');

        $lokasi = new ModelKecamatan();
        $kecamatan = $lokasi->findAll();
        return view('admin/add_akun_petugas', ['user' => $nama, 'title' => 'Tambah Akun Petugas', 'lokasi' => $kecamatan]);
    }

    public function save_petugas()
    {
        // Validasi input
        $this->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'lokasi_bertugas' => 'required',
            'password' => 'required|min_length[6]',
            'confirm_password' => 'required|matches[password]'
        ]);

        // Ambil data dari form
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email' => $this->request->getPost('email'),
            'lokasi_bertugas' => $this->request->getPost('lokasi_bertugas'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Enkripsi password
            'role' => 'petugas'
        ];

        // Simpan data ke database
        $this->users->insert($data);

        return redirect()->to('admin/akun_petugas')->with('success', 'Akun petugas berhasil ditambahkan!');
    }

    public function edit_petugas($id = null)
    {
        if ($id != null) {
            //echo "lanjut edit";
            $query = $this->db->table('users')->getWhere(['id' => $id]);
            if ($query->resultID->num_rows > 0) {
                $nama = session()->get('nama');
                $tugas = $query->getRow();
                $lokasi = new ModelKecamatan();
                $kecamatan = $lokasi->findAll();
                $data = [
                    'users' => $tugas,
                    'user' => $nama,
                    'title' => 'Edit Akun Petugas',
                    'lokasi' => $kecamatan
                ];
                return view('admin/edit_akun_petugas', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function ubah_petugas($id)
    {
        // Ambil data dari form
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email' => $this->request->getPost('email'),
            'lokasi_bertugas' => $this->request->getPost('lokasi_bertugas'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Enkripsi password
        ];
        unset($data['_method']);
        $this->db->table('users')->where(['id' => $id])->update($data);
        return redirect()->to(site_url('admin/akun_petugas'))->with('success', 'Data Berhasil Disimpan!');
    }

    public function destroy_petugas($id)
    {
        $this->db->table('users')->where(['id' => $id])->delete();
        return redirect()->to(site_url('admin/akun_petugas'))->with('success', 'Data Berhasil Dihapus!');
    }

    public function transaksi()
    {
        // Ambil user_id dari session
        $nama = session()->get('nama');

        $pelanggan = new ModelPelanggan();
        $langgan = $pelanggan->findAll();
        $years = $pelanggan->distinctYears();

        $latestDate = $pelanggan->getLatestDate();

        $tahun = date('Y', strtotime($latestDate));
        $bulan = date('m', strtotime($latestDate));

        // Ambil data berdasarkan bulan dan tahun terbaru
        $langgan = $pelanggan->filterByMonthYear($bulan, $tahun);

        return view('admin/transaksi', [
            'pelanggan' => $langgan,
            'years' => $years,
            'user' => $nama,
            'latestYear' => date('Y', strtotime($latestDate)),
            'latestMonth' => date('m', strtotime($latestDate)),
            'title' => 'Transaksi'
        ]);
    }

    public function filterTransaksi()
    {
        $bulan = $this->request->getVar('bulan');
        $tahun = $this->request->getVar('tahun');

        // Ambil user_id dari session
        $nama = session()->get('nama');


        $pelanggan = new ModelPelanggan();
        $years = $pelanggan->distinctYears();

        // Ambil data berdasarkan bulan dan tahun terbaru
        $langgan = $pelanggan->filterByMonthYear($bulan, $tahun);

        return view('admin/transaksi', [
            'pelanggan' => $langgan,
            'years' => $years,
            'user' => $nama,
            'latestYear' => $tahun,
            'latestMonth' => $bulan,
            'title' => 'Transaksi'
        ]);
    }

    ##########################################################
    ###                                                    ###
    ###                    Export                          ###
    ###                                                    ###
    ##########################################################

    public function export_excel()
    {
        $bulan = $this->request->getVar('bulan');
        $tahun = $this->request->getVar('tahun');

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $pelanggan = new ModelPelanggan();

        if ($bulan && $tahun) {
            $langgan = $pelanggan->filterByMonthYear($bulan, $tahun); // Filter data
        } else {
            $langgan = $pelanggan->findAll(); // Jika tidak ada filter, tampilkan semua data
        }

        // Atur style border untuk header tabel
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ];
        $sheet->getStyle('A8:J8')->applyFromArray($styleArray); // Menerapkan border untuk header

        // Menambahkan gaya pada judul
        $sheet->getStyle('A1:J1')->applyFromArray([
            'font' => [
                'bold' => true,
                'size' => 14,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ]);
        $sheet->getStyle('A2:J2')->applyFromArray([
            'font' => [
                'bold' => true,
                'size' => 16,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ]);
        $sheet->getStyle('A3:J3')->applyFromArray([
            'font' => [
                'size' => 9,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ]);
        $sheet->getStyle('A6:J6')->applyFromArray([
            'font' => [
                'bold' => true,
                'size' => 12,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ]);

        // Menambahkan gambar logo
        $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('Logo');
        $drawing->setPath('img/Logo_DLH.png'); // Ganti dengan path gambar logo yang sesuai
        $drawing->setHeight(90); // Atur tinggi gambar
        $drawing->setCoordinates('B1'); // Posisi gambar
        $drawing->setWorksheet($sheet);

        // Menambahkan gambar logo di kanan
        $rightLogo = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $rightLogo->setName('Logo Kanan');
        $rightLogo->setDescription('Logo Kanan');
        $rightLogo->setPath('img/logo_minahasa.png'); // Ganti dengan path gambar logo kanan
        $rightLogo->setHeight(87);
        $rightLogo->setCoordinates('I1');
        $rightLogo->setWorksheet($sheet);

        // Set judul di atas tabel
        $sheet->mergeCells('A1:J1');
        $sheet->setCellValue('A1', 'PEMERINTAH KABUPATEN MINAHASA');
        $sheet->mergeCells('A2:J2');
        $sheet->setCellValue('A2', 'DINAS LINGKUNGAN HIDUP');
        $sheet->mergeCells('A3:J3');
        $sheet->setCellValue('A3', 'Jl. Tumou Tou 11A Kel Sasaran Telp/Fax : (0431) 323688 TONDANO 95615');
        $sheet->mergeCells('A6:J6');
        $sheet->setCellValue('A6', 'DATA LAPORAN RETRIBUSI SAMPAH');

        //underline
        $underlineStyle = [
            'borders' => [
                'bottom' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DOUBLE]
            ]
        ];
        $sheet->mergeCells('A4:J4');
        $sheet->getStyle('A4:J4')->applyFromArray($underlineStyle);

        // Set judul kolom
        $sheet->setCellValue('A8', 'No.');
        $sheet->setCellValue('B8', 'Nama Pelanggan');
        $sheet->setCellValue('C8', 'Desa/Kelurahan');
        $sheet->setCellValue('D8', 'Kecamatan');
        // $sheet->setCellValue('C8', 'Tanggal Bayar');
        $sheet->setCellValue('E8', 'Nama Bidang');
        $sheet->setCellValue('F8', 'Nama Kategori');
        $sheet->setCellValue('G8', 'Bulan');
        $sheet->setCellValue('H8', 'Tahun');
        $sheet->setCellValue('I8', 'Tarif');
        $sheet->setCellValue('J8', 'Status');

        // Style untuk header tabel
        $headerStyle = [
            'font' => [
                'bold' => true,
                'size' => 11,
                'color' => ['argb' => 'FF000000'],
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['argb' => 'FFC0C0C0'], // Latar belakang abu-abu terang
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
            'borders' => [
                'top' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                'bottom' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                'left' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                'right' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
            ],
        ];
        $sheet->getStyle('A8:J8')->applyFromArray($headerStyle);

        // Menyiapkan nama file dengan bulan dan tahun
        $namaBulan = [
            '1' => 'Januari',
            '2' => 'Februari',
            '3' => 'Maret',
            '4' => 'April',
            '5' => 'Mei',
            '6' => 'Juni',
            '7' => 'Juli',
            '8' => 'Agustus',
            '9' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        ];

        $row = 9;
        $no = 1;
        foreach ($langgan as $item) {
            $sheet->setCellValue('A' . $row, $no++);
            $sheet->setCellValue('B' . $row, $item['nama_pelanggan']);
            $sheet->setCellValue('C' . $row, $item['desa']);
            $sheet->setCellValue('D' . $row, $item['kecamatan']);
            $sheet->setCellValue('E' . $row, $item['kategori']);
            $sheet->setCellValue('F' . $row, $item['sub_kategori']);
            $sheet->setCellValue('G' . $row, $namaBulan[$bulan]);
            $sheet->setCellValue('H' . $row, $tahun);
            $sheet->setCellValue('I' . $row, $item['tarif_bulanan']);

            // Set "Status" based on the value in the database
            $status = $item['validasi'] == 1 ? 'Lunas' : 'Belum Lunas';
            $sheet->setCellValue('J' . $row, $status);

            // Menambahkan border untuk setiap baris data
            $sheet->getStyle("A$row:J$row")->applyFromArray($styleArray);
            $row++;
        }

        // Set lebar kolom otomatis
        foreach (range('B', 'J') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        $sheet->getColumnDimension('A')->setWidth(3);

        $namaFile = 'Data_Transaksi_' . ($namaBulan[$bulan] ?? 'Semua_Bulan') . '_' . ($tahun ?? 'Semua_Tahun') . '.xlsx';

        // Kirim header untuk trigger download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $namaFile . '"');
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }
    
    public function export_pdf()
    {
    
    $bulan = $this->request->getVar('bulan');
    $tahun = $this->request->getVar('tahun');    
    
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    
    $pelanggan = new ModelPelanggan();

    if ($bulan && $tahun) {
        $langgan = $pelanggan->filterByMonthYear($bulan, $tahun); // Filter data
    } else {
        $langgan = $pelanggan->findAll(); // Jika tidak ada filter, tampilkan semua data
    }

    // Logo Kiri
    $sheet->mergeCells('B1:B4');
    $logoKiri = new Drawing();
    $logoKiri->setName('Logo Kiri');
    $logoKiri->setPath('img/Logo_DLH.png'); // Ganti dengan path logo kiri
    $logoKiri->setHeight(100);
    $logoKiri->setCoordinates('B1');
    $logoKiri->setWorksheet($sheet);

    // Logo Kanan
    $sheet->mergeCells('J1:J4');
    $logoKanan = new Drawing();
    $logoKanan->setName('Logo Kanan');
    $logoKanan->setPath('img/logo_minahasa.png'); // Ganti dengan path logo kanan
    $logoKanan->setHeight(100);
    $logoKanan->setCoordinates('J1');
    $logoKanan->setWorksheet($sheet);

    // Judul tengah
    $sheet->mergeCells('C1:H1');
    $sheet->setCellValue('C1', "PEMERINTAH KABUPATEN MINAHASA\nDINAS LINGKUNGAN HIDUP");
    $sheet->getStyle('C1')->getFont()->setSize(14)->setBold(true);
    $sheet->getStyle('C1')->getAlignment()->setWrapText(true)->setHorizontal('center');

    // Alamat
    $sheet->mergeCells('C2:H2');
    $sheet->setCellValue('C2', "Jl. Tumou Tou 11A Kel Sasaran Telp/Fax : (0431) 323688 TONDANO 95615");
    $sheet->getStyle('C2')->getFont()->setSize(10);
    $sheet->getStyle('C2')->getAlignment()->setHorizontal('center');
    
    //underline
    $underlineStyle = [
        'borders' => [
            'bottom' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DOUBLE]
        ]
    ];
    $sheet->mergeCells('A5:J5');
    $sheet->getStyle('A5:J5')->applyFromArray($underlineStyle);

    // Judul laporan
    $sheet->mergeCells('C7:H7');
    $sheet->setCellValue('C7', "DATA LAPORAN RETRIBUSI SAMPAH");
    $sheet->getStyle('C7')->getFont()->setSize(12)->setBold(true);
    $sheet->getStyle('C7')->getAlignment()->setHorizontal('center');
    
    // Atur style border untuk header tabel
    $styleArray = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                'color' => ['argb' => '000000'],
            ],
        ],
    ];
    $sheet->getStyle('A9:J9')->applyFromArray($styleArray); // Menerapkan border untuk header
    
    // Style untuk header tabel
    $headerStyle = [
        'font' => [
            'bold' => true,
            'size' => 11,
            'color' => ['argb' => 'FF000000'],
        ],
        'fill' => [
            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
            'startColor' => ['argb' => 'FFC0C0C0'], // Latar belakang abu-abu terang
        ],
        'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
        ],
        'borders' => [
            'top' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
            'bottom' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
            'left' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
            'right' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
        ],
    ];
    $sheet->getStyle('A9:J9')->applyFromArray($headerStyle);

    // Set judul kolom
    $sheet->setCellValue('A9', 'No.');
    $sheet->setCellValue('B9', 'Nama Pelanggan');
    $sheet->setCellValue('C9', 'Desa/Kelurahan');
    $sheet->setCellValue('D9', 'Kecamatan');
    $sheet->setCellValue('E9', 'Nama Bidang');
    $sheet->setCellValue('F9', 'Nama Kategori');
    $sheet->setCellValue('G9', 'Bulan');
    $sheet->setCellValue('H9', 'Tahun');
    $sheet->setCellValue('I9', 'Tarif');
    $sheet->setCellValue('J9', 'Status');
    
    // Menyiapkan nama file dengan bulan dan tahun
        $namaBulan = [
            '1' => 'Januari',
            '2' => 'Februari',
            '3' => 'Maret',
            '4' => 'April',
            '5' => 'Mei',
            '6' => 'Juni',
            '7' => 'Juli',
            '8' => 'Agustus',
            '9' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        ];
        
    // Data
        $row = 10;
        $no = 1;
        foreach ($langgan as $item) {
            $sheet->setCellValue('A' . $row, $no++);
            $sheet->getStyle('A' . $row)
                ->getAlignment()
                ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);
            $sheet->setCellValue('B' . $row, $item['nama_pelanggan']);
            $sheet->getStyle('B' . $row)
                ->getAlignment()
                ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);
            $sheet->setCellValue('C' . $row, $item['desa']);
            $sheet->getStyle('C' . $row)
                ->getAlignment()
                ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);
            $sheet->setCellValue('D' . $row, $item['kecamatan']);
            $sheet->getStyle('D' . $row)
                ->getAlignment()
                ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);
            $sheet->setCellValue('E' . $row, $item['kategori']);
            $sheet->getStyle('E' . $row)
                ->getAlignment()
                ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);
            $sheet->setCellValue('F' . $row, $item['sub_kategori']);
            $sheet->getStyle('F' . $row)
                ->getAlignment()
                ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);
            $sheet->setCellValue('G' . $row, $namaBulan[$bulan]);
            $sheet->getStyle('G' . $row)
                ->getAlignment()
                ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);
            $sheet->setCellValue('H' . $row, $tahun);
            $sheet->getStyle('H' . $row)
                ->getAlignment()
                ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP)
                ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $sheet->setCellValue('I' . $row, $item['tarif_bulanan']);
            $sheet->getStyle('I' . $row)
                ->getAlignment()
                ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP)
                ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

            // Set "Status" based on the value in the database
            $status = $item['validasi'] == 1 ? 'Lunas' : 'Belum Lunas';
            $sheet->setCellValue('J' . $row, $status);
            $sheet->getStyle('J' . $row)
                ->getAlignment()
                ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);

            // Menambahkan border untuk setiap baris data
            $sheet->getStyle("A$row:J$row")->applyFromArray($styleArray);
            $row++;
    
        }
    $sheet->getStyle('A:A')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

    // Convert spreadsheet ke HTML
    $writer = new Html($spreadsheet);
    ob_start();
    $writer->save('php://output');
    $html = ob_get_clean();

    // Buat PDF pakai mPDF
    $mpdf = new Mpdf(['orientation' => 'L']); // Landscape
    $mpdf->WriteHTML($html);

    // Nama file PDF
    $filename = 'Data_Transaksi_' . ($namaBulan[$bulan] ?? 'Semua_Bulan') . '_' . ($tahun ?? 'Semua_Tahun') . '.pdf';

    // Output ke browser
    $mpdf->Output($filename, 'D'); // Download langsung

    }

    ##########################################################
    ###                                                    ###
    ###                    SMS Gateway                     ###
    ###                                                    ###
    ##########################################################

    public function smsGateway()
    {
        $nama = session()->get('nama');

        // Mendapatkan bulan dan tahun saat ini
        $currentMonth = date('m');
        $currentYear = date('Y');

        $pelanggan = new ModelPelanggan();
        $langgan = $pelanggan->where('validasi', '1')->where('MONTH(tanggal)', $currentMonth)->where('YEAR(tanggal)', $currentYear)->findAll();

        // Riwayat SMS
        $smsModel = new SmsModel();
        $sms = $smsModel->orderBy('created_at', 'DESC')->findAll();

        return view('admin/sms_gateway', ['user' => $nama, 'title' => 'SMS', 'pelanggan' => $langgan, 'smsList' => $sms]);
    }

   public function kirimSms()
{
    $token = '4bebc4bd03f27a8e39faef1b50a2598b';
    $to    = $this->request->getVar('ponsel'); // format 628xxxx
    $pesan = $this->request->getVar('pesan');
    $username = 'Preisya';
    $password = '4789preis';
    $sender = 'DLH';

    $encodedPesan = urlencode($pesan);
    $encodedSender = urlencode($sender);
    $url = "https://websms.co.id/api/smsgateway-otp?token={$token}&to={$to}&msg={$encodedPesan}&sender={$encodedSender}";

    $header = ['Accept: application/json'];
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

    $result = curl_exec($ch);
    curl_close($ch);
    
    log_message('debug', 'API Response: ' . $result);

    if ($result === false) {
        $error = curl_error($ch);
        session()->setFlashdata('error', 'Curl error: ' . $error);
        return redirect()->to('admin/sms_gateway');
    }

    $data   = json_decode($result, true);
    $status = strtolower($data['status'] ?? 'failed'); // pastikan lowercase
    $msgApi = $data['message'] ?? '';
    
    log_message('debug', 'Status SMS: ' . $status);

    // Simpan ke DB
    $isi = [
        'tujuan'  => $to,
        'pesan'   => $pesan,
        'status'  => $status,
        'message' => $msgApi
    ];

    if ($this->smsModel->save($isi)) {
        log_message('info', 'Riwayat SMS disimpan: ' . json_encode($isi));
    } else {
        log_message('error', 'Gagal simpan riwayat SMS');
    }

    // Feedback ke user
    if (in_array($status, ['success', 'ok', 'sent'])) {
        session()->setFlashdata('success', 'Pesan berhasil dikirim');
    } else {
        session()->setFlashdata('error', 'Gagal kirim pesan: ' . $msgApi);
    }

    return redirect()->to('admin/sms_gateway');
}

    public function destroy_sms($id)
    {
        $this->db->table('sms')->where(['id' => $id])->delete();
        return redirect()->to(site_url('admin/sms_gateway'))->with('successs', 'Data Berhasil Dihapus!');
    }

    // public function riwayatSms()
    // {
    //     $db = \Config\Database::connect();
    //     $query = $db->query("SELECT * FROM sms ORDER BY created_at DESC");
    //     $data['smsList'] = $query->getResult(); // atau gunakan getResultArray() untuk array asosiatif

    //     // Debug data sebelum dikirim ke view
    //     // dd($data['smsList']);

    //     return view('admin/sms_gateway', $data);
    // }

    public function logout()
    {
        // Hapus semua data sesi
        session()->destroy();

        // Redirect ke halaman login setelah logout
        return redirect()->to(base_url('/'));
    }
}
