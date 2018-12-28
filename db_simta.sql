-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 11:15 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simta`
--

-- --------------------------------------------------------

--
-- Table structure for table `aksesibilitas_data`
--

CREATE TABLE `aksesibilitas_data` (
  `id_akses_data` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_jenis_akses_data` int(11) NOT NULL,
  `id_sistem_kelola` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aksesibilitas_data`
--

INSERT INTO `aksesibilitas_data` (`id_akses_data`, `id_departemen`, `id_jenis_akses_data`, `id_sistem_kelola`, `created_at`, `updated_at`) VALUES
(1, 10, 1, 4, '2018-08-31 11:02:40', '2018-08-31 04:02:40'),
(2, 10, 2, 4, '2018-08-31 11:02:40', '2018-08-31 04:02:40'),
(3, 10, 3, 4, '2018-08-31 11:02:40', '2018-08-31 04:02:40'),
(4, 10, 4, 4, '2018-08-24 16:32:01', '2018-08-24 09:32:01'),
(5, 10, 5, 4, '2018-08-24 16:25:19', '2018-08-24 09:25:19'),
(6, 10, 6, 4, '2018-08-31 11:02:40', '2018-08-31 04:02:40'),
(7, 10, 7, 4, '2018-08-24 16:32:01', '2018-08-24 09:32:01'),
(8, 10, 8, 4, '2018-08-24 16:32:01', '2018-08-24 09:32:01'),
(9, 10, 9, 4, '2018-08-24 16:32:01', '2018-08-24 09:32:01'),
(10, 10, 10, 4, '2018-08-24 16:32:01', '2018-08-24 09:32:01'),
(11, 10, 11, 4, '2018-08-24 16:32:01', '2018-08-24 09:32:01'),
(12, 10, 12, 4, '2018-08-31 11:02:40', '2018-08-31 04:02:40'),
(13, 6, 1, 4, '2018-09-20 04:18:24', '2018-09-19 21:18:24'),
(14, 6, 2, 4, '2018-09-20 04:18:25', '2018-09-19 21:18:25'),
(15, 6, 3, 4, '2018-09-26 04:19:53', '2018-09-25 21:19:53'),
(16, 6, 4, 4, '2018-09-26 04:19:53', '2018-09-25 21:19:53'),
(17, 6, 5, 4, '2018-09-26 04:19:53', '2018-09-25 21:19:53'),
(18, 6, 6, 4, '2018-09-26 04:19:53', '2018-09-25 21:19:53'),
(19, 6, 7, 4, '2018-08-14 11:13:02', '0000-00-00 00:00:00'),
(20, 6, 8, 4, '2018-08-14 11:13:28', '0000-00-00 00:00:00'),
(21, 6, 9, 4, '2018-08-14 11:13:28', '0000-00-00 00:00:00'),
(22, 6, 10, 4, '2018-08-14 11:14:05', '0000-00-00 00:00:00'),
(23, 6, 11, 2, '2018-10-02 07:18:08', '2018-10-02 00:18:08'),
(24, 6, 12, 2, '2018-10-02 07:18:08', '2018-10-02 00:18:08'),
(25, 1, 1, 4, '2018-09-26 07:14:06', '2018-09-26 00:14:06'),
(26, 1, 2, 4, '2018-09-26 07:14:06', '2018-09-26 00:14:06'),
(27, 1, 3, 4, '2018-09-26 07:14:06', '2018-09-26 00:14:06'),
(28, 1, 4, 4, '2018-08-24 17:14:02', '2018-08-24 10:14:02'),
(29, 1, 5, 4, '2018-09-26 07:14:06', '2018-09-26 00:14:06'),
(30, 1, 6, 4, '2018-08-24 17:14:16', '2018-08-24 10:14:16'),
(31, 1, 7, 2, '2018-09-26 07:14:06', '2018-09-26 00:14:06'),
(32, 1, 8, 4, '2018-09-26 07:14:06', '2018-09-26 00:14:06'),
(33, 1, 9, 2, '2018-09-26 07:14:06', '2018-09-26 00:14:06'),
(34, 1, 10, 2, '2018-09-26 07:14:06', '2018-09-26 00:14:06'),
(35, 1, 11, 4, '2018-09-26 07:14:06', '2018-09-26 00:14:06'),
(36, 1, 12, 2, '2018-09-26 07:14:06', '2018-09-26 00:14:06'),
(37, 2, 1, 1, '2018-08-24 02:58:00', '0000-00-00 00:00:00'),
(38, 2, 2, 1, '2018-08-24 02:58:00', '0000-00-00 00:00:00'),
(39, 2, 3, 1, '2018-08-24 02:58:00', '0000-00-00 00:00:00'),
(40, 2, 4, 1, '2018-08-24 02:58:00', '0000-00-00 00:00:00'),
(41, 2, 5, 1, '2018-08-24 02:58:00', '0000-00-00 00:00:00'),
(42, 2, 6, 1, '2018-08-24 02:58:00', '0000-00-00 00:00:00'),
(43, 2, 7, 1, '2018-08-24 02:58:00', '0000-00-00 00:00:00'),
(44, 2, 8, 1, '2018-08-24 02:58:00', '0000-00-00 00:00:00'),
(45, 2, 9, 1, '2018-08-24 02:58:00', '0000-00-00 00:00:00'),
(46, 2, 10, 1, '2018-08-24 02:58:00', '0000-00-00 00:00:00'),
(47, 2, 11, 1, '2018-08-24 02:58:00', '0000-00-00 00:00:00'),
(48, 2, 12, 1, '2018-08-24 02:58:00', '0000-00-00 00:00:00'),
(49, 3, 1, 1, '2018-08-24 03:00:14', '0000-00-00 00:00:00'),
(50, 3, 2, 1, '2018-08-24 03:00:14', '0000-00-00 00:00:00'),
(51, 3, 3, 1, '2018-08-24 03:00:14', '0000-00-00 00:00:00'),
(52, 3, 4, 1, '2018-08-24 03:00:14', '0000-00-00 00:00:00'),
(53, 3, 5, 1, '2018-08-24 03:00:14', '0000-00-00 00:00:00'),
(54, 3, 6, 1, '2018-08-24 03:00:14', '0000-00-00 00:00:00'),
(55, 3, 7, 1, '2018-08-24 03:00:14', '0000-00-00 00:00:00'),
(56, 3, 8, 1, '2018-08-24 03:00:14', '0000-00-00 00:00:00'),
(57, 3, 9, 1, '2018-08-24 03:00:14', '0000-00-00 00:00:00'),
(58, 3, 10, 1, '2018-08-24 03:00:14', '0000-00-00 00:00:00'),
(59, 3, 11, 1, '2018-08-24 03:00:14', '0000-00-00 00:00:00'),
(60, 3, 12, 1, '2018-08-24 03:00:14', '0000-00-00 00:00:00'),
(61, 4, 1, 4, '2018-10-01 05:37:27', '2018-09-30 22:37:27'),
(62, 4, 2, 4, '2018-10-01 05:37:27', '2018-09-30 22:37:27'),
(63, 4, 3, 1, '2018-08-24 03:03:16', '0000-00-00 00:00:00'),
(64, 4, 4, 1, '2018-08-24 03:03:16', '0000-00-00 00:00:00'),
(65, 4, 5, 1, '2018-08-24 03:03:16', '0000-00-00 00:00:00'),
(66, 4, 6, 1, '2018-08-24 03:03:16', '0000-00-00 00:00:00'),
(67, 4, 7, 1, '2018-08-24 03:03:16', '0000-00-00 00:00:00'),
(68, 4, 8, 1, '2018-08-24 03:03:16', '0000-00-00 00:00:00'),
(69, 4, 9, 1, '2018-08-24 03:03:16', '0000-00-00 00:00:00'),
(70, 4, 10, 1, '2018-08-24 03:03:16', '0000-00-00 00:00:00'),
(71, 4, 11, 1, '2018-08-24 03:03:16', '0000-00-00 00:00:00'),
(72, 4, 12, 1, '2018-08-24 03:03:16', '0000-00-00 00:00:00'),
(73, 5, 1, 1, '2018-08-24 03:05:33', '0000-00-00 00:00:00'),
(74, 5, 2, 1, '2018-08-24 03:05:33', '0000-00-00 00:00:00'),
(75, 5, 3, 1, '2018-08-24 03:05:33', '0000-00-00 00:00:00'),
(76, 5, 4, 1, '2018-08-24 03:05:33', '0000-00-00 00:00:00'),
(77, 5, 5, 1, '2018-08-24 03:05:33', '0000-00-00 00:00:00'),
(78, 5, 6, 1, '2018-08-24 03:05:33', '0000-00-00 00:00:00'),
(79, 5, 7, 1, '2018-08-24 03:05:33', '0000-00-00 00:00:00'),
(80, 5, 8, 1, '2018-08-24 03:05:33', '0000-00-00 00:00:00'),
(81, 5, 9, 1, '2018-08-24 03:05:33', '0000-00-00 00:00:00'),
(82, 5, 10, 1, '2018-08-24 03:05:33', '0000-00-00 00:00:00'),
(83, 5, 11, 1, '2018-08-24 03:05:33', '0000-00-00 00:00:00'),
(84, 5, 12, 1, '2018-08-24 03:05:33', '0000-00-00 00:00:00'),
(85, 7, 1, 1, '2018-08-24 03:20:53', '0000-00-00 00:00:00'),
(86, 7, 2, 1, '2018-08-24 03:20:53', '0000-00-00 00:00:00'),
(87, 7, 3, 1, '2018-08-24 03:20:53', '0000-00-00 00:00:00'),
(88, 7, 4, 1, '2018-08-24 03:20:53', '0000-00-00 00:00:00'),
(89, 7, 5, 1, '2018-08-24 03:20:53', '0000-00-00 00:00:00'),
(90, 7, 6, 1, '2018-08-24 03:20:53', '0000-00-00 00:00:00'),
(91, 7, 7, 1, '2018-08-24 03:20:53', '0000-00-00 00:00:00'),
(92, 7, 8, 1, '2018-08-24 03:20:53', '0000-00-00 00:00:00'),
(93, 7, 9, 1, '2018-08-24 03:20:53', '0000-00-00 00:00:00'),
(94, 7, 10, 1, '2018-08-24 03:20:53', '0000-00-00 00:00:00'),
(95, 7, 11, 1, '2018-08-24 03:20:53', '0000-00-00 00:00:00'),
(96, 7, 12, 1, '2018-08-24 03:20:53', '0000-00-00 00:00:00'),
(97, 8, 1, 1, '2018-08-24 03:23:28', '0000-00-00 00:00:00'),
(98, 8, 2, 1, '2018-08-24 03:23:28', '0000-00-00 00:00:00'),
(99, 8, 3, 1, '2018-08-24 03:23:28', '0000-00-00 00:00:00'),
(100, 8, 4, 1, '2018-08-24 03:23:28', '0000-00-00 00:00:00'),
(101, 8, 5, 1, '2018-08-24 03:23:28', '0000-00-00 00:00:00'),
(102, 8, 6, 1, '2018-08-24 03:23:28', '0000-00-00 00:00:00'),
(103, 8, 7, 1, '2018-08-24 03:23:28', '0000-00-00 00:00:00'),
(104, 8, 8, 1, '2018-08-24 03:23:28', '0000-00-00 00:00:00'),
(105, 8, 9, 1, '2018-08-24 03:23:28', '0000-00-00 00:00:00'),
(106, 8, 10, 1, '2018-08-24 03:23:28', '0000-00-00 00:00:00'),
(107, 8, 11, 1, '2018-08-24 03:23:28', '0000-00-00 00:00:00'),
(108, 8, 12, 1, '2018-08-24 03:23:28', '0000-00-00 00:00:00'),
(109, 9, 1, 1, '2018-08-24 03:25:56', '0000-00-00 00:00:00'),
(110, 9, 2, 1, '2018-08-24 03:25:56', '0000-00-00 00:00:00'),
(111, 9, 3, 1, '2018-08-24 03:25:56', '0000-00-00 00:00:00'),
(112, 9, 4, 1, '2018-08-24 03:25:56', '0000-00-00 00:00:00'),
(113, 9, 5, 1, '2018-08-24 03:25:56', '0000-00-00 00:00:00'),
(114, 9, 6, 1, '2018-08-24 03:25:56', '0000-00-00 00:00:00'),
(115, 9, 7, 1, '2018-08-24 03:25:56', '0000-00-00 00:00:00'),
(116, 9, 8, 1, '2018-08-24 03:25:56', '0000-00-00 00:00:00'),
(117, 9, 9, 1, '2018-08-24 03:25:56', '0000-00-00 00:00:00'),
(118, 9, 10, 1, '2018-08-24 03:25:56', '0000-00-00 00:00:00'),
(119, 9, 11, 1, '2018-08-24 03:25:56', '0000-00-00 00:00:00'),
(120, 9, 12, 1, '2018-08-24 03:25:56', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas_dosen_sesuai_sks`
--

CREATE TABLE `aktivitas_dosen_sesuai_sks` (
  `id_aktivitas_dosen_sesuai_sks` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks_pengajaran_pada_ps_sendiri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks_pengajaran_pada_ps_lain_pt_sendiri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks_pengajaran_pada_pt_lain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks_penelitian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks_pengabdian_kepada_masyarakat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks_manajemen_pt_sendiri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks_manajemen_pt_lain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aktivitas_dosen_sesuai_sks`
--

INSERT INTO `aktivitas_dosen_sesuai_sks` (`id_aktivitas_dosen_sesuai_sks`, `id_departemen`, `nama_sdm5`, `sks_pengajaran_pada_ps_sendiri`, `sks_pengajaran_pada_ps_lain_pt_sendiri`, `sks_pengajaran_pada_pt_lain`, `sks_penelitian`, `sks_pengabdian_kepada_masyarakat`, `sks_manajemen_pt_sendiri`, `sks_manajemen_pt_lain`, `keterangan`, `created_at`, `updated_at`) VALUES
(11, 1, 'Ir. Julio Adisantoso M.Kom', '6.51', '2.50', '0.00', '0.89', '1.31', '2.00', '0.00', '-', '2018-10-02 12:14:04', '2018-10-02 12:27:49'),
(12, 1, 'Ir. Meuthia Rachmaniah M.Sc', '3.00', '0.00', '0.00', '1.75', '5.40', '1.62', '0.00', '-', '2018-10-02 12:28:50', '2018-10-02 12:28:50'),
(21, 2, 'Ir. Julio Adisantoso M.Kom', '6.51', '2.50', '0.00', '0.89', '1.31', '2.00', '0.00', '-', '2018-10-02 12:14:04', '2018-10-02 12:27:49'),
(22, 2, 'Ir. Meuthia Rachmaniah M.Sc', '3.00', '0.00', '0.00', '1.75', '5.40', '1.62', '0.00', '-', '2018-10-02 12:28:50', '2018-10-02 12:28:50'),
(31, 3, 'Ir. Julio Adisantoso M.Kom', '6.51', '2.50', '0.00', '0.89', '1.31', '2.00', '0.00', '-', '2018-10-02 12:14:04', '2018-10-02 12:27:49'),
(32, 3, 'Ir. Meuthia Rachmaniah M.Sc', '3.00', '0.00', '0.00', '1.75', '5.40', '1.62', '0.00', '-', '2018-10-02 12:28:50', '2018-10-02 12:28:50'),
(41, 4, 'Ir. Julio Adisantoso M.Kom', '6.51', '2.50', '0.00', '0.89', '1.31', '2.00', '0.00', '-', '2018-10-02 12:14:04', '2018-10-02 12:27:49'),
(42, 4, 'Ir. Meuthia Rachmaniah M.Sc', '3.00', '0.00', '0.00', '1.75', '5.40', '1.62', '0.00', '-', '2018-10-02 12:28:50', '2018-10-02 12:28:50'),
(51, 5, 'Ir. Julio Adisantoso M.Kom', '6.51', '2.50', '0.00', '0.89', '1.31', '2.00', '0.00', '-', '2018-10-02 12:14:04', '2018-10-02 12:27:49'),
(52, 5, 'Ir. Meuthia Rachmaniah M.Sc', '3.00', '0.00', '0.00', '1.75', '5.40', '1.62', '0.00', '-', '2018-10-02 12:28:50', '2018-10-02 12:28:50'),
(71, 7, 'Ir. Julio Adisantoso M.Kom', '6.51', '2.50', '0.00', '0.89', '1.31', '2.00', '0.00', '-', '2018-10-02 12:14:04', '2018-10-02 12:27:49'),
(72, 7, 'Ir. Meuthia Rachmaniah M.Sc', '3.00', '0.00', '0.00', '1.75', '5.40', '1.62', '0.00', '-', '2018-10-02 12:28:50', '2018-10-02 12:28:50'),
(81, 8, 'Ir. Julio Adisantoso M.Kom', '6.51', '2.50', '0.00', '0.89', '1.31', '2.00', '0.00', '-', '2018-10-02 12:14:04', '2018-10-02 12:27:49'),
(82, 8, 'Ir. Meuthia Rachmaniah M.Sc', '3.00', '0.00', '0.00', '1.75', '5.40', '1.62', '0.00', '-', '2018-10-02 12:28:50', '2018-10-02 12:28:50'),
(88, 6, 'Ir. Meuthia Rachmaniah M.Sc', '1.57', '3.75', '0.00', '3.61', '0.26', '3.83', '0.00', '-', NULL, NULL),
(89, 6, 'Ir. Julio Adisantoso M.Kom', '4.98', '1.75', '0.00', '0.33', '0.63', '4.26', '0.00', '-', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas_mengajar_dosen_diluar_ps`
--

CREATE TABLE `aktivitas_mengajar_dosen_diluar_ps` (
  `id_aktivitas_mengajar_dosen_diluar_ps` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keahlian_sdm7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_sdm7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mk_sdm7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jlh_kelas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jlh_rencana_sdm7` int(11) NOT NULL,
  `jlh_laksana_sdm7` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aktivitas_mengajar_dosen_diluar_ps`
--

INSERT INTO `aktivitas_mengajar_dosen_diluar_ps` (`id_aktivitas_mengajar_dosen_diluar_ps`, `id_departemen`, `nama_sdm7`, `keahlian_sdm7`, `kode_sdm7`, `nama_mk_sdm7`, `id_jlh_kelas`, `jlh_rencana_sdm7`, `jlh_laksana_sdm7`, `created_at`, `updated_at`) VALUES
(11, 1, 'Irmansyah', 'Fisika', 'FIS100', 'Fisika', '1', 11, 11, '2018-09-27 01:23:47', '2018-10-02 15:05:03'),
(12, 1, 'Mersi Kurniati', 'Fisika', 'FIS453', 'Instrumentasi Fisika', '1', 7, 7, '2018-10-02 14:57:10', '2018-10-02 14:57:10'),
(21, 2, 'Irmansyah', 'Fisika', 'FIS100', 'Fisika', '1', 11, 11, '2018-09-27 01:23:47', '2018-10-02 15:05:03'),
(22, 2, 'Mersi Kurniati', 'Fisika', 'FIS453', 'Instrumentasi Fisika', '1', 7, 7, '2018-10-02 14:57:10', '2018-10-02 14:57:10'),
(31, 3, 'Irmansyah', 'Fisika', 'FIS100', 'Fisika', '1', 11, 11, '2018-09-27 01:23:47', '2018-10-02 15:05:03'),
(32, 3, 'Mersi Kurniati', 'Fisika', 'FIS453', 'Instrumentasi Fisika', '1', 7, 7, '2018-10-02 14:57:10', '2018-10-02 14:57:10'),
(41, 4, 'Irmansyah', 'Fisika', 'FIS100', 'Fisika', '1', 11, 11, '2018-09-27 01:23:47', '2018-10-02 15:05:03'),
(42, 4, 'Mersi Kurniati', 'Fisika', 'FIS453', 'Instrumentasi Fisika', '1', 7, 7, '2018-10-02 14:57:10', '2018-10-02 14:57:10'),
(51, 5, 'Irmansyah', 'Fisika', 'FIS100', 'Fisika', '1', 11, 11, '2018-09-27 01:23:47', '2018-10-02 15:05:03'),
(52, 5, 'Mersi Kurniati', 'Fisika', 'FIS453', 'Instrumentasi Fisika', '1', 7, 7, '2018-10-02 14:57:10', '2018-10-02 14:57:10'),
(61, 6, 'Irmansyah', 'Fisika', 'FIS100', 'Fisika', '1', 11, 11, '2018-09-27 01:23:47', '2018-10-02 15:05:03'),
(62, 6, 'Mersi Kurniati', 'Fisika', 'FIS453', 'Instrumentasi Fisika', '1', 7, 7, '2018-10-02 14:57:10', '2018-10-02 14:57:10'),
(71, 7, 'Irmansyah', 'Fisika', 'FIS100', 'Fisika', '1', 11, 11, '2018-09-27 01:23:47', '2018-10-02 15:05:03'),
(72, 7, 'Mersi Kurniati', 'Fisika', 'FIS453', 'Instrumentasi Fisika', '1', 7, 7, '2018-10-02 14:57:10', '2018-10-02 14:57:10'),
(81, 8, 'Irmansyah', 'Fisika', 'FIS100', 'Fisika', '1', 11, 11, '2018-09-27 01:23:47', '2018-10-02 15:05:03'),
(82, 8, 'Mersi Kurniati', 'Fisika', 'FIS453', 'Instrumentasi Fisika', '1', 7, 7, '2018-10-02 14:57:10', '2018-10-02 14:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas_mengajar_dosen_sesuai_ps`
--

CREATE TABLE `aktivitas_mengajar_dosen_sesuai_ps` (
  `id_aktivitas_mengajar_dosen_sesuai_ps` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keahlian_sdm6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_sdm6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mk_sdm6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jlh_kelas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jlh_rencana_sdm6` int(11) NOT NULL,
  `jlh_laksana_sdm6` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aktivitas_mengajar_dosen_sesuai_ps`
--

INSERT INTO `aktivitas_mengajar_dosen_sesuai_ps` (`id_aktivitas_mengajar_dosen_sesuai_ps`, `id_departemen`, `nama_sdm6`, `keahlian_sdm6`, `kode_sdm6`, `nama_mk_sdm6`, `id_jlh_kelas`, `jlh_rencana_sdm6`, `jlh_laksana_sdm6`, `created_at`, `updated_at`) VALUES
(11, 1, 'Ir. Julio Adisantoso M.Kom', 'Ilmu Komputer', 'KOM101', 'Algoritme', '1', 4, 4, '2018-09-27 00:22:36', '2018-10-02 14:06:44'),
(12, 1, 'Ir. Meuthia Rachmaniah M.Sc', 'Ilmu Komputer', 'KOM201/3', 'Penerapan Komputer', '1', 4, 4, '2018-09-27 00:53:44', '2018-10-02 14:08:22'),
(21, 2, 'Ir. Julio Adisantoso M.Kom', 'Ilmu Komputer', 'KOM101', 'Algoritme', '1', 4, 4, '2018-09-27 00:22:36', '2018-10-02 14:06:44'),
(22, 2, 'Ir. Meuthia Rachmaniah M.Sc', 'Ilmu Komputer', 'KOM201/3', 'Penerapan Komputer', '1', 4, 4, '2018-09-27 00:53:44', '2018-10-02 14:08:22'),
(31, 3, 'Ir. Julio Adisantoso M.Kom', 'Ilmu Komputer', 'KOM101', 'Algoritme', '1', 4, 4, '2018-09-27 00:22:36', '2018-10-02 14:06:44'),
(32, 3, 'Ir. Meuthia Rachmaniah M.Sc', 'Ilmu Komputer', 'KOM201/3', 'Penerapan Komputer', '1', 4, 4, '2018-09-27 00:53:44', '2018-10-02 14:08:22'),
(41, 4, 'Ir. Julio Adisantoso M.Kom', 'Ilmu Komputer', 'KOM101', 'Algoritme', '1', 4, 4, '2018-09-27 00:22:36', '2018-10-02 14:06:44'),
(42, 4, 'Ir. Meuthia Rachmaniah M.Sc', 'Ilmu Komputer', 'KOM201/3', 'Penerapan Komputer', '1', 4, 4, '2018-09-27 00:53:44', '2018-10-02 14:08:22'),
(51, 5, 'Ir. Julio Adisantoso M.Kom', 'Ilmu Komputer', 'KOM101', 'Algoritme', '1', 4, 4, '2018-09-27 00:22:36', '2018-10-02 14:06:44'),
(52, 5, 'Ir. Meuthia Rachmaniah M.Sc', 'Ilmu Komputer', 'KOM201/3', 'Penerapan Komputer', '1', 4, 4, '2018-09-27 00:53:44', '2018-10-02 14:08:22'),
(61, 6, 'Ir. Julio Adisantoso M.Kom', 'Ilmu Komputer', 'KOM101', 'Algoritme', '1', 4, 4, '2018-09-27 00:22:36', '2018-10-02 14:06:44'),
(62, 6, 'Ir. Meuthia Rachmaniah M.Sc', 'Ilmu Komputer', 'KOM201/3', 'Penerapan Komputer', '1', 4, 4, '2018-09-27 00:53:44', '2018-10-02 14:08:22'),
(71, 7, 'Ir. Julio Adisantoso M.Kom', 'Ilmu Komputer', 'KOM101', 'Algoritme', '1', 4, 4, '2018-09-27 00:22:36', '2018-10-02 14:06:44'),
(72, 7, 'Ir. Meuthia Rachmaniah M.Sc', 'Ilmu Komputer', 'KOM201/3', 'Penerapan Komputer', '1', 4, 4, '2018-09-27 00:53:44', '2018-10-02 14:08:22'),
(81, 8, 'Ir. Julio Adisantoso M.Kom', 'Ilmu Komputer', 'KOM101', 'Algoritme', '1', 4, 4, '2018-09-27 00:22:36', '2018-10-02 14:06:44'),
(82, 8, 'Ir. Meuthia Rachmaniah M.Sc', 'Ilmu Komputer', 'KOM201/3', 'Penerapan Komputer', '1', 4, 4, '2018-09-27 00:53:44', '2018-10-02 14:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas_mengajar_dosen_tidak_tetap`
--

CREATE TABLE `aktivitas_mengajar_dosen_tidak_tetap` (
  `id_aktivitas_mengajar_dosen_tidak_tetap` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keahlian_sdm9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_sdm9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mk_sdm9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jlh_kelas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jlh_rencana_sdm9` int(11) NOT NULL,
  `jlh_laksana_sdm9` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alat_utama_lab_ps`
--

CREATE TABLE `alat_utama_lab_ps` (
  `id_alat_utama_lab` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_lab` varchar(255) NOT NULL,
  `jenis_alat_utama` varchar(255) NOT NULL,
  `jumlah_unit_alat` int(11) NOT NULL,
  `harga_satuan` decimal(12,2) NOT NULL,
  `jumlah_harga` decimal(12,2) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `id_kepemilikan_alat` int(11) NOT NULL,
  `id_kondisi_alat` int(11) NOT NULL,
  `rata_waktu` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alat_utama_lab_ps`
--

INSERT INTO `alat_utama_lab_ps` (`id_alat_utama_lab`, `id_departemen`, `nama_lab`, `jenis_alat_utama`, `jumlah_unit_alat`, `harga_satuan`, `jumlah_harga`, `tanggal_beli`, `id_kepemilikan_alat`, `id_kondisi_alat`, `rata_waktu`, `created_at`, `updated_at`) VALUES
(2, 6, 'Lab Ilkom 02', 'Lenovo', 5, '4.00', '20.00', '2015-02-22', 1, 1, 8, '2018-10-04 18:14:13', '2018-10-04 11:14:13'),
(4, 4, 'Lab Ilkom 01', 'Monitor', 20, '3.40', '68.00', '2016-01-11', 1, 1, 2, '2018-10-01 17:48:08', '2018-10-01 17:48:08'),
(5, 4, 'Lab A', 'Printer', 1, '5.10', '5.10', '2017-02-12', 1, 1, 0, '2018-10-01 20:05:06', '2018-10-01 20:05:06'),
(6, 6, 'Laboratorium Ilmu Komputer 1', 'Printer', 2, '2.00', '4.00', '2017-02-22', 1, 1, 4, '2018-10-04 11:16:00', '2018-10-04 11:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `bobot_sks`
--

CREATE TABLE `bobot_sks` (
  `id_bobot_sks` int(11) NOT NULL,
  `jumlah_sks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_sks`
--

INSERT INTO `bobot_sks` (`id_bobot_sks`, `jumlah_sks`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4');

-- --------------------------------------------------------

--
-- Table structure for table `bobot_tugas`
--

CREATE TABLE `bobot_tugas` (
  `id_bobot_tugas` int(11) NOT NULL,
  `bobottugas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot_tugas`
--

INSERT INTO `bobot_tugas` (`id_bobot_tugas`, `bobottugas`) VALUES
(1, 'Ya'),
(2, 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_penelitian`
--

CREATE TABLE `bukti_penelitian` (
  `id_bukti` int(11) NOT NULL,
  `id_penelitian` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `bukti` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukti_penelitian`
--

INSERT INTO `bukti_penelitian` (`id_bukti`, `id_penelitian`, `id_departemen`, `bukti`) VALUES
(5, 15, 3, 'PERMEN-NOMOR-32-TAHUN-2016-TENTANG-AKREDITASI-PRODI-DAN-PT-SALINAN.pdf'),
(6, 20, 3, 'WhitePaper-1.pdf'),
(14, 16, 3, 'Top 10 Reasons Why Systems Projects Fail.pdf'),
(15, 21, 6, '[Update 270916] Tugas Praktikum 3 AI.pdf'),
(27, 22, 3, 'aaa.pdf'),
(30, 24, 6, 'd41fd19c83ead082f065c9ef96ae48011cf4.pdf'),
(31, 26, 6, 'Penyebab-Kegagalan-dan-Kesuksesan-Sistem-Informasi.pdf'),
(32, 27, 6, 'Cetak.pdf'),
(33, 27, 6, 'pdf penelitian.docx'),
(34, 31, 2, 'pdf penelitian.docx'),
(35, 39, 6, 'RegisterAndPrintEntryCard.pdf'),
(36, 46, 6, 'RegisterAndPrintEntryCard.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pengabdian`
--

CREATE TABLE `bukti_pengabdian` (
  `id_buktiPeng` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_pengabdian` int(11) NOT NULL,
  `bukti_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukti_pengabdian`
--

INSERT INTO `bukti_pengabdian` (`id_buktiPeng`, `id_departemen`, `id_pengabdian`, `bukti_file`) VALUES
(3, 3, 8, 'contoh typeface dll.pdf'),
(4, 3, 9, 'aaa.pdf'),
(5, 3, 10, 'PERMEN-NOMOR-32-TAHUN-2016-TENTANG-AKREDITASI-PRODI-DAN-PT-SALINAN.pdf'),
(6, 3, 11, 'PERMEN-NOMOR-32-TAHUN-2016-TENTANG-AKREDITASI-PRODI-DAN-PT-SALINAN.pdf'),
(7, 6, 7, 'usecase deskription.docx'),
(8, 6, 12, 'WhitePaper-1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `capaian_prestasi`
--

CREATE TABLE `capaian_prestasi` (
  `id_capaian_prestasi` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm13` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prestasi_yang_dicapai` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_pencapaian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tingkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `capaian_prestasi`
--

INSERT INTO `capaian_prestasi` (`id_capaian_prestasi`, `id_departemen`, `nama_sdm13`, `prestasi_yang_dicapai`, `waktu_pencapaian`, `id_tingkat`, `created_at`, `updated_at`) VALUES
(11, 1, 'Ir. Julio Adisantoso, M.Kom', 'Pemenang lomba Website IPB 2015 Kategori Blog Dosen', '2015', '1', '2018-09-25 09:24:56', '2018-09-25 09:26:12'),
(12, 1, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Peringkat 3 Ketua Program Studi Berprestasi IPB', '2015', '1', '2018-09-25 09:26:06', '2018-09-25 09:26:06'),
(21, 2, 'Ir. Julio Adisantoso, M.Kom', 'Pemenang lomba Website IPB 2015 Kategori Blog Dosen', '2015', '1', '2018-09-25 09:24:56', '2018-09-25 09:26:12'),
(22, 2, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Peringkat 3 Ketua Program Studi Berprestasi IPB', '2015', '1', '2018-09-25 09:26:06', '2018-09-25 09:26:06'),
(31, 3, 'Ir. Julio Adisantoso, M.Kom', 'Pemenang lomba Website IPB 2015 Kategori Blog Dosen', '2015', '1', '2018-09-25 09:24:56', '2018-09-25 09:26:12'),
(32, 3, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Peringkat 3 Ketua Program Studi Berprestasi IPB', '2015', '1', '2018-09-25 09:26:06', '2018-09-25 09:26:06'),
(41, 4, 'Ir. Julio Adisantoso, M.Kom', 'Pemenang lomba Website IPB 2015 Kategori Blog Dosen', '2015', '1', '2018-09-25 09:24:56', '2018-09-25 09:26:12'),
(42, 4, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Peringkat 3 Ketua Program Studi Berprestasi IPB', '2015', '1', '2018-09-25 09:26:06', '2018-09-25 09:26:06'),
(51, 5, 'Ir. Julio Adisantoso, M.Kom', 'Pemenang lomba Website IPB 2015 Kategori Blog Dosen', '2015', '1', '2018-09-25 09:24:56', '2018-09-25 09:26:12'),
(52, 5, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Peringkat 3 Ketua Program Studi Berprestasi IPB', '2015', '1', '2018-09-25 09:26:06', '2018-09-25 09:26:06'),
(61, 6, 'Ir. Julio Adisantoso, M.Kom', 'Pemenang lomba Website IPB 2015 Kategori Blog Dosen', '2015', '1', '2018-09-25 09:24:56', '2018-09-25 09:26:12'),
(62, 6, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Peringkat 3 Ketua Program Studi Berprestasi IPB', '2015', '1', '2018-09-25 09:26:06', '2018-09-25 09:26:06'),
(71, 7, 'Ir. Julio Adisantoso, M.Kom', 'Pemenang lomba Website IPB 2015 Kategori Blog Dosen', '2015', '1', '2018-09-25 09:24:56', '2018-09-25 09:26:12'),
(72, 7, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Peringkat 3 Ketua Program Studi Berprestasi IPB', '2015', '1', '2018-09-25 09:26:06', '2018-09-25 09:26:06'),
(81, 8, 'Ir. Julio Adisantoso, M.Kom', 'Pemenang lomba Website IPB 2015 Kategori Blog Dosen', '2015', '1', '2018-09-25 09:24:56', '2018-09-25 09:26:12'),
(82, 8, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Peringkat 3 Ketua Program Studi Berprestasi IPB', '2015', '1', '2018-09-25 09:26:06', '2018-09-25 09:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `contoh_soal_mk`
--

CREATE TABLE `contoh_soal_mk` (
  `id_conso` int(20) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `kode_mk` varchar(50) NOT NULL,
  `nama_mk` varchar(255) NOT NULL,
  `conso` longblob NOT NULL,
  `silabus` longblob NOT NULL,
  `tahun` year(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contoh_soal_mk`
--

INSERT INTO `contoh_soal_mk` (`id_conso`, `id_departemen`, `kode_mk`, `nama_mk`, `conso`, `silabus`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 6, 'KOM205', 'Basis Data', 0x696e737472756d656e5f5050475f323031372e706466, 0x696e737472756d656e5f5050475f323031372e706466, 2017, '2018-10-23 02:14:59', '2018-08-30 20:25:25'),
(4, 6, 'KOM335', 'Sistem Informasi', 0x343673616d706c652d6c61726176656c2e706466, 0x332d42554b552d332d424f52414e472d414950542d323031312e646f63, 2018, '2018-10-23 02:15:34', '2018-08-30 21:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ruang_kerja`
--

CREATE TABLE `daftar_ruang_kerja` (
  `id_ruang_kerja_dosen` int(11) NOT NULL,
  `ruang_kerja_dosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_ruang_kerja`
--

INSERT INTO `daftar_ruang_kerja` (`id_ruang_kerja_dosen`, `ruang_kerja_dosen`) VALUES
(1, 'Satu ruang untuk lebih dari 4 dosen'),
(2, 'Satu ruang untuk 3-4 dosen'),
(3, 'Satu ruang untuk 2 dosen'),
(4, 'Satu ruang untuk 1 dosen (bukan pejabat struktural)');

-- --------------------------------------------------------

--
-- Table structure for table `dana_dr_utk_pengabdian_msrkt`
--

CREATE TABLE `dana_dr_utk_pengabdian_msrkt` (
  `id_dana_pgbdn` int(50) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `judul_kegiatan` varchar(255) NOT NULL,
  `dosen_terlibat` varchar(255) NOT NULL,
  `sumber_dana` varchar(255) NOT NULL,
  `jenis_danaa` varchar(255) NOT NULL,
  `tahun_pgb_dana` date NOT NULL,
  `jumlah_dana` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dana_dr_utk_pengabdian_msrkt`
--

INSERT INTO `dana_dr_utk_pengabdian_msrkt` (`id_dana_pgbdn`, `id_departemen`, `judul_kegiatan`, `dosen_terlibat`, `sumber_dana`, `jenis_danaa`, `tahun_pgb_dana`, `jumlah_dana`, `created_at`, `updated_at`) VALUES
(1, 6, 'laap', 'yuu', 'haa', 'hiii', '2018-08-14', 200, '2018-08-29 07:47:22', '2018-08-29 00:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `dana_utk_penelitian`
--

CREATE TABLE `dana_utk_penelitian` (
  `id_dana_penelitian` int(50) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `tahun_dana_penelitian` date NOT NULL,
  `judul_penelitian` varchar(255) NOT NULL,
  `nama_dosen_terlibat_` varchar(255) NOT NULL,
  `sumber_dana_` varchar(255) NOT NULL,
  `jenis_dana` varchar(255) NOT NULL,
  `jumlah_dana` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dana_utk_penelitian`
--

INSERT INTO `dana_utk_penelitian` (`id_dana_penelitian`, `id_departemen`, `tahun_dana_penelitian`, `judul_penelitian`, `nama_dosen_terlibat_`, `sumber_dana_`, `jenis_dana`, `jumlah_dana`, `created_at`, `updated_at`) VALUES
(1, 6, '2018-08-13', 'ob', 'o', 'o', 'o', 123, '2018-08-29 07:44:08', '2018-08-29 00:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `data_dosen_tidak_tetap`
--

CREATE TABLE `data_dosen_tidak_tetap` (
  `id_data_dosen_tidak_tetap` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_dosen_sdm8` varchar(255) NOT NULL,
  `nidn_sdm8` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_lampiran_sdm8` int(11) DEFAULT NULL,
  `gelar_sdm8` varchar(255) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `pendidikan_sdm8` varchar(255) NOT NULL,
  `bidang_keahlian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_dosen_yang_bidangnya_diluar_ps`
--

CREATE TABLE `data_dosen_yang_bidangnya_diluar_ps` (
  `id_data_dosen_yang_bidangnya_diluar_ps` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_dosen_sdm4` varchar(255) NOT NULL,
  `nidn_sdm4` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_lampiran_sdm4` int(11) DEFAULT NULL,
  `gelar_sdm4` varchar(255) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `pendidikan_sdm4` varchar(255) NOT NULL,
  `bidang_keahlian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_dosen_yang_bidangnya_diluar_ps`
--

INSERT INTO `data_dosen_yang_bidangnya_diluar_ps` (`id_data_dosen_yang_bidangnya_diluar_ps`, `id_departemen`, `nama_dosen_sdm4`, `nidn_sdm4`, `tanggal_lahir`, `id_lampiran_sdm4`, `gelar_sdm4`, `id_jabatan`, `pendidikan_sdm4`, `bidang_keahlian`) VALUES
(11, 1, 'Irmansyah', '0016096808', '1968-09-16', 75, 'Ir, M.Si, Dr.', 4, 'S1:IPB, S2:UI, S3:IPB', 'S1: Mekanisasi Pertanian, S2: Fisika Material, S3: Instrumentasi Pertanian'),
(12, 1, 'Mersi Kurniati', '0017116805', '1968-11-17', 76, 'S.Si, M.Si, Dr', 4, 'S1:UI, S2:UI, S3:IPB', 'S1: Fisika, S2: Fisika, S3: Biomaterial'),
(21, 2, 'Irmansyah', '0016096808', '1968-09-16', 77, 'Ir, M.Si, Dr.', 4, 'S1:IPB, S2:UI, S3:IPB', 'S1: Mekanisasi Pertanian, S2: Fisika Material, S3: Instrumentasi Pertanian'),
(22, 2, 'Mersi Kurniati', '0017116805', '1968-11-17', 78, 'S.Si, M.Si, Dr', 4, 'S1:UI, S2:UI, S3:IPB', 'S1: Fisika, S2: Fisika, S3: Biomaterial'),
(31, 3, 'Irmansyah', '0016096808', '1968-09-16', 79, 'Ir, M.Si, Dr.', 4, 'S1:IPB, S2:UI, S3:IPB', 'S1: Mekanisasi Pertanian, S2: Fisika Material, S3: Instrumentasi Pertanian'),
(32, 3, 'Mersi Kurniati', '0017116805', '1968-11-17', 80, 'S.Si, M.Si, Dr', 4, 'S1:UI, S2:UI, S3:IPB', 'S1: Fisika, S2: Fisika, S3: Biomaterial'),
(41, 4, 'Irmansyah', '0016096808', '1968-09-16', 81, 'Ir, M.Si, Dr.', 4, 'S1:IPB, S2:UI, S3:IPB', 'S1: Mekanisasi Pertanian, S2: Fisika Material, S3: Instrumentasi Pertanian'),
(42, 4, 'Mersi Kurniati', '0017116805', '1968-11-17', 82, 'S.Si, M.Si, Dr', 4, 'S1:UI, S2:UI, S3:IPB', 'S1: Fisika, S2: Fisika, S3: Biomaterial'),
(51, 5, 'Irmansyah', '0016096808', '1968-09-16', 83, 'Ir, M.Si, Dr.', 4, 'S1:IPB, S2:UI, S3:IPB', 'S1: Mekanisasi Pertanian, S2: Fisika Material, S3: Instrumentasi Pertanian'),
(52, 5, 'Mersi Kurniati', '0017116805', '1968-11-17', 84, 'S.Si, M.Si, Dr', 4, 'S1:UI, S2:UI, S3:IPB', 'S1: Fisika, S2: Fisika, S3: Biomaterial'),
(61, 6, 'Irmansyah', '0016096808', '1968-09-16', 85, 'Ir, M.Si, Dr.', 4, 'S1:IPB, S2:UI, S3:IPB', 'S1: Mekanisasi Pertanian, S2: Fisika Material, S3: Instrumentasi Pertanian'),
(62, 6, 'Mersi Kurniati', '0017116805', '1968-11-17', 86, 'S.Si, M.Si, Dr', 4, 'S1:UI, S2:UI, S3:IPB', 'S1: Fisika, S2: Fisika, S3: Biomaterial'),
(71, 7, 'Irmansyah', '0016096808', '1968-09-16', 87, 'Ir, M.Si, Dr.', 4, 'S1:IPB, S2:UI, S3:IPB', 'S1: Mekanisasi Pertanian, S2: Fisika Material, S3: Instrumentasi Pertanian'),
(72, 7, 'Mersi Kurniati', '0017116805', '1968-11-17', 88, 'S.Si, M.Si, Dr', 4, 'S1:UI, S2:UI, S3:IPB', 'S1: Fisika, S2: Fisika, S3: Biomaterial'),
(81, 8, 'Irmansyah', '0016096808', '1968-09-16', 89, 'Ir, M.Si, Dr.', 4, 'S1:IPB, S2:UI, S3:IPB', 'S1: Mekanisasi Pertanian, S2: Fisika Material, S3: Instrumentasi Pertanian'),
(82, 8, 'Mersi Kurniati', '0017116805', '1968-11-17', 90, 'S.Si, M.Si, Dr', 4, 'S1:UI, S2:UI, S3:IPB', 'S1: Fisika, S2: Fisika, S3: Biomaterial');

-- --------------------------------------------------------

--
-- Table structure for table `data_dosen_yang_bidangnya_sesuai_ps`
--

CREATE TABLE `data_dosen_yang_bidangnya_sesuai_ps` (
  `id_data_dosen_yang_bidangnya_sesuai_ps` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_dosen_sdm3` varchar(255) NOT NULL,
  `nidn_sdm3` varchar(191) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_lampiran_sdm3` int(11) DEFAULT NULL,
  `gelar_sdm3` varchar(255) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `pendidikan_sdm3` varchar(255) NOT NULL,
  `bidang_keahlian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_dosen_yang_bidangnya_sesuai_ps`
--

INSERT INTO `data_dosen_yang_bidangnya_sesuai_ps` (`id_data_dosen_yang_bidangnya_sesuai_ps`, `id_departemen`, `nama_dosen_sdm3`, `nidn_sdm3`, `tanggal_lahir`, `id_lampiran_sdm3`, `gelar_sdm3`, `id_jabatan`, `pendidikan_sdm3`, `bidang_keahlian`) VALUES
(11, 1, 'Agus Buono', '0002076607', '1966-07-02', 83, 'Ir, M.Si, M.Kom, Dr', 4, 'S1: 1992/IPB, S2: 1997/IPB, S2: 2001/UI, S3:  2009/UI', 'Statistika, Ilmu Komputer'),
(12, 1, 'Imas Sukaesih Sitanggang', '0030017508', '1975-01-30', 84, 'S.Si, M.Kom, Dr', 4, 'S1: 1997/IPB, S2: 2002/UGM,  S3: 2013/Universiti Putra Malaya', 'Matematika, Ilmu Komputer'),
(21, 2, 'Agus Buono', '0002076607', '1966-07-02', 85, 'Ir, M.Si, M.Kom, Dr', 4, 'S1: 1992/IPB, S2: 1997/IPB, S2: 2001/UI, S3:  2009/UI', 'Statistika, Ilmu Komputer'),
(22, 2, 'Imas Sukaesih Sitanggang', '0030017508', '1975-01-30', 86, 'S.Si, M.Kom, Dr', 4, 'S1: 1997/IPB, S2: 2002/UGM,  S3: 2013/Universiti Putra Malaya', 'Matematika, Ilmu Komputer'),
(31, 3, 'Agus Buono', '0002076607', '1966-07-02', 87, 'Ir, M.Si, M.Kom, Dr', 4, 'S1: 1992/IPB, S2: 1997/IPB, S2: 2001/UI, S3:  2009/UI', 'Statistika, Ilmu Komputer'),
(32, 3, 'Imas Sukaesih Sitanggang', '0030017508', '1975-01-30', 88, 'S.Si, M.Kom, Dr', 4, 'S1: 1997/IPB, S2: 2002/UGM,  S3: 2013/Universiti Putra Malaya', 'Matematika, Ilmu Komputer'),
(41, 4, 'Agus Buono', '0002076607', '1966-07-02', 89, 'Ir, M.Si, M.Kom, Dr', 4, 'S1: 1992/IPB, S2: 1997/IPB, S2: 2001/UI, S3:  2009/UI', 'Statistika, Ilmu Komputer'),
(42, 4, 'Imas Sukaesih Sitanggang', '0030017508', '1975-01-30', 90, 'S.Si, M.Kom, Dr', 4, 'S1: 1997/IPB, S2: 2002/UGM,  S3: 2013/Universiti Putra Malaya', 'Matematika, Ilmu Komputer'),
(51, 5, 'Agus Buono', '0002076607', '1966-07-02', 91, 'Ir, M.Si, M.Kom, Dr', 4, 'S1: 1992/IPB, S2: 1997/IPB, S2: 2001/UI, S3:  2009/UI', 'Statistika, Ilmu Komputer'),
(52, 5, 'Imas Sukaesih Sitanggang', '0030017508', '1975-01-30', 92, 'S.Si, M.Kom, Dr', 4, 'S1: 1997/IPB, S2: 2002/UGM,  S3: 2013/Universiti Putra Malaya', 'Matematika, Ilmu Komputer'),
(61, 6, 'Agus Buono', '0002076607', '1966-07-02', 78, 'Ir, M.Si, M.Kom, Dr', 4, 'S1: 1992/IPB, S2: 1997/IPB, S2: 2001/UI, S3:  2009/UI', 'Statistika, Ilmu Komputer'),
(62, 6, 'Imas Sukaesih Sitanggang', '0030017508', '1975-01-30', 82, 'S.Si, M.Kom, Dr', 4, 'S1: 1997/IPB, S2: 2002/UGM,  S3: 2013/Universiti Putra Malaya', 'Matematika, Ilmu Komputer'),
(71, 7, 'Agus Buono', '0002076607', '1966-07-02', 93, 'Ir, M.Si, M.Kom, Dr', 4, 'S1: 1992/IPB, S2: 1997/IPB, S2: 2001/UI, S3:  2009/UI', 'Statistika, Ilmu Komputer'),
(72, 7, 'Imas Sukaesih Sitanggang', '0030017508', '1975-01-30', 94, 'S.Si, M.Kom, Dr', 4, 'S1: 1997/IPB, S2: 2002/UGM,  S3: 2013/Universiti Putra Malaya', 'Matematika, Ilmu Komputer'),
(81, 8, 'Agus Buono', '0002076607', '1966-07-02', 95, 'Ir, M.Si, M.Kom, Dr', 4, 'S1: 1992/IPB, S2: 1997/IPB, S2: 2001/UI, S3:  2009/UI', 'Statistika, Ilmu Komputer'),
(82, 8, 'Imas Sukaesih Sitanggang', '0030017508', '1975-01-30', 96, 'S.Si, M.Kom, Dr', 4, 'S1: 1997/IPB, S2: 2002/UGM,  S3: 2013/Universiti Putra Malaya', 'Matematika, Ilmu Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_dept` int(11) NOT NULL,
  `nama_departemen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_dept`, `nama_departemen`) VALUES
(1, 'Statistika'),
(2, 'Geofisika dan Meteorologi'),
(3, 'Biologi'),
(4, 'Kimia'),
(5, 'Matematika'),
(6, 'Ilmu Komputer'),
(7, 'Fisika'),
(8, 'Biokimia'),
(9, 'Aktuaria'),
(10, 'FMIPA');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_dalam`
--

CREATE TABLE `dokumen_dalam` (
  `id_dokumenD` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_kerjasamaDalam` int(11) NOT NULL,
  `dokumenD` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen_dalam`
--

INSERT INTO `dokumen_dalam` (`id_dokumenD`, `id_departemen`, `id_kerjasamaDalam`, `dokumenD`) VALUES
(1, 6, 7, 'Dokumen tentang jaminan mutu.docx'),
(2, 3, 20, 'Rekapitulasi Studi _ Sistem Informasi Akademik IPB.pdf'),
(3, 6, 21, 'RegisterAndPrintEntryCard.pdf'),
(4, 10, 25, 'RegisterAndPrintEntryCard.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_luar`
--

CREATE TABLE `dokumen_luar` (
  `id_dokumenL` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_kerjasamaLuar` int(11) NOT NULL,
  `dokumenL` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen_luar`
--

INSERT INTO `dokumen_luar` (`id_dokumenL`, `id_departemen`, `id_kerjasamaLuar`, `dokumenL`) VALUES
(1, 6, 2, 'pdf penelitian.docx');

-- --------------------------------------------------------

--
-- Table structure for table `hardware`
--

CREATE TABLE `hardware` (
  `id_hardware` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_hardware` varchar(150) NOT NULL,
  `spesifikasi` varchar(255) NOT NULL,
  `jumlah_item` int(11) NOT NULL,
  `keterangan_hw` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hardware`
--

INSERT INTO `hardware` (`id_hardware`, `id_departemen`, `nama_hardware`, `spesifikasi`, `jumlah_item`, `keterangan_hw`, `created_at`, `updated_at`) VALUES
(6, 1, 'PC Lab 2', 'Prosesor Intel pentium IV 2,2 GHz, Memori 512 MB, Harddisk 40 GB', 51, 'Dikelola oleh Departemen Komputer', '2018-07-30 08:10:30', '2018-07-30 01:10:30'),
(7, 6, 'PC Lab NCC', 'xxxxxxxx', 30, 'xxxxxxxxxxxxxx', '2018-07-30 20:06:31', '2018-07-30 20:06:31'),
(8, 10, 'Web Server', 'www.fmipa.ipb.ac.id Processor Xeon 3.0 GHz, Memori 1GB, DD 36.4GB Ultra320 SCSI. OS Linux', 1, '-', '2018-07-31 05:19:29', '2018-07-30 22:19:29'),
(9, 6, 'PC Lab 1', 'Komputer (HP Pavilion P6521i; Core-i5-650 (C) 3.2 GHz (73W); Memori 2 GB, HD 1GB)', 47, 'Dikelola oleh Departemen Ilmu Komputer', '2018-07-30 23:08:03', '2018-07-30 23:08:03'),
(10, 6, 'PC Lab 1', 'abc', 1, 'aaa', '2018-09-21 09:47:51', '2018-09-21 09:47:51'),
(11, 4, 'PC Lab 1', 'hh', 1, 'hh', '2018-10-01 20:15:53', '2018-10-01 20:15:53');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_pendidikan`
--

CREATE TABLE `hasil_pendidikan` (
  `id_hasilPendidikan` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_lampiran` int(11) DEFAULT NULL,
  `id_jenisHasilPendidikan` int(11) NOT NULL,
  `judul_hasilPendidikan` varchar(255) NOT NULL,
  `nama_dosen` text NOT NULL,
  `id_haki` int(11) NOT NULL,
  `tahun_hasil` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_pendidikan`
--

INSERT INTO `hasil_pendidikan` (`id_hasilPendidikan`, `id_departemen`, `id_lampiran`, `id_jenisHasilPendidikan`, `judul_hasilPendidikan`, `nama_dosen`, `id_haki`, `tahun_hasil`) VALUES
(16, 6, 10, 1, 'Peranti Lunak Penerjemah Tangis Bayi', 'Dr. Ir. Agus Buono, M.Si, M.Kom', 1, 2016),
(17, 6, NULL, 2, 'IoT', 'Dr. Sri Wahjuni, ST, MT', 2, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_penelitian`
--

CREATE TABLE `hasil_penelitian` (
  `id_hasilPenelitian` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `judul_hasilPenelitian` text NOT NULL,
  `nama_dosenPenelitian` text NOT NULL,
  `dipublikasi_pada` text NOT NULL,
  `tahun_publikasi` int(11) NOT NULL,
  `id_tingkat` int(11) NOT NULL,
  `id_lampiranPen1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_penelitian`
--

INSERT INTO `hasil_penelitian` (`id_hasilPenelitian`, `id_departemen`, `judul_hasilPenelitian`, `nama_dosenPenelitian`, `dipublikasi_pada`, `tahun_publikasi`, `id_tingkat`, `id_lampiranPen1`) VALUES
(3, 6, '2D-PCA for High Dimensional Reduction on Metagenome Classification', 'Toto Haryanto, Wisnu Ananta Kusuma, Aziz Kustiyo', 'Conference: International Symposium on Bioinformatics, Chemometrics and Metabolomics (ISBCM) 2016, Bogor', 2016, 3, 2),
(7, 1, 'A', 'A', 'A', 2016, 1, NULL),
(8, 6, 'Analisis Usabilitas Sistem Infromasi Manajemen Penerimaan Koleksi Deposit Di Perpusnas Berdasarkan Pendekatan Evaluasi Heuristik', 'Dr. Imas S. Sitanggang, S.Si, M.Kom', 'JPI-Jurnal Pustakawan Indonesia', 2016, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_peninjauan_kurikulum`
--

CREATE TABLE `hasil_peninjauan_kurikulum` (
  `id_hasil_peninjauan_kurikulum` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_mk_kurikulum9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mk_kurikulum9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_mk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_perubahan_pada_silabus` int(11) NOT NULL,
  `id_perubahan_pada_buku_ajar` int(11) NOT NULL,
  `alasan_peninjauan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `usulan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `berlaku` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil_peninjauan_kurikulum`
--

INSERT INTO `hasil_peninjauan_kurikulum` (`id_hasil_peninjauan_kurikulum`, `id_departemen`, `nama_mk_kurikulum9`, `kode_mk_kurikulum9`, `status_mk`, `id_perubahan_pada_silabus`, `id_perubahan_pada_buku_ajar`, `alasan_peninjauan`, `usulan`, `berlaku`, `created_at`, `updated_at`) VALUES
(11, 1, 'Kimia Umum', 'KIM100', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Kimia yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Kimia Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', NULL, '2018-10-03 18:26:37'),
(12, 1, 'Biologi Umum', 'BIO101', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Biologi yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Biologi Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', '2018-10-03 18:27:26', '2018-10-03 18:27:26'),
(21, 2, 'Kimia Umum', 'KIM100', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Kimia yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Kimia Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', NULL, '2018-10-03 18:26:37'),
(22, 2, 'Biologi Umum', 'BIO101', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Biologi yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Biologi Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', '2018-10-03 18:27:26', '2018-10-03 18:27:26'),
(31, 3, 'Kimia Umum', 'KIM100', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Kimia yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Kimia Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', NULL, '2018-10-03 18:26:37'),
(32, 3, 'Biologi Umum', 'BIO101', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Biologi yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Biologi Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', '2018-10-03 18:27:26', '2018-10-03 18:27:26'),
(41, 4, 'Kimia Umum', 'KIM100', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Kimia yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Kimia Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', NULL, '2018-10-03 18:26:37'),
(42, 4, 'Biologi Umum', 'BIO101', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Biologi yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Biologi Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', '2018-10-03 18:27:26', '2018-10-03 18:27:26'),
(51, 5, 'Kimia Umum', 'KIM100', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Kimia yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Kimia Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', NULL, '2018-10-03 18:26:37'),
(52, 5, 'Biologi Umum', 'BIO101', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Biologi yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Biologi Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', '2018-10-03 18:27:26', '2018-10-03 18:27:26'),
(61, 6, 'Kimia Umum', 'KIM100', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Kimia yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Kimia Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', NULL, '2018-10-03 18:26:37'),
(62, 6, 'Biologi Umum', 'BIO101', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Biologi yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Biologi Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', '2018-10-03 18:27:26', '2018-10-03 18:27:26'),
(71, 7, 'Kimia Umum', 'KIM100', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Kimia yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Kimia Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', NULL, '2018-10-03 18:26:37'),
(72, 7, 'Biologi Umum', 'BIO101', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Biologi yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Biologi Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', '2018-10-03 18:27:26', '2018-10-03 18:27:26'),
(81, 8, 'Kimia Umum', 'KIM100', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Kimia yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Kimia Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', NULL, '2018-10-03 18:26:37'),
(82, 8, 'Biologi Umum', 'BIO101', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Biologi yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Biologi Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', '2018-10-03 18:27:26', '2018-10-03 18:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `hologram_imovses`
--

CREATE TABLE `hologram_imovses` (
  `id_hologram` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `gambar_hologram` longblob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hologram_imovses`
--

INSERT INTO `hologram_imovses` (`id_hologram`, `id_departemen`, `gambar_hologram`, `created_at`, `updated_at`) VALUES
(5, 10, 0x537469636b657220486f6c6f6772616d20494d4f565345532e706e67, '2018-09-21 11:42:38', '2018-09-21 11:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `hubungan_kerjasama`
--

CREATE TABLE `hubungan_kerjasama` (
  `id_kerjasama` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_instansi` varchar(150) NOT NULL,
  `jenis_kegiatan` varchar(150) NOT NULL,
  `waktu_mulai` int(11) NOT NULL,
  `waktu_berakhir` int(11) NOT NULL,
  `manfaat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_akademik`
--

CREATE TABLE `jabatan_akademik` (
  `id_jabatan_akademik` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan_akademik`
--

INSERT INTO `jabatan_akademik` (`id_jabatan_akademik`, `jabatan`) VALUES
(1, 'DOSEN PNS/CPNS***'),
(2, 'ASISTEN AHLI***'),
(3, 'LEKTOR***'),
(4, 'LEKTOR KEPALA***'),
(5, 'GURU BESAR/PROFESOR***'),
(6, 'DOSEN PNS/CPNS'),
(7, 'ASISTEN AHLI'),
(8, 'LEKTOR'),
(9, 'LEKTOR KEPALA'),
(10, 'GURU BESAR/PROFESOR');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_sdm3`
--

CREATE TABLE `jabatan_sdm3` (
  `id_jabatan_sdm3` int(11) NOT NULL,
  `jabatann_sdm3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan_sdm3`
--

INSERT INTO `jabatan_sdm3` (`id_jabatan_sdm3`, `jabatann_sdm3`) VALUES
(1, 'DOSEN PNS/CPNS***'),
(2, 'ASISTEN AHLI***'),
(3, 'LEKTOR***'),
(4, 'LEKTOR KEPALA***'),
(5, 'GURU BESAR/PROFESOR***'),
(6, 'DOSEN PNS/CPNS'),
(7, 'ASISTEN AHLI'),
(8, 'LEKTOR'),
(9, 'LEKTOR KEPALA'),
(10, 'GURU BESAR/PROFESOR');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_sdm4`
--

CREATE TABLE `jabatan_sdm4` (
  `id_jabatan_sdm4` int(11) NOT NULL,
  `jabatann_sdm4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan_sdm4`
--

INSERT INTO `jabatan_sdm4` (`id_jabatan_sdm4`, `jabatann_sdm4`) VALUES
(1, 'DOSEN PNS/CPNS***'),
(2, 'ASISTEN AHLI***'),
(3, 'LEKTOR***'),
(4, 'LEKTOR KEPALA***'),
(5, 'GURU BESAR/PROFESOR***'),
(6, 'DOSEN PNS/CPNS'),
(7, 'ASISTEN AHLI'),
(8, 'LEKTOR'),
(9, 'LEKTOR KEPALA'),
(10, 'GURU BESAR/PROFESOR');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_sdm8`
--

CREATE TABLE `jabatan_sdm8` (
  `id_jabatan_sdm8` int(11) NOT NULL,
  `jabatann_sdm8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan_sdm8`
--

INSERT INTO `jabatan_sdm8` (`id_jabatan_sdm8`, `jabatann_sdm8`) VALUES
(1, 'DOSEN PNS/CPNS***'),
(2, 'ASISTEN AHLI***'),
(3, 'LEKTOR***'),
(4, 'LEKTOR KEPALA***'),
(5, 'GURU BESAR/PROFESOR***'),
(6, 'DOSEN PNS/CPNS'),
(7, 'ASISTEN AHLI'),
(8, 'LEKTOR'),
(9, 'LEKTOR KEPALA'),
(10, 'GURU BESAR/PROFESOR');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_akses_data`
--

CREATE TABLE `jenis_akses_data` (
  `id_jenis_akses` int(11) NOT NULL,
  `jenis_data_akses` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_akses_data`
--

INSERT INTO `jenis_akses_data` (`id_jenis_akses`, `jenis_data_akses`) VALUES
(1, 'Mahasiswa'),
(2, 'Kartu Rencana Studi'),
(3, 'Jadwal Mata Kuliah'),
(4, 'Nilai mata kuliah'),
(5, 'Transkrip akademik'),
(6, 'Lulusan'),
(7, 'Dosen'),
(8, 'Pegawai'),
(9, 'Keuangan'),
(10, 'Investasi'),
(11, 'Pembayaran SPP'),
(12, 'Perpustakaan');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_danaa`
--

CREATE TABLE `jenis_danaa` (
  `id_jenis_danaa` int(11) NOT NULL,
  `jenis_dana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_danaa`
--

INSERT INTO `jenis_danaa` (`id_jenis_danaa`, `jenis_dana`) VALUES
(1, 'Dana Masyarakat (SPP Mahasiswa S1)'),
(2, 'Penelitian'),
(3, 'Kerjasama'),
(4, 'Gaji Rutin'),
(5, 'Pengabdian Masyarakat'),
(6, 'PKM'),
(7, 'BPPTN'),
(8, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_hasilpendidikan`
--

CREATE TABLE `jenis_hasilpendidikan` (
  `id_jenisHasil` int(11) NOT NULL,
  `jenis_hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_hasilpendidikan`
--

INSERT INTO `jenis_hasilpendidikan` (`id_jenisHasil`, `jenis_hasil`) VALUES
(1, 'Buku teks'),
(2, 'Buku ajar'),
(3, 'Media pembelajaran'),
(4, 'Alat Bantu Ajar'),
(5, 'Dll...');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_jurnal_prosiding_seminar`
--

CREATE TABLE `jenis_jurnal_prosiding_seminar` (
  `id_j_p_seminar` int(11) NOT NULL,
  `jenis_jp_seminar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_jurnal_prosiding_seminar`
--

INSERT INTO `jenis_jurnal_prosiding_seminar` (`id_j_p_seminar`, `jenis_jp_seminar`) VALUES
(1, 'Jurnal Terakreditasi DIKTI'),
(2, 'Jurnal Internasional'),
(3, 'Jurnal Nasional');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_mahasiswa`
--

CREATE TABLE `jenis_mahasiswa` (
  `id_jenis_mahasiswa` int(11) NOT NULL,
  `jenis_mahasiswa` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_mahasiswa`
--

INSERT INTO `jenis_mahasiswa` (`id_jenis_mahasiswa`, `jenis_mahasiswa`) VALUES
(1, 'Mahasiswa Baru Bukan Transfer'),
(2, 'Mahasiswa Baru Transfer'),
(3, 'Total Mahasiswa regular/non-reguler (Student Body)');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_penggunaan_dana`
--

CREATE TABLE `jenis_penggunaan_dana` (
  `id_jenis_penggunaan_dana` int(11) NOT NULL,
  `jenis_penggunaan_dana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_penggunaan_dana`
--

INSERT INTO `jenis_penggunaan_dana` (`id_jenis_penggunaan_dana`, `jenis_penggunaan_dana`) VALUES
(1, 'Pendidikan'),
(2, 'Penelitian'),
(3, 'Pengabdian kepada Masyarakat'),
(4, 'Investasi Prasarana'),
(5, 'Investasi Sarana'),
(6, 'Investasi SDM'),
(7, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pustaka_ruang_baca_dept`
--

CREATE TABLE `jenis_pustaka_ruang_baca_dept` (
  `id_jenis_pustaka_` int(11) NOT NULL,
  `jenis_pustaka` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pustaka_ruang_baca_dept`
--

INSERT INTO `jenis_pustaka_ruang_baca_dept` (`id_jenis_pustaka_`, `jenis_pustaka`) VALUES
(1, 'Buku Teks'),
(2, 'Jurnal Nasional yang Terakreditasi DIKTI'),
(3, 'Jurnal Internasional'),
(4, 'Prosiding'),
(5, 'Skripsi'),
(6, 'Tesis'),
(7, 'Disertasi'),
(8, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `jumlahs`
--

CREATE TABLE `jumlahs` (
  `id_jumlah` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `mbt_reguler` int(11) DEFAULT NULL,
  `mt_reguler` int(11) DEFAULT NULL,
  `total_reguler` int(11) NOT NULL,
  `mbt_nonreguler` int(11) NOT NULL,
  `mt_nonreguler` int(11) NOT NULL,
  `total_nonreguler` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `daya_tampung` int(25) NOT NULL,
  `ikut_seleksi` int(25) NOT NULL,
  `lulus_seleksi` int(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlahs`
--

INSERT INTO `jumlahs` (`id_jumlah`, `id_departemen`, `mbt_reguler`, `mt_reguler`, `total_reguler`, `mbt_nonreguler`, `mt_nonreguler`, `total_nonreguler`, `tahun`, `daya_tampung`, `ikut_seleksi`, `lulus_seleksi`, `created_at`, `updated_at`) VALUES
(9, 1, 2, 2, 22, 0, 0, 0, 2018, 0, 0, 0, '2018-03-11 06:38:46', '2018-04-02 07:07:32'),
(10, 1, 1, 1, 23, 0, 0, 0, 2012, 0, 0, 0, '2018-03-11 06:42:08', '2018-03-11 06:42:08'),
(13, 2, 1, 2, 33, 0, 0, 0, 2014, 0, 0, 0, '2018-03-11 09:31:14', '2018-03-11 09:31:14'),
(14, 2, 1, 1, 45, 0, 0, 0, 2015, 0, 0, 0, '2018-03-11 10:24:54', '2018-03-11 10:24:54'),
(22, 1, 2, 2, 200, 0, 0, 0, 2016, 0, 0, 0, NULL, '2018-03-29 19:21:22'),
(23, 2, 9, 9, 9, 9, 9, 9, 2016, 0, 0, 0, '2018-03-28 03:50:59', '2018-03-28 03:50:59'),
(27, 2, 34, 0, 125, 0, 0, 0, 2017, 0, 0, 0, NULL, NULL),
(30, 2, 8, 8, 8, 8, 8, 8, 2020, 0, 0, 0, NULL, NULL),
(31, 1, 80, 80, 80, 0, 0, 0, 2017, 0, 0, 0, '2018-03-29 18:51:46', '2018-03-29 18:51:46'),
(33, 2, 7, 7, 7, 7, 7, 7, 2018, 0, 0, 0, '2018-04-01 23:25:13', '2018-04-01 23:25:13'),
(107, 6, 1, 0, 20, 0, 0, 0, 2015, 0, 0, 0, '2018-04-05 20:24:41', '2018-04-05 20:30:41'),
(112, 6, 89, 89, 0, 89, 89, 89, 2014, 100, 90, 90, '2018-04-08 02:52:53', '2018-04-08 02:52:53'),
(113, 6, 80, 0, 321, 0, 0, 0, 2016, 90, 90, 100, '2018-04-09 00:03:48', '2018-04-09 00:03:48'),
(115, 6, 9, 9, 9, 9, 9, 9, 2017, 99, 9, 9, '2018-04-23 09:07:57', '2018-04-23 09:07:57'),
(117, 6, 23, 5, 60, 0, 0, 0, 2013, 134, 140, 125, NULL, NULL),
(118, 6, 45, 0, 789, 0, 0, 0, 2018, 155, 140, 130, NULL, NULL),
(119, 8, 90, 0, 120, 0, 0, 0, 2016, 90, 90, 90, '2018-04-29 23:31:07', '2018-04-29 23:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_kelas`
--

CREATE TABLE `jumlah_kelas` (
  `id_jumlah_kelas` int(11) NOT NULL,
  `jlh_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jumlah_kelas`
--

INSERT INTO `jumlah_kelas` (`id_jumlah_kelas`, `jlh_kelas`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5');

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_sks_ps`
--

CREATE TABLE `jumlah_sks_ps` (
  `id_jumlah_sks_ps` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `sks_wajib_universitas` int(11) NOT NULL,
  `sks_wajib_fakultas` int(11) NOT NULL,
  `sks_wajib_mayor` int(11) NOT NULL,
  `sks_minor` int(11) NOT NULL,
  `keterangan_wajib_universitas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_wajib_fakultas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_wajib_mayor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_minor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumlah_sks_ps`
--

INSERT INTO `jumlah_sks_ps` (`id_jumlah_sks_ps`, `id_departemen`, `sks_wajib_universitas`, `sks_wajib_fakultas`, `sks_wajib_mayor`, `sks_minor`, `keterangan_wajib_universitas`, `keterangan_wajib_fakultas`, `keterangan_wajib_mayor`, `keterangan_minor`, `created_at`, `updated_at`) VALUES
(1, 1, 35, 12, 85, 15, 'Dilaksanakan di tahun pertama dan dikelola oleh Direktorat Program Pendidikan Kompetensi Umum (PPKU)', 'Memberikan bekal kemampuan analisis kuantitatif', 'Mayor ilmu komputer mempunyai beban sebesar 85 SKS', 'Ada 45 set pilihan minor di IPB, 11 Minor di Fakultas MIPA.Supporting course dapat diambil dari semua mata kuliah yang ditawarkan oleh prodi yang ada di IPB termasuk mata kuliah yang ditawarkan PSIK yang di luar mata kuliah mayor.', NULL, '2018-10-03 15:01:36'),
(2, 2, 35, 12, 85, 15, 'Dilaksanakan di tahun pertama dan dikelola oleh Direktorat Program Pendidikan Kompetensi Umum (PPKU)', 'Memberikan bekal kemampuan analisis kuantitatif', 'Mayor ilmu komputer mempunyai beban sebesar 85 SKS', 'Ada 45 set pilihan minor di IPB, 11 Minor di Fakultas MIPA.Supporting course dapat diambil dari semua mata kuliah yang ditawarkan oleh prodi yang ada di IPB termasuk mata kuliah yang ditawarkan PSIK yang di luar mata kuliah mayor.', NULL, '2018-10-03 15:01:36'),
(3, 3, 35, 12, 85, 15, 'Dilaksanakan di tahun pertama dan dikelola oleh Direktorat Program Pendidikan Kompetensi Umum (PPKU)', 'Memberikan bekal kemampuan analisis kuantitatif', 'Mayor ilmu komputer mempunyai beban sebesar 85 SKS', 'Ada 45 set pilihan minor di IPB, 11 Minor di Fakultas MIPA.Supporting course dapat diambil dari semua mata kuliah yang ditawarkan oleh prodi yang ada di IPB termasuk mata kuliah yang ditawarkan PSIK yang di luar mata kuliah mayor.', NULL, '2018-10-03 15:01:36'),
(4, 4, 35, 12, 85, 15, 'Dilaksanakan di tahun pertama dan dikelola oleh Direktorat Program Pendidikan Kompetensi Umum (PPKU)', 'Memberikan bekal kemampuan analisis kuantitatif', 'Mayor ilmu komputer mempunyai beban sebesar 85 SKS', 'Ada 45 set pilihan minor di IPB, 11 Minor di Fakultas MIPA.Supporting course dapat diambil dari semua mata kuliah yang ditawarkan oleh prodi yang ada di IPB termasuk mata kuliah yang ditawarkan PSIK yang di luar mata kuliah mayor.', NULL, '2018-10-03 15:01:36'),
(5, 5, 35, 12, 85, 15, 'Dilaksanakan di tahun pertama dan dikelola oleh Direktorat Program Pendidikan Kompetensi Umum (PPKU)', 'Memberikan bekal kemampuan analisis kuantitatif', 'Mayor ilmu komputer mempunyai beban sebesar 85 SKS', 'Ada 45 set pilihan minor di IPB, 11 Minor di Fakultas MIPA.Supporting course dapat diambil dari semua mata kuliah yang ditawarkan oleh prodi yang ada di IPB termasuk mata kuliah yang ditawarkan PSIK yang di luar mata kuliah mayor.', NULL, '2018-10-03 15:01:36'),
(6, 6, 35, 12, 85, 15, 'Dilaksanakan di tahun pertama dan dikelola oleh Direktorat Program Pendidikan Kompetensi Umum (PPKU)', 'Memberikan bekal kemampuan analisis kuantitatif', 'Mayor ilmu komputer mempunyai beban sebesar 85 SKS', 'Ada 45 set pilihan minor di IPB, 11 Minor di Fakultas MIPA.Supporting course dapat diambil dari semua mata kuliah yang ditawarkan oleh prodi yang ada di IPB termasuk mata kuliah yang ditawarkan PSIK yang di luar mata kuliah mayor.', NULL, '2018-12-20 03:53:14'),
(7, 7, 35, 12, 85, 15, 'Dilaksanakan di tahun pertama dan dikelola oleh Direktorat Program Pendidikan Kompetensi Umum (PPKU)', 'Memberikan bekal kemampuan analisis kuantitatif', 'Mayor ilmu komputer mempunyai beban sebesar 85 SKS', 'Ada 45 set pilihan minor di IPB, 11 Minor di Fakultas MIPA.Supporting course dapat diambil dari semua mata kuliah yang ditawarkan oleh prodi yang ada di IPB termasuk mata kuliah yang ditawarkan PSIK yang di luar mata kuliah mayor.', NULL, '2018-10-03 15:01:36'),
(8, 8, 35, 12, 85, 15, 'Dilaksanakan di tahun pertama dan dikelola oleh Direktorat Program Pendidikan Kompetensi Umum (PPKU)', 'Memberikan bekal kemampuan analisis kuantitatif', 'Mayor ilmu komputer mempunyai beban sebesar 85 SKS', 'Ada 45 set pilihan minor di IPB, 11 Minor di Fakultas MIPA.Supporting course dapat diambil dari semua mata kuliah yang ditawarkan oleh prodi yang ada di IPB termasuk mata kuliah yang ditawarkan PSIK yang di luar mata kuliah mayor.', NULL, '2018-10-03 15:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_prosiding_seminar`
--

CREATE TABLE `jurnal_prosiding_seminar` (
  `id_jp_seminar` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_jenis_jp` int(11) NOT NULL,
  `nama_jurnal` varchar(255) DEFAULT NULL,
  `rinci_no` varchar(255) NOT NULL,
  `rinci_tahun` year(4) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal_prosiding_seminar`
--

INSERT INTO `jurnal_prosiding_seminar` (`id_jp_seminar`, `id_departemen`, `id_jenis_jp`, `nama_jurnal`, `rinci_no`, `rinci_tahun`, `penerbit`, `jumlah`, `created_at`, `updated_at`) VALUES
(5, 6, 1, 'a', 'am', 2018, 'xxx', 2, '2018-10-02 16:46:27', '2018-10-02 09:46:27'),
(7, 6, 2, 'IEE/ACM Transactions on Computational and Bioiformatics', 'Vol 10 no 1', 2016, 'ABC', 1, '2018-10-17 19:28:20', '2018-10-17 12:28:20'),
(8, 1, 2, 'JORR', '230', 2016, '', 5, '2018-09-26 06:43:05', '2018-09-25 23:43:05'),
(9, 4, 1, 'jurnal ilmu manajemen', 'no. 1, vol 3', 2018, 'xxx', 3, '2018-12-25 17:58:24', '2018-10-01 20:06:45'),
(10, 6, 1, 'a', 'am1', 2018, 'xxx', 1, '2018-12-25 07:23:06', '2018-12-25 07:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_sistem_informasi`
--

CREATE TABLE `kategori_sistem_informasi` (
  `id_kategori` int(10) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_sistem_informasi`
--

INSERT INTO `kategori_sistem_informasi` (`id_kategori`, `kategori`) VALUES
(1, 'Informasi Umum'),
(2, 'Kemahasiswaan'),
(3, 'Akademik'),
(4, 'Administrasi'),
(5, 'Perpustakaan'),
(6, 'Penelitian dan Pengabdian pada Masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id_departemen`, `nama_kegiatan`, `penyelenggara`, `tahun_kegiatan`, `created_at`, `updated_at`) VALUES
(3, 6, 'Pesta Sains Nasional (setiap tahun sejak tahun 2004)', 'FMIPA', '2018', '2018-04-02 10:32:20', '2018-04-02 10:32:20'),
(16, 6, 'cpsc', 'ilkom', '2018', '2018-04-05 20:56:21', '2018-04-05 20:56:21'),
(19, 2, 'Pembinaan Tim Kontes Robot Indonesia', 'GFM', '2016', NULL, '2018-04-25 08:10:23'),
(20, 6, 'robotik', 'ilmu komputer', '2018', '2018-04-25 18:59:06', '2018-04-25 18:59:06'),
(21, 6, 'Pembinaan Tim Kontes Robot Indonesia', 'Ilmu Kmputer', '2016', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_dosen`
--

CREATE TABLE `kegiatan_dosen` (
  `id_kegiatan_dosen` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm12` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kegiatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_kegiatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_kegiatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_status_peran_kegiatan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan_dosen`
--

INSERT INTO `kegiatan_dosen` (`id_kegiatan_dosen`, `id_departemen`, `nama_sdm12`, `jenis_kegiatan`, `tempat_kegiatan`, `waktu_kegiatan`, `id_status_peran_kegiatan`, `created_at`, `updated_at`) VALUES
(11, 1, 'Ir. Meuthia Rachmaniah M.Sc', 'APEC Women in STEM: A Framework for Dialogue, Learning, and Action. US-APEC Technical Assistance to Advance Regional Integration (US-ATAARI).', 'Lima Peru', '2016', 2, '2018-09-14 15:59:39', '2018-10-02 15:33:42'),
(12, 1, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Seminar dan Workshop Nasional Bidang Informatika dengan tema \"Penerapan Bio-Informatika sebagai Usaha Pengambangan Pembelajaran Berbasis ICT\" FKIP Universitas Syiah Kuala - Institut Pertanian Bogor', 'Unsyiah, Aceh', '20 Oktober 2013', 1, '2018-10-02 15:34:58', '2018-10-03 16:19:21'),
(21, 2, 'Ir. Meuthia Rachmaniah M.Sc', 'APEC Women in STEM: A Framework for Dialogue, Learning, and Action. US-APEC Technical Assistance to Advance Regional Integration (US-ATAARI).', 'Lima Peru', '2016', 2, '2018-09-14 15:59:39', '2018-10-02 15:33:42'),
(22, 2, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Seminar dan Workshop Nasional Bidang Informatika dengan tema \"Penerapan Bio-Informatika sebagai Usaha Pengambangan Pembelajaran Berbasis ICT\" FKIP Universitas Syiah Kuala - Institut Pertanian Bogor', 'Unsyiah, Aceh', '20 Oktober 2013', 1, '2018-10-02 15:34:58', '2018-10-03 16:19:21'),
(31, 3, 'Ir. Meuthia Rachmaniah M.Sc', 'APEC Women in STEM: A Framework for Dialogue, Learning, and Action. US-APEC Technical Assistance to Advance Regional Integration (US-ATAARI).', 'Lima Peru', '2016', 2, '2018-09-14 15:59:39', '2018-10-02 15:33:42'),
(32, 3, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Seminar dan Workshop Nasional Bidang Informatika dengan tema \"Penerapan Bio-Informatika sebagai Usaha Pengambangan Pembelajaran Berbasis ICT\" FKIP Universitas Syiah Kuala - Institut Pertanian Bogor', 'Unsyiah, Aceh', '20 Oktober 2013', 1, '2018-10-02 15:34:58', '2018-10-03 16:19:21'),
(41, 4, 'Ir. Meuthia Rachmaniah M.Sc', 'APEC Women in STEM: A Framework for Dialogue, Learning, and Action. US-APEC Technical Assistance to Advance Regional Integration (US-ATAARI).', 'Lima Peru', '2016', 2, '2018-09-14 15:59:39', '2018-10-02 15:33:42'),
(42, 4, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Seminar dan Workshop Nasional Bidang Informatika dengan tema \"Penerapan Bio-Informatika sebagai Usaha Pengambangan Pembelajaran Berbasis ICT\" FKIP Universitas Syiah Kuala - Institut Pertanian Bogor', 'Unsyiah, Aceh', '20 Oktober 2013', 1, '2018-10-02 15:34:58', '2018-10-03 16:19:21'),
(51, 5, 'Ir. Meuthia Rachmaniah M.Sc', 'APEC Women in STEM: A Framework for Dialogue, Learning, and Action. US-APEC Technical Assistance to Advance Regional Integration (US-ATAARI).', 'Lima Peru', '2016', 2, '2018-09-14 15:59:39', '2018-10-02 15:33:42'),
(52, 5, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Seminar dan Workshop Nasional Bidang Informatika dengan tema \"Penerapan Bio-Informatika sebagai Usaha Pengambangan Pembelajaran Berbasis ICT\" FKIP Universitas Syiah Kuala - Institut Pertanian Bogor', 'Unsyiah, Aceh', '20 Oktober 2013', 1, '2018-10-02 15:34:58', '2018-10-03 16:19:21'),
(61, 6, 'Ir. Meuthia Rachmaniah M.Sc', 'APEC Women in STEM: A Framework for Dialogue, Learning, and Action. US-APEC Technical Assistance to Advance Regional Integration (US-ATAARI).', 'Lima Peru', '2016', 2, '2018-09-14 15:59:39', '2018-10-02 15:33:42'),
(62, 6, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Seminar dan Workshop Nasional Bidang Informatika dengan tema \"Penerapan Bio-Informatika sebagai Usaha Pengambangan Pembelajaran Berbasis ICT\" FKIP Universitas Syiah Kuala - Institut Pertanian Bogor', 'Unsyiah, Aceh', '20 Oktober 2013', 1, '2018-10-02 15:34:58', '2018-12-04 00:19:41'),
(71, 7, 'Ir. Meuthia Rachmaniah M.Sc', 'APEC Women in STEM: A Framework for Dialogue, Learning, and Action. US-APEC Technical Assistance to Advance Regional Integration (US-ATAARI).', 'Lima Peru', '2016', 2, '2018-09-14 15:59:39', '2018-10-02 15:33:42'),
(72, 7, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Seminar dan Workshop Nasional Bidang Informatika dengan tema \"Penerapan Bio-Informatika sebagai Usaha Pengambangan Pembelajaran Berbasis ICT\" FKIP Universitas Syiah Kuala - Institut Pertanian Bogor', 'Unsyiah, Aceh', '20 Oktober 2013', 1, '2018-10-02 15:34:58', '2018-10-03 16:19:21'),
(81, 8, 'Ir. Meuthia Rachmaniah M.Sc', 'APEC Women in STEM: A Framework for Dialogue, Learning, and Action. US-APEC Technical Assistance to Advance Regional Integration (US-ATAARI).', 'Lima Peru', '2016', 2, '2018-09-14 15:59:39', '2018-10-02 15:33:42'),
(82, 8, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Seminar dan Workshop Nasional Bidang Informatika dengan tema \"Penerapan Bio-Informatika sebagai Usaha Pengambangan Pembelajaran Berbasis ICT\" FKIP Universitas Syiah Kuala - Institut Pertanian Bogor', 'Unsyiah, Aceh', '20 Oktober 2013', 1, '2018-10-02 15:34:58', '2018-10-03 16:19:21'),
(83, 6, '1', '1', '1', '1', 1, '2018-12-20 03:44:32', '2018-12-20 03:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_tenaga_ahli`
--

CREATE TABLE `kegiatan_tenaga_ahli` (
  `id_kegiatan_tenaga_ahli` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_tenaga_ahli` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kegiatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_pelaksanaan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan_tenaga_ahli`
--

INSERT INTO `kegiatan_tenaga_ahli` (`id_kegiatan_tenaga_ahli`, `id_departemen`, `nama_tenaga_ahli`, `nama_kegiatan`, `waktu_pelaksanaan`, `created_at`, `updated_at`) VALUES
(11, 1, 'Dr. Emmanuel Paradis', 'Mini Conference dengan topik : \"R and its applications\"', '2013-06-05', '2018-09-25 08:11:49', '2018-09-25 08:11:49'),
(12, 1, 'Irwin Suhendra, S.S (English First)', 'Peningkatan Kompetensi Bahasa Inggris bagi dosen', '2013-06-10', '2018-09-25 08:12:39', '2018-09-25 08:12:39'),
(21, 2, 'Dr. Emmanuel Paradis', 'Mini Conference dengan topik : \"R and its applications\"', '2013-06-05', '2018-09-25 08:11:49', '2018-09-25 08:11:49'),
(22, 2, 'Irwin Suhendra, S.S (English First)', 'Peningkatan Kompetensi Bahasa Inggris bagi dosen', '2013-06-10', '2018-09-25 08:12:39', '2018-09-25 08:12:39'),
(31, 3, 'Dr. Emmanuel Paradis', 'Mini Conference dengan topik : \"R and its applications\"', '2013-06-05', '2018-09-25 08:11:49', '2018-09-25 08:11:49'),
(32, 3, 'Irwin Suhendra, S.S (English First)', 'Peningkatan Kompetensi Bahasa Inggris bagi dosen', '2013-06-10', '2018-09-25 08:12:39', '2018-09-25 08:12:39'),
(41, 4, 'Dr. Emmanuel Paradis', 'Mini Conference dengan topik : \"R and its applications\"', '2013-06-05', '2018-09-25 08:11:49', '2018-09-25 08:11:49'),
(42, 4, 'Irwin Suhendra, S.S (English First)', 'Peningkatan Kompetensi Bahasa Inggris bagi dosen', '2013-06-10', '2018-09-25 08:12:39', '2018-09-25 08:12:39'),
(51, 5, 'Dr. Emmanuel Paradis', 'Mini Conference dengan topik : \"R and its applications\"', '2013-06-05', '2018-09-25 08:11:49', '2018-09-25 08:11:49'),
(52, 5, 'Irwin Suhendra, S.S (English First)', 'Peningkatan Kompetensi Bahasa Inggris bagi dosen', '2013-06-10', '2018-09-25 08:12:39', '2018-09-25 08:12:39'),
(61, 6, 'Dr. Emmanuel Paradis', 'Mini Conference dengan topik : \"R and its applications\"', '2013-06-05', '2018-09-25 08:11:49', '2018-11-29 18:07:43'),
(62, 6, 'Irwin Suhendra, S.S (English First)', 'Peningkatan Kompetensi Bahasa Inggris bagi dosen', '2013-06-10', '2018-09-25 08:12:39', '2018-09-25 08:12:39'),
(71, 7, 'Dr. Emmanuel Paradis', 'Mini Conference dengan topik : \"R and its applications\"', '2013-06-05', '2018-09-25 08:11:49', '2018-09-25 08:11:49'),
(72, 7, 'Irwin Suhendra, S.S (English First)', 'Peningkatan Kompetensi Bahasa Inggris bagi dosen', '2013-06-10', '2018-09-25 08:12:39', '2018-09-25 08:12:39'),
(81, 8, 'Dr. Emmanuel Paradis', 'Mini Conference dengan topik : \"R and its applications\"', '2013-06-05', '2018-09-25 08:11:49', '2018-09-25 08:11:49'),
(82, 8, 'Irwin Suhendra, S.S (English First)', 'Peningkatan Kompetensi Bahasa Inggris bagi dosen', '2013-06-10', '2018-09-25 08:12:39', '2018-09-25 08:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `keikutsertaan_organisasi`
--

CREATE TABLE `keikutsertaan_organisasi` (
  `id_keikutsertaan_organisasi` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm14` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_organisasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kurun_waktu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tingkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keikutsertaan_organisasi`
--

INSERT INTO `keikutsertaan_organisasi` (`id_keikutsertaan_organisasi`, `id_departemen`, `nama_sdm14`, `nama_organisasi`, `kurun_waktu`, `id_tingkat`, `created_at`, `updated_at`) VALUES
(11, 1, 'Ir. Meuthia Rachmaniah M.Sc', 'MIPANet', '2016-sekarang', '2', '2018-09-25 09:43:20', '2018-10-03 13:41:34'),
(12, 1, 'YantoIr. Julio Adisantoso, MKom', 'Tim Olimpiade Komputer Indonesia', '2014-sekarang', '2', '2018-09-25 09:43:57', '2018-10-03 13:42:16'),
(21, 2, 'Ir. Meuthia Rachmaniah M.Sc', 'MIPANet', '2016-sekarang', '2', '2018-09-25 09:43:20', '2018-10-03 13:41:34'),
(22, 2, 'YantoIr. Julio Adisantoso, MKom', 'Tim Olimpiade Komputer Indonesia', '2014-sekarang', '2', '2018-09-25 09:43:57', '2018-10-03 13:42:16'),
(31, 3, 'Ir. Meuthia Rachmaniah M.Sc', 'MIPANet', '2016-sekarang', '2', '2018-09-25 09:43:20', '2018-10-03 13:41:34'),
(32, 3, 'YantoIr. Julio Adisantoso, MKom', 'Tim Olimpiade Komputer Indonesia', '2014-sekarang', '2', '2018-09-25 09:43:57', '2018-10-03 13:42:16'),
(41, 4, 'Ir. Meuthia Rachmaniah M.Sc', 'MIPANet', '2016-sekarang', '2', '2018-09-25 09:43:20', '2018-10-03 13:41:34'),
(42, 4, 'YantoIr. Julio Adisantoso, MKom', 'Tim Olimpiade Komputer Indonesia', '2014-sekarang', '2', '2018-09-25 09:43:57', '2018-10-03 13:42:16'),
(51, 5, 'Ir. Meuthia Rachmaniah M.Sc', 'MIPANet', '2016-sekarang', '2', '2018-09-25 09:43:20', '2018-10-03 13:41:34'),
(52, 5, 'YantoIr. Julio Adisantoso, MKom', 'Tim Olimpiade Komputer Indonesia', '2014-sekarang', '2', '2018-09-25 09:43:57', '2018-10-03 13:42:16'),
(61, 6, 'Ir. Meuthia Rachmaniah M.Sc', 'MIPANet', '2016-sekarang', '2', '2018-09-25 09:43:20', '2018-10-03 13:41:34'),
(62, 6, 'YantoIr. Julio Adisantoso, MKom', 'Tim Olimpiade Komputer Indonesia', '2014-sekarang', '2', '2018-09-25 09:43:57', '2018-10-03 13:42:16'),
(71, 7, 'Ir. Meuthia Rachmaniah M.Sc', 'MIPANet', '2016-sekarang', '2', '2018-09-25 09:43:20', '2018-10-03 13:41:34'),
(72, 7, 'YantoIr. Julio Adisantoso, MKom', 'Tim Olimpiade Komputer Indonesia', '2014-sekarang', '2', '2018-09-25 09:43:57', '2018-10-03 13:42:16'),
(81, 8, 'Ir. Meuthia Rachmaniah M.Sc', 'MIPANet', '2016-sekarang', '2', '2018-09-25 09:43:20', '2018-10-03 13:41:34'),
(82, 8, 'YantoIr. Julio Adisantoso, MKom', 'Tim Olimpiade Komputer Indonesia', '2014-sekarang', '2', '2018-09-25 09:43:57', '2018-10-03 13:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `kelengkapan_deskripsi`
--

CREATE TABLE `kelengkapan_deskripsi` (
  `id_kelengkapan_deskripsi` int(11) NOT NULL,
  `kelengkapandeskripsi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelengkapan_deskripsi`
--

INSERT INTO `kelengkapan_deskripsi` (`id_kelengkapan_deskripsi`, `kelengkapandeskripsi`) VALUES
(1, 'Ya'),
(2, 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `kelengkapan_sap`
--

CREATE TABLE `kelengkapan_sap` (
  `id_kelengkapan_sap` int(11) NOT NULL,
  `kelengkapansap` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelengkapan_sap`
--

INSERT INTO `kelengkapan_sap` (`id_kelengkapan_sap`, `kelengkapansap`) VALUES
(1, 'Ya'),
(2, 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `kelengkapan_silabus`
--

CREATE TABLE `kelengkapan_silabus` (
  `id_kelengkapan_silabus` int(11) NOT NULL,
  `kelengkapansilabus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelengkapan_silabus`
--

INSERT INTO `kelengkapan_silabus` (`id_kelengkapan_silabus`, `kelengkapansilabus`) VALUES
(1, 'Ya'),
(2, 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `kepemilikan_prasarana_ps`
--

CREATE TABLE `kepemilikan_prasarana_ps` (
  `id_kepemilikan` int(11) NOT NULL,
  `kepemilikan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepemilikan_prasarana_ps`
--

INSERT INTO `kepemilikan_prasarana_ps` (`id_kepemilikan`, `kepemilikan`) VALUES
(1, 'Milik PT/fakultas/jurusan sendiri'),
(2, 'Sewa/Kontrak/Kerjasama');

-- --------------------------------------------------------

--
-- Table structure for table `kerjasama_dalam`
--

CREATE TABLE `kerjasama_dalam` (
  `id_kerjasamaDalam` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `jenis_kegiatan` varchar(255) NOT NULL,
  `tahun_mulai` year(4) NOT NULL,
  `tahun_akhir` year(4) NOT NULL,
  `jumlah_dana` decimal(20,2) NOT NULL,
  `manfaat` varchar(255) NOT NULL,
  `id_dokumenD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerjasama_dalam`
--

INSERT INTO `kerjasama_dalam` (`id_kerjasamaDalam`, `id_departemen`, `nama_instansi`, `jenis_kegiatan`, `tahun_mulai`, `tahun_akhir`, `jumlah_dana`, `manfaat`, `id_dokumenD`) VALUES
(7, 6, 'Direktorat Kesehatan Masyarakat Veteriner (Kesmavet), Ditjen Peternakan dan Kesehatan Hewan, Kementerian Pertanian', 'Pengembangan Sistem Jaringan Informasi Keamanan Pangan Terpadu', 2016, 2016, '7.00', 'Memantapkan kerjasama dalam langkah peleksanaan pekerjaan terkait keamanan Pangan', 1),
(13, 6, 'Pemerintah Kabupaten Simalungun', 'Kerjasama dalam membantu proses seleksi jabatan pimpinan tinggi pratama secara terbuka di Kabupaten Simalungun', 2016, 2016, '2.00', 'Membantu proses seleksi SDM untuk Jabatan pimpinan tinggi pratama', NULL),
(18, 10, 'q', 'q', 2016, 2020, '1.00', 'q', NULL),
(19, 10, 'b', 'b', 2016, 2030, '1.00', 'b', NULL),
(20, 3, 'Yayasan Pendidikan Efarina, Kab. Simalungun, Sumatera Utara', 'Pembinaan OSN dan Bimbel untuk SMA/ SMK Efarina dan SMA Lainnya di Kab. Simalungun', 2016, 2017, '2.00', 'Peningkatan OSN dan Bimbel untuk SMA/SMK', 2),
(21, 6, 'Lembaga Sandi Negara (LEMSANEG)', 'Workshop dan pelatihan pengelolaan infrastruktur keamanan layanan VoIP', 2016, 2016, '43.20', 'Peningkatan pengelolaan infrastruktur', 3),
(25, 10, 'Kabupaten Nias Utara', 'Peningkatan kapasitas guru MIPA Kabupaten Nias Utara', 2016, 2017, '23.00', 'Peningkatan bidang MIPA dan IT bagi guru SMA/SMK sederajat', 4),
(26, 10, 'Kantor Kementerian Agama Kab Bogor ', 'Penguatan Pelajaran MIPA di Madrasah', 2015, 2017, '12.00', 'Peningkatan bidang MIPA di Madrasah-Madrasah', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kerjasama_luar`
--

CREATE TABLE `kerjasama_luar` (
  `id_kerjasamaLuar` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `jenis_kegiatan` varchar(255) NOT NULL,
  `tahun_mulai` year(4) NOT NULL,
  `tahun_akhir` year(4) NOT NULL,
  `jumlah_dana` decimal(20,2) NOT NULL,
  `manfaat` varchar(255) NOT NULL,
  `id_dokumenL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerjasama_luar`
--

INSERT INTO `kerjasama_luar` (`id_kerjasamaLuar`, `id_departemen`, `nama_instansi`, `jenis_kegiatan`, `tahun_mulai`, `tahun_akhir`, `jumlah_dana`, `manfaat`, `id_dokumenL`) VALUES
(2, 6, 'SAGA University', 'Penelitian (Post Doctoral), Pendidikan (student Exchange)', 2011, 2017, '2.00', 'Pengembangan SDM dalam bidang riset dan peningkatan kualitas pendidikan', 1),
(3, 3, 'SOKA Univrsity Jepang', 'Kerjasama penelitian', 2016, 2020, '13.00', 'Terjalinnya kerjasama dalam penelitian antara FMIPA IPB dengan Soka University', NULL),
(4, 1, 'A', 'A', 2016, 2016, '2.00', 'A', NULL),
(5, 6, 'George Masson University-Virginia USA', 'Riset dan pengembangan SDM', 2010, 2018, '1.00', 'Pengembangan SDM dalam bidang riset dan peningkatan kualitas pendidikan', NULL),
(6, 3, 'UNICEF', 'Adaptasi Perubahan Iklim Fokus Anak/Child Centered Climate Change Adaptation (APIFA/C4A)', 2016, 2017, '2.00', 'Tersedianya data pengetahun dan kesadaran masyarakat terkait degan adaptasi perubahan iklim.', NULL),
(7, 6, 'USAID SAInS', 'STEM Instruction Research Center/ FabLab', 2012, 2016, '30.00', 'Pengembangan pusat riset yang dapat digunakan oleh mahasiswa', NULL),
(8, 10, 'UNICEF', 'Adaptasi Perubahan Iklim Fokus Anak/Child Centered Climate Change Adaptation (APIFA/C4A)', 2016, 2017, '2.00', 'Tersedianya data pengetahun dan kesadaran masyarakat terkait degan adaptasi perubahan iklim.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi_lainnya`
--

CREATE TABLE `kompetensi_lainnya` (
  `id_kompetensi_lainnya` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan_kompetensi_lainnya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetensi_lainnya`
--

INSERT INTO `kompetensi_lainnya` (`id_kompetensi_lainnya`, `id_departemen`, `keterangan_kompetensi_lainnya`) VALUES
(1, 1, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Seperti penjelasan sebelumnya, program studi sarjana IPB menggunakan kurikukulum berbasis kompetensi dengan Sistem Mayor Minor. Oleh karena itu, lulusan PSIK juga mempunyai kompetensi tambahan mendukung kompetensi mayor. Kompetensi tambahan ini diperoleh dari mata kuliah minor ataupun <em>supporting course</em> yang diambil. Beberapa minor yang diselenggarakan di Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA) yang dapat diambil dapat dilihat pada tabel di bawah ini:</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor di lingkungan FMIPA serta kompetensinya</span></p>\r\n<table style=\"height: 43px; width: 60.8133%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 7.27958%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Minor</strong></span></td>\r\n<td style=\"width: 24.584%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Kompetensi</strong></span></td>\r\n<td style=\"width: 26.4975%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Mata Kuliah</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 13px;\">\r\n<td style=\"width: 2.45424%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 7.27958%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Statistika Terapan</span></td>\r\n<td style=\"width: 24.584%;\" width=\"236\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Lulusan mampu menerapkan statistika dalam berbagai bidang terapan</span></td>\r\n<td style=\"width: 26.4975%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Metode Penarikan Contoh, Perancangan Percobaan, Analisis Regresi, Pengantar Analisis Kategorik, Metode Peramalan Deret Waktu</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 7.27958%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi Terapan</span></td>\r\n<td style=\"width: 24.584%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Mampu menentukan kebutuhan, melakukan pengukuran/pengamatan data dan informasi sumber daya alam khususnya cuaca dan iklim serta menemukenali dan memanfaatkan data/informasi cuaca dan iklim</span></td>\r\n<td style=\"width: 26.4975%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi, Hidrometeorologi, Metode Observasi dan Instrumen Meteorologi, Agrometeorologi, Biometeorologi</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain minor tersebut, mahasiswa juga dapat mengambil minor yang ditawarkan di luar FMIPA, yang mana total minor di IPB sebanyak 45 minor pilihan. Dari data 4 tahun terakhir terlihat bahwa pola pilihan mahasiswa adalah: mayor-minor dan mayor-<em>supporting course</em>, seperti telah disajikan pada tabel di bawah ini:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor dan <em>supporting course </em>serta jumlah mahasiswa yang memilih</span></p>\r\n<table style=\"height: 48px; width: 74.5841%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 16px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No.</strong></span></td>\r\n<td style=\"width: 11.252%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Minor</strong></span></td>\r\n<td style=\"width: 11.3353%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 49 (2012)</strong></span></td>\r\n<td style=\"width: 12.5832%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 50 (2013)</strong></span></td>\r\n<td style=\"width: 10.5866%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 51 (2013)</strong></span></td>\r\n<td style=\"width: 11.8344%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 52 (2014)</strong></span></td>\r\n<td style=\"width: 5.59484%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Total</strong></span></td>\r\n<td style=\"width: 8.17382%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Persentase</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 17px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 11.252%; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><em>Supporting course</em></span></td>\r\n<td style=\"width: 11.3353%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">70</span></td>\r\n<td style=\"width: 12.5832%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">41</span></td>\r\n<td style=\"width: 10.5866%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65</span></td>\r\n<td style=\"width: 11.8344%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">139</span></td>\r\n<td style=\"width: 5.59484%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">315</span></td>\r\n<td style=\"width: 8.17382%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65.90%</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 11.252%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Riset Operasi</span></td>\r\n<td style=\"width: 11.3353%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 12.5832%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">28</span></td>\r\n<td style=\"width: 10.5866%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">19</span></td>\r\n<td style=\"width: 11.8344%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 5.59484%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">67</span></td>\r\n<td style=\"width: 8.17382%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">14.02%</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan tabel di atas, tiga minor yang memiliki jumlah peminat terbanyak adalah: Riset Operasi, Statistika Terapan, dan Fisika Instrumentasi. Ketiga minor tersebut merupakan minor yang ditawarkan dari fakultas MIPA, yang mana rumusan kompetensi dari setiap minor tersebut disajikan pada tabel sebelumnya. Pada minor terfavorit yakni minor Riset Operasi, mata kuliah wajib yang harus diikuti mahasiswa adalah sebagai berikut:</span></p>\r\n<ol>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Aljabar Linear Dasar</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrograman Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Graf Algoritmik</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrogramana Tak Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemodelan Riset Operasi</span></li>\r\n</ol>'),
(2, 2, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Seperti penjelasan sebelumnya, program studi sarjana IPB menggunakan kurikukulum berbasis kompetensi dengan Sistem Mayor Minor. Oleh karena itu, lulusan PSIK juga mempunyai kompetensi tambahan mendukung kompetensi mayor. Kompetensi tambahan ini diperoleh dari mata kuliah minor ataupun <em>supporting course</em> yang diambil. Beberapa minor yang diselenggarakan di Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA) yang dapat diambil dapat dilihat pada tabel di bawah ini:</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor di lingkungan FMIPA serta kompetensinya</span></p>\r\n<table style=\"height: 43px; width: 60.8133%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 7.27958%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Minor</strong></span></td>\r\n<td style=\"width: 24.584%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Kompetensi</strong></span></td>\r\n<td style=\"width: 26.4975%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Mata Kuliah</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 13px;\">\r\n<td style=\"width: 2.45424%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 7.27958%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Statistika Terapan</span></td>\r\n<td style=\"width: 24.584%;\" width=\"236\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Lulusan mampu menerapkan statistika dalam berbagai bidang terapan</span></td>\r\n<td style=\"width: 26.4975%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Metode Penarikan Contoh, Perancangan Percobaan, Analisis Regresi, Pengantar Analisis Kategorik, Metode Peramalan Deret Waktu</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 7.27958%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi Terapan</span></td>\r\n<td style=\"width: 24.584%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Mampu menentukan kebutuhan, melakukan pengukuran/pengamatan data dan informasi sumber daya alam khususnya cuaca dan iklim serta menemukenali dan memanfaatkan data/informasi cuaca dan iklim</span></td>\r\n<td style=\"width: 26.4975%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi, Hidrometeorologi, Metode Observasi dan Instrumen Meteorologi, Agrometeorologi, Biometeorologi</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain minor tersebut, mahasiswa juga dapat mengambil minor yang ditawarkan di luar FMIPA, yang mana total minor di IPB sebanyak 45 minor pilihan. Dari data 4 tahun terakhir terlihat bahwa pola pilihan mahasiswa adalah: mayor-minor dan mayor-<em>supporting course</em>, seperti telah disajikan pada tabel di bawah ini:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor dan <em>supporting course </em>serta jumlah mahasiswa yang memilih</span></p>\r\n<table style=\"height: 48px; width: 74.5841%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 16px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No.</strong></span></td>\r\n<td style=\"width: 11.252%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Minor</strong></span></td>\r\n<td style=\"width: 11.3353%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 49 (2012)</strong></span></td>\r\n<td style=\"width: 12.5832%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 50 (2013)</strong></span></td>\r\n<td style=\"width: 10.5866%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 51 (2013)</strong></span></td>\r\n<td style=\"width: 11.8344%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 52 (2014)</strong></span></td>\r\n<td style=\"width: 5.59484%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Total</strong></span></td>\r\n<td style=\"width: 8.17382%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Persentase</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 17px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 11.252%; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><em>Supporting course</em></span></td>\r\n<td style=\"width: 11.3353%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">70</span></td>\r\n<td style=\"width: 12.5832%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">41</span></td>\r\n<td style=\"width: 10.5866%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65</span></td>\r\n<td style=\"width: 11.8344%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">139</span></td>\r\n<td style=\"width: 5.59484%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">315</span></td>\r\n<td style=\"width: 8.17382%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65.90%</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 11.252%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Riset Operasi</span></td>\r\n<td style=\"width: 11.3353%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 12.5832%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">28</span></td>\r\n<td style=\"width: 10.5866%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">19</span></td>\r\n<td style=\"width: 11.8344%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 5.59484%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">67</span></td>\r\n<td style=\"width: 8.17382%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">14.02%</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan tabel di atas, tiga minor yang memiliki jumlah peminat terbanyak adalah: Riset Operasi, Statistika Terapan, dan Fisika Instrumentasi. Ketiga minor tersebut merupakan minor yang ditawarkan dari fakultas MIPA, yang mana rumusan kompetensi dari setiap minor tersebut disajikan pada tabel sebelumnya. Pada minor terfavorit yakni minor Riset Operasi, mata kuliah wajib yang harus diikuti mahasiswa adalah sebagai berikut:</span></p>\r\n<ol>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Aljabar Linear Dasar</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrograman Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Graf Algoritmik</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrogramana Tak Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemodelan Riset Operasi</span></li>\r\n</ol>'),
(3, 3, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Seperti penjelasan sebelumnya, program studi sarjana IPB menggunakan kurikukulum berbasis kompetensi dengan Sistem Mayor Minor. Oleh karena itu, lulusan PSIK juga mempunyai kompetensi tambahan mendukung kompetensi mayor. Kompetensi tambahan ini diperoleh dari mata kuliah minor ataupun <em>supporting course</em> yang diambil. Beberapa minor yang diselenggarakan di Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA) yang dapat diambil dapat dilihat pada tabel di bawah ini:</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor di lingkungan FMIPA serta kompetensinya</span></p>\r\n<table style=\"height: 43px; width: 60.8133%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 7.27958%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Minor</strong></span></td>\r\n<td style=\"width: 24.584%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Kompetensi</strong></span></td>\r\n<td style=\"width: 26.4975%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Mata Kuliah</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 13px;\">\r\n<td style=\"width: 2.45424%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 7.27958%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Statistika Terapan</span></td>\r\n<td style=\"width: 24.584%;\" width=\"236\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Lulusan mampu menerapkan statistika dalam berbagai bidang terapan</span></td>\r\n<td style=\"width: 26.4975%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Metode Penarikan Contoh, Perancangan Percobaan, Analisis Regresi, Pengantar Analisis Kategorik, Metode Peramalan Deret Waktu</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 7.27958%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi Terapan</span></td>\r\n<td style=\"width: 24.584%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Mampu menentukan kebutuhan, melakukan pengukuran/pengamatan data dan informasi sumber daya alam khususnya cuaca dan iklim serta menemukenali dan memanfaatkan data/informasi cuaca dan iklim</span></td>\r\n<td style=\"width: 26.4975%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi, Hidrometeorologi, Metode Observasi dan Instrumen Meteorologi, Agrometeorologi, Biometeorologi</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain minor tersebut, mahasiswa juga dapat mengambil minor yang ditawarkan di luar FMIPA, yang mana total minor di IPB sebanyak 45 minor pilihan. Dari data 4 tahun terakhir terlihat bahwa pola pilihan mahasiswa adalah: mayor-minor dan mayor-<em>supporting course</em>, seperti telah disajikan pada tabel di bawah ini:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor dan <em>supporting course </em>serta jumlah mahasiswa yang memilih</span></p>\r\n<table style=\"height: 48px; width: 74.5841%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 16px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No.</strong></span></td>\r\n<td style=\"width: 11.252%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Minor</strong></span></td>\r\n<td style=\"width: 11.3353%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 49 (2012)</strong></span></td>\r\n<td style=\"width: 12.5832%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 50 (2013)</strong></span></td>\r\n<td style=\"width: 10.5866%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 51 (2013)</strong></span></td>\r\n<td style=\"width: 11.8344%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 52 (2014)</strong></span></td>\r\n<td style=\"width: 5.59484%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Total</strong></span></td>\r\n<td style=\"width: 8.17382%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Persentase</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 17px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 11.252%; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><em>Supporting course</em></span></td>\r\n<td style=\"width: 11.3353%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">70</span></td>\r\n<td style=\"width: 12.5832%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">41</span></td>\r\n<td style=\"width: 10.5866%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65</span></td>\r\n<td style=\"width: 11.8344%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">139</span></td>\r\n<td style=\"width: 5.59484%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">315</span></td>\r\n<td style=\"width: 8.17382%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65.90%</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 11.252%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Riset Operasi</span></td>\r\n<td style=\"width: 11.3353%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 12.5832%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">28</span></td>\r\n<td style=\"width: 10.5866%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">19</span></td>\r\n<td style=\"width: 11.8344%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 5.59484%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">67</span></td>\r\n<td style=\"width: 8.17382%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">14.02%</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan tabel di atas, tiga minor yang memiliki jumlah peminat terbanyak adalah: Riset Operasi, Statistika Terapan, dan Fisika Instrumentasi. Ketiga minor tersebut merupakan minor yang ditawarkan dari fakultas MIPA, yang mana rumusan kompetensi dari setiap minor tersebut disajikan pada tabel sebelumnya. Pada minor terfavorit yakni minor Riset Operasi, mata kuliah wajib yang harus diikuti mahasiswa adalah sebagai berikut:</span></p>\r\n<ol>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Aljabar Linear Dasar</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrograman Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Graf Algoritmik</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrogramana Tak Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemodelan Riset Operasi</span></li>\r\n</ol>'),
(4, 4, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Seperti penjelasan sebelumnya, program studi sarjana IPB menggunakan kurikukulum berbasis kompetensi dengan Sistem Mayor Minor. Oleh karena itu, lulusan PSIK juga mempunyai kompetensi tambahan mendukung kompetensi mayor. Kompetensi tambahan ini diperoleh dari mata kuliah minor ataupun <em>supporting course</em> yang diambil. Beberapa minor yang diselenggarakan di Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA) yang dapat diambil dapat dilihat pada tabel di bawah ini:</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor di lingkungan FMIPA serta kompetensinya</span></p>\r\n<table style=\"height: 43px; width: 60.8133%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 7.27958%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Minor</strong></span></td>\r\n<td style=\"width: 24.584%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Kompetensi</strong></span></td>\r\n<td style=\"width: 26.4975%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Mata Kuliah</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 13px;\">\r\n<td style=\"width: 2.45424%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 7.27958%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Statistika Terapan</span></td>\r\n<td style=\"width: 24.584%;\" width=\"236\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Lulusan mampu menerapkan statistika dalam berbagai bidang terapan</span></td>\r\n<td style=\"width: 26.4975%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Metode Penarikan Contoh, Perancangan Percobaan, Analisis Regresi, Pengantar Analisis Kategorik, Metode Peramalan Deret Waktu</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 7.27958%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi Terapan</span></td>\r\n<td style=\"width: 24.584%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Mampu menentukan kebutuhan, melakukan pengukuran/pengamatan data dan informasi sumber daya alam khususnya cuaca dan iklim serta menemukenali dan memanfaatkan data/informasi cuaca dan iklim</span></td>\r\n<td style=\"width: 26.4975%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi, Hidrometeorologi, Metode Observasi dan Instrumen Meteorologi, Agrometeorologi, Biometeorologi</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain minor tersebut, mahasiswa juga dapat mengambil minor yang ditawarkan di luar FMIPA, yang mana total minor di IPB sebanyak 45 minor pilihan. Dari data 4 tahun terakhir terlihat bahwa pola pilihan mahasiswa adalah: mayor-minor dan mayor-<em>supporting course</em>, seperti telah disajikan pada tabel di bawah ini:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor dan <em>supporting course </em>serta jumlah mahasiswa yang memilih</span></p>\r\n<table style=\"height: 48px; width: 74.5841%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 16px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No.</strong></span></td>\r\n<td style=\"width: 11.252%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Minor</strong></span></td>\r\n<td style=\"width: 11.3353%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 49 (2012)</strong></span></td>\r\n<td style=\"width: 12.5832%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 50 (2013)</strong></span></td>\r\n<td style=\"width: 10.5866%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 51 (2013)</strong></span></td>\r\n<td style=\"width: 11.8344%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 52 (2014)</strong></span></td>\r\n<td style=\"width: 5.59484%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Total</strong></span></td>\r\n<td style=\"width: 8.17382%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Persentase</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 17px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 11.252%; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><em>Supporting course</em></span></td>\r\n<td style=\"width: 11.3353%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">70</span></td>\r\n<td style=\"width: 12.5832%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">41</span></td>\r\n<td style=\"width: 10.5866%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65</span></td>\r\n<td style=\"width: 11.8344%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">139</span></td>\r\n<td style=\"width: 5.59484%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">315</span></td>\r\n<td style=\"width: 8.17382%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65.90%</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 11.252%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Riset Operasi</span></td>\r\n<td style=\"width: 11.3353%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 12.5832%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">28</span></td>\r\n<td style=\"width: 10.5866%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">19</span></td>\r\n<td style=\"width: 11.8344%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 5.59484%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">67</span></td>\r\n<td style=\"width: 8.17382%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">14.02%</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan tabel di atas, tiga minor yang memiliki jumlah peminat terbanyak adalah: Riset Operasi, Statistika Terapan, dan Fisika Instrumentasi. Ketiga minor tersebut merupakan minor yang ditawarkan dari fakultas MIPA, yang mana rumusan kompetensi dari setiap minor tersebut disajikan pada tabel sebelumnya. Pada minor terfavorit yakni minor Riset Operasi, mata kuliah wajib yang harus diikuti mahasiswa adalah sebagai berikut:</span></p>\r\n<ol>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Aljabar Linear Dasar</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrograman Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Graf Algoritmik</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrogramana Tak Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemodelan Riset Operasi</span></li>\r\n</ol>'),
(5, 5, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Seperti penjelasan sebelumnya, program studi sarjana IPB menggunakan kurikukulum berbasis kompetensi dengan Sistem Mayor Minor. Oleh karena itu, lulusan PSIK juga mempunyai kompetensi tambahan mendukung kompetensi mayor. Kompetensi tambahan ini diperoleh dari mata kuliah minor ataupun <em>supporting course</em> yang diambil. Beberapa minor yang diselenggarakan di Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA) yang dapat diambil dapat dilihat pada tabel di bawah ini:</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor di lingkungan FMIPA serta kompetensinya</span></p>\r\n<table style=\"height: 43px; width: 60.8133%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 7.27958%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Minor</strong></span></td>\r\n<td style=\"width: 24.584%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Kompetensi</strong></span></td>\r\n<td style=\"width: 26.4975%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Mata Kuliah</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 13px;\">\r\n<td style=\"width: 2.45424%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 7.27958%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Statistika Terapan</span></td>\r\n<td style=\"width: 24.584%;\" width=\"236\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Lulusan mampu menerapkan statistika dalam berbagai bidang terapan</span></td>\r\n<td style=\"width: 26.4975%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Metode Penarikan Contoh, Perancangan Percobaan, Analisis Regresi, Pengantar Analisis Kategorik, Metode Peramalan Deret Waktu</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 7.27958%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi Terapan</span></td>\r\n<td style=\"width: 24.584%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Mampu menentukan kebutuhan, melakukan pengukuran/pengamatan data dan informasi sumber daya alam khususnya cuaca dan iklim serta menemukenali dan memanfaatkan data/informasi cuaca dan iklim</span></td>\r\n<td style=\"width: 26.4975%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi, Hidrometeorologi, Metode Observasi dan Instrumen Meteorologi, Agrometeorologi, Biometeorologi</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain minor tersebut, mahasiswa juga dapat mengambil minor yang ditawarkan di luar FMIPA, yang mana total minor di IPB sebanyak 45 minor pilihan. Dari data 4 tahun terakhir terlihat bahwa pola pilihan mahasiswa adalah: mayor-minor dan mayor-<em>supporting course</em>, seperti telah disajikan pada tabel di bawah ini:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor dan <em>supporting course </em>serta jumlah mahasiswa yang memilih</span></p>\r\n<table style=\"height: 48px; width: 74.5841%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 16px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No.</strong></span></td>\r\n<td style=\"width: 11.252%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Minor</strong></span></td>\r\n<td style=\"width: 11.3353%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 49 (2012)</strong></span></td>\r\n<td style=\"width: 12.5832%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 50 (2013)</strong></span></td>\r\n<td style=\"width: 10.5866%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 51 (2013)</strong></span></td>\r\n<td style=\"width: 11.8344%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 52 (2014)</strong></span></td>\r\n<td style=\"width: 5.59484%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Total</strong></span></td>\r\n<td style=\"width: 8.17382%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Persentase</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 17px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 11.252%; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><em>Supporting course</em></span></td>\r\n<td style=\"width: 11.3353%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">70</span></td>\r\n<td style=\"width: 12.5832%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">41</span></td>\r\n<td style=\"width: 10.5866%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65</span></td>\r\n<td style=\"width: 11.8344%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">139</span></td>\r\n<td style=\"width: 5.59484%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">315</span></td>\r\n<td style=\"width: 8.17382%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65.90%</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 11.252%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Riset Operasi</span></td>\r\n<td style=\"width: 11.3353%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 12.5832%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">28</span></td>\r\n<td style=\"width: 10.5866%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">19</span></td>\r\n<td style=\"width: 11.8344%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 5.59484%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">67</span></td>\r\n<td style=\"width: 8.17382%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">14.02%</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan tabel di atas, tiga minor yang memiliki jumlah peminat terbanyak adalah: Riset Operasi, Statistika Terapan, dan Fisika Instrumentasi. Ketiga minor tersebut merupakan minor yang ditawarkan dari fakultas MIPA, yang mana rumusan kompetensi dari setiap minor tersebut disajikan pada tabel sebelumnya. Pada minor terfavorit yakni minor Riset Operasi, mata kuliah wajib yang harus diikuti mahasiswa adalah sebagai berikut:</span></p>\r\n<ol>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Aljabar Linear Dasar</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrograman Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Graf Algoritmik</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrogramana Tak Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemodelan Riset Operasi</span></li>\r\n</ol>');
INSERT INTO `kompetensi_lainnya` (`id_kompetensi_lainnya`, `id_departemen`, `keterangan_kompetensi_lainnya`) VALUES
(6, 6, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Seperti penjelasan sebelumnya, program studi sarjana IPB menggunakan kurikukulum berbasis kompetensi dengan Sistem Mayor Minor. Oleh karena itu, lulusan PSIK juga mempunyai kompetensi tambahan mendukung kompetensi mayor. Kompetensi tambahan ini diperoleh dari mata kuliah minor ataupun <em>supporting course</em> yang diambil. Beberapa minor yang diselenggarakan di Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA) yang dapat diambil dapat dilihat pada tabel di bawah ini:</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor di lingkungan FMIPA serta kompetensinya</span></p>\r\n<table style=\"height: 43px; width: 60.8133%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 7.27958%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Minor</strong></span></td>\r\n<td style=\"width: 24.584%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Kompetensi</strong></span></td>\r\n<td style=\"width: 26.4975%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Mata Kuliah</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 13px;\">\r\n<td style=\"width: 2.45424%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 7.27958%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Statistika Terapan</span></td>\r\n<td style=\"width: 24.584%;\" width=\"236\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Lulusan mampu menerapkan statistika dalam berbagai bidang terapan</span></td>\r\n<td style=\"width: 26.4975%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Metode Penarikan Contoh, Perancangan Percobaan, Analisis Regresi, Pengantar Analisis Kategorik, Metode Peramalan Deret Waktu</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 7.27958%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi Terapan</span></td>\r\n<td style=\"width: 24.584%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Mampu menentukan kebutuhan, melakukan pengukuran/pengamatan data dan informasi sumber daya alam khususnya cuaca dan iklim serta menemukenali dan memanfaatkan data/informasi cuaca dan iklim</span></td>\r\n<td style=\"width: 26.4975%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi, Hidrometeorologi, Metode Observasi dan Instrumen Meteorologi, Agrometeorologi, Biometeorologi</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain minor tersebut, mahasiswa juga dapat mengambil minor yang ditawarkan di luar FMIPA, yang mana total minor di IPB sebanyak 45 minor pilihan. Dari data 4 tahun terakhir terlihat bahwa pola pilihan mahasiswa adalah: mayor-minor dan mayor-<em>supporting course</em>, seperti telah disajikan pada tabel di bawah ini:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor dan <em>supporting course </em>serta jumlah mahasiswa yang memilih</span></p>\r\n<table style=\"height: 48px; width: 74.5841%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 16px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No.</strong></span></td>\r\n<td style=\"width: 11.252%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Minor</strong></span></td>\r\n<td style=\"width: 11.3353%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 49 (2012)</strong></span></td>\r\n<td style=\"width: 12.5832%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 50 (2013)</strong></span></td>\r\n<td style=\"width: 10.5866%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 51 (2013)</strong></span></td>\r\n<td style=\"width: 11.8344%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 52 (2014)</strong></span></td>\r\n<td style=\"width: 5.59484%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Total</strong></span></td>\r\n<td style=\"width: 8.17382%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Persentase</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 17px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 11.252%; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><em>Supporting course</em></span></td>\r\n<td style=\"width: 11.3353%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">70</span></td>\r\n<td style=\"width: 12.5832%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">41</span></td>\r\n<td style=\"width: 10.5866%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65</span></td>\r\n<td style=\"width: 11.8344%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">139</span></td>\r\n<td style=\"width: 5.59484%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">315</span></td>\r\n<td style=\"width: 8.17382%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65.90%</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 11.252%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Riset Operasi</span></td>\r\n<td style=\"width: 11.3353%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 12.5832%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">28</span></td>\r\n<td style=\"width: 10.5866%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">19</span></td>\r\n<td style=\"width: 11.8344%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 5.59484%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">67</span></td>\r\n<td style=\"width: 8.17382%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">14.02%</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan tabel di atas, tiga minor yang memiliki jumlah peminat terbanyak adalah: Riset Operasi, Statistika Terapan, dan Fisika Instrumentasi. Ketiga minor tersebut merupakan minor yang ditawarkan dari fakultas MIPA, yang mana rumusan kompetensi dari setiap minor tersebut disajikan pada tabel sebelumnya. Pada minor terfavorit yakni minor Riset Operasi, mata kuliah wajib yang harus diikuti mahasiswa adalah sebagai berikut:</span></p>\r\n<ol>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Aljabar Linear Dasar</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrograman Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Graf Algoritmik</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrogramana Tak Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemodelan Riset Operasi</span></li>\r\n</ol>'),
(7, 7, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Seperti penjelasan sebelumnya, program studi sarjana IPB menggunakan kurikukulum berbasis kompetensi dengan Sistem Mayor Minor. Oleh karena itu, lulusan PSIK juga mempunyai kompetensi tambahan mendukung kompetensi mayor. Kompetensi tambahan ini diperoleh dari mata kuliah minor ataupun <em>supporting course</em> yang diambil. Beberapa minor yang diselenggarakan di Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA) yang dapat diambil dapat dilihat pada tabel di bawah ini:</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor di lingkungan FMIPA serta kompetensinya</span></p>\r\n<table style=\"height: 43px; width: 60.8133%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 7.27958%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Minor</strong></span></td>\r\n<td style=\"width: 24.584%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Kompetensi</strong></span></td>\r\n<td style=\"width: 26.4975%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Mata Kuliah</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 13px;\">\r\n<td style=\"width: 2.45424%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 7.27958%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Statistika Terapan</span></td>\r\n<td style=\"width: 24.584%;\" width=\"236\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Lulusan mampu menerapkan statistika dalam berbagai bidang terapan</span></td>\r\n<td style=\"width: 26.4975%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Metode Penarikan Contoh, Perancangan Percobaan, Analisis Regresi, Pengantar Analisis Kategorik, Metode Peramalan Deret Waktu</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 7.27958%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi Terapan</span></td>\r\n<td style=\"width: 24.584%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Mampu menentukan kebutuhan, melakukan pengukuran/pengamatan data dan informasi sumber daya alam khususnya cuaca dan iklim serta menemukenali dan memanfaatkan data/informasi cuaca dan iklim</span></td>\r\n<td style=\"width: 26.4975%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi, Hidrometeorologi, Metode Observasi dan Instrumen Meteorologi, Agrometeorologi, Biometeorologi</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain minor tersebut, mahasiswa juga dapat mengambil minor yang ditawarkan di luar FMIPA, yang mana total minor di IPB sebanyak 45 minor pilihan. Dari data 4 tahun terakhir terlihat bahwa pola pilihan mahasiswa adalah: mayor-minor dan mayor-<em>supporting course</em>, seperti telah disajikan pada tabel di bawah ini:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor dan <em>supporting course </em>serta jumlah mahasiswa yang memilih</span></p>\r\n<table style=\"height: 48px; width: 74.5841%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 16px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No.</strong></span></td>\r\n<td style=\"width: 11.252%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Minor</strong></span></td>\r\n<td style=\"width: 11.3353%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 49 (2012)</strong></span></td>\r\n<td style=\"width: 12.5832%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 50 (2013)</strong></span></td>\r\n<td style=\"width: 10.5866%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 51 (2013)</strong></span></td>\r\n<td style=\"width: 11.8344%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 52 (2014)</strong></span></td>\r\n<td style=\"width: 5.59484%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Total</strong></span></td>\r\n<td style=\"width: 8.17382%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Persentase</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 17px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 11.252%; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><em>Supporting course</em></span></td>\r\n<td style=\"width: 11.3353%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">70</span></td>\r\n<td style=\"width: 12.5832%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">41</span></td>\r\n<td style=\"width: 10.5866%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65</span></td>\r\n<td style=\"width: 11.8344%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">139</span></td>\r\n<td style=\"width: 5.59484%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">315</span></td>\r\n<td style=\"width: 8.17382%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65.90%</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 11.252%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Riset Operasi</span></td>\r\n<td style=\"width: 11.3353%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 12.5832%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">28</span></td>\r\n<td style=\"width: 10.5866%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">19</span></td>\r\n<td style=\"width: 11.8344%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 5.59484%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">67</span></td>\r\n<td style=\"width: 8.17382%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">14.02%</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan tabel di atas, tiga minor yang memiliki jumlah peminat terbanyak adalah: Riset Operasi, Statistika Terapan, dan Fisika Instrumentasi. Ketiga minor tersebut merupakan minor yang ditawarkan dari fakultas MIPA, yang mana rumusan kompetensi dari setiap minor tersebut disajikan pada tabel sebelumnya. Pada minor terfavorit yakni minor Riset Operasi, mata kuliah wajib yang harus diikuti mahasiswa adalah sebagai berikut:</span></p>\r\n<ol>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Aljabar Linear Dasar</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrograman Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Graf Algoritmik</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrogramana Tak Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemodelan Riset Operasi</span></li>\r\n</ol>'),
(8, 8, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Seperti penjelasan sebelumnya, program studi sarjana IPB menggunakan kurikukulum berbasis kompetensi dengan Sistem Mayor Minor. Oleh karena itu, lulusan PSIK juga mempunyai kompetensi tambahan mendukung kompetensi mayor. Kompetensi tambahan ini diperoleh dari mata kuliah minor ataupun <em>supporting course</em> yang diambil. Beberapa minor yang diselenggarakan di Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA) yang dapat diambil dapat dilihat pada tabel di bawah ini:</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor di lingkungan FMIPA serta kompetensinya</span></p>\r\n<table style=\"height: 43px; width: 60.8133%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 7.27958%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Minor</strong></span></td>\r\n<td style=\"width: 24.584%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Kompetensi</strong></span></td>\r\n<td style=\"width: 26.4975%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Mata Kuliah</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 13px;\">\r\n<td style=\"width: 2.45424%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 7.27958%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Statistika Terapan</span></td>\r\n<td style=\"width: 24.584%;\" width=\"236\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Lulusan mampu menerapkan statistika dalam berbagai bidang terapan</span></td>\r\n<td style=\"width: 26.4975%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Metode Penarikan Contoh, Perancangan Percobaan, Analisis Regresi, Pengantar Analisis Kategorik, Metode Peramalan Deret Waktu</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 7.27958%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi Terapan</span></td>\r\n<td style=\"width: 24.584%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Mampu menentukan kebutuhan, melakukan pengukuran/pengamatan data dan informasi sumber daya alam khususnya cuaca dan iklim serta menemukenali dan memanfaatkan data/informasi cuaca dan iklim</span></td>\r\n<td style=\"width: 26.4975%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi, Hidrometeorologi, Metode Observasi dan Instrumen Meteorologi, Agrometeorologi, Biometeorologi</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain minor tersebut, mahasiswa juga dapat mengambil minor yang ditawarkan di luar FMIPA, yang mana total minor di IPB sebanyak 45 minor pilihan. Dari data 4 tahun terakhir terlihat bahwa pola pilihan mahasiswa adalah: mayor-minor dan mayor-<em>supporting course</em>, seperti telah disajikan pada tabel di bawah ini:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor dan <em>supporting course </em>serta jumlah mahasiswa yang memilih</span></p>\r\n<table style=\"height: 48px; width: 74.5841%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 16px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No.</strong></span></td>\r\n<td style=\"width: 11.252%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Minor</strong></span></td>\r\n<td style=\"width: 11.3353%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 49 (2012)</strong></span></td>\r\n<td style=\"width: 12.5832%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 50 (2013)</strong></span></td>\r\n<td style=\"width: 10.5866%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 51 (2013)</strong></span></td>\r\n<td style=\"width: 11.8344%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 52 (2014)</strong></span></td>\r\n<td style=\"width: 5.59484%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Total</strong></span></td>\r\n<td style=\"width: 8.17382%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Persentase</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 17px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 11.252%; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><em>Supporting course</em></span></td>\r\n<td style=\"width: 11.3353%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">70</span></td>\r\n<td style=\"width: 12.5832%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">41</span></td>\r\n<td style=\"width: 10.5866%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65</span></td>\r\n<td style=\"width: 11.8344%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">139</span></td>\r\n<td style=\"width: 5.59484%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">315</span></td>\r\n<td style=\"width: 8.17382%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65.90%</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 11.252%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Riset Operasi</span></td>\r\n<td style=\"width: 11.3353%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 12.5832%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">28</span></td>\r\n<td style=\"width: 10.5866%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">19</span></td>\r\n<td style=\"width: 11.8344%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 5.59484%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">67</span></td>\r\n<td style=\"width: 8.17382%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">14.02%</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan tabel di atas, tiga minor yang memiliki jumlah peminat terbanyak adalah: Riset Operasi, Statistika Terapan, dan Fisika Instrumentasi. Ketiga minor tersebut merupakan minor yang ditawarkan dari fakultas MIPA, yang mana rumusan kompetensi dari setiap minor tersebut disajikan pada tabel sebelumnya. Pada minor terfavorit yakni minor Riset Operasi, mata kuliah wajib yang harus diikuti mahasiswa adalah sebagai berikut:</span></p>\r\n<ol>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Aljabar Linear Dasar</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrograman Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Graf Algoritmik</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrogramana Tak Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemodelan Riset Operasi</span></li>\r\n</ol>');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi_pendukung_lulusan`
--

CREATE TABLE `kompetensi_pendukung_lulusan` (
  `id_kompetensi_pendukung_lulusan` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan_kompetensi_pendukung_lulusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetensi_pendukung_lulusan`
--

INSERT INTO `kompetensi_pendukung_lulusan` (`id_kompetensi_pendukung_lulusan`, `id_departemen`, `keterangan_kompetensi_pendukung_lulusan`) VALUES
(1, 1, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada kompetensi utama lulusan PSIK, terdapat dua kata kunci yakni &ldquo;mengembangkan&rdquo; dan &ldquo;memanfaatkan&rdquo;. Untuk menunjang hal tersebut, maka kompetensi utama lulusan akan dibagi menjadi enam kompetens&nbsp;sebagai berikut:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 1</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu menjelaskan prinsip-prinsip dasar matematika dan ilmu komputer meliputi algoritme dan pemrograman, sistem dan aristektur komputer, metode pengembangan sistem, manajemen data dan informasi, kecerdasan komputasional, dan sistem terdistribusi dan keamanan informasi dalam konteks pengembangan sistem berbasis komputer secara umum serta bioinformatika dan precission agriculture secara khusus&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi enam sub-kompetensi, yaitu:</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu menjelaskan prinsip-prinsip dasar matematika dan algoritme.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menjelaskan prinsip dasar sistem dan arsitektur komputer.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu menjelaskan prinsip dasar manajemen data dan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan prinsip-prinsip dasar kecerdasan komputasional.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">5. Mampu menjelaskan prinsip-prinsip dasar sistem terdistribusi dan keamanan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6. Mampu menjelaskan prinsip pengembangan sistem berbasis komputer, khususnya terkait dengan bioinformatika dan <em>precision agriculture</em>.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 2</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melakukan analisis dan merancang algoritme yang efektif dan efisien serta mengimplementasikannya dalam berbagai paradigma pemrograman untuk membentuk sistem perangkat lunak yang berkualitas yang sesuai dengan metode-metode pengembangan sistem perangkat lunak dengan memperhatikan aspek etika, legal dan keamanan informasi dalam lingkungan mandiri dan/atau terdistribusi&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi empat sub-kompetensi, yaitu:</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu melakukan perancangan dan analisis algoritme yang efektif dan efisien.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menggunakan teknik pemrograman untuk memecahkan permasalahan komputasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu membangun sistem perangkat lunak dalam lingkungan mandiri dan/atau terdistribusi mengikuti metode pengembangan yang sesuai.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan dan mengimplementasikan aspek etika, legal, dan keamanan dalam pengembangan sistem perangkat lunak serta mampu mengembangkan bidang ilmunya secara profesional.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 3</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memilih metode yang sesuai untuk menyelesaikan permasalahan berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 4</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melaksanakan dan mengawasi pengembangan sistem berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 5</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memformulasikan penyelesaian masalah dalam bentuk laporan tugas akhir dan tulisan ilmiah&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 6</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Bertanggung jawab pada pekerjaan secara mandiri dan dapat diberi tanggung jawab atas pencapaian hasil kerja kelompok, komunikatif, estetis, etis, apresiatif, partisipatif dan ber wawasan kebangsaan&rdquo;</span></p>'),
(2, 2, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada kompetensi utama lulusan PSIK, terdapat dua kata kunci yakni &ldquo;mengembangkan&rdquo; dan &ldquo;memanfaatkan&rdquo;. Untuk menunjang hal tersebut, maka kompetensi utama lulusan akan dibagi menjadi enam kompetens&nbsp;sebagai berikut:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 1</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu menjelaskan prinsip-prinsip dasar matematika dan ilmu komputer meliputi algoritme dan pemrograman, sistem dan aristektur komputer, metode pengembangan sistem, manajemen data dan informasi, kecerdasan komputasional, dan sistem terdistribusi dan keamanan informasi dalam konteks pengembangan sistem berbasis komputer secara umum serta bioinformatika dan precission agriculture secara khusus&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi enam sub-kompetensi, yaitu:</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu menjelaskan prinsip-prinsip dasar matematika dan algoritme.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menjelaskan prinsip dasar sistem dan arsitektur komputer.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu menjelaskan prinsip dasar manajemen data dan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan prinsip-prinsip dasar kecerdasan komputasional.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">5. Mampu menjelaskan prinsip-prinsip dasar sistem terdistribusi dan keamanan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6. Mampu menjelaskan prinsip pengembangan sistem berbasis komputer, khususnya terkait dengan bioinformatika dan <em>precision agriculture</em>.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 2</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melakukan analisis dan merancang algoritme yang efektif dan efisien serta mengimplementasikannya dalam berbagai paradigma pemrograman untuk membentuk sistem perangkat lunak yang berkualitas yang sesuai dengan metode-metode pengembangan sistem perangkat lunak dengan memperhatikan aspek etika, legal dan keamanan informasi dalam lingkungan mandiri dan/atau terdistribusi&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi empat sub-kompetensi, yaitu:</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu melakukan perancangan dan analisis algoritme yang efektif dan efisien.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menggunakan teknik pemrograman untuk memecahkan permasalahan komputasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu membangun sistem perangkat lunak dalam lingkungan mandiri dan/atau terdistribusi mengikuti metode pengembangan yang sesuai.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan dan mengimplementasikan aspek etika, legal, dan keamanan dalam pengembangan sistem perangkat lunak serta mampu mengembangkan bidang ilmunya secara profesional.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 3</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memilih metode yang sesuai untuk menyelesaikan permasalahan berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 4</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melaksanakan dan mengawasi pengembangan sistem berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 5</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memformulasikan penyelesaian masalah dalam bentuk laporan tugas akhir dan tulisan ilmiah&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 6</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Bertanggung jawab pada pekerjaan secara mandiri dan dapat diberi tanggung jawab atas pencapaian hasil kerja kelompok, komunikatif, estetis, etis, apresiatif, partisipatif dan ber wawasan kebangsaan&rdquo;</span></p>'),
(3, 3, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada kompetensi utama lulusan PSIK, terdapat dua kata kunci yakni &ldquo;mengembangkan&rdquo; dan &ldquo;memanfaatkan&rdquo;. Untuk menunjang hal tersebut, maka kompetensi utama lulusan akan dibagi menjadi enam kompetens&nbsp;sebagai berikut:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 1</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu menjelaskan prinsip-prinsip dasar matematika dan ilmu komputer meliputi algoritme dan pemrograman, sistem dan aristektur komputer, metode pengembangan sistem, manajemen data dan informasi, kecerdasan komputasional, dan sistem terdistribusi dan keamanan informasi dalam konteks pengembangan sistem berbasis komputer secara umum serta bioinformatika dan precission agriculture secara khusus&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi enam sub-kompetensi, yaitu:</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu menjelaskan prinsip-prinsip dasar matematika dan algoritme.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menjelaskan prinsip dasar sistem dan arsitektur komputer.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu menjelaskan prinsip dasar manajemen data dan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan prinsip-prinsip dasar kecerdasan komputasional.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">5. Mampu menjelaskan prinsip-prinsip dasar sistem terdistribusi dan keamanan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6. Mampu menjelaskan prinsip pengembangan sistem berbasis komputer, khususnya terkait dengan bioinformatika dan <em>precision agriculture</em>.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 2</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melakukan analisis dan merancang algoritme yang efektif dan efisien serta mengimplementasikannya dalam berbagai paradigma pemrograman untuk membentuk sistem perangkat lunak yang berkualitas yang sesuai dengan metode-metode pengembangan sistem perangkat lunak dengan memperhatikan aspek etika, legal dan keamanan informasi dalam lingkungan mandiri dan/atau terdistribusi&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi empat sub-kompetensi, yaitu:</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu melakukan perancangan dan analisis algoritme yang efektif dan efisien.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menggunakan teknik pemrograman untuk memecahkan permasalahan komputasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu membangun sistem perangkat lunak dalam lingkungan mandiri dan/atau terdistribusi mengikuti metode pengembangan yang sesuai.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan dan mengimplementasikan aspek etika, legal, dan keamanan dalam pengembangan sistem perangkat lunak serta mampu mengembangkan bidang ilmunya secara profesional.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 3</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memilih metode yang sesuai untuk menyelesaikan permasalahan berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 4</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melaksanakan dan mengawasi pengembangan sistem berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 5</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memformulasikan penyelesaian masalah dalam bentuk laporan tugas akhir dan tulisan ilmiah&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 6</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Bertanggung jawab pada pekerjaan secara mandiri dan dapat diberi tanggung jawab atas pencapaian hasil kerja kelompok, komunikatif, estetis, etis, apresiatif, partisipatif dan ber wawasan kebangsaan&rdquo;</span></p>'),
(4, 4, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada kompetensi utama lulusan PSIK, terdapat dua kata kunci yakni &ldquo;mengembangkan&rdquo; dan &ldquo;memanfaatkan&rdquo;. Untuk menunjang hal tersebut, maka kompetensi utama lulusan akan dibagi menjadi enam kompetens&nbsp;sebagai berikut:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 1</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu menjelaskan prinsip-prinsip dasar matematika dan ilmu komputer meliputi algoritme dan pemrograman, sistem dan aristektur komputer, metode pengembangan sistem, manajemen data dan informasi, kecerdasan komputasional, dan sistem terdistribusi dan keamanan informasi dalam konteks pengembangan sistem berbasis komputer secara umum serta bioinformatika dan precission agriculture secara khusus&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi enam sub-kompetensi, yaitu:</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu menjelaskan prinsip-prinsip dasar matematika dan algoritme.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menjelaskan prinsip dasar sistem dan arsitektur komputer.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu menjelaskan prinsip dasar manajemen data dan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan prinsip-prinsip dasar kecerdasan komputasional.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">5. Mampu menjelaskan prinsip-prinsip dasar sistem terdistribusi dan keamanan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6. Mampu menjelaskan prinsip pengembangan sistem berbasis komputer, khususnya terkait dengan bioinformatika dan <em>precision agriculture</em>.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 2</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melakukan analisis dan merancang algoritme yang efektif dan efisien serta mengimplementasikannya dalam berbagai paradigma pemrograman untuk membentuk sistem perangkat lunak yang berkualitas yang sesuai dengan metode-metode pengembangan sistem perangkat lunak dengan memperhatikan aspek etika, legal dan keamanan informasi dalam lingkungan mandiri dan/atau terdistribusi&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi empat sub-kompetensi, yaitu:</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu melakukan perancangan dan analisis algoritme yang efektif dan efisien.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menggunakan teknik pemrograman untuk memecahkan permasalahan komputasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu membangun sistem perangkat lunak dalam lingkungan mandiri dan/atau terdistribusi mengikuti metode pengembangan yang sesuai.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan dan mengimplementasikan aspek etika, legal, dan keamanan dalam pengembangan sistem perangkat lunak serta mampu mengembangkan bidang ilmunya secara profesional.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 3</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memilih metode yang sesuai untuk menyelesaikan permasalahan berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 4</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melaksanakan dan mengawasi pengembangan sistem berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 5</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memformulasikan penyelesaian masalah dalam bentuk laporan tugas akhir dan tulisan ilmiah&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 6</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Bertanggung jawab pada pekerjaan secara mandiri dan dapat diberi tanggung jawab atas pencapaian hasil kerja kelompok, komunikatif, estetis, etis, apresiatif, partisipatif dan ber wawasan kebangsaan&rdquo;</span></p>'),
(5, 5, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada kompetensi utama lulusan PSIK, terdapat dua kata kunci yakni &ldquo;mengembangkan&rdquo; dan &ldquo;memanfaatkan&rdquo;. Untuk menunjang hal tersebut, maka kompetensi utama lulusan akan dibagi menjadi enam kompetens&nbsp;sebagai berikut:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 1</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu menjelaskan prinsip-prinsip dasar matematika dan ilmu komputer meliputi algoritme dan pemrograman, sistem dan aristektur komputer, metode pengembangan sistem, manajemen data dan informasi, kecerdasan komputasional, dan sistem terdistribusi dan keamanan informasi dalam konteks pengembangan sistem berbasis komputer secara umum serta bioinformatika dan precission agriculture secara khusus&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi enam sub-kompetensi, yaitu:</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu menjelaskan prinsip-prinsip dasar matematika dan algoritme.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menjelaskan prinsip dasar sistem dan arsitektur komputer.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu menjelaskan prinsip dasar manajemen data dan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan prinsip-prinsip dasar kecerdasan komputasional.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">5. Mampu menjelaskan prinsip-prinsip dasar sistem terdistribusi dan keamanan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6. Mampu menjelaskan prinsip pengembangan sistem berbasis komputer, khususnya terkait dengan bioinformatika dan <em>precision agriculture</em>.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 2</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melakukan analisis dan merancang algoritme yang efektif dan efisien serta mengimplementasikannya dalam berbagai paradigma pemrograman untuk membentuk sistem perangkat lunak yang berkualitas yang sesuai dengan metode-metode pengembangan sistem perangkat lunak dengan memperhatikan aspek etika, legal dan keamanan informasi dalam lingkungan mandiri dan/atau terdistribusi&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi empat sub-kompetensi, yaitu:</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu melakukan perancangan dan analisis algoritme yang efektif dan efisien.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menggunakan teknik pemrograman untuk memecahkan permasalahan komputasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu membangun sistem perangkat lunak dalam lingkungan mandiri dan/atau terdistribusi mengikuti metode pengembangan yang sesuai.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan dan mengimplementasikan aspek etika, legal, dan keamanan dalam pengembangan sistem perangkat lunak serta mampu mengembangkan bidang ilmunya secara profesional.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 3</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memilih metode yang sesuai untuk menyelesaikan permasalahan berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 4</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melaksanakan dan mengawasi pengembangan sistem berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 5</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memformulasikan penyelesaian masalah dalam bentuk laporan tugas akhir dan tulisan ilmiah&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 6</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Bertanggung jawab pada pekerjaan secara mandiri dan dapat diberi tanggung jawab atas pencapaian hasil kerja kelompok, komunikatif, estetis, etis, apresiatif, partisipatif dan ber wawasan kebangsaan&rdquo;</span></p>'),
(6, 6, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada kompetensi utama lulusan PSIK, terdapat dua kata kunci yakni &ldquo;mengembangkan&rdquo; dan &ldquo;memanfaatkan&rdquo;. Untuk menunjang hal tersebut, maka kompetensi utama lulusan akan dibagi menjadi enam kompetens sebagai berikut:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 1</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu menjelaskan prinsip-prinsip dasar matematika dan ilmu komputer meliputi algoritme dan pemrograman, sistem dan aristektur komputer, metode pengembangan sistem, manajemen data dan informasi, kecerdasan komputasional, dan sistem terdistribusi dan keamanan informasi dalam konteks pengembangan sistem berbasis komputer secara umum serta bioinformatika dan precission agriculture secara khusus&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi enam sub-kompetensi, yaitu:</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu menjelaskan prinsip-prinsip dasar matematika dan algoritme.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menjelaskan prinsip dasar sistem dan arsitektur komputer.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu menjelaskan prinsip dasar manajemen data dan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan prinsip-prinsip dasar kecerdasan komputasional.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">5. Mampu menjelaskan prinsip-prinsip dasar sistem terdistribusi dan keamanan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6. Mampu menjelaskan prinsip pengembangan sistem berbasis komputer, khususnya terkait dengan bioinformatika dan <em>precision agriculture</em>.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 2</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melakukan analisis dan merancang algoritme yang efektif dan efisien serta mengimplementasikannya dalam berbagai paradigma pemrograman untuk membentuk sistem perangkat lunak yang berkualitas yang sesuai dengan metode-metode pengembangan sistem perangkat lunak dengan memperhatikan aspek etika, legal dan keamanan informasi dalam lingkungan mandiri dan/atau terdistribusi&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi empat sub-kompetensi, yaitu:</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu melakukan perancangan dan analisis algoritme yang efektif dan efisien.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menggunakan teknik pemrograman untuk memecahkan permasalahan komputasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu membangun sistem perangkat lunak dalam lingkungan mandiri dan/atau terdistribusi mengikuti metode pengembangan yang sesuai.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan dan mengimplementasikan aspek etika, legal, dan keamanan dalam pengembangan sistem perangkat lunak serta mampu mengembangkan bidang ilmunya secara profesional.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 3</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memilih metode yang sesuai untuk menyelesaikan permasalahan berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 4</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melaksanakan dan mengawasi pengembangan sistem berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 5</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memformulasikan penyelesaian masalah dalam bentuk laporan tugas akhir dan tulisan ilmiah&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 6</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Bertanggung jawab pada pekerjaan secara mandiri dan dapat diberi tanggung jawab atas pencapaian hasil kerja kelompok, komunikatif, estetis, etis, apresiatif, partisipatif dan ber wawasan kebangsaan&rdquo;</span></p>'),
(7, 7, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada kompetensi utama lulusan PSIK, terdapat dua kata kunci yakni &ldquo;mengembangkan&rdquo; dan &ldquo;memanfaatkan&rdquo;. Untuk menunjang hal tersebut, maka kompetensi utama lulusan akan dibagi menjadi enam kompetens&nbsp;sebagai berikut:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 1</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu menjelaskan prinsip-prinsip dasar matematika dan ilmu komputer meliputi algoritme dan pemrograman, sistem dan aristektur komputer, metode pengembangan sistem, manajemen data dan informasi, kecerdasan komputasional, dan sistem terdistribusi dan keamanan informasi dalam konteks pengembangan sistem berbasis komputer secara umum serta bioinformatika dan precission agriculture secara khusus&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi enam sub-kompetensi, yaitu:</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu menjelaskan prinsip-prinsip dasar matematika dan algoritme.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menjelaskan prinsip dasar sistem dan arsitektur komputer.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu menjelaskan prinsip dasar manajemen data dan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan prinsip-prinsip dasar kecerdasan komputasional.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">5. Mampu menjelaskan prinsip-prinsip dasar sistem terdistribusi dan keamanan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6. Mampu menjelaskan prinsip pengembangan sistem berbasis komputer, khususnya terkait dengan bioinformatika dan <em>precision agriculture</em>.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 2</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melakukan analisis dan merancang algoritme yang efektif dan efisien serta mengimplementasikannya dalam berbagai paradigma pemrograman untuk membentuk sistem perangkat lunak yang berkualitas yang sesuai dengan metode-metode pengembangan sistem perangkat lunak dengan memperhatikan aspek etika, legal dan keamanan informasi dalam lingkungan mandiri dan/atau terdistribusi&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi empat sub-kompetensi, yaitu:</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu melakukan perancangan dan analisis algoritme yang efektif dan efisien.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menggunakan teknik pemrograman untuk memecahkan permasalahan komputasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu membangun sistem perangkat lunak dalam lingkungan mandiri dan/atau terdistribusi mengikuti metode pengembangan yang sesuai.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan dan mengimplementasikan aspek etika, legal, dan keamanan dalam pengembangan sistem perangkat lunak serta mampu mengembangkan bidang ilmunya secara profesional.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 3</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memilih metode yang sesuai untuk menyelesaikan permasalahan berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 4</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melaksanakan dan mengawasi pengembangan sistem berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 5</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memformulasikan penyelesaian masalah dalam bentuk laporan tugas akhir dan tulisan ilmiah&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 6</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Bertanggung jawab pada pekerjaan secara mandiri dan dapat diberi tanggung jawab atas pencapaian hasil kerja kelompok, komunikatif, estetis, etis, apresiatif, partisipatif dan ber wawasan kebangsaan&rdquo;</span></p>'),
(8, 8, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada kompetensi utama lulusan PSIK, terdapat dua kata kunci yakni &ldquo;mengembangkan&rdquo; dan &ldquo;memanfaatkan&rdquo;. Untuk menunjang hal tersebut, maka kompetensi utama lulusan akan dibagi menjadi enam kompetens&nbsp;sebagai berikut:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 1</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu menjelaskan prinsip-prinsip dasar matematika dan ilmu komputer meliputi algoritme dan pemrograman, sistem dan aristektur komputer, metode pengembangan sistem, manajemen data dan informasi, kecerdasan komputasional, dan sistem terdistribusi dan keamanan informasi dalam konteks pengembangan sistem berbasis komputer secara umum serta bioinformatika dan precission agriculture secara khusus&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi enam sub-kompetensi, yaitu:</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu menjelaskan prinsip-prinsip dasar matematika dan algoritme.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menjelaskan prinsip dasar sistem dan arsitektur komputer.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu menjelaskan prinsip dasar manajemen data dan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan prinsip-prinsip dasar kecerdasan komputasional.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">5. Mampu menjelaskan prinsip-prinsip dasar sistem terdistribusi dan keamanan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6. Mampu menjelaskan prinsip pengembangan sistem berbasis komputer, khususnya terkait dengan bioinformatika dan <em>precision agriculture</em>.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 2</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melakukan analisis dan merancang algoritme yang efektif dan efisien serta mengimplementasikannya dalam berbagai paradigma pemrograman untuk membentuk sistem perangkat lunak yang berkualitas yang sesuai dengan metode-metode pengembangan sistem perangkat lunak dengan memperhatikan aspek etika, legal dan keamanan informasi dalam lingkungan mandiri dan/atau terdistribusi&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi empat sub-kompetensi, yaitu:</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu melakukan perancangan dan analisis algoritme yang efektif dan efisien.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menggunakan teknik pemrograman untuk memecahkan permasalahan komputasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu membangun sistem perangkat lunak dalam lingkungan mandiri dan/atau terdistribusi mengikuti metode pengembangan yang sesuai.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan dan mengimplementasikan aspek etika, legal, dan keamanan dalam pengembangan sistem perangkat lunak serta mampu mengembangkan bidang ilmunya secara profesional.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 3</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memilih metode yang sesuai untuk menyelesaikan permasalahan berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 4</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melaksanakan dan mengawasi pengembangan sistem berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 5</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memformulasikan penyelesaian masalah dalam bentuk laporan tugas akhir dan tulisan ilmiah&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 6</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Bertanggung jawab pada pekerjaan secara mandiri dan dapat diberi tanggung jawab atas pencapaian hasil kerja kelompok, komunikatif, estetis, etis, apresiatif, partisipatif dan ber wawasan kebangsaan&rdquo;</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi_utama_lulusan`
--

CREATE TABLE `kompetensi_utama_lulusan` (
  `id_kompetensi_utama_lulusan` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan_kompetensi_utama_lulusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetensi_utama_lulusan`
--

INSERT INTO `kompetensi_utama_lulusan` (`id_kompetensi_utama_lulusan`, `id_departemen`, `keterangan_kompetensi_utama_lulusan`) VALUES
(1, 1, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan visi PSIK yang telah ditetapkan, yakni sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional, maka kompetensi utama lulusan ilmu komputer dirumuskan berdasarkan pada pengalaman yang dimiliki baik melalui riset, dan pengabdian pada masyarakat dalam mengembangkan potensi dan inovasi baik secara keilmuan, metodologi serta pendekatan solusi berbasis komputer. Kompetensi ini dirumuskan dengan tujuan dapat mewujudkan visi dan misi PSIK, yang mana juga merupakan bagian dari upaya pencapaian visi universitas. Selain itu, kompetensi juga dirumuskan dengan merujuk referensi dari asosiasi terkait yakni ABET, ACM dan IEEE, serta kurikulum program studi sejenis di perguruan tinggi lainnya baik dalam maupun luar negeri yang digunakan sebagai pembanding. Adapun <strong>kompetensi utama</strong> dari lulusan program studi S1 Ilmu Komputer adalah:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>&ldquo;Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.&rdquo;</strong></span></p>'),
(2, 2, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan visi PSIK yang telah ditetapkan, yakni sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional, maka kompetensi utama lulusan ilmu komputer dirumuskan berdasarkan pada pengalaman yang dimiliki baik melalui riset, dan pengabdian pada masyarakat dalam mengembangkan potensi dan inovasi baik secara keilmuan, metodologi serta pendekatan solusi berbasis komputer. Kompetensi ini dirumuskan dengan tujuan dapat mewujudkan visi dan misi PSIK, yang mana juga merupakan bagian dari upaya pencapaian visi universitas. Selain itu, kompetensi juga dirumuskan dengan merujuk referensi dari asosiasi terkait yakni ABET, ACM dan IEEE, serta kurikulum program studi sejenis di perguruan tinggi lainnya baik dalam maupun luar negeri yang digunakan sebagai pembanding. Adapun <strong>kompetensi utama</strong> dari lulusan program studi S1 Ilmu Komputer adalah:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>&ldquo;Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.&rdquo;</strong></span></p>'),
(3, 3, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan visi PSIK yang telah ditetapkan, yakni sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional, maka kompetensi utama lulusan ilmu komputer dirumuskan berdasarkan pada pengalaman yang dimiliki baik melalui riset, dan pengabdian pada masyarakat dalam mengembangkan potensi dan inovasi baik secara keilmuan, metodologi serta pendekatan solusi berbasis komputer. Kompetensi ini dirumuskan dengan tujuan dapat mewujudkan visi dan misi PSIK, yang mana juga merupakan bagian dari upaya pencapaian visi universitas. Selain itu, kompetensi juga dirumuskan dengan merujuk referensi dari asosiasi terkait yakni ABET, ACM dan IEEE, serta kurikulum program studi sejenis di perguruan tinggi lainnya baik dalam maupun luar negeri yang digunakan sebagai pembanding. Adapun <strong>kompetensi utama</strong> dari lulusan program studi S1 Ilmu Komputer adalah:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>&ldquo;Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.&rdquo;</strong></span></p>'),
(4, 4, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan visi PSIK yang telah ditetapkan, yakni sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional, maka kompetensi utama lulusan ilmu komputer dirumuskan berdasarkan pada pengalaman yang dimiliki baik melalui riset, dan pengabdian pada masyarakat dalam mengembangkan potensi dan inovasi baik secara keilmuan, metodologi serta pendekatan solusi berbasis komputer. Kompetensi ini dirumuskan dengan tujuan dapat mewujudkan visi dan misi PSIK, yang mana juga merupakan bagian dari upaya pencapaian visi universitas. Selain itu, kompetensi juga dirumuskan dengan merujuk referensi dari asosiasi terkait yakni ABET, ACM dan IEEE, serta kurikulum program studi sejenis di perguruan tinggi lainnya baik dalam maupun luar negeri yang digunakan sebagai pembanding. Adapun <strong>kompetensi utama</strong> dari lulusan program studi S1 Ilmu Komputer adalah:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>&ldquo;Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.&rdquo;</strong></span></p>'),
(5, 5, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan visi PSIK yang telah ditetapkan, yakni sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional, maka kompetensi utama lulusan ilmu komputer dirumuskan berdasarkan pada pengalaman yang dimiliki baik melalui riset, dan pengabdian pada masyarakat dalam mengembangkan potensi dan inovasi baik secara keilmuan, metodologi serta pendekatan solusi berbasis komputer. Kompetensi ini dirumuskan dengan tujuan dapat mewujudkan visi dan misi PSIK, yang mana juga merupakan bagian dari upaya pencapaian visi universitas. Selain itu, kompetensi juga dirumuskan dengan merujuk referensi dari asosiasi terkait yakni ABET, ACM dan IEEE, serta kurikulum program studi sejenis di perguruan tinggi lainnya baik dalam maupun luar negeri yang digunakan sebagai pembanding. Adapun <strong>kompetensi utama</strong> dari lulusan program studi S1 Ilmu Komputer adalah:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>&ldquo;Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.&rdquo;</strong></span></p>'),
(6, 6, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan visi PSIK yang telah ditetapkan, yakni sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional, maka kompetensi utama lulusan ilmu komputer dirumuskan berdasarkan pada pengalaman yang dimiliki baik melalui riset, dan pengabdian pada masyarakat dalam mengembangkan potensi dan inovasi baik secara keilmuan, metodologi serta pendekatan solusi berbasis komputer. Kompetensi ini dirumuskan dengan tujuan dapat mewujudkan visi dan misi PSIK, yang mana juga merupakan bagian dari upaya pencapaian visi universitas. Selain itu, kompetensi juga dirumuskan dengan merujuk referensi dari asosiasi terkait yakni ABET, ACM dan IEEE, serta kurikulum program studi sejenis di perguruan tinggi lainnya baik dalam maupun luar negeri yang digunakan sebagai pembanding. Adapun <strong>kompetensi utama</strong> dari lulusan program studi S1 Ilmu Komputer adalah:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>&ldquo;Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.&rdquo;</strong></span></p>'),
(7, 7, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan visi PSIK yang telah ditetapkan, yakni sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional, maka kompetensi utama lulusan ilmu komputer dirumuskan berdasarkan pada pengalaman yang dimiliki baik melalui riset, dan pengabdian pada masyarakat dalam mengembangkan potensi dan inovasi baik secara keilmuan, metodologi serta pendekatan solusi berbasis komputer. Kompetensi ini dirumuskan dengan tujuan dapat mewujudkan visi dan misi PSIK, yang mana juga merupakan bagian dari upaya pencapaian visi universitas. Selain itu, kompetensi juga dirumuskan dengan merujuk referensi dari asosiasi terkait yakni ABET, ACM dan IEEE, serta kurikulum program studi sejenis di perguruan tinggi lainnya baik dalam maupun luar negeri yang digunakan sebagai pembanding. Adapun <strong>kompetensi utama</strong> dari lulusan program studi S1 Ilmu Komputer adalah:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>&ldquo;Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.&rdquo;</strong></span></p>'),
(8, 8, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan visi PSIK yang telah ditetapkan, yakni sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional, maka kompetensi utama lulusan ilmu komputer dirumuskan berdasarkan pada pengalaman yang dimiliki baik melalui riset, dan pengabdian pada masyarakat dalam mengembangkan potensi dan inovasi baik secara keilmuan, metodologi serta pendekatan solusi berbasis komputer. Kompetensi ini dirumuskan dengan tujuan dapat mewujudkan visi dan misi PSIK, yang mana juga merupakan bagian dari upaya pencapaian visi universitas. Selain itu, kompetensi juga dirumuskan dengan merujuk referensi dari asosiasi terkait yakni ABET, ACM dan IEEE, serta kurikulum program studi sejenis di perguruan tinggi lainnya baik dalam maupun luar negeri yang digunakan sebagai pembanding. Adapun <strong>kompetensi utama</strong> dari lulusan program studi S1 Ilmu Komputer adalah:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>&ldquo;Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.&rdquo;</strong></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_prasarana_ps`
--

CREATE TABLE `kondisi_prasarana_ps` (
  `id_kondisi` int(11) NOT NULL,
  `kondisi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi_prasarana_ps`
--

INSERT INTO `kondisi_prasarana_ps` (`id_kondisi`, `kondisi`) VALUES
(1, 'Terawat'),
(2, 'Tidak Terawat');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum1`
--

CREATE TABLE `kurikulum1` (
  `id_kurikulum1` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `kurikulum01` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum1`
--

INSERT INTO `kurikulum1` (`id_kurikulum1`, `id_departemen`, `kurikulum01`) VALUES
(5, 6, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan visi PSIK yang telah ditetapkan, yakni sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional, maka kompetensi utama lulusan ilmu komputer dirumuskan berdasarkan pada pengalaman yang dimiliki baik melalui riset, dan pengabdian pada masyarakat dalam mengembangkan potensi dan inovasi baik secara keilmuan, metodologi serta pendekatan solusi berbasis komputer. Kompetensi ini dirumuskan dengan tujuan dapat mewujudkan visi dan misi PSIK, yang mana juga merupakan bagian dari upaya pencapaian visi universitas. Selain itu, kompetensi juga dirumuskan dengan merujuk referensi dari asosiasi terkait yakni ABET, ACM dan IEEE, serta kurikulum program studi sejenis di perguruan tinggi lainnya baik dalam maupun luar negeri yang digunakan sebagai pembanding. Adapun <strong>kompetensi utama</strong> dari lulusan program studi S1 Ilmu Komputer adalah:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>&ldquo;Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.&rdquo;</strong></span></p>'),
(6, 3, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan visi PSIK yang telah ditetapkan, yakni sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional, maka kompetensi utama lulusan ilmu komputer dirumuskan berdasarkan pada pengalaman yang dimiliki baik melalui riset, dan pengabdian pada masyarakat dalam mengembangkan potensi dan inovasi baik secara keilmuan, metodologi serta pendekatan solusi berbasis komputer. Kompetensi ini dirumuskan dengan tujuan dapat mewujudkan visi dan misi PSIK, yang mana juga merupakan bagian dari upaya pencapaian visi universitas. Selain itu, kompetensi juga dirumuskan dengan merujuk referensi dari asosiasi terkait yakni ABET, ACM dan IEEE, serta kurikulum program studi sejenis di perguruan tinggi lainnya baik dalam maupun luar negeri yang digunakan sebagai pembanding. Adapun <strong>kompetensi utama</strong> dari lulusan program studi S1 Ilmu Komputer adalah:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>&ldquo;Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.&rdquo;</strong></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum2`
--

CREATE TABLE `kurikulum2` (
  `id_kurikulum2` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `kurikulum02` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum2`
--

INSERT INTO `kurikulum2` (`id_kurikulum2`, `id_departemen`, `kurikulum02`) VALUES
(5, 6, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada kompetensi utama lulusan PSIK, terdapat dua kata kunci yakni &ldquo;mengembangkan&rdquo; dan &ldquo;memanfaatkan&rdquo;. Untuk menunjang hal tersebut, maka kompetensi utama lulusan akan dibagi menjadi enam kompetens&nbsp;sebagai berikut:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 1</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu menjelaskan prinsip-prinsip dasar matematika dan ilmu komputer meliputi algoritme dan pemrograman, sistem dan aristektur komputer, metode pengembangan sistem, manajemen data dan informasi, kecerdasan komputasional, dan sistem terdistribusi dan keamanan informasi dalam konteks pengembangan sistem berbasis komputer secara umum serta bioinformatika dan precission agriculture secara khusus&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi enam sub-kompetensi, yaitu:</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu menjelaskan prinsip-prinsip dasar matematika dan algoritme.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menjelaskan prinsip dasar sistem dan arsitektur komputer.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu menjelaskan prinsip dasar manajemen data dan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan prinsip-prinsip dasar kecerdasan komputasional.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">5. Mampu menjelaskan prinsip-prinsip dasar sistem terdistribusi dan keamanan informasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6. Mampu menjelaskan prinsip pengembangan sistem berbasis komputer, khususnya terkait dengan bioinformatika dan <em>precision agriculture</em>.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 2</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melakukan analisis dan merancang algoritme yang efektif dan efisien serta mengimplementasikannya dalam berbagai paradigma pemrograman untuk membentuk sistem perangkat lunak yang berkualitas yang sesuai dengan metode-metode pengembangan sistem perangkat lunak dengan memperhatikan aspek etika, legal dan keamanan informasi dalam lingkungan mandiri dan/atau terdistribusi&rdquo;</span></p>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi ini dibagi menjadi empat sub-kompetensi, yaitu:</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1. Mampu melakukan perancangan dan analisis algoritme yang efektif dan efisien.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2. Mampu menggunakan teknik pemrograman untuk memecahkan permasalahan komputasi.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3. Mampu membangun sistem perangkat lunak dalam lingkungan mandiri dan/atau terdistribusi mengikuti metode pengembangan yang sesuai.</span></p>\r\n<p style=\"padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4. Mampu menjelaskan dan mengimplementasikan aspek etika, legal, dan keamanan dalam pengembangan sistem perangkat lunak serta mampu mengembangkan bidang ilmunya secara profesional.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 3</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memilih metode yang sesuai untuk menyelesaikan permasalahan berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 4</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu melaksanakan dan mengawasi pengembangan sistem berbasis komputer&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 5</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Mampu memformulasikan penyelesaian masalah dalam bentuk laporan tugas akhir dan tulisan ilmiah&rdquo;</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 6</span></li>\r\n</ul>\r\n<p style=\"text-align: justify; padding-left: 60px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&ldquo;Bertanggung jawab pada pekerjaan secara mandiri dan dapat diberi tanggung jawab atas pencapaian hasil kerja kelompok, komunikatif, estetis, etis, apresiatif, partisipatif dan ber wawasan kebangsaan&rdquo;</span></p>'),
(6, 3, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada kompetensi utama lulusan PSIK, terdapat dua kata kunci yakni &ldquo;mengembangkan&rdquo; dan &ldquo;memanfaatkan&rdquo;. Untuk menunjang hal tersebut, maka kompetensi utama lulusan akan dibagi menjadi enam kompetensi sebagai berikut:</span></p>\r\n<ul>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 1 :&nbsp;</span>&ldquo;Mampu menjelaskan prinsip-prinsip dasar matematika dan ilmu komputer meliputi algoritme dan pemrograman, sistem dan aristektur komputer, metode pengembangan sistem, manajemen data dan informasi, kecerdasan komputasional, dan sistem terdistribusi dan keamanan informasi dalam konteks pengembangan sistem berbasis komputer secara umum serta bioinformatika dan precission agriculture secara khusus&rdquo;</li>\r\n</ul>\r\n<ul>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 2 :&nbsp;</span>&ldquo;Mampu melakukan analisis dan merancang algoritme yang efektif dan efisien serta mengimplementasikannya dalam berbagai paradigma pemrograman untuk membentuk sistem perangkat lunak yang berkualitas yang sesuai dengan metode-metode pengembangan sistem perangkat lunak dengan memperhatikan aspek etika, legal dan keamanan informasi dalam lingkungan mandiri dan/atau terdistribusi&rdquo;</li>\r\n</ul>\r\n<ul>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 3 :&nbsp;</span>&ldquo;Mampu memilih metode yang sesuai untuk menyelesaikan permasalahan berbasis komputer&rdquo;</li>\r\n</ul>\r\n<ul>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 4 :&nbsp;</span>&ldquo;Mampu melaksanakan dan mengawasi pengembangan sistem berbasis komputer&rdquo;</li>\r\n</ul>\r\n<ul>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 5 :&nbsp;</span>&ldquo;Mampu memformulasikan penyelesaian masalah dalam bentuk laporan tugas akhir dan tulisan ilmiah&rdquo;</li>\r\n</ul>\r\n<ul>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kompetensi 6 :&nbsp;</span>&ldquo;Bertanggung jawab pada pekerjaan secara mandiri dan dapat diberi tanggung jawab atas pencapaian hasil kerja kelompok, komunikatif, estetis, etis, apresiatif, partisipatif dan ber wawasan kebangsaan&rdquo;</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum3`
--

CREATE TABLE `kurikulum3` (
  `id_kurikulum3` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `kurikulum03` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum3`
--

INSERT INTO `kurikulum3` (`id_kurikulum3`, `id_departemen`, `kurikulum03`) VALUES
(5, 6, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Seperti penjelasan sebelumnya, program studi sarjana IPB menggunakan kurikukulum berbasis kompetensi dengan Sistem Mayor Minor. Oleh karena itu, lulusan PSIK juga mempunyai kompetensi tambahan mendukung kompetensi mayor. Kompetensi tambahan ini diperoleh dari mata kuliah minor ataupun <em>supporting course</em> yang diambil. Beberapa minor yang diselenggarakan di Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA) yang dapat diambil dapat dilihat pada tabel di bawah ini:</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor di lingkungan FMIPA serta kompetensinya</span></p>\r\n<table style=\"height: 43px; width: 60.8133%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 7.27958%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Minor</strong></span></td>\r\n<td style=\"width: 24.584%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Kompetensi</strong></span></td>\r\n<td style=\"width: 26.4975%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Mata Kuliah</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 13px;\">\r\n<td style=\"width: 2.45424%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 7.27958%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Statistika Terapan</span></td>\r\n<td style=\"width: 24.584%;\" width=\"236\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Lulusan mampu menerapkan statistika dalam berbagai bidang terapan</span></td>\r\n<td style=\"width: 26.4975%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Metode Penarikan Contoh, Perancangan Percobaan, Analisis Regresi, Pengantar Analisis Kategorik, Metode Peramalan Deret Waktu</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 7.27958%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi Terapan</span></td>\r\n<td style=\"width: 24.584%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Mampu menentukan kebutuhan, melakukan pengukuran/pengamatan data dan informasi sumber daya alam khususnya cuaca dan iklim serta menemukenali dan memanfaatkan data/informasi cuaca dan iklim</span></td>\r\n<td style=\"width: 26.4975%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi, Hidrometeorologi, Metode Observasi dan Instrumen Meteorologi, Agrometeorologi, Biometeorologi</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain minor tersebut, mahasiswa juga dapat mengambil minor yang ditawarkan di luar FMIPA, yang mana total minor di IPB sebanyak 45 minor pilihan. Dari data 4 tahun terakhir terlihat bahwa pola pilihan mahasiswa adalah: mayor-minor dan mayor-<em>supporting course</em>, seperti telah disajikan pada tabel di bawah ini:</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor dan <em>supporting course </em>serta jumlah mahasiswa yang memilih</span></p>\r\n<table style=\"height: 48px; width: 74.5841%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 16px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No.</strong></span></td>\r\n<td style=\"width: 11.252%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Minor</strong></span></td>\r\n<td style=\"width: 11.3353%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 49 (2012)</strong></span></td>\r\n<td style=\"width: 12.5832%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 50 (2013)</strong></span></td>\r\n<td style=\"width: 10.5866%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 51 (2013)</strong></span></td>\r\n<td style=\"width: 11.8344%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Angkatan 52 (2014)</strong></span></td>\r\n<td style=\"width: 5.59484%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Total</strong></span></td>\r\n<td style=\"width: 8.17382%; text-align: center; height: 16px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Persentase</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 17px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 11.252%; height: 17px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><em>Supporting course</em></span></td>\r\n<td style=\"width: 11.3353%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">70</span></td>\r\n<td style=\"width: 12.5832%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">41</span></td>\r\n<td style=\"width: 10.5866%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65</span></td>\r\n<td style=\"width: 11.8344%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">139</span></td>\r\n<td style=\"width: 5.59484%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">315</span></td>\r\n<td style=\"width: 8.17382%; height: 17px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">65.90%</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 3.26539%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 11.252%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Riset Operasi</span></td>\r\n<td style=\"width: 11.3353%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 12.5832%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">28</span></td>\r\n<td style=\"width: 10.5866%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">19</span></td>\r\n<td style=\"width: 11.8344%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></td>\r\n<td style=\"width: 5.59484%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">67</span></td>\r\n<td style=\"width: 8.17382%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">14.02%</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan tabel di atas, tiga minor yang memiliki jumlah peminat terbanyak adalah: Riset Operasi, Statistika Terapan, dan Fisika Instrumentasi. Ketiga minor tersebut merupakan minor yang ditawarkan dari fakultas MIPA, yang mana rumusan kompetensi dari setiap minor tersebut disajikan pada tabel sebelumnya. Pada minor terfavorit yakni minor Riset Operasi, mata kuliah wajib yang harus diikuti mahasiswa adalah sebagai berikut:</span></p>\r\n<ol>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Aljabar Linear Dasar</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrograman Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Graf Algoritmik</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemrogramana Tak Linear</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemodelan Riset Operasi</span></li>\r\n</ol>'),
(6, 3, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Seperti penjelasan sebelumnya, program studi sarjana IPB menggunakan kurikukulum berbasis kompetensi dengan Sistem Mayor Minor. Oleh karena itu, lulusan PSIK juga mempunyai kompetensi tambahan mendukung kompetensi mayor. Kompetensi tambahan ini diperoleh dari mata kuliah minor ataupun <em>supporting course</em> yang diambil. Beberapa minor yang diselenggarakan di Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA) yang dapat diambil dapat dilihat pada tabel di bawah ini:</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Daftar minor di lingkungan FMIPA serta kompetensinya</span></p>\r\n<table style=\"height: 43px; width: 60.8133%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 7.27958%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Minor</strong></span></td>\r\n<td style=\"width: 24.584%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Kompetensi</strong></span></td>\r\n<td style=\"width: 26.4975%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Mata Kuliah</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 13px;\">\r\n<td style=\"width: 2.45424%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 7.27958%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Statistika Terapan</span></td>\r\n<td style=\"width: 24.584%;\" width=\"236\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Lulusan mampu menerapkan statistika dalam berbagai bidang terapan</span></td>\r\n<td style=\"width: 26.4975%; height: 13px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Metode Penarikan Contoh, Perancangan Percobaan, Analisis Regresi, Pengantar Analisis Kategorik, Metode Peramalan Deret Waktu</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 2.45424%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 7.27958%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi Terapan</span></td>\r\n<td style=\"width: 24.584%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Mampu menentukan kebutuhan, melakukan pengukuran/pengamatan data dan informasi sumber daya alam khususnya cuaca dan iklim serta menemukenali dan memanfaatkan data/informasi cuaca dan iklim</span></td>\r\n<td style=\"width: 26.4975%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Meteorologi, Hidrometeorologi, Metode Observasi dan Instrumen Meteorologi, Agrometeorologi, Biometeorologi</span></td>\r\n</tr>\r\n</tbody>\r\n</table>');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum4`
--

CREATE TABLE `kurikulum4` (
  `id_kurikulum4` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `sks_wajib4` int(11) NOT NULL,
  `sks_pilihan4` int(11) NOT NULL,
  `keterangan_wajib4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_pilihan4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks_mayor4` int(11) NOT NULL,
  `keterangan_mayor4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks_minor4` int(11) NOT NULL,
  `keterangan_minor4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_kurikulum4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurikulum4`
--

INSERT INTO `kurikulum4` (`id_kurikulum4`, `id_departemen`, `sks_wajib4`, `sks_pilihan4`, `keterangan_wajib4`, `keterangan_pilihan4`, `sks_mayor4`, `keterangan_mayor4`, `sks_minor4`, `keterangan_minor4`, `tahun_kurikulum4`, `created_at`, `updated_at`) VALUES
(144, 6, 35, 12, 'Dilaksanakan di tahun pertama dan dikelola oleh Direktorat Program Pendidikan Kompetensi Umum (PPKU)', 'Memberikan bekal kemampuan analisis kuantitatif', 85, 'Mayor ilmu komputer mempunyai beban sebesar 85 SKS', 15, 'Ada 45 set pilihan minor di IPB, 11 Minor di Fakultas MIPA.Supporting course dapat diambil dari semua mata kuliah yang ditawarkan oleh prodi yang ada di IPB termasuk mata kuliah yang ditawarkan PSIK yang di luar mata kuliah mayor.', '2018', NULL, '2018-10-03 15:01:36'),
(145, 3, 35, 12, 'Dilaksanakan di tahun pertama dan dikelola oleh Direktorat Program Pendidikan Kompetensi Umum (PPKU)', 'Memberikan bekal kemampuan analisis kuantitatif', 85, 'Mayor ilmu komputer mempunyai beban sebesar 85 SKS', 15, 'Ada 45 set pilihan minor di IPB, 11 Minor di Fakultas MIPA.Supporting course dapat diambil dari semua mata kuliah yang ditawarkan oleh prodi yang ada di IPB termasuk mata kuliah yang ditawarkan PSIK yang di luar mata kuliah mayor.', '2018', NULL, '2018-10-02 10:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum5`
--

CREATE TABLE `kurikulum5` (
  `id_kurikulum5` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `sem_kurikulum5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mk_kurikulum5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mk_kurikulum5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_sks_kurikulum5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `inti` int(11) NOT NULL,
  `institusional` int(11) NOT NULL,
  `id_haki` int(11) NOT NULL,
  `id_hoki` int(11) NOT NULL,
  `id_hiki` int(11) NOT NULL,
  `id_huki` int(11) NOT NULL,
  `unit_kurikulum5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_kurikulum5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurikulum5`
--

INSERT INTO `kurikulum5` (`id_kurikulum5`, `id_departemen`, `sem_kurikulum5`, `kode_mk_kurikulum5`, `nama_mk_kurikulum5`, `bobot_sks_kurikulum5`, `inti`, `institusional`, `id_haki`, `id_hoki`, `id_hiki`, `id_huki`, `unit_kurikulum5`, `tahun_kurikulum5`, `created_at`, `updated_at`) VALUES
(148, 6, '1', 'IPB111', 'Pendidikan Pancasila', '2(1-2)', 1, 1, 1, 1, 1, 1, 'PPKU', '2018', NULL, '2018-10-03 16:51:32'),
(150, 6, '2', 'IPB101-104 atau IPB110', 'Agama', '3(2-2)', 2, 1, 1, 1, 1, 1, 'PPKU', '2018', NULL, '2018-10-03 15:34:42'),
(152, 6, '3', 'MAT219', 'Aljabar Linear', '3(2-2)', 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018', '2018-10-03 15:22:52', '2018-10-03 16:29:31'),
(153, 6, '2', 'IPB106', 'Bahasa Indonesia', '2(1-2)', 1, 1, 1, 1, 1, 1, 'PPKU', '2018', '2018-10-03 15:23:42', '2018-10-03 15:34:46'),
(154, 6, '4', 'KOM205', 'Basis Data', '3(2-2', 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018', '2018-10-03 15:36:09', '2018-10-03 15:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum6`
--

CREATE TABLE `kurikulum6` (
  `id_kurikulum6` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_mk_kurikulum6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mk_kurikulum6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sem_kurikulum6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_sks_kurikulum6` int(11) NOT NULL,
  `id_haki` int(11) NOT NULL,
  `pengelola_kurikulum6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_kurikulum6` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurikulum6`
--

INSERT INTO `kurikulum6` (`id_kurikulum6`, `id_departemen`, `nama_mk_kurikulum6`, `kode_mk_kurikulum6`, `sem_kurikulum6`, `bobot_sks_kurikulum6`, `id_haki`, `pengelola_kurikulum6`, `tahun_kurikulum6`, `created_at`, `updated_at`) VALUES
(148, 6, 'Pengantar Sistem Tertanam Dan Robotika', 'KOM415', '5 Dan 6', 3, 1, 'Ilmu Komputer', '2018', '2018-09-12 02:57:16', '2018-10-03 18:09:10'),
(152, 6, 'Pengantar Teknologi Geospasial', 'KOM341', '5 Dan 6', 3, 2, 'Ilmu Komputer', '2018', NULL, '2018-09-27 13:18:49'),
(153, 6, 'Temu Kembali Informasi', 'KOM431', '5 Dan 6', 3, 2, 'Ilmu Komputer', '2018', NULL, '2018-09-27 10:26:30'),
(154, 3, 'Pengantar Sistem Tertanam Dan Robotika', 'KOM415', '5 Dan 6', 3, 1, 'Ilmu Komputer', '2018', '2018-09-12 02:57:16', '2018-09-27 13:18:45'),
(155, 3, 'Pengantar Teknologi Geospasial', 'KOM341', '5 Dan 6', 3, 2, 'Ilmu Komputer', '2018', NULL, '2018-09-27 13:18:49'),
(156, 3, 'Temu Kembali Informasi', 'KOM431', '5 Dan 6', 3, 2, 'Ilmu Komputer', '2018', NULL, '2018-09-27 10:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum7`
--

CREATE TABLE `kurikulum7` (
  `id_kurikulum7` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `kode_mk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_praktikum_kurikulum7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int(11) NOT NULL,
  `judul_kurikulum7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_kurikulum7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertemuan` int(11) NOT NULL,
  `tempat_kurikulum7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_kurikulum7` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurikulum7`
--

INSERT INTO `kurikulum7` (`id_kurikulum7`, `id_departemen`, `kode_mk`, `nama_praktikum_kurikulum7`, `sks`, `judul_kurikulum7`, `jam_kurikulum7`, `pertemuan`, `tempat_kurikulum7`, `tahun_kurikulum7`, `created_at`, `updated_at`) VALUES
(167, 6, 'MAT219', 'Aljabar Linear', 1, 'Kumpulan Soal Aljabar Linear', '28', 14, 'Responsi di kelas', '2018', '2018-10-02 11:10:16', '2018-10-02 11:25:04'),
(170, 6, 'STK211', 'Metode Statistika', 1, 'Praktikum Metode Statistika', '28', 14, 'Lab. Komputer PS. Statistika', '2018', '2018-10-02 11:26:39', '2018-10-02 11:26:39'),
(171, 3, 'MAT219', 'Aljabar Linear', 1, 'Kumpulan Soal Aljabar Linear', '28', 14, 'Responsi di kelas', '2018', '2018-10-02 11:10:16', '2018-10-02 11:25:04'),
(172, 3, 'STK211', 'Metode Statistika', 1, 'Praktikum Metode Statistika', '28', 14, 'Lab. Komputer PS. Statistika', '2018', '2018-10-02 11:26:39', '2018-10-02 11:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum8`
--

CREATE TABLE `kurikulum8` (
  `id_kurikulum8` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `kurikulum08` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum8`
--

INSERT INTO `kurikulum8` (`id_kurikulum8`, `id_departemen`, `kurikulum08`) VALUES
(5, 6, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PSIK berdiri sejak tahun 1992 berada di bawah FMIPA IPB. Sejak berdirinya hingga sekarang telah dilakukan lokakarya peninjauan kurikulum sebanyak 5 kali, yaitu pada tahun 1995, 2000, 2005, 2009, 2013. Kurikulum tahun 1995 dikembangkan dengan mengikuti kurikulum nasional dengan kurikulum program sejenis lainnya di dalam maupun luar negeri, ditambah dengan beberapa muatan yang mencirikan&nbsp; karakteristik lokal. Mulai tahun 2000, IPB mencanangkan sebagai embrio universitas berbasis riset, yang salah satu wujud nyatanya adalah dibentuknya lab keilmuan di level program studi.&nbsp; Sejalan dengan kebijakan tersebut, maka dari aspek kurikulum juga mengalami perubahan mendasar, untuk itu dilakukan lokakarya kurikulum pada tahun 2000.&nbsp; Pada tahun 2005 terdapat evaluasi lab keilmuan dan mandat departemen oleh IPB serta arah perkembangan riset IPB.&nbsp; Oleh karena itu, pada tahun 2005 dilaksanakan peninjauan kurikulum yang ketiga.&nbsp; Setelah 4 tahun berjalan, maka pada tahun 2009 di program studi diselenggarakan diskusi untuk mengevaluasi kembali visi-misi serta arah perkembangan organisasi ke depan. Bersamaan dengan ini maka pada tahun 2009, dilaksanakan peninjauan kurikulum. Selanjutnya, dengan adanya perkembangan sistem kurikulum nasional KKNI (Kerangka Kualifikasi Nasional Indonesia), maka kurikulum PSIK mengalami peninjauan kembali dan ini dilakukan pada tahun 2013. Semua peninjauan kurikulum yang telah dilakukan oleh PSIK di atas, dilakukan secara mandiri dengan melibatkan dosen PSIK, dosen IPB terkait, alumni, pengguna lulusan, serta mengacu pada: 1) dokumen perkembangan keilmuan bidang komputer seperti yang tertera pada dokumen asosiasi internasional (seperti: <em>Computing Curricula</em> 2005, 2009, dan 2013), juga dokumen prodi sejenis di perguruan tinggi lain; 2) visi misi institusi dan perubahan sistem kurikulum di IPB (misal adanya sistem kurikulum Mayor-Minor pada tahun 2005); dan 3) perkembangan kebutuhan pengguna lulusan PSIK. Alumni, pengguna lulusan, dan Pakar memberikan informasi perkembangan terbaru di bidang ilmu komputer dan teknologi informasi melalui melalui kegiatan kuliah umum, workshop, dan diskusi-diskusi internal dengan dosen dan mahasiswa PSIK. Informasi tersebut menjadi masukan dalam perumusan kurikulum PSIK.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam menyusun kurikulum, sebagai pertimbangan adalah visi universitas, visi fakultas dan program studi, dikaitkan dengan topik-topik riset yang telah dilakukan, pandangan berbagai pihak mengenai perkembangan ilmu ke depan (pada berbagai bidang, dan khususnya bidang llmu komputer) yang diperoleh dari pakar maupun dokumen yang relevan, serta dokumen kurikulum dari asosiasi dan institusi sejenis di dalam dan di luar negeri yang dipergunakan sebagai bahan komparasi. Untuk meningkatkan relevansinya dengan pasar tenaga kerja, maka evaluasi kurikulum juga menggunakan masukan alumni dan pengguna lulusan sebagai bahan pertimbangan (pembahasan lebih jelasnya dapat dilihat pada Standar 3 butir 3.3.1.b). Dengan demikian, kurikulum yang dikembangkan sejalan dengan <em>trend</em> perkembangan ilmu masa depan, relevan dengan pasar, dan&nbsp; dalam <em>track</em> yang sejalan untuk mencapai visi-misi lembaga (program studi, fakultas dan universitas).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil utama peninjauan kurikulum adalah berupa penyempurnaan visi, misi, tujuan, dan target sasaran, penyusunan rumusan <em>learning outcome </em>(LO) PSIK dan penjabarannya, penentuan topik dan mata kuliah serta pemetaannya (antara mata kuliah dengan LO), diagram keterkaitan antar mata kuliah, deskripsi serta alokasi ke setiap semesternya.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada tahun 2014, terdapat penyempurnaan KKNI oleh pemerintah juga IPB secara keseluruhan semua prodi diminta untuk melakukan peninjauan kurikulum kembali yang akan diberlakukan pada tahun 2015. Oleh karena itu, PSIK melakukan pra-lokakarya pada Tahun 2014.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pralokakarya ini dilakukan sebagai langkah untuk merancang kurikulum sesuai dengan perkembangan IPTEK dan keinginan pengguna dan sebagai persiapan kegiatan lokakarya yang dilaksanakan oleh fakultas dan IPB.&nbsp;&nbsp; Kegiatan ini diikuti oleh Dekan FMIPA, dosen pengajar PSIK, dosen mata kuliah wajib universitas (PPKU) dan interdepartemen. Pada kegiatan ini, dilakukan perumusan <em>learning outcome</em> yang mengacu pada keluaran yang dibutuhkan pengguna dengan menggunakan standar ABET (<em>American Board for Engineering and Technology</em>) untuk Ilmu Komputer. Standar ABET digunakan untuk memantapkan learning outcome dan juga untuk persiapan akreditasi internasional agar lulusan PSIK dapat bersaing dengan kompetensi lulusan dari luar negeri.&nbsp; Finalisasi dari pra-lokakarya adalah lokakarya kurikulum yang dilakukan oleh fakultas untuk seluruh prodi (8 prodi) di FMIPA.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil dari peninjauan kurikulum pada tahun 2014 ini (pra-lokakarya di PSIK dan lokakarya di Fakultas) adalah perbaikan rumusan <em>learning outcome</em> , serta penambahan dan penghapusan mata kuliah yang disajikan pada tabel di bawah ini. Hingga sekarang, PSIK menggunakan kurikulum hasil peninjauan pada tahun 2014. Dokumen lengkap hasil peninjauan kurikulum pada saat visitasi.</span></p>'),
(6, 3, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PSIK berdiri sejak tahun 1992 berada di bawah FMIPA IPB. Sejak berdirinya hingga sekarang telah dilakukan lokakarya peninjauan kurikulum sebanyak 5 kali, yaitu pada tahun 1995, 2000, 2005, 2009, 2013. Kurikulum tahun 1995 dikembangkan dengan mengikuti kurikulum nasional dengan kurikulum program sejenis lainnya di dalam maupun luar negeri, ditambah dengan beberapa muatan yang mencirikan&nbsp; karakteristik lokal. Mulai tahun 2000, IPB mencanangkan sebagai embrio universitas berbasis riset, yang salah satu wujud nyatanya adalah dibentuknya lab keilmuan di level program studi.&nbsp; Sejalan dengan kebijakan tersebut, maka dari aspek kurikulum juga mengalami perubahan mendasar, untuk itu dilakukan lokakarya kurikulum pada tahun 2000.&nbsp; Pada tahun 2005 terdapat evaluasi lab keilmuan dan mandat departemen oleh IPB serta arah perkembangan riset IPB.&nbsp; Oleh karena itu, pada tahun 2005 dilaksanakan peninjauan kurikulum yang ketiga.&nbsp; Setelah 4 tahun berjalan, maka pada tahun 2009 di program studi diselenggarakan diskusi untuk mengevaluasi kembali visi-misi serta arah perkembangan organisasi ke depan. Bersamaan dengan ini maka pada tahun 2009, dilaksanakan peninjauan kurikulum. Selanjutnya, dengan adanya perkembangan sistem kurikulum nasional KKNI (Kerangka Kualifikasi Nasional Indonesia), maka kurikulum PSIK mengalami peninjauan kembali dan ini dilakukan pada tahun 2013. Semua peninjauan kurikulum yang telah dilakukan oleh PSIK di atas, dilakukan secara mandiri dengan melibatkan dosen PSIK, dosen IPB terkait, alumni, pengguna lulusan, serta mengacu pada: 1) dokumen perkembangan keilmuan bidang komputer seperti yang tertera pada dokumen asosiasi internasional (seperti: <em>Computing Curricula</em> 2005, 2009, dan 2013), juga dokumen prodi sejenis di perguruan tinggi lain; 2) visi misi institusi dan perubahan sistem kurikulum di IPB (misal adanya sistem kurikulum Mayor-Minor pada tahun 2005); dan 3) perkembangan kebutuhan pengguna lulusan PSIK. Alumni, pengguna lulusan, dan Pakar memberikan informasi perkembangan terbaru di bidang ilmu komputer dan teknologi informasi melalui melalui kegiatan kuliah umum, workshop, dan diskusi-diskusi internal dengan dosen dan mahasiswa PSIK. Informasi tersebut menjadi masukan dalam perumusan kurikulum PSIK.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum9`
--

CREATE TABLE `kurikulum9` (
  `id_kurikulum9` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_mk_kurikulum9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mk_kurikulum9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mk_blh_kurikulum9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_haki` int(11) NOT NULL,
  `id_hoki` int(11) NOT NULL,
  `alasan_kurikulum9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `usulan_kurikulum9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `berlaku_kurikulum9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_kurikulum9` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurikulum9`
--

INSERT INTO `kurikulum9` (`id_kurikulum9`, `id_departemen`, `nama_mk_kurikulum9`, `kode_mk_kurikulum9`, `mk_blh_kurikulum9`, `id_haki`, `id_hoki`, `alasan_kurikulum9`, `usulan_kurikulum9`, `berlaku_kurikulum9`, `tahun_kurikulum9`, `created_at`, `updated_at`) VALUES
(157, 6, 'Kimia Umum', 'KIM100', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Kimia yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Kimia Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', '2018', NULL, '2018-10-03 18:26:37'),
(159, 3, 'Pengantar Teknologi Geospasial', 'KOM341', 'Lama', 1, 2, 'Alasan 1', 'Tim 1', 'Ganjil 2017/2018', '2018', NULL, '2018-09-27 11:58:19'),
(160, 3, 'Temu Kembali Informasi', 'KOM431', 'Baru', 1, 1, 'Alasan 2', 'Tim 3', 'Ganjil 2017/2018', '2018', NULL, '2018-09-27 13:24:45'),
(161, 6, 'Biologi Umum', 'BIO101', 'Lama', 1, 1, 'Mata kuliah kimia merupakan MK wajib di IPB. Namun, untuk mahasiswa PSIK sebaiknya mengambil mata kuliah Biologi yang tidak ada SKS praktikumnya. Oleh karena itu, diusulkan untuk mengambil MK Biologi Umum', 'Dosen, mahasiswa, dan alumni.', '2014/2015', '2018', '2018-10-03 18:27:26', '2018-10-03 18:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulumf`
--

CREATE TABLE `kurikulumf` (
  `id_kurikulumf` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `isi_kurikulumf` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_kurikulumf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurikulumf`
--

INSERT INTO `kurikulumf` (`id_kurikulumf`, `id_departemen`, `isi_kurikulumf`, `tahun_kurikulumf`, `created_at`, `updated_at`) VALUES
(98, 10, 'Fakultas memiliki peran dalam mengkoordinasi kegiatan akademik di tingkat fakultas termasuk dalam pengembangan kurikulum.  Pengembangan kurikulum yang dilakukan sejalan dengan kebijakan IPB, misalnya pada tahun 2013 telah dimulai pembahasan/penyiapan kurikulum di masing-masing Departemen di FMIPA dengan persiapan kurikulum berbasis KKNI. Dalam kegiatan evaluasi sistem dan kurikulum, setiap Departemen telah melakukan evaluasi kurikulum pada tahun 2005. Selanjutnya dilakukan lokakarya evaluasi kurikulum di tingkat FMIPA pada tanggal 10 Desember 2010. FMIPA memfasilitasi kegiatan lokakarya kurikulum di tingkat Departemen dan Fakultas termasuk menyediakan dana sesuai dengan yang dibutuhkan. Selanjutnya pada tahun 2013 dimana IPB memutuskan akan melaksanakan kurikulum berbasis Learning Outcome sejalan dengan standar KKNI, maka mulai dilakukan persiapan mulai dari tingkat Departemen untuk menyiapkan kurikulum untuk Tingkat Persiapan Bersama, kemudian dilanjutkan untuk jenjang yang lebih tinggi yaitu tingkat II sampai tingkat akhir sehingga pada akhir tahun 2014 telah terdapat Kurikulum berbasis KKNI untuk semua Departemen di IPB dan mulai dilaksanakan pada tahun 2015. FMIPA mengkoordinasi Departemen dengan kompetensi yang beragam, sehingga perlu untuk memfasilitasi Departemen-departemen yang ada melalui penyelenggaraan perkuliahan maupun praktikum bersama pada mata kuliah inter-departemen. Fakultas juga berperan dalam menentukan kurikulum IPB di tingkat dasar dengan merancang perkuliahan yang sesuai dengan kebutuhan masing-masing Fakultas di IPB. FMIPA menyediakan tempat untuk penyelenggaraan lokakarya kurikulum pada tingkat Fakultas dengan mengundang nara sumber baik dari internal IPB seperti ibu Ir. Lien Herlina, MSc dan Direktur Pengembangan Program Akademik (PPA) IPB untuk memberikan pengertian KKNI serta cara menyusun LO untuk masing-masing program studi dan akhirnya mata kuliah.  FMIPA memiliki pendanaan yang berasal dari BPPTN untuk kegiatan ini.  Pada akhir tahun 2014 telah terbentuk kurikulum KKNI di masing-masing Departemen yang ada di lingkungan FMIPA.\n', '2018', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kurikulumfmipa`
--

CREATE TABLE `kurikulumfmipa` (
  `id_kurikulumfmipa` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `kurikulumf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulumfmipa`
--

INSERT INTO `kurikulumfmipa` (`id_kurikulumfmipa`, `id_departemen`, `kurikulumf`) VALUES
(5, 10, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Fakultas memiliki peran dalam mengkoordinasi kegiatan akademik di tingkat fakultas termasuk dalam pengembangan kurikulum.&nbsp; Pengembangan kurikulum yang dilakukan sejalan dengan kebijakan IPB, misalnya pada tahun 2013 telah dimulai pembahasan/penyiapan kurikulum di masing-masing Departemen di FMIPA dengan persiapan kurikulum berbasis KKNI.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam kegiatan evaluasi sistem dan kurikulum, setiap Departemen telah melakukan evaluasi kurikulum pada tahun 2005. Selanjutnya dilakukan lokakarya evaluasi kurikulum di tingkat FMIPA pada tanggal 10 Desember 2010. FMIPA memfasilitasi kegiatan lokakarya kurikulum di tingkat Departemen dan Fakultas termasuk menyediakan dana sesuai dengan yang dibutuhkan. Selanjutnya pada tahun 2013 dimana IPB memutuskan akan melaksanakan kurikulum berbasis <em>Learning Outcome</em> sejalan dengan standar KKNI, maka mulai dilakukan persiapan mulai dari tingkat Departemen untuk menyiapkan kurikulum untuk Tingkat Persiapan Bersama, kemudian dilanjutkan untuk jenjang yang lebih tinggi yaitu tingkat II sampai tingkat akhir sehingga pada akhir tahun 2014 telah terdapat Kurikulum berbasis KKNI untuk semua Departemen di IPB dan mulai dilaksanakan pada tahun 2015.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">FMIPA mengkoordinasi Departemen dengan kompetensi yang beragam, sehingga perlu untuk memfasilitasi Departemen-departemen yang ada melalui penyelenggaraan perkuliahan maupun praktikum bersama pada mata kuliah inter-departemen. Fakultas juga berperan dalam menentukan kurikulum IPB di tingkat dasar dengan merancang perkuliahan yang sesuai dengan kebutuhan masing-masing Fakultas di IPB. FMIPA menyediakan tempat untuk penyelenggaraan lokakarya kurikulum pada tingkat Fakultas dengan mengundang nara sumber baik dari internal IPB seperti ibu Ir. Lien Herlina, MSc dan Direktur Pengembangan Program Akademik (PPA) IPB untuk memberikan pengertian KKNI serta cara menyusun LO untuk masing-masing program studi dan akhirnya mata kuliah.&nbsp; FMIPA memiliki pendanaan yang berasal dari BPPTN untuk kegiatan ini.&nbsp; Pada akhir tahun 2014 telah terbentuk kurikulum KKNI di masing-masing Departemen yang ada di lingkungan FMIPA.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum_dep_1`
--

CREATE TABLE `kurikulum_dep_1` (
  `id_kurikulum_1` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum_dep_1`
--

INSERT INTO `kurikulum_dep_1` (`id_kurikulum_1`, `id_departemen`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 6, 'Isi Text', '2018-09-17 12:10:47', '2018-09-17 05:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum_dep_2`
--

CREATE TABLE `kurikulum_dep_2` (
  `id_kurikulum_2` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum_dep_2`
--

INSERT INTO `kurikulum_dep_2` (`id_kurikulum_2`, `id_departemen`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 6, 'Isi Text', '2018-09-17 12:35:10', '2018-09-17 05:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum_dep_3`
--

CREATE TABLE `kurikulum_dep_3` (
  `id_kurikulum_3` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum_dep_3`
--

INSERT INTO `kurikulum_dep_3` (`id_kurikulum_3`, `id_departemen`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 6, 'Isi Text', '2018-09-17 12:52:21', '2018-09-17 05:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum_dep_8`
--

CREATE TABLE `kurikulum_dep_8` (
  `id_kurikulum_8` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum_dep_8`
--

INSERT INTO `kurikulum_dep_8` (`id_kurikulum_8`, `id_departemen`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 6, 'Isi Text', '2018-09-17 13:42:45', '2018-09-17 06:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum_fakultas`
--

CREATE TABLE `kurikulum_fakultas` (
  `id_kurikulum` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum_fakultas`
--

INSERT INTO `kurikulum_fakultas` (`id_kurikulum`, `id_departemen`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 10, 'Secara umum jumlah dosen MIPA sudah memadai. Jumlah dosen yang bergelar S2 dan S3 mencapai 97.30% dengan proporsi terbesar adalah berpendidikan S3 yaitu sebesar 60.81%. Di samping itu, jumlah Guru Besar/Profesor mencapai 11.71% (26 orang) dari jumlah dosen FMIPA yang ada. Jumlah ini akan terus ditingkatkan hingga mencapai 20% dalam 5-10 tahun ke depan. Saat ini, jenjang kepangkatan dosen didominasi oleh Lektor (30.63%) dan Lektor Kepala (24.32%).  Selain itu di beberapa Departemen, terdapat 1 orang dosen yang sedang mengikuti program S2 dan 34 orang dosen yang mengikuti program S3 di dalam dan luar negeri. Dosen yang sekolah di dalam negeri dibiayai oleh beasiswa BPPS, sedangkan yang kuliah di luar negeri semua dibiayai beasiswa dari pemerintah maupun dari luar negeri. Pada beberapa Departemen, penelitian dan publikasi ilmiah dalam Jurnal Nasional dan Internasional relatif tinggi, sedangkan pada Departemen yang lain relatif rendah khususnya pada Departemen yang mendalami ilmu-ilmu dasar. \r\n\r\nBeberapa kendala yang dihadapi dalam pengembangan dosen tetap di FMIPA yaitu: (i) peluang mendapatkan beasiswa kuliah (bagi dosen muda) karena persaingan yang makin ketat, (ii) biaya penelitian untuk ilmu-ilmu dasar umumnya sulit untuk diperoleh, (iii) kemampuan Bahasa Inggris yang kurang membatasi peluang untuk publikasi internasional, (iv) pada beberapa Departemen, beban mengajar pada PPKU sangat tinggi sehingga mengurangi waktu untuk melaksanakan kegiatan penelitian dan diseminasi hasil penelitian.\r\n\r\nUntuk menjaga kesinambungan SDM dosen maka FMIPA telah membuat perencanaan SDM dosen hingga tahun 2030 seperti diberikan dalam Tabel 4.1, yang tertulis dalam  dokumen Kompilasi Man Power Planning Fakultas dan Departemen Institut Pertanian Bogor Tahun 2012 – 2030, dikeluarkan oleh Direktorat Sumber Daya Manusia, Institut Pertanian Bogor tahun 2012 (dokumen disediakan pada saat visitasi). Upaya peningkatan mutu dosen antara lain studi lanjut bagi dosen yang masih S2, pembentukan working group untuk meningkatkan kolaborasi dalam penelitian, pelatihan menulis proposal penelitian dan publikasi, bantuan dana bagi dosen yang akan mengikuti seminar, dan lainnya.', '2018-09-17 17:12:37', '2018-09-17 10:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `lain_lain_dana`
--

CREATE TABLE `lain_lain_dana` (
  `id_lain` int(11) NOT NULL,
  `id_terima_danaa` int(11) NOT NULL,
  `nama_lain_lain` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lain_lain_dana`
--

INSERT INTO `lain_lain_dana` (`id_lain`, `id_terima_danaa`, `nama_lain_lain`, `created_at`, `updated_at`) VALUES
(3, 43, 'a', '2018-09-25 17:59:04', '2018-09-25 17:59:04'),
(4, 44, 's', '2018-09-25 18:31:57', '2018-09-25 18:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_hasil`
--

CREATE TABLE `lampiran_hasil` (
  `id_lampiran` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_hasilPendidikan` int(11) NOT NULL,
  `lampiran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran_hasil`
--

INSERT INTO `lampiran_hasil` (`id_lampiran`, `id_departemen`, `id_hasilPendidikan`, `lampiran`) VALUES
(5, 3, 10, '[Update 270916] Tugas Praktikum 3 AI.pdf'),
(6, 3, 6, '[Update 270916] Tugas Praktikum 3 AI.pdf'),
(7, 6, 11, 'WhitePaper-1.pdf'),
(8, 6, 14, 'if.docx'),
(9, 6, 15, 'pdf penelitian.docx'),
(10, 6, 16, 'RegisterAndPrintEntryCard.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_hasilpen`
--

CREATE TABLE `lampiran_hasilpen` (
  `id_lampiranPen` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_hasilPenelitian` int(11) NOT NULL,
  `lampiranPen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran_hasilpen`
--

INSERT INTO `lampiran_hasilpen` (`id_lampiranPen`, `id_departemen`, `id_hasilPenelitian`, `lampiranPen`) VALUES
(1, 6, 3, 'if.docx'),
(2, 6, 3, 'if.docx');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_sdm3`
--

CREATE TABLE `lampiran_sdm3` (
  `id_lampiran_sdm3` int(11) NOT NULL,
  `id_sdm3` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `lampiransdm3` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran_sdm3`
--

INSERT INTO `lampiran_sdm3` (`id_lampiran_sdm3`, `id_sdm3`, `id_departemen`, `lampiransdm3`) VALUES
(5, 15, 3, 'PERMEN-NOMOR-32-TAHUN-2016-TENTANG-AKREDITASI-PRODI-DAN-PT-SALINAN.pdf'),
(6, 20, 3, 'WhitePaper-1.pdf'),
(14, 16, 3, 'Top 10 Reasons Why Systems Projects Fail.pdf'),
(15, 21, 6, '[Update 270916] Tugas Praktikum 3 AI.pdf'),
(27, 22, 3, 'aaa.pdf'),
(30, 24, 6, 'd41fd19c83ead082f065c9ef96ae48011cf4.pdf'),
(31, 26, 6, 'Penyebab-Kegagalan-dan-Kesuksesan-Sistem-Informasi.pdf'),
(32, 27, 6, 'Cetak.pdf'),
(34, 29, 6, 'Capture.PNG'),
(35, 34, 6, 'Capture.PNG'),
(36, 34, 6, 'a.PNG'),
(37, 35, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA.docx'),
(38, 36, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(39, 37, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA.docx'),
(40, 41, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(41, 45, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(42, 46, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (2).docx'),
(43, 47, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(44, 48, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (2).docx'),
(45, 49, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (2).docx'),
(46, 50, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (2) (1).docx'),
(47, 51, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA.docx'),
(48, 52, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA.docx'),
(49, 53, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (2).docx'),
(50, 54, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(51, 55, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(52, 56, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (2) (1).docx'),
(53, 57, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(54, 58, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (1).docx'),
(55, 59, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (1).docx'),
(56, 60, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (1).docx'),
(57, 61, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (1) (1).docx'),
(58, 62, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (1) (1).docx'),
(59, 64, 6, 'Data Contoh.docx'),
(60, 66, 6, 'Data Contoh.docx'),
(61, 71, 6, 'Data Contoh.docx'),
(62, 76, 6, 'Data Contoh.docx'),
(63, 77, 6, 'Data Contoh.docx'),
(64, 80, 6, 'Data.docx'),
(65, 101, 6, 'Data.docx'),
(66, 102, 6, 'Data.docx'),
(67, 111, 3, 'Data.docx'),
(68, 111, 1, 'Data.docx'),
(69, 111, 1, 'Data.docx'),
(70, 113, 6, 'Data.docx'),
(71, 127, 6, 'Data.docx'),
(72, 136, 6, 'Data.docx'),
(73, 140, 3, 'Data.docx'),
(74, 139, 3, 'Data.docx'),
(75, 142, 6, 'Data.docx'),
(76, 142, 6, 'Data.docx'),
(77, 141, 6, 'Data.docx'),
(78, 136, 6, 'Lampiran.docx'),
(79, 141, 6, 'Lampiran.docx'),
(80, 142, 6, 'Lampiran.docx'),
(81, 141, 6, 'Lampiran.docx'),
(82, 142, 6, 'Lampiran.docx');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_sdm4`
--

CREATE TABLE `lampiran_sdm4` (
  `id_lampiran_sdm4` int(11) NOT NULL,
  `id_sdm4` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `lampiransdm4` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran_sdm4`
--

INSERT INTO `lampiran_sdm4` (`id_lampiran_sdm4`, `id_sdm4`, `id_departemen`, `lampiransdm4`) VALUES
(5, 15, 3, 'PERMEN-NOMOR-32-TAHUN-2016-TENTANG-AKREDITASI-PRODI-DAN-PT-SALINAN.pdf'),
(6, 20, 3, 'WhitePaper-1.pdf'),
(14, 16, 3, 'Top 10 Reasons Why Systems Projects Fail.pdf'),
(15, 21, 6, '[Update 270916] Tugas Praktikum 3 AI.pdf'),
(27, 22, 3, 'aaa.pdf'),
(30, 24, 6, 'd41fd19c83ead082f065c9ef96ae48011cf4.pdf'),
(31, 26, 6, 'Penyebab-Kegagalan-dan-Kesuksesan-Sistem-Informasi.pdf'),
(32, 27, 6, 'Cetak.pdf'),
(34, 29, 6, 'Capture.PNG'),
(35, 34, 6, 'Capture.PNG'),
(36, 34, 6, 'a.PNG'),
(37, 35, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA.docx'),
(38, 36, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(39, 37, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA.docx'),
(40, 41, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(41, 45, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(42, 46, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (2).docx'),
(43, 47, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(44, 48, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (2).docx'),
(45, 49, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (2).docx'),
(46, 50, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (2) (1).docx'),
(47, 51, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA.docx'),
(48, 52, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA.docx'),
(49, 53, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (2).docx'),
(50, 54, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(51, 55, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(52, 56, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (2) (1).docx'),
(53, 57, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(54, 58, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (1).docx'),
(55, 59, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (1).docx'),
(56, 60, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (1).docx'),
(57, 61, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (1) (1).docx'),
(58, 62, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA.docx'),
(59, 63, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(60, 64, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (2).docx'),
(61, 65, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA.docx'),
(62, 68, 6, 'Data Sample.docx'),
(63, 69, 6, 'Data Sample.docx'),
(64, 76, 6, 'Data.docx'),
(65, 77, 6, 'Data.docx'),
(66, 80, 3, 'Data.docx'),
(67, 80, 1, 'Data.docx'),
(68, 82, 6, 'Data.docx'),
(69, 81, 6, 'Data.docx'),
(70, 84, 3, 'Data.docx'),
(71, 85, 3, 'Data.docx'),
(72, 86, 6, 'Data.docx'),
(73, 86, 6, 'Data.docx'),
(74, 81, 6, 'Data.docx');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_sdm8`
--

CREATE TABLE `lampiran_sdm8` (
  `id_lampiran_sdm8` int(11) NOT NULL,
  `id_sdm8` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `lampiransdm8` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran_sdm8`
--

INSERT INTO `lampiran_sdm8` (`id_lampiran_sdm8`, `id_sdm8`, `id_departemen`, `lampiransdm8`) VALUES
(5, 15, 3, 'PERMEN-NOMOR-32-TAHUN-2016-TENTANG-AKREDITASI-PRODI-DAN-PT-SALINAN.pdf'),
(6, 20, 3, 'WhitePaper-1.pdf'),
(14, 16, 3, 'Top 10 Reasons Why Systems Projects Fail.pdf'),
(15, 21, 6, '[Update 270916] Tugas Praktikum 3 AI.pdf'),
(27, 22, 3, 'aaa.pdf'),
(30, 24, 6, 'd41fd19c83ead082f065c9ef96ae48011cf4.pdf'),
(31, 26, 6, 'Penyebab-Kegagalan-dan-Kesuksesan-Sistem-Informasi.pdf'),
(32, 27, 6, 'Cetak.pdf'),
(34, 29, 6, 'Capture.PNG'),
(35, 34, 6, 'Capture.PNG'),
(36, 34, 6, 'a.PNG'),
(37, 35, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA.docx'),
(38, 36, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(39, 37, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA.docx'),
(40, 41, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(41, 45, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(42, 46, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (2).docx'),
(43, 47, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(44, 48, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (2).docx'),
(45, 49, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (2).docx'),
(46, 50, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (2) (1).docx'),
(47, 51, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA.docx'),
(48, 52, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA.docx'),
(49, 53, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (2).docx'),
(50, 54, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(51, 55, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(52, 56, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (2) (1).docx'),
(53, 57, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(54, 58, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (1).docx'),
(55, 59, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (1).docx'),
(56, 60, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (1).docx'),
(57, 61, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1) (1) (1).docx'),
(58, 62, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA.docx'),
(59, 63, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(60, 64, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (2).docx'),
(61, 65, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(62, 66, 6, 'BUKU 3A-BORANG AKREDITASI SARJANA (1).docx'),
(63, 70, 6, 'Data.docx'),
(64, 71, 6, 'Data.docx'),
(65, 72, 6, 'Data (1).docx'),
(66, 76, 6, 'Data.docx'),
(67, 78, 6, 'Data.docx'),
(68, 76, 3, 'Data.docx'),
(69, 78, 3, 'Data.docx'),
(70, 76, 1, 'Data.docx'),
(71, 78, 1, 'Data.docx'),
(72, 79, 6, 'Data.docx'),
(73, 80, 6, 'Data.docx'),
(74, 76, 3, 'Data.docx'),
(75, 78, 3, 'Data.docx'),
(76, 79, 6, 'Lampiran.docx');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_standar1`
--

CREATE TABLE `lampiran_standar1` (
  `id_lampiranstan1` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_lampiran` varchar(255) NOT NULL,
  `kode_lampiran` text NOT NULL,
  `lemari_rak` text NOT NULL,
  `lampiran_standar1` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran_standar1`
--

INSERT INTO `lampiran_standar1` (`id_lampiranstan1`, `id_departemen`, `nama_lampiran`, `kode_lampiran`, `lemari_rak`, `lampiran_standar1`, `created_at`, `updated_at`) VALUES
(4, 6, 'Dokumen tentang jaminan mutu', 'PP001', '01', 'Dokumen tentang jaminan mutu (1).docx', '2018-10-04 17:00:27', '2018-10-04 10:00:27'),
(5, 3, 'Visi', '', '', 'Dokumen tentang jaminan mutu.docx', '2018-10-02 19:18:09', '2018-10-02 19:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_standar2`
--

CREATE TABLE `lampiran_standar2` (
  `id_lampiranstan2` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_lampiran2` text NOT NULL,
  `kode_lampiran` text NOT NULL,
  `lemari_rak` text NOT NULL,
  `lampiran_standar2` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran_standar2`
--

INSERT INTO `lampiran_standar2` (`id_lampiranstan2`, `id_departemen`, `nama_lampiran2`, `kode_lampiran`, `lemari_rak`, `lampiran_standar2`, `created_at`, `updated_at`) VALUES
(1, 6, 'Standar', 'PP001', '01', 'Dokumen tentang jaminan mutu.docx', '2018-10-09 16:17:08', '2018-10-09 09:17:08'),
(2, 4, 'sk rektor ttg penilaian uts', '', '', 'Dokumen tentang jaminan mutu.docx', '2018-09-30 20:59:30', '2018-09-30 20:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `lulusans`
--

CREATE TABLE `lulusans` (
  `id_lulusan` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_skripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembimbing1` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembimbing2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ijazah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_masuk` date NOT NULL,
  `tahun_lulus` date NOT NULL,
  `total_bulan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lulusans`
--

INSERT INTO `lulusans` (`id_lulusan`, `id_departemen`, `nama`, `nim`, `judul_skripsi`, `pembimbing1`, `pembimbing2`, `no_ijazah`, `tahun_masuk`, `tahun_lulus`, `total_bulan`, `total_tahun`, `ipk`, `created_at`, `updated_at`) VALUES
(44, 4, 'hh', 'G412122', 'hh', 'hh', 'h', 'hh', '2011-06-13', '2015-06-20', '48.93', '4.08', '3', '2018-03-30 08:02:20', '2018-04-25 08:27:19'),
(45, 4, 'uu', 'G413122', 'uu', 'uu', NULL, 'uu', '2014-03-30', '2018-10-10', '55.5', '4.55', '3.2', '2018-03-30 09:01:46', '2018-03-31 05:35:59'),
(46, 4, 'ii', 'G4131311', 'ii', 'ii', NULL, 'ii', '2013-03-11', '2017-01-01', '46.40', '3.87', '2.75', '2018-03-30 09:02:27', '2018-04-25 08:26:15'),
(47, 6, 'gghlmhn', 'G6121211', 'ggh', 'gg', NULL, 'ggh', '2015-03-31', '2019-10-12', '54.6', '4.54', '4', '2018-03-30 12:41:59', '2018-04-05 17:50:29'),
(49, 2, 'coba dulu deh', 'G21411122', 'cc', 'cobaa', NULL, 'cc', '2014-03-11', '2018-02-02', '47.47', '3.96', '3.4', '2018-03-30 19:57:23', '2018-04-25 08:08:47'),
(51, 1, 'eneng', 'G16121211', 'Pencarian lalalaa', 'bu eneng', NULL, 'a12122', '2012-01-29', '2016-10-22', '57.60', '4.80', '3.33', '2018-03-31 05:26:49', '2018-04-25 08:00:13'),
(52, 3, 'ucup', 'G312121', 'lalallalaa', 'pak ucup', 'pak udin', 'g12121', '2013-03-04', '2017-06-25', '52.47', '4.37', '3.6', '2018-03-31 05:29:34', '2018-04-25 08:05:31'),
(53, 5, 'bubu', 'G5413121', 'bababaa', 'bu lala', 'bu lili', 'a21211', '2014-05-12', '2018-05-28', '49.23', '4.10', '3.89', '2018-03-31 05:32:40', '2018-04-25 08:28:32'),
(54, 1, 'ceuceu', 'G1121212', 'lalalalaaa', 'Bu Neneng', NULL, 'a213132', '2013-03-11', '2017-09-10', '54.80', '4.57', '3.89', '2018-03-31 05:40:22', '2018-04-25 08:00:43'),
(55, 7, 'Dina', 'G7131210', 'dina aaa', 'Bu Neneng', NULL, 'da12121', '2013-03-11', '2017-11-29', '57.47', '4.79', '3.7', '2018-03-31 05:44:17', '2018-04-25 08:29:41'),
(56, 8, 'Lulu', 'G8414119', 'Lulluuuu', 'Bu Lala', NULL, 'g1233112', '2014-03-17', '2018-09-17', '54.83', '4.57', '3.61', '2018-03-31 05:46:13', '2018-04-25 08:31:38'),
(57, 9, 'Aktu', 'G9121300', 'Akakaka', 'Pak Kaka', NULL, 'g23411', '2012-03-12', '2017-02-10', '59.87', '4.99', '3.76', '2018-03-31 05:49:34', '2018-04-25 08:32:18'),
(60, 6, 'hahaa', 'G67893330', 'hhaaa', 'hahaa', NULL, 'hh2121', '2013-04-01', '2017-12-01', '56.25', '4.5', '3.8', '2018-03-31 21:38:18', '2018-04-02 08:45:18'),
(61, 1, 'jjj', 'k', 'k', 'k', 'jjjj', 'k', '2002-12-20', '2007-01-10', '60', '4', '3', NULL, NULL),
(62, 2, 'meri k', 'G2141211', 'laalaaa', 'laaaaa', 'kaakaaa', 'as22222', '2014-04-07', '2018-09-01', '53.60', '4.47', '3.5', '2018-04-02 23:51:14', '2018-04-25 08:09:13'),
(65, 1, 'll', 'G1121211', 'll', 'll', NULL, 'll', '2014-04-07', '2018-04-28', '49.40', '4.12', '3', '2018-04-04 10:35:39', '2018-04-25 08:01:47'),
(68, 6, 'lama', 'G6410001', 'aa', 'aa', NULL, 'aa', '2010-10-12', '2014-03-11', '41.16', '3.41', '4.00', '2018-04-07 02:04:21', '2018-04-07 02:04:21'),
(72, 6, 'Meri', 'G6121214', 'judulnya', 'Lalala', 'Liliii', 'a121311', '2010-06-15', '2014-07-15', '49.70', '4.14', '3.5', '2018-04-07 23:56:33', '2018-04-07 23:56:33'),
(73, 6, 'Baba', 'G6121216', 'pengembangan', 'lalaa', NULL, 'a11202', '2013-06-18', '2017-06-13', '48.53', '4.04', '2.74', '2018-04-08 08:14:48', '2018-04-13 23:06:43'),
(74, 6, 'Cici', 'G6110001', 'Cici', 'luluuu', NULL, 'a11210', '2011-06-15', '2015-07-22', '49.93', '4.16', '2.74', '2018-04-08 08:38:05', '2018-04-08 08:38:05'),
(75, 6, 'Cece', 'G6210100', 'pencarian', 'jajaa', NULL, 'a121122', '2013-06-11', '2016-08-17', '38.77', '3.23', '3.7', '2018-04-08 08:41:19', '2018-04-08 08:41:19'),
(76, 6, 'Kakaa', 'G61300001', 'Kakaka', 'kokoo', NULL, 'k12113', '2013-06-05', '2017-09-22', '52.33', '4.36', '2.68', '2018-04-08 08:44:38', '2018-04-08 08:44:38'),
(77, 6, 'Dadan', 'G6100001', 'Dududdu lll', 'Didin', NULL, 'a12121', '2010-06-16', '2014-03-20', '45.77', '3.81', '2.4', '2018-04-08 09:00:56', '2018-04-12 05:38:42'),
(78, 6, 'Cucu', 'G6110002', 'cacaaaa', 'laaaa', NULL, 'a21131', '2010-06-15', '2014-06-20', '48.87', '4.07', '2.69', '2018-04-08 10:38:50', '2018-04-08 10:38:50'),
(82, 6, 'Lala', 'G6100000', 'la', 'la', NULL, 'la', '2009-06-12', '2014-02-20', '57.13', '4.76', '3.50', '2018-04-12 04:49:16', '2018-04-13 23:05:34'),
(83, 6, 'jj', 'G64140050', 'kkkkk', 'kk', NULL, 'kk', '2014-06-10', '2018-07-20', '50.03', '4.17', '3.57', '2018-04-13 23:08:42', '2018-04-13 23:08:42'),
(84, 8, 'ceuceu', 'G8414110', 'udududu', 'Taata', NULL, 'a121239', '2014-06-09', '2018-08-13', '50.87', '4.24', '3.73', '2018-04-25 08:34:31', '2018-04-25 08:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_terlibat`
--

CREATE TABLE `mahasiswa_terlibat` (
  `id_terlibatpenelitian` int(11) NOT NULL,
  `terlibat_penelitian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa_terlibat`
--

INSERT INTO `mahasiswa_terlibat` (`id_terlibatpenelitian`, `terlibat_penelitian`) VALUES
(1, 'Ya'),
(2, 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah_pilihan`
--

CREATE TABLE `mata_kuliah_pilihan` (
  `id_mata_kuliah_pilihan` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_mk_kurikulum6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mk_kurikulum6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_semesterr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jumlah_sks` int(11) NOT NULL,
  `id_bobottugas` int(11) NOT NULL,
  `pengelola` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mata_kuliah_pilihan`
--

INSERT INTO `mata_kuliah_pilihan` (`id_mata_kuliah_pilihan`, `id_departemen`, `nama_mk_kurikulum6`, `kode_mk_kurikulum6`, `id_semesterr`, `id_jumlah_sks`, `id_bobottugas`, `pengelola`, `created_at`, `updated_at`) VALUES
(11, 1, 'Pengantar Sistem Tertanam Dan Robotika', 'KOM415', '5', 3, 1, 'Ilmu Komputer', '2018-09-12 02:57:16', '2018-10-03 18:09:10'),
(12, 1, 'Pengantar Teknologi Geospasial', 'KOM341', '5', 3, 2, 'Ilmu Komputer', NULL, '2018-09-27 13:18:49'),
(13, 1, 'Temu Kembali Informasi', 'KOM431', '5', 3, 2, 'Ilmu Komputer', NULL, '2018-09-27 10:26:30'),
(21, 2, 'Pengantar Sistem Tertanam Dan Robotika', 'KOM415', '5', 3, 1, 'Ilmu Komputer', '2018-09-12 02:57:16', '2018-10-03 18:09:10'),
(22, 2, 'Pengantar Teknologi Geospasial', 'KOM341', '5', 3, 2, 'Ilmu Komputer', NULL, '2018-09-27 13:18:49'),
(23, 2, 'Temu Kembali Informasi', 'KOM431', '5', 3, 2, 'Ilmu Komputer', NULL, '2018-09-27 10:26:30'),
(31, 3, 'Pengantar Sistem Tertanam Dan Robotika', 'KOM415', '5', 3, 1, 'Ilmu Komputer', '2018-09-12 02:57:16', '2018-10-03 18:09:10'),
(32, 3, 'Pengantar Teknologi Geospasial', 'KOM341', '5', 3, 2, 'Ilmu Komputer', NULL, '2018-09-27 13:18:49'),
(33, 3, 'Temu Kembali Informasi', 'KOM431', '5', 3, 2, 'Ilmu Komputer', NULL, '2018-09-27 10:26:30'),
(41, 4, 'Pengantar Sistem Tertanam Dan Robotika', 'KOM415', '5', 3, 1, 'Ilmu Komputer', '2018-09-12 02:57:16', '2018-10-03 18:09:10'),
(42, 4, 'Pengantar Teknologi Geospasial', 'KOM341', '5', 3, 2, 'Ilmu Komputer', NULL, '2018-09-27 13:18:49'),
(43, 4, 'Temu Kembali Informasi', 'KOM431', '5', 3, 2, 'Ilmu Komputer', NULL, '2018-09-27 10:26:30'),
(51, 5, 'Pengantar Sistem Tertanam Dan Robotika', 'KOM415', '5', 3, 1, 'Ilmu Komputer', '2018-09-12 02:57:16', '2018-10-03 18:09:10'),
(52, 5, 'Pengantar Teknologi Geospasial', 'KOM341', '5', 3, 2, 'Ilmu Komputer', NULL, '2018-09-27 13:18:49'),
(53, 5, 'Temu Kembali Informasi', 'KOM431', '5', 3, 2, 'Ilmu Komputer', NULL, '2018-09-27 10:26:30'),
(61, 6, 'Pengantar Sistem Tertanam Dan Robotika', 'KOM415', '5', 3, 1, 'Ilmu Komputer', '2018-09-12 02:57:16', '2018-12-03 16:59:02'),
(62, 6, 'Pengantar Teknologi Geospasial', 'KOM341', '5', 3, 2, 'Ilmu Komputer', NULL, '2018-09-27 13:18:49'),
(63, 6, 'Temu Kembali Informasi', 'KOM431', '5', 3, 2, 'Ilmu Komputer', NULL, '2018-12-03 16:49:17'),
(71, 7, 'Pengantar Sistem Tertanam Dan Robotika', 'KOM415', '5', 3, 1, 'Ilmu Komputer', '2018-09-12 02:57:16', '2018-10-03 18:09:10'),
(72, 7, 'Pengantar Teknologi Geospasial', 'KOM341', '5', 3, 2, 'Ilmu Komputer', NULL, '2018-09-27 13:18:49'),
(73, 7, 'Temu Kembali Informasi', 'KOM431', '5', 3, 2, 'Ilmu Komputer', NULL, '2018-09-27 10:26:30'),
(81, 8, 'Pengantar Sistem Tertanam Dan Robotika', 'KOM415', '5', 3, 1, 'Ilmu Komputer', '2018-09-12 02:57:16', '2018-10-03 18:09:10'),
(82, 8, 'Pengantar Teknologi Geospasial', 'KOM341', '5', 3, 2, 'Ilmu Komputer', NULL, '2018-09-27 13:18:49'),
(83, 8, 'Temu Kembali Informasi', 'KOM431', '5', 3, 2, 'Ilmu Komputer', NULL, '2018-09-27 10:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `mekanisme_peninjauan_kurikulum`
--

CREATE TABLE `mekanisme_peninjauan_kurikulum` (
  `id_mekanisme_peninjauan_kurikulum` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan_mekanisme_peninjauan_kurikulum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mekanisme_peninjauan_kurikulum`
--

INSERT INTO `mekanisme_peninjauan_kurikulum` (`id_mekanisme_peninjauan_kurikulum`, `id_departemen`, `keterangan_mekanisme_peninjauan_kurikulum`) VALUES
(1, 1, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PSIK berdiri sejak tahun 1992 berada di bawah FMIPA IPB. Sejak berdirinya hingga sekarang telah dilakukan lokakarya peninjauan kurikulum sebanyak 5 kali, yaitu pada tahun 1995, 2000, 2005, 2009, 2013. Kurikulum tahun 1995 dikembangkan dengan mengikuti kurikulum nasional dengan kurikulum program sejenis lainnya di dalam maupun luar negeri, ditambah dengan beberapa muatan yang mencirikan&nbsp; karakteristik lokal. Mulai tahun 2000, IPB mencanangkan sebagai embrio universitas berbasis riset, yang salah satu wujud nyatanya adalah dibentuknya lab keilmuan di level program studi.&nbsp; Sejalan dengan kebijakan tersebut, maka dari aspek kurikulum juga mengalami perubahan mendasar, untuk itu dilakukan lokakarya kurikulum pada tahun 2000.&nbsp; Pada tahun 2005 terdapat evaluasi lab keilmuan dan mandat departemen oleh IPB serta arah perkembangan riset IPB.&nbsp; Oleh karena itu, pada tahun 2005 dilaksanakan peninjauan kurikulum yang ketiga.&nbsp; Setelah 4 tahun berjalan, maka pada tahun 2009 di program studi diselenggarakan diskusi untuk mengevaluasi kembali visi-misi serta arah perkembangan organisasi ke depan. Bersamaan dengan ini maka pada tahun 2009, dilaksanakan peninjauan kurikulum. Selanjutnya, dengan adanya perkembangan sistem kurikulum nasional KKNI (Kerangka Kualifikasi Nasional Indonesia), maka kurikulum PSIK mengalami peninjauan kembali dan ini dilakukan pada tahun 2013. Semua peninjauan kurikulum yang telah dilakukan oleh PSIK di atas, dilakukan secara mandiri dengan melibatkan dosen PSIK, dosen IPB terkait, alumni, pengguna lulusan, serta mengacu pada: 1) dokumen perkembangan keilmuan bidang komputer seperti yang tertera pada dokumen asosiasi internasional (seperti: <em>Computing Curricula</em> 2005, 2009, dan 2013), juga dokumen prodi sejenis di perguruan tinggi lain; 2) visi misi institusi dan perubahan sistem kurikulum di IPB (misal adanya sistem kurikulum Mayor-Minor pada tahun 2005); dan 3) perkembangan kebutuhan pengguna lulusan PSIK. Alumni, pengguna lulusan, dan Pakar memberikan informasi perkembangan terbaru di bidang ilmu komputer dan teknologi informasi melalui melalui kegiatan kuliah umum, workshop, dan diskusi-diskusi internal dengan dosen dan mahasiswa PSIK. Informasi tersebut menjadi masukan dalam perumusan kurikulum PSIK.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam menyusun kurikulum, sebagai pertimbangan adalah visi universitas, visi fakultas dan program studi, dikaitkan dengan topik-topik riset yang telah dilakukan, pandangan berbagai pihak mengenai perkembangan ilmu ke depan (pada berbagai bidang, dan khususnya bidang llmu komputer) yang diperoleh dari pakar maupun dokumen yang relevan, serta dokumen kurikulum dari asosiasi dan institusi sejenis di dalam dan di luar negeri yang dipergunakan sebagai bahan komparasi. Untuk meningkatkan relevansinya dengan pasar tenaga kerja, maka evaluasi kurikulum juga menggunakan masukan alumni dan pengguna lulusan sebagai bahan pertimbangan (pembahasan lebih jelasnya dapat dilihat pada Standar 3 butir 3.3.1.b). Dengan demikian, kurikulum yang dikembangkan sejalan dengan <em>trend</em> perkembangan ilmu masa depan, relevan dengan pasar, dan&nbsp; dalam <em>track</em> yang sejalan untuk mencapai visi-misi lembaga (program studi, fakultas dan universitas).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil utama peninjauan kurikulum adalah berupa penyempurnaan visi, misi, tujuan, dan target sasaran, penyusunan rumusan <em>learning outcome </em>(LO) PSIK dan penjabarannya, penentuan topik dan mata kuliah serta pemetaannya (antara mata kuliah dengan LO), diagram keterkaitan antar mata kuliah, deskripsi serta alokasi ke setiap semesternya.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada tahun 2014, terdapat penyempurnaan KKNI oleh pemerintah juga IPB secara keseluruhan semua prodi diminta untuk melakukan peninjauan kurikulum kembali yang akan diberlakukan pada tahun 2015. Oleh karena itu, PSIK melakukan pra-lokakarya pada Tahun 2014.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pralokakarya ini dilakukan sebagai langkah untuk merancang kurikulum sesuai dengan perkembangan IPTEK dan keinginan pengguna dan sebagai persiapan kegiatan lokakarya yang dilaksanakan oleh fakultas dan IPB.&nbsp;&nbsp; Kegiatan ini diikuti oleh Dekan FMIPA, dosen pengajar PSIK, dosen mata kuliah wajib universitas (PPKU) dan interdepartemen. Pada kegiatan ini, dilakukan perumusan <em>learning outcome</em> yang mengacu pada keluaran yang dibutuhkan pengguna dengan menggunakan standar ABET (<em>American Board for Engineering and Technology</em>) untuk Ilmu Komputer. Standar ABET digunakan untuk memantapkan learning outcome dan juga untuk persiapan akreditasi internasional agar lulusan PSIK dapat bersaing dengan kompetensi lulusan dari luar negeri.&nbsp; Finalisasi dari pra-lokakarya adalah lokakarya kurikulum yang dilakukan oleh fakultas untuk seluruh prodi (8 prodi) di FMIPA.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil dari peninjauan kurikulum pada tahun 2014 ini (pra-lokakarya di PSIK dan lokakarya di Fakultas) adalah perbaikan rumusan <em>learning outcome</em> , serta penambahan dan penghapusan mata kuliah yang disajikan pada tabel di bawah ini. Hingga sekarang, PSIK menggunakan kurikulum hasil peninjauan pada tahun 2014. Dokumen lengkap hasil peninjauan kurikulum pada saat visitasi.</span></p>'),
(2, 2, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PSIK berdiri sejak tahun 1992 berada di bawah FMIPA IPB. Sejak berdirinya hingga sekarang telah dilakukan lokakarya peninjauan kurikulum sebanyak 5 kali, yaitu pada tahun 1995, 2000, 2005, 2009, 2013. Kurikulum tahun 1995 dikembangkan dengan mengikuti kurikulum nasional dengan kurikulum program sejenis lainnya di dalam maupun luar negeri, ditambah dengan beberapa muatan yang mencirikan&nbsp; karakteristik lokal. Mulai tahun 2000, IPB mencanangkan sebagai embrio universitas berbasis riset, yang salah satu wujud nyatanya adalah dibentuknya lab keilmuan di level program studi.&nbsp; Sejalan dengan kebijakan tersebut, maka dari aspek kurikulum juga mengalami perubahan mendasar, untuk itu dilakukan lokakarya kurikulum pada tahun 2000.&nbsp; Pada tahun 2005 terdapat evaluasi lab keilmuan dan mandat departemen oleh IPB serta arah perkembangan riset IPB.&nbsp; Oleh karena itu, pada tahun 2005 dilaksanakan peninjauan kurikulum yang ketiga.&nbsp; Setelah 4 tahun berjalan, maka pada tahun 2009 di program studi diselenggarakan diskusi untuk mengevaluasi kembali visi-misi serta arah perkembangan organisasi ke depan. Bersamaan dengan ini maka pada tahun 2009, dilaksanakan peninjauan kurikulum. Selanjutnya, dengan adanya perkembangan sistem kurikulum nasional KKNI (Kerangka Kualifikasi Nasional Indonesia), maka kurikulum PSIK mengalami peninjauan kembali dan ini dilakukan pada tahun 2013. Semua peninjauan kurikulum yang telah dilakukan oleh PSIK di atas, dilakukan secara mandiri dengan melibatkan dosen PSIK, dosen IPB terkait, alumni, pengguna lulusan, serta mengacu pada: 1) dokumen perkembangan keilmuan bidang komputer seperti yang tertera pada dokumen asosiasi internasional (seperti: <em>Computing Curricula</em> 2005, 2009, dan 2013), juga dokumen prodi sejenis di perguruan tinggi lain; 2) visi misi institusi dan perubahan sistem kurikulum di IPB (misal adanya sistem kurikulum Mayor-Minor pada tahun 2005); dan 3) perkembangan kebutuhan pengguna lulusan PSIK. Alumni, pengguna lulusan, dan Pakar memberikan informasi perkembangan terbaru di bidang ilmu komputer dan teknologi informasi melalui melalui kegiatan kuliah umum, workshop, dan diskusi-diskusi internal dengan dosen dan mahasiswa PSIK. Informasi tersebut menjadi masukan dalam perumusan kurikulum PSIK.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam menyusun kurikulum, sebagai pertimbangan adalah visi universitas, visi fakultas dan program studi, dikaitkan dengan topik-topik riset yang telah dilakukan, pandangan berbagai pihak mengenai perkembangan ilmu ke depan (pada berbagai bidang, dan khususnya bidang llmu komputer) yang diperoleh dari pakar maupun dokumen yang relevan, serta dokumen kurikulum dari asosiasi dan institusi sejenis di dalam dan di luar negeri yang dipergunakan sebagai bahan komparasi. Untuk meningkatkan relevansinya dengan pasar tenaga kerja, maka evaluasi kurikulum juga menggunakan masukan alumni dan pengguna lulusan sebagai bahan pertimbangan (pembahasan lebih jelasnya dapat dilihat pada Standar 3 butir 3.3.1.b). Dengan demikian, kurikulum yang dikembangkan sejalan dengan <em>trend</em> perkembangan ilmu masa depan, relevan dengan pasar, dan&nbsp; dalam <em>track</em> yang sejalan untuk mencapai visi-misi lembaga (program studi, fakultas dan universitas).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil utama peninjauan kurikulum adalah berupa penyempurnaan visi, misi, tujuan, dan target sasaran, penyusunan rumusan <em>learning outcome </em>(LO) PSIK dan penjabarannya, penentuan topik dan mata kuliah serta pemetaannya (antara mata kuliah dengan LO), diagram keterkaitan antar mata kuliah, deskripsi serta alokasi ke setiap semesternya.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada tahun 2014, terdapat penyempurnaan KKNI oleh pemerintah juga IPB secara keseluruhan semua prodi diminta untuk melakukan peninjauan kurikulum kembali yang akan diberlakukan pada tahun 2015. Oleh karena itu, PSIK melakukan pra-lokakarya pada Tahun 2014.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pralokakarya ini dilakukan sebagai langkah untuk merancang kurikulum sesuai dengan perkembangan IPTEK dan keinginan pengguna dan sebagai persiapan kegiatan lokakarya yang dilaksanakan oleh fakultas dan IPB.&nbsp;&nbsp; Kegiatan ini diikuti oleh Dekan FMIPA, dosen pengajar PSIK, dosen mata kuliah wajib universitas (PPKU) dan interdepartemen. Pada kegiatan ini, dilakukan perumusan <em>learning outcome</em> yang mengacu pada keluaran yang dibutuhkan pengguna dengan menggunakan standar ABET (<em>American Board for Engineering and Technology</em>) untuk Ilmu Komputer. Standar ABET digunakan untuk memantapkan learning outcome dan juga untuk persiapan akreditasi internasional agar lulusan PSIK dapat bersaing dengan kompetensi lulusan dari luar negeri.&nbsp; Finalisasi dari pra-lokakarya adalah lokakarya kurikulum yang dilakukan oleh fakultas untuk seluruh prodi (8 prodi) di FMIPA.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil dari peninjauan kurikulum pada tahun 2014 ini (pra-lokakarya di PSIK dan lokakarya di Fakultas) adalah perbaikan rumusan <em>learning outcome</em> , serta penambahan dan penghapusan mata kuliah yang disajikan pada tabel di bawah ini. Hingga sekarang, PSIK menggunakan kurikulum hasil peninjauan pada tahun 2014. Dokumen lengkap hasil peninjauan kurikulum pada saat visitasi.</span></p>'),
(3, 3, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PSIK berdiri sejak tahun 1992 berada di bawah FMIPA IPB. Sejak berdirinya hingga sekarang telah dilakukan lokakarya peninjauan kurikulum sebanyak 5 kali, yaitu pada tahun 1995, 2000, 2005, 2009, 2013. Kurikulum tahun 1995 dikembangkan dengan mengikuti kurikulum nasional dengan kurikulum program sejenis lainnya di dalam maupun luar negeri, ditambah dengan beberapa muatan yang mencirikan&nbsp; karakteristik lokal. Mulai tahun 2000, IPB mencanangkan sebagai embrio universitas berbasis riset, yang salah satu wujud nyatanya adalah dibentuknya lab keilmuan di level program studi.&nbsp; Sejalan dengan kebijakan tersebut, maka dari aspek kurikulum juga mengalami perubahan mendasar, untuk itu dilakukan lokakarya kurikulum pada tahun 2000.&nbsp; Pada tahun 2005 terdapat evaluasi lab keilmuan dan mandat departemen oleh IPB serta arah perkembangan riset IPB.&nbsp; Oleh karena itu, pada tahun 2005 dilaksanakan peninjauan kurikulum yang ketiga.&nbsp; Setelah 4 tahun berjalan, maka pada tahun 2009 di program studi diselenggarakan diskusi untuk mengevaluasi kembali visi-misi serta arah perkembangan organisasi ke depan. Bersamaan dengan ini maka pada tahun 2009, dilaksanakan peninjauan kurikulum. Selanjutnya, dengan adanya perkembangan sistem kurikulum nasional KKNI (Kerangka Kualifikasi Nasional Indonesia), maka kurikulum PSIK mengalami peninjauan kembali dan ini dilakukan pada tahun 2013. Semua peninjauan kurikulum yang telah dilakukan oleh PSIK di atas, dilakukan secara mandiri dengan melibatkan dosen PSIK, dosen IPB terkait, alumni, pengguna lulusan, serta mengacu pada: 1) dokumen perkembangan keilmuan bidang komputer seperti yang tertera pada dokumen asosiasi internasional (seperti: <em>Computing Curricula</em> 2005, 2009, dan 2013), juga dokumen prodi sejenis di perguruan tinggi lain; 2) visi misi institusi dan perubahan sistem kurikulum di IPB (misal adanya sistem kurikulum Mayor-Minor pada tahun 2005); dan 3) perkembangan kebutuhan pengguna lulusan PSIK. Alumni, pengguna lulusan, dan Pakar memberikan informasi perkembangan terbaru di bidang ilmu komputer dan teknologi informasi melalui melalui kegiatan kuliah umum, workshop, dan diskusi-diskusi internal dengan dosen dan mahasiswa PSIK. Informasi tersebut menjadi masukan dalam perumusan kurikulum PSIK.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam menyusun kurikulum, sebagai pertimbangan adalah visi universitas, visi fakultas dan program studi, dikaitkan dengan topik-topik riset yang telah dilakukan, pandangan berbagai pihak mengenai perkembangan ilmu ke depan (pada berbagai bidang, dan khususnya bidang llmu komputer) yang diperoleh dari pakar maupun dokumen yang relevan, serta dokumen kurikulum dari asosiasi dan institusi sejenis di dalam dan di luar negeri yang dipergunakan sebagai bahan komparasi. Untuk meningkatkan relevansinya dengan pasar tenaga kerja, maka evaluasi kurikulum juga menggunakan masukan alumni dan pengguna lulusan sebagai bahan pertimbangan (pembahasan lebih jelasnya dapat dilihat pada Standar 3 butir 3.3.1.b). Dengan demikian, kurikulum yang dikembangkan sejalan dengan <em>trend</em> perkembangan ilmu masa depan, relevan dengan pasar, dan&nbsp; dalam <em>track</em> yang sejalan untuk mencapai visi-misi lembaga (program studi, fakultas dan universitas).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil utama peninjauan kurikulum adalah berupa penyempurnaan visi, misi, tujuan, dan target sasaran, penyusunan rumusan <em>learning outcome </em>(LO) PSIK dan penjabarannya, penentuan topik dan mata kuliah serta pemetaannya (antara mata kuliah dengan LO), diagram keterkaitan antar mata kuliah, deskripsi serta alokasi ke setiap semesternya.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada tahun 2014, terdapat penyempurnaan KKNI oleh pemerintah juga IPB secara keseluruhan semua prodi diminta untuk melakukan peninjauan kurikulum kembali yang akan diberlakukan pada tahun 2015. Oleh karena itu, PSIK melakukan pra-lokakarya pada Tahun 2014.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pralokakarya ini dilakukan sebagai langkah untuk merancang kurikulum sesuai dengan perkembangan IPTEK dan keinginan pengguna dan sebagai persiapan kegiatan lokakarya yang dilaksanakan oleh fakultas dan IPB.&nbsp;&nbsp; Kegiatan ini diikuti oleh Dekan FMIPA, dosen pengajar PSIK, dosen mata kuliah wajib universitas (PPKU) dan interdepartemen. Pada kegiatan ini, dilakukan perumusan <em>learning outcome</em> yang mengacu pada keluaran yang dibutuhkan pengguna dengan menggunakan standar ABET (<em>American Board for Engineering and Technology</em>) untuk Ilmu Komputer. Standar ABET digunakan untuk memantapkan learning outcome dan juga untuk persiapan akreditasi internasional agar lulusan PSIK dapat bersaing dengan kompetensi lulusan dari luar negeri.&nbsp; Finalisasi dari pra-lokakarya adalah lokakarya kurikulum yang dilakukan oleh fakultas untuk seluruh prodi (8 prodi) di FMIPA.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil dari peninjauan kurikulum pada tahun 2014 ini (pra-lokakarya di PSIK dan lokakarya di Fakultas) adalah perbaikan rumusan <em>learning outcome</em> , serta penambahan dan penghapusan mata kuliah yang disajikan pada tabel di bawah ini. Hingga sekarang, PSIK menggunakan kurikulum hasil peninjauan pada tahun 2014. Dokumen lengkap hasil peninjauan kurikulum pada saat visitasi.</span></p>'),
(4, 4, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PSIK berdiri sejak tahun 1992 berada di bawah FMIPA IPB. Sejak berdirinya hingga sekarang telah dilakukan lokakarya peninjauan kurikulum sebanyak 5 kali, yaitu pada tahun 1995, 2000, 2005, 2009, 2013. Kurikulum tahun 1995 dikembangkan dengan mengikuti kurikulum nasional dengan kurikulum program sejenis lainnya di dalam maupun luar negeri, ditambah dengan beberapa muatan yang mencirikan&nbsp; karakteristik lokal. Mulai tahun 2000, IPB mencanangkan sebagai embrio universitas berbasis riset, yang salah satu wujud nyatanya adalah dibentuknya lab keilmuan di level program studi.&nbsp; Sejalan dengan kebijakan tersebut, maka dari aspek kurikulum juga mengalami perubahan mendasar, untuk itu dilakukan lokakarya kurikulum pada tahun 2000.&nbsp; Pada tahun 2005 terdapat evaluasi lab keilmuan dan mandat departemen oleh IPB serta arah perkembangan riset IPB.&nbsp; Oleh karena itu, pada tahun 2005 dilaksanakan peninjauan kurikulum yang ketiga.&nbsp; Setelah 4 tahun berjalan, maka pada tahun 2009 di program studi diselenggarakan diskusi untuk mengevaluasi kembali visi-misi serta arah perkembangan organisasi ke depan. Bersamaan dengan ini maka pada tahun 2009, dilaksanakan peninjauan kurikulum. Selanjutnya, dengan adanya perkembangan sistem kurikulum nasional KKNI (Kerangka Kualifikasi Nasional Indonesia), maka kurikulum PSIK mengalami peninjauan kembali dan ini dilakukan pada tahun 2013. Semua peninjauan kurikulum yang telah dilakukan oleh PSIK di atas, dilakukan secara mandiri dengan melibatkan dosen PSIK, dosen IPB terkait, alumni, pengguna lulusan, serta mengacu pada: 1) dokumen perkembangan keilmuan bidang komputer seperti yang tertera pada dokumen asosiasi internasional (seperti: <em>Computing Curricula</em> 2005, 2009, dan 2013), juga dokumen prodi sejenis di perguruan tinggi lain; 2) visi misi institusi dan perubahan sistem kurikulum di IPB (misal adanya sistem kurikulum Mayor-Minor pada tahun 2005); dan 3) perkembangan kebutuhan pengguna lulusan PSIK. Alumni, pengguna lulusan, dan Pakar memberikan informasi perkembangan terbaru di bidang ilmu komputer dan teknologi informasi melalui melalui kegiatan kuliah umum, workshop, dan diskusi-diskusi internal dengan dosen dan mahasiswa PSIK. Informasi tersebut menjadi masukan dalam perumusan kurikulum PSIK.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam menyusun kurikulum, sebagai pertimbangan adalah visi universitas, visi fakultas dan program studi, dikaitkan dengan topik-topik riset yang telah dilakukan, pandangan berbagai pihak mengenai perkembangan ilmu ke depan (pada berbagai bidang, dan khususnya bidang llmu komputer) yang diperoleh dari pakar maupun dokumen yang relevan, serta dokumen kurikulum dari asosiasi dan institusi sejenis di dalam dan di luar negeri yang dipergunakan sebagai bahan komparasi. Untuk meningkatkan relevansinya dengan pasar tenaga kerja, maka evaluasi kurikulum juga menggunakan masukan alumni dan pengguna lulusan sebagai bahan pertimbangan (pembahasan lebih jelasnya dapat dilihat pada Standar 3 butir 3.3.1.b). Dengan demikian, kurikulum yang dikembangkan sejalan dengan <em>trend</em> perkembangan ilmu masa depan, relevan dengan pasar, dan&nbsp; dalam <em>track</em> yang sejalan untuk mencapai visi-misi lembaga (program studi, fakultas dan universitas).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil utama peninjauan kurikulum adalah berupa penyempurnaan visi, misi, tujuan, dan target sasaran, penyusunan rumusan <em>learning outcome </em>(LO) PSIK dan penjabarannya, penentuan topik dan mata kuliah serta pemetaannya (antara mata kuliah dengan LO), diagram keterkaitan antar mata kuliah, deskripsi serta alokasi ke setiap semesternya.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada tahun 2014, terdapat penyempurnaan KKNI oleh pemerintah juga IPB secara keseluruhan semua prodi diminta untuk melakukan peninjauan kurikulum kembali yang akan diberlakukan pada tahun 2015. Oleh karena itu, PSIK melakukan pra-lokakarya pada Tahun 2014.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pralokakarya ini dilakukan sebagai langkah untuk merancang kurikulum sesuai dengan perkembangan IPTEK dan keinginan pengguna dan sebagai persiapan kegiatan lokakarya yang dilaksanakan oleh fakultas dan IPB.&nbsp;&nbsp; Kegiatan ini diikuti oleh Dekan FMIPA, dosen pengajar PSIK, dosen mata kuliah wajib universitas (PPKU) dan interdepartemen. Pada kegiatan ini, dilakukan perumusan <em>learning outcome</em> yang mengacu pada keluaran yang dibutuhkan pengguna dengan menggunakan standar ABET (<em>American Board for Engineering and Technology</em>) untuk Ilmu Komputer. Standar ABET digunakan untuk memantapkan learning outcome dan juga untuk persiapan akreditasi internasional agar lulusan PSIK dapat bersaing dengan kompetensi lulusan dari luar negeri.&nbsp; Finalisasi dari pra-lokakarya adalah lokakarya kurikulum yang dilakukan oleh fakultas untuk seluruh prodi (8 prodi) di FMIPA.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil dari peninjauan kurikulum pada tahun 2014 ini (pra-lokakarya di PSIK dan lokakarya di Fakultas) adalah perbaikan rumusan <em>learning outcome</em> , serta penambahan dan penghapusan mata kuliah yang disajikan pada tabel di bawah ini. Hingga sekarang, PSIK menggunakan kurikulum hasil peninjauan pada tahun 2014. Dokumen lengkap hasil peninjauan kurikulum pada saat visitasi.</span></p>'),
(5, 5, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PSIK berdiri sejak tahun 1992 berada di bawah FMIPA IPB. Sejak berdirinya hingga sekarang telah dilakukan lokakarya peninjauan kurikulum sebanyak 5 kali, yaitu pada tahun 1995, 2000, 2005, 2009, 2013. Kurikulum tahun 1995 dikembangkan dengan mengikuti kurikulum nasional dengan kurikulum program sejenis lainnya di dalam maupun luar negeri, ditambah dengan beberapa muatan yang mencirikan&nbsp; karakteristik lokal. Mulai tahun 2000, IPB mencanangkan sebagai embrio universitas berbasis riset, yang salah satu wujud nyatanya adalah dibentuknya lab keilmuan di level program studi.&nbsp; Sejalan dengan kebijakan tersebut, maka dari aspek kurikulum juga mengalami perubahan mendasar, untuk itu dilakukan lokakarya kurikulum pada tahun 2000.&nbsp; Pada tahun 2005 terdapat evaluasi lab keilmuan dan mandat departemen oleh IPB serta arah perkembangan riset IPB.&nbsp; Oleh karena itu, pada tahun 2005 dilaksanakan peninjauan kurikulum yang ketiga.&nbsp; Setelah 4 tahun berjalan, maka pada tahun 2009 di program studi diselenggarakan diskusi untuk mengevaluasi kembali visi-misi serta arah perkembangan organisasi ke depan. Bersamaan dengan ini maka pada tahun 2009, dilaksanakan peninjauan kurikulum. Selanjutnya, dengan adanya perkembangan sistem kurikulum nasional KKNI (Kerangka Kualifikasi Nasional Indonesia), maka kurikulum PSIK mengalami peninjauan kembali dan ini dilakukan pada tahun 2013. Semua peninjauan kurikulum yang telah dilakukan oleh PSIK di atas, dilakukan secara mandiri dengan melibatkan dosen PSIK, dosen IPB terkait, alumni, pengguna lulusan, serta mengacu pada: 1) dokumen perkembangan keilmuan bidang komputer seperti yang tertera pada dokumen asosiasi internasional (seperti: <em>Computing Curricula</em> 2005, 2009, dan 2013), juga dokumen prodi sejenis di perguruan tinggi lain; 2) visi misi institusi dan perubahan sistem kurikulum di IPB (misal adanya sistem kurikulum Mayor-Minor pada tahun 2005); dan 3) perkembangan kebutuhan pengguna lulusan PSIK. Alumni, pengguna lulusan, dan Pakar memberikan informasi perkembangan terbaru di bidang ilmu komputer dan teknologi informasi melalui melalui kegiatan kuliah umum, workshop, dan diskusi-diskusi internal dengan dosen dan mahasiswa PSIK. Informasi tersebut menjadi masukan dalam perumusan kurikulum PSIK.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam menyusun kurikulum, sebagai pertimbangan adalah visi universitas, visi fakultas dan program studi, dikaitkan dengan topik-topik riset yang telah dilakukan, pandangan berbagai pihak mengenai perkembangan ilmu ke depan (pada berbagai bidang, dan khususnya bidang llmu komputer) yang diperoleh dari pakar maupun dokumen yang relevan, serta dokumen kurikulum dari asosiasi dan institusi sejenis di dalam dan di luar negeri yang dipergunakan sebagai bahan komparasi. Untuk meningkatkan relevansinya dengan pasar tenaga kerja, maka evaluasi kurikulum juga menggunakan masukan alumni dan pengguna lulusan sebagai bahan pertimbangan (pembahasan lebih jelasnya dapat dilihat pada Standar 3 butir 3.3.1.b). Dengan demikian, kurikulum yang dikembangkan sejalan dengan <em>trend</em> perkembangan ilmu masa depan, relevan dengan pasar, dan&nbsp; dalam <em>track</em> yang sejalan untuk mencapai visi-misi lembaga (program studi, fakultas dan universitas).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil utama peninjauan kurikulum adalah berupa penyempurnaan visi, misi, tujuan, dan target sasaran, penyusunan rumusan <em>learning outcome </em>(LO) PSIK dan penjabarannya, penentuan topik dan mata kuliah serta pemetaannya (antara mata kuliah dengan LO), diagram keterkaitan antar mata kuliah, deskripsi serta alokasi ke setiap semesternya.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada tahun 2014, terdapat penyempurnaan KKNI oleh pemerintah juga IPB secara keseluruhan semua prodi diminta untuk melakukan peninjauan kurikulum kembali yang akan diberlakukan pada tahun 2015. Oleh karena itu, PSIK melakukan pra-lokakarya pada Tahun 2014.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pralokakarya ini dilakukan sebagai langkah untuk merancang kurikulum sesuai dengan perkembangan IPTEK dan keinginan pengguna dan sebagai persiapan kegiatan lokakarya yang dilaksanakan oleh fakultas dan IPB.&nbsp;&nbsp; Kegiatan ini diikuti oleh Dekan FMIPA, dosen pengajar PSIK, dosen mata kuliah wajib universitas (PPKU) dan interdepartemen. Pada kegiatan ini, dilakukan perumusan <em>learning outcome</em> yang mengacu pada keluaran yang dibutuhkan pengguna dengan menggunakan standar ABET (<em>American Board for Engineering and Technology</em>) untuk Ilmu Komputer. Standar ABET digunakan untuk memantapkan learning outcome dan juga untuk persiapan akreditasi internasional agar lulusan PSIK dapat bersaing dengan kompetensi lulusan dari luar negeri.&nbsp; Finalisasi dari pra-lokakarya adalah lokakarya kurikulum yang dilakukan oleh fakultas untuk seluruh prodi (8 prodi) di FMIPA.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil dari peninjauan kurikulum pada tahun 2014 ini (pra-lokakarya di PSIK dan lokakarya di Fakultas) adalah perbaikan rumusan <em>learning outcome</em> , serta penambahan dan penghapusan mata kuliah yang disajikan pada tabel di bawah ini. Hingga sekarang, PSIK menggunakan kurikulum hasil peninjauan pada tahun 2014. Dokumen lengkap hasil peninjauan kurikulum pada saat visitasi.</span></p>'),
(6, 6, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PSIK berdiri sejak tahun 1992 berada di bawah FMIPA IPB. Sejak berdirinya hingga sekarang telah dilakukan lokakarya peninjauan kurikulum sebanyak 5 kali, yaitu pada tahun 1995, 2000, 2005, 2009, 2013. Kurikulum tahun 1995 dikembangkan dengan mengikuti kurikulum nasional dengan kurikulum program sejenis lainnya di dalam maupun luar negeri, ditambah dengan beberapa muatan yang mencirikan&nbsp; karakteristik lokal. Mulai tahun 2000, IPB mencanangkan sebagai embrio universitas berbasis riset, yang salah satu wujud nyatanya adalah dibentuknya lab keilmuan di level program studi.&nbsp; Sejalan dengan kebijakan tersebut, maka dari aspek kurikulum juga mengalami perubahan mendasar, untuk itu dilakukan lokakarya kurikulum pada tahun 2000.&nbsp; Pada tahun 2005 terdapat evaluasi lab keilmuan dan mandat departemen oleh IPB serta arah perkembangan riset IPB.&nbsp; Oleh karena itu, pada tahun 2005 dilaksanakan peninjauan kurikulum yang ketiga.&nbsp; Setelah 4 tahun berjalan, maka pada tahun 2009 di program studi diselenggarakan diskusi untuk mengevaluasi kembali visi-misi serta arah perkembangan organisasi ke depan. Bersamaan dengan ini maka pada tahun 2009, dilaksanakan peninjauan kurikulum. Selanjutnya, dengan adanya perkembangan sistem kurikulum nasional KKNI (Kerangka Kualifikasi Nasional Indonesia), maka kurikulum PSIK mengalami peninjauan kembali dan ini dilakukan pada tahun 2013. Semua peninjauan kurikulum yang telah dilakukan oleh PSIK di atas, dilakukan secara mandiri dengan melibatkan dosen PSIK, dosen IPB terkait, alumni, pengguna lulusan, serta mengacu pada: 1) dokumen perkembangan keilmuan bidang komputer seperti yang tertera pada dokumen asosiasi internasional (seperti: <em>Computing Curricula</em> 2005, 2009, dan 2013), juga dokumen prodi sejenis di perguruan tinggi lain; 2) visi misi institusi dan perubahan sistem kurikulum di IPB (misal adanya sistem kurikulum Mayor-Minor pada tahun 2005); dan 3) perkembangan kebutuhan pengguna lulusan PSIK. Alumni, pengguna lulusan, dan Pakar memberikan informasi perkembangan terbaru di bidang ilmu komputer dan teknologi informasi melalui melalui kegiatan kuliah umum, workshop, dan diskusi-diskusi internal dengan dosen dan mahasiswa PSIK. Informasi tersebut menjadi masukan dalam perumusan kurikulum PSIK.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam menyusun kurikulum, sebagai pertimbangan adalah visi universitas, visi fakultas dan program studi, dikaitkan dengan topik-topik riset yang telah dilakukan, pandangan berbagai pihak mengenai perkembangan ilmu ke depan (pada berbagai bidang, dan khususnya bidang llmu komputer) yang diperoleh dari pakar maupun dokumen yang relevan, serta dokumen kurikulum dari asosiasi dan institusi sejenis di dalam dan di luar negeri yang dipergunakan sebagai bahan komparasi. Untuk meningkatkan relevansinya dengan pasar tenaga kerja, maka evaluasi kurikulum juga menggunakan masukan alumni dan pengguna lulusan sebagai bahan pertimbangan (pembahasan lebih jelasnya dapat dilihat pada Standar 3 butir 3.3.1.b). Dengan demikian, kurikulum yang dikembangkan sejalan dengan <em>trend</em> perkembangan ilmu masa depan, relevan dengan pasar, dan&nbsp; dalam <em>track</em> yang sejalan untuk mencapai visi-misi lembaga (program studi, fakultas dan universitas).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil utama peninjauan kurikulum adalah berupa penyempurnaan visi, misi, tujuan, dan target sasaran, penyusunan rumusan <em>learning outcome </em>(LO) PSIK dan penjabarannya, penentuan topik dan mata kuliah serta pemetaannya (antara mata kuliah dengan LO), diagram keterkaitan antar mata kuliah, deskripsi serta alokasi ke setiap semesternya.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada tahun 2014, terdapat penyempurnaan KKNI oleh pemerintah juga IPB secara keseluruhan semua prodi diminta untuk melakukan peninjauan kurikulum kembali yang akan diberlakukan pada tahun 2015. Oleh karena itu, PSIK melakukan pra-lokakarya pada Tahun 2014.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pralokakarya ini dilakukan sebagai langkah untuk merancang kurikulum sesuai dengan perkembangan IPTEK dan keinginan pengguna dan sebagai persiapan kegiatan lokakarya yang dilaksanakan oleh fakultas dan IPB.&nbsp;&nbsp; Kegiatan ini diikuti oleh Dekan FMIPA, dosen pengajar PSIK, dosen mata kuliah wajib universitas (PPKU) dan interdepartemen. Pada kegiatan ini, dilakukan perumusan <em>learning outcome</em> yang mengacu pada keluaran yang dibutuhkan pengguna dengan menggunakan standar ABET (<em>American Board for Engineering and Technology</em>) untuk Ilmu Komputer. Standar ABET digunakan untuk memantapkan learning outcome dan juga untuk persiapan akreditasi internasional agar lulusan PSIK dapat bersaing dengan kompetensi lulusan dari luar negeri.&nbsp; Finalisasi dari pra-lokakarya adalah lokakarya kurikulum yang dilakukan oleh fakultas untuk seluruh prodi (8 prodi) di FMIPA.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil dari peninjauan kurikulum pada tahun 2014 ini (pra-lokakarya di PSIK dan lokakarya di Fakultas) adalah perbaikan rumusan <em>learning outcome</em> , serta penambahan dan penghapusan mata kuliah yang disajikan pada tabel di bawah ini. Hingga sekarang, PSIK menggunakan kurikulum hasil peninjauan pada tahun 2014. Dokumen lengkap hasil peninjauan kurikulum pada saat visitasi.</span></p>'),
(7, 7, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PSIK berdiri sejak tahun 1992 berada di bawah FMIPA IPB. Sejak berdirinya hingga sekarang telah dilakukan lokakarya peninjauan kurikulum sebanyak 5 kali, yaitu pada tahun 1995, 2000, 2005, 2009, 2013. Kurikulum tahun 1995 dikembangkan dengan mengikuti kurikulum nasional dengan kurikulum program sejenis lainnya di dalam maupun luar negeri, ditambah dengan beberapa muatan yang mencirikan&nbsp; karakteristik lokal. Mulai tahun 2000, IPB mencanangkan sebagai embrio universitas berbasis riset, yang salah satu wujud nyatanya adalah dibentuknya lab keilmuan di level program studi.&nbsp; Sejalan dengan kebijakan tersebut, maka dari aspek kurikulum juga mengalami perubahan mendasar, untuk itu dilakukan lokakarya kurikulum pada tahun 2000.&nbsp; Pada tahun 2005 terdapat evaluasi lab keilmuan dan mandat departemen oleh IPB serta arah perkembangan riset IPB.&nbsp; Oleh karena itu, pada tahun 2005 dilaksanakan peninjauan kurikulum yang ketiga.&nbsp; Setelah 4 tahun berjalan, maka pada tahun 2009 di program studi diselenggarakan diskusi untuk mengevaluasi kembali visi-misi serta arah perkembangan organisasi ke depan. Bersamaan dengan ini maka pada tahun 2009, dilaksanakan peninjauan kurikulum. Selanjutnya, dengan adanya perkembangan sistem kurikulum nasional KKNI (Kerangka Kualifikasi Nasional Indonesia), maka kurikulum PSIK mengalami peninjauan kembali dan ini dilakukan pada tahun 2013. Semua peninjauan kurikulum yang telah dilakukan oleh PSIK di atas, dilakukan secara mandiri dengan melibatkan dosen PSIK, dosen IPB terkait, alumni, pengguna lulusan, serta mengacu pada: 1) dokumen perkembangan keilmuan bidang komputer seperti yang tertera pada dokumen asosiasi internasional (seperti: <em>Computing Curricula</em> 2005, 2009, dan 2013), juga dokumen prodi sejenis di perguruan tinggi lain; 2) visi misi institusi dan perubahan sistem kurikulum di IPB (misal adanya sistem kurikulum Mayor-Minor pada tahun 2005); dan 3) perkembangan kebutuhan pengguna lulusan PSIK. Alumni, pengguna lulusan, dan Pakar memberikan informasi perkembangan terbaru di bidang ilmu komputer dan teknologi informasi melalui melalui kegiatan kuliah umum, workshop, dan diskusi-diskusi internal dengan dosen dan mahasiswa PSIK. Informasi tersebut menjadi masukan dalam perumusan kurikulum PSIK.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam menyusun kurikulum, sebagai pertimbangan adalah visi universitas, visi fakultas dan program studi, dikaitkan dengan topik-topik riset yang telah dilakukan, pandangan berbagai pihak mengenai perkembangan ilmu ke depan (pada berbagai bidang, dan khususnya bidang llmu komputer) yang diperoleh dari pakar maupun dokumen yang relevan, serta dokumen kurikulum dari asosiasi dan institusi sejenis di dalam dan di luar negeri yang dipergunakan sebagai bahan komparasi. Untuk meningkatkan relevansinya dengan pasar tenaga kerja, maka evaluasi kurikulum juga menggunakan masukan alumni dan pengguna lulusan sebagai bahan pertimbangan (pembahasan lebih jelasnya dapat dilihat pada Standar 3 butir 3.3.1.b). Dengan demikian, kurikulum yang dikembangkan sejalan dengan <em>trend</em> perkembangan ilmu masa depan, relevan dengan pasar, dan&nbsp; dalam <em>track</em> yang sejalan untuk mencapai visi-misi lembaga (program studi, fakultas dan universitas).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil utama peninjauan kurikulum adalah berupa penyempurnaan visi, misi, tujuan, dan target sasaran, penyusunan rumusan <em>learning outcome </em>(LO) PSIK dan penjabarannya, penentuan topik dan mata kuliah serta pemetaannya (antara mata kuliah dengan LO), diagram keterkaitan antar mata kuliah, deskripsi serta alokasi ke setiap semesternya.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada tahun 2014, terdapat penyempurnaan KKNI oleh pemerintah juga IPB secara keseluruhan semua prodi diminta untuk melakukan peninjauan kurikulum kembali yang akan diberlakukan pada tahun 2015. Oleh karena itu, PSIK melakukan pra-lokakarya pada Tahun 2014.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pralokakarya ini dilakukan sebagai langkah untuk merancang kurikulum sesuai dengan perkembangan IPTEK dan keinginan pengguna dan sebagai persiapan kegiatan lokakarya yang dilaksanakan oleh fakultas dan IPB.&nbsp;&nbsp; Kegiatan ini diikuti oleh Dekan FMIPA, dosen pengajar PSIK, dosen mata kuliah wajib universitas (PPKU) dan interdepartemen. Pada kegiatan ini, dilakukan perumusan <em>learning outcome</em> yang mengacu pada keluaran yang dibutuhkan pengguna dengan menggunakan standar ABET (<em>American Board for Engineering and Technology</em>) untuk Ilmu Komputer. Standar ABET digunakan untuk memantapkan learning outcome dan juga untuk persiapan akreditasi internasional agar lulusan PSIK dapat bersaing dengan kompetensi lulusan dari luar negeri.&nbsp; Finalisasi dari pra-lokakarya adalah lokakarya kurikulum yang dilakukan oleh fakultas untuk seluruh prodi (8 prodi) di FMIPA.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil dari peninjauan kurikulum pada tahun 2014 ini (pra-lokakarya di PSIK dan lokakarya di Fakultas) adalah perbaikan rumusan <em>learning outcome</em> , serta penambahan dan penghapusan mata kuliah yang disajikan pada tabel di bawah ini. Hingga sekarang, PSIK menggunakan kurikulum hasil peninjauan pada tahun 2014. Dokumen lengkap hasil peninjauan kurikulum pada saat visitasi.</span></p>'),
(8, 8, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PSIK berdiri sejak tahun 1992 berada di bawah FMIPA IPB. Sejak berdirinya hingga sekarang telah dilakukan lokakarya peninjauan kurikulum sebanyak 5 kali, yaitu pada tahun 1995, 2000, 2005, 2009, 2013. Kurikulum tahun 1995 dikembangkan dengan mengikuti kurikulum nasional dengan kurikulum program sejenis lainnya di dalam maupun luar negeri, ditambah dengan beberapa muatan yang mencirikan&nbsp; karakteristik lokal. Mulai tahun 2000, IPB mencanangkan sebagai embrio universitas berbasis riset, yang salah satu wujud nyatanya adalah dibentuknya lab keilmuan di level program studi.&nbsp; Sejalan dengan kebijakan tersebut, maka dari aspek kurikulum juga mengalami perubahan mendasar, untuk itu dilakukan lokakarya kurikulum pada tahun 2000.&nbsp; Pada tahun 2005 terdapat evaluasi lab keilmuan dan mandat departemen oleh IPB serta arah perkembangan riset IPB.&nbsp; Oleh karena itu, pada tahun 2005 dilaksanakan peninjauan kurikulum yang ketiga.&nbsp; Setelah 4 tahun berjalan, maka pada tahun 2009 di program studi diselenggarakan diskusi untuk mengevaluasi kembali visi-misi serta arah perkembangan organisasi ke depan. Bersamaan dengan ini maka pada tahun 2009, dilaksanakan peninjauan kurikulum. Selanjutnya, dengan adanya perkembangan sistem kurikulum nasional KKNI (Kerangka Kualifikasi Nasional Indonesia), maka kurikulum PSIK mengalami peninjauan kembali dan ini dilakukan pada tahun 2013. Semua peninjauan kurikulum yang telah dilakukan oleh PSIK di atas, dilakukan secara mandiri dengan melibatkan dosen PSIK, dosen IPB terkait, alumni, pengguna lulusan, serta mengacu pada: 1) dokumen perkembangan keilmuan bidang komputer seperti yang tertera pada dokumen asosiasi internasional (seperti: <em>Computing Curricula</em> 2005, 2009, dan 2013), juga dokumen prodi sejenis di perguruan tinggi lain; 2) visi misi institusi dan perubahan sistem kurikulum di IPB (misal adanya sistem kurikulum Mayor-Minor pada tahun 2005); dan 3) perkembangan kebutuhan pengguna lulusan PSIK. Alumni, pengguna lulusan, dan Pakar memberikan informasi perkembangan terbaru di bidang ilmu komputer dan teknologi informasi melalui melalui kegiatan kuliah umum, workshop, dan diskusi-diskusi internal dengan dosen dan mahasiswa PSIK. Informasi tersebut menjadi masukan dalam perumusan kurikulum PSIK.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam menyusun kurikulum, sebagai pertimbangan adalah visi universitas, visi fakultas dan program studi, dikaitkan dengan topik-topik riset yang telah dilakukan, pandangan berbagai pihak mengenai perkembangan ilmu ke depan (pada berbagai bidang, dan khususnya bidang llmu komputer) yang diperoleh dari pakar maupun dokumen yang relevan, serta dokumen kurikulum dari asosiasi dan institusi sejenis di dalam dan di luar negeri yang dipergunakan sebagai bahan komparasi. Untuk meningkatkan relevansinya dengan pasar tenaga kerja, maka evaluasi kurikulum juga menggunakan masukan alumni dan pengguna lulusan sebagai bahan pertimbangan (pembahasan lebih jelasnya dapat dilihat pada Standar 3 butir 3.3.1.b). Dengan demikian, kurikulum yang dikembangkan sejalan dengan <em>trend</em> perkembangan ilmu masa depan, relevan dengan pasar, dan&nbsp; dalam <em>track</em> yang sejalan untuk mencapai visi-misi lembaga (program studi, fakultas dan universitas).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil utama peninjauan kurikulum adalah berupa penyempurnaan visi, misi, tujuan, dan target sasaran, penyusunan rumusan <em>learning outcome </em>(LO) PSIK dan penjabarannya, penentuan topik dan mata kuliah serta pemetaannya (antara mata kuliah dengan LO), diagram keterkaitan antar mata kuliah, deskripsi serta alokasi ke setiap semesternya.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada tahun 2014, terdapat penyempurnaan KKNI oleh pemerintah juga IPB secara keseluruhan semua prodi diminta untuk melakukan peninjauan kurikulum kembali yang akan diberlakukan pada tahun 2015. Oleh karena itu, PSIK melakukan pra-lokakarya pada Tahun 2014.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pralokakarya ini dilakukan sebagai langkah untuk merancang kurikulum sesuai dengan perkembangan IPTEK dan keinginan pengguna dan sebagai persiapan kegiatan lokakarya yang dilaksanakan oleh fakultas dan IPB.&nbsp;&nbsp; Kegiatan ini diikuti oleh Dekan FMIPA, dosen pengajar PSIK, dosen mata kuliah wajib universitas (PPKU) dan interdepartemen. Pada kegiatan ini, dilakukan perumusan <em>learning outcome</em> yang mengacu pada keluaran yang dibutuhkan pengguna dengan menggunakan standar ABET (<em>American Board for Engineering and Technology</em>) untuk Ilmu Komputer. Standar ABET digunakan untuk memantapkan learning outcome dan juga untuk persiapan akreditasi internasional agar lulusan PSIK dapat bersaing dengan kompetensi lulusan dari luar negeri.&nbsp; Finalisasi dari pra-lokakarya adalah lokakarya kurikulum yang dilakukan oleh fakultas untuk seluruh prodi (8 prodi) di FMIPA.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Hasil dari peninjauan kurikulum pada tahun 2014 ini (pra-lokakarya di PSIK dan lokakarya di Fakultas) adalah perbaikan rumusan <em>learning outcome</em> , serta penambahan dan penghapusan mata kuliah yang disajikan pada tabel di bawah ini. Hingga sekarang, PSIK menggunakan kurikulum hasil peninjauan pada tahun 2014. Dokumen lengkap hasil peninjauan kurikulum pada saat visitasi.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `mekanisme_susun_mk`
--

CREATE TABLE `mekanisme_susun_mk` (
  `id_mekanisme` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `mekanisme` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mekanisme_susun_mk`
--

INSERT INTO `mekanisme_susun_mk` (`id_mekanisme`, `id_departemen`, `mekanisme`, `created_at`, `updated_at`) VALUES
(1, 1, 'isi', '2018-09-27 17:46:29', '0000-00-00 00:00:00'),
(2, 2, 'isi', '2018-09-27 17:46:29', '0000-00-00 00:00:00'),
(3, 3, 'isi', '2018-09-27 17:46:29', '0000-00-00 00:00:00'),
(4, 4, 'isi', '2018-09-27 17:46:29', '0000-00-00 00:00:00'),
(5, 5, 'isi', '2018-09-27 17:46:29', '0000-00-00 00:00:00'),
(6, 6, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Setiap periode akhir registrasi mata kuliah, Dit. AP mengirimkan daftar hadir mahasiswa untuk semua mata kuliah yang terdaftar. Sebelum kuliah dilaksanakan, PSIK melakukan identifikasi terhadap jumlah peserta mata kuliah. Untuk mata kuliah yang memiliki jumlah peserta kurang dari 20 peserta maka perlu diputuskan tetap diadakan atau tidak melalui rapat PSIK dan diusulkan kepada Dit.AP.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Keberhasilan perkuliahan ditentukan antara lain oleh tiga faktor utama, yaitu kedisiplinan dosen dalam menyampaikan materi perkuliahan, kedisiplinan mahasiswa dalam mengikuti perkuliahan, dan kesesuaian materi perkuliahan dengan materi yang terdapat pada silabus atau SAP. Dokumen perkuliahan yang diperlukan pada proses perkuliahan di antaranya, Berita Acara Perkuliahan (BAP), GBPP/SAP, dan daftar hadir. <strong>Mekanisme untuk memonitor tiga hal tersebut telah diatur di dalam </strong><strong>POB-IPB-S1-7</strong><strong>. Monitoring ini meliputi, monitoring kehadiran dosen, monitoring kehadiran mahasiswa, dan monitoring materi kuliah</strong>. <strong>Gambar 5.6</strong> menyajikan flowchart monitoring dan evaluasi proses pembelajaran.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Monitoring Kehadiran Dosen</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Monitoring kehadiran dosen dilakukan melalui Berita Acara Pengajaran (BAP) dan </strong>sistem informasi akademik S1&nbsp;<strong>(http://simak.ipb.ac.id)</strong>. Monitoring melalui sistem dilakukan setiap pekan oleh staf kependidikan. Jika ada dosen yang memerlukan penggantian jadwal kuliah pada pekan tersebut, maka dapat dikelola lebih awal dan mengikuti mekanisme pada <strong>POB/KOM-PP/05</strong>. Rekapitulasi kehadiran dosen <strong>dievaluasi</strong> di forum Rabuan setiap dua pekan. <strong>Evaluasi</strong> tersebut bertujuan untuk mengklarifikasi penyebab tidak dipenuhinya jumlah pertemuan kuliah sebagaimana yang telah direncanakan. <strong>Gambar 5.7</strong> menyajikan sistem informasi akademik S1 untuk monitoring kehadiran dosen melalui Berita Acara Pengajaran (BAP).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Evaluasi oleh PSIK dilakukan pada setiap menjelang UTS dan UAS untuk memastikan jumlah pertemuan sudah memenuhi ketentuan yang berlaku. <strong>Gambar 5.8</strong> menyajikan rekapitulasi kehadiran dosen selama tiga tahun sebagai hasil evaluasi.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan evaluasi yang dilakukan menjelang UTS dan UAS ini, maka dilakukan tindak lanjut berupa permintaan kepada tim dosen untuk melaksanakan kuliah pengganti agar jumlah pertemuan sesuai dengan yang telah ditetapkan, yaitu 7 pertemuan untuk UTS dan 7 pertemuan untuk UAS (14 pertemuan).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain oleh PSIK, maka pada akhir semester juga dilakukan audit pembelajaran oleh KMM dan hasilnya dituangkan dalam bentuk laporan hasil audit, juga oleh Fakultas dalam bentuk lokakarya akademik. <strong>Gambar 5.9</strong> menyajikan pelaksanaan lokakarya di tingkat Fakultas.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Monitoring Kehadiran Mahasiswa</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Kehadiran mahasiswa dimonitor melalui Berita Acara Pengajaran (BAP), daftar hadir perkuliahan,</strong> dan sistem informasi akademik S1<strong> (http://simak.ipb.ac.id)</strong>. Kegiatan monitoring ini dilakukan secara konsisten setiap semester dengan bantuan sistem. Sebagai contoh <strong>Lampiran 5.4</strong> menyajikan rekapitulasi kehadiran mahasiswa pada Mata Kuliah pada semester Genap 15/16. Berdasarkan instrumen tersebut, maka kegiatan monev dilakukan dan <strong>Gambar 5.10</strong> menyajikan rekapitulasi kehadiran siswa persemester rata-rata dari seluruh mata kuliah.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai tindak lanjut dari evaluasi ini, sesuai dengan <strong>POB-IPB-S1-9</strong> seorang mahasiswa hanya berhak mengikuti ujian akhir semester jika memenuhi 80% kehadiran dan ketidakhadirannya karena alasan yang kuat. Mahasiswa yang kehadiran kurang dari 80% sebagai konsekuensinya mendapat nilai 0 pada komponen nilai UAS-nya. Daftar mahasiswa yang tidak dapat mengikuti ujian diumumkan maksimal 3 hari pelaksanaan ujian. Klarifikasi atas ketidakhadiran mahasiswa dapat dilakukan oleh mahasiswa dan izin dapat diberikan apabila mahasiswa dapat menunjukkan bukti yang sah. Hal ini sudah dilakukan secara konsisten setiap semester pada setiap tahun ajaran Sebagai contoh tabel berikut menunjukkan daftar mahasiswa yang terkena cekal tidak dapat mengikuti UAS Semester Genap 2015/2016 karena kehadirannya kurang dari 80%.</span></p>\r\n<table style=\"height: 327px; width: 99.8994%; border-collapse: collapse;\" border=\"1\" cellspacing=\"0\" cellpadding=\"1\">\r\n<tbody>\r\n<tr style=\"height: 10px;\">\r\n<td style=\"width: 6.03622%; height: 20px; text-align: center;\" rowspan=\"2\" scope=\"rowgroup\">\r\n<p><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>No.</strong></span></p>\r\n</td>\r\n<td style=\"width: 24.4467%; height: 20px; text-align: center;\" rowspan=\"2\" scope=\"rowgroup\">\r\n<p><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Mata Kuliah</strong></span></p>\r\n</td>\r\n<td style=\"width: 69.4165%; height: 10px; text-align: center;\" colspan=\"4\" scope=\"rowgroup\">\r\n<p><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Daftar Mahasiswa Cekal</strong></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 10px;\">\r\n<td style=\"width: 5.93561%; height: 10px; text-align: center;\" scope=\"rowgroup\">\r\n<p><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>No.</strong></span></p>\r\n</td>\r\n<td style=\"width: 21.1268%; height: 10px; text-align: center;\" scope=\"rowgroup\">\r\n<p><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>NIM</strong></span></p>\r\n</td>\r\n<td style=\"width: 24.7485%; height: 10px; text-align: center;\" scope=\"rowgroup\">\r\n<p><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Nama Mahasiswa</strong></span></p>\r\n</td>\r\n<td style=\"width: 17.6056%; height: 10px; text-align: center;\" scope=\"rowgroup\">\r\n<p><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Jumlah Kehadiran *)</strong></span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 39px;\">\r\n<td style=\"width: 6.03622%; height: 59px; text-align: center;\" rowspan=\"2\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></p>\r\n<br />\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&nbsp;</span></p>\r\n</td>\r\n<td style=\"width: 24.4467%; height: 59px;\" rowspan=\"2\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Basis Data (KOM 205)</span></p>\r\n<br />\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&nbsp;</span></p>\r\n</td>\r\n<td style=\"width: 5.93561%; height: 27px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></p>\r\n</td>\r\n<td style=\"width: 21.1268%; height: 27px;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">G14140077</span></p>\r\n</td>\r\n<td style=\"width: 24.7485%; height: 27px;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Luthfan Arsyan</span></p>\r\n</td>\r\n<td style=\"width: 17.6056%; height: 27px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 32px;\">\r\n<td style=\"width: 5.93561%; height: 32px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></p>\r\n</td>\r\n<td style=\"width: 21.1268%; height: 32px;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">G74110011</span></p>\r\n</td>\r\n<td style=\"width: 24.7485%; height: 32px;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Didy Muliawan</span></p>\r\n</td>\r\n<td style=\"width: 17.6056%; height: 32px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 46px;\">\r\n<td style=\"width: 6.03622%; height: 46px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></p>\r\n</td>\r\n<td style=\"width: 24.4467%; height: 46px;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Data Mining (KOM 332)</span></p>\r\n</td>\r\n<td style=\"width: 5.93561%; height: 46px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></p>\r\n</td>\r\n<td style=\"width: 21.1268%; height: 46px;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">G64130061</span></p>\r\n</td>\r\n<td style=\"width: 24.7485%; height: 46px;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Billy Zaelani Malik</span></p>\r\n</td>\r\n<td style=\"width: 17.6056%; height: 46px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">9</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 64px;\">\r\n<td style=\"width: 6.03622%; height: 64px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3</span></p>\r\n</td>\r\n<td style=\"width: 24.4467%; height: 64px;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Interaksi Manusia dan Komputer (KOM 333)</span></p>\r\n</td>\r\n<td style=\"width: 5.93561%; height: 64px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></p>\r\n</td>\r\n<td style=\"width: 21.1268%; height: 64px;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">G64130037</span></p>\r\n</td>\r\n<td style=\"width: 24.7485%; height: 64px;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Galih Gibrantama Ajiputra</span></p>\r\n</td>\r\n<td style=\"width: 17.6056%; height: 64px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">9</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 46px;\">\r\n<td style=\"width: 6.03622%; height: 138px; text-align: center;\" rowspan=\"3\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">4</span></p>\r\n</td>\r\n<td style=\"width: 24.4467%; height: 138px;\" rowspan=\"3\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Struktur Data (KOM 207)</span></p>\r\n</td>\r\n<td style=\"width: 5.93561%; height: 46px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></p>\r\n</td>\r\n<td style=\"width: 21.1268%; height: 46px;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">G64140034</span></p>\r\n</td>\r\n<td style=\"width: 24.7485%; height: 46px;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Rivandi Anjas Putranto</span></p>\r\n</td>\r\n<td style=\"width: 17.6056%; height: 46px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 46px;\">\r\n<td style=\"width: 5.93561%; height: 46px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></p>\r\n</td>\r\n<td style=\"width: 21.1268%; height: 46px;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">G64140086</span></p>\r\n</td>\r\n<td style=\"width: 24.7485%; height: 46px;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Irkhan Mikhail</span></p>\r\n</td>\r\n<td style=\"width: 17.6056%; height: 46px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 46px;\">\r\n<td style=\"width: 5.93561%; height: 46px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">3</span></p>\r\n</td>\r\n<td style=\"width: 21.1268%; height: 46px;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">G64140072</span></p>\r\n</td>\r\n<td style=\"width: 24.7485%; height: 46px;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Rachman Hakim</span></p>\r\n</td>\r\n<td style=\"width: 17.6056%; height: 46px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Monitoring Materi Kuliah</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Komisi pendidikan dan ketua PSIK <strong>mem</strong><strong>onitor dan mengevaluasi</strong><strong> kesesuaian materi</strong> yang diberikan oleh tim dosen dengan silabus yang telah ditetapkan. Jika ditemui ketidaksesuaian yang dinilai mendesak dan penting, maka PSIK membericarakan hal ini dengan komisi pendidikan, dan dosen koordinator pengampu mata kuliah untuk menyelesaikan masalah tersebut. Untuk permasalahan yang tidak mendesak, tindak lanjutnya dibicarakan saat forum Rabuan dosen. Setiap penyelenggaraan mata kuliah tercatat dalam Berita Acara Perkuliahan yang terdiri atas tanggal, materi, dosen pengajar, catatan dosen, tanda tangan dosen, dan tanda tangan mahasiswa.&nbsp; <strong>Lampiran 5.</strong><strong>5</strong> menyajikan rekapitulasi BAP sebagai bahan rapat di forum rabuan untuk melakukan evaluasi serta tindak lanjut permasalahan terkait pelaksanaan&nbsp; perkuliahan. Pada setiap 7 pertemuan, Komisi Pendidikan memverifikasi kesesuaian soal ujian dengan GBPP/SAP dan materi yang tertera pada BAP sesuai dengan POB/KOM/-PP/05/FRM-02-01. <strong>Lampiran 5.6</strong> menyajikan contoh hasil verifikasi soal ujian mata kuliah Komputasi Numerik, Pengantar Teknologi Geospasial, dan Algoritme.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Monitoring dan evaluasi tersebut secara rutin dilakukan dan terprogram</strong>, dan menjadi tanggung jawab ketua PSIK. <strong>Untuk evaluasi menyeluruh</strong>, yang meliputi performa dosen saat mengajar, sarana prasarana, layanan administrasi, serta kesesuaian materi dilakukan melalui EPBM pada setiap akhir semester oleh Kantor Manajemen Mutu IPB dan disampaikan ke fakultas dan PSIK, serta SDM untuk ditindak lanjuti.&nbsp; <strong>Lampiran 5.</strong><strong>7</strong> menyajikan pencapaian hasil EPBM untuk tahun ajaran 2012/2013, 2013/2014, 2014/2015, dan 2015/2016. <strong>Gambar 5.11</strong> menyajikan pertanyaan yang terdapat pada EPBM.</span></p>', '2018-12-03 09:25:36', '2018-12-03 02:25:36'),
(7, 7, 'isi', '2018-09-27 17:46:29', '0000-00-00 00:00:00'),
(8, 8, 'isi', '2018-09-27 17:46:29', '0000-00-00 00:00:00'),
(9, 9, 'isi', '2018-09-27 17:46:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_20_041255_add_username_field_to_users_table', 1),
(4, '2018_02_27_023238_create_penerimaan_table', 1),
(5, '2018_02_27_043533_create_kegiatan_table', 2),
(6, '2018_02_28_013710_create_penerimaans_table', 3),
(7, '2018_02_28_104618_create_jumlahs_table', 4),
(8, '2018_03_01_024806_create_lulusans_table', 5),
(9, '2018_03_01_031730_create_lulusans_table', 6),
(10, '2018_03_01_031548_create_jumlahs_table', 7),
(12, '2018_03_01_064700_create__dosen_tetap_table', 8),
(13, '2018_03_01_071006_create_penggantian_dosen_table', 9),
(14, '2018_03_01_073948_create__tenaga__kependidikan_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `monitoring_dan_evaluasi`
--

CREATE TABLE `monitoring_dan_evaluasi` (
  `id_monitoring_dan_evaluasi` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan_monitoring_dan_evaluasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monitoring_dan_evaluasi`
--

INSERT INTO `monitoring_dan_evaluasi` (`id_monitoring_dan_evaluasi`, `id_departemen`, `keterangan_monitoring_dan_evaluasi`) VALUES
(1, 1, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Monitoring dan Evaluasi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dan kinerja tenaga kependidikan dilakukan berdasarkan mekanisme yang telah dikembangkan oleh pemerintah dan IPB. Hal ini didasarkan pada Peraturan Pemerintah No 46 Tahun 2011 Tentang Penilaian Prestasi Kerja Pegawai Negeri Sipil. Sebagai pedoman pelaksanaan PP tersebut, Badan Kepegawaian Negara (BKN) mengeluarkan Peraturan Kepala BKN No 3 Tahun 2016 Tentang Pedoman Penyusunan Standar Teknis Kegiatan Sasaran Kerja Pegawai (SKP). Berdasarkan peraturan tersebut, IPB menyusun POB/SDM/14 Tentang Prosedur Operasional Baku Penilaian Kinerja.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dalam proses belajar mengajar dimonitor melalui pengisian berita acara perkuliahan (BAP) pada setiap kali selesai memberikan kuliah dan praktikum untuk mengetahui tingkat kehadiran atau jumlah tatap muka dan kesesuaian antara topik materi kuliah dengan silabus mata kuliah yang telah dijelaskan kepada mahasiswa dalam kontrak perkuliahan pada awal perkuliahan. Evaluasi berita acara perkuliahan dilakukan di tingkat departemen oleh komisi akademik.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Rekam Jejak Kinerja Akademik Dosen dan Kinerja Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain itu, pada perkuliahan di akhir semester kinerja akademik dosen dievaluasi menggunakan instrumen Evaluasi Proses Belajar Mengajar (EPBM) yang kemudian hasilnya disampaikan kepada masing-masing dosen sebagai bahan diskusi dan perbaikan di tingkat PSIK. Data EPBM diolah oleh institusi sebagai bahan evaluasi terhadap kinerja dosen di bidang akademik dan dievaluasi di tingkat program studi dan fakultas.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kinerja dosen dalam pelaksanaan penelitian dan pengabdian kepada masyarakat dilakukan oleh LPPM (Lembaga Penelitian dan Pengabdian Masyarakat) sesuai dengan Bab 7 pada Buku Panduan Penelitian IPB mengenai pelaksanaan, monitoring, dan evaluasi. Monitoring dan evaluasi penelitian dan pengabdian ini dilakukan secara terjadwal dan dengan format penilaian yang jelas, dalam hal ini terdiri atas laporan kemajuan dan laporan akhir, baik yang dilakukan oleh internal IPB maupun eksternal (pemberi dana, misalnya Kemenristekdikti, Kementerian Pertanian).</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>'),
(2, 2, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Monitoring dan Evaluasi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dan kinerja tenaga kependidikan dilakukan berdasarkan mekanisme yang telah dikembangkan oleh pemerintah dan IPB. Hal ini didasarkan pada Peraturan Pemerintah No 46 Tahun 2011 Tentang Penilaian Prestasi Kerja Pegawai Negeri Sipil. Sebagai pedoman pelaksanaan PP tersebut, Badan Kepegawaian Negara (BKN) mengeluarkan Peraturan Kepala BKN No 3 Tahun 2016 Tentang Pedoman Penyusunan Standar Teknis Kegiatan Sasaran Kerja Pegawai (SKP). Berdasarkan peraturan tersebut, IPB menyusun POB/SDM/14 Tentang Prosedur Operasional Baku Penilaian Kinerja.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dalam proses belajar mengajar dimonitor melalui pengisian berita acara perkuliahan (BAP) pada setiap kali selesai memberikan kuliah dan praktikum untuk mengetahui tingkat kehadiran atau jumlah tatap muka dan kesesuaian antara topik materi kuliah dengan silabus mata kuliah yang telah dijelaskan kepada mahasiswa dalam kontrak perkuliahan pada awal perkuliahan. Evaluasi berita acara perkuliahan dilakukan di tingkat departemen oleh komisi akademik.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Rekam Jejak Kinerja Akademik Dosen dan Kinerja Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain itu, pada perkuliahan di akhir semester kinerja akademik dosen dievaluasi menggunakan instrumen Evaluasi Proses Belajar Mengajar (EPBM) yang kemudian hasilnya disampaikan kepada masing-masing dosen sebagai bahan diskusi dan perbaikan di tingkat PSIK. Data EPBM diolah oleh institusi sebagai bahan evaluasi terhadap kinerja dosen di bidang akademik dan dievaluasi di tingkat program studi dan fakultas.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kinerja dosen dalam pelaksanaan penelitian dan pengabdian kepada masyarakat dilakukan oleh LPPM (Lembaga Penelitian dan Pengabdian Masyarakat) sesuai dengan Bab 7 pada Buku Panduan Penelitian IPB mengenai pelaksanaan, monitoring, dan evaluasi. Monitoring dan evaluasi penelitian dan pengabdian ini dilakukan secara terjadwal dan dengan format penilaian yang jelas, dalam hal ini terdiri atas laporan kemajuan dan laporan akhir, baik yang dilakukan oleh internal IPB maupun eksternal (pemberi dana, misalnya Kemenristekdikti, Kementerian Pertanian).</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>'),
(3, 3, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Monitoring dan Evaluasi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dan kinerja tenaga kependidikan dilakukan berdasarkan mekanisme yang telah dikembangkan oleh pemerintah dan IPB. Hal ini didasarkan pada Peraturan Pemerintah No 46 Tahun 2011 Tentang Penilaian Prestasi Kerja Pegawai Negeri Sipil. Sebagai pedoman pelaksanaan PP tersebut, Badan Kepegawaian Negara (BKN) mengeluarkan Peraturan Kepala BKN No 3 Tahun 2016 Tentang Pedoman Penyusunan Standar Teknis Kegiatan Sasaran Kerja Pegawai (SKP). Berdasarkan peraturan tersebut, IPB menyusun POB/SDM/14 Tentang Prosedur Operasional Baku Penilaian Kinerja.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dalam proses belajar mengajar dimonitor melalui pengisian berita acara perkuliahan (BAP) pada setiap kali selesai memberikan kuliah dan praktikum untuk mengetahui tingkat kehadiran atau jumlah tatap muka dan kesesuaian antara topik materi kuliah dengan silabus mata kuliah yang telah dijelaskan kepada mahasiswa dalam kontrak perkuliahan pada awal perkuliahan. Evaluasi berita acara perkuliahan dilakukan di tingkat departemen oleh komisi akademik.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Rekam Jejak Kinerja Akademik Dosen dan Kinerja Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain itu, pada perkuliahan di akhir semester kinerja akademik dosen dievaluasi menggunakan instrumen Evaluasi Proses Belajar Mengajar (EPBM) yang kemudian hasilnya disampaikan kepada masing-masing dosen sebagai bahan diskusi dan perbaikan di tingkat PSIK. Data EPBM diolah oleh institusi sebagai bahan evaluasi terhadap kinerja dosen di bidang akademik dan dievaluasi di tingkat program studi dan fakultas.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kinerja dosen dalam pelaksanaan penelitian dan pengabdian kepada masyarakat dilakukan oleh LPPM (Lembaga Penelitian dan Pengabdian Masyarakat) sesuai dengan Bab 7 pada Buku Panduan Penelitian IPB mengenai pelaksanaan, monitoring, dan evaluasi. Monitoring dan evaluasi penelitian dan pengabdian ini dilakukan secara terjadwal dan dengan format penilaian yang jelas, dalam hal ini terdiri atas laporan kemajuan dan laporan akhir, baik yang dilakukan oleh internal IPB maupun eksternal (pemberi dana, misalnya Kemenristekdikti, Kementerian Pertanian).</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>'),
(4, 4, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Monitoring dan Evaluasi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dan kinerja tenaga kependidikan dilakukan berdasarkan mekanisme yang telah dikembangkan oleh pemerintah dan IPB. Hal ini didasarkan pada Peraturan Pemerintah No 46 Tahun 2011 Tentang Penilaian Prestasi Kerja Pegawai Negeri Sipil. Sebagai pedoman pelaksanaan PP tersebut, Badan Kepegawaian Negara (BKN) mengeluarkan Peraturan Kepala BKN No 3 Tahun 2016 Tentang Pedoman Penyusunan Standar Teknis Kegiatan Sasaran Kerja Pegawai (SKP). Berdasarkan peraturan tersebut, IPB menyusun POB/SDM/14 Tentang Prosedur Operasional Baku Penilaian Kinerja.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dalam proses belajar mengajar dimonitor melalui pengisian berita acara perkuliahan (BAP) pada setiap kali selesai memberikan kuliah dan praktikum untuk mengetahui tingkat kehadiran atau jumlah tatap muka dan kesesuaian antara topik materi kuliah dengan silabus mata kuliah yang telah dijelaskan kepada mahasiswa dalam kontrak perkuliahan pada awal perkuliahan. Evaluasi berita acara perkuliahan dilakukan di tingkat departemen oleh komisi akademik.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Rekam Jejak Kinerja Akademik Dosen dan Kinerja Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain itu, pada perkuliahan di akhir semester kinerja akademik dosen dievaluasi menggunakan instrumen Evaluasi Proses Belajar Mengajar (EPBM) yang kemudian hasilnya disampaikan kepada masing-masing dosen sebagai bahan diskusi dan perbaikan di tingkat PSIK. Data EPBM diolah oleh institusi sebagai bahan evaluasi terhadap kinerja dosen di bidang akademik dan dievaluasi di tingkat program studi dan fakultas.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kinerja dosen dalam pelaksanaan penelitian dan pengabdian kepada masyarakat dilakukan oleh LPPM (Lembaga Penelitian dan Pengabdian Masyarakat) sesuai dengan Bab 7 pada Buku Panduan Penelitian IPB mengenai pelaksanaan, monitoring, dan evaluasi. Monitoring dan evaluasi penelitian dan pengabdian ini dilakukan secara terjadwal dan dengan format penilaian yang jelas, dalam hal ini terdiri atas laporan kemajuan dan laporan akhir, baik yang dilakukan oleh internal IPB maupun eksternal (pemberi dana, misalnya Kemenristekdikti, Kementerian Pertanian).</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>'),
(5, 5, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Monitoring dan Evaluasi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dan kinerja tenaga kependidikan dilakukan berdasarkan mekanisme yang telah dikembangkan oleh pemerintah dan IPB. Hal ini didasarkan pada Peraturan Pemerintah No 46 Tahun 2011 Tentang Penilaian Prestasi Kerja Pegawai Negeri Sipil. Sebagai pedoman pelaksanaan PP tersebut, Badan Kepegawaian Negara (BKN) mengeluarkan Peraturan Kepala BKN No 3 Tahun 2016 Tentang Pedoman Penyusunan Standar Teknis Kegiatan Sasaran Kerja Pegawai (SKP). Berdasarkan peraturan tersebut, IPB menyusun POB/SDM/14 Tentang Prosedur Operasional Baku Penilaian Kinerja.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dalam proses belajar mengajar dimonitor melalui pengisian berita acara perkuliahan (BAP) pada setiap kali selesai memberikan kuliah dan praktikum untuk mengetahui tingkat kehadiran atau jumlah tatap muka dan kesesuaian antara topik materi kuliah dengan silabus mata kuliah yang telah dijelaskan kepada mahasiswa dalam kontrak perkuliahan pada awal perkuliahan. Evaluasi berita acara perkuliahan dilakukan di tingkat departemen oleh komisi akademik.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Rekam Jejak Kinerja Akademik Dosen dan Kinerja Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain itu, pada perkuliahan di akhir semester kinerja akademik dosen dievaluasi menggunakan instrumen Evaluasi Proses Belajar Mengajar (EPBM) yang kemudian hasilnya disampaikan kepada masing-masing dosen sebagai bahan diskusi dan perbaikan di tingkat PSIK. Data EPBM diolah oleh institusi sebagai bahan evaluasi terhadap kinerja dosen di bidang akademik dan dievaluasi di tingkat program studi dan fakultas.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kinerja dosen dalam pelaksanaan penelitian dan pengabdian kepada masyarakat dilakukan oleh LPPM (Lembaga Penelitian dan Pengabdian Masyarakat) sesuai dengan Bab 7 pada Buku Panduan Penelitian IPB mengenai pelaksanaan, monitoring, dan evaluasi. Monitoring dan evaluasi penelitian dan pengabdian ini dilakukan secara terjadwal dan dengan format penilaian yang jelas, dalam hal ini terdiri atas laporan kemajuan dan laporan akhir, baik yang dilakukan oleh internal IPB maupun eksternal (pemberi dana, misalnya Kemenristekdikti, Kementerian Pertanian).</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>'),
(6, 6, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Monitoring dan Evaluasi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dan kinerja tenaga kependidikan dilakukan berdasarkan mekanisme yang telah dikembangkan oleh pemerintah dan IPB. Hal ini didasarkan pada Peraturan Pemerintah No 46 Tahun 2011 Tentang Penilaian Prestasi Kerja Pegawai Negeri Sipil. Sebagai pedoman pelaksanaan PP tersebut, Badan Kepegawaian Negara (BKN) mengeluarkan Peraturan Kepala BKN No 3 Tahun 2016 Tentang Pedoman Penyusunan Standar Teknis Kegiatan Sasaran Kerja Pegawai (SKP). Berdasarkan peraturan tersebut, IPB menyusun POB/SDM/14 Tentang Prosedur Operasional Baku Penilaian Kinerja.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dalam proses belajar mengajar dimonitor melalui pengisian berita acara perkuliahan (BAP) pada setiap kali selesai memberikan kuliah dan praktikum untuk mengetahui tingkat kehadiran atau jumlah tatap muka dan kesesuaian antara topik materi kuliah dengan silabus mata kuliah yang telah dijelaskan kepada mahasiswa dalam kontrak perkuliahan pada awal perkuliahan. Evaluasi berita acara perkuliahan dilakukan di tingkat departemen oleh komisi akademik.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Rekam Jejak Kinerja Akademik Dosen dan Kinerja Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain itu, pada perkuliahan di akhir semester kinerja akademik dosen dievaluasi menggunakan instrumen Evaluasi Proses Belajar Mengajar (EPBM) yang kemudian hasilnya disampaikan kepada masing-masing dosen sebagai bahan diskusi dan perbaikan di tingkat PSIK. Data EPBM diolah oleh institusi sebagai bahan evaluasi terhadap kinerja dosen di bidang akademik dan dievaluasi di tingkat program studi dan fakultas.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kinerja dosen dalam pelaksanaan penelitian dan pengabdian kepada masyarakat dilakukan oleh LPPM (Lembaga Penelitian dan Pengabdian Masyarakat) sesuai dengan Bab 7 pada Buku Panduan Penelitian IPB mengenai pelaksanaan, monitoring, dan evaluasi. Monitoring dan evaluasi penelitian dan pengabdian ini dilakukan secara terjadwal dan dengan format penilaian yang jelas, dalam hal ini terdiri atas laporan kemajuan dan laporan akhir, baik yang dilakukan oleh internal IPB maupun eksternal (pemberi dana, misalnya Kemenristekdikti, Kementerian Pertanian).</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>'),
(7, 7, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Monitoring dan Evaluasi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dan kinerja tenaga kependidikan dilakukan berdasarkan mekanisme yang telah dikembangkan oleh pemerintah dan IPB. Hal ini didasarkan pada Peraturan Pemerintah No 46 Tahun 2011 Tentang Penilaian Prestasi Kerja Pegawai Negeri Sipil. Sebagai pedoman pelaksanaan PP tersebut, Badan Kepegawaian Negara (BKN) mengeluarkan Peraturan Kepala BKN No 3 Tahun 2016 Tentang Pedoman Penyusunan Standar Teknis Kegiatan Sasaran Kerja Pegawai (SKP). Berdasarkan peraturan tersebut, IPB menyusun POB/SDM/14 Tentang Prosedur Operasional Baku Penilaian Kinerja.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dalam proses belajar mengajar dimonitor melalui pengisian berita acara perkuliahan (BAP) pada setiap kali selesai memberikan kuliah dan praktikum untuk mengetahui tingkat kehadiran atau jumlah tatap muka dan kesesuaian antara topik materi kuliah dengan silabus mata kuliah yang telah dijelaskan kepada mahasiswa dalam kontrak perkuliahan pada awal perkuliahan. Evaluasi berita acara perkuliahan dilakukan di tingkat departemen oleh komisi akademik.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Rekam Jejak Kinerja Akademik Dosen dan Kinerja Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain itu, pada perkuliahan di akhir semester kinerja akademik dosen dievaluasi menggunakan instrumen Evaluasi Proses Belajar Mengajar (EPBM) yang kemudian hasilnya disampaikan kepada masing-masing dosen sebagai bahan diskusi dan perbaikan di tingkat PSIK. Data EPBM diolah oleh institusi sebagai bahan evaluasi terhadap kinerja dosen di bidang akademik dan dievaluasi di tingkat program studi dan fakultas.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kinerja dosen dalam pelaksanaan penelitian dan pengabdian kepada masyarakat dilakukan oleh LPPM (Lembaga Penelitian dan Pengabdian Masyarakat) sesuai dengan Bab 7 pada Buku Panduan Penelitian IPB mengenai pelaksanaan, monitoring, dan evaluasi. Monitoring dan evaluasi penelitian dan pengabdian ini dilakukan secara terjadwal dan dengan format penilaian yang jelas, dalam hal ini terdiri atas laporan kemajuan dan laporan akhir, baik yang dilakukan oleh internal IPB maupun eksternal (pemberi dana, misalnya Kemenristekdikti, Kementerian Pertanian).</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>'),
(8, 8, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Monitoring dan Evaluasi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dan kinerja tenaga kependidikan dilakukan berdasarkan mekanisme yang telah dikembangkan oleh pemerintah dan IPB. Hal ini didasarkan pada Peraturan Pemerintah No 46 Tahun 2011 Tentang Penilaian Prestasi Kerja Pegawai Negeri Sipil. Sebagai pedoman pelaksanaan PP tersebut, Badan Kepegawaian Negara (BKN) mengeluarkan Peraturan Kepala BKN No 3 Tahun 2016 Tentang Pedoman Penyusunan Standar Teknis Kegiatan Sasaran Kerja Pegawai (SKP). Berdasarkan peraturan tersebut, IPB menyusun POB/SDM/14 Tentang Prosedur Operasional Baku Penilaian Kinerja.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dalam proses belajar mengajar dimonitor melalui pengisian berita acara perkuliahan (BAP) pada setiap kali selesai memberikan kuliah dan praktikum untuk mengetahui tingkat kehadiran atau jumlah tatap muka dan kesesuaian antara topik materi kuliah dengan silabus mata kuliah yang telah dijelaskan kepada mahasiswa dalam kontrak perkuliahan pada awal perkuliahan. Evaluasi berita acara perkuliahan dilakukan di tingkat departemen oleh komisi akademik.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Rekam Jejak Kinerja Akademik Dosen dan Kinerja Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain itu, pada perkuliahan di akhir semester kinerja akademik dosen dievaluasi menggunakan instrumen Evaluasi Proses Belajar Mengajar (EPBM) yang kemudian hasilnya disampaikan kepada masing-masing dosen sebagai bahan diskusi dan perbaikan di tingkat PSIK. Data EPBM diolah oleh institusi sebagai bahan evaluasi terhadap kinerja dosen di bidang akademik dan dievaluasi di tingkat program studi dan fakultas.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kinerja dosen dalam pelaksanaan penelitian dan pengabdian kepada masyarakat dilakukan oleh LPPM (Lembaga Penelitian dan Pengabdian Masyarakat) sesuai dengan Bab 7 pada Buku Panduan Penelitian IPB mengenai pelaksanaan, monitoring, dan evaluasi. Monitoring dan evaluasi penelitian dan pengabdian ini dilakukan secara terjadwal dan dengan format penilaian yang jelas, dalam hal ini terdiri atas laporan kemajuan dan laporan akhir, baik yang dilakukan oleh internal IPB maupun eksternal (pemberi dana, misalnya Kemenristekdikti, Kementerian Pertanian).</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `nama_dosen`
--

CREATE TABLE `nama_dosen` (
  `id_nama_dosen` int(11) NOT NULL,
  `namadosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nama_dosen`
--

INSERT INTO `nama_dosen` (`id_nama_dosen`, `namadosen`) VALUES
(1, 'Meuthia Rachmaniah'),
(2, 'Julio Adisantoso'),
(3, 'Agus Buono'),
(4, 'Sri Wahjuni'),
(5, 'Aziz Kustiyo'),
(6, 'Wisnu Ananta Kusuma'),
(7, 'Yani Nurhadryani'),
(8, 'Imas Sukaesih Sitanggang'),
(9, 'Irman Hermadi'),
(10, 'Heru Sukoco'),
(11, 'Yeni Herdiyeni'),
(12, 'Hari Agung Adrianto'),
(13, 'Shelvie Nidya Neyman'),
(14, 'Firman Ardiansyah'),
(15, 'Annisa'),
(16, 'Ahmad Ridha'),
(17, 'Sony Hartono Wijaya'),
(18, 'Mushthofa'),
(19, 'Hendra Rahmawan'),
(20, 'Endang Purnama Giri'),
(21, 'Toto Haryanto'),
(22, 'Karlisa Priandana'),
(23, 'Muhammad Asyhar Agmalaro'),
(24, 'Rina Trisminingsih'),
(25, 'Auzi Asfarian'),
(26, 'Dean Apriana Ramadhan'),
(27, 'Auriza Rahmad Akbar'),
(28, 'Muhammad Abrar Istiadi'),
(29, 'Husnul Khotimah'),
(30, 'Vektor Dewanto'),
(31, 'Mayanda Mega Santoni'),
(32, 'Lailan Sahrina Hasibuan'),
(33, 'Irmansyah'),
(34, 'Mersi Kurniati'),
(35, 'Kusman Sadik'),
(36, 'Muhammad Nur Aidi'),
(37, 'Farida Hanum'),
(38, 'Nur Aliatiningtyas'),
(39, 'Khairil Anwar Notodiputro'),
(40, 'Tri Heru Widarto'),
(41, 'Alfa Chasanah '),
(42, 'Charlena');

-- --------------------------------------------------------

--
-- Table structure for table `netware`
--

CREATE TABLE `netware` (
  `id_netware` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `gambar_net` longblob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `netware`
--

INSERT INTO `netware` (`id_netware`, `id_departemen`, `gambar_net`, `created_at`, `updated_at`) VALUES
(3, 10, 0x546f706f6c6f6769204a6172696e67616e2049504220323031332d323031372e706e67, '2018-09-21 10:38:20', '2018-09-21 10:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `organoware`
--

CREATE TABLE `organoware` (
  `id_organoware` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_organoware` varchar(255) NOT NULL,
  `dokumen` varchar(200) NOT NULL,
  `awal_renstra` year(4) NOT NULL,
  `akhir_renstra` year(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organoware`
--

INSERT INTO `organoware` (`id_organoware`, `id_departemen`, `nama_organoware`, `dokumen`, `awal_renstra`, `akhir_renstra`, `created_at`, `updated_at`) VALUES
(1, 10, 'Ketetapan MWA No.77/MWA-IPB/2008  mengenai pengesahan Struktur Organisasi IPB dan pembentukkan unsur pelaksana administrasi dan sekretariat institut di tingkat institut (Direktorat, Kantor dan Sekretaris Eksekutif) yang baru', '3-BUKU-3-BORANG-AIPT-2011.doc', 2014, 2018, '2018-08-31 12:14:22', '2018-08-31 05:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `pandangan_fmipa_tentang_dosen_tetap`
--

CREATE TABLE `pandangan_fmipa_tentang_dosen_tetap` (
  `id_pandangan_fmipa_tentang_dosen_tetap` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan_pandangan_fmipa_tentang_dosen_tetap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pandangan_fmipa_tentang_dosen_tetap`
--

INSERT INTO `pandangan_fmipa_tentang_dosen_tetap` (`id_pandangan_fmipa_tentang_dosen_tetap`, `id_departemen`, `keterangan_pandangan_fmipa_tentang_dosen_tetap`) VALUES
(5, 10, '<p>Secara umum jumlah dosen MIPA sudah memadai. Jumlah dosen yang bergelar S2 dan S3 mencapai 97.30% dengan proporsi terbesar adalah berpendidikan S3 yaitu sebesar 60.81%. Di samping itu, jumlah Guru Besar/Profesor mencapai 11.71% (26 orang) dari jumlah dosen FMIPA yang ada. Jumlah ini akan terus ditingkatkan hingga mencapai 20% dalam 5-10 tahun ke depan. Saat ini, jenjang kepangkatan dosen didominasi oleh Lektor (30.63%) dan Lektor Kepala (24.32%).&nbsp; Selain itu di beberapa Departemen, terdapat 1 orang dosen yang sedang mengikuti program S2 dan 34 orang dosen yang mengikuti program S3 di dalam dan luar negeri. Dosen yang sekolah di dalam negeri dibiayai oleh beasiswa BPPS, sedangkan yang kuliah di luar negeri semua dibiayai beasiswa dari pemerintah maupun dari luar negeri. Pada beberapa Departemen, penelitian dan publikasi ilmiah dalam Jurnal Nasional dan Internasional relatif tinggi, sedangkan pada Departemen yang lain relatif rendah khususnya pada Departemen yang mendalami ilmu-ilmu dasar.</p>\r\n<p>Beberapa kendala yang dihadapi dalam pengembangan dosen tetap di FMIPA yaitu: (i) peluang mendapatkan beasiswa kuliah (bagi dosen muda) karena persaingan yang makin ketat, (ii) biaya penelitian untuk ilmu-ilmu dasar umumnya sulit untuk diperoleh, (iii) kemampuan Bahasa Inggris yang kurang membatasi peluang untuk publikasi internasional, (iv) pada beberapa Departemen, beban mengajar pada PPKU sangat tinggi sehingga mengurangi waktu untuk melaksanakan kegiatan penelitian dan diseminasi hasil penelitian.</p>\r\n<p>Untuk menjaga kesinambungan SDM dosen maka FMIPA telah membuat perencanaan SDM dosen hingga tahun 2030, yang tertulis dalam&nbsp; dokumen Kompilasi <em>Man Power Planning</em> Fakultas dan Departemen Institut Pertanian Bogor Tahun 2012 &ndash; 2030, dikeluarkan oleh Direktorat Sumber Daya Manusia, Institut Pertanian Bogor tahun 2012 (dokumen disediakan pada saat visitasi). Upaya peningkatan mutu dosen antara lain studi lanjut bagi dosen yang masih S2, pembentukan working group untuk meningkatkan kolaborasi dalam penelitian, pelatihan menulis proposal penelitian dan publikasi, bantuan dana bagi dosen yang akan mengikuti seminar, dan lainnya.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `pandangan_fmipa_tentang_tendik`
--

CREATE TABLE `pandangan_fmipa_tentang_tendik` (
  `id_pandangan_fmipa_tentang_tendik` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan_pandangan_fmipa_tentang_tendik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pandangan_fmipa_tentang_tendik`
--

INSERT INTO `pandangan_fmipa_tentang_tendik` (`id_pandangan_fmipa_tentang_tendik`, `id_departemen`, `keterangan_pandangan_fmipa_tentang_tendik`) VALUES
(5, 10, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Jumlah pegawai yang ada sudah memadai untuk melaksanakan seluruh tugas kependidikan dan administrasi yang dibutuhkan di lingkungan FMIPA IPB. Jumlah pegawai di lingkungan MIPA bervariasi sesuai tipe departemen. Pada Departemen Kimia, Biologi, dan Fisika yang memiliki laboratorium fisik, jumlah pegawainya khususnya laboran lebih banyak dibandingkan dengan Departemen Statistika, Geofisika dan Meteorologi, Matematika, dan Ilmu Komputer.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk menjaga kesinambungan SDM tenaga kependidikan maka FMIPA telah membuat perencanaan SDM tenaga kependidikan hingga tahun 2030 , yang tertulis dalam&nbsp; dokumen Kompilasi <em>Man Power Planning</em> Fakultas dan Departemen Institut Pertanian Bogor Tahun 2012&ndash;2030, dikeluarkan oleh Direktorat Sumber Daya Manusia, Institut Pertanian Bogor tahun 2012.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Upaya peningkatan SDM kependidikan dilakukan melalui pelatihan-pelatihan sesuai dengan bidang kerja masing-masing, misalnya: pelatihan perpajakan, pelatihan Sistem Pelaporan Keuangan, pelatihan administrasi SIMAK, pelatihan pengarsipan surat, <em>achievement motivation training</em>, pelatihan Bahasa Inggris, pelatihan Operasional Repositori Sistem Informasi Kredit Angka Karya Ilmiah (SIPAKARIL), pelatihan Sertifikasi Micosoft Office, pelatihan Jaringan Komputer, pelatihan <em>Character Building</em>, dan pelatihan Pelayanan Prima.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kendala dalam pengembangan tenaga kependidikan yaitu: penguasaan komputer oleh pegawai yang belum merata dan masih banyaknya tenaga kependidikan dengan tingkat pendidikan setingkat SMA. Upaya yang dilakukan adalah memberi kesempatan dan mendorong tenaga kependidikan untuk mengikuti pelatihan-pelatihan literasi komputer yang diadakan oleh Direktorat Integrasi Data dan Sistem Informasi IPB, FMIPA, atau departemen. Di samping itu, kesempatan studi lanjut diberikan kepada tenaga kependidikan baik ke jenjang Diploma, S1 maupun S2 dengan pendanaan dari FMIPA, IPB dan DIKTI.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembelajaran_fakultas`
--

CREATE TABLE `pembelajaran_fakultas` (
  `id_pembelajaran` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelajaran_fakultas`
--

INSERT INTO `pembelajaran_fakultas` (`id_pembelajaran`, `id_departemen`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 10, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sistem monitoring pembelajaran di FMIPA IPB berada di bawah kendali Gugus Penjaminan Mutu (GPM) Fakultas dengan melibatkan Gugus Kendali Mutu (GKM) dari masing-masing departemen. Ketua GKM adalah Sekretaris Departemen. Pelaksanaan perkuliahan dan ujian-ujian (Ujian Tengah Semester, Ujian Akhir Semester, Ujian Komprehensif, atau Ujian Skripsi) dievaluasi menggunakan lembar monitoring yang sudah ditetapkan, selanjutnya dilakukan evaluasi setiap awal dan akhir semester. Dalam pelaksanaan perkuliahan dilakukan kontrol terhadap kehadiran mahasiswa dan dosen melalui lembar absensi yang ditandatangani oleh dosen dan mahasiswa dan dilakukan kontrol terhadap isi perkuliahan melalui berita acara dan kontrak perkuliahan.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Penilaian terhadap pelaksanaan perkuliahan dan ujian dilakukan dengan menggunakan instrumen yang telah ditetapkan oleh Direktorat Administrasi Pendidikan. Dalam monitoring dan evaluasi pelaksanaan kegiatan akademik tersebut, mahasiswa juga dilibatkan dalam melakukan penilaian dengan menggunakan angket untuk setiap mata kuliah di akhir semester. Berdasarkan hasil evaluasi tersebut, pimpinan fakultas melakukan koordinasi dengan seluruh pimpinan departemen (Ketua dan Sekretaris Departemen) untuk mendapatkan masukan dalam upaya memperbaiki pelaksanaan kegiatan akademik pada semester berikutnya. Mulai Semester Ganjil 2012/2013, Direktorat Administrasi Pendidikan IPB menerapkan aplikasi EPBM (Evaluasi Proses Belajar Mengajar) <em>online</em> kepada mahasiswa untuk memberikan penilaian secara <em>online</em> terhadap pelaksanaan perkuliahan yang telah diikutinya.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: \'times new roman\', times, serif; font-size: 10pt;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Fakultas melalukan monitoring dan evaluasi pembelajaran setiap semester melalui lokakarya akademik. Lokakarya akademik telah dilaksanakan pada setiap akhir semester sehingga dilakukan 2 kali per tahun sejak tahun 2013 sampai sekarang yang diikuti oleh Ketua Departemen, Sekretaris Departemen, Komisi Pendidikan, dan dosen-dosen di lingkungan FMIPA. Pada saat lokakarya disampaikan bagaimana distribusi nilai semester ganjil/semester genap, evaluasi permasalahan perkuliahan mencakup jumlah kehadiran dosen, mahasiswa, serta nilai EPBM untuk masing-masing mata kuliah. Dari hasil lokakarya ini akan dilakukan langkah-langkah untuk mengefektifkan kegiatan pembelajaran pada semester kedepannya. Hasil lokakarya ini sangat bermanfaat sehingga bisa terjadi pertukaran informasi bagi antar Departemen sehingga dapat dicapai hasil yang lebih baik.</span> </span></p>', '2018-10-24 02:39:28', '2018-10-23 19:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `pendapat_pimpinan`
--

CREATE TABLE `pendapat_pimpinan` (
  `id_pendapat_pimp` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendapat_pimpinan`
--

INSERT INTO `pendapat_pimpinan` (`id_pendapat_pimp`, `id_departemen`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 10, 'Pengelolaan keuangan Departemen dan Fakultas dilakukan melalui mekanisme penyusunan RKAT (Rencana Kegiatan dan Anggaran Tahunan). Kompilasi RKAT di tingkat Fakultas dan Institusi secara berturut-turut dilaksanakan pada sekitar bulan Mei dan Juni setelah mendapat persetujuan dari MWA IPB, biasanya sekitar bulan Oktober-November. Selanjutnya IPB menerbitkan SK Rektor tentang SPPA (Surat Pengesahan Penggunaan Anggaran) yang mengatur rencana pemasukan dan penggunaan dana fakultas selama 1 (satu) tahun akademik yang akan berjalan. \r\n\r\nPenyusunan RKAT di tingkat  fakultas dilakukan melalui mekanisme rapat internal fakultas yang melibatkan seluruh komponen manajemen fakultas antara lain: 2 Wakil Dekan, serta  Sekretaris Fakultas, dan KTU. Dalam rapat tersebut dibahas usulan kegiatan dan anggaran yang diajukan berdasarkan perkiraan penerimaan pada tahun akademik yang sama.  Dari sini aspek kecukupannya terpenuhi, karena program yang diusulkan akan didasarkan pada penerimaan dana pada saat itu.\r\n\r\nUpaya penggalian dana dilakukan melalui kerjasama penelitian dengan instansi-instansi lain baik negeri maupun swasta, diantaranya: kerjasama dengan PT. Sucofindo, PT. Donalphin, Columbia University, Pengembangan Kayu Gaharu dengan Kabupaten Sumba Tengah dan Sulawesi Tengah, kerjasama dengan Pemda Nias Utara, PEMDA Simalungun.   Rencana lainnya yang adalah sedang diupayakan adalah pemanfaatan CSR (Company Social Reponsibility) untuk mendukung peningkatan kualitas lulusan SMA di beberapa PEMDA antara lain Jawa Barat, Banten, Kalimantan Selatan dan Kalimantan Timur.  Di samping itu, telah adanya pendirian Satuan Usaha Akademik di beberapa departemen, seperti Biologi.', '2018-08-25 03:10:46', '2018-08-24 20:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `penelitians`
--

CREATE TABLE `penelitians` (
  `id_penelitian` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_bukti` int(11) DEFAULT NULL,
  `id_proposal` int(11) DEFAULT NULL,
  `judul_penelitian` varchar(255) NOT NULL,
  `nama_peneliti` varchar(255) NOT NULL,
  `tahun_penelitian` date NOT NULL,
  `jumlah_dana` decimal(20,2) NOT NULL,
  `id_sumberr` int(11) NOT NULL,
  `jenis_dana` varchar(255) NOT NULL,
  `jumlah_mahasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penelitians`
--

INSERT INTO `penelitians` (`id_penelitian`, `id_departemen`, `id_bukti`, `id_proposal`, `judul_penelitian`, `nama_peneliti`, `tahun_penelitian`, `jumlah_dana`, `id_sumberr`, `jenis_dana`, `jumlah_mahasiswa`) VALUES
(31, 2, 34, NULL, 'Xxxx', 'XX', '2016-02-02', '767.00', 1, 'aaa', 0),
(33, 3, NULL, 7, 'Hewan', 'Ina', '2018-06-06', '34.00', 5, 'Penelitian', 5),
(34, 6, NULL, NULL, 'Pengembangan Sistem Prediksi Khasiat Formula Jamu dengan Pendekatan Reverse dan Network Pharmachology untuk Jamu Antidiabetes', 'Dr. Eng Wisnu Ananta Kusuma, ST, MT', '2016-03-12', '20.00', 3, 'Dikti', 3),
(35, 6, NULL, NULL, 'Alkohol', 'A', '2019-12-12', '1.00', 1, 'Penelitian', 0),
(36, 3, NULL, NULL, 'Alkohol Bio', 'A', '2016-12-12', '2.00', 3, 'Penelitian', 0),
(46, 6, 36, NULL, 'Monitoring Lingkungan Hidup Ikan Sidat', 'Dr Sri Wahjuni, ST, MT', '2016-12-02', '50.00', 3, 'Dikti', 2),
(47, 6, NULL, NULL, 'Network Pharmacology', 'Dr. Eng Wisnu Ananta Kusuma, ST, MT', '2016-06-06', '70.00', 5, 'Pengabdian', 6),
(48, 6, NULL, NULL, 'Perancangan Robot Berkaki Enam dengan Algoritme Fuzzy Wall-Following', 'Karlisa Priandana, ST., M.Eng', '2016-09-09', '68.00', 3, 'Dikti', 2),
(50, 6, NULL, NULL, 'Evaluasi Router Border IPB', 'Dr. Eng Heru Sukoco, S.Si, MT', '2016-11-10', '24.00', 1, 'Penelitian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `penerimaans`
--

CREATE TABLE `penerimaans` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_mahasiswa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_mahasiswa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penerimaans`
--

INSERT INTO `penerimaans` (`id`, `tipe`, `jenis_mahasiswa`, `jumlah_mahasiswa`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'd', 'd', 'd', 'd', '2018-02-28 06:15:30', '2018-02-28 06:15:30'),
(2, 'd', 'd', 'd', 'ss', '2018-02-28 06:16:10', '2018-02-28 06:16:10'),
(3, 'd', 'd', 'd', 'ss', '2018-02-28 06:16:12', '2018-02-28 06:16:12'),
(4, 'd', 'd', 'd', 'ss', '2018-02-28 06:16:12', '2018-02-28 06:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan_dana`
--

CREATE TABLE `penerimaan_dana` (
  `id_terima_dana` int(11) NOT NULL,
  `id_departemen` int(11) DEFAULT NULL,
  `id_sumber_danaa` int(11) DEFAULT NULL,
  `jenis_dana` varchar(250) DEFAULT NULL,
  `jumlah_dana_terima` decimal(20,2) DEFAULT NULL,
  `tahun_terima_dana` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerimaan_dana`
--

INSERT INTO `penerimaan_dana` (`id_terima_dana`, `id_departemen`, `id_sumber_danaa`, `jenis_dana`, `jumlah_dana_terima`, `tahun_terima_dana`, `created_at`, `updated_at`) VALUES
(12, 6, 1, 'Dana Masyarakat (SPP Mahasiswa S1)', '3902.97', '2018-08-27', '2018-12-16 18:41:33', '2018-12-16 18:41:33'),
(16, 6, 2, 'Gaji rutin', '1770.61', '2018-09-03', '2018-12-16 18:43:45', '2018-12-16 18:43:45'),
(27, 10, 3, 'Kerjasama', '200.00', '2018-09-09', '2018-12-16 18:42:58', '2018-12-16 18:42:58'),
(28, 10, 2, 'Gaji rutin', '123.00', '2017-09-16', '2018-12-16 18:43:49', '2018-12-16 18:43:49'),
(29, 10, 1, 'Dana Masyarakat (SPP Mahasiswa S1)', '167.00', '2018-09-16', '2018-12-16 18:41:40', '2018-12-16 18:41:40'),
(30, 10, 1, 'Dana Masyarakat (SPP Mahasiswa S1)', '234.00', '2016-09-16', '2018-12-16 18:41:49', '2018-12-16 18:41:49'),
(37, 6, 2, 'Gaji rutin', '1593.55', '2017-09-20', '2018-12-16 18:43:54', '2018-12-16 18:43:54'),
(39, 6, 1, 'Dana Masyarakat (SPP Mahasiswa S1)', '4239.26', '2017-09-26', '2018-12-16 18:41:55', '2018-12-16 18:41:55'),
(45, 6, 1, 'Penelitian', '1802.00', '2016-09-29', '2018-12-16 18:42:31', '2018-12-16 18:42:31'),
(46, 6, 1, 'Penelitian', '797.99', '2017-09-29', '2018-12-16 18:42:35', '2018-12-16 18:42:35'),
(47, 6, 1, 'Penelitian', '551.30', '2018-09-29', '2018-12-16 18:42:38', '2018-12-16 18:42:38'),
(48, 6, 2, 'Gaji rutin', '1434.20', '2016-09-29', '2018-12-16 18:43:57', '2018-12-16 18:43:57'),
(49, 6, 3, 'Kerjasama', '609.50', '2016-09-29', '2018-12-16 18:43:04', '2018-12-16 18:43:04'),
(50, 6, 3, 'Kerjasama', '531.50', '2017-09-29', '2018-12-16 18:43:09', '2018-12-16 18:43:09'),
(51, 6, 3, 'Kerjasama', '1253.00', '2018-09-29', '2018-12-16 18:43:12', '2018-12-16 18:43:12'),
(52, 4, 1, 'Dana Masyarakat (SPP Mahasiswa S1)', '2000.87', '2016-10-01', '2018-12-16 18:42:00', '2018-12-16 18:42:00'),
(53, 10, 2, 'Dana Masyarakat (SPP Mahasiswa S1)', '2.00', '2018-10-03', '2018-12-16 18:42:05', '2018-12-16 18:42:05'),
(57, 6, 1, 'Kerjasama', '222.00', '2018-10-17', '2018-12-16 18:43:16', '2018-12-16 18:43:16'),
(58, 6, 1, 'Dana Masyarakat (SPP Mahasiswa S1)', '1200.50', '2016-10-26', '2018-12-16 18:42:09', '2018-12-16 18:42:09'),
(59, 6, 1, 'Kerjasama', '111.00', '2016-10-28', '2018-12-16 18:43:20', '2018-12-16 18:43:20'),
(60, 6, 3, 'Pengabdian Masyarakat', '12.00', '2018-10-29', '2018-12-16 18:44:16', '2018-12-16 18:44:16'),
(61, 6, 1, 'Penelitian', '1.00', '2018-12-17', '2018-12-16 18:42:45', '2018-12-16 18:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `pengabdians`
--

CREATE TABLE `pengabdians` (
  `id_pengabdian` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_buktiPeng` int(11) DEFAULT NULL,
  `id_proposalPeng` int(11) DEFAULT NULL,
  `judul_pengabdian` varchar(255) NOT NULL,
  `institusi` text NOT NULL,
  `tahun_pengabdian` date NOT NULL,
  `jumlah_dana_peng` decimal(20,2) DEFAULT NULL,
  `jumlah_mahasiswa_peng` int(11) NOT NULL,
  `keterlibatan_mahasiswa` text NOT NULL,
  `id_sumberr` int(11) NOT NULL,
  `jenis_dana_peng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengabdians`
--

INSERT INTO `pengabdians` (`id_pengabdian`, `id_departemen`, `id_buktiPeng`, `id_proposalPeng`, `judul_pengabdian`, `institusi`, `tahun_pengabdian`, `jumlah_dana_peng`, `jumlah_mahasiswa_peng`, `keterlibatan_mahasiswa`, `id_sumberr`, `jenis_dana_peng`) VALUES
(8, 3, 3, NULL, 'Masyarakat', 'Ana', '2017-10-20', '11111.00', 0, '', 5, 'Pengabdian'),
(9, 1, 4, NULL, 'Pengabdian', 'manuel', '2017-08-16', '20000.00', 0, '', 4, 'Pengabdian'),
(10, 3, 5, NULL, 'Pembinaan sistem Informasi', 'ddd', '2016-04-10', '34455.00', 0, '', 2, 'Pengabdian'),
(16, 6, NULL, NULL, 'Masyarakat', 'LKP Tepi Sawah', '2016-01-02', '12.00', 2, 'Kegiatan yang dilakukan adalah memberikan pengajaran kepada anak-anak desa, dan untuk menjaga hubungan baik dengan masyarakat desa sekitar kampus', 1, 'Pengabdian');

-- --------------------------------------------------------

--
-- Table structure for table `pengelolaan_dana_ps`
--

CREATE TABLE `pengelolaan_dana_ps` (
  `id_kelola` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `penjelasan_kelola` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengelolaan_dana_ps`
--

INSERT INTO `pengelolaan_dana_ps` (`id_kelola`, `id_departemen`, `penjelasan_kelola`, `created_at`, `updated_at`) VALUES
(1, 1, '<p>isi</p>', '2018-09-27 09:36:30', '2018-09-27 02:36:30'),
(2, 2, 'isi', '2018-09-27 02:51:34', '0000-00-00 00:00:00'),
(3, 3, 'isi', '2018-09-27 02:51:34', '0000-00-00 00:00:00'),
(4, 4, 'isi', '2018-09-27 02:51:34', '0000-00-00 00:00:00'),
(5, 5, 'isi', '2018-09-27 02:51:34', '0000-00-00 00:00:00'),
(6, 6, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><span class=\"fontstyle0\"><strong>Pengelolaan dan Akuntabilitas Penggunaan Dana</strong><br /></span><span class=\"fontstyle2\">Sebagai salah satu institusi yang besar di tanah air, Institut Pertanian Bogor (IPB) telah mempunyai sistem keuangan yang sangat baik, dengan cara pengelolaan dana yang sangat transparan dan dapat dipertanggungjawabkan. Pengawasan penggunaan dana dilakukan secara reguler oleh pihak internal IPB (Kantor Audit Internal) dan pihak eksternal (Akuntan Publik dan BPK). Dalam tiga tahun terakhir (2013, 2014 dan 2015) IPB telah mendapat penilaian Wajar Tanpa Pengecualian (WTP) dari kantor akuntan publik.</span></span></p>\r\n<p style=\"text-align: justify;\"><span class=\"fontstyle2\" style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\">Sistem pengelolaan dana di Departemen Ilmu Komputer dilakukan secara transparan mengikuti mekanisme dan aturan yang telah ditetapkan oleh IPB melalui keputusan Rektor, dengan proses sebagai berikut: pada setiap bulan April tahun berjalan, semua departemen menyusun dan mengusulkan Rencana Kegiatan dan Anggaran Tahunan (RKAT) untuk tahun berikutnya kepada Rektor melalui Dekan Fakultas. Kemudian pada bulan Mei, Rektor bersama-sama pimpinan Fakultas dan Departemen membahas usulan RKAT tersebut dalam suatu rapat pleno. Hasil rapat selanjutnya disampaikan kepada Majelis Wali Amanat (MWA) dan Senat Akademik (SA) IPB untuk mendapatkan persetujuan. Setelah mendapat persetujuan dari MWA dan SA IPB, pada bulan Oktober Rektor mengeluarkan Surat Pengesahan Penggunaan Anggaran SPPA) yang mengatur rencana pemasukan dan penggunaan dana departemen selama 1 (satu) tahun akademik yang akan berjalan seperti yang ada dalam RKAT yang diajukan oleh departemen terkait. </span></p>\r\n<p style=\"text-align: justify;\"><span class=\"fontstyle2\" style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\">Penyusunan RKAT di tingkat departemen dilakukan melalui mekanisme rapat internal departemen yang melibatkan seluruh komponen manajemen departemen antara lain: Ketua Departemen, Sekretaris Departemen, para pengelola Program Studi, para Kepala Divisi, dan para koordinator kegiatan pada setiap akhir semester ganjil. Rapat tersebut membahas usulan kegiatan dan anggaran yang diajukan oleh setiap unit dalam departemen berdasarkan perkiraan penerimaan pada tahun akademik yang akan datang. RKAT yang telah dikompilasi selanjutnya disosialisasikan di forum Rabuan (rapat rutin staf pengajar setiap hari Rabu) sebelum diajukan ke institusi (IPB). Kegiatan ini merupakan salah satu bentuk pengawasan di level internal, sedangkan bentuk pengawasan di level eksternal dilakukan oleh institusi melalui Kantor Audit Internal.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><span class=\"fontstyle2\">Dalam pelaksanaannya, penggunaan dana yang telah ditetapkan dalam RKAT dilakukan berdasarkan sistem </span><span class=\"fontstyle3\">Petty Cash</span><span class=\"fontstyle2\">. Dalam hal ini, Direktorat Keuangan IPB akan menransfer dana ke rekening departemen dengan nilai dan waktu seperti yang telah ditetapkan dalam SPPA. Pencairan dana berikutnya baru dapat dilakukan bila pengeluaran pada bulan sebelumnya telah&nbsp;</span><span class=\"fontstyle2\">dipertanggungjawabkan (di-SPJ-kan) oleh departemen. </span><span class=\"fontstyle0\">Gambar 6.1 </span><span class=\"fontstyle2\">menunjukkan proses pengajuan dana dari Departemen ke Direktorat Keuangan IPB (sekarang berubah menjadi Biro Keuangan IPB).</span></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\">Di tingkat departemen, penggunaan dana dilakukan secara terintegrasi dengan mengacu kepada RKAT yang telah diajukan dan disepakati oleh setiap komponen dalam departemen. Dengan demikian, efisiensi dan transparansi dalam alokasi anggaran dapat tercapai. Dalam RKAT yang diusulkan di tingkat departemen juga diperhatikan keseimbangan antar-bagian dalam sistem alokasi anggaran untuk mempertahankan dan meningkatkan mutu setiap program atau bagian yang terlibat.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\">Penetapan nilai besaran alokasi dana, sebagai contoh penghonoran, dilakukan berdasar SK Rektor, namun variasinya bisa didiskusikan dan diputuskan dalam rabuan dosen departemen untuk disepakati bersama.&nbsp; Hal ini menunjukkan adanya keterbukaan dalam pengelolaan dana di tingkat departemen. Secara umum alokasi dana tersebut terbagi atas beberapa pos yaitu: akademik, penelitian, layanan masyarakat, administrasi, pemasaran, kemahasiswaan, manajemen departemen dan kegiatan-kegiatan untuk pengembangan.</span></p>\r\n<h2 style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Keberlanjutan Pengadaan dan Pemanfaatannya</strong></span></h2>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\">Sumber pendanaan di Departemen Ilmu Komputer diperoleh dari dana masyarakat dan pemerintah (APBN). Dana masyarakat terdiri atas SPP, non-SPP, kerja sama penelitian, kerjasama pengabdian kepada masyarakat dan hibah penelitian, sedangkan dana bersumber APBN berupa komponen belanja pegawai dan program hibah institusi. Dalam tiga tahun terakhir secara berturut-turut seluruh komponen di departemen mampu membangkitkan dana sebesar Rp. 4,75 milyar (2013), Rp 5,13 milyar&nbsp; (2014) dan Rp 5,35 milyar (2015).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\">Dilihat dari cukup bervariasinya sumber dana yang bisa dibangkitkan oleh departemen bersama dosen serta nilainya yang sangat mencukupi seluruh kebutuhan departemen, maka keberlanjutan program terjamin dengan baik.&nbsp; Selain itu, upaya promosi yang sangat gencar dilakukan oleh departemen bersama-sama dengan institusi telah berhasil menaikkan jumlah mahasiswa Beasiswa Utusan Daerah (BUD) dengan nilai kerja sama yang cukup besar dan terus mengalami peningkatan setiap tahunnya.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\">Komitmen yang sangat baik dari pemerintah yang ditunjukkan dengan terus meningkatnya anggaran pendidikan di tanah air telah memberikan jaminan keberlangsungan bagi program pendidikan pada semua strata, termasuk program sarjana di Departemen Ilmu Komputer IPB. Bantuan dana dari pemerintah tersebut direalisasikan dalam bentuk pengadaan sarana dan peralatan PBM yang semakin lengkap, pemberian beasiswa untuk melanjutkan studi ke jenjang S3 kepada dosen departemen Ilmu Komputer IPB.</span></p>', '2018-12-03 04:36:16', '2018-12-02 21:36:16'),
(7, 7, 'isi', '2018-09-27 02:51:34', '0000-00-00 00:00:00'),
(8, 8, 'isi', '2018-09-27 02:51:34', '0000-00-00 00:00:00'),
(9, 9, 'isi', '2018-09-27 02:51:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(10) NOT NULL,
  `id_departemen` int(11) DEFAULT NULL,
  `role` int(20) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `username` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id_departemen`, `role`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 6, 5, 'l', 'l', 'l@gmail.com', '123456', NULL, '2018-04-16 20:47:09', '2018-04-16 20:47:09'),
(2, 6, 5, 'l', 'l', 'l@gmail.com', '123456', NULL, '2018-04-16 21:00:53', '2018-04-16 21:00:53'),
(3, 6, 5, 'll', 'll', 'll@gmail.com', '123456', NULL, '2018-04-16 21:01:44', '2018-04-16 21:01:44'),
(4, 6, 5, 'lll', 'lll', 'lla@gmail.com', '123456', NULL, '2018-04-16 21:14:16', '2018-04-16 21:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `penggunaan_dana`
--

CREATE TABLE `penggunaan_dana` (
  `id_penggunaan_dana` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `tahun_penggunaan` year(4) NOT NULL,
  `pendidikan` decimal(20,2) NOT NULL,
  `penelitian` decimal(20,2) NOT NULL,
  `pengabdian` decimal(20,2) NOT NULL,
  `inves_pras` decimal(20,2) NOT NULL,
  `inves_sar` decimal(20,2) NOT NULL,
  `inves_sdm` decimal(20,2) NOT NULL,
  `lain_lain` decimal(20,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penggunaan_dana`
--

INSERT INTO `penggunaan_dana` (`id_penggunaan_dana`, `id_departemen`, `tahun_penggunaan`, `pendidikan`, `penelitian`, `pengabdian`, `inves_pras`, `inves_sar`, `inves_sdm`, `lain_lain`, `created_at`, `updated_at`) VALUES
(29, 3, 2018, '90.00', '0.00', '0.00', '93.00', '9.00', '30.00', '80.00', '2018-09-15 15:26:42', '2018-09-02 09:57:18'),
(38, 6, 2016, '3919.96', '1802.00', '609.50', '572.56', '0.00', '0.00', '205.96', '2018-09-28 21:25:42', '2018-09-28 21:25:42'),
(39, 6, 2017, '4507.84', '798.00', '531.50', '347.60', '0.00', '0.00', '113.44', '2018-09-28 22:55:08', '2018-09-28 22:55:08'),
(40, 6, 2018, '5094.70', '551.30', '1253.00', '203.96', '0.00', '0.00', '118.10', '2018-09-28 22:56:10', '2018-09-28 22:56:10'),
(41, 4, 2018, '1.00', '2.00', '2.00', '5.00', '2.00', '5.00', '2.00', '2018-09-30 23:04:23', '2018-09-30 23:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_fmipa`
--

CREATE TABLE `penilaian_fmipa` (
  `id_penilaian` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `penilaian` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian_fmipa`
--

INSERT INTO `penilaian_fmipa` (`id_penilaian`, `id_departemen`, `penilaian`, `created_at`, `updated_at`) VALUES
(1, 10, 'Sarana yang digunakan untuk menunjang kegiatan belajar mengajar di FMIPA IPB meliputi sarana umum perkuliahan seperti LCD dan laptop/komputer, alat-alat laboratorium maupun peralatan kantor penunjang administrasi. Selain itu, juga buku-buku dan jurnal ilmiah yang selalu diperbaharui di perpustakaan serta akses Internet yang terus ditingkatkan. Untuk peralatan laboratorium dilakukan upaya perbaikan dan peremajaan sesuai dengan perkembangan peralatan yang baru. Komputer yang ada di lab komputer di-upgrade sesuai dengan perkembangan dan kebutuhan. Hampir di setiap ruang kuliah disediakan LCD proyektor yang terpasang secara permanen dan pengeras suara yang siap digunakan. Untuk ruangan yang tidak dilengkapi LCD proyektor secara permanen, petugas dari masing-masing departemen menyiapkan LCD proyektor sebelum perkuliahan dimulai.  Beberapa tahun yang lalu di setiap ruang kuliah (ruang kuliah besar) juga dilengkapi dengan komputer desktop secara permanen. Namun pada saat sekarang hampir semua komputer tersebut sudah tidak digunakan lagi karena setiap dosen menggunakan laptop masing-masing.\r\nUntuk 5 tahun mendatang pengembangan sarana pendidikan diarahkan pada perbaikan dan pembaharuan sarana laboratorium sehingga peralatan laboratorium menjadi up to date.', '2018-09-15 16:23:20', '2018-09-15 09:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_prasaranaa`
--

CREATE TABLE `penilaian_prasaranaa` (
  `id_nilai_pras` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `penilaian_pras` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian_prasaranaa`
--

INSERT INTO `penilaian_prasaranaa` (`id_nilai_pras`, `id_departemen`, `penilaian_pras`, `created_at`, `updated_at`) VALUES
(1, 10, 'Prasarana yang dimiliki oleh FMIPA IPB meliputi prasarana akademik dan non-akademik. Prasarana akademik yang meliputi ruang kuliah, ruang seminar, ruang diskusi, perpustakaan maupun ruang-ruang laboratorium tersedia dengan sangat memadai dan dalam kondisi yang sangat baik. Prasarana perkuliahan khususnya kelas besar dikelola secara terpusat di tingkat institut sedangkan ruang seminar, kelas kecil dan ruang diskusi serta ruang-ruang laboratorium dikelola sepenuhnya oleh FMIPA IPB. Pada tahun 2012 telah diselesaikan pembangunan Common Class Room (CCR). Perpustakaan terbagi menjadi perpustakaan pusat dan perpustakaan FMIPA. Pada setiap perpustakaan disediakan juga ruang baca serta dilengkapi akses Internet. Pada tahun 2016 telah diselesaikan pembangunan Auditorium FMIPA yang digunakan untuk kegiatan akademik dan non-akademik di FMIPA IPB.\r\nPrasarana non-akademik yang meliputi prasarana olahraga in door dan out door, tempat ibadah, klinik, asrama mahasiswa nasional dan internasional, asrama tamu, taman, gedung-gedung pertemuan, bis kampus, mobil listrik, tempat parkir, jalan sepeda, trotoir mahasiswa, kantin, mini market, cyber mahasiswa, gedung koperasi mahasiswa, gedung student center dan prasarana kegiatan kemahasiswaan lainnya juga tersedia sangat memadai. Semua prasarana tersebut dipelihara secara rutin oleh Direktorat Fasilitas dan Properti. Gambar-gambar beberapa fasilitas IPB dapat dilihat pada Gambar 6.4 sampai Gambar 6.9.\r\nUntuk pengembangan 5 tahun ke depan FMIPA IPB merencanakan perluasan beberapa prasarana lain di tingkat departemen. Saat ini telah dibangun teaching laboratory terpadu  yang digunakan untuk kegiatan praktikum di tingkat PPKU. Pada tahun 2014 telah dibangun FabLAb yang merupakan hasil kerjasama FMIPA-Univ. Columbia dengan dana dari USAID untuk pengembangan MIPA bagi guru-guru MIPA maupun siswa juga dapat dIgunakan untuk menunjang sarana pembelajaran bagi mahasiswa MIPA.', '2018-09-20 04:52:41', '2018-09-19 21:52:41');

-- --------------------------------------------------------

--
-- Table structure for table `peningkatan_kemampuan`
--

CREATE TABLE `peningkatan_kemampuan` (
  `id_peningkatan_kemampuan` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm11` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang_pendidikan_lanjut` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_studi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `perguruan_tinggi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_mulai_studi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peningkatan_kemampuan`
--

INSERT INTO `peningkatan_kemampuan` (`id_peningkatan_kemampuan`, `id_departemen`, `nama_sdm11`, `jenjang_pendidikan_lanjut`, `bidang_studi`, `perguruan_tinggi`, `negara`, `tahun_mulai_studi`, `created_at`, `updated_at`) VALUES
(11, 1, 'Sony Hartono Wijaya, S.Kom, M.Kom', 'S3', 'Ilmu Komputer', 'Nara Institute of Technology', 'Jepang', 2014, '2018-09-25 08:36:59', '2018-09-25 08:36:59'),
(12, 1, 'Hendra Rahmawan, S.Kom, M.T', 'S3', 'Teknik Elektro', 'Institut Teknologi Bandung', 'Indonesia', 2013, '2018-09-25 08:38:18', '2018-09-25 08:38:18'),
(21, 2, 'Sony Hartono Wijaya, S.Kom, M.Kom', 'S3', 'Ilmu Komputer', 'Nara Institute of Technology', 'Jepang', 2014, '2018-09-25 08:36:59', '2018-09-25 08:36:59'),
(22, 2, 'Hendra Rahmawan, S.Kom, M.T', 'S3', 'Teknik Elektro', 'Institut Teknologi Bandung', 'Indonesia', 2013, '2018-09-25 08:38:18', '2018-09-25 08:38:18'),
(31, 3, 'Sony Hartono Wijaya, S.Kom, M.Kom', 'S3', 'Ilmu Komputer', 'Nara Institute of Technology', 'Jepang', 2014, '2018-09-25 08:36:59', '2018-09-25 08:36:59'),
(32, 3, 'Hendra Rahmawan, S.Kom, M.T', 'S3', 'Teknik Elektro', 'Institut Teknologi Bandung', 'Indonesia', 2013, '2018-09-25 08:38:18', '2018-09-25 08:38:18'),
(41, 4, 'Sony Hartono Wijaya, S.Kom, M.Kom', 'S3', 'Ilmu Komputer', 'Nara Institute of Technology', 'Jepang', 2014, '2018-09-25 08:36:59', '2018-09-25 08:36:59'),
(42, 4, 'Hendra Rahmawan, S.Kom, M.T', 'S3', 'Teknik Elektro', 'Institut Teknologi Bandung', 'Indonesia', 2013, '2018-09-25 08:38:18', '2018-09-25 08:38:18'),
(51, 5, 'Sony Hartono Wijaya, S.Kom, M.Kom', 'S3', 'Ilmu Komputer', 'Nara Institute of Technology', 'Jepang', 2014, '2018-09-25 08:36:59', '2018-09-25 08:36:59'),
(52, 5, 'Hendra Rahmawan, S.Kom, M.T', 'S3', 'Teknik Elektro', 'Institut Teknologi Bandung', 'Indonesia', 2013, '2018-09-25 08:38:18', '2018-09-25 08:38:18'),
(61, 6, 'Sony Hartono Wijaya, S.Kom, M.Kom', 'S3', 'Ilmu Komputer', 'Nara Institute of Technology', 'Jepang', 2014, '2018-09-25 08:36:59', '2018-09-25 08:36:59'),
(62, 6, 'Hendra Rahmawan, S.Kom, M.T', 'S3', 'Teknik Elektro', 'Institut Teknologi Bandung', 'Indonesia', 2013, '2018-09-25 08:38:18', '2018-09-25 08:38:18'),
(71, 7, 'Sony Hartono Wijaya, S.Kom, M.Kom', 'S3', 'Ilmu Komputer', 'Nara Institute of Technology', 'Jepang', 2014, '2018-09-25 08:36:59', '2018-09-25 08:36:59'),
(72, 7, 'Hendra Rahmawan, S.Kom, M.T', 'S3', 'Teknik Elektro', 'Institut Teknologi Bandung', 'Indonesia', 2013, '2018-09-25 08:38:18', '2018-09-25 08:38:18'),
(81, 8, 'Sony Hartono Wijaya, S.Kom, M.Kom', 'S3', 'Ilmu Komputer', 'Nara Institute of Technology', 'Jepang', 2014, '2018-09-25 08:36:59', '2018-09-25 08:36:59'),
(82, 8, 'Hendra Rahmawan, S.Kom, M.T', 'S3', 'Teknik Elektro', 'Institut Teknologi Bandung', 'Indonesia', 2013, '2018-09-25 08:38:18', '2018-09-25 08:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `penjelasan_organoware`
--

CREATE TABLE `penjelasan_organoware` (
  `id_penjelasan` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `penjelasan` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjelasan_organoware`
--

INSERT INTO `penjelasan_organoware` (`id_penjelasan`, `id_departemen`, `penjelasan`, `created_at`, `updated_at`) VALUES
(1, 10, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Teknologi informasi saat ini merupakan salah satu komponen terpenting dalam suatu institusi. Penerapan teknologi informasi di IPB didasarkan pada kebijakan dan program strategis IPB sejak tahun 2008-2013. Dalam kebijakan tersebut dinyatakan bahwa fasilitas teknologi informasi sangat diperlukan dalam mencapai target IPB, termasuk FMIPA dan departemen-departemen yang ada di dalamnya untuk menjadi <em>World Class University</em> dan <em>Research Based University</em>. Peningkatan sistem dan teknologi komunikasi dan infomasi merupakan bagian dari salah satu program kerja IPB 2014-2018 yaitu Penguatan Keterandalan Sistem Manajemen yang tertulis dalam Renstra IPB 2014-2018. Oleh karena itu, dukungan TI dilakukan pada semua komponen, yaitu <em>organoware, netware, hardware, software, brainware, dan dataware. </em></span></p>\r\n<h3 style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">a. <em>Organoware</em> (organisasi) </span></h3>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dukungan komponen organisasi pada tingkat IPB diwujudkan melalui pembentukan Direktorat Komunikasi dan Sistem Informasi (DKSI) yang saat ini menjadi Direktorat Integrasi Data dan Sistem Informasi (DIDSI). DIDSI dibentuk melalui:</span></p>\r\n<ol style=\"list-style-type: lower-roman; text-align: justify;\">\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"> Ketetapan MWA No.77/MWA-IPB/2008 mengenai pengesahan Struktur Organisasi IPB dan pembentukkan unsur pelaksana administrasi dan sekretariat institut di tingkat institut (Direktorat, Kantor dan Sekretaris Eksekutif) yang baru (Lampiran 5.1) dan</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">SK Rektor No. 023/I3/OT/2008 tentang Perubahan Nama dan Penghapusan Satuan Kerja Pelaksana Administrasi Tingkat Institut di Lingkungan Institut Pertanian Bogor (Lampiran 5.2). Berdasarkan SK ini telah dilakukan perubahan nama dari Kantor Pengembangan Sistem Informasi (KPSI) menjadi Direktorat Komunikasi dan Sistem Informasi (DKSI) dan akhirnya pada tahun 2013 menjadi DITSI. Kemudian berdasarkan SK MWA-IPB Nomor: 125/MWA-IPB/2013 tentang pengesahan Struktur Organisasi IPB yang baru (Lampiran 5.3) dan Keputusan Rektor No 164/IT3/OT/2013 mengenai Perubahan Nama dan Penghapusan Satuan Kerja Unsur Pelaksana Administrasi dan Sekretariat Institut di Lingkungan Institut Pertanian Bogor (Lampiran 5.4), unit pengelola Teknologi, Informasi dan Komunikasi/Information and Commmunication Technology (ICT) di IPB berubah menjadi Direktorat Integrasi Data dan Sistem Informasi (DIDSI).</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan SK MWA-IPB Nomor: 125/MWA-IPB/2013, Tugas Pokok dan Fungsi Direktorat Integrasi Data dan Sistem Informasi (DIDSI) IPB sebagai berikut: Tugas Pokok: Melaksanakan tugas teknis dan administratif Dit. IDSI dalam pengkajian dan perumusan rencana pengembangan komunikasi data, suara, dan sistem informasi institut Fungsi: </span></p>\r\n<ol style=\"list-style-type: lower-roman; text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengembangan dan peningkatan kapasitas sumberdaya dibidang teknologi informasi yang meliputi infrastruktur jaringan komputer dan sumberdaya manusia yang terlibat di dalamnya; </span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengadaan, inventarisasi, perawatan, dan pengembangan infrastruktur jaringan yang meliputi infrastruktur (hardware, software, netware, serta sistem elektrisitas) jaringan komunikasi data dan suara institut; </span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Penyusunan dan pengendalian prosedur operasional baku (standard operational procedure-SOP) di bidang sistem jaringan komputer, sekuriti, regulasi, evaluasi dan administrasi sistem jaringan komunikasi; </span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pelaksanaan penilaian (assessment) terhadap kondisi dan kinerja Teknologi dan Sistem Informasi yang telah dikembangkan. </span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Struktur organisasi di bawah DIDSI terdiri atas 3 Sub-Direktorat, yaitu: </span></p>\r\n<ol style=\"list-style-type: lower-roman; text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sub Direktorat Sistem Informasi&nbsp;Tugas Pokok: Melaksanakan tugas teknis dan administratif Dit. IDSI dalam pengumpulan data dan pengelolaan basis data, informasi, dan sistem aplikasi yang meliputi <em>software, dataware</em>, kebijakan dan administrasi sistem aplikasi dan layanan.</span></li>\r\n</ol>\r\n<p style=\"padding-left: 30px; text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Fungsi:</span></p>\r\n<ul style=\"list-style-type: disc; text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Penyusunan konsep, pengembangan, pemanfaatan dan pemeliharaan sistem informasi yang meliputi dataware, software, dan kerjasama; </span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Penyusunan dan pengendalian prosedur operasional baku, sekuriti, regulasi, evaluasi, dan administrasi sistem informasi; </span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengembangan dan pemeliharaan <em>website</em> IPB dan unit-unit di lingkungan institut. </span></li>\r\n</ul>\r\n<p style=\"padding-left: 30px; text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">ii. Sub Direktorat Integrasi Data </span></p>\r\n<p style=\"padding-left: 30px; text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tugas Pokok: Melaksanakan tugas teknis dan administratif Dit. IDSI dalam pengkoordinasian pelaksanaan penghimpunan, pengelolaan, pengelolaan, penggunaan, serta deseminasi data dan informasi institut untuk kepentingan internal dan eksternal. Fungsi: </span></p>\r\n<ul style=\"list-style-type: disc; text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengkordinasian dalam menghimpun, mengolah, memanfaatakan, dan mendesiminasikan data dan informasi institut; </span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Menyusun dan mengendalikan prosedur operasional baku dalam pemanfatan data informasi yang terintegrasi; </span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Melayani kebutuhan data dan informasi untuk kebutuhan institut dan stakeholder baik internal maupun eksternal. </span></li>\r\n</ul>\r\n<p style=\"padding-left: 30px; text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">iii. Sub Direktorat Infrastruktur dan Jaringan </span></p>\r\n<p style=\"padding-left: 30px; text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tugas Pokok: Melaksanakan tugas teknis dan administratif Dit. IDSI dalam pengkajian dan perumusan rencana pengembangan komunikasi data, suara, dan sistem informasi institut. Fungsi: </span></p>\r\n<ul style=\"list-style-type: disc; text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengembangan dan peningkatan kapasitas sumberdaya dibidang teknologi informasi yang meliputi infrastruktur jaringan komputer dan sumberdaya manusia yang terlibat di dalamnya; </span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengadaan, inventarisasi, perawatan, dan pengembangan infrastruktur jaringan yang meliputi infrastruktur (<em>hardware, software, netware,</em> serta sistem elektrisitas) jaringan komunikasi data dan suara institut;</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Penyusunan dan pengendalian prosedur operasional baku (SOP) di bidang sistem jaringan komputer, sekuriti, regulasi, evaluasi, dan administrasi sistem jaringan komunikasi; </span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pelaksanaan penilaian (assessment) terhadap kondisi dan kinerja Teknologi dan Sistem Informasi yang telah dikembangkan. </span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada tingkat fakultas, fasilitas teknologi informasi dikelola oleh seorang penanggung jawab yang diangkat oleh Dekan FMIPA. Adapun pada tingkat Departemen, pengelolaan fasilitas teknologi informasi berada di bawah Komisi Sistem Informasi dengan tugas pokok dan fungsi disesuaikan dengan karakteristik masing-masing departemen, yang intinya adalah untuk mendukung kegiatan pendidikan, penelitian, dan pengabdian pada masyarakat.</span></p>', '2018-10-16 06:50:57', '2018-10-15 23:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `peran_fmipa_tentang_kurikulum`
--

CREATE TABLE `peran_fmipa_tentang_kurikulum` (
  `id_peran_fmipa_tentang_kurikulum` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan_peran_fmipa_tentang_kurikulum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peran_fmipa_tentang_kurikulum`
--

INSERT INTO `peran_fmipa_tentang_kurikulum` (`id_peran_fmipa_tentang_kurikulum`, `id_departemen`, `keterangan_peran_fmipa_tentang_kurikulum`) VALUES
(5, 10, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Fakultas memiliki peran dalam mengkoordinasi kegiatan akademik di tingkat fakultas termasuk dalam pengembangan kurikulum.&nbsp; Pengembangan kurikulum yang dilakukan sejalan dengan kebijakan IPB, misalnya pada tahun 2013 telah dimulai pembahasan/penyiapan kurikulum di masing-masing Departemen di FMIPA dengan persiapan kurikulum berbasis KKNI.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam kegiatan evaluasi sistem dan kurikulum, setiap Departemen telah melakukan evaluasi kurikulum pada tahun 2005. Selanjutnya dilakukan lokakarya evaluasi kurikulum di tingkat FMIPA pada tanggal 10 Desember 2010. FMIPA memfasilitasi kegiatan lokakarya kurikulum di tingkat Departemen dan Fakultas termasuk menyediakan dana sesuai dengan yang dibutuhkan. Selanjutnya pada tahun 2013 dimana IPB memutuskan akan melaksanakan kurikulum berbasis <em>Learning Outcome</em> sejalan dengan standar KKNI, maka mulai dilakukan persiapan mulai dari tingkat Departemen untuk menyiapkan kurikulum untuk Tingkat Persiapan Bersama, kemudian dilanjutkan untuk jenjang yang lebih tinggi yaitu tingkat II sampai tingkat akhir sehingga pada akhir tahun 2014 telah terdapat Kurikulum berbasis KKNI untuk semua Departemen di IPB dan mulai dilaksanakan pada tahun 2015.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">FMIPA mengkoordinasi Departemen dengan kompetensi yang beragam, sehingga perlu untuk memfasilitasi Departemen-departemen yang ada melalui penyelenggaraan perkuliahan maupun praktikum bersama pada mata kuliah inter-departemen. Fakultas juga berperan dalam menentukan kurikulum IPB di tingkat dasar dengan merancang perkuliahan yang sesuai dengan kebutuhan masing-masing Fakultas di IPB. FMIPA menyediakan tempat untuk penyelenggaraan lokakarya kurikulum pada tingkat Fakultas dengan mengundang nara sumber baik dari internal IPB seperti ibu Ir. Lien Herlina, MSc dan Direktur Pengembangan Program Akademik (PPA) IPB untuk memberikan pengertian KKNI serta cara menyusun LO untuk masing-masing program studi dan akhirnya mata kuliah.&nbsp; FMIPA memiliki pendanaan yang berasal dari BPPTN untuk kegiatan ini.&nbsp; Pada akhir tahun 2014 telah terbentuk kurikulum KKNI di masing-masing Departemen yang ada di lingkungan FMIPA.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `peran_kegiatan`
--

CREATE TABLE `peran_kegiatan` (
  `id_peran_kegiatan` int(11) NOT NULL,
  `status_peran_kegiatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peran_kegiatan`
--

INSERT INTO `peran_kegiatan` (`id_peran_kegiatan`, `status_peran_kegiatan`) VALUES
(1, 'Ya'),
(2, 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `perolehanhaki`
--

CREATE TABLE `perolehanhaki` (
  `id_perolehanHaki` int(11) NOT NULL,
  `perolehanHaki` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perolehanhaki`
--

INSERT INTO `perolehanhaki` (`id_perolehanHaki`, `perolehanHaki`) VALUES
(1, 'Ya'),
(2, 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `perolehanhiki`
--

CREATE TABLE `perolehanhiki` (
  `id_perolehanHiki` int(11) NOT NULL,
  `perolehanHiki` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perolehanhiki`
--

INSERT INTO `perolehanhiki` (`id_perolehanHiki`, `perolehanHiki`) VALUES
(1, 'Ya'),
(2, 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `perolehanhoki`
--

CREATE TABLE `perolehanhoki` (
  `id_perolehanHoki` int(11) NOT NULL,
  `perolehanHoki` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perolehanhoki`
--

INSERT INTO `perolehanhoki` (`id_perolehanHoki`, `perolehanHoki`) VALUES
(1, 'Ya'),
(2, 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `perolehanhuki`
--

CREATE TABLE `perolehanhuki` (
  `id_perolehanHuki` int(11) NOT NULL,
  `perolehanHuki` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perolehanhuki`
--

INSERT INTO `perolehanhuki` (`id_perolehanHuki`, `perolehanHuki`) VALUES
(1, 'Ya'),
(2, 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `perubahan_pada_buku_ajar`
--

CREATE TABLE `perubahan_pada_buku_ajar` (
  `id_perubahan_buku_ajar` int(11) NOT NULL,
  `perubahan_buku_ajar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perubahan_pada_buku_ajar`
--

INSERT INTO `perubahan_pada_buku_ajar` (`id_perubahan_buku_ajar`, `perubahan_buku_ajar`) VALUES
(1, 'Ya'),
(2, 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `perubahan_pada_silabus`
--

CREATE TABLE `perubahan_pada_silabus` (
  `id_perubahan_silabus` int(11) NOT NULL,
  `perubahan_silabus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perubahan_pada_silabus`
--

INSERT INTO `perubahan_pada_silabus` (`id_perubahan_silabus`, `perubahan_silabus`) VALUES
(1, 'Ya'),
(2, 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `pl_komersial`
--

CREATE TABLE `pl_komersial` (
  `id_kerjasama_imovses` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_imovses` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pl_komersial`
--

INSERT INTO `pl_komersial` (`id_kerjasama_imovses`, `id_departemen`, `nama_imovses`, `created_at`, `updated_at`) VALUES
(1, 10, 'Sistem Operasi: Windows 7 32 Bit, Windows 7 64 Bit, Windows 8 32 Bit, Windows 8 64 Bit, Windows 8.1 32 Bit, Windows 8.1 64 Bit', '2018-08-01 18:23:57', '2018-08-01 11:23:57'),
(3, 10, 'Microsoft Office: Microsoft Office 2010 32 Bit, Microsoft Office 2010 64 Bit', '2018-08-01 11:58:23', '2018-08-01 11:58:23'),
(4, 10, 'Microsoft Office 2013 32 Bit, Microsoft Office 2013 64 Bit', '2018-08-01 11:59:06', '2018-08-01 11:59:06'),
(5, 6, 'hahaha', '2018-08-24 08:05:42', '2018-08-24 08:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `prasarana_penunjang_ps`
--

CREATE TABLE `prasarana_penunjang_ps` (
  `id_pras_penunjang` int(50) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `jenis_penunjang_ps` varchar(255) NOT NULL,
  `jumlah_unit` int(50) NOT NULL,
  `total_luas` decimal(20,2) NOT NULL,
  `id_kepemilikan_penunjang` int(11) NOT NULL,
  `id_kondisi_penunjang` int(11) NOT NULL,
  `unit_pengelola` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prasarana_penunjang_ps`
--

INSERT INTO `prasarana_penunjang_ps` (`id_pras_penunjang`, `id_departemen`, `jenis_penunjang_ps`, `jumlah_unit`, `total_luas`, `id_kepemilikan_penunjang`, `id_kondisi_penunjang`, `unit_pengelola`, `created_at`, `updated_at`) VALUES
(3, 1, 'Musholla', 2, '20.00', 1, 1, 'dept.stk', '2018-09-26 00:04:09', '2018-09-26 00:04:09'),
(4, 4, 'r. bahan kimia', 1, '12.00', 1, 1, 'dep kimia', '2018-09-30 22:24:13', '2018-09-30 22:24:13'),
(5, 6, 'Masjid', 1, '5761.00', 1, 1, 'IPB', '2018-10-01 22:35:51', '2018-10-01 22:35:51'),
(6, 6, 'R.  Himpro', 1, '48.00', 1, 1, 'Fakultas', '2018-10-17 12:15:36', '2018-10-17 12:15:36'),
(7, 6, 'Musholla', 2, '32.00', 1, 1, 'Fakultas', '2018-10-17 12:26:54', '2018-10-17 12:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `prasarana_ps`
--

CREATE TABLE `prasarana_ps` (
  `id_prasarana_ps` int(50) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `jenis_prasarana_ps` varchar(255) NOT NULL,
  `jumlah_unit_prasarana` int(50) NOT NULL,
  `panjang` decimal(11,2) NOT NULL,
  `lebar` decimal(11,2) NOT NULL,
  `total_luas` decimal(10,2) NOT NULL,
  `id_kepemilikan_pras` int(11) NOT NULL,
  `id_kondisi_pras` int(11) NOT NULL,
  `utilisasi` int(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prasarana_ps`
--

INSERT INTO `prasarana_ps` (`id_prasarana_ps`, `id_departemen`, `jenis_prasarana_ps`, `jumlah_unit_prasarana`, `panjang`, `lebar`, `total_luas`, `id_kepemilikan_pras`, `id_kondisi_pras`, `utilisasi`, `created_at`, `updated_at`) VALUES
(5, 6, 'RK. 15 TAN', 1, '0.00', '0.00', '20.00', 1, 2, 8, '2018-09-22 06:13:37', '2018-09-21 23:13:37'),
(6, 1, 'RK. 15 TAN', 2, '0.00', '0.00', '300.00', 1, 1, 24, '2018-09-26 00:01:40', '2018-09-26 00:01:40'),
(7, 4, 'r. adm pendidikan', 1, '3.00', '3.00', '9.00', 1, 2, 10, '2018-10-02 01:31:56', '2018-10-01 18:31:56'),
(8, 6, 'RK. 15 TAN 301 A', 1, '8.00', '8.00', '64.00', 1, 1, 40, '2018-10-01 22:34:57', '2018-10-01 22:34:57'),
(9, 6, 'RK. 14 TAN', 1, '2.00', '3.00', '6.00', 1, 1, 6, '2018-10-02 07:06:16', '2018-10-02 00:06:16'),
(10, 6, 'RK. 16 FAC 401 B', 1, '5.00', '5.00', '25.00', 1, 1, 40, '2018-10-17 12:14:12', '2018-10-17 12:14:12'),
(11, 6, 'RK. 16 FAC 401 C', 1, '9.00', '9.00', '81.00', 1, 1, 40, '2018-10-17 12:26:03', '2018-10-17 12:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `prasarana_tambahan`
--

CREATE TABLE `prasarana_tambahan` (
  `id_prasarana_tambahan` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `jenis_prasarana_tambahan` varchar(255) NOT NULL,
  `tanggal_inves` date NOT NULL,
  `investasi_prasarana` decimal(20,2) NOT NULL,
  `rencana_investasi` decimal(20,2) NOT NULL,
  `awal_rencana` year(4) NOT NULL,
  `akhir_rencana` year(4) NOT NULL,
  `sumber_dana` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prasarana_tambahan`
--

INSERT INTO `prasarana_tambahan` (`id_prasarana_tambahan`, `id_departemen`, `jenis_prasarana_tambahan`, `tanggal_inves`, `investasi_prasarana`, `rencana_investasi`, `awal_rencana`, `akhir_rencana`, `sumber_dana`, `created_at`, `updated_at`) VALUES
(1, 10, 'Auditorum FMIPA', '2016-02-22', '5400.00', '13.00', 2016, 2020, 'Hoo', '2018-10-04 20:12:39', '2018-10-04 13:12:39'),
(12, 10, 'Mushola FMIPA', '2016-11-11', '1000.00', '0.00', 2018, 2018, 'APBN', '2018-10-30 09:47:10', '2018-10-30 02:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_prestasi_dan_tahun` varchar(255) NOT NULL,
  `tingkatan` varchar(150) NOT NULL,
  `tahun_kegiatan` int(10) NOT NULL,
  `nama_prestasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_penelitian` int(11) NOT NULL,
  `proposal_penelitian` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `id_departemen`, `id_penelitian`, `proposal_penelitian`) VALUES
(5, 6, 30, 'if.docx'),
(6, 6, 32, '2018-01-17.png'),
(7, 1, 33, 'pdf penelitian.docx'),
(8, 6, 27, 'Dokumen tentang jaminan mutu.docx');

-- --------------------------------------------------------

--
-- Table structure for table `proposal_pengabdian`
--

CREATE TABLE `proposal_pengabdian` (
  `id_proposalPeng` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_pengabdian` int(11) NOT NULL,
  `proposal_pengabdian` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal_pengabdian`
--

INSERT INTO `proposal_pengabdian` (`id_proposalPeng`, `id_departemen`, `id_pengabdian`, `proposal_pengabdian`) VALUES
(1, 6, 14, 'if.docx'),
(2, 6, 15, 'if.docx');

-- --------------------------------------------------------

--
-- Table structure for table `pustaka_di_ruang_baca_dept`
--

CREATE TABLE `pustaka_di_ruang_baca_dept` (
  `id_pustaka_ruang_baca` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_jenis_pustaka` int(11) NOT NULL,
  `jumlah_judul` int(50) NOT NULL,
  `jumlah_copy` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pustaka_di_ruang_baca_dept`
--

INSERT INTO `pustaka_di_ruang_baca_dept` (`id_pustaka_ruang_baca`, `id_departemen`, `id_jenis_pustaka`, `jumlah_judul`, `jumlah_copy`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 1231, 1641, '2018-10-17 19:17:19', '2018-10-17 12:17:19'),
(2, 6, 2, 25, 25, '2018-10-17 19:27:50', '2018-10-17 12:27:50'),
(3, 6, 3, 45, 19, '2018-10-17 19:17:19', '2018-10-17 12:17:19'),
(4, 6, 4, 18, 28, '2018-10-17 19:17:19', '2018-10-17 12:17:19'),
(5, 6, 5, 831, 831, '2018-10-17 19:17:19', '2018-10-17 12:17:19'),
(6, 6, 6, 190, 190, '2018-10-17 19:17:19', '2018-10-17 12:17:19'),
(7, 6, 7, 5, 5, '2018-10-17 19:17:19', '2018-10-17 12:17:19'),
(8, 6, 8, 5, 5, '2018-10-17 19:17:19', '2018-10-17 12:17:19'),
(9, 1, 1, 10, 5, '2018-09-26 06:36:50', '2018-09-25 23:36:50'),
(10, 1, 2, 5, 5, '2018-09-26 06:36:50', '2018-09-25 23:36:50'),
(11, 1, 3, 5, 5, '2018-09-26 06:36:50', '2018-09-25 23:36:50'),
(12, 1, 4, 3, 3, '2018-09-26 06:36:50', '2018-09-25 23:36:50'),
(13, 1, 5, 300, 100, '2018-09-26 06:36:50', '2018-09-25 23:36:50'),
(14, 1, 6, 200, 50, '2018-09-26 06:36:50', '2018-09-25 23:36:50'),
(15, 1, 7, 30, 10, '2018-09-26 06:36:50', '2018-09-25 23:36:50'),
(16, 1, 8, 10, 0, '2018-09-26 06:36:51', '2018-09-25 23:36:51'),
(17, 2, 1, 0, 0, '2018-08-24 03:31:57', '0000-00-00 00:00:00'),
(18, 2, 2, 0, 0, '2018-08-24 03:31:57', '0000-00-00 00:00:00'),
(19, 2, 3, 0, 0, '2018-08-24 03:31:57', '0000-00-00 00:00:00'),
(20, 2, 4, 0, 0, '2018-08-24 03:31:57', '0000-00-00 00:00:00'),
(21, 2, 5, 0, 0, '2018-08-24 03:31:57', '0000-00-00 00:00:00'),
(22, 2, 6, 0, 0, '2018-08-24 03:31:57', '0000-00-00 00:00:00'),
(23, 2, 7, 0, 0, '2018-08-24 03:31:57', '0000-00-00 00:00:00'),
(24, 2, 8, 0, 0, '2018-08-24 03:31:57', '0000-00-00 00:00:00'),
(25, 3, 1, 0, 0, '2018-08-24 03:31:57', '0000-00-00 00:00:00'),
(26, 3, 2, 0, 0, '2018-08-24 03:31:57', '0000-00-00 00:00:00'),
(27, 3, 3, 0, 0, '2018-08-24 03:31:57', '0000-00-00 00:00:00'),
(28, 3, 4, 0, 0, '2018-08-24 03:31:57', '0000-00-00 00:00:00'),
(29, 3, 5, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(30, 3, 6, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(31, 3, 7, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(32, 3, 8, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(33, 4, 1, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(34, 4, 2, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(35, 4, 3, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(36, 4, 4, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(37, 4, 5, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(38, 4, 6, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(39, 4, 7, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(40, 4, 8, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(41, 5, 1, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(42, 5, 2, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(43, 5, 3, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(44, 5, 4, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(45, 5, 5, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(46, 5, 6, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(47, 5, 7, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(48, 5, 8, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(49, 7, 1, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(50, 7, 2, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(51, 7, 3, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(52, 7, 4, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(53, 7, 5, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(54, 7, 6, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(55, 7, 7, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(56, 7, 8, 0, 0, '2018-08-24 03:39:23', '0000-00-00 00:00:00'),
(57, 8, 1, 0, 0, '2018-08-24 03:42:31', '0000-00-00 00:00:00'),
(58, 8, 2, 0, 0, '2018-08-24 03:42:31', '0000-00-00 00:00:00'),
(59, 8, 3, 0, 0, '2018-08-24 03:42:31', '0000-00-00 00:00:00'),
(60, 8, 4, 0, 0, '2018-08-24 03:42:31', '0000-00-00 00:00:00'),
(61, 8, 5, 0, 0, '2018-08-24 03:42:31', '0000-00-00 00:00:00'),
(62, 8, 6, 0, 0, '2018-08-24 03:42:31', '0000-00-00 00:00:00'),
(63, 8, 7, 0, 0, '2018-08-24 03:42:31', '0000-00-00 00:00:00'),
(64, 8, 8, 0, 0, '2018-08-24 03:42:31', '0000-00-00 00:00:00'),
(65, 9, 1, 0, 0, '2018-08-24 03:42:31', '0000-00-00 00:00:00'),
(66, 9, 2, 0, 0, '2018-08-24 03:42:31', '0000-00-00 00:00:00'),
(67, 9, 3, 0, 0, '2018-08-24 03:42:31', '0000-00-00 00:00:00'),
(68, 9, 4, 0, 0, '2018-08-24 03:42:31', '0000-00-00 00:00:00'),
(69, 9, 5, 0, 0, '2018-08-24 03:42:31', '0000-00-00 00:00:00'),
(70, 9, 6, 0, 0, '2018-08-24 03:42:31', '0000-00-00 00:00:00'),
(71, 9, 7, 0, 0, '2018-08-24 03:42:31', '0000-00-00 00:00:00'),
(72, 9, 8, 0, 0, '2018-08-24 03:42:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `redaksi_jumlah`
--

CREATE TABLE `redaksi_jumlah` (
  `id_redaksiJum` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `redaksi_jumlah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redaksi_jumlah`
--

INSERT INTO `redaksi_jumlah` (`id_redaksiJum`, `id_departemen`, `redaksi_jumlah`) VALUES
(1, 6, 'AAAAAAAAAAAAAAAAAA'),
(2, 1, ''),
(3, 2, ''),
(4, 3, ''),
(5, 4, ''),
(6, 7, ''),
(7, 8, ''),
(8, 5, ''),
(9, 9, ''),
(10, 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `redaksi_kegiatan`
--

CREATE TABLE `redaksi_kegiatan` (
  `id_redaksiKeg` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `redaksinya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redaksi_kegiatan`
--

INSERT INTO `redaksi_kegiatan` (`id_redaksiKeg`, `id_departemen`, `redaksinya`) VALUES
(1, 6, '<p>Hasil yang diperoleh menunjukkan 4 hambatan utama dalam memasuki dunia kerja adalah kemampuan pemrograman, kemampuan bahasa asing, cara berkomunikasi, kepercayaan diri. Sedangkan untuk pengembangan karir, hambatan yang dirasakan oleh alumni adalah manajemen waktu, keberanian mengambil keputusan, kemauan menanggung risiko, kemampuan mengendalikan diri dan interaksi sosial. Berdasarkan hasil ini, maka PSIK melakukan pembinaan softskill untuk memberikan bekal bagi alumni. Beberapa di antaranya adalah pelatihan bahasa Inggris dan pelatihan kewirausahaan. pelatihan kepemimpinan, pelatihan public speaking, pelatihan, Etika dan teknik wawancara serta pelatihan manajemen. AAA</p>'),
(2, 1, ''),
(3, 4, ''),
(4, 5, ''),
(5, 7, ''),
(6, 8, ''),
(7, 9, ''),
(8, 10, ''),
(9, 2, ''),
(10, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `redaksi_lulusan`
--

CREATE TABLE `redaksi_lulusan` (
  `id_redaksiLus` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `redaksi_lulusan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redaksi_lulusan`
--

INSERT INTO `redaksi_lulusan` (`id_redaksiLus`, `id_departemen`, `redaksi_lulusan`) VALUES
(1, 6, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pelacakan Alumni ini telah dilakukan sejak tahun 2013 dan jumlah Alumni yang mengisi sejak tahun 2013 adalah sebanyak 249 responden dengan rincian:</span></p>\r\n<ul>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tahun 2013 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 60</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tahun 2014&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 36</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tahun 2015&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 44</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tahun 2016&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 10</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tahun 2017&nbsp; &nbsp; &nbsp; &nbsp;: 6</span></li>\r\n</ul>'),
(2, 1, ''),
(3, 2, ''),
(4, 3, ''),
(5, 4, ''),
(6, 5, ''),
(7, 7, ''),
(8, 8, ''),
(9, 9, ''),
(10, 10, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>3.2.2&nbsp;&nbsp;&nbsp; Pandangan FMIPA IPB tentang rata-rata masa studi dan rata-rata IPK lulusan, yang mencakup aspek: kewajaran, upaya pengembangan, dan upaya peningkatan mutu, serta kendala-kendala yang dihadapi.</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dari tabel-tabel di atas, rata-rata masa studi dan rata-rata IPK lulusan sudah baik. IPK rata-rata di Fakultas sudah mencapai <strong>4,35 tahun</strong> dan IPK <strong>3,0</strong><strong>6</strong>. Walaupun begitu, upaya untuk meningkatkan nilai IPK secara kontinyu terus dilakukan di antaranya melalui kegiatan tutorial, memfasilitasi mahasiswa dengan memperbanyak buku-buku rujukan di perpustakaan, dan pemasangan <em>hotspot</em> di berbagai tempat di lingkungan kampus sehingga mahasiswa dapat mengaksesnya setiap saat dengan mudah. Tutorial dilaksanakan di luar jadwal kuliah reguler (bisanya dilakukan malam hari). Masa studi masih sedikit di atas 4 tahun, hal ini diakibatkan karena lamanya pelaksanaan penelitian. Pada departemen-departemen yang berbasis penelitian yang menggunakan makhluk hidup seperti tumbuhan memerlukan waktu siklus yang relatif panjang sehingga sejak persiapan hingga akhir pengamatan memerlukan waktu lebih dari 6 bulan.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Upaya-upaya yang dilakukan terutama adalah menurunkan atau mengurangi waktu penyelesaian skripsi atau tugas akhir dengan tidak mengurangi kualitas skripsinya. Upaya tersebut antara lain: menjadwalkan presentasi proposal penelitian (kolokium), mengefektifkan pertemuan dengan pembimbing, monitoring mahasiswa kadaluarsa yaitu mahasiswa semester 9 atau lebih, mengefektifkan fungsi <em>log</em> <em>book </em>penelitian, penyelenggaraan seminar ilmiah oleh Bagian yang diikuti mahasiswa dan dosen, serta meningkatkan jumlah penelitian dosen yang melibatkan mahasiswa.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Melalui rapat rutin pimpinan setiap bulan, pimpinan mendorong peningkatan kualitas layanan di setiap departemen, sehingga mutu lulusan meningkat baik di bidang akademik dan non-akademik. Departemen Ilmu Komputer misalnya, untuk mempercepat lulusan dilakukan upaya melalui penjadwalan secara terstruktur untuk setiap tahapan dari penyusunan tugas akhir seperti digambarkan dalam <strong>Gambar 3.3</strong>.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Di bidang non-akademik, fakultas senantiasa melakukan pembinaan mahasiswa bekerja sama dengan himpunan profesi dan BEM fakultas. Tabel 3.3 menyajikan data pembinaan non-akademik yang diselenggarakan di level FMIPA baik oleh Fakultas maupun Organisasi Kemahasiswaan tingkat fakultas (Badan Eksekutif Mahasiswa dan Dewan Perwakilan Mahasiswa).</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `redaksi_penelitian`
--

CREATE TABLE `redaksi_penelitian` (
  `id_redaksi` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `redaksi_penelitian` int(11) NOT NULL,
  `jumlah_mahasiswa` int(11) DEFAULT NULL,
  `total_mahasiswa` int(11) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redaksi_penelitian`
--

INSERT INTO `redaksi_penelitian` (`id_redaksi`, `id_departemen`, `redaksi_penelitian`, `jumlah_mahasiswa`, `total_mahasiswa`, `tahun`) VALUES
(1, 1, 2, NULL, NULL, 2018),
(2, 2, 2, NULL, NULL, 2018),
(3, 3, 1, 1, 1, 2018),
(4, 4, 1, 2, 3, 2017),
(5, 5, 2, NULL, NULL, 2018),
(6, 6, 1, NULL, 97, 2017),
(7, 7, 2, NULL, NULL, 2018),
(8, 8, 2, NULL, NULL, 2018),
(9, 9, 0, NULL, NULL, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `redaksi_penelitian_fmipa`
--

CREATE TABLE `redaksi_penelitian_fmipa` (
  `id_redaksiPen` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `redaksi_penelitian_fmipa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redaksi_penelitian_fmipa`
--

INSERT INTO `redaksi_penelitian_fmipa` (`id_redaksiPen`, `id_departemen`, `redaksi_penelitian_fmipa`) VALUES
(1, 10, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: \'times new roman\', times, serif;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Kegiatan penelitian dan pengabdian kepada masyarakat sudah berjalan sesuai dengan visi dan salah satu misi FMIPA yaitu <em>memperluas cakrawala ilmu pengetahuan melalui kegiatan penelitian dan pengabdian kepada masyarakat</em>.&nbsp; Jumlah penelitian yang dilakukan oleh staf dosen FMIPA cukup tinggi (Tabel 7.1) dengan sumber anggaran yang bervariasi diantaranya dari Kementerian Riset Teknologi dan Pendidikan Tinggi, Kementerian Kesehatan, Kementerian Pertanian, Kementerian Perencanaan Pembangunan Nasional/Bappenas, Kementerian Agama, maupun institusi lain dari dalam dan luar negeri seperti Badan Pusat Statistik, Badan</span> </span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `redaksi_pengabdian`
--

CREATE TABLE `redaksi_pengabdian` (
  `id_redaksiPeng` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `redaksi_pengabdian` int(11) NOT NULL,
  `partisipasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redaksi_pengabdian`
--

INSERT INTO `redaksi_pengabdian` (`id_redaksiPeng`, `id_departemen`, `redaksi_pengabdian`, `partisipasi`) VALUES
(1, 1, 2, ''),
(2, 2, 2, ''),
(3, 3, 2, ''),
(4, 4, 2, ''),
(5, 5, 2, ''),
(6, 6, 1, 'Keterlibatan Mahasiswa Departemen Ilmu Komputer sebagai panitia dalam kegiatan Pemusatan\r\nLatihan Nasional (Pelatnas) Tim Olimpiade Komputer Indonesia (TOKI) bagi siswa-siswa seluruh\r\nIndonesia untuk persiapan menuju International Olympiad in Informatics (IOI) di tahun 2015 dan\r\n2016 di Departemen Ilmu Komputer (ILKOM) IPB. Kegiatan ini berlangsung selama kurang lebih\r\nsatu bulan di setiap tahunnya. Selain Pelatnas, Keterlibatan mahasiswa juga pada kepanitian untuk\r\npenyelanggaraan Indonesia Contest Site, Kontes untuk persiapan Olimpiade Informatik di Regional\r\nAsia Pasifik.\r\nKeterlibatan Mahasiswa Departemen Ilmu Komputer sebagai panitia dalam kegiatan Pemusatan\r\nLatihan Nasional (Pelatnas) Tim Olimpiade Komputer Indonesia (TOKI) bagi siswa-siswa seluruh\r\nIndonesia untuk persiapan menuju International Olympiad in Informatics (IOI) di tahun 2015 dan\r\n2016 di Departemen Ilmu Komputer (ILKOM) IPB. Kegiatan ini berlangsung selama kurang lebih\r\nsatu bulan di setiap tahunnya. Selain Pelatnas, Keterlibatan mahasiswa juga pada kepanitian untuk\r\npenyelanggaraan Indonesia Contest Site, Kontes untuk persiapan Olimpiade Informatik di Regional\r\nAsia Pasifik.'),
(7, 7, 2, ''),
(8, 8, 2, ''),
(9, 9, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `redaksi_pengabdian_fmipa`
--

CREATE TABLE `redaksi_pengabdian_fmipa` (
  `id_redaksiPeng` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `redaksi_pengabdian_fmipa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redaksi_pengabdian_fmipa`
--

INSERT INTO `redaksi_pengabdian_fmipa` (`id_redaksiPeng`, `id_departemen`, `redaksi_pengabdian_fmipa`) VALUES
(1, 10, '<p>Go!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `rencana_inves_sarana`
--

CREATE TABLE `rencana_inves_sarana` (
  `id_sarana_rencana` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `jenis_sarana_tamb` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `harga_sat` decimal(20,2) NOT NULL,
  `jumlah_harga` decimal(20,2) NOT NULL,
  `tahun_ada` year(4) NOT NULL,
  `rencana_investasi` decimal(20,2) NOT NULL,
  `sumber_dana` varchar(255) NOT NULL,
  `awal` year(4) NOT NULL,
  `akhir` year(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rencana_inves_sarana`
--

INSERT INTO `rencana_inves_sarana` (`id_sarana_rencana`, `id_departemen`, `jenis_sarana_tamb`, `jumlah`, `satuan`, `harga_sat`, `jumlah_harga`, `tahun_ada`, `rencana_investasi`, `sumber_dana`, `awal`, `akhir`, `created_at`, `updated_at`) VALUES
(2, 10, 'aab', 2, 'u', '2.00', '4000.00', 2017, '2000.00', 'abc', 2017, 2018, '2018-10-30 08:43:12', '2018-10-30 01:43:12'),
(3, 10, 'Complete Atomic Force Microscope system XE-100', 1, 'unit', '3000.00', '3000.00', 2015, '2545.16', 'APBN', 2015, 2020, '2018-10-30 01:21:15', '2018-10-30 01:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `rencana_pengembangan_si`
--

CREATE TABLE `rencana_pengembangan_si` (
  `id_rencana` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `rencana` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rencana_pengembangan_si`
--

INSERT INTO `rencana_pengembangan_si` (`id_rencana`, `id_departemen`, `rencana`, `created_at`, `updated_at`) VALUES
(1, 10, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengembangan TI baik di IPB maupun FMIPA sesuai dengan <em>Grand Design</em> (<em>blueprint</em>) Teknologi Informasi periode 2013-2017 yang dibuat oleh Direktorat Integrasi Data dan Sistem Informasi (DIDSI) IPB. Dukungan infrastruktur TI (termasuk di dalamnya sistem informasi) secara terpadu dikoordinir oleh DIDSI IPB, yang melibatkan fakultas dan program studi/departemen. Sebagai koordinator dalam pengembangan infrastruktur TI, DIDSI telah menetapkan model arsitektur basisdata terintegrasi, dengan memanfaatkan infrastruktur jaringan komputer seperti tertera pada <strong>Gambar 6.</strong><strong>26</strong>.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Oleh karena dukungan infrastruktur TI, ruang kuliah, laboratorium, ruang dosen dan ruang kantor di FMIPA telah tersedia dengan sangat baik, dilengkapi dengan akses Internet. Ke depan jaringan internet yang telah ada akan ditingkatkan pemanfaatannya untuk <em>database</em> terpadu dan untuk wahana komunikasi yang efektif sehingga dapat mengurangi penggunaan kertas (<em>paperless</em>). Untuk itu, <em>bandwidth</em> Internet yang ada (1 Gbps untuk internasional dan 550 Mbps untuk nasional) masih akan ditingkatkan dan jaringannya juga perlu diperbaiki kualitasnya, dengan menggunakan berbagai sumber seperti hibah pemerintah, usaha mandiri institusi, dan sumbangan sukarela dari berbagai pihak yang tidak mengikat.&nbsp; Ketersediaan dana untuk pengembangan infrastruktur TI ini sangat baik.&nbsp; Hal ini didukung oleh komitmen pimpinan IPB, selain dalam menyediakan alokasi rutin anggaran untuk TI juga menetapkan direktorat tersendiri untuk mengelolanya.&nbsp; Kendala yang masih ada terutama dalam hal perubahan tradisi pengguna (pejabat, dosen, karyawan, mahasiswa, dan masyarakat) dari kebiasaan dengan sistem konvensional ke elektronik. Cover <em>Grand Design</em> Teknologi Informasi IPB Periode 2013-2017 diberikan pada <strong>Gambar 6.27</strong>, sedangkan dokumennya diberikan pada <strong>Lampiran </strong><strong>6.5</strong>.&nbsp; <em>Grand Design </em>Teknologi Informasi IPB tersebut mencakup beberapa arsitektur, kebijakan dan konsep pengembangan IT sebagai berikut:</span></p>\r\n<ul>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Arsitektur Sistem dan Teknologi Informasi IPB</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kebijakan Sekuriti Data dan Informasi</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Konsep Green IT</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Arsitektur Aplikasi</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Arsitektur Data dan Informasi</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Arsitektur Layanan Jaringan IPB Terintegrasi</span></li>\r\n</ul>', '2018-12-25 21:56:04', '2018-12-25 14:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_kerja_dosen_tetap`
--

CREATE TABLE `ruang_kerja_dosen_tetap` (
  `id_rk_dosen_tetap` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_ruang_kerja` int(11) NOT NULL,
  `jumlah_ruang` int(20) NOT NULL,
  `jumlah_luas` decimal(15,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang_kerja_dosen_tetap`
--

INSERT INTO `ruang_kerja_dosen_tetap` (`id_rk_dosen_tetap`, `id_departemen`, `id_ruang_kerja`, `jumlah_ruang`, `jumlah_luas`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 3, '12.00', '2018-10-17 19:25:31', '2018-10-17 12:25:31'),
(2, 6, 2, 5, '122.21', '2018-10-01 02:00:17', '2018-09-30 19:00:17'),
(3, 6, 3, 1, '4.25', '2018-10-17 19:13:19', '2018-10-17 12:13:19'),
(4, 6, 4, 2, '7.00', '2018-10-02 15:21:42', '2018-10-02 08:21:42'),
(5, 1, 1, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(6, 1, 2, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(7, 1, 3, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(8, 1, 4, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(9, 2, 1, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(10, 2, 2, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(11, 2, 3, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(12, 2, 4, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(13, 3, 1, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(14, 3, 2, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(15, 3, 3, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(16, 3, 4, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(17, 4, 1, 1, '0.00', '2018-10-01 02:03:26', '2018-09-30 19:03:26'),
(18, 4, 2, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(19, 4, 3, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(20, 4, 4, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(21, 5, 1, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(22, 5, 2, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(23, 5, 3, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(24, 5, 4, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(25, 7, 1, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(26, 7, 2, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(27, 7, 3, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(28, 7, 4, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(29, 8, 1, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(30, 8, 2, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(31, 8, 3, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(32, 8, 4, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(33, 9, 1, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(34, 9, 2, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(35, 9, 3, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00'),
(36, 9, 4, 0, '0.00', '2018-08-24 03:51:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sarana_tambahan`
--

CREATE TABLE `sarana_tambahan` (
  `id_sarana_tambahan` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `jenis_sarana_tambahan` varchar(150) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `harga_satuan` decimal(20,2) NOT NULL,
  `jmlh_harga` decimal(20,2) NOT NULL,
  `tahun_beli` year(4) NOT NULL,
  `tanggal_inves` date NOT NULL,
  `investasi` decimal(20,2) NOT NULL,
  `sumber_dana` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sarana_tambahan`
--

INSERT INTO `sarana_tambahan` (`id_sarana_tambahan`, `id_departemen`, `jenis_sarana_tambahan`, `jumlah`, `satuan`, `harga_satuan`, `jmlh_harga`, `tahun_beli`, `tanggal_inves`, `investasi`, `sumber_dana`, `created_at`, `updated_at`) VALUES
(2, 10, 'CCTV', 3, 'paket', '300.00', '900.00', 2016, '2016-02-02', '10.00', 'Dana Masyarakat', '2018-10-04 20:15:10', '2018-10-04 13:15:10'),
(3, 10, 'Monitor', 2, 'paket', '50.00', '100.00', 2016, '2016-02-02', '12.00', 'Dana Masyarakat', '2018-09-17 15:00:31', '2018-09-17 08:00:31'),
(6, 10, 'CCTV', 3, 'paket', '300.00', '900.00', 2016, '2017-02-02', '102.00', 'Dana Masyarakat', '2018-10-04 20:15:22', '2018-10-04 13:15:22'),
(8, 10, 'LCD Epson EB-S300', 3, 'unit', '1223.00', '3669.00', 2017, '2017-09-21', '1.05', 'DIPA', '2018-10-04 20:15:49', '2018-10-04 13:15:49'),
(9, 10, 'Monitor', 5, 'unit', '5.00', '25.00', 2017, '2018-09-21', '25.00', 'Dana Masyarakat', '2018-09-21 23:24:26', '2018-09-21 23:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `sdm1`
--

CREATE TABLE `sdm1` (
  `id_sdm1` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `sdm01` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdm1`
--

INSERT INTO `sdm1` (`id_sdm1`, `id_departemen`, `sdm01`) VALUES
(5, 6, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Seleksi/Perekrutan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai institusi pemerintah, maka terkait dengan tenaga dosen dan tenaga kependidikan, Program Studi Ilmu Komputer (PSIK) mengikuti aturan yang sudah ditetapkan oleh pemerintah dan IPB. Aturan tersebut mulai dari kebijakan hingga pedoman operasional. Dalam hal ini, peran dari program studi atau departemen lebih ke arah hal-hal teknis operasional sesuai dengan kewenangannya, misalnya pengajuan kebutuhan pegawai, penilaian, penugasan, dan pengembangan kompetensi.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kebijakan-kebijakan pemerintah tersebut meliputi:</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 5 Tahun 2014 Tentang Aparatur Sipil Negara (ASN) yang mengatur ketentuan umum, perilaku dan kode etik, hak dan kewajiban, pengelolaan (organisasi dan manajemen).</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 14 tahun 2005 Tentang Guru dan Dosen yang mengatur ketentuan umum, profesionalitas, kualifikasi, kompetensi, sertifikasi, jabatan akademik, hak dan kewajiban, pengangkatan, penempatan, pemindahan, pemberhentian, pembinaan dan pengembangan, penghargaan, serta sanksi.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 66 Tahun 2013 Tentang Statuta Institut Pertanian Bogor yang pada Bagian Kesembilan (Pasal 71 &ndash; 78) mengatur mengenai ketenagaan yang meliputi:</span>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 71: batasan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 72: tenaga kerja asing</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 73: pengelolaan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 74: kewajiban pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 75: hak pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 76: pembinaan dan pengembangan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 77: penilaian kinerja</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 78: kiprah pegawai</span></li>\r\n</ol>\r\n</li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 19 Tahun 2013 Tentang Perubahan Keempat Atas Peraturan Pemerintah Nomor 32 Tahun 1979 Tentang Pemberhentian Pegawai Negeri Sipil.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peraturan Rektor Institut Pertanian Bogor Nomor 17/I3/KP/2011 Tentang Pengelolaan Pegawai Berstatus Bukan Pegawai Negeri Sipil di Lingkungan Institut Pertanian Bogor.</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai pelaksanaan dari kebijakan-kebijakan tersebut, maka disusunlah buku Prosedur Operasional Baku (POB) oleh Direktorat Sumberdaya Manusia (Dit. SDM) IPB yang terdiri atas 20 jenis POB yaitu (dokumen kebijakan dan dokumen POB secara lengkap disediakan pada saat visitasi):</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-001: Usul Kenaikan Pangkat</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-002: Kenaikan Jabatan Tenaga Kependidikan Pustakawan, Pranatahumas, dan Arsiparis</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-003: Kenaikan Jabatan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-004: Penilaian Karya Ilmiah Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-005: Usulan Pengaktifan Kembali</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-006: Pembinaan Aparatur PNS Bermasalah</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-007: Pensiun</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-008: Rotasi dan Mutasi</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-009: Penghargaan Satyalancana Karya Satya</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-010: Persuratan dan Pengarsipan Direktorat SDM IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-011: Penugasan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-012: Pembuatan Asuransi Sosial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-013: Tabungan Pensiun (TASPEN)</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-014: Asuransi Komersial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-015: Pembuatan Kartu Pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-016: Pembayaran Gaji PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-017: Pembayaran Uang Makan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-018: Cuti PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-019: Pengelolaan Cleaning Service IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-020: Pengadaan Pegawai</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengadaan dosen dan tenaga kependidikan didasarkan atas kebutuhan unit kerja untuk mengisi formasi yang secara umum disebabkan oleh adanya dosen dan tenaga kependidikan yang berhenti, pensiun, meninggal dunia atau adanya pengembangan organisasi. Berdasarkan UU No 14 Tahun 2005 Tentang Guru dan Dosen bahwa kualifikasi dosen harus berpendidikan S2. Pengumuman tentang penerimaan calon pegawai (dosen dan tenaga kependidikan) PNS dilakukan melalui website Kementerian Riset, Teknologi, dan Pendidikan Tinggi (Kemenristekdikti).&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Departemen Ilmu Komputer sebagai <em>homebase </em>dari PSIK, serta Fakultas MIPA telah mendapatkan sertifikasi ISO 9001:2008 sejak tahun 2015, sehingga semua POB yang telah disebutkan telah dilaksanakan secara konsisten. Sebagai contoh pelaksanaan adalah pada proses pengadaan atau rekrutmen pegawai, maka sesuai dengan POB/SDM-020 dimulai dengan pengajuan usulan oleh unit (departemen) mengenai kebutuhan pegawai yang disampaikan pada rapat pimpinan fakultas. Dalam rapat tersebut, berdasarkan analisis kebutuhan dan pengembangan program studi di Departemen Ilmu Komputer, maka departemen mengusulkan kebutuhan dosen seperti disajikan pada tabel berikut:</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tabel jumlah pegawai yang diusulkan dari tahun 2012 &ndash; 2016 sesuai kebutuhan</span></p>\r\n<table style=\"width: 33.8028%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 60px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis</strong></span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2012</strong></span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2013</strong></span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2014</strong></span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2015</strong></span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2016</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dosen</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tenaga Kependidikan</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Teknisi</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan usulan kebutuhan pegawai yang diusulkan melalui fakultas, maka dilakukan evaluasi, kompilasi, pemetaan, dan formasi kebutuhan oleh Dit. SDM untuk seluruh IPB. Setelah dikompilasi di level IPB, maka selanjutnya ditetapkan oleh rektor untuk dipublikasikan ke masyarakat melalui internet.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Penempatan :</strong></span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Setelah proses rekrutmen dan seleksi dilaksanakan, proses selanjutnya adalah penetapan/penempatan pegawai yang didasarkan pada kompetensi dan latar belakang pengetahuan yang dimilikinya.&nbsp;</span></p>\r\n<p><span style=\"font-size: 10pt;\"><strong style=\"font-family: arial, helvetica, sans-serif; text-align: justify;\">Pengembangan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengembangan pegawai mencakup aspek kuantitas dan kualitas. Pengembangan kuantitas pegawai dimulai dengan menyusun <em>master plan </em>kebutuhan pegawai dari tahun 2012 &ndash; 2030 (Master Plan pengembangan jumlah pegawai (dosen dan tenaga kependidikan) disediakan pada saat visitasi).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Retensi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan retensi pegawai, beberapa upaya yang dilakukan meliputi:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sistem penghonoran</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesejahteraan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesehatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Jenjang kepangkatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peningkatan kompetensi/kualifikasi</span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam sistem penghonoran, IPB telah menetapkan sistem yang berbasis kinerja, dalam hal ini penghonoran dibagi menjadi dua, yaitu honor rutin bulanan sesuai dengan pangkat dan jabatan, serta insentif yang nilainya didasarkan pada kinerja pegawai. Tunjangan kesejahteraan meliputi tunjangan suami/istri dan anak, tunjangan perumahan, tunjangan beras, dan tunjangan uang makan. Tunjangan kesehatan meliputi asuransi kesehatan serta pemeriksaan kesehatan untuk pegawai yang usianya di atas 40 tahun. Peningkatan retensi dan apresiasi terhadap pegawai juga dilakukan dengan adanya aturan dan insentif yang jelas untuk peningkatan jenjang kepangkatan pegawai. Peningkatan kompetensi/kualifikasi dilakukan dengan pendidikan formal (studi lanjut khususnya untuk dosen) maupun nonformal (pelatihan, seminar, dan workshop untuk dosen dan tenaga kependidikan).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan data tahun 2014 &ndash; 2016, tabel berikut menyajikan jumlah dosen dan tenaga kependidikan yang mengikuti kegiatan peningkatan kompetensi.</span></p>\r\n<table style=\"width: 41.3145%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 23.0669%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Kegiatan Peningkatan Kompetensi</strong></span></td>\r\n<td style=\"width: 8.57487%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Dosen</strong></span></td>\r\n<td style=\"width: 9.6418%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Tenaga Kependidikan</strong></span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pelatihan, workshop, seminar</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">133</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">20</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10 (jenjang s3)</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6 (1 S2 + 4 S1 + 1 D3)</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Total</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">143</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">26</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Pemberhentian Dosen dan Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemberhentian dosen dan tenaga kependidikan diproses mengacu pada aturan pemberhentian pegawai PNS seperti tertera pada PP No 19 tahun 2013. Pemberhentian sesuai dengan aturan yang berlaku diantaranya adalah berdasarkan usia pensiun atau pengunduran diri karena alasan tertentu. Usia pensiun untuk dosen ialah 65 tahun bagi yang belum bergelar guru besar dan 70 tahun bagi yang mempunyai jabatan guru besar. Sementara itu, usia pensiun untuk tenaga kependidikan ialah <strong>56 tahun</strong>. Pengusulan masa pensiun dilakukan satu tahun sebelum mencapai usia pensiun dan dapat didahului dengan pelaksanaan Masa Persiapan Pensiun (MPP).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Di Departemen Ilmu Komputer hingga saat ini baru ada tiga pegawai yang pensiun, yaitu satu orang dosen dan dua orang tenaga kependidikan. Bukti bahwa POB tersebut telah dijalankan secara konsisten, yaitu (a) surat usulan ke IPB, (b) surat usulan ke BKN, dan (c) SK pensiun (berkas secara lengkap disediakan saat visitasi).</span></p>'),
(6, 3, '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\"><strong><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem Seleksi/Perekrutan :</span></strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Pengadaan dosen dan tenaga kependidikan didasarkan atas kebutuhan unit kerja untuk mengisi formasi yang secara umum disebabkan oleh adanya dosen dan tenaga kependidikan yang berhenti, pensiun, meninggal dunia atau adanya pengembangan organisasi. Berdasarkan UU No 14 Tahun 2005 Tentang Guru dan Dosen bahwa kualifikasi dosen harus berpendidikan S2. Pengumuman tentang penerimaan calon pegawai (dosen dan tenaga kependidikan) PNS dilakukan melalui website Kementerian Riset, Teknologi, dan Pendidikan Tinggi (Kemenristekdikti). </span></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\"><strong><span style=\"font-family: arial, helvetica, sans-serif;\">Penempatan :</span></strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Setelah proses rekrutmen dan seleksi dilaksanakan, proses selanjutnya adalah penetapan/penempatan pegawai yang didasarkan pada kompetensi dan latar belakang pengetahuan yang dimilikinya. Data yang diperlukan seperti: unit kerja, jabatan, rencana penempatan, nomor ujian, nama peserta.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\"><strong><span style=\"font-family: arial, helvetica, sans-serif;\">Pengembangan :</span></strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengembangan pegawai mencakup aspek kuantitas dan kualitas. Pengembangan kuantitas pegawai dimulai dengan menyusun <em>master plan </em>kebutuhan pegawai dari tahun 2012 &ndash; 2030 (Master Plan pengembangan jumlah pegawai (dosen dan tenaga kependidikan) disediakan pada saat visitasi).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\"><strong><span style=\"font-family: arial, helvetica, sans-serif;\">Retensi :</span></strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\">Untuk meningkatkan retensi pegawai, beberapa upaya yang dilakukan seperti : s</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">istem penghonoran, t</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">unjangan kesejahteraan, t</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">unjangan kesehatan, j</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">enjang kepangkatan, p</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">eningkatan kompetensi / kualifikasi</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\"><strong><span style=\"font-family: arial, helvetica, sans-serif;\">Pemberhentian Dosen dan Tenaga Kependidikan :</span></strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemberhentian dosen dan tenaga kependidikan diproses mengacu pada aturan pemberhentian pegawai PNS seperti tertera pada PP No 19 tahun 2013. Pemberhentian sesuai dengan aturan yang berlaku diantaranya adalah berdasarkan usia pensiun atau pengunduran diri karena alasan tertentu. Usia pensiun untuk dosen ialah 65 tahun bagi yang belum bergelar guru besar dan 70 tahun bagi yang mempunyai jabatan guru besar. Sementara itu, usia pensiun untuk tenaga kependidikan ialah <strong>56 tahun</strong>. Pengusulan masa pensiun dilakukan satu tahun sebelum mencapai usia pensiun dan dapat didahului dengan pelaksanaan Masa Persiapan Pensiun (MPP).</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `sdm2`
--

CREATE TABLE `sdm2` (
  `id_sdm2` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `sdm02` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdm2`
--

INSERT INTO `sdm2` (`id_sdm2`, `id_departemen`, `sdm02`) VALUES
(5, 6, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Monitoring dan Evaluasi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dan kinerja tenaga kependidikan dilakukan berdasarkan mekanisme yang telah dikembangkan oleh pemerintah dan IPB. Hal ini didasarkan pada Peraturan Pemerintah No 46 Tahun 2011 Tentang Penilaian Prestasi Kerja Pegawai Negeri Sipil. Sebagai pedoman pelaksanaan PP tersebut, Badan Kepegawaian Negara (BKN) mengeluarkan Peraturan Kepala BKN No 3 Tahun 2016 Tentang Pedoman Penyusunan Standar Teknis Kegiatan Sasaran Kerja Pegawai (SKP). Berdasarkan peraturan tersebut, IPB menyusun POB/SDM/14 Tentang Prosedur Operasional Baku Penilaian Kinerja.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dalam proses belajar mengajar dimonitor melalui pengisian berita acara perkuliahan (BAP) pada setiap kali selesai memberikan kuliah dan praktikum untuk mengetahui tingkat kehadiran atau jumlah tatap muka dan kesesuaian antara topik materi kuliah dengan silabus mata kuliah yang telah dijelaskan kepada mahasiswa dalam kontrak perkuliahan pada awal perkuliahan. Evaluasi berita acara perkuliahan dilakukan di tingkat departemen oleh komisi akademik.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Rekam Jejak Kinerja Akademik Dosen dan Kinerja Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Selain itu, pada perkuliahan di akhir semester kinerja akademik dosen dievaluasi menggunakan instrumen Evaluasi Proses Belajar Mengajar (EPBM) yang kemudian hasilnya disampaikan kepada masing-masing dosen sebagai bahan diskusi dan perbaikan di tingkat PSIK. Data EPBM diolah oleh institusi sebagai bahan evaluasi terhadap kinerja dosen di bidang akademik dan dievaluasi di tingkat program studi dan fakultas.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kinerja dosen dalam pelaksanaan penelitian dan pengabdian kepada masyarakat dilakukan oleh LPPM (Lembaga Penelitian dan Pengabdian Masyarakat) sesuai dengan Bab 7 pada Buku Panduan Penelitian IPB mengenai pelaksanaan, monitoring, dan evaluasi. Monitoring dan evaluasi penelitian dan pengabdian ini dilakukan secara terjadwal dan dengan format penilaian yang jelas, dalam hal ini terdiri atas laporan kemajuan dan laporan akhir, baik yang dilakukan oleh internal IPB maupun eksternal (pemberi dana, misalnya Kemenristekdikti, Kementerian Pertanian).</span></p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>'),
(6, 3, '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\"><strong><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem Monitoring dan Evaluasi :</span></strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dan kinerja tenaga kependidikan dilakukan berdasarkan mekanisme yang telah dikembangkan oleh pemerintah dan IPB. Hal ini didasarkan pada Peraturan Pemerintah No 46 Tahun 2011 Tentang Penilaian Prestasi Kerja Pegawai Negeri Sipil. Sebagai pedoman pelaksanaan PP tersebut, Badan Kepegawaian Negara (BKN) mengeluarkan Peraturan Kepala BKN No 3 Tahun 2016 Tentang Pedoman Penyusunan Standar Teknis Kegiatan Sasaran Kerja Pegawai (SKP).&nbsp;</span><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Monitoring dan evaluasi kinerja akademik dosen dalam proses belajar mengajar dimonitor melalui pengisian berita acara perkuliahan (BAP) pada setiap kali selesai memberikan kuliah dan praktikum untuk mengetahui tingkat kehadiran atau jumlah tatap muka dan kesesuaian antara topik materi kuliah dengan silabus mata kuliah yang telah dijelaskan kepada mahasiswa dalam kontrak perkuliahan pada awal perkuliahan. Evaluasi berita acara perkuliahan dilakukan di tingkat departemen oleh komisi akademik.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\"><strong><span style=\"font-family: arial, helvetica, sans-serif;\">Rekam Jejak Kinerja Akademik Dosen dan Kinerja Tenaga Kependidikan :</span></strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada perkuliahan di akhir semester kinerja akademik dosen dievaluasi menggunakan instrumen Evaluasi Proses Belajar Mengajar (EPBM) yang kemudian hasilnya disampaikan kepada masing-masing dosen sebagai bahan diskusi dan perbaikan di tingkat PSIK. Data EPBM diolah oleh institusi sebagai bahan evaluasi terhadap kinerja dosen di bidang akademik dan dievaluasi di tingkat program studi dan fakultas.&nbsp;Kinerja dosen dalam pelaksanaan penelitian dan pengabdian kepada masyarakat dilakukan oleh LPPM (Lembaga Penelitian dan Pengabdian Masyarakat) sesuai dengan Bab 7 pada Buku Panduan Penelitian IPB mengenai pelaksanaan, monitoring, dan evaluasi. Monitoring dan evaluasi penelitian dan pengabdian ini dilakukan secara terjadwal dan dengan format penilaian yang jelas, dalam hal ini terdiri atas laporan kemajuan dan laporan akhir, baik yang dilakukan oleh internal IPB maupun eksternal (pemberi dana, misalnya Kemenristekdikti, Kementerian Pertanian).</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `sdm3s`
--

CREATE TABLE `sdm3s` (
  `id_sdm3` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_dosen_sdm3` varchar(255) NOT NULL,
  `nidn_sdm3` varchar(191) NOT NULL,
  `tgl_lahir_sdm3` date NOT NULL,
  `id_lampiran_sdm3` int(11) DEFAULT NULL,
  `gelar_sdm3` varchar(255) NOT NULL,
  `id_jabatann_sdm3` int(11) NOT NULL,
  `pendidikan_sdm3` varchar(255) NOT NULL,
  `bidang_keahlian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdm3s`
--

INSERT INTO `sdm3s` (`id_sdm3`, `id_departemen`, `nama_dosen_sdm3`, `nidn_sdm3`, `tgl_lahir_sdm3`, `id_lampiran_sdm3`, `gelar_sdm3`, `id_jabatann_sdm3`, `pendidikan_sdm3`, `bidang_keahlian`) VALUES
(136, 6, 'Agus Buono', '0002076607', '1966-07-02', 78, 'Ir, M.Si, M.Kom, Dr', 4, 'S1: 1992/IPB, S2: 1997/IPB, S2: 2001/UI, S3:  2009/UI', 'Statistika, Ilmu Komputer'),
(139, 3, 'Imas Sukaesih Sitanggang', '0030017508', '1975-01-30', 74, 'S.Si, M.Kom, Dr', 4, 'S1: 1997/IPB, S2: 2002/UGM,  S3: 2013/Universiti Putra Malaya', 'Matematika, Ilmu Komputer'),
(140, 3, 'Agus Buono', '0002076607', '1966-07-02', 73, 'Ir, M.Si, M.Kom, Dr', 4, 'S1: 1992/IPB, S2: 1997/IPB, S2: 2001/UI, S3:  2009/UI', 'Statistika, Ilmu Komputer'),
(142, 6, 'Imas Sukaesih Sitanggang', '0030017508', '1975-01-30', 82, 'S.Si, M.Kom, Dr', 4, 'S1: 1997/IPB, S2: 2002/UGM,  S3: 2013/Universiti Putra Malaya', 'Matematika, Ilmu Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `sdm4s`
--

CREATE TABLE `sdm4s` (
  `id_sdm4` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_dosen_sdm4` varchar(255) NOT NULL,
  `nidn_sdm4` varchar(255) NOT NULL,
  `tgl_lahir_sdm4` date NOT NULL,
  `id_lampiran_sdm4` int(11) DEFAULT NULL,
  `gelar_sdm4` varchar(255) NOT NULL,
  `id_jabatann_sdm4` int(11) NOT NULL,
  `pendidikan_sdm4` varchar(255) NOT NULL,
  `bidang_keahlian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdm4s`
--

INSERT INTO `sdm4s` (`id_sdm4`, `id_departemen`, `nama_dosen_sdm4`, `nidn_sdm4`, `tgl_lahir_sdm4`, `id_lampiran_sdm4`, `gelar_sdm4`, `id_jabatann_sdm4`, `pendidikan_sdm4`, `bidang_keahlian`) VALUES
(81, 6, 'Irmansyah', '0016096808', '1968-09-16', 74, 'Ir, M.Si, Dr.', 4, 'S1:IPB, S2:UI, S3:IPB', 'S1: Mekanisasi Pertanian, S2: Fisika Material, S3: Instrumentasi Pertanian'),
(82, 6, 'Mersi Kurniati', '0017116805', '1968-11-17', 68, 'S.Si, M.Si, Dr', 4, 'S1:UI, S2:UI, S3:IPB', 'S1: Fisika, S2: Fisika, S3: Biomaterial'),
(84, 3, 'Irmansyah', '0016096808', '1968-09-16', 70, 'Ir, M.Si, Dr.', 4, 'S1:IPB, S2:UI, S3:IPB', 'S1: Mekanisasi Pertanian, S2: Fisika Material, S3: Instrumentasi Pertanian'),
(85, 3, 'Mersi Kurniati', '0017116805', '1968-11-17', 71, 'S.Si, M.Si, Dr', 4, 'S1:UI, S2:UI, S3:IPB', 'S1: Fisika, S2: Fisika, S3: Biomaterial');

-- --------------------------------------------------------

--
-- Table structure for table `sdm5`
--

CREATE TABLE `sdm5` (
  `id_sdm5` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks1_sdm5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks2_sdm5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks3_sdm5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks4_sdm5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks5_sdm5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks6_sdm5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks7_sdm5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_sdm5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdm5`
--

INSERT INTO `sdm5` (`id_sdm5`, `id_departemen`, `nama_sdm5`, `sks1_sdm5`, `sks2_sdm5`, `sks3_sdm5`, `sks4_sdm5`, `sks5_sdm5`, `sks6_sdm5`, `sks7_sdm5`, `keterangan`, `tahun_sdm5`, `created_at`, `updated_at`) VALUES
(177, 6, 'Ir. Julio Adisantoso M.Kom', '6.51', '2.50', '0.00', '0.89', '1.31', '2.00', '0.00', '-', '2018', '2018-10-02 12:14:04', '2018-10-02 12:27:49'),
(178, 6, 'Ir. Meuthia Rachmaniah M.Sc', '3.00', '0.00', '0.00', '1.75', '5.40', '1.62', '0.00', '-', '2018', '2018-10-02 12:28:50', '2018-10-02 12:28:50'),
(180, 3, 'Ir. Julio Adisantoso M.Kom', '6.51', '2.50', '0.00', '0.89', '1.31', '2.00', '0.00', '-', '2018', '2018-10-02 12:14:04', '2018-10-02 12:27:49'),
(181, 3, 'Ir. Meuthia Rachmaniah M.Sc', '3.00', '0.00', '0.00', '1.75', '5.40', '1.62', '0.00', '-', '2018', '2018-10-02 12:28:50', '2018-10-02 12:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `sdm6`
--

CREATE TABLE `sdm6` (
  `id_sdm6` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keahlian_sdm6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_sdm6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mk_sdm6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jlh_kelas_sdm6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jlh_rencana_sdm6` int(11) NOT NULL,
  `jlh_laksana_sdm6` int(11) NOT NULL,
  `tahun_sdm6` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdm6`
--

INSERT INTO `sdm6` (`id_sdm6`, `id_departemen`, `nama_sdm6`, `keahlian_sdm6`, `kode_sdm6`, `nama_mk_sdm6`, `jlh_kelas_sdm6`, `jlh_rencana_sdm6`, `jlh_laksana_sdm6`, `tahun_sdm6`, `created_at`, `updated_at`) VALUES
(197, 6, 'Ir. Julio Adisantoso M.Kom', 'Ilmu Komputer', 'KOM101', 'Algoritme', '1', 4, 4, '2018', '2018-09-27 00:22:36', '2018-10-02 14:06:44'),
(204, 6, 'Ir. Meuthia Rachmaniah M.Sc', 'Ilmu Komputer', 'KOM201/3', 'Penerapan Komputer', '1', 4, 4, '2018', '2018-09-27 00:53:44', '2018-10-02 14:08:22'),
(206, 3, 'Ir. Julio Adisantoso M.Kom', 'Ilmu Komputer', 'KOM101', 'Algoritme', '1', 4, 4, '2018', '2018-09-27 00:22:36', '2018-10-02 14:06:44'),
(207, 3, 'Ir. Meuthia Rachmaniah M.Sc', 'Ilmu Komputer', 'KOM201/3', 'Penerapan Komputer', '1', 4, 4, '2018', '2018-09-27 00:53:44', '2018-10-02 14:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `sdm7`
--

CREATE TABLE `sdm7` (
  `id_sdm7` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keahlian_sdm7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_sdm7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mk_sdm7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jlh_kelas_sdm7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jlh_rencana_sdm7` int(11) NOT NULL,
  `jlh_laksana_sdm7` int(11) NOT NULL,
  `tahun_sdm7` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdm7`
--

INSERT INTO `sdm7` (`id_sdm7`, `id_departemen`, `nama_sdm7`, `keahlian_sdm7`, `kode_sdm7`, `nama_mk_sdm7`, `jlh_kelas_sdm7`, `jlh_rencana_sdm7`, `jlh_laksana_sdm7`, `tahun_sdm7`, `created_at`, `updated_at`) VALUES
(205, 6, 'Irmansyah', 'Fisika', 'FIS100', 'Fisika', '1', 11, 11, '2018', '2018-09-27 01:23:47', '2018-10-02 15:05:03'),
(207, 6, 'Mersi Kurniati', 'Fisika', 'FIS453', 'Instrumentasi Fisika', '1', 7, 7, '2018', '2018-10-02 14:57:10', '2018-10-02 14:57:10'),
(208, 3, 'Irmansyah', 'Fisika', 'FIS100', 'Fisika', '1', 11, 11, '2018', '2018-09-27 01:23:47', '2018-10-02 15:05:03'),
(209, 3, 'Mersi Kurniati', 'Fisika', 'FIS453', 'Instrumentasi Fisika', '1', 7, 7, '2018', '2018-10-02 14:57:10', '2018-10-02 14:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `sdm8s`
--

CREATE TABLE `sdm8s` (
  `id_sdm8` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_dosen_sdm8` varchar(255) NOT NULL,
  `nidn_sdm8` varchar(255) NOT NULL,
  `tgl_lahir_sdm8` date NOT NULL,
  `id_lampiran_sdm8` int(11) DEFAULT NULL,
  `gelar_sdm8` varchar(255) NOT NULL,
  `id_jabatann_sdm8` int(11) NOT NULL,
  `pendidikan_sdm8` varchar(255) NOT NULL,
  `bidang_keahlian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdm8s`
--

INSERT INTO `sdm8s` (`id_sdm8`, `id_departemen`, `nama_dosen_sdm8`, `nidn_sdm8`, `tgl_lahir_sdm8`, `id_lampiran_sdm8`, `gelar_sdm8`, `id_jabatann_sdm8`, `pendidikan_sdm8`, `bidang_keahlian`) VALUES
(76, 3, 'Kusman Sadki', '0012096904', '1969-12-09', 74, 'S.Si, M.Si, Dr', 1, 'S1, S2 & S3 (IPB)', 'S1: Statistika, S2: Statistika, S3: Statistika'),
(78, 3, 'Muhammad Nur Aldi', '0018086012', '1960-08-18', 75, 'Ir, MS, Dr', 1, 'S1 & S2 (IPB), S3: (UPLB Filipina)', 'S1: Pertanian, S2: Statistika, S3: Statistika');

-- --------------------------------------------------------

--
-- Table structure for table `sdm9`
--

CREATE TABLE `sdm9` (
  `id_sdm9` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keahlian_sdm9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_sdm9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mk_sdm9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jlh_kelas_sdm9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jlh_rencana_sdm9` int(11) NOT NULL,
  `jlh_laksana_sdm9` int(11) NOT NULL,
  `tahun_sdm9` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdm9`
--

INSERT INTO `sdm9` (`id_sdm9`, `id_departemen`, `nama_sdm9`, `keahlian_sdm9`, `kode_sdm9`, `nama_mk_sdm9`, `jlh_kelas_sdm9`, `jlh_rencana_sdm9`, `jlh_laksana_sdm9`, `tahun_sdm9`, `created_at`, `updated_at`) VALUES
(191, 3, 'Sony Hartono Wijaya, S.Kom, M.Kom', 'S3', 'Ilmu Komputer', 'Nara Institute of Technology', 'Jepang', 2013, 0, '2018', '2018-09-25 15:53:59', '2018-09-25 15:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `sdm10`
--

CREATE TABLE `sdm10` (
  `id_sdm10` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm10` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_sdm10` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_pelaksanaan_sdm10` date NOT NULL,
  `tahun_sdm10` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdm10`
--

INSERT INTO `sdm10` (`id_sdm10`, `id_departemen`, `nama_sdm10`, `judul_sdm10`, `waktu_pelaksanaan_sdm10`, `tahun_sdm10`, `created_at`, `updated_at`) VALUES
(202, 6, 'Dr. Emmanuel Paradis', 'Mini Conference dengan topik : \"R and its applications\"', '2013-06-05', '2018', '2018-09-25 08:11:49', '2018-09-25 08:11:49'),
(203, 6, 'Irwin Suhendra, S.S (English First)', 'Peningkatan Kompetensi Bahasa Inggris bagi dosen', '2013-06-10', '2018', '2018-09-25 08:12:39', '2018-09-25 08:12:39'),
(208, 3, 'Dr. Emmanuel Paradis', 'Mini Conference dengan topik : \"R and its applications\"', '2013-06-05', '2018', '2018-09-25 08:11:49', '2018-09-25 08:11:49'),
(209, 3, 'Irwin Suhendra, S.S (English First)', 'Peningkatan Kompetensi Bahasa Inggris bagi dosen', '2013-06-10', '2018', '2018-09-25 08:12:39', '2018-09-25 08:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `sdm11`
--

CREATE TABLE `sdm11` (
  `id_sdm11` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm11` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang_sdm11` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_sdm11` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pt_sdm11` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara_sdm11` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_mulai_sdm11` int(11) NOT NULL,
  `tahun_sdm11` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdm11`
--

INSERT INTO `sdm11` (`id_sdm11`, `id_departemen`, `nama_sdm11`, `jenjang_sdm11`, `bidang_sdm11`, `pt_sdm11`, `negara_sdm11`, `tahun_mulai_sdm11`, `tahun_sdm11`, `created_at`, `updated_at`) VALUES
(189, 6, 'Sony Hartono Wijaya, S.Kom, M.Kom', 'S3', 'Ilmu Komputer', 'Nara Institute of Technology', 'Jepang', 2014, '2018', '2018-09-25 08:36:59', '2018-09-25 08:36:59'),
(190, 6, 'Hendra Rahmawan, S.Kom, M.T', 'S3', 'Teknik Elektro', 'Institut Teknologi Bandung', 'Indonesia', 2013, '2018', '2018-09-25 08:38:18', '2018-09-25 08:38:18'),
(193, 3, 'Sony Hartono Wijaya, S.Kom, M.Kom', 'S3', 'Ilmu Komputer', 'Nara Institute of Technology', 'Jepang', 2014, '2018', '2018-09-25 08:36:59', '2018-09-25 08:36:59'),
(194, 3, 'Hendra Rahmawan, S.Kom, M.T', 'S3', 'Teknik Elektro', 'Institut Teknologi Bandung', 'Indonesia', 2013, '2018', '2018-09-25 08:38:18', '2018-09-25 08:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `sdm12`
--

CREATE TABLE `sdm12` (
  `id_sdm12` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm12` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_sdm12` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_sdm12` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kpn_sdm12` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_haki` int(11) NOT NULL,
  `tahun_sdm12` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdm12`
--

INSERT INTO `sdm12` (`id_sdm12`, `id_departemen`, `nama_sdm12`, `jenis_sdm12`, `tempat_sdm12`, `kpn_sdm12`, `id_haki`, `tahun_sdm12`, `created_at`, `updated_at`) VALUES
(190, 6, 'Ir. Meuthia Rachmaniah M.Sc', 'APEC Women in STEM: A Framework for Dialogue, Learning, and Action. US-APEC Technical Assistance to Advance Regional Integration (US-ATAARI).', 'Lima Peru', '2016', 2, '2018', '2018-09-14 15:59:39', '2018-10-02 15:33:42'),
(195, 6, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Seminar dan Workshop Nasional Bidang Informatika dengan tema \"Penerapan Bio-Informatika sebagai Usaha Pengambangan Pembelajaran Berbasis ICT\" FKIP Universitas Syiah Kuala - Institut Pertanian Bogor', 'Unsyiah, Aceh', '20 Oktober 2013', 1, '2018', '2018-10-02 15:34:58', '2018-10-03 16:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `sdm13`
--

CREATE TABLE `sdm13` (
  `id_sdm13` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm13` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prestasi_sdm13` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pencapaian_sdm13` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_sdm13` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_sdm13` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdm13`
--

INSERT INTO `sdm13` (`id_sdm13`, `id_departemen`, `nama_sdm13`, `prestasi_sdm13`, `pencapaian_sdm13`, `tingkat_sdm13`, `tahun_sdm13`, `created_at`, `updated_at`) VALUES
(191, 6, 'Ir. Julio Adisantoso, M.Kom', 'Pemenang lomba Website IPB 2015 Kategori Blog Dosen', '2015', 'Lokal', '2018', '2018-09-25 09:24:56', '2018-09-25 09:26:12'),
(192, 6, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Peringkat 3 Ketua Program Studi Berprestasi IPB', '2015', 'Lokal', '2018', '2018-09-25 09:26:06', '2018-09-25 09:26:06'),
(194, 3, 'Ir. Julio Adisantoso, M.Kom', 'Pemenang lomba Website IPB 2015 Kategori Blog Dosen', '2015', 'Lokal', '2018', '2018-09-25 09:24:56', '2018-09-25 09:26:12'),
(195, 3, 'Dr. Ir. Agus Buono M.Si, M.Kom', 'Peringkat 3 Ketua Program Studi Berprestasi IPB', '2015', 'Lokal', '2018', '2018-09-25 09:26:06', '2018-09-25 09:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `sdm14`
--

CREATE TABLE `sdm14` (
  `id_sdm14` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sdm14` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisasi_sdm14` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kurun_sdm14` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_sdm14` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_sdm14` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdm14`
--

INSERT INTO `sdm14` (`id_sdm14`, `id_departemen`, `nama_sdm14`, `organisasi_sdm14`, `kurun_sdm14`, `tingkat_sdm14`, `tahun_sdm14`, `created_at`, `updated_at`) VALUES
(195, 6, 'Ir. Meuthia Rachmaniah M.Sc', 'MIPANet', '2016-sekarang', 'Nasional', '2018', '2018-09-25 09:43:20', '2018-10-03 13:41:34'),
(196, 6, 'YantoIr. Julio Adisantoso, MKom', 'Tim Olimpiade Komputer Indonesia', '2014-sekarang', 'Nasional', '2018', '2018-09-25 09:43:57', '2018-10-03 13:42:16'),
(198, 3, 'Ir. Julio Adisantoso, M.Kom', 'Tim Olimpiade Komputer Indonesia', '2011', 'Nasional', '2018', '2018-09-25 09:43:20', '2018-09-25 09:43:20'),
(199, 3, 'Yanto', 'Organisasi 1', '2018', 'Lokal', '2018', '2018-09-25 09:43:57', '2018-09-25 09:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `sdm15`
--

CREATE TABLE `sdm15` (
  `id_sdm15` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `pustakawan_s3_sdm15` int(11) NOT NULL,
  `pustakawan_s2_sdm15` int(11) NOT NULL,
  `pustakawan_s1_sdm15` int(11) NOT NULL,
  `pustakawan_d4_sdm15` int(11) NOT NULL,
  `pustakawan_d3_sdm15` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pustakawan_d2_sdm15` int(11) NOT NULL,
  `pustakawan_d1_sdm15` int(11) NOT NULL,
  `pustakawan_sma_sdm15` int(11) NOT NULL,
  `pustakawan_unit_sdm15` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_s3_sdm15` int(11) NOT NULL,
  `lab_s2_sdm15` int(11) NOT NULL,
  `lab_s1_sdm15` int(11) NOT NULL,
  `lab_d4_sdm15` int(11) NOT NULL,
  `lab_d3_sdm15` int(11) NOT NULL,
  `lab_d2_sdm15` int(11) NOT NULL,
  `lab_d1_sdm15` int(11) NOT NULL,
  `lab_sma_sdm15` int(11) NOT NULL,
  `lab_unit_sdm15` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab1_s3_sdm15` int(11) NOT NULL,
  `lab1_s2_sdm15` int(11) NOT NULL,
  `lab1_s1_sdm15` int(11) NOT NULL,
  `lab1_d4_sdm15` int(11) NOT NULL,
  `lab1_d3_sdm15` int(11) NOT NULL,
  `lab1_d2_sdm15` int(11) NOT NULL,
  `lab1_d1_sdm15` int(11) NOT NULL,
  `lab1_sma_sdm15` int(11) NOT NULL,
  `lab1_unit_sdm15` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_s3_sdm15` int(11) NOT NULL,
  `admin_s2_sdm15` int(11) NOT NULL,
  `admin_s1_sdm15` int(11) NOT NULL,
  `admin_d4_sdm15` int(11) NOT NULL,
  `admin_d3_sdm15` int(11) NOT NULL,
  `admin_d2_sdm15` int(11) NOT NULL,
  `admin_d1_sdm15` int(11) NOT NULL,
  `admin_sma_sdm15` int(11) NOT NULL,
  `admin_unit_sdm15` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin1_s3_sdm15` int(11) NOT NULL,
  `admin1_s2_sdm15` int(11) NOT NULL,
  `admin1_s1_sdm15` int(11) NOT NULL,
  `admin1_d4_sdm15` int(11) NOT NULL,
  `admin1_d3_sdm15` int(11) NOT NULL,
  `admin1_d2_sdm15` int(11) NOT NULL,
  `admin1_d1_sdm15` int(11) NOT NULL,
  `admin1_sma_sdm15` int(11) NOT NULL,
  `admin1_unit_sdm15` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin2_s3_sdm15` int(11) NOT NULL,
  `admin2_s2_sdm15` int(11) NOT NULL,
  `admin2_s1_sdm15` int(11) NOT NULL,
  `admin2_d4_sdm15` int(11) NOT NULL,
  `admin2_d3_sdm15` int(11) NOT NULL,
  `admin2_d2_sdm15` int(11) NOT NULL,
  `admin2_d1_sdm15` int(11) NOT NULL,
  `admin2_sma_sdm15` int(11) NOT NULL,
  `admin2_unit_sdm15` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktu_s3_sdm15` int(11) NOT NULL,
  `ktu_s2_sdm15` int(11) NOT NULL,
  `ktu_s1_sdm15` int(11) NOT NULL,
  `ktu_d4_sdm15` int(11) NOT NULL,
  `ktu_d3_sdm15` int(11) NOT NULL,
  `ktu_d2_sdm15` int(11) NOT NULL,
  `ktu_d1_sdm15` int(11) NOT NULL,
  `ktu_sma_sdm15` int(11) NOT NULL,
  `ktu_unit_sdm15` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_sdm15` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdm15`
--

INSERT INTO `sdm15` (`id_sdm15`, `id_departemen`, `pustakawan_s3_sdm15`, `pustakawan_s2_sdm15`, `pustakawan_s1_sdm15`, `pustakawan_d4_sdm15`, `pustakawan_d3_sdm15`, `pustakawan_d2_sdm15`, `pustakawan_d1_sdm15`, `pustakawan_sma_sdm15`, `pustakawan_unit_sdm15`, `lab_s3_sdm15`, `lab_s2_sdm15`, `lab_s1_sdm15`, `lab_d4_sdm15`, `lab_d3_sdm15`, `lab_d2_sdm15`, `lab_d1_sdm15`, `lab_sma_sdm15`, `lab_unit_sdm15`, `lab1_s3_sdm15`, `lab1_s2_sdm15`, `lab1_s1_sdm15`, `lab1_d4_sdm15`, `lab1_d3_sdm15`, `lab1_d2_sdm15`, `lab1_d1_sdm15`, `lab1_sma_sdm15`, `lab1_unit_sdm15`, `admin_s3_sdm15`, `admin_s2_sdm15`, `admin_s1_sdm15`, `admin_d4_sdm15`, `admin_d3_sdm15`, `admin_d2_sdm15`, `admin_d1_sdm15`, `admin_sma_sdm15`, `admin_unit_sdm15`, `admin1_s3_sdm15`, `admin1_s2_sdm15`, `admin1_s1_sdm15`, `admin1_d4_sdm15`, `admin1_d3_sdm15`, `admin1_d2_sdm15`, `admin1_d1_sdm15`, `admin1_sma_sdm15`, `admin1_unit_sdm15`, `admin2_s3_sdm15`, `admin2_s2_sdm15`, `admin2_s1_sdm15`, `admin2_d4_sdm15`, `admin2_d3_sdm15`, `admin2_d2_sdm15`, `admin2_d1_sdm15`, `admin2_sma_sdm15`, `admin2_unit_sdm15`, `ktu_s3_sdm15`, `ktu_s2_sdm15`, `ktu_s1_sdm15`, `ktu_d4_sdm15`, `ktu_d3_sdm15`, `ktu_d2_sdm15`, `ktu_d1_sdm15`, `ktu_sma_sdm15`, `ktu_unit_sdm15`, `tahun_sdm15`, `created_at`, `updated_at`) VALUES
(194, 6, 0, 5, 9, 0, '1', 9, 0, 0, 'IPB, Perpustakaan pusat LSI, Fakultas MIPA', 0, 1, 3, 0, 10, 0, 0, 0, 'IPB, Direktorat Integrasi Data dan Sistem Informasi (DIDSI)', 0, 0, 0, 0, 0, 0, 0, 1, 'Dept. Ilmu Komputer', 0, 2, 5, 0, 3, 0, 0, 20, 'IPB, Direktorat Admninistrasi Pendidikan', 0, 1, 2, 0, 0, 0, 0, 1, 'Fakultas MIPA', 0, 1, 2, 0, 0, 0, 0, 3, 'Dept. Ilmu Komputer', 0, 0, 0, 0, 0, 1, 0, 1, 'Dept. Ilmu Komputer', '2018', '2018-09-15 02:36:22', '2018-10-02 06:47:46'),
(195, 3, 0, 5, 9, 0, '1', 9, 0, 0, 'IPB, Perpustakaan pusat LSI, Fakultas MIPA', 0, 1, 3, 0, 10, 0, 0, 0, 'IPB, Direktorat Integrasi Data dan Sistem Informasi (DIDSI)', 0, 0, 0, 0, 0, 0, 0, 1, 'Dept. Ilmu Komputer', 0, 2, 5, 0, 3, 0, 0, 20, 'IPB, Direktorat Admninistrasi Pendidikan', 0, 1, 2, 0, 0, 0, 0, 1, 'Fakultas MIPA', 0, 1, 2, 0, 0, 0, 0, 3, 'Dept. Ilmu Komputer', 0, 0, 0, 0, 0, 1, 0, 1, 'Dept. Ilmu Komputer', '2018', '2018-09-15 02:36:22', '2018-10-02 06:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `sdm16`
--

CREATE TABLE `sdm16` (
  `id_sdm16` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `sdm016` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdm16`
--

INSERT INTO `sdm16` (`id_sdm16`, `id_departemen`, `sdm016`) VALUES
(5, 6, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan kualifikasi dan kompetensi para tenaga kependidikan di PSIK, maka dilakukan kegiatan-kegiatan baik studi lanjut maupun pelatihan non-gelar yang dilakukan oleh departemen, fakultas, maupun IPB. Selama tiga tahun, upaya yang telah dilakukan seperti disajikan pada tabel berikut.</span></p>\r\n<table style=\"height: 72px; width: 47.6328%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 36px;\">\r\n<td style=\"width: 3.78999%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 20.1927%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis Kegiatan</strong></span></td>\r\n<td style=\"width: 15.7685%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Tahun</strong></span></td>\r\n<td style=\"width: 1.99601%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Tenaga Kependidikan</strong></span></td>\r\n<td style=\"width: 24.7171%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Sumber Pendanaan</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut dari SMK ke S1</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2012-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Siti Desi Wiranti</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Bantuan dari Departemen</span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut S2</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2014-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Faturrakhman</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">DIKTI</span></td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(6, 3, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan kualifikasi dan kompetensi para tenaga kependidikan di PSIK, maka dilakukan kegiatan-kegiatan baik studi lanjut maupun pelatihan non-gelar yang dilakukan oleh departemen, fakultas, maupun IPB. Selama tiga tahun, upaya yang telah dilakukan seperti disajikan pada tabel berikut.</span></p>\r\n<table style=\"height: 72px; width: 47.6328%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 36px;\">\r\n<td style=\"width: 3.78999%; height: 36px; text-align: center;\"><strong>No</strong></td>\r\n<td style=\"width: 20.1927%; height: 36px; text-align: center;\"><strong>Jenis Kegiatan</strong></td>\r\n<td style=\"width: 15.7685%; height: 36px; text-align: center;\"><strong>Tahun</strong></td>\r\n<td style=\"width: 1.99601%; height: 36px; text-align: center;\"><strong>Nama Tenaga Kependidikan</strong></td>\r\n<td style=\"width: 24.7171%; height: 36px; text-align: center;\"><strong>Sumber Pendanaan</strong></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\">1</td>\r\n<td style=\"width: 20.1927%; height: 18px;\">Studi lanjut dari SMK ke S1</td>\r\n<td style=\"width: 15.7685%; height: 18px;\">2012-2016</td>\r\n<td style=\"width: 1.99601%; height: 18px;\">Siti Desi Wiranti</td>\r\n<td style=\"width: 24.7171%; height: 18px;\">Bantuan dari Departemen</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\">2</td>\r\n<td style=\"width: 20.1927%; height: 18px;\">Studi lanjut S2</td>\r\n<td style=\"width: 15.7685%; height: 18px;\">2014-2016</td>\r\n<td style=\"width: 1.99601%; height: 18px;\">Faturrakhman</td>\r\n<td style=\"width: 24.7171%; height: 18px;\">DIKTI</td>\r\n</tr>\r\n</tbody>\r\n</table>');

-- --------------------------------------------------------

--
-- Table structure for table `sdmf2`
--

CREATE TABLE `sdmf2` (
  `id_sdmf2` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `pustakawan_s3_sdmf2` int(11) NOT NULL,
  `pustakawan_s2_sdmf2` int(11) NOT NULL,
  `pustakawan_s1_sdmf2` int(11) NOT NULL,
  `pustakawan_d4_sdmf2` int(11) NOT NULL,
  `pustakawan_d3_sdmf2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pustakawan_d2_sdmf2` int(11) NOT NULL,
  `pustakawan_d1_sdmf2` int(11) NOT NULL,
  `pustakawan_sma_sdmf2` int(11) NOT NULL,
  `pustakawan_unit_sdmf2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_s3_sdmf2` int(11) NOT NULL,
  `lab_s2_sdmf2` int(11) NOT NULL,
  `lab_s1_sdmf2` int(11) NOT NULL,
  `lab_d4_sdmf2` int(11) NOT NULL,
  `lab_d3_sdmf2` int(11) NOT NULL,
  `lab_d2_sdmf2` int(11) NOT NULL,
  `lab_d1_sdmf2` int(11) NOT NULL,
  `lab_sma_sdmf2` int(11) NOT NULL,
  `lab_unit_sdmf2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_s3_sdmf2` int(11) NOT NULL,
  `admin_s2_sdmf2` int(11) NOT NULL,
  `admin_s1_sdmf2` int(11) NOT NULL,
  `admin_d4_sdmf2` int(11) NOT NULL,
  `admin_d3_sdmf2` int(11) NOT NULL,
  `admin_d2_sdmf2` int(11) NOT NULL,
  `admin_d1_sdmf2` int(11) NOT NULL,
  `admin_sma_sdmf2` int(11) NOT NULL,
  `admin_unit_sdmf2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktu_s3_sdmf2` int(11) NOT NULL,
  `ktu_s2_sdmf2` int(11) NOT NULL,
  `ktu_s1_sdmf2` int(11) NOT NULL,
  `ktu_d4_sdmf2` int(11) NOT NULL,
  `ktu_d3_sdmf2` int(11) NOT NULL,
  `ktu_d2_sdmf2` int(11) NOT NULL,
  `ktu_d1_sdmf2` int(11) NOT NULL,
  `ktu_sma_sdmf2` int(11) NOT NULL,
  `ktu_unit_sdmf2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesor_s3_sdmf2` int(11) NOT NULL,
  `profesor_s2_sdmf2` int(11) NOT NULL,
  `profesor_s1_sdmf2` int(11) NOT NULL,
  `profesor_d4_sdmf2` int(11) NOT NULL,
  `profesor_d3_sdmf2` int(11) NOT NULL,
  `profesor_d2_sdmf2` int(11) NOT NULL,
  `profesor_d1_sdmf2` int(11) NOT NULL,
  `profesor_sma_sdmf2` int(11) NOT NULL,
  `profesor_unit_sdmf2` int(11) NOT NULL,
  `pts1_s3_sdmf2` int(11) NOT NULL,
  `pts1_s2_sdmf2` int(11) NOT NULL,
  `pts1_s1_sdmf2` int(11) NOT NULL,
  `pts1_d4_sdmf2` int(11) NOT NULL,
  `pts1_d3_sdmf2` int(11) NOT NULL,
  `pts1_d2_sdmf2` int(11) NOT NULL,
  `pts1_d1_sdmf2` int(11) NOT NULL,
  `pts1_sma_sdmf2` int(11) NOT NULL,
  `pts1_unit_sdmf2` int(11) NOT NULL,
  `pts2_s3_sdmf2` int(11) NOT NULL,
  `pts2_s2_sdmf2` int(11) NOT NULL,
  `pts2_s1_sdmf2` int(11) NOT NULL,
  `pts2_d4_sdmf2` int(11) NOT NULL,
  `pts2_d3_sdmf2` int(11) NOT NULL,
  `pts2_d2_sdmf2` int(11) NOT NULL,
  `pts2_d1_sdmf2` int(11) NOT NULL,
  `pts2_sma_sdmf2` int(11) NOT NULL,
  `pts2_unit_sdmf2` int(11) NOT NULL,
  `pts3_s3_sdmf2` int(11) NOT NULL,
  `pts3_s2_sdmf2` int(11) NOT NULL,
  `pts3_s1_sdmf2` int(11) NOT NULL,
  `pts3_d4_sdmf2` int(11) NOT NULL,
  `pts3_d3_sdmf2` int(11) NOT NULL,
  `pts3_d2_sdmf2` int(11) NOT NULL,
  `pts3_d1_sdmf2` int(11) NOT NULL,
  `pts3_sma_sdmf2` int(11) NOT NULL,
  `pts3_unit_sdmf2` int(11) NOT NULL,
  `tahun_sdmf2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdmf2`
--

INSERT INTO `sdmf2` (`id_sdmf2`, `id_departemen`, `pustakawan_s3_sdmf2`, `pustakawan_s2_sdmf2`, `pustakawan_s1_sdmf2`, `pustakawan_d4_sdmf2`, `pustakawan_d3_sdmf2`, `pustakawan_d2_sdmf2`, `pustakawan_d1_sdmf2`, `pustakawan_sma_sdmf2`, `pustakawan_unit_sdmf2`, `lab_s3_sdmf2`, `lab_s2_sdmf2`, `lab_s1_sdmf2`, `lab_d4_sdmf2`, `lab_d3_sdmf2`, `lab_d2_sdmf2`, `lab_d1_sdmf2`, `lab_sma_sdmf2`, `lab_unit_sdmf2`, `admin_s3_sdmf2`, `admin_s2_sdmf2`, `admin_s1_sdmf2`, `admin_d4_sdmf2`, `admin_d3_sdmf2`, `admin_d2_sdmf2`, `admin_d1_sdmf2`, `admin_sma_sdmf2`, `admin_unit_sdmf2`, `ktu_s3_sdmf2`, `ktu_s2_sdmf2`, `ktu_s1_sdmf2`, `ktu_d4_sdmf2`, `ktu_d3_sdmf2`, `ktu_d2_sdmf2`, `ktu_d1_sdmf2`, `ktu_sma_sdmf2`, `ktu_unit_sdmf2`, `profesor_s3_sdmf2`, `profesor_s2_sdmf2`, `profesor_s1_sdmf2`, `profesor_d4_sdmf2`, `profesor_d3_sdmf2`, `profesor_d2_sdmf2`, `profesor_d1_sdmf2`, `profesor_sma_sdmf2`, `profesor_unit_sdmf2`, `pts1_s3_sdmf2`, `pts1_s2_sdmf2`, `pts1_s1_sdmf2`, `pts1_d4_sdmf2`, `pts1_d3_sdmf2`, `pts1_d2_sdmf2`, `pts1_d1_sdmf2`, `pts1_sma_sdmf2`, `pts1_unit_sdmf2`, `pts2_s3_sdmf2`, `pts2_s2_sdmf2`, `pts2_s1_sdmf2`, `pts2_d4_sdmf2`, `pts2_d3_sdmf2`, `pts2_d2_sdmf2`, `pts2_d1_sdmf2`, `pts2_sma_sdmf2`, `pts2_unit_sdmf2`, `pts3_s3_sdmf2`, `pts3_s2_sdmf2`, `pts3_s1_sdmf2`, `pts3_d4_sdmf2`, `pts3_d3_sdmf2`, `pts3_d2_sdmf2`, `pts3_d1_sdmf2`, `pts3_sma_sdmf2`, `pts3_unit_sdmf2`, `tahun_sdmf2`, `created_at`, `updated_at`) VALUES
(1, 10, 5, 1, 4, 4, '1', 5, 2, 2, '1', 4, 6, 5, 10, 4, 9, 4, 3, '1', 5, 7, 12, 7, 11, 7, 8, 8, '3', 8, 2, 19, 7, 3, 4, 7, 2, '2', 3, 6, 9, 4, 3, 0, 0, 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 9, 8, 9, 10, 10, 17, 9, 6, 3, 16, 13, 39, 21, 12, 8, 12, 10, 4, '2018', NULL, '2018-10-02 04:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `sdmf3`
--

CREATE TABLE `sdmf3` (
  `id_sdmf3` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `pustakawan_s3_sdmf3` int(11) NOT NULL,
  `pustakawan_s2_sdmf3` int(11) NOT NULL,
  `pustakawan_s1_sdmf3` int(11) NOT NULL,
  `pustakawan_d4_sdmf3` int(11) NOT NULL,
  `pustakawan_d3_sdmf3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pustakawan_d2_sdmf3` int(11) NOT NULL,
  `pustakawan_d1_sdmf3` int(11) NOT NULL,
  `pustakawan_sma_sdmf3` int(11) NOT NULL,
  `pustakawan_unit_sdmf3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_s3_sdmf3` int(11) NOT NULL,
  `lab_s2_sdmf3` int(11) NOT NULL,
  `lab_s1_sdmf3` int(11) NOT NULL,
  `lab_d4_sdmf3` int(11) NOT NULL,
  `lab_d3_sdmf3` int(11) NOT NULL,
  `lab_d2_sdmf3` int(11) NOT NULL,
  `lab_d1_sdmf3` int(11) NOT NULL,
  `lab_sma_sdmf3` int(11) NOT NULL,
  `lab_unit_sdmf3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_s3_sdmf3` int(11) NOT NULL,
  `admin_s2_sdmf3` int(11) NOT NULL,
  `admin_s1_sdmf3` int(11) NOT NULL,
  `admin_d4_sdmf3` int(11) NOT NULL,
  `admin_d3_sdmf3` int(11) NOT NULL,
  `admin_d2_sdmf3` int(11) NOT NULL,
  `admin_d1_sdmf3` int(11) NOT NULL,
  `admin_sma_sdmf3` int(11) NOT NULL,
  `admin_unit_sdmf3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktu_s3_sdmf3` int(11) NOT NULL,
  `ktu_s2_sdmf3` int(11) NOT NULL,
  `ktu_s1_sdmf3` int(11) NOT NULL,
  `ktu_d4_sdmf3` int(11) NOT NULL,
  `ktu_d3_sdmf3` int(11) NOT NULL,
  `ktu_d2_sdmf3` int(11) NOT NULL,
  `ktu_d1_sdmf3` int(11) NOT NULL,
  `ktu_sma_sdmf3` int(11) NOT NULL,
  `ktu_unit_sdmf3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_sdmf3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdmf3`
--

INSERT INTO `sdmf3` (`id_sdmf3`, `id_departemen`, `pustakawan_s3_sdmf3`, `pustakawan_s2_sdmf3`, `pustakawan_s1_sdmf3`, `pustakawan_d4_sdmf3`, `pustakawan_d3_sdmf3`, `pustakawan_d2_sdmf3`, `pustakawan_d1_sdmf3`, `pustakawan_sma_sdmf3`, `pustakawan_unit_sdmf3`, `lab_s3_sdmf3`, `lab_s2_sdmf3`, `lab_s1_sdmf3`, `lab_d4_sdmf3`, `lab_d3_sdmf3`, `lab_d2_sdmf3`, `lab_d1_sdmf3`, `lab_sma_sdmf3`, `lab_unit_sdmf3`, `admin_s3_sdmf3`, `admin_s2_sdmf3`, `admin_s1_sdmf3`, `admin_d4_sdmf3`, `admin_d3_sdmf3`, `admin_d2_sdmf3`, `admin_d1_sdmf3`, `admin_sma_sdmf3`, `admin_unit_sdmf3`, `ktu_s3_sdmf3`, `ktu_s2_sdmf3`, `ktu_s1_sdmf3`, `ktu_d4_sdmf3`, `ktu_d3_sdmf3`, `ktu_d2_sdmf3`, `ktu_d1_sdmf3`, `ktu_sma_sdmf3`, `ktu_unit_sdmf3`, `tahun_sdmf3`, `created_at`, `updated_at`) VALUES
(1, 10, 2, 4, 2, 1, '1', 0, 2, 2, '0', 4, 1, 4, 4, 2, 4, 2, 1, '0', 0, 0, 0, 0, 0, 0, 0, 1, '0', 2, 3, 3, 2, 3, 9, 1, 3, '0', '2018', NULL, '2018-10-02 04:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `sdmf5`
--

CREATE TABLE `sdmf5` (
  `id_sdmf5` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `pustakawan_s3_sdmf5` int(11) NOT NULL,
  `pustakawan_s2_sdmf5` int(11) NOT NULL,
  `pustakawan_s1_sdmf5` int(11) NOT NULL,
  `pustakawan_d4_sdmf5` int(11) NOT NULL,
  `pustakawan_d3_sdmf5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pustakawan_d2_sdmf5` int(11) NOT NULL,
  `pustakawan_d1_sdmf5` int(11) NOT NULL,
  `pustakawan_sma_sdmf5` int(11) NOT NULL,
  `pustakawan_unit_sdmf5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_s3_sdmf5` int(11) NOT NULL,
  `lab_s2_sdmf5` int(11) NOT NULL,
  `lab_s1_sdmf5` int(11) NOT NULL,
  `lab_d4_sdmf5` int(11) NOT NULL,
  `lab_d3_sdmf5` int(11) NOT NULL,
  `lab_d2_sdmf5` int(11) NOT NULL,
  `lab_d1_sdmf5` int(11) NOT NULL,
  `lab_sma_sdmf5` int(11) NOT NULL,
  `lab_unit_sdmf5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_s3_sdmf5` int(11) NOT NULL,
  `admin_s2_sdmf5` int(11) NOT NULL,
  `admin_s1_sdmf5` int(11) NOT NULL,
  `admin_d4_sdmf5` int(11) NOT NULL,
  `admin_d3_sdmf5` int(11) NOT NULL,
  `admin_d2_sdmf5` int(11) NOT NULL,
  `admin_d1_sdmf5` int(11) NOT NULL,
  `admin_sma_sdmf5` int(11) NOT NULL,
  `admin_unit_sdmf5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktu_s3_sdmf5` int(11) NOT NULL,
  `ktu_s2_sdmf5` int(11) NOT NULL,
  `ktu_s1_sdmf5` int(11) NOT NULL,
  `ktu_d4_sdmf5` int(11) NOT NULL,
  `ktu_d3_sdmf5` int(11) NOT NULL,
  `ktu_d2_sdmf5` int(11) NOT NULL,
  `ktu_d1_sdmf5` int(11) NOT NULL,
  `ktu_sma_sdmf5` int(11) NOT NULL,
  `ktu_unit_sdmf5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_sdmf5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sdmf5`
--

INSERT INTO `sdmf5` (`id_sdmf5`, `id_departemen`, `pustakawan_s3_sdmf5`, `pustakawan_s2_sdmf5`, `pustakawan_s1_sdmf5`, `pustakawan_d4_sdmf5`, `pustakawan_d3_sdmf5`, `pustakawan_d2_sdmf5`, `pustakawan_d1_sdmf5`, `pustakawan_sma_sdmf5`, `pustakawan_unit_sdmf5`, `lab_s3_sdmf5`, `lab_s2_sdmf5`, `lab_s1_sdmf5`, `lab_d4_sdmf5`, `lab_d3_sdmf5`, `lab_d2_sdmf5`, `lab_d1_sdmf5`, `lab_sma_sdmf5`, `lab_unit_sdmf5`, `admin_s3_sdmf5`, `admin_s2_sdmf5`, `admin_s1_sdmf5`, `admin_d4_sdmf5`, `admin_d3_sdmf5`, `admin_d2_sdmf5`, `admin_d1_sdmf5`, `admin_sma_sdmf5`, `admin_unit_sdmf5`, `ktu_s3_sdmf5`, `ktu_s2_sdmf5`, `ktu_s1_sdmf5`, `ktu_d4_sdmf5`, `ktu_d3_sdmf5`, `ktu_d2_sdmf5`, `ktu_d1_sdmf5`, `ktu_sma_sdmf5`, `ktu_unit_sdmf5`, `tahun_sdmf5`, `created_at`, `updated_at`) VALUES
(1, 10, 0, 4, 5, 1, '3', 6, 0, 4, 'FMIPA, IPB', 0, 4, 34, 0, 22, 15, 0, 79, 'FMIPA, IPB', 0, 0, 12, 0, 10, 4, 0, 40, 'FMIPA', 0, 3, 4, 0, 0, 0, 0, 2, 'FMIPA', '2018', NULL, '2018-10-02 04:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `sdmfmipa1`
--

CREATE TABLE `sdmfmipa1` (
  `id_sdmfmipa1` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `sdmfmipa01` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdmfmipa1`
--

INSERT INTO `sdmfmipa1` (`id_sdmfmipa1`, `id_departemen`, `sdmfmipa01`) VALUES
(5, 10, '<p>Secara umum jumlah dosen MIPA sudah memadai. Jumlah dosen yang bergelar S2 dan S3 mencapai 97.30% dengan proporsi terbesar adalah berpendidikan S3 yaitu sebesar 60.81%. Di samping itu, jumlah Guru Besar/Profesor mencapai 11.71% (26 orang) dari jumlah dosen FMIPA yang ada. Jumlah ini akan terus ditingkatkan hingga mencapai 20% dalam 5-10 tahun ke depan. Saat ini, jenjang kepangkatan dosen didominasi oleh Lektor (30.63%) dan Lektor Kepala (24.32%).&nbsp; Selain itu di beberapa Departemen, terdapat 1 orang dosen yang sedang mengikuti program S2 dan 34 orang dosen yang mengikuti program S3 di dalam dan luar negeri. Dosen yang sekolah di dalam negeri dibiayai oleh beasiswa BPPS, sedangkan yang kuliah di luar negeri semua dibiayai beasiswa dari pemerintah maupun dari luar negeri. Pada beberapa Departemen, penelitian dan publikasi ilmiah dalam Jurnal Nasional dan Internasional relatif tinggi, sedangkan pada Departemen yang lain relatif rendah khususnya pada Departemen yang mendalami ilmu-ilmu dasar.</p>\r\n<p>Beberapa kendala yang dihadapi dalam pengembangan dosen tetap di FMIPA yaitu: (i) peluang mendapatkan beasiswa kuliah (bagi dosen muda) karena persaingan yang makin ketat, (ii) biaya penelitian untuk ilmu-ilmu dasar umumnya sulit untuk diperoleh, (iii) kemampuan Bahasa Inggris yang kurang membatasi peluang untuk publikasi internasional, (iv) pada beberapa Departemen, beban mengajar pada PPKU sangat tinggi sehingga mengurangi waktu untuk melaksanakan kegiatan penelitian dan diseminasi hasil penelitian.</p>\r\n<p>Untuk menjaga kesinambungan SDM dosen maka FMIPA telah membuat perencanaan SDM dosen hingga tahun 2030, yang tertulis dalam&nbsp; dokumen Kompilasi <em>Man Power Planning</em> Fakultas dan Departemen Institut Pertanian Bogor Tahun 2012 &ndash; 2030, dikeluarkan oleh Direktorat Sumber Daya Manusia, Institut Pertanian Bogor tahun 2012 (dokumen disediakan pada saat visitasi). Upaya peningkatan mutu dosen antara lain studi lanjut bagi dosen yang masih S2, pembentukan working group untuk meningkatkan kolaborasi dalam penelitian, pelatihan menulis proposal penelitian dan publikasi, bantuan dana bagi dosen yang akan mengikuti seminar, dan lainnya.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `sdmfmipa2`
--

CREATE TABLE `sdmfmipa2` (
  `id_sdmfmipa2` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `sdmfmipa02` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdmfmipa2`
--

INSERT INTO `sdmfmipa2` (`id_sdmfmipa2`, `id_departemen`, `sdmfmipa02`) VALUES
(5, 10, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Jumlah pegawai yang ada sudah memadai untuk melaksanakan seluruh tugas kependidikan dan administrasi yang dibutuhkan di lingkungan FMIPA IPB. Jumlah pegawai di lingkungan MIPA bervariasi sesuai tipe departemen. Pada Departemen Kimia, Biologi, dan Fisika yang memiliki laboratorium fisik, jumlah pegawainya khususnya laboran lebih banyak dibandingkan dengan Departemen Statistika, Geofisika dan Meteorologi, Matematika, dan Ilmu Komputer.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk menjaga kesinambungan SDM tenaga kependidikan maka FMIPA telah membuat perencanaan SDM tenaga kependidikan hingga tahun 2030 , yang tertulis dalam&nbsp; dokumen Kompilasi <em>Man Power Planning</em> Fakultas dan Departemen Institut Pertanian Bogor Tahun 2012&ndash;2030, dikeluarkan oleh Direktorat Sumber Daya Manusia, Institut Pertanian Bogor tahun 2012.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Upaya peningkatan SDM kependidikan dilakukan melalui pelatihan-pelatihan sesuai dengan bidang kerja masing-masing, misalnya: pelatihan perpajakan, pelatihan Sistem Pelaporan Keuangan, pelatihan administrasi SIMAK, pelatihan pengarsipan surat, <em>achievement motivation training</em>, pelatihan Bahasa Inggris, pelatihan Operasional Repositori Sistem Informasi Kredit Angka Karya Ilmiah (SIPAKARIL), pelatihan Sertifikasi Micosoft Office, pelatihan Jaringan Komputer, pelatihan <em>Character Building</em>, dan pelatihan Pelayanan Prima.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kendala dalam pengembangan tenaga kependidikan yaitu: penguasaan komputer oleh pegawai yang belum merata dan masih banyaknya tenaga kependidikan dengan tingkat pendidikan setingkat SMA. Upaya yang dilakukan adalah memberi kesempatan dan mendorong tenaga kependidikan untuk mengikuti pelatihan-pelatihan literasi komputer yang diadakan oleh Direktorat Integrasi Data dan Sistem Informasi IPB, FMIPA, atau departemen. Di samping itu, kesempatan studi lanjut diberikan kepada tenaga kependidikan baik ke jenjang Diploma, S1 maupun S2 dengan pendanaan dari FMIPA, IPB dan DIKTI.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `sdm_dep_1`
--

CREATE TABLE `sdm_dep_1` (
  `id_sdm_1` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdm_dep_1`
--

INSERT INTO `sdm_dep_1` (`id_sdm_1`, `id_departemen`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 6, 'Isi Text', '2018-09-17 14:05:34', '2018-09-17 07:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `sdm_dep_2`
--

CREATE TABLE `sdm_dep_2` (
  `id_sdm_2` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdm_dep_2`
--

INSERT INTO `sdm_dep_2` (`id_sdm_2`, `id_departemen`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 6, 'Isi Text', '2018-09-17 14:30:21', '2018-09-17 07:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `sdm_dep_16`
--

CREATE TABLE `sdm_dep_16` (
  `id_sdm_16` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdm_dep_16`
--

INSERT INTO `sdm_dep_16` (`id_sdm_16`, `id_departemen`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 6, 'Isi Text', '2018-09-17 14:30:35', '2018-09-17 07:30:35');

-- --------------------------------------------------------

--
-- Table structure for table `sdm_fakultas_1`
--

CREATE TABLE `sdm_fakultas_1` (
  `id_sdmf_1` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdm_fakultas_1`
--

INSERT INTO `sdm_fakultas_1` (`id_sdmf_1`, `id_departemen`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 10, 'Jumlah pegawai yang ada sudah memadai untuk melaksanakan seluruh tugas kependidikan dan administrasi yang dibutuhkan di lingkungan FMIPA IPB. Jumlah pegawai di lingkungan MIPA bervariasi sesuai tipe departemen. Pada Departemen Kimia, Biologi, dan Fisika yang memiliki laboratorium fisik, jumlah pegawainya khususnya laboran lebih banyak dibandingkan dengan Departemen Statistika, Geofisika dan Meteorologi, Matematika, dan Ilmu Komputer.\r\n\r\nUntuk menjaga kesinambungan SDM tenaga kependidikan maka FMIPA telah membuat perencanaan SDM tenaga kependidikan hingga tahun 2030 seperti diberikan dalam Tabel 4.3, yang tertulis dalam  dokumen Kompilasi Man Power Planning Fakultas dan Departemen Institut Pertanian Bogor Tahun 2012–2030, dikeluarkan oleh Direktorat Sumber Daya Manusia, Institut Pertanian Bogor tahun 2012.\r\n\r\nUpaya peningkatan SDM kependidikan dilakukan melalui pelatihan-pelatihan sesuai dengan bidang kerja masing-masing, misalnya: pelatihan perpajakan, pelatihan Sistem Pelaporan Keuangan, pelatihan administrasi SIMAK, pelatihan pengarsipan surat, achievement motivation training, pelatihan Bahasa Inggris, pelatihan Operasional Repositori Sistem Informasi Kredit Angka Karya Ilmiah (SIPAKARIL), pelatihan Sertifikasi Micosoft Office, pelatihan Jaringan Komputer, pelatihan Character Building, dan pelatihan Pelayanan Prima.\r\n\r\nKendala dalam pengembangan tenaga kependidikan yaitu: penguasaan komputer oleh pegawai yang belum merata dan masih banyaknya tenaga kependidikan dengan tingkat pendidikan setingkat SMA. Upaya yang dilakukan adalah memberi kesempatan dan mendorong tenaga kependidikan untuk mengikuti pelatihan-pelatihan literasi komputer yang diadakan oleh Direktorat Integrasi Data dan Sistem Informasi IPB, FMIPA, atau departemen. Di samping itu, kesempatan studi lanjut diberikan kepada tenaga kependidikan baik ke jenjang Diploma, S1 maupun S2 dengan pendanaan dari FMIPA, IPB dan DIKTI.', '2018-09-17 17:24:36', '2018-09-17 10:24:36');

-- --------------------------------------------------------

--
-- Table structure for table `sdm_fakultas_2`
--

CREATE TABLE `sdm_fakultas_2` (
  `id_sdmf_2` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sdm_fakultas_2`
--

INSERT INTO `sdm_fakultas_2` (`id_sdmf_2`, `id_departemen`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 10, 'Jumlah pegawai yang ada sudah memadai untuk melaksanakan seluruh tugas kependidikan dan administrasi yang dibutuhkan di lingkungan FMIPA IPB. Jumlah pegawai di lingkungan MIPA bervariasi sesuai tipe departemen. Pada Departemen Kimia, Biologi, dan Fisika yang memiliki laboratorium fisik, jumlah pegawainya khususnya laboran lebih banyak dibandingkan dengan Departemen Statistika, Geofisika dan Meteorologi, Matematika, dan Ilmu Komputer.\r\n\r\nUntuk menjaga kesinambungan SDM tenaga kependidikan maka FMIPA telah membuat perencanaan SDM tenaga kependidikan hingga tahun 2030 seperti diberikan dalam Tabel 4.3, yang tertulis dalam  dokumen Kompilasi Man Power Planning Fakultas dan Departemen Institut Pertanian Bogor Tahun 2012–2030, dikeluarkan oleh Direktorat Sumber Daya Manusia, Institut Pertanian Bogor tahun 2012.\r\n\r\nUpaya peningkatan SDM kependidikan dilakukan melalui pelatihan-pelatihan sesuai dengan bidang kerja masing-masing, misalnya: pelatihan perpajakan, pelatihan Sistem Pelaporan Keuangan, pelatihan administrasi SIMAK, pelatihan pengarsipan surat, achievement motivation training, pelatihan Bahasa Inggris, pelatihan Operasional Repositori Sistem Informasi Kredit Angka Karya Ilmiah (SIPAKARIL), pelatihan Sertifikasi Micosoft Office, pelatihan Jaringan Komputer, pelatihan Character Building, dan pelatihan Pelayanan Prima.\r\n\r\nKendala dalam pengembangan tenaga kependidikan yaitu: penguasaan komputer oleh pegawai yang belum merata dan masih banyaknya tenaga kependidikan dengan tingkat pendidikan setingkat SMA. Upaya yang dilakukan adalah memberi kesempatan dan mendorong tenaga kependidikan untuk mengikuti pelatihan-pelatihan literasi komputer yang diadakan oleh Direktorat Integrasi Data dan Sistem Informasi IPB, FMIPA, atau departemen. Di samping itu, kesempatan studi lanjut diberikan kepada tenaga kependidikan baik ke jenjang Diploma, S1 maupun S2 dengan pendanaan dari FMIPA, IPB dan DIKTI.', '2018-09-17 17:24:36', '2018-09-17 10:24:36');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `semesterr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id_semester`, `semesterr`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8');

-- --------------------------------------------------------

--
-- Table structure for table `sistem_kelola_data`
--

CREATE TABLE `sistem_kelola_data` (
  `id_sistem_kelola_datax` int(11) NOT NULL,
  `nama_sistem_kelola` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sistem_kelola_data`
--

INSERT INTO `sistem_kelola_data` (`id_sistem_kelola_datax`, `nama_sistem_kelola`) VALUES
(1, 'Secara manual'),
(2, 'Dengan komputer tanpa jaringan'),
(3, 'Dengan komputer melalui jaringan lokasi (LAN)'),
(4, 'Dengan komputer melalui jaringan luas (WAN)');

-- --------------------------------------------------------

--
-- Table structure for table `sistem_seleksi_dan_pengembangan`
--

CREATE TABLE `sistem_seleksi_dan_pengembangan` (
  `id_sistem_seleksi_dan_pengembangan` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan_seleksi_dan_pengembangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sistem_seleksi_dan_pengembangan`
--

INSERT INTO `sistem_seleksi_dan_pengembangan` (`id_sistem_seleksi_dan_pengembangan`, `id_departemen`, `keterangan_seleksi_dan_pengembangan`) VALUES
(1, 1, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Seleksi/Perekrutan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai institusi pemerintah, maka terkait dengan tenaga dosen dan tenaga kependidikan, Program Studi Ilmu Komputer (PSIK) mengikuti aturan yang sudah ditetapkan oleh pemerintah dan IPB. Aturan tersebut mulai dari kebijakan hingga pedoman operasional. Dalam hal ini, peran dari program studi atau departemen lebih ke arah hal-hal teknis operasional sesuai dengan kewenangannya, misalnya pengajuan kebutuhan pegawai, penilaian, penugasan, dan pengembangan kompetensi.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kebijakan-kebijakan pemerintah tersebut meliputi:</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 5 Tahun 2014 Tentang Aparatur Sipil Negara (ASN) yang mengatur ketentuan umum, perilaku dan kode etik, hak dan kewajiban, pengelolaan (organisasi dan manajemen).</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 14 tahun 2005 Tentang Guru dan Dosen yang mengatur ketentuan umum, profesionalitas, kualifikasi, kompetensi, sertifikasi, jabatan akademik, hak dan kewajiban, pengangkatan, penempatan, pemindahan, pemberhentian, pembinaan dan pengembangan, penghargaan, serta sanksi.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 66 Tahun 2013 Tentang Statuta Institut Pertanian Bogor yang pada Bagian Kesembilan (Pasal 71 &ndash; 78) mengatur mengenai ketenagaan yang meliputi:</span>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 71: batasan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 72: tenaga kerja asing</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 73: pengelolaan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 74: kewajiban pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 75: hak pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 76: pembinaan dan pengembangan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 77: penilaian kinerja</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 78: kiprah pegawai</span></li>\r\n</ol>\r\n</li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 19 Tahun 2013 Tentang Perubahan Keempat Atas Peraturan Pemerintah Nomor 32 Tahun 1979 Tentang Pemberhentian Pegawai Negeri Sipil.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peraturan Rektor Institut Pertanian Bogor Nomor 17/I3/KP/2011 Tentang Pengelolaan Pegawai Berstatus Bukan Pegawai Negeri Sipil di Lingkungan Institut Pertanian Bogor.</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai pelaksanaan dari kebijakan-kebijakan tersebut, maka disusunlah buku Prosedur Operasional Baku (POB) oleh Direktorat Sumberdaya Manusia (Dit. SDM) IPB yang terdiri atas 20 jenis POB yaitu (dokumen kebijakan dan dokumen POB secara lengkap disediakan pada saat visitasi):</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-001: Usul Kenaikan Pangkat</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-002: Kenaikan Jabatan Tenaga Kependidikan Pustakawan, Pranatahumas, dan Arsiparis</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-003: Kenaikan Jabatan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-004: Penilaian Karya Ilmiah Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-005: Usulan Pengaktifan Kembali</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-006: Pembinaan Aparatur PNS Bermasalah</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-007: Pensiun</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-008: Rotasi dan Mutasi</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-009: Penghargaan Satyalancana Karya Satya</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-010: Persuratan dan Pengarsipan Direktorat SDM IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-011: Penugasan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-012: Pembuatan Asuransi Sosial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-013: Tabungan Pensiun (TASPEN)</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-014: Asuransi Komersial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-015: Pembuatan Kartu Pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-016: Pembayaran Gaji PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-017: Pembayaran Uang Makan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-018: Cuti PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-019: Pengelolaan Cleaning Service IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-020: Pengadaan Pegawai</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengadaan dosen dan tenaga kependidikan didasarkan atas kebutuhan unit kerja untuk mengisi formasi yang secara umum disebabkan oleh adanya dosen dan tenaga kependidikan yang berhenti, pensiun, meninggal dunia atau adanya pengembangan organisasi. Berdasarkan UU No 14 Tahun 2005 Tentang Guru dan Dosen bahwa kualifikasi dosen harus berpendidikan S2. Pengumuman tentang penerimaan calon pegawai (dosen dan tenaga kependidikan) PNS dilakukan melalui website Kementerian Riset, Teknologi, dan Pendidikan Tinggi (Kemenristekdikti).&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Departemen Ilmu Komputer sebagai <em>homebase </em>dari PSIK, serta Fakultas MIPA telah mendapatkan sertifikasi ISO 9001:2008 sejak tahun 2015, sehingga semua POB yang telah disebutkan telah dilaksanakan secara konsisten. Sebagai contoh pelaksanaan adalah pada proses pengadaan atau rekrutmen pegawai, maka sesuai dengan POB/SDM-020 dimulai dengan pengajuan usulan oleh unit (departemen) mengenai kebutuhan pegawai yang disampaikan pada rapat pimpinan fakultas. Dalam rapat tersebut, berdasarkan analisis kebutuhan dan pengembangan program studi di Departemen Ilmu Komputer, maka departemen mengusulkan kebutuhan dosen seperti disajikan pada tabel berikut:</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tabel jumlah pegawai yang diusulkan dari tahun 2012 &ndash; 2016 sesuai kebutuhan</span></p>\r\n<table style=\"width: 33.8028%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 60px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis</strong></span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2012</strong></span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2013</strong></span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2014</strong></span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2015</strong></span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2016</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dosen</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tenaga Kependidikan</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Teknisi</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan usulan kebutuhan pegawai yang diusulkan melalui fakultas, maka dilakukan evaluasi, kompilasi, pemetaan, dan formasi kebutuhan oleh Dit. SDM untuk seluruh IPB. Setelah dikompilasi di level IPB, maka selanjutnya ditetapkan oleh rektor untuk dipublikasikan ke masyarakat melalui internet.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Penempatan :</strong></span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Setelah proses rekrutmen dan seleksi dilaksanakan, proses selanjutnya adalah penetapan/penempatan pegawai yang didasarkan pada kompetensi dan latar belakang pengetahuan yang dimilikinya.&nbsp;</span></p>\r\n<p><span style=\"font-size: 10pt;\"><strong style=\"font-family: arial, helvetica, sans-serif; text-align: justify;\">Pengembangan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengembangan pegawai mencakup aspek kuantitas dan kualitas. Pengembangan kuantitas pegawai dimulai dengan menyusun <em>master plan </em>kebutuhan pegawai dari tahun 2012 &ndash; 2030 (Master Plan pengembangan jumlah pegawai (dosen dan tenaga kependidikan) disediakan pada saat visitasi).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Retensi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan retensi pegawai, beberapa upaya yang dilakukan meliputi:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sistem penghonoran</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesejahteraan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesehatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Jenjang kepangkatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peningkatan kompetensi/kualifikasi</span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam sistem penghonoran, IPB telah menetapkan sistem yang berbasis kinerja, dalam hal ini penghonoran dibagi menjadi dua, yaitu honor rutin bulanan sesuai dengan pangkat dan jabatan, serta insentif yang nilainya didasarkan pada kinerja pegawai. Tunjangan kesejahteraan meliputi tunjangan suami/istri dan anak, tunjangan perumahan, tunjangan beras, dan tunjangan uang makan. Tunjangan kesehatan meliputi asuransi kesehatan serta pemeriksaan kesehatan untuk pegawai yang usianya di atas 40 tahun. Peningkatan retensi dan apresiasi terhadap pegawai juga dilakukan dengan adanya aturan dan insentif yang jelas untuk peningkatan jenjang kepangkatan pegawai. Peningkatan kompetensi/kualifikasi dilakukan dengan pendidikan formal (studi lanjut khususnya untuk dosen) maupun nonformal (pelatihan, seminar, dan workshop untuk dosen dan tenaga kependidikan).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan data tahun 2014 &ndash; 2016, tabel berikut menyajikan jumlah dosen dan tenaga kependidikan yang mengikuti kegiatan peningkatan kompetensi.</span></p>\r\n<table style=\"width: 41.3145%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 23.0669%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Kegiatan Peningkatan Kompetensi</strong></span></td>\r\n<td style=\"width: 8.57487%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Dosen</strong></span></td>\r\n<td style=\"width: 9.6418%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Tenaga Kependidikan</strong></span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pelatihan, workshop, seminar</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">133</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">20</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10 (jenjang s3)</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6 (1 S2 + 4 S1 + 1 D3)</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Total</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">143</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">26</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Pemberhentian Dosen dan Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemberhentian dosen dan tenaga kependidikan diproses mengacu pada aturan pemberhentian pegawai PNS seperti tertera pada PP No 19 tahun 2013. Pemberhentian sesuai dengan aturan yang berlaku diantaranya adalah berdasarkan usia pensiun atau pengunduran diri karena alasan tertentu. Usia pensiun untuk dosen ialah 65 tahun bagi yang belum bergelar guru besar dan 70 tahun bagi yang mempunyai jabatan guru besar. Sementara itu, usia pensiun untuk tenaga kependidikan ialah <strong>56 tahun</strong>. Pengusulan masa pensiun dilakukan satu tahun sebelum mencapai usia pensiun dan dapat didahului dengan pelaksanaan Masa Persiapan Pensiun (MPP).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Di Departemen Ilmu Komputer hingga saat ini baru ada tiga pegawai yang pensiun, yaitu satu orang dosen dan dua orang tenaga kependidikan. Bukti bahwa POB tersebut telah dijalankan secara konsisten, yaitu (a) surat usulan ke IPB, (b) surat usulan ke BKN, dan (c) SK pensiun (berkas secara lengkap disediakan saat visitasi).</span></p>'),
(2, 2, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Seleksi/Perekrutan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai institusi pemerintah, maka terkait dengan tenaga dosen dan tenaga kependidikan, Program Studi Ilmu Komputer (PSIK) mengikuti aturan yang sudah ditetapkan oleh pemerintah dan IPB. Aturan tersebut mulai dari kebijakan hingga pedoman operasional. Dalam hal ini, peran dari program studi atau departemen lebih ke arah hal-hal teknis operasional sesuai dengan kewenangannya, misalnya pengajuan kebutuhan pegawai, penilaian, penugasan, dan pengembangan kompetensi.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kebijakan-kebijakan pemerintah tersebut meliputi:</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 5 Tahun 2014 Tentang Aparatur Sipil Negara (ASN) yang mengatur ketentuan umum, perilaku dan kode etik, hak dan kewajiban, pengelolaan (organisasi dan manajemen).</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 14 tahun 2005 Tentang Guru dan Dosen yang mengatur ketentuan umum, profesionalitas, kualifikasi, kompetensi, sertifikasi, jabatan akademik, hak dan kewajiban, pengangkatan, penempatan, pemindahan, pemberhentian, pembinaan dan pengembangan, penghargaan, serta sanksi.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 66 Tahun 2013 Tentang Statuta Institut Pertanian Bogor yang pada Bagian Kesembilan (Pasal 71 &ndash; 78) mengatur mengenai ketenagaan yang meliputi:</span>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 71: batasan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 72: tenaga kerja asing</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 73: pengelolaan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 74: kewajiban pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 75: hak pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 76: pembinaan dan pengembangan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 77: penilaian kinerja</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 78: kiprah pegawai</span></li>\r\n</ol>\r\n</li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 19 Tahun 2013 Tentang Perubahan Keempat Atas Peraturan Pemerintah Nomor 32 Tahun 1979 Tentang Pemberhentian Pegawai Negeri Sipil.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peraturan Rektor Institut Pertanian Bogor Nomor 17/I3/KP/2011 Tentang Pengelolaan Pegawai Berstatus Bukan Pegawai Negeri Sipil di Lingkungan Institut Pertanian Bogor.</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai pelaksanaan dari kebijakan-kebijakan tersebut, maka disusunlah buku Prosedur Operasional Baku (POB) oleh Direktorat Sumberdaya Manusia (Dit. SDM) IPB yang terdiri atas 20 jenis POB yaitu (dokumen kebijakan dan dokumen POB secara lengkap disediakan pada saat visitasi):</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-001: Usul Kenaikan Pangkat</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-002: Kenaikan Jabatan Tenaga Kependidikan Pustakawan, Pranatahumas, dan Arsiparis</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-003: Kenaikan Jabatan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-004: Penilaian Karya Ilmiah Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-005: Usulan Pengaktifan Kembali</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-006: Pembinaan Aparatur PNS Bermasalah</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-007: Pensiun</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-008: Rotasi dan Mutasi</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-009: Penghargaan Satyalancana Karya Satya</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-010: Persuratan dan Pengarsipan Direktorat SDM IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-011: Penugasan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-012: Pembuatan Asuransi Sosial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-013: Tabungan Pensiun (TASPEN)</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-014: Asuransi Komersial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-015: Pembuatan Kartu Pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-016: Pembayaran Gaji PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-017: Pembayaran Uang Makan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-018: Cuti PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-019: Pengelolaan Cleaning Service IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-020: Pengadaan Pegawai</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengadaan dosen dan tenaga kependidikan didasarkan atas kebutuhan unit kerja untuk mengisi formasi yang secara umum disebabkan oleh adanya dosen dan tenaga kependidikan yang berhenti, pensiun, meninggal dunia atau adanya pengembangan organisasi. Berdasarkan UU No 14 Tahun 2005 Tentang Guru dan Dosen bahwa kualifikasi dosen harus berpendidikan S2. Pengumuman tentang penerimaan calon pegawai (dosen dan tenaga kependidikan) PNS dilakukan melalui website Kementerian Riset, Teknologi, dan Pendidikan Tinggi (Kemenristekdikti).&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Departemen Ilmu Komputer sebagai <em>homebase </em>dari PSIK, serta Fakultas MIPA telah mendapatkan sertifikasi ISO 9001:2008 sejak tahun 2015, sehingga semua POB yang telah disebutkan telah dilaksanakan secara konsisten. Sebagai contoh pelaksanaan adalah pada proses pengadaan atau rekrutmen pegawai, maka sesuai dengan POB/SDM-020 dimulai dengan pengajuan usulan oleh unit (departemen) mengenai kebutuhan pegawai yang disampaikan pada rapat pimpinan fakultas. Dalam rapat tersebut, berdasarkan analisis kebutuhan dan pengembangan program studi di Departemen Ilmu Komputer, maka departemen mengusulkan kebutuhan dosen seperti disajikan pada tabel berikut:</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tabel jumlah pegawai yang diusulkan dari tahun 2012 &ndash; 2016 sesuai kebutuhan</span></p>\r\n<table style=\"width: 33.8028%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 60px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis</strong></span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2012</strong></span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2013</strong></span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2014</strong></span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2015</strong></span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2016</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dosen</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tenaga Kependidikan</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Teknisi</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan usulan kebutuhan pegawai yang diusulkan melalui fakultas, maka dilakukan evaluasi, kompilasi, pemetaan, dan formasi kebutuhan oleh Dit. SDM untuk seluruh IPB. Setelah dikompilasi di level IPB, maka selanjutnya ditetapkan oleh rektor untuk dipublikasikan ke masyarakat melalui internet.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Penempatan :</strong></span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Setelah proses rekrutmen dan seleksi dilaksanakan, proses selanjutnya adalah penetapan/penempatan pegawai yang didasarkan pada kompetensi dan latar belakang pengetahuan yang dimilikinya.&nbsp;</span></p>\r\n<p><span style=\"font-size: 10pt;\"><strong style=\"font-family: arial, helvetica, sans-serif; text-align: justify;\">Pengembangan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengembangan pegawai mencakup aspek kuantitas dan kualitas. Pengembangan kuantitas pegawai dimulai dengan menyusun <em>master plan </em>kebutuhan pegawai dari tahun 2012 &ndash; 2030 (Master Plan pengembangan jumlah pegawai (dosen dan tenaga kependidikan) disediakan pada saat visitasi).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Retensi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan retensi pegawai, beberapa upaya yang dilakukan meliputi:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sistem penghonoran</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesejahteraan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesehatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Jenjang kepangkatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peningkatan kompetensi/kualifikasi</span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam sistem penghonoran, IPB telah menetapkan sistem yang berbasis kinerja, dalam hal ini penghonoran dibagi menjadi dua, yaitu honor rutin bulanan sesuai dengan pangkat dan jabatan, serta insentif yang nilainya didasarkan pada kinerja pegawai. Tunjangan kesejahteraan meliputi tunjangan suami/istri dan anak, tunjangan perumahan, tunjangan beras, dan tunjangan uang makan. Tunjangan kesehatan meliputi asuransi kesehatan serta pemeriksaan kesehatan untuk pegawai yang usianya di atas 40 tahun. Peningkatan retensi dan apresiasi terhadap pegawai juga dilakukan dengan adanya aturan dan insentif yang jelas untuk peningkatan jenjang kepangkatan pegawai. Peningkatan kompetensi/kualifikasi dilakukan dengan pendidikan formal (studi lanjut khususnya untuk dosen) maupun nonformal (pelatihan, seminar, dan workshop untuk dosen dan tenaga kependidikan).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan data tahun 2014 &ndash; 2016, tabel berikut menyajikan jumlah dosen dan tenaga kependidikan yang mengikuti kegiatan peningkatan kompetensi.</span></p>\r\n<table style=\"width: 41.3145%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 23.0669%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Kegiatan Peningkatan Kompetensi</strong></span></td>\r\n<td style=\"width: 8.57487%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Dosen</strong></span></td>\r\n<td style=\"width: 9.6418%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Tenaga Kependidikan</strong></span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pelatihan, workshop, seminar</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">133</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">20</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10 (jenjang s3)</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6 (1 S2 + 4 S1 + 1 D3)</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Total</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">143</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">26</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Pemberhentian Dosen dan Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemberhentian dosen dan tenaga kependidikan diproses mengacu pada aturan pemberhentian pegawai PNS seperti tertera pada PP No 19 tahun 2013. Pemberhentian sesuai dengan aturan yang berlaku diantaranya adalah berdasarkan usia pensiun atau pengunduran diri karena alasan tertentu. Usia pensiun untuk dosen ialah 65 tahun bagi yang belum bergelar guru besar dan 70 tahun bagi yang mempunyai jabatan guru besar. Sementara itu, usia pensiun untuk tenaga kependidikan ialah <strong>56 tahun</strong>. Pengusulan masa pensiun dilakukan satu tahun sebelum mencapai usia pensiun dan dapat didahului dengan pelaksanaan Masa Persiapan Pensiun (MPP).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Di Departemen Ilmu Komputer hingga saat ini baru ada tiga pegawai yang pensiun, yaitu satu orang dosen dan dua orang tenaga kependidikan. Bukti bahwa POB tersebut telah dijalankan secara konsisten, yaitu (a) surat usulan ke IPB, (b) surat usulan ke BKN, dan (c) SK pensiun (berkas secara lengkap disediakan saat visitasi).</span></p>');
INSERT INTO `sistem_seleksi_dan_pengembangan` (`id_sistem_seleksi_dan_pengembangan`, `id_departemen`, `keterangan_seleksi_dan_pengembangan`) VALUES
(3, 3, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Seleksi/Perekrutan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai institusi pemerintah, maka terkait dengan tenaga dosen dan tenaga kependidikan, Program Studi Ilmu Komputer (PSIK) mengikuti aturan yang sudah ditetapkan oleh pemerintah dan IPB. Aturan tersebut mulai dari kebijakan hingga pedoman operasional. Dalam hal ini, peran dari program studi atau departemen lebih ke arah hal-hal teknis operasional sesuai dengan kewenangannya, misalnya pengajuan kebutuhan pegawai, penilaian, penugasan, dan pengembangan kompetensi.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kebijakan-kebijakan pemerintah tersebut meliputi:</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 5 Tahun 2014 Tentang Aparatur Sipil Negara (ASN) yang mengatur ketentuan umum, perilaku dan kode etik, hak dan kewajiban, pengelolaan (organisasi dan manajemen).</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 14 tahun 2005 Tentang Guru dan Dosen yang mengatur ketentuan umum, profesionalitas, kualifikasi, kompetensi, sertifikasi, jabatan akademik, hak dan kewajiban, pengangkatan, penempatan, pemindahan, pemberhentian, pembinaan dan pengembangan, penghargaan, serta sanksi.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 66 Tahun 2013 Tentang Statuta Institut Pertanian Bogor yang pada Bagian Kesembilan (Pasal 71 &ndash; 78) mengatur mengenai ketenagaan yang meliputi:</span>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 71: batasan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 72: tenaga kerja asing</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 73: pengelolaan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 74: kewajiban pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 75: hak pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 76: pembinaan dan pengembangan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 77: penilaian kinerja</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 78: kiprah pegawai</span></li>\r\n</ol>\r\n</li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 19 Tahun 2013 Tentang Perubahan Keempat Atas Peraturan Pemerintah Nomor 32 Tahun 1979 Tentang Pemberhentian Pegawai Negeri Sipil.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peraturan Rektor Institut Pertanian Bogor Nomor 17/I3/KP/2011 Tentang Pengelolaan Pegawai Berstatus Bukan Pegawai Negeri Sipil di Lingkungan Institut Pertanian Bogor.</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai pelaksanaan dari kebijakan-kebijakan tersebut, maka disusunlah buku Prosedur Operasional Baku (POB) oleh Direktorat Sumberdaya Manusia (Dit. SDM) IPB yang terdiri atas 20 jenis POB yaitu (dokumen kebijakan dan dokumen POB secara lengkap disediakan pada saat visitasi):</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-001: Usul Kenaikan Pangkat</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-002: Kenaikan Jabatan Tenaga Kependidikan Pustakawan, Pranatahumas, dan Arsiparis</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-003: Kenaikan Jabatan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-004: Penilaian Karya Ilmiah Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-005: Usulan Pengaktifan Kembali</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-006: Pembinaan Aparatur PNS Bermasalah</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-007: Pensiun</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-008: Rotasi dan Mutasi</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-009: Penghargaan Satyalancana Karya Satya</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-010: Persuratan dan Pengarsipan Direktorat SDM IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-011: Penugasan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-012: Pembuatan Asuransi Sosial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-013: Tabungan Pensiun (TASPEN)</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-014: Asuransi Komersial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-015: Pembuatan Kartu Pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-016: Pembayaran Gaji PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-017: Pembayaran Uang Makan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-018: Cuti PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-019: Pengelolaan Cleaning Service IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-020: Pengadaan Pegawai</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengadaan dosen dan tenaga kependidikan didasarkan atas kebutuhan unit kerja untuk mengisi formasi yang secara umum disebabkan oleh adanya dosen dan tenaga kependidikan yang berhenti, pensiun, meninggal dunia atau adanya pengembangan organisasi. Berdasarkan UU No 14 Tahun 2005 Tentang Guru dan Dosen bahwa kualifikasi dosen harus berpendidikan S2. Pengumuman tentang penerimaan calon pegawai (dosen dan tenaga kependidikan) PNS dilakukan melalui website Kementerian Riset, Teknologi, dan Pendidikan Tinggi (Kemenristekdikti).&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Departemen Ilmu Komputer sebagai <em>homebase </em>dari PSIK, serta Fakultas MIPA telah mendapatkan sertifikasi ISO 9001:2008 sejak tahun 2015, sehingga semua POB yang telah disebutkan telah dilaksanakan secara konsisten. Sebagai contoh pelaksanaan adalah pada proses pengadaan atau rekrutmen pegawai, maka sesuai dengan POB/SDM-020 dimulai dengan pengajuan usulan oleh unit (departemen) mengenai kebutuhan pegawai yang disampaikan pada rapat pimpinan fakultas. Dalam rapat tersebut, berdasarkan analisis kebutuhan dan pengembangan program studi di Departemen Ilmu Komputer, maka departemen mengusulkan kebutuhan dosen seperti disajikan pada tabel berikut:</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tabel jumlah pegawai yang diusulkan dari tahun 2012 &ndash; 2016 sesuai kebutuhan</span></p>\r\n<table style=\"width: 33.8028%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 60px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis</strong></span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2012</strong></span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2013</strong></span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2014</strong></span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2015</strong></span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2016</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dosen</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tenaga Kependidikan</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Teknisi</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan usulan kebutuhan pegawai yang diusulkan melalui fakultas, maka dilakukan evaluasi, kompilasi, pemetaan, dan formasi kebutuhan oleh Dit. SDM untuk seluruh IPB. Setelah dikompilasi di level IPB, maka selanjutnya ditetapkan oleh rektor untuk dipublikasikan ke masyarakat melalui internet.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Penempatan :</strong></span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Setelah proses rekrutmen dan seleksi dilaksanakan, proses selanjutnya adalah penetapan/penempatan pegawai yang didasarkan pada kompetensi dan latar belakang pengetahuan yang dimilikinya.&nbsp;</span></p>\r\n<p><span style=\"font-size: 10pt;\"><strong style=\"font-family: arial, helvetica, sans-serif; text-align: justify;\">Pengembangan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengembangan pegawai mencakup aspek kuantitas dan kualitas. Pengembangan kuantitas pegawai dimulai dengan menyusun <em>master plan </em>kebutuhan pegawai dari tahun 2012 &ndash; 2030 (Master Plan pengembangan jumlah pegawai (dosen dan tenaga kependidikan) disediakan pada saat visitasi).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Retensi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan retensi pegawai, beberapa upaya yang dilakukan meliputi:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sistem penghonoran</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesejahteraan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesehatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Jenjang kepangkatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peningkatan kompetensi/kualifikasi</span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam sistem penghonoran, IPB telah menetapkan sistem yang berbasis kinerja, dalam hal ini penghonoran dibagi menjadi dua, yaitu honor rutin bulanan sesuai dengan pangkat dan jabatan, serta insentif yang nilainya didasarkan pada kinerja pegawai. Tunjangan kesejahteraan meliputi tunjangan suami/istri dan anak, tunjangan perumahan, tunjangan beras, dan tunjangan uang makan. Tunjangan kesehatan meliputi asuransi kesehatan serta pemeriksaan kesehatan untuk pegawai yang usianya di atas 40 tahun. Peningkatan retensi dan apresiasi terhadap pegawai juga dilakukan dengan adanya aturan dan insentif yang jelas untuk peningkatan jenjang kepangkatan pegawai. Peningkatan kompetensi/kualifikasi dilakukan dengan pendidikan formal (studi lanjut khususnya untuk dosen) maupun nonformal (pelatihan, seminar, dan workshop untuk dosen dan tenaga kependidikan).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan data tahun 2014 &ndash; 2016, tabel berikut menyajikan jumlah dosen dan tenaga kependidikan yang mengikuti kegiatan peningkatan kompetensi.</span></p>\r\n<table style=\"width: 41.3145%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 23.0669%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Kegiatan Peningkatan Kompetensi</strong></span></td>\r\n<td style=\"width: 8.57487%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Dosen</strong></span></td>\r\n<td style=\"width: 9.6418%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Tenaga Kependidikan</strong></span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pelatihan, workshop, seminar</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">133</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">20</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10 (jenjang s3)</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6 (1 S2 + 4 S1 + 1 D3)</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Total</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">143</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">26</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Pemberhentian Dosen dan Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemberhentian dosen dan tenaga kependidikan diproses mengacu pada aturan pemberhentian pegawai PNS seperti tertera pada PP No 19 tahun 2013. Pemberhentian sesuai dengan aturan yang berlaku diantaranya adalah berdasarkan usia pensiun atau pengunduran diri karena alasan tertentu. Usia pensiun untuk dosen ialah 65 tahun bagi yang belum bergelar guru besar dan 70 tahun bagi yang mempunyai jabatan guru besar. Sementara itu, usia pensiun untuk tenaga kependidikan ialah <strong>56 tahun</strong>. Pengusulan masa pensiun dilakukan satu tahun sebelum mencapai usia pensiun dan dapat didahului dengan pelaksanaan Masa Persiapan Pensiun (MPP).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Di Departemen Ilmu Komputer hingga saat ini baru ada tiga pegawai yang pensiun, yaitu satu orang dosen dan dua orang tenaga kependidikan. Bukti bahwa POB tersebut telah dijalankan secara konsisten, yaitu (a) surat usulan ke IPB, (b) surat usulan ke BKN, dan (c) SK pensiun (berkas secara lengkap disediakan saat visitasi).</span></p>'),
(4, 4, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Seleksi/Perekrutan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai institusi pemerintah, maka terkait dengan tenaga dosen dan tenaga kependidikan, Program Studi Ilmu Komputer (PSIK) mengikuti aturan yang sudah ditetapkan oleh pemerintah dan IPB. Aturan tersebut mulai dari kebijakan hingga pedoman operasional. Dalam hal ini, peran dari program studi atau departemen lebih ke arah hal-hal teknis operasional sesuai dengan kewenangannya, misalnya pengajuan kebutuhan pegawai, penilaian, penugasan, dan pengembangan kompetensi.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kebijakan-kebijakan pemerintah tersebut meliputi:</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 5 Tahun 2014 Tentang Aparatur Sipil Negara (ASN) yang mengatur ketentuan umum, perilaku dan kode etik, hak dan kewajiban, pengelolaan (organisasi dan manajemen).</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 14 tahun 2005 Tentang Guru dan Dosen yang mengatur ketentuan umum, profesionalitas, kualifikasi, kompetensi, sertifikasi, jabatan akademik, hak dan kewajiban, pengangkatan, penempatan, pemindahan, pemberhentian, pembinaan dan pengembangan, penghargaan, serta sanksi.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 66 Tahun 2013 Tentang Statuta Institut Pertanian Bogor yang pada Bagian Kesembilan (Pasal 71 &ndash; 78) mengatur mengenai ketenagaan yang meliputi:</span>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 71: batasan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 72: tenaga kerja asing</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 73: pengelolaan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 74: kewajiban pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 75: hak pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 76: pembinaan dan pengembangan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 77: penilaian kinerja</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 78: kiprah pegawai</span></li>\r\n</ol>\r\n</li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 19 Tahun 2013 Tentang Perubahan Keempat Atas Peraturan Pemerintah Nomor 32 Tahun 1979 Tentang Pemberhentian Pegawai Negeri Sipil.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peraturan Rektor Institut Pertanian Bogor Nomor 17/I3/KP/2011 Tentang Pengelolaan Pegawai Berstatus Bukan Pegawai Negeri Sipil di Lingkungan Institut Pertanian Bogor.</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai pelaksanaan dari kebijakan-kebijakan tersebut, maka disusunlah buku Prosedur Operasional Baku (POB) oleh Direktorat Sumberdaya Manusia (Dit. SDM) IPB yang terdiri atas 20 jenis POB yaitu (dokumen kebijakan dan dokumen POB secara lengkap disediakan pada saat visitasi):</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-001: Usul Kenaikan Pangkat</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-002: Kenaikan Jabatan Tenaga Kependidikan Pustakawan, Pranatahumas, dan Arsiparis</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-003: Kenaikan Jabatan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-004: Penilaian Karya Ilmiah Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-005: Usulan Pengaktifan Kembali</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-006: Pembinaan Aparatur PNS Bermasalah</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-007: Pensiun</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-008: Rotasi dan Mutasi</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-009: Penghargaan Satyalancana Karya Satya</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-010: Persuratan dan Pengarsipan Direktorat SDM IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-011: Penugasan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-012: Pembuatan Asuransi Sosial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-013: Tabungan Pensiun (TASPEN)</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-014: Asuransi Komersial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-015: Pembuatan Kartu Pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-016: Pembayaran Gaji PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-017: Pembayaran Uang Makan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-018: Cuti PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-019: Pengelolaan Cleaning Service IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-020: Pengadaan Pegawai</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengadaan dosen dan tenaga kependidikan didasarkan atas kebutuhan unit kerja untuk mengisi formasi yang secara umum disebabkan oleh adanya dosen dan tenaga kependidikan yang berhenti, pensiun, meninggal dunia atau adanya pengembangan organisasi. Berdasarkan UU No 14 Tahun 2005 Tentang Guru dan Dosen bahwa kualifikasi dosen harus berpendidikan S2. Pengumuman tentang penerimaan calon pegawai (dosen dan tenaga kependidikan) PNS dilakukan melalui website Kementerian Riset, Teknologi, dan Pendidikan Tinggi (Kemenristekdikti).&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Departemen Ilmu Komputer sebagai <em>homebase </em>dari PSIK, serta Fakultas MIPA telah mendapatkan sertifikasi ISO 9001:2008 sejak tahun 2015, sehingga semua POB yang telah disebutkan telah dilaksanakan secara konsisten. Sebagai contoh pelaksanaan adalah pada proses pengadaan atau rekrutmen pegawai, maka sesuai dengan POB/SDM-020 dimulai dengan pengajuan usulan oleh unit (departemen) mengenai kebutuhan pegawai yang disampaikan pada rapat pimpinan fakultas. Dalam rapat tersebut, berdasarkan analisis kebutuhan dan pengembangan program studi di Departemen Ilmu Komputer, maka departemen mengusulkan kebutuhan dosen seperti disajikan pada tabel berikut:</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tabel jumlah pegawai yang diusulkan dari tahun 2012 &ndash; 2016 sesuai kebutuhan</span></p>\r\n<table style=\"width: 33.8028%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 60px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis</strong></span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2012</strong></span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2013</strong></span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2014</strong></span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2015</strong></span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2016</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dosen</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tenaga Kependidikan</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Teknisi</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan usulan kebutuhan pegawai yang diusulkan melalui fakultas, maka dilakukan evaluasi, kompilasi, pemetaan, dan formasi kebutuhan oleh Dit. SDM untuk seluruh IPB. Setelah dikompilasi di level IPB, maka selanjutnya ditetapkan oleh rektor untuk dipublikasikan ke masyarakat melalui internet.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Penempatan :</strong></span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Setelah proses rekrutmen dan seleksi dilaksanakan, proses selanjutnya adalah penetapan/penempatan pegawai yang didasarkan pada kompetensi dan latar belakang pengetahuan yang dimilikinya.&nbsp;</span></p>\r\n<p><span style=\"font-size: 10pt;\"><strong style=\"font-family: arial, helvetica, sans-serif; text-align: justify;\">Pengembangan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengembangan pegawai mencakup aspek kuantitas dan kualitas. Pengembangan kuantitas pegawai dimulai dengan menyusun <em>master plan </em>kebutuhan pegawai dari tahun 2012 &ndash; 2030 (Master Plan pengembangan jumlah pegawai (dosen dan tenaga kependidikan) disediakan pada saat visitasi).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Retensi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan retensi pegawai, beberapa upaya yang dilakukan meliputi:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sistem penghonoran</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesejahteraan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesehatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Jenjang kepangkatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peningkatan kompetensi/kualifikasi</span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam sistem penghonoran, IPB telah menetapkan sistem yang berbasis kinerja, dalam hal ini penghonoran dibagi menjadi dua, yaitu honor rutin bulanan sesuai dengan pangkat dan jabatan, serta insentif yang nilainya didasarkan pada kinerja pegawai. Tunjangan kesejahteraan meliputi tunjangan suami/istri dan anak, tunjangan perumahan, tunjangan beras, dan tunjangan uang makan. Tunjangan kesehatan meliputi asuransi kesehatan serta pemeriksaan kesehatan untuk pegawai yang usianya di atas 40 tahun. Peningkatan retensi dan apresiasi terhadap pegawai juga dilakukan dengan adanya aturan dan insentif yang jelas untuk peningkatan jenjang kepangkatan pegawai. Peningkatan kompetensi/kualifikasi dilakukan dengan pendidikan formal (studi lanjut khususnya untuk dosen) maupun nonformal (pelatihan, seminar, dan workshop untuk dosen dan tenaga kependidikan).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan data tahun 2014 &ndash; 2016, tabel berikut menyajikan jumlah dosen dan tenaga kependidikan yang mengikuti kegiatan peningkatan kompetensi.</span></p>\r\n<table style=\"width: 41.3145%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 23.0669%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Kegiatan Peningkatan Kompetensi</strong></span></td>\r\n<td style=\"width: 8.57487%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Dosen</strong></span></td>\r\n<td style=\"width: 9.6418%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Tenaga Kependidikan</strong></span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pelatihan, workshop, seminar</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">133</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">20</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10 (jenjang s3)</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6 (1 S2 + 4 S1 + 1 D3)</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Total</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">143</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">26</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Pemberhentian Dosen dan Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemberhentian dosen dan tenaga kependidikan diproses mengacu pada aturan pemberhentian pegawai PNS seperti tertera pada PP No 19 tahun 2013. Pemberhentian sesuai dengan aturan yang berlaku diantaranya adalah berdasarkan usia pensiun atau pengunduran diri karena alasan tertentu. Usia pensiun untuk dosen ialah 65 tahun bagi yang belum bergelar guru besar dan 70 tahun bagi yang mempunyai jabatan guru besar. Sementara itu, usia pensiun untuk tenaga kependidikan ialah <strong>56 tahun</strong>. Pengusulan masa pensiun dilakukan satu tahun sebelum mencapai usia pensiun dan dapat didahului dengan pelaksanaan Masa Persiapan Pensiun (MPP).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Di Departemen Ilmu Komputer hingga saat ini baru ada tiga pegawai yang pensiun, yaitu satu orang dosen dan dua orang tenaga kependidikan. Bukti bahwa POB tersebut telah dijalankan secara konsisten, yaitu (a) surat usulan ke IPB, (b) surat usulan ke BKN, dan (c) SK pensiun (berkas secara lengkap disediakan saat visitasi).</span></p>');
INSERT INTO `sistem_seleksi_dan_pengembangan` (`id_sistem_seleksi_dan_pengembangan`, `id_departemen`, `keterangan_seleksi_dan_pengembangan`) VALUES
(5, 5, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Seleksi/Perekrutan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai institusi pemerintah, maka terkait dengan tenaga dosen dan tenaga kependidikan, Program Studi Ilmu Komputer (PSIK) mengikuti aturan yang sudah ditetapkan oleh pemerintah dan IPB. Aturan tersebut mulai dari kebijakan hingga pedoman operasional. Dalam hal ini, peran dari program studi atau departemen lebih ke arah hal-hal teknis operasional sesuai dengan kewenangannya, misalnya pengajuan kebutuhan pegawai, penilaian, penugasan, dan pengembangan kompetensi.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kebijakan-kebijakan pemerintah tersebut meliputi:</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 5 Tahun 2014 Tentang Aparatur Sipil Negara (ASN) yang mengatur ketentuan umum, perilaku dan kode etik, hak dan kewajiban, pengelolaan (organisasi dan manajemen).</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 14 tahun 2005 Tentang Guru dan Dosen yang mengatur ketentuan umum, profesionalitas, kualifikasi, kompetensi, sertifikasi, jabatan akademik, hak dan kewajiban, pengangkatan, penempatan, pemindahan, pemberhentian, pembinaan dan pengembangan, penghargaan, serta sanksi.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 66 Tahun 2013 Tentang Statuta Institut Pertanian Bogor yang pada Bagian Kesembilan (Pasal 71 &ndash; 78) mengatur mengenai ketenagaan yang meliputi:</span>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 71: batasan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 72: tenaga kerja asing</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 73: pengelolaan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 74: kewajiban pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 75: hak pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 76: pembinaan dan pengembangan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 77: penilaian kinerja</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 78: kiprah pegawai</span></li>\r\n</ol>\r\n</li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 19 Tahun 2013 Tentang Perubahan Keempat Atas Peraturan Pemerintah Nomor 32 Tahun 1979 Tentang Pemberhentian Pegawai Negeri Sipil.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peraturan Rektor Institut Pertanian Bogor Nomor 17/I3/KP/2011 Tentang Pengelolaan Pegawai Berstatus Bukan Pegawai Negeri Sipil di Lingkungan Institut Pertanian Bogor.</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai pelaksanaan dari kebijakan-kebijakan tersebut, maka disusunlah buku Prosedur Operasional Baku (POB) oleh Direktorat Sumberdaya Manusia (Dit. SDM) IPB yang terdiri atas 20 jenis POB yaitu (dokumen kebijakan dan dokumen POB secara lengkap disediakan pada saat visitasi):</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-001: Usul Kenaikan Pangkat</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-002: Kenaikan Jabatan Tenaga Kependidikan Pustakawan, Pranatahumas, dan Arsiparis</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-003: Kenaikan Jabatan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-004: Penilaian Karya Ilmiah Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-005: Usulan Pengaktifan Kembali</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-006: Pembinaan Aparatur PNS Bermasalah</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-007: Pensiun</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-008: Rotasi dan Mutasi</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-009: Penghargaan Satyalancana Karya Satya</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-010: Persuratan dan Pengarsipan Direktorat SDM IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-011: Penugasan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-012: Pembuatan Asuransi Sosial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-013: Tabungan Pensiun (TASPEN)</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-014: Asuransi Komersial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-015: Pembuatan Kartu Pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-016: Pembayaran Gaji PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-017: Pembayaran Uang Makan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-018: Cuti PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-019: Pengelolaan Cleaning Service IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-020: Pengadaan Pegawai</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengadaan dosen dan tenaga kependidikan didasarkan atas kebutuhan unit kerja untuk mengisi formasi yang secara umum disebabkan oleh adanya dosen dan tenaga kependidikan yang berhenti, pensiun, meninggal dunia atau adanya pengembangan organisasi. Berdasarkan UU No 14 Tahun 2005 Tentang Guru dan Dosen bahwa kualifikasi dosen harus berpendidikan S2. Pengumuman tentang penerimaan calon pegawai (dosen dan tenaga kependidikan) PNS dilakukan melalui website Kementerian Riset, Teknologi, dan Pendidikan Tinggi (Kemenristekdikti).&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Departemen Ilmu Komputer sebagai <em>homebase </em>dari PSIK, serta Fakultas MIPA telah mendapatkan sertifikasi ISO 9001:2008 sejak tahun 2015, sehingga semua POB yang telah disebutkan telah dilaksanakan secara konsisten. Sebagai contoh pelaksanaan adalah pada proses pengadaan atau rekrutmen pegawai, maka sesuai dengan POB/SDM-020 dimulai dengan pengajuan usulan oleh unit (departemen) mengenai kebutuhan pegawai yang disampaikan pada rapat pimpinan fakultas. Dalam rapat tersebut, berdasarkan analisis kebutuhan dan pengembangan program studi di Departemen Ilmu Komputer, maka departemen mengusulkan kebutuhan dosen seperti disajikan pada tabel berikut:</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tabel jumlah pegawai yang diusulkan dari tahun 2012 &ndash; 2016 sesuai kebutuhan</span></p>\r\n<table style=\"width: 33.8028%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 60px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis</strong></span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2012</strong></span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2013</strong></span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2014</strong></span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2015</strong></span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2016</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dosen</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tenaga Kependidikan</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Teknisi</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan usulan kebutuhan pegawai yang diusulkan melalui fakultas, maka dilakukan evaluasi, kompilasi, pemetaan, dan formasi kebutuhan oleh Dit. SDM untuk seluruh IPB. Setelah dikompilasi di level IPB, maka selanjutnya ditetapkan oleh rektor untuk dipublikasikan ke masyarakat melalui internet.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Penempatan :</strong></span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Setelah proses rekrutmen dan seleksi dilaksanakan, proses selanjutnya adalah penetapan/penempatan pegawai yang didasarkan pada kompetensi dan latar belakang pengetahuan yang dimilikinya.&nbsp;</span></p>\r\n<p><span style=\"font-size: 10pt;\"><strong style=\"font-family: arial, helvetica, sans-serif; text-align: justify;\">Pengembangan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengembangan pegawai mencakup aspek kuantitas dan kualitas. Pengembangan kuantitas pegawai dimulai dengan menyusun <em>master plan </em>kebutuhan pegawai dari tahun 2012 &ndash; 2030 (Master Plan pengembangan jumlah pegawai (dosen dan tenaga kependidikan) disediakan pada saat visitasi).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Retensi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan retensi pegawai, beberapa upaya yang dilakukan meliputi:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sistem penghonoran</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesejahteraan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesehatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Jenjang kepangkatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peningkatan kompetensi/kualifikasi</span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam sistem penghonoran, IPB telah menetapkan sistem yang berbasis kinerja, dalam hal ini penghonoran dibagi menjadi dua, yaitu honor rutin bulanan sesuai dengan pangkat dan jabatan, serta insentif yang nilainya didasarkan pada kinerja pegawai. Tunjangan kesejahteraan meliputi tunjangan suami/istri dan anak, tunjangan perumahan, tunjangan beras, dan tunjangan uang makan. Tunjangan kesehatan meliputi asuransi kesehatan serta pemeriksaan kesehatan untuk pegawai yang usianya di atas 40 tahun. Peningkatan retensi dan apresiasi terhadap pegawai juga dilakukan dengan adanya aturan dan insentif yang jelas untuk peningkatan jenjang kepangkatan pegawai. Peningkatan kompetensi/kualifikasi dilakukan dengan pendidikan formal (studi lanjut khususnya untuk dosen) maupun nonformal (pelatihan, seminar, dan workshop untuk dosen dan tenaga kependidikan).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan data tahun 2014 &ndash; 2016, tabel berikut menyajikan jumlah dosen dan tenaga kependidikan yang mengikuti kegiatan peningkatan kompetensi.</span></p>\r\n<table style=\"width: 41.3145%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 23.0669%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Kegiatan Peningkatan Kompetensi</strong></span></td>\r\n<td style=\"width: 8.57487%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Dosen</strong></span></td>\r\n<td style=\"width: 9.6418%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Tenaga Kependidikan</strong></span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pelatihan, workshop, seminar</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">133</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">20</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10 (jenjang s3)</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6 (1 S2 + 4 S1 + 1 D3)</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Total</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">143</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">26</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Pemberhentian Dosen dan Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemberhentian dosen dan tenaga kependidikan diproses mengacu pada aturan pemberhentian pegawai PNS seperti tertera pada PP No 19 tahun 2013. Pemberhentian sesuai dengan aturan yang berlaku diantaranya adalah berdasarkan usia pensiun atau pengunduran diri karena alasan tertentu. Usia pensiun untuk dosen ialah 65 tahun bagi yang belum bergelar guru besar dan 70 tahun bagi yang mempunyai jabatan guru besar. Sementara itu, usia pensiun untuk tenaga kependidikan ialah <strong>56 tahun</strong>. Pengusulan masa pensiun dilakukan satu tahun sebelum mencapai usia pensiun dan dapat didahului dengan pelaksanaan Masa Persiapan Pensiun (MPP).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Di Departemen Ilmu Komputer hingga saat ini baru ada tiga pegawai yang pensiun, yaitu satu orang dosen dan dua orang tenaga kependidikan. Bukti bahwa POB tersebut telah dijalankan secara konsisten, yaitu (a) surat usulan ke IPB, (b) surat usulan ke BKN, dan (c) SK pensiun (berkas secara lengkap disediakan saat visitasi).</span></p>'),
(6, 6, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Seleksi/Perekrutan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai institusi pemerintah, maka terkait dengan tenaga dosen dan tenaga kependidikan, Program Studi Ilmu Komputer (PSIK) mengikuti aturan yang sudah ditetapkan oleh pemerintah dan IPB. Aturan tersebut mulai dari kebijakan hingga pedoman operasional. Dalam hal ini, peran dari program studi atau departemen lebih ke arah hal-hal teknis operasional sesuai dengan kewenangannya, misalnya pengajuan kebutuhan pegawai, penilaian, penugasan, dan pengembangan kompetensi.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kebijakan-kebijakan pemerintah tersebut meliputi:</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 5 Tahun 2014 Tentang Aparatur Sipil Negara (ASN) yang mengatur ketentuan umum, perilaku dan kode etik, hak dan kewajiban, pengelolaan (organisasi dan manajemen).</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 14 tahun 2005 Tentang Guru dan Dosen yang mengatur ketentuan umum, profesionalitas, kualifikasi, kompetensi, sertifikasi, jabatan akademik, hak dan kewajiban, pengangkatan, penempatan, pemindahan, pemberhentian, pembinaan dan pengembangan, penghargaan, serta sanksi.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 66 Tahun 2013 Tentang Statuta Institut Pertanian Bogor yang pada Bagian Kesembilan (Pasal 71 &ndash; 78) mengatur mengenai ketenagaan yang meliputi:</span>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 71: batasan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 72: tenaga kerja asing</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 73: pengelolaan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 74: kewajiban pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 75: hak pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 76: pembinaan dan pengembangan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 77: penilaian kinerja</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 78: kiprah pegawai</span></li>\r\n</ol>\r\n</li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 19 Tahun 2013 Tentang Perubahan Keempat Atas Peraturan Pemerintah Nomor 32 Tahun 1979 Tentang Pemberhentian Pegawai Negeri Sipil.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peraturan Rektor Institut Pertanian Bogor Nomor 17/I3/KP/2011 Tentang Pengelolaan Pegawai Berstatus Bukan Pegawai Negeri Sipil di Lingkungan Institut Pertanian Bogor.</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai pelaksanaan dari kebijakan-kebijakan tersebut, maka disusunlah buku Prosedur Operasional Baku (POB) oleh Direktorat Sumberdaya Manusia (Dit. SDM) IPB yang terdiri atas 20 jenis POB yaitu (dokumen kebijakan dan dokumen POB secara lengkap disediakan pada saat visitasi):</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-001: Usul Kenaikan Pangkat</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-002: Kenaikan Jabatan Tenaga Kependidikan Pustakawan, Pranatahumas, dan Arsiparis</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-003: Kenaikan Jabatan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-004: Penilaian Karya Ilmiah Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-005: Usulan Pengaktifan Kembali</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-006: Pembinaan Aparatur PNS Bermasalah</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-007: Pensiun</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-008: Rotasi dan Mutasi</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-009: Penghargaan Satyalancana Karya Satya</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-010: Persuratan dan Pengarsipan Direktorat SDM IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-011: Penugasan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-012: Pembuatan Asuransi Sosial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-013: Tabungan Pensiun (TASPEN)</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-014: Asuransi Komersial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-015: Pembuatan Kartu Pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-016: Pembayaran Gaji PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-017: Pembayaran Uang Makan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-018: Cuti PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-019: Pengelolaan Cleaning Service IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-020: Pengadaan Pegawai</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengadaan dosen dan tenaga kependidikan didasarkan atas kebutuhan unit kerja untuk mengisi formasi yang secara umum disebabkan oleh adanya dosen dan tenaga kependidikan yang berhenti, pensiun, meninggal dunia atau adanya pengembangan organisasi. Berdasarkan UU No 14 Tahun 2005 Tentang Guru dan Dosen bahwa kualifikasi dosen harus berpendidikan S2. Pengumuman tentang penerimaan calon pegawai (dosen dan tenaga kependidikan) PNS dilakukan melalui website Kementerian Riset, Teknologi, dan Pendidikan Tinggi (Kemenristekdikti).&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Departemen Ilmu Komputer sebagai <em>homebase </em>dari PSIK, serta Fakultas MIPA telah mendapatkan sertifikasi ISO 9001:2008 sejak tahun 2015, sehingga semua POB yang telah disebutkan telah dilaksanakan secara konsisten. Sebagai contoh pelaksanaan adalah pada proses pengadaan atau rekrutmen pegawai, maka sesuai dengan POB/SDM-020 dimulai dengan pengajuan usulan oleh unit (departemen) mengenai kebutuhan pegawai yang disampaikan pada rapat pimpinan fakultas. Dalam rapat tersebut, berdasarkan analisis kebutuhan dan pengembangan program studi di Departemen Ilmu Komputer, maka departemen mengusulkan kebutuhan dosen seperti disajikan pada tabel berikut:</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tabel jumlah pegawai yang diusulkan dari tahun 2012 &ndash; 2016 sesuai kebutuhan</span></p>\r\n<table style=\"width: 33.8028%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 60px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis</strong></span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2012</strong></span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2013</strong></span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2014</strong></span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2015</strong></span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2016</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dosen</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tenaga Kependidikan</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Teknisi</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan usulan kebutuhan pegawai yang diusulkan melalui fakultas, maka dilakukan evaluasi, kompilasi, pemetaan, dan formasi kebutuhan oleh Dit. SDM untuk seluruh IPB. Setelah dikompilasi di level IPB, maka selanjutnya ditetapkan oleh rektor untuk dipublikasikan ke masyarakat melalui internet.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Penempatan :</strong></span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Setelah proses rekrutmen dan seleksi dilaksanakan, proses selanjutnya adalah penetapan/penempatan pegawai yang didasarkan pada kompetensi dan latar belakang pengetahuan yang dimilikinya.&nbsp;</span></p>\r\n<p><span style=\"font-size: 10pt;\"><strong style=\"font-family: arial, helvetica, sans-serif; text-align: justify;\">Pengembangan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengembangan pegawai mencakup aspek kuantitas dan kualitas. Pengembangan kuantitas pegawai dimulai dengan menyusun <em>master plan </em>kebutuhan pegawai dari tahun 2012 &ndash; 2030 (Master Plan pengembangan jumlah pegawai (dosen dan tenaga kependidikan) disediakan pada saat visitasi).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Retensi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan retensi pegawai, beberapa upaya yang dilakukan meliputi:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sistem penghonoran</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesejahteraan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesehatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Jenjang kepangkatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peningkatan kompetensi/kualifikasi</span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam sistem penghonoran, IPB telah menetapkan sistem yang berbasis kinerja, dalam hal ini penghonoran dibagi menjadi dua, yaitu honor rutin bulanan sesuai dengan pangkat dan jabatan, serta insentif yang nilainya didasarkan pada kinerja pegawai. Tunjangan kesejahteraan meliputi tunjangan suami/istri dan anak, tunjangan perumahan, tunjangan beras, dan tunjangan uang makan. Tunjangan kesehatan meliputi asuransi kesehatan serta pemeriksaan kesehatan untuk pegawai yang usianya di atas 40 tahun. Peningkatan retensi dan apresiasi terhadap pegawai juga dilakukan dengan adanya aturan dan insentif yang jelas untuk peningkatan jenjang kepangkatan pegawai. Peningkatan kompetensi/kualifikasi dilakukan dengan pendidikan formal (studi lanjut khususnya untuk dosen) maupun nonformal (pelatihan, seminar, dan workshop untuk dosen dan tenaga kependidikan).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan data tahun 2014 &ndash; 2016, tabel berikut menyajikan jumlah dosen dan tenaga kependidikan yang mengikuti kegiatan peningkatan kompetensi.</span></p>\r\n<table style=\"width: 41.3145%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 23.0669%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Kegiatan Peningkatan Kompetensi</strong></span></td>\r\n<td style=\"width: 8.57487%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Dosen</strong></span></td>\r\n<td style=\"width: 9.6418%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Tenaga Kependidikan</strong></span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pelatihan, workshop, seminar</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">133</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">20</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10 (jenjang s3)</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6 (1 S2 + 4 S1 + 1 D3)</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Total</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">143</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">26</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Pemberhentian Dosen dan Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemberhentian dosen dan tenaga kependidikan diproses mengacu pada aturan pemberhentian pegawai PNS seperti tertera pada PP No 19 tahun 2013. Pemberhentian sesuai dengan aturan yang berlaku diantaranya adalah berdasarkan usia pensiun atau pengunduran diri karena alasan tertentu. Usia pensiun untuk dosen ialah 65 tahun bagi yang belum bergelar guru besar dan 70 tahun bagi yang mempunyai jabatan guru besar. Sementara itu, usia pensiun untuk tenaga kependidikan ialah <strong>56 tahun</strong>. Pengusulan masa pensiun dilakukan satu tahun sebelum mencapai usia pensiun dan dapat didahului dengan pelaksanaan Masa Persiapan Pensiun (MPP).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Di Departemen Ilmu Komputer hingga saat ini baru ada tiga pegawai yang pensiun, yaitu satu orang dosen dan dua orang tenaga kependidikan. Bukti bahwa POB tersebut telah dijalankan secara konsisten, yaitu (a) surat usulan ke IPB, (b) surat usulan ke BKN, dan (c) SK pensiun (berkas secara lengkap disediakan saat visitasi).</span></p>');
INSERT INTO `sistem_seleksi_dan_pengembangan` (`id_sistem_seleksi_dan_pengembangan`, `id_departemen`, `keterangan_seleksi_dan_pengembangan`) VALUES
(7, 7, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Seleksi/Perekrutan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai institusi pemerintah, maka terkait dengan tenaga dosen dan tenaga kependidikan, Program Studi Ilmu Komputer (PSIK) mengikuti aturan yang sudah ditetapkan oleh pemerintah dan IPB. Aturan tersebut mulai dari kebijakan hingga pedoman operasional. Dalam hal ini, peran dari program studi atau departemen lebih ke arah hal-hal teknis operasional sesuai dengan kewenangannya, misalnya pengajuan kebutuhan pegawai, penilaian, penugasan, dan pengembangan kompetensi.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kebijakan-kebijakan pemerintah tersebut meliputi:</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 5 Tahun 2014 Tentang Aparatur Sipil Negara (ASN) yang mengatur ketentuan umum, perilaku dan kode etik, hak dan kewajiban, pengelolaan (organisasi dan manajemen).</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 14 tahun 2005 Tentang Guru dan Dosen yang mengatur ketentuan umum, profesionalitas, kualifikasi, kompetensi, sertifikasi, jabatan akademik, hak dan kewajiban, pengangkatan, penempatan, pemindahan, pemberhentian, pembinaan dan pengembangan, penghargaan, serta sanksi.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 66 Tahun 2013 Tentang Statuta Institut Pertanian Bogor yang pada Bagian Kesembilan (Pasal 71 &ndash; 78) mengatur mengenai ketenagaan yang meliputi:</span>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 71: batasan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 72: tenaga kerja asing</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 73: pengelolaan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 74: kewajiban pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 75: hak pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 76: pembinaan dan pengembangan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 77: penilaian kinerja</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 78: kiprah pegawai</span></li>\r\n</ol>\r\n</li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 19 Tahun 2013 Tentang Perubahan Keempat Atas Peraturan Pemerintah Nomor 32 Tahun 1979 Tentang Pemberhentian Pegawai Negeri Sipil.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peraturan Rektor Institut Pertanian Bogor Nomor 17/I3/KP/2011 Tentang Pengelolaan Pegawai Berstatus Bukan Pegawai Negeri Sipil di Lingkungan Institut Pertanian Bogor.</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai pelaksanaan dari kebijakan-kebijakan tersebut, maka disusunlah buku Prosedur Operasional Baku (POB) oleh Direktorat Sumberdaya Manusia (Dit. SDM) IPB yang terdiri atas 20 jenis POB yaitu (dokumen kebijakan dan dokumen POB secara lengkap disediakan pada saat visitasi):</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-001: Usul Kenaikan Pangkat</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-002: Kenaikan Jabatan Tenaga Kependidikan Pustakawan, Pranatahumas, dan Arsiparis</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-003: Kenaikan Jabatan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-004: Penilaian Karya Ilmiah Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-005: Usulan Pengaktifan Kembali</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-006: Pembinaan Aparatur PNS Bermasalah</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-007: Pensiun</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-008: Rotasi dan Mutasi</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-009: Penghargaan Satyalancana Karya Satya</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-010: Persuratan dan Pengarsipan Direktorat SDM IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-011: Penugasan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-012: Pembuatan Asuransi Sosial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-013: Tabungan Pensiun (TASPEN)</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-014: Asuransi Komersial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-015: Pembuatan Kartu Pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-016: Pembayaran Gaji PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-017: Pembayaran Uang Makan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-018: Cuti PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-019: Pengelolaan Cleaning Service IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-020: Pengadaan Pegawai</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengadaan dosen dan tenaga kependidikan didasarkan atas kebutuhan unit kerja untuk mengisi formasi yang secara umum disebabkan oleh adanya dosen dan tenaga kependidikan yang berhenti, pensiun, meninggal dunia atau adanya pengembangan organisasi. Berdasarkan UU No 14 Tahun 2005 Tentang Guru dan Dosen bahwa kualifikasi dosen harus berpendidikan S2. Pengumuman tentang penerimaan calon pegawai (dosen dan tenaga kependidikan) PNS dilakukan melalui website Kementerian Riset, Teknologi, dan Pendidikan Tinggi (Kemenristekdikti).&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Departemen Ilmu Komputer sebagai <em>homebase </em>dari PSIK, serta Fakultas MIPA telah mendapatkan sertifikasi ISO 9001:2008 sejak tahun 2015, sehingga semua POB yang telah disebutkan telah dilaksanakan secara konsisten. Sebagai contoh pelaksanaan adalah pada proses pengadaan atau rekrutmen pegawai, maka sesuai dengan POB/SDM-020 dimulai dengan pengajuan usulan oleh unit (departemen) mengenai kebutuhan pegawai yang disampaikan pada rapat pimpinan fakultas. Dalam rapat tersebut, berdasarkan analisis kebutuhan dan pengembangan program studi di Departemen Ilmu Komputer, maka departemen mengusulkan kebutuhan dosen seperti disajikan pada tabel berikut:</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tabel jumlah pegawai yang diusulkan dari tahun 2012 &ndash; 2016 sesuai kebutuhan</span></p>\r\n<table style=\"width: 33.8028%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 60px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis</strong></span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2012</strong></span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2013</strong></span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2014</strong></span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2015</strong></span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2016</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dosen</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tenaga Kependidikan</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Teknisi</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan usulan kebutuhan pegawai yang diusulkan melalui fakultas, maka dilakukan evaluasi, kompilasi, pemetaan, dan formasi kebutuhan oleh Dit. SDM untuk seluruh IPB. Setelah dikompilasi di level IPB, maka selanjutnya ditetapkan oleh rektor untuk dipublikasikan ke masyarakat melalui internet.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Penempatan :</strong></span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Setelah proses rekrutmen dan seleksi dilaksanakan, proses selanjutnya adalah penetapan/penempatan pegawai yang didasarkan pada kompetensi dan latar belakang pengetahuan yang dimilikinya.&nbsp;</span></p>\r\n<p><span style=\"font-size: 10pt;\"><strong style=\"font-family: arial, helvetica, sans-serif; text-align: justify;\">Pengembangan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengembangan pegawai mencakup aspek kuantitas dan kualitas. Pengembangan kuantitas pegawai dimulai dengan menyusun <em>master plan </em>kebutuhan pegawai dari tahun 2012 &ndash; 2030 (Master Plan pengembangan jumlah pegawai (dosen dan tenaga kependidikan) disediakan pada saat visitasi).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Retensi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan retensi pegawai, beberapa upaya yang dilakukan meliputi:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sistem penghonoran</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesejahteraan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesehatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Jenjang kepangkatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peningkatan kompetensi/kualifikasi</span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam sistem penghonoran, IPB telah menetapkan sistem yang berbasis kinerja, dalam hal ini penghonoran dibagi menjadi dua, yaitu honor rutin bulanan sesuai dengan pangkat dan jabatan, serta insentif yang nilainya didasarkan pada kinerja pegawai. Tunjangan kesejahteraan meliputi tunjangan suami/istri dan anak, tunjangan perumahan, tunjangan beras, dan tunjangan uang makan. Tunjangan kesehatan meliputi asuransi kesehatan serta pemeriksaan kesehatan untuk pegawai yang usianya di atas 40 tahun. Peningkatan retensi dan apresiasi terhadap pegawai juga dilakukan dengan adanya aturan dan insentif yang jelas untuk peningkatan jenjang kepangkatan pegawai. Peningkatan kompetensi/kualifikasi dilakukan dengan pendidikan formal (studi lanjut khususnya untuk dosen) maupun nonformal (pelatihan, seminar, dan workshop untuk dosen dan tenaga kependidikan).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan data tahun 2014 &ndash; 2016, tabel berikut menyajikan jumlah dosen dan tenaga kependidikan yang mengikuti kegiatan peningkatan kompetensi.</span></p>\r\n<table style=\"width: 41.3145%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 23.0669%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Kegiatan Peningkatan Kompetensi</strong></span></td>\r\n<td style=\"width: 8.57487%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Dosen</strong></span></td>\r\n<td style=\"width: 9.6418%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Tenaga Kependidikan</strong></span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pelatihan, workshop, seminar</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">133</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">20</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10 (jenjang s3)</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6 (1 S2 + 4 S1 + 1 D3)</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Total</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">143</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">26</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Pemberhentian Dosen dan Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemberhentian dosen dan tenaga kependidikan diproses mengacu pada aturan pemberhentian pegawai PNS seperti tertera pada PP No 19 tahun 2013. Pemberhentian sesuai dengan aturan yang berlaku diantaranya adalah berdasarkan usia pensiun atau pengunduran diri karena alasan tertentu. Usia pensiun untuk dosen ialah 65 tahun bagi yang belum bergelar guru besar dan 70 tahun bagi yang mempunyai jabatan guru besar. Sementara itu, usia pensiun untuk tenaga kependidikan ialah <strong>56 tahun</strong>. Pengusulan masa pensiun dilakukan satu tahun sebelum mencapai usia pensiun dan dapat didahului dengan pelaksanaan Masa Persiapan Pensiun (MPP).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Di Departemen Ilmu Komputer hingga saat ini baru ada tiga pegawai yang pensiun, yaitu satu orang dosen dan dua orang tenaga kependidikan. Bukti bahwa POB tersebut telah dijalankan secara konsisten, yaitu (a) surat usulan ke IPB, (b) surat usulan ke BKN, dan (c) SK pensiun (berkas secara lengkap disediakan saat visitasi).</span></p>'),
(8, 8, '<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Sistem Seleksi/Perekrutan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai institusi pemerintah, maka terkait dengan tenaga dosen dan tenaga kependidikan, Program Studi Ilmu Komputer (PSIK) mengikuti aturan yang sudah ditetapkan oleh pemerintah dan IPB. Aturan tersebut mulai dari kebijakan hingga pedoman operasional. Dalam hal ini, peran dari program studi atau departemen lebih ke arah hal-hal teknis operasional sesuai dengan kewenangannya, misalnya pengajuan kebutuhan pegawai, penilaian, penugasan, dan pengembangan kompetensi.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kebijakan-kebijakan pemerintah tersebut meliputi:</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 5 Tahun 2014 Tentang Aparatur Sipil Negara (ASN) yang mengatur ketentuan umum, perilaku dan kode etik, hak dan kewajiban, pengelolaan (organisasi dan manajemen).</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">UU No 14 tahun 2005 Tentang Guru dan Dosen yang mengatur ketentuan umum, profesionalitas, kualifikasi, kompetensi, sertifikasi, jabatan akademik, hak dan kewajiban, pengangkatan, penempatan, pemindahan, pemberhentian, pembinaan dan pengembangan, penghargaan, serta sanksi.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 66 Tahun 2013 Tentang Statuta Institut Pertanian Bogor yang pada Bagian Kesembilan (Pasal 71 &ndash; 78) mengatur mengenai ketenagaan yang meliputi:</span>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 71: batasan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 72: tenaga kerja asing</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 73: pengelolaan pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 74: kewajiban pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 75: hak pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 76: pembinaan dan pengembangan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 77: penilaian kinerja</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pasal 78: kiprah pegawai</span></li>\r\n</ol>\r\n</li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">PP No 19 Tahun 2013 Tentang Perubahan Keempat Atas Peraturan Pemerintah Nomor 32 Tahun 1979 Tentang Pemberhentian Pegawai Negeri Sipil.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peraturan Rektor Institut Pertanian Bogor Nomor 17/I3/KP/2011 Tentang Pengelolaan Pegawai Berstatus Bukan Pegawai Negeri Sipil di Lingkungan Institut Pertanian Bogor.</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sebagai pelaksanaan dari kebijakan-kebijakan tersebut, maka disusunlah buku Prosedur Operasional Baku (POB) oleh Direktorat Sumberdaya Manusia (Dit. SDM) IPB yang terdiri atas 20 jenis POB yaitu (dokumen kebijakan dan dokumen POB secara lengkap disediakan pada saat visitasi):</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-001: Usul Kenaikan Pangkat</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-002: Kenaikan Jabatan Tenaga Kependidikan Pustakawan, Pranatahumas, dan Arsiparis</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-003: Kenaikan Jabatan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-004: Penilaian Karya Ilmiah Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-005: Usulan Pengaktifan Kembali</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-006: Pembinaan Aparatur PNS Bermasalah</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-007: Pensiun</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-008: Rotasi dan Mutasi</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-009: Penghargaan Satyalancana Karya Satya</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-010: Persuratan dan Pengarsipan Direktorat SDM IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-011: Penugasan Dosen</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-012: Pembuatan Asuransi Sosial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-013: Tabungan Pensiun (TASPEN)</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-014: Asuransi Komersial</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-015: Pembuatan Kartu Pegawai</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-016: Pembayaran Gaji PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-017: Pembayaran Uang Makan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-018: Cuti PNS</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-019: Pengelolaan Cleaning Service IPB</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">POB/SDM-020: Pengadaan Pegawai</span></li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengadaan dosen dan tenaga kependidikan didasarkan atas kebutuhan unit kerja untuk mengisi formasi yang secara umum disebabkan oleh adanya dosen dan tenaga kependidikan yang berhenti, pensiun, meninggal dunia atau adanya pengembangan organisasi. Berdasarkan UU No 14 Tahun 2005 Tentang Guru dan Dosen bahwa kualifikasi dosen harus berpendidikan S2. Pengumuman tentang penerimaan calon pegawai (dosen dan tenaga kependidikan) PNS dilakukan melalui website Kementerian Riset, Teknologi, dan Pendidikan Tinggi (Kemenristekdikti).&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Departemen Ilmu Komputer sebagai <em>homebase </em>dari PSIK, serta Fakultas MIPA telah mendapatkan sertifikasi ISO 9001:2008 sejak tahun 2015, sehingga semua POB yang telah disebutkan telah dilaksanakan secara konsisten. Sebagai contoh pelaksanaan adalah pada proses pengadaan atau rekrutmen pegawai, maka sesuai dengan POB/SDM-020 dimulai dengan pengajuan usulan oleh unit (departemen) mengenai kebutuhan pegawai yang disampaikan pada rapat pimpinan fakultas. Dalam rapat tersebut, berdasarkan analisis kebutuhan dan pengembangan program studi di Departemen Ilmu Komputer, maka departemen mengusulkan kebutuhan dosen seperti disajikan pada tabel berikut:</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tabel jumlah pegawai yang diusulkan dari tahun 2012 &ndash; 2016 sesuai kebutuhan</span></p>\r\n<table style=\"width: 33.8028%; border-collapse: collapse; margin-left: auto; margin-right: auto; height: 60px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis</strong></span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2012</strong></span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2013</strong></span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2014</strong></span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2015</strong></span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2016</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dosen</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tenaga Kependidikan</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 32.2819%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Teknisi</span></td>\r\n<td style=\"width: 2.5%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.15615%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.15618%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n<td style=\"width: 4.32518%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 4.24064%; text-align: center; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">0</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan usulan kebutuhan pegawai yang diusulkan melalui fakultas, maka dilakukan evaluasi, kompilasi, pemetaan, dan formasi kebutuhan oleh Dit. SDM untuk seluruh IPB. Setelah dikompilasi di level IPB, maka selanjutnya ditetapkan oleh rektor untuk dipublikasikan ke masyarakat melalui internet.&nbsp;</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Penempatan :</strong></span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Setelah proses rekrutmen dan seleksi dilaksanakan, proses selanjutnya adalah penetapan/penempatan pegawai yang didasarkan pada kompetensi dan latar belakang pengetahuan yang dimilikinya.&nbsp;</span></p>\r\n<p><span style=\"font-size: 10pt;\"><strong style=\"font-family: arial, helvetica, sans-serif; text-align: justify;\">Pengembangan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengembangan pegawai mencakup aspek kuantitas dan kualitas. Pengembangan kuantitas pegawai dimulai dengan menyusun <em>master plan </em>kebutuhan pegawai dari tahun 2012 &ndash; 2030 (Master Plan pengembangan jumlah pegawai (dosen dan tenaga kependidikan) disediakan pada saat visitasi).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Retensi :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan retensi pegawai, beberapa upaya yang dilakukan meliputi:</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sistem penghonoran</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesejahteraan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tunjangan kesehatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Jenjang kepangkatan</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Peningkatan kompetensi/kualifikasi</span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dalam sistem penghonoran, IPB telah menetapkan sistem yang berbasis kinerja, dalam hal ini penghonoran dibagi menjadi dua, yaitu honor rutin bulanan sesuai dengan pangkat dan jabatan, serta insentif yang nilainya didasarkan pada kinerja pegawai. Tunjangan kesejahteraan meliputi tunjangan suami/istri dan anak, tunjangan perumahan, tunjangan beras, dan tunjangan uang makan. Tunjangan kesehatan meliputi asuransi kesehatan serta pemeriksaan kesehatan untuk pegawai yang usianya di atas 40 tahun. Peningkatan retensi dan apresiasi terhadap pegawai juga dilakukan dengan adanya aturan dan insentif yang jelas untuk peningkatan jenjang kepangkatan pegawai. Peningkatan kompetensi/kualifikasi dilakukan dengan pendidikan formal (studi lanjut khususnya untuk dosen) maupun nonformal (pelatihan, seminar, dan workshop untuk dosen dan tenaga kependidikan).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berdasarkan data tahun 2014 &ndash; 2016, tabel berikut menyajikan jumlah dosen dan tenaga kependidikan yang mengikuti kegiatan peningkatan kompetensi.</span></p>\r\n<table style=\"width: 41.3145%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 23.0669%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Kegiatan Peningkatan Kompetensi</strong></span></td>\r\n<td style=\"width: 8.57487%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Dosen</strong></span></td>\r\n<td style=\"width: 9.6418%; text-align: center;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Tenaga Kependidikan</strong></span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pelatihan, workshop, seminar</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">133</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">20</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">10 (jenjang s3)</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">6 (1 S2 + 4 S1 + 1 D3)</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 23.0669%;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Total</span></td>\r\n<td style=\"width: 8.57487%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">143</span></td>\r\n<td style=\"width: 9.6418%; text-align: right;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">26</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 10pt; font-family: arial, helvetica, sans-serif;\"><strong>Pemberhentian Dosen dan Tenaga Kependidikan :</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pemberhentian dosen dan tenaga kependidikan diproses mengacu pada aturan pemberhentian pegawai PNS seperti tertera pada PP No 19 tahun 2013. Pemberhentian sesuai dengan aturan yang berlaku diantaranya adalah berdasarkan usia pensiun atau pengunduran diri karena alasan tertentu. Usia pensiun untuk dosen ialah 65 tahun bagi yang belum bergelar guru besar dan 70 tahun bagi yang mempunyai jabatan guru besar. Sementara itu, usia pensiun untuk tenaga kependidikan ialah <strong>56 tahun</strong>. Pengusulan masa pensiun dilakukan satu tahun sebelum mencapai usia pensiun dan dapat didahului dengan pelaksanaan Masa Persiapan Pensiun (MPP).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Di Departemen Ilmu Komputer hingga saat ini baru ada tiga pegawai yang pensiun, yaitu satu orang dosen dan dua orang tenaga kependidikan. Bukti bahwa POB tersebut telah dijalankan secara konsisten, yaitu (a) surat usulan ke IPB, (b) surat usulan ke BKN, dan (c) SK pensiun (berkas secara lengkap disediakan saat visitasi).</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id_si` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `role_kategori` int(10) NOT NULL,
  `nama_sistem` varchar(255) NOT NULL,
  `bentuk_si` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `pengembang` varchar(250) NOT NULL,
  `fitur_si` text NOT NULL,
  `tampilan_muka` longblob,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id_si`, `id_departemen`, `role_kategori`, `nama_sistem`, `bentuk_si`, `url`, `pengembang`, `fitur_si`, `tampilan_muka`, `created_at`, `updated_at`) VALUES
(23, 1, 1, 'Situs Web Institut Pertanian Bogor', 'Aplikasi berbasis web.\r\nURL: http://ipb.ac.id', '', 'DKSI', '1. Informasi seputar IPB\r\n2. Berita-berita seputar IPB\r\n3. Pengumuman kegiatan-kegiatan di IPB\r\n4. Tautan ke sistem-sistem informasi yang ada di IPB', 0x6c6f676f2d697062202d20436f70792e6a7067, '2018-07-28 23:37:35', '2018-07-29 08:24:57'),
(25, 10, 1, 'Situs Web Institut Pertanian Bogor', 'Aplikasi berbasis web.', 'http//ipb.ac.id', 'DKSI', '1. Informasi seputar IPB\r\n2. Berita-berita seputar IPB\r\n3. Pengumuman kegiatan-kegiatan di IPB\r\n4. Tautan ke sistem-sistem informasi yang ada di IPB', 0x6c6f676f2d697062202d20436f70792e6a7067, '2018-07-28 23:41:09', '2018-10-16 08:56:49'),
(26, 10, 2, 'Sistem Informasi Akademik IPB', 'Aplikasi berbasis web.', 'http//simak.ipb.ac.id', 'xxxxx', '1. Informasi dan laporan status akademik mahasiswa', 0x70656e67756e6a756e672e6a7067, '2018-07-31 09:42:05', '2018-10-16 08:59:05'),
(28, 10, 4, 'Situs Web Kantor Manajemen Mutu', 'Aplikasi berbasis web.', 'http//kmm.ipb.ac.id', 'xxx', '1. Informasi seputar manajemen mutu di IPB', 0x637373322e706e67, '2018-07-31 11:19:54', '2018-10-16 09:01:52'),
(32, 6, 1, 'Situs Web Institut Pertanian Bogor', 'web', 'http://ipb.ac.id', 'A', 'info IPB', 0x6c6f676f2d697062202d20436f70792e6a7067, '2018-09-19 21:12:03', '2018-10-16 08:25:57'),
(33, 1, 2, 'Situs Web Institut Pertanian Bogor', 'URL: Http//....', '', 'dept.', '1. Info STK\r\n2. Info mahasiswa', 0x70617369656e2e706e67, '2018-09-26 00:11:40', '2018-09-26 00:11:40'),
(34, 6, 2, 'Situs Web Ilkom', 'web', 'http://ilkom.ipb.ac.id', 'ILKOM', '1. info ipb\r\n2. berita ilkom', 0x70656e67756e6a756e672e6a7067, '2018-10-02 00:16:33', '2018-10-16 08:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_kurikulum`
--

CREATE TABLE `struktur_kurikulum` (
  `id_struktur_kurikulum` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_semesterr` int(11) NOT NULL,
  `kode_mk_kurikulum5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mk_kurikulum5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jumlah_sks` int(11) NOT NULL,
  `sks_inti` int(11) NOT NULL,
  `sks_institusional` int(11) NOT NULL,
  `id_bobottugas` int(11) NOT NULL,
  `id_kelengkapandeskripsi` int(11) NOT NULL,
  `id_kelengkapansilabus` int(11) NOT NULL,
  `id_kelengkapansap` int(11) NOT NULL,
  `penyelenggara` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `struktur_kurikulum`
--

INSERT INTO `struktur_kurikulum` (`id_struktur_kurikulum`, `id_departemen`, `id_semesterr`, `kode_mk_kurikulum5`, `nama_mk_kurikulum5`, `id_jumlah_sks`, `sks_inti`, `sks_institusional`, `id_bobottugas`, `id_kelengkapandeskripsi`, `id_kelengkapansilabus`, `id_kelengkapansap`, `penyelenggara`, `created_at`, `updated_at`) VALUES
(11, 1, 1, 'IPB111', 'Pendidikan Pancasila', 1, 1, 1, 1, 1, 1, 1, 'PPKU', NULL, '2018-10-03 16:51:32'),
(12, 1, 2, 'IPB101-104 atau IPB110', 'Agama', 1, 2, 1, 1, 1, 1, 1, 'PPKU', NULL, '2018-10-03 15:34:42'),
(13, 1, 2, 'IPB106', 'Bahasa Indonesia', 1, 1, 1, 1, 1, 1, 1, 'PPKU', '2018-10-03 15:23:42', '2018-10-03 15:34:46'),
(14, 1, 3, 'MAT219', 'Aljabar Linear', 1, 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018-10-03 15:22:52', '2018-10-03 16:29:31'),
(15, 1, 4, 'KOM205', 'Basis Data', 1, 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018-10-03 15:36:09', '2018-10-03 15:36:58'),
(21, 2, 1, 'IPB111', 'Pendidikan Pancasila', 1, 1, 1, 1, 1, 1, 1, 'PPKU', NULL, '2018-10-03 16:51:32'),
(22, 2, 2, 'IPB101-104 atau IPB110', 'Agama', 1, 2, 1, 1, 1, 1, 1, 'PPKU', NULL, '2018-10-03 15:34:42'),
(23, 2, 2, 'IPB106', 'Bahasa Indonesia', 1, 1, 1, 1, 1, 1, 1, 'PPKU', '2018-10-03 15:23:42', '2018-10-03 15:34:46'),
(24, 2, 3, 'MAT219', 'Aljabar Linear', 1, 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018-10-03 15:22:52', '2018-10-03 16:29:31'),
(25, 2, 4, 'KOM205', 'Basis Data', 1, 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018-10-03 15:36:09', '2018-10-03 15:36:58'),
(31, 3, 1, 'IPB111', 'Pendidikan Pancasila', 1, 1, 1, 1, 1, 1, 1, 'PPKU', NULL, '2018-10-03 16:51:32'),
(32, 3, 2, 'IPB101-104 atau IPB110', 'Agama', 1, 2, 1, 1, 1, 1, 1, 'PPKU', NULL, '2018-10-03 15:34:42'),
(33, 3, 2, 'IPB106', 'Bahasa Indonesia', 1, 1, 1, 1, 1, 1, 1, 'PPKU', '2018-10-03 15:23:42', '2018-10-03 15:34:46'),
(34, 3, 3, 'MAT219', 'Aljabar Linear', 1, 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018-10-03 15:22:52', '2018-10-03 16:29:31'),
(35, 3, 4, 'KOM205', 'Basis Data', 1, 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018-10-03 15:36:09', '2018-10-03 15:36:58'),
(41, 4, 1, 'IPB111', 'Pendidikan Pancasila', 1, 1, 1, 1, 1, 1, 1, 'PPKU', NULL, '2018-10-03 16:51:32'),
(42, 4, 2, 'IPB101-104 atau IPB110', 'Agama', 1, 2, 1, 1, 1, 1, 1, 'PPKU', NULL, '2018-10-03 15:34:42'),
(43, 4, 2, 'IPB106', 'Bahasa Indonesia', 1, 1, 1, 1, 1, 1, 1, 'PPKU', '2018-10-03 15:23:42', '2018-10-03 15:34:46'),
(44, 4, 3, 'MAT219', 'Aljabar Linear', 1, 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018-10-03 15:22:52', '2018-10-03 16:29:31'),
(45, 4, 4, 'KOM205', 'Basis Data', 1, 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018-10-03 15:36:09', '2018-10-03 15:36:58'),
(51, 5, 1, 'IPB111', 'Pendidikan Pancasila', 1, 1, 1, 1, 1, 1, 1, 'PPKU', NULL, '2018-10-03 16:51:32'),
(52, 5, 2, 'IPB101-104 atau IPB110', 'Agama', 1, 2, 1, 1, 1, 1, 1, 'PPKU', NULL, '2018-10-03 15:34:42'),
(53, 5, 2, 'IPB106', 'Bahasa Indonesia', 1, 1, 1, 1, 1, 1, 1, 'PPKU', '2018-10-03 15:23:42', '2018-10-03 15:34:46'),
(54, 5, 3, 'MAT219', 'Aljabar Linear', 1, 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018-10-03 15:22:52', '2018-10-03 16:29:31'),
(55, 5, 4, 'KOM205', 'Basis Data', 1, 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018-10-03 15:36:09', '2018-10-03 15:36:58'),
(61, 6, 2, 'IPB111', 'Pendidikan Pancasila', 2, 1, 1, 1, 1, 1, 1, 'PPKU', NULL, '2018-12-03 16:58:20'),
(62, 6, 2, 'IPB110', 'Agama', 3, 2, 1, 1, 1, 1, 1, 'PPKU', NULL, '2018-12-02 22:07:25'),
(63, 6, 2, 'IPB106', 'Bahasa Indonesia', 2, 1, 1, 1, 1, 1, 1, 'PPKU', '2018-10-03 15:23:42', '2018-12-02 22:07:53'),
(64, 6, 3, 'MAT219', 'Aljabar Linear', 3, 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018-10-03 15:22:52', '2018-12-02 22:08:00'),
(65, 6, 4, 'KOM205', 'Basis Data', 3, 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018-10-03 15:36:09', '2018-12-02 22:08:08'),
(71, 7, 1, 'IPB111', 'Pendidikan Pancasila', 1, 1, 1, 1, 1, 1, 1, 'PPKU', NULL, '2018-10-03 16:51:32'),
(72, 7, 2, 'IPB101-104 atau IPB110', 'Agama', 1, 2, 1, 1, 1, 1, 1, 'PPKU', NULL, '2018-10-03 15:34:42'),
(73, 7, 2, 'IPB106', 'Bahasa Indonesia', 1, 1, 1, 1, 1, 1, 1, 'PPKU', '2018-10-03 15:23:42', '0000-00-00 00:00:00'),
(74, 7, 3, 'MAT219', 'Aljabar Linear', 1, 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018-10-03 15:22:52', '2018-10-03 16:29:31'),
(75, 7, 4, 'KOM205', 'Basis Data', 1, 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018-10-03 15:36:09', '2018-10-03 15:36:58'),
(81, 8, 1, 'IPB111', 'Pendidikan Pancasila', 1, 1, 1, 1, 1, 1, 1, 'PPKU', NULL, '2018-10-03 16:51:32'),
(82, 8, 2, 'IPB101-104 atau IPB110', 'Agama', 1, 2, 1, 1, 1, 1, 1, 'PPKU', NULL, '2018-10-03 15:34:42'),
(83, 8, 2, 'IPB106', 'Bahasa Indonesia', 1, 1, 1, 1, 1, 1, 1, 'PPKU', '2018-10-03 15:23:42', '0000-00-00 00:00:00'),
(84, 8, 3, 'MAT219', 'Aljabar Linear', 1, 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018-10-03 15:22:52', '2018-10-03 16:29:31'),
(85, 8, 4, 'KOM205', 'Basis Data', 1, 2, 1, 1, 1, 1, 1, 'Dept. Matematika (interdep)', '2018-10-03 15:36:09', '2018-10-03 15:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `substansi_praktikum`
--

CREATE TABLE `substansi_praktikum` (
  `id_substansi_praktikum` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `kode_mk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_praktikum_kurikulum7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jumlah_sks` int(11) NOT NULL,
  `judul_praktikum` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_pelaksanaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_pertemuan_praktikum` int(11) NOT NULL,
  `tempat_praktikum` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `substansi_praktikum`
--

INSERT INTO `substansi_praktikum` (`id_substansi_praktikum`, `id_departemen`, `kode_mk`, `nama_praktikum_kurikulum7`, `id_jumlah_sks`, `judul_praktikum`, `jam_pelaksanaan`, `jumlah_pertemuan_praktikum`, `tempat_praktikum`, `created_at`, `updated_at`) VALUES
(11, 1, 'MAT219', 'Aljabar Linear', 1, 'Kumpulan Soal Aljabar Linear', '28', 14, 'Responsi di kelas', '2018-10-02 11:10:16', '2018-10-02 11:25:04'),
(12, 1, 'STK211', 'Metode Statistika', 1, 'Praktikum Metode Statistika', '28', 14, 'Lab. Komputer PS. Statistika', '2018-10-02 11:26:39', '2018-10-02 11:26:39'),
(21, 2, 'MAT219', 'Aljabar Linear', 1, 'Kumpulan Soal Aljabar Linear', '28', 14, 'Responsi di kelas', '2018-10-02 11:10:16', '2018-10-02 11:25:04'),
(22, 2, 'STK211', 'Metode Statistika', 1, 'Praktikum Metode Statistika', '28', 14, 'Lab. Komputer PS. Statistika', '2018-10-02 11:26:39', '2018-10-02 11:26:39'),
(31, 3, 'MAT219', 'Aljabar Linear', 1, 'Kumpulan Soal Aljabar Linear', '28', 14, 'Responsi di kelas', '2018-10-02 11:10:16', '2018-10-02 11:25:04'),
(32, 3, 'STK211', 'Metode Statistika', 1, 'Praktikum Metode Statistika', '28', 14, 'Lab. Komputer PS. Statistika', '2018-10-02 11:26:39', '2018-10-02 11:26:39'),
(41, 4, 'MAT219', 'Aljabar Linear', 1, 'Kumpulan Soal Aljabar Linear', '28', 14, 'Responsi di kelas', '2018-10-02 11:10:16', '2018-10-02 11:25:04'),
(42, 4, 'STK211', 'Metode Statistika', 1, 'Praktikum Metode Statistika', '28', 14, 'Lab. Komputer PS. Statistika', '2018-10-02 11:26:39', '2018-10-02 11:26:39'),
(51, 5, 'MAT219', 'Aljabar Linear', 1, 'Kumpulan Soal Aljabar Linear', '28', 14, 'Responsi di kelas', '2018-10-02 11:10:16', '2018-10-02 11:25:04'),
(52, 5, 'STK211', 'Metode Statistika', 1, 'Praktikum Metode Statistika', '28', 14, 'Lab. Komputer PS. Statistika', '2018-10-02 11:26:39', '2018-10-02 11:26:39'),
(61, 6, 'MAT219', 'Aljabar Linear', 1, 'Kumpulan Soal Aljabar Linear', '28', 14, 'Responsi di kelas', '2018-10-02 11:10:16', '2018-12-03 16:59:58'),
(62, 6, 'STK211', 'Metode Statistika', 1, 'Praktikum Metode Statistika', '28', 14, 'Lab. Komputer PS. Statistika', '2018-10-02 11:26:39', '2018-10-02 11:26:39'),
(71, 7, 'MAT219', 'Aljabar Linear', 1, 'Kumpulan Soal Aljabar Linear', '28', 14, 'Responsi di kelas', '2018-10-02 11:10:16', '2018-10-02 11:25:04'),
(72, 7, 'STK211', 'Metode Statistika', 1, 'Praktikum Metode Statistika', '28', 14, 'Lab. Komputer PS. Statistika', '2018-10-02 11:26:39', '2018-10-02 11:26:39'),
(81, 8, 'MAT219', 'Aljabar Linear', 1, 'Kumpulan Soal Aljabar Linear', '28', 14, 'Responsi di kelas', '2018-10-02 11:10:16', '2018-10-02 11:25:04'),
(82, 8, 'STK211', 'Metode Statistika', 1, 'Praktikum Metode Statistika', '28', 14, 'Lab. Komputer PS. Statistika', '2018-10-02 11:26:39', '2018-10-02 11:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `sumber_dana`
--

CREATE TABLE `sumber_dana` (
  `id_sumber` int(11) NOT NULL,
  `sumber_danaa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumber_dana`
--

INSERT INTO `sumber_dana` (`id_sumber`, `sumber_danaa`) VALUES
(1, 'Pembiayaan sendiri oleh dosen'),
(2, 'PT yang bersangkutan'),
(3, 'Depdiknas'),
(4, 'Institusi dalam negeri di luar Depdiknas'),
(5, 'Institusi luar negeri');

-- --------------------------------------------------------

--
-- Table structure for table `sumber_pustaka_lain`
--

CREATE TABLE `sumber_pustaka_lain` (
  `id_sumber_pustaka_lain` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_sumber_pustaka_lain` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumber_pustaka_lain`
--

INSERT INTO `sumber_pustaka_lain` (`id_sumber_pustaka_lain`, `id_departemen`, `nama_sumber_pustaka_lain`, `created_at`, `updated_at`) VALUES
(1, 6, 'abcdef', '2018-08-29 06:55:32', '2018-08-28 23:55:32'),
(2, 6, 'zzzb', '2018-09-20 03:13:18', '2018-09-19 20:13:18'),
(3, 6, 'abcd', '2018-09-19 20:13:02', '2018-09-19 20:13:02'),
(4, 1, 'http://journalseek.net', '2018-09-25 23:46:59', '2018-09-25 23:46:59'),
(5, 1, 'abcd', '2018-09-25 23:47:19', '2018-09-25 23:47:19'),
(6, 4, 'http://journalseek.net', '2018-09-30 22:33:40', '2018-09-30 22:33:40'),
(7, 6, 'http://journalseek.net', '2018-10-02 00:11:52', '2018-10-02 00:11:52'),
(8, 6, 'www.sciencedirect.com', '2018-10-17 12:29:06', '2018-10-17 12:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `sumber_terima_dana`
--

CREATE TABLE `sumber_terima_dana` (
  `id_sumber` int(11) NOT NULL,
  `sumber_terima_danaa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumber_terima_dana`
--

INSERT INTO `sumber_terima_dana` (`id_sumber`, `sumber_terima_danaa`) VALUES
(1, 'PT Sendiri'),
(2, 'Dikti'),
(3, 'Sumber Lain');

-- --------------------------------------------------------

--
-- Table structure for table `tamongjama`
--

CREATE TABLE `tamongjama` (
  `id_tamongjama` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `tamongjama` text NOT NULL,
  `tahun_awal` date NOT NULL,
  `tahun_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamongjama`
--

INSERT INTO `tamongjama` (`id_tamongjama`, `id_departemen`, `tamongjama`, `tahun_awal`, `tahun_selesai`) VALUES
(4, 6, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2.1&nbsp; &nbsp;Sistem Tata Pamong</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (<em>input</em>, proses, <em>output</em> dan <em>outcome</em> serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan, &nbsp;dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk&nbsp; membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2.2&nbsp;&nbsp; Kepemimpinan</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jelaskan pola kepemimpinan dalam Program Studi.</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2.3&nbsp;&nbsp;&nbsp; Sistem Pengelolaan</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sistem pengelolaan fungsional dan operasional program studi mencakup <em>planning, organizing</em>, <em>staffing, leading, controlling</em> dalam kegiatan &nbsp;internal maupun eksternal<em>.</em></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2.4&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Penjaminan Mutu</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2.5 &nbsp;&nbsp;Umpan Balik</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?&nbsp; Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.</span></p>\r\n<table style=\"border-collapse: collapse; width: 53.486%; height: 118px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 43px;\">\r\n<td style=\"width: 25%; height: 43px; text-align: center;\" width=\"25%\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Umpan Balik dari</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Isi Umpan Balik</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tindak Umpan Balik</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">(1)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">(2)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">(3)</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dosen</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Mahasiswa</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Alumni</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengguna lulusan</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2.6 Keberlanjutan</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Jelaskan upaya untuk menjamin keberlanjutan (<em>sustainability</em>) program studi ini, khususnya dalam hal:</span></p>\r\n<ol>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Upaya untuk peningkatan animo calon mahasiswa:</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Upaya peningkatan mutu manajemen:</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Upaya untuk peningkatan mutu lulusan:</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Upaya untuk pelaksanaan dan hasil kerjasama kemitraan:</span></li>\r\n<li style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Upaya dan prestasi memperoleh dana hibah kompetitif:</span></li>\r\n</ol>', '2018-10-04', '2023-12-31'),
(5, 10, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>2.1&nbsp; &nbsp;Sistem Tata Pamong</strong></span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (<em>input</em>, proses, <em>output</em> dan <em>outcome</em> serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan, &nbsp;dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas.</span></p>\r\n<p style=\"text-align: justify;\"><em><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk&nbsp; membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.</span></em></p>\r\n<p style=\"text-align: justify;\"><strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2.2&nbsp;&nbsp; Kepemimpinan</span></strong></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat.</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi.</span></p>\r\n<p style=\"text-align: justify;\"><em><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Jelaskan pola kepemimpinan dalam Program Studi.</span></em></p>\r\n<p style=\"text-align: justify;\"><strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2.3&nbsp;&nbsp;&nbsp; Sistem Pengelolaan</span></strong></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Sistem pengelolaan fungsional dan operasional program studi mencakup <em>planning, organizing</em>, <em>staffing, leading, controlling</em> dalam kegiatan &nbsp;internal maupun eksternal<em>.</em></span></p>\r\n<p style=\"text-align: justify;\"><em><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.</span></em></p>\r\n<p style=\"text-align: justify;\"><strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2.4&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Penjaminan Mutu</span></strong></p>\r\n<p style=\"text-align: justify;\"><em><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.</span></em></p>\r\n<p style=\"text-align: justify;\"><strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2.5 &nbsp;&nbsp;Umpan Balik</span></strong></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?&nbsp; Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.</span></p>\r\n<table style=\"border-collapse: collapse; width: 53.486%; height: 118px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 43px;\">\r\n<td style=\"width: 25%; height: 43px; text-align: center;\" width=\"25%\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Umpan Balik dari</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Isi Umpan Balik</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Tindak Umpan Balik</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">(1)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">(2)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">(3)</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Dosen</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Mahasiswa</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Alumni</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pengguna lulusan</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2.6 Keberlanjutan</span></strong></p>\r\n<p style=\"text-align: justify;\"><em><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Jelaskan upaya untuk menjamin keberlanjutan (sustainability) program studi ini, khususnya dalam hal:</span></em></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Upaya untuk peningkatan animo calon mahasiswa:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Upaya peningkatan mutu manajemen:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Upaya untuk peningkatan mutu lulusan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Upaya untuk pelaksanaan dan hasil kerjasama kemitraan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Upaya dan prestasi memperoleh dana hibah kompetitif:</span></li>\r\n</ol>', '2018-10-04', '2023-12-31'),
(6, 1, '<h2><span style=\"font-family: arial, helvetica, sans-serif; font-size: 12pt;\"><strong>Standar 2. Tata &nbsp;Pamong, KEPEMIMPINAN, SISTEM &nbsp;Pengelolaan, DAN Penjaminan Mutu</strong></span></h2>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.1&nbsp; &nbsp;Sistem Tata Pamong</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (<em>input</em>, proses, <em>output</em> dan <em>outcome</em> serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan, &nbsp;dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk&nbsp; membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.2&nbsp;&nbsp; Kepemimpinan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat.</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan pola kepemimpinan dalam Program Studi.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.3&nbsp;&nbsp;&nbsp; Sistem Pengelolaan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem pengelolaan fungsional dan operasional program studi mencakup <em>planning, organizing</em>, <em>staffing, leading, controlling</em> dalam kegiatan &nbsp;internal maupun eksternal<em>.</em></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.4&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Penjaminan Mutu</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.5 &nbsp;&nbsp;Umpan Balik</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?&nbsp; Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.</span></p>\r\n<table style=\"border-collapse: collapse; width: 53.486%; height: 118px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 43px;\">\r\n<td style=\"width: 25%; height: 43px; text-align: center;\" width=\"25%\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Umpan Balik dari</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Isi Umpan Balik</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Tindak Umpan Balik</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(1)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(2)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(3)</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Dosen</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Mahasiswa</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Alumni</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Pengguna lulusan</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.6 Keberlanjutan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan upaya untuk menjamin keberlanjutan (<em>sustainability</em>) program studi ini, khususnya dalam hal:</span></p>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk peningkatan animo calon mahasiswa:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya peningkatan mutu manajemen:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk peningkatan mutu lulusan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk pelaksanaan dan hasil kerjasama kemitraan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya dan prestasi memperoleh dana hibah kompetitif:</span></li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-10-04', '2023-12-31'),
(7, 2, '<h2><span style=\"font-family: arial, helvetica, sans-serif; font-size: 12pt;\"><strong>Standar 2. Tata &nbsp;Pamong, KEPEMIMPINAN, SISTEM &nbsp;Pengelolaan, DAN Penjaminan Mutu</strong></span></h2>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.1&nbsp; &nbsp;Sistem Tata Pamong</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (<em>input</em>, proses, <em>output</em> dan <em>outcome</em> serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan, &nbsp;dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk&nbsp; membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.2&nbsp;&nbsp; Kepemimpinan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat.</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan pola kepemimpinan dalam Program Studi.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.3&nbsp;&nbsp;&nbsp; Sistem Pengelolaan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem pengelolaan fungsional dan operasional program studi mencakup <em>planning, organizing</em>, <em>staffing, leading, controlling</em> dalam kegiatan &nbsp;internal maupun eksternal<em>.</em></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.4&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Penjaminan Mutu</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.5 &nbsp;&nbsp;Umpan Balik</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?&nbsp; Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.</span></p>\r\n<table style=\"border-collapse: collapse; width: 53.486%; height: 118px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 43px;\">\r\n<td style=\"width: 25%; height: 43px; text-align: center;\" width=\"25%\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Umpan Balik dari</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Isi Umpan Balik</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Tindak Umpan Balik</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(1)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(2)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(3)</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Dosen</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Mahasiswa</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Alumni</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Pengguna lulusan</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.6 Keberlanjutan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan upaya untuk menjamin keberlanjutan (<em>sustainability</em>) program studi ini, khususnya dalam hal:</span></p>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk peningkatan animo calon mahasiswa:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya peningkatan mutu manajemen:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk peningkatan mutu lulusan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk pelaksanaan dan hasil kerjasama kemitraan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya dan prestasi memperoleh dana hibah kompetitif:</span></li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-10-04', '2023-12-31'),
(8, 3, '<h2><span style=\"font-family: arial, helvetica, sans-serif; font-size: 12pt;\"><strong>Standar 2. Tata &nbsp;Pamong, KEPEMIMPINAN, SISTEM &nbsp;Pengelolaan, DAN Penjaminan Mutu</strong></span></h2>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.1&nbsp; &nbsp;Sistem Tata Pamong</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (<em>input</em>, proses, <em>output</em> dan <em>outcome</em> serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan, &nbsp;dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk&nbsp; membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.2&nbsp;&nbsp; Kepemimpinan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat.</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan pola kepemimpinan dalam Program Studi.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.3&nbsp;&nbsp;&nbsp; Sistem Pengelolaan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem pengelolaan fungsional dan operasional program studi mencakup <em>planning, organizing</em>, <em>staffing, leading, controlling</em> dalam kegiatan &nbsp;internal maupun eksternal<em>.</em></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.4&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Penjaminan Mutu</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.5 &nbsp;&nbsp;Umpan Balik</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?&nbsp; Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.</span></p>\r\n<table style=\"border-collapse: collapse; width: 53.486%; height: 118px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 43px;\">\r\n<td style=\"width: 25%; height: 43px; text-align: center;\" width=\"25%\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Umpan Balik dari</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Isi Umpan Balik</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Tindak Umpan Balik</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(1)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(2)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(3)</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Dosen</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Mahasiswa</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Alumni</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Pengguna lulusan</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.6 Keberlanjutan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan upaya untuk menjamin keberlanjutan (<em>sustainability</em>) program studi ini, khususnya dalam hal:</span></p>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk peningkatan animo calon mahasiswa:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya peningkatan mutu manajemen:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk peningkatan mutu lulusan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk pelaksanaan dan hasil kerjasama kemitraan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya dan prestasi memperoleh dana hibah kompetitif:</span></li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-10-04', '2023-12-31'),
(9, 4, '<h2><span style=\"font-family: arial, helvetica, sans-serif; font-size: 12pt;\"><strong>Standar 2. Tata &nbsp;Pamong, KEPEMIMPINAN, SISTEM &nbsp;Pengelolaan, DAN Penjaminan Mutu</strong></span></h2>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.1&nbsp; &nbsp;Sistem Tata Pamong</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (<em>input</em>, proses, <em>output</em> dan <em>outcome</em> serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan, &nbsp;dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk&nbsp; membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.2&nbsp;&nbsp; Kepemimpinan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat.</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan pola kepemimpinan dalam Program Studi.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.3&nbsp;&nbsp;&nbsp; Sistem Pengelolaan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem pengelolaan fungsional dan operasional program studi mencakup <em>planning, organizing</em>, <em>staffing, leading, controlling</em> dalam kegiatan &nbsp;internal maupun eksternal<em>.</em></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.4&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Penjaminan Mutu</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.5 &nbsp;&nbsp;Umpan Balik</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?&nbsp; Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.</span></p>\r\n<table style=\"border-collapse: collapse; width: 53.486%; height: 118px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 43px;\">\r\n<td style=\"width: 25%; height: 43px; text-align: center;\" width=\"25%\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Umpan Balik dari</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Isi Umpan Balik</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Tindak Umpan Balik</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(1)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(2)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(3)</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Dosen</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Mahasiswa</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Alumni</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Pengguna lulusan</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.6 Keberlanjutan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan upaya untuk menjamin keberlanjutan (<em>sustainability</em>) program studi ini, khususnya dalam hal:</span></p>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk peningkatan animo calon mahasiswa:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya peningkatan mutu manajemen:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk peningkatan mutu lulusan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk pelaksanaan dan hasil kerjasama kemitraan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya dan prestasi memperoleh dana hibah kompetitif:</span></li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-10-04', '2023-12-31');
INSERT INTO `tamongjama` (`id_tamongjama`, `id_departemen`, `tamongjama`, `tahun_awal`, `tahun_selesai`) VALUES
(10, 5, '<h2><span style=\"font-family: arial, helvetica, sans-serif; font-size: 12pt;\"><strong>Standar 2. Tata &nbsp;Pamong, KEPEMIMPINAN, SISTEM &nbsp;Pengelolaan, DAN Penjaminan Mutu</strong></span></h2>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.1&nbsp; &nbsp;Sistem Tata Pamong</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (<em>input</em>, proses, <em>output</em> dan <em>outcome</em> serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan, &nbsp;dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk&nbsp; membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.2&nbsp;&nbsp; Kepemimpinan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat.</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan pola kepemimpinan dalam Program Studi.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.3&nbsp;&nbsp;&nbsp; Sistem Pengelolaan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem pengelolaan fungsional dan operasional program studi mencakup <em>planning, organizing</em>, <em>staffing, leading, controlling</em> dalam kegiatan &nbsp;internal maupun eksternal<em>.</em></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.4&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Penjaminan Mutu</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.5 &nbsp;&nbsp;Umpan Balik</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?&nbsp; Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.</span></p>\r\n<table style=\"border-collapse: collapse; width: 53.486%; height: 118px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 43px;\">\r\n<td style=\"width: 25%; height: 43px; text-align: center;\" width=\"25%\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Umpan Balik dari</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Isi Umpan Balik</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Tindak Umpan Balik</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(1)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(2)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(3)</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Dosen</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Mahasiswa</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Alumni</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Pengguna lulusan</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.6 Keberlanjutan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan upaya untuk menjamin keberlanjutan (<em>sustainability</em>) program studi ini, khususnya dalam hal:</span></p>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk peningkatan animo calon mahasiswa:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya peningkatan mutu manajemen:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk peningkatan mutu lulusan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk pelaksanaan dan hasil kerjasama kemitraan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya dan prestasi memperoleh dana hibah kompetitif:</span></li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-10-04', '2023-12-31'),
(11, 7, '<h2><span style=\"font-family: arial, helvetica, sans-serif; font-size: 12pt;\"><strong>Standar 2. Tata &nbsp;Pamong, KEPEMIMPINAN, SISTEM &nbsp;Pengelolaan, DAN Penjaminan Mutu</strong></span></h2>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.1&nbsp; &nbsp;Sistem Tata Pamong</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (<em>input</em>, proses, <em>output</em> dan <em>outcome</em> serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan, &nbsp;dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk&nbsp; membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.2&nbsp;&nbsp; Kepemimpinan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat.</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan pola kepemimpinan dalam Program Studi.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.3&nbsp;&nbsp;&nbsp; Sistem Pengelolaan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem pengelolaan fungsional dan operasional program studi mencakup <em>planning, organizing</em>, <em>staffing, leading, controlling</em> dalam kegiatan &nbsp;internal maupun eksternal<em>.</em></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.4&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Penjaminan Mutu</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.5 &nbsp;&nbsp;Umpan Balik</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?&nbsp; Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.</span></p>\r\n<table style=\"border-collapse: collapse; width: 53.486%; height: 118px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 43px;\">\r\n<td style=\"width: 25%; height: 43px; text-align: center;\" width=\"25%\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Umpan Balik dari</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Isi Umpan Balik</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Tindak Umpan Balik</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(1)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(2)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(3)</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Dosen</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Mahasiswa</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Alumni</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Pengguna lulusan</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.6 Keberlanjutan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan upaya untuk menjamin keberlanjutan (<em>sustainability</em>) program studi ini, khususnya dalam hal:</span></p>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk peningkatan animo calon mahasiswa:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya peningkatan mutu manajemen:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk peningkatan mutu lulusan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk pelaksanaan dan hasil kerjasama kemitraan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya dan prestasi memperoleh dana hibah kompetitif:</span></li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-10-04', '2023-12-31'),
(12, 8, '<h2><span style=\"font-family: arial, helvetica, sans-serif; font-size: 12pt;\"><strong>Standar 2. Tata &nbsp;Pamong, KEPEMIMPINAN, SISTEM &nbsp;Pengelolaan, DAN Penjaminan Mutu</strong></span></h2>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.1&nbsp; &nbsp;Sistem Tata Pamong</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (<em>input</em>, proses, <em>output</em> dan <em>outcome</em> serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan, &nbsp;dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk&nbsp; membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.2&nbsp;&nbsp; Kepemimpinan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat.</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan pola kepemimpinan dalam Program Studi.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.3&nbsp;&nbsp;&nbsp; Sistem Pengelolaan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem pengelolaan fungsional dan operasional program studi mencakup <em>planning, organizing</em>, <em>staffing, leading, controlling</em> dalam kegiatan &nbsp;internal maupun eksternal<em>.</em></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.4&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Penjaminan Mutu</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.5 &nbsp;&nbsp;Umpan Balik</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?&nbsp; Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.</span></p>\r\n<table style=\"border-collapse: collapse; width: 53.486%; height: 118px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 43px;\">\r\n<td style=\"width: 25%; height: 43px; text-align: center;\" width=\"25%\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Umpan Balik dari</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Isi Umpan Balik</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Tindak Umpan Balik</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(1)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(2)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(3)</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Dosen</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Mahasiswa</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Alumni</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Pengguna lulusan</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.6 Keberlanjutan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan upaya untuk menjamin keberlanjutan (<em>sustainability</em>) program studi ini, khususnya dalam hal:</span></p>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk peningkatan animo calon mahasiswa:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya peningkatan mutu manajemen:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk peningkatan mutu lulusan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk pelaksanaan dan hasil kerjasama kemitraan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya dan prestasi memperoleh dana hibah kompetitif:</span></li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-10-04', '2023-12-31'),
(13, 9, '<h2><span style=\"font-family: arial, helvetica, sans-serif; font-size: 12pt;\"><strong>Standar 2. Tata &nbsp;Pamong, KEPEMIMPINAN, SISTEM &nbsp;Pengelolaan, DAN Penjaminan Mutu</strong></span></h2>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.1&nbsp; &nbsp;Sistem Tata Pamong</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (<em>input</em>, proses, <em>output</em> dan <em>outcome</em> serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan, &nbsp;dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk&nbsp; membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.2&nbsp;&nbsp; Kepemimpinan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat.</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistik, kredibel, serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan pola kepemimpinan dalam Program Studi.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.3&nbsp;&nbsp;&nbsp; Sistem Pengelolaan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Sistem pengelolaan fungsional dan operasional program studi mencakup <em>planning, organizing</em>, <em>staffing, leading, controlling</em> dalam kegiatan &nbsp;internal maupun eksternal<em>.</em></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.4&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Penjaminan Mutu</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.5 &nbsp;&nbsp;Umpan Balik</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka?&nbsp; Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.</span></p>\r\n<table style=\"border-collapse: collapse; width: 53.486%; height: 118px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 43px;\">\r\n<td style=\"width: 25%; height: 43px; text-align: center;\" width=\"25%\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Umpan Balik dari</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Isi Umpan Balik</span></p>\r\n</td>\r\n<td style=\"width: 33.3333%; height: 43px; text-align: center;\">\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Tindak Umpan Balik</span></p>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(1)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(2)</span></td>\r\n<td style=\"width: 33.3333%; height: 15px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif;\">(3)</span></td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Dosen</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Mahasiswa</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Alumni</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n<tr style=\"height: 15px;\">\r\n<td style=\"width: 25%; height: 15px;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Pengguna lulusan</span></td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 15px;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">2.6 Keberlanjutan</span></p>\r\n<p><span style=\"font-family: arial, helvetica, sans-serif;\">Jelaskan upaya untuk menjamin keberlanjutan (<em>sustainability</em>) program studi ini, khususnya dalam hal:</span></p>\r\n<ol>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk peningkatan animo calon mahasiswa:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya peningkatan mutu manajemen:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk peningkatan mutu lulusan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya untuk pelaksanaan dan hasil kerjasama kemitraan:</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif;\">Upaya dan prestasi memperoleh dana hibah kompetitif:</span></li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-10-04', '2023-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `terlibat_penelitian`
--

CREATE TABLE `terlibat_penelitian` (
  `id_mahasiswaPenelitian` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_dosen` text NOT NULL,
  `topik_penelitian` text NOT NULL,
  `jumlah_mahasiswa` int(11) NOT NULL,
  `tahun_terlibat_penelitian` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `terlibat_pengabdian`
--

CREATE TABLE `terlibat_pengabdian` (
  `id_mahasiswaPengabdian` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `kegiatan_pengabdian` text NOT NULL,
  `institusi` text NOT NULL,
  `tahun_terlibat` year(4) NOT NULL,
  `jumlah_mahasiswa_pengabdian` int(11) NOT NULL,
  `keterlibatan_mahasiswa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terlibat_pengabdian`
--

INSERT INTO `terlibat_pengabdian` (`id_mahasiswaPengabdian`, `id_departemen`, `kegiatan_pengabdian`, `institusi`, `tahun_terlibat`, `jumlah_mahasiswa_pengabdian`, `keterlibatan_mahasiswa`) VALUES
(4, 6, 'Pembimbingan dan peningkatan Ketrampilan anakanak sekitar Desa', 'LKP Tepi Sawah', 2016, 30, 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `tingkatan`
--

CREATE TABLE `tingkatan` (
  `id_tingkatan` int(11) NOT NULL,
  `tingkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tingkatan`
--

INSERT INTO `tingkatan` (`id_tingkatan`, `tingkat`) VALUES
(1, 'Lokal'),
(2, 'Nasional'),
(3, 'Internasional');

-- --------------------------------------------------------

--
-- Table structure for table `tingkat_hasil`
--

CREATE TABLE `tingkat_hasil` (
  `id_tingkatt` int(11) NOT NULL,
  `tingkat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tingkat_hasil`
--

INSERT INTO `tingkat_hasil` (`id_tingkatt`, `tingkat`) VALUES
(1, 'Lokal'),
(2, 'Nasional'),
(3, 'Internasional');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_mahasiswa`
--

CREATE TABLE `tipe_mahasiswa` (
  `id_tipe` int(11) NOT NULL,
  `nama_tipe` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_mahasiswa`
--

INSERT INTO `tipe_mahasiswa` (`id_tipe`, `nama_tipe`) VALUES
(1, 'Program Reguler'),
(2, 'Program Non-reguler');

-- --------------------------------------------------------

--
-- Table structure for table `upaya_meningkatkan_kompetensi_tendik`
--

CREATE TABLE `upaya_meningkatkan_kompetensi_tendik` (
  `id_upaya_meningkatkan_kompetensi_tendik` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `keterangan_upaya_meningkatkan_kompetensi_tendik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upaya_meningkatkan_kompetensi_tendik`
--

INSERT INTO `upaya_meningkatkan_kompetensi_tendik` (`id_upaya_meningkatkan_kompetensi_tendik`, `id_departemen`, `keterangan_upaya_meningkatkan_kompetensi_tendik`) VALUES
(1, 1, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan kualifikasi dan kompetensi para tenaga kependidikan di PSIK, maka dilakukan kegiatan-kegiatan baik studi lanjut maupun pelatihan non-gelar yang dilakukan oleh departemen, fakultas, maupun IPB. Selama tiga tahun, upaya yang telah dilakukan seperti disajikan pada tabel berikut.</span></p>\r\n<table style=\"height: 72px; width: 47.6328%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 36px;\">\r\n<td style=\"width: 3.78999%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 20.1927%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis Kegiatan</strong></span></td>\r\n<td style=\"width: 15.7685%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Tahun</strong></span></td>\r\n<td style=\"width: 1.99601%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Tenaga Kependidikan</strong></span></td>\r\n<td style=\"width: 24.7171%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Sumber Pendanaan</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut dari SMK ke S1</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2012-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Siti Desi Wiranti</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Bantuan dari Departemen</span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut S2</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2014-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Faturrakhman</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">DIKTI</span></td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(2, 2, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan kualifikasi dan kompetensi para tenaga kependidikan di PSIK, maka dilakukan kegiatan-kegiatan baik studi lanjut maupun pelatihan non-gelar yang dilakukan oleh departemen, fakultas, maupun IPB. Selama tiga tahun, upaya yang telah dilakukan seperti disajikan pada tabel berikut.</span></p>\r\n<table style=\"height: 72px; width: 47.6328%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 36px;\">\r\n<td style=\"width: 3.78999%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 20.1927%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis Kegiatan</strong></span></td>\r\n<td style=\"width: 15.7685%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Tahun</strong></span></td>\r\n<td style=\"width: 1.99601%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Tenaga Kependidikan</strong></span></td>\r\n<td style=\"width: 24.7171%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Sumber Pendanaan</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut dari SMK ke S1</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2012-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Siti Desi Wiranti</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Bantuan dari Departemen</span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut S2</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2014-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Faturrakhman</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">DIKTI</span></td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(3, 3, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan kualifikasi dan kompetensi para tenaga kependidikan di PSIK, maka dilakukan kegiatan-kegiatan baik studi lanjut maupun pelatihan non-gelar yang dilakukan oleh departemen, fakultas, maupun IPB. Selama tiga tahun, upaya yang telah dilakukan seperti disajikan pada tabel berikut.</span></p>\r\n<table style=\"height: 72px; width: 47.6328%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 36px;\">\r\n<td style=\"width: 3.78999%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 20.1927%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis Kegiatan</strong></span></td>\r\n<td style=\"width: 15.7685%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Tahun</strong></span></td>\r\n<td style=\"width: 1.99601%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Tenaga Kependidikan</strong></span></td>\r\n<td style=\"width: 24.7171%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Sumber Pendanaan</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut dari SMK ke S1</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2012-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Siti Desi Wiranti</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Bantuan dari Departemen</span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut S2</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2014-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Faturrakhman</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">DIKTI</span></td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(4, 4, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan kualifikasi dan kompetensi para tenaga kependidikan di PSIK, maka dilakukan kegiatan-kegiatan baik studi lanjut maupun pelatihan non-gelar yang dilakukan oleh departemen, fakultas, maupun IPB. Selama tiga tahun, upaya yang telah dilakukan seperti disajikan pada tabel berikut.</span></p>\r\n<table style=\"height: 72px; width: 47.6328%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 36px;\">\r\n<td style=\"width: 3.78999%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 20.1927%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis Kegiatan</strong></span></td>\r\n<td style=\"width: 15.7685%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Tahun</strong></span></td>\r\n<td style=\"width: 1.99601%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Tenaga Kependidikan</strong></span></td>\r\n<td style=\"width: 24.7171%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Sumber Pendanaan</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut dari SMK ke S1</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2012-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Siti Desi Wiranti</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Bantuan dari Departemen</span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut S2</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2014-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Faturrakhman</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">DIKTI</span></td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(5, 5, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan kualifikasi dan kompetensi para tenaga kependidikan di PSIK, maka dilakukan kegiatan-kegiatan baik studi lanjut maupun pelatihan non-gelar yang dilakukan oleh departemen, fakultas, maupun IPB. Selama tiga tahun, upaya yang telah dilakukan seperti disajikan pada tabel berikut.</span></p>\r\n<table style=\"height: 72px; width: 47.6328%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 36px;\">\r\n<td style=\"width: 3.78999%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 20.1927%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis Kegiatan</strong></span></td>\r\n<td style=\"width: 15.7685%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Tahun</strong></span></td>\r\n<td style=\"width: 1.99601%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Tenaga Kependidikan</strong></span></td>\r\n<td style=\"width: 24.7171%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Sumber Pendanaan</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut dari SMK ke S1</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2012-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Siti Desi Wiranti</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Bantuan dari Departemen</span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut S2</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2014-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Faturrakhman</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">DIKTI</span></td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(6, 6, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan kualifikasi dan kompetensi para tenaga kependidikan di PSIK, maka dilakukan kegiatan-kegiatan baik studi lanjut maupun pelatihan non-gelar yang dilakukan oleh departemen, fakultas, maupun IPB. Selama tiga tahun, upaya yang telah dilakukan seperti disajikan pada tabel berikut.</span></p>\r\n<table style=\"height: 72px; width: 47.6328%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 36px;\">\r\n<td style=\"width: 3.78999%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 20.1927%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis Kegiatan</strong></span></td>\r\n<td style=\"width: 15.7685%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Tahun</strong></span></td>\r\n<td style=\"width: 1.99601%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Tenaga Kependidikan</strong></span></td>\r\n<td style=\"width: 24.7171%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Sumber Pendanaan</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut dari SMK ke S1</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2012-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Siti Desi Wiranti</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Bantuan dari Departemen</span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut S2</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2014-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Faturrakhman</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">DIKTI</span></td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(7, 7, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan kualifikasi dan kompetensi para tenaga kependidikan di PSIK, maka dilakukan kegiatan-kegiatan baik studi lanjut maupun pelatihan non-gelar yang dilakukan oleh departemen, fakultas, maupun IPB. Selama tiga tahun, upaya yang telah dilakukan seperti disajikan pada tabel berikut.</span></p>\r\n<table style=\"height: 72px; width: 47.6328%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 36px;\">\r\n<td style=\"width: 3.78999%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 20.1927%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis Kegiatan</strong></span></td>\r\n<td style=\"width: 15.7685%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Tahun</strong></span></td>\r\n<td style=\"width: 1.99601%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Tenaga Kependidikan</strong></span></td>\r\n<td style=\"width: 24.7171%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Sumber Pendanaan</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut dari SMK ke S1</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2012-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Siti Desi Wiranti</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Bantuan dari Departemen</span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut S2</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2014-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Faturrakhman</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">DIKTI</span></td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(8, 8, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Untuk meningkatkan kualifikasi dan kompetensi para tenaga kependidikan di PSIK, maka dilakukan kegiatan-kegiatan baik studi lanjut maupun pelatihan non-gelar yang dilakukan oleh departemen, fakultas, maupun IPB. Selama tiga tahun, upaya yang telah dilakukan seperti disajikan pada tabel berikut.</span></p>\r\n<table style=\"height: 72px; width: 47.6328%; border-collapse: collapse; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 36px;\">\r\n<td style=\"width: 3.78999%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>No</strong></span></td>\r\n<td style=\"width: 20.1927%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Jenis Kegiatan</strong></span></td>\r\n<td style=\"width: 15.7685%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Tahun</strong></span></td>\r\n<td style=\"width: 1.99601%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Nama Tenaga Kependidikan</strong></span></td>\r\n<td style=\"width: 24.7171%; height: 36px; text-align: center;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\"><strong>Sumber Pendanaan</strong></span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut dari SMK ke S1</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2012-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Siti Desi Wiranti</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Bantuan dari Departemen</span></td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 3.78999%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2</span></td>\r\n<td style=\"width: 20.1927%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Studi lanjut S2</span></td>\r\n<td style=\"width: 15.7685%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">2014-2016</span></td>\r\n<td style=\"width: 1.99601%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Faturrakhman</span></td>\r\n<td style=\"width: 24.7171%; height: 18px;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">DIKTI</span></td>\r\n</tr>\r\n</tbody>\r\n</table>');

-- --------------------------------------------------------

--
-- Table structure for table `upaya_sebar_informasi`
--

CREATE TABLE `upaya_sebar_informasi` (
  `id_upaya` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `upaya_sebar` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upaya_sebar_informasi`
--

INSERT INTO `upaya_sebar_informasi` (`id_upaya`, `id_departemen`, `upaya_sebar`, `created_at`, `updated_at`) VALUES
(1, 10, '<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Informasi dan kebijakan FMIPA IPB disebarkan melalui berbagai cara antara lain: ditampilkan pada <em>website</em> FMIPA IPB (<a href=\"http://fmipa.ipb.ac.id\">http://fmipa.ipb.ac.id</a>, <strong>Gambar 6.12</strong>), disampaikan pada berbagai pertemuan rutin seperti rapat pimpinan fakultas dan departemen, rapat senat FMIPA, rabuan bersama (rutin mingguan di departemen, rutin bulanan di FMIPA untuk pimpinan departemen dan fakultas, rutin semesteran untuk semua staf dosen, pegawai dan pimpinan), halal bi halal, kegiatan masa perkenalan fakultas, masa perkenalan departemen dan pertemuan dengan orang tua mahasiswa. Selain itu, informasi yang bersifat mendadak dan penting disebarkan melalui surat, telpon, sms, WhatsApp dan papan pengumuman. Humas IPB&nbsp; juga mengelola buletin yang berisi informasi terkini mengenai IPB (<strong>Gambar 6.25</strong>).</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Penyebaran informasi/kebijakan untuk pimpinan fakultas dan departemen juga dilakukan melalui <em>mailing list</em> Rapim Fakultas, dengan alamat: <a href=\"mailto:fmipaipb@yahoogroups.com\">fmipaipb@yahoogroups.com</a>, dan melalui <em>e-mail</em> khususnya untuk informasi/kebijakan yang ditujukan secara khusus kepada pimpinan fakultas atau departemen tertentu.</span></p>', '2018-12-25 21:55:36', '2018-12-25 14:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `role` int(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_departemen`, `role`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 1, 3, 'Ketua Program Studi', 'kaprodi_stat', 'kaprodi_stat@gmail.com', '$2y$10$QhypqI/iIFg1bgrP4f82uuNsskN39Mk0LBS/uZkzRRxu4wyj1yFeW', 'mKUDsrrbtrjk3hwCP4KGfsWky8hzKZaT46qNu9kq3JnKKdTCXKu7ndJVQOq5', '2018-03-03 19:21:25', '2018-08-23 22:32:34'),
(6, 2, 2, 'Kepala Tata Usaha', 'ktu_gfm', 'ktu_gfm@gmail.com', '$2y$10$3jh0p3dH7eqsv1/8Tle/0uOWU.I0bIol87AVkSGR6Ay3DZN95qKUG', 'WnB8jXHZdHCAeCD7dtHENzGOsHYvWwP3KMqMn6HVYgFRu8CbrktnbcyFtd5E', '2018-03-04 03:43:46', '2018-08-23 22:43:07'),
(7, 1, 2, 'Kepala Tata Usaha', 'ktu_stat', 'ktu_stat@gmail.com', '$2y$10$9emH55XZKz3467xTWo27RuBss7gMVHjplIRQD2WDi6L9e5106Y16i', 'RPKIh9k6GdYY7S1Nj0dFWd29s0ureEPZBJkcBgDkAJMHZY50VMIH8koA8h3B', '2018-03-04 06:35:13', '2018-09-26 00:43:53'),
(9, 10, 1, 'Super Admin', 'Super_Admin', 'superadmin@gmail.com', '$2y$10$Jo/Owzzc1cNYwZiVJ6zglun.RncyLAb9pDRb8zURG5S3urpTCkOc6', 'EcUdJa3Q10YMoJ7vJIrIkEDIeFYM46PfzODBYumHLwSkj60q8yaE5ndNsfGV', '2018-03-06 07:26:31', '2018-03-06 07:26:31'),
(11, 3, 2, 'Kepala Tata Usaha', 'ktu_bio', 'ktu_bio@gmail.com', '$2y$10$ZvDVHk7N/5NnEKRaKkss4e2cvplyZAPtc6NZISLTsRYqExl8Nmf3e', 'z4yHa3Or8voCjO0LciNhka8BHjpPrKzmzrKF7dqxLSSj4TdAYNQXDKDU2QKb', '2018-03-08 19:01:33', '2018-08-23 22:51:48'),
(12, 6, 2, 'Ketua Program Studi', 'Ketua_Prodi', 'kaprodi@gmail.com', '$2y$10$aBrD2VqvDLOuI4pR3XorKe1s3cUYUQjt.pGtCPUNXTClDrx3qGFb2', 'VHKBD8B6StQ54z9Tmy49vA1AFJkEGLk5Ac2k25Whz122muXtuznCqcw653Ml', '2018-03-09 00:40:11', '2018-10-16 04:17:22'),
(14, 4, 2, 'Kepala Tata Usaha', 'ktu_kim', 'ktu_kim@gmail.com', '$2y$10$7tm9lVuUXbKLi2S9k24gkO/3vLOUYU6jps5gO1Moh7SCmI/QJGp5u', 'CXenUc0NJueTpuD3GY92yCwDPYj0NlBg7Lvwz9W1PzmgEpX89zgxMPttcral', '2018-03-30 08:01:00', '2018-08-23 22:59:23'),
(15, 5, 2, 'KTU', 'ktu_mtk', 'ktu_mtk@gmail.com', '$2y$10$38RGPmWk2gB0C4IJbfBy7uNKAOYdwF30wiilLQR0MfoXxNYHQTDRG', 'nLRmXN0hU5oavjNKWX8VwNQAauzcRbYRWAukMnpuPzVw3A2oM6kBj30pfH9I', '2018-03-31 05:31:14', '2018-08-23 23:05:10'),
(16, 7, 2, 'KTU', 'ktu_fis', 'ktu_fis@gmail.com', '$2y$10$lnXwQhOXI3RL2biswKZnJei4NseHbeAUXeAg2AIiBcr2CSxBuS3WG', 'PTHfk4drCXyosfMjsOa1sL2VIBlhzF0t7jY75a9RYmHIyYhalzt2SYfP0NNy', '2018-03-31 05:42:46', '2018-08-23 23:14:20'),
(17, 8, 2, 'KTU', 'ktu_bik', 'ktu_bik@gmail.com', '$2y$10$mmFSsh4U3dPRPrMHxHV9UOBwJlE9NNPaiETilZN37q8SZ5igYb/4u', 'NAFCv00zMYS88Kdit1EevhHzZkHGJynrRzyRM9yhAo4QDweRj7dKYLP9VkzP', '2018-03-31 05:45:12', '2018-08-23 23:19:43'),
(18, 9, 2, 'KTU', 'ktu_akt', 'ktu_akt@gmail.com', '$2y$10$Abz6NBaa9mbfTij3mur58.n0ioS.AjyOiJVoniP2icQkaeF0dSvxO', 's4Lf44FLD1RkGP8IyFJHGoLnYsDYIgqlf2nERM6F9Kpf53Zlj7keVAPDqJiR', '2018-03-31 05:48:22', '2018-08-23 23:39:17'),
(19, 1, 5, 'Sekretaris Departemen', 'sekdep_stat', 'sekdep_stat@gmail.com', '$2y$10$mGI9NvxG.h7otjaQxlT.yepW4jzaRLsQVQnG2nBnHwIU6wT/DqAYO', '41jTHpoBfHsSIOby8ON1vEHOnhf6Mp5xyedIfHcNBRU2ab8xfgLSdUwaBA7Z', '2018-04-08 19:24:13', '2018-08-23 22:31:09'),
(20, 6, 2, 'ktu_kom', 'ktu_kom', 'ktu_kom@gmail.com', '$2y$10$vvB9QqOmTXg5vgoF2xmnNuc436lFrZGCQeulC9C0Pvwgt3m/HtvFu', '2o92blFIppNQDd6cGz796GBANzhOtSlAJM07HuHg1L1KvqcxX55D41lmYshK', '2018-04-08 22:27:10', '2018-07-31 04:01:04'),
(21, 6, 9, 'sarpras', 'sarpras_kom', 'sarpras_kom@gmail.com', '$2y$10$WRamvfA9tmz9scxtVV9SHOxWqpoLFWI4i28BjiOdoHO4hZx1Yu7.2', 't1TEqoLhTSvEWt6bHJRJZ9auoFtOKCdzSJqJ6OBYqudjiraWzUMkX3NYzvKW', '2018-07-05 10:06:42', '2018-10-16 04:15:31'),
(22, 6, 8, 'bendahara', 'bendahara_kom', 'bendahara_kom@gmail.com', '$2y$10$hFlfhFVsiLvFuoUQcQpaeeYB9ufIsqvbX1xGl7/08VCH9yILCYf46', '8mYEwj50fypHAzD7erKEGMnkyQztxbeGAfUJJZvwHMhAp5MzsTUlwz4Lpr0I', '2018-07-13 08:07:55', '2018-10-16 03:31:10'),
(24, 1, 4, 'Ketua Departemen', 'kadep_stat', 'kadep_stat@gmail.com', '$2y$10$Qp14rgLyUQsB5.Y4ti1NEuIdkcJKmUZG8TghOkuESRpRUPsZp66Oy', 'cG0MKncCNcHbNDBSTOI2GYdIvVCsMui3bd59ZGAmwEQj6Jn96koktgl5j0kZ', '2018-07-14 04:04:29', '2018-08-23 22:35:34'),
(25, 6, 10, 'komdik_kom', 'komdik_kom', 'komdik_kom@gmail.com', '$2y$10$ejL/3M6KtnqEjHczXd/8MujNyruPE9m8oHEvAEK6TV5PGxjdgbSuS', 'y6sfl4h6z9ohVCv0wPIrNUZoMPALtRHBVrq7dx2hTFxKQD9m0BrT0e8z7l7K', '2018-07-31 01:36:06', '2018-10-16 04:16:41'),
(26, 6, 2, 'kadep_kom', 'kadep_kom', 'kadep_kom@gmail.com', '$2y$10$uwJAh7Ov5Q7TMPAmn9UMWeL98tKt6QFQs4wTk1bsQ..jhRMLbmBNG', 'bxTbk7OybMhRAEJarg0hTzlqw14AgNwgylXWFfMZjstMEHaSotyt5YKaXrW8', '2018-07-31 03:30:47', '2018-10-16 03:54:52'),
(29, 1, 6, 'Sekretaris Program Studi', 'sekprodi_stast', 'sekprodi_stat@gmail.com', '$2y$10$RX0PRYW5Uju81IDN1WvZeONVzwG7g5ZbUWi7hfGB/V5bXKWjxCQuC', NULL, '2018-08-23 22:36:36', '2018-08-23 22:36:36'),
(30, 1, 8, 'Komisi Pendidikan', 'komdik_stat', 'komdik_stat@gmail.com', '$2y$10$r2PPAkYuP0UOxgcwY214d.6K4NGy0i/bX2GxXtisa7UCJ0FkCRmjC', NULL, '2018-08-23 22:39:54', '2018-08-23 22:39:54'),
(31, 2, 3, 'Ketua Program Studi', 'kaprodi_gfm', 'kaprodi_gfm@gmail.com', '$2y$10$uBtLnvPDQ/6Ojg/3UCTVDeovqhMDAj0VCzLD07i2eY.tFRtJijTb6', NULL, '2018-08-23 22:45:54', '2018-08-23 22:45:54'),
(32, 2, 4, 'Ketua Departemen', 'kadep_gfm', 'kadep_gfm@gmail.com', '$2y$10$BUVYfNQBWRNMNUCQVfLY2OWLTtLOIGE4UI3tXPok4TtdEUz6yMTDq', NULL, '2018-08-23 22:46:48', '2018-08-23 22:46:48'),
(33, 2, 5, 'Sekretaris Departemen', 'sekdep_gfm', 'sekdep_gfm@gmail.com', '$2y$10$C0JXwTBWc6U.dJCxgTxbjePnoSqVfjFxJsGmR6BW3sM8txGQq1ysm', NULL, '2018-08-23 22:47:38', '2018-08-23 22:47:38'),
(34, 2, 6, 'Sekretaris Program Studi', 'sekprodi_gfm', 'sekprodi_gfm@gmail.com', '$2y$10$HVVeMCjPRRysiRNyt6x2gu1xjwjDZNcr6fhnCA5OMlY.FMmuG.Enq', NULL, '2018-08-23 22:48:30', '2018-08-23 22:48:30'),
(35, 2, 7, 'Bendahara', 'bendahara_gfm', 'bendahara_gfm@gmail.com', '$2y$10$6kB5ujWL8GoQ8dWT95/0yeCWr9FVzf9UXa7RDVt549OIqdxmmCbmG', NULL, '2018-08-23 22:49:15', '2018-08-23 22:49:15'),
(36, 2, 8, 'Komisi Pendidikan', 'komdik_gfm', 'komdik_gfm@gmail.com', '$2y$10$xYHrDAW8e5HYa1rHY.EC7ui5e/Lf7zLeXObiWwheYoym.4sYlMdTe', NULL, '2018-08-23 22:49:56', '2018-08-23 22:49:56'),
(37, 3, 3, 'Ketua Program Studi', 'kaprodi_bio', 'kaprodi_bio@gmail.com', '$2y$10$AuBtZ266bZnDnReFckuZxOVByb1MxPZLx/dnUQdJgHR0yTI7h0Gr.', NULL, '2018-08-23 22:53:51', '2018-08-23 22:53:51'),
(38, 3, 4, 'Ketua Departemen', 'kadep_bio', 'kadep_bio@gmail.com', '$2y$10$xCjWr3Fqc18rnphXEwsTo.ejy3.T7Wt0zuhYK/rskTpW6QUYTn/Ei', NULL, '2018-08-23 22:54:46', '2018-08-23 22:54:46'),
(39, 3, 5, 'Sekretaris Departemen', 'sekdep_bio', 'sekdep_bio@gmail.com', '$2y$10$.eEfmqbQ2AYgQ10yuM/MnOWg8d01r7VNkM98jbmptNB3bJH7fQZBW', NULL, '2018-08-23 22:55:29', '2018-08-23 22:55:29'),
(40, 3, 6, 'Sekretaris Program Studi', 'sekprodi_bio', 'sekprodi_bio@gmail.com', '$2y$10$LjE5.SY9g3ue.qCUK/E3ou5.D/oxKIg1xGiheRVXj6sppXnC7SY4u', NULL, '2018-08-23 22:56:20', '2018-08-23 22:56:20'),
(41, 3, 7, 'Bendahara', 'bendahara_bio', 'bendahara_bio@gmail.com', '$2y$10$LTYUfZV3hwqYaAl2HqFHveuWxJ97CFZJ0xWYi1qcWC5J/kv3E3T1a', NULL, '2018-08-23 22:57:01', '2018-08-23 22:57:01'),
(42, 3, 8, 'Komisi Pendidikan', 'komdik_bio', 'komdik_bio@gmail.com', '$2y$10$w.GX.4MN.NyR5Ev8zIS3uezzpUqFRnF30i6uW53jsoDLxAnRZ7aJe', NULL, '2018-08-23 22:57:36', '2018-08-23 22:57:36'),
(43, 4, 3, 'Ketua Program Studi', 'kaprodi_kim', 'kaprodi_kim@gmail.com', '$2y$10$/2gHx3HfDZYN2JLktfT3R.lcv7WsPAuXRbxFquLXWicjfTxGKQ/Om', NULL, '2018-08-23 23:00:00', '2018-08-23 23:00:00'),
(44, 4, 4, 'Ketua Departemen', 'kadep_kim', 'kadep_kim@gmail.com', '$2y$10$LSCNyMsjqdnJN3kYvz51nOrgTQBenwhGMFwSl/8sPw.GzotVoRdbS', NULL, '2018-08-23 23:00:39', '2018-08-23 23:00:39'),
(45, 4, 5, 'Sekretaris Departemen', 'sekdep_kim', 'sekdep_kim@gmail.com', '$2y$10$ZS8GT8vyLF2OF5zVf0ziluL/Yugn6kfbX7JfoD/O8M87QeCo1EKLS', NULL, '2018-08-23 23:01:19', '2018-08-23 23:01:19'),
(46, 4, 6, 'Sekretaris Program Studi', 'sekprodi_kim', 'sekprodi_kim@gmail.com', '$2y$10$ze4am3HCTn0PLCLwjxgt3eou/i2qYPJUbRW3jBk3U6KPx9SQii62u', NULL, '2018-08-23 23:02:01', '2018-08-23 23:02:01'),
(47, 4, 7, 'Bendahara', 'bendahara_kim', 'bendahara_kim@gmail.com', '$2y$10$R.jpzk1PZhZYi8.mwJ2WSODlNfau8JP8hxpBwgmlJYVAV5GD3OHne', NULL, '2018-08-23 23:02:32', '2018-08-23 23:02:32'),
(48, 4, 8, 'Komisi Pendidikan', 'komdik_kim', 'komdik_kim@gmail.com', '$2y$10$9dq51cNMqlREAbEBo4E9Seds.M.qFDy6zHeln0sRC6WC6c1uZESNO', NULL, '2018-08-23 23:03:06', '2018-08-23 23:03:06'),
(49, 5, 3, 'Kaprodi', 'kaprodi_mtk', 'kaprodi_mtk@gmail.com', '$2y$10$Jp30GFRPXCwM92eeW0C3nOG1dtc47PDc2EFlAl8bcz8XqkMYYgMIe', NULL, '2018-08-23 23:05:56', '2018-08-23 23:05:56'),
(50, 5, 4, 'Kadep', 'kadep_mtk', 'kadep_mtk@gmail.com', '$2y$10$MFMgJDeE/U7Vx5w567BKU.7YNOzPT8wLMndKAyzlsHev6ABBWm8MW', NULL, '2018-08-23 23:06:44', '2018-08-23 23:06:44'),
(51, 5, 5, 'SekDep', 'sekdep_mtk', 'sekdep_mtk@gmail.com', '$2y$10$VgZk9zrVrcalN5yIXRMrJ.of.xuvvwudZ.P0sGkbijC1yj7ELWYuG', NULL, '2018-08-23 23:07:25', '2018-08-23 23:07:25'),
(52, 5, 6, 'SekProdi', 'sekprodi_mtk', 'sekprodi_mtk@gmail.com', '$2y$10$ncYU7vAYchFGKj.ZaEcGZu71kvXrbzvjZzExnEf/k.d5P.uG1RvAa', NULL, '2018-08-23 23:08:07', '2018-08-23 23:08:07'),
(53, 5, 7, 'Bendahara', 'bendahara_mtk', 'bendahara_mtk@gmail.com', '$2y$10$NUhol6I6xrKP1CC5Y06XouPqC4qBcY/VP1mcNaOjJOXtrtJOP2DEu', NULL, '2018-08-23 23:08:54', '2018-08-23 23:08:54'),
(54, 5, 8, 'Komdik', 'komdik_mtk', 'komdik_mtk@gmail.com', '$2y$10$1F8k23xeaGUDuPVNhVlb8OuePwqPmETzXi1kfgb6bpaxdXItO.GJ.', NULL, '2018-08-23 23:09:23', '2018-08-23 23:09:23'),
(56, 7, 3, 'Kaprodi', 'kaprodi_fis', 'kaprodi_fis@gmail.com', '$2y$10$gmeNmOOitlhb2OqMG16Ot.1xLDHOH.elXu0wxR/ALQsBjUAvWTwwW', NULL, '2018-08-23 23:15:10', '2018-08-23 23:15:10'),
(57, 7, 4, 'Kadep', 'kadep_fis', 'kadep_fis@gmail.com', '$2y$10$cD/tyL1qvv0bsx8oAWost.bolcOEm66sKtg/kQiMoEO1JHo4fq4Ka', NULL, '2018-08-23 23:15:47', '2018-08-23 23:15:47'),
(58, 7, 5, 'SekDep', 'sekdep_fis', 'sekdep_fis@gmail.com', '$2y$10$JsvdbR2FOD5/06gSDqQVSea29jZWlijv5oUSsHpA9JzTdiiKHy5qW', NULL, '2018-08-23 23:16:39', '2018-08-23 23:16:39'),
(59, 7, 6, 'SekProdi', 'sekprodi_fis', 'sekprodi_fis@gmail.com', '$2y$10$P8G8w9HLo5lLaCSqUKTC3OKF637dvW/BFOadEBxbUJKuaJYcNtM8u', NULL, '2018-08-23 23:17:14', '2018-08-23 23:17:14'),
(60, 7, 7, 'Bendahara', 'bendahara_fis', 'bendahara_fis@gmail.com', '$2y$10$FfzfXKS4SlMY7WTt91M8VueX60jXkdECBMWVDmYS0zjAZ6pwhlMti', NULL, '2018-08-23 23:17:54', '2018-08-23 23:17:54'),
(61, 7, 8, 'Komdik', 'komdik_fis', 'komdik_fis@gmail.com', '$2y$10$W5X2oC1ZNXrwsAI7x.9bbOThR6xkmLLsaZ/SUO0SaY4iueKFHUFdO', NULL, '2018-08-23 23:18:22', '2018-08-23 23:18:22'),
(62, 8, 3, 'KaProdi', 'kaprodi_bik', 'kaprodi_bik@gmail.com', '$2y$10$23Kw38LpaVq/87hDe/oho./AZIRAWQt58o5BPm1qIeUvnbyHXGv9y', NULL, '2018-08-23 23:33:38', '2018-08-23 23:33:38'),
(63, 8, 4, 'KaDep', 'kadep_bik', 'kadep_bik@gmail.com', '$2y$10$0glr72fjArtOPS88k/6CFu1V39Dj/aepwaSahRNmNk7AM0.TIgfai', NULL, '2018-08-23 23:34:28', '2018-08-23 23:34:28'),
(64, 8, 5, 'SekDep', 'sekdep_bik', 'sekdep_bik@gmail.com', '$2y$10$OrItuzUN9uDTkzkxLricheMCs5zemXmmpWg6KIHxpH.yg6zmeOkeq', NULL, '2018-08-23 23:35:03', '2018-08-23 23:35:03'),
(65, 8, 6, 'SekProdi', 'sekprodi_bik', 'sekprodi_bik@gmail.com', '$2y$10$b69qTOyTAgUEYG3pNcXVD.h.5P/s1u793CpXOzVfAwTic/gKK7ZJW', NULL, '2018-08-23 23:35:49', '2018-08-23 23:35:49'),
(66, 8, 7, 'Bendahara', 'bendahara_bik', 'bendahara_bik@gmail.com', '$2y$10$.ExmxXt7dKMnY5oAhtswmu6xTP23F7fIgoW2A04jFJGPd.rFPBTsO', NULL, '2018-08-23 23:36:22', '2018-08-23 23:36:22'),
(67, 8, 8, 'Komdik', 'komdik_bik', 'komdik_bik@gmail.com', '$2y$10$ZB8mcwEVYo5L1Nj0RcdyluiNUVCmZE4c95zhiRTTKm6FwlLuStSPy', NULL, '2018-08-23 23:36:49', '2018-08-23 23:36:49'),
(68, 9, 3, 'Kaprodi', 'kaprodi_akt', 'kaprodi_akt@gmail.com', '$2y$10$0UqwLLthyYsIo0kbsMAOLOYG1cGbIsgyWc9AUGZTmzrxdcfMilFEK', NULL, '2018-08-23 23:39:48', '2018-08-23 23:39:48'),
(69, 9, 4, 'Kadep', 'kadep_akt', 'kadep_akt@gmail.com', '$2y$10$CbCHlPdeJfhO4g.Mmb52POCiNVF3eituV4olc.XRklPJ/0WPyU4xS', NULL, '2018-08-23 23:40:25', '2018-08-23 23:40:25'),
(70, 9, 5, 'Sekdep', 'sekdep_akt', 'sekdep_akt@gmail.com', '$2y$10$xmu.bc77gJQdOT0/oszXku2Jrc/gNKM/a/yuBEjDk2wDrgpqNJCum', NULL, '2018-08-23 23:41:09', '2018-08-23 23:41:09'),
(71, 9, 6, 'Sekprodi', 'sekprodi_akt', 'sekprodi_akt@gmail.com', '$2y$10$r4metkw6JsFsCISGZ.B.Iuag3fTHs/XrcAjJa9BGLHGLjYNLX/5gS', NULL, '2018-08-23 23:41:44', '2018-08-23 23:41:44'),
(72, 9, 7, 'Bendahara', 'bendahara_akt', 'bendahara_akt@gmail.com', '$2y$10$LM2rkNSaUhy.RtumfLQMNOLoVqJMVETtwRPFJuKCYJ.Eakw5qGl4W', NULL, '2018-08-23 23:42:20', '2018-08-23 23:42:20'),
(73, 9, 8, 'Komdik', 'komdik_akt', 'komdik_akt@gmail.com', '$2y$10$l7Ic/1p4IHZg6uts8j0KBe3Bx.BXZl5cxw9aVKObVwrAK.ma5JZL6', NULL, '2018-08-23 23:42:46', '2018-08-23 23:42:46'),
(74, 10, 8, 'bendahara', 'bendahara_mipa', 'bendahara_mipa@gmail.com', '$2y$10$dU/yaB4Blf4Ipwn.euvXCuWz49YtmsyJOy0TpiM7mhlcjHfMUSbnK', 'CQ5lzds6oenVe3F2g6XKeqBNifGWYMWnM9H9XMwUBUPsgIQoMkQ1T5FBBis9', '2018-08-28 03:12:20', '2018-10-16 08:29:57'),
(75, 10, 12, 'Perpus', 'perpustakaan_mipa', 'perpustakaan_mipa@gmail.com', '$2y$10$nu97s0XnQ7PiwQ1WyyjhaOPqWO1zUK9VegoNXEu1h0HykARPmSERy', '6yT93bB3xkDSVCQZycHtj8cZ5z39tL6HnNXNlVfSVag2yRy3j0qqxl7FrYTa', '2018-09-15 19:44:29', '2018-09-15 19:44:29'),
(76, 10, 11, 'kepegawaian', 'kepegawaian_mipa', 'kepegawaian_mipa@gmail.com', '$2y$10$fl8c1dN9C2eoLDAl4hULU.9nFL1CqspE/INRWmL9EXQ68vkrsEd/W', 'xuLrPzfi3Pm48dY5HkgBVZ3oEZ5fkcltUvjPxJUGoEtMeeYuzm4wtva4mq6k', '2018-09-15 19:58:14', '2018-09-15 19:58:14'),
(78, 10, 10, 'pendidikan', 'pendidikan', 'pendidikan_mipa@gmail.com', '$2y$10$VP1mvncuGtapuxkSzDhAR.fnpbIZ.cFj1.dCrcfOxgIqyjLUId452', '0Qo6atRMIC5KEPbWCREToEBYb3drHV7GCaZsTgedIM4QodAXERtGTmEf9r4X', '2018-09-16 18:09:20', '2018-10-16 08:36:12'),
(79, 1, 7, 'Pengeloa Keuangan Unit', 'PKU', 'pku_stat@gmail.com', '$2y$10$.Pp2xJscFBtltAZDoEG0s.9Sv/hQf4wihoKXe8yU6b7lUEl0viiG2', 'NgMQGsczcY6HmEiO2toCe7qizGHSmtnk6V85YULJipRAqQsmCDkhpcNOCHmV', '2018-09-26 00:45:31', '2018-09-26 00:45:31'),
(80, 6, 6, 'Adm Akademik', 'adm_akademik', 'adm_akademik_kom@gmail.com', '$2y$10$Vy/HxkG4/fYLE95r./TDPOYxcC1nIuyTx9Kort5mTNYl/9TgtNeQS', 'gfBCt5M1UBsqHvKmmdDmFu8m2DRKYnPDrqf8XfGWqXTwz0OHWySsof2ZBFkF', '2018-10-01 23:57:11', '2018-10-27 22:02:36'),
(81, 10, 9, 'ktu_mipa', 'ktu_mipa', 'ktu_mipa@gmail.com', '$2y$10$jkCubIqT8X6CJTeyk2KvJOKYk6so9jQMjo9cVDrPaDXmtmBzSA6sm', 'kkipI68pC3Q8wY1PpuXF8uOxIfDBgtq1cwjMD1rm2E8d4PNiF2FIgfa6PDlW', '2018-10-16 08:31:01', '2018-10-16 08:31:01'),
(82, 6, 3, 'standar 1', 'standar_1_kom', 'standar1_kom@gmail.com', '$2y$10$piboBNO1PSMMXxquOhiohOcud9OrolsQ77zOrGqqHO8LBzw93wgVu', 'cOWKVhSJOUQT4w1UM6wiB4R6kB1rK6GoKvMmF8djB7KqFbV2pV9LBqdV21yB', '2018-11-30 10:33:12', '2018-12-25 11:46:59'),
(83, 10, 3, 'standar 1', 'standar_1', 'standar1_mipa@gmail.com', '$2y$10$I2TUCSsAZJWssF3W38r.aesrBI9oacTKVYJFAvpKJ1FJax22gSHUa', 'NRc5JYMApldk8teROkr184dRMmvKVC49pzZYINhOSNlGjhkNBhCngnK2rRzr', '2018-12-03 20:57:02', '2018-12-25 02:04:00'),
(84, 6, 14, 'super user', 'super_user', 'super_user_kom@gmail.com', '$2y$10$1XCfSEHgNfri746Kq5nPcOSvWOAw9/GH..ZE17jd008JcMRY4QXIG', 'YUaQLevelUtIGVf4XBFwLiJ6dQCx06HcNvujGm08i5gGrwMU0FPzVDSTrBf6', '2018-12-16 11:05:40', '2018-12-16 11:05:40'),
(85, 10, 14, 'super user', 'super_user_mipa', 'super_user_mipa@gmail.com', '$2y$10$W3r2zsa71yvD9KPtyNPTGuUQDNHApSohJ1zK2yPYaeu.33lU900wG', 'YEOAdP1aW0CabmIAbBblgtZEr7gvdLNoBky4ruhl9142MsBHg2sW5Ml6yDdF', '2018-12-16 14:01:48', '2018-12-16 14:01:48'),
(90, 10, 4, 'standar 2', 'standar_2_mipa', 'standar2_mipa@gmail.com', '$2y$10$EEHa8rswC/1eiRQQiSznJu5nIyFcufDyViylqxkdHNVMGvmWxBWIu', 'CcShANd3wjQLi03b88t3cvuSxYumcDpd2pHGJ0pxa2g1V8cbINydpKzdzEK5', '2018-12-25 02:08:38', '2018-12-25 02:10:01'),
(91, 10, 6, 'standar 3', 'standar_3_mipa', 'standar3_mipa@gmail.com', '$2y$10$ecNUoBORPPASnm2ukUeW5.3awiO3b1cEsGneuYd2sL5TFCblyHLFa', 'EFcFKr8GPKDqrDWSypppWVsOxreaTL4SgL5to4UfkR4xc9BIWSiX9rXHv0FG', '2018-12-25 12:56:15', '2018-12-25 12:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `vmts`
--

CREATE TABLE `vmts` (
  `id_vmts` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `visimisi` text NOT NULL,
  `tahun_awal` date NOT NULL,
  `tahun_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vmts`
--

INSERT INTO `vmts` (`id_vmts`, `id_departemen`, `visimisi`, `tahun_awal`, `tahun_selesai`) VALUES
(1, 3, '<p>1.1 Visi, Misi, Tujuan, dan Sasaran serta Strategi Pencapaian</p>\r\n<p>1.1.1 Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak-pihak yang dilibatkan.</p>\r\n<ul>\r\n<li>&nbsp; &nbsp; &nbsp; &nbsp;Belum tersedia di <span style=\"font-family: arial, helvetica, sans-serif;\">website</span> ilmu komputer</li>\r\n</ul>\r\n<p>1.1.2&nbsp; Visi</p>\r\n<p>Pada tahun 2020 menjadi departemen terkemuka sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional</p>\r\n<p><br />1.1.3 Misi</p>\r\n<ul>\r\n<li>Menyelenggarakan pendidikan dan penelitian yang bermutu untuk menghasilkan lulusan yang handal, responsif, adaptif dan inovatif terhadap ilmu, metode, dan alat bantu dalam bidang ilmu dan teknologi komputer yang berperan dalam mewujudkan pertanian modern khususnya dan bidang lain pada umumnya serta memiliki jiwa kewirausahaan;</li>\r\n<li>Berperan aktif dalam pengembangan ilmu, metode, dan alat bantu dalam bidang ilmu komputer dan teknologi komputer melalui penelitian mutakhir;</li>\r\n<li>Berperan aktif dalam penyebarluasan ilmu, metode, dan alat bantu dalam bidang ilmu komputer serta penerapannya melalui publikasi ilmiah baik dalam bentuk jurnal maupun seminar ilmiah, kerjasama dan pengabdian kepada masyarakat.</li>\r\n</ul>\r\n<p>1.1.4&nbsp; Tujuan</p>\r\n<p>&nbsp; &nbsp; &nbsp;&nbsp;Tujuan Program Studi Ilmu Komputer FMIPA IPB adalah :</p>\r\n<ol>\r\n<li>Menghasilkan sumber daya manusia yang berkualitas di bidang ilmu dan teknologi komputer dan :</li>\r\n</ol>\r\n<ol>\r\n<li>Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.</li>\r\n<li>Mampu mengikuti program pendidikan lanjut dalam bidang komputer atau bidang ilmu lain yang memerlukan penguasaan metode kuantitatif dan algoritmik yang kuat</li>\r\n</ol>\r\n<p>1.1.5&nbsp; Sasaran dan Strategi Pencapaiannya</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ilmu Komputer</p>\r\n<table style=\"border-collapse: collapse; width: 74.3547%; height: 107px;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>1.2&nbsp; Sosialisasi</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Uraikan upaya penyebaran/sosialisasi visi, misi dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-12-03', '2023-12-09'),
(2, 4, '<p>1.1 Visi, Misi, Tujuan, dan Sasaran serta Strategi Pencapaian</p>\r\n<p>1.1.1 Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak-pihak yang dilibatkan.</p>\r\n<ul>\r\n<li>&nbsp; &nbsp; &nbsp; &nbsp;Belum tersedia di <span style=\"font-family: arial, helvetica, sans-serif;\">website</span> ilmu komputer</li>\r\n</ul>\r\n<p>1.1.2&nbsp; Visi</p>\r\n<p>Pada tahun 2020 menjadi departemen terkemuka sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional</p>\r\n<p><br />1.1.3 Misi</p>\r\n<ul>\r\n<li>Menyelenggarakan pendidikan dan penelitian yang bermutu untuk menghasilkan lulusan yang handal, responsif, adaptif dan inovatif terhadap ilmu, metode, dan alat bantu dalam bidang ilmu dan teknologi komputer yang berperan dalam mewujudkan pertanian modern khususnya dan bidang lain pada umumnya serta memiliki jiwa kewirausahaan;</li>\r\n<li>Berperan aktif dalam pengembangan ilmu, metode, dan alat bantu dalam bidang ilmu komputer dan teknologi komputer melalui penelitian mutakhir;</li>\r\n<li>Berperan aktif dalam penyebarluasan ilmu, metode, dan alat bantu dalam bidang ilmu komputer serta penerapannya melalui publikasi ilmiah baik dalam bentuk jurnal maupun seminar ilmiah, kerjasama dan pengabdian kepada masyarakat.</li>\r\n</ul>\r\n<p>1.1.4&nbsp; Tujuan</p>\r\n<p>&nbsp; &nbsp; &nbsp;&nbsp;Tujuan Program Studi Ilmu Komputer FMIPA IPB adalah :</p>\r\n<ol>\r\n<li>Menghasilkan sumber daya manusia yang berkualitas di bidang ilmu dan teknologi komputer dan :</li>\r\n</ol>\r\n<ol>\r\n<li>Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.</li>\r\n<li>Mampu mengikuti program pendidikan lanjut dalam bidang komputer atau bidang ilmu lain yang memerlukan penguasaan metode kuantitatif dan algoritmik yang kuat</li>\r\n</ol>\r\n<p>1.1.5&nbsp; Sasaran dan Strategi Pencapaiannya</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ilmu Komputer</p>\r\n<table style=\"border-collapse: collapse; width: 74.3547%; height: 107px;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>1.2&nbsp; Sosialisasi</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Uraikan upaya penyebaran/sosialisasi visi, misi dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-12-03', '2023-12-09'),
(3, 5, '<p>1.1 Visi, Misi, Tujuan, dan Sasaran serta Strategi Pencapaian</p>\r\n<p>1.1.1 Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak-pihak yang dilibatkan.</p>\r\n<ul>\r\n<li>&nbsp; &nbsp; &nbsp; &nbsp;Belum tersedia di <span style=\"font-family: arial, helvetica, sans-serif;\">website</span> ilmu komputer</li>\r\n</ul>\r\n<p>1.1.2&nbsp; Visi</p>\r\n<p>Pada tahun 2020 menjadi departemen terkemuka sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional</p>\r\n<p><br />1.1.3 Misi</p>\r\n<ul>\r\n<li>Menyelenggarakan pendidikan dan penelitian yang bermutu untuk menghasilkan lulusan yang handal, responsif, adaptif dan inovatif terhadap ilmu, metode, dan alat bantu dalam bidang ilmu dan teknologi komputer yang berperan dalam mewujudkan pertanian modern khususnya dan bidang lain pada umumnya serta memiliki jiwa kewirausahaan;</li>\r\n<li>Berperan aktif dalam pengembangan ilmu, metode, dan alat bantu dalam bidang ilmu komputer dan teknologi komputer melalui penelitian mutakhir;</li>\r\n<li>Berperan aktif dalam penyebarluasan ilmu, metode, dan alat bantu dalam bidang ilmu komputer serta penerapannya melalui publikasi ilmiah baik dalam bentuk jurnal maupun seminar ilmiah, kerjasama dan pengabdian kepada masyarakat.</li>\r\n</ul>\r\n<p>1.1.4&nbsp; Tujuan</p>\r\n<p>&nbsp; &nbsp; &nbsp;&nbsp;Tujuan Program Studi Ilmu Komputer FMIPA IPB adalah :</p>\r\n<ol>\r\n<li>Menghasilkan sumber daya manusia yang berkualitas di bidang ilmu dan teknologi komputer dan :</li>\r\n</ol>\r\n<ol>\r\n<li>Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.</li>\r\n<li>Mampu mengikuti program pendidikan lanjut dalam bidang komputer atau bidang ilmu lain yang memerlukan penguasaan metode kuantitatif dan algoritmik yang kuat</li>\r\n</ol>\r\n<p>1.1.5&nbsp; Sasaran dan Strategi Pencapaiannya</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ilmu Komputer</p>\r\n<table style=\"border-collapse: collapse; width: 74.3547%; height: 107px;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>1.2&nbsp; Sosialisasi</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Uraikan upaya penyebaran/sosialisasi visi, misi dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-12-03', '2023-12-09'),
(5, 6, '<p style=\"text-align: justify;\"><strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1.1 Visi, Misi, Tujuan, dan Sasaran serta Strategi Pencapaian</span></strong></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1.1.1 Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak-pihak yang dilibatkan.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&nbsp; &nbsp; &nbsp; &nbsp;Belum tersedia di website ilmu komputer</span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1.1.2&nbsp; Visi</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada tahun 2020 menjadi departemen terkemuka sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1.1.3 Misi</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Menyelenggarakan pendidikan dan penelitian yang bermutu untuk menghasilkan lulusan yang handal, responsif, adaptif dan inovatif terhadap ilmu, metode, dan alat bantu dalam bidang ilmu dan teknologi komputer yang berperan dalam mewujudkan pertanian modern khususnya dan bidang lain pada umumnya serta memiliki jiwa kewirausahaan;</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berperan aktif dalam pengembangan ilmu, metode, dan alat bantu dalam bidang ilmu komputer dan teknologi komputer melalui penelitian mutakhir;</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berperan aktif dalam penyebarluasan ilmu, metode, dan alat bantu dalam bidang ilmu komputer serta penerapannya melalui publikasi ilmiah baik dalam bentuk jurnal maupun seminar ilmiah, kerjasama dan pengabdian kepada masyarakat.</span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1.1.4&nbsp; Tujuan</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&nbsp; &nbsp; &nbsp;&nbsp;Tujuan Program Studi Ilmu Komputer FMIPA IPB adalah :</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Menghasilkan sumber daya manusia yang berkualitas di bidang ilmu dan teknologi komputer dan :</span></li>\r\n</ol>\r\n<ol>\r\n<li style=\"list-style-type: none;\">\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Mampu mengikuti program pendidikan lanjut dalam bidang komputer atau bidang ilmu lain yang memerlukan penguasaan metode kuantitatif dan algoritmik yang kuat</span></li>\r\n</ol>\r\n</li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1.1.5&nbsp; Sasaran dan Strategi Pencapaiannya</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ilmu Komputer</span></p>\r\n<table style=\"border-collapse: collapse; width: 74.3547%; height: 107px;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt; text-align: justify;\">1.2&nbsp; Sosialisasi</span></strong></p>', '2018-12-03', '2023-12-09'),
(7, 7, '<p>1.1 Visi, Misi, Tujuan, dan Sasaran serta Strategi Pencapaian</p>\r\n<p>1.1.1 Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak-pihak yang dilibatkan.</p>\r\n<ul>\r\n<li>&nbsp; &nbsp; &nbsp; &nbsp;Belum tersedia di <span style=\"font-family: arial, helvetica, sans-serif;\">website</span> ilmu komputer</li>\r\n</ul>\r\n<p>1.1.2&nbsp; Visi</p>\r\n<p>Pada tahun 2020 menjadi departemen terkemuka sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional</p>\r\n<p><br />1.1.3 Misi</p>\r\n<ul>\r\n<li>Menyelenggarakan pendidikan dan penelitian yang bermutu untuk menghasilkan lulusan yang handal, responsif, adaptif dan inovatif terhadap ilmu, metode, dan alat bantu dalam bidang ilmu dan teknologi komputer yang berperan dalam mewujudkan pertanian modern khususnya dan bidang lain pada umumnya serta memiliki jiwa kewirausahaan;</li>\r\n<li>Berperan aktif dalam pengembangan ilmu, metode, dan alat bantu dalam bidang ilmu komputer dan teknologi komputer melalui penelitian mutakhir;</li>\r\n<li>Berperan aktif dalam penyebarluasan ilmu, metode, dan alat bantu dalam bidang ilmu komputer serta penerapannya melalui publikasi ilmiah baik dalam bentuk jurnal maupun seminar ilmiah, kerjasama dan pengabdian kepada masyarakat.</li>\r\n</ul>\r\n<p>1.1.4&nbsp; Tujuan</p>\r\n<p>&nbsp; &nbsp; &nbsp;&nbsp;Tujuan Program Studi Ilmu Komputer FMIPA IPB adalah :</p>\r\n<ol>\r\n<li>Menghasilkan sumber daya manusia yang berkualitas di bidang ilmu dan teknologi komputer dan :</li>\r\n</ol>\r\n<ol>\r\n<li>Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.</li>\r\n<li>Mampu mengikuti program pendidikan lanjut dalam bidang komputer atau bidang ilmu lain yang memerlukan penguasaan metode kuantitatif dan algoritmik yang kuat</li>\r\n</ol>\r\n<p>1.1.5&nbsp; Sasaran dan Strategi Pencapaiannya</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ilmu Komputer</p>\r\n<table style=\"border-collapse: collapse; width: 74.3547%; height: 107px;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>1.2&nbsp; Sosialisasi</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Uraikan upaya penyebaran/sosialisasi visi, misi dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-12-03', '2023-12-09'),
(8, 8, '<p>1.1 Visi, Misi, Tujuan, dan Sasaran serta Strategi Pencapaian</p>\r\n<p>1.1.1 Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak-pihak yang dilibatkan.</p>\r\n<ul>\r\n<li>&nbsp; &nbsp; &nbsp; &nbsp;Belum tersedia di <span style=\"font-family: arial, helvetica, sans-serif;\">website</span> ilmu komputer</li>\r\n</ul>\r\n<p>1.1.2&nbsp; Visi</p>\r\n<p>Pada tahun 2020 menjadi departemen terkemuka sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional</p>\r\n<p><br />1.1.3 Misi</p>\r\n<ul>\r\n<li>Menyelenggarakan pendidikan dan penelitian yang bermutu untuk menghasilkan lulusan yang handal, responsif, adaptif dan inovatif terhadap ilmu, metode, dan alat bantu dalam bidang ilmu dan teknologi komputer yang berperan dalam mewujudkan pertanian modern khususnya dan bidang lain pada umumnya serta memiliki jiwa kewirausahaan;</li>\r\n<li>Berperan aktif dalam pengembangan ilmu, metode, dan alat bantu dalam bidang ilmu komputer dan teknologi komputer melalui penelitian mutakhir;</li>\r\n<li>Berperan aktif dalam penyebarluasan ilmu, metode, dan alat bantu dalam bidang ilmu komputer serta penerapannya melalui publikasi ilmiah baik dalam bentuk jurnal maupun seminar ilmiah, kerjasama dan pengabdian kepada masyarakat.</li>\r\n</ul>\r\n<p>1.1.4&nbsp; Tujuan</p>\r\n<p>&nbsp; &nbsp; &nbsp;&nbsp;Tujuan Program Studi Ilmu Komputer FMIPA IPB adalah :</p>\r\n<ol>\r\n<li>Menghasilkan sumber daya manusia yang berkualitas di bidang ilmu dan teknologi komputer dan :</li>\r\n</ol>\r\n<ol>\r\n<li>Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.</li>\r\n<li>Mampu mengikuti program pendidikan lanjut dalam bidang komputer atau bidang ilmu lain yang memerlukan penguasaan metode kuantitatif dan algoritmik yang kuat</li>\r\n</ol>\r\n<p>1.1.5&nbsp; Sasaran dan Strategi Pencapaiannya</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ilmu Komputer</p>\r\n<table style=\"border-collapse: collapse; width: 74.3547%; height: 107px;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>1.2&nbsp; Sosialisasi</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Uraikan upaya penyebaran/sosialisasi visi, misi dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-12-03', '2023-12-09'),
(9, 9, '<p>1.1 Visi, Misi, Tujuan, dan Sasaran serta Strategi Pencapaian</p>\r\n<p>1.1.1 Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak-pihak yang dilibatkan.</p>\r\n<ul>\r\n<li>&nbsp; &nbsp; &nbsp; &nbsp;Belum tersedia di <span style=\"font-family: arial, helvetica, sans-serif;\">website</span> ilmu komputer</li>\r\n</ul>\r\n<p>1.1.2&nbsp; Visi</p>\r\n<p>Pada tahun 2020 menjadi departemen terkemuka sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional</p>\r\n<p><br />1.1.3 Misi</p>\r\n<ul>\r\n<li>Menyelenggarakan pendidikan dan penelitian yang bermutu untuk menghasilkan lulusan yang handal, responsif, adaptif dan inovatif terhadap ilmu, metode, dan alat bantu dalam bidang ilmu dan teknologi komputer yang berperan dalam mewujudkan pertanian modern khususnya dan bidang lain pada umumnya serta memiliki jiwa kewirausahaan;</li>\r\n<li>Berperan aktif dalam pengembangan ilmu, metode, dan alat bantu dalam bidang ilmu komputer dan teknologi komputer melalui penelitian mutakhir;</li>\r\n<li>Berperan aktif dalam penyebarluasan ilmu, metode, dan alat bantu dalam bidang ilmu komputer serta penerapannya melalui publikasi ilmiah baik dalam bentuk jurnal maupun seminar ilmiah, kerjasama dan pengabdian kepada masyarakat.</li>\r\n</ul>\r\n<p>1.1.4&nbsp; Tujuan</p>\r\n<p>&nbsp; &nbsp; &nbsp;&nbsp;Tujuan Program Studi Ilmu Komputer FMIPA IPB adalah :</p>\r\n<ol>\r\n<li>Menghasilkan sumber daya manusia yang berkualitas di bidang ilmu dan teknologi komputer dan :</li>\r\n</ol>\r\n<ol>\r\n<li>Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.</li>\r\n<li>Mampu mengikuti program pendidikan lanjut dalam bidang komputer atau bidang ilmu lain yang memerlukan penguasaan metode kuantitatif dan algoritmik yang kuat</li>\r\n</ol>\r\n<p>1.1.5&nbsp; Sasaran dan Strategi Pencapaiannya</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ilmu Komputer</p>\r\n<table style=\"border-collapse: collapse; width: 74.3547%; height: 107px;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>1.2&nbsp; Sosialisasi</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Uraikan upaya penyebaran/sosialisasi visi, misi dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-12-03', '2023-12-09'),
(10, 10, '<p style=\"text-align: justify;\"><strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1.1 Visi, Misi, Tujuan, dan Sasaran serta Strategi Pencapaian</span></strong></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1.1.1 Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak-pihak yang dilibatkan.</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&nbsp;Belum tersedia di website ilmu komputer</span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1.1.2&nbsp; Visi</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Pada tahun 2020 menjadi departemen terkemuka sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1.1.3 Misi</span></p>\r\n<ul style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Menyelenggarakan pendidikan dan penelitian yang bermutu untuk menghasilkan lulusan yang handal, responsif, adaptif dan inovatif terhadap ilmu, metode, dan alat bantu dalam bidang ilmu dan teknologi komputer yang berperan dalam mewujudkan pertanian modern khususnya dan bidang lain pada umumnya serta memiliki jiwa kewirausahaan;</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berperan aktif dalam pengembangan ilmu, metode, dan alat bantu dalam bidang ilmu komputer dan teknologi komputer melalui penelitian mutakhir;</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Berperan aktif dalam penyebarluasan ilmu, metode, dan alat bantu dalam bidang ilmu komputer serta penerapannya melalui publikasi ilmiah baik dalam bentuk jurnal maupun seminar ilmiah, kerjasama dan pengabdian kepada masyarakat.</span></li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1.1.4&nbsp; Tujuan</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&nbsp; &nbsp; &nbsp;&nbsp;Tujuan Program Studi Ilmu Komputer FMIPA IPB adalah :</span></p>\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Menghasilkan sumber daya manusia yang berkualitas di bidang ilmu dan teknologi komputer dan :</span></li>\r\n</ol>\r\n<ol style=\"text-align: justify;\">\r\n<li style=\"list-style-type: none;\">\r\n<ol style=\"text-align: justify;\">\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.</span></li>\r\n<li><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">Mampu mengikuti program pendidikan lanjut dalam bidang komputer atau bidang ilmu lain yang memerlukan penguasaan metode kuantitatif dan algoritmik yang kuat</span></li>\r\n</ol>\r\n</li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1.1.5&nbsp; Sasaran dan Strategi Pencapaiannya</span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ilmu Komputer</span></p>\r\n<table style=\"border-collapse: collapse; width: 74.3547%; height: 107px;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\"><strong><span style=\"font-family: arial, helvetica, sans-serif; font-size: 10pt;\">1.2&nbsp; Sosialisasi</span></strong></p>', '2018-12-03', '2023-12-09'),
(15, 6, '<p>aaaaa</p>', '2008-12-03', '2013-12-09'),
(16, 2, '<p>1.1 Visi, Misi, Tujuan, dan Sasaran serta Strategi Pencapaian</p>\r\n<p>1.1.1 Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak-pihak yang dilibatkan.</p>\r\n<ul>\r\n<li>&nbsp; &nbsp; &nbsp; &nbsp;Belum tersedia di <span style=\"font-family: arial, helvetica, sans-serif;\">website</span> ilmu komputer</li>\r\n</ul>\r\n<p>1.1.2&nbsp; Visi</p>\r\n<p>Pada tahun 2020 menjadi departemen terkemuka sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional</p>\r\n<p><br />1.1.3 Misi</p>\r\n<ul>\r\n<li>Menyelenggarakan pendidikan dan penelitian yang bermutu untuk menghasilkan lulusan yang handal, responsif, adaptif dan inovatif terhadap ilmu, metode, dan alat bantu dalam bidang ilmu dan teknologi komputer yang berperan dalam mewujudkan pertanian modern khususnya dan bidang lain pada umumnya serta memiliki jiwa kewirausahaan;</li>\r\n<li>Berperan aktif dalam pengembangan ilmu, metode, dan alat bantu dalam bidang ilmu komputer dan teknologi komputer melalui penelitian mutakhir;</li>\r\n<li>Berperan aktif dalam penyebarluasan ilmu, metode, dan alat bantu dalam bidang ilmu komputer serta penerapannya melalui publikasi ilmiah baik dalam bentuk jurnal maupun seminar ilmiah, kerjasama dan pengabdian kepada masyarakat.</li>\r\n</ul>\r\n<p>1.1.4&nbsp; Tujuan</p>\r\n<p>&nbsp; &nbsp; &nbsp;&nbsp;Tujuan Program Studi Ilmu Komputer FMIPA IPB adalah :</p>\r\n<ol>\r\n<li>Menghasilkan sumber daya manusia yang berkualitas di bidang ilmu dan teknologi komputer dan :</li>\r\n</ol>\r\n<ol>\r\n<li>Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.</li>\r\n<li>Mampu mengikuti program pendidikan lanjut dalam bidang komputer atau bidang ilmu lain yang memerlukan penguasaan metode kuantitatif dan algoritmik yang kuat</li>\r\n</ol>\r\n<p>1.1.5&nbsp; Sasaran dan Strategi Pencapaiannya</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ilmu Komputer</p>\r\n<table style=\"border-collapse: collapse; width: 74.3547%; height: 107px;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>1.2&nbsp; Sosialisasi</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Uraikan upaya penyebaran/sosialisasi visi, misi dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-12-03', '2023-12-09'),
(17, 1, '<p>1.1 Visi, Misi, Tujuan, dan Sasaran serta Strategi Pencapaian</p>\r\n<p>1.1.1 Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak-pihak yang dilibatkan.</p>\r\n<ul>\r\n<li>&nbsp; &nbsp; &nbsp; &nbsp;Belum tersedia di <span style=\"font-family: arial, helvetica, sans-serif;\">website</span> ilmu komputer</li>\r\n</ul>\r\n<p>1.1.2&nbsp; Visi</p>\r\n<p>Pada tahun 2020 menjadi departemen terkemuka sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional</p>\r\n<p><br />1.1.3 Misi</p>\r\n<ul>\r\n<li>Menyelenggarakan pendidikan dan penelitian yang bermutu untuk menghasilkan lulusan yang handal, responsif, adaptif dan inovatif terhadap ilmu, metode, dan alat bantu dalam bidang ilmu dan teknologi komputer yang berperan dalam mewujudkan pertanian modern khususnya dan bidang lain pada umumnya serta memiliki jiwa kewirausahaan;</li>\r\n<li>Berperan aktif dalam pengembangan ilmu, metode, dan alat bantu dalam bidang ilmu komputer dan teknologi komputer melalui penelitian mutakhir;</li>\r\n<li>Berperan aktif dalam penyebarluasan ilmu, metode, dan alat bantu dalam bidang ilmu komputer serta penerapannya melalui publikasi ilmiah baik dalam bentuk jurnal maupun seminar ilmiah, kerjasama dan pengabdian kepada masyarakat.</li>\r\n</ul>\r\n<p>1.1.4&nbsp; Tujuan</p>\r\n<p>&nbsp; &nbsp; &nbsp;&nbsp;Tujuan Program Studi Ilmu Komputer FMIPA IPB adalah :</p>\r\n<ol>\r\n<li>Menghasilkan sumber daya manusia yang berkualitas di bidang ilmu dan teknologi komputer dan :</li>\r\n</ol>\r\n<ol>\r\n<li>Mampu mengembangkan dan memanfaatkan ilmu dan teknologi informasi dalam proses identifikasi masalah, pengolahan data dan informasi, serta pemecahan masalah dan pengambilan keputusan sesuai dengan prinsip-prinsip keilmuan dan kerekayasaan.</li>\r\n<li>Mampu mengikuti program pendidikan lanjut dalam bidang komputer atau bidang ilmu lain yang memerlukan penguasaan metode kuantitatif dan algoritmik yang kuat</li>\r\n</ol>\r\n<p>1.1.5&nbsp; Sasaran dan Strategi Pencapaiannya</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ilmu Komputer</p>\r\n<table style=\"border-collapse: collapse; width: 74.3547%; height: 107px;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n<td style=\"width: 25%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>1.2&nbsp; Sosialisasi</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Uraikan upaya penyebaran/sosialisasi visi, misi dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-12-03', '2023-12-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksesibilitas_data`
--
ALTER TABLE `aksesibilitas_data`
  ADD PRIMARY KEY (`id_akses_data`);

--
-- Indexes for table `aktivitas_dosen_sesuai_sks`
--
ALTER TABLE `aktivitas_dosen_sesuai_sks`
  ADD PRIMARY KEY (`id_aktivitas_dosen_sesuai_sks`);

--
-- Indexes for table `aktivitas_mengajar_dosen_diluar_ps`
--
ALTER TABLE `aktivitas_mengajar_dosen_diluar_ps`
  ADD PRIMARY KEY (`id_aktivitas_mengajar_dosen_diluar_ps`);

--
-- Indexes for table `aktivitas_mengajar_dosen_sesuai_ps`
--
ALTER TABLE `aktivitas_mengajar_dosen_sesuai_ps`
  ADD PRIMARY KEY (`id_aktivitas_mengajar_dosen_sesuai_ps`);

--
-- Indexes for table `aktivitas_mengajar_dosen_tidak_tetap`
--
ALTER TABLE `aktivitas_mengajar_dosen_tidak_tetap`
  ADD PRIMARY KEY (`id_aktivitas_mengajar_dosen_tidak_tetap`);

--
-- Indexes for table `alat_utama_lab_ps`
--
ALTER TABLE `alat_utama_lab_ps`
  ADD PRIMARY KEY (`id_alat_utama_lab`);

--
-- Indexes for table `bobot_sks`
--
ALTER TABLE `bobot_sks`
  ADD PRIMARY KEY (`id_bobot_sks`);

--
-- Indexes for table `bobot_tugas`
--
ALTER TABLE `bobot_tugas`
  ADD PRIMARY KEY (`id_bobot_tugas`);

--
-- Indexes for table `bukti_penelitian`
--
ALTER TABLE `bukti_penelitian`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indexes for table `bukti_pengabdian`
--
ALTER TABLE `bukti_pengabdian`
  ADD PRIMARY KEY (`id_buktiPeng`);

--
-- Indexes for table `capaian_prestasi`
--
ALTER TABLE `capaian_prestasi`
  ADD PRIMARY KEY (`id_capaian_prestasi`);

--
-- Indexes for table `contoh_soal_mk`
--
ALTER TABLE `contoh_soal_mk`
  ADD PRIMARY KEY (`id_conso`);

--
-- Indexes for table `daftar_ruang_kerja`
--
ALTER TABLE `daftar_ruang_kerja`
  ADD PRIMARY KEY (`id_ruang_kerja_dosen`);

--
-- Indexes for table `dana_dr_utk_pengabdian_msrkt`
--
ALTER TABLE `dana_dr_utk_pengabdian_msrkt`
  ADD PRIMARY KEY (`id_dana_pgbdn`);

--
-- Indexes for table `dana_utk_penelitian`
--
ALTER TABLE `dana_utk_penelitian`
  ADD PRIMARY KEY (`id_dana_penelitian`);

--
-- Indexes for table `data_dosen_tidak_tetap`
--
ALTER TABLE `data_dosen_tidak_tetap`
  ADD PRIMARY KEY (`id_data_dosen_tidak_tetap`);

--
-- Indexes for table `data_dosen_yang_bidangnya_diluar_ps`
--
ALTER TABLE `data_dosen_yang_bidangnya_diluar_ps`
  ADD PRIMARY KEY (`id_data_dosen_yang_bidangnya_diluar_ps`);

--
-- Indexes for table `data_dosen_yang_bidangnya_sesuai_ps`
--
ALTER TABLE `data_dosen_yang_bidangnya_sesuai_ps`
  ADD PRIMARY KEY (`id_data_dosen_yang_bidangnya_sesuai_ps`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_dept`);

--
-- Indexes for table `dokumen_dalam`
--
ALTER TABLE `dokumen_dalam`
  ADD PRIMARY KEY (`id_dokumenD`);

--
-- Indexes for table `dokumen_luar`
--
ALTER TABLE `dokumen_luar`
  ADD PRIMARY KEY (`id_dokumenL`);

--
-- Indexes for table `hardware`
--
ALTER TABLE `hardware`
  ADD PRIMARY KEY (`id_hardware`);

--
-- Indexes for table `hasil_pendidikan`
--
ALTER TABLE `hasil_pendidikan`
  ADD PRIMARY KEY (`id_hasilPendidikan`);

--
-- Indexes for table `hasil_penelitian`
--
ALTER TABLE `hasil_penelitian`
  ADD PRIMARY KEY (`id_hasilPenelitian`);

--
-- Indexes for table `hasil_peninjauan_kurikulum`
--
ALTER TABLE `hasil_peninjauan_kurikulum`
  ADD PRIMARY KEY (`id_hasil_peninjauan_kurikulum`);

--
-- Indexes for table `hologram_imovses`
--
ALTER TABLE `hologram_imovses`
  ADD PRIMARY KEY (`id_hologram`);

--
-- Indexes for table `hubungan_kerjasama`
--
ALTER TABLE `hubungan_kerjasama`
  ADD PRIMARY KEY (`id_kerjasama`);

--
-- Indexes for table `jabatan_akademik`
--
ALTER TABLE `jabatan_akademik`
  ADD PRIMARY KEY (`id_jabatan_akademik`);

--
-- Indexes for table `jabatan_sdm3`
--
ALTER TABLE `jabatan_sdm3`
  ADD PRIMARY KEY (`id_jabatan_sdm3`);

--
-- Indexes for table `jabatan_sdm4`
--
ALTER TABLE `jabatan_sdm4`
  ADD PRIMARY KEY (`id_jabatan_sdm4`);

--
-- Indexes for table `jabatan_sdm8`
--
ALTER TABLE `jabatan_sdm8`
  ADD PRIMARY KEY (`id_jabatan_sdm8`);

--
-- Indexes for table `jenis_akses_data`
--
ALTER TABLE `jenis_akses_data`
  ADD PRIMARY KEY (`id_jenis_akses`);

--
-- Indexes for table `jenis_danaa`
--
ALTER TABLE `jenis_danaa`
  ADD PRIMARY KEY (`id_jenis_danaa`);

--
-- Indexes for table `jenis_hasilpendidikan`
--
ALTER TABLE `jenis_hasilpendidikan`
  ADD PRIMARY KEY (`id_jenisHasil`);

--
-- Indexes for table `jenis_jurnal_prosiding_seminar`
--
ALTER TABLE `jenis_jurnal_prosiding_seminar`
  ADD PRIMARY KEY (`id_j_p_seminar`);

--
-- Indexes for table `jenis_mahasiswa`
--
ALTER TABLE `jenis_mahasiswa`
  ADD PRIMARY KEY (`id_jenis_mahasiswa`);

--
-- Indexes for table `jenis_penggunaan_dana`
--
ALTER TABLE `jenis_penggunaan_dana`
  ADD PRIMARY KEY (`id_jenis_penggunaan_dana`);

--
-- Indexes for table `jenis_pustaka_ruang_baca_dept`
--
ALTER TABLE `jenis_pustaka_ruang_baca_dept`
  ADD PRIMARY KEY (`id_jenis_pustaka_`);

--
-- Indexes for table `jumlahs`
--
ALTER TABLE `jumlahs`
  ADD PRIMARY KEY (`id_jumlah`);

--
-- Indexes for table `jumlah_kelas`
--
ALTER TABLE `jumlah_kelas`
  ADD PRIMARY KEY (`id_jumlah_kelas`);

--
-- Indexes for table `jumlah_sks_ps`
--
ALTER TABLE `jumlah_sks_ps`
  ADD PRIMARY KEY (`id_jumlah_sks_ps`);

--
-- Indexes for table `jurnal_prosiding_seminar`
--
ALTER TABLE `jurnal_prosiding_seminar`
  ADD PRIMARY KEY (`id_jp_seminar`);

--
-- Indexes for table `kategori_sistem_informasi`
--
ALTER TABLE `kategori_sistem_informasi`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kegiatan_dosen`
--
ALTER TABLE `kegiatan_dosen`
  ADD PRIMARY KEY (`id_kegiatan_dosen`);

--
-- Indexes for table `kegiatan_tenaga_ahli`
--
ALTER TABLE `kegiatan_tenaga_ahli`
  ADD PRIMARY KEY (`id_kegiatan_tenaga_ahli`);

--
-- Indexes for table `keikutsertaan_organisasi`
--
ALTER TABLE `keikutsertaan_organisasi`
  ADD PRIMARY KEY (`id_keikutsertaan_organisasi`);

--
-- Indexes for table `kelengkapan_deskripsi`
--
ALTER TABLE `kelengkapan_deskripsi`
  ADD PRIMARY KEY (`id_kelengkapan_deskripsi`);

--
-- Indexes for table `kelengkapan_sap`
--
ALTER TABLE `kelengkapan_sap`
  ADD PRIMARY KEY (`id_kelengkapan_sap`);

--
-- Indexes for table `kelengkapan_silabus`
--
ALTER TABLE `kelengkapan_silabus`
  ADD PRIMARY KEY (`id_kelengkapan_silabus`);

--
-- Indexes for table `kepemilikan_prasarana_ps`
--
ALTER TABLE `kepemilikan_prasarana_ps`
  ADD PRIMARY KEY (`id_kepemilikan`);

--
-- Indexes for table `kerjasama_dalam`
--
ALTER TABLE `kerjasama_dalam`
  ADD PRIMARY KEY (`id_kerjasamaDalam`);

--
-- Indexes for table `kerjasama_luar`
--
ALTER TABLE `kerjasama_luar`
  ADD PRIMARY KEY (`id_kerjasamaLuar`);

--
-- Indexes for table `kompetensi_lainnya`
--
ALTER TABLE `kompetensi_lainnya`
  ADD PRIMARY KEY (`id_kompetensi_lainnya`);

--
-- Indexes for table `kompetensi_pendukung_lulusan`
--
ALTER TABLE `kompetensi_pendukung_lulusan`
  ADD PRIMARY KEY (`id_kompetensi_pendukung_lulusan`);

--
-- Indexes for table `kompetensi_utama_lulusan`
--
ALTER TABLE `kompetensi_utama_lulusan`
  ADD PRIMARY KEY (`id_kompetensi_utama_lulusan`);

--
-- Indexes for table `kondisi_prasarana_ps`
--
ALTER TABLE `kondisi_prasarana_ps`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indexes for table `kurikulum1`
--
ALTER TABLE `kurikulum1`
  ADD PRIMARY KEY (`id_kurikulum1`);

--
-- Indexes for table `kurikulum2`
--
ALTER TABLE `kurikulum2`
  ADD PRIMARY KEY (`id_kurikulum2`);

--
-- Indexes for table `kurikulum3`
--
ALTER TABLE `kurikulum3`
  ADD PRIMARY KEY (`id_kurikulum3`);

--
-- Indexes for table `kurikulum4`
--
ALTER TABLE `kurikulum4`
  ADD PRIMARY KEY (`id_kurikulum4`);

--
-- Indexes for table `kurikulum5`
--
ALTER TABLE `kurikulum5`
  ADD PRIMARY KEY (`id_kurikulum5`);

--
-- Indexes for table `kurikulum6`
--
ALTER TABLE `kurikulum6`
  ADD PRIMARY KEY (`id_kurikulum6`);

--
-- Indexes for table `kurikulum7`
--
ALTER TABLE `kurikulum7`
  ADD PRIMARY KEY (`id_kurikulum7`);

--
-- Indexes for table `kurikulum8`
--
ALTER TABLE `kurikulum8`
  ADD PRIMARY KEY (`id_kurikulum8`);

--
-- Indexes for table `kurikulum9`
--
ALTER TABLE `kurikulum9`
  ADD PRIMARY KEY (`id_kurikulum9`);

--
-- Indexes for table `kurikulumf`
--
ALTER TABLE `kurikulumf`
  ADD PRIMARY KEY (`id_kurikulumf`);

--
-- Indexes for table `kurikulumfmipa`
--
ALTER TABLE `kurikulumfmipa`
  ADD PRIMARY KEY (`id_kurikulumfmipa`);

--
-- Indexes for table `kurikulum_dep_1`
--
ALTER TABLE `kurikulum_dep_1`
  ADD PRIMARY KEY (`id_kurikulum_1`);

--
-- Indexes for table `kurikulum_dep_2`
--
ALTER TABLE `kurikulum_dep_2`
  ADD PRIMARY KEY (`id_kurikulum_2`);

--
-- Indexes for table `kurikulum_dep_3`
--
ALTER TABLE `kurikulum_dep_3`
  ADD PRIMARY KEY (`id_kurikulum_3`);

--
-- Indexes for table `kurikulum_dep_8`
--
ALTER TABLE `kurikulum_dep_8`
  ADD PRIMARY KEY (`id_kurikulum_8`);

--
-- Indexes for table `kurikulum_fakultas`
--
ALTER TABLE `kurikulum_fakultas`
  ADD PRIMARY KEY (`id_kurikulum`);

--
-- Indexes for table `lain_lain_dana`
--
ALTER TABLE `lain_lain_dana`
  ADD PRIMARY KEY (`id_lain`);

--
-- Indexes for table `lampiran_hasil`
--
ALTER TABLE `lampiran_hasil`
  ADD PRIMARY KEY (`id_lampiran`);

--
-- Indexes for table `lampiran_hasilpen`
--
ALTER TABLE `lampiran_hasilpen`
  ADD PRIMARY KEY (`id_lampiranPen`);

--
-- Indexes for table `lampiran_sdm3`
--
ALTER TABLE `lampiran_sdm3`
  ADD PRIMARY KEY (`id_lampiran_sdm3`);

--
-- Indexes for table `lampiran_sdm4`
--
ALTER TABLE `lampiran_sdm4`
  ADD PRIMARY KEY (`id_lampiran_sdm4`);

--
-- Indexes for table `lampiran_sdm8`
--
ALTER TABLE `lampiran_sdm8`
  ADD PRIMARY KEY (`id_lampiran_sdm8`);

--
-- Indexes for table `lampiran_standar1`
--
ALTER TABLE `lampiran_standar1`
  ADD PRIMARY KEY (`id_lampiranstan1`);

--
-- Indexes for table `lampiran_standar2`
--
ALTER TABLE `lampiran_standar2`
  ADD PRIMARY KEY (`id_lampiranstan2`);

--
-- Indexes for table `lulusans`
--
ALTER TABLE `lulusans`
  ADD PRIMARY KEY (`id_lulusan`),
  ADD UNIQUE KEY `nim` (`nim`),
  ADD UNIQUE KEY `judul_skripsi` (`judul_skripsi`),
  ADD UNIQUE KEY `no_ijazah` (`no_ijazah`);

--
-- Indexes for table `mahasiswa_terlibat`
--
ALTER TABLE `mahasiswa_terlibat`
  ADD PRIMARY KEY (`id_terlibatpenelitian`);

--
-- Indexes for table `mata_kuliah_pilihan`
--
ALTER TABLE `mata_kuliah_pilihan`
  ADD PRIMARY KEY (`id_mata_kuliah_pilihan`);

--
-- Indexes for table `mekanisme_peninjauan_kurikulum`
--
ALTER TABLE `mekanisme_peninjauan_kurikulum`
  ADD PRIMARY KEY (`id_mekanisme_peninjauan_kurikulum`);

--
-- Indexes for table `mekanisme_susun_mk`
--
ALTER TABLE `mekanisme_susun_mk`
  ADD PRIMARY KEY (`id_mekanisme`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitoring_dan_evaluasi`
--
ALTER TABLE `monitoring_dan_evaluasi`
  ADD PRIMARY KEY (`id_monitoring_dan_evaluasi`);

--
-- Indexes for table `nama_dosen`
--
ALTER TABLE `nama_dosen`
  ADD PRIMARY KEY (`id_nama_dosen`);

--
-- Indexes for table `netware`
--
ALTER TABLE `netware`
  ADD PRIMARY KEY (`id_netware`);

--
-- Indexes for table `organoware`
--
ALTER TABLE `organoware`
  ADD PRIMARY KEY (`id_organoware`);

--
-- Indexes for table `pandangan_fmipa_tentang_dosen_tetap`
--
ALTER TABLE `pandangan_fmipa_tentang_dosen_tetap`
  ADD PRIMARY KEY (`id_pandangan_fmipa_tentang_dosen_tetap`);

--
-- Indexes for table `pandangan_fmipa_tentang_tendik`
--
ALTER TABLE `pandangan_fmipa_tentang_tendik`
  ADD PRIMARY KEY (`id_pandangan_fmipa_tentang_tendik`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembelajaran_fakultas`
--
ALTER TABLE `pembelajaran_fakultas`
  ADD PRIMARY KEY (`id_pembelajaran`);

--
-- Indexes for table `pendapat_pimpinan`
--
ALTER TABLE `pendapat_pimpinan`
  ADD PRIMARY KEY (`id_pendapat_pimp`);

--
-- Indexes for table `penelitians`
--
ALTER TABLE `penelitians`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indexes for table `penerimaans`
--
ALTER TABLE `penerimaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerimaan_dana`
--
ALTER TABLE `penerimaan_dana`
  ADD PRIMARY KEY (`id_terima_dana`);

--
-- Indexes for table `pengabdians`
--
ALTER TABLE `pengabdians`
  ADD PRIMARY KEY (`id_pengabdian`);

--
-- Indexes for table `pengelolaan_dana_ps`
--
ALTER TABLE `pengelolaan_dana_ps`
  ADD PRIMARY KEY (`id_kelola`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `penggunaan_dana`
--
ALTER TABLE `penggunaan_dana`
  ADD PRIMARY KEY (`id_penggunaan_dana`);

--
-- Indexes for table `penilaian_fmipa`
--
ALTER TABLE `penilaian_fmipa`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `penilaian_prasaranaa`
--
ALTER TABLE `penilaian_prasaranaa`
  ADD PRIMARY KEY (`id_nilai_pras`);

--
-- Indexes for table `peningkatan_kemampuan`
--
ALTER TABLE `peningkatan_kemampuan`
  ADD PRIMARY KEY (`id_peningkatan_kemampuan`);

--
-- Indexes for table `penjelasan_organoware`
--
ALTER TABLE `penjelasan_organoware`
  ADD PRIMARY KEY (`id_penjelasan`);

--
-- Indexes for table `peran_fmipa_tentang_kurikulum`
--
ALTER TABLE `peran_fmipa_tentang_kurikulum`
  ADD PRIMARY KEY (`id_peran_fmipa_tentang_kurikulum`);

--
-- Indexes for table `peran_kegiatan`
--
ALTER TABLE `peran_kegiatan`
  ADD PRIMARY KEY (`id_peran_kegiatan`);

--
-- Indexes for table `perolehanhaki`
--
ALTER TABLE `perolehanhaki`
  ADD PRIMARY KEY (`id_perolehanHaki`);

--
-- Indexes for table `perolehanhiki`
--
ALTER TABLE `perolehanhiki`
  ADD PRIMARY KEY (`id_perolehanHiki`);

--
-- Indexes for table `perolehanhoki`
--
ALTER TABLE `perolehanhoki`
  ADD PRIMARY KEY (`id_perolehanHoki`);

--
-- Indexes for table `perolehanhuki`
--
ALTER TABLE `perolehanhuki`
  ADD PRIMARY KEY (`id_perolehanHuki`);

--
-- Indexes for table `perubahan_pada_buku_ajar`
--
ALTER TABLE `perubahan_pada_buku_ajar`
  ADD PRIMARY KEY (`id_perubahan_buku_ajar`);

--
-- Indexes for table `perubahan_pada_silabus`
--
ALTER TABLE `perubahan_pada_silabus`
  ADD PRIMARY KEY (`id_perubahan_silabus`);

--
-- Indexes for table `pl_komersial`
--
ALTER TABLE `pl_komersial`
  ADD PRIMARY KEY (`id_kerjasama_imovses`);

--
-- Indexes for table `prasarana_penunjang_ps`
--
ALTER TABLE `prasarana_penunjang_ps`
  ADD PRIMARY KEY (`id_pras_penunjang`);

--
-- Indexes for table `prasarana_ps`
--
ALTER TABLE `prasarana_ps`
  ADD PRIMARY KEY (`id_prasarana_ps`);

--
-- Indexes for table `prasarana_tambahan`
--
ALTER TABLE `prasarana_tambahan`
  ADD PRIMARY KEY (`id_prasarana_tambahan`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `proposal_pengabdian`
--
ALTER TABLE `proposal_pengabdian`
  ADD PRIMARY KEY (`id_proposalPeng`);

--
-- Indexes for table `pustaka_di_ruang_baca_dept`
--
ALTER TABLE `pustaka_di_ruang_baca_dept`
  ADD PRIMARY KEY (`id_pustaka_ruang_baca`);

--
-- Indexes for table `redaksi_jumlah`
--
ALTER TABLE `redaksi_jumlah`
  ADD PRIMARY KEY (`id_redaksiJum`);

--
-- Indexes for table `redaksi_kegiatan`
--
ALTER TABLE `redaksi_kegiatan`
  ADD PRIMARY KEY (`id_redaksiKeg`);

--
-- Indexes for table `redaksi_lulusan`
--
ALTER TABLE `redaksi_lulusan`
  ADD PRIMARY KEY (`id_redaksiLus`);

--
-- Indexes for table `redaksi_penelitian`
--
ALTER TABLE `redaksi_penelitian`
  ADD PRIMARY KEY (`id_redaksi`);

--
-- Indexes for table `redaksi_penelitian_fmipa`
--
ALTER TABLE `redaksi_penelitian_fmipa`
  ADD PRIMARY KEY (`id_redaksiPen`);

--
-- Indexes for table `redaksi_pengabdian`
--
ALTER TABLE `redaksi_pengabdian`
  ADD PRIMARY KEY (`id_redaksiPeng`);

--
-- Indexes for table `redaksi_pengabdian_fmipa`
--
ALTER TABLE `redaksi_pengabdian_fmipa`
  ADD PRIMARY KEY (`id_redaksiPeng`);

--
-- Indexes for table `rencana_inves_sarana`
--
ALTER TABLE `rencana_inves_sarana`
  ADD PRIMARY KEY (`id_sarana_rencana`);

--
-- Indexes for table `rencana_pengembangan_si`
--
ALTER TABLE `rencana_pengembangan_si`
  ADD PRIMARY KEY (`id_rencana`);

--
-- Indexes for table `ruang_kerja_dosen_tetap`
--
ALTER TABLE `ruang_kerja_dosen_tetap`
  ADD PRIMARY KEY (`id_rk_dosen_tetap`);

--
-- Indexes for table `sarana_tambahan`
--
ALTER TABLE `sarana_tambahan`
  ADD PRIMARY KEY (`id_sarana_tambahan`);

--
-- Indexes for table `sdm1`
--
ALTER TABLE `sdm1`
  ADD PRIMARY KEY (`id_sdm1`);

--
-- Indexes for table `sdm2`
--
ALTER TABLE `sdm2`
  ADD PRIMARY KEY (`id_sdm2`);

--
-- Indexes for table `sdm3s`
--
ALTER TABLE `sdm3s`
  ADD PRIMARY KEY (`id_sdm3`);

--
-- Indexes for table `sdm4s`
--
ALTER TABLE `sdm4s`
  ADD PRIMARY KEY (`id_sdm4`);

--
-- Indexes for table `sdm5`
--
ALTER TABLE `sdm5`
  ADD PRIMARY KEY (`id_sdm5`);

--
-- Indexes for table `sdm6`
--
ALTER TABLE `sdm6`
  ADD PRIMARY KEY (`id_sdm6`);

--
-- Indexes for table `sdm7`
--
ALTER TABLE `sdm7`
  ADD PRIMARY KEY (`id_sdm7`);

--
-- Indexes for table `sdm8s`
--
ALTER TABLE `sdm8s`
  ADD PRIMARY KEY (`id_sdm8`);

--
-- Indexes for table `sdm9`
--
ALTER TABLE `sdm9`
  ADD PRIMARY KEY (`id_sdm9`);

--
-- Indexes for table `sdm10`
--
ALTER TABLE `sdm10`
  ADD PRIMARY KEY (`id_sdm10`);

--
-- Indexes for table `sdm11`
--
ALTER TABLE `sdm11`
  ADD PRIMARY KEY (`id_sdm11`);

--
-- Indexes for table `sdm12`
--
ALTER TABLE `sdm12`
  ADD PRIMARY KEY (`id_sdm12`);

--
-- Indexes for table `sdm13`
--
ALTER TABLE `sdm13`
  ADD PRIMARY KEY (`id_sdm13`);

--
-- Indexes for table `sdm14`
--
ALTER TABLE `sdm14`
  ADD PRIMARY KEY (`id_sdm14`);

--
-- Indexes for table `sdm15`
--
ALTER TABLE `sdm15`
  ADD PRIMARY KEY (`id_sdm15`);

--
-- Indexes for table `sdm16`
--
ALTER TABLE `sdm16`
  ADD PRIMARY KEY (`id_sdm16`);

--
-- Indexes for table `sdmf2`
--
ALTER TABLE `sdmf2`
  ADD PRIMARY KEY (`id_sdmf2`);

--
-- Indexes for table `sdmf3`
--
ALTER TABLE `sdmf3`
  ADD PRIMARY KEY (`id_sdmf3`);

--
-- Indexes for table `sdmf5`
--
ALTER TABLE `sdmf5`
  ADD PRIMARY KEY (`id_sdmf5`);

--
-- Indexes for table `sdmfmipa1`
--
ALTER TABLE `sdmfmipa1`
  ADD PRIMARY KEY (`id_sdmfmipa1`);

--
-- Indexes for table `sdmfmipa2`
--
ALTER TABLE `sdmfmipa2`
  ADD PRIMARY KEY (`id_sdmfmipa2`);

--
-- Indexes for table `sdm_dep_1`
--
ALTER TABLE `sdm_dep_1`
  ADD PRIMARY KEY (`id_sdm_1`);

--
-- Indexes for table `sdm_dep_2`
--
ALTER TABLE `sdm_dep_2`
  ADD PRIMARY KEY (`id_sdm_2`);

--
-- Indexes for table `sdm_dep_16`
--
ALTER TABLE `sdm_dep_16`
  ADD PRIMARY KEY (`id_sdm_16`);

--
-- Indexes for table `sdm_fakultas_1`
--
ALTER TABLE `sdm_fakultas_1`
  ADD PRIMARY KEY (`id_sdmf_1`);

--
-- Indexes for table `sdm_fakultas_2`
--
ALTER TABLE `sdm_fakultas_2`
  ADD PRIMARY KEY (`id_sdmf_2`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `sistem_kelola_data`
--
ALTER TABLE `sistem_kelola_data`
  ADD PRIMARY KEY (`id_sistem_kelola_datax`);

--
-- Indexes for table `sistem_seleksi_dan_pengembangan`
--
ALTER TABLE `sistem_seleksi_dan_pengembangan`
  ADD PRIMARY KEY (`id_sistem_seleksi_dan_pengembangan`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id_si`);

--
-- Indexes for table `struktur_kurikulum`
--
ALTER TABLE `struktur_kurikulum`
  ADD PRIMARY KEY (`id_struktur_kurikulum`);

--
-- Indexes for table `substansi_praktikum`
--
ALTER TABLE `substansi_praktikum`
  ADD PRIMARY KEY (`id_substansi_praktikum`);

--
-- Indexes for table `sumber_dana`
--
ALTER TABLE `sumber_dana`
  ADD PRIMARY KEY (`id_sumber`);

--
-- Indexes for table `sumber_pustaka_lain`
--
ALTER TABLE `sumber_pustaka_lain`
  ADD PRIMARY KEY (`id_sumber_pustaka_lain`);

--
-- Indexes for table `sumber_terima_dana`
--
ALTER TABLE `sumber_terima_dana`
  ADD PRIMARY KEY (`id_sumber`);

--
-- Indexes for table `tamongjama`
--
ALTER TABLE `tamongjama`
  ADD PRIMARY KEY (`id_tamongjama`);

--
-- Indexes for table `terlibat_penelitian`
--
ALTER TABLE `terlibat_penelitian`
  ADD PRIMARY KEY (`id_mahasiswaPenelitian`);

--
-- Indexes for table `terlibat_pengabdian`
--
ALTER TABLE `terlibat_pengabdian`
  ADD PRIMARY KEY (`id_mahasiswaPengabdian`);

--
-- Indexes for table `tingkatan`
--
ALTER TABLE `tingkatan`
  ADD PRIMARY KEY (`id_tingkatan`);

--
-- Indexes for table `tingkat_hasil`
--
ALTER TABLE `tingkat_hasil`
  ADD PRIMARY KEY (`id_tingkatt`);

--
-- Indexes for table `tipe_mahasiswa`
--
ALTER TABLE `tipe_mahasiswa`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `upaya_meningkatkan_kompetensi_tendik`
--
ALTER TABLE `upaya_meningkatkan_kompetensi_tendik`
  ADD PRIMARY KEY (`id_upaya_meningkatkan_kompetensi_tendik`);

--
-- Indexes for table `upaya_sebar_informasi`
--
ALTER TABLE `upaya_sebar_informasi`
  ADD PRIMARY KEY (`id_upaya`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `vmts`
--
ALTER TABLE `vmts`
  ADD PRIMARY KEY (`id_vmts`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktivitas_dosen_sesuai_sks`
--
ALTER TABLE `aktivitas_dosen_sesuai_sks`
  MODIFY `id_aktivitas_dosen_sesuai_sks` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `aktivitas_mengajar_dosen_diluar_ps`
--
ALTER TABLE `aktivitas_mengajar_dosen_diluar_ps`
  MODIFY `id_aktivitas_mengajar_dosen_diluar_ps` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `aktivitas_mengajar_dosen_sesuai_ps`
--
ALTER TABLE `aktivitas_mengajar_dosen_sesuai_ps`
  MODIFY `id_aktivitas_mengajar_dosen_sesuai_ps` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `aktivitas_mengajar_dosen_tidak_tetap`
--
ALTER TABLE `aktivitas_mengajar_dosen_tidak_tetap`
  MODIFY `id_aktivitas_mengajar_dosen_tidak_tetap` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `alat_utama_lab_ps`
--
ALTER TABLE `alat_utama_lab_ps`
  MODIFY `id_alat_utama_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bobot_sks`
--
ALTER TABLE `bobot_sks`
  MODIFY `id_bobot_sks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bobot_tugas`
--
ALTER TABLE `bobot_tugas`
  MODIFY `id_bobot_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bukti_penelitian`
--
ALTER TABLE `bukti_penelitian`
  MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `bukti_pengabdian`
--
ALTER TABLE `bukti_pengabdian`
  MODIFY `id_buktiPeng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `capaian_prestasi`
--
ALTER TABLE `capaian_prestasi`
  MODIFY `id_capaian_prestasi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `contoh_soal_mk`
--
ALTER TABLE `contoh_soal_mk`
  MODIFY `id_conso` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `daftar_ruang_kerja`
--
ALTER TABLE `daftar_ruang_kerja`
  MODIFY `id_ruang_kerja_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dana_dr_utk_pengabdian_msrkt`
--
ALTER TABLE `dana_dr_utk_pengabdian_msrkt`
  MODIFY `id_dana_pgbdn` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dana_utk_penelitian`
--
ALTER TABLE `dana_utk_penelitian`
  MODIFY `id_dana_penelitian` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_dept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `dokumen_dalam`
--
ALTER TABLE `dokumen_dalam`
  MODIFY `id_dokumenD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dokumen_luar`
--
ALTER TABLE `dokumen_luar`
  MODIFY `id_dokumenL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hardware`
--
ALTER TABLE `hardware`
  MODIFY `id_hardware` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `hasil_pendidikan`
--
ALTER TABLE `hasil_pendidikan`
  MODIFY `id_hasilPendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `hasil_penelitian`
--
ALTER TABLE `hasil_penelitian`
  MODIFY `id_hasilPenelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hologram_imovses`
--
ALTER TABLE `hologram_imovses`
  MODIFY `id_hologram` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hubungan_kerjasama`
--
ALTER TABLE `hubungan_kerjasama`
  MODIFY `id_kerjasama` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jabatan_sdm3`
--
ALTER TABLE `jabatan_sdm3`
  MODIFY `id_jabatan_sdm3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jabatan_sdm4`
--
ALTER TABLE `jabatan_sdm4`
  MODIFY `id_jabatan_sdm4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jabatan_sdm8`
--
ALTER TABLE `jabatan_sdm8`
  MODIFY `id_jabatan_sdm8` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jenis_akses_data`
--
ALTER TABLE `jenis_akses_data`
  MODIFY `id_jenis_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `jenis_hasilpendidikan`
--
ALTER TABLE `jenis_hasilpendidikan`
  MODIFY `id_jenisHasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jenis_mahasiswa`
--
ALTER TABLE `jenis_mahasiswa`
  MODIFY `id_jenis_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jenis_penggunaan_dana`
--
ALTER TABLE `jenis_penggunaan_dana`
  MODIFY `id_jenis_penggunaan_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jenis_pustaka_ruang_baca_dept`
--
ALTER TABLE `jenis_pustaka_ruang_baca_dept`
  MODIFY `id_jenis_pustaka_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `jumlahs`
--
ALTER TABLE `jumlahs`
  MODIFY `id_jumlah` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `jurnal_prosiding_seminar`
--
ALTER TABLE `jurnal_prosiding_seminar`
  MODIFY `id_jp_seminar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kategori_sistem_informasi`
--
ALTER TABLE `kategori_sistem_informasi`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `kepemilikan_prasarana_ps`
--
ALTER TABLE `kepemilikan_prasarana_ps`
  MODIFY `id_kepemilikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kerjasama_dalam`
--
ALTER TABLE `kerjasama_dalam`
  MODIFY `id_kerjasamaDalam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `kerjasama_luar`
--
ALTER TABLE `kerjasama_luar`
  MODIFY `id_kerjasamaLuar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kondisi_prasarana_ps`
--
ALTER TABLE `kondisi_prasarana_ps`
  MODIFY `id_kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kurikulum4`
--
ALTER TABLE `kurikulum4`
  MODIFY `id_kurikulum4` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT for table `kurikulum5`
--
ALTER TABLE `kurikulum5`
  MODIFY `id_kurikulum5` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
--
-- AUTO_INCREMENT for table `kurikulum6`
--
ALTER TABLE `kurikulum6`
  MODIFY `id_kurikulum6` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
--
-- AUTO_INCREMENT for table `kurikulum7`
--
ALTER TABLE `kurikulum7`
  MODIFY `id_kurikulum7` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;
--
-- AUTO_INCREMENT for table `kurikulum9`
--
ALTER TABLE `kurikulum9`
  MODIFY `id_kurikulum9` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
--
-- AUTO_INCREMENT for table `kurikulumf`
--
ALTER TABLE `kurikulumf`
  MODIFY `id_kurikulumf` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `kurikulum_dep_1`
--
ALTER TABLE `kurikulum_dep_1`
  MODIFY `id_kurikulum_1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kurikulum_dep_2`
--
ALTER TABLE `kurikulum_dep_2`
  MODIFY `id_kurikulum_2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kurikulum_dep_3`
--
ALTER TABLE `kurikulum_dep_3`
  MODIFY `id_kurikulum_3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kurikulum_dep_8`
--
ALTER TABLE `kurikulum_dep_8`
  MODIFY `id_kurikulum_8` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kurikulum_fakultas`
--
ALTER TABLE `kurikulum_fakultas`
  MODIFY `id_kurikulum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lain_lain_dana`
--
ALTER TABLE `lain_lain_dana`
  MODIFY `id_lain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lampiran_hasil`
--
ALTER TABLE `lampiran_hasil`
  MODIFY `id_lampiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `lampiran_hasilpen`
--
ALTER TABLE `lampiran_hasilpen`
  MODIFY `id_lampiranPen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lampiran_sdm3`
--
ALTER TABLE `lampiran_sdm3`
  MODIFY `id_lampiran_sdm3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `lampiran_sdm4`
--
ALTER TABLE `lampiran_sdm4`
  MODIFY `id_lampiran_sdm4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `lampiran_sdm8`
--
ALTER TABLE `lampiran_sdm8`
  MODIFY `id_lampiran_sdm8` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `lampiran_standar1`
--
ALTER TABLE `lampiran_standar1`
  MODIFY `id_lampiranstan1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lampiran_standar2`
--
ALTER TABLE `lampiran_standar2`
  MODIFY `id_lampiranstan2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lulusans`
--
ALTER TABLE `lulusans`
  MODIFY `id_lulusan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `mahasiswa_terlibat`
--
ALTER TABLE `mahasiswa_terlibat`
  MODIFY `id_terlibatpenelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mekanisme_susun_mk`
--
ALTER TABLE `mekanisme_susun_mk`
  MODIFY `id_mekanisme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `netware`
--
ALTER TABLE `netware`
  MODIFY `id_netware` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `organoware`
--
ALTER TABLE `organoware`
  MODIFY `id_organoware` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pembelajaran_fakultas`
--
ALTER TABLE `pembelajaran_fakultas`
  MODIFY `id_pembelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pendapat_pimpinan`
--
ALTER TABLE `pendapat_pimpinan`
  MODIFY `id_pendapat_pimp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penelitians`
--
ALTER TABLE `penelitians`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `penerimaans`
--
ALTER TABLE `penerimaans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `penerimaan_dana`
--
ALTER TABLE `penerimaan_dana`
  MODIFY `id_terima_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `pengabdians`
--
ALTER TABLE `pengabdians`
  MODIFY `id_pengabdian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pengelolaan_dana_ps`
--
ALTER TABLE `pengelolaan_dana_ps`
  MODIFY `id_kelola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `penggunaan_dana`
--
ALTER TABLE `penggunaan_dana`
  MODIFY `id_penggunaan_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `penilaian_fmipa`
--
ALTER TABLE `penilaian_fmipa`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penilaian_prasaranaa`
--
ALTER TABLE `penilaian_prasaranaa`
  MODIFY `id_nilai_pras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penjelasan_organoware`
--
ALTER TABLE `penjelasan_organoware`
  MODIFY `id_penjelasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `perolehanhaki`
--
ALTER TABLE `perolehanhaki`
  MODIFY `id_perolehanHaki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `perolehanhiki`
--
ALTER TABLE `perolehanhiki`
  MODIFY `id_perolehanHiki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `perolehanhoki`
--
ALTER TABLE `perolehanhoki`
  MODIFY `id_perolehanHoki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `perolehanhuki`
--
ALTER TABLE `perolehanhuki`
  MODIFY `id_perolehanHuki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pl_komersial`
--
ALTER TABLE `pl_komersial`
  MODIFY `id_kerjasama_imovses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `prasarana_penunjang_ps`
--
ALTER TABLE `prasarana_penunjang_ps`
  MODIFY `id_pras_penunjang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `prasarana_ps`
--
ALTER TABLE `prasarana_ps`
  MODIFY `id_prasarana_ps` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `prasarana_tambahan`
--
ALTER TABLE `prasarana_tambahan`
  MODIFY `id_prasarana_tambahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `proposal_pengabdian`
--
ALTER TABLE `proposal_pengabdian`
  MODIFY `id_proposalPeng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pustaka_di_ruang_baca_dept`
--
ALTER TABLE `pustaka_di_ruang_baca_dept`
  MODIFY `id_pustaka_ruang_baca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `redaksi_jumlah`
--
ALTER TABLE `redaksi_jumlah`
  MODIFY `id_redaksiJum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `redaksi_kegiatan`
--
ALTER TABLE `redaksi_kegiatan`
  MODIFY `id_redaksiKeg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `redaksi_lulusan`
--
ALTER TABLE `redaksi_lulusan`
  MODIFY `id_redaksiLus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `redaksi_penelitian`
--
ALTER TABLE `redaksi_penelitian`
  MODIFY `id_redaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `redaksi_penelitian_fmipa`
--
ALTER TABLE `redaksi_penelitian_fmipa`
  MODIFY `id_redaksiPen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `redaksi_pengabdian`
--
ALTER TABLE `redaksi_pengabdian`
  MODIFY `id_redaksiPeng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `redaksi_pengabdian_fmipa`
--
ALTER TABLE `redaksi_pengabdian_fmipa`
  MODIFY `id_redaksiPeng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rencana_inves_sarana`
--
ALTER TABLE `rencana_inves_sarana`
  MODIFY `id_sarana_rencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rencana_pengembangan_si`
--
ALTER TABLE `rencana_pengembangan_si`
  MODIFY `id_rencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ruang_kerja_dosen_tetap`
--
ALTER TABLE `ruang_kerja_dosen_tetap`
  MODIFY `id_rk_dosen_tetap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `sarana_tambahan`
--
ALTER TABLE `sarana_tambahan`
  MODIFY `id_sarana_tambahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sdm3s`
--
ALTER TABLE `sdm3s`
  MODIFY `id_sdm3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT for table `sdm4s`
--
ALTER TABLE `sdm4s`
  MODIFY `id_sdm4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `sdm5`
--
ALTER TABLE `sdm5`
  MODIFY `id_sdm5` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;
--
-- AUTO_INCREMENT for table `sdm6`
--
ALTER TABLE `sdm6`
  MODIFY `id_sdm6` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;
--
-- AUTO_INCREMENT for table `sdm7`
--
ALTER TABLE `sdm7`
  MODIFY `id_sdm7` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
--
-- AUTO_INCREMENT for table `sdm8s`
--
ALTER TABLE `sdm8s`
  MODIFY `id_sdm8` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `sdm9`
--
ALTER TABLE `sdm9`
  MODIFY `id_sdm9` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;
--
-- AUTO_INCREMENT for table `sdm10`
--
ALTER TABLE `sdm10`
  MODIFY `id_sdm10` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
--
-- AUTO_INCREMENT for table `sdm11`
--
ALTER TABLE `sdm11`
  MODIFY `id_sdm11` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;
--
-- AUTO_INCREMENT for table `sdm12`
--
ALTER TABLE `sdm12`
  MODIFY `id_sdm12` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
--
-- AUTO_INCREMENT for table `sdm13`
--
ALTER TABLE `sdm13`
  MODIFY `id_sdm13` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
--
-- AUTO_INCREMENT for table `sdm14`
--
ALTER TABLE `sdm14`
  MODIFY `id_sdm14` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;
--
-- AUTO_INCREMENT for table `sdm15`
--
ALTER TABLE `sdm15`
  MODIFY `id_sdm15` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
--
-- AUTO_INCREMENT for table `sdmf2`
--
ALTER TABLE `sdmf2`
  MODIFY `id_sdmf2` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sdmf3`
--
ALTER TABLE `sdmf3`
  MODIFY `id_sdmf3` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sdmf5`
--
ALTER TABLE `sdmf5`
  MODIFY `id_sdmf5` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sdm_dep_1`
--
ALTER TABLE `sdm_dep_1`
  MODIFY `id_sdm_1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sdm_dep_2`
--
ALTER TABLE `sdm_dep_2`
  MODIFY `id_sdm_2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sdm_dep_16`
--
ALTER TABLE `sdm_dep_16`
  MODIFY `id_sdm_16` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sdm_fakultas_1`
--
ALTER TABLE `sdm_fakultas_1`
  MODIFY `id_sdmf_1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sdm_fakultas_2`
--
ALTER TABLE `sdm_fakultas_2`
  MODIFY `id_sdmf_2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sistem_kelola_data`
--
ALTER TABLE `sistem_kelola_data`
  MODIFY `id_sistem_kelola_datax` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id_si` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `sumber_dana`
--
ALTER TABLE `sumber_dana`
  MODIFY `id_sumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sumber_pustaka_lain`
--
ALTER TABLE `sumber_pustaka_lain`
  MODIFY `id_sumber_pustaka_lain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sumber_terima_dana`
--
ALTER TABLE `sumber_terima_dana`
  MODIFY `id_sumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tamongjama`
--
ALTER TABLE `tamongjama`
  MODIFY `id_tamongjama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `terlibat_penelitian`
--
ALTER TABLE `terlibat_penelitian`
  MODIFY `id_mahasiswaPenelitian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `terlibat_pengabdian`
--
ALTER TABLE `terlibat_pengabdian`
  MODIFY `id_mahasiswaPengabdian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tingkat_hasil`
--
ALTER TABLE `tingkat_hasil`
  MODIFY `id_tingkatt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tipe_mahasiswa`
--
ALTER TABLE `tipe_mahasiswa`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `upaya_sebar_informasi`
--
ALTER TABLE `upaya_sebar_informasi`
  MODIFY `id_upaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `vmts`
--
ALTER TABLE `vmts`
  MODIFY `id_vmts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
