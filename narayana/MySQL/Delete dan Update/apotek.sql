-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2023 at 08:36 AM
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
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_obat`
--

CREATE TABLE `detail_obat` (
  `id` int(11) NOT NULL,
  `tanggal_kadaluarsa` date NOT NULL,
  `tanggal_produksi` date NOT NULL,
  `tempat_produksi` varchar(200) NOT NULL,
  `stock` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_obat`
--

INSERT INTO `detail_obat` (`id`, `tanggal_kadaluarsa`, `tanggal_produksi`, `tempat_produksi`, `stock`) VALUES
(1, '2024-08-02', '2014-08-08', 'PT Abbot Indonesia', '12'),
(2, '2014-08-02', '2025-08-16', 'PT Aditama Raya Farmindo', '123'),
(3, '2015-08-20', '2029-08-16', 'PT Afiat', '364'),
(4, '2014-08-30', '2026-08-20', 'PT Afifarma', '360'),
(5, '2017-08-18', '2027-08-23', 'PT. Actavis Indonesia', '125'),
(6, '2015-08-21', '2025-08-14', 'PT Apex Pharma Indonesia', '56'),
(8, '2023-08-17', '2027-08-13', 'PT Armoxindo Farma', '301'),
(9, '2013-08-23', '2025-08-21', 'PT ASTA Medica, Transfarma Medica Indah', '68'),
(10, '2015-08-21', '2027-08-24', 'PT Aventis', '256');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jumlah_obat` varchar(128) NOT NULL,
  `harga_obat` varchar(128) NOT NULL,
  `total_harga` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `id_obat`, `id_transaksi`, `jumlah_obat`, `harga_obat`, `total_harga`) VALUES
(2, 12, 7, '5', '2200', '30000'),
(4, 5, 8, '4', '5000', '36000'),
(5, 6, 9, '12', '6600', '69000'),
(6, 10, 10, '6', '9630', '69000'),
(7, 12, 10, '8', '50000', '120500'),
(8, 10, 5, '6', '3000', '56000'),
(9, 9, 7, '13', '5600', '126000'),
(10, 10, 8, '5', '8000', '65000'),
(11, 7, 5, '8', '5000', '78000');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `detail_obat` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `jenis` varchar(64) NOT NULL,
  `harga` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `detail_obat`, `nama`, `jenis`, `harga`) VALUES
(3, 10, 'ALERFED', 'Obat cair', '12000'),
(4, 4, 'ALERGON', 'Obat Cair', '5000'),
(5, 3, 'ASTEROL', 'Obat Cair', '6000'),
(6, 3, 'BDM', 'Obat Cair', '12000'),
(7, 8, 'Erdosteine', 'Obat Kapsul', '30000'),
(8, 9, 'Alaxan FR 10', 'Obat Kapsul', '25000'),
(9, 5, 'Codipront', 'Obat Kapsul', '10000'),
(10, 8, 'Norages', 'Obat Suntik', '25000'),
(11, 1, 'Ceftriaxone', 'Obat Suntik', '30000'),
(12, 3, 'Insulin Reguler', 'Obat Suntik', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `umur` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomer_telepon` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `umur`, `alamat`, `tanggal_lahir`, `nomer_telepon`) VALUES
(1, 'adit', '12', 'Jl Plemburan Tegal 207, Jawa Tengah', '2013-08-01', '08215305583'),
(3, 'tiya', '11', 'Jl Jend Sudirman Km 3, Sumatera Selatan', '2014-08-01', '08158882213'),
(4, 'fajar', '15', 'Jl Danau Sunter Utr Bl G-7/2, Jakarta', '2015-10-10', '08158112313'),
(5, 'adli', '16', 'Jl H Abdul Majid 25, Dki Jakarta', '2013-08-05', '08158144131'),
(6, 'gita', '11', 'Jl. Yos Sudarso No. 115B', '2013-05-05', '08219376589'),
(7, 'ahmad', '11', 'Jl Jelambar Brt III 2 CC, Dki Jakarta', '2009-08-05', '08211155786'),
(8, 'rita', '15', 'Jl Utama Raya 4 A, Dki Jakarta', '2010-01-12', '08217685876'),
(9, 'chandra', '17', 'Jl Batan 1 63, Dki Jakarta', '2013-06-12', '08211235512'),
(10, 'siti', '17', 'Jl Tiang Bendera III/70, Dki Jakarta', '2014-08-24', '08156787673');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total_harga` varchar(128) NOT NULL,
  `total_kembalian` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_pasien`, `tanggal_transaksi`, `total_harga`, `total_kembalian`) VALUES
(1, 1, '2023-08-10', '12000', '3000'),
(2, 1, '2023-08-11', '16000', '5000'),
(3, 3, '2022-08-26', '50000', '5000'),
(4, 4, '2023-08-25', '45000', '3500'),
(5, 6, '2022-08-25', '65000', '5500'),
(6, 9, '2022-08-24', '15000', '3250'),
(7, 7, '2022-08-27', '25600', '2500'),
(8, 6, '2021-08-17', '35000', '2560'),
(9, 7, '2021-08-27', '69300', '1200'),
(10, 8, '2024-08-21', '85600', '6000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_obat`
--
ALTER TABLE `detail_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksi` (`id_transaksi`),
  ADD KEY `fk_obat` (`id_obat`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_obat` (`detail_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pasien` (`id_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_obat`
--
ALTER TABLE `detail_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `fk_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`),
  ADD CONSTRAINT `fk_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`);

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `obat_ibfk_1` FOREIGN KEY (`detail_obat`) REFERENCES `detail_obat` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
