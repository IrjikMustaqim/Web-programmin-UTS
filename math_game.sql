-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 04:31 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hall_of_fame`
--

-- --------------------------------------------------------

--
-- Table structure for table `math_game`
--

CREATE TABLE `math_game` (
  `ID` int(255) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `score` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `math_game`
--

INSERT INTO `math_game` (`ID`, `username`, `email`, `score`) VALUES
(3, 'irjik', 'irjikilarobiqi@gmail.com', 0),
(5, 'username1', 'irjikmustaqim@gmail.com', 50),
(7, 'dcded', 'irji\'imustaqib@gmail.com', 0),
(8, 'ucup', 'irjikilarobiqi@student.uns.ac.id', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `math_game`
--
ALTER TABLE `math_game`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `math_game`
--
ALTER TABLE `math_game`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
