-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2018 at 04:51 AM
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
  `id_departemen` int(11) NOT NULL,
  `nama_departemen` varchar(150) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_terima_dana` int(11) NOT NULL,
  `id_penggunaan_dana` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_penelitian` int(11) NOT NULL,
  `id_pengabdian` int(11) NOT NULL,
  `id_prestasi` int(11) NOT NULL,
  `id_sarana_tambahan` int(11) NOT NULL,
  `id_hardware` int(11) NOT NULL,
  `id_si` int(11) NOT NULL,
  `id_kerjasama` int(11) NOT NULL,
  `id_tenaga_kependidikan` int(11) NOT NULL,
  `id_penggantian_dosen` int(11) NOT NULL,
  `id_perencanaan_dosen` int(11) NOT NULL,
  `id_perencanaan_tkpd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `nama_departemen`, `id_user`, `id_mahasiswa`, `id_terima_dana`, `id_penggunaan_dana`, `id_kegiatan`, `id_penelitian`, `id_pengabdian`, `id_prestasi`, `id_sarana_tambahan`, `id_hardware`, `id_si`, `id_kerjasama`, `id_tenaga_kependidikan`, `id_penggantian_dosen`, `id_perencanaan_dosen`, `id_perencanaan_tkpd`) VALUES
(1, 'Statistika', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Geofisika dan Meteorologi', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Biologi', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Kimia', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Matematika', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Ilmu Komputer', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Fisika', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'Biokimia', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'Aktuaria', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'mipa', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
-- Table structure for table `jumlahs`
--

CREATE TABLE `jumlahs` (
  `id_jumlah` int(10) UNSIGNED NOT NULL,
  `tipe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_mahasiswa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_mahasiswa` int(11) NOT NULL,
  `tahun` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(10) UNSIGNED NOT NULL,
  `kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `kegiatan`, `tahun`, `created_at`, `updated_at`) VALUES
(2, 'PSN', '2018', '2018-02-27 00:48:58', '2018-02-27 00:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `lulusans`
--

CREATE TABLE `lulusans` (
  `id_lulusan` int(10) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_masuk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lulus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bulan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_tahun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `id_departemen` int(11) NOT NULL,
  `sumber_dana` varchar(50) NOT NULL,
  `jenis_dana` varchar(255) NOT NULL,
  `jumlah_dana_terima` int(20) NOT NULL,
  `tahun_terima_dana` int(11) NOT NULL,
  `id_penggunaan_dana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Meri', 'meri_sudaryanti', 'sudaryantimeri@gmail.com', '$2y$10$8/YtbDoqwwIdwEU4I5p4UubEAZlUbphUQtaHDzDvrKcfflDeR3am2', 'McbPQhncYmFPkbK6gaVUeMUlewiYl2Ad5v5ytsfWRFfmO3WgKWEI0uorfwY7', '2018-02-27 21:16:55', '2018-02-27 21:16:55'),
(4, 'indah', 'indah_h', 'indah@gmail.com', '$2y$10$uKPjGfTCiNusiSk418gRgeNNiqTiMfWoDfiViKz7kG01ZFT9EJwhO', NULL, '2018-02-28 23:43:25', '2018-02-28 23:43:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departemen`);

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
-- Indexes for table `jumlahs`
--
ALTER TABLE `jumlahs`
  ADD PRIMARY KEY (`id_jumlah`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lulusans`
--
ALTER TABLE `lulusans`
  ADD PRIMARY KEY (`id_lulusan`);

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
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
-- AUTO_INCREMENT for table `jumlahs`
--
ALTER TABLE `jumlahs`
  MODIFY `id_jumlah` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lulusans`
--
ALTER TABLE `lulusans`
  MODIFY `id_lulusan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_terima_dana` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
