<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>


<div class="container-fluid py-4">

    <!-- Header -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4">

            <span class="badge bg-success mb-3">
                Tentang Sistem
            </span>

            <h2 class="fw-bold mb-2">
                Dashboard Klasifikasi Prioritas Produksi Padi
            </h2>

            <p class="text-muted mb-0">
                Sistem ini dikembangkan sebagai implementasi algoritma Random Forest
                untuk membantu proses klasifikasi prioritas produksi padi sehingga
                informasi yang dihasilkan dapat mendukung pengambilan keputusan secara
                lebih cepat, akurat, dan terstruktur.
            </p>

        </div>
    </div>

    <div class="row g-4">

        <!-- Informasi Skripsi -->
        <div class="col-lg-8">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-header bg-white border-0 pt-4 px-4">
                    <h4 class="fw-bold mb-0">
                        <i class="bi bi-journal-richtext text-success me-2"></i>
                        Informasi Skripsi
                    </h4>
                </div>

                <div class="card-body px-4 pb-4">

                    <table class="table table-borderless align-middle">

                        <tr>
                            <th width="180">Judul</th>
                            <td>
                                Pengembangan Sistem Dashboard Klasifikasi Prioritas
                                Produksi Padi Menggunakan Algoritma Random Forest
                            </td>
                        </tr>

                        <tr>
                            <th>Algoritma</th>
                            <td>
                                Random Forest
                            </td>
                        </tr>

                        <tr>
                            <th>Bahasa Pemrograman</th>
                            <td>
                                PHP (CodeIgniter 4) & Python
                            </td>
                        </tr>

                        <tr>
                            <th>Database</th>
                            <td>
                                MySQL
                            </td>
                        </tr>

                        <tr>
                            <th>Tujuan Sistem</th>
                            <td>
                                Membantu proses klasifikasi prioritas produksi padi
                                berdasarkan data produksi sehingga menghasilkan
                                informasi yang dapat dijadikan pendukung pengambilan
                                keputusan.
                            </td>
                        </tr>

                    </table>

                </div>

            </div>

        </div>

        <!-- Profil Penulis -->
        <div class="col-lg-4">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body text-center p-4">

                    <div class="rounded-circle bg-success bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-3"
                        style="width:90px;height:90px;">

                        <i class="bi bi-person-fill text-success fs-1"></i>

                    </div>

                    <h4 class="fw-bold mb-1">
                        ALHAMDI AGI FADILLA
                    </h4>

                    <p class="text-muted mb-4">
                        NPM. 2209010236
                    </p>

                    <hr>

                    <div class="text-start">

                        <div class="mb-3">
                            <small class="text-muted d-block">
                                Program Studi
                            </small>

                            <strong>
                                Sistem Informasi
                            </strong>
                        </div>

                        <div class="mb-3">
                            <small class="text-muted d-block">
                                Fakultas
                            </small>

                            <strong>
                                Fakultas Ilmu Komputer dan Teknologi Informasi
                            </strong>
                        </div>

                        <div>
                            <small class="text-muted d-block">
                                Universitas
                            </small>

                            <strong>
                                Universitas Muhammadiyah Sumatera Utara
                            </strong>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Deskripsi -->
    <div class="card border-0 shadow-sm mt-4">

        <div class="card-body p-4">

            <h4 class="fw-bold mb-3">
                <i class="bi bi-info-circle-fill text-success me-2"></i>
                Tentang Aplikasi
            </h4>

            <p class="text-muted mb-3" style="text-align:justify;">

                Dashboard Klasifikasi Prioritas Produksi Padi merupakan aplikasi
                berbasis web yang dirancang untuk membantu proses analisis data
                produksi padi secara efektif dan efisien. Sistem ini memanfaatkan
                algoritma <strong>Random Forest</strong> sebagai metode klasifikasi
                untuk menentukan tingkat prioritas produksi berdasarkan beberapa
                parameter produksi yang tersedia.

            </p>

            <p class="text-muted mb-3" style="text-align:justify;">

                Selain menyediakan proses klasifikasi, aplikasi ini juga menyajikan
                dashboard interaktif yang memudahkan pengguna dalam melakukan
                pengelolaan data, melihat hasil klasifikasi, serta memperoleh
                informasi pendukung sebagai dasar dalam proses pengambilan keputusan.

            </p>

            <p class="text-muted mb-0" style="text-align:justify;">

                Pengembangan sistem ini diharapkan mampu memberikan kontribusi dalam
                pemanfaatan teknologi informasi dan data mining pada bidang pertanian,
                khususnya dalam mendukung pengelolaan data produksi padi secara lebih
                terstruktur, cepat, dan akurat.

            </p>

        </div>

    </div>

    <!-- Footer -->
    <div class="text-center mt-4 text-muted">

        <small>
            © <?= date('Y'); ?> Dashboard Klasifikasi Prioritas Produksi Padi —
            Random Forest
        </small>

    </div>

</div>
<?= $this->endSection() ?>