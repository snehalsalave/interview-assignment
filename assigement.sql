-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 05:13 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assigement`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `userPassword` varchar(30) NOT NULL,
  `UserEmail` varchar(30) NOT NULL,
  `UserMobile` varchar(15) NOT NULL,
  `UserCountry` varchar(30) NOT NULL,
  `userCity` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `UserName`, `userPassword`, `UserEmail`, `UserMobile`, `UserCountry`, `userCity`) VALUES
(1, 'ss', '123', 'snehalsalave@gmail.com', '902247808', 'maharastra', 'pune'),
(2, 'Ganesha', 'ganesh', 'ganesh@gmail.com', '898989898', 'maharastra', 'nashik'),
(3, 'snehal salave', '123', 'snehalsalave130@gmail.com', '902247808', 'maharastra', 'pune'),
(4, 'ganesh udmale', 'ganesh', 'ganesh@gmail.com', '898989898', 'maharastra', 'nashik'),
(18, 'karishma', 'karishma', 'karishma1@gmail.com', '8847483647', '', ''),
(19, 'rakhi salave ', 'rakhi88', 'rakhisalave130@gmail.com', '808074836475', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
