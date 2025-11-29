<li class="menu-header">Main Menu</li>
<li><a class="nav-link" href="<?= site_url('admin') ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
<li><a class="nav-link" href="<?= site_url('admin/kategori') ?>"><i class="fas fa-info-circle"></i> <span>Kategori Retribusi</span></a></li>
<li><a class="nav-link" href="<?= site_url('admin/validasi_berkas') ?>"><i class="fas fa-check"></i> <span>Validasi Berkas</span></a></li>
<li><a class="nav-link" href="<?= site_url('admin/sms_gateway') ?>"><i class="fas fa-envelope"></i> <span>SMS</span></a></li>
<li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-coins"></i><span>Transaksi</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= site_url('admin/transaksi') ?>"><span>Laporan Transaksi</span></a></li>
        <li><a class="nav-link" href="<?= site_url('admin/validasi_buktiBayar') ?>"><span>Validasi Bukti Pembayaran</span></a></li>
    </ul>
</li>
<li class="menu-header">Pengaturan</li>
<li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Akun</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= site_url('admin/akun_petugas') ?>"><span>Akun Petugas</span></a></li>
        <li><a class="nav-link" href="<?= site_url('admin/akun_pelanggan') ?>"><span>Akun Pelanggan</span></a></li>
    </ul>
</li>