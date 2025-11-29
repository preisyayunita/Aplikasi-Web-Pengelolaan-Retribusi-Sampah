<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register &mdash; Retribusi Sampah DLH Kab. Minahasa </title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">
    <!-- Start GA -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script> -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="<?= base_url() ?>/template/assets/img/avatar/logo.png" alt="logo" width="150">
                        </div>

                        <div class=" card card-success">
                            <div class="card-header" style="text-align: center;">
                                <h3>Daftar Retribusi Sampah</h3>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="/pelanggan/proses_tambah_member" enctype="multipart/form-data">
                                    <div class="form-divider">
                                        Data Berlangganan Retribusi Sampah
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="nama">Nama</label>
                                            <input id="nama" type="text" class="form-control" name="nama" autofocus>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="alamat">Alamat</label>
                                            <input id="alamat" type="text" class="form-control" name="alamat">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Kecamatan</label>
                                            <select class="form-control selectric" id="kecamatan" name="kecamatan" onchange="getDesa()">
                                                <option>-- Pilih Kecamatan --</option>
                                                <?php foreach ($kecamatan as $row): ?>
                                                    <option value="<?= $row['nama_kecamatan']; ?>"><?= $row['nama_kecamatan']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Desa</label>
                                            <select class="form-control selectric" id="desa" name="desa">
                                                <option>-- Pilih Desa --</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="telp" class="d-block">No. Handphone</label>
                                            <input id="telp" type="tel" class="form-control" name="telp">
                                        </div>
                                    </div>

                                    <!-- <div class="row">
                                        <div class="form-group col-6">
                                            <label for="ktp" class="form-label">Upload KTP (*format file : jpg, jpeg, png) </label>
                                            <input id="ktp" type="file" class="form-control" name="ktp" autofocus>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="pbb" class="form-label">Upload PBB (*format file : jpg, jpeg, png) </label>
                                            <input id="pbb" type="file" class="form-control" name="pbb" autofocus>
                                        </div>
                                    </div> -->

                                    <div class="form-divider">
                                        Data Retribusi
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Nama Objek Retribusi</label>
                                            <select class="form-control selectric" id="kategori_retribusi" name="kategori_retribusi">
                                                <option value="" selected disabled>-- Pilih Objek Retribusi --</option>
                                                <option value="Rumah Tinggal">Rumah Tinggal</option>
                                                <option value="Tempat Usaha">Tempat Usaha</option>
                                                <option value="Tempat Layanan">Tempat Layanan</option>
                                                <option value="Tempat Hiburan">Tempat Hiburan</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Kategori Retribusi</label>
                                            <select class="form-control selectric" id="keterangan" name="keterangan" onchange="updateNominal()">
                                                <option value="" selected disabled>-- Pilih Kategori Retribusi --</option>
                                                <?php foreach ($kategori as $value) : ?>
                                                    <option value="<?= $value['keterangan'] ?>" data-nominal="<?= $value['nominal'] ?>"><?= $value['keterangan'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Biaya Retribusi</label>
                                            <input type="text" name="nominal" id="nominal" class="form-control" readonly required>
                                            <!-- <select class="form-control selectric" id="biaya_retribusi" name="jenis_biaya">
                                                <option>-- Pilih Jenis Biaya --</option>
                                            </select> -->
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">
                                            Daftar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; DLH Kab. Minahasa
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <!-- <script src="assets/modules/jquery.min.js"></script>
    <script src="assets/modules/popper.js"></script>
    <script src="assets/modules/tooltip.js"></script>
    <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/modules/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script> -->
    <script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url() ?>/template/assets/js/page/auth-register.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>template/assets/js/custom.js"></script>
    <script src="<?= base_url() ?>template/assets/js/ajax.js"></script>
    <script src="<?= base_url() ?>template/assets/js/api.js"></script>

</body>

</html>