-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 12:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekwebss2020_133040054`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_elektronik`
--

CREATE TABLE `barang_elektronik` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `kode_barang` char(2) DEFAULT NULL,
  `brand_barang` varchar(50) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `harga_barang` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_elektronik`
--

INSERT INTO `barang_elektronik` (`id`, `kategori`, `kode_barang`, `brand_barang`, `label`, `gambar`, `nama`, `deskripsi`, `harga_barang`, `created_at`, `update_at`) VALUES
(1, 'komputer', '01', 'zotac', 'Vga', 'vga.jpg', 'vga', 'gtx 2080', '11.000.000', NULL, NULL),
(2, 'komputer', '02', 'msi', 'Motherboard', 'mobo.jpg', 'motherboard', 'B450 Tomhawk Max', '1.700.000', NULL, NULL),
(3, 'komputer', '03', 'amd', 'Processor', 'procie.jpg', 'processor', 'ryzen 5 3600', '2.200.000', NULL, NULL),
(4, 'komputer', '04', 'corsair', 'Memory', 'ram.jpg', 'memory ', 'Corsair (2x8)DDR4', '1.600.000', NULL, NULL),
(5, 'komputer', '05', 'seasonic', 'Psu', 'psu.jpg', 'psu', 'S12II-620 620W Bronze', '980.000', NULL, NULL),
(6, 'audio', '11', 'logitech', 'Speaker', 'logitech.jpg', 'speaker', 'speaker logitech z213', '379.000', NULL, NULL),
(7, 'monitor', '21', 'edifier', 'Lcd', 'monitor.jpg', 'lcd', 'Edifier R1280DB', '1.500.000', NULL, NULL),
(8, 'elektronik rumah tangga', '31', 'sharp', 'Mesin Cuci', 'mesincuci.jpg', 'mesin_cuci', ' Sharp ESF 950P', '2.175.000', NULL, NULL),
(9, 'elektronik rumah tangga', '32', 'philips', 'Vacum', 'vacum.jpg', 'vacum', 'Philips FC6728', '5.600.000', NULL, NULL),
(10, 'pendingin ruangan', '41', 'lg', 'Air Conditioner', 'ac.jpg', 'air_conditioner', 'AC LG T 10 EV4 1 pk', '3.400.000', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_elektronik`
--
ALTER TABLE `barang_elektronik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_elektronik`
--
ALTER TABLE `barang_elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
