-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 06:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kuliner`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_foto`
--

CREATE TABLE `tb_foto` (
  `id_foto` int(11) NOT NULL,
  `id_kuliner` int(11) NOT NULL,
  `nama_file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_foto`
--

INSERT INTO `tb_foto` (`id_foto`, `id_kuliner`, `nama_file`) VALUES
(1, 4, 'galeri2.jpg'),
(2, 5, 'galeri5.jpg'),
(3, 6, 'hidangan3.jpg'),
(4, 6, 'hidangan4.jpg'),
(5, 6, 'mbscafe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kuliner`
--

CREATE TABLE `tb_kuliner` (
  `id_kuliner` int(11) NOT NULL,
  `nama_kuliner` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `jam_buka` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kuliner`
--

INSERT INTO `tb_kuliner` (`id_kuliner`, `nama_kuliner`, `alamat`, `pemilik`, `latitude`, `longitude`, `menu`, `jam_buka`, `keterangan`) VALUES
(1, 'Waroeng Cafe 27', 'Jln. Cempaka No. 5, Desa Nganguk, Kabupaten Kudus, Jawa Tengah', 'Adi Nugroho', '-68058378', '1108500904', 'Mix Fruit Salad,  Belgium Waffle Ice Cream, Chicken Wing Barbeque, Club Sandwich, Hot Potato Wedges', 'Jam 11.00-22.00', 'Bisa booking tempat untuk acara party. Hubungi di (0291)2911082'),
(2, 'Djago Cafe', 'Jl. Dr Sutomo 15, Kauman, Kec. Jepara, Kabupaten Jepara, Jawa Tengah', 'Susi Andriyani', '-6592186', '1106609943', 'Coffe, Mocktail, Spaghetti, Bruscetta, Sandwhich, Honey BBQ, Sweet and Sour, Hot and Spicy, Chicken ', 'Jam 10.00-23.00', 'Bisa booking tempat untuk acara party. Hubungi di 0811-2998-978'),
(3, 'Ocean View', 'Tegalsambi, Tahunan, Kabupaten Jepara, Jawa Tengah', 'Rina Rahmawati', '-6612633', '1106486043', 'Grilled Chicken BLT with Chips and Salad, Scotch Fillet Steak s/w with Chips and Salad, Beef Burger ', '24 Jam', 'Bisa booking tempat untuk acara party. Hubungi di (0291) 4299022'),
(4, 'MBS Bistro Cafe', 'Margoyoso, Kalinyamatan, Jepara', 'Syahdiar Munaf', '-67290219', '110719554', 'Cumi Steak, Udang Steak, MBS Chicken Steak, MBS Beef Steak, Pattaya Spicy Rice, Beef Korean Bulgogi', 'Jam 11.00-22.00', 'Bisa booking tempat untuk acara party. Hubungi di 0812-2524-4446'),
(5, 'Sriya Cafe', 'Jl. Kusumo Utoyo, Kauman, Kec. Jepara, Kabupaten Jepara, Jawa Tengah', 'R. Sigit Nugroho', '-65939', '1106617493', 'Nasi Goreng, Ayam Goreng, Special Sego Sriya, Sapi Lada Hitam, Mie, Rawon, Sup Iga, Sup Buntut, Cap ', 'Jam 11.00-23.00', 'Bisa booking tempat untuk acara party. Hubungi di 0813-2500-7000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_foto`
--
ALTER TABLE `tb_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `tb_kuliner`
--
ALTER TABLE `tb_kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_foto`
--
ALTER TABLE `tb_foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_kuliner`
--
ALTER TABLE `tb_kuliner`
  MODIFY `id_kuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
