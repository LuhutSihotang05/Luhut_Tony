-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 04:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `sekretariatdprd`
--

CREATE TABLE `sekretariatdprd` (
  `kd_klasifikasi` varchar(20) NOT NULL,
  `no_box` int(11) NOT NULL,
  `no_berkas` int(11) NOT NULL,
  `uraian` text NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sekretariatdprd`
--

INSERT INTO `sekretariatdprd` (`kd_klasifikasi`, `no_box`, `no_berkas`, `uraian`, `tahun`, `jumlah`, `ket`, `file`) VALUES
('900', 1, 2, 'gatau', '2020', 4, 'inaktif', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sekretariatdprd`
--
ALTER TABLE `sekretariatdprd`
  ADD PRIMARY KEY (`kd_klasifikasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
