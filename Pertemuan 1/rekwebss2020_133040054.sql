-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 10:35 AM
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
  `nama` varchar(100) DEFAULT NULL,
  `kode_barang` char(2) DEFAULT NULL,
  `brand_barang` varchar(50) DEFAULT NULL,
  `rilis_barang` int(6) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `kategori_barang` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `stok_barang` int(2) DEFAULT NULL,
  `harga_barang` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_elektronik`
--

INSERT INTO `barang_elektronik` (`id`, `nama`, `kode_barang`, `brand_barang`, `rilis_barang`, `gambar`, `kategori_barang`, `deskripsi`, `stok_barang`, `harga_barang`) VALUES
(1, 'komputer', '01', 'zotac', 170720, 'zotac.jpeg', 'vga', 'gtx 2080', 10, '11000000'),
(2, 'komputer', '02', 'msi', 170720, 'msi.jpeg', 'motherboard', 'B450 Tomhawk Max', 5, '1700000'),
(3, 'komputer', '03', 'amd', 170720, 'ryzen.jpeg', 'processor', 'ryzen 5 3600', 15, '2200000'),
(4, 'komputer', '04', 'corsair', 170720, 'ram.jpeg', 'memory ddr4', 'Corsair (2x8)', 8, '1600000'),
(5, 'komputer', '05', 'seasonic', 170720, 'psu.jpeg', 'psu', 'S12II-620 620W Bronze', 4, '980000'),
(6, 'audio', '11', 'logitech', 170720, 'speaker.jpeg', 'speaker', 'speaker logitech z213', 4, '379000'),
(7, 'audio', '12', 'edifier', 170720, 'edifier.jpeg', 'speaker', 'Edifier R1280DB', 3, '1500000'),
(8, 'elektronik rumah tangga', '21', 'sharp', 170720, 'sharp.jpeg', 'mesin cuci', ' Sharp ESF 950P', 3, '2175000'),
(9, 'elektronik rumah tangga', '22', 'philips', 170720, 'philips.jpeg', 'vacum cleaner', 'Philips FC6728', 4, '5600000'),
(10, 'pendingin ruangan', '31', 'lg', 170720, 'ac.jpeg', 'air conditioner', 'AC LG T 10 EV4 1 pk', 3, '3400000');

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
