

<div class="card shadow-sm border-0 mb-4">

    <div class="card-body p-4">

        <div class="row align-items-center">

            <div class="col-lg-1 text-center">

                <div class="rounded-circle bg-success text-white d-inline-flex justify-content-center align-items-center fw-bold"
                    style="width:70px;height:70px;font-size:24px;">

                    2

                </div>

            </div>

            <div class="col-lg-7">

                <div class="d-flex align-items-center mb-2">


                    <h4 class="fw-bold mb-0">

                        Preprocessing Data

                    </h4>

                </div>

                <p class="text-muted mb-3">

                    Sistem melakukan preprocessing terhadap dataset
                    dengan membersihkan data, menghapus data duplikat,
                    memeriksa nilai kosong serta memastikan seluruh data
                    siap digunakan untuk proses klasifikasi.

                </p>

                <div class="row">

                    <div class="col-md-4">

                        <small class="text-secondary">

                            Status

                        </small>

                        <div id="statusStep2">

                            <span class="badge bg-secondary">

                                Menunggu

                            </span>

                        </div>

                    </div>

                    <div class="col-md-8">

                        <small class="text-secondary">

                            Output

                        </small>

                        <div id="outputStep2">

                            -

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 text-end">

                <button

                    id="btnStep2"

                    onclick="preprocessing()"

                    class="btn btn-success"

                    disabled>

                    <i class="bi bi-play-circle me-2"></i>

                    Jalankan Preprocessing

                </button>

            </div>

        </div>

    </div>

</div>