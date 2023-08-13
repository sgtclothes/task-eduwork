-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 05:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

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
-- Table structure for table `detail_pegawai`
--

CREATE TABLE `detail_pegawai` (
  `id_detail` int(20) NOT NULL,
  `domisili` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pegawai`
--

INSERT INTO `detail_pegawai` (`id_detail`, `domisili`, `agama`, `email`) VALUES
(1, 'Jakarta', 'Islam', 'contoh@gmail.com'),
(2, 'Bandung', 'Kristen', 'sample@yahoo.com'),
(3, 'Surabaya', 'Katolik', 'test@hotmail.com'),
(4, 'Medan', 'Hindu', 'demo@example.com'),
(5, 'Yogyakarta', 'Buddha', 'user@domain.com'),
(6, 'Semarang', 'Konghucu', 'email@provider.com'),
(7, 'Makassar', 'Lainnya', 'alamat@contoh.net'),
(8, 'Palembang', 'Islam', 'surat@online.id'),
(9, 'Denpasar', 'Hindu', 'kiriman@inbox.org'),
(10, 'Malang', 'Kristen', 'pesan@webmail.co');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(20) NOT NULL,
  `id_transaksi` int(20) NOT NULL,
  `id_obat` int(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `subtotal` decimal(20,0) NOT NULL,
  `id_pelanggan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `id_transaksi`, `id_obat`, `jumlah`, `subtotal`, `id_pelanggan`) VALUES
(1, 101, 201, 3, '30', 301),
(2, 101, 202, 2, '30', 301),
(3, 102, 203, 1, '25', 302),
(4, 103, 204, 5, '40', 303),
(5, 103, 205, 2, '24', 303),
(6, 104, 206, 3, '15', 304),
(7, 105, 207, 1, '7', 305),
(8, 106, 208, 4, '80', 306),
(9, 107, 209, 2, '36', 307),
(10, 108, 210, 1, '10', 308);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(50) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `stok` int(50) NOT NULL,
  `harga` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `stok`, `harga`) VALUES
(201, 'Paracetamol', 50, '10'),
(202, 'Ibuprofen', 30, '15'),
(203, 'Amoxicillin', 20, '25'),
(204, 'Loratadine', 40, '8'),
(205, 'Omeprazole', 25, '12'),
(206, 'Aspirin', 60, '5'),
(207, 'Cetirizine', 15, '7'),
(208, 'Simvastatin', 10, '20'),
(209, 'Metformin', 30, '18'),
(210, 'Amlodipine', 25, '10');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(20) NOT NULL,
  `nama_pegawai` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `jabatan`, `alamat`, `nomor_telepon`) VALUES
(1, 'John Doe', 'Apoteker', 'Jl. Apotek No. 123', '123-456-7890'),
(2, 'Jane Smith', 'Asisten Apoteker', 'Jl. Sehat No. 456', '987-654-3210'),
(3, 'Michael Lee', 'Kasir', 'Jl. Pembayaran No. 7', '456-789-1230'),
(4, 'Sarah Johnson', 'Apoteker', 'Jl. Obat Sejahtera N', '789-123-4560'),
(5, 'Robert Brown', 'Asisten Apoteker', 'Jl. Farmasi No. 567', '234-567-8901'),
(6, 'Emily Wilson', 'Asisten Apoteker', 'Jl. Kesehatan No. 89', '345-678-9012'),
(7, 'David Clark', 'Kasir', 'Jl. Transaksi No. 23', '456-789-0123'),
(8, 'Lisa Davis', 'Apoteker', 'Jl. Obat Berkualitas', '567-890-1234'),
(9, 'Kevin Allen', 'Asisten Apoteker', 'Jl. Medis No. 890', '678-901-2345'),
(10, 'Olivia King', 'Kasir', 'Jl. Pembayaran No. 1', '789-012-3456');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(20) NOT NULL,
  `nama_pelanggan` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `nomor_telepon` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `nomor_telepon`) VALUES
(301, 'John Doe', 'Jl. Pelanggan No. 12', 123),
(302, 'Jane Smith', 'Jl. Customer No. 456', 987),
(303, 'Michael Lee', 'Jl. Client No. 789', 456),
(304, 'Sarah Johnson', 'Jl. Member No. 1', 789),
(305, 'Robert Brown', 'Jl. Regular No. 567', 234),
(306, 'Emily Wilson', 'Jl. VVIP No. 890', 345),
(307, 'David Clark', 'Jl. Exclusive No. 23', 456),
(308, 'Lisa Davis', 'Jl. Platinum No. 7', 567),
(309, 'Kevin Allen', 'Jl. Gold No. 890', 678),
(310, 'Olivia King', 'Jl. Silver No. 123', 789);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(20) NOT NULL,
  `id_transaksi` int(20) NOT NULL,
  `metode_pembayaran` varchar(20) NOT NULL,
  `jumlah_pembayaran` decimal(20,0) NOT NULL,
  `tanggal_pembayaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_transaksi`, `metode_pembayaran`, `jumlah_pembayaran`, `tanggal_pembayaran`) VALUES
(201, 101, 'Cash', '50', '2023-08-10'),
(202, 102, 'Debit Card', '50', '2023-08-11'),
(203, 103, 'Credit Card', '64', '2023-08-12'),
(204, 104, 'Cash', '20', '2023-08-13'),
(205, 105, 'Cash', '7', '2023-08-14'),
(206, 106, 'Credit Card', '100', '2023-08-15'),
(207, 107, 'Cash', '54', '2023-08-16'),
(208, 108, 'Debit Card', '20', '2023-08-17'),
(209, 109, 'Cash', '36', '2023-08-18'),
(210, 110, 'Cash', '15', '2023-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_obat` int(50) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `total_harga` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal`, `id_obat`, `jumlah`, `total_harga`) VALUES
(101, '2023-08-10', 201, 5, '50'),
(102, '2023-08-11', 203, 2, '50'),
(103, '2023-08-12', 204, 7, '64'),
(104, '2023-08-13', 206, 4, '20'),
(105, '2023-08-14', 207, 1, '7'),
(106, '2023-08-15', 208, 5, '100'),
(107, '2023-08-16', 209, 3, '54'),
(108, '2023-08-17', 210, 2, '20'),
(109, '2023-08-18', 205, 3, '36'),
(110, '2023-08-19', 202, 1, '15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pegawai`
--
ALTER TABLE `detail_pegawai`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `pembayaran_ibfk_1` (`id_transaksi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_obat` (`id_obat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pegawai`
--
ALTER TABLE `detail_pegawai`
  MODIFY `id_detail` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `detail_transaksi_ibfk_3` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `detail_pegawai` (`id_detail`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
