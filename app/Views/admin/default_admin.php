<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?= esc($title) ?> &mdash; Retribusi Sampah DLH Kab. Minahasa</title>

    <link rel="stylesheet" href="<?= base_url('template/node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/node_modules/@fortawesome/fontawesome-free/css/all.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/node_modules/select2/dist/css/select2.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/node_modules/prismjs/themes/prism.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('template/assets/css/components.css'); ?>">
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
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?= $user; ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-divider"></div>
                            <a href="<?= site_url('admin/logout'); ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?= site_url(); ?>">Retribusi Sampah</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= site_url(); ?>">rS</a>
                    </div>
                    <ul class="sidebar-menu">
                        <?= $this->include('admin/sidebar_admin'); ?>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <?= $this->renderSection('content'); ?>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2024 <div class="bullet"></div><a href="#">Dinas Lingkungan Hidup Kab. Minahasa</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url('template/node_modules/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('template/node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js'); ?>"></script>
    <script src="<?= base_url('template/node_modules/datatables/media/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('template/node_modules/select2/dist/js/select2.full.min.js'); ?>"></script>
    <script src="<?= base_url('template/node_modules/prismjs/prism.js'); ?>"></script>
    <script src="<?= base_url('template/assets/js/page/bootstrap-modal.js'); ?>"></script>
    <script src="<?= base_url('template/assets/js/stisla.js'); ?>"></script>
    <script src="<?= base_url('template/assets/js/scripts.js'); ?>"></script>
    <script src="<?= base_url('template/node_modules/chart.js/dist/Chart.min.js'); ?>"></script>


    <!-- DataTables Button -->
    <!--<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">-->
    <!--<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>-->
    <!--<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.js" crossorigin="anonymous"></script>-->

    <!--Responsive DataTables Plugin -->
    <!--<link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" rel="stylesheet">-->
    <!--<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>-->



    <!-- DataTables Button -->
<link href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.min.css" rel="stylesheet" integrity="sha384-gC2LYLqCExndkNE9hTLhmEXvk8ZgIf42nRengHFbC9uaws2Ho0TW+ENGe4w15AHy" crossorigin="anonymous">
<link href="https://cdn.datatables.net/buttons/3.2.3/css/buttons.dataTables.min.css" rel="stylesheet" integrity="sha384-gZdV4/a6Gt/Qu0qCP3bchrOj0WlpkAfszB1m4/eFzOSnvvHUFMv9+C/KcgMO8CeR" crossorigin="anonymous">
<link href="https://cdn.datatables.net/responsive/3.0.4/css/responsive.dataTables.min.css" rel="stylesheet" integrity="sha384-kz9bozrCHP/y+wTJV8P+n/dMBOh00rqNmmIAgHckzFWpoSB49V5ornW1aY+uYTyA" crossorigin="anonymous">
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js" integrity="sha384-+mbV2IY1Zk/X1p/nWllGySJSUN8uMs+gUAN10Or95UBH0fpj6GfKgPmgC5EXieXG" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js" integrity="sha384-VFQrHzqBh5qiJIU0uGU5CIW3+OWpdGGJM9LBnGbuIH2mkICcFZ7lPd/AAtI7SNf7" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js" integrity="sha384-/RlQG9uf0M2vcTw3CX7fbqgbj/h8wKxw7C3zu9/GxcBPRKOEcESxaxufwRXqzq6n" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.3.2/js/dataTables.min.js" integrity="sha384-RZEqG156bBQSxYY9lwjUz/nKVkqYj/QNK9dEjjyJ/EVTO7ndWwk6ZWEkvaKdRm/U" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/3.2.3/js/dataTables.buttons.min.js" integrity="sha384-zlMvVlfnPFKXDpBlp4qbwVDBLGTxbedBY2ZetEqwXrfWm+DHPvVJ1ZX7xQIBn4bU" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/3.2.3/js/buttons.html5.min.js" integrity="sha384-+E6fb8f66UPOVDHKlEc1cfguF7DOTQQ70LNUnlbtywZiyoyQWqtrMjfTnWyBlN/Y" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/responsive/3.0.4/js/dataTables.responsive.min.js" integrity="sha384-A6In5tKqlvPZKDpH+ei4A3A4TZrEsyvvN2Fe+oCB1IaQfGD5HNqDIxwjztNKSGDd" crossorigin="anonymous"></script>

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
            var table = $("#table2").DataTable({
                responsive: true,
                dom: "lBfrtip",
                buttons: [{
                    text: 'Export Excel',
                    action: function(e, dt, node, config) {
                        var bulan = $("#bulan").val(); // Sesuaikan dengan input filter bulan Anda
                        var tahun = $("#tahun").val(); // Sesuaikan dengan input filter tahun Anda
                        window.location.href = '/Admin/export_excel?bulan=' + bulan + '&tahun=' + tahun;
                    }
                },
                {
                    text: 'Export PDF',
                    action: function(e, dt, node, config) {
                        var bulan = $("#bulan").val(); // Sesuaikan dengan input filter bulan Anda
                        var tahun = $("#tahun").val(); // Sesuaikan dengan input filter tahun Anda
                        window.location.href = '/Admin/export_pdf?bulan=' + bulan + '&tahun=' + tahun;
                    }
                }
                ],
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
            $('#table3').DataTable({
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

    <!-- Script untuk tabel transaksi -->
    <script src="<?= base_url('Tabel/transaksi.js'); ?>"></script>

</body>

</html>