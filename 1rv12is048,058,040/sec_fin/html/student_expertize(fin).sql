-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2015 at 12:15 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_expertize`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE IF NOT EXISTS `achievements` (
  `AchievementType` varchar(50) NOT NULL DEFAULT '',
  `AchievementName` varchar(50) NOT NULL DEFAULT '',
  `AchievementLevel` varchar(50) DEFAULT NULL,
  `Rank` varchar(5) DEFAULT NULL,
  `USN` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`AchievementType`, `AchievementName`, `AchievementLevel`, `Rank`, `USN`) VALUES
('Seminar', 'cric', 'state', 'other', '1'),
('PROJECT', 'TRANSFER BASED MT', 'state', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE IF NOT EXISTS `club` (
  `ClubName` varchar(30) NOT NULL DEFAULT '',
  `Role` varchar(20) DEFAULT NULL,
  `DateOfJoin` date DEFAULT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `USN` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `counsellor`
--

CREATE TABLE IF NOT EXISTS `counsellor` (
  `Name` varchar(30) DEFAULT NULL,
  `Fid` varchar(10) NOT NULL,
  `Designation` varchar(10) DEFAULT NULL,
  `Qualification` varchar(10) DEFAULT NULL,
  `YearOfJoining` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counsellor`
--

INSERT INTO `counsellor` (`Name`, `Fid`, `Designation`, `Qualification`, `YearOfJoining`) VALUES
('PRIYA', '123', 'PROF', 'M.S', 2013),
('chetana', '1456', 'PROF', 'M.S', 2013);

-- --------------------------------------------------------

--
-- Table structure for table `counsels`
--

CREATE TABLE IF NOT EXISTS `counsels` (
  `USN` varchar(10) NOT NULL DEFAULT '',
  `Fid` varchar(10) NOT NULL DEFAULT '',
  `batch` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counsels`
--

INSERT INTO `counsels` (`USN`, `Fid`, `batch`) VALUES
('1', '123', 'B1'),
('1', '1456', 'B2');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `cname` varchar(10) DEFAULT NULL,
  `cid` varchar(10) NOT NULL,
  `credits` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cname`, `cid`, `credits`) VALUES
