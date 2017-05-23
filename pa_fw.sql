-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 09:54 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pa_fw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(10) unsigned NOT NULL,
  `deskripsi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kategori_barang_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `deskripsi`, `kategori_barang_id`, `created_at`, `updated_at`) VALUES
(17, 'BPKB mahal', 4, '2017-05-19 18:21:58', '2017-05-19 18:21:58'),
(21, 'koko', 3, '2017-05-22 10:45:37', '2017-05-22 10:45:37'),
(22, 'fddsfhsdf', 3, '2017-05-22 10:45:49', '2017-05-22 10:45:49'),
(23, 'kokokokoko', 2, '2017-05-22 10:46:05', '2017-05-22 10:46:05'),
(25, 'fdf', 2, '2017-05-22 10:51:40', '2017-05-22 10:51:40'),
(26, 'Gas', 8, '2017-05-22 20:32:16', '2017-05-22 20:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `barang_gadai`
--

CREATE TABLE IF NOT EXISTS `barang_gadai` (
  `id` int(10) unsigned NOT NULL,
  `deskripsi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `registrasi_gadai_id` int(10) unsigned NOT NULL,
  `barang_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `biodata_nasabah`
--

CREATE TABLE IF NOT EXISTS `biodata_nasabah` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') COLLATE utf8_unicode_ci NOT NULL,
  `no_telepon` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pekerjaan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no_ktp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `operator_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `biodata_nasabah`
--

INSERT INTO `biodata_nasabah` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_telepon`, `alamat`, `pekerjaan`, `no_ktp`, `email`, `status`, `operator_id`, `created_at`, `updated_at`) VALUES
(28, 'khk', 'jkh', '2017-05-17', 'Pria', '987', 'GG', 'JHGJ', '87', 'HGF', 'Lainnya', 11, '2017-05-22 10:32:34', '2017-05-22 10:32:34'),
(29, 'KJHKJ', 'JGJ', '2017-05-19', 'Pria', '879', 'GK', 'JHGJH', '6785', 'HGHJ', 'Jomblo', 12, '2017-05-22 10:33:15', '2017-05-22 10:33:15'),
(30, 'Andy', 'jkh', '2017-05-20', 'Pria', '97878', 'sdsd', 'mahasiswa', '432432', 'agungldcorp@gmail.com', 'Jomblo', 12, '2017-05-22 11:16:53', '2017-05-22 11:16:53'),
(31, 'mi8', 'Samarinda', '2017-05-26', 'Wanita', '999', 'GK', 'jgj', '8768', 'jhgj@gmail.com', 'Jomblo', 12, '2017-05-22 11:18:12', '2017-05-22 11:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_barang`
--

