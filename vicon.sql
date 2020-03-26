-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 09:14 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

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

-- --------------------------------------------------------

--
-- Table structure for table `data_record`
--

CREATE TABLE `data_record` (
  `id` int(11) NOT NULL,
  `nama_record` varchar(255) NOT NULL,
  `waktu_record` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_record`
--

INSERT INTO `data_record` (`id`, `nama_record`, `waktu_record`, `url`) VALUES
(2, 'ini judul', '2020-03-26 14:12:29', 'mana.aja');

-- --------------------------------------------------------

--
-- Table structure for table `data_room`
--

CREATE TABLE `data_room` (
  `id` int(11) NOT NULL,
  `nama_room` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_room`
--

INSERT INTO `data_room` (`id`, `nama_room`, `password`, `url`) VALUES
(100001, 'YouTube', 'yt123', 'https://bukalapak.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_record`
--
ALTER TABLE `data_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_room`
--
ALTER TABLE `data_room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_record`
--
ALTER TABLE `data_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_room`
--
ALTER TABLE `data_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
