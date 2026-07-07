

<div class="card shadow-sm border-0 mb-4">

    <div class="card-body p-4">

        <div class="row align-items-center">

            <div class="col-lg-1 text-center">

                <div class="rounded-circle bg-info text-white d-inline-flex justify-content-center align-items-center fw-bold"
                    style="width:70px;height:70px;font-size:24px;">

                    4

                </div>

            </div>

            <div class="col-lg-7">

                <div class="d-flex align-items-center mb-2">



                    <h4 class="fw-bold mb-0">

                        Encoding Data

                    </h4>

                </div>

                <p class="text-muted mb-3">

                    Sistem mengubah data kategorikal seperti wilayah dan
                    jenis padi menjadi nilai numerik menggunakan Label
                    Encoder agar dapat diproses oleh algoritma
                    Random Forest.

                </p>

                <div class="row">

                    <div class="col-md-4">

                        <small class="text-secondary fw-semibold">

                            Status

                        </small>

                        <div id="statusStep4">

                            <span class="badge bg-secondary">

                                Menunggu

                            </span>

                        </div>

                    </div>

                    <div class="col-md-8">

                        <small class="text-secondary fw-semibold">

                            Output

                        </small>

                        <div id="outputStep4">

                            -

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 text-end">

                <button

                    id="btnStep4"

                    onclick="encoding()"

                    class="btn btn-info text-white"

                    disabled>

                    <i class="bi bi-play-circle me-2"></i>

                    Jalankan Encoding

                </button>

            </div>

        </div>

    </div>

</div>