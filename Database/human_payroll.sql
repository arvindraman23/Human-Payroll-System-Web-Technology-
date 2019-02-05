-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 02:34 PM
-- Server version: 5.7.19-log
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `human payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(11) NOT NULL,
  `code` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `code`) VALUES
(1, 'admin', 'admin', '123admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `message` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('arvind', 'arvind@gmail.com', 'Any Job Openings'),
('Bruce', 'bruce@hotmail.com', 'No food in Cafeteria'),
('Dwayne', 'rock@yahoo.co.in', 'Project details request'),
('John', 'john@gmail.com', 'Request for Stationary'),
('ali', 'ali@gmail.com', 'request for job opening'),
('ali', 'alisagar@gmail.com', 'request for job opening'),
('Justine', 'ijustine@yahoo.com', 'Internet Maintenance Request');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Uname` varchar(40) NOT NULL,
  `PrTitle` varchar(40) NOT NULL,
  `PrDetails` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Uname`, `PrTitle`, `PrDetails`) VALUES
('abednadir', 'Automation', 'Industry Automation to reduce man power.'),
('carl', 'IoT', 'Implementation of IoT in Industries'),
('rock', 'HealthCare', 'Digitalization of HealthCare Vertical'),
('ijustine', 'Banking', 'Back end design');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phno` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pin` varchar(20) NOT NULL,
  `Uname` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`FName`, `LName`, `DOB`, `Gender`, `Address`, `Phno`, `Email`, `Pin`, `Uname`, `Password`) VALUES
('Abed', 'Nadir', '1996-11-23', 'male', 'SanFrancisco', '5465322154', 'abednadir@gmail.com', '546587', 'abednadir', 'abednadir'),
('Carl ', 'Marks', '1996-11-23', 'male', 'Cuba', '8945236578', 'carlm@gmail.com', '560079', 'carl', 'carl'),
('Justine', 'Romanoff', '1992-01-11', 'Female', 'NewYork', '8765213254', 'ijustine@yahoo.com', '546511', 'ijustine', 'ijustine'),
('Dwayne', 'Johnson', '1995-11-11', 'male', 'California', '7865985421', 'therock@gmail.com', '560078', 'rock', 'rock');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `Uname` varchar(50) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Salary` int(11) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`Uname`, `Designation`, `Salary`, `file`) VALUES
('abednadir', 'Team Leader', 60000, 'payslip.PNG'),
('carl', 'Associate', 45000, 'pay1.jpg'),
('ijustine', 'Software Architect', 50000, 'pay3.jpg'),
('rock', 'trainee', 25000, 'pay2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD KEY `Uname` (`Uname`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Uname`) USING BTREE,
  ADD UNIQUE KEY `Uname` (`Uname`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD UNIQUE KEY `Uname_2` (`Uname`),
  ADD KEY `Uname` (`Uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`Uname`) REFERENCES `registration` (`Uname`);

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`Uname`) REFERENCES `registration` (`Uname`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
