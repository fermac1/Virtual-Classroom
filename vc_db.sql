-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 07:28 PM
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
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `file_name` text NOT NULL,
  `file_path` text NOT NULL,
  `size (KB)` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, 'FedEx@google.com', 'jay', 'adams', 'dd5585a92b04d4420477ee6082770fd1', 'Male', 'Student', '2022-02-05 17:59:25.419605', '2022-02-05 17:59:25.419605', 'profile-photo/ales-nesetril-Im7lZjxeLhg-unsplash.jpg'),
(4, 'mac@gmail.com', 'terence', 'kachi', 'dd5585a92b04d4420477ee6082770fd1', 'Male', 'Teacher', '2022-02-07 16:17:50.651566', '2022-02-07 16:17:50.651566', 'profile-photo/carl-heyerdahl-KE0nC8-58MQ-unsplash.jpg'),
(5, 'fermac.pamela@gmail.com', 'jay', 'kachi', 'dd5585a92b04d4420477ee6082770fd1', 'Male', 'Student', '2022-02-08 19:20:29.472039', '2022-02-08 19:20:29.472039', ''),
(7, 'hi@gmail.com', 'Helen', 'Hilbert', 'e811af40e80c396fb9dd59c45a1c9ce5', 'Female', 'Student', '2022-02-26 13:10:33.339955', '2022-02-26 13:10:33.339955', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
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
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
