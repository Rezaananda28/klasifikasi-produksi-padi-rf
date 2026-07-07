-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2026 at 10:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klasifikasi_produksi_padi_rf`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_produksi`
--

CREATE TABLE `data_produksi` (
  `id_produksi` int(11) NOT NULL,
  `wilayah` varchar(100) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jenis_padi` varchar(50) NOT NULL,
  `luas_lahan` decimal(10,2) NOT NULL,
  `sasaran_tanam` decimal(10,2) NOT NULL,
  `sasaran_panen` decimal(10,2) NOT NULL,
  `sasaran_produksi` decimal(12,2) NOT NULL,
  `produktivitas` decimal(10,2) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_produksi`
--

INSERT INTO `data_produksi` (`id_produksi`, `wilayah`, `bulan`, `tahun`, `jenis_padi`, `luas_lahan`, `sasaran_tanam`, `sasaran_panen`, `sasaran_produksi`, `produktivitas`, `created_at`, `updated_at`) VALUES
(4, 'Medan', 'Januari', '2023', 'Padi Sawah', 729.00, 124.00, 33.00, 185.00, 0.25, '2026-06-29 22:52:58', '2026-06-29 22:52:58'),
(5, 'Medan', 'Februari', '2023', 'Padi Sawah', 729.00, 44.00, 397.00, 2229.00, 3.06, '2026-06-29 22:53:43', '2026-06-29 22:53:43'),
(6, 'Medan', 'Maret', '2023', 'Padi Sawah', 729.00, 54.00, 231.00, 1298.00, 1.78, '2026-06-29 22:54:21', '2026-06-29 22:54:21'),
(7, 'Medan', 'April', '2023', 'Padi Sawah', 729.00, 80.00, 117.00, 645.00, 0.88, '2026-06-29 22:55:39', '2026-06-29 22:55:39'),
(8, 'Medan', 'Mei', '2023', 'Padi Sawah', 729.00, 315.00, 41.00, 181.00, 0.25, '2026-06-29 22:56:14', '2026-06-29 22:56:14'),
(9, 'Medan', 'Juni', '2023', 'Padi Sawah', 729.00, 266.00, 50.00, 220.00, 0.30, '2026-06-29 22:56:55', '2026-06-29 22:56:55'),
(10, 'Medan', 'Juli', '2023', 'Padi Sawah', 729.00, 133.00, 75.00, 329.00, 0.45, '2026-06-29 22:57:31', '2026-06-29 22:59:56'),
(11, 'Medan', 'Agustus', '2023', 'Padi Sawah', 729.00, 100.00, 296.00, 1297.00, 1.78, '2026-06-29 22:58:24', '2026-06-29 23:00:13'),
(12, 'Medan', 'September', '2023', 'Padi Sawah', 729.00, 36.00, 250.00, 1253.00, 1.72, '2026-06-29 23:01:00', '2026-06-29 23:01:00'),
(14, 'Binjai', 'Januari', '2023', 'Padi Sawah', 1213.00, 155.00, 362.00, 1790.00, 1.48, '2026-06-29 23:28:37', '2026-06-29 23:28:37'),
(15, 'Binjai', 'Februari', '2023', 'Padi Sawah', 1213.00, 134.00, 359.00, 1776.00, 1.46, '2026-06-29 23:29:03', '2026-06-29 23:29:03'),
(16, 'Binjai', 'Maret', '2023', 'Padi Sawah', 1213.00, 175.00, 213.00, 1056.00, 0.87, '2026-06-29 23:29:26', '2026-06-29 23:31:19'),
(17, 'Binjai', 'April', '2023', 'Padi Sawah', 1213.00, 198.00, 146.00, 721.00, 0.59, '2026-06-29 23:30:11', '2026-06-29 23:31:24'),
(18, 'Binjai', 'Mei', '2023', 'Padi Sawah', 1213.00, 177.00, 126.00, 661.00, 0.54, '2026-06-29 23:31:04', '2026-06-29 23:31:29'),
(19, 'Binjai', 'Juni', '2023', 'Padi Sawah', 1213.00, 289.00, 165.00, 864.00, 0.71, '2026-06-29 23:32:12', '2026-06-29 23:32:12'),
(20, 'Binjai', 'Juli', '2023', 'Padi Sawah', 1213.00, 275.00, 186.00, 977.00, 0.81, '2026-06-29 23:33:10', '2026-06-29 23:33:10'),
(21, 'Binjai', 'Agustus', '2023', 'Padi Sawah', 1213.00, 245.00, 166.00, 874.00, 0.72, '2026-06-29 23:33:40', '2026-06-29 23:33:40'),
(22, 'Binjai', 'September', '2023', 'Padi Sawah', 1213.00, 332.00, 272.00, 1678.00, 1.38, '2026-06-29 23:34:02', '2026-06-29 23:34:02'),
(23, 'Deli Serdang', 'Januari', '2023', 'Padi Sawah', 30546.00, 4206.00, 5741.00, 35009.00, 1.15, '2026-06-29 23:35:01', '2026-06-29 23:35:01'),
(24, 'Deli Serdang', 'Februari', '2023', 'Padi Sawah', 30546.00, 5024.00, 6969.00, 42486.00, 1.39, '2026-06-29 23:35:47', '2026-06-29 23:35:47'),
(26, 'Deli Serdang', 'Maret', '2023', 'Padi Sawah', 30546.00, 5731.00, 8012.00, 48849.00, 1.60, '2026-06-29 23:36:16', '2026-06-29 23:36:37'),
(27, 'Deli Serdang', 'April', '2023', 'Padi Sawah', 30546.00, 5505.00, 4122.00, 25131.00, 0.82, '2026-06-29 23:37:21', '2026-06-29 23:37:21'),
(28, 'Deli Serdang', 'Mei', '2023', 'Padi Sawah', 30546.00, 9309.00, 4924.00, 30496.00, 1.00, '2026-06-29 23:37:54', '2026-06-29 23:37:54'),
(29, 'Deli Serdang', 'Juni', '2023', 'Padi Sawah', 30546.00, 9380.00, 5617.00, 34786.00, 1.14, '2026-06-29 23:38:44', '2026-06-29 23:38:44'),
(30, 'Deli Serdang', 'Juli', '2023', 'Padi Sawah', 30546.00, 9119.00, 5395.00, 44413.00, 1.45, '2026-06-29 23:40:06', '2026-06-29 23:40:06'),
(31, 'Deli Serdang', 'Agustus', '2023', 'Padi Sawah', 30546.00, 5545.00, 9122.00, 56500.00, 1.85, '2026-06-29 23:40:55', '2026-06-29 23:40:55'),
(32, 'Deli Serdang', 'September', '2023', 'Padi Sawah', 30546.00, 9175.00, 9193.00, 57435.00, 1.88, '2026-06-29 23:41:41', '2026-06-29 23:41:41'),
(33, 'Medan', 'Januari', '2023', 'Padi Umum', 729.00, 1834.00, 1724.00, 8813.00, 12.09, '2026-06-30 00:52:31', '2026-06-30 00:52:31'),
(35, 'Binjai', 'Januari', '2023', 'Padi Umum', 1213.00, 2974.00, 2796.00, 15343.00, 12.65, '2026-06-30 00:53:47', '2026-06-30 00:53:47'),
(36, 'Deli Serdang', 'Januari', '2023', 'Padi Ladang', 30546.00, 1424.00, 978.00, 4078.00, 0.13, '2026-06-30 00:54:31', '2026-06-30 00:54:31'),
(37, 'Deli Serdang', 'Januari', '2023', 'Padi Umum', 30546.00, 85575.00, 83446.00, 514207.00, 16.83, '2026-06-30 00:55:08', '2026-06-30 00:55:08'),
(38, 'Langkat', 'Januari', '2023', 'Padi Sawah', 20009.00, 1834.00, 56847.00, 287221.00, 14.35, '2026-06-30 00:56:17', '2026-06-30 00:56:17'),
(39, 'Langkat', 'Januari', '2023', 'Padi Ladang', 20009.00, 999.00, 836.00, 2847.00, 0.14, '2026-06-30 00:56:42', '2026-06-30 00:56:42'),
(40, 'Langkat', 'Januari', '2023', 'Padi Umum', 20009.00, 59006.00, 57682.00, 290068.00, 14.50, '2026-06-30 00:57:14', '2026-06-30 00:57:14'),
(41, 'Medan', 'Januari', '2023', 'Padi Ladang', 729.00, 14788.00, 10187.00, 37423.00, 51.33, '2026-06-30 01:01:58', '2026-06-30 01:01:58'),
(42, 'Binjai', 'Januari', '2023', 'Padi Ladang', 1213.00, 4831.00, 4457.00, 18886.00, 15.57, '2026-06-30 01:02:35', '2026-06-30 01:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_klasifikasi`
--

CREATE TABLE `hasil_klasifikasi` (
  `id_hasil` int(11) NOT NULL,
  `wilayah` varchar(100) NOT NULL,
  `jenis_padi` varchar(50) NOT NULL,
  `prioritas` enum('Tinggi','Sedang','Rendah') NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hasil_klasifikasi`
--

INSERT INTO `hasil_klasifikasi` (`id_hasil`, `wilayah`, `jenis_padi`, `prioritas`, `created_at`, `updated_at`) VALUES
(1, 'Binjai', 'Padi Ladang', 'Sedang', '2026-07-02 00:06:42', '2026-07-02 00:06:42'),
(2, 'Binjai', 'Padi Sawah', 'Sedang', '2026-07-02 00:06:42', '2026-07-02 00:06:42'),
(3, 'Binjai', 'Padi Umum', 'Sedang', '2026-07-02 00:06:42', '2026-07-02 00:06:42'),
(4, 'Deli Serdang', 'Padi Ladang', 'Rendah', '2026-07-02 00:06:42', '2026-07-02 00:06:42'),
(5, 'Deli Serdang', 'Padi Sawah', 'Tinggi', '2026-07-02 00:06:42', '2026-07-02 00:06:42'),
(6, 'Deli Serdang', 'Padi Umum', 'Tinggi', '2026-07-02 00:06:42', '2026-07-02 00:06:42'),
(7, 'Langkat', 'Padi Ladang', 'Rendah', '2026-07-02 00:06:42', '2026-07-02 00:06:42'),
(8, 'Langkat', 'Padi Sawah', 'Tinggi', '2026-07-02 00:06:42', '2026-07-02 00:06:42'),
(9, 'Langkat', 'Padi Umum', 'Tinggi', '2026-07-02 00:06:42', '2026-07-02 00:06:42'),
(10, 'Medan', 'Padi Ladang', 'Sedang', '2026-07-02 00:06:42', '2026-07-02 00:06:42'),
(11, 'Medan', 'Padi Sawah', 'Rendah', '2026-07-02 00:06:42', '2026-07-02 00:06:42'),
(12, 'Medan', 'Padi Umum', 'Rendah', '2026-07-02 00:06:42', '2026-07-02 00:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_klasifikasi`
--

CREATE TABLE `riwayat_klasifikasi` (
  `id_riwayat` int(11) NOT NULL,
  `jumlah_data` int(11) NOT NULL,
  `akurasi` decimal(5,2) NOT NULL,
  `terakhir_diperbarui` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_klasifikasi`
--

INSERT INTO `riwayat_klasifikasi` (`id_riwayat`, `jumlah_data`, `akurasi`, `terakhir_diperbarui`) VALUES
(1, 12, 1.00, '2026-07-01 21:42:50'),
(2, 12, 1.00, '2026-07-01 22:43:24'),
(3, 12, 1.00, '2026-07-02 00:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `created_at`) VALUES
(1, 'Administrator', 'admin', '$2y$10$sq0/62zdvg14JM/zP2jPo.xd0QXx/gX.ARxnI1WvFUxorevfHDX.K', '2026-06-17 21:27:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_produksi`
--
ALTER TABLE `data_produksi`
  ADD PRIMARY KEY (`id_produksi`);

--
-- Indexes for table `hasil_klasifikasi`
--
ALTER TABLE `hasil_klasifikasi`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `riwayat_klasifikasi`
--
ALTER TABLE `riwayat_klasifikasi`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_produksi`
--
ALTER TABLE `data_produksi`
  MODIFY `id_produksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `hasil_klasifikasi`
--
ALTER TABLE `hasil_klasifikasi`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `riwayat_klasifikasi`
--
ALTER TABLE `riwayat_klasifikasi`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
