<?= $this->extend('admin/default_admin') ?>

<?= $this->section('title') ?>
<title>Dashboard &mdash; Retribusi Sampah Kab. Minahasa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Validasi Data Pelanggan Baru</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Form Data Pelanggan Baru</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Informasi Pribadi</h6>
                        <ul class="list-group">
                            <li class="list-group-item">Nama Lengkap: <strong><?= esc($member['nama']); ?></strong></li>
                            <li class="list-group-item">Alamat: <strong><?= esc($member['alamat']); ?></strong></li>
                            <li class="list-group-item">Kecamatan: <strong><?= esc($member['kecamatan']); ?></strong></li>
                            <li class="list-group-item">Desa: <strong><?= esc($member['desa']); ?></strong></li>
                            <li class="list-group-item">No. Handphone: <strong><?= esc($member['telp']); ?></strong></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6>Informasi Retribusi</h6>
                        <ul class="list-group">
                            <li class="list-group-item">Objek Retribusi: <strong><?= esc($member['objek_retribusi']); ?></strong></li>
                            <li class="list-group-item">Kategori Retribusi: <strong><?= esc($member['kat_retribusi']); ?></strong></li>
                            <li class="list-group-item">Biaya Retribusi: <strong><?= esc($member['biaya_retribusi']); ?></strong></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="<?= site_url('admin/proses_validasi/' . $member['id']) ?>" class="btn btn-warning btn-block">Validasi</a>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection() ?>