-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2015 at 12:19 PM
-- Server version: 5.5.38
-- PHP Version: 5.3.10-1ubuntu3.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
  `USN` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`AchievementName`,`AchievementType`,`USN`),
  KEY `USN` (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`AchievementType`, `AchievementName`, `AchievementLevel`, `Rank`, `USN`) VALUES
('Internship', ' bnjbh', 'hbhjjbb', '1', '1RV12IS026'),
('Sports', 'bhj', ' nm ', '2', '1233'),
('Sports', 'bjbj', 'b hnbhnbh', '1', '1233'),
('Internship', 'feff', 'ffdf', '1', '1233'),
('Project', 'jbjb', 'n bnm ', '1', '1233'),
('Sports', 'jknn', 'njnjknk', '1', '1233'),
('Internship', 'njbnj', 'bhbhbhb', '1', '1233'),
('Sports', 'njn', 'njn', '1', '1233'),
('Sports', 'njnn', 'jbbb', '1', '1233'),
('Project', 'sport', 'state', '1', '1RV12IS026');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE IF NOT EXISTS `club` (
  `ClubName` varchar(30) NOT NULL DEFAULT '',
  `Role` varchar(20) DEFAULT NULL,
  `DateOfJoin` date DEFAULT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `USN` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`ClubName`,`USN`),
  KEY `USN` (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`ClubName`, `Role`, `DateOfJoin`, `Category`, `USN`) VALUES
('CARV', 'VP', '2013-04-03', 'ent', '1RV12IS048');

-- --------------------------------------------------------

--
-- Table structure for table `counsellor`
--

