-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2016 at 07:20 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`) VALUES
('1', 'emon', '123', 'emon@yahoo.com'),
('2', 'rumi', '123', 'rumi@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `bloodinfo`
--

CREATE TABLE `bloodinfo` (
  `bloodtype` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodinfo`
--

INSERT INTO `bloodinfo` (`bloodtype`, `quantity`, `price`) VALUES
('A-pos', '50', '1000'),
('A-neg', '50', '1000'),
('B-pos', '10', '800'),
('B-neg', '20', '800'),
('AB-pos', '50', '1200'),
('AB-neg', '12', '1200'),
('O-pos', '20', '1500'),
('O-neg', '18', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`name`, `phone`, `email`, `address`, `gender`, `password`) VALUES
('a1', '01680674598', '123@a.com', 'asklanlsnd', 'male', '123'),
('a2', '12345678901', '123@b.com', 'asnapsdqhwsodn', 'male', '123'),
('a3', '12345678901', '123@c.com', 'qfnqmawsm', 'male', '123');

-- --------------------------------------------------------

--
-- Table structure for table `userpurchase`
--

CREATE TABLE `userpurchase` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `bloodtype` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpurchase`
--

INSERT INTO `userpurchase` (`name`, `email`, `phone`, `bloodtype`, `quantity`, `price`, `date`) VALUES
('a1', '', '', 'A-neg', '5', '5000', '08-11-2016'),
('a1', '', '', 'AB-pos', '4', '4800', '08-11-2016'),
('a1', '', '', 'AB-neg', '3', '3600', '08-11-2016'),
('a1', '123@a.com', '01680674598', 'AB-pos', '', '0', '08-11-2016'),
('a1', '123@a.com', '01680674598', 'AB-neg', '5', '6000', '08-11-2016'),
('a4', '123@d.com', '12345678901', 'B-pos', '10', '8000', '08-11-2016'),
('aa1', '123@a.com', '01680674598', 'A-pos', '', '0', '08-11-2016'),
('a1', '123@a.com', '01680674598', 'A-pos', '', '0', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'A-pos', '', '0', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'A-pos', '', '0', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'A-pos', '', '0', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'A-pos', '', '0', '09-11-2016'),
('a2', '123@b.com', '12345678901', 'A-pos', '3', '3000', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'B-pos', '', '0', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'A-pos', '1', '1000', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'A-pos', '10', '10000', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'A-pos', '-10', '-10000', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'A-pos', '2123', '2123000', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'A-pos', 'sdas', '0', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'A-pos', '', '0', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'A-pos', '', '0', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'A-pos', '', '0', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'A-pos', '', '0', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'A-pos', '', '0', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'O-neg', '2', '3000', '09-11-2016'),
('a1', '123@a.com', '01680674598', 'A-neg', '9', '9000', '09-11-2016'),
('a2', '123@b.com', '12345678901', 'AB-pos', '5', '6000', '10-11-2016');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `type`, `email`) VALUES
('a1', '123', 'user', '123@a.com'),
('a2', '123', 'user', '123@b.com'),
('a3', '123', 'user', '123@c.com'),
('a4', '123', 'user', '123@d.com'),
('emon', '123', 'admin', 'emon@yahoo.com'),
('rumi', '123', 'admin', 'rumi@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
