

<div class="card shadow-sm border-0 mb-4">

    <div class="card-body p-4">

        <div class="row align-items-center">

            <div class="col-lg-1 text-center">

                <div class="rounded-circle bg-primary text-white d-inline-flex justify-content-center align-items-center fw-bold"
                    style="width:70px;height:70px;font-size:24px;">

                    1

                </div>

            </div>

            <div class="col-lg-7">

                <div class="d-flex align-items-center mb-2">



                    <h4 class="fw-bold mb-0">

                        Mengambil Data Produksi

                    </h4>

                </div>

                <p class="text-muted mb-3">

                    Sistem mengambil seluruh data produksi padi dari database
                    <strong>data_produksi</strong> yang akan digunakan sebagai
                    dataset pada proses klasifikasi menggunakan algoritma
                    Random Forest.

                </p>

                <div class="row">

                    <div class="col-md-4">

                        <small class="text-secondary fw-semibold">

                            Status

                        </small>

                        <div id="statusStep1">

                            <span class="badge bg-secondary">

                                Menunggu

                            </span>

                        </div>

                    </div>

                    <div class="col-md-8">

                        <small class="text-secondary fw-semibold">

                            Output

                        </small>

                        <div id="outputStep1">

                            -

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 text-end">

                <button

                    id="btnStep1"

                    onclick="ambilData()"

                    class="btn btn-primary">

                    <i class="bi bi-play-circle me-2"></i>

                    Ambil Data

                </button>

            </div>

        </div>

    </div>

</div>