-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 01:41 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `t4b`
--

CREATE TABLE `t4b` (
  `ID` int(10) NOT NULL,
  `UName` varchar(10) NOT NULL,
  `TBrand` varchar(10) NOT NULL,
  `TWheels` int(10) NOT NULL,
  `TEngine` varchar(10) NOT NULL,
  `TStorage` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4b`
--

INSERT INTO `t4b` (`ID`, `UName`, `TBrand`, `TWheels`, `TEngine`, `TStorage`) VALUES
(2, 'asad', 'VOLVO', 4, 'NORMAL', 'SMALL'),
(3, 'manan', 'PANTHER', 16, 'ULTRA', 'XL'),
(4, 'nitin', 'PANTHER', 32, 'SUPER', 'LARGE'),
(5, 'asad', 'WATSON', 8, 'MEGA', 'MEDIUM'),
(6, 'asad', 'DHONI', 16, 'MEGA', 'LARGE'),
(7, 'shiv', 'VOLVO', 4, 'NORMAL', 'SMALL'),
(8, 'shiv', 'PANTHER', 8, 'SUPER', 'XL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t4b`
--
ALTER TABLE `t4b`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t4b`
--
ALTER TABLE `t4b`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
