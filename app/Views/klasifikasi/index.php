<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<style>
    .process-card {
        border: none;
        border-radius: 16px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, .08);
    }

    .step-card {
        border: none;
        border-radius: 14px;
        box-shadow: 0 5px 18px rgba(0, 0, 0, .06);
        transition: .3s;
        height: 100%;
    }

    .step-card:hover {
        transform: translateY(-4px);
    }

    .step-number {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        font-weight: bold;
        color: #fff;
        background: #198754;
    }

    .step-title {
        font-size: 18px;
        font-weight: 700;
    }

    .step-desc {
        color: #6c757d;
        font-size: 14px;
        margin-top: 6px;
    }

    .status-wait {
        background: #f8f9fa;
        color: #6c757d;
        border-radius: 30px;
        padding: 6px 15px;
        font-size: 13px;
        font-weight: 600;
    }

    .status-process {
        background: #fff3cd;
        color: #856404;
        border-radius: 30px;
        padding: 6px 15px;
        font-size: 13px;
        font-weight: 600;
    }

    .status-success {
        background: #d1e7dd;
        color: #146c43;
        border-radius: 30px;
        padding: 6px 15px;
        font-size: 13px;
        font-weight: 600;
    }

    .btn-process {
        padding: 12px 30px;
        border-radius: 10px;
        font-weight: 600;
    }

    .info-box {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 15px;
    }
</style>

