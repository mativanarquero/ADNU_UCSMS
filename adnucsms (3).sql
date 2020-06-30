-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 07:04 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adnucsms`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'Department of Computer Studies'),
(2, 'Department of Digital Arts and Computer Animation.'),
(3, 'College of Education'),
(4, 'Department of Philosophy '),
(5, 'Department of Psychology');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(50) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `faculty_type` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `email_address`, `password`, `faculty_type`, `department_id`) VALUES
(2, 'John G. Sixto', 'jsantos@gbox.adnu.edu.ph', 'c33367701511b4f6020ec61ded352059', 'Teacher', 1),
(3, 'Marianne A. Ang', 'mang@gbox.adnu.edu.ph', '15de21c670ae7c3f6f3f1f37029303c9', 'Chairperson', 1),
(65, 'Cardo Dalisay', 'cardz@gmail.com', '4297f44b13955235245b2497399d7a93', 'Teacher', 5),
(66, 'Alyana Dalisay', 'alyana@gmail.com', '4297f44b13955235245b2497399d7a93', 'Teacher', 5),
(67, 'Lola Flora', 'flora@gmail.com', '4297f44b13955235245b2497399d7a93', 'Chairperson', 5),
(68, 'Jelly P. Aureus', 'jellyp@gbox.adnu.edu.ph', '4297f44b13955235245b2497399d7a93', 'Teacher', 1),
(69, 'Cardo Dalisay', 'cards@gmail.com', '4297f44b13955235245b2497399d7a93', 'Teacher', 1),
(70, 'Lola Flora', 'florz@gmail.com', '4297f44b13955235245b2497399d7a93', 'Teacher', 1),
(71, 'Idol Raffy', 'tulfo@gmail.com', '4297f44b13955235245b2497399d7a93', 'Teacher', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE `school_year` (
  `sy_id` int(11) NOT NULL,
  `Description` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`sy_id`, `Description`) VALUES
(1, '2020-2021'),
(2, '2021-2022'),
(3, '2023-2024');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `time_id` int(11) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `day_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`time_id`, `time_start`, `time_end`, `day_id`) VALUES
(1, '07:30:00', '08:30:00', 1),
(2, '08:00:00', '09:00:00', 1),
(3, '08:30:00', '09:30:00', 1),
(4, '09:00:00', '10:00:00', 1),
(5, '10:00:00', '11:00:00', 1),
(6, '10:30:00', '11:30:00', 1),
(7, '11:00:00', '12:00:00', 1),
(8, '11:30:00', '12:30:00', 1),
(9, '12:00:00', '13:00:00', 1),
(10, '12:30:00', '13:30:00', 1),
(11, '13:00:00', '14:00:00', 1),
(12, '13:30:00', '14:30:00', 1),
(13, '14:00:00', '15:00:00', 1),
(14, '14:30:00', '15:30:00', 1),
(15, '15:00:00', '16:00:00', 1),
(16, '15:30:00', '16:30:00', 1),
(17, '16:00:00', '17:00:00', 1),
(18, '16:30:00', '17:30:00', 1),
(19, '17:00:00', '18:00:00', 1),
(20, '17:30:00', '18:30:00', 1),
(21, '18:00:00', '19:00:00', 1),
(22, '18:30:00', '19:30:00', 1),
(23, '19:00:00', '20:00:00', 1),
(24, '19:30:00', '20:30:00', 1),
(25, '20:00:00', '21:00:00', 1),
(26, '07:30:00', '09:00:00', 2),
(27, '08:00:00', '09:30:00', 2),
(28, '08:30:00', '10:00:00', 2),
(29, '09:00:00', '10:30:00', 2),
(30, '09:30:00', '11:00:00', 2),
(31, '10:00:00', '11:30:00', 2),
(32, '10:30:00', '12:00:00', 2),
(33, '11:00:00', '12:30:00', 2),
(34, '11:30:00', '13:00:00', 2),
(35, '12:00:00', '13:30:00', 2),
(36, '12:30:00', '14:00:00', 2),
(37, '13:00:00', '14:30:00', 2),
(38, '13:30:00', '15:00:00', 2),
(39, '14:00:00', '15:30:00', 2),
(40, '14:30:00', '16:00:00', 2),
(41, '15:00:00', '16:30:00', 2),
(42, '15:30:00', '17:00:00', 2),
(43, '16:00:00', '17:30:00', 2),
(44, '16:30:00', '18:00:00', 2),
(45, '17:00:00', '18:30:00', 2),
(46, '17:30:00', '19:00:00', 2),
(47, '18:00:00', '19:30:00', 2),
(48, '18:30:00', '20:00:00', 2),
(49, '19:00:00', '20:30:00', 2),
(50, '19:30:00', '21:00:00', 2),
(51, '07:30:00', '10:30:00', 3),
(52, '08:00:00', '11:00:00', 3),
(53, '08:30:00', '11:30:00', 3),
(54, '09:00:00', '12:00:00', 3),
(55, '09:30:00', '12:30:00', 3),
(56, '10:00:00', '13:00:00', 3),
(57, '10:30:00', '13:30:00', 1),
(58, '11:00:00', '14:00:00', 3),
(59, '11:30:00', '14:30:00', 3),
(60, '12:00:00', '15:00:00', 3),
(61, '12:30:00', '15:30:00', 3),
(62, '13:00:00', '16:00:00', 3),
(63, '13:30:00', '16:30:00', 3),
(64, '14:00:00', '17:00:00', 3),
(65, '14:30:00', '17:30:00', 3),
(66, '15:00:00', '18:00:00', 3),
(67, '15:30:00', '18:30:00', 3),
(68, '16:00:00', '19:00:00', 3),
(69, '16:30:00', '19:30:00', 3),
(70, '17:00:00', '20:00:00', 3),
(71, '17:30:00', '20:30:00', 3),
(72, '18:00:00', '21:00:00', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `school_year`
--
ALTER TABLE `school_year`
  ADD PRIMARY KEY (`sy_id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`time_id`),
  ADD KEY `day_id` (`day_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `school_year`
--
ALTER TABLE `school_year`
  MODIFY `sy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `time`
--
ALTER TABLE `time`
  ADD CONSTRAINT `time_ibfk_1` FOREIGN KEY (`day_id`) REFERENCES `day` (`day_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
