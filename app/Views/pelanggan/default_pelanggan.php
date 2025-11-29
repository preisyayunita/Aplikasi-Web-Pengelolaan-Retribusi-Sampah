<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= esc($title) ?> &mdash; Retribusi Sampah DLH Kab. Minahasa</title>

    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?= $user; ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a> -->
                            <div class="dropdown-divider"></div>
                            <a href="<?= site_url('Pelanggan/logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?= site_url('pelanggan/history_pelanggan') ?>">Retribusi Sampah</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= site_url('pelanggan/history_pelanggan') ?>">rS</a>
                    </div>
                    <ul class="sidebar-menu">
                        <?= $this->include('pelanggan/sidebar_pelanggan') ?>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <?= $this->renderSection('content') ?>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2024 <div class="bullet"></div><a href="">Dinas Lingkungan Hidup Kab. Minahasa</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script> -->

    <!-- Responsive DataTables Plugin -->
    <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <!-- <script src="assets/js/page/modules-datatables.js"></script> -->
    <script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            $('#table1').DataTable({
                responsive: true,
                language: {
                    search: "Cari:",
                    zeroRecords: "Tidak ditemukan data yang sesuai",
                    emptyTable: "Tidak ada data yang tersedia, mohon masukkan data terlebih dahulu",
                    info: "Sedang menampilkan _START_ sampai _END_ dari _TOTAL_ Data",
                    infoEmpty: "Menampilkan 0 sampai 0 dari 0 Produk",
                    infoFiltered: "(disaring dari _MAX_ Data keseluruhan)",
                    lengthMenu: "Tampilkan _MENU_ Data",
                    loadingRecords: "Sedang memuat...",
                    processing: "Sedang memproses...",
                    paginate: {
                        first: "Pertama",
                        last: "Terakhir",
                        next: "Selanjutnya",
                        previous: "Sebelumnya",
                    },
                    select: {
                        rows: {
                            _: "%d baris terpilih",
                            0: "",
                        },
                    },
                },
            });
        });
    </script>
</body>

</html>