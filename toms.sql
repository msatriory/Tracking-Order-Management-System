-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Jul 2015 pada 04.16
-- Versi Server: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `isiska`
--

CREATE TABLE IF NOT EXISTS `isiska` (
  `No` int(100) DEFAULT NULL,
  `Cust_Name` varchar(50) NOT NULL,
  `Cust_Ship` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Customer_Segmen` varchar(10) NOT NULL,
  `Product` varchar(50) NOT NULL,
  `BW_Packet` varchar(50) NOT NULL,
  `One_Time_Charge` varchar(50) NOT NULL,
  `Abonemen` int(50) NOT NULL,
  `Sales_by` varchar(50) NOT NULL,
  `AM_Name` varchar(50) NOT NULL,
  `AM_Phone` varchar(20) NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Customer_Phone` varchar(20) NOT NULL,
  `Contract_Date` varchar(10) NOT NULL,
  `Due_Date_Live` date NOT NULL,
  `Tech_Data` varchar(50) NOT NULL,
  `Input_Date` date NOT NULL,
  `Direct_Number` varchar(50) NOT NULL,
  `Speedy_Number` int(50) NOT NULL,
  `Date_of_Progress` varchar(50) NOT NULL,
  `I-Siska_Status` varchar(50) NOT NULL,
  `Tenoss_Status` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Additional_Information` varchar(50) NOT NULL,
  `Follow_up` varchar(50) NOT NULL,
  `Unit_in_Charge` varchar(50) NOT NULL,
  `PIC_Name` varchar(50) NOT NULL,
  `PIC_Number` varchar(20) NOT NULL,
  `Put_in_Service_Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='input date hingga put in service termasuk tabel progres';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
