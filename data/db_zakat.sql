-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2023 at 08:36 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_zakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `amil_zakat`
--

CREATE TABLE `amil_zakat` (
  `id` int NOT NULL,
  `nama_amil` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `amil_zakat`
--

INSERT INTO `amil_zakat` (`id`, `nama_amil`, `password`) VALUES
(1, 'aceng', '12345678'),
(12, 'aji', '12');

-- --------------------------------------------------------

--
-- Table structure for table `harga_beras`
--

CREATE TABLE `harga_beras` (
  `id` int NOT NULL,
  `harga_beras` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `harga_beras`
--

INSERT INTO `harga_beras` (`id`, `harga_beras`) VALUES
(1, 12000),
(2, 15000),
(3, 20000),
(4, 25000),
(5, 30000),
(6, 35000);

-- --------------------------------------------------------

--
-- Table structure for table `pembayar_zakat`
--

CREATE TABLE `pembayar_zakat` (
  `id` int NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggungan` int NOT NULL,
  `id_beras` int NOT NULL,
  `total_bayar` int NOT NULL,
  `nama_amil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pembayar_zakat`
--

INSERT INTO `pembayar_zakat` (`id`, `nama`, `tanggungan`, `id_beras`, `total_bayar`, `nama_amil`) VALUES
(8, 'aceng', 1, 2, 51600, 'a'),
(9, 'aceng', 2, 2, 103200, '2'),
(22, 'tes', 2, 3, 172000, 'azki'),
(23, 'ahmad', 2, 6, 301000, 'aceng'),
(24, 'ahmad', 2, 6, 301000, 'aceng'),
(25, 'sukma', 12, 2, 774000, 'aceng'),
(26, 'suryanto', 2, 3, 172000, 'aceng');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id` int NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`id`, `username`, `password`) VALUES
(1, 'radit', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amil_zakat`
--
ALTER TABLE `amil_zakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga_beras`
--
ALTER TABLE `harga_beras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayar_zakat`
--
ALTER TABLE `pembayar_zakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amil_zakat`
--
ALTER TABLE `amil_zakat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `harga_beras`
--
ALTER TABLE `harga_beras`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembayar_zakat`
--
ALTER TABLE `pembayar_zakat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
