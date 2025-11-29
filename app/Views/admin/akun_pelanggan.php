<?= $this->extend('admin/default_admin') ?>

<?= $this->section('title') ?>
<title>Akun Pelanggan &mdash; Retribusi Sampah Kab. Minahasa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Akun Pelanggan</h1>
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
                <h4>Data Akun Pelanggan</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md" id="table1">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th class="text-center" style="width:15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->nama_lengkap ?></td>
                                <td><?= $value->email ?></td>
                                <td>Password Terenkripsi</td>
                                <td class="text-center" style="width:15%">
                                    <form action="<?= site_url('admin/destroy_pelanggan/' . $value->id) ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
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