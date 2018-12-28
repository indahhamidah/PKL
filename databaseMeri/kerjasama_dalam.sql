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
-- Table structure for table `kerjasama_dalam`
--

CREATE TABLE `kerjasama_dalam` (
  `id_kerjasamaDalam` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `jenis_kegiatan` varchar(255) NOT NULL,
  `tahun_mulai` year(4) NOT NULL,
  `tahun_akhir` year(4) NOT NULL,
  `manfaat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerjasama_dalam`
--

INSERT INTO `kerjasama_dalam` (`id_kerjasamaDalam`, `id_departemen`, `nama_instansi`, `jenis_kegiatan`, `tahun_mulai`, `tahun_akhir`, `manfaat`) VALUES
(5, 6, 'PT Jaya Abadi', 'Projek Sistem Informasi', 2016, 2017, 'Peningkatan kemampuan membuat sistem informasi bagi pegawai PT Jaya Abadi'),
(7, 6, 'Kabupaten Nias Utara', 'Peningkatan kapasitas guru MIPA Kabupaten Nias Utara', 2016, 2016, 'Peningkatan bidang MIPA dan IT bagi guru SMA/SMK sederajat'),
(11, 6, 'Yayasan Pendidikan Efarina, Kab. Simalungun, Sumatera Utara', 'Pembinaan OSN dan Bimbel untuk SMA/ SMK Efarina dan SMA Lainnya di Kab. Simalungun', 2015, 2017, 'Peningkatan OSN dan Bimbel untuk SMA/SMK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kerjasama_dalam`
--
ALTER TABLE `kerjasama_dalam`
  ADD PRIMARY KEY (`id_kerjasamaDalam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kerjasama_dalam`
--
ALTER TABLE `kerjasama_dalam`
  MODIFY `id_kerjasamaDalam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
