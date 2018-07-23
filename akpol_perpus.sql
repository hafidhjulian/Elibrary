-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 02:33 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akpol_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `perpus`
--

CREATE TABLE `perpus` (
  `id` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun` int(20) NOT NULL,
  `posisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perpus`
--

INSERT INTO `perpus` (`id`, `judul`, `penerbit`, `tahun`, `posisi`) VALUES
(1, 'Latihan Dasar Sepakbola', 'PT. Terang Bangsa', 2008, 'Rak 1'),
(2, 'Latihan Dasar Passing Bola', 'PT. Sumber Ilmu', 2008, 'Rak 1'),
(4, 'Latihan Dasar Menggunakan Facebook', 'PT. Facebook Indonesia', 2017, 'Rak 2'),
(5, 'Latihan Dasar Menggunakan Twitter', 'PT. Twitter Indonesia', 2018, 'Rak 1'),
(6, 'Latihan Dasar Menggunakan Instagram', 'PT. Facebook Indonesia', 2016, 'Rak 3'),
(7, 'Latihan Dasar Menggunakan Facebook Versi 2', 'PT. Facebook Indonesia', 2018, 'Rak 2'),
(8, 'Latihan Dasar Menggunakan Instagram Versi 2', 'PT. Facebook Indonesia', 2018, 'Rak 3'),
(10, 'Latihan Dasar Menggunakan Instagram Versi 3', 'PT. Facebook Indonesia', 2018, 'Rak 3'),
(12, 'Latihan Dasar Menggunakan Facebook Versi 3', 'PT. Facebook Indonesia', 2018, 'Rak 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perpus`
--
ALTER TABLE `perpus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `perpus`
--
ALTER TABLE `perpus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
