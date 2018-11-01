-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2018 pada 03.16
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `nama` varchar(25) NOT NULL,
  `nip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `tgl_datang` date NOT NULL,
  `sasaran` varchar(25) NOT NULL,
  `penerima` varchar(25) NOT NULL,
  `isi_paket` varchar(25) NOT NULL,
  `tgl_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`tgl_datang`, `sasaran`, `penerima`, `isi_paket`, `tgl_ambil`) VALUES
('2018-09-07', 'Abrar', 'Rayan', 'batu', '2018-11-01'),
('2018-09-07', 'Abrar', 'Rayan', 'batu', '2018-11-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghuni`
--

CREATE TABLE `penghuni` (
  `nama` varchar(25) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `ktp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penghuni`
--

INSERT INTO `penghuni` (`nama`, `unit`, `ktp`) VALUES
('Rayan', 'Gd 1', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`ktp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `nip` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penghuni`
--
ALTER TABLE `penghuni`
  MODIFY `ktp` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
