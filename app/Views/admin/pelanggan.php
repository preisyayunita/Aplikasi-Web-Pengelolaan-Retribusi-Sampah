<?= $this->extend('admin/default_admin') ?>

<?= $this->section('title') ?>
<title>Kategori Retribusi &mdash; Retribusi Sampah</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Pelanggan Retribusi Sampah</h1>
        <div class="section-header-button position-relative">
            <a href="<?= site_url('admin/add_pelanggan') ?>" style="float: center" class="btn btn-primary">Tambah
            </a>
        </div>
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
                <h4>Data Pelanggan Retribusi Sampah</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md" id="table1">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:10%">No.</th>
                            <th>Nama Pelanggan</th>
                            <th>Desa/Kelurahan</th>
                            <th>Kecamatan</th>
                            <th>Kategori</th>
                            <th>Sub Kategori</th>
                            <th>Tarif/Bulan</th>
                            <th class="text-center" style="width:15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pelanggan as $key => $value) : ?>
                            <tr>
                                <td class="text-center" style="width:10%"><?= $key + 1 ?></td>
                                <td><?= $value->nama_pelanggan ?></td>
                                <td class="text-center"><?= $value->desa ?></td>
                                <td><?= $value->kecamatan ?></td>
                                <td><?= $value->kategori ?></td>
                                <td><?= $value->sub_kategori ?></td>
                                <td><?= $value->tarif_bulanan ?></td>
                                <td class="text-center" style="width:15%">
                                    <a href="<?= site_url('admin/edit_pelanggan/' . $value->id) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
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
    </div>
</section>
<?= $this->endSection() ?>