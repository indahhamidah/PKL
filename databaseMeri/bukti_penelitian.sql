-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 07:41 PM
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
-- Database: `db_lagi`
--

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
(32, 27, 6, 'Cetak.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukti_penelitian`
--
ALTER TABLE `bukti_penelitian`
  ADD PRIMARY KEY (`id_bukti`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti_penelitian`
--
ALTER TABLE `bukti_penelitian`
  MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
