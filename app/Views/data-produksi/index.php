<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<style>
    .page-card,
    .stat-card,
    .filter-card,
    .table-card {
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
        width: 55px;
        height: 55px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
    }

    .table-card .card-header {
        border-bottom: none;
    }

    .table thead th {
        background: #f8fafc;
        border-bottom: none;
        color: #6b7280;
        font-size: 13px;
        font-weight: 600;
        white-space: nowrap;
    }

    .table tbody td {
        vertical-align: middle;
        white-space: nowrap;
    }

    .badge-sawah {
        background: rgba(25, 135, 84, .15);
        color: #198754;
        padding: 7px 14px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 600;
    }

    .badge-ladang {
        background: rgba(13, 110, 253, .15);
        color: #0d6efd;
        padding: 7px 14px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 600;
    }

    .badge-umum {
        background: rgba(255, 193, 7, .15);
        color: #b8860b;
        padding: 7px 14px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 600;
    }

    .btn-action {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .table-responsive::-webkit-scrollbar {
        height: 8px;
    }

    .table-responsive::-webkit-scrollbar-thumb {
        background: #d1d5db;
        border-radius: 20px;
    }
</style>

<div class="container-fluid">

    <!-- HEADER -->
    <div class="card page-card mb-4">

        <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h3 class="fw-bold mb-2">
                        Data Produksi Padi
                    </h3>

                    <p class="text-muted mb-0">
                        Kelola data produksi padi yang digunakan
                        untuk proses klasifikasi prioritas produksi.
                    </p>

                </div>

                <button
                    class="btn btn-success"
                    data-bs-toggle="modal"
                    data-bs-target="#modalTambah">

                    <i class="bi bi-plus-circle"></i>
                    Tambah Data

                </button>

            </div>

        </div>

    </div>

    <!-- STATISTIK -->
    <div class="row g-4 mb-4">

        <div class="col-lg-3 col-md-6">
            <div class="card stat-card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <small class="text-muted">Total Data</small>
                        <h2 class="fw-bold mt-2 mb-0">
                            <?= count($data_produksi); ?>
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
                        <small class="text-muted">Jenis Padi</small>
                        <h2 class="fw-bold mt-2 mb-0">3</h2>
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
                        <small class="text-muted">Wilayah</small>
                        <h2 class="fw-bold mt-2 mb-0">4</h2>
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
                        <small class="text-muted">Total Produksi</small>
                        <h2 class="fw-bold mt-2 mb-0">-</h2>
                    </div>
                    <div class="stat-icon bg-danger-subtle text-danger">
                        <i class="bi bi-calendar-fill"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- FILTER -->
    <div class="card filter-card mb-4">
        <div class="card-body">

            <div class="row g-3">

                <div class="col-lg-3">
                    <label class="form-label">Wilayah</label>
                    <select class="form-select" id="filterWilayah">
                        <option value="">Semua Wilayah</option>
                        <option>Medan</option>
                        <option>Binjai</option>
                        <option>Deli Serdang</option>
                        <option>Langkat</option>
                    </select>
                </div>

                <div class="col-lg-3">
                    <label class="form-label">Jenis Padi</label>
                    <select class="form-select" id="filterJenis">
                        <option value="">Semua Jenis</option>
                        <option>Padi Sawah</option>
                        <option>Padi Ladang</option>
                        <option>Padi Umum</option>
                    </select>
                </div>

                <div class="col-lg-3">
                    <label class="form-label">Bulan</label>
                    <select class="form-select" id="filterBulan">
                        <option value="">Semua Bulan</option>
                        <option>Januari</option>
                        <option>Februari</option>
                        <option>Maret</option>
                    </select>
                </div>

                <div class="col-lg-3">
                    <label class="form-label">Pencarian</label>
                    <input type="text" class="form-control" id="searchInput" placeholder="Cari data...">
                </div>

            </div>

        </div>
    </div>

    <!-- TABLE -->
    <div class="card table-card">

        <div class="card-header bg-white pt-4">
            <h5 class="mb-0">Data Produksi Padi</h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle" id="tabelProduksi">

                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Wilayah</th>
                            <th>Bulan</th>
                            <th>Jenis Padi</th>
                            <th>Luas Lahan</th>
                            <th>Sasaran Tanam</th>
                            <th>Sasaran Panen</th>
                            <th>Sasaran Produksi</th>
                            <th>Produktivitas</th>
                            <th width="140">Aksi</th>
                        </tr>

                        <tr id="noDataRow" style="display:none;">
                            <td colspan="10" class="text-center py-4 text-muted">
                                <i class="bi bi-search fs-3 d-block mb-2"></i>
                                Data tidak ditemukan
                            </td>
                        </tr>

                    </thead>

                    <tbody>

                        <?php if (empty($data_produksi)) : ?>

                            <tr>
                                <td colspan="10" class="text-center py-4 text-muted">
                                    <i class="bi bi-inbox fs-3 d-block mb-2"></i>
                                    Data belum tersedia
                                </td>
                            </tr>

                        <?php else : ?>

                            <?php $no = 1; ?>

                            <?php foreach ($data_produksi as $row): ?>

                                <tr class="data-row">

                                    <td><?= $no++; ?></td>

                                    <td><?= $row['wilayah']; ?></td>

                                    <td><?= $row['bulan']; ?></td>

                                    <td>
                                        <span class="badge bg-success">
                                            <?= $row['jenis_padi']; ?>
                                        </span>
                                    </td>

                                    <td><?= $row['luas_lahan']; ?> Ha</td>

                                    <td><?= $row['sasaran_tanam']; ?> Ha</td>

                                    <td><?= $row['sasaran_panen']; ?> Ha</td>

                                    <td><?= $row['sasaran_produksi']; ?> Ton</td>

                                    <td><?= $row['produktivitas']; ?></td>

                                    <td>

                                        <!-- EDIT -->
                                        <button
                                            type="button"
                                            class="btn btn-warning btn-action btn-edit"

                                            data-id="<?= $row['id_produksi']; ?>"

                                            data-wilayah="<?= $row['wilayah']; ?>"

                                            data-bulan="<?= $row['bulan']; ?>"

                                            data-tahun="<?= $row['tahun']; ?>"

                                            data-jenis="<?= $row['jenis_padi']; ?>"

                                            data-luas="<?= $row['luas_lahan']; ?>"

                                            data-tanam="<?= $row['sasaran_tanam']; ?>"

                                            data-panen="<?= $row['sasaran_panen']; ?>"

                                            data-produksi="<?= $row['sasaran_produksi']; ?>"

                                            data-bs-toggle="modal"

                                            data-bs-target="#modalEdit">

                                            <i class="bi bi-pencil"></i>

                                        </button>

                                        <!-- DELETE -->
                                        <a href="<?= base_url('/data-produksi/delete/' . $row['id_produksi']) ?>"
                                            onclick="return confirm('Yakin hapus data ini?')"
                                            class="btn btn-danger btn-action">

                                            <i class="bi bi-trash"></i>

                                        </a>

                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>


    <!-- MODAL AREA -->

    <!-- Modal Hapus -->
    <div class="modal fade"
        id="modalHapus"
        tabindex="-1">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content border-0 shadow">

                <div class="modal-body text-center p-5">

                    <div class="mb-4">

                        <div
                            class="mx-auto d-flex align-items-center justify-content-center"
                            style="
                            width:80px;
                            height:80px;
                            border-radius:50%;
                            background:#fee2e2;
                        ">

                            <i class="bi bi-trash text-danger fs-1"></i>

                        </div>

                    </div>

                    <h4 class="fw-bold mb-3">
                        Hapus Data?
                    </h4>

                    <p class="text-muted mb-4">

                        Apakah Anda yakin ingin menghapus data produksi ini?

                        <br>

                        Tindakan ini tidak dapat dibatalkan.

                    </p>

                    <div class="d-flex justify-content-center gap-2">

                        <button
                            type="button"
                            class="btn btn-light px-4"
                            data-bs-dismiss="modal">

                            Batal

                        </button>

                        <button
                            type="button"
                            class="btn btn-danger px-4">

                            <i class="bi bi-trash"></i>

                            Ya, Hapus

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?= view('data-produksi/create'); ?>
    <?= view('data-produksi/edit'); ?>

</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        const filterWilayah = document.getElementById("filterWilayah");
        const filterJenis = document.getElementById("filterJenis");
        const filterBulan = document.getElementById("filterBulan");
        const searchInput = document.getElementById("searchInput");

        const rows = document.querySelectorAll("#tabelProduksi tbody tr.data-row");
        const noDataRow = document.getElementById("noDataRow");

        function filterTable() {

            let visibleCount = 0;

            const wilayah = filterWilayah.value.toLowerCase();
            const jenis = filterJenis.value.toLowerCase();
            const bulan = filterBulan.value.toLowerCase();
            const search = searchInput.value.toLowerCase();

            rows.forEach(row => {

                const rowWilayah = row.children[1].innerText.toLowerCase();
                const rowBulan = row.children[2].innerText.toLowerCase();
                const rowJenis = row.children[3].innerText.toLowerCase();
                const rowText = row.innerText.toLowerCase();

                let show = true;

                if (wilayah && rowWilayah !== wilayah) show = false;
                if (jenis && rowJenis.indexOf(jenis) === -1) show = false;
                if (bulan && rowBulan !== bulan) show = false;
                if (search && rowText.indexOf(search) === -1) show = false;

                row.style.display = show ? "" : "none";

                if (show) visibleCount++;

            });

            // tampilkan "data tidak ditemukan"
            if (visibleCount === 0) {
                noDataRow.style.display = "";
            } else {
                noDataRow.style.display = "none";
            }
        }

        filterWilayah.addEventListener("change", filterTable);
        filterJenis.addEventListener("change", filterTable);
        filterBulan.addEventListener("change", filterTable);
        searchInput.addEventListener("keyup", filterTable);

    });

    const tombolEdit = document.querySelectorAll(".btn-edit");

    tombolEdit.forEach(function(btn) {

        btn.addEventListener("click", function() {

            // ID
            document.getElementById("edit_id").value =
                this.dataset.id;

            // FORM ACTION
            document.getElementById("formEdit").action =
                "<?= base_url('data-produksi/update') ?>/" +
                this.dataset.id;

            // WILAYAH
            document.getElementById("edit_wilayah").value =
                this.dataset.wilayah;

            // BULAN
            document.getElementById("edit_bulan").value =
                this.dataset.bulan;

            // TAHUN
            document.getElementById("edit_tahun").value =
                this.dataset.tahun;

            // JENIS PADI
            document.getElementById("edit_jenis").value =
                this.dataset.jenis;

            // LUAS LAHAN
            document.getElementById("edit_luas").value =
                this.dataset.luas;

            // SASARAN TANAM
            document.getElementById("edit_tanam").value =
                this.dataset.tanam;

            // SASARAN PANEN
            document.getElementById("edit_panen").value =
                this.dataset.panen;

            // SASARAN PRODUKSI
            document.getElementById("edit_produksi").value =
                this.dataset.produksi;

        });

    });
</script>

<?= $this->endSection() ?>