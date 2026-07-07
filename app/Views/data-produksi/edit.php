<form id="formEdit" method="post">

    <input
        type="hidden"
        name="id_produksi"
        id="edit_id">

    <div class="modal fade"
        id="modalEdit"
        tabindex="-1"
        aria-hidden="true">

        <div class="modal-dialog modal-xl modal-dialog-centered">

            <div class="modal-content border-0 shadow">

                <!-- HEADER -->
                <div class="modal-header border-0 pb-0">

                    <div>

                        <h4 class="fw-bold mb-1">
                            Edit Data Produksi
                        </h4>

                        <small class="text-muted">
                            Perbarui data produksi padi yang dipilih.
                        </small>

                    </div>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                    </button>

                </div>

                <!-- BODY -->
                <div class="modal-body">

                    <div class="row g-3">

                        <!-- WILAYAH -->
                        <div class="col-md-3">

                            <label class="form-label">
                                Wilayah
                            </label>

                            <select
                                class="form-select"
                                name="wilayah"
                                id="edit_wilayah"
                                required>

                                <option value="">Pilih Wilayah</option>
                                <option value="Medan">Medan</option>
                                <option value="Binjai">Binjai</option>
                                <option value="Deli Serdang">Deli Serdang</option>
                                <option value="Langkat">Langkat</option>

                            </select>

                        </div>

                        <!-- BULAN -->
                        <div class="col-md-3">

                            <label class="form-label">
                                Bulan
                            </label>

                            <select
                                class="form-select"
                                name="bulan"
                                id="edit_bulan"
                                required>

                                <option value="">Pilih Bulan</option>

                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>

                            </select>

                        </div>

                        <!-- TAHUN -->
                        <div class="col-md-3">

                            <label class="form-label">
                                Tahun
                            </label>

                            <input
                                type="number"
                                class="form-control"
                                name="tahun"
                                id="edit_tahun"
                                required>

                        </div>

                        <!-- JENIS -->
                        <div class="col-md-3">

                            <label class="form-label">
                                Jenis Padi
                            </label>

                            <select
                                class="form-select"
                                name="jenis_padi"
                                id="edit_jenis"
                                required>

                                <option value="">Pilih Jenis</option>

                                <option value="Padi Sawah">
                                    Padi Sawah
                                </option>

                                <option value="Padi Ladang">
                                    Padi Ladang
                                </option>

                                <option value="Padi Umum">
                                    Padi Umum
                                </option>

                            </select>

                        </div>

                        <!-- LUAS -->
                        <div class="col-md-6">

                            <label class="form-label">
                                Luas Lahan (Ha)
                            </label>

                            <input
                                type="number"
                                step="0.01"
                                class="form-control"
                                name="luas_lahan"
                                id="edit_luas"
                                required>

                        </div>

                        <!-- TANAM -->
                        <div class="col-md-6">

                            <label class="form-label">
                                Sasaran Tanam (Ha)
                            </label>

                            <input
                                type="number"
                                step="0.01"
                                class="form-control"
                                name="sasaran_tanam"
                                id="edit_tanam"
                                required>

                        </div>

                        <!-- PANEN -->
                        <div class="col-md-6">

                            <label class="form-label">
                                Sasaran Panen (Ha)
                            </label>

                            <input
                                type="number"
                                step="0.01"
                                class="form-control"
                                name="sasaran_panen"
                                id="edit_panen"
                                required>

                        </div>

                        <!-- PRODUKSI -->
                        <div class="col-md-6">

                            <label class="form-label">
                                Sasaran Produksi (Ton)
                            </label>

                            <input
                                type="number"
                                step="0.01"
                                class="form-control"
                                name="sasaran_produksi"
                                id="edit_produksi"
                                required>

                        </div>

                        <!-- PRODUKTIVITAS -->
                        <div class="col-md-12">

                            <label class="form-label">
                                Produktivitas
                            </label>

                            <input
                                type="text"
                                class="form-control bg-light"
                                value="Produktivitas akan dihitung ulang secara otomatis saat data diperbarui."
                                readonly>

                        </div>

                    </div>

                </div>

                <!-- FOOTER -->
                <div class="modal-footer border-0">

                    <button
                        type="button"
                        class="btn btn-light"
                        data-bs-dismiss="modal">

                        Batal

                    </button>

                    <button
                        type="submit"
                        class="btn btn-warning">

                        <i class="bi bi-pencil-square"></i>

                        Update Data

                    </button>

                </div>

            </div>

        </div>

    </div>

</form>