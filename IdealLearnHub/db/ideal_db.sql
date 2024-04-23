-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 09:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ideal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `username`, `password`) VALUES
(1, 'yannick', 'ya123'),
(3, 'kellen', '123'),
(4, 'placide', 'pla123');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_firstname` text NOT NULL,
  `student_lastname` text NOT NULL,
  `student_username` varchar(255) NOT NULL,
  `student_pass` varchar(255) NOT NULL,
  `student_trade` text NOT NULL,
  `sector` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_firstname`, `student_lastname`, `student_username`, `student_pass`, `student_trade`, `sector`) VALUES
(1, 'lily', 'TUYISHIME', 'lily123', 'l123', 'SOFTWARE', 'ICT'),
(2, 'alvin', 'ruberwa', 'alvin123', 'a123', 'MULTMEDIA', 'ICT');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `teacher_firstname` text NOT NULL,
  `teacher_lastname` text NOT NULL,
  `teacher_username` varchar(255) NOT NULL,
  `teacher_pass` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `teacher_firstname`, `teacher_lastname`, `teacher_username`, `teacher_pass`, `phone`, `created_at`) VALUES
(1, 'lily', 'TUYISHIME', 'lily123', 'l123', 788662189, '2024-01-03 04:07:07'),
(13, 'yannick', 'to', 'yannick', 'ya1234', 788662189, '2024-01-08 07:01:05'),
(14, 'guy', 'gtyy', 'admin123', 'adm123', 7878, '2024-01-08 09:03:34'),
(15, 'kellen', 'rafiki', 'kellen', '12345', 788662189, '2024-01-09 00:09:33'),
(17, 'NIZEYIMANA', 'PLACIDE', 'placide', '123456', 788662189, '2024-01-18 06:51:40'),
(18, 'NIZEYIMANA', 'PLACIDE', 'placide', '5362819876456379', 788662189, '2024-01-23 00:05:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `admin_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
