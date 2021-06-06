-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 08:53 AM
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
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `jersey`
--

CREATE TABLE `jersey` (
  `id` int(11) NOT NULL,
  `jersey` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jersey`
--

INSERT INTO `jersey` (`id`, `jersey`, `ukuran`, `asal`, `harga`, `gambar`) VALUES
(40, 'Inggris', 'XL', 'Manchester', 'Rp 1.900.000', '60bc508c89d93.jpg'),
(41, 'Italia', 'XL', 'Milan', 'Rp 2.000.000', '60bc52065afa5.jpg'),
(42, 'Belanda', 'XL', 'Amsterdam', 'Rp 1.900.000', '60bc522cadfa8.jpg'),
(43, 'Jepang', 'XL', 'Tokyo', 'Rp 1.700.000', '60bc525207567.jpg'),
(44, 'Indonesia', 'XL', 'Jayapura', 'Rp 800.000', '60bc5282d0836.jpg'),
(45, 'Jerman', 'XL', 'Berlin', 'Rp 2.100.000', '60bc52a27e029.jpg'),
(46, 'Norwegia', 'XL', 'Norwegia', 'Rp 1.800.000', '60bc52c145660.jpg'),
(47, 'Persib', 'XL', 'Bandung', 'Rp 600.000', '60bc52f80abf7.jpg'),
(48, 'Chelsea', 'XL', 'London', 'Rp 2.100.000', '60bc530db6b3c.jpg'),
(49, 'Inter Milan', 'XL', 'Milan', 'Rp 2.200.000', '60bc53337d168.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'admin', '$2y$10$B71.gD/qiJ9SOTi9zQSjk..Z9IrQMKAXRX0x3xxsDbyBg.8GzOQb.'),
(5, 'pw', '$2y$10$UCwryF4lJvMPVUggfAUhXO/rsuoAOn83Y.kIV5glWChXIUq9bRY8S'),
(6, 'pwk', '$2y$10$5jlb08knvozmXp17Di30i.4DE5W6WF7.SwgxXA0s4iEyyosAU1iXi'),
(7, 'pd', '$2y$10$wMTwgUzSxKH89YHuMI4KzeDhixHfpsan8WM5l.TBAgn1VDK0sShey'),
(8, 'sa', '$2y$10$/yRponVYRxZi/0tdkNY2MOctp4a0qlhggrI61wpK0ZFUriqCuGnzG'),
(9, 'qw', '$2y$10$.kf1kKD5Owp9yQLk00pB3uEB8sgCH9BASJAirh0IBH8q/LHTToV/q'),
(10, 'as', '$2y$10$vlfORIMdA3iN5b2jxjMdP.cxJNVMJN1Ib9GpYOLe0ui0X.FhbL5mm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jersey`
--
ALTER TABLE `jersey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jersey`
--
ALTER TABLE `jersey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
