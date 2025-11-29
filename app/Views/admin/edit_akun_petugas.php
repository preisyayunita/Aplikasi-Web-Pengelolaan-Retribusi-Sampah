<?= $this->extend('admin/default_admin') ?>

<?= $this->section('title') ?>
<title>Edit Akun Petugas &mdash; Retribusi Sampah Kab. Minahasa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back ">
            <a href="<?= site_url('admin/akun_petugas') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Akun Petugas</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Form Edit Akun Petugas</h4>
            </div>
            <div class="card-body">
                <form action="<?= site_url('admin/ubah_petugas' . $users->id) ?>" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" value="<?= $users->nama_lengkap ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Lokasi Bertugas</label>
                        <select class="form-control selectric" id="lokasi_bertugas" name="lokasi_bertugas" onchange="handleChange()">
                            <option><?= $users->lokasi_bertugas ?></option>
                            <?php foreach ($lokasi as $row): ?>
                                <option value="<?= $row['nama_kecamatan']; ?>"><?= $row['nama_kecamatan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?= $users->email ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <!-- <a href="<?= site_url('admin/akun_petugas') ?>" class="btn btn-secondary">Kembali</a> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>