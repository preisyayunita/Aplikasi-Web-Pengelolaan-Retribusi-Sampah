<?= $this->extend('admin/default_admin') ?>

<?= $this->section('title') ?>
<title>Tambah Data Pelanggan &mdash; Retribusi Sampah Kab. Minahasa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back ">
            <a href="<?= site_url('admin/pelanggan') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Create Pelanggan</h1>
    </div>
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Buat Data Pelanggan Retribusi </h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('admin/store_pelanggan') ?>" method="POST" autocomplete="off">

                    <div class="form-group">
                        <label>Nama Pelanggan *</label>
                        <input type="text" name="nama_pelanggan" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Desa/Kelurahan *</label>
                        <input type="text" name="desa" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan *</label>
                        <input type="text" name="kecamatan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori *</label>
                        <select name="kategori" class="form-control select2">
                            <option>Rumah Tinggal</option>
                            <option>Rumah Kost/Asrama</option>
                            <option>Penginapan/Hotel</option>
                            <option>Restoran</option>
                            <option>Rumah Makan</option>
                            <option>Kios Makan</option>
                            <option>Rumah Makan Tidak Tetap</option>
                            <option>Rumah Sakit/Pelayanan Kesehatan</option>
                            <option>Gudang</option>
                            <option>Bioskop</option>
                            <option>Kantor Perusahaan Swasta</option>
                            <option>Toko</option>
                            <option>Swalayan</option>
                            <option>Salon/Pangkas Rambut</option>
                            <option>Pub, Karaoke, Diskotik</option>
                            <option>Bengkel</option>
                            <option>Pabrik/Industri</option>
                            <option>Warung</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sub Kategori *</label>
                        <input type="text" name="sub_kategori" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tarif/Bulan *</label>
                        <input type="text" name="tarif_bulanan" class="form-control" required>
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