-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2017 at 12:21 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `campbot`
--
CREATE DATABASE IF NOT EXISTS `campbot` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `campbot`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_note`
--

CREATE TABLE IF NOT EXISTS `tbl_note` (
  `idn` int(10) NOT NULL AUTO_INCREMENT,
  `notify` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idn`),
  UNIQUE KEY `idn` (`idn`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_note`
--

INSERT INTO `tbl_note` (`idn`, `notify`) VALUES
(1, 'Wanted....'),
(2, 'KMAT Notification 2017'),
(3, 'B.Tech Admission 2017- Enquiry'),
(4, 'Viswajyothi secured the prize for &ldquo;Best Innovative Project of Techfest 2017&rdquo; in KETCON Techfest'),
(5, 'Viswajyothi has been awarded the &lsquo;Distinguished College&rsquo; at the CSI Text Next India 2017-Awards to Academia'),
(6, 'Dr. K. K. Rajan (Dean &ndash; Industry Institute Interaction Cell) has been nominated as one among the three directors of the Board of Nuclear Power Corporation of India Limited (NPCIL)'),
(7, 'Viswajyothi secured a certificate and citation from ISTE Kerala chapter for having maximum number of new members in the academic year 2015-2016'),
(8, 'Viswajyothi Secured FIRST position in M.G. University 7th Semester B.Tech Examination, Nov-2015'),
(9, 'Congratulations to the 78 brand ambassadors of Viswajyothi who secured placement at Infosys'),
(10, '&ldquo;ASSISTANCE FOR RESEARCH FUNDING&rdquo; PROGRAMME OF VRC'),
(11, 'Congratulations to University Rank Holders 2015');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_type` tinyint(20) NOT NULL,
  `regno` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `s1attend` int(50) NOT NULL,
  `s1dpresent` int(50) NOT NULL,
  `s4attend` int(50) NOT NULL,
  `s4dpresent` int(50) NOT NULL,
  `s5attend` int(50) NOT NULL,
  `s5dpresent` int(50) NOT NULL,
  `s6attend` int(50) NOT NULL,
  `s6dpresent` int(50) NOT NULL,
  `s7attend` int(50) NOT NULL,
  `s7dpresent` int(50) NOT NULL,
  `s8attend` int(50) NOT NULL,
  `s8dpresent` int(50) NOT NULL,
  `s8dtotal` int(50) NOT NULL,
  `add_no` varchar(50) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_type`, `regno`, `username`, `password`, `date`, `name`, `gender`, `s1attend`, `s1dpresent`, `s4attend`, `s4dpresent`, `s5attend`, `s5dpresent`, `s6attend`, `s6dpresent`, `s7attend`, `s7dpresent`, `s8attend`, `s8dpresent`, `s8dtotal`, `add_no`) VALUES
(1, 3, 13019919, '13rr119', '13rr119', '2017-02-28', 'Akhil Jose', 'male', 96, 0, 94, 0, 94, 0, 90, 0, 92, 0, 83, 54, 59, '13rr119'),
(2, 2, 0, 'staff', 'staff', '2017-02-28', 'Sabhitha Raju', 'female', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(4, 1, 0, 'master', 'master', '2017-02-28', 'Admin - Master', 'male', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(5, 4, 0, 'guard', 'guard', '2017-02-28', 'Guard - Raj', 'male', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(6, 3, 13019918, '13rr118', '13rr118', '2017-04-15', 'Akash Giby', 'male', 95, 0, 88, 0, 87, 0, 82, 0, 82, 0, 73, 0, 0, '13rr119'),
(7, 3, 13019979, '13rr149', '13rr149', '2017-04-15', 'Jose Thankachan', 'male', 95, 0, 89, 0, 86, 0, 83, 0, 86, 0, 82, 43, 57, '13rr149'),
(10, 4, 13020007, '13rr160', '13rr160', '2017-04-18', 'Praveen G', 'male', 98, 0, 91, 0, 90, 0, 87, 0, 88, 0, 81, 51, 58, '13rr160'),
(11, 3, 13020016, '13rr165', '13rr165', '0000-00-00', 'Sebin Paul', 'male', 97, 0, 90, 0, 85, 0, 79, 0, 82, 0, 80, 50, 59, '13rr165'),
(12, 3, 13020017, '13rr166', '13rr166', '0000-00-00', 'Sebin Sunny', 'male', 97, 0, 89, 0, 87, 0, 88, 0, 84, 0, 72, 48, 59, '13rr166'),
(13, 3, 13019993, '13rr155', '13rr155', '0000-00-00', 'Monica Francis', 'female', 97, 0, 95, 0, 87, 0, 89, 0, 87, 0, 76, 47, 59, '13rr155'),
(14, 3, 13019991, '13rr154', '13rr154', '0000-00-00', 'Mintu Mathew', 'female', 100, 0, 96, 0, 94, 0, 95, 0, 94, 0, 85, 54, 59, '13rr154');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
