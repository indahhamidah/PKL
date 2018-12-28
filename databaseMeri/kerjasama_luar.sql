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
-- Table structure for table `kerjasama_luar`
--

CREATE TABLE `kerjasama_luar` (
  `id_kerjasamaLuar` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `jenis_kegiatan` varchar(255) NOT NULL,
  `tahun_mulai` year(4) NOT NULL,
  `tahun_akhir` year(4) NOT NULL,
  `manfaat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerjasama_luar`
--

INSERT INTO `kerjasama_luar` (`id_kerjasamaLuar`, `id_departemen`, `nama_instansi`, `jenis_kegiatan`, `tahun_mulai`, `tahun_akhir`, `manfaat`) VALUES
(1, 6, 'UNICEF', 'Adaptasi Perubahan Iklim Fokus Anak/Child Centered Climate Change Adaptation (APIFA/C4A)', 2016, 2017, 'Tersedianya data pengetahun dan kesadaran masyarakat terkait degan adaptasi perubahan iklim.'),
(2, 6, 'Faculty of Science, Leiden University, Netherlands', 'Pendidikan dan penelitian', 2015, 2019, 'Terjalinnya kerjasama dalam pendidikan dan penelitian antara FMIPA dengan Leiden University'),
(3, 6, 'SOKA Univrsity Jepang', 'Kerjasama penelitian', 2016, 2020, 'Terjalinnya kerjasama dalam penelitian antara FMIPA IPB dengan Soka University');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kerjasama_luar`
--
ALTER TABLE `kerjasama_luar`
  ADD PRIMARY KEY (`id_kerjasamaLuar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kerjasama_luar`
--
ALTER TABLE `kerjasama_luar`
  MODIFY `id_kerjasamaLuar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
