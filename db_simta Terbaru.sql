-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 10:32 AM
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
(10, 'Semua');

-- --------------------------------------------------------

--
-- Table structure for table `dosen_tetap`
--

CREATE TABLE `dosen_tetap` (
  `id_dosen_tetap` int(10) UNSIGNED NOT NULL,
  `nama_departemen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dosen_tetap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nidn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jabatan_akademik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gelar_akademik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_pt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_ahli` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hardware`
--

CREATE TABLE `hardware` (
  `id_hardware` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_hardware` varchar(150) NOT NULL,
  `spesifikasi` varchar(255) NOT NULL,
  `jumlah_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(12, 2, 1, 1, 30, 0, 0, 0, 2010, 0, 0, 0, '2018-03-11 09:30:58', '2018-03-11 09:30:58'),
(13, 2, 1, 2, 33, 0, 0, 0, 2011, 0, 0, 0, '2018-03-11 09:31:14', '2018-03-11 09:31:14'),
(14, 2, 1, 1, 45, 0, 0, 0, 2015, 0, 0, 0, '2018-03-11 10:24:54', '2018-03-11 10:24:54'),
(22, 1, 2, 2, 200, 0, 0, 0, 2016, 0, 0, 0, NULL, '2018-03-29 19:21:22'),
(23, 2, 9, 9, 9, 9, 9, 9, 2016, 0, 0, 0, '2018-03-28 03:50:59', '2018-03-28 03:50:59'),
(27, 2, 34, 0, 125, 0, 0, 0, 2019, 0, 0, 0, NULL, NULL),
(30, 2, 8, 8, 8, 8, 8, 8, 2020, 0, 0, 0, NULL, NULL),
(31, 1, 80, 80, 80, 0, 0, 0, 2017, 0, 0, 0, '2018-03-29 18:51:46', '2018-03-29 18:51:46'),
(33, 2, 7, 7, 7, 7, 7, 7, 2018, 0, 0, 0, '2018-04-01 23:25:13', '2018-04-01 23:25:13'),
(107, 6, 1, 0, 20, 0, 0, 0, 2019, 0, 0, 0, '2018-04-05 20:24:41', '2018-04-05 20:30:41'),
(112, 6, 89, 89, 0, 89, 89, 89, 2020, 100, 90, 90, '2018-04-08 02:52:53', '2018-04-08 02:52:53'),
(113, 6, 80, 0, 321, 0, 0, 0, 2016, 90, 90, 100, '2018-04-09 00:03:48', '2018-04-09 00:03:48'),
(114, 6, 23, 5, 60, 0, 0, 0, 2019, 134, 140, 125, NULL, NULL);

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
(17, 6, 'pembinaan robotik', 'ilmu komputer', '2017', '2018-04-09 00:19:05', '2018-04-09 00:19:05'),
(18, 6, 'Pembinaan Tim Kontes Robot Indonesia', 'Ilmu Kmputer', '2016', NULL, NULL);

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
(44, 4, 'hh', 'G4212122', 'hh', 'hh', 'h', 'hh', '2010-03-30', '2015-06-20', '61.17', '5.61', '3', '2018-03-30 08:02:20', '2018-03-31 05:35:11'),
(45, 4, 'uu', 'G413122', 'uu', 'uu', NULL, 'uu', '2014-03-30', '2018-10-10', '55.5', '4.55', '3.2', '2018-03-30 09:01:46', '2018-03-31 05:35:59'),
(46, 4, 'ii', 'G4131311', 'ii', 'ii', NULL, 'ii', '2013-03-30', '2017-01-01', '45.23', '3.45', '2.75', '2018-03-30 09:02:27', '2018-03-31 05:35:44'),
(47, 6, 'gghlmhn', 'G6121211', 'ggh', 'gg', NULL, 'ggh', '2015-03-31', '2019-10-12', '54.6', '4.54', '4', '2018-03-30 12:41:59', '2018-04-05 17:50:29'),
(49, 2, 'coba dulu deh', 'G2111122', 'cc', 'cobaa', NULL, 'cc', '2014-03-10', '2018-02-02', '47.15', '3.47', '3.4', '2018-03-30 19:57:23', '2018-03-31 05:34:05'),
(51, 1, 'eneng', 'G1121211', 'Pencarian lalalaa', 'bu eneng', NULL, 'a12122', '2012-01-30', '2016-10-22', '57.17', '4.57', '3.33', '2018-03-31 05:26:49', '2018-03-31 11:42:27'),
(52, 3, 'ucup', 'G312121', 'lalallalaa', 'pak ucup', 'pak udin', 'g12121', '2013-03-31', '2017-06-25', '51.17', '4.51', '3.6', '2018-03-31 05:29:34', '2018-03-31 05:29:34'),
(53, 5, 'bubu', 'G5413121', 'bababaa', 'bu lala', 'bu lili', 'a21211', '2014-05-17', '2018-05-28', '49.2', '4.49', '3.89', '2018-03-31 05:32:40', '2018-03-31 05:32:40'),
(54, 1, 'ceuceu', 'G1121212', 'lalalalaaa', 'Bu Neneng', NULL, 'a213132', '2013-03-03', '2017-09-10', '55.2', '4.55', '3.89', '2018-03-31 05:40:22', '2018-03-31 05:40:22'),
(55, 7, 'Dina', 'G7141210', 'dina aaa', 'Bu Neneng', NULL, 'da12121', '2013-03-31', '2017-11-29', '56.24', '4.56', '3.7', '2018-03-31 05:44:17', '2018-03-31 05:44:17'),
(56, 8, 'Lulu', 'G8412119', 'Lulluuuu', 'Bu Lala', NULL, 'g1233112', '2014-03-31', '2018-09-01', '54.25', '4.54', '3.61', '2018-03-31 05:46:13', '2018-03-31 05:46:13'),
(57, 9, 'Aktu', 'G9121300', 'Akakaka', 'Pak Kaka', NULL, 'g23411', '2012-03-09', '2017-02-10', '59.29', '4.59', '3.76', '2018-03-31 05:49:34', '2018-03-31 07:30:31'),
(60, 6, 'hahaa', 'G67893330', 'hhaaa', 'hahaa', NULL, 'hh2121', '2013-04-01', '2017-12-01', '56.25', '4.5', '3.8', '2018-03-31 21:38:18', '2018-04-02 08:45:18'),
(61, 1, 'jjj', 'k', 'k', 'k', 'jjjj', 'k', '2002-12-20', '2007-01-10', '60', '4', '3', NULL, NULL),
(62, 2, 'meri k', 'G2121211', 'laalaaa', 'laaaaa', 'kaakaaa', 'as22222', '2014-04-03', '2018-09-01', '56.12', '4.56', '3.5', '2018-04-02 23:51:14', '2018-04-04 18:22:20'),
(65, 1, 'll', 'll', 'll', 'll', NULL, 'll', '2014-04-05', '2018-04-28', '49.14', '4.49', '3', '2018-04-04 10:35:39', '2018-04-04 10:35:39'),
(68, 6, 'lama', 'G6410001', 'aa', 'aa', NULL, 'aa', '2010-10-12', '2014-03-11', '41.16', '3.41', '4.00', '2018-04-07 02:04:21', '2018-04-07 02:04:21'),
(72, 6, 'Meri', 'G6121214', 'judulnya', 'Lalala', 'Liliii', 'a121311', '2010-06-15', '2014-07-15', '49.70', '4.14', '3.5', '2018-04-07 23:56:33', '2018-04-07 23:56:33'),
(73, 6, 'Baba', 'G6121216', 'pengembangan', 'lalaa', NULL, 'a11202', '2013-06-18', '2017-06-13', '48.53', '4.04', '2.74', '2018-04-08 08:14:48', '2018-04-13 23:06:43'),
(74, 6, 'Cici', 'G6110001', 'Cici', 'luluuu', NULL, 'a11210', '2011-06-15', '2015-07-22', '49.93', '4.16', '2.74', '2018-04-08 08:38:05', '2018-04-08 08:38:05'),
(75, 6, 'Cece', 'G6210100', 'pencarian', 'jajaa', NULL, 'a121122', '2013-06-11', '2016-08-17', '38.77', '3.23', '3.7', '2018-04-08 08:41:19', '2018-04-08 08:41:19'),
(76, 6, 'Kakaa', 'G61300001', 'Kakaka', 'kokoo', NULL, 'k12113', '2013-06-05', '2017-09-22', '52.33', '4.36', '2.68', '2018-04-08 08:44:38', '2018-04-08 08:44:38'),
(77, 6, 'Dadan', 'G6100001', 'Dududdu lll', 'Didin', NULL, 'a12121', '2010-06-16', '2014-03-20', '45.77', '3.81', '2.4', '2018-04-08 09:00:56', '2018-04-12 05:38:42'),
(78, 6, 'Cucu', 'G6110002', 'cacaaaa', 'laaaa', NULL, 'a21131', '2010-06-15', '2014-06-20', '48.87', '4.07', '2.69', '2018-04-08 10:38:50', '2018-04-08 10:38:50'),
(81, 6, 'Niprapma', 'G64140015', 'Sistem Informasi A', 'A', 'B', 'A1234', '2012-12-13', '2016-09-20', '48', '4', '2.8', NULL, NULL),
(82, 6, 'Lala', 'G6100000', 'la', 'la', NULL, 'la', '2009-06-12', '2014-02-20', '57.13', '4.76', '3.50', '2018-04-12 04:49:16', '2018-04-13 23:05:34'),
(83, 6, 'jj', 'G64140050', 'kkkkk', 'kk', NULL, 'kk', '2014-06-10', '2018-07-20', '50.03', '4.17', '3.57', '2018-04-13 23:08:42', '2018-04-13 23:08:42');

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
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE `penelitian` (
  `id_penelitian` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `judul_penelitian` varchar(255) NOT NULL,
  `nama_dosen` varchar(150) NOT NULL,
  `tahun_publikasi` int(20) NOT NULL,
  `jumlah_penelitian` int(20) NOT NULL,
  `dana_penelitian` int(20) NOT NULL,
  `jenis_publikasi` varchar(150) NOT NULL,
  `sumber_dana` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `sumber_dana` varchar(50) DEFAULT NULL,
  `jenis_dana` varchar(255) DEFAULT NULL,
  `jumlah_dana_terima` varchar(20) DEFAULT NULL,
  `tahun_terima_dana` varchar(11) DEFAULT NULL,
  `id_penggunaan_dana` int(11) DEFAULT NULL,
  `change_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerimaan_dana`
--

INSERT INTO `penerimaan_dana` (`id_terima_dana`, `id_departemen`, `sumber_dana`, `jenis_dana`, `jumlah_dana_terima`, `tahun_terima_dana`, `id_penggunaan_dana`, `change_by`, `created_at`, `updated_at`) VALUES
(1, NULL, 'gggg', 'ccc', NULL, '2222', NULL, 4, '2018-03-03 09:46:33', '2018-03-03 09:46:33'),
(2, NULL, 'abc', 'xxxx', NULL, '2222', NULL, 4, '2018-03-03 09:48:27', '2018-03-03 09:48:27'),
(3, NULL, 'aaa', 'bbb', '2000', '2017', NULL, 4, '2018-03-03 09:55:55', '2018-03-03 09:55:55'),
(4, NULL, 'aaa', 'bbb', '2000', '2017', NULL, 4, '2018-03-03 09:57:07', '2018-03-03 09:57:07'),
(5, NULL, 'abc', 'xxxx', '100000', '2017', NULL, 4, '2018-03-03 10:03:02', '2018-03-03 10:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `pengabdian_masyarakat`
--

CREATE TABLE `pengabdian_masyarakat` (
  `id_pengabdian` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `judul_pengabdian` varchar(255) NOT NULL,
  `nama_dosen` varchar(150) NOT NULL,
  `tahun_pengabdian` int(20) NOT NULL,
  `jumlah_pengabdian` int(20) NOT NULL,
  `dana_pengabdian` int(20) NOT NULL,
  `jenis_pengabdian` varchar(150) NOT NULL,
  `sumber_dana_pengabdian` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penggantian_dosen`
--

CREATE TABLE `penggantian_dosen` (
  `id_penggantian` int(10) UNSIGNED NOT NULL,
  `nama_departemen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_dosen_berhenti` int(11) NOT NULL,
  `jumlah_rekrut_dosen_baru` int(11) NOT NULL,
  `jumlah_tugas_belajar_s2` int(11) NOT NULL,
  `jumlah_tugas_belajar_s3` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `jenis_penggunaan` varchar(150) NOT NULL,
  `jumlah_penggunaan_dana` int(20) NOT NULL,
  `total_penggunaan_dana` int(20) NOT NULL,
  `rata_rata_pertahun` int(20) NOT NULL,
  `persentasi` int(20) NOT NULL,
  `id_penelitian` int(11) NOT NULL,
  `id_pengabdian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perencanaan_dosen`
--

CREATE TABLE `perencanaan_dosen` (
  `id_perencanaan_dosen` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `tahun_perekrutan` int(11) NOT NULL,
  `jumlah_dosen_baru` int(11) NOT NULL,
  `jumlah_dosen_tahun_target` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perencanaan_tkpd`
--

CREATE TABLE `perencanaan_tkpd` (
  `id_rencana_tkpd` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `tahun_perekrutan` int(11) NOT NULL,
  `jumlah_tkpd_baru` int(11) NOT NULL,
  `jumlah_tkpd_tahun_target` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prasarana_tambahan`
--

CREATE TABLE `prasarana_tambahan` (
  `id_prasarana_tamabahan` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `jenis_prasarana_tambahan` varchar(255) NOT NULL,
  `harga_prasarana` int(20) NOT NULL,
  `investasi_prasarana` int(20) NOT NULL,
  `rencana_investasi` int(20) NOT NULL,
  `sumber_dana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `sarana_tambahan`
--

CREATE TABLE `sarana_tambahan` (
  `id_sarana_tambahan` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `jenis_sarana_tambahan` varchar(150) NOT NULL,
  `tahun_beli_sarana` date NOT NULL,
  `investasi_sarana` int(20) NOT NULL,
  `sumber_dana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id_si` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `jenis_si` varchar(150) NOT NULL,
  `nama_sistem` varchar(255) NOT NULL,
  `bentuk_si` text NOT NULL,
  `fitur_si` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tenaga_kependidikan`
--

CREATE TABLE `tenaga_kependidikan` (
  `id_tenaga_kependidikan` int(10) UNSIGNED NOT NULL,
  `nama_departemen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_tenaga_kependidikan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, 1, 3, 'indah', 'indaah_hh', 'indaah@gmail.com', '$2y$10$qp0gm0eHIcTDKDIq7.b8xOLxV5RbqVvlEL/87DKkP8mV1dTLauyEW', 'WNzLI3xAYfBCF9vaqNMRw0SO4fGmt3DOT4iDX5wcLjw57ej1fBUOBvtQFSTj', '2018-03-03 19:21:25', '2018-03-03 19:21:25'),
(6, 2, 3, 'coba', 'coba_deui', 'coba@gmail.com', '$2y$10$Ec3UNL1AC89cSuqIgyl9FOlQ5EByQX5/Dr7mASF8Wwmx/a0L9dXJS', 'YQf5T6MitIkgWFy6EQsAGGlAJ922bfwvxEeiu8awq75kQcpidglxYHtLcxSe', '2018-03-04 03:43:46', '2018-03-04 03:43:46'),
(7, 1, 2, 'Admin', 'Admin', 'admin2@gmail.com', '$2y$10$b1.hXx8RVtbOtAIOqrNm8OsQyMfsUcKoF6KegZSi9YVzLIJNKZtDO', 'GnAk3q69NS3m6AzzQGEoBWpbXaKwbzj8y4X28iMGFRWMUthNtXbR3d7TlAQD', '2018-03-04 06:35:13', '2018-03-04 06:35:13'),
(8, 10, 0, 'indahh_hamidah', 'indahhh', 'in@gmail.com', '$2y$10$K8XqPCIraWNmvlStyq/jeOZNrKdc66NivaLHN2pfoMy2RCSukWCPS', 'bT2EtaNsTTdydFqtvRuO4a9wkqSbuA48bxsBkt4hZ7kMNamMi29mg60ZP4Iy', '2018-03-05 22:06:14', '2018-03-05 22:06:14'),
(9, 10, 1, 'Super Admin', 'Super_Admin', 'superadmin@gmail.com', '$2y$10$Jo/Owzzc1cNYwZiVJ6zglun.RncyLAb9pDRb8zURG5S3urpTCkOc6', 'LU2RZ68YuGcAUkq085wzaRscwrdYbpGaIEfhknxbMKi5Lg8oWCif4Vt2kbGO', '2018-03-06 07:26:31', '2018-03-06 07:26:31'),
(11, 3, 3, 'Meri Sudaryanti', 'meri_s', 'meri@gmail.com', '$2y$10$7BgSlY8/Nd4Ek6Pj01RauucEVvfjHlF/J0QI.xo.QoVJ0fj5uKZ5i', 'y819PqS9fV4P9aKyc2t9aP8wC1u2StacyN7iBf3CaJEXccSiWxXM9p3pA5hj', '2018-03-08 19:01:33', '2018-03-08 19:01:33'),
(12, 6, 3, 'Ketua Program Studi', 'Ketua_Prodi', 'kaprodi@gmail.com', '$2y$10$2MN3EmERPhLM6sA1RdnCv.2nDm8dHZzrCvXPO2WGhGnaWQRfcHTAO', 'bb9M7t2KlLTdsMebj1smalqNuFQP2kF5oMJDJd2sxvIcABt9Cy9Q9OLvQdgT', '2018-03-09 00:40:11', '2018-03-09 00:40:11'),
(13, 10, 1, 'TU FMIPA', 'tu_fmipa', 'tufmipa@gmail.com', '$2y$10$Q.J68S3qJrOKncgwEuBJ0.vnpnFgZKr1xMDHQZnUHkizqe5tiO.ae', 'lwqXQj1qyHa8utgySqnIpBj6mrCEOIxYE6JRskzQaoxgsksdrFFm0Hq85mSl', '2018-03-27 23:00:41', '2018-03-27 23:00:41'),
(14, 4, 3, 'usr4', 'user4', 'user4@gmail.com', '$2y$10$hvM1EMAMo7zZkWyfuNd5.uu59DwUHbOOpzYicE5JVyt90deKD86j.', 'P6wgwhmiCctDbxA03ijysTTHOEQncm2lelQIRBAjYG3ysvYRtr6hfP7ITqMf', '2018-03-30 08:01:00', '2018-03-30 08:01:00'),
(15, 5, 0, 'mate', 'matematika', 'mate@gmail.com', '$2y$10$6aKzw.sDW0w9jobi.Kg6fOcontEfgu862mTjQH4bnjn4/dOK1ahFO', 'SHFJSFaTK3OvF3hwA0V4tAlCf1JOCF4e9HcYgMsXnbE0JwyqPY6qg5ZLdGW7', '2018-03-31 05:31:14', '2018-03-31 05:31:14'),
(16, 7, 0, 'user7', 'user_7', 'user7@gmail.com', '$2y$10$1aiNm3f2SlTIw78EEOfzp.fuyX.HgftpTI11KcId6oaH8hwIpjZES', 'avW9YHjU6sQLUZYnNjHbUwhHc8v3fiKsSr2JcOf1DvBFZMHJNKPErnlEvW9J', '2018-03-31 05:42:46', '2018-03-31 05:42:46'),
(17, 8, 0, 'user8', 'user_8', 'user8@gmail.com', '$2y$10$ljs/zsWpgs/7GMjaHrlYkO/Qx0r6vB7dMZNA4BDEpYuGAHqyFVkca', 'DmhiZzRYGFGu2xnzz6TWYvfDta6yqHCXOXZGr5kWrq4LsONUZABwQV21D227', '2018-03-31 05:45:12', '2018-03-31 05:45:12'),
(18, 9, 0, 'user9', 'user_9', 'user9@gmail.com', '$2y$10$QZl1Zaxw10g6Jb1rPSQxLuFbt2oW52Azy8v4ZdYOF7GCIyaBBtE96', 'dWTQ9L5WnuDSLGjIplDrlZZ9grTJF9dAoghtxShJweDcwj7cHC8XcMc0m1w4', '2018-03-31 05:48:22', '2018-03-31 05:48:22'),
(19, 1, 4, 'cucu', 'cucu', 'cucu@gmail.com', '$2y$10$EMFtaKykiu1fmWmhe8fv3.Pztmmkwy3cDQm5eIbpVBC7s2bEyFcLa', 'NmOnMBvdvZAU0mLeQ37AMTw83zEx5e2jJtRXQ3mh5dRxT7kkdYiaFdR8u12W', '2018-04-08 19:24:13', '2018-04-08 19:24:13'),
(20, 6, 2, 'Admin_6', 'Admin_kom', 'admin_kom@gmail.com', '$2y$10$CW/usp1nH7nwHZmLFV0ppuKJ9YsZDNFqQPMwuApWXRDOmVLNfic2q', 'UA28xmuzoaqE4GE9waZw618nhxLBlQYqWbYwbShc18h31ApEBOhJHvU4lXep', '2018-04-08 22:27:10', '2018-04-08 22:27:10'),
(22, 6, 5, 'kk', 'kkk', 'kkk@gmail.com', '$2y$10$S0UCp0YkalAAWcH9cn3BjOFEL/h.u0DCqmlLV.J8JC0JjBBtRGsR.', 'g7419Igzm3fbw0Q1mlk6Y9Z94m6nhKc5vbVZsPWJr0bCGJ7nKZM0dMymLr0c', '2018-04-16 21:31:55', '2018-04-16 21:31:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_dept`);

--
-- Indexes for table `dosen_tetap`
--
ALTER TABLE `dosen_tetap`
  ADD PRIMARY KEY (`id_dosen_tetap`);

--
-- Indexes for table `hardware`
--
ALTER TABLE `hardware`
  ADD PRIMARY KEY (`id_hardware`);

--
-- Indexes for table `hubungan_kerjasama`
--
ALTER TABLE `hubungan_kerjasama`
  ADD PRIMARY KEY (`id_kerjasama`);

--
-- Indexes for table `jenis_mahasiswa`
--
ALTER TABLE `jenis_mahasiswa`
  ADD PRIMARY KEY (`id_jenis_mahasiswa`);

--
-- Indexes for table `jumlahs`
--
ALTER TABLE `jumlahs`
  ADD PRIMARY KEY (`id_jumlah`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `lulusans`
--
ALTER TABLE `lulusans`
  ADD PRIMARY KEY (`id_lulusan`),
  ADD UNIQUE KEY `nim` (`nim`),
  ADD UNIQUE KEY `judul_skripsi` (`judul_skripsi`),
  ADD UNIQUE KEY `no_ijazah` (`no_ijazah`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
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
-- Indexes for table `pengabdian_masyarakat`
--
ALTER TABLE `pengabdian_masyarakat`
  ADD PRIMARY KEY (`id_pengabdian`);

--
-- Indexes for table `penggantian_dosen`
--
ALTER TABLE `penggantian_dosen`
  ADD PRIMARY KEY (`id_penggantian`);

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
-- Indexes for table `perencanaan_dosen`
--
ALTER TABLE `perencanaan_dosen`
  ADD PRIMARY KEY (`id_perencanaan_dosen`);

--
-- Indexes for table `perencanaan_tkpd`
--
ALTER TABLE `perencanaan_tkpd`
  ADD PRIMARY KEY (`id_rencana_tkpd`);

--
-- Indexes for table `prasarana_tambahan`
--
ALTER TABLE `prasarana_tambahan`
  ADD PRIMARY KEY (`id_prasarana_tamabahan`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `sarana_tambahan`
--
ALTER TABLE `sarana_tambahan`
  ADD PRIMARY KEY (`id_sarana_tambahan`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id_si`);

--
-- Indexes for table `tenaga_kependidikan`
--
ALTER TABLE `tenaga_kependidikan`
  ADD PRIMARY KEY (`id_tenaga_kependidikan`);

--
-- Indexes for table `tipe_mahasiswa`
--
ALTER TABLE `tipe_mahasiswa`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_dept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `dosen_tetap`
--
ALTER TABLE `dosen_tetap`
  MODIFY `id_dosen_tetap` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hardware`
--
ALTER TABLE `hardware`
  MODIFY `id_hardware` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hubungan_kerjasama`
--
ALTER TABLE `hubungan_kerjasama`
  MODIFY `id_kerjasama` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_mahasiswa`
--
ALTER TABLE `jenis_mahasiswa`
  MODIFY `id_jenis_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jumlahs`
--
ALTER TABLE `jumlahs`
  MODIFY `id_jumlah` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `lulusans`
--
ALTER TABLE `lulusans`
  MODIFY `id_lulusan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penerimaans`
--
ALTER TABLE `penerimaans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `penerimaan_dana`
--
ALTER TABLE `penerimaan_dana`
  MODIFY `id_terima_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengabdian_masyarakat`
--
ALTER TABLE `pengabdian_masyarakat`
  MODIFY `id_pengabdian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penggantian_dosen`
--
ALTER TABLE `penggantian_dosen`
  MODIFY `id_penggantian` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `penggunaan_dana`
--
ALTER TABLE `penggunaan_dana`
  MODIFY `id_penggunaan_dana` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perencanaan_dosen`
--
ALTER TABLE `perencanaan_dosen`
  MODIFY `id_perencanaan_dosen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perencanaan_tkpd`
--
ALTER TABLE `perencanaan_tkpd`
  MODIFY `id_rencana_tkpd` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prasarana_tambahan`
--
ALTER TABLE `prasarana_tambahan`
  MODIFY `id_prasarana_tamabahan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sarana_tambahan`
--
ALTER TABLE `sarana_tambahan`
  MODIFY `id_sarana_tambahan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id_si` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tenaga_kependidikan`
--
ALTER TABLE `tenaga_kependidikan`
  MODIFY `id_tenaga_kependidikan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipe_mahasiswa`
--
ALTER TABLE `tipe_mahasiswa`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
