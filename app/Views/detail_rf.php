<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        Detail Proses Model Random Forest
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container-fluid py-4">

        <!-- ===================================================== -->
        <!-- HEADER -->
        <!-- ===================================================== -->

        <div class="card shadow-sm border-0 mb-4">

            <div class="card-body p-4">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <h2 class="fw-bold mb-2">

                            Detail Proses Model Random Forest

                        </h2>

                        <p class="text-muted mb-0">

                            Transparansi proses klasifikasi prioritas produksi
                            padi menggunakan algoritma Random Forest.

                        </p>

                    </div>

                    <button class="btn btn-success">

                        <i class="bi bi-arrow-left-circle"></i>

                        Kembali

                    </button>

                </div>

            </div>

        </div>

        <!-- ===================================================== -->
        <!-- INFORMASI MODEL -->
        <!-- ===================================================== -->

        <div class="row g-4 mb-4">

            <div class="col-lg-3">

                <div class="card shadow-sm border-0 h-100">

                    <div class="card-body text-center">

                        <i class="bi bi-cpu-fill display-4 text-success"></i>

                        <h6 class="mt-3 text-muted">

                            Algoritma

                        </h6>

                        <h4 class="fw-bold">

                            Random Forest

                        </h4>

                    </div>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="card shadow-sm border-0 h-100">

                    <div class="card-body text-center">

                        <i class="bi bi-tree-fill display-4 text-primary"></i>

                        <h6 class="mt-3 text-muted">

                            Decision Tree

                        </h6>

                        <h4 class="fw-bold">

                            100 Tree

                        </h4>

                    </div>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="card shadow-sm border-0 h-100">

                    <div class="card-body text-center">

                        <i class="bi bi-sliders display-4 text-warning"></i>

                        <h6 class="mt-3 text-muted">

                            Jumlah Fitur

                        </h6>

                        <h4 class="fw-bold">

                            7 Fitur

                        </h4>

                    </div>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="card shadow-sm border-0 h-100">

                    <div class="card-body text-center">

                        <i class="bi bi-graph-up-arrow display-4 text-danger"></i>

                        <h6 class="mt-3 text-muted">

                            Akurasi

                        </h6>

                        <h4 class="fw-bold">

                            95%

                        </h4>

                    </div>

                </div>

            </div>

        </div>

        <!-- ===================================================== -->
        <!-- PENJELASAN RANDOM FOREST -->
        <!-- ===================================================== -->

        <div class="card shadow-sm border-0 mb-4">

            <div class="card-header bg-white">

                <h4 class="fw-bold mb-0">

                    Apa itu Random Forest?

                </h4>

            </div>

            <div class="card-body">

                <p class="mb-3">

                    Random Forest merupakan algoritma Machine Learning yang
                    membangun banyak Decision Tree kemudian menggabungkan
                    seluruh hasil prediksi menggunakan metode
                    <strong>Majority Voting</strong>.

                </p>

                <p class="mb-0">

                    Pada sistem ini Random Forest digunakan untuk menentukan
                    tingkat prioritas produksi padi menjadi tiga kelas yaitu

                    <span class="badge bg-success">

                        Tinggi

                    </span>

                    <span class="badge bg-warning text-dark">

                        Sedang

                    </span>

                    <span class="badge bg-danger">

                        Rendah

                    </span>

                </p>

            </div>

        </div>

        <!-- ===================================================== -->
        <!-- FLOW PROSES -->
        <!-- ===================================================== -->

        <div class="card shadow-sm border-0">

            <div class="card-header bg-white">

                <h4 class="fw-bold mb-0">

                    Alur Kerja Random Forest

                </h4>

            </div>

            <div class="card-body">

                <div class="row text-center">

                    <div class="col-lg">

                        <div class="border rounded p-4">

                            <i class="bi bi-database-fill display-5 text-success"></i>

                            <h5 class="mt-3">

                                Dataset

                            </h5>

                            <small class="text-muted">

                                Data Produksi Padi

                            </small>

                        </div>

                    </div>

                    <div class="col-lg-1 d-flex align-items-center justify-content-center">

                        <i class="bi bi-arrow-right display-5"></i>

                    </div>

                    <div class="col-lg">

                        <div class="border rounded p-4">

                            <i class="bi bi-funnel-fill display-5 text-primary"></i>

                            <h5 class="mt-3">

                                Preprocessing

                            </h5>

                            <small class="text-muted">

                                Membersihkan Data

                            </small>

                        </div>

                    </div>

                    <div class="col-lg-1 d-flex align-items-center justify-content-center">

                        <i class="bi bi-arrow-right display-5"></i>

                    </div>

                    <div class="col-lg">

                        <div class="border rounded p-4">

                            <i class="bi bi-123 display-5 text-warning"></i>

                            <h5 class="mt-3">

                                Label Encoding

                            </h5>

                            <small class="text-muted">

                                Konversi Data

                            </small>

                        </div>

                    </div>

                    <div class="col-lg-1 d-flex align-items-center justify-content-center">

                        <i class="bi bi-arrow-right display-5"></i>

                    </div>

                    <div class="col-lg">

                        <div class="border rounded p-4">

                            <i class="bi bi-diagram-3-fill display-5 text-success"></i>

                            <h5 class="mt-3">

                                Random Forest

                            </h5>

                            <small class="text-muted">

                                100 Decision Tree

                            </small>

                        </div>

                    </div>

                    <div class="col-lg-1 d-flex align-items-center justify-content-center">

                        <i class="bi bi-arrow-right display-5"></i>

                    </div>

                    <div class="col-lg">

                        <div class="border rounded p-4 bg-success-subtle">

                            <i class="bi bi-check-circle-fill display-5 text-success"></i>

                            <h5 class="mt-3">

                                Hasil

                            </h5>

                            <small>

                                Prioritas Produksi

                            </small>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- ===================================================== -->
        <!-- DATASET -->
        <!-- ===================================================== -->

        <div class="card shadow-sm border-0 mt-4 mb-4">

            <div class="card-header bg-white">

                <h4 class="fw-bold mb-0">

                    Dataset yang Digunakan

                </h4>

            </div>

            <div class="card-body">

                <p class="text-muted">

                    Dataset yang digunakan merupakan data produksi padi
                    berdasarkan wilayah dan jenis padi yang nantinya akan
                    diproses oleh algoritma Random Forest.

                </p>

                <div class="table-responsive">

                    <table class="table table-bordered table-hover align-middle">

                        <thead class="table-success">

                            <tr>

                                <th>No</th>
                                <th>Wilayah</th>
                                <th>Jenis Padi</th>
                                <th>Luas Lahan</th>
                                <th>Sasaran Tanam</th>
                                <th>Sasaran Panen</th>
                                <th>Sasaran Produksi</th>
                                <th>Produktivitas</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>1</td>
                                <td>Deli Serdang</td>
                                <td>Padi Sawah</td>
                                <td>30.546</td>
                                <td>62.994</td>
                                <td>59.095</td>
                                <td>375.105</td>
                                <td>1,36</td>

                            </tr>

                            <tr>

                                <td>2</td>
                                <td>Langkat</td>
                                <td>Padi Umum</td>
                                <td>20.009</td>
                                <td>59.006</td>
                                <td>57.682</td>
                                <td>290.068</td>
                                <td>14,50</td>

                            </tr>

                            <tr>

                                <td>3</td>
                                <td>Medan</td>
                                <td>Padi Ladang</td>
                                <td>729</td>
                                <td>14.788</td>
                                <td>10.187</td>
                                <td>37.423</td>
                                <td>51,33</td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        <!-- ===================================================== -->
        <!-- PREPROCESSING -->
        <!-- ===================================================== -->

        <div class="card shadow-sm border-0 mb-4">

            <div class="card-header bg-white">

                <h4 class="fw-bold mb-0">

                    Tahap Preprocessing

                </h4>

            </div>

            <div class="card-body">

                <div class="row g-4">

                    <div class="col-md-3">

                        <div class="border rounded p-3 h-100">

                            <h5>

                                <i class="bi bi-search text-primary"></i>

                                Missing Value

                            </h5>

                            <hr>

                            <p class="mb-0">

                                Mengecek apakah terdapat data kosong
                                pada setiap atribut.

                            </p>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="border rounded p-3 h-100">

                            <h5>

                                <i class="bi bi-files text-success"></i>

                                Data Duplikat

                            </h5>

                            <hr>

                            <p class="mb-0">

                                Menghapus data yang memiliki isi
                                sama sehingga tidak mempengaruhi model.

                            </p>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="border rounded p-3 h-100">

                            <h5>

                                <i class="bi bi-trash text-danger"></i>

                                Drop Kolom

                            </h5>

                            <hr>

                            <p class="mb-0">

                                Kolom yang tidak digunakan seperti
                                ID, Created At dan Updated At
                                dihapus dari dataset.

                            </p>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="border rounded p-3 h-100">

                            <h5>

                                <i class="bi bi-check-circle text-warning"></i>

                                Dataset Bersih

                            </h5>

                            <hr>

                            <p class="mb-0">

                                Dataset siap masuk ke tahap
                                Label Encoding dan pelatihan model.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- ===================================================== -->
        <!-- LABEL ENCODING -->
        <!-- ===================================================== -->

        <div class="card shadow-sm border-0 mb-4">

            <div class="card-header bg-white">

                <h4 class="fw-bold mb-0">

                    Label Encoding

                </h4>

            </div>

            <div class="card-body">

                <p class="text-muted">

                    Algoritma Random Forest hanya dapat mengolah data numerik,
                    sehingga data kategori diubah menjadi angka menggunakan
                    Label Encoder.

                </p>

                <div class="table-responsive">

                    <table class="table table-bordered">

                        <thead class="table-primary">

                            <tr>

                                <th>Data Asli</th>

                                <th>Hasil Encoding</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>Medan</td>

                                <td>0</td>

                            </tr>

                            <tr>

                                <td>Binjai</td>

                                <td>1</td>

                            </tr>

                            <tr>

                                <td>Deli Serdang</td>

                                <td>2</td>

                            </tr>

                            <tr>

                                <td>Langkat</td>

                                <td>3</td>

                            </tr>

                            <tr>

                                <td>Padi Sawah</td>

                                <td>0</td>

                            </tr>

                            <tr>

                                <td>Padi Ladang</td>

                                <td>1</td>

                            </tr>

                            <tr>

                                <td>Padi Umum</td>

                                <td>2</td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>
        <!-- ===================================================== -->
        <!-- TRAIN TEST SPLIT -->
        <!-- ===================================================== -->

        <div class="card shadow-sm border-0 mb-4">

            <div class="card-header bg-white">

                <h4 class="fw-bold mb-0">

                    Pembagian Data (Train Test Split)

                </h4>

            </div>

            <div class="card-body">

                <div class="row text-center">

                    <div class="col-md-6">

                        <div class="border rounded p-4 bg-success-subtle h-100">

                            <i class="bi bi-database-fill display-4 text-success"></i>

                            <h3 class="fw-bold mt-3">

                                80%

                            </h3>

                            <h5>

                                Data Training

                            </h5>

                            <p class="text-muted mb-0">

                                Digunakan untuk membangun model
                                Random Forest.

                            </p>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="border rounded p-4 bg-warning-subtle h-100">

                            <i class="bi bi-clipboard-check-fill display-4 text-warning"></i>

                            <h3 class="fw-bold mt-3">

                                20%

                            </h3>

                            <h5>

                                Data Testing

                            </h5>

                            <p class="text-muted mb-0">

                                Digunakan untuk menguji performa model.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- ===================================================== -->
        <!-- PEMBENTUKAN RANDOM FOREST -->
        <!-- ===================================================== -->

        <div class="card shadow-sm border-0 mb-4">

            <div class="card-header bg-white">

                <h4 class="fw-bold mb-0">

                    Pembentukan Random Forest

                </h4>

            </div>

            <div class="card-body">

                <p class="text-muted">

                    Random Forest membangun banyak Decision Tree secara
                    otomatis menggunakan data training yang berbeda-beda
                    (Bootstrap Sampling).

                </p>

                <div class="row g-4 text-center">

                    <div class="col">

                        <div class="border rounded p-3">

                            <i class="bi bi-diagram-3-fill display-5 text-success"></i>

                            <h5 class="mt-3">

                                Tree 1

                            </h5>

                        </div>

                    </div>

                    <div class="col">

                        <div class="border rounded p-3">

                            <i class="bi bi-diagram-3-fill display-5 text-primary"></i>

                            <h5 class="mt-3">

                                Tree 2

                            </h5>

                        </div>

                    </div>

                    <div class="col">

                        <div class="border rounded p-3">

                            <i class="bi bi-diagram-3-fill display-5 text-warning"></i>

                            <h5 class="mt-3">

                                Tree 3

                            </h5>

                        </div>

                    </div>

                    <div class="col">

                        <div class="border rounded p-3">

                            <i class="bi bi-three-dots display-4"></i>

                            <h5 class="mt-3">

                                ...

                            </h5>

                        </div>

                    </div>

                    <div class="col">

                        <div class="border rounded p-3 bg-success-subtle">

                            <i class="bi bi-diagram-3-fill display-5 text-success"></i>

                            <h5 class="mt-3">

                                Tree 100

                            </h5>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- ===================================================== -->
        <!-- MAJORITY VOTING -->
        <!-- ===================================================== -->

        <div class="card shadow-sm border-0 mb-4">

            <div class="card-header bg-white">

                <h4 class="fw-bold mb-0">

                    Majority Voting

                </h4>

            </div>

            <div class="card-body">

                <p class="text-muted">

                    Setiap Decision Tree menghasilkan prediksi masing-masing.
                    Hasil akhir ditentukan berdasarkan suara (Voting)
                    yang paling banyak muncul.

                </p>

                <div class="table-responsive">

                    <table class="table table-bordered text-center">

                        <thead class="table-success">

                            <tr>

                                <th>Decision Tree</th>

                                <th>Prediksi</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>Tree 1</td>

                                <td>

                                    <span class="badge bg-success">

                                        Tinggi

                                    </span>

                                </td>

                            </tr>

                            <tr>

                                <td>Tree 2</td>

                                <td>

                                    <span class="badge bg-success">

                                        Tinggi

                                    </span>

                                </td>

                            </tr>

                            <tr>

                                <td>Tree 3</td>

                                <td>

                                    <span class="badge bg-warning text-dark">

                                        Sedang

                                    </span>

                                </td>

                            </tr>

                            <tr>

                                <td>...</td>

                                <td>...</td>

                            </tr>

                            <tr>

                                <td>Tree 100</td>

                                <td>

                                    <span class="badge bg-success">

                                        Tinggi

                                    </span>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

                <div class="alert alert-success mt-4">

                    <h5 class="mb-2">

                        Hasil Voting

                    </h5>

                    <p class="mb-1">

                        Tinggi = <strong>72 Tree</strong>

                    </p>

                    <p class="mb-1">

                        Sedang = <strong>20 Tree</strong>

                    </p>

                    <p class="mb-0">

                        Rendah = <strong>8 Tree</strong>

                    </p>

                    <hr>

                    <h4 class="fw-bold text-success mb-0">

                        Prediksi Akhir = Tinggi

                    </h4>

                </div>

            </div>

        </div>

        <!-- ===================================================== -->
        <!-- FEATURE IMPORTANCE -->
        <!-- ===================================================== -->

        <div class="card shadow-sm border-0 mb-4">

            <div class="card-header bg-white">

                <h4 class="fw-bold mb-0">

                    Feature Importance

                </h4>

            </div>

            <div class="card-body">

                <p class="text-muted">

                    Nilai Feature Importance menunjukkan tingkat
                    pengaruh masing-masing atribut terhadap hasil
                    klasifikasi.

                </p>

                <canvas id="featureImportanceChart"
                    height="120">

                </canvas>

            </div>

        </div>
        <!-- ===================================================== -->
        <!-- CONTOH PROSES PREDIKSI -->
        <!-- ===================================================== -->

        <div class="card shadow-sm border-0 mb-4">

            <div class="card-header bg-white">

                <h4 class="fw-bold mb-0">

                    Simulasi Proses Prediksi

                </h4>

            </div>

            <div class="card-body">

                <div class="alert alert-info">

                    Contoh berikut memperlihatkan bagaimana satu data
                    diproses oleh algoritma Random Forest hingga
                    menghasilkan keputusan akhir.

                </div>

                <div class="table-responsive">

                    <table class="table table-bordered">

                        <thead class="table-light">

                            <tr>

                                <th width="35%">
                                    Atribut
                                </th>

                                <th>
                                    Nilai
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>Wilayah</td>
                                <td>Deli Serdang</td>

                            </tr>

                            <tr>

                                <td>Jenis Padi</td>
                                <td>Padi Sawah</td>

                            </tr>

                            <tr>

                                <td>Luas Lahan</td>
                                <td>30.546 Ha</td>

                            </tr>

                            <tr>

                                <td>Sasaran Tanam</td>
                                <td>62.994 Ha</td>

                            </tr>

                            <tr>

                                <td>Sasaran Panen</td>
                                <td>59.095 Ha</td>

                            </tr>

                            <tr>

                                <td>Sasaran Produksi</td>
                                <td>375.105 Ton</td>

                            </tr>

                            <tr>

                                <td>Produktivitas</td>
                                <td>1,36 Ton/Ha</td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        <!-- ===================================================== -->
        <!-- ILUSTRASI POHON KEPUTUSAN -->
        <!-- ===================================================== -->

        <div class="card shadow-sm border-0 mb-4">

            <div class="card-header bg-white">

                <h4 class="fw-bold mb-0">

                    Contoh Keputusan Decision Tree

                </h4>

            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-lg-4">

                        <div class="border rounded p-4 h-100">

                            <h5 class="text-success">

                                Tree 1

                            </h5>

                            <hr>

                            Luas Lahan > 20.000

                            <br>

                            ↓

                            <br><br>

                            Produksi > 300.000

                            <br>

                            ↓

                            <br><br>

                            <strong class="text-success">

                                Prediksi = Tinggi

                            </strong>

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="border rounded p-4 h-100">

                            <h5 class="text-primary">

                                Tree 2

                            </h5>

                            <hr>

                            Produktivitas > 1

                            <br>

                            ↓

                            <br><br>

                            Sasaran Panen > 50.000

                            <br>

                            ↓

                            <br><br>

                            <strong class="text-success">

                                Prediksi = Tinggi

                            </strong>

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="border rounded p-4 h-100">

                            <h5 class="text-warning">

                                Tree 3

                            </h5>

                            <hr>

                            Luas Lahan > 20.000

                            <br>

                            ↓

                            <br><br>

                            Produktivitas ≤ 2

                            <br>

                            ↓

                            <br><br>

                            <strong class="text-warning">

                                Prediksi = Sedang

                            </strong>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- ===================================================== -->
        <!-- ALUR RANDOM FOREST -->
        <!-- ===================================================== -->

        <div class="card shadow-sm border-0 mb-4">

            <div class="card-header bg-white">

                <h4 class="fw-bold mb-0">

                    Alur Pengambilan Keputusan

                </h4>

            </div>

            <div class="card-body text-center">

                <div class="row align-items-center">

                    <div class="col">

                        <div class="border rounded p-3">

                            Data Produksi

                        </div>

                    </div>

                    <div class="col-auto">

                        <i class="bi bi-arrow-right-circle-fill fs-2 text-success"></i>

                    </div>

                    <div class="col">

                        <div class="border rounded p-3">

                            Random Forest

                        </div>

                    </div>

                    <div class="col-auto">

                        <i class="bi bi-arrow-right-circle-fill fs-2 text-success"></i>

                    </div>

                    <div class="col">

                        <div class="border rounded p-3">

                            100 Decision Tree

                        </div>

                    </div>

                    <div class="col-auto">

                        <i class="bi bi-arrow-right-circle-fill fs-2 text-success"></i>

                    </div>

                    <div class="col">

                        <div class="border rounded p-3 bg-success-subtle">

                            Majority Voting

                        </div>

                    </div>

                    <div class="col-auto">

                        <i class="bi bi-arrow-right-circle-fill fs-2 text-success"></i>

                    </div>

                    <div class="col">

                        <div class="border rounded p-3 bg-success text-white">

                            Prioritas Produksi

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- ===================================================== -->
        <!-- KESIMPULAN -->
        <!-- ===================================================== -->

        <div class="card shadow-sm border-0">

            <div class="card-header bg-white">

                <h4 class="fw-bold mb-0">

                    Kesimpulan Proses Model

                </h4>

            </div>

            <div class="card-body">

                <div class="alert alert-success">

                    <h5 class="fw-bold">

                        Hasil Akhir Prediksi

                    </h5>

                    <hr>

                    Berdasarkan seluruh Decision Tree yang dibangun,
                    mayoritas pohon memberikan prediksi
                    <strong>Tinggi</strong>.

                    Oleh karena itu, Random Forest menetapkan bahwa
                    data produksi tersebut memiliki
                    <strong>Prioritas Produksi Tinggi</strong>.

                </div>

                <div class="alert alert-secondary mb-0">

                    <strong>Catatan:</strong>

                    Halaman ini bertujuan memberikan transparansi proses
                    kerja algoritma Random Forest mulai dari preprocessing,
                    pembentukan Decision Tree, Majority Voting hingga
                    menghasilkan keputusan akhir sehingga pengguna dapat
                    memahami bagaimana sistem melakukan klasifikasi.

                </div>

            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>