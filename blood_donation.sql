-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 15, 2020 at 11:04 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `email` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `name`, `subject`, `message`) VALUES
('kamrul@gmail.com', 'kamrul', 'O+ blood', 'I need yesterday. Please help.'),
('monmoykms.16@gmail.com', 'Monmoy', 'reply', 'Thank you for help.'),
('apu@gmail.com', 'apu', 'Blood', 'I need yesterday. Please help.'),
('avijit@gmail.com', 'SHUDANGSU RANJAN ROY', 'Blood', 'Thank you for help.'),
('praloy@gmail.com', 'Avijit', 'error', 'error');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `rbloodgroup` text NOT NULL,
  `remail` text NOT NULL,
  `rphone` varchar(11) NOT NULL,
  `rhaddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `rbloodgroup`, `remail`, `rphone`, `rhaddress`) VALUES
(1, 'B+', 'avijit@gmail.com', '01859784694', 'PL-57, RD-13, DIT MERUL, BADDA'),
(2, 'B+', 'avijit@gmail.com', '00000000000', 'PL-57, RD-13, DIT MERUL, BADDA'),
(3, 'O+', 'apu@gmail.com', '99999999999', 'PL-57, RD-13, DIT MERUL, BADDA'),
(6, 'AB-', 'avijit@gmail.com', '01832406506', 'PL-57, RD-13, DIT MERUL, BADDA'),
(7, 'O-', 'kamrul@gmail.com', '01832406506', 'PL-57, RD-13, DIT MERUL, BADDA'),
(8, 'B-', 'momtazrasel8@gmail.com', '01715984563', 'PL-57, RD-13, DIT MERUL, BADDA'),
(9, 'AB-', 'noni@gmail.com', '01832406506', 'PL-57, RD-13, DIT MERUL, BADDA');

-- --------------------------------------------------------

--
-- Table structure for table `signinaccount`
--

CREATE TABLE `signinaccount` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `sname` text NOT NULL,
  `bgroup` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `conpass` varchar(30) NOT NULL,
  `bdate` date NOT NULL,
  `address` text NOT NULL,
  `lastdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signinaccount`
--

INSERT INTO `signinaccount` (`id`, `fname`, `sname`, `bgroup`, `email`, `phone`, `pass`, `conpass`, `bdate`, `address`, `lastdate`) VALUES
(2, 'Avijit', 'Datta', 'B+', 'avijit@gmail.com', '01859784694', 'avijit', 'avijit', '1996-12-09', 'PL-57, RD-13, DIT MERUL, BADDA', '0000-00-00'),
(3, 'Noni', 'kar', 'AB+', 'nonikarpc@gmail.com', '01914301481', 'noni', 'noni', '1990-02-12', 'PL-57, RD-13, DIT MERUL, BADDA', '0000-00-00'),
(4, 'Praloy', 'Datta', 'AB+', 'praloy@gmail.com', '01832406506', '123', '123', '1990-05-16', 'Rampura', '2012-12-12'),
(5, 'Milton', 'Datta', 'A+', 'milton@gmail.com', '01315151515', '1010', '1010', '1990-03-08', 'PL-57, RD-13, DIT MERUL, BADDA', '0000-00-00'),
(6, 'Apu', 'Datta', 'B+', 'apu@gmail.com', '01832406506', 'a', 'a', '2001-09-05', 'PL-57, RD-13, DIT MERUL, BADDA', '0000-00-00'),
(7, 'Monmoy', 'Islam', 'B+', 'monmoykms.16@gmail.com', '01832406506', 'a', 'a', '1996-12-09', 'PL-57, RD-13, DIT MERUL, BADDA', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signinaccount`
--
ALTER TABLE `signinaccount`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `signinaccount`
--
ALTER TABLE `signinaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
