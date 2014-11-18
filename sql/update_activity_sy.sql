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
-- Database: `update_activity_sy`
--

-- --------------------------------------------------------

--
-- Table structure for table `update_sy`
--

CREATE TABLE IF NOT EXISTS `update_sy` (
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
-- Dumping data for table `update_sy`
--

INSERT INTO `update_sy` (`rollno`, `student_name`, `topic`, `course_incharge`, `conducted_by`, `date`, `time`, `remark`) VALUES
(4, 'PATIL PRANAV DADASAHEB ', 'abc', 'Y.L.Talekar ', 'A.M.Khot ', '7-5-2014', '10:15 AM', ''),
(1, 'PATIL AKSHAY BALASAHEB ', 'xyz', 'H.G.Samant ', 'Admin ', '13-5-2014', '10:15 AM', 'average'),
(32, 'DUDHAL MANISHA PANDURANG ', 'abc', 'H.G.Samant ', 'A.M.Khot ', '8-4-2014', '10:15 AM', 'good'),
(7, 'DRAVID PUSHKAR SUNEEL ', 'SSB', 'Y.L.Talekar ', 'Admin ', '7-5-2014', '10:15 AM', 'good'),
(31, 'SAPATE ANIKET RAVINDRA ', 'ytr', 'R.A.Mestri ', 'A.M.Khot ', '16-5-2014', '10:15 AM', 'good');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
