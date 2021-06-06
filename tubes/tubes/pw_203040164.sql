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
-- Database: `pw_203040164`
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
(1, 'AC Milan', 'XL', 'Milan', 'Rp 2.000.000', '60a3d3eb3ce84.jpg'),
(2, 'Atletico Madrid', 'XL', 'Madrid', 'Rp 2.000.000', '6099663430524.jpg'),
(3, 'Borusia Dortmund', 'XL', 'Dortmund', 'Rp 1.900.000', '609966568ebb0.jpg'),
(4, 'Manchester City', 'XL', 'Manchester', 'Rp 2.099.000', '6099683b643c6.jpg'),
(5, 'Real Madrid', 'XL', 'Madrid', 'Rp 2.299.000', '609966a236257.jpg'),
(9, 'Persib', 'XL', 'Bandung', 'Rp 550.000', '609966b21a7dc.jpg'),
(13, 'AS Roma', 'XL', 'Roma', 'Rp 1.900.000', '6099670825a47.jpg'),
(14, 'Paris Saint Germany', 'XL', 'Paris', 'Rp 2.000.000', '609967469da94.jpg'),
(15, 'Leicestser', 'XL', 'Leicestser', 'Rp 1.799.000', '6099678388a4d.jpg'),
(16, 'Manchester United', 'XL', 'Manchester', 'Rp 2.199.000', '609967ae89e44.jpg'),
(17, 'Chelsea', 'XL', 'London', 'Rp 2.099.000', '609967cc61dab.jpg'),
(18, 'Orlando Pride', 'XL', 'Orlando', 'Rp 1.650.000', '609967f32d06c.jpg'),
(19, 'Inter Milan', 'XL', 'Milan', 'Rp 2.150.000', '6099681748ef8.jpg'),
(20, 'Italia', 'XL', 'Roma', 'Rp 2.000.000', '609aa8ad53756.jpg'),
(22, 'Belanda', 'XL', 'Amsterdam', 'Rp 1.900.000', '609aa8d3ebe2d.jpg'),
(23, 'Norwegia', 'XL', 'Norwegia', 'Rp 1.700.000', '609aa8f406497.jpg'),
(24, 'Inggris', 'XL', 'London', 'Rp 2.099.000', '609aa910c443c.jpg'),
(25, 'Indonesia', 'XL', 'Jayapura', 'Rp 851.000', '609aa936cb09b.jpg'),
(26, 'Belgia', 'XL', 'Belgia', 'Rp 2.000.000', '609aa95e1e886.jpg'),
(27, 'Jerman', 'XL', 'Berlin', 'Rp 2.300.000', '609aa97b4ee96.jpg'),
(28, 'Jepang', 'XL', 'Tokyo', 'Rp 1.600.000', '609aa99a47276.jpg'),
(41, 'Brazil', 'XL', 'Teresopolis', 'Rp 2.000.000', '60bc6b7edf24e.jpg'),
(42, 'Portugal', 'XL', 'Madeira', 'Rp 2.100.000', '60bc6bc1daad0.jpg'),
(43, 'Prancis', 'XL', 'Paris', 'Rp 2.230.000', '60bc6be8d82ef.jpg');

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
(6, 'qw', '$2y$10$1MQRn7y6N10k8k2.SHQ14eSh4e/6ob9VmO7faEPijszosTsyVmTLG');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
