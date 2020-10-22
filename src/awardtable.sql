-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 05:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awards`
--

-- --------------------------------------------------------

--
-- Table structure for table `awardtable`
--

CREATE TABLE `awardtable` (
  `Award_ID` int(11) NOT NULL,
  `Judge_Name` varchar(100) NOT NULL,
  `Award_category` varchar(200) NOT NULL,
  `Award_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awardtable`
--

INSERT INTO `awardtable` (`Award_ID`, `Judge_Name`, `Award_category`, `Award_name`) VALUES
(1, 'Lasitha', 'Best ', 'Best Fucker'),
(2, 'Lasitha', 'Best ', 'Best Fucker'),
(3, 'Adhi', 'Popular', 'Popular fucker');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awardtable`
--
ALTER TABLE `awardtable`
  ADD PRIMARY KEY (`Award_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awardtable`
--
ALTER TABLE `awardtable`
  MODIFY `Award_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
