<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register &mdash; Retribusi Sampah DLH Kab. Minahasa </title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/template/assets/modules/jquery-selectric/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="<?= base_url() ?>/template/assets/img/avatar/logo.png" alt="logo" width="170" class="shadow-light">
                        </div>

                        <div class="card card-success">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <?php if (session()->getFlashdata('validation')) : ?>
                                    <?php
                                    $validation = session()->getFlashdata('validation');
                                    foreach ($validation->getErrors() as $error) : ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                                <form method="POST" action="/registrasi/registerProcess">
                                    <?= csrf_field() ?>

                                    <div class="form-group col-12">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input id="nama_lengkap" type="text" class="form-control <?= $validation->hasError('nama_lengkap') ? 'is-invalid' : ''; ?>" name="nama_lengkap" value="<?= old('nama_lengkap'); ?>" autofocus>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_lengkap'); ?>
                                        </div>
                                    </div>


                                    <div class="form-group col-12">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control <?= $validation->hasError('email') ? 'is-invalid' : ''; ?>" value="<?= old('email'); ?>" name="email">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('email'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group col-12">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control pwstrength <?= $validation->hasError('password') ? 'is-invalid' : ''; ?>" data-indicator="pwindicator" name="password" value="<?= old('password'); ?>">
                                        <?= $validation->getError('password'); ?>
                                    </div>

                                    <div class="form-group col-12">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">
                            Sudah memiliki akun? <a href="/login/index">Login sekarang!</a>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; DLH Kab. Minahasa 2024
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

    <!-- JS Libraies -->
    <script src="<?= base_url() ?>/template/assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="<?= base_url() ?>/template/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url() ?>/template/assets/js/page/auth-register.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/custom.js"></script>
</body>

</html>