-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 10:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tohtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cid` int(11) NOT NULL,
  `cn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cid`, `cn`) VALUES
(1, 'Phone'),
(2, 'laptop'),
(3, 'PC');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `IMAGE` varchar(200) NOT NULL,
  `TITLE` varchar(255) NOT NULL,
  `CONTENT` text NOT NULL,
  `PRICE` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `IMAGE`, `TITLE`, `CONTENT`, `PRICE`, `cid`) VALUES
(23, 'product-img-1.jpg', 'iPhone 13 pro', 'Apple M1 Pro or M1 Max chip for a massive leap in CPU, GPU, and machine learning performance\r\n							Up to 10-core CPU delivers up to 3.7x faster performance to fly through pro workflows quicker than ever\r\n							Up to 32-core GPU with up to 13x faster performance for graphics-intensive apps and games\r\n							16-core Neural Engine for up to 11x faster machine learning performance\r\n							Longer battery life, up to 17 hours\r\n							Up to 64GB of unified memory so everything you do is fast and fluid\r\n							Up to 8TB of superfast SSD storage launches apps and opens files in an instant', '12,000', 1),
(24, 'product-img-5.jpg', 'Apple Macbook Air 2020', 'Apple M1 Pro or M1 Max chip for a massive leap in CPU, GPU, and machine learning performance\r\n							Up to 10-core CPU delivers up to 3.7x faster performance to fly through pro workflows quicker than ever\r\n							Up to 32-core GPU with up to 13x faster performance for graphics-intensive apps and games\r\n							16-core Neural Engine for up to 11x faster machine learning performance\r\n							Longer battery life, up to 17 hours\r\n							Up to 64GB of unified memory so everything you do is fast and fluid\r\n							Up to 8TB of superfast SSD storage launches apps and opens files in an instant', '24,000', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `cat` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