CREATE TABLE IF NOT EXISTS `counsellor` (
  `Name` varchar(30) DEFAULT NULL,
  `Fid` varchar(10) NOT NULL,
  `Designation` varchar(10) DEFAULT NULL,
  `Qualification` varchar(10) DEFAULT NULL,
  `YearOfJoining` int(4) DEFAULT NULL,
  PRIMARY KEY (`Fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counsellor`
--

INSERT INTO `counsellor` (`Name`, `Fid`, `Designation`, `Qualification`, `YearOfJoining`) VALUES
('PRIYA', '123', 'PROF', 'M.S', 2013),
('CHETANA', '1279', 'prof.', 'MS', 2006),
('chetana', '1456', 'PROF', 'M.S', 2013);

-- --------------------------------------------------------

--
-- Table structure for table `counsels`
--

CREATE TABLE IF NOT EXISTS `counsels` (
  `USN` varchar(10) NOT NULL DEFAULT '',
  `Fid` varchar(10) NOT NULL DEFAULT '',
  `batch` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`USN`,`Fid`),
  KEY `Fid` (`Fid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counsels`
--

INSERT INTO `counsels` (`USN`, `Fid`, `batch`) VALUES
('1RV12IS048', '1279', 'B3');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `cname` varchar(10) DEFAULT NULL,
  `cid` varchar(10) NOT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cname`, `cid`, `credits`) VALUES
(NULL, '', NULL),
('DS', '12IS36', 5),
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
  `USN` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`ChallanNumber`,`USN`),
  KEY `USN` (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedetails`
--

INSERT INTO `feedetails` (`ChallanNumber`, `Amount`, `Feedate`, `AcademicYear`, `USN`) VALUES
(1007, 36000, '2012-11-02', '2013-2014', '1RV12IS048');

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE IF NOT EXISTS `guardian` (
  `Relationship` varchar(20) DEFAULT NULL,
  `GuardianName` varchar(20) NOT NULL DEFAULT '',
  `GuardianEmailId` varchar(30) DEFAULT NULL,
  `GuardianPhone` int(15) DEFAULT NULL,
  `USN` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`USN`,`GuardianName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`Relationship`, `GuardianName`, `GuardianEmailId`, `GuardianPhone`, `USN`) VALUES
('father', 'kumar', 'hsn@gmail.com', 2147483647, '1RV12IS048');

-- --------------------------------------------------------

--
-- Table structure for table `hss`
--

CREATE TABLE IF NOT EXISTS `hss` (
  `level` varchar(2) DEFAULT NULL,
  `CertificateName` varchar(30) NOT NULL DEFAULT '',
  `USN` varchar(10) NOT NULL DEFAULT '',
  `AcademicYear` varchar(9) NOT NULL DEFAULT '',
  PRIMARY KEY (`CertificateName`,`AcademicYear`,`USN`),
  KEY `USN` (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hss`
--

INSERT INTO `hss` (`level`, `CertificateName`, `USN`, `AcademicYear`) VALUES
('L4', 'EVENT co-ordinator', '1RV12IS026', '2012'),
('L2', 'ncc', '1RV12IS026', '2012'),
('L2', 'organiser', '1RV12IS026', '2013'),
('L5', 'participation in sports', '1RV12IS048', '2014-2015'),
('L6', 'sports', '1RV12IS026', '2012');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`username`,`email`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `see`
--

CREATE TABLE IF NOT EXISTS `see` (
  `Semester` int(1) DEFAULT NULL,
  `Grade` varchar(1) DEFAULT NULL,
  `GradePoints` int(2) DEFAULT NULL,
  `USN` varchar(10) NOT NULL DEFAULT '',
  `cid` varchar(7) NOT NULL DEFAULT '',
  PRIMARY KEY (`USN`,`cid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `see`
--

INSERT INTO `see` (`Semester`, `Grade`, `GradePoints`, `USN`, `cid`) VALUES
(8, 'A', 10, '1RV12IS026', '12IS36'),
(5, 'S', 10, '1RV12IS026', '789'),
(6, 'S', 10, '1RV12IS048', '12IS36'),
(4, 'B', 8, '1RV12IS048', '12WE34');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `cpassword` varchar(25) NOT NULL,
  PRIMARY KEY (`username`,`email`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `email`, `password`, `cpassword`) VALUES
('', '', '', ''),
('iii', 'ed@ee.com', '1234', '1234'),
('wew', 'we@we.com', '1234qw', '1234qw');

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
  `CasteCategory` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Fname`, `Mname`, `Lname`, `EmailID`, `PhoneNum`, `Sex`, `NatureOfAdmission`, `CET_COMEDK_Rank`, `YearOfAdmission`, `USN`, `Branch`, `Admission_Number`, `ResedentialStatus`, `NCC`, `DOB`, `BloodGroup`, `Income`, `CasteCategory`) VALUES
('a', 'jn', 'mknn', 'nmnjkmn@jk.com', '587776989', 'M', 'COMED-K', 879, 2012, '1233', 'lop', '12456', 'Residing in Hostel', 'n', '0000-00-00', 'nbn', 200000, 'km'),
('Nishanth', 'M', 'S', 'nishanthms20@gmail.com', '8762122012', 'M', 'CET', 1873, 2012, '1RV12IS026', 'ISE', '121127', 'Residing in Hostel', 'y', '1995-01-19', 'O-VE', 10000, 'GM'),
('SAGAR', 'KUMAR', 'H N', 'captainsagarsparrow@gmail.com', '9738749877', 'M', 'CET', 994, 2012, '1RV12IS048', 'ISE', '121146', 'Residing in Hostel', 'y', '1994-11-26', 'B+VE', 30000, 'gm');

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
  `pin` int(6) DEFAULT NULL,
  PRIMARY KEY (`Dno`,`USN`),
  KEY `USN` (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_address2`
--

INSERT INTO `student_address2` (`USN`, `Dno`, `Cross_Num`, `Main`, `Street`, `City`, `District`, `State`, `pin`) VALUES
('1RV12IS048', 121, 5, 7, 'dollars colony', 'bengaluru', 'bengaluru', 'karnataka', 577004);

-- --------------------------------------------------------

--
-- Table structure for table `studies`
--

CREATE TABLE IF NOT EXISTS `studies` (
  `USN` varchar(10) NOT NULL DEFAULT '',
  `cid` varchar(7) NOT NULL DEFAULT '',
  PRIMARY KEY (`USN`,`cid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`username`) REFERENCES `signup` (`username`);

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
