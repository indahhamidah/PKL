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
-- Table structure for table `penelitians`
--

CREATE TABLE `penelitians` (
  `id_penelitian` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_bukti` int(11) DEFAULT NULL,
  `judul_penelitian` varchar(255) NOT NULL,
  `nama_peneliti` varchar(255) NOT NULL,
  `tahun_penelitian` date NOT NULL,
  `jumlah_dana` int(255) NOT NULL,
  `id_sumberr` int(11) NOT NULL,
  `jenis_dana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penelitians`
--

INSERT INTO `penelitians` (`id_penelitian`, `id_departemen`, `id_bukti`, `judul_penelitian`, `nama_peneliti`, `tahun_penelitian`, `jumlah_dana`, `id_sumberr`, `jenis_dana`) VALUES
(26, 6, 31, 'Sistem Informasi', 'Waws', '2016-01-01', 200000, 2, 'Penelitian'),
(27, 6, 32, 'Sistem Informasi', 'Ana', '2017-09-10', 300000, 4, 'Penelitian'),
(28, 6, NULL, 'Sistem Informasi', 'B', '2018-02-05', 300000, 1, 'Penelitian'),
(29, 6, NULL, 'Hewan', 'Ina', '2018-06-06', 3000000, 5, 'Penelitian'),
(30, 1, NULL, 's', 's', '2017-12-12', 2300000, 3, 'Penelitian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penelitians`
--
ALTER TABLE `penelitians`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penelitians`
--
ALTER TABLE `penelitians`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
