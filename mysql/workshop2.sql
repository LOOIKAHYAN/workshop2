-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 12:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `password`, `roleid`) VALUES
(1, 'admin001', '12345678', 1),
(2, 'kkm001', '12345678', 2),
(3, 'cpbv001', '12345678', 3);

--
-- Triggers `admin`
--
DELIMITER $$
CREATE TRIGGER `updatePasswordLog` AFTER UPDATE ON `admin` FOR EACH ROW INSERT INTO passwordUpdateLogs VALUES (null,NEW.adminid,OLD.password,NEW.password,'Updated Password',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackid` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(30) NOT NULL,
  `comments` varchar(150) DEFAULT NULL,
  `localpplid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Triggers `feedback`
--
DELIMITER $$
CREATE TRIGGER `feedbackFormat` BEFORE INSERT ON `feedback` FOR EACH ROW SET NEW.type = UPPER(NEW.type)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `localpeople`
--

CREATE TABLE `localpeople` (
  `localpplid` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `localpeople`
--

INSERT INTO `localpeople` (`localpplid`, `fname`, `lname`, `gender`, `email`, `phoneno`, `username`, `password`) VALUES
(1, 'local', 'people', 'F', 'localpeople@gmail.com', '0190102013', 'localppl001', '12345678');

--
-- Triggers `localpeople`
--
DELIMITER $$
CREATE TRIGGER `deleteLog` BEFORE UPDATE ON `localpeople` FOR EACH ROW INSERT INTO logs VALUES (null,OLD.localpplid,'Updated',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertLog` AFTER INSERT ON `localpeople` FOR EACH ROW INSERT INTO logs VALUES (null,NEW.localpplid,'Inserted',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateLog` AFTER UPDATE ON `localpeople` FOR EACH ROW INSERT INTO logs VALUES (null,NEW.localpplid,'Updated',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `localpplid` int(11) DEFAULT NULL,
  `action` varchar(20) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `localpplid`, `action`, `datetime`) VALUES
(1, 1, 'Inserted', '2023-06-22 06:15:39'),
(2, 1, 'Updated', '2023-06-22 06:24:50'),
(3, 1, 'Updated', '2023-06-22 06:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `passwordupdatelogs`
--

CREATE TABLE `passwordupdatelogs` (
  `id` int(11) NOT NULL,
  `adminid` int(11) DEFAULT NULL,
  `oldpassword` varchar(30) DEFAULT NULL,
  `newpassword` varchar(30) DEFAULT NULL,
  `action` varchar(20) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleid` int(11) NOT NULL,
  `rolename` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleid`, `rolename`, `description`) VALUES
(1, 'ADMIN', 'Personnel responsible for the management of feedback and complaint'),
(2, 'KKM', 'Personnel responsible for the management of dengue cases and statistics'),
(3, 'CPBV', 'Personnel responsible for taking the sample of dengue cases from particular location');

--
-- Triggers `role`
--
DELIMITER $$
CREATE TRIGGER `roleFormat` BEFORE INSERT ON `role` FOR EACH ROW SET NEW.rolename = UPPER(NEW.rolename)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`),
  ADD KEY `roleid` (`roleid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackid`),
  ADD KEY `localpplid` (`localpplid`);

--
-- Indexes for table `localpeople`
--
ALTER TABLE `localpeople`
  ADD PRIMARY KEY (`localpplid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passwordupdatelogs`
--
ALTER TABLE `passwordupdatelogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `localpeople`
--
ALTER TABLE `localpeople`
  MODIFY `localpplid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `passwordupdatelogs`
--
ALTER TABLE `passwordupdatelogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `role` (`roleid`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`localpplid`) REFERENCES `localpeople` (`localpplid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
