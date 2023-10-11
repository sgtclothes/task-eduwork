-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 07:12 PM
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
-- Database: `eduwork_apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_supplier`
--

CREATE TABLE `detail_supplier` (
  `id` int(11) NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `website` varchar(50) DEFAULT NULL,
  `id_supplier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_supplier`
--

INSERT INTO `detail_supplier` (`id`, `no_telpon`, `email`, `alamat`, `website`, `id_supplier`) VALUES
(1, '0812345678901', 'supplier01@test.com', 'Surabaya', 'www.supplier01.com', 1),
(2, '0812345678902', 'supplier02@test.com', 'Karawang', 'www.supplier02.com', 2),
(3, '0812345678903', 'supplier03@test.com', 'Bekasi', 'www.supplier03.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi_pembelian`
--

CREATE TABLE `detail_transaksi_pembelian` (
  `id` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `id_transaksi_pembelian` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaksi_pembelian`
--

INSERT INTO `detail_transaksi_pembelian` (`id`, `id_obat`, `id_transaksi_pembelian`, `jumlah`) VALUES
(1, 1, 3, 20),
(2, 2, 4, 20);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi_penjualan`
--

CREATE TABLE `detail_transaksi_penjualan` (
  `id` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `id_transaksi_penjualan` int(11) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaksi_penjualan`
--

INSERT INTO `detail_transaksi_penjualan` (`id`, `id_obat`, `id_transaksi_penjualan`, `jumlah`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `harga_beli` varchar(50) NOT NULL,
  `harga_jual` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `harga_beli`, `harga_jual`, `stok`, `id_supplier`) VALUES
(1, 'obat01', '10000', '14000', 50, 1),
(2, 'obat02', '18000', '24000', 50, 2),
(3, 'obat03', '9000', '13000', 60, 3),
(4, 'obat04', '10000', '15000', 40, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_wa` varchar(13) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `no_wa`, `alamat`) VALUES
(1, 'pelanggan01', '085697477112', 'Klari, Karawang'),
(2, 'pelanggan02', '082114219436', 'Karawang Timur, Karawang');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `nama_supplier`) VALUES
(1, 'supplier01'),
(2, 'supplier02'),
(3, 'supplier03');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pembelian`
--

CREATE TABLE `transaksi_pembelian` (
  `id` int(11) NOT NULL,
  `tanggal_transaksi_pembelian` timestamp NOT NULL DEFAULT current_timestamp(),
  `total` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi_pembelian`
--

INSERT INTO `transaksi_pembelian` (`id`, `tanggal_transaksi_pembelian`, `total`, `id_supplier`) VALUES
(3, '2023-08-05 16:13:04', 1, 1),
(4, '2023-08-05 16:13:04', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_penjualan`
--

CREATE TABLE `transaksi_penjualan` (
  `id` int(11) NOT NULL,
  `tanggal_penjualan` timestamp NOT NULL DEFAULT current_timestamp(),
  `total` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi_penjualan`
--

INSERT INTO `transaksi_penjualan` (`id`, `tanggal_penjualan`, `total`, `id_pelanggan`) VALUES
(1, '2023-08-05 16:04:29', 1, 1),
(2, '2023-08-05 16:04:29', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_supplier`
--
ALTER TABLE `detail_supplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_supplier` (`id_supplier`);

--
-- Indexes for table `detail_transaksi_pembelian`
--
ALTER TABLE `detail_transaksi_pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_obat_pembelian` (`id_obat`),
  ADD KEY `fk_id_transaksi_pembelian` (`id_transaksi_pembelian`);

--
-- Indexes for table `detail_transaksi_penjualan`
--
ALTER TABLE `detail_transaksi_penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_obat_penjualan` (`id_obat`),
  ADD KEY `fk_id_detail_transaksi_penjualan` (`id_transaksi_penjualan`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_supplier_obat` (`id_supplier`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_supplier_pembelian` (`id_supplier`);

--
-- Indexes for table `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_pelanggan` (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_supplier`
--
ALTER TABLE `detail_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detail_transaksi_pembelian`
--
ALTER TABLE `detail_transaksi_pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_transaksi_penjualan`
--
ALTER TABLE `detail_transaksi_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_supplier`
--
ALTER TABLE `detail_supplier`
  ADD CONSTRAINT `fk_supplier` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id`);

--
-- Constraints for table `detail_transaksi_pembelian`
--
ALTER TABLE `detail_transaksi_pembelian`
  ADD CONSTRAINT `fk_id_obat_pembelian` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`),
  ADD CONSTRAINT `fk_id_transaksi_pembelian` FOREIGN KEY (`id_transaksi_pembelian`) REFERENCES `transaksi_pembelian` (`id`);

--
-- Constraints for table `detail_transaksi_penjualan`
--
ALTER TABLE `detail_transaksi_penjualan`
  ADD CONSTRAINT `fk_id_detail_transaksi_penjualan` FOREIGN KEY (`id_transaksi_penjualan`) REFERENCES `transaksi_penjualan` (`id`),
  ADD CONSTRAINT `fk_id_obat_penjualan` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`);

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `fk_supplier_obat` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id`);

--
-- Constraints for table `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  ADD CONSTRAINT `fk_id_supplier_pembelian` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id`);

--
-- Constraints for table `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  ADD CONSTRAINT `fk_id_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
