<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<style>
    .stat-card,
    .dashboard-card,
    .info-card,
    .chart-card {
        border: none;
        border-radius: 18px;
        box-shadow: 0 3px 15px rgba(0, 0, 0, .05);
    }

    .stat-card {
        transition: .3s;
    }

    .stat-card:hover {
        transform: translateY(-4px);
    }

    .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
    }

    .chart-card {
        height: 100%;
    }

    .chart-container {
        height: 350px;
        position: relative;
    }

    .top-priority-table {
        border-collapse: separate;
        border-spacing: 0 12px;
    }

    .top-priority-table thead th {
        border: none !important;
        background: #f8fafc;
        color: #6b7280;
        font-size: 13px;
        font-weight: 600;
        padding: 14px;
    }

    .top-priority-table tbody tr {
        background: #fff;
        box-shadow: 0 2px 12px rgba(0, 0, 0, .05);
    }

    .top-priority-table tbody td {
        border: none !important;
        vertical-align: middle;
        padding: 16px;
    }

    .rank-badge {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #198754;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
    }

    .priority-high {
        background: rgba(25, 135, 84, .15);
        color: #198754;
        padding: 7px 14px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 600;
    }

    .priority-medium {
        background: rgba(255, 193, 7, .15);
        color: #b8860b;
        padding: 7px 14px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 600;
    }

    .equal-height {
        height: 100%;
    }

    .insight-item {
        display: flex;
        align-items: center;
        padding: 14px;
        border-radius: 14px;
        background: #f8fafc;
        margin-bottom: 12px;
    }

    .insight-icon {
        width: 50px;
        height: 50px;
        border-radius: 14px;
        background: #198754;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        font-size: 18px;
    }

    .region-card {
        background: #f8fafc;
        border-radius: 16px;
        padding: 20px;
        text-align: center;
        transition: .3s;
    }

    .region-card:hover {
        transform: translateY(-4px);
    }

    .region-card i {
        font-size: 28px;
        color: #198754;
        display: block;
        margin-bottom: 10px;
    }
</style>

