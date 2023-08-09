-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 03:38 AM
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
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `dt_jenis_obat`
--

CREATE TABLE `dt_jenis_obat` (
  `id_jenis_obat` int(11) NOT NULL,
  `jenis_obat` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dt_obat`
--

CREATE TABLE `dt_obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `stock` varchar(20) NOT NULL,
  `jenis_obat` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_jenis_obat`
--
ALTER TABLE `dt_jenis_obat`
  ADD PRIMARY KEY (`id_jenis_obat`),
  ADD KEY `id_jenis_obat` (`id_jenis_obat`),
  ADD KEY `jenis_obat` (`jenis_obat`),
  ADD KEY `id_jenis_obat_2` (`id_jenis_obat`);

--
-- Indexes for table `dt_obat`
--
ALTER TABLE `dt_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dt_jenis_obat`
--
ALTER TABLE `dt_jenis_obat`
  MODIFY `id_jenis_obat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dt_obat`
--
ALTER TABLE `dt_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dt_jenis_obat`
--
ALTER TABLE `dt_jenis_obat`
  ADD CONSTRAINT `dt_jenis_obat_ibfk_1` FOREIGN KEY (`id_jenis_obat`) REFERENCES `dt_obat` (`id_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
