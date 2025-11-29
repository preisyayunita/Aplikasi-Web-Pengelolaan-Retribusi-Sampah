<?= $this->extend('petugas/default_petugas') ?>

<?= $this->section('title') ?>
<title><?= esc($title) ?> &mdash; Retribusi Sampah Kab. Minahasa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('petugas/bukti_bayar') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Unggah Bukti Pembayaran</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Form Unggah Bukti Pembayaran</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('petugas/prosesaddBukti' . $users->id) ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label>Unggah / Upload Foto Bukti Pembayaran *</label>
                        <input type="file" name="bukti_foto" class="form-control" accept="image/*" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>