<div class="container-fluid">

    <!-- HEADER -->

    <div class="card process-card mb-4">

        <div class="card-body p-4">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <h3 class="fw-bold mb-2">

                        Proses Klasifikasi Prioritas Produksi Padi

                    </h3>

                    <p class="text-muted mb-0">

                        Halaman ini menampilkan seluruh tahapan proses klasifikasi
                        prioritas produksi padi menggunakan algoritma
                        <strong>Random Forest</strong>.
                        Seluruh proses dilakukan secara bertahap sehingga pengguna
                        dapat mengetahui setiap langkah yang dikerjakan sistem.

                    </p>

                </div>



            </div>

        </div>

    </div>

    <!-- INFORMASI -->

    <div class="row mb-4">

        <div class="col-lg-4">

            <div class="info-box">

                <small class="text-muted">

                    Algoritma

                </small>

                <h5 class="fw-bold mt-2 mb-0">

                    Random Forest

                </h5>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="info-box">

                <small class="text-muted">

                    Total Tahapan

                </small>

                <h5 class="fw-bold mt-2 mb-0">

                    7 Tahapan Proses

                </h5>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="info-box">

                <small class="text-muted">

                    Status

                </small>

                <h5 class="fw-bold text-secondary mt-2 mb-0">

                    Menunggu Proses

                </h5>

            </div>

        </div>

    </div>

    <?= $this->include('klasifikasi/proses/ambil_data') ?>

    <?= $this->include('klasifikasi/proses/preprocessing') ?>

    <?= $this->include('klasifikasi/proses/labeling') ?>

    <?= $this->include('klasifikasi/proses/encoding') ?>

    <?= $this->include('klasifikasi/proses/load_model') ?>
    <?= $this->include('klasifikasi/proses/evaluasi') ?>

    <?= $this->include('klasifikasi/proses/prediksi') ?>

    <?= $this->include('klasifikasi/proses/simpan_hasil') ?>




    <!-- RINGKASAN PROSES -->

    <div class="card process-card">

        <div class="card-header bg-white border-0 pt-4">

            <h5 class="fw-bold mb-0">

                Ringkasan Proses Klasifikasi

            </h5>

        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-lg-6 mb-4">

                    <table class="table align-middle">

                        <tr>

                            <th width="220">
                                Algoritma
                            </th>

                            <td>
                                Random Forest
                            </td>

                        </tr>

                        <tr>

                            <th>
                                Total Tahapan
                            </th>

                            <td>
                                7 Tahapan
                            </td>

                        </tr>

                        <tr>

                            <th>
                                Status Proses
                            </th>

                            <td>

                                <span class="status-wait">

                                    Menunggu Proses

                                </span>

                            </td>

                        </tr>

                        <tr>

                            <th>
                                Dataset
                            </th>

                            <td>

                                Data Produksi Padi

                            </td>

                        </tr>

                    </table>

                </div>

                <div class="col-lg-6">

                    <div class="alert alert-light border mb-3">

                        <h6 class="fw-bold">

                            Keterangan

                        </h6>

                        <p class="mb-0 text-muted">

                            Halaman ini digunakan untuk menampilkan seluruh
                            tahapan proses klasifikasi secara transparan.
                            Setiap proses akan dijalankan secara berurutan
                            mulai dari pengambilan data hingga penyimpanan
                            hasil klasifikasi ke database.

                        </p>

                    </div>

                    <div class="alert alert-success mb-0">

                        <i class="bi bi-info-circle-fill me-2"></i>

                        Setelah seluruh proses selesai dilakukan,
                        hasil klasifikasi dapat dilihat pada menu
                        <strong>Hasil Klasifikasi</strong>.

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        const totalStep = 7;

        for (let i = 1; i <= totalStep; i++) {

            document.getElementById("statusStep" + i).innerHTML =
                '<span class="badge bg-secondary">Menunggu</span>';

            document.getElementById("outputStep" + i).innerHTML = "-";

            if (i == 1) {

                document.getElementById("btnStep" + i).disabled = false;

            } else {

                document.getElementById("btnStep" + i).disabled = true;

            }

        }

    });


    function proses(url, step, nextStep) {

        const btn = document.getElementById("btnStep" + step);
        const status = document.getElementById("statusStep" + step);
        const output = document.getElementById("outputStep" + step);

        btn.disabled = true;

        btn.innerHTML =
            '<i class="bi bi-hourglass-split me-2"></i>Sedang Diproses';

        status.innerHTML =
            '<span class="badge bg-warning text-dark">Diproses</span>';

        fetch(url, {

                method: "POST"

            })

            .then(res => res.json())

            .then(res => {

                if (res.status) {

                    status.innerHTML =
                        '<span class="badge bg-success">Berhasil</span>';

                    btn.innerHTML =
                        '<i class="bi bi-check-circle me-2"></i>Selesai';

                    let html = "";

                    for (const key in res.output) {

                        html +=
                            "<strong>" +
                            key.replaceAll("_", " ") +
                            "</strong> : " +
                            res.output[key] +
                            "<br>";

                    }

                    output.innerHTML = html;

                    if (nextStep) {

                        document.getElementById("btnStep" + nextStep).disabled = false;

                    }

                } else {

                    status.innerHTML =
                        '<span class="badge bg-danger">Gagal</span>';

                    btn.disabled = false;

                    btn.innerHTML =
                        '<i class="bi bi-arrow-repeat me-2"></i>Coba Lagi';

                    output.innerHTML = res.message;

                }

            })

            .catch(error => {

                status.innerHTML =
                    '<span class="badge bg-danger">Error</span>';

                btn.disabled = false;

                btn.innerHTML =
                    '<i class="bi bi-arrow-repeat me-2"></i>Coba Lagi';

                output.innerHTML = error;

            });

    }


    /*
    |--------------------------------------------------------------------------
    | STEP 1
    |--------------------------------------------------------------------------
    */

    function ambilData() {

        proses("<?= base_url('klasifikasi/ambil-data') ?>", 1, 2);

    }


    /*
    |--------------------------------------------------------------------------
    | STEP 2
    |--------------------------------------------------------------------------
    */

    function preprocessing() {

        proses("<?= base_url('klasifikasi/preprocessing') ?>", 2, 3);

    }


    /*
    |--------------------------------------------------------------------------
    | STEP 3
    |--------------------------------------------------------------------------
    */

    function labeling() {

        proses("<?= base_url('klasifikasi/labeling') ?>", 3, 4);

    }


    /*
    |--------------------------------------------------------------------------
    | STEP 4
    |--------------------------------------------------------------------------
    */

    function encoding() {

        proses("<?= base_url('klasifikasi/encoding') ?>", 4, 5);

    }


    /*
    |--------------------------------------------------------------------------
    | STEP 5
    |--------------------------------------------------------------------------
    */

    function loadModel() {

        proses("<?= base_url('klasifikasi/load-model') ?>", 5, 6);

    }


    /*
    |--------------------------------------------------------------------------
    | STEP 6
    |--------------------------------------------------------------------------
    */

    function prediksi() {

        proses("<?= base_url('klasifikasi/prediksi') ?>", 6, 7);

    }


    /*
    |--------------------------------------------------------------------------
    | STEP 7
    |--------------------------------------------------------------------------
    */

    function simpanHasil() {

        proses("<?= base_url('klasifikasi/simpan-hasil') ?>", 7, null);

    }


    function evaluasiModel() {

        const btn = document.getElementById("btnEvaluasi");
        const status = document.getElementById("statusEvaluasi");
        const output = document.getElementById("outputEvaluasi");

        btn.disabled = true;
        status.innerHTML = `<span class="badge bg-warning">Proses...</span>`;
        output.innerHTML = "Menghitung evaluasi model...";

        fetch("<?= base_url('klasifikasi/evaluasi') ?>")
            .then(res => res.json())
            .then(data => {

                if (!data.status) {
                    throw data;
                }

                status.innerHTML = `<span class="badge bg-success">Selesai</span>`;

                output.innerHTML = `
                <div class="small">
                    <div><b>Akurasi:</b> ${(data.akurasi * 100).toFixed(2)}%</div>
                    <div><b>Precision:</b> ${(data.presisi * 100).toFixed(2)}%</div>
                    <div><b>Recall:</b> ${(data.recall * 100).toFixed(2)}%</div>
                    <div><b>F1 Score:</b> ${(data.f1_score * 100).toFixed(2)}%</div>
                </div>
            `;

            })
            .catch(err => {

                status.innerHTML = `<span class="badge bg-danger">Error</span>`;
                output.innerHTML = err.message || "Terjadi kesalahan";

            })
            .finally(() => {
                btn.disabled = false;
            });
    }
</script>

<?= $this->endSection() ?>