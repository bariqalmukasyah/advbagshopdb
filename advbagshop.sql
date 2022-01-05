-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 07:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advbagshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_detail`
--

CREATE TABLE `penjualan_detail` (
  `id` int(11) NOT NULL,
  `kode_jual` varchar(20) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_header`
--

CREATE TABLE `penjualan_header` (
  `id` int(11) NOT NULL,
  `kode_jual` varchar(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `zip` int(30) NOT NULL,
  `alamat` text NOT NULL,
  `grand_total` decimal(15,0) NOT NULL,
  `mode_pembayaran` varchar(10) NOT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `transaction_date` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `gambar_produk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `deskripsi`, `harga_beli`, `harga_jual`, `gambar_produk`) VALUES
(1, 'Bodypack Vacation 2.0 - Navy', 'Bodypack Bagpack', 500000, 795000, '467-bst1.jpg'),
(8, 'Eiger Kingfisher Lite 10 Daypack - Teal', 'Eiger Daypack', 50000, 85000, '284-bst2.jpg'),
(10, 'Eiger Pacemaker 10 - Black', 'Eiger Bagpack', 250000, 499000, '834-bst4.jpg'),
(11, 'Bodypack Prodiger 1.0 - Black', 'Bodypack Bagpack', 400000, 699000, '842-prd1.jpg'),
(12, 'Exsport Rubyn Dos - Olive', 'Exsport Daypack', 200000, 319000, '60-prd2.jpg'),
(13, 'Exsport Austin Zarza - Yellow', 'Exsport Daypack', 250000, 369000, '301-prd3.jpg'),
(14, 'Eiger X-Rainer Stuff Sack - Green', 'Eiger StuffSack', 50000, 149000, '79-prd4.jpg'),
(15, 'Eiger Roadtrip Ruck - Brown', 'Eiger Bagpack', 329000, 599000, '835-prd5.jpg'),
(16, 'Eiger Borderpass 3.0 - Olive', 'Eiger TravelBag', 250000, 519000, '208-prd6.jpg'),
(17, 'Eiger Wayfarer 2.0 - Olive', 'Eiger Bagpack', 259000, 429000, '344-prd7.jpg'),
(18, 'Exsport Lovana Cora - Brown', 'Exsport Daypack', 250000, 429000, '173-prd8.jpg'),
(19, 'Exsport Amelia Quinn - Blue', 'Exsport Daypack', 219000, 349000, '299-prd9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan_header`
--
ALTER TABLE `penjualan_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `penjualan_header`
--
ALTER TABLE `penjualan_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
