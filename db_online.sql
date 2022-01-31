-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 05:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faskes`
--

CREATE TABLE `tbl_faskes` (
  `id_faskes` int(5) NOT NULL,
  `nama_faskes` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faskes`
--

INSERT INTO `tbl_faskes` (`id_faskes`, `nama_faskes`) VALUES
(333, 'faskes 2'),
(444, 'faskes 3'),
(1234, 'faskes 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `nik` int(16) NOT NULL,
  `nama_pasien` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_datang` datetime NOT NULL,
  `no_antrian` int(2) NOT NULL,
  `id_faskes` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`nik`, `nama_pasien`, `alamat`, `tgl_datang`, `no_antrian`, `id_faskes`) VALUES
(192010454, 'raka', 'vilnus2', '2022-01-31 14:46:56', 1, 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_faskes`
--
ALTER TABLE `tbl_faskes`
  ADD PRIMARY KEY (`id_faskes`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `fk_faskes` (`id_faskes`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD CONSTRAINT `fk_faskes` FOREIGN KEY (`id_faskes`) REFERENCES `tbl_faskes` (`id_faskes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
