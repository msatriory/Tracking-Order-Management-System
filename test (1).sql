-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2015 at 08:12 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `isiska`
--

CREATE TABLE IF NOT EXISTS `isiska` (
  `No` int(100) NOT NULL,
  `Cust_Name` varchar(50) NOT NULL,
  `Cust_Ship` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Customer_Segmen` varchar(10) NOT NULL,
  `Product` varchar(50) NOT NULL,
  `BW_Packet` varchar(50) NOT NULL,
  `One_TIme_Charge` varchar(50) NOT NULL,
  `Abonemen` int(50) NOT NULL,
  `Sales_by` varchar(50) NOT NULL,
  `AM_Name` varchar(50) NOT NULL,
  `AM_Phone` varchar(20) NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Customer_Phone` varchar(20) NOT NULL,
  `Contract_Date` varchar(10) NOT NULL,
  `Due_Date_Live` date NOT NULL,
  `Tech_Data` varchar(50) NOT NULL,
  `Input_Date` date DEFAULT NULL,
  `Direct_Number` varchar(50) DEFAULT NULL,
  `Speedy_Number` int(50) DEFAULT NULL,
  `Date_of_Progress` varchar(50) DEFAULT NULL,
  `I-Siska_Status` varchar(50) DEFAULT NULL,
  `Tenoss_Status` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Additional_Information` varchar(50) DEFAULT NULL,
  `Follow_up` varchar(50) DEFAULT NULL,
  `Unit_in_Charge` varchar(50) DEFAULT NULL,
  `PIC_Name` varchar(50) DEFAULT NULL,
  `PIC_Number` varchar(20) DEFAULT NULL,
  `Put_in_Service_Date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='input date hingga put in service termasuk tabel progres';

--
-- Dumping data for table `isiska`
--

INSERT INTO `isiska` (`No`, `Cust_Name`, `Cust_Ship`, `City`, `Customer_Segmen`, `Product`, `BW_Packet`, `One_TIme_Charge`, `Abonemen`, `Sales_by`, `AM_Name`, `AM_Phone`, `Customer_Name`, `Customer_Phone`, `Contract_Date`, `Due_Date_Live`, `Tech_Data`, `Input_Date`, `Direct_Number`, `Speedy_Number`, `Date_of_Progress`, `I-Siska_Status`, `Tenoss_Status`, `Status`, `Additional_Information`, `Follow_up`, `Unit_in_Charge`, `PIC_Name`, `PIC_Number`, `Put_in_Service_Date`) VALUES
(1, 'l', 'p', 'p', 'l', 'p', 'l', 'p', 11213, 'm', 'm', 'l', 'm', 'm', 'm', '2015-07-01', 'ml', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isiska`
--
ALTER TABLE `isiska`
  ADD PRIMARY KEY (`No`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
