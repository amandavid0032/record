-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 12:51 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `record`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_record`
--

CREATE TABLE `basic_record` (
  `id` int(60) NOT NULL,
  `phone` text NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `location` varchar(10) NOT NULL,
  `shift` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_record`
--

INSERT INTO `basic_record` (`id`, `phone`, `first_name`, `location`, `shift`) VALUES
(12, '9914765766', 'AMAN KONDAL', 'Palam', 'Morning'),
(14, '9217983787', 'Jaya Devi', 'Palam', 'Morning'),
(15, '9217983787', 'david', 'Gurgaon', 'Evening'),
(16, '213456', 'awserdftgh', 'Samauli', 'Evening'),
(17, '23456', 'dxfcvb', 'Gurgaon', 'Evening');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_record`
--
ALTER TABLE `basic_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_record`
--
ALTER TABLE `basic_record`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
