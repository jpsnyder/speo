-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2013 at 09:59 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `speodb`
--
CREATE DATABASE IF NOT EXISTS `speodb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `speodb`;

-- --------------------------------------------------------

--
-- Table structure for table `customer_input`
--

CREATE TABLE IF NOT EXISTS `customer_input` (
  `group_name` varchar(32) DEFAULT NULL,
  `billing_address` varchar(32) DEFAULT NULL,
  `billing_state` varchar(2) DEFAULT NULL,
  `billing_city` varchar(32) DEFAULT NULL,
  `contact` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `date_time_event` datetime DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `cell_number` int(10) DEFAULT NULL,
  `day_of_contact` varchar(32) DEFAULT NULL,
  `day_of_phone_number` int(10) DEFAULT NULL,
  `event_address` varchar(32) DEFAULT NULL,
  `event_state` varchar(2) DEFAULT NULL,
  `event_city` varchar(32) DEFAULT NULL,
  `payment` varchar(32) DEFAULT NULL,
  `delivery_time_frame_earliest` time DEFAULT NULL,
  `delivery_time_frame_latest` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
