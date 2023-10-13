-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 10:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotik`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_details_transaksi`
--

CREATE TABLE `t_details_transaksi` (
  `id_details_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_obat`
--

CREATE TABLE `t_obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `pembuat_obat` varchar(60) DEFAULT NULL,
  `stock_obat` int(30) NOT NULL,
  `tanggal_kadaluwarsa` varchar(20) NOT NULL,
  `id_supplier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_pasien`
--

CREATE TABLE `t_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(50) DEFAULT NULL,
  `tanggal_lahir_pasien` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_pasien`
--

INSERT INTO `t_pasien` (`id_pasien`, `nama_pasien`, `tanggal_lahir_pasien`) VALUES
(1, 'Andi', '21 Januari 1995'),
(2, 'Agus', '04 Mei 1995'),
(3, 'Anji', '10 Mei 1992'),
(4, 'Tejo', '02 Agustus 1994'),
(5, 'Tyo', '15 September 1998'),
(6, 'Susanti', '30 Januari 1996'),
(7, 'Susi', '24 Maret 1993'),
(8, 'Danang', '27 Februari 2000'),
(9, 'Didi', '18 Oktober 1991'),
(10, 'Zaka', '13 November 1992');

-- --------------------------------------------------------

--
-- Table structure for table `t_supplier`
--

CREATE TABLE `t_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(40) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `no_telepon` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_transaksi`
--

CREATE TABLE `t_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_periksa` date NOT NULL,
  `jumlah_obat` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_transaksi`
--

INSERT INTO `t_transaksi` (`id_transaksi`, `tanggal_periksa`, `jumlah_obat`, `id_pasien`) VALUES
(1, '2022-01-05', 4, 1),
(2, '2022-01-12', 2, 2),
(3, '2022-01-13', 4, 3),
(4, '2022-01-12', 3, 4),
(5, '2022-01-12', 5, 5),
(6, '2022-01-13', 2, 6),
(7, '2022-01-13', 4, 7),
(8, '2022-01-13', 2, 8),
(9, '2022-01-14', 4, 9),
(10, '2022-01-14', 2, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_details_transaksi`
--
ALTER TABLE `t_details_transaksi`
  ADD PRIMARY KEY (`id_details_transaksi`) USING BTREE,
  ADD KEY `FK_t_obat` (`id_obat`),
  ADD KEY `FK_Transaksi` (`id_transaksi`);

--
-- Indexes for table `t_obat`
--
ALTER TABLE `t_obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `FK_Supplier` (`id_supplier`);

--
-- Indexes for table `t_pasien`
--
ALTER TABLE `t_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `t_supplier`
--
ALTER TABLE `t_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `FK_Pasien` (`id_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_details_transaksi`
--
ALTER TABLE `t_details_transaksi`
  MODIFY `id_details_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_obat`
--
ALTER TABLE `t_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_pasien`
--
ALTER TABLE `t_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_supplier`
--
ALTER TABLE `t_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_details_transaksi`
--
ALTER TABLE `t_details_transaksi`
  ADD CONSTRAINT `FK_Transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `t_transaksi` (`id_transaksi`),
  ADD CONSTRAINT `FK_t_obat` FOREIGN KEY (`id_obat`) REFERENCES `t_obat` (`id_obat`);

--
-- Constraints for table `t_obat`
--
ALTER TABLE `t_obat`
  ADD CONSTRAINT `FK_Supplier` FOREIGN KEY (`id_supplier`) REFERENCES `t_supplier` (`id_supplier`);

--
-- Constraints for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
  ADD CONSTRAINT `FK_Pasien` FOREIGN KEY (`id_pasien`) REFERENCES `t_pasien` (`id_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
