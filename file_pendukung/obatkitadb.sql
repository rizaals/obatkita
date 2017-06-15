-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2017 at 03:33 AM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id1895834_obatkitadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_nama` varchar(255) NOT NULL,
  `cus_alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_nama`, `cus_alamat`) VALUES
(1, 'david', 'jln. Kebon Kacang 3 No 12, Tanah Abang Jakarta Pusat, Jakarta - 13460'),
(2, 'Bento', 'Jln Raya Pondok Indah Block C6 No 23, Pondok Indah,  Jakarta Selatan - 14590.'),
(3, 'amin', 'Jln. Pondok Kelapa Raya No. 13, POndok Kelapa, Duren Sawit - Jakarta Timur.'),
(4, 'sugeng', 'Jln. Menteng Pulo Raya No. 23, POndok Kelapa, Duren Sawit - Jakarta Timur.'),
(5, 'sugeng', 'Jln. Menteng Pulo Raya No. 23, POndok Kelapa, Duren Sawit - Jakarta Timur.'),
(6, 'Gono', 'Jln. Ampera Raya No 7 Blok BD, Pasar Minggu, Jakarta Timur, Jakarta - 13460'),
(7, 'Doni', 'Jln. Megamendung Raya blok C4 No.18, Pondok Kopi, Jakarta Timur, Jakarta - 13250'),
(8, 'ahmad', 'jl kebayoran'),
(9, 'Junet', 'Jln kavling 12'),
(10, 'Diego', 'Jln. Merpati 5 no 12b Jakarta Selatan'),
(11, 'Diego', 'Jln. Pasunda 12 no 15b Jakarta Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `obat_id` int(11) NOT NULL,
  `obat_nama` varchar(255) NOT NULL,
  `obat_qty` int(4) NOT NULL,
  `obat_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`obat_id`, `obat_nama`, `obat_qty`, `obat_harga`) VALUES
(1, 'c2fit', 1382, 15000),
(2, 'mipi', 874, 15000),
(3, 'thromecon', 1182, 20000),
(4, 'Cendo Lyteers', 431, 34500),
(5, 'Calpanax', 500, 13000),
(6, 'Bodrex', 1000, 3000),
(7, 'Betadine', 2900, 18000),
(8, 'Conidine', 200, 4000),
(9, 'Bodrexin', 488, 3000),
(10, 'Acylovir Oral', 1000, 26000),
(11, 'AcylovirTopical', 500, 45000),
(12, 'Aminofilin', 288, 34000),
(13, 'Sakatonik ABC', 200, 25000),
(14, 'Atenolol', 500, 26000),
(15, 'Baclofen', 600, 49000),
(16, 'Biotin', 100, 27000),
(17, 'Bromelain', 200, 43000),
(18, 'Carvedilol', 300, 29000),
(19, 'Cipslatin', 200, 26000),
(20, 'IBUPROFEN', 300, 45500),
(21, 'ASAM MEFENAMAT', 499, 45000),
(22, 'DIAZEPAM', 600, 24000),
(23, 'PIROKSIKAM', 900, 78000),
(24, 'Difenhidramin', 499, 129000),
(25, 'Adidryl', 100, 156000),
(26, 'Allogon', 100, 29100),
(27, 'Analspec', 300, 21000),
(28, 'Anastan', 800, 90100),
(29, 'Argesid', 111, 45000),
(30, 'Asimat', 778, 56900),
(31, 'Benostan', 233, 45500),
(32, 'Bimastan', 122, 12900),
(33, 'Bonapons', 200, 110300),
(34, 'Cargesik', 444, 23900),
(35, 'Cetalmic', 344, 34500),
(36, 'Citostan', 100, 34200),
(37, 'Corstanal', 111, 23800),
(38, 'Costan Forte', 200, 34300),
(39, 'Datan', 200, 89000),
(40, 'Dolfenal', 1000, 21000),
(41, 'Gitaramin', 100, 29000),
(42, 'Hexalgesic,', 300, 82000),
(43, 'Mectan', 200, 23200),
(44, 'Panstonal Forte', 500, 38700),
(45, 'Poncofen', 100, 91000),
(46, 'Ponsamic', 200, 34500),
(47, 'Ponstelax', 200, 1280),
(48, 'Ronex', 299, 20000),
(49, 'Solasic', 230, 3400),
(50, 'Stanalin', 300, 23000),
(51, 'Cetalgin', 200, 23000),
(52, 'Danalgin', 300, 34900),
(53, 'Metaneuron', 400, 11000),
(54, 'Mentalium', 2, 109000),
(55, 'Neo protal', 455, 78000),
(56, 'Neuropyron', 299, 10200),
(57, 'Neuroval', 100, 2300),
(58, 'Neuroval', 100, 2300),
(59, 'Proneuron', 900, 81900),
(60, 'Paracetamol', 333, 12000),
(61, 'Konidin', 120, 19000),
(62, 'OBH Combi', 288, 26000),
(63, 'Remacil', 399, 34000),
(64, 'Imunex', 100, 340000),
(65, 'Acetosal', 122, 45000),
(66, 'As. Mefenamat', 233, 28900),
(67, 'Ketoprofen', 90, 23000),
(68, 'Meloksikam', 200, 32300),
(69, 'Morfin', 10, 289000),
(70, 'Na Diklofenak', 800, 23200),
(71, 'Tramadol', 120, 32000),
(72, 'Cetrizin', 111, 12000),
(73, 'Deksametason', 300, 34000),
(74, 'Dipenhidramin', 10, 12000),
(75, 'Epinefrin', 200, 18000),
(76, 'Ranitidine', 100, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_StatBayar` int(1) NOT NULL,
  `order_tanggal` date DEFAULT NULL,
  `order_qty` int(11) NOT NULL,
  `cus_id` int(11) DEFAULT NULL,
  `obat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_StatBayar`, `order_tanggal`, `order_qty`, `cus_id`, `obat_id`) VALUES
(1, 1, '2017-05-09', 2, 1, 2),
(2, 1, '2017-05-08', 6, 2, 3),
(3, 0, '2017-05-10', 12, 3, 1),
(4, 1, '2017-05-10', 20, 4, 4),
(5, 0, '2017-05-10', 20, 5, 4),
(6, 0, '2017-05-10', 12, 6, 3),
(7, 1, '2017-05-10', 8, 7, 4),
(8, 1, '2017-06-10', 10, 8, 30),
(9, 0, '2017-06-10', 4, 9, 67),
(10, 0, '2017-06-12', 10, NULL, 6),
(11, 0, '2017-06-12', 10, 11, 6);

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `kirim_id` int(11) NOT NULL,
  `kirim_status` int(1) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`kirim_id`, `kirim_status`, `order_id`) VALUES
(1, 0, 1),
(2, 0, 2),
(3, 0, 4),
(4, 0, 5),
(5, 0, 6),
(6, 0, 7),
(7, 0, 8),
(8, 0, 9),
(9, 0, 10),
(10, 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_pswd` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_nama`, `user_pswd`) VALUES
(1, 'Rizal', '123456'),
(2, 'fikri', '123456'),
(3, 'budi', '123456'),
(4, 'agpal', '123456'),
(5, 'kurniawan', '123456'),
(6, 'arul', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`obat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_CusOrder` (`cus_id`),
  ADD KEY `FK_ObatOrder` (`obat_id`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`kirim_id`),
  ADD KEY `FK_OrderKirim` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `obat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `kirim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_CusOrder` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`),
  ADD CONSTRAINT `FK_ObatOrder` FOREIGN KEY (`obat_id`) REFERENCES `obat` (`obat_id`);

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `FK_OrderKirim` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
