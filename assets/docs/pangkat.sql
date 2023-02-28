-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 03:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pangkat`
--

-- --------------------------------------------------------

--
-- Table structure for table `gol_pangkat`
--

CREATE TABLE `gol_pangkat` (
  `id_gol_pangkat` int(11) NOT NULL,
  `nama_gol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gol_pangkat`
--

INSERT INTO `gol_pangkat` (`id_gol_pangkat`, `nama_gol`) VALUES
(1, 'Perwira'),
(2, 'Bintara'),
(3, 'Tamtama');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kp`
--

CREATE TABLE `jenis_kp` (
  `id` int(11) NOT NULL,
  `pangkat` int(11) NOT NULL DEFAULT 0,
  `ke_pangkat` int(11) NOT NULL DEFAULT 0,
  `nama_kp` varchar(50) DEFAULT NULL,
  `detail_kp` varchar(200) DEFAULT NULL,
  `mdp` int(11) NOT NULL DEFAULT 0,
  `mddp` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kp`
--

INSERT INTO `jenis_kp` (`id`, `pangkat`, `ke_pangkat`, `nama_kp`, `detail_kp`, `mdp`, `mddp`) VALUES
(1, 2, 1, 'DIKBANG 1', 'SESPIMMEN/S3 KEDINASAN/S2 KEDINASAN YANG DISETARAKAN/SUB SPESIALIS/PIM TK II', 21, 4),
(2, 2, 1, 'DIKBANG 2', 'S2 KEDINASAN/S3 NON KEDINASAN AKREDITASI MIN B', 27, 8),
(3, 3, 2, 'DIKBANG 1', 'SESPIMMEN/S3 KEDINASAN/S2 KEDINASAN YANG DISETARAKAN/SUB SPESIALIS/PIM TK II', 17, 4),
(4, 3, 2, 'DIKBANG 2', 'S2 KEDINASAN/S3 NON KEDINASAN AKREDITASI MIN B', 19, 6),
(5, 3, 2, 'DIKBANG 3', 'STIK/SESPIMMA/SPESIALIS/PIM TK III', 21, 8),
(6, 3, 2, 'DIKBANG 4', 'S2 NON KEDINASAN AKREDITASI MIN B', 24, 9),
(7, 3, 2, 'NON DIKBANG', 'TIDAK MEMILIKI DIKBANG/DIKUM S2 ATAU S3', 27, 10),
(8, 4, 3, 'DIKBANG 1', 'S2 KEDINASAN/S3 NON KEDINASAN AKREDITASI MIN B', 13, 5),
(9, 4, 3, 'DIKBANG 2', 'STIK/SESPIMMA/SPESIALIS/PIM TK III', 13, 5),
(10, 4, 3, 'DIKBANG 3', 'S2 NON KEDINASAN AKREDITASI MIN B', 15, 7),
(11, 4, 3, 'NON DIKBANG', 'TIDAK MEMILIKI DIKBANG/DIKUM S2 ATAU S3', 17, 9),
(12, 5, 4, 'DIKBANG', 'AKPOL/SIPSS/SIP/SAG PA', 8, 4),
(13, 6, 5, 'DIKBANG', 'AKPOL/SIPSS/SIP/SAG PA', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pangkat`
--

CREATE TABLE `pangkat` (
  `id_pangkat` int(11) NOT NULL,
  `pangkat` varchar(50) DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL,
  `id_gol_pangkat` int(11) NOT NULL,
  `orders` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pangkat`
--

INSERT INTO `pangkat` (`id_pangkat`, `pangkat`, `ket`, `id_gol_pangkat`, `orders`) VALUES
(1, 'KOMBES POL', 'Komisaris Besar Polisi', 1, 1),
(2, 'AKBP', 'Ajun Komisaris Besar Polisi', 1, 2),
(3, 'KOMPOL', 'Komisaris Polisi', 1, 3),
(4, 'AKP', 'Ajun Komisaris Polisi', 1, 4),
(5, 'IPTU', 'Inspektur Polisi Satu', 1, 5),
(6, 'IPDA', 'Inspektur Polisi Dua', 1, 5),
(7, 'AIPTU', 'Ajun Inspektur Polisi Satu', 2, 1),
(8, 'AIPDA', 'Ajun Inspektur Polisi Dua', 2, 2),
(9, 'BRIPKA', 'Brigadir Polisi Kepala', 2, 3),
(10, 'BRIGPOL', 'Brigadir Polisi', 2, 4),
(11, 'BRIPTU', 'Brigadir Polisi Satu', 2, 5),
(12, 'BRIPDA', 'Brigadir Polisi Dua', 2, 6),
(13, 'ABRIP', 'Ajun Brigadir Polisi', 3, 1),
(14, 'ABRIPTU', 'Ajun Brigadir Polisi Satu', 3, 2),
(15, 'ABRIPDA', 'Ajun Brigadir Polisi Dua', 3, 3),
(16, 'BHARAKA', 'Bhayangkara Kepala', 3, 4),
(17, 'BHARATU', 'Bhayangkara Satu', 3, 5),
(18, 'BHARADA', 'Bhayangkara Dua', 3, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gol_pangkat`
--
ALTER TABLE `gol_pangkat`
  ADD PRIMARY KEY (`id_gol_pangkat`);

--
-- Indexes for table `jenis_kp`
--
ALTER TABLE `jenis_kp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gol_pangkat`
--
ALTER TABLE `gol_pangkat`
  MODIFY `id_gol_pangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_kp`
--
ALTER TABLE `jenis_kp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pangkat`
--
ALTER TABLE `pangkat`
  MODIFY `id_pangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
