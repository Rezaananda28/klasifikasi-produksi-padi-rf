<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- HEADER -->

    <div class="card shadow-sm border-0 mb-4">

        <div class="card-body p-5">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <span class="badge bg-success mb-3">

                        Panduan Penggunaan Sistem

                    </span>

                    <h2 class="fw-bold mb-3">

                        Sistem Klasifikasi Prioritas Produksi Padi
                        Menggunakan Algoritma Random Forest

                    </h2>

                    <p class="text-muted mb-0">

                        Halaman ini berisi panduan penggunaan sistem mulai
                        dari pengelolaan data produksi, proses klasifikasi,
                        hingga melihat hasil analisis. Ikuti setiap langkah
                        agar proses klasifikasi berjalan dengan benar.

                    </p>

                </div>

                <div class="col-lg-4 text-center">

                    <i class="bi bi-journal-richtext text-success"
                        style="font-size:120px;"></i>

                </div>

            </div>

        </div>

    </div>

    <!-- QUICK GUIDE -->

    <div class="row g-4 mb-5">

        <div class="col-lg-3">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body text-center">

                    <div class="display-6 text-primary mb-3">

                        <i class="bi bi-speedometer2"></i>

                    </div>

                    <h5 class="fw-bold">

                        Dashboard

                    </h5>

                    <p class="text-muted mb-0">

                        Melihat ringkasan data, grafik produksi,
                        serta informasi hasil klasifikasi.

                    </p>

                </div>

            </div>

        </div>

        <div class="col-lg-3">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body text-center">

                    <div class="display-6 text-success mb-3">

                        <i class="bi bi-database-fill"></i>

                    </div>

                    <h5 class="fw-bold">

                        Data Produksi

                    </h5>

                    <p class="text-muted mb-0">

                        Mengelola data produksi padi yang akan
                        digunakan sebagai dataset klasifikasi.

                    </p>

                </div>

            </div>

        </div>

        <div class="col-lg-3">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body text-center">

                    <div class="display-6 text-warning mb-3">

                        <i class="bi bi-cpu-fill"></i>

                    </div>

                    <h5 class="fw-bold">

                        Klasifikasi

                    </h5>

                    <p class="text-muted mb-0">

                        Menjalankan seluruh proses Random Forest
                        secara bertahap dan transparan.

                    </p>

                </div>

            </div>

        </div>

        <div class="col-lg-3">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body text-center">

                    <div class="display-6 text-danger mb-3">

                        <i class="bi bi-bar-chart-fill"></i>

                    </div>

                    <h5 class="fw-bold">

                        Hasil

                    </h5>

                    <p class="text-muted mb-0">

                        Menampilkan hasil klasifikasi beserta
                        prioritas produksi setiap wilayah.

                    </p>

                </div>

            </div>

        </div>

    </div>

    <!-- ALUR PENGGUNAAN -->

    <div class="card shadow-sm border-0 mb-5">

        <div class="card-header bg-white">

            <h4 class="fw-bold mb-0">

                Alur Penggunaan Sistem

            </h4>

        </div>

        <div class="card-body">

            <div class="row text-center">

                <div class="col">

                    <div class="p-3">

                        <div class="display-6 text-primary">

                            <i class="bi bi-speedometer2"></i>

                        </div>

                        <h6 class="fw-bold mt-3">

                            Dashboard

                        </h6>

                    </div>

                </div>

                <div class="col-auto d-flex align-items-center">

                    <i class="bi bi-arrow-right fs-3 text-secondary"></i>

                </div>

                <div class="col">

                    <div class="p-3">

                        <div class="display-6 text-success">

                            <i class="bi bi-database-fill"></i>

                        </div>

                        <h6 class="fw-bold mt-3">

                            Data Produksi

                        </h6>

                    </div>

                </div>

                <div class="col-auto d-flex align-items-center">

                    <i class="bi bi-arrow-right fs-3 text-secondary"></i>

                </div>

                <div class="col">

                    <div class="p-3">

                        <div class="display-6 text-warning">

                            <i class="bi bi-cpu-fill"></i>

                        </div>

                        <h6 class="fw-bold mt-3">

                            Klasifikasi

                        </h6>

                    </div>

                </div>

                <div class="col-auto d-flex align-items-center">

                    <i class="bi bi-arrow-right fs-3 text-secondary"></i>

                </div>

                <div class="col">

                    <div class="p-3">

                        <div class="display-6 text-danger">

                            <i class="bi bi-check-circle-fill"></i>

                        </div>

                        <h6 class="fw-bold mt-3">

                            Hasil

                        </h6>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- LANGKAH PENGGUNAAN -->

    <div class="card shadow-sm border-0 mb-4">

        <div class="card-header bg-white">

            <h4 class="fw-bold mb-0">

                Langkah Penggunaan Sistem

            </h4>

        </div>

        <div class="card-body">

            <div class="row g-4">

                <div class="col-lg-4">

                    <div class="border rounded-4 p-4 h-100">

                        <span class="badge bg-primary mb-3">

                            Langkah 1

                        </span>

                        <h5 class="fw-bold">

                            Dashboard

                        </h5>

                        <p class="text-muted">

                            Setelah berhasil masuk ke sistem,
                            halaman Dashboard akan menampilkan
                            informasi umum mengenai jumlah dataset,
                            grafik produksi padi, hasil klasifikasi,
                            dan ringkasan analisis.

                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="border rounded-4 p-4 h-100">

                        <span class="badge bg-success mb-3">

                            Langkah 2

                        </span>

                        <h5 class="fw-bold">

                            Data Produksi

                        </h5>

                        <p class="text-muted">

                            Masuk ke menu Data Produksi untuk
                            menambahkan, mengubah, menghapus,
                            maupun melihat seluruh data produksi
                            padi yang tersimpan pada database.

                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="border rounded-4 p-4 h-100">

                        <span class="badge bg-warning text-dark mb-3">

                            Langkah 3

                        </span>

                        <h5 class="fw-bold">

                            Klasifikasi

                        </h5>

                        <p class="text-muted">

                            Jalankan setiap tahapan proses
                            Random Forest secara berurutan,
                            mulai dari pengambilan data,
                            preprocessing hingga penyimpanan
                            hasil klasifikasi.

                        </p>

                    </div>

                </div>
                <div class="col-lg-4">

                    <div class="border rounded-4 p-4 h-100">

                        <span class="badge bg-danger mb-3">

                            Langkah 4

                        </span>

                        <h5 class="fw-bold">

                            Hasil Klasifikasi

                        </h5>

                        <p class="text-muted">

                            Setelah seluruh proses klasifikasi selesai,
                            sistem akan menampilkan hasil klasifikasi
                            prioritas produksi untuk setiap wilayah
                            dan jenis padi.

                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="border rounded-4 p-4 h-100">

                        <span class="badge bg-info mb-3">

                            Langkah 5

                        </span>

                        <h5 class="fw-bold">

                            Dashboard Analisis

                        </h5>

                        <p class="text-muted">

                            Dashboard Analisis menyajikan grafik,
                            statistik, serta insight yang dihasilkan
                            dari proses klasifikasi sehingga lebih
                            mudah dipahami oleh pengguna.

                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="border rounded-4 p-4 h-100">

                        <span class="badge bg-dark mb-3">

                            Informasi

                        </span>

                        <h5 class="fw-bold">

                            Algoritma Random Forest

                        </h5>

                        <p class="text-muted">

                            Sistem menggunakan algoritma Random Forest
                            untuk mengklasifikasikan prioritas produksi
                            padi ke dalam tiga kelas yaitu
                            <strong>Tinggi</strong>,
                            <strong>Sedang</strong>, dan
                            <strong>Rendah</strong>.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- FLOW PROSES -->

    <div class="card shadow-sm border-0 mb-4">

        <div class="card-header bg-white">

            <h4 class="fw-bold mb-0">

                Alur Proses Klasifikasi Random Forest

            </h4>

        </div>

        <div class="card-body">

            <div class="row text-center g-3">

                <div class="col">

                    <div class="border rounded-4 p-3">

                        <i class="bi bi-database-fill fs-1 text-primary"></i>

                        <h6 class="mt-3 fw-bold">

                            Data Produksi

                        </h6>

                    </div>

                </div>

                <div class="col-auto d-flex align-items-center">

                    <i class="bi bi-arrow-right fs-3"></i>

                </div>

                <div class="col">

                    <div class="border rounded-4 p-3">

                        <i class="bi bi-funnel-fill fs-1 text-success"></i>

                        <h6 class="mt-3 fw-bold">

                            Preprocessing

                        </h6>

                    </div>

                </div>

                <div class="col-auto d-flex align-items-center">

                    <i class="bi bi-arrow-right fs-3"></i>

                </div>

                <div class="col">

                    <div class="border rounded-4 p-3">

                        <i class="bi bi-tags-fill fs-1 text-warning"></i>

                        <h6 class="mt-3 fw-bold">

                            Labeling

                        </h6>

                    </div>

                </div>

                <div class="col-auto d-flex align-items-center">

                    <i class="bi bi-arrow-right fs-3"></i>

                </div>

                <div class="col">

                    <div class="border rounded-4 p-3">

                        <i class="bi bi-123 fs-1 text-info"></i>

                        <h6 class="mt-3 fw-bold">

                            Encoding

                        </h6>

                    </div>

                </div>

                <div class="col-auto d-flex align-items-center">

                    <i class="bi bi-arrow-right fs-3"></i>

                </div>

                <div class="col">

                    <div class="border rounded-4 p-3">

                        <i class="bi bi-cpu-fill fs-1 text-danger"></i>

                        <h6 class="mt-3 fw-bold">

                            Random Forest

                        </h6>

                    </div>

                </div>

                <div class="col-auto d-flex align-items-center">

                    <i class="bi bi-arrow-right fs-3"></i>

                </div>

                <div class="col">

                    <div class="border rounded-4 p-3">

                        <i class="bi bi-check-circle-fill fs-1 text-success"></i>

                        <h6 class="mt-3 fw-bold">

                            Hasil

                        </h6>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- FAQ -->

    <div class="card shadow-sm border-0 mb-4">

        <div class="card-header bg-white">

            <h4 class="fw-bold mb-0">

                Pertanyaan yang Sering Diajukan

            </h4>

        </div>

        <div class="card-body">

            <div class="accordion" id="faqPanduan">

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq1">

                            Bagaimana cara melakukan klasifikasi?

                        </button>

                    </h2>

                    <div id="faq1"
                        class="accordion-collapse collapse show"
                        data-bs-parent="#faqPanduan">

                        <div class="accordion-body">

                            Masuk ke menu <strong>Klasifikasi</strong>,
                            kemudian jalankan seluruh tahapan proses
                            hingga status setiap proses berhasil.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq2">

                            Mengapa hasil klasifikasi belum muncul?

                        </button>

                    </h2>

                    <div id="faq2"
                        class="accordion-collapse collapse"
                        data-bs-parent="#faqPanduan">

                        <div class="accordion-body">

                            Pastikan seluruh proses klasifikasi telah
                            berhasil dijalankan dan hasil telah
                            disimpan ke database.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq3">

                            Berapa kelas prioritas yang digunakan?

                        </button>

                    </h2>

                    <div id="faq3"
                        class="accordion-collapse collapse"
                        data-bs-parent="#faqPanduan">

                        <div class="accordion-body">

                            Sistem membagi prioritas produksi menjadi
                            tiga kelas yaitu
                            <strong>Tinggi</strong>,
                            <strong>Sedang</strong>,
                            dan
                            <strong>Rendah</strong>.

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- TIPS -->

    <div class="alert alert-success border-0 shadow-sm">

        <h5 class="fw-bold">

            <i class="bi bi-lightbulb-fill me-2"></i>

            Tips Penggunaan

        </h5>

        <ul class="mb-0">

            <li>Pastikan data produksi telah lengkap sebelum melakukan klasifikasi.</li>

            <li>Jalankan seluruh tahapan klasifikasi secara berurutan.</li>

            <li>Periksa status setiap tahapan hingga berhasil.</li>

            <li>Buka menu Hasil Klasifikasi untuk melihat hasil prediksi.</li>

            <li>Gunakan Dashboard Analisis untuk melihat grafik dan insight produksi.</li>

        </ul>

    </div>

</div>

<?= $this->endSection() ?>