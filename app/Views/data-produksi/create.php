<form action="<?= base_url('/data-produksi/store') ?>" method="post">

    <div class="modal fade"
        id="modalTambah"
        tabindex="-1">

        <div class="modal-dialog modal-xl modal-dialog-centered">

            <div class="modal-content border-0 shadow">

                <div class="modal-header border-0 pb-0">

                    <div>

                        <h4 class="fw-bold mb-1">
                            Tambah Data Produksi
                        </h4>

                        <small class="text-muted">
                            Tambahkan data produksi padi baru
                        </small>

                    </div>

                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                </div>

                <div class="modal-body">

                    <div class="row g-3">

                        <!-- WILAYAH -->
                        <div class="col-md-3">
                            <label class="form-label">Wilayah</label>
                            <select class="form-select" name="wilayah" required>
                                <option value="">Pilih Wilayah</option>
                                <option>Medan</option>
                                <option>Binjai</option>
                                <option>Deli Serdang</option>
                                <option>Langkat</option>
                            </select>
                        </div>

                        <!-- BULAN -->
                        <div class="col-md-3">
                            <label class="form-label">Bulan</label>
                            <select class="form-select" name="bulan" required>
                                <option value="">Pilih Bulan</option>
                                <option>Januari</option>
                                <option>Februari</option>
                                <option>Maret</option>
                                <option>April</option>
                                <option>Mei</option>
                                <option>Juni</option>
                                <option>Juli</option>
                                <option>Agustus</option>
                                <option>September</option>
                                <option>Oktober</option>
                                <option>November</option>
                                <option>Desember</option>
                            </select>
                        </div>

                        <!-- TAHUN -->
                        <div class="col-md-3">
                            <label class="form-label">Tahun</label>
                            <input type="number" name="tahun" class="form-control" placeholder="2026" required>
                        </div>

                        <!-- JENIS PADI -->
                        <div class="col-md-3">
                            <label class="form-label">Jenis Padi</label>
                            <select class="form-select" name="jenis_padi" required>
                                <option value="">Pilih Jenis</option>
                                <option>Padi Sawah</option>
                                <option>Padi Ladang</option>
                                <option>Padi Umum</option>
                            </select>
                        </div>

                        <!-- LUAS LAHAN -->
                        <div class="col-md-6">
                            <label class="form-label">Luas Lahan (Ha)</label>
                            <input type="number" step="0.01" name="luas_lahan" class="form-control" required>
                        </div>

                        <!-- SASARAN TANAM -->
                        <div class="col-md-6">
                            <label class="form-label">Sasaran Tanam (Ha)</label>
                            <input type="number" step="0.01" name="sasaran_tanam" class="form-control" required>
                        </div>

                        <!-- SASARAN PANEN -->
                        <div class="col-md-6">
                            <label class="form-label">Sasaran Panen (Ha)</label>
                            <input type="number" step="0.01" name="sasaran_panen" class="form-control" required>
                        </div>

                        <!-- SASARAN PRODUKSI -->
                        <div class="col-md-6">
                            <label class="form-label">Sasaran Produksi (Ton)</label>
                            <input type="number" step="0.01" name="sasaran_produksi" class="form-control" required>
                        </div>

                        <!-- PRODUKTIVITAS (opsional, bisa dihitung nanti) -->
                        <div class="col-md-12">
                            <label class="form-label">Produktivitas</label>
                            <input type="text" class="form-control bg-light"
                                value="Akan dihitung otomatis sistem"
                                disabled>
                        </div>

                    </div>

                </div>

                <div class="modal-footer border-0">

                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                        Batal
                    </button>

                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i>
                        Simpan Data
                    </button>

                </div>

            </div>

        </div>

    </div>

</form>