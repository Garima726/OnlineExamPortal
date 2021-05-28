-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 12:25 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fouses`
--

-- --------------------------------------------------------

--
-- Table structure for table `get`
--

CREATE TABLE `get` (
  `getsno` int(11) NOT NULL,
  `getans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `get`
--

INSERT INTO `get` (`getsno`, `getans`) VALUES
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`) VALUES
(1, 'Tarpan', 'Das', 'tarpan_das', '12345678'),
(2, 'Test', 'Account', 'Test', 'Account'),
(3, 'Gautam', 'Tanwar', 'gautam7', 'gautam1234'),
(4, '', '', '', ''),
(5, 'Sushil', 'Kumar', 'Skumar', '12345678'),
(6, 'Gautam ', 'Tanwar', 'Gautam7', 'Gautam123');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `sno` int(11) NOT NULL,
  `ques` varchar(400) NOT NULL,
  `opta` varchar(400) NOT NULL,
  `optb` varchar(400) NOT NULL,
  `optc` varchar(400) NOT NULL,
  `optd` varchar(400) NOT NULL,
  `ans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`sno`, `ques`, `opta`, `optb`, `optc`, `optd`, `ans`) VALUES
(1, 'An aeroplane covers a certain distance at a speed of 240 kmph in 5 hours. To cover the same distance in 1 hours, it must travel at a speed of:', '300 kmph', '360 kmph', '600 kmph', '720 kmph', 4),
(2, 'The cost price of 20 articles is the same as the selling price of x articles. If the profit is 25%, then the value of x is:\r\n', '15', '16', '18\r\n', '25', 2),
(3, 'Two ships are sailing in the sea on the two sides of a lighthouse. The angle of elevation of the top of the lighthouse is observed from the ships are 30° and 45° respectively. If the lighthouse is 100 m high, the distance between the two ships is:\r\n', '173 m\r\n', '200 m\r\n', '273 m\r\n', '300 m', 3),
(4, 'The sum of ages of 5 children born at the intervals of 3 years each is 50 years. What is the age of the youngest child?', '4 years', '8 years', '10 years', 'None of these', 1),
(5, 'Find the odd man out.\r\n3, 5, 11, 14, 17, 21\r\n', '21', '17', '14', '3', 3),
(6, 'From a group of 7 men and 6 women, five persons are to be selected to form a committee so that at least 3 men are there on the committee. In how many ways can it be done?', '564', '645', '735', '756', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `get`
--
ALTER TABLE `get`
  ADD PRIMARY KEY (`getsno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `get`
--
ALTER TABLE `get`
  MODIFY `getsno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
