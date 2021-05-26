-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 10:23 PM
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
(1, 'AC Milan', 'XL', 'Italia', '$99', 'ac milan.jpg'),
(2, 'Atletico Madrid', 'XL', 'Spanyol', '$99', 'atletico.jpg'),
(3, 'Borusia Dortmund', 'XL', 'Jerman', '$99', 'dortmund.jpg'),
(4, 'Man City', 'XL', 'Inggris', '$99', 'man city.jpg'),
(5, 'Real Madrid', 'XL', 'Spanyol', '$99', 'real madrid.jpg'),
(9, 'Persib', 'XL', 'Bandung', 'Rp 500.000', 'persib.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jersey`
--
ALTER TABLE `jersey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jersey`
--
ALTER TABLE `jersey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
