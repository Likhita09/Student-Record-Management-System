-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 06:11 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_Username` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Admin_Password` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_Username`, `Admin_Password`) VALUES
('myadmin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Dep_Id` varchar(10) NOT NULL,
  `Course_Id` varchar(10) NOT NULL,
  `Course_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Dep_Id`, `Course_Id`, `Course_Name`) VALUES
('CSE', 'AI', 'Artificial intelligence'),
('CSE', 'BD', 'Big Data analytics'),
('CSE', 'CS_CORE', 'Computer Science Core'),
('ECE', 'ECE_CORE', 'Electronics & Communication Core'),
('EEE', 'EEE_CORE', 'Electrical and Electronics Core '),
('ECE', 'ES', 'Specialization in Embedded System.'),
('MECH', 'MECH_CORE', 'Mechanical Core ');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_Id` varchar(10) NOT NULL,
  `Department_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_Id`, `Department_Name`) VALUES
('CSE', 'Computer Science Engineering'),
('ECE', 'Electronics and Communication Engineering'),
('EEE', 'Electrical and Electronics Engineering'),
('MECH', 'Mechanical Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `std_id` varchar(10) NOT NULL,
  `dep` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `s_id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`std_id`, `dep`, `cid`, `s_id`, `s_name`, `mark`) VALUES
('AP191001', 'CSE', 'CS_CORE', 1001, 'Introduction to Programming Using C', 90),
('AP191002', 'CSE', 'CS_CORE', 1001, 'Introduction to Programming Using C', 68),
('AP191003', 'CSE', 'CS_CORE', 1001, 'Introduction to Programming Using C', 91),
('AP191004', 'CSE', 'CS_CORE', 1001, 'Introduction to Programming Using C', 75),
('AP191005', 'CSE', 'CS_CORE', 1001, 'Introduction to Programming Using C', 54);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_Id` varchar(10) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phno` varchar(15) NOT NULL,
  `Dob` date NOT NULL,
  `Dep` varchar(100) NOT NULL,
  `Cid` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_Id`, `Fname`, `Lname`, `Email`, `Phno`, `Dob`, `Dep`, `Cid`, `Gender`) VALUES
('AP190001', 'John', 'Doe', 'john.doe@gmail.com', '9147483647', '2000-11-30', 'CSE', 'AI', 'male'),
('AP190002', 'Rama', 'S', 'rama.s@gmail.com', '8492336449', '2001-02-05', 'CSE', 'AI', 'female'),
('AP190003', 'Anand ', 'Verma', 'verma.anand@gmail.com', '8944678923', '2000-05-19', 'CSE', 'AI', 'male'),
('AP191001', 'Lasya', 'Sree', 'lasya.sree@gmail.com', '9812483647', '2001-08-10', 'CSE', 'CS_CORE', 'female'),
('AP191002', 'Nitin', 'R', 'nithin.r@gmail.com', '7774836657', '1999-12-20', 'CSE', 'CS_CORE', 'male'),
('AP191003', 'Kriti', 'Sharma', 'kriti.sharma@gmail.com', '8887483641', '2001-01-07', 'CSE', 'CS_CORE', 'female'),
('AP191004', 'Sri', 'Ram', 'sriram@gmail.com', '9897932833', '2000-02-20', 'CSE', 'CS_CORE', 'male'),
('AP191005', 'Teja', 'S', 'teja.s@gmail.com', '9918483648', '1999-12-30', 'CSE', 'CS_CORE', 'male'),
('AP290001', 'Ritvik', 'D', 'ritvik.d@gmail.com', '9134343641', '2000-11-30', 'ECE', 'ECE_CORE', 'male'),
('AP290002', 'Rama', 'Ravi', 'rama.ravi@gmail.com', '8492336559', '2001-08-05', 'ECE', 'ECE_CORE', 'female'),
('AP290003', 'Vihari ', 'Verma', 'vihari_verma@gmail.com', '9814678923', '1999-05-10', 'ECE', 'ECE_CORE', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `Dep` varchar(10) NOT NULL,
  `C_Id` varchar(10) NOT NULL,
  `Subject_Id` int(11) NOT NULL,
  `Subject_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`Dep`, `C_Id`, `Subject_Id`, `Subject_Name`) VALUES
('CSE', 'CS_CORE', 1001, 'Introduction to Programming Using C'),
('CSE', 'CS_CORE', 1002, 'Object Oriented Programming'),
('CSE', 'CS_CORE', 1003, 'Data Structures And Algorithms'),
('CSE', 'CS_CORE', 1004, 'Operating Systems'),
('CSE', 'AI', 1101, 'Basic Mathematics'),
('CSE', 'AI', 1102, 'Computer Vision'),
('ECE', 'ECE_CORE', 2001, 'Basic Electronics'),
('ECE', 'ECE_CORE', 2002, 'Digital Logic and Circuit'),
('ECE', 'ECE_CORE', 2003, 'Analog Electronics'),
('EEE', 'EEE_CORE', 3001, 'Circuits & Systems'),
('EEE', 'EEE_CORE', 3002, 'Electrical Engineering Materials'),
('MECH', 'MECH_CORE', 4001, 'Material Science'),
('MECH', 'MECH_CORE', 4002, 'Machine Drawing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`Admin_Username`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_Id`),
  ADD KEY `Dep_Id` (`Dep_Id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Department_Id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD KEY `cid` (`cid`),
  ADD KEY `dep` (`dep`),
  ADD KEY `std_id` (`std_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_Id`),
  ADD KEY `Dep` (`Dep`),
  ADD KEY `Cid` (`Cid`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`Subject_Id`),
  ADD KEY `Dep` (`Dep`),
  ADD KEY `C_Id` (`C_Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`Dep_Id`) REFERENCES `department` (`Department_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `courses` (`Course_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`dep`) REFERENCES `department` (`Department_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_3` FOREIGN KEY (`std_id`) REFERENCES `student` (`S_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_4` FOREIGN KEY (`s_id`) REFERENCES `subjects` (`Subject_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Dep`) REFERENCES `department` (`Department_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`Cid`) REFERENCES `courses` (`Course_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`Dep`) REFERENCES `department` (`Department_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subjects_ibfk_2` FOREIGN KEY (`C_Id`) REFERENCES `courses` (`Course_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
