-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 02:26 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mesinbasuh`
--

-- --------------------------------------------------------

--
-- Table structure for table `senarai`
--

CREATE TABLE `senarai` (
  `bil` int(5) NOT NULL,
  `model` varchar(25) NOT NULL,
  `jenama` varchar(25) NOT NULL,
  `jenis` varchar(25) DEFAULT NULL,
  `tarikh` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senarai`
--

INSERT INTO `senarai` (`bil`, `model`, `jenama`, `jenis`, `tarikh`) VALUES
(1, ' LG 12 KG DD', 'LG', 'FRONT LOAD', '2024-10-20'),
(2, 'HISENSE 15KG WASHER DRYER', 'HISENSE', 'FRONTLOAD', '2024-10-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `senarai`
--
ALTER TABLE `senarai`
  ADD PRIMARY KEY (`bil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
