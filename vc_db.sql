-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 12:49 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_path` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `submit_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `userID`, `course_code`, `file_name`, `file_path`, `description`, `submit_time`) VALUES
(1, 7, 'CHE111', 'spencer-lbqLxgvLt0U-unsplash.jpg', 'assignment/spencer-lbqLxgvLt0U-unsplash.jpg', 'Chemical engineering 1 first week assignment for the semester', '2022-06-05 13:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `course_code`, `student_id`, `date`, `time`) VALUES
(3, 'CSC311', 7, '2022-08-05', '03:25:24'),
(4, 'CSC311', 16, '2022-08-05', '04:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `credit_load` int(11) NOT NULL,
  `course_description` varchar(255) NOT NULL,
  `course_outline` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `userID`, `course_code`, `course_title`, `credit_load`, `course_description`, `course_outline`) VALUES
(1, 1, 'CHE111', 'chemical engineering 1', 2, '', ''),
(2, 1, 'CHE112', 'chemical engineering 2', 3, '', ''),
(3, 1, 'MIT 709', 'System Security', 3, '', ''),
(4, 4, 'PRE100', 'production', 2, '', ''),
(5, 3, 'CSC311', 'Web Technologies', 3, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `course_registration`
--

CREATE TABLE `course_registration` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_registration`
--

INSERT INTO `course_registration` (`id`, `userID`, `user_email`, `course_code`, `regDate`) VALUES
(1, 7, 'hi@gmail.com', 'CHE111', '2022-06-15 12:15:49'),
(2, 5, 'fermac.pamela@gmail.com', 'CHE111', '2022-06-15 12:30:24'),
(3, 3, 'FedEx@google.com', 'CHE111', '2022-06-20 15:11:32'),
(4, 0, '', 'CHE111', '2022-07-21 12:40:39'),
(5, 3, 'FedEx@google.com', 'CHE112', '2022-07-21 12:47:00'),
(6, 16, 'osas@gmail.com', 'CHE111', '2022-07-29 10:46:01'),
(7, 17, 'sys@gmail.com', 'CHE111', '2022-07-29 14:08:09'),
(8, 18, 'ben@gmail.com', 'CHE111', '2022-07-29 14:22:21'),
(9, 16, 'osas@gmail.com', 'CSC311', '2022-08-05 10:16:53'),
(10, 18, 'ben@gmail.com', 'CSC311', '2022-08-05 10:31:44'),
(11, 7, 'hi@gmail.com', 'CSC311', '2022-08-05 13:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `general_library`
--

CREATE TABLE `general_library` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `file_name` text NOT NULL,
  `file_path` text NOT NULL,
  `size (KB)` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_library`
--

INSERT INTO `general_library` (`id`, `teacher_id`, `course_code`, `file_name`, `file_path`, `size (KB)`) VALUES
(3, 4, 'PRE100', 'admission_slip.pdf', 'general-library/PRE100/admission_slip.pdf', '104.8232421875KB'),
(4, 1, 'CHE111', '5.png', 'general-library/CHE111/5.png', '93.5927734375KB'),
(5, 1, 'CHE111', '4.png', 'general-library/CHE111/4.png', '99.5234375KB'),
(6, 1, 'CHE112', '3.png', 'general-library/CHE112/3.png', '102.4931640625KB'),
(7, 1, 'CHE112', '2.png', 'general-library/CHE112/2.png', '87.3828125KB');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `file_name` text NOT NULL,
  `file_path` text NOT NULL,
  `size (KB)` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `userID`, `file_name`, `file_path`, `size (KB)`) VALUES
(1, 1, 'algorithm-manual.pdf', 'library/algorithm-manual.pdf', '735.0166015625KB'),
(2, 1, 'christopher-gower-m_HRfLhgABo-unsplash.jpg', 'library/christopher-gower-m_HRfLhgABo-unsplash.jpg', '856.2666015625KB'),
(3, 3, 'oliver-pecker-HONJP8DyiSM-unsplash.jpg', 'library/oliver-pecker-HONJP8DyiSM-unsplash.jpg', '339.1025390625KB');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `token` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`id`, `email`, `token`) VALUES
(3, 'pam@gmail.com', '40d6e8c57a4927a286f99e61815b40f862533c0b623be');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_class`
--

CREATE TABLE `schedule_class` (
  `id` int(11) NOT NULL,
  `teacher_id` int(6) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_class`
