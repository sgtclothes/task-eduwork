-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 08:28 PM
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
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(50) DEFAULT NULL,
  `id_satuan` int(10) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga_beli` decimal(19,0) DEFAULT NULL,
  `harga_jual` decimal(19,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `id_satuan`, `stok`, `harga_beli`, `harga_jual`) VALUES
(1, 'aspirin', 1, 100, 8500, 10000),
(3, 'dumin sirup', 2, 100, 5000, 10000),
(4, 'Paracetamol', 3, 20, 3000, 6000),
(5, 'Biogsefic', 5, 10, 11000, 16000),
(6, 'Kool Fever Anak', 6, 10, 1000, 4000),
(7, 'Praxion Sirup', 7, 10, 10000, 14000),
(8, 'Pimtrakol Kids', 8, 90, 24000, 25000),
(9, 'Tifamol', 9, 30, 5000, 10000),
(10, 'Contrexyn Demam Jeruk', 10, 10, 20000, 25000),
(12, 'Tempra Sirup', 12, 10, 6000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `no_faktur` int(11) NOT NULL,
  `tgl` date DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`no_faktur`, `tgl`, `total`) VALUES
(1, '2023-08-01', '40000'),
(2, '2023-08-10', '500000'),
(3, '2023-08-02', '40000'),
(4, '2023-08-05', '60000'),
(5, '2023-08-11', '43000'),
(6, '2023-08-05', '40000'),
(7, '2023-08-10', '76000'),
(8, '2023-08-09', '43000'),
(9, '2023-08-13', '100000'),
(10, '2023-08-08', '76500');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_detail`
--

CREATE TABLE `pembelian_detail` (
  `id_beli_dtl` int(11) NOT NULL,
  `qty` int(100) DEFAULT NULL,
  `harga_beli` varchar(100) DEFAULT NULL,
  `subtotal` varchar(100) DEFAULT NULL,
  `id_obat` int(11) NOT NULL,
  `no_faktur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembelian_detail`
--

INSERT INTO `pembelian_detail` (`id_beli_dtl`, `qty`, `harga_beli`, `subtotal`, `id_obat`, `no_faktur`) VALUES
(1, 2, '4000', '8000', 1, 1),
(2, 2, '500000', '1000000', 3, 2),
(3, 2, '4000', '8000', 4, 3),
(4, 2, '600000', '120000', 5, 4),
(5, 1, '4300', '43000', 6, 5),
(6, 2, '40000', '80000', 7, 6),
(7, 1, '76000', '76000', 8, 7),
(8, 1, '4300', '4300', 9, 8),
(9, 3, '1000000', '300000', 10, 9),
(10, 1, '76500', '76500', 12, 10);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `no_nota` int(11) NOT NULL,
  `tgl` date DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`no_nota`, `tgl`, `total`) VALUES
(1, '2023-08-17', '2000000'),
(2, '2023-08-10', '1000000'),
(3, '2023-08-03', '2000000'),
(4, '2023-08-10', '333000'),
(5, '2023-08-04', '5000000'),
(6, '2023-08-09', '200000'),
(7, '2023-08-05', '450000'),
(8, '2023-08-02', '220000'),
(9, '2023-08-09', '3000000'),
(10, '2023-08-03', '490000');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_detail`
--

CREATE TABLE `penjualan_detail` (
  `id_jual_dtl` int(11) NOT NULL,
  `qty` int(100) DEFAULT NULL,
  `subtotal` varchar(100) DEFAULT NULL,
  `id_obat` int(11) NOT NULL,
  `no_nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan_detail`
--

INSERT INTO `penjualan_detail` (`id_jual_dtl`, `qty`, `subtotal`, `id_obat`, `no_nota`) VALUES
(1, 1, '2000000', 1, 1),
(2, 2, '333333', 5, 2),
(3, 1, '2000000', 10, 3),
(4, 100000, '', 3, 4),
(5, 2, '4000000', 6, 5),
(6, 2, '5000000', 4, 6),
(7, 2, '2000000', 8, 7),
(8, 1, '2000000', 7, 8),
(9, 3, '2000000', 12, 9),
(10, 2, '2000000', 9, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`no_faktur`);

--
-- Indexes for table `pembelian_detail`
--
ALTER TABLE `pembelian_detail`
  ADD PRIMARY KEY (`id_beli_dtl`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `no_faktur` (`no_faktur`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`no_nota`);

--
-- Indexes for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  ADD PRIMARY KEY (`id_jual_dtl`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `no_nota` (`no_nota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `no_faktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembelian_detail`
--
ALTER TABLE `pembelian_detail`
  MODIFY `id_beli_dtl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `no_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  MODIFY `id_jual_dtl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian_detail`
--
ALTER TABLE `pembelian_detail`
  ADD CONSTRAINT `pembelian_detail_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `pembelian_detail_ibfk_2` FOREIGN KEY (`no_faktur`) REFERENCES `pembelian` (`no_faktur`);

--
-- Constraints for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  ADD CONSTRAINT `penjualan_detail_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `penjualan_detail_ibfk_2` FOREIGN KEY (`no_nota`) REFERENCES `penjualan` (`no_nota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
