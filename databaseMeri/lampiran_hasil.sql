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
-- Table structure for table `lampiran_hasil`
--

CREATE TABLE `lampiran_hasil` (
  `id_lampiran` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `id_hasilPendidikan` int(11) NOT NULL,
  `lampiran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran_hasil`
--

INSERT INTO `lampiran_hasil` (`id_lampiran`, `id_departemen`, `id_hasilPendidikan`, `lampiran`) VALUES
(5, 3, 10, '[Update 270916] Tugas Praktikum 3 AI.pdf'),
(6, 3, 6, '[Update 270916] Tugas Praktikum 3 AI.pdf'),
(7, 6, 11, 'WhitePaper-1.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lampiran_hasil`
--
ALTER TABLE `lampiran_hasil`
  ADD PRIMARY KEY (`id_lampiran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lampiran_hasil`
--
ALTER TABLE `lampiran_hasil`
  MODIFY `id_lampiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
