-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2017 at 06:31 PM
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
(2, 'Biology'),
(3, 'Career'),
(4, 'Chemistry'),
(5, 'English'),
(6, 'HigherMath'),
(7, 'ICT'),
(8, 'Math'),
(9, 'PhysicalExercise'),
(10, 'Physics'),
(11, 'Religion'),
(12, 'SocialScience');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ict`
--

INSERT INTO `ict` (`SerialNo`, `Question`, `A`, `B`, `C`, `D`, `Answer`) VALUES
(1, 'Binary of 10?', '1111', '0101', '0110', '1010', '1010'),
(2, 'What is session?', 'Array', 'Associative Array', 'Indexed Array', 'Multi Dimensional Array', 'Associative Array'),
(3, 'PHP stands for-', 'Preprocesser Hypertext', 'Pre Text Hyper', 'Hyper Text', 'none', 'Preprocesser Hypertext');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Location` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `Location`) VALUES
(7, 'Mirpur-10'),
(8, 'Pallabi'),
(10, 'Gulshan'),
(11, 'Banani'),
(12, 'Mohammadpur'),
(13, 'Dhanmondi'),
(14, 'Kalshi'),
(15, 'Mohakhali'),
(16, 'Uttara'),
(17, 'Mirpur-1'),
(18, 'Mirpur-2'),
(19, 'Mirpur-6'),
(20, 'Taltola'),
(21, 'Agargaon'),
(22, 'NewMarket');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `math`
--

