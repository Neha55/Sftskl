-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2014 at 06:22 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `timetable_ty`
--

-- --------------------------------------------------------

--
-- Table structure for table `tt_ty`
--

CREATE TABLE IF NOT EXISTS `tt_ty` (
  `day` text,
  `course_incharge` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tt_ty`
--

INSERT INTO `tt_ty` (`day`, `course_incharge`) VALUES
('Monday', 'Dr.D.B.Kulkarni'),
('Tuesday', 'C.L.Shinde'),
('Wednesday', 'A.J.Umbarkar'),
('Thursday', 'D.M.Kaulgud'),
('Friday', 'G.V.Deshpande'),
('Saturday', 'xyz');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
