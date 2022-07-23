-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 23, 2022 at 01:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsignupdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `userTbl`
--

CREATE TABLE `userTbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userTbl`
--

INSERT INTO `userTbl` (`id`, `username`, `password`, `email`, `address`) VALUES
(1, 'admin', '123', 'admin@mailinator.com', 'Labore sequi nu'),
(2, 'admin123', '123123', 'kekefevidy@mailinator.com', 'Sed corporis es'),
(3, 'testing', 'trytry', 'ravixuje@mailinator.com', 'Ab vel officiis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userTbl`
--
ALTER TABLE `userTbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userTbl`
--
ALTER TABLE `userTbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
