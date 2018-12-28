-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 07:42 PM
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
-- Table structure for table `pengabdians`
--

CREATE TABLE `pengabdians` (
  `id_pengabdian` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_buktiPeng` int(11) DEFAULT NULL,
  `judul_pengabdian` varchar(255) NOT NULL,
  `dosen_pelaksana` varchar(255) NOT NULL,
  `tahun_pengabdian` date NOT NULL,
  `jumlah_dana_peng` int(255) NOT NULL,
  `id_sumberr` int(11) NOT NULL,
  `jenis_dana_peng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengabdians`
--

INSERT INTO `pengabdians` (`id_pengabdian`, `id_departemen`, `id_buktiPeng`, `judul_pengabdian`, `dosen_pelaksana`, `tahun_pengabdian`, `jumlah_dana_peng`, `id_sumberr`, `jenis_dana_peng`) VALUES
(7, 6, 7, 'Pembinaan sistem', 'B', '2018-02-01', 2000000, 1, ''),
(8, 3, 3, 'Masyarakat', 'Ana', '2017-10-20', 11111, 5, ''),
(9, 3, 4, 'Pengabdian', 'manuel', '2017-08-16', 20000, 4, ''),
(10, 3, 5, 'Pembinaan sistem Informasi', 'ddd', '2016-04-10', 34455, 2, ''),
(11, 3, 6, 'sdgdg', 'dfhdfg', '2017-07-17', 1214, 2, ''),
(12, 6, 8, 'Masyarakat', 'B', '2016-04-04', 12346, 1, ''),
(14, 6, NULL, 'Pengabdian', 'manuel', '2018-02-02', 20000, 5, 'Pengabdian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengabdians`
--
ALTER TABLE `pengabdians`
  ADD PRIMARY KEY (`id_pengabdian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengabdians`
--
ALTER TABLE `pengabdians`
  MODIFY `id_pengabdian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
