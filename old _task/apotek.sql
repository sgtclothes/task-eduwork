-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 15 Agu 2023 pada 05.55
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `daftar_obat`
--

CREATE TABLE `daftar_obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(64) NOT NULL,
  `pembuat` varchar(64) DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `kedaluwarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar_obat`
--

INSERT INTO `daftar_obat` (`id_obat`, `nama_obat`, `pembuat`, `stok`, `kedaluwarsa`) VALUES
(15, 'varsina', NULL, 10000, '2024-08-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_transaksi`
--

CREATE TABLE `daftar_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `pasien` varchar(64) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar_transaksi`
--

INSERT INTO `daftar_transaksi` (`id_transaksi`, `pasien`, `id_obat`, `jumlah_transaksi`) VALUES
(11, 'Toni', 15, 6);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_obat`
--
ALTER TABLE `daftar_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `daftar_transaksi`
--
ALTER TABLE `daftar_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `id_obat` (`id_obat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_obat`
--
ALTER TABLE `daftar_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `daftar_transaksi`
--
ALTER TABLE `daftar_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_obat`
--
ALTER TABLE `daftar_obat`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`id_obat`) REFERENCES `daftar_transaksi` (`id_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
