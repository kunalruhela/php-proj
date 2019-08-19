-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2019 at 02:32 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pwd` varchar(60) NOT NULL,
  `u_role` varchar(10) DEFAULT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `t_code` varchar(255) NOT NULL,
  `h_phone` int(11) NOT NULL,
  `building` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `u_state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `sec_fname` varchar(255) NOT NULL,
  `sec_lname` varchar(255) NOT NULL,
  `sec_rel` varchar(255) NOT NULL,
  `sec_street` varchar(255) NOT NULL,
  `sec_city` varchar(255) NOT NULL,
  `sec_state` varchar(255) NOT NULL,
  `sec_zip` int(11) NOT NULL,
  `sec_email` varchar(255) NOT NULL,
  `sec_phone` int(11) NOT NULL,
  `house_prog` varchar(255) NOT NULL,
  `service_prog` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `email`, `pwd`, `u_role`, `fname`, `lname`, `t_code`, `h_phone`, `building`, `street`, `city`, `u_state`, `zip`, `sec_fname`, `sec_lname`, `sec_rel`, `sec_street`, `sec_city`, `sec_state`, `sec_zip`, `sec_email`, `sec_phone`, `house_prog`, `service_prog`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$VlkeqwBTbPMYlcuiSBsC9Og98dRvAt2ciTYyEgyH55ymYR3Ebg6Ru', 'admin', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', ''),
(10, 'SXs', 'ADASDA', 'CAASXA', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', ''),
(12, 'kunal', 'k@gmail.com,', 'admin', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', ''),
(18, 'aj', 'k@gmail.com,', 'admin', NULL, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', ''),
(23, 'vishal', 'v1@gmail.com,', 'vishal', NULL, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', ''),
(24, 'nuru', 'ajay@gmail.com', 'admin', 'user', 'ajay', 'singh', 'avc', 2147483647, 'jnljadncilsda', 'jnljadncilsda', 'ljoidsfjosd', 'fjsldkfklwj', '123124', 'ajay', 'singh', 'qadq', 'jnljadncilsda', 'ljoidsfjosd', 'fjsldkfklwj', 123124, 'ajay@gmail.com', 2147483647, 'fwrfgerg', 'hrth54tg3tf'),
(38, 'mac', 'mac@gmail.com', 'mac@123', 'user', 'mac', 'aj', '1t1234', 1234567890, 'panchsheel', 'raheja', 'mumbai', 'maha', '400097', 'mac', 'aj', 'paap', 'raheja', 'mumbai', 'maha', 400097, 'mac@gmail.com', 2147483647, 'FWEFWEFW', 'qdqwdqd'),
(42, 'ajay', 'ajay@gmail.com', 'ajay', 'user', 'ajay', 'singh', '1t1234', 2147483647, 'fgvefgerg', 'jnljadncilsda', 'ljoidsfjosd', 'fjsldkfklwj', '123124', 'dfwefweqf', 'fewfewf', 'sada', 'jihhiu', 'hkjhiuoho', 'huihuih', 123456, 'kartik@gmail.in', 2147483647, 'dadfvw', 'qdqwdqd'),
(44, 'arjun', 'ajay@gmail.in', 'ajay', 'user', 'ajay', 'singh', '1t1234', 2147483647, 'cjweocnweocnweo', 'jnljadncilsda', 'ljoidsfjosd', 'fjsldkfklwj', '123124', 'qwdqwd', 'ruhela', 'sada', 'b', 'c', 'd', 1234, 'ewfdeqw@habjq.com', 2147483647, 'wqdfwgv', 'rbetgergv'),
(45, 'shades', 's@gmail.com', '12345', 'user', 's', 'l', '1t123421', 2147483647, 'cjweocnweocnweo', 'jnljadncilsda', 'ljoidsfjosd', 'fjsldkfklwj', '123124', 's', 'l', 'sada', 'jnljadncilsda', 'ljoidsfjosd', 'fjsldkfklwj', 123124, 'nuru@gmail.com', 2147483647, 'efwrgwrgerw', 'gwrgverwgwrefg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
