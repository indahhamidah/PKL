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
-- Table structure for table `perolehanhaki`
--

CREATE TABLE `perolehanhaki` (
  `id_perolehanHaki` int(11) NOT NULL,
  `perolehanHaki` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perolehanhaki`
--

INSERT INTO `perolehanhaki` (`id_perolehanHaki`, `perolehanHaki`) VALUES
(1, 'Ya'),
(2, 'Tidak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perolehanhaki`
--
ALTER TABLE `perolehanhaki`
  ADD PRIMARY KEY (`id_perolehanHaki`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perolehanhaki`
--
ALTER TABLE `perolehanhaki`
  MODIFY `id_perolehanHaki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
