<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        Login Sistem
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg,
                    #198754,
                    #146c43);
            overflow: hidden;
            font-family: "Segoe UI", sans-serif;
        }

        .login-wrapper {
            min-height: 100vh;
        }

        .login-card {
            border: none;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0, 0, 0, .15);
        }

        .login-left {
            background: white;
            padding: 50px;
        }

        .login-right {
            background:
                linear-gradient(rgba(0, 0, 0, .25),
                    rgba(0, 0, 0, .25)),
                url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=1200&q=80');

            background-size: cover;
            background-position: center;
        }

        .logo-box {
            width: 80px;
            height: 80px;
            background: rgba(25, 135, 84, .1);
            color: #198754;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
        }

        .form-control {
            height: 52px;
            border-radius: 12px;
        }

        .btn-login {
            height: 52px;
            border-radius: 12px;
            font-weight: 600;
        }

        .system-title {
            font-weight: 700;
            font-size: 30px;
        }

        .system-subtitle {
            color: #6c757d;
        }

        .feature-item {
            color: white;
            margin-bottom: 18px;
            font-size: 15px;
        }

        .login-card {
            border: none;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 30px 80px rgba(0, 0, 0, .18);
        }

        .input-group-text {
            background: white;
            border-right: none;
        }

        .input-group .form-control {
            border-left: none;
        }

        .form-control {
            height: 56px;
        }

        .form-control:focus {
            box-shadow: none;
        }

        .btn-login {
            height: 56px;
            border-radius: 14px;
            font-weight: 600;
        }

        .glass-box {
            backdrop-filter: blur(8px);
        }

        .feature-card {
            background: rgba(255, 255, 255, .12);
            border: 1px solid rgba(255, 255, 255, .15);
            border-radius: 16px;
            color: white;
            padding: 18px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 500;
        }

        .feature-card i {
            font-size: 22px;
        }

        .system-title {
            font-size: 34px;
            font-weight: 700;
        }

        .logo-box {
            width: 90px;
            height: 90px;
            border-radius: 24px;
            background: #e9f8ef;
            color: #198754;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
        }

        @media(max-width:991px) {
            .login-right {
                display: none;
            }

            .login-left {
                padding: 35px;
            }
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="row justify-content-center align-items-center login-wrapper">

            <div class="col-xl-11">

                <div class="card login-card">

                    <div class="row g-0">

                        <!-- LEFT -->
                        <div class="col-lg-5">

                            <div class="login-left h-100 d-flex flex-column justify-content-center">

                                <div class="mb-4">

                                    <div class="logo-box">

                                        <i class="bi bi-flower1"></i>

                                    </div>

                                </div>

                                <span class="badge bg-success-subtle text-success border mb-3 px-3 py-2">

                                    Dashboard Produksi Padi

                                </span>

                                <h2 class="system-title mb-2">

                                    Selamat Datang

                                </h2>

                                <p class="system-subtitle mb-4">

                                    Silakan masuk untuk mengakses sistem klasifikasi prioritas produksi padi menggunakan algoritma Random Forest.

                                </p>

                                <?php if (session()->getFlashdata('error')) : ?>

                                    <div class="alert alert-danger">

                                        <i class="bi bi-exclamation-circle"></i>

                                        <?= session()->getFlashdata('error') ?>

                                    </div>

                                <?php endif; ?>

                                <form action="<?= base_url('/login') ?>" method="POST">

                                    <?= csrf_field(); ?>

                                    <div class="mb-3">

                                        <label class="form-label fw-semibold">

                                            Username

                                        </label>

                                        <div class="input-group">

                                            <span class="input-group-text">

                                                <i class="bi bi-person"></i>

                                            </span>

                                            <input
                                                type="text"
                                                name="username"
                                                class="form-control"
                                                placeholder="Masukkan username"
                                                required>

                                        </div>

                                    </div>

                                    <div class="mb-4">

                                        <label class="form-label fw-semibold">

                                            Password

                                        </label>

                                        <div class="input-group">

                                            <span class="input-group-text">

                                                <i class="bi bi-lock"></i>

                                            </span>

                                            <input
                                                type="password"
                                                name="password"
                                                class="form-control"
                                                placeholder="Masukkan password"
                                                required>

                                        </div>

                                    </div>

                                    <button
                                        type="submit"
                                        class="btn btn-success btn-login w-100">

                                        <i class="bi bi-box-arrow-in-right"></i>

                                        Masuk ke Sistem

                                    </button>

                                </form>

                            </div>

                        </div>

                        <!-- RIGHT -->
                        <div class="col-lg-7">

                            <div class="login-right h-100 p-5 d-flex flex-column justify-content-center">

                                <div class="glass-box">

                                    <h1 class="text-white fw-bold mb-3">

                                        Klasifikasi Prioritas Produksi Padi

                                    </h1>

                                    <p class="text-white opacity-75 mb-5">

                                        Sistem pendukung keputusan berbasis Random Forest untuk menentukan prioritas produksi padi pada wilayah penelitian.

                                    </p>

                                    <div class="row g-3">

                                        <div class="col-md-6">

                                            <div class="feature-card">

                                                <i class="bi bi-bar-chart-line"></i>

                                                <span>
                                                    Dashboard Monitoring
                                                </span>

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="feature-card">

                                                <i class="bi bi-database"></i>

                                                <span>
                                                    Data Produksi
                                                </span>

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="feature-card">

                                                <i class="bi bi-cpu"></i>

                                                <span>
                                                    Random Forest
                                                </span>

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="feature-card">

                                                <i class="bi bi-graph-up"></i>

                                                <span>
                                                    Insight Produksi
                                                </span>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>