-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2014 at 06:21 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teacher`
--

-- --------------------------------------------------------

--
-- Table structure for table `t1`
--

CREATE TABLE IF NOT EXISTS `t1` (
  `Name` varchar(20) DEFAULT NULL,
  `Username` varchar(20) NOT NULL DEFAULT '',
  `Password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1`
--

INSERT INTO `t1` (`Name`, `Username`, `Password`) VALUES
('Admin', 'admin', 'admin@IT'),
('S.P.Arutwar', 'arutwarsp', 'arutwarsp'),
('U.B.Chavan', 'chavanub', 'chavanub'),
('G.V.Deshpande', 'deshpandegv', 'deshpandegv'),
('P.M.Gouraj', 'gourajpm', 'gourajpm'),
('D.M.Kaulgud', 'kaulguddm', 'kaulguddm'),
('P.K.Kharat', 'kharatpk', 'kharatpk'),
('A.M.Khot', 'khotam', 'khotam'),
('Dr.D.B.Kulkarni', 'kulkarnidb', 'kulkarnidb'),
('R.A.Mestri', 'mestrira', 'mestrira'),
('H.G.Samant', 'samanthg', 'samanthg'),
('B.S.Shetty', 'shettybs', 'shettybs'),
('C.L.Shinde', 'shindecl', 'shindecl'),
('Y.L.Talekar', 'talekaryl', 'talekaryl'),
('A.J.Umbarkar', 'umbarkaraj', 'umbarkaraj'),
('A.A.Urunkar', 'urunkaraa', 'urunkaraa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
