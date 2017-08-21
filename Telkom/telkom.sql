-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2017 at 03:11 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telkom`
--
CREATE DATABASE IF NOT EXISTS `telkom` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `telkom`;

-- --------------------------------------------------------

--
-- Table structure for table `kbm_mobil`
--

CREATE TABLE `kbm_mobil` (
  `NomorPolisi` varchar(10) NOT NULL,
  `NamaMobil` varchar(48) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kbm_mobil`
--

INSERT INTO `kbm_mobil` (`NomorPolisi`, `NamaMobil`, `Status`) VALUES
('B2735TFD', 'Nissan Evalia', 1),
('H9290GZ', 'Toyota Avanza', 1),
('H9308GZ', 'Toyota Avanza', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kbm_peminjaman_mobil`
--

CREATE TABLE `kbm_peminjaman_mobil` (
  `NomorPolisi` varchar(10) NOT NULL,
  `Peminjam` varchar(48) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `NomorTelepon` varchar(15) NOT NULL,
  `Keperluan` varchar(100) NOT NULL,
  `KMAmbil` int(11) NOT NULL,
  `KMKembali` int(11) NOT NULL,
  `Durasi` varchar(48) NOT NULL,
  `TanggalPinjam` date NOT NULL,
  `WaktuPinjam` time NOT NULL,
  `WaktuAmbil` time NOT NULL,
  `TanggalKembali` date NOT NULL,
  `WaktuKembali` time NOT NULL,
  `Pemberi` varchar(48) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kbm_peminjaman_mobil`
--

INSERT INTO `kbm_peminjaman_mobil` (`NomorPolisi`, `Peminjam`, `NIK`, `NomorTelepon`, `Keperluan`, `KMAmbil`, `KMKembali`, `Durasi`, `TanggalPinjam`, `WaktuPinjam`, `WaktuAmbil`, `TanggalKembali`, `WaktuKembali`, `Pemberi`, `Status`) VALUES
('B2735TFD', 'a', '1', '1', 'a', 1, 2, '2', '2017-08-19', '16:00:00', '22:46:10', '2017-08-19', '23:05:21', 'anonymous', 1),
('H9290GZ', 'sugi', '1', '21', '2', 2, 11, '2', '2017-08-24', '08:00:00', '23:20:32', '2017-08-19', '23:23:01', 'anonymous', 1),
('B2735TFD', 'a', '2', '2', '2', 0, 0, '2', '2017-08-26', '08:00:00', '23:20:34', '0000-00-00', '00:00:00', 'anonymous', -1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(48) NOT NULL,
  `Password` varchar(48) NOT NULL,
  `Name` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`, `Name`) VALUES
('admin', 'system', 'anonymous'),
('user1', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kbm_mobil`
--
ALTER TABLE `kbm_mobil`
  ADD PRIMARY KEY (`NomorPolisi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
