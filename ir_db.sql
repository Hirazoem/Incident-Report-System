-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 02:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ir_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_account`
--

CREATE TABLE `all_account` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_account`
--

INSERT INTO `all_account` (`email`, `password`) VALUES
('admin@gmail.com', '123'),
('admin_access@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `ignore_report`
--

CREATE TABLE `ignore_report` (
  `report_no` int(11) NOT NULL,
  `date_ignored` date NOT NULL,
  `reason` varchar(100) NOT NULL,
  `reported_by` varchar(100) NOT NULL,
  `involved_person` varchar(100) NOT NULL,
  `ip_stat` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `loc` varchar(100) NOT NULL,
  `ip_sevlevel` varchar(100) NOT NULL,
  `ip_incident` varchar(100) NOT NULL,
  `ip_detail` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `simage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ignore_report`
--

INSERT INTO `ignore_report` (`report_no`, `date_ignored`, `reason`, `reported_by`, `involved_person`, `ip_stat`, `date`, `time`, `loc`, `ip_sevlevel`, `ip_incident`, `ip_detail`, `image`, `simage`) VALUES
(17, '2023-07-17', '', 'stud@gmail.com', 'Ranran', 'Student', '2023-07-16', '17:10:00', 'SSS', 'F', 'Theft', '', '', ''),
(18, '2023-07-18', '', 'admin@gmail.com', 'Yuu', '', '2023-07-18', '00:51:00', 'Dito', 'Student Organization Conflicts', 'B', '', '', ''),
(19, '2023-07-18', '', 'admin@gmail.com', 'Yuu', '', '2023-07-18', '00:51:00', 'Dito', 'Student Organization Conflicts', 'B', '', '', ''),
(20, '2023-07-19', '', 'admin@gmail.com', 'Yii', 'College & Dept. Staff', '2023-07-18', '00:59:00', 'D', 'C', 'Hazing', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pending_report`
--

CREATE TABLE `pending_report` (
  `report_no` int(11) NOT NULL,
  `reported_by` varchar(100) NOT NULL,
  `involved_person` varchar(100) NOT NULL,
  `ip_stat` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `loc` varchar(100) NOT NULL,
  `ip_sevlevel` varchar(100) NOT NULL,
  `ip_incident` varchar(100) NOT NULL,
  `ip_detail` varchar(1000) NOT NULL,
  `image` varchar(250) NOT NULL,
  `simage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `responded_report`
--

CREATE TABLE `responded_report` (
  `report_no` int(11) NOT NULL,
  `date_responded` date NOT NULL,
  `reported_by` varchar(100) NOT NULL,
  `involved_person` varchar(100) NOT NULL,
  `ip_stat` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `loc` varchar(100) NOT NULL,
  `ip_sevlevel` varchar(100) NOT NULL,
  `ip_incident` varchar(100) NOT NULL,
  `ip_detail` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `simage` varchar(250) NOT NULL,
  `action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responded_report`
--

INSERT INTO `responded_report` (`report_no`, `date_responded`, `reported_by`, `involved_person`, `ip_stat`, `date`, `time`, `loc`, `ip_sevlevel`, `ip_incident`, `ip_detail`, `image`, `simage`, `action`) VALUES
(49, '2023-07-18', 'stud@gmail.com', 'Ranran', 'Student', '2023-07-16', '17:10:00', 'SSS', '', 'F', '', '', '', ''),
(50, '2023-07-18', 'stud@gmail.com', 'Ranran', 'Student', '2023-07-16', '17:10:00', 'SSS', '', 'F', '', '', '', ''),
(51, '2023-07-18', 'stud@gmail.com', 'Pie', 'Student', '2023-07-17', '20:32:00', 'Saan', 'A', 'Sexual Assault and Harassment', '', '', '', ''),
(52, '2023-07-18', 'stud@gmail.com', 'Pie', 'Student', '2023-07-17', '20:32:00', 'Saan', 'A', 'Sexual Assault and Harassment', '', '', '', ''),
(53, '2023-07-18', 'stud@gmail.com', 'Pie', 'Student', '2023-07-17', '20:32:00', 'Saan', 'A', 'Sexual Assault and Harassment', '', '', '', ''),
(54, '2023-07-18', 'admin@gmail.com', 'Yuu', '', '2023-07-18', '00:51:00', 'Dito', 'B', 'Student Organization Conflicts', '', '', '', ''),
(55, '2023-07-18', 'stud@gmail.com', 'Yukipie', 'College & Dept. Staff', '2023-07-17', '20:28:00', 'Saan', 'S', 'Health Emergencies', '', '', '', ''),
(56, '2023-07-18', 'stud@gmail.com', 'Ran', 'Student', '2023-07-18', '21:42:00', 'saab', 'A', 'Physical Altercations', '', 'cert.jpg', 'untitled.mp4', ''),
(57, '2023-07-18', 'stud@gmail.com', 'Ran', 'Student', '2023-07-18', '21:42:00', 'saab', 'A', 'Physical Altercations', '', 'cert.jpg', 'untitled.mp4', ''),
(58, '2023-07-19', 'stud@gmail.com', 'Yuyu', 'Student', '2023-07-18', '22:25:00', 'saan', 'A', 'Physical Altercations', '', 'report-ign.png', 'untitled.mp4', 'Probation');

-- --------------------------------------------------------

--
-- Table structure for table `stud_admin_rec`
--

CREATE TABLE `stud_admin_rec` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `yr_sec` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `simage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_admin_rec`
--

INSERT INTO `stud_admin_rec` (`email`, `password`, `name`, `yr_sec`, `profession`, `department`, `contact`, `status`, `image`, `simage`) VALUES
('admin@gmail.com', '123', 'Admin One', '', 'Professor', 'College of Arts and Sciences', '1234', 'College & Dept. Staff', 'dp.jpg', ''),
('jen@g.n', '123', 'Jennie', '3 - C', '', 'College of Architecture and Fine Arts', '1234', 'Student', '3.jpg', 'cert.jpg'),
('stud@gmail.com', '123', 'Student', '1 - A', '', 'College of Architecture and Fine Arts', '123', 'Student', 'profile.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_account`
--
ALTER TABLE `all_account`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `ignore_report`
--
ALTER TABLE `ignore_report`
  ADD PRIMARY KEY (`report_no`);

--
-- Indexes for table `pending_report`
--
ALTER TABLE `pending_report`
  ADD PRIMARY KEY (`report_no`);

--
-- Indexes for table `responded_report`
--
ALTER TABLE `responded_report`
  ADD PRIMARY KEY (`report_no`);

--
-- Indexes for table `stud_admin_rec`
--
ALTER TABLE `stud_admin_rec`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ignore_report`
--
ALTER TABLE `ignore_report`
  MODIFY `report_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pending_report`
--
ALTER TABLE `pending_report`
  MODIFY `report_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `responded_report`
--
ALTER TABLE `responded_report`
  MODIFY `report_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
