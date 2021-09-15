-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2019 at 12:53 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onestoptrainer1`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_login`
--

CREATE TABLE `register_login` (
  `id` int(250) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `clocation` varchar(100) NOT NULL,
  `wlocation` varchar(100) NOT NULL,
  `mobile` varchar(60) NOT NULL,
  `country` varchar(50) NOT NULL,
  `work` varchar(100) NOT NULL,
  `tm` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_login`
--

INSERT INTO `register_login` (`id`, `username`, `email`, `password`, `age`, `gender`, `clocation`, `wlocation`, `mobile`, `country`, `work`, `tm`, `education`, `program`, `description`) VALUES
(NULL, 'balakumar', 'sam@gmail.com', '4297f44b13955235245b2497399d7a93', 21, 'gender', 'clocation', 'wlocation', '6543235675', 'india', '0-1 years', '', 'bca', 'Back-end Technologies', 'hai i am bala brk'),
(NULL, 'ramkumar', 'sam@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 21, 'gender', 'clocation', 'wlocation', '6543235675', 'india', '0-1 years', '', 'bca', 'Back-end Technologies', 'hai i am bala brk'),
(NULL, 'kumarbala', 'bala@gmail.com', '4297f44b13955235245b2497399d7a93', 22, 'Male', 'bangalore', 'bangalore', '8765467654', 'india', '0-1 years', '01:59', 'bca', 'Front-End Technologies', 'hai i am brk');

-- --------------------------------------------------------

--
-- Table structure for table `register_login1`
--

CREATE TABLE `register_login1` (
  `id` int(250) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `clocation` varchar(100) NOT NULL,
  `wlocation` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `work` varchar(100) NOT NULL,
  `tm` time(6) NOT NULL,
  `education` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `key1` varchar(200) NOT NULL,
  `known` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register_login2`
--

CREATE TABLE `register_login2` (
  `id` int(250) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `clocation` varchar(100) NOT NULL,
  `wlocation` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `tm` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `key1` varchar(100) NOT NULL,
  `known` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_login2`
--

INSERT INTO `register_login2` (`id`, `uname`, `email`, `password`, `age`, `gender`, `clocation`, `wlocation`, `mobile`, `country`, `work`, `tm`, `education`, `program`, `key1`, `known`) VALUES
(1, 'balakumar', 'kumar@gmail.com', '4297f44b13955235245b2497399d7a93', 22, 'Male', 'bangalore', 'bangalore', 2147483647, 'india', '0-1 years', '13:00', 'bca', 'Front-End Technologies', 'html css javascript', 'tamil');

-- --------------------------------------------------------

--
-- Table structure for table `register_login3`
--

CREATE TABLE `register_login3` (
  `id` int(250) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(60) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `clocation` varchar(50) NOT NULL,
  `wlocation` varchar(50) NOT NULL,
  `mobile` varchar(60) NOT NULL,
  `country` varchar(50) NOT NULL,
  `work` varchar(60) NOT NULL,
  `tm` varchar(60) NOT NULL,
  `education` varchar(60) NOT NULL,
  `program` varchar(50) NOT NULL,
  `key1` varchar(50) NOT NULL,
  `known` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_login3`
--

INSERT INTO `register_login3` (`id`, `uname`, `email`, `password`, `age`, `gender`, `clocation`, `wlocation`, `mobile`, `country`, `work`, `tm`, `education`, `program`, `key1`, `known`) VALUES
(1, 'balakumar', 'kumar@gmail.com', '4297f44b13955235245b2497399d7a93', 22, 'Male', 'bangalore', 'bangalore', '9043870451', 'india', '0-1 years', '13:00', 'bca', 'Front-End Technologies', 'html css javascript', 'tamil'),
(2, 'rajakm', 'raja@gmail.com', '4297f44b13955235245b2497399d7a93', 22, 'Male', 'bangalore', 'bangalore', '9043870451', 'india', '0-1 years', '01:00', 'bca', 'Front-End Technologies', 'html css javascript angular', 'english'),
(3, 'balakumar', 'abalakumar.km@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 22, 'Male', 'bangalore', 'bangalore', '9043870451', 'india', '0-1 years', '12:00', 'bca', 'Front-End Technologies', 'html css javascript angular', 'english'),
(4, 'balakumar', 'abalakumar.km@gmail.com', '4297f44b13955235245b2497399d7a93', 22, 'Male', 'bangalore', 'bangalore', '9043870451', 'india', '0-1 years', '12:00', 'bca', 'Front-End Technologies', 'html css javascript angular', 'english');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_login1`
--
ALTER TABLE `register_login1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_login2`
--
ALTER TABLE `register_login2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_login3`
--
ALTER TABLE `register_login3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_login1`
--
ALTER TABLE `register_login1`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register_login2`
--
ALTER TABLE `register_login2`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register_login3`
--
ALTER TABLE `register_login3`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
