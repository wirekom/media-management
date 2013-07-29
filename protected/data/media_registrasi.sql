-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2013 at 11:16 AM
-- Server version: 5.5.32-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `media`
--

-- --------------------------------------------------------

--
-- Table structure for table `media_registrasi`
--

CREATE TABLE IF NOT EXISTS `media_registrasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `passport_num` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `company_address` text NOT NULL,
  `company_desc` text NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `mobile_num` varchar(255) NOT NULL,
  `photo_graph` varchar(255) NOT NULL,
  `letter_of_assignment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `media_registrasi`
--

INSERT INTO `media_registrasi` (`id`, `first_name`, `last_name`, `passport_num`, `job_title`, `media_name`, `company_address`, `company_desc`, `email_address`, `mobile_num`, `photo_graph`, `letter_of_assignment`) VALUES
(1, 'widodo', 'pangestu', '224324', 'programmer', 'test', 'testing', 'testing', 'wid.pangestu@gmail.com', '08089809898', 'test', 'test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
