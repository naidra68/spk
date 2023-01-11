-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 02:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$.4m6AV9P5HfqXP.0sfYz/eP5ZWhYV2655p6fw/WJNEglBpdZV0a2K');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `nama_depan`, `nama_belakang`, `email`, `keterangan`) VALUES
(1, 'Test', 'Saja', 'testaja@gmail.com', 'Ini cuma tes saja.'),
(2, 'William', 'Jhon', 'willjohn14@gmail.com', 'The appearance of the SPK admin page is very impressive, I hope there will be additional features in the future.');

-- --------------------------------------------------------

--
-- Table structure for table `dalternatif`
--

CREATE TABLE `dalternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `C1` int(5) NOT NULL,
  `C2` int(5) NOT NULL,
  `C3` int(5) NOT NULL,
  `C4` int(5) NOT NULL,
  `C5` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dalternatif`
--

INSERT INTO `dalternatif` (`id_alternatif`, `nama`, `C1`, `C2`, `C3`, `C4`, `C5`) VALUES
(1, 'Universitas Brawijaya', 2, 5, 5, 3, 4),
(2, 'Universitas Teknologi Yogyakarta', 2, 5, 4, 4, 3),
(3, 'Universitas Muria Kudus', 3, 4, 4, 2, 4),
(4, 'Universitas Nusantara Manado', 2, 3, 1, 2, 4),
(5, 'Universitas San Pedro', 1, 3, 1, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `dkriteria`
--

CREATE TABLE `dkriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dkriteria`
--

INSERT INTO `dkriteria` (`id_kriteria`, `nama_kriteria`) VALUES
(1, 'Lokasi'),
(2, 'Sistem Pembelajaran'),
(3, 'Akreditasi'),
(4, 'Kualitas Perpustakaan'),
(5, 'Jabatan Fungsional Dosen');

-- --------------------------------------------------------

--
-- Table structure for table `nkriteria`
--

CREATE TABLE `nkriteria` (
  `id_kriteria` int(11) NOT NULL,
  `id_kriteria2` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `normalisasi` decimal(15,14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nkriteria`
--

INSERT INTO `nkriteria` (`id_kriteria`, `id_kriteria2`, `nilai`, `normalisasi`) VALUES
(1, 1, 3, '0.15789473684211'),
(2, 2, 5, '0.26315789473684'),
(3, 3, 5, '0.26315789473684'),
(4, 4, 2, '0.10526315789474'),
(5, 5, 4, '0.21052631578947');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `dalternatif`
--
ALTER TABLE `dalternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `dkriteria`
--
ALTER TABLE `dkriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_kriteria_2` (`id_kriteria`);

--
-- Indexes for table `nkriteria`
--
ALTER TABLE `nkriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD UNIQUE KEY `id_kriteria_2` (`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dalternatif`
--
ALTER TABLE `dalternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dkriteria`
--
ALTER TABLE `dkriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nkriteria`
--
ALTER TABLE `nkriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nkriteria`
--
ALTER TABLE `nkriteria`
  ADD CONSTRAINT `nkriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `dkriteria` (`id_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
