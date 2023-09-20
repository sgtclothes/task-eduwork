-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 08:02 AM
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
-- Database: `database_apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `apotek`
--

CREATE TABLE `apotek` (
  `id_apotek` int(6) NOT NULL,
  `nama_apotek` varchar(32) NOT NULL,
  `alamat_apotek` varchar(64) NOT NULL,
  `no_telepon` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apotek`
--

INSERT INTO `apotek` (`id_apotek`, `nama_apotek`, `alamat_apotek`, `no_telepon`) VALUES
(345186, 'KIMIA JAYA', 'Surabaya agak utara', '083967865467'),
(657489, 'MEDIKA KIMIA', 'Surabaya agak tenggara', '089712256789'),
(752987, 'KIMIA JAYA', 'Surabaya agak barat', '087698765432'),
(786345, 'MEDIKA FARMA', 'Surabaya agak selatan', '089786543678'),
(893567, 'MEDIKA JAYA', 'Surabaya agak timur', '086547895672');

-- --------------------------------------------------------

--
-- Table structure for table `apoteker`
--

CREATE TABLE `apoteker` (
  `id_apoteker` int(6) NOT NULL,
  `nama_apoteker` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apoteker`
--

INSERT INTO `apoteker` (`id_apoteker`, `nama_apoteker`) VALUES
(456789, 'REHANA'),
(672232, 'JARIMAN'),
(688123, 'VERINA'),
(721885, 'HANIMAN'),
(788902, 'KARMIMAN'),
(789234, 'LILIS SUKMA'),
(871136, 'KARSANI'),
(920922, 'UMAMAMAMA');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pasien`
--

CREATE TABLE `detail_pasien` (
  `id_pasien` int(6) NOT NULL,
  `nama_pasien` varchar(32) NOT NULL,
  `no_telepon` char(12) NOT NULL,
  `alamat_pasien` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_pasien`
--

INSERT INTO `detail_pasien` (`id_pasien`, `nama_pasien`, `no_telepon`, `alamat_pasien`) VALUES
(100987, 'baharuddin', '083967865467', 'Surabaya agak tenggara'),
(111333, 'jiran', '087698765432', 'Surabaya agak selatan dikit'),
(120987, 'rinanun', '082345678902', 'Surabaya agak timur dikit'),
(126786, 'burhanuddin', '089712256789', 'Surabaya agak timur'),
(156524, 'sinta', '087654567890', 'Surabaya agak timur banyak'),
(156745, 'kurnia', '088345678901', 'Surabaya agak timur barat kanan'),
(165629, 'ajeng', '081234567890', 'Surabaya agak timur banyak'),
(235675, 'samsul', '089786543678', 'Surabaya agak tenggara dikit'),
(256376, 'jihan', '089672667778', 'Surabaya agak tenggara kanan barat'),
(346785, 'yunia', '086547895672', 'Surabaya agak tenggara banyak'),
(892345, 'karminem', '080123456789', 'Surabaya agak selatan');

-- --------------------------------------------------------

--
-- Table structure for table `detail_resep`
--

CREATE TABLE `detail_resep` (
  `id_apoteker` int(6) NOT NULL,
  `id_resep` int(6) NOT NULL,
  `id_pasien` int(6) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `id_apotek` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_resep`
--

INSERT INTO `detail_resep` (`id_apoteker`, `id_resep`, `id_pasien`, `tanggal_pemesanan`, `id_apotek`) VALUES
(672232, 111111, 165629, '2023-09-08', 786345),
(871136, 111112, 346785, '2023-09-05', 752987),
(920922, 111113, 120987, '2023-09-07', 657489),
(688123, 111114, 235675, '2023-09-09', 657489),
(456789, 111115, 126786, '2023-09-03', 893567),
(672232, 111116, 165629, '2023-09-10', 657489),
(788902, 111117, 156524, '2023-09-11', 893567),
(789234, 111118, 120987, '2023-09-10', 786345),
(789234, 111119, 156524, '2023-09-05', 786345),
(920922, 111120, 111333, '2023-09-01', 345186),
(721885, 111121, 346785, '2023-09-02', 786345),
(871136, 111122, 100987, '2023-09-03', 657489);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(6) NOT NULL,
  `nama_obat` varchar(32) NOT NULL,
  `harga_obat` int(12) NOT NULL,
  `stok` int(12) NOT NULL,
  `id_apotek` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `harga_obat`, `stok`, `id_apotek`) VALUES
(218765, 'sanmol', 15000, 15, 345186),
(234567, 'glikolisin', 40000, 30, 752987),
(324567, 'simvastatin', 10000, 40, 752987),
(345698, 'glicodex', 6000, 30, 786345),
(567854, 'atrovastatin', 4000, 40, 893567),
(678543, 'betametason', 5000, 20, 752987),
(765432, 'ctm', 2000, 40, 752987),
(786532, 'amoxillin', 6000, 30, 786345),
(876543, 'glikos', 3000, 50, 786345),
(987654, 'paracetamol', 5000, 20, 345186);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apotek`
--
ALTER TABLE `apotek`
  ADD PRIMARY KEY (`id_apotek`);

--
-- Indexes for table `apoteker`
--
ALTER TABLE `apoteker`
  ADD PRIMARY KEY (`id_apoteker`);

--
-- Indexes for table `detail_pasien`
--
ALTER TABLE `detail_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `detail_resep`
--
ALTER TABLE `detail_resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `id2` (`id_apotek`),
  ADD KEY `id3` (`id_pasien`),
  ADD KEY `id4` (`id_apoteker`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `id1` (`id_apotek`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apotek`
--
ALTER TABLE `apotek`
  MODIFY `id_apotek` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=893568;

--
-- AUTO_INCREMENT for table `apoteker`
--
ALTER TABLE `apoteker`
  MODIFY `id_apoteker` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=990923;

--
-- AUTO_INCREMENT for table `detail_pasien`
--
ALTER TABLE `detail_pasien`
  MODIFY `id_pasien` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=892346;

--
-- AUTO_INCREMENT for table `detail_resep`
--
ALTER TABLE `detail_resep`
  MODIFY `id_resep` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111123;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=987655;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_resep`
--
ALTER TABLE `detail_resep`
  ADD CONSTRAINT `id2` FOREIGN KEY (`id_apotek`) REFERENCES `apotek` (`id_apotek`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id3` FOREIGN KEY (`id_pasien`) REFERENCES `detail_pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id4` FOREIGN KEY (`id_apoteker`) REFERENCES `apoteker` (`id_apoteker`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `id1` FOREIGN KEY (`id_apotek`) REFERENCES `apotek` (`id_apotek`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
