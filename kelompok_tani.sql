-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 03:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok_tani`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_kelompok`
--

CREATE TABLE `anggota_kelompok` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `umur` int(3) NOT NULL,
  `luas_lahan` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jenis_tanaman` varchar(50) NOT NULL,
  `browser_info` text NOT NULL,
  `ip_address` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota_kelompok`
--

INSERT INTO `anggota_kelompok` (`no`, `nama`, `nik`, `jenis_kelamin`, `umur`, `luas_lahan`, `tanggal_masuk`, `jenis_tanaman`, `browser_info`, `ip_address`) VALUES
(1, 'Rizki Esa Fadillah', '1801220202030001', 'Laki-laki', 20, 25000, '2023-12-19', 'Singkong', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', '::1'),
(2, 'Aman Nur Iman', '1801220411970001', 'Laki-laki', 32, 5000, '2023-12-21', 'Padi', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', '::1'),
(3, 'Dimas Saputra', '1801222505010002', 'Laki-laki', 22, 3500, '2023-12-30', 'Jagung', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(5, 'Rizki Esa Fadillah', 'rizkiifadillah456@gmail.com', '123asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_kelompok`
--
ALTER TABLE `anggota_kelompok`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