(NULL, '', NULL),
('WEB', '12WE34', 3),
(NULL, '789', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedetails`
--

CREATE TABLE IF NOT EXISTS `feedetails` (
  `ChallanNumber` int(6) NOT NULL DEFAULT '0',
  `Amount` int(7) DEFAULT NULL,
  `Feedate` date DEFAULT NULL,
  `AcademicYear` varchar(9) DEFAULT NULL,
  `USN` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedetails`
--

INSERT INTO `feedetails` (`ChallanNumber`, `Amount`, `Feedate`, `AcademicYear`, `USN`) VALUES
(123456, 12000, '0000-00-00', '2012', '1');

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE IF NOT EXISTS `guardian` (
  `Relationship` varchar(20) DEFAULT NULL,
  `GuardianName` varchar(20) NOT NULL DEFAULT '',
  `GuardianEmailId` varchar(30) DEFAULT NULL,
  `GuardianPhone` int(15) DEFAULT NULL,
  `USN` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hss`
--

CREATE TABLE IF NOT EXISTS `hss` (
  `level` varchar(2) DEFAULT NULL,
  `CertificateName` varchar(30) NOT NULL DEFAULT '',
  `USN` varchar(10) NOT NULL DEFAULT '',
  `AcademicYear` varchar(9) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hss`
--

INSERT INTO `hss` (`level`, `CertificateName`, `USN`, `AcademicYear`) VALUES
('', '', '1', ''),
('L2', 'blood', '1', '2013-2014'),
('L1', 'LEADER', '1', '2013-2014');

-- --------------------------------------------------------

--
-- Table structure for table `see`
--

CREATE TABLE IF NOT EXISTS `see` (
  `Semester` int(1) DEFAULT NULL,
  `Grade` varchar(1) DEFAULT NULL,
  `GradePoints` int(2) DEFAULT NULL,
  `USN` varchar(10) NOT NULL DEFAULT '',
  `cid` varchar(7) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Fname` varchar(10) DEFAULT NULL,
  `Mname` varchar(10) DEFAULT NULL,
  `Lname` varchar(10) DEFAULT NULL,
  `EmailID` varchar(40) DEFAULT NULL,
  `PhoneNum` varchar(20) DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `NatureOfAdmission` varchar(20) DEFAULT NULL,
  `CET_COMEDK_Rank` int(6) DEFAULT NULL,
  `YearOfAdmission` int(4) DEFAULT NULL,
  `USN` varchar(10) NOT NULL,
  `Branch` varchar(20) DEFAULT NULL,
  `Admission_Number` varchar(20) DEFAULT NULL,
  `ResedentialStatus` varchar(20) DEFAULT NULL,
  `NCC` varchar(1) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `BloodGroup` varchar(5) DEFAULT NULL,
  `Income` int(7) DEFAULT NULL,
  `CasteCategory` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Fname`, `Mname`, `Lname`, `EmailID`, `PhoneNum`, `Sex`, `NatureOfAdmission`, `CET_COMEDK_Rank`, `YearOfAdmission`, `USN`, `Branch`, `Admission_Number`, `ResedentialStatus`, `NCC`, `DOB`, `BloodGroup`, `Income`, `CasteCategory`) VALUES
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_address2`
--

CREATE TABLE IF NOT EXISTS `student_address2` (
  `USN` varchar(10) NOT NULL DEFAULT '',
  `Dno` int(10) NOT NULL,
  `Cross_Num` int(4) DEFAULT NULL,
  `Main` int(4) DEFAULT NULL,
  `Street` varchar(20) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `District` varchar(20) DEFAULT NULL,
  `State` varchar(20) DEFAULT NULL,
  `pin` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_address2`
--

INSERT INTO `student_address2` (`USN`, `Dno`, `Cross_Num`, `Main`, `Street`, `City`, `District`, `State`, `pin`) VALUES
('1', 2, 2, 2, 'CHARMINAR', 'MYSORE', 'MYSORE', 'KARNATAKA', 570001222),
('1', 8, 1, 6, 'DD', 'MYSORE', 'frgf', 'KARNATAKA', 322),
('1', 123, 5, 8, 'CHARMINAR', 'MYSORE', 'MYSORE', 'CCDC', 123456),
('1', 3632, 15, 9, 'CHARMINAR', 'MYSORE', 'MYSORE', 'KARNATAKA', 570023);

-- --------------------------------------------------------

--
-- Table structure for table `studies`
--

CREATE TABLE IF NOT EXISTS `studies` (
  `USN` varchar(10) NOT NULL DEFAULT '',
  `cid` varchar(7) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studies`
--

INSERT INTO `studies` (`USN`, `cid`) VALUES
('1', '12WE34'),
('1', '789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
 ADD PRIMARY KEY (`AchievementName`,`AchievementType`,`USN`), ADD KEY `USN` (`USN`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
 ADD PRIMARY KEY (`ClubName`,`USN`), ADD KEY `USN` (`USN`);

--
-- Indexes for table `counsellor`
--
ALTER TABLE `counsellor`
 ADD PRIMARY KEY (`Fid`);

--
-- Indexes for table `counsels`
--
ALTER TABLE `counsels`
 ADD PRIMARY KEY (`USN`,`Fid`), ADD KEY `Fid` (`Fid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedetails`
--
ALTER TABLE `feedetails`
 ADD PRIMARY KEY (`ChallanNumber`,`USN`), ADD KEY `USN` (`USN`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
 ADD PRIMARY KEY (`USN`,`GuardianName`);

--
-- Indexes for table `hss`
--
ALTER TABLE `hss`
 ADD PRIMARY KEY (`CertificateName`,`AcademicYear`,`USN`), ADD KEY `USN` (`USN`);

--
-- Indexes for table `see`
--
ALTER TABLE `see`
 ADD PRIMARY KEY (`USN`,`cid`), ADD KEY `cid` (`cid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `student_address2`
--
ALTER TABLE `student_address2`
 ADD PRIMARY KEY (`Dno`,`USN`), ADD KEY `USN` (`USN`);

--
-- Indexes for table `studies`
--
ALTER TABLE `studies`
 ADD PRIMARY KEY (`USN`,`cid`), ADD KEY `cid` (`cid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achievements`
--
ALTER TABLE `achievements`
ADD CONSTRAINT `achievements_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `student` (`USN`) ON DELETE CASCADE;

--
-- Constraints for table `club`
--
ALTER TABLE `club`
ADD CONSTRAINT `club_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `student` (`USN`) ON DELETE CASCADE;

--
-- Constraints for table `counsels`
--
ALTER TABLE `counsels`
ADD CONSTRAINT `counsels_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `student` (`USN`) ON DELETE CASCADE,
ADD CONSTRAINT `counsels_ibfk_2` FOREIGN KEY (`Fid`) REFERENCES `counsellor` (`Fid`) ON DELETE CASCADE;

--
-- Constraints for table `feedetails`
--
ALTER TABLE `feedetails`
ADD CONSTRAINT `feedetails_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `student` (`USN`) ON DELETE CASCADE;

--
-- Constraints for table `guardian`
--
ALTER TABLE `guardian`
ADD CONSTRAINT `guardian_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `student` (`USN`) ON DELETE CASCADE;

--
-- Constraints for table `hss`
--
ALTER TABLE `hss`
ADD CONSTRAINT `hss_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `student` (`USN`) ON DELETE CASCADE;

--
-- Constraints for table `see`
--
ALTER TABLE `see`
ADD CONSTRAINT `see_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`) ON DELETE CASCADE,
ADD CONSTRAINT `see_ibfk_2` FOREIGN KEY (`USN`) REFERENCES `student` (`USN`) ON DELETE CASCADE;

--
-- Constraints for table `student_address2`
--
ALTER TABLE `student_address2`
ADD CONSTRAINT `student_address2_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `student` (`USN`) ON DELETE CASCADE;

--
-- Constraints for table `studies`
--
ALTER TABLE `studies`
ADD CONSTRAINT `studies_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `student` (`USN`) ON DELETE CASCADE,
ADD CONSTRAINT `studies_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
