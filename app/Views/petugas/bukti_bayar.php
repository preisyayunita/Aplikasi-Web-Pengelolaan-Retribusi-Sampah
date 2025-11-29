<?= $this->extend('petugas/default_petugas') ?>

<?= $this->section('title') ?>
<title>Bukti Bayar &mdash; Retribusi Sampah Kab. Minahasa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Bukti Bayar</h1>
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
                <h4>Data Bukti Bayar Pelanggan di Kecamatan <?= $lokasi ?></h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md" id="table1">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>Objek Retribusi</th>
                            <th>Kategori</th>
                            <th>Bulan / Tahun</th>
                            <th>Tarif</th>
                            <th>Bukti Foto</th>
                            <th>Verifikasi</th>
                            <th class="text-center" style="width:15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($pelanggan as $langgan) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $langgan['nama_pelanggan']; ?></td>
                                <td><?= $langgan['sub_kategori']; ?></td>
                                <td><?= $langgan['kategori']; ?></td>
                                <td data-order="<?= $langgan['tanggal']; ?>"><?= $langgan['bulan_tahun']; ?></td>
                                <td><?= number_to_currency($langgan['tarif_bulanan'], 'Rp.'); ?></td>
                                <td>
                                    <?php if (!empty($langgan['foto_bukti'])) : ?>
                                        <img src="/img/bukti_bayar/<?= $langgan['foto_bukti']; ?>" style="max-width: 120px; max-height: 120px;">
                                    <?php else : ?>
                                        <span class="text-center">Foto belum di unggah</span>
                                    <?php endif; ?>
                                </td>

                                <td class="text-center" style="width: 15%">
                                    <span class="badge <?= ($langgan['validasi'] == 1) ? 'badge-success' : 'badge-danger'; ?>">
                                        <?= ($langgan['validasi'] == 1) ? 'Disetujui' : 'Belum Disetujui'; ?>
                                    </span>
                                </td>
                                <td><a href="<?= site_url('petugas/addbukti/' . $langgan['id']) ?>" class="btn btn-warning btn-sm">Unggah Bukti</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>