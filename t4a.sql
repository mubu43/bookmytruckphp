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
-- Table structure for table `t4a`
--

CREATE TABLE `t4a` (
  `ID` int(10) NOT NULL,
  `UName` varchar(10) NOT NULL,
  `Pwd` varchar(10) NOT NULL,
  `Name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4a`
--

INSERT INTO `t4a` (`ID`, `UName`, `Pwd`, `Name`) VALUES
(7, 'asad', 'ff66ff', 'Asad'),
(8, 'nitin', 'gg77gg', 'Nitin'),
(9, 'manan', '123', 'manan'),
(10, 'shiv', 'hh88hh', 'Shiv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t4a`
--
ALTER TABLE `t4a`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t4a`
--
ALTER TABLE `t4a`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
