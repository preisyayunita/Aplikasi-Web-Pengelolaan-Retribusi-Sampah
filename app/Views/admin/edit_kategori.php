<?= $this->extend('admin/default_admin') ?>

<?= $this->section('title') ?>
<title>Edit Kategori &mdash; Retribusi Sampah Kab. Minahasa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back ">
            <a href="<?= site_url('admin/kategori') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Kategori</h1>
    </div>
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Edit Kategori Retribusi </h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('admin/update' . $kategori->id) ?>" method="POST" autocomplete="off">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>Kategori Retribusi *</label>
                        <input type="text" name="kategori_retribusi" value="<?= $kategori->kategori_retribusi ?>" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Nominal *</label>
                        <input type="text" name="nominal" value="<?= $kategori->nominal ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Sub Kategori *</label>
                        <input type="text" name="keterangan" value="<?= $kategori->keterangan ?>" class="form-control" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
</section>
<?= $this->endSection() ?>