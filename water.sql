-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2016 at 08:44 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `water`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `Cust_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Cust_counter` int(11) NOT NULL,
  `location` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Cust_city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Cust_village` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Cust_Home_num` int(11) NOT NULL,
  `Cust_home_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Cust_home_address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `Cust_home_owner` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_id`, `Cust_name`, `Cust_counter`, `location`, `Cust_city`, `Cust_village`, `Cust_Home_num`, `Cust_home_type`, `Cust_home_address`, `user_id`, `Cust_home_owner`) VALUES
(1, 'Ø±Ø§Ù…Ù‰', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø¹Ø¯', 1005, 'Ø³ÙƒÙ†Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, ''),
(2, 'Ø±Ø§Ù…Ù‰', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 1005, 'ØµÙ†Ø§Ø¹Ù‰', ' Ø§Ù„Ø®Ø®Ø®', 0, ''),
(3, 'Ø±Ø§Ù…Ù‰', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 1005, 'ØµÙ†Ø§Ø¹Ù‰', ' Ø§Ù„Ø®Ø®Ø®', 0, ''),
(4, 'Ù…Ø­Ù…Ø¯', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø¹Ø¯', 1005, 'Ø³ÙƒÙ†Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, 'Ù…Ø³ØªØ§Ø¬Ø±'),
(5, 'Ù…Ø­Ù…Ø¯', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø¹Ø¯', 1005, 'Ø³ÙƒÙ†Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, 'Ù…Ø³ØªØ§Ø¬Ø±'),
(6, 'Ø±Ø§Ù…Ù‰', 0, 'Ø·Ù‡', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 545, 'Ø³ÙƒÙ†Ù‰', ' Ø§Ù„Ø®Ø®Ø®', 0, 'Ù…Ø§Ù„Ùƒ'),
(7, 'Ø±Ø§Ù…Ù‰', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 1005, 'ØªØ¬Ø§Ø±Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, 'Ù…Ø³ØªØ§Ø¬Ø±'),
(8, 'Ø±Ø§Ù…Ù‰', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 1005, 'ØªØ¬Ø§Ø±Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, 'Ù…Ø§Ù„Ùƒ'),
(9, 'Ø±Ø§Ù…Ù‰', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 1005, 'Ø³ÙƒÙ†Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, 'ÙˆÙƒÙŠÙ„'),
(10, 'Ø±Ø§Ù…Ù‰', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 1005, 'Ø³ÙƒÙ†Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, 'ÙˆÙƒÙŠÙ„'),
(11, 'Ø±Ø§Ù…Ù‰', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 1005, 'ØªØ¬Ø§Ø±Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, 'Ù…Ø³ØªØ§Ø¬Ø±'),
(12, 'Ø±Ø§Ù…Ù‰', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 1005, 'ØªØ¬Ø§Ø±Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, 'ÙˆÙƒÙŠÙ„'),
(13, 'Ø±Ø§Ù…Ù‰', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 1005, 'ØªØ¬Ø§Ø±Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, 'ÙˆÙƒÙŠÙ„'),
(14, 'Ø±Ø§Ù…Ù‰', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 1005, 'ØªØ¬Ø§Ø±Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, 'Ù…Ø§Ù„Ùƒ'),
(15, 'Ø±Ø§Ù…Ù‰', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 1005, 'ØªØ¬Ø§Ø±Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, 'Ù…Ø§Ù„Ùƒ'),
(16, 'Ø±Ø§Ù…Ù‰', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 1005, 'ØªØ¬Ø§Ø±Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, 'ÙˆÙƒÙŠÙ„'),
(17, 'Ø±Ø§Ù…Ù‰', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 1005, 'ØªØ¬Ø§Ø±Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, 'ÙˆÙƒÙŠÙ„'),
(18, 'Ø±Ø§Ù…Ù‰', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 1005, 'ØªØ¬Ø§Ø±Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, 'ÙˆÙƒÙŠÙ„'),
(19, 'Ù…Ø­Ù…Ø¯', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 1005, 'Ø³ÙƒÙ†Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, 'Ù…Ø§Ù„Ùƒ'),
(20, 'Ø±Ø§Ù…Ù‰', 0, 'Ø¹Ø¯ Ø­Ø³ÙŠÙ†', '1', 'Ø§Ø¨ÙˆØ¹Ø´Ø±', 1005, 'ØªØ¬Ø§Ø±Ù‰', ' Ø¹Ù…ÙˆØ¯', 0, 'Ù…Ø³ØªØ§Ø¬Ø±');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
