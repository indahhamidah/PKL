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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukti_pengabdian`
--
ALTER TABLE `bukti_pengabdian`
  ADD PRIMARY KEY (`id_buktiPeng`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti_pengabdian`
--
ALTER TABLE `bukti_pengabdian`
  MODIFY `id_buktiPeng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
