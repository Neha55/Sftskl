-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2014 at 10:33 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teacher`
--
CREATE DATABASE IF NOT EXISTS `teacher` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `teacher`;

-- --------------------------------------------------------

--
-- Table structure for table `t1`
--

CREATE TABLE IF NOT EXISTS `t1` (
  `Name` varchar(20) DEFAULT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1`
--

INSERT INTO `t1` (`Name`, `Username`, `Password`) VALUES
('Dr.D.B.Kulkarni', 'kulkarnidb', 'kulkarnidb'),
('P.K.Kharat', 'kharatpk', 'kharatpk'),
('U.B.Chavan', 'chavanub', 'chavanub'),
('B.S.Shetty', 'shettybs', 'shettybs'),
('A.J.Umbarkar', 'umbarkaraj', 'umbarkaraj'),
('A.M.Khot', 'khotam', 'khotam'),
('R.A.Mestri', 'mestrira', 'mestrira'),
('A.A.Urunkar', 'urunkaraa', 'urunkaraa'),
('C.L.Shinde', 'shindecl', 'shindecl'),
('H.G.Samant', 'samanthg', 'samanthg'),
('Y.L.Talekar', 'talekaryl', 'talekaryl'),
('S.P.Arutwar', 'arutwarsp', 'arutwarsp'),
('P.M.Gouraj', 'gourajpm', 'gourajpm'),
('G.V.Deshpande', 'deshpandegv', 'deshpandegv'),
('D.M.Kaulgud', 'kaulguddm', 'kaulguddm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
