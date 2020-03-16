-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2019 pada 02.45
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vicon`
--
CREATE DATABASE IF NOT EXISTS `vicon` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vicon`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_room`
--

CREATE TABLE `data_room` (
  `id` int(11) NOT NULL,
  `nama_room` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_room`
--

INSERT INTO `data_room` (`id`, `nama_room`, `password`, `url`) VALUES
(100001, 'YouTube', 'yt123', 'https://bukalapak.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_room`
--
ALTER TABLE `data_room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_room`
--
ALTER TABLE `data_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
