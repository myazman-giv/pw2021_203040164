-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2021 at 12:34 PM
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
-- Database: `pw_tubes_203040164`
--

-- --------------------------------------------------------

--
-- Table structure for table `sapi`
--

CREATE TABLE `sapi` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `bobot` varchar(10) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sapi`
--

INSERT INTO `sapi` (`id`, `gambar`, `jenis`, `deskripsi`, `umur`, `bobot`, `harga`) VALUES
(1, 'aceh.jpg', 'Sapi Aceh', 'keunggulan Sapi Aceh antara lain, tahan terhadap penyakit di wilayah tropis, mempunyai adaptasi yang baik pada iklim ekstrem dan wilayah marginal, reproduksi baik dan mempunyai nilai ekonomi tinggi bagi masyarakat Aceh.', '4 tahun', '600 kg', 'Rp 23.000.000'),
(2, 'angus.jpg', 'Sapi Angus', 'Keunggulan sapi angus antara lain adalah bertubuh besar dan berdaging banyak, pertumbuhannya cepat, mampu beradaptasi dengan pakan yang bermutu rendah serta lingkungan tropis Indonesia', '3 tahun', '980 kg', 'Rp 46.000.000'),
(3, 'bali.jpg', 'Sapi Bali', 'Keunggulan sapi bali dari sapi pedaging lain adalah terletak pada tulang sapi bali relatif lebih kecil dari sapi jenis lain, sehingga jumlah daging lebih tebal', '2 tahun', '500 kg', 'Rp 19.000.000'),
(4, 'belgian.jpg', 'Sapi Belgian Blue', 'Keunggulan sapi ini diantaranya mempunyai konformasi perototan yang baik dan persentase karkas yang tinggi. Kandungan lemak pada sapi Belgian Blue yang relatif lebih rendah dan memiliki efisiensi penggunaan pakan yang baik', '4 tahun', '1.430 kg', 'Rp 65.000.000'),
(5, 'brahman.jpg', 'Sapi Brahman', 'Keunggula sapi Brahman Kemampuan adaptasi dengan suhu panas dan lingkungan lembab sangat baik. Punya ketahanan yang baik terhadap serangan parasit.', '4 tahun	', '900 kg', 'Rp 41.000.000'),
(6, 'brangus.jpg', 'Sapi Brangus', 'Keunggulan sapi Brangus yaitu pertumbuhan badannya cepat, memiliki daya tahan уаng baik terhadap panas/iklim tropis, dan produktifitas daging tinggi.', '4 tahun', '989 kg', 'Rp 49.000.000'),
(7, 'devon.jpg', 'Sapi Devon', 'Keunggulan Sapi Devons memiliki kekuatan yang besar, kecerdasan, kecepatan cepat dan daya tahan. Pada masa sekarang Devons masih dicari untuk digunakan sebagai lembu.', '4 tahun', '1.200 kg', 'Rp 50.000.000'),
(8, 'limosin.jpg', 'Sapi Limosin', 'Keunggulan Sapi Limosin ini mempunyai daging dengan kualitas yang baik dan cocok untuk dijadikan makanan konsumsi. Waktu untuk penggemukan sapi limousin lebih pendek dan cepat.', '5 tahun', '1.250 kg', 'Rp 56.000.000'),
(9, 'madura.jpg', 'Sapi Madura', 'Keunggulan Sapi Madura ialah Warna dagingnya merah cerah, empuk, berserat halus, dan rendah lemak. Keunggulan lainnya, karkas (berat daging sapi tanpa kepala, kaki, jerowan, dan kulit) daging sapi Madura mencapai 48 persen dari berat badan sapi', '4 tahun', '700 kg', 'Rp 34.000.000'),
(10, 'po.jpg', 'Sapi Peranakan Ongole', 'Keunggulan sapi PO ini antara lain tahan terhadap panas, terhadap ekto dan endoparasit, pertumbuhan relatif cepat walaupun adaptasi terhadap pakan kurang, serta persentase karkas dan kualitas daging baik', '5 tahun', '970 kg', 'Rp 42.000.000'),
(11, 'simental.jpg', 'Sapi Simental', 'Kelebihan sapi simental yakni sapi jenis pedaging yang mampu mencapai berat 1.400 kg untuk sapi usia dewasa. Sapi metal pedaging mamiliki metabolisme yang cepat, sehingga pertambahan bobot setiap harinya bisa mencapi 2,1 kg.', '5 tahun', '1.120 kg', 'Rp 50.000.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sapi`
--
ALTER TABLE `sapi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sapi`
--
ALTER TABLE `sapi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
