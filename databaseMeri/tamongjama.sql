-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 07:43 PM
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
-- Table structure for table `tamongjama`
--

CREATE TABLE `tamongjama` (
  `id_tamongjama` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `tamongjama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamongjama`
--

INSERT INTO `tamongjama` (`id_tamongjama`, `id_departemen`, `tamongjama`) VALUES
(4, 6, 'Sesuai dengan Statuta IPB, fakultas berkedudukan sebagai unsur pelaksana akademik yang melaksanakan sebagian tugas dan fungsi Perguruan Tinggi. Fakultas dipimpin oleh seorang Dekan yang bertanggungjawab langsung kepada Rektor. Dekan dipilih dan diangkat oleh Rektor untuk masa jabatan empat tahun dari 3 calon Dekan usulan Senat Fakultas berdasarkan hasil pemilihan oleh anggota Senat Fakultas terhadap calon-calon Dekan yang memenuhi persyaratan. Persyaratan dan tata cara pemilihan Dekan diatur dalam Surat Keputusan Rektor IPB Nomor: 25/IT3/KP/2014 tentang Tata Cara Pengangkatan dan Pernberhentian Dekan dan Wakil Dekan pada Fakultas di Lingkungan Institut Pertanian Bogor (Lampiran 2.1). Bagan alir pemilihan Dekan FMIPA dapat dilihat pada Gambar 2.1.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tamongjama`
--
ALTER TABLE `tamongjama`
  ADD PRIMARY KEY (`id_tamongjama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tamongjama`
--
ALTER TABLE `tamongjama`
  MODIFY `id_tamongjama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