<div class="container-fluid">

    <!-- WELCOME CARD -->
    <div class="card dashboard-card mb-4">

        <div class="card-body p-4">

            <h3 class="fw-bold text-success mb-2">
                Dashboard Klasifikasi Prioritas Produksi Padi
            </h3>

            <p class="text-muted mb-0">
                Sistem dashboard untuk mengelola data produksi padi serta melakukan
                klasifikasi prioritas produksi menggunakan algoritma Random Forest.
            </p>

        </div>

    </div>

    <!-- STATISTIK -->
    <div class="row g-4 mb-4">

        <div class="col-lg-3 col-md-6">

            <div class="card stat-card">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Total Data Produksi
                        </small>

                        <h2 class="fw-bold mb-0 mt-2">
                            <?= $jumlahDataset ?>
                        </h2>

                    </div>

                    <div class="stat-icon bg-success-subtle text-success">

                        <i class="bi bi-database-fill"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-3 col-md-6">

            <div class="card stat-card">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Jenis Padi
                        </small>

                        <h2 class="fw-bold mb-0 mt-2">
                            <?= $jumlahJenisPadi ?>
                        </h2>

                    </div>

                    <div class="stat-icon bg-primary-subtle text-primary">

                        <i class="bi bi-flower1"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-3 col-md-6">

            <div class="card stat-card">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Total Wilayah
                        </small>

                        <h2 class="fw-bold mb-0 mt-2">
                            <?= $jumlahWilayah ?>
                        </h2>

                    </div>

                    <div class="stat-icon bg-warning-subtle text-warning">

                        <i class="bi bi-geo-alt-fill"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-3 col-md-6">

            <div class="card stat-card">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Akurasi Model
                        </small>

                        <h2 class="fw-bold mb-0 mt-2">
                            <?= $akurasi ?>
                        </h2>

                    </div>

                    <div class="stat-icon bg-danger-subtle text-danger">

                        <i class="bi bi-cpu-fill"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- CHART -->
    <div class="row g-4 mb-4">

        <div class="col-lg-8">

            <div class="card chart-card">

                <div class="card-header bg-white border-0 pt-4">

                    <h5 class="mb-0">
                        Produksi Padi per Wilayah
                    </h5>

                </div>

                <div class="card-body">

                    <div class="chart-container">

                        <canvas id="chartWilayah"></canvas>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="card chart-card">

                <div class="card-header bg-white border-0 pt-4">

                    <h5 class="mb-0">
                        Distribusi Jenis Padi
                    </h5>

                </div>

                <div class="card-body">

                    <div class="chart-container">

                        <canvas id="chartJenis"></canvas>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- TOP PRIORITAS PRODUKSI -->
    <div class="card dashboard-card mb-4">

        <div class="card-header bg-white border-0 pt-4">

            <h5 class="mb-0">
                Top 3 Prioritas Produksi
            </h5>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table top-priority-table">

                    <thead>

                        <tr>

                            <th>No</th>
                            <th>Wilayah</th>
                            <th>Jenis Padi</th>
                            <th>Luas Tanam</th>
                            <th>Luas Panen</th>
                            <th>Produksi</th>
                            <th>Produktivitas</th>
                            <th>Prioritas</th>

                        </tr>

                    </thead>
                    <tbody>

                        <?php $no = 1; ?>

                        <?php foreach ($produksi as $row) : ?>

                            <?php

                            $prioritas = "-";

                            foreach ($hasil as $h) {

                                if (
                                    $h['wilayah'] == $row['wilayah'] &&
                                    $h['jenis_padi'] == $row['jenis_padi']
                                ) {

                                    $prioritas = $h['prioritas'];
                                    break;
                                }
                            }

                            ?>

                            <tr>

                                <td>

                                    <div class="rank-badge">

                                        <?= $no++ ?>

                                    </div>

                                </td>

                                <td>

                                    <strong>

                                        <?= esc($row['wilayah']) ?>

                                    </strong>

                                </td>

                                <td>

                                    <?= esc($row['jenis_padi']) ?>

                                </td>

                                <td>

                                    <?= number_format($row['luas_lahan'], 0, ',', '.') ?>

                                </td>

                                <td>

                                    <?= number_format($row['sasaran_tanam'], 0, ',', '.') ?>

                                </td>

                                <td>

                                    <?= number_format($row['sasaran_panen'], 0, ',', '.') ?>

                                </td>

                                <td>

                                    <?= number_format($row['sasaran_produksi'], 0, ',', '.') ?>

                                </td>

                                <td>

                                    <?php if ($prioritas == "Tinggi") : ?>

                                        <span class="priority-high">

                                            Tinggi

                                        </span>

                                    <?php elseif ($prioritas == "Sedang") : ?>

                                        <span class="priority-medium">

                                            Sedang

                                        </span>

                                    <?php else : ?>

                                        <span class="badge bg-danger">

                                            Rendah

                                        </span>

                                    <?php endif; ?>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <!-- INSIGHT & WILAYAH PENELITIAN -->
    <!-- INSIGHT PRODUKSI -->
    <div class="row g-4 mb-4">
        <div class="col-lg-6 d-flex">

            <div class="card info-card equal-height w-100">

                <div class="card-header bg-white border-0 pt-4">

                    <h5 class="mb-0">
                        Insight Produksi
                    </h5>

                </div>

                <div class="card-body">

                    <div class="insight-item">

                        <div class="insight-icon">

                            <i class="bi bi-trophy-fill"></i>

                        </div>

                        <div>

                            <div class="fw-bold">
                                <?= $tertinggi['wilayah']; ?>
                            </div>

                            <small class="text-muted">
                                Wilayah dengan produksi tertinggi
                                (<?= number_format($tertinggi['sasaran_produksi'] ?? 0, 0, ',', '.') ?> Ton)
                            </small>

                        </div>

                    </div>

                    <div class="insight-item">

                        <div class="insight-icon">

                            <i class="bi bi-graph-down-arrow"></i>

                        </div>

                        <div>

                            <div class="fw-bold">
                                <?= $terendah['wilayah']; ?>
                            </div>

                            <small class="text-muted">
                                Wilayah dengan produksi terendah
                                (<?= number_format($terendah['sasaran_produksi'] ?? 0, 0, ',', '.') ?> Ton)
                            </small>

                        </div>

                    </div>

                    <div class="insight-item">

                        <div class="insight-icon">

                            <i class="bi bi-flower1"></i>

                        </div>

                        <div>

                            <div class="fw-bold">
                                <?= $jenisDominan; ?>
                            </div>

                            <small class="text-muted">
                                Jenis padi yang paling dominan
                            </small>

                        </div>

                    </div>

                    <div class="insight-item mb-0">

                        <div class="insight-icon">

                            <i class="bi bi-cpu-fill"></i>

                        </div>

                        <div>

                            <div class="fw-bold">
                                <?= $akurasi ?>%
                            </div>

                            <small class="text-muted">
                                Akurasi model Random Forest
                            </small>

                        </div>

                    </div>

                </div>

            </div>


        </div>
        <!-- WILAYAH PENELITIAN -->
        <div class="col-lg-6 d-flex">

            <div class="card info-card equal-height w-100">

                <div class="card-header bg-white border-0 pt-4">

                    <h5 class="mb-0">
                        Wilayah Penelitian
                    </h5>

                </div>

                <div class="card-body">

                    <div class="row g-3">

                        <div class="col-6">

                            <div class="region-card">

                                <i class="bi bi-geo-alt-fill"></i>

                                <h6 class="mb-1 fw-bold">
                                    Medan
                                </h6>

                                <small class="text-muted">
                                    Kota
                                </small>

                            </div>

                        </div>

                        <div class="col-6">

                            <div class="region-card">

                                <i class="bi bi-geo-alt-fill"></i>

                                <h6 class="mb-1 fw-bold">
                                    Binjai
                                </h6>

                                <small class="text-muted">
                                    Kota
                                </small>

                            </div>

                        </div>

                        <div class="col-6">

                            <div class="region-card">

                                <i class="bi bi-geo-alt-fill"></i>

                                <h6 class="mb-1 fw-bold">
                                    Deli Serdang
                                </h6>

                                <small class="text-muted">
                                    Kabupaten
                                </small>

                            </div>

                        </div>

                        <div class="col-6">

                            <div class="region-card">

                                <i class="bi bi-geo-alt-fill"></i>

                                <h6 class="mb-1 fw-bold">
                                    Langkat
                                </h6>

                                <small class="text-muted">
                                    Kabupaten
                                </small>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?= $this->endSection() ?>

    <?= $this->section('js') ?>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const chartWilayah = document.getElementById('chartWilayah');

        new Chart(chartWilayah, {

            type: 'bar',

            data: {

                labels: <?= json_encode($chartWilayahLabel); ?>,

                datasets: [{

                    label: 'Total Produksi',

                    data: <?= json_encode($chartWilayahData); ?>,

                    borderRadius: 8

                }]

            },

            options: {

                responsive: true,

                maintainAspectRatio: false,

                plugins: {

                    legend: {

                        display: false

                    }

                },

                scales: {

                    y: {

                        beginAtZero: true

                    }

                }

            }

        });


        const chartJenis = document.getElementById('chartJenis');

        new Chart(chartJenis, {

            type: 'doughnut',

            data: {

                labels: <?= json_encode($chartJenisLabel); ?>,

                datasets: [{

                    data: <?= json_encode($chartJenisData); ?>,

                    borderWidth: 0

                }]

            },

            options: {

                responsive: true,

                maintainAspectRatio: false,

                plugins: {

                    legend: {

                        position: 'bottom'

                    }

                }

            }

        });
    </script>

    <?= $this->endSection() ?>