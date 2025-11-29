<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Lupa Password &mdash; Dinas Lingkungan Hidup Kab. Minahasa</title>

    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">

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
                            <img src="<?= base_url() ?>/template/assets/img/avatar/logo.png" alt="logo" width="150" class="shadow-light">
                        </div>

                        <div class="card card-success">
                            <div class="card-header">
                                <h4>Lupa Password</h4>
                            </div>

                            <?php
                            if (session()->getFlashdata('success')) { ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getFlashdata('success'); ?>
                                </div>
                            <?php }
                            if (session()->getFlashdata('error')) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session()->getFlashdata('error'); ?>
                                </div>
                            <?php } ?>

                            <div class="card-body">
                                <p class="text-muted">* Kami akan mengirimkan link untuk reset password anda</p>
                                <form method="POST" action="<?= base_url('login/processForgotPassword') ?>">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-light btn-lg btn-block" tabindex="4">
                                            Lupa Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Dinas Lingkungan Hidup Kab. Minahasa
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>

    <script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
</body>

</html>