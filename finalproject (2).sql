-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 09:01 AM
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
(1, 28, 0, '2024-01-29 05:32:14', 'schrodinger@gmail.com'),
(2, 28, 0, '2024-01-29 05:32:20', 'schrodinger@gmail.com'),
(3, 28, 0, '2024-01-29 05:32:26', 'schrodinger@gmail.com'),
(4, 28, 0, '2024-01-29 05:32:32', 'schrodinger@gmail.com'),
(5, 28, 0, '2024-01-29 05:32:39', 'schrodinger@gmail.com'),
(6, 28, 0, '2024-01-29 05:32:45', 'schrodinger@gmail.com'),
(7, 28, 0, '2024-01-29 05:32:51', 'schrodinger@gmail.com'),
(8, 28, 0, '2024-01-29 05:32:57', 'schrodinger@gmail.com'),
(9, 28, 0, '2024-01-29 05:33:03', 'schrodinger@gmail.com'),
(10, 28, 0, '2024-01-29 05:33:09', 'schrodinger@gmail.com'),
(11, 28, 0, '2024-01-29 05:33:15', 'schrodinger@gmail.com'),
(12, 28, 0, '2024-01-29 05:33:22', 'schrodinger@gmail.com'),
(13, 28, 0, '2024-01-29 05:33:28', 'schrodinger@gmail.com'),
(14, 28, 0, '2024-01-29 05:33:34', 'schrodinger@gmail.com'),
(15, 28, 0, '2024-01-29 05:33:40', 'schrodinger@gmail.com'),
(16, 28, 0, '2024-01-29 05:33:46', 'schrodinger@gmail.com'),
(17, 28, 0, '2024-01-29 05:33:52', 'schrodinger@gmail.com'),
(18, 28, 0, '2024-01-29 05:33:58', 'schrodinger@gmail.com'),
(19, 28, 0, '2024-01-29 05:34:05', 'schrodinger@gmail.com'),
(20, 28, 0, '2024-01-29 05:34:11', 'schrodinger@gmail.com'),
(21, 28, 0, '2024-01-29 05:34:17', 'schrodinger@gmail.com'),
(22, 28, 0, '2024-01-29 05:34:23', 'schrodinger@gmail.com'),
(23, 28, 0, '2024-01-29 05:34:29', 'schrodinger@gmail.com'),
(24, 28, 0, '2024-01-29 05:34:35', 'schrodinger@gmail.com'),
(25, 28, 0, '2024-01-29 05:34:42', 'schrodinger@gmail.com'),
(26, 28, 0, '2024-01-29 05:34:48', 'schrodinger@gmail.com'),
(27, 28, 0, '2024-01-29 05:34:54', 'schrodinger@gmail.com'),
(28, 28, 0, '2024-01-29 05:35:00', 'schrodinger@gmail.com'),
(29, 28, 0, '2024-01-29 05:35:06', 'schrodinger@gmail.com'),
(30, 28, 0, '2024-01-29 05:35:12', 'schrodinger@gmail.com'),
(31, 28, 0, '2024-01-29 05:35:19', 'schrodinger@gmail.com'),
(32, 28, 0, '2024-01-29 05:35:25', 'schrodinger@gmail.com'),
(33, 28, 0, '2024-01-29 05:35:31', 'schrodinger@gmail.com'),
(34, 28, 0, '2024-01-29 05:35:37', 'schrodinger@gmail.com'),
(35, 28, 0, '2024-01-29 05:35:43', 'schrodinger@gmail.com'),
(36, 28, 0, '2024-01-29 05:35:49', 'schrodinger@gmail.com'),
(37, 28, 0, '2024-01-29 05:35:56', 'schrodinger@gmail.com'),
(38, 28, 0, '2024-01-29 05:36:02', 'schrodinger@gmail.com'),
(39, 28, 0, '2024-01-29 05:36:08', 'schrodinger@gmail.com'),
(40, 28, 0, '2024-01-29 05:36:14', 'schrodinger@gmail.com'),
(41, 28, 0, '2024-01-29 05:36:20', 'schrodinger@gmail.com'),
(42, 28, 0, '2024-01-29 05:36:26', 'schrodinger@gmail.com'),
(43, 28, 0, '2024-01-29 05:36:33', 'schrodinger@gmail.com'),
(44, 28, 0, '2024-01-29 05:36:39', 'schrodinger@gmail.com'),
(45, 28, 0, '2024-01-29 05:36:45', 'schrodinger@gmail.com'),
(46, 28, 0, '2024-01-29 05:36:51', 'schrodinger@gmail.com'),
(47, 28, 0, '2024-01-29 05:36:57', 'schrodinger@gmail.com'),
(48, 28, 0, '2024-01-29 05:37:03', 'schrodinger@gmail.com'),
(49, 28, 0, '2024-01-29 05:37:10', 'schrodinger@gmail.com'),
(50, 28, 0, '2024-01-29 05:37:16', 'schrodinger@gmail.com'),
(51, 28, 0, '2024-01-29 05:37:22', 'schrodinger@gmail.com'),
(52, 28, 0, '2024-01-29 05:37:28', 'schrodinger@gmail.com'),
(53, 28, 0, '2024-01-29 05:37:34', 'schrodinger@gmail.com'),
(54, 28, 0, '2024-01-29 05:37:47', 'schrodinger@gmail.com'),
(55, 29, 0, '2024-01-29 05:59:18', 'schrodinger@gmail.com'),
(56, 29, 0, '2024-01-29 05:59:24', 'schrodinger@gmail.com'),
(57, 29, 0, '2024-01-29 05:59:30', 'schrodinger@gmail.com'),
(58, 29, 0, '2024-01-29 05:59:36', 'schrodinger@gmail.com'),
(59, 29, 0, '2024-01-29 05:59:43', 'schrodinger@gmail.com'),
(60, 29, 0, '2024-01-29 05:59:49', 'schrodinger@gmail.com'),
(61, 29, 0, '2024-01-29 05:59:55', 'schrodinger@gmail.com'),
(62, 29, 0, '2024-01-29 06:00:01', 'schrodinger@gmail.com'),
(63, 29, 0, '2024-01-29 06:00:08', 'schrodinger@gmail.com'),
(64, 29, 0, '2024-01-29 06:00:14', 'schrodinger@gmail.com'),
(65, 29, 0, '2024-01-29 06:00:20', 'schrodinger@gmail.com'),
(66, 29, 0, '2024-01-29 06:00:26', 'schrodinger@gmail.com'),
(67, 29, 0, '2024-01-29 06:00:32', 'schrodinger@gmail.com'),
(68, 29, 0, '2024-01-29 06:00:38', 'schrodinger@gmail.com'),
(69, 29, 0, '2024-01-29 06:00:45', 'schrodinger@gmail.com'),
(70, 29, 0, '2024-01-29 06:00:51', 'schrodinger@gmail.com'),
(71, 29, 0, '2024-01-29 06:00:57', 'schrodinger@gmail.com'),
(72, 29, 0, '2024-01-29 06:01:03', 'schrodinger@gmail.com'),
(73, 29, 0, '2024-01-29 06:01:09', 'schrodinger@gmail.com'),
(74, 29, 0, '2024-01-29 06:01:15', 'schrodinger@gmail.com'),
(75, 29, 0, '2024-01-29 06:01:22', 'schrodinger@gmail.com'),
(76, 29, 0, '2024-01-29 06:01:28', 'schrodinger@gmail.com'),
(77, 29, 0, '2024-01-29 06:01:34', 'schrodinger@gmail.com'),
(78, 29, 0, '2024-01-29 06:01:40', 'schrodinger@gmail.com'),
(79, 29, 0, '2024-01-29 06:01:46', 'schrodinger@gmail.com'),
(80, 29, 0, '2024-01-29 06:01:52', 'schrodinger@gmail.com'),
(81, 29, 0, '2024-01-29 06:01:59', 'schrodinger@gmail.com'),
(82, 29, 0, '2024-01-29 06:02:05', 'schrodinger@gmail.com'),
(83, 30, 0, '2024-01-29 06:02:11', 'schrodinger@gmail.com'),
(84, 32, 0, '2024-01-29 06:02:17', 'schrodinger@gmail.com'),
(85, 33, 0, '2024-01-29 06:02:23', 'schrodinger@gmail.com'),
(86, 33, 0, '2024-01-29 06:02:29', 'schrodinger@gmail.com'),
(87, 33, 0, '2024-01-29 06:02:35', 'schrodinger@gmail.com'),
(88, 33, 0, '2024-01-29 06:02:42', 'schrodinger@gmail.com'),
(89, 33, 0, '2024-01-29 06:02:48', 'schrodinger@gmail.com'),
(90, 32, 0, '2024-01-29 06:02:54', 'schrodinger@gmail.com'),
(91, 32, 0, '2024-01-29 06:03:00', 'schrodinger@gmail.com'),
(92, 32, 0, '2024-01-29 06:03:06', 'schrodinger@gmail.com'),
(93, 32, 0, '2024-01-29 06:03:13', 'schrodinger@gmail.com'),
(94, 32, 0, '2024-01-29 06:03:19', 'schrodinger@gmail.com'),
(95, 32, 0, '2024-01-29 06:03:25', 'schrodinger@gmail.com'),
(96, 31, 0, '2024-01-29 06:03:31', 'schrodinger@gmail.com'),
(97, 31, 0, '2024-01-29 06:03:37', 'schrodinger@gmail.com'),
(98, 31, 0, '2024-01-29 06:03:44', 'schrodinger@gmail.com'),
(99, 31, 0, '2024-01-29 06:03:50', 'schrodinger@gmail.com'),
(100, 31, 0, '2024-01-29 06:03:56', 'schrodinger@gmail.com'),
(101, 31, 0, '2024-01-29 06:04:02', 'schrodinger@gmail.com'),
(102, 31, 0, '2024-01-29 06:04:09', 'schrodinger@gmail.com'),
(103, 31, 0, '2024-01-29 06:04:15', 'schrodinger@gmail.com'),
(104, 30, 0, '2024-01-29 06:04:21', 'schrodinger@gmail.com'),
(105, 30, 0, '2024-01-29 06:04:27', 'schrodinger@gmail.com'),
(106, 30, 0, '2024-01-29 06:04:33', 'schrodinger@gmail.com'),
(107, 30, 0, '2024-01-29 06:04:40', 'schrodinger@gmail.com'),
(108, 30, 0, '2024-01-29 06:04:46', 'schrodinger@gmail.com'),
(109, 30, 0, '2024-01-29 06:04:52', 'schrodinger@gmail.com'),
(110, 30, 0, '2024-01-29 06:04:58', 'schrodinger@gmail.com'),
(111, 30, 0, '2024-01-29 06:05:04', 'schrodinger@gmail.com'),
(112, 30, 0, '2024-01-29 06:05:10', 'schrodinger@gmail.com'),
(113, 30, 0, '2024-01-29 06:05:17', 'schrodinger@gmail.com'),
(114, 30, 0, '2024-01-29 06:05:23', 'schrodinger@gmail.com'),
(115, 30, 0, '2024-01-29 06:05:29', 'schrodinger@gmail.com'),
(116, 30, 0, '2024-01-29 06:05:35', 'schrodinger@gmail.com'),
(117, 30, 0, '2024-01-29 06:05:41', 'schrodinger@gmail.com'),
(118, 30, 0, '2024-01-29 06:05:47', 'schrodinger@gmail.com'),
(119, 30, 0, '2024-01-29 06:05:54', 'schrodinger@gmail.com'),
(120, 30, 0, '2024-01-29 06:06:00', 'schrodinger@gmail.com'),
(121, 29, 0, '2024-01-29 06:06:06', 'schrodinger@gmail.com'),
(122, 29, 0, '2024-01-29 06:06:12', 'schrodinger@gmail.com'),
(123, 29, 0, '2024-01-29 06:06:18', 'schrodinger@gmail.com'),
(124, 29, 0, '2024-01-29 06:06:24', 'schrodinger@gmail.com'),
(125, 29, 0, '2024-01-29 06:06:31', 'schrodinger@gmail.com'),
(126, 29, 0, '2024-01-29 06:06:37', 'schrodinger@gmail.com'),
(127, 29, 0, '2024-01-29 06:06:43', 'schrodinger@gmail.com'),
(128, 29, 0, '2024-01-29 06:06:49', 'schrodinger@gmail.com'),
(129, 29, 0, '2024-01-29 06:06:55', 'schrodinger@gmail.com'),
(130, 29, 0, '2024-01-29 06:07:01', 'schrodinger@gmail.com'),
(131, 29, 0, '2024-01-29 06:07:08', 'schrodinger@gmail.com'),
(132, 29, 0, '2024-01-29 06:07:14', 'schrodinger@gmail.com'),
(133, 29, 0, '2024-01-29 06:07:20', 'schrodinger@gmail.com'),
(134, 29, 0, '2024-01-29 06:07:26', 'schrodinger@gmail.com'),
(135, 29, 0, '2024-01-29 06:07:32', 'schrodinger@gmail.com'),
(136, 29, 0, '2024-01-29 06:07:39', 'schrodinger@gmail.com'),
(137, 29, 0, '2024-01-29 06:07:45', 'schrodinger@gmail.com'),
(138, 29, 0, '2024-01-29 06:07:51', 'schrodinger@gmail.com'),
(139, 29, 0, '2024-01-29 06:07:57', 'schrodinger@gmail.com'),
(140, 29, 0, '2024-01-29 06:08:03', 'schrodinger@gmail.com'),
(141, 29, 0, '2024-01-29 06:08:09', 'schrodinger@gmail.com'),
(142, 29, 0, '2024-01-29 06:08:16', 'schrodinger@gmail.com'),
(143, 29, 0, '2024-01-29 06:08:22', 'schrodinger@gmail.com'),
(144, 29, 0, '2024-01-29 06:08:28', 'schrodinger@gmail.com'),
(145, 29, 0, '2024-01-29 06:08:34', 'schrodinger@gmail.com'),
(146, 29, 0, '2024-01-29 06:08:40', 'schrodinger@gmail.com'),
(147, 29, 0, '2024-01-29 06:08:46', 'schrodinger@gmail.com'),
(148, 29, 0, '2024-01-29 06:08:53', 'schrodinger@gmail.com'),
(149, 29, 0, '2024-01-29 06:08:59', 'schrodinger@gmail.com'),
(150, 29, 0, '2024-01-29 06:09:05', 'schrodinger@gmail.com'),
(151, 29, 0, '2024-01-29 06:09:11', 'schrodinger@gmail.com'),
(152, 29, 0, '2024-01-29 06:09:18', 'schrodinger@gmail.com'),
(153, 29, 0, '2024-01-29 06:09:24', 'schrodinger@gmail.com'),
(154, 29, 0, '2024-01-29 06:09:30', 'schrodinger@gmail.com'),
(155, 29, 0, '2024-01-29 06:09:36', 'schrodinger@gmail.com'),
(156, 29, 0, '2024-01-29 06:09:42', 'schrodinger@gmail.com'),
(157, 29, 0, '2024-01-29 06:09:49', 'schrodinger@gmail.com'),
(158, 29, 0, '2024-01-29 06:09:55', 'schrodinger@gmail.com'),
(159, 29, 0, '2024-01-29 06:10:01', 'schrodinger@gmail.com'),
(160, 29, 0, '2024-01-29 06:10:07', 'schrodinger@gmail.com'),
(161, 29, 0, '2024-01-29 06:10:13', 'schrodinger@gmail.com'),
(162, 29, 0, '2024-01-29 06:10:19', 'schrodinger@gmail.com'),
(163, 29, 0, '2024-01-29 06:10:26', 'schrodinger@gmail.com');

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
(1, 7, 0, 29, 'schrodinger@gmail.com'),
(3, 7, 0, 29, 'schrodinger@gmail.com');

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
(1, 7, 'schrodinger@gmail.com', '2024-01-29 05:20:43'),
(2, 7, 'schrodinger@gmail.com', '2024-01-29 05:20:49'),
(3, 7, 'schrodinger@gmail.com', '2024-01-29 05:20:55'),
(4, 7, 'schrodinger@gmail.com', '2024-01-29 05:21:01'),
(5, 7, 'schrodinger@gmail.com', '2024-01-29 05:21:07'),
(6, 7, 'schrodinger@gmail.com', '2024-01-29 05:21:14'),
(7, 7, 'schrodinger@gmail.com', '2024-01-29 05:21:20'),
(8, 7, 'schrodinger@gmail.com', '2024-01-29 05:21:26'),
(9, 7, 'schrodinger@gmail.com', '2024-01-29 05:21:32'),
(10, 7, 'schrodinger@gmail.com', '2024-01-29 05:21:38'),
(11, 7, 'schrodinger@gmail.com', '2024-01-29 05:21:44'),
(12, 7, 'schrodinger@gmail.com', '2024-01-29 05:21:50'),
(13, 7, 'schrodinger@gmail.com', '2024-01-29 05:21:56'),
(14, 7, 'schrodinger@gmail.com', '2024-01-29 05:22:02'),
(15, 7, 'schrodinger@gmail.com', '2024-01-29 05:22:09'),
(16, 7, 'schrodinger@gmail.com', '2024-01-29 05:22:15'),
(17, 7, 'schrodinger@gmail.com', '2024-01-29 05:22:21'),
(18, 7, 'schrodinger@gmail.com', '2024-01-29 05:22:27'),
(19, 7, 'schrodinger@gmail.com', '2024-01-29 05:22:33'),
(20, 7, 'schrodinger@gmail.com', '2024-01-29 05:22:39'),
(21, 7, 'schrodinger@gmail.com', '2024-01-29 05:22:45'),
(22, 7, 'schrodinger@gmail.com', '2024-01-29 05:22:51'),
(23, 7, 'schrodinger@gmail.com', '2024-01-29 05:22:58'),
(24, 7, 'schrodinger@gmail.com', '2024-01-29 05:23:04'),
(25, 7, 'schrodinger@gmail.com', '2024-01-29 05:23:10'),
(26, 7, 'schrodinger@gmail.com', '2024-01-29 05:23:16'),
(27, 7, 'schrodinger@gmail.com', '2024-01-29 05:23:34'),
(28, 7, 'schrodinger@gmail.com', '2024-01-29 05:24:05'),
(29, 7, 'schrodinger@gmail.com', '2024-01-29 05:24:11'),
(30, 7, 'schrodinger@gmail.com', '2024-01-29 05:24:17'),
(31, 7, 'schrodinger@gmail.com', '2024-01-29 05:24:23'),
(32, 7, 'schrodinger@gmail.com', '2024-01-29 05:24:29'),
(33, 7, 'schrodinger@gmail.com', '2024-01-29 05:24:35'),
(34, 7, 'schrodinger@gmail.com', '2024-01-29 05:24:41');

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
(8, 'schrodinger', 'schrodinger@gmail.com', '$2y$10$o7o/p2r40OkhyGOHQlSsZ.Vs8F4pWleC5ctlqZEfKTjTFlGl4n93y', '1696567357_00e3f00bf676530fb2a2.png', '1 January 1880', '082114852228', 'jakarta', 'student', 'indonesia', 'Final Year Student At President University.', 'titoalexsta_', '082114852228', 'tito', 'tito'),
(18, 'alex', 'alex@gmail.com', '$2y$10$SNlzQmaYf702.c1v/7xJm.0UsPerZoKsMsVvGYKX8eQ3cDGbaMZ1K', 'default.png', '', '', '', '', '', '', '', '', '', '');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `data_sensor`
--
ALTER TABLE `data_sensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `phchart_sensor`
--
ALTER TABLE `phchart_sensor`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
