<?= $this->extend('admin/default_admin') ?>

<?= $this->section('title') ?>
<title>Dashboard &mdash; Retribusi Sampah Kab. Minahasa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= site_url('admin/dashboard') ?>">Dashboard</a></div>
            <div class="breadcrumb-item"></div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Pelanggan</h4>
                        </div>
                        <div class="card-body">
                            <?= $jumlah ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-building"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Kecamatan</h4>
                        </div>
                        <div class="card-body">
                            16
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Pemasukan Perbulan</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart" height="182"></canvas>
                    </div>
                </div>
            </div>
        </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        // Data dari Controller (PHP)
        const labels = <?= $labels; ?>; // Nama bulan
        const dataPoints = <?= $data; ?>; // Total pendapatan

        console.log(labels);
        console.log(dataPoints);

        var statistics_chart = document.getElementById("myChart").getContext('2d');

        var myChart = new Chart(statistics_chart, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Statistics',
                    data: dataPoints,
                    borderWidth: 5,
                    borderColor: '#6777ef',
                    backgroundColor: 'transparent',
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#6777ef',
                    pointRadius: 4
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: true,
                            drawBorder: true,
                        },
                        ticks: {
                            stepSize: 50000
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: '#fbfbfb',
                            lineWidth: 2
                        }
                    }]
                },
            }
        });
    });
</script>
<?= $this->endSection() ?>