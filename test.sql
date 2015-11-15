-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2015 at 10:24 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

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
-- Table structure for table `amanager`
--

CREATE TABLE IF NOT EXISTS `amanager` (
  `NIK_AM` int(6) NOT NULL,
  `Nama_AM` varchar(50) NOT NULL,
  `phone_AM` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amanager`
--

INSERT INTO `amanager` (`NIK_AM`, `Nama_AM`, `phone_AM`) VALUES
(3, 'das', 0),
(112233, 'Deca', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `isiska`
--

CREATE TABLE IF NOT EXISTS `isiska` (
  `No` int(100) NOT NULL,
  `Cust_Name` varchar(50) NOT NULL,
  `Cust_Ship` varchar(500) NOT NULL,
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
  `ISiska_Status` varchar(50) NOT NULL,
  `Tenoss_Status` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Additional_Information` varchar(50) NOT NULL,
  `Follow_up` varchar(50) NOT NULL,
  `Unit_in_Charge` varchar(50) NOT NULL,
  `PIC_Name` varchar(50) NOT NULL,
  `PIC_Number` varchar(20) NOT NULL,
  `Put_in_Service_Date` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=220 DEFAULT CHARSET=latin1 COMMENT='input date hingga put in service termasuk tabel progres';

--
-- Dumping data for table `isiska`
--

INSERT INTO `isiska` (`No`, `Cust_Name`, `Cust_Ship`, `City`, `Customer_Segmen`, `Product`, `BW_Packet`, `One_Time_Charge`, `Abonemen`, `Sales_by`, `AM_Name`, `AM_Phone`, `Customer_Name`, `Customer_Phone`, `Contract_Date`, `Due_Date_Live`, `Tech_Data`, `Input_Date`, `Direct_Number`, `Speedy_Number`, `Date_of_Progress`, `ISiska_Status`, `Tenoss_Status`, `Status`, `Additional_Information`, `Follow_up`, `Unit_in_Charge`, `PIC_Name`, `PIC_Number`, `Put_in_Service_Date`) VALUES
(1, 'Bawaslu DIY', '', '', 'DES', 'Speedy Gold', '5 Mbps', '', 1770000, '', 'Deca', '', '', '', '', '0000-00-00', '', '0000-00-00', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(2, 'PT Eastern Yogyakarta', '', '', 'DES', 'Speedy Gold', '2 Mbps', '', 670000, '', 'Deca', '', '', '', '', '0000-00-00', '', '0000-00-00', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(3, 'SMAN 1 WONOSARI', 'JL BRIGJEN KATAMSO KEPEK WONOSARI', 'GUNUNGKIDUL', 'DBS', 'SPEEDY', '10 MBPS', '2500000', 3370000, 'AM', 'UMI FATIMAH', '', '', '', '', '0000-00-00', '92958435', '2005-02-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(4, 'PT TUGU PERKASA U/ WHIZ TUGU HOTEL', 'JL PASAR KEMBANG 9 SOSROMENDURAN GEDONG TENGEN', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '5 MBPS', '0', 995000, 'AM', 'SEPTA AGUNG', '', '', '', '', '0000-00-00', '115724705', '2006-05-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(5, 'CHAMPION PRINTING', 'JL BHAYANGKARA 33A NGAMPILAN', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '5 MBPS', '2500000', 1770000, 'SF', 'LILIS - SEPTA AGUNG', '', '', '', '', '0000-00-00', '115884085', '2006-05-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(6, 'RUMAH SAKIT ISLAM HIDAYATULAH', 'JL VETERAN 184 PANDEYAN UMBUL HARJO', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '5 MBPS', '2500000', 1770000, 'AM', 'TRI RATNAWATI', '', '', '', '', '0000-00-00', '117233865', '2013-05-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(7, 'SMPN 9 YOGYAKARTA', 'JL NGEKSIGONDO 30 PRENGGAN KOTAGEDE', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '5 MBPS', '1250000', 1770000, 'AM', 'UMI FATIMAH', '', '', '', '', '0000-00-00', '117310095', '2013-05-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(8, 'PT BESS CENTRAL INSURANCE', 'JL RINGROAD UTARA BLOK F-6 CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'SPEEDY', '1 MBPS', '0', 250000, 'AM', 'UMI FATIMAH', '', '', '', '', '0000-00-00', '122479055', '2009-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(9, 'YAYASAN MATARAM/ UNIV WIDYA MATARAM', 'Kompl DALEM MANGKUBUMEN KT III 237 KADIPATEN KRATON', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '5 MBPS', '2500000', 1770000, 'AM', 'KAMILATUN NIKMAH', '', '', '', '', '0000-00-00', '126293635', '2026-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(10, 'YAYASAN BUDI MULIA DUA U/ BABY DAY CARE', 'JL PANDEAN SARI III CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'SPEEDY', '2 MBPS', '2500000', 670000, 'AM', 'UMI FATIMAH', '', '', '', '', '0000-00-00', '117965065', '2018-05-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(11, 'SMKN 1 GODEAN', 'KOWANAN SIDOAGUNG GODEAN', 'SLEMAN', 'DBS', 'SPEEDY', '5 MBPS', '0', 1770000, 'AM', 'UMI FATIMAH', '', '', '', '', '0000-00-00', '123237795', '2012-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(12, 'SMKN 2 GODEAN', 'JL JAE SUMANTORO SIDOAGUNG GODEAN', 'SLEMAN', 'DBS', 'SPEEDY', '5 MBPS', '0', 1770000, 'AM', 'UMI FATIMAH', '', '', '', '', '0000-00-00', '123238125', '2012-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(13, 'SMA PANGUDI LUHUR SEDAYU', 'JL WATES  KM XII ARGOSARI SEDAYU', 'BANTUL', 'DBS', 'SPEEDY', '5 MBPS', '2500000', 1770000, 'AM', 'UMI FATIMAH', '', '', '', '', '0000-00-00', '123234055', '2012-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(14, 'SMPN 1 GODEAN', 'JL JAE SUMANTORO SIDOLUHUR GODEAN', 'SLEMAN', 'DBS', 'SPEEDY', '5 MBPS', '2500000', 1770000, 'AM', 'UMI FATIMAH', '', '', '', '', '0000-00-00', '123236935', '2012-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(15, 'PT WIFIKU', 'JL NGEKSIGONDO KAV 2 PRENGGAN KOTAGEDE', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '10 MBPS', '2500000', 3370000, 'AM', 'KAMILATUN NIKMAH', '', '', '', '', '0000-00-00', '124745065', '2019-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(16, 'STIKES WIRAHUSADA YOGYAKARTA', 'JL BABARSARI Dusun GLENDONGAN TB CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'SPEEDY', '10 MBPS', '2500000', 3370000, 'AM', 'KAMILATUN NIKMAH', '', '', '', '', '0000-00-00', '120418565', '2029-05-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(17, 'PEACOCK COFFEE', 'JL PALAGAN TENTARA PELAJAR 61 C SARIHARJO NGAGLIK', 'SLEMAN', 'DBS', 'SPEEDY', '20 MBPS', '2500000', 767000, 'AM', 'RISKA SURYANI', '', '', '', '', '0000-00-00', '125242475', '2022-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(18, 'PT DHARMA MULIA PRIMA KARYA', 'JL YOGYA SOLO KM 12,5 TAMANMARTANI KALASAN', 'SLEMAN', 'DBS', 'SPEEDY', '10 MBPS', '0', 3370000, 'AM', 'SF PUTRI/ BAM UMI FATIMAH', '', '', '', '', '0000-00-00', '125765325', '2024-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(19, 'PT YOGYA TEMBAKAU INDONESIA', 'JL IMOGIRI KM 4 BANGUNHARJO SEWON', 'BANTUL', 'DBS', 'SPEEDY', '5 MBPS', '2500000', 1770000, 'AM', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '125237275', '2022-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(20, 'PT BHUMI MERAPI ERATAMA U/ MERAPI RESTO', 'PERUM PESONA MERAPI REAL ESTATE SADONOHARJO NGAGLIK', 'SLEMAN', 'DBS', 'SPEEDY', '10 MBPS', '0', 290000, 'AM', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '121167655', '2004-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(21, 'PT BHUMI MERAPI ERATAMA U/ MERAPI RESTO', 'PERUM PESONA MERAPI REAL ESTATE SADONOHARJO NGAGLIK', 'SLEMAN', 'DBS', 'SPEEDY', '20 MBPS', '0', 290000, 'AM', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '127182455', '2030-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(22, 'PT BHUMI MERAPI ERATAMA U/ MERAPI RESTO', 'PERUM PESONA MERAPI REAL ESTATE SADONOHARJO NGAGLIK', 'SLEMAN', 'DBS', 'SPEEDY', '10 MBPS', '0', 290000, 'AM', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '129614195', '2008-07-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(23, 'PT BHUMI MERAPI ERATAMA U/ MAIN KITCHEN', 'PERUM PESONA MERAPI REAL ESTAT SADONOHARJO NGAGLIK', 'SLEMAN', 'DBS', 'SPEEDY', '10 MBPS', '0', 290000, 'AM', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '129650245', '2008-07-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(24, 'PT BPR BHUMIKARYA PALA', 'JL RAYA WONOSARI YOGYA KM.3 LOGANDENG PLAYEN', 'GUNUNGKIDUL', 'DBS', 'SPEEDY', '3 MBPS', '0', 1160000, 'AM', 'ANNASTASIA KS', '', '', '', '', '0000-00-00', '120128975', '2028-05-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(25, 'PT MALIOME DIGITAL INDONESIA', 'JL KYAI MOJO 73 TEGAL REJO', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '10 MBPS', '0', 3370000, 'AM', 'UMI FATIMAH', '', '', '', '', '0000-00-00', '121386545', '2004-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(26, 'PT HASKO PERSONA', 'JL ANGGAJAYA III K.29 CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'SPEEDY', '2 MBPS', '0', 670000, 'AM', 'UMI FATIMAH', '', '', '', '', '0000-00-00', '122230475', '2008-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(27, 'BALAI PELESTARIAN CAGAR BUDAYA YOGYAKARTA', 'JL YOGYA - SOLO BOGEM KM 15 TAMANMARTANI KALASAN', 'SLEMAN', 'DBS', 'SPEEDY', '10 MBPS', '1250000', 3370000, 'AM', 'UMI FATIMAH', '', '', '', '', '0000-00-00', '128721915', '2004-07-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(28, 'PT MEDIKA LOKA YOGYA / RS. HERMINA YOGYA', 'GONDANGAN MAGUWOHARJO DEPOK', 'SLEMAN', 'DBS', 'SPEEDY', '5 MBPS', '2500000', 1770000, 'AM', 'SEPTA AGUNG', '', '', '', '', '0000-00-00', '126317295', '2026-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(29, 'PT PRIMA INDAH MAKMUR - HOTEL PRIMA INN', 'JL GANDEKAN LOR 47 SOSROMENDURAN GEDONG TENGEN', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '5 MBPS', '2500000', 1770000, 'AM', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '126427925', '2026-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(30, 'SMK KESEHATAN WONOSARI', 'JL NUSANTARA 12 KEPEK WONOSARI', 'GUNUNGKIDUL', 'DBS', 'SPEEDY', '1 MBPS', '0', 250000, 'AM', 'UMI FATIMAH', '', '', '', '', '0000-00-00', '126825185', '2029-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(31, 'CHAMPION CHAMPUS', 'JL AFANDI 4 CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'SPEEDY', '10 MBPS', '2500000', 3370000, 'SF LILIS', 'SEPTA AGUNG', '', '', '', '', '0000-00-00', '111881255', '2020-04-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(32, 'STIE WIDYA WIWAHA', 'JL LOWANU 20 SOROSUTAN UMBUL HARJO', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '5 MBPS', '2500000', 1770000, 'AM', 'KAMILATUN NIKMAH', '', '', '', '', '0000-00-00', '90840265', '2029-01-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(33, 'PT SUMBER BARU LAND', 'JL MAGELANG KM,5,5 SINDUADI MLATI', 'SLEMAN', 'DBS', 'SPEEDY', '5 MBPS', '2500000', 1770000, 'AM', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '97089695', '2024-02-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(34, 'SMK MUHAMMADIYAH 2 PLAYEN', 'JL PLAYEN-WONOSARI PLAYEN', 'GUNUNGKIDUL', 'DBS', 'SPEEDY', '5 MBPS', '1250000', 1770000, 'AM', 'UMI FATIMAH', '', '', '', '', '0000-00-00', '129086695', '2006-07-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(35, 'JOGJA ONE PARK', 'JL LAKSDA ADISUCIPTO KM 8,5 MAGUWOHARJO DEPOK', 'SLEMAN', 'DBS', 'SPEEDY', '2 MBPS', '0', 670000, 'SF ANTON GMJ', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '129227015', '2007-07-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(36, 'JOGJA ONE PARK', 'JL LAKSDA ADISUCIPTO KM 8,5 MAGUWOHARJO DEPOK', 'SLEMAN', 'DBS', 'SPEEDY', '5 MBPS', '0', 1770000, 'SF ANTON GMJ', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '129228085', '2007-07-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(37, 'CUPPAJO CAFE', 'JL SELOKAN MATARAM II / 8 CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'SPEEDY', '10 MBPS', '2500000', 1245000, 'SF ZUNARTO', 'RISKA SURYANI', '', '', '', '', '0000-00-00', '129878655', '2009-07-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(38, 'THOR WARNET', 'JL KALIURANG KM 13,5 SARIHARJO NGAGLIK', 'SLEMAN', 'DBS', 'SPEEDY', '10 MBPS', '2500000', 1245000, 'SF ZUNARTO', 'RISKA SURYANI', '', '', '', '', '0000-00-00', '130056735', '2010-07-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(39, 'MAESINDO INDONESIA', 'Kampung KARANG JATI BANGUNJIWO KASIHAN', 'BANTUL', 'DBS', 'SPEEDY', '20 MBPS', 'TICARES 2500000', 6185000, 'AM', 'RISKA SURYANI', '', '', '', '', '0000-00-00', '130820425', '2014-07-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(40, 'STUDENT CUSTLE APARTMENT', 'JL RAYA SETURAN CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'SPEEDY', '5 MBPS', '1250000', 1770000, 'AM', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '130924225', '2015-07-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(41, 'TYASNING WIDIASTUTI', 'PERUMAHAN PONDOK PERMAI KAV A-10 PANGGUNGHARJO SEWON ', 'BANTUL', 'DBS', 'SPEEDY', '', '0', 290000, 'SF AYU', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '108147975', '2008-04-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(42, 'SINDU KUSUMA EDUPARK', 'JL JAMBON SINDUADI MLATI', 'SLEMAN', 'DBS', 'SPEEDY', '', '0', 290000, 'AM', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '112588085', '2023-04-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(43, 'Tn SIGIT SETIAWAN', 'Perumahan CEMARA ESTATE KAV C-6 SINDUADI MLATI', 'SLEMAN', 'DBS', 'SPEEDY', '', '0', 195000, 'SF AYU', 'SF AYU-ADIN/GPON', '', '', '', '', '0000-00-00', '116202245', '2007-05-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(44, 'JOGJATRONIK U/ TRINITY SERVICE CENTER', 'JL KATAMSO JOGJATRONIK LT 1/06 PRAWIRODIRJAN GONDOMANAN', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '', '0', 150000, 'SF SODARI', '', '', '', '', '', '0000-00-00', '116645055', '2011-05-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(45, 'PT SUMBER BARU LAND U/ NUGROHO HARTOYO', 'Perumahan PONDOK PERMAI BLOK O KAV D-6/7 BANGUNTAPAN', 'BANTUL', 'DBS', 'SPEEDY', '', '0', 150000, 'SF AYU', '', '', '', '', '', '0000-00-00', '117270295', '2013-05-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(46, 'BASARNAS KANTOR YOGYAKARTA', 'JL WATES  KM 11,5 ARGOMULYO SEDAYU', 'BANTUL', 'DBS', 'SPEEDY', '', '0', 470000, 'SF ADIN', 'ANNASTASIA KS', '', '', '', '', '0000-00-00', '119533905', '2026-05-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(47, 'YAYASAN TARAKANITA', 'JL DR SUTOMO 56 BACIRO GONDOKUSUMAN', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '', '0', 290000, 'SF ADIN', 'UMI FATIMAH', '', '', '', '', '0000-00-00', '119844775', '2027-05-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(48, 'PT KAIDI INDOJAYA U/ COOL PAD OFFICE', 'JL KATAMSO JOGJATRONIK 75-77 PRAWIRODIRJAN GONDOMANAN', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '', '0', 470000, 'SF SODARI', 'UMI FATIMAH', '', '', '', '', '0000-00-00', '121516325', '2004-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(49, 'PT CITRA DAMAI PUTRA GROUP U/ HIKMAH BASBETH', 'Perumahan GREEN HILLS KAV 227 SADONOHARJO NGAGLIK', 'SLEMAN', 'DBS', 'SPEEDY', '', '0', 150000, 'SF AYU', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '122194985', '2008-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(50, 'PT CITRA DAMAI PUTRA GROUP U/ KHOLIFAH', 'Perumahan GREEN HILLS KAV 222 SADONOHARJO NGAGLIK', 'SLEMAN', 'DBS', 'SPEEDY', '', '75000', 195000, 'SF AYU', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '130731595', '2013-07-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(51, 'PT CITRA DAMAI PUTRA GROUP U/ TRI WAHYUNI', 'Perumahan GREEN HILLS KAV 230 SADONOHARJO NGAGLIK', 'SLEMAN', 'DBS', 'SPEEDY', '', '75000', 195000, 'SF AYU', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '130737695', '2013-07-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(52, 'PT CITRA DAMAI PUTRA GROUP U/ JESSYCA', 'Perumahan GREEN HILLS KAV 310 SADONOHARJO NGAGLIK', 'SLEMAN', 'DBS', 'SPEEDY', '', '75000', 195000, 'SF AYU', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '130740845', '2013-07-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(53, 'SUMBER BARU PERKASA U/ GENERALI', 'Rumah Toko SUMBER BARU SQUARE II/ KAV L SENDANG ADI MLATI', 'SLEMAN', 'DBS', 'SPEEDY', '', '0', 670000, 'SF SUKADI', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '125784895', '2024-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(54, 'SUMBER BARU PERKASA U/ GENERALI', 'Rumah Toko SUMBER BARU SQUARE II/ KAV L SENDANG ADI MLATI', 'SLEMAN', 'DBS', 'SPEEDY', '', '0', 670000, 'SF SUKADI', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '125799255', '2024-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(55, 'Ny NUR AMALIA U/ RUKO', 'JL  IBU RUSWO 01 PANEMBAHAN KRATON', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '', '0', 290000, 'SF DWI', '', '', '', '', '', '0000-00-00', '125911765', '2025-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(56, 'Ny NUR AMALIA U/ RUKO', 'JL  IBU RUSWO 01 PANEMBAHAN KRATON', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '', '0', 290000, 'SF DWI', '', '', '', '', '', '0000-00-00', '125918765', '2025-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(57, 'FOTO DIGITAL', 'JL KUSUMANEGARA 141 B MUJA-MUJU UMBUL HARJO', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '', '0', 195000, 'SF SUKADI', '', '', '', '', '', '0000-00-00', '127146675', '2030-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(58, 'PT SUMBER BARU RESIDENT U/ PETRUS TRIAJI MARDIKO', 'Perumahan LAGUNA SPRING KAV B-6 BANGUNTAPAN', 'BANTUL', 'DBS', 'SPEEDY', '', '0', 290000, 'SF AYU', 'VITA TRI WARDHANI', '', '', '', '', '0000-00-00', '127366185', '2030-06-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(59, 'PT RAMAI PUTRASEJAHTERA', 'JL AHMAD YANI', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '', '0', 250000, 'SF SODARI', '', '', '', '', '', '0000-00-00', '127492355', '2001-07-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(60, 'PT MALACCA TRUST WUWUNGAN INSURANCE', 'JL HOS COKROAMINOTO 96 TEGAL REJO', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '', '0', 485000, 'SF ADIN', '', '', '', '', '', '0000-00-00', '127058875', '2002-07-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(61, 'PT VIVA GENERIK', 'JL MENTERI SUPENO 61 PANDEYAN UMBUL HARJO', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '', '0', 250000, 'SF WIWIN', '', '', '', '', '', '0000-00-00', '127789405', '2002-07-15', '', 2147483647, '', '', '', 'Closed', '', '', '', '', '', ''),
(62, 'PT GREATECH ARTANINDO', 'JL RING ROAD UTARA MAGUWOHARJO DEPOK', 'SLEMAN', 'DBS', 'SPEEDY', '', '0', 195000, 'SF SUKADI', '', '', '', '', '', '0000-00-00', '125479165', '2002-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(63, 'TOKO DEWANI', 'JL PANDEYAN 7 PANDEYAN UMBUL HARJO', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '', '0', 250000, 'SF SUKADI', '', '', '', '', '', '0000-00-00', '127971375', '2002-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(64, 'CV MEDIA KOMUNIKASI', 'JL TRI DHARMA 517 BACIRO GONDOKUSUMAN', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '', '0', 250000, 'SF JOKO', '', '', '', '', '', '0000-00-00', '128050925', '2003-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(65, 'HARRY SUTANTO U/ VIVA GENERIK', 'JL MANGKURAT 4A PANEMBAHAN KRATON', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '', '0', 250000, 'SF WIWIN', '', '', '', '', '', '0000-00-00', '128303175', '2003-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(66, 'HARRY SUTANTO U/ VIVA GENERIK', 'JL JOGOKARYAN 51 MANTRIJERON MANTRIJERON', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '', '0', 250000, 'SF WIWIN', '', '', '', '', '', '0000-00-00', '128329765', '2003-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(67, 'PT LAPI LABORATORIES', 'GAMPING TENGAH AMBARKETAWANG GAMPING', 'SLEMAN', 'DBS', 'SPEEDY', '', '0', 250000, 'SF ADIN', '', '', '', '', '', '0000-00-00', '128433675', '2003-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(68, 'PT GARUDA MITRA SEJATI', 'JL MAGELANG KM 6 18 SINDUADI MLATI', 'SLEMAN', 'DBS', 'SPEEDY', '', '0', 250000, 'SF ADIN', 'TRI RATNAWATI', '', '', '', '', '0000-00-00', '128677115', '2004-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(69, 'O-SMILE CABANG BANDUNG', 'JL SUPRATMAN 84 CIHAPIT', 'KOTA BANDUNG', 'DBS', 'SPEEDY', '', '0', 250000, 'AM', 'BAM VITA/WIFI', '', '', '', '', '0000-00-00', '128733695', '2004-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(70, 'PT FORMULA LAND U/ MEITA GALIH PUSPITA', 'KRONGGAHAN KAV E-54 TRIHANGGO GAMPING', 'SLEMAN', 'DBS', 'SPEEDY', '', '0', 290000, '', 'SF AYU/BAM VITA/STARKLIK', '', '', '', '', '0000-00-00', '128696255', '2004-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(71, 'PT FORMULA LAND U/ IDA KUSUMANINGRUM', 'KRONGGAHAN KAV F-61 TRIHANGGO GAMPING', 'SLEMAN', 'DBS', 'SPEEDY', '', '0', 290000, '', 'SF AYU/BAM VITA/STARKLIK', '', '', '', '', '0000-00-00', '128701035', '2004-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(72, 'PT FORMULA LAND U/ SITI NURUL DIAH ANGGRAINI', 'KRONGGAHAN KAV F-64 TRIHANGGO GAMPING', 'SLEMAN', 'DBS', 'SPEEDY', '', '0', 290000, '', 'SF AYU/BAM VITA/STARKLIK', '', '', '', '', '0000-00-00', '128708855', '2004-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(73, 'PT FORMULA LAND U/ TEDDY H KUSUMA', 'KRONGGAHAN KAV H-107 TRIHANGGO GAMPING', 'SLEMAN', 'DBS', 'SPEEDY', '', '0', 290000, '', 'SF AYU/BAM VITA/STARKLIK', '', '', '', '', '0000-00-00', '128723985', '2004-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(74, 'PT FORMULA LAND U/ JHON FRISCO R PURBA', 'KRONGGAHAN KAV G-84 TRIHANGGO GAMPING', 'SLEMAN', 'DBS', 'SPEEDY', '', '0', 290000, '', 'SF AYU/BAM VITA/STARKLIK', '', '', '', '', '0000-00-00', '130896575', '2015-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(75, 'PT INDONESIA MEDIA TEKNISI', 'JL KABUPATEN KM 1 NOGOTIRTO GAMPING', 'SLEMAN', 'DBS', 'SPEEDY', '', '0', 250000, '', 'SF SUKADI/WIFI', '', '', '', '', '0000-00-00', '129001705', '2006-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(76, 'YANDITO U/ TIMUR JAYA MOTOR', 'JL BABARSARI  TB XIV 2 D CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'SPEEDY', '', '0', 195000, '', 'SF SUKADI/WIFI', '', '', '', '', '0000-00-00', '129081575', '2006-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(77, 'YUDITH SEPTIANTO', 'BUGISAN SELATAN TIRTONIRMOLO KASIHAN', 'BANTUL', 'DBS', 'SPEEDY', '', '0', 195000, '', 'SF YANI GMJ/WIFI', '', '', '', '', '0000-00-00', '129360485', '2007-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(78, 'AWANA CONDOTEL DAN TOWN HOUSE', 'T.HOUSE 41 NGADINEGARAN MANTRIJERON', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '', '0', 195000, '', 'SF SODARI/ADIN/GPON/MANUAL', '', '', '', '', '0000-00-00', '129454765', '2008-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(79, 'PT KAIDI INDOJAYA U/ DJOGJA CELL GROUP', 'JL KATAMSO JOGJATRONIK 75-77 PRAWIRODIRJAN GONDOMANAN', 'KOTA YOGYAKARTA', 'DBS', 'SPEEDY', '', '0', 250000, '', 'SF SODARI/ADIN/WIFI', '', '', '', '', '0000-00-00', '130192465', '2010-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(80, 'PT TRIFOS INTERNASIONAL SERTIFIKASI', 'KAVITA VILA SETURAN INDAH C-2 CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'SPEEDY', '', '0', 250000, '', 'SF SODARI/ADIN/WIFI', '', '', '', '', '0000-00-00', '130583585', '2013-07-15', '', 2147483647, '', '', '', 'progress', '', '', '', '', '', ''),
(81, 'PT ARTHA MORO KAMA U/ HOTEL BURZA', 'JL JOGOKARYAN 61-63 MANTRIJERON MANTRIJERON', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM VITA/NOKES/GPON/TA-KOPEG JAROT', '', '', '', '', '0000-00-00', '96842065', '2023-02-15', '02744580061', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(82, 'PT ARTHA MORO KAMA U/ HOTEL BURZA', 'JL JOGOKARYAN 61-63 MANTRIJERON MANTRIJERON', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM VITA/NOKES/GPON/TA-KOPEG JAROT', '', '', '', '', '0000-00-00', '96839295', '2023-02-15', '02744580062', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(83, 'PT TUGU PERKASA U/ WHIZ TUGU HOTEL', 'JL PASAR KEMBANG 9 SOSROMENDURAN GEDONG TENGEN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ADIN/AMEX SEPTA/GPON/IKR TA', '', '', '', '', '0000-00-00', '115694145', '2006-05-15', '02742922777', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(84, 'PT TUGU PERKASA U/ WHIZ TUGU HOTEL', 'JL PASAR KEMBANG 9 SOSROMENDURAN GEDONG TENGEN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ADIN/AMEX SEPTA/GPON/IKR TA', '', '', '', '', '0000-00-00', '115695295', '2006-05-15', '02742922888', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(85, 'PT TUGU PERKASA U/ WHIZ TUGU HOTEL', 'JL PASAR KEMBANG 9 SOSROMENDURAN GEDONG TENGEN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ADIN/AMEX SEPTA/GPON/IKR TA', '', '', '', '', '0000-00-00', '115696455', '2006-05-15', '02742922999', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(86, 'PT PRIMA INDAH MAKMUR - HOTEL PRIMA INN', 'JL GANDEKAN LOR 47 SOSROMENDURAN GEDONG TENGEN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ADIN/BAM VITA//NOKES/IKR GMJ', '', '', '', '', '0000-00-00', '97298505', '2025-02-15', '02744469777', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(87, 'PT PRIMA INDAH MAKMUR - HOTEL PRIMA INN', 'JL GANDEKAN LOR 47 SOSROMENDURAN GEDONG TENGEN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ADIN/BAM VITA//NOKES/IKR GMJ', '', '', '', '', '0000-00-00', '97303995', '2025-02-15', '02744469888', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(88, 'PT PRIMA INDAH MAKMUR - HOTEL PRIMA INN', 'JL GANDEKAN LOR 47 SOSROMENDURAN GEDONG TENGEN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ADIN/BAM VITA//NOKES/IKR GMJ', '', '', '', '', '0000-00-00', '116893225', '2012-05-15', '02744469741', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(89, 'PT PRIMA INDAH MAKMUR - HOTEL PRIMA INN', 'JL GANDEKAN LOR 47 SOSROMENDURAN GEDONG TENGEN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ADIN/BAM VITA//NOKES/IKR GMJ', '', '', '', '', '0000-00-00', '116894835', '2012-05-15', '02744469742', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(90, 'PT PRIMA INDAH MAKMUR - HOTEL PRIMA INN', 'JL GANDEKAN LOR 47 SOSROMENDURAN GEDONG TENGEN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ADIN/BAM VITA//NOKES/IKR GMJ', '', '', '', '', '0000-00-00', '116895165', '2012-05-15', '02744469743', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(91, 'PT PRIMA INDAH MAKMUR - HOTEL PRIMA INN', 'JL GANDEKAN LOR 47 SOSROMENDURAN GEDONG TENGEN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ADIN/BAM VITA//NOKES/IKR GMJ', '', '', '', '', '0000-00-00', '116896265', '2012-05-15', '02744469744', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(92, 'PT PRIMA INDAH MAKMUR - HOTEL PRIMA INN', 'JL GANDEKAN LOR 47 SOSROMENDURAN GEDONG TENGEN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ADIN/BAM VITA//NOKES/IKR GMJ', '', '', '', '', '0000-00-00', '116905865', '2012-05-15', '02744469745', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(93, 'PT PRIMA INDAH MAKMUR - HOTEL PRIMA INN', 'JL GANDEKAN LOR 47 SOSROMENDURAN GEDONG TENGEN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ADIN/BAM VITA//NOKES/IKR GMJ', '', '', '', '', '0000-00-00', '116949405', '2012-05-15', '02744469746', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(94, 'PT PRIMA INDAH MAKMUR - HOTEL PRIMA INN', 'JL GANDEKAN LOR 47 SOSROMENDURAN GEDONG TENGEN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ADIN/BAM VITA//NOKES/IKR GMJ', '', '', '', '', '0000-00-00', '116949975', '2012-05-15', '02744469747', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(95, 'PT PRIMA INDAH MAKMUR - HOTEL PRIMA INN', 'JL GANDEKAN LOR 47 SOSROMENDURAN GEDONG TENGEN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ADIN/BAM VITA//NOKES/IKR GMJ', '', '', '', '', '0000-00-00', '116951945', '2012-05-15', '02744469748', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(96, 'RUMAH SAKIT ISLAM HIDAYATULAH', 'JL VETERAN 184 PANDEYAN UMBUL HARJO', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 0, '', 'SF AGUNG/BAM TRI RATNA/NOKES/GPON/GAGAS', '', '', '', '', '0000-00-00', '117206695', '2013-05-15', '02744580192', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(97, 'SMP STELLA DUCE 1', 'JL DAGEN 32 SOSROMENDURAN GEDONG TENGEN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 0, '', 'BAM UMI FATIMAH/NOKES/GPON', '', '', '', '', '0000-00-00', '117351785', '2013-05-15', '02746429827', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(98, 'SMP STELLA DUCE 2', 'JL SURYODININGRATAN 33 SURYODININGRATAN MANTRIJERON', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 0, '', 'BAM UMI FATIMAH/NOKES/GPON', '', '', '', '', '0000-00-00', '117357475', '2013-05-15', '02744580398', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(99, 'YAYASAN BUDI MULIA DUA U/ BABY DAY CARE', 'JL PANDEAN SARI III CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '250000', 48100, '', 'SF ANWAR GMJ/BAM UMI FATIMAH/NOKES/IKR TA', '', '', '', '', '0000-00-00', '117945435', '2018-05-15', '02748722691', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(100, 'YAYASAN BUDI MULIA DUA U/ BABY DAY CARE', 'JL PANDEAN SARI III CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '250000', 48100, '', 'SF ANWAR GMJ/BAM UMI FATIMAH/NOKES/IKR TA', '', '', '', '', '0000-00-00', '117951375', '2018-05-15', '02748722696', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(101, 'PT AUTOMOBIL JAYA ABADI', 'JL YOGYA - SOLO SOROGENEN KM 10 PURWOMARTANI KALASAN', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF SUKADI/NO BUND/PANGGIH', '', '', '', '', '0000-00-00', '118248355', '2020-05-15', '02744363448', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(102, 'CV DUTA KENCANA', 'JL SUROKARSAN 255 A WIROGUNAN MERGANGSAN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF SUKADI/NO BUND/IKR LINTAS', '', '', '', '', '0000-00-00', '118178935', '2021-05-15', '0274385268', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(103, 'CV DUTA KENCANA', 'JL SUROKARSAN 255 A WIROGUNAN MERGANGSAN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF SUKADI/NO BUND/IKR LINTAS', '', '', '', '', '0000-00-00', '118177565', '2021-05-15', '0274385393', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(104, 'CV DUTA KENCANA', 'JL SUROKARSAN 255 A WIROGUNAN MERGANGSAN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF SUKADI/NO BUND/IKR LINTAS', '', '', '', '', '0000-00-00', '118592295', '2029-05-15', '0274374423', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(105, 'PT SUMBER BARU JAYA', 'Desa NGEMPLAK KEMBANG NANGGULAN', 'KULONPROGO', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF SUKADI GAGAS/NO BUND/IKR TA/GPON', '', '', '', '', '0000-00-00', '101443035', '2013-03-15', '02742820888', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(106, 'PT SUMBER BARU JAYA', 'Desa NGEMPLAK KEMBANG NANGGULAN', 'KULONPROGO', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF SUKADI GAGAS/NO BUND/IKR TA/GPON', '', '', '', '', '0000-00-00', '101450065', '2013-03-15', '02742820912', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(107, 'PT SUMBER BARU JAYA', 'Desa NGEMPLAK KEMBANG NANGGULAN', 'KULONPROGO', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF SUKADI GAGAS/NO BUND/IKR TA/GPON', '', '', '', '', '0000-00-00', '101448705', '2013-03-15', '02742820911', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(108, 'BASARNAS KANTOR YOGYAKARTA', 'JL WATES  KM 11,5 ARGOMULYO SEDAYU', 'BANTUL', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF ADIN/BAM ANNASTASIA/LINTAS', '', '', '', '', '0000-00-00', '119471265', '2026-05-15', '02746498165', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(109, 'PT BPR BHUMIKARYA PALA', 'JL RAYA WONOSARI YOGYA KM.3 LOGANDENG PLAYEN', 'GUNUNGKIDUL', 'DBS', 'WIRELINE', '', '0', 0, '', 'SF ADIN/BAM ANNASTASIA/GPON/TA', '', '', '', '', '0000-00-00', '119728605', '2027-05-15', '02743950591', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(110, 'STIKES WIRAHUSADA YOGYAKARTA', 'JL BABARSARI Dusun GLENDONGAN TB CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 0, '', 'SF ADIN/BAM MILA/NOKES/STARKLIK/GMJ', '', '', '', '', '0000-00-00', '120418575', '2029-05-15', '02742800050', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(111, 'PT MALIOME DIGITAL INDONESIA', 'JL KYAI MOJO 73 TEGAL REJO', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 0, '', 'SF PUTRI/BAM UMI/STARKLIK/GMJ', '', '', '', '', '0000-00-00', '121386575', '2004-06-15', '02742920704', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(112, 'UPT PERTANIAN DAN PERIKANAN', 'Kampung MALANGAN GIWANGAN UMBUL HARJO', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '250000', 28700, '', '', '', '', '', '', '0000-00-00', '121463605', '0000-00-00', '', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(113, 'UPT RUMAH PEMOTONGAN HEWAN', 'Kampung MENDUNGAN GIWANGAN UMBUL HARJO', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '250000', 28700, '', 'SF ADIN/BAM ANNASTASIA/GPON', '', '', '', '', '0000-00-00', '121464755', '2004-06-15', '02744580067', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(114, 'PT KAIDI INDOJAYA U/ COOL PAD OFFICE', 'JL KATAMSO JOGJATRONIK 75-77 PRAWIRODIRJAN GONDOMANAN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF SODARI/BAM UMI/BUND/', '', '', '', '', '0000-00-00', '121195925', '2004-06-15', '02744530266', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(115, 'PT CITRA DAMAI PUTRA GROUP U/ HIKMAH BASBETH', 'Perumahan GREEN HILLS KAV 227 SADONOHARJO NGAGLIK', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF AYU/BAM VITA/BUND/NO IKR', '', '', '', '', '0000-00-00', '122114165', '2012-06-15', '2744532602', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(116, 'PT CITRA DAMAI PUTRA GROUP U/ KHOLIFAH', 'Perumahan GREEN HILLS KAV 222 SADONOHARJO NGAGLIK', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF AYU/BAM VITA/BUND/NO IKR', '', '', '', '', '0000-00-00', '130700075', '2013-07-15', '2744532606', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(117, 'PT CITRA DAMAI PUTRA GROUP U/ TRI WAHYUNI', 'Perumahan GREEN HILLS KAV 230 SADONOHARJO NGAGLIK', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF AYU/BAM VITA/BUND/NO IKR', '', '', '', '', '0000-00-00', '130709725', '2013-07-15', '2744532608', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(118, 'PT CITRA DAMAI PUTRA GROUP U/ JESSYCA', 'Perumahan GREEN HILLS KAV 310 SADONOHARJO NGAGLIK', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF AYU/BAM VITA/BUND/NO IKR', '', '', '', '', '0000-00-00', '130714025', '2013-07-15', '2744532638', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(119, 'PT TUNGGAL PUTRA BAHAGIA SEJAHTERA U/ VILLA ESTETI', 'Perumahan VILLA ESTETIKA KAV A-8 MAGUWOHARJO DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF AYU/BAM VITA/3P-STARKLIK/GPON', '', '', '', '', '0000-00-00', '123031305', '2011-06-15', '02742800083', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(120, 'PT HASKO PERSONA', 'JL ANGGAJAYA III K.29 CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF UTRI/BAM UMI/BUND/STARKLIK/GMJ', '', '', '', '', '0000-00-00', '122230515', '2008-06-15', '02742830444', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(121, 'PT BESS CENTRAL INSURANCE', 'JL RINGROAD UTARA BLOK F-6 CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF PUTRI/BAM UMI/STARKLIK/GMJ', '', '', '', '', '0000-00-00', '122479085', '2009-06-15', '02742830460', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(122, 'PT BESS CENTRAL INSURANCE', 'JL RINGROAD UTARA BLOK F-6 CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF PUTRI/BAM UMI/STARKLIK/GMJ', '', '', '', '', '0000-00-00', '124255405', '2009-06-15', '02742830518', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(123, 'SMKN 1 GODEAN', 'KOWANAN SIDOAGUNG GODEAN', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 0, '', 'SF ADIN/BAM UMI FATIMAH/STARKLIK', '', '', '', '', '0000-00-00', '123238235', '2012-06-15', '02742820250', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(124, 'SMKN 2 GODEAN', 'JL JAE SUMANTORO SIDOAGUNG GODEAN', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 0, '', 'SF ADIN/BAM UMI FATIMAH/STARKLIK', '', '', '', '', '0000-00-00', '123238525', '2012-06-15', '02742820251', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(125, 'SMPN 1 GODEAN', 'JL JAE SUMANTORO SIDOLUHUR GODEAN', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 0, '', 'SF ADIN/BAM UMI FATIMAH/STARKLIK', '', '', '', '', '0000-00-00', '123237425', '2012-06-15', '02742820249', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(126, 'SMA PANGUDI LUHUR SEDAYU', 'JL WATES  KM XII ARGOSARI SEDAYU', 'BANTUL', 'DBS', 'WIRELINE', '', '0', 0, '', 'SF ADIN/BAM UMI FATIMAH/STARKLIK', '', '', '', '', '0000-00-00', '123234515', '2012-06-15', '02742820248', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(127, 'PT WIFIKU', 'JL NGEKSIGONDO KAV 2 PRENGGAN KOTAGEDE', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM MILA/STARKLIK/GMJ', '', '', '', '', '0000-00-00', '124745685', '2019-06-15', '02742840186', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(128, 'RS JOGJA INTERNATIONAL HOSPITAL', 'JL RING ROAD UTARA CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM TRI RATNA/NOKES/GMJ', '', '', '', '', '0000-00-00', '109627065', '2019-06-15', '2744469292', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(129, 'RS JOGJA INTERNATIONAL HOSPITAL', 'JL RING ROAD UTARA CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM TRI RATNA/NOKES/GMJ', '', '', '', '', '0000-00-00', '109632185', '2019-06-15', '2744469335', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(130, 'RS JOGJA INTERNATIONAL HOSPITAL', 'JL RING ROAD UTARA CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM TRI RATNA/NOKES/GMJ', '', '', '', '', '0000-00-00', '109640065', '2019-06-15', '2744469383', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(131, 'RS JOGJA INTERNATIONAL HOSPITAL', 'JL RING ROAD UTARA CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM TRI RATNA/NOKES/GMJ', '', '', '', '', '0000-00-00', '109640575', '2019-06-15', '2748722300', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(132, 'RS JOGJA INTERNATIONAL HOSPITAL', 'JL RING ROAD UTARA CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM TRI RATNA/NOKES/GMJ', '', '', '', '', '0000-00-00', '109641485', '2019-06-15', '2748722400', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(133, 'RS JOGJA INTERNATIONAL HOSPITAL', 'JL RING ROAD UTARA CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM TRI RATNA/NOKES/GMJ', '', '', '', '', '0000-00-00', '109949455', '2019-06-15', '2748722500', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(134, 'RS JOGJA INTERNATIONAL HOSPITAL', 'JL RING ROAD UTARA CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM TRI RATNA/NOKES/GMJ', '', '', '', '', '0000-00-00', '109949905', '2019-06-15', '2748722501', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(135, 'RS JOGJA INTERNATIONAL HOSPITAL', 'JL RING ROAD UTARA CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM TRI RATNA/NOKES/GMJ', '', '', '', '', '0000-00-00', '109950585', '2019-06-15', '2748722502', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(136, 'RS JOGJA INTERNATIONAL HOSPITAL', 'JL RING ROAD UTARA CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM TRI RATNA/NOKES/GMJ', '', '', '', '', '0000-00-00', '109950085', '2019-06-15', '2748722503', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(137, 'RS JOGJA INTERNATIONAL HOSPITAL', 'JL RING ROAD UTARA CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM TRI RATNA/NOKES/GMJ', '', '', '', '', '0000-00-00', '109967265', '2019-06-15', '2748722510', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(138, 'RS JOGJA INTERNATIONAL HOSPITAL', 'JL RING ROAD UTARA CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM TRI RATNA/NOKES/GMJ', '', '', '', '', '0000-00-00', '110027815', '2019-06-15', '2748722525', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(139, 'RS JOGJA INTERNATIONAL HOSPITAL', 'JL RING ROAD UTARA CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM TRI RATNA/NOKES/GMJ', '', '', '', '', '0000-00-00', '110027815', '2019-06-15', '2748722526', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(140, 'RS JOGJA INTERNATIONAL HOSPITAL', 'JL RING ROAD UTARA CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM TRI RATNA/NOKES/GMJ', '', '', '', '', '0000-00-00', '110030985', '2019-06-15', '2748722527', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(141, 'RS JOGJA INTERNATIONAL HOSPITAL', 'JL RING ROAD UTARA CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM TRI RATNA/NOKES/GMJ', '', '', '', '', '0000-00-00', '110032685', '2019-06-15', '2748722528', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(142, 'BALAI PELESTARIAN CAGAR BUDAYA YOGYAKARTA', 'JL YOGYA - SOLO BOGEM KM 15 TAMANMARTANI KALASAN', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 0, '', 'SF PUTRI/BAM UMI/MANUAL/GMJ', '', '', '', '', '0000-00-00', '125098335', '2022-06-15', '02744469265', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(143, 'PEACOCK COFFEE', 'JL PALAGAN TENTARA PELAJAR 61 C SARIHARJO NGAGLIK', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF ZUNARTO/BAM RISKA/STARKLIK/GMJ', '', '', '', '', '0000-00-00', '125242905', '2022-06-15', '02742880215', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(144, 'PT YOGYA TEMBAKAU INDONESIA', 'JL IMOGIRI KM 4 BANGUNHARJO SEWON', 'BANTUL', 'DBS', 'WIRELINE', '', '0', 0, '', 'SF ADIN/BAM VITA/STARKLIK/GMJ', '', '', '', '', '0000-00-00', '125238075', '2022-06-15', '02742870404', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(145, 'JOGJA ONE PARK', 'JL LAKSDA ADISUCIPTO KM 8,5 MAGUWOHARJO DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ANTON/BAM VITA/MANUAL/ADI KARYA KOMUNIKA', '', '', '', '', '0000-00-00', '124713725', '2023-06-15', '02742800931', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(146, 'JOGJA ONE PARK', 'JL LAKSDA ADISUCIPTO KM 8,5 MAGUWOHARJO DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ANTON/BAM VITA/MANUAL/ADI KARYA KOMUNIKA', '', '', '', '', '0000-00-00', '125071375', '2023-06-15', '02742800932', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(147, 'JOGJA ONE PARK', 'JL LAKSDA ADISUCIPTO KM 8,5 MAGUWOHARJO DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ANTON/BAM VITA/MANUAL/ADI KARYA KOMUNIKA', '', '', '', '', '0000-00-00', '125077505', '2023-06-15', '02742800933', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(148, 'JOGJA ONE PARK', 'JL LAKSDA ADISUCIPTO KM 8,5 MAGUWOHARJO DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ANTON/BAM VITA/MANUAL/ADI KARYA KOMUNIKA', '', '', '', '', '0000-00-00', '125092055', '2023-06-15', '02742800934', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(149, 'JOGJA ONE PARK', 'JL LAKSDA ADISUCIPTO KM 8,5 MAGUWOHARJO DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ANTON/BAM VITA/MANUAL/ADI KARYA KOMUNIKA', '', '', '', '', '0000-00-00', '125115415', '2023-06-15', '02742800935', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(150, 'JOGJA ONE PARK', 'JL LAKSDA ADISUCIPTO KM 8,5 MAGUWOHARJO DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF ANTON/BAM VITA/MANUAL/ADI KARYA KOMUNIKA', '', '', '', '', '0000-00-00', '125115835', '2023-06-15', '02742800936', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(151, 'PT GREATECH ARTANINDO', 'JL RING ROAD UTARA MAGUWOHARJO DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF SUKADI/BUND/PANGGIH', '', '', '', '', '0000-00-00', '125441175', '2023-06-15', '02744477811', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(152, 'SUMBER BARU PERKASA U/ GENERALI', 'Rumah Toko SUMBER BARU SQUARE II/ KAV L SENDANG ADI MLATI', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF SUKADI/BUND/IKR TA', '', '', '', '', '0000-00-00', '125389335', '2023-06-15', '02748609035', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(153, 'SUMBER BARU PERKASA U/ GENERALI', 'Rumah Toko SUMBER BARU SQUARE II/ KAV L SENDANG ADI MLATI', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF SUKADI/BUND/IKR TA', '', '', '', '', '0000-00-00', '125498905', '2023-06-15', '02748609036', 0, '', '', '', 'progress', '', '', '', '', '', ''),
(154, 'Ny NUR AMALIA U/ RUKO', 'JL  IBU RUSWO 01 PANEMBAHAN KRATON', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF DWI GMJ/BUND/STRAKLIK/IKR GMJ', '', '', '', '', '0000-00-00', '125912165', '2024-06-15', '2742870411', 0, '', '', '', '', '', '', '', '', '', ''),
(155, 'Ny NUR AMALIA U/ RUKO', 'JL  IBU RUSWO 01 PANEMBAHAN KRATON', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF DWI GMJ/BUND/STRAKLIK/IKR GMJ', '', '', '', '', '0000-00-00', '125919185', '2024-06-15', '2742870412', 0, '', '', '', '', '', '', '', '', '', ''),
(156, 'YAYASAN MATARAM/ UNIV WIDYA MATARAM', 'Kompl DALEM MANGKUBUMEN KT III 237 KADIPATEN KRATON', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 0, '', 'SF ADIN/BAM MILA/NOKES/STARKLIK/GMJ', '', '', '', '', '0000-00-00', '126294465', '2026-06-15', '02742870417', 0, '', '', '', '', '', '', '', '', '', ''),
(157, 'SMK KESEHATAN WONOSARI', 'JL NUSANTARA 12 KEPEK WONOSARI', 'GUNUNGKIDUL', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF WURI/BAM UMI/NOKES/MANUAL/TA', '', '', '', '', '0000-00-00', '126699905', '2029-06-15', '02743950675', 0, '', '', '', '', '', '', '', '', '', ''),
(158, 'PT WEB MEDIA TECHNOLOGY INDONESIA', 'JL MONJALI 182 COKRODININGRATAN JETIS', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF ADIN/GPON/MANUAL', '', '', '', '', '0000-00-00', '126969145', '2029-06-15', '2746429833', 0, '', '', '', '', '', '', '', '', '', ''),
(159, 'STUDENT CUSTLE APARTMENT', 'JL RAYA SETURAN CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM VITA/GPON/MANUAL/GMJ', '', '', '', '', '0000-00-00', '126708415', '2029-06-15', '2746429841', 0, '', '', '', '', '', '', '', '', '', ''),
(160, 'STUDENT CUSTLE APARTMENT', 'JL RAYA SETURAN CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM VITA/GPON/MANUAL/GMJ', '', '', '', '', '0000-00-00', '126709865', '2029-06-15', '2746429842', 0, '', '', '', '', '', '', '', '', '', ''),
(161, 'STUDENT CUSTLE APARTMENT', 'JL RAYA SETURAN CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM VITA/GPON/MANUAL/GMJ', '', '', '', '', '0000-00-00', '126710755', '2029-06-15', '2746429843', 0, '', '', '', '', '', '', '', '', '', ''),
(162, 'STUDENT CUSTLE APARTMENT', 'JL RAYA SETURAN CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM VITA/GPON/MANUAL/GMJ', '', '', '', '', '0000-00-00', '126712315', '2029-06-15', '2746429844', 0, '', '', '', '', '', '', '', '', '', ''),
(163, 'STUDENT CUSTLE APARTMENT', 'JL RAYA SETURAN CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM VITA/GPON/MANUAL/GMJ', '', '', '', '', '0000-00-00', '126714235', '2029-06-15', '2746429845', 0, '', '', '', '', '', '', '', '', '', ''),
(164, 'PT.WIJAYA DISTRIBUSI', 'JL COKROWIJAYAN BANYURADEN GAMPING', 'SLEMAN', 'DBS', 'WIRELINE', '', 'MAAP 7 KLEM 1', 48100, '', 'TAM SBY', '', '', '', '', '0000-00-00', '118791925', '2022-05-15', '0274624866', 0, '', '', '', '', '', '', '', '', '', ''),
(165, 'PT.WIJAYA DISTRIBUSI', 'JL COKROWIJAYAN BANYURADEN GAMPING', 'SLEMAN', 'DBS', 'WIRELINE', '', '', 48100, '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0274624937', 0, '', '', '', '', '', '', '', '', '', ''),
(166, 'HOTEL TUNE', 'JL GEDONG KUNING REJOWINANGUN KOTAGEDE', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF SUKADI/BUND/IKR LINTAS', '', '', '', '', '0000-00-00', '125494855', '2029-06-15', '2744438692', 0, '', '', '', '', '', '', '', '', '', ''),
(167, 'HOTEL TUNE', 'JL GEDONG KUNING REJOWINANGUN KOTAGEDE', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF SUKADI/BUND/IKR LINTAS', '', '', '', '', '0000-00-00', '125495685', '2029-06-15', '2744438828', 0, '', '', '', '', '', '', '', '', '', ''),
(168, 'FOTO DIGITAL', 'JL KUSUMANEGARA 141 B MUJA-MUJU UMBUL HARJO', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF SUKADI/NO BUND/IKR PANGGIH', '', '', '', '', '0000-00-00', '127078445', '2030-06-15', '2745306116', 0, '', '', '', '', '', '', '', '', '', ''),
(169, 'FOTO DIGITAL', 'JL KUSUMANEGARA 141 B MUJA-MUJU UMBUL HARJO', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF SUKADI/BUND/IKR PANGGIH', '', '', '', '', '0000-00-00', '127079195', '2030-06-15', '2745306226', 0, '', '', '', '', '', '', '', '', '', ''),
(170, 'PT SUMBER BARU RESIDENT U/ PETRUS TRIAJI MARDIKO', 'Perumahan LAGUNA SPRING KAV B-6 BANGUNTAPAN', 'BANTUL', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF AYU/BAM VITA/STARKLIK', '', '', '', '', '0000-00-00', '127366695', '2030-06-15', '2742840190', 0, '', '', '', '', '', '', '', '', '', ''),
(171, 'PT KUSUMA SANDANG MEKARJAYA', 'PASEKAN BALECATUR GAMPING', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF SUKADI/NO BUNDL/IKR LINTAS', '', '', '', '', '0000-00-00', '106434875', '2001-04-15', '02746498370', 0, '', '', '', '', '', '', '', '', '', ''),
(172, 'TYASNING WIDIASTUTI', 'PERUMAHAN PONDOK PERMAI KAV A-10 PANGGUNGHARJO SEWON ', 'BANTUL', 'DBS', 'WIRELINE', '', '0', 28700, '', 'SF AYU/BAM VITA/GPON/STRAKLIK', '', '', '', '', '0000-00-00', '108138305', '2008-04-15', '02742870089', 0, '', '', '', '', '', '', '', '', '', ''),
(173, 'PT KAWAN SEJATI KREASINDO', 'Ruko BABARSARI CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF SUKADI/IKR TA/GPON/TA-KIRNO', '', '', '', '', '0000-00-00', '112143575', '2022-04-15', '02744932323', 0, '', '', '', '', '', '', '', '', '', ''),
(174, 'PT KAWAN SEJATI KREASINDO', 'Ruko BABARSARI CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '', 48100, '', 'SF SUKADI/IKR TA/GPON/TA-KIRNO', '', '', '', '', '0000-00-00', '112145145', '2022-04-15', '02744932191', 0, '', '', '', '', '', '', '', '', '', ''),
(175, 'PT KAWAN SEJATI KREASINDO', 'Ruko BABARSARI CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF SUKADI/IKR TA/GPON/TA-KIRNO', '', '', '', '', '0000-00-00', '112145805', '2022-04-15', '02744932192', 0, '', '', '', '', '', '', '', '', '', ''),
(176, 'PT KAWAN SEJATI KREASINDO', 'Ruko BABARSARI CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '', 48100, '', 'SF SUKADI/IKR TA/GPON/TA-KIRNO', '', '', '', '', '0000-00-00', '112393905', '2022-04-15', '02744932193', 0, '', '', '', '', '', '', '', '', '', '');
INSERT INTO `isiska` (`No`, `Cust_Name`, `Cust_Ship`, `City`, `Customer_Segmen`, `Product`, `BW_Packet`, `One_Time_Charge`, `Abonemen`, `Sales_by`, `AM_Name`, `AM_Phone`, `Customer_Name`, `Customer_Phone`, `Contract_Date`, `Due_Date_Live`, `Tech_Data`, `Input_Date`, `Direct_Number`, `Speedy_Number`, `Date_of_Progress`, `ISiska_Status`, `Tenoss_Status`, `Status`, `Additional_Information`, `Follow_up`, `Unit_in_Charge`, `PIC_Name`, `PIC_Number`, `Put_in_Service_Date`) VALUES
(177, 'PT KAWAN SEJATI KREASINDO', 'Ruko BABARSARI CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '', 48100, '', 'SF SUKADI/IKR TA/GPON/TA-KIRNO', '', '', '', '', '0000-00-00', '112395895', '2022-04-15', '02744932194', 0, '', '', '', '', '', '', '', '', '', ''),
(178, 'PT KAWAN SEJATI KREASINDO', 'Ruko BABARSARI CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '', 48100, '', 'SF SUKADI/IKR TA/GPON/TA-KIRNO', '', '', '', '', '0000-00-00', '112398155', '2022-04-15', '02744932195', 0, '', '', '', '', '', '', '', '', '', ''),
(179, 'PT VIVA GENERIK', 'JL MENTERI SUPENO 61 PANDEYAN UMBUL HARJO', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF WIWIN/BUNDL/IKR LINTAS', '', '', '', '', '0000-00-00', '127344035', '2002-07-15', '274387160', 0, '', '', '', '', '', '', '', '', '', ''),
(180, 'TOKO DEWANI', 'JL PANDEYAN 7 PANDEYAN UMBUL HARJO', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF SUKADI/BUND/IKR LINTAS', '', '', '', '', '0000-00-00', '127236735', '2002-07-15', '274373553', 0, '', '', '', '', '', '', '', '', '', ''),
(181, 'CV MEDIA KOMUNIKASI', 'JL TRI DHARMA 517 BACIRO GONDOKUSUMAN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF JOKO P2TEL/BUND/IKR P2TEL', '', '', '', '', '0000-00-00', '120086695', '2003-07-15', '274633398', 0, '', '', '', '', '', '', '', '', '', ''),
(182, 'CV MEDIA KOMUNIKASI', 'Kampung KERSAN 02 TIRTONIRMOLO KASIHAN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF JOKO P2TEL/BUND/IKR P2TEL', '', '', '', '', '0000-00-00', '128054935', '2003-07-15', '2744398133', 0, '', '', '', '', '', '', '', '', '', ''),
(183, 'PT MILENIUM DANATAMA GROUP', 'JL LAKSDA ADI SUCIPTO 27 DEMANGAN GONDOKUSUMAN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF SUKADI/NO BUND/IKR P2TEL', '', '', '', '', '0000-00-00', '128074505', '2003-07-15', '274558475', 0, '', '', '', '', '', '', '', '', '', ''),
(184, 'PT FORMULA LAND U/ MEITA GALIH PUSPITA', 'KRONGGAHAN KAV E-54 TRIHANGGO GAMPING', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 28700, '', 'SF AYU/BAM VITA/STARKLIK', '', '', '', '', '0000-00-00', '128696265', '2004-07-15', '2742880237', 0, '', '', '', '', '', '', '', '', '', ''),
(185, 'PT FORMULA LAND U/ IDA KUSUMANINGRUM', 'KRONGGAHAN KAV F-61 TRIHANGGO GAMPING', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 28700, '', 'SF AYU/BAM VITA/STARKLIK', '', '', '', '', '0000-00-00', '128701675', '2004-07-15', '2742880238', 0, '', '', '', '', '', '', '', '', '', ''),
(186, 'PT FORMULA LAND U/ SITI NURUL DIAH ANGGRAINI', 'KRONGGAHAN KAV F-64 TRIHANGGO GAMPING', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 28700, '', 'SF AYU/BAM VITA/STARKLIK', '', '', '', '', '0000-00-00', '', '2004-07-15', '2742880239', 0, '', '', '', '', '', '', '', '', '', ''),
(187, 'PT FORMULA LAND U/ TEDDY H KUSUMA', 'KRONGGAHAN KAV H-107 TRIHANGGO GAMPING', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 28700, '', 'SF AYU/BAM VITA/STARKLIK', '', '', '', '', '0000-00-00', '128724255', '2004-07-15', '2742880240', 0, '', '', '', '', '', '', '', '', '', ''),
(188, 'PT FORMULA LAND U/ JHON FRISCO R PURBA', 'KRONGGAHAN KAV G-84 TRIHANGGO GAMPING', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 28700, '', 'SF AYU/BAM VITA/STARKLIK', '', '', '', '', '0000-00-00', '130896585', '2015-07-15', '2742880269', 0, '', '', '', '', '', '', '', '', '', ''),
(189, 'PT INDONESIA MEDIA TEKNISI', 'JL KABUPATEN KM 1 NOGOTIRTO GAMPING', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF SUKADI/BUND/IKR PANGGIH', '', '', '', '', '0000-00-00', '127351875', '2006-07-15', '2746415398', 0, '', '', '', '', '', '', '', '', '', ''),
(190, 'AKADEMI KOMUNIKASI INDONESIA (AKINDO)', 'JL LAKSDA ADI SUCIPTO 279 CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF SUKADI/NO BUND/IKR PANGGIH', '', '', '', '', '0000-00-00', '129030655', '2006-07-15', '2744533864', 0, '', '', '', '', '', '', '', '', '', ''),
(191, 'YANDITO U/ TIMUR JAYA MOTOR', 'JL BABARSARI  TB XIV 2 D CATURTUNGGAL DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF SUKADI/NO BUND/IKR PANGGIH', '', '', '', '', '0000-00-00', '129075905', '2006-07-15', '274488981', 0, '', '', '', '', '', '', '', '', '', ''),
(192, 'YUDITH SEPTIANTO', 'BUGISAN SELATAN TIRTONIRMOLO KASIHAN', 'BANTUL', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF YANI GMJ/BUNDL/IKR LINTAS', '', '', '', '', '0000-00-00', '129159405', '2007-07-15', '274370444', 0, '', '', '', '', '', '', '', '', '', ''),
(193, 'PT BHUMI MERAPI ERATAMA U/ MAIN KITCHEN', 'PERUM PESONA MERAPI REAL ESTAT SADONOHARJO NGAGLIK', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'BAM VITA/STARKLIK/', '', '', '', '', '0000-00-00', '129650515', '2008-07-15', '2742830584', 0, '', '', '', '', '', '', '', '', '', ''),
(194, 'PT BHUMI MERAPI ERATAMA U/ POS DEPAN', 'PERUM PESONA MERAPI REAL ESTAT SADONOHARJO NGAGLIK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM VITA/MANUAL/', '', '', '', '', '0000-00-00', '129604055', '2008-07-15', '2742830590', 0, '', '', '', '', '', '', '', '', '', ''),
(195, 'PT BHUMI MERAPI ERATAMA U/ POS BELAKANG', 'PERUM PESONA MERAPI REAL ESTAT SADONOHARJO NGAGLIK', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'BAM VITA/MANUAL/', '', '', '', '', '0000-00-00', '129605345', '2008-07-15', '2742830657', 0, '', '', '', '', '', '', '', '', '', ''),
(196, 'CUPPAJO CAFE', 'JL SELOKAN MATARAM II / 8 CONDONGCATUR DEPOK', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 0, '', 'SF ZUNARTO/BAM RISKA/MANUAL/GMJ', '', '', '', '', '0000-00-00', '129838885', '2009-07-15', '2746429780', 0, '', '', '', '', '', '', '', '', '', ''),
(197, 'Tn MOHAMMAD NADJIB', 'JL JOGOKARYAN 82 MANTRIJERON MANTRIJERON', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF SUGIONO/NO BUNDL/IKR CATUBUANA', '', '', '', '', '0000-00-00', '130029825', '2009-07-15', '274372567', 0, '', '', '', '', '', '', '', '', '', ''),
(198, 'Tn HENDY BAKRIM', 'JL MENTERI SUPENO 48 MANTRIJERON MANTRIJERON', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF SUGIONO/NO BUNDL/IKR CATUBUANA', '', '', '', '', '0000-00-00', '129727235', '2009-07-15', '274386858', 0, '', '', '', '', '', '', '', '', '', ''),
(199, 'THOR WARNET', 'JL KALIURANG KM 13,5 SARIHARJO NGAGLIK', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 0, '', 'BAM RISKA SURYANI/NOKES/MANUAL', '', '', '', '', '0000-00-00', '130047405', '2009-07-15', '2744469531', 0, '', '', '', '', '', '', '', '', '', ''),
(200, 'PT KAIDI INDOJAYA U/ DJOGJA CELL GROUP', 'JL KATAMSO JOGJATRONIK 75-77 PRAWIRODIRJAN GONDOMANAN', 'KOTA YOGYAKARTA', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF SODARI/BAM UMI/BUND/', '', '', '', '', '0000-00-00', '129720065', '2010-07-15', '2744530255', 0, '', '', '', '', '', '', '', '', '', ''),
(201, 'MAESINDO INDONESIA', 'Kampung KARANG JATI BANGUNJIWO KASIHAN', 'BANTUL', 'DBS', 'WIRELINE', '', '0', 0, '', 'SF TAM DEWI/BAM RISKA/STARKLIK', '', '', '', '', '0000-00-00', '130820665', '2013-07-15', '2742870496', 0, '', '', '', '', '', '', '', '', '', ''),
(202, 'PT KARYA SEHATI UTAMA', 'Perumahan CUPUWATU JL SOLO KM 11,8 PURWOMARTANI KALASAN', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF ANTON GMJ/BAM VITA/MANUAL/GMJ', '', '', '', '', '0000-00-00', '130941905', '2015-07-15', '2742850061', 0, '', '', '', '', '', '', '', '', '', ''),
(203, 'PT KARYA SEHATI UTAMA', 'Perumahan CUPUWATU JL SOLO KM 11,8 PURWOMARTANI KALASAN', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF ANTON GMJ/BAM VITA/MANUAL/GMJ', '', '', '', '', '0000-00-00', '130942315', '2015-07-15', '2742850062', 0, '', '', '', '', '', '', '', '', '', ''),
(204, 'PT KARYA SEHATI UTAMA', 'Perumahan CUPUWATU JL SOLO KM 11,8 PURWOMARTANI KALASAN', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF ANTON GMJ/BAM VITA/MANUAL/GMJ', '', '', '', '', '0000-00-00', '130973485', '2015-07-15', '2742850063', 0, '', '', '', '', '', '', '', '', '', ''),
(205, 'PT KARYA SEHATI UTAMA', 'Perumahan CUPUWATU JL SOLO KM 11,8 PURWOMARTANI KALASAN', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF ANTON GMJ/BAM VITA/MANUAL/GMJ', '', '', '', '', '0000-00-00', '130978395', '2015-07-15', '2742850064', 0, '', '', '', '', '', '', '', '', '', ''),
(206, 'PT KARYA SEHATI UTAMA', 'Perumahan CUPUWATU JL SOLO KM 11,8 PURWOMARTANI KALASAN', 'SLEMAN', 'DBS', 'WIRELINE', '', '0', 48100, '', 'SF ANTON GMJ/BAM VITA/MANUAL/GMJ', '', '', '', '', '0000-00-00', '130978935', '2015-07-15', '2742850065', 0, '', '', '', '', '', '', '', '', '', ''),
(207, 'PT ORINDO ALAM AYU', 'JL MAGELANG KM 6,2 Gd. 412 SINDUADI MLATI', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF AGUNG', '', '', '', '', '0000-00-00', '130970685', '2015-07-15', '2742922851', 0, '', '', '', '', '', '', '', '', '', ''),
(208, 'PT ORINDO ALAM AYU', 'JL MAGELANG KM 6,2 Gd. 412 SINDUADI MLATI', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF AGUNG', '', '', '', '', '0000-00-00', '130981705', '2015-07-15', '2742922852', 0, '', '', '', '', '', '', '', '', '', ''),
(209, 'PT ORINDO ALAM AYU', 'JL MAGELANG KM 6,2 Gd. 412 SINDUADI MLATI', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF AGUNG', '', '', '', '', '0000-00-00', '130982245', '2015-07-15', '2742922853', 0, '', '', '', '', '', '', '', '', '', ''),
(210, 'PT ORINDO ALAM AYU', 'JL MAGELANG KM 6,2 Gd. 412 SINDUADI MLATI', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF AGUNG', '', '', '', '', '0000-00-00', '130983135', '2015-07-15', '2742922854', 0, '', '', '', '', '', '', '', '', '', ''),
(211, 'PT ORINDO ALAM AYU', 'JL MAGELANG KM 6,2 Gd. 412 SINDUADI MLATI', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF AGUNG', '', '', '', '', '0000-00-00', '130983945', '2015-07-15', '2742922855', 0, '', '', '', '', '', '', '', '', '', ''),
(212, 'PT ORINDO ALAM AYU', 'JL MAGELANG KM 6,2 Gd. 412 SINDUADI MLATI', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF AGUNG', '', '', '', '', '0000-00-00', '130984945', '2015-07-15', '2742922856', 0, '', '', '', '', '', '', '', '', '', ''),
(213, 'PT ORINDO ALAM AYU', 'JL MAGELANG KM 6,2 Gd. 412 SINDUADI MLATI', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF AGUNG', '', '', '', '', '0000-00-00', '130985345', '2015-07-15', '2742922857', 0, '', '', '', '', '', '', '', '', '', ''),
(214, 'PT ORINDO ALAM AYU', 'JL MAGELANG KM 6,2 Gd. 412 SINDUADI MLATI', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF AGUNG', '', '', '', '', '0000-00-00', '130985705', '2015-07-15', '2742922858', 0, '', '', '', '', '', '', '', '', '', ''),
(215, 'PT ORINDO ALAM AYU', 'JL MAGELANG KM 6,2 Gd. 412 SINDUADI MLATI', 'SLEMAN', 'DBS', 'WIRELINE', '', '350000', 48100, '', 'SF AGUNG', '', '', '', '', '0000-00-00', '130986075', '2015-07-15', '2742922859', 0, '', '', '', '', '', '', '', '', '', ''),
(218, 'Cust_Name', 'Cust_Ship', 'City', 'Customer_S', 'Product', 'BW_Packet', 'One_Time_Charge', 0, 'Sales_by', 'AM_Name', 'AM_Phone', 'Customer_Name', 'Customer_Phone', 'Contract_D', '0000-00-00', 'Tech_Data', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', ''),
(219, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', 'Direct_Number', 0, 'Date_of_Progress', 'I-Siska_Status', 'Tenoss_Status', 'Status', 'Additional_Information', 'Follow_up', 'Unit_in_Charge', 'PIC_Name', 'PIC_Number', 'Put_in_Service_Date');

-- --------------------------------------------------------

--
-- Table structure for table `userinputer`
--

CREATE TABLE IF NOT EXISTS `userinputer` (
  `NIK` int(6) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinputer`
--

INSERT INTO `userinputer` (`NIK`, `Nama`, `password`) VALUES
(621166, 'Temuati', 'telkom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amanager`
--
ALTER TABLE `amanager`
  ADD PRIMARY KEY (`NIK_AM`);

--
-- Indexes for table `isiska`
--
ALTER TABLE `isiska`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `userinputer`
--
ALTER TABLE `userinputer`
  ADD PRIMARY KEY (`NIK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isiska`
--
ALTER TABLE `isiska`
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=220;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
