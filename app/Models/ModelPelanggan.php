<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPelanggan extends Model
{
    protected $table            = 'data_pelanggan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['user_id', 'nama_pelanggan', 'desa', 'kecamatan', 'kategori', 'sub_kategori', 'tarif_bulanan', 'tanggal', 'validasi', 'foto_bukti'];
    protected $useTimestamps    = true;

    public function distinctYears()
    {
        return $this->select('YEAR(tanggal) as year')->distinct()->orderBy('year', 'desc')->findAll();
    }

    public function filterByMonthYear($bulan, $tahun)
    {
        return $this->where('MONTH(tanggal)', $bulan)
            ->where('YEAR(tanggal)', $tahun)
            ->findAll();
    }

    public function getLatestDate()
    {
        $latestEntry = $this->select('tanggal')
            ->orderBy('tanggal', 'DESC')
            ->first();
        if ($latestEntry) {
            return $latestEntry['tanggal'];
        }
        return false;
    }
}
