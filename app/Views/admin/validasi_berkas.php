<?= $this->extend('admin/default_admin') ?>

<?= $this->section('title') ?>
<title>Validasi Berkas &mdash; Retribusi Sampah Kab. Minahasa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Validasi Berkas</h1>
    </div>
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Success !</b>
                <?= session()->getFlashdata('success') ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Validasi Berkas</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md" id="table1">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>Objek Retribusi</th>
                            <th>Kategori Retribusi</th>
                            <th class="text-center">Verifikasi</th>
                            <th class="text-center" style="width:15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($member as $mem) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $mem['nama']; ?></td>
                                <td><?= $mem['objek_retribusi']; ?></td>
                                <td><?= $mem['kat_retribusi']; ?></td>
                                <td class="text-center" style="width: 15%"> <!-- Tambahkan text-center di sini -->
                                    <span class="badge <?= ($mem['validasi'] == 1) ? 'badge-success' : 'badge-danger'; ?>">
                                        <?= ($mem['validasi'] == 1) ? 'Disetujui' : 'Belum Disetujui'; ?>
                                    </span>
                                </td>

                                <td class="text-center" style="width:15%">
                                    <a href="<?= site_url('admin/detail_validasi/' . $mem['id']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>