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
-- Table structure for table `hasil_pendidikan`
--

CREATE TABLE `hasil_pendidikan` (
  `id_hasilPendidikan` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_lampiran` int(11) DEFAULT NULL,
  `jenis_hasil` text NOT NULL,
  `judul_hasilPendidikan` varchar(255) NOT NULL,
  `nama_dosen` text NOT NULL,
  `id_haki` int(11) NOT NULL,
  `tahun_hasil` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_pendidikan`
--

INSERT INTO `hasil_pendidikan` (`id_hasilPendidikan`, `id_departemen`, `id_lampiran`, `jenis_hasil`, `judul_hasilPendidikan`, `nama_dosen`, `id_haki`, `tahun_hasil`) VALUES
(13, 6, NULL, 'Buku ajar', 'S', 'S', 2, 2016),
(14, 6, NULL, 'buku', 'saya', 'nina', 1, 2016);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_pendidikan`
--
ALTER TABLE `hasil_pendidikan`
  ADD PRIMARY KEY (`id_hasilPendidikan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_pendidikan`
--
ALTER TABLE `hasil_pendidikan`
  MODIFY `id_hasilPendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
