-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 ديسمبر 2025 الساعة 00:18
-- إصدار الخادم: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_housing_db`
--

-- --------------------------------------------------------

--
-- بنية الجدول `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `student_number` varchar(50) NOT NULL,
  `college` varchar(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `building_number` varchar(50) DEFAULT NULL,
  `room_number` varchar(50) DEFAULT NULL,
  `bed_number` varchar(50) DEFAULT NULL,
  `phone_number` varchar(30) DEFAULT NULL,
  `housing_date` date DEFAULT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `students`
--

INSERT INTO `students` (`id`, `full_name`, `student_number`, `college`, `level`, `building_number`, `room_number`, `bed_number`, `phone_number`, `housing_date`, `notes`) VALUES
(5, 'هدى هزازي', '1254445', 'التطبيقية', 'الثاني', '15', '200', '20', '20202020', '2025-12-08', ''),
(6, 'نورة', '2025001', 'التطبيقية', 'الثاني', '15', '201', '03', '051254585', '2025-12-03', ''),
(8, 'ميعاد', '2025004', 'التطبيقية', 'الثاني', '11', '203', '05', '', '2025-12-01', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
