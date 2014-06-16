-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2014 at 09:43 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `PressRelease`
--

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE IF NOT EXISTS `Posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `post` longtext NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `summary` varchar(1000) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `companyEmail` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `Posts`
--

INSERT INTO `Posts` (`id`, `title`, `post`, `date`, `user_id`, `summary`, `companyName`, `companyEmail`) VALUES
(5, 'Election Update ', ' There are many PM candidates, but Faking News has selected three of them, based on Internet search keywords. Find out what they are expected to do, and what they could end up doing if they become the Prime Minister of India:', '2014-03-19', 1, ' What will Modi, Kejriwal, and Rahul do if they become PM', 'FakingNews', 'mukul@abc.com'),
(10, 'Stupid Politicians  ', '  After losing the Delhi assembly elections badly, Sheila Dixit has retired from state politics and has been given a post-retirement holiday plan in Kerala.\r\nThe former Chief Minister of Delhi took over as the Governor of Kerala today, and undertook some activities to understand the local culture better.\r\nHere are some exclusive pictures accessed by Faking News:', '2014-03-10', 8, ' Exclusive pictures of Sheila Dixit chilling in Kerala', 'GARG', 'FF@FF.com'),
(12, 'Transcript of journalists    ', '    Date: 30th May 2014\r\nGeneral elections in India are over and AAP has formed the government with the support of 47 other like-minded parties.\r\nArvind Kejriwal has taken bachcho ki oath of Prime Minister and as promised, has sent top Indian journalists to Tihar jail for airing news against AAP corruption and paid news.\r\nSecret camera and microphone installed in the jail (installed by the government everywhere as hidden cameras ensure honesty) recorded their conversation as it happened.\r\nBelow is the transcript of their conversation accessed by Faking News:\r\nJail\r\nThe exclusive pictures of journalists\r\nBarkha Dutt: We are coming to you live from the lawns of The White House.\r\nRajdeep Sardesai: Barkha, News over noise, sense over sensationalism, truth over hype. We are in Tihar right now, not The White House.\r\nBarkha Dutt: We are live here in the lawns of Tihar…\r\nRajdeep Sardesai: Barkha.. Barkha.. What lawn? Forget the lawn.. We are in our cell in Tihar!\r\nSagarika Ghose: Oh forget her lawn. Tell me, do we have internet here?\r\nRajdeep Sardesai: Internet? Why?', '2014-03-27', 8, '  Transcript of journalists chatting after being arrested for paid news', 'FakingNews', 'mukul@abc.com'),
(15, 'News of the day', 'abc', '2014-03-26', 9, 'abc', 'mukul', 'garg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `account_type` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`,`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `city`, `state`, `country`, `account_type`) VALUES
(1, 'a', 'a', 'fremont', 'CA', 'USA', 0),
(8, 'b', 'b', 'n', 'b', 'b', 1),
(9, 'admin', 'admin', 'Fremont', 'CA', 'USA', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
