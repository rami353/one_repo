-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2016 at 08:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `talentproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `annoucement`
--

CREATE TABLE IF NOT EXISTS `annoucement` (
  `AnnNo` int(11) NOT NULL AUTO_INCREMENT,
  `AnnAdress` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `AnnContent` text COLLATE utf8_unicode_ci NOT NULL,
  `AnnImage` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Anndate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`AnnNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `annoucement`
--

INSERT INTO `annoucement` (`AnnNo`, `AnnAdress`, `AnnContent`, `AnnImage`, `Anndate`) VALUES
(2, 'Ø¥Ø¹Ù„Ø§Ù† ', 'Ø¥Ù† Ø§ØµØ·Ù„Ø§Ø­ Ø§Ù„Ù…ÙˆÙ‡Ø¨Ø© Ù‚Ø¯ Ø§Ø³ØªØ®Ø¯Ù… Ù„Ù„Ø¯Ù„Ø§Ù„Ø© Ø¹Ù„Ù‰ Ø§Ù„Ø£ÙØ±Ø§Ø¯ Ø§Ù„Ø°ÙŠÙ† ÙŠØµÙ„ÙˆÙ† ÙÙŠ Ø£Ø¯Ø§Ø¦Ù‡Ù… Ø¥Ù„Ù‰ Ù…Ø³ØªÙˆÙ‰ Ù…Ø±ØªÙØ¹ ÙÙŠ Ù…Ø¬Ø§Ù„ Ù…Ù† Ø§Ù„Ù…Ø¬Ø§Ù„Ø§Øª ØºÙŠØ± ', 'user.png', '2016-08-08 09:33:18'),
(3, 'ÙŠÙˆÙ… Ø§Ù„Ø§Ø­Ø¯ Ø§Ù„Ù‚Ø§Ø¯Ù… Ù…Ø¹ÙŠÙ†Ø§Øª ', ' 	Ø¥Ù† Ø§ØµØ·Ù„Ø§Ø­ Ø§Ù„Ù…ÙˆÙ‡Ø¨Ø© Ù‚Ø¯ Ø§Ø³ØªØ®Ø¯Ù… Ù„Ù„Ø¯Ù„Ø§Ù„Ø© Ø¹Ù„Ù‰ Ø§Ù„Ø£ÙØ±Ø§Ø¯ Ø§Ù„Ø°ÙŠÙ† ÙŠØµÙ„ÙˆÙ† ÙÙŠ Ø£Ø¯Ø§Ø¦Ù‡Ù… Ø¥Ù„Ù‰ Ù…Ø³ØªÙˆÙ‰ Ù…Ø±ØªÙØ¹ ÙÙŠ Ù…Ø¬Ø§Ù„ Ù…Ù† Ø§Ù„Ù…Ø¬Ø§Ù„Ø§Øª ØºÙŠØ±', 'now.png', '2016-08-09 13:56:55'),
(4, 'ÙŠÙˆÙ… Ø§Ù„Ø§Ø­Ø¯ Ø§Ù„Ù‚Ø§Ø¯Ù… Ù…Ø¹ÙŠÙ†Ø§Øª ', ' 	Ø¥Ù† Ø§ØµØ·Ù„Ø§Ø­ Ø§Ù„Ù…ÙˆÙ‡Ø¨Ø© Ù‚Ø¯ Ø§Ø³ØªØ®Ø¯Ù… Ù„Ù„Ø¯Ù„Ø§Ù„Ø© Ø¹Ù„Ù‰ Ø§Ù„Ø£ÙØ±Ø§Ø¯ Ø§Ù„Ø°ÙŠÙ† ÙŠØµÙ„ÙˆÙ† ÙÙŠ Ø£Ø¯Ø§Ø¦Ù‡Ù… Ø¥Ù„Ù‰ Ù…Ø³ØªÙˆÙ‰ Ù…Ø±ØªÙØ¹ ÙÙŠ Ù…Ø¬Ø§Ù„ Ù…Ù† Ø§Ù„Ù…Ø¬Ø§Ù„Ø§Øª ØºÙŠØ±', 'now.png', '2016-08-09 14:10:34'),
(5, 'Ø§Ù„Ø§Ù…ØªØ­Ø§Ù†Ø§Øª', 'hgw,vm hgw,vm ', 'uploaded/now.png', '2016-08-12 04:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `ContNo` int(11) NOT NULL AUTO_INCREMENT,
  `ContName` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ContEmail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ContMassge` text COLLATE utf8_unicode_ci NOT NULL,
  `ContDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ContNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ContNo`, `ContName`, `ContEmail`, `ContMassge`, `ContDate`) VALUES
(1, 'modatheer', 'mmooooo', 'mmommmmmm;;', '2016-08-07 17:07:17'),
(7, 'Ù‡Ø´Ø§Ù…', 'modather@gmail.com', 'Ø¨Ø³Ù… Ø§Ù„Ù„Ù‡ Ø§Ù„Ø±Ø­Ù…Ù† Ø§Ù„Ø±Ø­ÙŠÙ… ', '2016-08-08 10:33:27'),
(8, 'lpl]', 'lll', 'll', '2016-09-22 07:19:42'),
(9, 'mmm', 'mmmm@mmm.com', 'jfhsdkjfhjk sskjfhsgkj shg', '2016-09-22 07:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE IF NOT EXISTS `evaluation` (
  `EvalNo` int(11) NOT NULL AUTO_INCREMENT,
  `EvalStudentNo` int(11) NOT NULL,
  `Evaluation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `AdminNo` int(11) NOT NULL,
  `EvalDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`EvalNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`EvalNo`, `EvalStudentNo`, `Evaluation`, `AdminNo`, `EvalDate`) VALUES
