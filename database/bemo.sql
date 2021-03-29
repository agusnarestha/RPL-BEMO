-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 03:04 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(50) NOT NULL,
  `no_laporan` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `no_laporan` varchar(50) NOT NULL,
  `id_transaksi` varchar(50) NOT NULL,
  `tanggal_laporan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pembeli`
--

CREATE TABLE `laporan_pembeli` (
  `no_laporan_pembeli` varchar(50) NOT NULL,
  `no_laporan` varchar(50) NOT NULL,
  `id_penjual` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_penjual`
--

CREATE TABLE `laporan_penjual` (
  `no_laporan_penjual` varchar(50) NOT NULL,
  `no_laporan` varchar(50) NOT NULL,
  `total_pendapatan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` varchar(50) NOT NULL,
  `id_penjual` varchar(50) NOT NULL,
  `tipe_mobil` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `stok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mobil_baru`
--

CREATE TABLE `mobil_baru` (
  `status_mobil` varchar(50) NOT NULL,
  `tahun_perakitan` varchar(50) NOT NULL,
  `id_mobil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mobil_bekas`
--

CREATE TABLE `mobil_bekas` (
  `kondisi` varchar(50) NOT NULL,
  `tahun_pembelian` varchar(4) NOT NULL,
  `id_mobil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` varchar(50) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `no_laporan_pembeli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` varchar(50) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `no_laporan_penjual` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(50) NOT NULL,
  `id_penjual` varchar(50) NOT NULL,
  `id_pembeli` varchar(50) NOT NULL,
  `id_mobil` varchar(50) NOT NULL,
  `tanggal_transaksi` varchar(50) NOT NULL,
  `status_transaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no_ktp` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `no_laporan` (`no_laporan`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`no_laporan`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `laporan_pembeli`
--
ALTER TABLE `laporan_pembeli`
  ADD PRIMARY KEY (`no_laporan_pembeli`),
  ADD KEY `id_penjual` (`id_penjual`),
  ADD KEY `no_laporan` (`no_laporan`);

--
-- Indexes for table `laporan_penjual`
--
ALTER TABLE `laporan_penjual`
  ADD PRIMARY KEY (`no_laporan_penjual`),
  ADD KEY `no_laporan` (`no_laporan`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`),
  ADD KEY `mobil` (`id_penjual`);

--
-- Indexes for table `mobil_baru`
--
ALTER TABLE `mobil_baru`
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `mobil_bekas`
--
ALTER TABLE `mobil_bekas`
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`),
  ADD KEY `extend2` (`no_ktp`),
  ADD KEY `no_laporan_pembeli` (`no_laporan_pembeli`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`),
  ADD KEY `extend` (`no_ktp`),
  ADD KEY `no_laporan_penjual` (`no_laporan_penjual`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `idmobil` (`id_mobil`),
  ADD KEY `idpenjual` (`id_penjual`),
  ADD KEY `idpembeli` (`id_pembeli`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no_ktp`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`no_laporan`) REFERENCES `laporan` (`no_laporan`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `laporan_pembeli`
--
ALTER TABLE `laporan_pembeli`
  ADD CONSTRAINT `laporan_pembeli_ibfk_1` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`),
  ADD CONSTRAINT `laporan_pembeli_ibfk_2` FOREIGN KEY (`no_laporan`) REFERENCES `laporan` (`no_laporan`);

--
-- Constraints for table `laporan_penjual`
--
ALTER TABLE `laporan_penjual`
  ADD CONSTRAINT `laporan_penjual_ibfk_1` FOREIGN KEY (`no_laporan`) REFERENCES `laporan` (`no_laporan`);

--
-- Constraints for table `mobil`
--
ALTER TABLE `mobil`
  ADD CONSTRAINT `mobil` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`);

--
-- Constraints for table `mobil_baru`
--
ALTER TABLE `mobil_baru`
  ADD CONSTRAINT `mobil_baru_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`);

--
-- Constraints for table `mobil_bekas`
--
ALTER TABLE `mobil_bekas`
  ADD CONSTRAINT `mobil_bekas_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`);

--
-- Constraints for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD CONSTRAINT `extend2` FOREIGN KEY (`no_ktp`) REFERENCES `user` (`no_ktp`),
  ADD CONSTRAINT `pembeli_ibfk_1` FOREIGN KEY (`no_laporan_pembeli`) REFERENCES `laporan_pembeli` (`no_laporan_pembeli`);

--
-- Constraints for table `penjual`
--
ALTER TABLE `penjual`
  ADD CONSTRAINT `extend` FOREIGN KEY (`no_ktp`) REFERENCES `user` (`no_ktp`),
  ADD CONSTRAINT `penjual_ibfk_1` FOREIGN KEY (`no_laporan_penjual`) REFERENCES `laporan_penjual` (`no_laporan_penjual`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `idmobil` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`),
  ADD CONSTRAINT `idpembeli` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`),
  ADD CONSTRAINT `idpenjual` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
