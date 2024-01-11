-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 10:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotekbase1`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailpenjualan`
--

CREATE TABLE `detailpenjualan` (
  `idDetailP` int(11) NOT NULL,
  `obat_idObat` int(11) NOT NULL,
  `penjualan_idPenjualan` int(11) NOT NULL,
  `karyawan_idKaryawan` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detailrestock`
--

CREATE TABLE `detailrestock` (
  `idDetailR` int(11) NOT NULL,
  `obat_idObat` int(11) NOT NULL,
  `restock_idRestock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `idKaryawan` int(11) NOT NULL,
  `namaKaryawan` varchar(100) NOT NULL,
  `passwordKaryawan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`idKaryawan`, `namaKaryawan`, `passwordKaryawan`) VALUES
(1, 'bambak panuroto', 'bambank123'),
(2, 'yasuo suyanto', 'yasuo123');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriobat`
--

CREATE TABLE `kategoriobat` (
  `idKategori` int(11) NOT NULL,
  `namaKategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoriobat`
--

INSERT INTO `kategoriobat` (`idKategori`, `namaKategori`) VALUES
(1, 'obat cair'),
(2, 'obat oles'),
(3, 'kapsul'),
(4, 'tablet'),
(5, 'obat tetes');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `idObat` int(11) NOT NULL,
  `namaObat` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `hrgJual` int(11) NOT NULL,
  `hrgBeli` int(11) NOT NULL,
  `kategori_idKategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`idObat`, `namaObat`, `stock`, `hrgJual`, `hrgBeli`, `kategori_idKategori`) VALUES
(1, 'paramex', 10, 10000, 8000, 4),
(2, 'komix', 10, 5000, 4000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idPelanggan` int(11) NOT NULL,
  `namaPelanggan` varchar(100) NOT NULL,
  `passwordPelanggan` varchar(30) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idPelanggan`, `namaPelanggan`, `passwordPelanggan`, `tgl_daftar`) VALUES
(1, 'supriyadi', 'supriyadi123', '2024-01-11 18:42:33'),
(2, 'zainudin', 'zainudin123', '2024-01-11 18:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `idPenjualan` int(11) NOT NULL,
  `jumlahObat` int(11) NOT NULL,
  `pelanggan_idPelanggan` int(11) NOT NULL,
  `tanggalJual` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restock`
--

CREATE TABLE `restock` (
  `idRestock` int(11) NOT NULL,
  `karyawan_idKaryawan` int(11) NOT NULL,
  `tanggalRestock` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hrg_jual` int(11) NOT NULL,
  `hrg_beli` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD KEY `fk_obatDP` (`obat_idObat`),
  ADD KEY `fk_penjualanDP` (`penjualan_idPenjualan`),
  ADD KEY `fk_karyawanDP` (`karyawan_idKaryawan`);

--
-- Indexes for table `detailrestock`
--
ALTER TABLE `detailrestock`
  ADD KEY `fk_obatDR` (`obat_idObat`),
  ADD KEY `fk_restockDR` (`restock_idRestock`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`idKaryawan`);

--
-- Indexes for table `kategoriobat`
--
ALTER TABLE `kategoriobat`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`idObat`),
  ADD KEY `kategori_idKategori` (`kategori_idKategori`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idPelanggan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`idPenjualan`),
  ADD KEY `fk_penjualan` (`pelanggan_idPelanggan`);

--
-- Indexes for table `restock`
--
ALTER TABLE `restock`
  ADD PRIMARY KEY (`idRestock`),
  ADD KEY `fk_karyawanR` (`karyawan_idKaryawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `idKaryawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategoriobat`
--
ALTER TABLE `kategoriobat`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `idObat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idPelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `idPenjualan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD CONSTRAINT `fk_karyawanDP` FOREIGN KEY (`karyawan_idKaryawan`) REFERENCES `karyawan` (`idKaryawan`),
  ADD CONSTRAINT `fk_obatDP` FOREIGN KEY (`obat_idObat`) REFERENCES `obat` (`idObat`),
  ADD CONSTRAINT `fk_penjualanDP` FOREIGN KEY (`penjualan_idPenjualan`) REFERENCES `penjualan` (`idPenjualan`);

--
-- Constraints for table `detailrestock`
--
ALTER TABLE `detailrestock`
  ADD CONSTRAINT `fk_obatDR` FOREIGN KEY (`obat_idObat`) REFERENCES `obat` (`idObat`),
  ADD CONSTRAINT `fk_restockDR` FOREIGN KEY (`restock_idRestock`) REFERENCES `restock` (`idRestock`);

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `obat_ibfk_1` FOREIGN KEY (`kategori_idKategori`) REFERENCES `kategoriobat` (`idKategori`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fk_penjualan` FOREIGN KEY (`pelanggan_idPelanggan`) REFERENCES `pelanggan` (`idPelanggan`);

--
-- Constraints for table `restock`
--
ALTER TABLE `restock`
  ADD CONSTRAINT `fk_karyawanR` FOREIGN KEY (`karyawan_idKaryawan`) REFERENCES `karyawan` (`idKaryawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
