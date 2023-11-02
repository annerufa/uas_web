-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 12:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `budaya`
--

CREATE TABLE `budaya` (
  `id_budaya` int(3) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `bahasa` varchar(50) NOT NULL,
  `rumah` varchar(100) NOT NULL,
  `tarian` varchar(100) NOT NULL,
  `makanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `budaya`
--

INSERT INTO `budaya` (`id_budaya`, `provinsi`, `bahasa`, `rumah`, `tarian`, `makanan`) VALUES
(1, 'Nanggro Aceh Darussalam', 'Aceh Gayo', 'Krong Pade', 'Seudati, Saman', 'Timpan, Gulai Aceh'),
(2, 'Sumatra Utara', 'Batak', 'Bolon', 'Serampang Dua Belas', 'Lalamak'),
(3, 'Sumatra Barat', 'Minang', 'Gadang', 'Baralek Gadang', 'Rendang'),
(4, 'Riau', 'Melayu', 'Melayu Selaso Jatuh Kembar', 'Joged Lambak', 'Gulai ikan Patin'),
(5, 'Kepulauan Riau', 'Melayu', 'Selaso Jatuh Kembar', 'Tandak', 'Sup Ikan Batam'),
(6, 'Jambi', 'Kubu', 'Panjang', 'Sekapur Sirih', 'Tempoyak'),
(7, 'Sumatra Selatan', 'Palembang', 'Limas', 'Tanggai', 'Pempek');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budaya`
--
ALTER TABLE `budaya`
  ADD PRIMARY KEY (`id_budaya`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budaya`
--
ALTER TABLE `budaya`
  MODIFY `id_budaya` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
