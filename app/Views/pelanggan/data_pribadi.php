<?= $this->extend('pelanggan/default_pelanggan') ?>

<?= $this->section('title') ?>
<title>Dashboard &mdash; Retribusi Sampah Kab. Minahasa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Profil</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= site_url('pelanggan/dashboard') ?>">Dashboard</a></div>
            <div class="breadcrumb-item">Data Pribadi</div>
        </div>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div>
                    <div class="card-header mb-4">
                        <h4>Selamat Datang, <?= $member['nama']; ?>!</h4>
                    </div>
                    <form>
                        <!-- Kolom Kode Pengguna -->
                        <div class="mb-3">
                            <label for="nama" class="form-label" style="font-size: 1.0rem;">Nama :</label>
                            <input type="text" class="form-control" id="kodePengguna" value="<?= $member['nama']; ?>" readonly style="width: 40%;">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label" style="font-size: 1.0rem;">Alamat :</label>
                            <input type="text" class="form-control" id="kodePengguna" value="<?= $member['alamat']; ?>" readonly style="width: 40%;">
                        </div>

                        <!-- Kolom Nama -->
                        <div class="mb-3">
                            <label for="kecamatan" class="form-label" style="font-size: 1.0rem;">Kecamatan :</label>
                            <input type="text" class="form-control" id="nama" value="<?= $member['kecamatan']; ?>" readonly style="width: 40%;">
                        </div>

                        <!-- Kolom Kategori Bidang -->
                        <div class="mb-3">
                            <label for="desa" class="form-label" style="font-size: 1.0rem;">Desa :</label>
                            <input type="text" class="form-control" id="kategoriBidang" value="<?= $member['desa']; ?>" readonly style="width: 40%;">
                        </div>

                        <!-- Kolom Nama Usaha -->
                        <div class="mb-3">
                            <label for="nomorHandphone" class="form-label" style="font-size: 1.05rem;">Nomor Handphone :</label>
                            <input type="text" class="form-control" id="namaUsaha" value="<?= $member['telp']; ?>" readonly style="width: 40%;">
                        </div>
                    </form>
                    <!-- <p>KTP</p> -->
                    <!-- <img src="/img/ktp/<?= $member['ktp']; ?>" style="width:100px;height:120px;">
                <p>PBB</p>
                <img src="/img/pbb/<?= $member['pbb']; ?>" style="width:100px;height:120px;"> -->
                </div>
            </div>
        </div>
</section>
<?= $this->endSection() ?>