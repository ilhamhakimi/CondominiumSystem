-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 06, 2023 at 08:47 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `systemcondo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `password`, `name`, `phonenumber`) VALUES
('admin', 'admin123', 'Muhammad Izdihar Bin Rosli', '60123456789');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `title` varchar(25) NOT NULL,
  `descr` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`name`, `email`, `phoneno`, `title`, `descr`) VALUES
('Muhammad Izdihar Bin Rosli', 'izdiharrosli235@gmail.com', '018-3721097', 'pasal rumah', 'DIILDUALIWDAHDILAWD'),
('Por Jing Xian', 'porjingxian@gmail.com', '018-3721097', 'rumah', 'Rumah'),
('IZZ', 'izdiharjunior23@gmail.com', '018-3721097', 'HEHE', 'HEHEHEHHEHEHEHHEHE'),
('ion sheriff', 'kimi@gmail.com', '018-3721097', '123', '1234444'),
('IZDIHAR', 'izdiharjunior23@gmail.com', '018-3721097', 'Ada rumah kosong tak?', ''),
('Por Jing Xian', 'kimi@gmail.com', '018-3721097', 'adwadwad', 'wwwww'),
('', '', '', 'Kene rompak', 'please help'),
('', '', '', 'Kene rompak', 'please help'),
('Por Jing Xian', 'izdiharrosli235@gmail.com', '018-3721097', 'LMAo', 'LImAU'),
('Por Jing Xian', 'izdiharrosli235@gmail.com', '018-3721097', 'LMAo', 'LImAU'),
('', '', '', 'LMAO', 'LMAO'),
('', '', '', 'LMAO', 'LMAO'),
('Por Jing Xian', 'luq@gmail.com', '018-3721097', 'aaaaaaaaaa', 'please help');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`no`, `title`, `description`, `image`) VALUES
(45, 'wow', 'wow', 'img3.png'),
(44, 'AA', 'AA', 'floor-plan1.jpeg'),
(43, 'ruSY', 'rusy', './imagepubEnq.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newss`
--

DROP TABLE IF EXISTS `newss`;
CREATE TABLE IF NOT EXISTS `newss` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `image` longblob NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `residentid` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  PRIMARY KEY (`residentid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`residentid`, `title`, `descr`, `phonenumber`) VALUES
('1', '11', '11111', '11111'),
('B10-02', 'LMAO', 'limau', '018-3721232');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

DROP TABLE IF EXISTS `resident`;
CREATE TABLE IF NOT EXISTS `resident` (
  `residentid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `block` varchar(1) NOT NULL,
  `unit` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`residentid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`residentid`, `password`, `block`, `unit`, `name`, `phonenumber`, `email`) VALUES
('122', '12344', 'B', '444', 'raze', '012-3456789', 'luq@gmail.com'),
('A69-69', 'Izz-235155', 'A', '69-69', 'MUHAMMAD IZDIHAR BIN ROSLI', '018-3721968', 'izdiharrosli235@gmail.com'),
('AL', 'AL', 'B', 'AL', 'AL', 'AL', 'AL'),
('B01-20', 'B01-20rusydi', 'C', '01-20', 'Muhamad Rusydi Hakim Bin Muhamad Rizal', '019-3550415', 'rusydi@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
