-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 28, 2022 at 12:55 PM
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
('IzdiharRosli', 'izdihargae', 'Muhammad Izdihar Bin Rosli', '60123456789');

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

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `residentid` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `descr` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `phonenumber` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
('A08-12', 'senpai79', 'A', '08-12', 'Alzam Kamili Bin  Mohd Abdul Jabbar', '(+60)19-1995036', 'a.mi@google.com'),
('A14-10', 'rusy2900', 'A', '14-10', 'Muhammad Rusydi Hakim Bin Muhammad Rizal', '(+60)17-8552440', 'sem.elit@google.com'),
('B07-10', 'uwu6969', 'B', '07-10', 'Muhammad Azib Luqman Bin Kamaruzaman', '(+60)11-9316535', 'sed.eu.eros@google.com'),
('B13-11', 'por1010101', 'B', '13-11', 'Por Jing Xian', '(+60)12-4156037', 'donec.feugiat@google.com'),
('B13-12', 'izdiharrosli235155', 'B', '13-12', 'Muhammad Izdihar Bin Rosli', '(+60)18-3721968', 'dolor@google.com'),
('C09-06', 'ilhamhaikimi_16', 'C', '09-06', 'Ilham Hakimi Bin  Kamarzaman', '(+60)17-8552440', 'lacus.etiam.bibendum@google.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
