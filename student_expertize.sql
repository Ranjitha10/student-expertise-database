-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2015 at 06:07 PM
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
  `USN` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`ClubName`, `Role`, `DateOfJoin`, `Category`, `USN`) VALUES
('CARV', 'VP', '2013-04-03', 'ent', '1RV12IS048'),
('RAAG', 'event manager', '2014-01-01', 'entertainer', '1RV12IS005'),
('RAAG', 'P', '2011-11-02', 'Organizer', '1RV12IS063'),
('rotract', 'president', '2013-12-12', 'manager', '1RV12IS026'),
('rotract', 'event manager', '2011-12-06', 'VP', '1RV12IS034'),
('rotract', 'PLanner', '2012-12-05', 'entertainer', '1RV12IS040');

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
('CHETANA', '1279', 'prof.', 'MS', 2006),
('chetana', '1456', 'PROF', 'M.S', 2013),
('Geetha V', '234', 'PROF', 'MTECH', 1996),
('padmashree', '33', 'PROF', 'MTECH', 2012),
('rekha', '419', 'prof', 'Mtech', 2012),
('Mamtha', '456', '', 'Phd', 1997),
('merin', '587', 'prof', 'mtech', 2011),
('Smitha', '678', 'prof', 'mtech', 1999),
('anisha', '777', 'prof', 'Phd', 1992);

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
('1RV12IS026', '587', 'b3'),
('1RV12IS040', '777', 'b3'),
('1RV12IS048', '1279', 'B3'),
('1RV12IS048', '1456', 'b3'),
('1RV12IS063', '678', 'b4');

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
('EM', '12IS32', 3),
('DLD', '12IS33', 5),
('DMS', '12IS34', 4),
('DS', '12IS36', 5),
('UNIX', '12IS42', 5),
('TOC', '12IS43', 3),
('MIS', '12is54', 4),
('CNS', '12IS56', 5),
('HPC', '12IS63', 3),
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
(1007, 36000, '2012-11-02', '2013-2014', '1RV12IS048'),
(1098, 45000, '2012-11-02', '2012', '1RV12IS040'),
(2034, 45000, '2013-02-13', '2012', '1RV12IS005'),
(5643, 46000, '2013-02-13', '2012', '1RV12IS002');

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

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`Relationship`, `GuardianName`, `GuardianEmailId`, `GuardianPhone`, `USN`) VALUES
('Father', 'vishnu', 'vishnu@gmail.com', 2147483647, '1RV12IS003'),
('Father', 'Ajay', 'ajay@gmail.com', 2147483647, '1RV12IS040'),
('father', 'kumar', 'hsn@gmail.com', 2147483647, '1RV12IS048');

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
('L4', 'EVENT co-ordinator', '1RV12IS026', '2012'),
('L4', 'Microsoft Techvista', '1RV12IS026', '2012'),
('L2', 'ncc', '1RV12IS026', '2012'),
('L3', 'NCC', '1RV12IS040', '2012'),
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
  `password` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `email`, `password`) VALUES
('rajat', 'rajatkumar.rvce@gmai', 'd2ff3b88d34705e01d15'),
('rajat', 'rajatkumar.rvce@gmai', 'rajat');

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

--
-- Dumping data for table `see`
--

