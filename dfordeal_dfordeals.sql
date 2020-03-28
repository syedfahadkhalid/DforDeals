-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2015 at 12:10 AM
-- Server version: 5.5.42-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dfordeal_dfordeals`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL DEFAULT '1',
  `UserName` varchar(100) NOT NULL,
  `PassWord` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `UserName`, `PassWord`) VALUES
(1, '59a0b06793586b429f63fd369c25f719', 'bc9bc7f87a4a1ecf50b5005158bbfdcd');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE IF NOT EXISTS `deals` (
  `Deal_Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Img_main` varchar(500) NOT NULL,
  `Img2` varchar(500) NOT NULL,
  `Img3` varchar(500) NOT NULL,
  `Img4` varchar(500) NOT NULL,
  `Img5` varchar(500) NOT NULL,
  PRIMARY KEY (`Deal_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL DEFAULT '1',
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `mobile`, `email`, `address`) VALUES
(1, '03323522324', 'example@example', 'A-211');

-- --------------------------------------------------------

--
-- Table structure for table `main_banner`
--

CREATE TABLE IF NOT EXISTS `main_banner` (
  `ID` int(11) NOT NULL DEFAULT '1',
  `Img1` varchar(500) NOT NULL,
  `Img2` varchar(500) NOT NULL,
  `Img3` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `Order_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Sizes` varchar(100) NOT NULL,
  `Colours` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `Deal_Id` int(100) NOT NULL,
  `Deal_name` varchar(100) NOT NULL,
  `Status` varchar(100) DEFAULT 'Pending',
  PRIMARY KEY (`Order_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
