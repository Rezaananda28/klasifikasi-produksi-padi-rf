<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<style>
    .card-custom {
        border: none;
        border-radius: 18px;
        box-shadow: 0 3px 15px rgba(0, 0, 0, .05);
    }

    .stat-card {
        border: none;
        border-radius: 18px;
        box-shadow: 0 3px 15px rgba(0, 0, 0, .05);
        transition: .3s;
    }

    .stat-card:hover {
        transform: translateY(-4px);
    }

    .icon-box {
        width: 55px;
        height: 55px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
    }

    .table thead th {
        background: #f8fafc;
        border: none;
        color: #6b7280;
        font-size: 13px;
    }

    .badge-tinggi {
        background: #dcfce7;
        color: #15803d;
        padding: 8px 14px;
        border-radius: 30px;
        font-weight: 600;
    }

    .badge-sedang {
        background: #fef3c7;
        color: #b45309;
        padding: 8px 14px;
        border-radius: 30px;
        font-weight: 600;
    }

    .badge-rendah {
        background: #fee2e2;
        color: #dc2626;
        padding: 8px 14px;
        border-radius: 30px;
        font-weight: 600;
    }
</style>

<div class="container-fluid">

    <!-- HEADER -->
    <div class="card card-custom mb-4">

        <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h3 class="fw-bold mb-2">
                        Hasil Klasifikasi Prioritas Produksi
                    </h3>

                    <p class="text-muted mb-0">
                        Analisis prioritas produksi padi menggunakan algoritma Random Forest.
                    </p>

                </div>

            </div>

        </div>

    </div>



    <!-- STATISTIK -->
    <div class="row g-4 mb-4">

        <div class="col-lg-3">

            <div class="card stat-card">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Dataset
                        </small>

                        <h3 class="fw-bold mb-0">
                            <?= $jumlahDataset ?>
                        </h3>

                    </div>

                    <div class="icon-box bg-success-subtle text-success">

                        <i class="bi bi-database-fill"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-3">

            <div class="card stat-card">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Akurasi Model
                        </small>

                        <h3 class="fw-bold mb-0">
                            95%
                        </h3>

                    </div>

                    <div class="icon-box bg-primary-subtle text-primary">

                        <i class="bi bi-graph-up-arrow"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-3">

            <div class="card stat-card">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Jumlah Kelas
                        </small>

                        <h3 class="fw-bold mb-0">
                            <?= $jumlahKelas ?>
                        </h3>

                    </div>

                    <div class="icon-box bg-warning-subtle text-warning">

                        <i class="bi bi-layers-fill"></i>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-3">

            <div class="card stat-card">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <small class="text-muted">
                            Wilayah
                        </small>

                        <h3 class="fw-bold mb-0">
                            <?= $jumlahWilayah ?>
                        </h3>

                    </div>

                    <div class="icon-box bg-danger-subtle text-danger">

                        <i class="bi bi-geo-alt-fill"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- INFORMASI MODEL -->
    <div class="card card-custom mb-4">

        <div class="card-header bg-white border-0 pt-4">

            <h5 class="fw-bold mb-0">

                Informasi Model Random Forest

            </h5>

        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6">

                    <table class="table">

                        <tr>

                            <th>Algoritma</th>

                            <td>Random Forest</td>

                        </tr>

                        <tr>

                            <th>Terakhir Diperbarui</th>

                            <td><?= date('d F Y H:i'); ?></td>

                        </tr>

                        <tr>

                            <th>Wilayah</th>

                            <td><?= $listWilayah ?></td>

                        </tr>

                    </table>

                </div>

                <div class="col-md-6">

                    <table class="table">

                        <tr>

                            <th>Target</th>

                            <td>Prioritas Produksi</td>

                        </tr>

                        <tr>

                            <th>Kelas</th>

                            <td>Tinggi, Sedang, Rendah</td>

                        </tr>

                        <tr>

                            <th>Akurasi</th>

                            <td>95%</td>

                        </tr>

                    </table>

                </div>

            </div>

        </div>

    </div>

    <!-- HASIL KLASIFIKASI -->
    <div class="card card-custom">

        <div class="card-header bg-white border-0 pt-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h5 class="fw-bold mb-1">
                        Hasil Klasifikasi Prioritas Produksi
                    </h5>

                    <small class="text-muted">
                        Hasil klasifikasi prioritas produksi padi menggunakan algoritma Random Forest
                    </small>

                </div>

            </div>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>

                        <tr>

                            <th width="80">No</th>

                            <th>Wilayah</th>

                            <th>Jenis Padi</th>

                            <th class="text-center">
                                Prioritas
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php if (empty($hasil)) : ?>

                            <tr>

                                <td colspan="4" class="text-center py-5">

                                    <i class="bi bi-inbox fs-1 text-secondary"></i>

                                    <br><br>

                                    Belum ada hasil klasifikasi.

                                </td>

                            </tr>

                        <?php else : ?>

                            <?php $no = 1; ?>

                            <?php foreach ($hasil as $row) : ?>

                                <tr>

                                    <td>

                                        <strong>

                                            <?= $no++; ?>

                                        </strong>

                                    </td>

                                    <td>

                                        <?= esc($row['wilayah']); ?>

                                    </td>

                                    <td>

                                        <?= esc($row['jenis_padi']); ?>

                                    </td>

                                    <td class="text-center">

                                        <?php

                                        if ($row['prioritas'] == "Tinggi") {

                                            $badge = "badge-tinggi";
                                        } elseif ($row['prioritas'] == "Sedang") {

                                            $badge = "badge-sedang";
                                        } else {

                                            $badge = "badge-rendah";
                                        }

                                        ?>

                                        <span class="<?= $badge; ?>">

                                            <?= esc($row['prioritas']); ?>

                                        </span>

                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>