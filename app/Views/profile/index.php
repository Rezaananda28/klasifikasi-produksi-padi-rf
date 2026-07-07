<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<style>
    .profile-card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, .05);
    }

    .info-box {
        background: #f8fafc;
        border: 1px solid #eef2f7;
        border-radius: 16px;
        padding: 20px;
        height: 100%;
    }

    .info-label {
        font-size: 13px;
        color: #6b7280;
        margin-bottom: 8px;
    }

    .info-value {
        font-size: 18px;
        font-weight: 600;
        color: #111827;
    }

    .password-card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, .05);
    }

    .form-control {
        height: 54px;
        border-radius: 14px;
        border: 1px solid #e5e7eb;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #198754;
    }

    .btn-save {
        height: 54px;
        border-radius: 14px;
        padding: 0 25px;
        font-weight: 600;
    }

    .section-title {
        font-size: 22px;
        font-weight: 700;
    }

    .section-subtitle {
        color: #6b7280;
    }
</style>

<div class="container-fluid">

    <!-- HEADER -->
    <div class="card profile-card mb-4">
        <div class="card-body p-4">
            <h3 class="section-title mb-2">
                Profile Administrator
            </h3>
            <p class="section-subtitle mb-0">
                Kelola informasi akun dan keamanan sistem.
            </p>
        </div>
    </div>

    <!-- FLASH MESSAGE -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <!-- INFORMASI AKUN -->
    <div class="card profile-card mb-4">
        <div class="card-header bg-white border-0 pt-4">
            <h5 class="fw-bold mb-0">
                Informasi Akun
            </h5>
        </div>

        <div class="card-body">
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="info-box">
                        <div class="info-label">Nama Lengkap</div>
                        <div class="info-value">
                            <?= $user['nama']; ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-box">
                        <div class="info-label">Username</div>
                        <div class="info-value">
                            <?= $user['username']; ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-box">
                        <div class="info-label">Role</div>
                        <div class="info-value">
                            Administrator
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- UBAH PASSWORD -->
    <div class="card password-card">

        <div class="card-header bg-white border-0 pt-4">
            <h5 class="fw-bold mb-0">
                Ubah Password
            </h5>
        </div>

        <form action="<?= base_url('/profile/update-password') ?>" method="post">

            <?= csrf_field() ?>

            <div class="card-body">

                <div class="row g-4">

                    <div class="col-md-12">
                        <label class="form-label">Password Lama</label>
                        <input type="password" name="old_password" class="form-control" placeholder="Masukkan password lama" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Password Baru</label>
                        <input type="password" name="new_password" class="form-control" placeholder="Masukkan password baru" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Konfirmasi Password Baru</label>
                        <input type="password" name="confirm_password" class="form-control" placeholder="Konfirmasi password baru" required>
                    </div>

                </div>

            </div>

            <div class="card-footer bg-white border-0 pb-4">
                <button type="submit" class="btn btn-success btn-save">
                    <i class="bi bi-shield-lock"></i>
                    Simpan Perubahan
                </button>
            </div>

        </form>

    </div>

</div>

<?= $this->endSection() ?>