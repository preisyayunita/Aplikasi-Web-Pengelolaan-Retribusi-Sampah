<?= $this->extend('admin/default_admin') ?>

<?= $this->section('title') ?>
<title>Tambah Kategori &mdash; Retribusi Sampah Kab. Minahasa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back ">
            <a href="<?= site_url('admin/kategori') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Kategori</h1>
    </div>
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Buat Kategori Retribusi </h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('admin/store') ?>" method="POST" autocomplete="off">

                    <div class="form-group">
                        <label>Objek Retribusi *</label>
                        <input type="text" name="kategori_retribusi" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Nominal *</label>
                        <input type="text" name="nominal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <textarea name="keterangan" class="form-control"></textarea>
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