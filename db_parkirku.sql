-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 05:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_parkirku`
--

-- --------------------------------------------------------

--
-- Table structure for table `besarlahan`
--

CREATE TABLE `besarlahan` (
  `id` int(1) NOT NULL,
  `besar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `besarlahan`
--

INSERT INTO `besarlahan` (`id`, `besar`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `datamobil`
--

CREATE TABLE `datamobil` (
  `id` int(10) NOT NULL,
  `platnomor` varchar(10) NOT NULL,
  `tanggalmasuk` date NOT NULL,
  `tanggalkeluar` date NOT NULL,
  `waktumasuk` time NOT NULL,
  `waktukeluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datamobil`
--

INSERT INTO `datamobil` (`id`, `platnomor`, `tanggalmasuk`, `tanggalkeluar`, `waktumasuk`, `waktukeluar`) VALUES
(2, 'S 1821 OP', '2021-04-03', '2021-04-03', '12:21:50', '15:30:21'),
(3, 'W 2109 LK', '2021-04-01', '2021-04-05', '10:21:50', '18:30:21'),
(4, 'L 3145 SA', '2021-04-04', '2021-04-05', '11:21:50', '18:30:21'),
(5, 'DK 8912 Y', '2021-04-08', '2021-04-09', '11:21:50', '18:30:21'),
(6, 'N 1621 KU', '2021-04-04', '2021-04-06', '20:53:32', '10:42:32'),
(8, 'L 1231 KK', '2021-04-11', '2021-04-11', '21:19:00', '23:05:00'),
(9, 'DK 4312 L', '2021-04-11', '2021-04-11', '00:22:00', '23:25:00'),
(10, 'N 9999 M', '2021-04-11', '2021-04-14', '11:26:00', '23:28:00'),
(11, 'W 1921 YY', '2021-04-11', '2021-04-12', '23:39:00', '23:44:00'),
(12, 'N 1234 Y', '2021-04-20', '2021-04-20', '10:46:00', '23:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `username`, `password`, `role`) VALUES
(1, 'Ardi', '123', 'Admin'),
(2, 'Jose', '123', 'Pintu Masuk'),
(3, 'Akir', '123', 'Pintu Keluar'),
(4, 'Rudi', '123', 'Manajemen'),
(25, 'Admin', '123', 'Admin'),
(29, 'Parkir', '123', 'Petugas Parkir'),
(30, 'Masuk', '123', 'Pintu Masuk'),
(31, 'Keluar', '123', 'Pintu Keluar'),
(33, 'Manajemen', '123', 'Manajemen'),
(38, 'Koru', '123', 'Petugas Parkir');

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE `tempat` (
  `id` int(10) NOT NULL,
  `platnomor` varchar(10) NOT NULL,
  `tempat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`id`, `platnomor`, `tempat`) VALUES
(1, '', '5'),
(3, '', '2'),
(4, 'W 2109 LK', '1'),
(6, '', '10'),
(7, '', '9'),
(8, '', '8'),
(9, '', '7'),
(10, '', '6'),
(11, '', '4'),
(14, '', '3'),
(22, '', '11'),
(24, '', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `besarlahan`
--
ALTER TABLE `besarlahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datamobil`
--
ALTER TABLE `datamobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tempat` (`tempat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datamobil`
--
ALTER TABLE `datamobil`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tempat`
--
ALTER TABLE `tempat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
