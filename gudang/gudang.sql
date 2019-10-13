-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2018 at 03:22 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gudang`
--
CREATE DATABASE IF NOT EXISTS `gudang` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gudang`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kode_brg` varchar(10) NOT NULL,
  `nama_brg` varchar(30) NOT NULL,
  `jenis_brg` varchar(20) NOT NULL,
  `kuantitas` int(7) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`kode_brg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_brg`, `nama_brg`, `jenis_brg`, `kuantitas`, `image`) VALUES
('BRG0000001', 'Daia Lemon Orange 1Kg', 'Detergen', 20, 'p-daia-lemon.jpg'),
('BRG0000002', 'Rinso Anti Noda 1Kg', 'Detergen', 1300, 'p-rinso.jpg'),
('BRG0000003', 'Nuvo Sabun Mandi 200grm', 'Sabun', 30, 'p-nuvo.jpg'),
('BRG0000004', 'Wing Sabun Colek 500 gram', 'Sabun', 0, ''),
('BRG0000005', 'Pasta Gigi Pepsodent 1A', 'Pasta', 20, 'p-pepsodent-pasta.jpg'),
('BRG0000006', 'Pasta Gigi Formula 1A', 'Pasta', 0, 'p-formula-pasta.jpg'),
('BRG0000007', 'Sunlight Lemon 1Kg', 'Gel', 0, 'p-sunlight-lemon.jpg'),
('BRG0000008', 'Mie Sedaap Goreng', 'Makanan', 0, 'p-mie-sedap.jpg'),
('BRG0000009', 'Mie Indomie Goreng', 'Makanan', 0, 'p-mie-indomie.jpg'),
('BRG0000010', 'Dove Hair Saset 200ml', 'Sampo', 0, 'p-dove-sachet.jpg'),
('BRG0000011', 'Dove Hair Botol 400ml', 'Sampo', 0, ''),
('BRG0000012', 'Casablanca Blue 200ml', 'Parfum', 0, ''),
('BRG0000013', 'Pocari Sweat  500mL', 'Minuman', 0, ''),
('BRG0000014', 'Coca Cola 425mL', 'Minuman', 0, ''),
('BRG0000015', 'Bolpoin Snowman 1AV', 'ATK', 0, ''),
('BRG0000016', 'Shampo Emeron 20 Gram', 'Habis pakai', 200, 'Desert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `histori_brg_klr`
--

CREATE TABLE IF NOT EXISTS `histori_brg_klr` (
  `id_tran_klr` varchar(17) NOT NULL,
  `tgl_klr` date DEFAULT NULL,
  `kode_brg` varchar(20) NOT NULL,
  `nama_brg` varchar(30) NOT NULL,
  `jenis_brg` varchar(20) NOT NULL,
  `jml_klr` int(7) NOT NULL,
  `picker` varchar(30) NOT NULL,
  PRIMARY KEY (`id_tran_klr`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histori_brg_klr`
--

INSERT INTO `histori_brg_klr` (`id_tran_klr`, `tgl_klr`, `kode_brg`, `nama_brg`, `jenis_brg`, `jml_klr`, `picker`) VALUES
('OUT-0000000000001', '2015-01-27', 'BRG0000001', 'Daia Lemon Orange 1Kg', 'Detergen', 2, 'PT ABC'),
('OUT-0000000000002', '2015-01-28', 'BRG0000002', 'Rinso Anti Noda 1Kg', 'Detergen', 28, 'PT ABC'),
('OUT-0000000000003', '2015-01-26', 'BRG0000003', 'Nuvo Sabun Mandi 200grm', 'Sabun', 10, 'PT MKP'),
('OUT-0000000000004', '2015-01-25', 'BRG0000005', 'Pasta Gigi Pepsodent 1A', 'Pasta', 10, 'PT RML');

-- --------------------------------------------------------

--
-- Table structure for table `histori_brg_msk`
--

CREATE TABLE IF NOT EXISTS `histori_brg_msk` (
  `id_tran_msk` varchar(15) NOT NULL,
  `tgl_msk` date DEFAULT NULL,
  `kode_brg` varchar(20) NOT NULL,
  `nama_brg` varchar(30) NOT NULL,
  `jenis_brg` varchar(20) NOT NULL,
  `jml_msk` int(7) NOT NULL,
  PRIMARY KEY (`id_tran_msk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histori_brg_msk`
--

INSERT INTO `histori_brg_msk` (`id_tran_msk`, `tgl_msk`, `kode_brg`, `nama_brg`, `jenis_brg`, `jml_msk`) VALUES
('IN-000000000002', '2015-01-01', 'BRG0000001', 'Daia Lemon Orange 1Kg', 'Detergen', 5),
('IN-000000000001', '2015-01-01', 'BRG0000001', 'Daia Lemon Orange 1Kg', 'Detergen', 10),
('IN-000000000005', '2015-01-02', 'BRG0000002', 'Rinso Anti Noda 1Kg', 'Detergen', 100),
('IN-000000000004', '2015-01-01', 'BRG0000002', 'Rinso Anti Noda 1Kg', 'Detergen', 1028),
('IN-000000000003', '2015-01-01', 'BRG0000001', 'Daia Lemon Orange 1Kg', 'Detergen', 7),
('IN-000000000006', '2015-01-01', 'BRG0000002', 'Rinso Anti Noda 1Kg', 'Detergen', 200),
('IN-000000000007', '2015-01-01', 'BRG0000003', 'Nuvo Sabun Mandi 200grm', 'Sabun', 40),
('IN-000000000008', '2015-01-27', 'BRG0000005', 'Pasta Gigi Pepsodent 1A', 'Pasta', 30),
('IN-000000000009', '2016-07-01', 'BRG0000016', 'Shampo Emeron 20 Gram', 'Habis pakai', 200);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(15) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `nama`, `password`, `level`) VALUES
('admin', 'Sandra Dewi', 'admin', 'Admin'),
('manager', 'Herdianto', 'manager', 'Manager'),
('gudang', 'Teguh Jiwa', 'gudang', 'Gudang'),
('RPM0000001', 'Triono Sakti', 'triono', 'Gudang'),
('RPM0000002', 'Nadia Pamungkas', 'nadia', 'Gudang');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