(1, 8, '2', 6, '2016-08-09 18:03:06'),
(4, 18, '1', 6, '2016-08-09 18:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `RegNO` int(10) NOT NULL AUTO_INCREMENT,
  `RegName` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `RegEmail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `RegPhone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `TalentNo` int(11) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`RegNO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`RegNO`, `RegName`, `RegEmail`, `RegPhone`, `TalentNo`, `RegDate`) VALUES
(3, 'modatheer', 'mmmmooopp', '33333', 3, '2016-08-08 08:28:52'),
(4, 'modatheer', 'mmmmm', '5588899', 2, '2016-08-08 08:30:19'),
(5, 'Ù…Ø­Ù…Ø¯', 'mmmmooopp', '123', 2, '2016-08-08 08:40:24'),
(6, 'Ù…Ø­Ù…Ø¯', 'mmmmm555', '5588899', 3, '2016-08-08 09:58:05'),
(7, 'Ù…Ø­Ù…Ø¯', 'mmmmooopp', '33', 2, '2016-08-08 09:59:57'),
(8, 'modatheer', 'mmmmooopp', '5555', 1, '2016-08-08 10:00:52'),
(9, 'modatheer', 'mmmmm', '5588899', 2, '2016-08-08 10:01:14'),
(10, 'Ù…Ø­Ù…Ø¯', 'mmmmm', '5555', 3, '2016-08-08 10:02:12'),
(18, 'Ø­Ø§Ù…Ø¯', 'Ù…Ù…Ù…', '669933', 2, '2016-08-08 11:39:43'),
(19, 'modatheer', 'mmmmm555', '54', 3, '2016-08-09 15:26:32'),
(20, 'Ø­Ø§Ù…Ø¯ Ø­Ø³Ù† Ø­Ø§Ù…Ø¯ ', 'mmmmooopp', '5588899', 3, '2016-08-09 15:27:11'),
(21, 'ksjfk', 'kjkf', 'kjkwf', 0, '2016-08-31 20:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `ResultNo` int(11) NOT NULL AUTO_INCREMENT,
  `ResultStudentNO` int(11) NOT NULL,
  `degree` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adminId` int(11) NOT NULL,
  `Resultdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ResultNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`ResultNo`, `ResultStudentNO`, `degree`, `adminId`, `Resultdate`) VALUES
(1, 18, '4', 25, '2016-08-09 12:20:20'),
(3, 8, '3', 6, '2016-08-09 12:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `talent`
--

CREATE TABLE IF NOT EXISTS `talent` (
  `TalNo` int(10) NOT NULL AUTO_INCREMENT,
  `TalName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TalDiscription` text COLLATE utf8_unicode_ci NOT NULL,
  `TalDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`TalNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `talent`
--

INSERT INTO `talent` (`TalNo`, `TalName`, `TalDiscription`, `TalDate`) VALUES
(1, 'ÙƒØ±Ø© Ø§Ù„Ù‚Ø¯Ù… ', 'Ù„Ù„Ø±Ø¬Ø§Ù„ ÙÙ‚Ø·', '2016-08-08 11:30:58'),
(2, 'Ø§Ù„ØºØ§Ø¡ Ø´Ø¹Ø±Ù‰ ', 'Ù…Ø³Ø§Ø¨Ù‚Ø© Ø§Ù„Ø§Ù„ØºØ§Ø¡ Ø§Ù„Ø´Ø¹Ø±Ù‰ ', '2016-08-08 11:33:12'),
(3, 'Ø±Ø³Ù…', 'ÙƒÙ„ Ø§Ù„ÙÙˆÙ† ', '2016-08-08 11:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Userpassword` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Privalige` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Username`, `Userpassword`, `Phone`, `Privalige`) VALUES
(6, 'Ù…Ø¯Ø«Ø± Ø§Ù„Ø³Ù…Ø§Ù†Ù‰', 'modatherelsmani@gmail.com', 'modatheer', '123456', '555', 1),
(25, 'Ø­Ø§Ù…Ø¯ Ø­Ø³Ù† Ø­Ø§Ù…Ø¯', 'mmmmm@gmail.com', 'hamid', '123123', '123', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
