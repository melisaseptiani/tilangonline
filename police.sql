-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2020 pada 07.47
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `police`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `nohp`, `email`, `password`) VALUES
(0, 'Sulistya', '0987345678', 'sup@gmail.com', 'melisa123'),
(670118305, 'melisaseptiani', '', '', '7856b9b6c1f68bd2cdac0b7439621fd4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `idpelanggaran` varchar(50) CHARACTER SET utf8 NOT NULL,
  `namapelanggar` varchar(100) NOT NULL,
  `jenissim` varchar(5) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `tdt` text NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `profesi` varchar(100) NOT NULL,
  `pasal` text NOT NULL,
  `tempattilang` varchar(225) NOT NULL,
  `barangtilang` text NOT NULL,
  `plat` varchar(200) NOT NULL,
  `tanggalsidang` date NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggaran`
--

INSERT INTO `pelanggaran` (`idpelanggaran`, `namapelanggar`, `jenissim`, `ttl`, `tdt`, `nohp`, `email`, `alamat`, `profesi`, `pasal`, `tempattilang`, `barangtilang`, `plat`, `tanggalsidang`, `status`) VALUES
('5sNcq5xtTn', 'Stela Lao', 'C', '1989-09-09', '2020-03-27', '08299382992', 'sincan@gmail.com', 'Cikole', 'Wiraswasta', 'Pasal 280 Plat No Kendaraan, Pasal 281 SIM, Pasal 282 Mengemudi Tidak Wajar, Pasal 284 Tidak Mengutamakan Keselamatan Pejalan Kaki, Pasal 285 Atribut Kendaraan Tidak Lengkap, Pasal 287 Melanggar Rambu-rambu Lalu Lintas, Pasal 288 Tidak Menunjukkan STNK, Pasal 291 Helm tidak SNI, Pasal 293 Lampu Kendaraan Mati, Pasal 294 Berbelok Tanpa Sen', 'Aula FIT', 'KARTU PELAJAR', 'lari_21.jpeg', '2020-04-03', '1'),
('Bu09VMMncO', 'Jey Hide', 'C', '2000-09-10', '2020-03-27', '08299382992', 'sincan@gmail.com', 'Cikole', 'Mahasiswa', 'Pasal 280 Plat No Kendaraan, Pasal 282 Mengemudi Tidak Wajar, Pasal 288 Tidak Menunjukkan STNK', 'Transmart Bubat', 'SIM', '-', '2020-04-13', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idbayar` int(11) NOT NULL,
  `idpelanggaran` varchar(50) NOT NULL,
  `buktibayar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`idbayar`, `idpelanggaran`, `buktibayar`) VALUES
(1, '5sNcq5xtTn', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `polisi`
--

CREATE TABLE `polisi` (
  `idpolisi` int(11) NOT NULL,
  `namapolisi` varchar(100) NOT NULL,
  `ttl` varchar(200) NOT NULL,
  `emailpolisi` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `polisi`
--

INSERT INTO `polisi` (`idpolisi`, `namapolisi`, `ttl`, `emailpolisi`, `password`, `alamat`, `nohp`) VALUES
(1, 'chika restu', 'l5 juli 2000', 'chika@gmail.com', 'chika123', 'Bandung', '087123456123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indeks untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`idpelanggaran`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idbayar`),
  ADD KEY `idpelanggaran` (`idpelanggaran`);

--
-- Indeks untuk tabel `polisi`
--
ALTER TABLE `polisi`
  ADD PRIMARY KEY (`idpolisi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idbayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `polisi`
--
ALTER TABLE `polisi`
  MODIFY `idpolisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`idpelanggaran`) REFERENCES `pelanggaran` (`idpelanggaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
