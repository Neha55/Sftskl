-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2014 at 06:23 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `update_activity_ty`
--

-- --------------------------------------------------------

--
-- Table structure for table `update_ty`
--

CREATE TABLE IF NOT EXISTS `update_ty` (
  `rollno` int(11) DEFAULT NULL,
  `student_name` text,
  `topic` text,
  `course_incharge` text,
  `conducted_by` text,
  `date` text,
  `time` text,
  `remark` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_ty`
--

INSERT INTO `update_ty` (`rollno`, `student_name`, `topic`, `course_incharge`, `conducted_by`, `date`, `time`, `remark`) VALUES
(10, 'CHIDRAWAR ARJUN DILIPRAO ', 'xyz', 'C.L.Shinde ', 'A.M.Khot ', '20-5-2014', '08:00 AM', 'poor grammer'),
(3, 'BHUTADA SHUBHAM SHIRISHKUMAR ', 'abc', 'C.L.Shinde ', 'Admin ', '20-5-2014', '08:00 AM', 'good'),
(31, 'SALUNKHE PRANJALI PRAKASH ', 'whatsapp', 'A.J.Umbarkar ', 'A.M.Khot ', '12-3-2014', '08:00 AM', 'good'),
(16, 'RAI VAIBHAV RAMPRAVESH ', 'RAI', 'G.V.Deshpande ', 'Admin ', '2-5-2014', '08:00 AM', 'GOOD');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
