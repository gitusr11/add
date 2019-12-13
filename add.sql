-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 04:52 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `add`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertises`
--

CREATE TABLE IF NOT EXISTS `advertises` (
  `advertise_id` int(11) NOT NULL AUTO_INCREMENT,
  `advertise_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `advertise_desc` text NOT NULL,
  `advertise_media` varchar(255) NOT NULL,
  `advertise_position` int(11) NOT NULL,
  `advertise_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`advertise_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `advertises`
--

INSERT INTO `advertises` (`advertise_id`, `advertise_name`, `category_id`, `advertise_desc`, `advertise_media`, `advertise_position`, `advertise_status`) VALUES
(1, 'IT Software Company', 1, 'IT Software Company desc', '', 1, 1),
(2, 'IT Software Company 2', 1, 'IT Software Company desc 2', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_desc` varchar(255) NOT NULL,
  `category_status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_desc`, `category_status`) VALUES
(1, 'Fashions', 'Fashions ', 1),
(2, 'Jewelries', 'Jewelries', 1),
(3, 'Electronics', 'Electronics', 1),
(4, 'Automobiles', 'Automobiles', 1),
(5, 'Travels', 'Travels', 1),
(6, 'Movies', 'Movies', 1),
(7, 'Kids', 'Kids', 1),
(8, 'Sports', 'Sports', 1);

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(255) NOT NULL,
  `position_status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`position_id`, `position_name`, `position_status`) VALUES
(1, 'main body', 1),
(2, 'right side', 1),
(3, 'left side', 1),
(4, 'menu bar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_level` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`) VALUES
(1, 'admin', 'admin', 'd9b1d7db4cd6e70935368a1efb10e377', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