CREATE TABLE IF NOT EXISTS `kategori_barang` (
  `id` int(10) unsigned NOT NULL,
  `jenis_kategori` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `harga_barang` double(20,2) NOT NULL,
  `berat_barang` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori_barang`
--

INSERT INTO `kategori_barang` (`id`, `jenis_kategori`, `harga_barang`, `berat_barang`, `created_at`, `updated_at`) VALUES
(2, 'Perak', 200001.00, 4.00, '2017-05-18 19:41:07', '2017-05-18 19:41:07'),
(3, 'Perunggu', 90000.00, 3.00, '2017-05-18 19:43:30', '2017-05-18 19:43:30'),
(4, 'Emas', 200001.00, 4.00, '2017-05-19 13:18:24', '2017-05-19 13:18:24'),
(7, 'Motor', 2300000.00, 2.00, '2017-05-19 15:47:32', '2017-05-19 15:47:32'),
(8, 'BPKB', 20000.00, 2.00, '2017-05-19 18:18:39', '2017-05-19 18:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_pelayanan`
--

CREATE TABLE IF NOT EXISTS `kelas_pelayanan` (
  `id` int(10) unsigned NOT NULL,
  `jenis_pelayanan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kelas_pelayanan`
--

INSERT INTO `kelas_pelayanan` (`id`, `jenis_pelayanan`, `created_at`, `updated_at`) VALUES
(2, 'EKONOMI', '2017-05-18 23:38:07', '2017-05-18 23:38:07'),
(3, 'VIP', '2017-05-18 23:39:32', '2017-05-18 23:39:32'),
(4, 'Suit', '2017-05-09 16:00:00', '2017-05-19 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_16_040455_buat_table_user', 1),
('2017_05_16_041406_buat_table_admin', 2),
('2017_05_16_041420_buat_table_operator', 2),
('2017_05_16_041457_buat_table_biodata_nasabah', 2),
('2017_05_16_041542_buat_table_registrasi_gadai', 3),
('2017_05_16_041724_buat_table_kelas_pelayanan', 3),
('2017_05_16_041823_buat_table_barang_gadai', 4),
('2017_05_16_041832_buat_table_barang', 4),
('2017_05_16_041852_buat_table_kategori_barang', 5),
('2017_05_16_053119_buat_table_registrasi_gadai', 5),
('2017_05_16_053256_buat_table_barang_gadai', 5),
('2017_05_16_053335_buat_table_barang', 5),
('2017_05_16_053753_buat_table_registrasi_gadai', 6),
('2017_05_16_053825_buat_table_barang', 6),
('2017_05_16_053843_buat_table_barang_gadai', 6),
('2017_05_16_061418_buat_table_user', 7),
('2017_05_16_062407_buat_table_admin', 8),
('2017_05_16_070735_buat_table_user', 9),
('2017_05_16_070847_buat_table_pengguna', 10),
('2017_05_16_071356_buat_table_admin', 11),
('2017_05_16_071439_buat_table_operator', 11);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE IF NOT EXISTS `operator` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id`, `nama`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(11, 'Kimen', 37, '2017-05-19 15:00:54', '2017-05-19 15:46:09'),
(12, 'agung9', 38, '2017-05-22 09:37:00', '2017-05-22 09:37:00'),
(13, 'jiji', 39, '2017-05-22 10:43:26', '2017-05-22 10:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(18, 'admin', 'admin', 'admin', 'SBHS1fP5IcP3zEZ86Pe4sWokHBtk2Xy97ia9VlHsbWnRv78M9oWUJhkyh7wr', '2017-05-18 06:37:37', '2017-05-22 10:43:53'),
(19, 'agung', 'agung', 'operator', 'MV97ZtMzlWl0oRXjbbOzsUh53P7z6iPdZ3Yw8YyVmBM86me2m5KLiHz0tInJ', '2017-05-18 23:55:58', '2017-05-22 20:37:10'),
(22, 'dt', 'dt', '', NULL, '2017-05-19 14:24:52', '2017-05-19 14:24:52'),
(23, 'df', 'df', '', NULL, '2017-05-19 14:41:30', '2017-05-19 14:41:30'),
(24, 'rt', 'rt', '', NULL, '2017-05-19 14:43:46', '2017-05-19 14:43:46'),
(25, 'rt', 'yu', '', NULL, '2017-05-19 14:44:39', '2017-05-19 14:44:39'),
(26, 'fs', 'fsg', '', NULL, '2017-05-19 14:45:13', '2017-05-19 14:45:13'),
(27, 'yrdh', 'dy', '', NULL, '2017-05-19 14:46:11', '2017-05-19 14:46:11'),
(28, 'etgs', 'sth', '', NULL, '2017-05-19 14:47:19', '2017-05-19 14:47:19'),
(29, 'fxhd', 'fdhdr', '', NULL, '2017-05-19 14:47:39', '2017-05-19 14:47:39'),
(30, 'dyhtydh', 'dhtdy', '', NULL, '2017-05-19 14:52:23', '2017-05-19 14:52:23'),
(31, 'rsgrstgs', 'rstgrtsg', '', NULL, '2017-05-19 14:52:58', '2017-05-19 14:52:58'),
(32, 'tdnn', 'tjr67jfgh', '', NULL, '2017-05-19 14:53:46', '2017-05-19 14:53:46'),
(33, 'tgdrt', 'hrdth', '', NULL, '2017-05-19 14:54:26', '2017-05-19 14:54:26'),
(37, 'kimen', 'kimen', 'operator', NULL, '2017-05-19 15:00:54', '2017-05-19 15:46:09'),
(38, 'admin', 'agung', 'operator', NULL, '2017-05-22 09:37:00', '2017-05-22 09:37:00'),
(39, 'sdsad', 'KOKO', 'operator', NULL, '2017-05-22 10:43:26', '2017-05-22 10:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi_gadai`
--

CREATE TABLE IF NOT EXISTS `registrasi_gadai` (
  `id` int(10) unsigned NOT NULL,
  `tanggal_gadai` date NOT NULL,
  `tanggal_pengembalian_gadai` date NOT NULL,
  `bunga` double(8,2) NOT NULL,
  `nominal` double(8,2) NOT NULL,
  `kelas_pelayanan_id` int(10) unsigned NOT NULL,
  `biodata_nasabah_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registrasi_gadai`
--

INSERT INTO `registrasi_gadai` (`id`, `tanggal_gadai`, `tanggal_pengembalian_gadai`, `bunga`, `nominal`, `kelas_pelayanan_id`, `biodata_nasabah_id`, `created_at`, `updated_at`) VALUES
(9, '2017-05-17', '2017-05-16', 0.00, 232.00, 2, 28, '2017-05-22 11:01:03', '2017-05-22 11:01:03'),
(11, '2017-05-17', '2017-05-19', 6.00, 767.00, 2, 28, '2017-05-22 11:05:41', '2017-05-22 11:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'agung', 'agungldcorp@gmail.com', 'admin', 'agung', '2017-05-16 16:00:00', '2017-05-16 16:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`), ADD KEY `admin_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`), ADD KEY `barang_kategori_barang_id_foreign` (`kategori_barang_id`);

--
-- Indexes for table `barang_gadai`
--
ALTER TABLE `barang_gadai`
  ADD PRIMARY KEY (`id`), ADD KEY `barang_gadai_barang_id_foreign` (`barang_id`), ADD KEY `barang_gadai_registrasi_gadai_id_foreign` (`registrasi_gadai_id`);

--
-- Indexes for table `biodata_nasabah`
--
ALTER TABLE `biodata_nasabah`
  ADD PRIMARY KEY (`id`), ADD KEY `biodata_nasabah_operator_id_foreign` (`operator_id`);

--
-- Indexes for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas_pelayanan`
--
ALTER TABLE `kelas_pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`), ADD KEY `operator_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi_gadai`
--
ALTER TABLE `registrasi_gadai`
  ADD PRIMARY KEY (`id`), ADD KEY `registrasi_gadai_biodata_nasabah_id_foreign` (`biodata_nasabah_id`), ADD KEY `registrasi_gadai_kelas_pelayanan_id_foreign` (`kelas_pelayanan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `barang_gadai`
--
ALTER TABLE `barang_gadai`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `biodata_nasabah`
--
ALTER TABLE `biodata_nasabah`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kelas_pelayanan`
--
ALTER TABLE `kelas_pelayanan`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `registrasi_gadai`
--
ALTER TABLE `registrasi_gadai`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
ADD CONSTRAINT `admin_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
ADD CONSTRAINT `barang_kategori_barang_id_foreign` FOREIGN KEY (`kategori_barang_id`) REFERENCES `kategori_barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang_gadai`
--
ALTER TABLE `barang_gadai`
ADD CONSTRAINT `barang_gadai_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `barang_gadai_registrasi_gadai_id_foreign` FOREIGN KEY (`registrasi_gadai_id`) REFERENCES `registrasi_gadai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `biodata_nasabah`
--
ALTER TABLE `biodata_nasabah`
ADD CONSTRAINT `biodata_nasabah_operator_id_foreign` FOREIGN KEY (`operator_id`) REFERENCES `operator` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `operator`
--
ALTER TABLE `operator`
ADD CONSTRAINT `operator_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registrasi_gadai`
--
ALTER TABLE `registrasi_gadai`
ADD CONSTRAINT `registrasi_gadai_biodata_nasabah_id_foreign` FOREIGN KEY (`biodata_nasabah_id`) REFERENCES `biodata_nasabah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `registrasi_gadai_kelas_pelayanan_id_foreign` FOREIGN KEY (`kelas_pelayanan_id`) REFERENCES `kelas_pelayanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
