-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Jul 2023 pada 09.41
-- Versi server: 5.7.33
-- Versi PHP: 8.2.3

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
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `id` int(11) NOT NULL,
  `alamat` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alamat`
--

INSERT INTO `alamat` (`id`, `alamat`) VALUES
(1, 'Jl. Soekarno-Hatta'),
(2, 'Jl. Patimura'),
(3, 'Jl. Ahmad Yani'),
(4, 'Jl. Ki Mangun Sarkoro'),
(5, 'jl. Mayjen Soeharto'),
(6, 'Jl. Kombes Moh. Duryat'),
(7, 'Jl. Rungkut Industri'),
(8, 'Jl. Sawahan'),
(9, 'Jl. Kesambi'),
(10, 'Jl. Bandung Prigi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apoteker`
--

CREATE TABLE `apoteker` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `keahlian` text NOT NULL,
  `id_lulusan` int(11) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apoteker`
--

INSERT INTO `apoteker` (`id`, `nama`, `keahlian`, `id_lulusan`, `tanggal_masuk`) VALUES
(1, 'Thor', 'Pembuat Obat', 1, '2023-07-06'),
(2, 'Irving', 'Pembuat Obat', 1, '2021-07-04'),
(8, 'Sandi', 'Pembuat Obat', 1, '2021-07-26'),
(9, 'Ahmad', 'Peneliti Obat', 3, '2022-07-26'),
(10, 'Sugito', 'Peneliti Obat', 3, '2022-07-26'),
(11, 'Karto', 'Pembuat Obat', 1, '2022-07-26'),
(12, 'Soekarni', 'Penjual Obat', 2, '2021-07-26'),
(13, 'Stefany', 'Administrasi Kantor', 2, '2021-07-26'),
(14, 'Alfi', 'Akuntansi', 2, '2023-07-26'),
(15, 'Wisnu', 'Pengembang Web Backend', 2, '2023-07-25'),
(16, 'Riska', 'Pengembang Web Frontend', 2, '2023-07-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lulusan`
--

CREATE TABLE `lulusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lulusan`
--

INSERT INTO `lulusan` (`id`, `nama`) VALUES
(1, 'S1'),
(2, 'SMK'),
(3, 'D4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(32) NOT NULL,
  `kegunaan` text,
  `persediaan` int(11) DEFAULT NULL,
  `tanggal_kedaluarsa` date DEFAULT NULL,
  `apoteker_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `kegunaan`, `persediaan`, `tanggal_kedaluarsa`, `apoteker_id`) VALUES
(1, 'Paracetamol', 'Menyembuhkan pusing', 3, '2024-07-03', 1),
(2, 'Promag', 'Menyembuhkan sakit mag', 5, '2024-07-03', 1),
(3, 'Antipiretik', 'Penurun Panas', 9, '2024-07-25', 8),
(10, 'Oralit', 'mengatasi dehidrasi pada saat terkena diare', 6, '2024-07-18', 11),
(11, 'Karbon Aktif', 'menyerap racun sehingga pada kasus keracunan makanan karbon aktif dapat diberikan.', 8, '2024-07-18', 8),
(12, 'Antasida', 'Mengatasi Mag', 7, '2024-07-18', 2),
(13, 'asam mefenamat', 'Obat anti nyeri', 4, '2024-07-26', 1),
(14, 'pseudoefedrine', 'Obat Flue', 2, '2024-07-27', 1),
(15, 'Antihistamin', 'Mengatasi Alergi', 1, '2024-07-26', 2),
(16, 'Vitamin / Suplemen', 'Mengatasi kekurangan vitamin akibat pola makan yang tidak seimbang', 11, '2024-07-01', 11),
(17, 'SP Troches Meiji ', 'mengobati radang akibat infeksi bakteri dan jamur di tenggorokan, amandel, atau mulut dan gusi', 10, '2024-07-12', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `id_alamat` int(11) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `id_alamat`, `tanggal_lahir`) VALUES
(1, 'Siswadi', 3, '2000-07-08'),
(2, 'Hartadi', 3, '2003-07-01'),
(3, 'Kusni', 3, '2000-07-14'),
(4, 'Adi Tama', 7, '2000-07-28'),
(5, 'Sucipto', 9, '1999-04-20'),
(6, 'Davinci', 1, '1999-02-01'),
(7, 'Nia', 1, '1999-07-03'),
(8, 'Putri', 1, '1998-10-21'),
(9, 'Vladimir', 3, '1999-04-05'),
(10, 'Erwin', 1, '1998-12-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_obat` int(11) DEFAULT NULL,
  `jumlah_obat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_pasien`, `id_obat`, `jumlah_obat`) VALUES
(1, 4, 12, 2),
(2, 6, 10, 2),
(3, 2, 1, 3),
(4, 9, 2, 3),
(5, 3, 1, 2),
(6, 1, 12, 1),
(7, 8, 1, 1),
(8, 1, 12, 2),
(9, 7, 1, 3),
(10, 9, 10, 2),
(11, 8, 12, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `apoteker`
--
ALTER TABLE `apoteker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_apoteker_lulusan` (`id_lulusan`);

--
-- Indeks untuk tabel `lulusan`
--
ALTER TABLE `lulusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_obat` (`apoteker_id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_alamat_pasien` (`id_alamat`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_obat_transaksi` (`id_obat`),
  ADD KEY `FK_pasien_transaksi` (`id_pasien`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `apoteker`
--
ALTER TABLE `apoteker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `lulusan`
--
ALTER TABLE `lulusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `apoteker`
--
ALTER TABLE `apoteker`
  ADD CONSTRAINT `fk_apoteker_lulusan` FOREIGN KEY (`id_lulusan`) REFERENCES `lulusan` (`id`);

--
-- Ketidakleluasaan untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `fk_obat` FOREIGN KEY (`apoteker_id`) REFERENCES `apoteker` (`id`);

--
-- Ketidakleluasaan untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `FK_alamat_pasien` FOREIGN KEY (`id_alamat`) REFERENCES `alamat` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_obat_transaksi` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`),
  ADD CONSTRAINT `FK_pasien_transaksi` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
