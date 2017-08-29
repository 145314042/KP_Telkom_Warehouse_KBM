-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2017 at 02:15 AM
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
-- Database: `telkom_wh_kbm`
--
CREATE DATABASE IF NOT EXISTS `telkom_wh_kbm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `telkom_wh_kbm`;

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
('B2735TFD', 'Nissan Evalia', 0),
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
  `NomorSIM` int(20) NOT NULL,
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
