-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2018 at 11:25 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firstdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `type`) VALUES
(1, 'sales', 1),
(2, 'IT', 2),
(3, 'Amr', 1),
(4, 'Account', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `dep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `type`, `dep_id`) VALUES
(1, 'amr adel', 20, 2, 2),
(6, 'Ali', 200, 2, 4),
(8, 'amr adel', 254, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, 'amr', 'dola', 'amr@yahoo.com', 'admin', '$2y$10$/Ao3StHgOKuXdVvKQVzxFeZhBawxVHA4CLfE6X4pgutQU/1MFfduK'),
(6, 'aya', 'sayed', 'aya@yahoo.com', 'Aya Sayed', '$2y$10$WPhyFLo6PZFTGEOsXWZRUe7efKBeVgH7Y/Nu1isggRTrE2mJZaPBa'),
(7, 'mariam', 'sa3ed', 'mariam@yahoo.com', 'mariam Sa3ed', '$2y$10$cKtcJuF2mzteEuVsfeuwzOEJy1EYGZk4fHC1ZMhHjFXc4.euHT6.y'),
(8, 'ali', 'ezzat', 'ali@yahoo.com', 'ali', '$2y$10$5/FssRnJE9KHHeGBm4qh3.w9Q1amJRQ44AsSY1tH.4utSIS0JwB2a'),
(9, 'amr', 'mohamed', 'amr.zaky367@yahoo.com', 'amradel', '$2y$10$BCTRxkA60LI7iVrUFOsB8OCJXyvUXNL1LnTRjtnAKMsCeGb6RoFVK'),
(10, 'eslam', 'mamd', 'eslam@yahoo.com', 'admin2', '$2y$10$F5rMpdPUK1HIB5xazDh4PeA/QrndFp31cc4.l3EliehlJsGu4XuDC'),
(11, 'tamim', 'nabil', 'tamimkc11@gmail.com', 'tamim', '$2y$10$NNk/B6YMfhPcaeLoX3B9a.Q0YsFvMLq8tHY9DjFPKH1BzFhaBTBK6'),
(13, 'Amr', 'Zaky', 'amr.zaky367@gmail.com', 'Amr', '$2y$10$X0e9EHmrI1s3gEduBMPOeO1qUAKfggUzKC3u83oGP0jRK4HOZurU2'),
(14, 'Amr', 'Zaky', 'amr.zaky367@gmail.com', 'Amr', '$2y$10$JbTmrxjIOLnrcws/ylA95.DCx5unzqSeFROttcIBj.RsRSNx6.x..'),
(15, 'Amr', 'Zaky', 'amr.zaky367@gmail.com', 'Amr', '$2y$10$2K1f50I5hvRzwTDGNsmOnOID2gssgm64sSfaqk1uW.ze/R6RUrsoS'),
(16, 'amr', 'adel', 'ex@yahoo.com', 'dola', '$2y$10$w06qUEO5j3DG023GA7moU.iJD4lFjTspMJRbJoPl/sq5qULP5.YOS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dep_id` (`dep_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`dep_id`) REFERENCES `department` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
