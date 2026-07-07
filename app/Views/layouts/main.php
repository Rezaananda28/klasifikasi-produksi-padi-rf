<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'Klasifikasi Produksi Padi RF'; ?></title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        :root {
            --sidebar-width: 260px;
            --primary-color: #198754;
            --sidebar-color: #1f2937;
            --sidebar-hover: #374151;
            --body-bg: #f5f7fb;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: var(--body-bg);
            font-family: "Segoe UI", sans-serif;
            overflow-x: hidden;
        }

        /* ======================
           SIDEBAR
        ====================== */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--sidebar-color);
            color: #fff;
            z-index: 1000;
        }

        .sidebar-brand {
            padding: 24px;
            border-bottom: 1px solid rgba(255, 255, 255, .1);
        }

        .sidebar-brand h4 {
            margin: 0;
            font-weight: 700;
        }

        .sidebar-brand small {
            color: #bdbdbd;
        }

        .sidebar-menu {
            padding: 15px 0;
        }

        .sidebar-menu a {
            display: block;
            text-decoration: none;
            color: #d1d5db;
            padding: 14px 24px;
            transition: .3s;
        }

        .sidebar-menu a:hover {
            background: var(--sidebar-hover);
            color: #fff;
        }

        .sidebar-menu a.active {
            background: var(--primary-color);
            color: white;
        }

        .sidebar-menu i {
            margin-right: 10px;
        }

        /* ======================
           MAIN CONTENT
        ====================== */

        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
        }

        /* ======================
           NAVBAR
        ====================== */

        .top-navbar {
            background: white;
            padding: 15px 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .05);
        }

        .page-title {
            font-size: 20px;
            font-weight: 600;
        }

        /* ======================
           CONTENT
        ====================== */

        .content-wrapper {
            padding: 25px;
        }

        /* ======================
           CARD
        ====================== */

        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, .05);
        }

        /* ======================
           FOOTER
        ====================== */

        .footer {
            text-align: center;
            padding: 20px;
            color: #777;
            font-size: 14px;
        }

        .sidebar-divider {
            display: flex;
            align-items: center;
            margin: 22px 20px 16px;
            color: #9ca3af;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .8px;
        }

        .sidebar-divider::before,
        .sidebar-divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: rgba(255, 255, 255, .18);
        }

        .sidebar-divider span {
            margin: 0 12px;
        }
    </style>

    <?= $this->renderSection('css') ?>

</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="sidebar-brand">

            <h4>KPPRF</h4>

            <small>
                Klasifikasi Produksi Padi RF
            </small>

        </div>

        <!-- MENU UTAMA -->
        <div class="sidebar-menu">

            <a href="<?= base_url('/dashboard') ?>">
                <i class="bi bi-grid-fill"></i>
                Dashboard
            </a>

            <a href="<?= base_url('data-produksi') ?>">
                <i class="bi bi-database-fill"></i>
                Data Produksi
            </a>

            <a href="<?= base_url('klasifikasi') ?>">
                <i class="bi bi-cpu-fill"></i>
                Klasifikasi
            </a>

            <a href="<?= base_url('hasil-klasifikasi') ?>">
                <i class="bi bi-clipboard-data-fill"></i>
                Hasil Klasifikasi
            </a>

        </div>

        <!-- PEMBATAS -->
        <div class="sidebar-divider">
        </div>

        <!-- MENU INFORMASI -->
        <div class="sidebar-menu">

            <a href="<?= base_url('panduan') ?>">
                <i class="bi bi-book-fill"></i>
                Panduan
            </a>

            <a href="<?= base_url('tentang') ?>">
                <i class="bi bi-info-circle-fill"></i>
                Tentang
            </a>

        </div>

    </aside>

    <!-- MAIN -->
    <main class="main-content">

        <!-- NAVBAR -->
        <nav class="top-navbar">

            <div class="d-flex justify-content-between align-items-center">

                <div class="page-title">
                    <?= $title ?? 'Dashboard'; ?>
                </div>

                <div class="dropdown">

                    <button class="btn btn-light dropdown-toggle"
                        data-bs-toggle="dropdown">

                        <i class="bi bi-person-circle"></i>
                        Administrator

                    </button>

                    <ul class="dropdown-menu dropdown-menu-end">

                        <li>
                            <a class="dropdown-item"
                                href="<?= base_url('profile') ?>">
                                <i class="bi bi-person"></i>
                                Profile
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item text-danger"
                                href="<?= base_url('logout') ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                Logout
                            </a>
                        </li>

                    </ul>

                </div>

            </div>

        </nav>

        <!-- CONTENT -->
        <section class="content-wrapper">

            <?= $this->renderSection('content') ?>

        </section>

        <!-- FOOTER -->
        <footer class="footer">

            © <?= date('Y') ?>

            Klasifikasi Produksi Padi RF

        </footer>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <?= $this->renderSection('js') ?>

</body>

</html>