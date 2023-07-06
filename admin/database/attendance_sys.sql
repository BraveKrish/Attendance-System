-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 03:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `attendance` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `name`, `roll`, `attendance`, `date`) VALUES
(2, 'Krishna Parajuli', 100, 'Present', '2022-05-26'),
(3, 'Avishekh Bastola', 101, 'Absent', '2022-05-26'),
(8, 'Krishna Parajuli', 100, 'Absent', '2022-05-27'),
(9, 'Avishekh Bastola', 101, 'Present', '2022-05-27'),
(10, 'Krishna Parajuli', 100, 'Present', '2022-05-28'),
(11, 'Avishekh Bastola', 101, 'Absent', '2022-05-28'),
(12, 'Chris Khadka', 102, 'Present', '2022-05-28'),
(13, 'Rahul Shah', 103, 'Absent', '2022-05-28'),
(14, 'Love Kumar Rajbanshi', 105, 'Present', '2022-05-26'),
(15, 'Krishna Parajuli', 100, 'Present', '2022-05-30'),
(16, 'Avishekh Bastola', 101, 'Absent', '2022-05-30'),
(17, 'Chris Khadka', 102, 'Present', '2022-05-30'),
(18, 'Rahul Shah', 103, 'Present', '2022-05-30'),
(19, 'Love Kumar Rajbanshi', 105, 'Present', '2022-05-30'),
(20, 'Krishna Parajuli', 100, 'Present', '2022-06-01'),
(21, 'Avishekh Bastola', 101, 'Absent', '2022-06-01'),
(22, 'Chris Khadka', 102, 'Present', '2022-06-01'),
(23, 'Rahul Shah', 103, 'Absent', '2022-06-01'),
(24, 'Love Kumar Rajbanshi', 105, 'Absent', '2022-06-01'),
(25, 'Krishna Parajuli', 100, 'Absent', '2022-06-02'),
(26, 'Avishekh Bastola', 101, 'Absent', '2022-06-02'),
(27, 'Chris Khadka', 102, 'Present', '2022-06-02'),
(28, 'Rahul Shah', 103, 'Present', '2022-06-02'),
(29, 'Love Kumar Rajbanshi', 105, 'Present', '2022-06-02'),
(30, 'Krishna Parajuli', 100, 'Present', '2022-06-03'),
(31, 'Avishekh Bastola', 101, 'Absent', '2022-06-03'),
(32, 'Chris Khadka', 102, 'Absent', '2022-06-03'),
(33, 'Rahul Shah', 103, 'Absent', '2022-06-03'),
(34, 'Love Kumar Rajbanshi', 105, 'Present', '2022-06-03'),
(35, 'Krishna Parajuli', 100, 'Present', '2022-06-07'),
(36, 'Avishekh Bastola', 101, 'Present', '2022-06-07'),
(37, 'Chris Khadka', 102, 'Present', '2022-06-07'),
(38, 'Rahul Shah', 103, 'Absent', '2022-06-07'),
(39, 'Love Kumar Rajbanshi', 105, 'Absent', '2022-06-07'),
(40, 'Bigass Acharya', 6, 'Present', '2022-06-07'),
(41, 'Krishna Parajuli', 100, 'Present', '2022-06-08'),
(42, 'Avishekh Bastola', 101, 'Absent', '2022-06-08'),
(43, 'Chris Khadka', 102, 'Absent', '2022-06-08'),
(44, 'Rahul Shah', 103, 'Absent', '2022-06-08'),
(45, 'Love Kumar Rajbanshi', 105, 'Absent', '2022-06-08'),
(46, 'Bigass Acharya', 6, 'Present', '2022-06-08'),
(47, 'nabin shrestha', 107, 'Present', '2022-06-08'),
(48, 'Krishna Parajuli', 100, 'Present', '2022-06-09'),
(49, 'Avishekh Bastola', 101, 'Absent', '2022-06-09'),
(50, 'Chris Khadka', 102, 'Present', '2022-06-09'),
(51, 'Rahul Shah', 103, 'Present', '2022-06-09'),
(52, 'Love Kumar Rajbanshi', 105, 'Present', '2022-06-09'),
(53, 'Bigass Acharya', 6, 'Present', '2022-06-09'),
(54, 'nabin shrestha', 107, 'Present', '2022-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_tbl`
--

CREATE TABLE `attendance_tbl` (
  `id` int(11) NOT NULL,
  `att_date` date NOT NULL,
  `roll` bigint(30) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `attendance_status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_tbl`
--

INSERT INTO `attendance_tbl` (`id`, `att_date`, `roll`, `student_name`, `faculty`, `semester`, `attendance_status`) VALUES
(9, '2022-05-26', 100, 'Krishna Parajuli', 'Second', 'BCA', 0),
(12, '2022-05-27', 101, 'Avishekh Bastola', 'First', 'BCA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `duration`) VALUES
(7, 'CSIT', '8'),
(8, 'BCA', '4'),
(9, 'BHM', '3'),
(10, 'bsw', '4');

-- --------------------------------------------------------

--
-- Table structure for table `grade_tbl`
--

CREATE TABLE `grade_tbl` (
  `grade_id` int(11) NOT NULL,
  `grade_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade_tbl`
--

INSERT INTO `grade_tbl` (`grade_id`, `grade_name`) VALUES
(6, 'First'),
(8, 'Second');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `username`, `password`) VALUES
(4, 'Krishna Parajuli', 'krishparajuli57@gmail.com', 'Krishna', '123'),
(5, 'abhishekh bastola', 'abishekbastola57@gmail.com', 'abishek', 'bastola'),
(6, 'abhisekh bastola', 'abishekbastola57@gmail.com', 'abhi', 'abishek');

-- --------------------------------------------------------

--
-- Table structure for table `students_tbl`
--

CREATE TABLE `students_tbl` (
  `std_id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_tbl`
--

INSERT INTO `students_tbl` (`std_id`, `roll`, `student_name`, `faculty`, `semester`) VALUES
(1, 100, 'Krishna Parajuli', 'Second', 'BCA'),
(2, 101, 'Avishekh Bastola', 'First', 'BCA'),
(5, 102, 'Chris Khadka', 'Second', 'BCA'),
(6, 103, 'Rahul Shah', 'Third', 'BHM'),
(10, 104, 'ram basnet', 'First', 'BCA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_tbl`
--
ALTER TABLE `attendance_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `grade_tbl`
--
ALTER TABLE `grade_tbl`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_tbl`
--
ALTER TABLE `students_tbl`
  ADD PRIMARY KEY (`std_id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `attendance_tbl`
--
ALTER TABLE `attendance_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `grade_tbl`
--
ALTER TABLE `grade_tbl`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students_tbl`
--
ALTER TABLE `students_tbl`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
