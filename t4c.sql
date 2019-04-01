-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 08:35 AM
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
-- Table structure for table `t4c`
--

CREATE TABLE `t4c` (
  `BID` int(10) NOT NULL,
  `TID` int(10) NOT NULL,
  `CName` varchar(10) NOT NULL,
  `BookedBy` varchar(10) NOT NULL,
  `BookedOn` date NOT NULL,
  `BookedFor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4c`
--

INSERT INTO `t4c` (`BID`, `TID`, `CName`, `BookedBy`, `BookedOn`, `BookedFor`) VALUES
(8, 4, 'nitin', 'asad', '2019-03-30', '2019-05-05'),
(9, 4, 'nitin', 'asad', '2019-03-30', '2019-04-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t4c`
--
ALTER TABLE `t4c`
  ADD PRIMARY KEY (`BID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t4c`
--
ALTER TABLE `t4c`
  MODIFY `BID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
