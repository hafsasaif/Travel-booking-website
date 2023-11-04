-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 04:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),
(3, 'Saqib', 'Saqib'),
(4, 'Nadeem', 'Nadeem'),
(5, 'Mohammed', 'Mohammed'),
(6, 'Hafsa', 'Hafsa'),
(7, 'Alhanoof', 'Alhanoof'),
(8, 'GTO', 'GTO');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `season` int(11) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `age`, `city`, `season`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(22, 'Dr.', 'Mohmmed', 'Abdullah', 45, 'Madrid', 2, 'Deluxe Room', 'Single', 1, '2020-12-29', '2020-12-30', 191.11, 196.51, 3.60, 'Breakfast', 1.80, 1),
(23, 'Miss.', 'Souzan', 'Tomes', 17, 'Madrid', 2, 'Deluxe Room', 'Double', 1, '2020-12-29', '2020-12-17', -2293.33, -2422.93, -86.40, 'Breakfast', -43.20, -12),
(24, 'Prof.', 'Ahmed', 'Aladwi', 30, 'Madrid', 3, 'Deluxe Room', 'Quad', 1, '2021-01-06', '2021-01-08', 0.00, 57.60, 43.20, 'Half Board', 14.40, 2),
(25, 'Mr.', 'Joon ', 'Asten', 27, 'Amsterdam', 1, 'Superior Room', 'Single', 1, '2021-04-14', '2021-04-04', 0.00, 0.00, 0.00, 'Breakfast', 0.00, -10),
(26, 'Mr.', 'Ali', 'Mohmmed', 23, 'Paris', 2, 'Guest House', 'Double', 1, '2021-01-13', '2021-01-28', 0.00, 0.00, 0.00, 'Breakfast', 0.00, 15),
(27, 'Mr.', 'Ali', 'Mohmmed', 23, 'Paris', 2, 'Guest House', 'Double', 1, '2021-01-13', '2021-01-28', 0.00, 0.00, 0.00, 'Breakfast', 0.00, 15),
(28, 'Miss.', 'Alia', 'Ail', 45, 'Sydney', 3, 'Deluxe Room', 'Double', 1, '2021-01-03', '2021-01-08', 905.89, 923.44, 0.00, 'Room only', 17.55, 5),
(29, 'Dr.', 'Salim', 'safe', 45, 'Geneva', 2, 'Deluxe Room', 'Double', 1, '2020-12-31', '2021-01-14', 0.00, 0.00, 0.00, 'Breakfast', 0.00, 14),
(30, 'Miss.', 'Sara', 'Mohmmed', 34, 'Rome', 2, 'Deluxe Room', 'Single', 1, '2021-02-13', '2021-02-24', 1796.67, 1846.17, 33.00, 'Breakfast', 16.50, 11);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'Double Room', 'Single', 'Free', NULL),
(2, 'Double Room', 'Double', 'Free', 0),
(3, 'Double Room', 'Triple', 'Free', NULL),
(4, 'Single Room', 'Quad', 'Free', NULL),
(5, 'Double Room', 'Quad', 'Free', NULL),
(6, 'Deluxe Room', 'Single', 'Free', 0),
(7, 'Deluxe Room', 'Double', 'Free', 0),
(8, 'Deluxe Room', 'Triple', 'Free', NULL),
(9, 'Deluxe Room', 'Quad', 'Free', 0),
(13, 'Single Room', 'Single', 'NotFree', 13),
(15, 'Single Room', 'Triple', 'Free', NULL),
(16, 'Superior Room', 'Single', 'Free', 0),
(17, 'Superior Room', 'Double', 'Free', NULL),
(18, 'Superior Room', 'Quad', 'Free', NULL),
(19, 'Campsite Huse', 'Single ', 'Free', NULL),
(20, 'Campsite Huse', 'Double ', 'Free', NULL),
(21, 'Campsite Huse', 'Triple', 'Free', NULL),
(22, 'Campsite Huse', 'Quad', 'Free', NULL),
(23, 'Single Room', 'Double', 'NotFree', 19);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Sex` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `season` int(11) DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `age`, `Email`, `Sex`, `city`, `Phone`, `season`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`) VALUES
(5, 'Mr.', 'nasser ', 'adewl', 13, 'wdwidm@hdijdn', 'Male', 'Madrid', '94909223', NULL, 'Deluxe Room', 'Triple', '1', 'Full Board', '2020-12-16', '0000-00-00', '2020-12-29', 0),
(27, 'Mr.', 'Ali', 'Mohmmed', 23, 'ail@gamil.com', 'Male', 'Paris', '99389344', 2, 'Guest House', 'Double', '1', 'Breakfast', '2021-01-13', '2021-01-28', 'Conform', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