INSERT INTO `math` (`SerialNo`, `Question`, `A`, `B`, `C`, `D`, `Answer`) VALUES
(1, '1+1?', '2', '5', '8', '6', '2'),
(2, 'Which is prime number?', '0', '7', '8', '18', '7'),
(3, 'factorial of 5?', '540', '120', '720', '125', '120');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physics`
--

INSERT INTO `physics` (`SerialNo`, `Question`, `A`, `B`, `C`, `D`, `Answer`) VALUES
(1, 'What is the value of g?', '9.8', '8.9', '7.8', '9.9', '9.8'),
(2, 'F=?', 'am', 'ma', 'ms', 'mg^2', 'ma'),
(3, 'Unit of g-', 'ms^2', 'ms', 'm/s^2', 'ms^-3', 'm/s^2');

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
  `PreferredLocation` varchar(300) DEFAULT NULL,
  `PreferredSubjects` varchar(300) DEFAULT NULL,
  `PreferredClasses` varchar(300) DEFAULT NULL,
  `PreferredMedium` varchar(50) DEFAULT NULL,
  `ExpectedSalary` double DEFAULT NULL,
  PRIMARY KEY (`SerialNo`),
  KEY `UserId` (`UserId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searchinfo`
--

INSERT INTO `searchinfo` (`SerialNo`, `UserId`, `Gender`, `Availability`, `PreferredLocation`, `PreferredSubjects`, `PreferredClasses`, `PreferredMedium`, `ExpectedSalary`) VALUES
(7, 9, 'Male', 1, 'Mirpur-10,Pallabi,Mohammadpur,Mirpur-1,Mirpur-2,Mirpur-6', 'ICT', '9,10,11,12', 'Bangla', 8000),
(8, 10, 'Female', 1, 'Mirpur-10,Mirpur-1,Mirpur-2,Mirpur-6', 'Bangla,Chemistry,English,ICT,Math,Religion,SocialScience', '4,5,6,7,8,10', 'Bangla', 6000),
(9, 11, 'Male', 1, 'Kalshi,Mohakhali,Uttara,Agargaon,Mirpur-10', 'Career,HigherMath,ICT,Math,PhysicalExercise', '9,10,11,12', 'Bangla', 6500),
(10, 12, 'Male', 1, 'Gulshan,Banani,Mohammadpur,Dhanmondi,Uttara,Agargaon,NewMarket', 'PhysicalExercise', '10,11,12', 'Both', 2),
(11, 13, 'Female', 1, 'Uttara', 'Bangla,Biology,English,Religion', '5,6,7,8,9,10', 'Both', 5000),
(12, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Email`, `Password`, `UserImage`, `MemberSince`, `UserType`) VALUES
(9, 'Samiul Haque', 'shovon@aiub.edu', 'shifa', 'https://scontent-sin6-2.xx.fbcdn.net/v/t1.0-9/1924331_10204318035216160_6808339281694487954_n.jpg?oh=6e2e7e15c3d0387b2f396802414ff634&oe=5A4DC8ED', '2017-09-17', 'Tutor'),
(10, 'Noushin Jannat', 'noushin@aiub.edu', 'noushin', 'https://scontent-sin6-2.xx.fbcdn.net/v/t1.0-9/21231729_2334102510148550_3643884847697138934_n.jpg?oh=8f1f9c044b331192c0898bcb21595011&oe=5A547BED', '2017-09-17', 'Tutor'),
(11, 'Shahariar Naimul', 'tushar@aiub.edu', 'tushar', 'https://scontent-sin6-2.xx.fbcdn.net/v/t1.0-9/20258486_1931619967126104_2423988889732540455_n.jpg?oh=4974ccc39c3313f1a600757282d0802e&oe=5A601CDE', '2017-09-17', 'Tutor'),
(12, 'Tanimul Haque Khan', 'tazim@aiub.edu', 'tazim', 'https://scontent-sin6-2.xx.fbcdn.net/v/t1.0-9/12745865_594666710684415_8456279960229652166_n.jpg?oh=24d9153fb93f51cf96c9ad9f6ed6266a&oe=5A574BA9', '2017-09-17', 'Tutor'),
(13, 'Shaida Sharmin', 'shaida@gmail.com', 'shovon', 'https://lh5.googleusercontent.com/4PuxEl7GCqGDuZZopQWG9gBj7LlbIBE_PkKjnFk9IUfUTnYvNRMkhPA6g0LlyCv0a-HdzuTVmGLCdtcEjP1YFg=w1366-h662-rw', '2017-09-17', 'Tutor'),
(14, NULL, 's.h.shovon@gmail.com', '1', NULL, '2017-09-18', 'Tutor'),
(15, NULL, 'a@a.com', '1', NULL, '2017-09-18', 'Tutor');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userexaminfo`
--

INSERT INTO `userexaminfo` (`SerialNo`, `UserId`, `Bangla`, `English`, `HigherMath`, `SocialScience`, `Religion`, `ICT`, `Career`, `Physics`, `Chemistry`, `Biology`, `Math`, `PhysicalExercise`) VALUES
(2, 9, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(3, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`SerialNo`, `TutorId`, `MobileNo`, `Address`, `CurrentStatus`, `Bio`, `LastLogin`, `Level`, `Experience`) VALUES
(8, 9, '01758135197', '333/1 South Paikpara, MIrpur, Dhaka-1216', 'Available', 'I am last year student of Computer Science & Engineering', '2017-09-19 10:26:52', 1, 0),
(9, 10, '01677482942', 'Mirpur, Dhaka', 'Available', 'Student of CSE at AIUB', '2017-09-19 08:37:52', 1, 0),
(10, 11, '01740072214', 'Uttara, Dhaka', 'Available', 'Student at AIUB', '2017-09-19 08:40:48', 1, 0),
(11, 12, '01912995783', 'Mirpur, Dhaka', 'Available', 'Student at AIUB', '2017-09-19 08:42:44', 1, 0),
(12, 13, '01821868772', 'Uttara, Dhaka', 'Available', 'I am a student of East West Medical college.', '2017-09-19 08:37:11', 1, 0),
(13, 14, NULL, NULL, NULL, NULL, NULL, 1, 0),
(14, 15, NULL, NULL, NULL, NULL, NULL, 1, 0);

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