INSERT INTO `see` (`Semester`, `Grade`, `GradePoints`, `USN`, `cid`) VALUES
(8, 'A', 10, '1RV12IS026', '12IS36'),
(5, 'S', 10, '1RV12IS026', '789'),
(3, 'S', 10, '1RV12IS040', '12IS32'),
(6, 'A', 9, '1RV12IS040', '12IS34'),
(6, 'S', 10, '1RV12IS048', '12IS36'),
(4, 'S', 10, '1RV12IS048', '12IS42'),
(4, 'B', 8, '1RV12IS048', '12WE34');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `cpassword` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `email`, `password`, `cpassword`) VALUES
('', '', '', ''),
('akhil', 'akhi@gmail.com', 'akhil', 'akhil'),
('atulit', 'at@gmail.com', '90c09e957a7ea25d7db1553ba', '90c09e957a7ea25d7db1553ba'),
('iii', 'ed@ee.com', '1234', '1234'),
('nishantms', 'nishant@gmail.com', '0e11d184398255abe79cac2d7', '0e11d184398255abe79cac2d7'),
('rajat', 'rajat@', '', ''),
('rajat', 'rajatkumar.rvce@gmail.com', 'rajat', 'rajat'),
('rajat2', 'rajat@gmail.com', 'd2ff3b88d34705e01d150c21f', 'd2ff3b88d34705e01d150c21f'),
('rajatkarya', 'rajat1@gmail.com', '2ee2f295f33308bab1b1583d9', '2ee2f295f33308bab1b1583d9'),
('rajatku', 'rajatku@gmail.com', '0782e9801e8a704b20a5c6b5d', '0782e9801e8a704b20a5c6b5d'),
('rajatkumararya', 'rajatkumar.rvce@gmail.com', '60d96f7e7d8ca4ca6491db036', 'rajatkumararya'),
('sagar', 'sagar1@gmail.com', '482229bdc51b50007dbfdb346', 'sagar'),
('sagar', 'sagar@gmail.com', '41ed44e3038dbeee7d2ffaa7f', 'sagar'),
('ullas', 'ullas@gmail.com', 'saggi', 'saggi'),
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
  `CasteCategory` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Fname`, `Mname`, `Lname`, `EmailID`, `PhoneNum`, `Sex`, `NatureOfAdmission`, `CET_COMEDK_Rank`, `YearOfAdmission`, `USN`, `Branch`, `Admission_Number`, `ResedentialStatus`, `NCC`, `DOB`, `BloodGroup`, `Income`, `CasteCategory`) VALUES
('Anirudh', NULL, 'V', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('a', 'jn', 'mknn', 'nmnjkmn@jk.com', '587776989', 'M', 'COMED-K', 879, 2012, '1233', 'lop', '12456', 'Residing in Hostel', 'n', '0000-00-00', 'nbn', 200000, 'km'),
('Akhil', 'N', '\0', 'akhil@gmail.com', '9916323114', 'M', 'Comed k', 678, 2012, '1RV12IS002', 'ISE', '1001', 'hostel', 'y', '1995-11-02', '0+ve', 1200, 'GM'),
('ANIRUDH', 'N', 'V', 'akhil@gmail.com', '9916323114', 'M', 'Comed k', 678, 2012, '1RV12IS003', 'ISE', '1001', 'hostel', 'y', '1995-11-02', 'o+ve', 1200, 'GM'),
('Anisha', 'm', 'n', 'anisha@gmail.com', '9916323111', 'F', 'CET', 1100, 2012, '1RV12IS004', 'ISE', '1002', 'hostel', 'n', '1992-01-28', 'b+ve', 1800, 'GM'),
('Anusha', 'G', 'M', 'anusha@gmailcom', '9916323112', 'F', '2012', 2340, 2012, '1RV12IS005', 'ISE', '1004', NULL, 'N', '1990-11-02', 'A+ve', 1004, 'GM'),
('Nishanth', 'M', 'S', 'nishanthms20@gmail.com', '8762122012', 'M', 'CET', 1873, 2012, '1RV12IS026', 'ISE', '121127', 'Residing in Hostel', 'y', '1995-01-19', 'O-VE', 10000, 'GM'),
('Prateek', 'M', 'andi', 'prateek@gmail.com', '9910202033', 'M', 'CET', 200, 2012, '1RV12IS034', 'ISE', '20064', 'Hostel', 'n', '1992-04-07', '0+ve', 100935, 'GM'),
('Rajat', 'Kumar', 'Arya', 'rajatkumar@gmail.com', '9901129243', 'M', 'Comed k', 655, 2012, '1RV12IS040', 'ISE', '696075', 'hostel', 'y', '1994-07-28', 'o+ve', 65656, 'GM'),
('Rohith', 'Y', 'M', 'rohith@gmail.com', '9835024793', 'M', 'CET', 1556, 2012, '1RV12IS046', 'ISE', '199034', 'PG', 'y', '1993-03-09', 'A+ve', 78903, 'OBC'),
('SAGAR', 'KUMAR', 'H N', 'captainsagarsparrow@gmail.com', '9738749877', 'M', 'CET', 994, 2012, '1RV12IS048', 'ISE', '121146', 'Residing in Hostel', 'y', '1994-11-26', 'B+VE', 30000, 'gm'),
('Vivek', 'N', 'V', 'vivek@gmail.com', '9923038405', 'M', 'CET', 902, 2012, '1RV12IS063', 'ISE', '697542', 'PG', 'Y', '1996-12-28', 'O+ve', 685432, 'GM');

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
('1RV12IS048', 121, 5, 7, 'dollars colony', 'bengaluru', 'bengaluru', 'karnataka', 577004),
('1RV12IS003', 212, 2, 4, 'chruch', 'bengaluru', 'bengaluru', 'karnataka', 560085);

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
('1RV12IS048', '12IS36'),
('1RV12IS040', '12WE34');

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
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`username`,`email`,`password`);

--
-- Indexes for table `see`
--
ALTER TABLE `see`
 ADD PRIMARY KEY (`USN`,`cid`), ADD KEY `cid` (`cid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
 ADD PRIMARY KEY (`username`,`email`,`password`);

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
