

<div class="card shadow-sm border-0 mb-4">

    <div class="card-body p-4">

        <div class="row align-items-center">

            <div class="col-lg-1 text-center">

                <div class="rounded-circle bg-warning text-dark d-inline-flex justify-content-center align-items-center fw-bold"
                    style="width:70px;height:70px;font-size:24px;">

                    3

                </div>

            </div>

            <div class="col-lg-7">

                <div class="d-flex align-items-center mb-2">



                    <h4 class="fw-bold mb-0">

                        Labeling Data

                    </h4>

                </div>

                <p class="text-muted mb-3">

                    Sistem membentuk label prioritas produksi berdasarkan
                    aturan yang telah ditentukan sehingga setiap data
                    memiliki kelas prioritas Tinggi, Sedang, atau Rendah
                    sebelum dilakukan prediksi menggunakan Random Forest.

                </p>

                <div class="row">

                    <div class="col-md-4">

                        <small class="text-secondary">

                            Status

                        </small>

                        <div id="statusStep3">

                            <span class="badge bg-secondary">

                                Menunggu

                            </span>

                        </div>

                    </div>

                    <div class="col-md-8">

                        <small class="text-secondary">

                            Output

                        </small>

                        <div id="outputStep3">

                            -

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 text-end">

                <button

                    id="btnStep3"

                    onclick="labeling()"
                    class="btn btn-warning"

                    disabled>

                    <i class="bi bi-play-circle me-2"></i>

                    Jalankan Labeling

                </button>

            </div>

        </div>

    </div>

</div>