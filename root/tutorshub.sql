-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2017 at 07:21 AM
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
-- Table structure for table `bangla`
--

CREATE TABLE IF NOT EXISTS `bangla` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(10000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  PRIMARY KEY (`SerialNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `biology`
--

CREATE TABLE IF NOT EXISTS `biology` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(10000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  PRIMARY KEY (`SerialNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE IF NOT EXISTS `career` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(10000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  PRIMARY KEY (`SerialNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chemistry`
--

CREATE TABLE IF NOT EXISTS `chemistry` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(10000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  PRIMARY KEY (`SerialNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `english`
--

CREATE TABLE IF NOT EXISTS `english` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(10000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  PRIMARY KEY (`SerialNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `ExamName` varchar(30) NOT NULL,
  PRIMARY KEY (`SerialNo`),
  UNIQUE KEY `ExamName` (`ExamName`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`SerialNo`, `ExamName`) VALUES
(1, 'Bangla'),
(10, 'Biology'),
(7, 'Career'),
(9, 'Chemistry'),
(2, 'English'),
(3, 'HigherMath'),
(6, 'ICT'),
(11, 'Math'),
(12, 'PhysicalExercise'),
(8, 'Physics'),
(5, 'Religion'),
(4, 'SocialScience');

-- --------------------------------------------------------

--
-- Table structure for table `highermath`
--

CREATE TABLE IF NOT EXISTS `highermath` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(10000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  PRIMARY KEY (`SerialNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ict`
--

CREATE TABLE IF NOT EXISTS `ict` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(10000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  PRIMARY KEY (`SerialNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `math`
--

CREATE TABLE IF NOT EXISTS `math` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(10000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  PRIMARY KEY (`SerialNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `physicalexercise`
--

CREATE TABLE IF NOT EXISTS `physicalexercise` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(10000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  PRIMARY KEY (`SerialNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `physics`
--

CREATE TABLE IF NOT EXISTS `physics` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(10000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  PRIMARY KEY (`SerialNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE IF NOT EXISTS `religion` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(10000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  PRIMARY KEY (`SerialNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `searchinfo`
--

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
(1, 1, 'Male', 1, 'Mirpur,Kalsi', 'Bangla,English', '1,2', 'Bangla', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `socialscience`
--

CREATE TABLE IF NOT EXISTS `socialscience` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(10000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  PRIMARY KEY (`SerialNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `UserImage` varchar(10000) DEFAULT NULL,
  `MemberSince` date NOT NULL,
  `UserType` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Email`, `Password`, `UserImage`, `MemberSince`, `UserType`) VALUES
(1, 'RKO', 'a@a.com', 'a', NULL, '2017-09-07', 'Tutor'),
(2, NULL, 'b@b.com', 'b', NULL, '2017-09-07', 'Tutor'),
(4, NULL, 'tazimtazim2012@gmail.com', '1', NULL, '2017-09-08', 'Tutor');

-- --------------------------------------------------------

--
-- Table structure for table `userexaminfo`
--

CREATE TABLE IF NOT EXISTS `userexaminfo` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `Bangla` tinyint(1) DEFAULT NULL,
  `English` tinyint(1) DEFAULT NULL,
  `HigherMath` tinyint(1) DEFAULT NULL,
  `SocialScience` tinyint(1) DEFAULT NULL,
  `Religion` tinyint(1) DEFAULT NULL,
  `ICT` tinyint(1) DEFAULT NULL,
  `Career` tinyint(1) DEFAULT NULL,
  `Physics` tinyint(1) DEFAULT NULL,
  `Chemistry` tinyint(1) DEFAULT NULL,
  `Biology` tinyint(1) DEFAULT NULL,
  `Math` tinyint(1) DEFAULT NULL,
  `PhysicalExercise` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`SerialNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `SerialNo` int(11) NOT NULL AUTO_INCREMENT,
  `TutorId` int(11) NOT NULL,
  `MobileNo` varchar(20) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `CurrentStatus` varchar(250) DEFAULT NULL,
  `Bio` varchar(500) DEFAULT NULL,
  `LastLogin` datetime DEFAULT NULL,
  `Level` int(11) DEFAULT NULL,
  `Experience` int(11) DEFAULT NULL,
  PRIMARY KEY (`SerialNo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`SerialNo`, `TutorId`, `MobileNo`, `Address`, `CurrentStatus`, `Bio`, `LastLogin`, `Level`, `Experience`) VALUES
(1, 1, '01740072214', 'Dhaka', 'AIUB', 'I\'m a student', '2017-09-08 00:00:00', 1, 1);

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
