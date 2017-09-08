-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2017 at 08:27 AM
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

CREATE TABLE `searchinfo` (
  `SerialNo` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Availability` tinyint(1) DEFAULT NULL,
  `PrefferedLocation` varchar(300) DEFAULT NULL,
  `PrefferedSubjects` varchar(300) DEFAULT NULL,
  `PrefferedClasses` varchar(300) DEFAULT NULL,
  `PrefferedMedium` varchar(50) DEFAULT NULL,
  `ExpextedSalary` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searchinfo`
--

INSERT INTO `searchinfo` (`SerialNo`, `UserId`, `Gender`, `Availability`, `PrefferedLocation`, `PrefferedSubjects`, `PrefferedClasses`, `PrefferedMedium`, `ExpextedSalary`) VALUES
(1, 1, 'Male', 1, 'Mirpur,Kalsi', 'Bangla,English', '1,2', 'Both', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `UserImage` varchar(10000) DEFAULT NULL,
  `MemberSince` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Email`, `Password`, `UserImage`, `MemberSince`) VALUES
(1, 'RKO', 'a@a.com', 'a', NULL, '2017-09-07'),
(2, NULL, 'b@b.com', 'b', NULL, '2017-09-07'),
(4, NULL, 'tazimtazim2012@gmail.com', '1', NULL, '2017-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `SerialNo` int(11) NOT NULL,
  `TutorId` int(11) NOT NULL,
  `MobileNo` varchar(20) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `CurrentStatus` varchar(250) DEFAULT NULL,
  `Bio` varchar(500) DEFAULT NULL,
  `LastLogin` datetime DEFAULT NULL,
  `Level` int(11) DEFAULT NULL,
  `Experience` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`SerialNo`, `TutorId`, `MobileNo`, `Address`, `CurrentStatus`, `Bio`, `LastLogin`, `Level`, `Experience`) VALUES
(1, 1, '01740072214', 'Dhaka', 'AIUB', 'I\'m a student', '2017-09-08 00:00:00', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `searchinfo`
--
ALTER TABLE `searchinfo`
  ADD PRIMARY KEY (`SerialNo`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`SerialNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `searchinfo`
--
ALTER TABLE `searchinfo`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
