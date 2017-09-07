-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2017 at 08:05 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorshub`
--
CREATE DATABASE IF NOT EXISTS `tutorshub` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tutorshub`;

-- --------------------------------------------------------

--
-- Table structure for table `searchinfo`
--

DROP TABLE IF EXISTS `searchinfo`;
CREATE TABLE IF NOT EXISTS `searchinfo` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Availability` tinyint(1) DEFAULT NULL,
  `PrefferedLocation` varchar(300) DEFAULT NULL,
  `PrefferedSubjects` varchar(300) DEFAULT NULL,
  `PrefferedClasses` varchar(300) DEFAULT NULL,
  `PrefferedMedium` varchar(50) DEFAULT NULL,
  `ExpextedSalary` double DEFAULT NULL,
  PRIMARY KEY (`SerialNo`),
  KEY `UserId` (`UserId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searchinfo`
--

INSERT INTO `searchinfo` (`SerialNo`, `UserId`, `Gender`, `Availability`, `PrefferedLocation`, `PrefferedSubjects`, `PrefferedClasses`, `PrefferedMedium`, `ExpextedSalary`) VALUES
(1, 1, '', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `UserImage` varchar(10000) DEFAULT NULL,
  `MemberSince` date NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Email`, `Password`, `UserImage`, `MemberSince`) VALUES
(1, NULL, 'a@a.com', 'a', NULL, '2017-09-07'),
(2, NULL, 'b@b.com', 'b', NULL, '2017-09-07');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `searchinfo`
--
ALTER TABLE `searchinfo`
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
