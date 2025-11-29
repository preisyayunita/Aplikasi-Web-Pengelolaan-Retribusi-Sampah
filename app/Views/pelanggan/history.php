<?= $this->extend('pelanggan/default_pelanggan') ?>

<?= $this->section('title') ?>
<title>Dashboard &mdash; Retribusi Sampah Kab. Minahasa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Riwayat Pembayaran</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Riwayat Pembayaran</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md" id="table1">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tarif</th>
                            <th>Bulan / Tahun</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($pelanggan as $langgan) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= number_to_currency($langgan['tarif_bulanan'], 'Rp.'); ?></td> <!-- Format sebagai mata uang -->
                                <td data-order="<?= $langgan['tanggal']; ?>"><?= $langgan['bulan_tahun']; ?></td>
                                <td class="text-center" style="width: 15%">
                                    <span class="badge <?= ($langgan['validasi'] == 1) ? 'badge-success' : 'badge-danger'; ?>">
                                        <?= ($langgan['validasi'] == 1) ? 'Lunas' : 'Belum Lunas'; ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</section>
<?= $this->endSection() ?>