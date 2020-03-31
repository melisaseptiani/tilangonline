-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2020 pada 13.51
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tilang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggar`
--

CREATE TABLE `pelanggar` (
  `no` int(11) NOT NULL,
  `nama_pelanggar` varchar(255) NOT NULL,
  `jenis_sim` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal_tilang` varchar(255) NOT NULL,
  `plat_kendaraan` varchar(255) NOT NULL,
  `tempat_pelanggaran` varchar(255) NOT NULL,
  `pasal_pelanggaran` varchar(255) NOT NULL,
  `barang_sita` varchar(255) NOT NULL,
  `jumlah_denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggar`
--

INSERT INTO `pelanggar` (`no`, `nama_pelanggar`, `jenis_sim`, `alamat`, `no_hp`, `email`, `tanggal_tilang`, `plat_kendaraan`, `tempat_pelanggaran`, `pasal_pelanggaran`, `barang_sita`, `jumlah_denda`) VALUES
(1234567, 'Yuda', 'SIM C', 'Bandung', '082219736486', 'yuda@gmail.com', '12 Januari 2020', 'D 5353 KL', 'Jalan Bojongsoang', 'Pasal 288 Ayat 1', 'SIM', 100000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelanggar`
--
ALTER TABLE `pelanggar`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
