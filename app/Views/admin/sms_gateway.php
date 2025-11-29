<?= $this->extend('admin/default_admin') ?>

<?= $this->section('title') ?>
<title>SMS &mdash; Retribusi Sampah Kab. Minahasa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1>SMS</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <h5 class="text-center">Kirim SMS</h5>
                <?php
                if (session()->getFlashdata('success')) { ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('success'); ?>
                    </div>
                <?php }
                if (session()->getFlashdata('error')) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('error'); ?>
                    </div>
                <?php } ?>
                <form action="<?= base_url('admin/kirimSms'); ?>" method="POST">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label>Nomor Tujuan</label>
                        <input type="text" name="ponsel" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Isi Pesan</label>
                        <textarea name="pesan" class="form-control" cols="30" rows="10" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Kirim Pesan</button>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Kontak Pelanggan yang Sudah Bayar Bulan Ini</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md" id="table1">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:5%">No.</th>
                            <th>Nama Pelanggan</th>
                            <th>Nomor Handphone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($pelanggan as $langgan) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $langgan['nama_pelanggan']; ?></td>
                                <td><?= $langgan['telp']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php if (session()->getFlashdata('successs')) : ?>
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Success !</b>
                    <?= session()->getFlashdata('successs') ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header">
                <h4>Riwayat SMS</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md" id="table3">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:5%">No.</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Pesan</th>
                            <th class="text-center">Penerima</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($smsList as $sms): ?>
                            <tr>
                                <td class="text-center"><?= $i++; ?></td>
                                <td><?= date('d M Y', strtotime($sms['created_at'])); ?></td>
                                <td><?= $sms['pesan']; ?></td>
                                <td><?= $sms['tujuan']; ?></td>
                                <td><?= ($sms['status'] == 'success' || $sms['status'] == 1) ? 'Success' : 'Failed'; ?></td>
                                <td>
                                    <form action="<?= site_url('admin/destroy_sms/' . $sms['id']) ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
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