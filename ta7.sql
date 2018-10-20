-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2018 pada 01.52
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta_7`
--

CREATE TABLE `ta_7` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `asal` varchar(30) NOT NULL,
  `moto_hidup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ta_7`
--

INSERT INTO `ta_7` (`nim`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `prodi`, `fakultas`, `asal`, `moto_hidup`) VALUES
('6701174000', 'Putri Cantika', '2005-07-21', 'Perempuan', 'Sistem Informasi', 'FIK', 'Jakarta', 'Senyum ya'),
('6701174058', 'Aan Yuni Adi Saputri', '1999-07-10', 'Perempuan', 'Manajemen Informatika', 'FIT', 'Yogyakarta', 'aku pasti bisa'),
('6701174077', 'Elisa D O', '1999-10-12', 'Perempuan', 'Manajemen Informatika', 'FIT', 'Kudus', 'Jangan lupa bahagia'),
('6701178907', 'Muhammad Fathur', '1999-02-26', 'Laki-Laki', 'Teknik Telekomunikasi', 'FTE', 'Surakarta', 'Yakin saja'),
('6701179089', 'Razaq Saputra', '1998-11-12', 'Laki-Laki', 'Teknik Informatika', 'FIF', 'Bandung', 'senyumin aja');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ta_7`
--
ALTER TABLE `ta_7`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
