-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 03:51 PM
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
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `chart_sensor`
--

CREATE TABLE `chart_sensor` (
  `ID` int(11) NOT NULL,
  `temp` int(11) NOT NULL,
  `tds` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chart_sensor`
--

INSERT INTO `chart_sensor` (`ID`, `temp`, `tds`, `date`, `email`) VALUES
(1, 30, 48, '2024-01-21 03:20:11', 'schrodinger@gmail.com'),
(2, 30, 38, '2024-01-21 03:20:18', 'schrodinger@gmail.com'),
(3, 30, 48, '2024-01-21 03:20:24', 'schrodinger@gmail.com'),
(4, 30, 49, '2024-01-21 03:20:30', 'schrodinger@gmail.com'),
(5, 30, 49, '2024-01-21 03:20:36', 'schrodinger@gmail.com'),
(6, 30, 49, '2024-01-21 03:20:42', 'schrodinger@gmail.com'),
(7, 30, 46, '2024-01-21 03:20:48', 'schrodinger@gmail.com'),
(8, 30, 45, '2024-01-21 03:20:55', 'schrodinger@gmail.com'),
(9, 30, 46, '2024-01-21 03:21:01', 'schrodinger@gmail.com'),
(10, 30, 39, '2024-01-21 03:21:07', 'schrodinger@gmail.com'),
(11, 30, 45, '2024-01-21 03:21:13', 'schrodinger@gmail.com'),
(12, 30, 45, '2024-01-21 03:21:19', 'schrodinger@gmail.com'),
(13, 30, 45, '2024-01-21 03:21:26', 'schrodinger@gmail.com'),
(14, 30, 39, '2024-01-21 03:21:32', 'schrodinger@gmail.com'),
(15, 30, 45, '2024-01-21 03:21:38', 'schrodinger@gmail.com'),
(16, 30, 45, '2024-01-21 03:21:44', 'schrodinger@gmail.com'),
(17, 30, 45, '2024-01-21 03:21:50', 'schrodinger@gmail.com'),
(18, 30, 45, '2024-01-21 03:21:57', 'schrodinger@gmail.com'),
(19, 30, 46, '2024-01-21 03:22:03', 'schrodinger@gmail.com'),
(20, 30, 45, '2024-01-21 03:22:09', 'schrodinger@gmail.com'),
(21, 30, 38, '2024-01-21 03:22:15', 'schrodinger@gmail.com'),
(22, 31, 44, '2024-01-21 03:22:21', 'schrodinger@gmail.com'),
(23, 31, 46, '2024-01-21 03:22:27', 'schrodinger@gmail.com'),
(24, 31, 44, '2024-01-21 03:22:34', 'schrodinger@gmail.com'),
(25, 31, 44, '2024-01-21 03:22:40', 'schrodinger@gmail.com'),
(26, 31, 44, '2024-01-21 03:22:46', 'schrodinger@gmail.com'),
(27, 31, 44, '2024-01-21 03:22:52', 'schrodinger@gmail.com'),
(28, 31, 44, '2024-01-21 03:22:58', 'schrodinger@gmail.com'),
(29, 31, 44, '2024-01-21 03:23:05', 'schrodinger@gmail.com'),
(30, 31, 38, '2024-01-21 03:23:11', 'schrodinger@gmail.com'),
(31, 31, 44, '2024-01-21 03:23:17', 'schrodinger@gmail.com'),
(32, 31, 44, '2024-01-21 03:23:23', 'schrodinger@gmail.com'),
(33, 31, 349, '2024-01-21 03:23:29', 'schrodinger@gmail.com'),
(34, 31, 394, '2024-01-21 03:23:35', 'schrodinger@gmail.com'),
(35, 31, 305, '2024-01-21 03:23:42', 'schrodinger@gmail.com'),
(36, 31, 297, '2024-01-21 03:23:48', 'schrodinger@gmail.com'),
(37, 31, 349, '2024-01-21 03:23:54', 'schrodinger@gmail.com'),
(38, 31, 366, '2024-01-21 03:24:00', 'schrodinger@gmail.com'),
(39, 31, 400, '2024-01-21 03:24:06', 'schrodinger@gmail.com'),
(40, 31, 386, '2024-01-21 03:24:13', 'schrodinger@gmail.com'),
(41, 31, 347, '2024-01-21 03:24:19', 'schrodinger@gmail.com'),
(42, 31, 375, '2024-01-21 03:24:25', 'schrodinger@gmail.com'),
(43, 31, 417, '2024-01-21 03:24:31', 'schrodinger@gmail.com'),
(44, 31, 412, '2024-01-21 03:24:37', 'schrodinger@gmail.com'),
(45, 31, 414, '2024-01-21 03:24:44', 'schrodinger@gmail.com'),
(46, 31, 414, '2024-01-21 03:24:50', 'schrodinger@gmail.com'),
(47, 31, 414, '2024-01-21 03:24:59', 'schrodinger@gmail.com'),
(48, 31, 412, '2024-01-21 03:25:05', 'schrodinger@gmail.com'),
(49, 31, 412, '2024-01-21 03:25:11', 'schrodinger@gmail.com'),
(50, 31, 407, '2024-01-21 03:25:17', 'schrodinger@gmail.com'),
(51, 31, 405, '2024-01-21 03:25:23', 'schrodinger@gmail.com'),
(52, 31, 402, '2024-01-21 03:25:29', 'schrodinger@gmail.com'),
(53, 31, 409, '2024-01-21 03:25:36', 'schrodinger@gmail.com'),
(54, 31, 400, '2024-01-21 03:25:42', 'schrodinger@gmail.com'),
(55, 31, 405, '2024-01-21 03:25:48', 'schrodinger@gmail.com'),
(56, 31, 409, '2024-01-21 03:25:54', 'schrodinger@gmail.com'),
(57, 32, 392, '2024-01-21 03:26:00', 'schrodinger@gmail.com'),
(58, 31, 404, '2024-01-21 03:26:07', 'schrodinger@gmail.com'),
(59, 31, 405, '2024-01-21 03:26:13', 'schrodinger@gmail.com'),
(60, 31, 409, '2024-01-21 03:26:19', 'schrodinger@gmail.com'),
(61, 31, 414, '2024-01-21 03:26:25', 'schrodinger@gmail.com'),
(62, 31, 410, '2024-01-21 03:26:31', 'schrodinger@gmail.com'),
(63, 31, 414, '2024-01-21 03:26:37', 'schrodinger@gmail.com'),
(64, 31, 409, '2024-01-21 03:26:44', 'schrodinger@gmail.com'),
(65, 31, 409, '2024-01-21 03:26:50', 'schrodinger@gmail.com'),
(66, 31, 409, '2024-01-21 03:26:56', 'schrodinger@gmail.com'),
(67, 31, 404, '2024-01-21 03:27:02', 'schrodinger@gmail.com'),
(68, 31, 409, '2024-01-21 03:27:09', 'schrodinger@gmail.com'),
(69, 32, 394, '2024-01-21 03:27:15', 'schrodinger@gmail.com'),
(70, 32, 408, '2024-01-21 03:27:21', 'schrodinger@gmail.com'),
(71, 32, 400, '2024-01-21 03:27:27', 'schrodinger@gmail.com'),
(72, 32, 403, '2024-01-21 03:27:33', 'schrodinger@gmail.com'),
(73, 32, 405, '2024-01-21 03:27:39', 'schrodinger@gmail.com'),
(74, 32, 400, '2024-01-21 03:27:46', 'schrodinger@gmail.com'),
(75, 32, 392, '2024-01-21 03:27:52', 'schrodinger@gmail.com'),
(76, 32, 47, '2024-01-21 03:27:58', 'schrodinger@gmail.com'),
(77, 31, 51, '2024-01-21 03:28:04', 'schrodinger@gmail.com'),
(78, 31, 58, '2024-01-21 03:28:10', 'schrodinger@gmail.com'),
(79, 32, 50, '2024-01-21 03:28:17', 'schrodinger@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `data_sensor`
--

CREATE TABLE `data_sensor` (
  `id` int(11) NOT NULL,
  `ph` int(12) DEFAULT NULL,
  `tds` int(12) DEFAULT NULL,
  `temp` int(12) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_sensor`
--

INSERT INTO `data_sensor` (`id`, `ph`, `tds`, `temp`, `email`) VALUES
(1, 9, 50, 32, 'schrodinger@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `phchart_sensor`
--

CREATE TABLE `phchart_sensor` (
  `id` int(12) NOT NULL,
  `ph` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phchart_sensor`
--

INSERT INTO `phchart_sensor` (`id`, `ph`, `email`, `date`) VALUES
(1, 4, 'schrodinger@gmail.com', '2024-01-21 03:21:32'),
(2, 15, 'schrodinger@gmail.com', '2024-01-21 03:21:38'),
(3, 4, 'schrodinger@gmail.com', '2024-01-21 03:21:45'),
(4, 4, 'schrodinger@gmail.com', '2024-01-21 03:21:51'),
(5, 4, 'schrodinger@gmail.com', '2024-01-21 03:21:57'),
(6, 4, 'schrodinger@gmail.com', '2024-01-21 03:22:03'),
(7, 25, 'schrodinger@gmail.com', '2024-01-21 03:22:09'),
(8, 4, 'schrodinger@gmail.com', '2024-01-21 03:22:15'),
(9, 14, 'schrodinger@gmail.com', '2024-01-21 03:22:22'),
(10, 8, 'schrodinger@gmail.com', '2024-01-21 03:22:28'),
(11, 25, 'schrodinger@gmail.com', '2024-01-21 03:22:34'),
(12, 4, 'schrodinger@gmail.com', '2024-01-21 03:22:40'),
(13, 21, 'schrodinger@gmail.com', '2024-01-21 03:22:46'),
(14, 25, 'schrodinger@gmail.com', '2024-01-21 03:22:52'),
(15, 4, 'schrodinger@gmail.com', '2024-01-21 03:22:58'),
(16, 12, 'schrodinger@gmail.com', '2024-01-21 03:23:05'),
(17, 4, 'schrodinger@gmail.com', '2024-01-21 03:23:11'),
(18, 4, 'schrodinger@gmail.com', '2024-01-21 03:23:17'),
(19, 7, 'schrodinger@gmail.com', '2024-01-21 03:23:23'),
(20, 9, 'schrodinger@gmail.com', '2024-01-21 03:23:29'),
(21, 8, 'schrodinger@gmail.com', '2024-01-21 03:23:36'),
(22, 6, 'schrodinger@gmail.com', '2024-01-21 03:23:42'),
(23, 7, 'schrodinger@gmail.com', '2024-01-21 03:23:48'),
(24, 6, 'schrodinger@gmail.com', '2024-01-21 03:23:54'),
(25, 7, 'schrodinger@gmail.com', '2024-01-21 03:24:00'),
(26, 8, 'schrodinger@gmail.com', '2024-01-21 03:24:06'),
(27, 5, 'schrodinger@gmail.com', '2024-01-21 03:24:13'),
(28, 9, 'schrodinger@gmail.com', '2024-01-21 03:24:19'),
(29, 9, 'schrodinger@gmail.com', '2024-01-21 03:24:25'),
(30, 9, 'schrodinger@gmail.com', '2024-01-21 03:24:31'),
(31, 6, 'schrodinger@gmail.com', '2024-01-21 03:24:37'),
(32, 4, 'schrodinger@gmail.com', '2024-01-21 03:24:43'),
(33, 8, 'schrodinger@gmail.com', '2024-01-21 03:24:51'),
(34, 7, 'schrodinger@gmail.com', '2024-01-21 03:24:57'),
(35, 8, 'schrodinger@gmail.com', '2024-01-21 03:25:04'),
(36, 8, 'schrodinger@gmail.com', '2024-01-21 03:25:10'),
(37, 8, 'schrodinger@gmail.com', '2024-01-21 03:25:16'),
(38, 7, 'schrodinger@gmail.com', '2024-01-21 03:25:22'),
(39, 6, 'schrodinger@gmail.com', '2024-01-21 03:25:28'),
(40, 8, 'schrodinger@gmail.com', '2024-01-21 03:25:34'),
(41, 4, 'schrodinger@gmail.com', '2024-01-21 03:25:40'),
(42, 9, 'schrodinger@gmail.com', '2024-01-21 03:25:46'),
(43, 8, 'schrodinger@gmail.com', '2024-01-21 03:25:53'),
(44, 9, 'schrodinger@gmail.com', '2024-01-21 03:25:59'),
(45, 7, 'schrodinger@gmail.com', '2024-01-21 03:26:05'),
(46, 9, 'schrodinger@gmail.com', '2024-01-21 03:26:11'),
(47, 9, 'schrodinger@gmail.com', '2024-01-21 03:26:17'),
(48, 9, 'schrodinger@gmail.com', '2024-01-21 03:26:23'),
(49, 12, 'schrodinger@gmail.com', '2024-01-21 03:26:29'),
(50, 8, 'schrodinger@gmail.com', '2024-01-21 03:26:36'),
(51, 9, 'schrodinger@gmail.com', '2024-01-21 03:26:42'),
(52, 6, 'schrodinger@gmail.com', '2024-01-21 03:26:48'),
(53, 9, 'schrodinger@gmail.com', '2024-01-21 03:26:54'),
(54, 9, 'schrodinger@gmail.com', '2024-01-21 03:27:00'),
(55, 9, 'schrodinger@gmail.com', '2024-01-21 03:27:06'),
(56, 9, 'schrodinger@gmail.com', '2024-01-21 03:27:13'),
(57, 5, 'schrodinger@gmail.com', '2024-01-21 03:27:19'),
(58, 7, 'schrodinger@gmail.com', '2024-01-21 03:27:25'),
(59, 8, 'schrodinger@gmail.com', '2024-01-21 03:27:31'),
(60, 5, 'schrodinger@gmail.com', '2024-01-21 03:27:37'),
(61, 9, 'schrodinger@gmail.com', '2024-01-21 03:27:44'),
(62, 9, 'schrodinger@gmail.com', '2024-01-21 03:27:50'),
(63, 8, 'schrodinger@gmail.com', '2024-01-21 03:27:56'),
(64, 7, 'schrodinger@gmail.com', '2024-01-21 03:28:02'),
(65, 8, 'schrodinger@gmail.com', '2024-01-21 03:28:08'),
(66, 9, 'schrodinger@gmail.com', '2024-01-24 14:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `birth` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `wa` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `email`, `password`, `photo`, `birth`, `mobile`, `address`, `job`, `nationality`, `about`, `instagram`, `wa`, `github`, `linkedin`) VALUES
(8, 'schrodinger', 'schrodinger@gmail.com', '$2y$10$o7o/p2r40OkhyGOHQlSsZ.Vs8F4pWleC5ctlqZEfKTjTFlGl4n93y', '1696567357_00e3f00bf676530fb2a2.png', '1 January 1880', '082114852228', 'jakarta', 'student', 'indonesia', 'Final Year Student At President University.', 'titoalexsta_', '082114852228', 'tito', 'tito');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chart_sensor`
--
ALTER TABLE `chart_sensor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `data_sensor`
--
ALTER TABLE `data_sensor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phchart_sensor`
--
ALTER TABLE `phchart_sensor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chart_sensor`
--
ALTER TABLE `chart_sensor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `data_sensor`
--
ALTER TABLE `data_sensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phchart_sensor`
--
ALTER TABLE `phchart_sensor`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
