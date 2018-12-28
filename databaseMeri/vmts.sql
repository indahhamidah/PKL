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
-- Table structure for table `vmts`
--

CREATE TABLE `vmts` (
  `id_vmts` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `visimisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vmts`
--

INSERT INTO `vmts` (`id_vmts`, `id_departemen`, `visimisi`) VALUES
(5, 6, '<h2>Visi :</h2>\r\n<p>Pada tahun 2020 menjadi departemen terkemuka sebagai pelopor dalam bidang ilmu dan teknologi komputer untuk mendukung pertanian modern di tingkat regional (Asia Tenggara) dengan sistem pengelolaan yang berstandar internasional</p>\r\n<h2>Misi :</h2>\r\n<ul>\r\n<li>Menyelenggarakan pendidikan dan penelitian yang bermutu untuk menghasilkan lulusan yang handal, responsif, adaptif dan inovatif terhadap ilmu, metode, dan alat bantu dalam bidang ilmu dan teknologi komputer yang berperan dalam mewujudkan pertanian modern khususnya dan bidang lain pada umumnya serta memiliki jiwa kewirausahaan;</li>\r\n<li>Berperan aktif dalam pengembangan ilmu, metode, dan alat bantu dalam bidang ilmu komputer dan teknologi komputer melalui penelitian mutakhir;</li>\r\n<li>Berperan aktif dalam penyebarluasan ilmu, metode, dan alat bantu dalam bidang ilmu komputer serta penerapannya melalui publikasi ilmiah baik dalam bentuk jurnal maupun seminar ilmiah, kerjasam</li>\r\n<li>a dan pengabdian kepada masyarakat.</li>\r\n<li>jgkh\r\n<h2><img src=\"/photos/24/Desktop-Wallpapers-HD-Full-Screen.jpg\" alt=\"\" width=\"546\" height=\"307\" /></h2>\r\n</li>\r\n</ul>'),
(6, 10, '<p>Cinta ku pada mu leboh besaararrrrraaa</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vmts`
--
ALTER TABLE `vmts`
  ADD PRIMARY KEY (`id_vmts`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vmts`
--
ALTER TABLE `vmts`
  MODIFY `id_vmts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
