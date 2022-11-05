-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2022 at 09:09 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--
CREATE DATABASE IF NOT EXISTS `student` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `student`;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `enr` varchar(12) DEFAULT NULL,
  `first` varchar(20) DEFAULT NULL,
  `middle` varchar(20) DEFAULT NULL,
  `last` varchar(20) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `mobile1` int(10) DEFAULT NULL,
  `mobile2` int(10) DEFAULT NULL,
  `addr` text,
  `photo` varchar(16) DEFAULT NULL,
  UNIQUE KEY `enr` (`enr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `enr` varchar(15) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`enr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`enr`, `pass`) VALUES
('gppadmin', 'id');

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

CREATE TABLE IF NOT EXISTS `req` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enr` varchar(12) NOT NULL,
  `req_date` date NOT NULL,
  `sts` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `req_date` (`req_date`,`sts`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `enr` FOREIGN KEY (`enr`) REFERENCES `login` (`enr`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
