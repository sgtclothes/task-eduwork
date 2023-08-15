-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 05:12 PM
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
-- Table structure for table `detail_suplier`
--

CREATE TABLE `detail_suplier` (
  `id` int(11) NOT NULL,
  `nama_PT` varchar(32) NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `sosial media` varchar(32) NOT NULL,
  `id_suplier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_suplier`
--

INSERT INTO `detail_suplier` (`id`, `nama_PT`, `umur`, `alamat`, `sosial media`, `id_suplier`) VALUES
(1, 'KAJOIEJIO', 12, 'JL KAKASJA HAHSAKJKE', '-', 1),
(2, 'KAJSLALEOI', 17, 'JL KAMKSAME JDAKMALML', 'KAMKJ', 2),
(3, 'KMALMSALNAKML', 20, 'JL KAMKSJAHERA JADAKLMRL ', 'LALAKKS', 3),
(4, 'KSMLSL', 70, 'JL KAJKJSAK JADHJHFHEGY', 'KMALML', 4),
(5, 'KMALMALM', 7, 'JL MAKNSAKNH ADKSAKAM', '-', 5),
(6, 'KJALKSLAKSQW;', 18, 'JL ASKNAJN HEAHBDHA', '-', 6),
(7, 'KASKAMLAAM', 45, 'JL KAMKAMSNEH NAJNDM', 'MANKDAM', 8),
(8, 'KAMKSANKAM', 54, 'JL MANKSAMLAK JSNJASNK', '-', 9),
(9, 'MNSKAMLASMLAS', 9, 'JL NJSANKKL JEJAJLS', 'KMASKS', 10),
(10, 'LKSLASNM JSNJSNJ', 19, 'JL JKAJSKAJE YEJABJN', 'JSBJSN', 11);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `harga_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `id_obat`, `id_transaksi`, `harga_obat`) VALUES
(1, 1, 1, 8000),
(2, 2, 2, 6000),
(3, 3, 3, 20000),
(4, 4, 4, 100000),
(5, 5, 5, 2500),
(6, 6, 6, 7500),
(7, 7, 7, 65000),
(8, 8, 8, 9000),
(9, 9, 9, 5500),
(10, 10, 10, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(32) NOT NULL,
  `kegunaan` varchar(64) NOT NULL,
  `tanggal_kadaluwarsa` date NOT NULL,
  `id_suplier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `kegunaan`, `tanggal_kadaluwarsa`, `id_suplier`) VALUES
(1, 'BODRA', 'OBAT PUSING KEPALA', '2023-08-09', 1),
(2, 'KONIDA', 'OBAT BATUK ', '2023-08-10', 2),
(3, 'PROMIG', 'OBAT MAGG', '2023-08-19', 3),
(4, 'KAKJD', 'OBAT CACINGAN', '2023-08-05', 4),
(5, 'MMXC', 'OBAT MASUK ANGIN', '2023-08-24', 5),
(6, 'UUYS', 'OBAT CINTA', '2023-08-15', 6),
(7, 'IUWYW', 'OBAT AWET MUDA', '2023-08-29', 8),
(8, 'OOPI', 'OBAT TIDUR', '2023-08-30', 9),
(9, 'TTARA', 'OBAT HIDUP BAHAGIA', '2023-08-23', 10),
(10, 'RTATU', 'OBAT PATAH HATI', '2023-08-04', 11);

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `no_hp` char(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama`, `no_hp`, `alamat`) VALUES
(1, 'UDIN', '0892726536', 'JL KAJKSHUAGFUIE'),
(2, 'ALEX', '092887376', 'JL MAKSKMLMALJ GSGYAT HAH'),
(3, 'SULTAN', '029029948', 'JL NAJNAKSL NAKSKJ BSYAY'),
(4, 'UCUP', '092988378474', 'JL JANKL HAKJS TAGDJ'),
(5, 'IWAN', '092309498847', 'JL SKAJKAJD HEJHMA NBSAHEUYG'),
(6, 'SULAEMAN', '0929893873', 'jl akjakjaksnbewhb namnxkal'),
(7, 'ABDUL', '02904929848728', 'JL ANJDNJEY JANDJNAKEMLADM'),
(8, 'TEDI', '0920939848', 'JL SBJANKMEY BJAJNAKMEK BAJBDAH'),
(9, 'DADANG ', '0938988374', 'JL  AKAKSJHE BDACHBCHGVSAY BSANNM'),
(10, 'ICUY', '0939847', 'JL JAKJSKL EAHUHG YGNANDKANL ');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id` int(11) NOT NULL,
  `nama_suplier` varchar(32) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id`, `nama_suplier`, `alamat`, `no_tlp`) VALUES
(1, 'KONIMEX', 'KP. Babakan peteuy no. 72 Cicalengka, Kab. Bandung', 12345),
(2, 'ABC JAYA', 'KP LEGOK HANGSEUR, BANDUNG, JAWA BARAT', 654321),
(3, 'MONTEK', 'KP. CIHERANG MENCRANG, SUMEDANG, JAWA BARAT', 543626),
(4, 'KOKA', 'JL BARAT', 717637),
(5, 'KLLA', 'JL KANAN', 8274879),
(6, 'KKJJ', 'JL ABCDFG', 8389754),
(8, 'KJH', 'JL JSHGUDJKSAL', 8377467),
(9, 'LLKAJ', 'JL JAKNSJDHFVNAT', 938937764),
(10, 'HAGFDD', 'JL NAJSHGYWG', 78487486),
(11, 'MANKNSK', 'JL JAJSDJAHUG7E', 8786783);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal`, `total_pembelian`, `id_pembeli`) VALUES
(1, '2023-08-09', 19872, 1),
(2, '2023-08-16', 300000, 2),
(3, '2023-08-11', 90944, 3),
(4, '2023-08-21', 1500, 4),
(5, '2023-08-17', 7500, 5),
(6, '2023-08-09', 1000000, 6),
(7, '2023-08-28', 15000, 7),
(8, '2023-08-10', 500, 8),
(9, '2023-08-15', 10000, 9),
(10, '2023-08-31', 300000930, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_suplier`
--
ALTER TABLE `detail_suplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detail_suplier` (`id_suplier`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detail_transaksi` (`id_obat`),
  ADD KEY `fk_detail_transaksi2` (`id_transaksi`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_suplier` (`id_suplier`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksi` (`id_pembeli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_suplier`
--
ALTER TABLE `detail_suplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_suplier`
--
ALTER TABLE `detail_suplier`
  ADD CONSTRAINT `fk_detail_suplier` FOREIGN KEY (`id_suplier`) REFERENCES `suplier` (`id`);

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `fk_detail_transaksi` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`),
  ADD CONSTRAINT `fk_detail_transaksi2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`);

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `fk_suplier` FOREIGN KEY (`id_suplier`) REFERENCES `suplier` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
