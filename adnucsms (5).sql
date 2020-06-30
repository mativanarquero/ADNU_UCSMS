-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2020 at 04:37 AM
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
-- Table structure for table `advisement`
--

CREATE TABLE `advisement` (
  `id` int(11) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `no_advisement` int(11) NOT NULL,
  `suggest_section_count` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advisement`
--

INSERT INTO `advisement` (`id`, `subject_code`, `subject_name`, `no_advisement`, `suggest_section_count`, `semester`) VALUES
(1, 'ICST101', 'Programming 1', 40, 2, '2nd Semester'),
(2, 'ICST102', 'Programming 2', 45, 2, '2nd Semester'),
(3, 'ICST231', 'Web Development and Programming', 60, 3, '2nd Semester'),
(4, 'ICST240', 'Operating Systems', 42, 2, '2nd Semester'),
(5, 'ICST108', 'Professional Ethics', 45, 2, '2nd Semester');

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
(66, 'Alyana Dalisay', 'alyana@gmail.com', '4297f44b13955235245b2497399d7a93', 'Teacher', 5),
(68, 'Jelly P. Aureus', 'jellyp@gbox.adnu.edu.ph', '4297f44b13955235245b2497399d7a93', 'Teacher', 1);

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
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `credit_units` int(11) NOT NULL,
  `lec_units` int(11) NOT NULL,
  `lab_units` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_name`, `credit_units`, `lec_units`, `lab_units`, `department_id`) VALUES
(1, 'ICST101', 'Programming 1', 3, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject_offering`
--

CREATE TABLE `subject_offering` (
  `offering_id` int(11) NOT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `subject_id` int(11) NOT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `time_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisement`
--
ALTER TABLE `advisement`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `subject_offering`
--
ALTER TABLE `subject_offering`
  ADD PRIMARY KEY (`offering_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advisement`
--
ALTER TABLE `advisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `school_year`
--
ALTER TABLE `school_year`
  MODIFY `sy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject_offering`
--
ALTER TABLE `subject_offering`
  MODIFY `offering_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
