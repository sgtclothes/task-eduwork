-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2024 at 07:46 AM
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
  `harga` int(11) NOT NULL,
  `jumlahObat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detailpenjualan`
--

INSERT INTO `detailpenjualan` (`idDetailP`, `obat_idObat`, `penjualan_idPenjualan`, `harga`, `jumlahObat`) VALUES
(1, 15, 1, 100000, 5),
(2, 8, 1, 400000, 5),
(3, 2, 2, 200000, 5),
(4, 14, 2, 100000, 5),
(5, 16, 3, 40000, 5),
(6, 7, 5, 100000, 5),
(7, 9, 5, 35000, 5),
(8, 12, 5, 75000, 5),
(9, 1, 2, 40000, 5),
(10, 15, 1, 100000, 5),
(11, 7, 3, 100000, 5),
(12, 14, 4, 50000, 5),
(13, 5, 4, 60000, 5),
(14, 10, 2, 25000, 5),
(15, 12, 3, 75000, 5),
(16, 15, 1, 100000, 5),
(17, 8, 1, 400000, 5),
(18, 2, 2, 200000, 5),
(19, 14, 2, 100000, 5),
(20, 16, 3, 40000, 5),
(21, 7, 5, 100000, 5),
(22, 9, 5, 35000, 5),
(23, 12, 5, 75000, 5),
(24, 1, 2, 40000, 5),
(25, 15, 1, 100000, 5),
(26, 7, 3, 100000, 5),
(27, 14, 4, 50000, 5),
(28, 5, 4, 60000, 5),
(29, 10, 2, 25000, 5),
(30, 12, 3, 75000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `detailrestock`
--

CREATE TABLE `detailrestock` (
  `idDetailR` int(11) NOT NULL,
  `obat_idObat` int(11) NOT NULL,
  `restock_idRestock` int(11) NOT NULL,
  `hrg_jual` int(11) NOT NULL,
  `hrg_beli` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detailrestock`
--

INSERT INTO `detailrestock` (`idDetailR`, `obat_idObat`, `restock_idRestock`, `hrg_jual`, `hrg_beli`, `stock`) VALUES
(1, 15, 1, 12000, 10000, 10),
(2, 17, 3, 8000, 7000, 10),
(3, 15, 3, 11000, 8000, 10),
(4, 12, 2, 10000, 9000, 10),
(5, 15, 1, 12000, 10000, 10),
(6, 17, 3, 8000, 7000, 10),
(7, 15, 3, 11000, 8000, 10),
(8, 12, 2, 10000, 9000, 10);

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
(2, 'yasuo suyanto', 'yasuo123'),
(3, 'dina fitriani', 'dina123'),
(4, 'ari setiawan', 'ari123'),
(5, 'hadi saputra', 'hadi123'),
(6, 'siska amelia', 'siska123');

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
(2, 'komix', 10, 5000, 4000, 4),
(3, 'ibuprofen', 10, 15000, 10000, 4),
(4, 'cetirizine', 10, 20000, 15000, 4),
(5, 'omeprazole', 10, 15000, 12000, 3),
(6, 'ranitidine', 10, 13000, 10000, 4),
(7, 'amoxcilin', 10, 25000, 20000, 4),
(8, 'metamizole', 10, 10000, 8000, 4),
(9, 'aspirin', 10, 12000, 7000, 4),
(10, 'loratadine', 0, 8000, 5000, 4),
(11, 'ibuprofen', 10, 15000, 10000, 4),
(12, 'cetirizine', 10, 20000, 15000, 4),
(13, 'omeprazole', 10, 15000, 12000, 3),
(14, 'ranitidine', 10, 13000, 10000, 4),
(15, 'amoxcilin', 10, 25000, 20000, 4),
(16, 'metamizole', 10, 10000, 8000, 4),
(17, 'aspirin', 10, 12000, 7000, 4),
(18, 'loratadine', 10, 8000, 5000, 4);

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
(2, 'zainudin', 'zainudin123', '2024-01-11 18:42:33'),
(3, 'budi santoso', 'budi123', '2024-01-12 19:15:18'),
(4, 'agung prabowo', 'agung123', '2024-01-12 19:15:18'),
(5, 'dewi lestari', 'dewi123', '2024-01-12 19:15:18'),
(6, 'dedi maulana', 'dedi123', '2024-01-12 19:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `idPenjualan` int(11) NOT NULL,
  `pelanggan_idPelanggan` int(11) NOT NULL,
  `tanggalJual` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `karyawan_idKaryawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`idPenjualan`, `pelanggan_idPelanggan`, `tanggalJual`, `karyawan_idKaryawan`) VALUES
(1, 1, '2024-01-13 05:26:17', 1),
(2, 2, '2024-01-13 05:26:17', 2),
(3, 3, '2024-01-13 05:26:17', 6),
(4, 4, '2024-01-13 05:26:17', 5),
(5, 5, '2024-01-13 05:26:17', 6);

-- --------------------------------------------------------

--
-- Table structure for table `restock`
--

CREATE TABLE `restock` (
  `idRestock` int(11) NOT NULL,
  `karyawan_idKaryawan` int(11) NOT NULL,
  `tanggalRestock` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restock`
--

INSERT INTO `restock` (`idRestock`, `karyawan_idKaryawan`, `tanggalRestock`) VALUES
(1, 1, '2024-01-13 05:24:15'),
(2, 2, '2024-01-13 05:24:15'),
(3, 3, '2024-01-13 05:24:15'),
(4, 4, '2024-01-13 05:24:15'),
(5, 6, '2024-01-13 05:24:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD PRIMARY KEY (`idDetailP`),
  ADD KEY `fk_obatDP` (`obat_idObat`),
  ADD KEY `fk_penjualanDP` (`penjualan_idPenjualan`);

--
-- Indexes for table `detailrestock`
--
ALTER TABLE `detailrestock`
  ADD PRIMARY KEY (`idDetailR`),
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
  ADD KEY `fk_penjualan` (`pelanggan_idPelanggan`),
  ADD KEY `fk_karyawanPenjualan` (`karyawan_idKaryawan`);

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
-- AUTO_INCREMENT for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  MODIFY `idDetailP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `detailrestock`
--
ALTER TABLE `detailrestock`
  MODIFY `idDetailR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `idKaryawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategoriobat`
--
ALTER TABLE `kategoriobat`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `idObat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idPelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `idPenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `restock`
--
ALTER TABLE `restock`
  MODIFY `idRestock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
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
  ADD CONSTRAINT `fk_karyawanP` FOREIGN KEY (`karyawan_idKaryawan`) REFERENCES `karyawan` (`idKaryawan`),
  ADD CONSTRAINT `fk_karyawanPenjualan` FOREIGN KEY (`karyawan_idKaryawan`) REFERENCES `karyawan` (`idKaryawan`),
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
