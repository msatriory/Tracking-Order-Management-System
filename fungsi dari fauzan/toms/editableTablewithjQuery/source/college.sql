-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2012 at 07:56 PM
-- Server version: 5.1.63
-- PHP Version: 5.3.2-1ubuntu4.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `CourseNo` char(6) NOT NULL,
  `crsDesc` varchar(50) NOT NULL,
  `CrsUnits` int(11) DEFAULT NULL,
  PRIMARY KEY (`CourseNo`),
  UNIQUE KEY `crsDesc_index` (`crsDesc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseNo`, `crsDesc`, `CrsUnits`) VALUES
('FIN300', 'FUNDAMENTALS OF FINANCES', 4),
('FIN450', 'PRINCIPLES OF Finances', 5),
('FIN480', 'CORPORATE FINANCE', 4),
('IS320', 'FUNDAMENTALS OF BUSINESS PROGRAMMING', 4),
('IS460', 'SYSTEMS ANALYSIS', 4),
('IS470', 'BUSINESS DATA COMMUNICATIONS', 4),
('IS480', 'FUNDAMENTALS OF DATABASE MANAGEMENT', 4);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE IF NOT EXISTS `enrollment` (
  `OfferNo` int(11) NOT NULL,
  `StdSSN` char(11) NOT NULL,
  `EnrGrade` decimal(3,2) DEFAULT NULL,
  PRIMARY KEY (`OfferNo`,`StdSSN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`OfferNo`, `StdSSN`, `EnrGrade`) VALUES
(1234, '123-45-6789', 3.30),
(1234, '234-56-7890', 3.50),
(1234, '345-67-8901', 3.20),
(1234, '456-78-9012', 3.10),
(1234, '567-89-0123', 3.80),
(1234, '678-90-1234', 3.40),
(4321, '123-45-6789', 3.50),
(4321, '124-56-7890', 3.20),
(4321, '789-01-2345', 3.50),
(4321, '876-54-3210', 3.10),
(4321, '890-12-3456', 3.40),
(4321, '901-23-4567', 3.10),
(5555, '123-45-6789', 3.20),
(5555, '124-56-7890', 2.70),
(5678, '123-45-6789', 3.20),
(5678, '234-56-7890', 2.80),
(5678, '345-67-8901', 3.30),
(5678, '456-78-9012', 3.40),
(5678, '567-89-0123', 2.60),
(5679, '123-45-6789', 2.00),
(5679, '124-56-7890', 3.70),
(5679, '678-90-1234', 3.30),
(5679, '789-01-2345', 3.80),
(5679, '890-12-3456', 2.90),
(5679, '901-23-4567', 3.10),
(6666, '234-56-7890', 3.10),
(6666, '567-89-0123', 3.60),
(7777, '876-54-3210', 3.40),
(7777, '890-12-3456', 3.70),
(7777, '901-23-4567', 3.40),
(9876, '124-56-7890', 3.50),
(9876, '234-56-7890', 3.20),
(9876, '345-67-8901', 3.20),
(9876, '456-78-9012', 3.40),
(9876, '567-89-0123', 2.60),
(9876, '678-90-1234', 3.30),
(9876, '901-23-4567', 4.00),
(12121, '123-45-6789', 3.60);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `FacSSN` char(11) NOT NULL,
  `FacFirstName` varchar(30) NOT NULL,
  `FacLastName` varchar(30) NOT NULL,
  `FacCity` varchar(30) NOT NULL,
  `FacState` char(2) NOT NULL,
  `FacZipCode` char(10) NOT NULL,
  `FacRank` char(4) DEFAULT NULL,
  `FacHireDate` date DEFAULT NULL,
  `FacSalary` decimal(10,2) DEFAULT NULL,
  `FacSupervisor` char(11) DEFAULT NULL,
  `FacDept` char(6) DEFAULT NULL,
  PRIMARY KEY (`FacSSN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`FacSSN`, `FacFirstName`, `FacLastName`, `FacCity`, `FacState`, `FacZipCode`, `FacRank`, `FacHireDate`, `FacSalary`, `FacSupervisor`, `FacDept`) VALUES
('098-76-5432', 'HI', 'VINCE', 'SEATTLE', 'WA', '98111-9921', 'ASST', '1995-04-10', 35000.00, '654-32-1098', 'MS'),
('543-21-0987', 'HI', 'EMMANUEL', 'BOTHELL', 'WA', '98011-2242', 'PROF', '1996-04-15', 120000.00, '', 'MS'),
('654-32-1098', 'LEONARD', 'FIBON', 'SEATTLE', 'WA', '98121-0094', 'ASSC', '1994-05-01', 70000.00, '543-21-0987', 'MS'),
('765-43-2109', 'vi', 'MaconBacon', 'BELLEVUE', 'WA', '98015-9945', 'PROF', '1997-04-11', 65000.00, '', 'FIN'),
('876-54-3210', 'vi', 'Thatisabunch', 'SEATTLE', 'WA', '98114-1332', 'ASST', '1999-03-01', 40000.00, '654-32-1098', 'MS'),
('987-65-4321', 'JULIA', 'MILLS', 'SEATTLE', 'WA', '98114-9954', 'ASSC', '2000-03-15', 75000.00, '765-43-2109', 'FIN');

-- --------------------------------------------------------

--
-- Table structure for table `offering`
--

CREATE TABLE IF NOT EXISTS `offering` (
  `OfferNo` int(11) NOT NULL,
  `CourseNo` char(6) NOT NULL,
  `OffTerm` char(6) NOT NULL,
  `OffYear` int(11) NOT NULL,
  `OffLocation` varchar(30) DEFAULT NULL,
  `OffTime` varchar(10) DEFAULT NULL,
  `FacSSN` char(11) DEFAULT NULL,
  `OffDays` char(4) DEFAULT NULL,
  PRIMARY KEY (`OfferNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offering`
--

INSERT INTO `offering` (`OfferNo`, `CourseNo`, `OffTerm`, `OffYear`, `OffLocation`, `OffTime`, `FacSSN`, `OffDays`) VALUES
(1111, 'IS320', 'SUMMER', 2011, 'BLM302', '11:30 AM', '', 'MW'),
(1234, 'IS320', 'FALL', 2010, 'BLM302', '10:30:00', '098-76-5432', 'MW'),
(2222, 'IS460', 'SUMMER', 2010, 'BLM412', '13:30:00', '', 'TTH'),
(3333, 'IS320', 'SPRING', 2011, 'BLM214', '08:30:00', '098-76-5432', 'MW'),
(4321, 'IS320', 'FALL', 2010, 'BLM214', '15:30:00', '098-76-5432', 'TTH'),
(4444, 'IS320', 'SUMMER', 2011, 'BLM302', '11:30 AM', '543-21-0987', 'TTH'),
(5555, 'FIN300', 'WINTER', 2011, 'BLM207', '08:30:00', '765-43-2109', 'MW'),
(5678, 'IS480', 'WINTER', 2011, 'BLM302', '10:30:00', '987-65-4321', 'MW'),
(5679, 'IS480', 'SPRING', 2011, 'BLM412', '15:30:00', '876-54-3210', 'TTH'),
(6666, 'FIN450', 'WINTER', 2011, 'BLM212', '10:30:00', '987-65-4321', 'TTH'),
(7777, 'FIN480', 'SPRING', 2011, 'BLM305', '13:30:00', '765-43-2109', 'MW'),
(8888, 'IS320', 'SUMMER', 2011, 'BLM405', '11:30 AM', '654-32-1098', 'MW'),
(9876, 'IS460', 'SPRING', 2011, 'BLM307', '13:30:00', '654-32-1098', 'TTH'),
(12121, 'FIN300', 'SPRING', 2012, 'BLM302', '10:30:00', '098-76-5432', 'TTH');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stdSSN` char(11) NOT NULL DEFAULT '',
  `stdFirstName` varchar(30) NOT NULL,
  `stdLastName` varchar(30) NOT NULL,
  `stdCity` varchar(30) NOT NULL,
  `stdState` char(2) NOT NULL,
  `stdZip` char(10) NOT NULL,
  `stdMajor` char(6) DEFAULT NULL,
  `stdClass` char(2) DEFAULT NULL,
  `stdGPA` decimal(3,2) DEFAULT NULL,
  PRIMARY KEY (`stdSSN`),
  KEY `stu_LastName_index` (`stdLastName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stdSSN`, `stdFirstName`, `stdLastName`, `stdCity`, `stdState`, `stdZip`, `stdMajor`, `stdClass`, `stdGPA`) VALUES
('123-45-6789', 'HOMER', 'WELLS', 'SEATTLE', 'WA', '98121-1111', 'IS', 'FR', 0.00),
('124-56-7890', 'BOB', 'NORBERT', 'BOTHELL', 'WA', '98011-2121', 'FIN', 'JR', 2.70),
('234-56-7890', 'CANDY', 'KENDALL', 'TACOMA', 'WA', '99042-3321', 'ACCT', 'JR', 3.50),
('345-67-8901', 'WALLY', 'KENDALL', 'SEATTLE', 'WA', '98123-1141', 'IS', 'SR', 2.80),
('456-78-9012', 'JOE', 'ESTRADA', 'SEATTLE', 'WA', '98121-2333', 'FIN', 'SR', 3.20),
('567-89-0123', 'MARIAH', 'DODGE', 'SEATTLE', 'WA', '98114-0021', 'IS', 'JR', 3.60),
('678-90-1234', 'TESS', 'DODGE', 'REDMOND', 'WA', '98116-2344', 'ACCT', 'SO', 3.30),
('789-01-2345', 'ROBERTO', 'MORALES', 'SEATTLE', 'WA', '98121-2212', 'FIN', 'JR', 2.50),
('876-54-3210', 'CRISTOPHER', 'COLAN', 'SEATTLE', 'WA', '98114-1332', 'IS', 'SR', 4.00),
('890-12-3456', 'LUKE', 'BRAZZI', 'SEATTLE', 'WA', '98116-0021', 'IS', 'SR', 2.20),
('901-23-4567', 'WILLIAM', 'PILGRIM', 'BOTHELL', 'WA', '98113-1885', 'IS', 'SO', 3.80);