--

INSERT INTO `schedule_class` (`id`, `teacher_id`, `course_code`, `date`, `time`) VALUES
(30, 1, 'CHE111', '2022-08-15', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `remote_id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `remote_id`, `role`) VALUES
(1, 3, 'Teacher'),
(2, 3, 'Teacher'),
(3, 3, 'Teacher'),
(4, 3, 'Teacher'),
(5, 3, 'Teacher'),
(6, 3, 'Teacher'),
(7, 3, 'Teacher'),
(8, 3, 'Teacher'),
(9, 3, 'Teacher'),
(10, 3, 'Teacher'),
(11, 16, 'Student'),
(12, 3, 'Teacher'),
(13, 3, 'Teacher'),
(14, 3, 'Teacher'),
(15, 3, 'Teacher'),
(16, 1, 'Teacher'),
(17, 1, 'Teacher'),
(18, 1, 'Teacher'),
(19, 1, 'Teacher'),
(20, 1, 'Teacher'),
(21, 1, 'Teacher'),
(22, 1, 'Teacher'),
(23, 1, 'Teacher'),
(24, 1, 'Teacher'),
(25, 1, 'Teacher'),
(26, 1, 'Teacher'),
(27, 1, 'Teacher'),
(28, 1, 'Teacher'),
(29, 1, 'Teacher'),
(30, 1, 'Teacher'),
(31, 1, 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `email` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `password` varchar(225) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `role` varchar(50) NOT NULL,
  `lastLogin` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `regDate` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `password`, `gender`, `role`, `lastLogin`, `regDate`, `image`) VALUES
(1, 'pam@gmail.com', 'pam', 'fer', '14ce1924b9954365c29b7593faea2237', 'Female', 'Teacher', '2022-02-04 11:16:04.288548', '2022-02-04 11:16:04.288548', 'profile-photo/laptop.jpg'),
(3, 'FedEx@google.com', 'jay', 'adams', 'dd5585a92b04d4420477ee6082770fd1', 'Male', 'Teacher', '2022-02-05 17:59:25.419605', '2022-02-05 17:59:25.419605', 'profile-photo/ales-nesetril-Im7lZjxeLhg-unsplash.jpg'),
(4, 'mac@gmail.com', 'terence', 'kachi', 'dd5585a92b04d4420477ee6082770fd1', 'Male', 'Teacher', '2022-02-07 16:17:50.651566', '2022-02-07 16:17:50.651566', 'profile-photo/carl-heyerdahl-KE0nC8-58MQ-unsplash.jpg'),
(5, 'fermac.pamela@gmail.com', 'jay', 'kachi', 'dd5585a92b04d4420477ee6082770fd1', 'Male', 'Student', '2022-02-08 19:20:29.472039', '2022-02-08 19:20:29.472039', ''),
(7, 'hi@gmail.com', 'Helen', 'Hilbert', 'e811af40e80c396fb9dd59c45a1c9ce5', 'Female', 'Student', '2022-02-26 13:10:33.339955', '2022-02-26 13:10:33.339955', ''),
(16, 'osas@gmail.com', 'osas', 'ogie', '3f1025b0b5ec977d556b3b6c122cd375', 'Male', 'Student', '2022-04-14 16:13:26.907202', '2022-04-14 16:13:26.907202', ''),
(17, 'sys@gmail.com', 'System', 'Windows', '54b53072540eeeb8f8e9343e71f28176', 'Male', 'Student', '2022-07-29 14:06:52.886531', '2022-07-29 14:06:52.886531', ''),
(18, 'ben@gmail.com', 'ben', 'adam', '5d9f71b71b207b9e665820c0dce67bdb', 'Male', 'Student', '2022-07-29 14:18:25.007706', '2022-07-29 14:18:25.007706', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_registration`
--
ALTER TABLE `course_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_library`
--
ALTER TABLE `general_library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_class`
--
ALTER TABLE `schedule_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_registration`
--
ALTER TABLE `course_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `general_library`
--
ALTER TABLE `general_library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule_class`
--
ALTER TABLE `schedule_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
