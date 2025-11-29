<?= $this->extend('admin/default_admin') ?>

<?= $this->section('title') ?>
<title>Transaksi &mdash; Retribusi Sampah Kab. Minahasa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Transaksi</h1>
    </div>
    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Data Transaksi</h4>
            </div>
            <div class="card-header">
                <!-- Form untuk memilih bulan dan tahun -->
                <form method="get" action="<?= site_url('admin/filterTransaksi') ?>">
                    <div class="row">
                        <div class="col">
                            <select class="form-control" style="width: fit-content;" name="bulan" id="bulan">
                                <option value="1" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '1') ? 'selected' : '' ?>>Januari</option>
                                <option value="2" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '2') ? 'selected' : '' ?>>Februari</option>
                                <option value="3" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '3') ? 'selected' : '' ?>>Maret</option>
                                <option value="4" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '4') ? 'selected' : '' ?>>April</option>
                                <option value="5" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '5') ? 'selected' : '' ?>>Mei</option>
                                <option value="6" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '6') ? 'selected' : '' ?>>Juni</option>
                                <option value="7" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '7') ? 'selected' : '' ?>>Juli</option>
                                <option value="8" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '8') ? 'selected' : '' ?>>Agustus</option>
                                <option value="9" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '9') ? 'selected' : '' ?>>September</option>
                                <option value="10" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '10') ? 'selected' : '' ?>>Oktober</option>
                                <option value="11" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '11') ? 'selected' : '' ?>>November</option>
                                <option value="12" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '12') ? 'selected' : '' ?>>Desember</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-control" style="width: fit-content;" name="tahun" id="tahun">
                                <?php foreach ($years as $year) : ?>
                                    <option value="<?= esc($year['year']) ?>" <?= (isset($_GET['tahun']) && $_GET['tahun'] == $year['year']) ? 'selected' : '' ?>>
                                        <?= esc($year['year']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md" id="table2">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pelanggan</th>
                            <th>Desa/Kelurahan</th>
                            <th>Kecamatan</th>
                            <th>Objek Kategori</th>
                            <th>Kategori Retribusi</th>
                            <th>Tarif</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($pelanggan as $langgan) : ?>
                            <tr>
                                <td class="text-center" style="width:5%"><?= $i++ ?></td>
                                <td><?= $langgan['nama_pelanggan']; ?></td>
                                <td><?= $langgan['desa']; ?></td>
                                <td><?= $langgan['kecamatan']; ?></td>
                                <td><?= $langgan['kategori']; ?></td>
                                <td><?= $langgan['sub_kategori']; ?></td>
                                <td><?= number_to_currency($langgan['tarif_bulanan'], 'Rp.'); ?></td> <!-- Format sebagai mata uang -->
                                <td class="text-center" style="width: 15%">
                                    <span class="badge <?= ($langgan['validasi'] == 1) ? 'badge-success' : 'badge-danger'; ?>">
                                        <?= ($langgan['validasi'] == 1) ? 'lunas' : 'Belum Lunas'; ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Misalkan Anda telah mengirim 'latestYear' dan 'latestMonth' ke view Anda sebagai variable JavaScript.
        const latestYear = <?= $latestYear ?>;
        const latestMonth = <?= $latestMonth ?>;

        // Set value dropdown untuk tahun dan bulan.
        document.getElementById('tahun').value = latestYear;
        document.getElementById('bulan').value = latestMonth;

        // Anda mungkin perlu memicu event onchange untuk dropdown jika Anda menggunakan AJAX untuk memuat data tabel.
        $('#tahun').change();
        $('#bulan').change();
    });
</script>
<?= $this->endSection() ?>