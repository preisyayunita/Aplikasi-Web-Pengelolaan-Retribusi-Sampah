<?= $this->extend('admin/default_admin') ?>

<?= $this->section('title') ?>
<title>Edit Kategori &mdash; Retribusi Sampah Kab. Minahasa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back ">
            <a href="<?= site_url('admin/pelanggan/') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Create Pelanggan</h1>
    </div>
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Edit Data Pelanggan Retribusi </h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('admin/ubahpelanggan' . $pelanggan->id) ?>" method="POST" autocomplete="off">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>Nama Pelanggan *</label>
                        <input type="text" name="nama_pelanggan" value="<?= $pelanggan->nama_pelanggan ?>" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Desa *</label>
                        <input type="text" name="desa" value="<?= $pelanggan->desa ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan *</label>
                        <input type="text" name="kecamatan" value="<?= $pelanggan->kecamatan ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori *</label>
                        <input type="text" name="kategori" value="<?= $pelanggan->kategori ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Sub Kategori *</label>
                        <input type="text" name="sub_kategori" value="<?= $pelanggan->sub_kategori ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tarif/Bulan *</label>
                        <input type="text" name="tarif_bulanan" value="<?= $pelanggan->tarif_bulanan ?>" class="form-control" required>
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