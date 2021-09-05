-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 11:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingRefNo` int(10) NOT NULL,
  `bookingDate` date DEFAULT NULL,
  `maidId` int(9) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingRefNo`, `bookingDate`, `maidId`, `userId`) VALUES
(1, '2020-04-02', 4, 2),
(2, '2020-04-15', 4, 1),
(3, '2020-03-05', 7, 1),
(8, '2020-04-29', 7, 1),
(9, '0000-00-00', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `maid`
--

CREATE TABLE `maid` (
  `maidID` int(9) NOT NULL,
  `maidName` varchar(50) NOT NULL,
  `maidAddress` varchar(150) NOT NULL,
  `maidNIC` varchar(15) NOT NULL,
  `maidContactNumber` varchar(20) NOT NULL,
  `maidDOB` date NOT NULL,
  `maidSecurityDetails` tinyint(1) NOT NULL,
  `maidProfileImage` varchar(255) DEFAULT NULL,
  `maidEmail` varchar(50) DEFAULT NULL,
  `maidServiceDailyRate` double(6,2) DEFAULT NULL,
  `ptServiceAvailability` tinyint(1) DEFAULT 0,
  `ptServiceHourlyRate` double(6,2) DEFAULT NULL,
  `ftServiceAvailability` tinyint(1) DEFAULT 0,
  `ftServiceWeeklyRate` double(7,2) DEFAULT NULL,
  `ftServiceMonthlyRate` double(8,2) DEFAULT NULL,
  `maidPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maid`
--

INSERT INTO `maid` (`maidID`, `maidName`, `maidAddress`, `maidNIC`, `maidContactNumber`, `maidDOB`, `maidSecurityDetails`, `maidProfileImage`, `maidEmail`, `maidServiceDailyRate`, `ptServiceAvailability`, `ptServiceHourlyRate`, `ftServiceAvailability`, `ftServiceWeeklyRate`, `ftServiceMonthlyRate`, `maidPassword`) VALUES
(1, 'Priya', 'Battaramulla', '981651798V', '078-912-3456', '1995-10-11', 0, '1.jpg', 'priya341@gmail.com', 800.00, 0, NULL, 1, 6000.00, 30000.00, 'priya341'),
(2, 'Anna', 'Wellawatta', '983451234V', '079-564-3212', '1985-12-03', 1, '2.jpg', 'anna56@gmail.com', 1100.00, 1, 150.00, 0, NULL, NULL, 'anna56'),
(3, 'Rita', 'Nugegoda', '988971435V', '079-812-3423', '1991-05-11', 0, '3.jpg', 'rita67@gmail.com', 1100.00, 0, NULL, 1, 9000.00, 40000.00, 'rita67'),
(4, 'Fathima', 'Dehiwala, Wellawatta', '972454234V', '077-127-8223', '1994-05-11', 0, '2.jpg', 'fathima45@gmail.com', 1000.00, 1, 170.00, 0, NULL, NULL, 'fathima45'),
(5, 'Mayuri', 'Nugegoda', '941235731V', '071-344-5981', '1982-10-11', 0, '1.jpg', 'mayuri98@gmail.com', 950.00, 1, 120.00, 0, NULL, NULL, 'mayuri98'),
(6, 'Amaya', 'Battaramulla', '923971233V', '075-982-1456', '1996-04-27', 0, '3.jpg', 'amayapieris23@gmail.com', 1050.00, 1, 130.00, 0, NULL, NULL, 'amayapieris23'),
(7, 'Jennifer', 'Wellawatta', '46587978', '077-302-0203', '0000-00-00', 0, '1.jpg', 'maid.new@example.com', 800.00, 1, NULL, 0, NULL, NULL, 'maid');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `maidId` int(9) NOT NULL,
  `washing` tinyint(1) DEFAULT 0,
  `cleaning` tinyint(1) DEFAULT 0,
  `cooking` tinyint(1) DEFAULT 0,
  `dayCare` tinyint(1) DEFAULT 0,
  `gardening` tinyint(1) NOT NULL,
  `otherSkills` varchar(255) DEFAULT 'NONE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`maidId`, `washing`, `cleaning`, `cooking`, `dayCare`, `gardening`, `otherSkills`) VALUES
(1, 1, 1, 1, 1, 1, 'NONE'),
(2, 1, 1, 1, 1, 0, 'NONE'),
(3, 1, 0, 0, 1, 1, 'NONE'),
(4, 0, 1, 1, 0, 0, 'Stitching'),
(5, 1, 1, 0, 0, 1, 'Stitching'),
(6, 0, 0, 1, 1, 0, 'NONE'),
(7, 0, 1, 0, 1, 0, 'NONE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(120) NOT NULL,
  `userPhone` varchar(20) NOT NULL,
  `userPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPhone`, `userPassword`) VALUES
(1, 'John Doe', 'john.doe@example.com', '077-302-0203', 'JohnDoe'),
(2, 'Sean Cassiere', 'sean.cassiere@gmail.com', '077-341-1909', 'SeanCassiere');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingRefNo`),
  ADD KEY `booking_maidid_fk` (`maidId`),
  ADD KEY `booking_userId_fk` (`userId`);

--
-- Indexes for table `maid`
--
ALTER TABLE `maid`
  ADD PRIMARY KEY (`maidID`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`maidId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`),
  ADD UNIQUE KEY `userPhone` (`userPhone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingRefNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `maid`
--
ALTER TABLE `maid`
  MODIFY `maidID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_maidid_fk` FOREIGN KEY (`maidId`) REFERENCES `maid` (`maidID`),
  ADD CONSTRAINT `booking_userId_fk` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `skill_maidid_fk` FOREIGN KEY (`maidId`) REFERENCES `maid` (`maidID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
