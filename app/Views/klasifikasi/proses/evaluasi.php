<div class="card shadow-sm border-0 mb-4">

    <div class="card-body p-4">

        <div class="row align-items-center">

            <!-- ICON STEP -->
            <div class="col-lg-1 text-center">

                <div class="rounded-circle bg-danger text-white d-inline-flex justify-content-center align-items-center fw-bold"
                    style="width:70px;height:70px;font-size:24px;">

                    <i class="bi bi-graph-up-arrow"></i>

                </div>

            </div>

            <!-- CONTENT -->
            <div class="col-lg-7">

                <div class="d-flex align-items-center mb-2">

                    <h4 class="fw-bold mb-0">
                        Evaluasi Model Random Forest
                    </h4>

                </div>

                <p class="text-muted mb-3">

                    Melakukan evaluasi ulang terhadap model Random Forest
                    dengan menghitung akurasi, precision, recall, dan F1-score
                    berdasarkan data training terbaru.

                </p>

                <div class="row">

                    <!-- STATUS -->
                    <div class="col-md-4">

                        <small class="text-secondary fw-semibold">
                            Status
                        </small>

                        <div id="statusEvaluasi">

                            <span class="badge bg-secondary">
                                Menunggu
                            </span>

                        </div>

                    </div>

                    <!-- OUTPUT -->
                    <div class="col-md-8">

                        <small class="text-secondary fw-semibold">
                            Output
                        </small>

                        <div id="outputEvaluasi">
                            -
                        </div>

                    </div>

                </div>

            </div>

            <!-- BUTTON -->
            <div class="col-lg-4 text-end">

                <button
                    id="btnEvaluasi"
                    onclick="evaluasiModel()"
                    class="btn btn-danger">

                    <i class="bi bi-arrow-repeat me-2"></i>

                    Jalankan Evaluasi

                </button>

            </div>

        </div>

    </div>

</div>