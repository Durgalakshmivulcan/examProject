-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 08:35 AM
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
-- Database: `examproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(30) NOT NULL,
  `a_mail` varchar(30) NOT NULL,
  `a_pwd` varchar(30) NOT NULL,
  `a_status` int(1) NOT NULL,
  `c_d_t` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`a_id`, `a_name`, `a_mail`, `a_pwd`, `a_status`, `c_d_t`) VALUES
(1, 'Admin', 'vulcantechsteam5678@gmail.com', '5678', 1, '2023-12-07 11:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `answerstable`
--

CREATE TABLE `answerstable` (
  `a_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `answer_id` varchar(30) NOT NULL,
  `ans_status` int(1) DEFAULT 1,
  `c_d_t` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answerstable`
--

INSERT INTO `answerstable` (`a_id`, `u_id`, `question_id`, `answer_id`, `ans_status`, `c_d_t`) VALUES
(1, 1, 1, 'A', 1, '2023-12-07 11:05:55'),
(2, 1, 2, 'B', 1, '2023-12-07 11:05:58'),
(3, 1, 3, 'C', 1, '2023-12-07 11:05:59'),
(4, 1, 4, 'D', 1, '2023-12-07 11:06:01'),
(5, 1, 5, 'C', 1, '2024-01-18 11:34:46'),
(6, 1, 6, 'A', 1, '2023-12-07 11:06:05'),
(7, 1, 7, 'C', 1, '2023-12-07 11:06:07'),
(8, 1, 8, 'C', 1, '2023-12-07 12:49:03'),
(9, 1, 9, 'A', 1, '2023-12-07 11:06:11'),
(10, 1, 10, 'B', 1, '2023-12-07 11:06:13'),
(11, 1, 11, 'C', 1, '2023-12-07 11:06:15'),
(12, 1, 12, 'D', 1, '2023-12-07 11:06:16'),
(13, 1, 13, 'A', 1, '2023-12-07 11:06:19'),
(14, 1, 14, 'B', 1, '2023-12-07 11:06:21'),
(15, 1, 15, 'C', 1, '2023-12-07 11:06:23'),
(16, 1, 16, 'D', 1, '2023-12-07 11:06:25'),
(17, 1, 17, 'A', 1, '2023-12-07 11:06:27'),
(18, 1, 18, 'C', 1, '2023-12-07 11:06:30'),
(19, 1, 19, 'D', 1, '2023-12-07 11:06:32'),
(20, 1, 20, 'A', 1, '2023-12-07 11:06:35'),
(21, 1, 22, 'C', 1, '2023-12-07 11:06:44'),
(22, 1, 21, 'A', 1, '2023-12-07 11:06:42'),
(23, 1, 23, 'D', 1, '2023-12-07 11:06:46'),
(24, 1, 24, 'A', 1, '2023-12-07 11:06:48'),
(25, 1, 25, 'B', 1, '2023-12-07 11:06:50'),
(26, 1, 26, 'C', 1, '2023-12-07 11:06:52'),
(27, 1, 27, 'D', 1, '2023-12-07 11:06:54'),
(28, 1, 28, 'A', 1, '2023-12-07 11:06:56'),
(29, 1, 29, 'C', 1, '2023-12-07 11:06:58'),
(30, 1, 30, 'D', 1, '2023-12-07 11:07:00'),
(31, 1, 31, 'A', 1, '2023-12-07 11:07:02'),
(32, 1, 32, 'A', 1, '2023-12-08 10:17:38'),
(33, 1, 33, 'A', 1, '2023-12-08 10:21:04'),
(34, 1, 34, 'C', 1, '2023-12-07 11:07:08'),
(35, 1, 35, 'A', 1, '2023-12-07 11:07:09'),
(36, 1, 36, 'D', 1, '2023-12-07 11:07:11'),
(37, 1, 38, 'B', 1, '2023-12-07 11:07:13'),
(38, 1, 39, 'D', 1, '2023-12-07 11:07:14'),
(39, 1, 40, 'D', 1, '2023-12-07 11:07:16'),
(40, 2, 1, 'A', 1, '2023-12-07 11:17:13'),
(41, 2, 4, 'D', 1, '2023-12-07 11:17:23'),
(42, 2, 5, 'B', 1, '2023-12-07 11:17:24'),
(43, 2, 6, 'C', 1, '2023-12-07 11:17:26'),
(44, 2, 7, 'D', 1, '2023-12-07 11:17:28'),
(45, 2, 8, 'A', 1, '2023-12-07 11:17:30'),
(46, 2, 9, 'C', 1, '2023-12-07 11:17:31'),
(47, 2, 2, 'A', 1, '2023-12-07 11:17:37'),
(48, 2, 3, 'C', 1, '2023-12-07 11:17:39'),
(49, 2, 10, 'A', 1, '2023-12-07 11:17:46'),
(50, 2, 11, 'B', 1, '2023-12-07 11:17:48'),
(51, 2, 12, 'D', 1, '2023-12-07 11:17:50'),
(52, 2, 13, 'C', 1, '2023-12-07 11:17:52'),
(53, 2, 14, 'B', 1, '2023-12-07 11:17:54'),
(54, 2, 15, 'A', 1, '2023-12-07 11:17:56'),
(55, 2, 16, 'D', 1, '2023-12-07 11:17:58'),
(56, 2, 17, 'B', 1, '2023-12-07 11:18:00'),
(57, 2, 18, 'C', 1, '2023-12-07 11:18:01'),
(58, 2, 19, 'A', 1, '2023-12-07 11:18:03'),
(59, 2, 20, 'C', 1, '2023-12-07 11:18:05'),
(60, 2, 21, 'D', 1, '2023-12-07 11:18:08'),
(61, 2, 22, 'A', 1, '2023-12-07 11:18:11'),
(62, 2, 28, 'B', 1, '2023-12-07 11:18:15'),
(63, 2, 25, 'A', 1, '2023-12-07 11:18:19'),
(64, 2, 26, 'D', 1, '2023-12-07 11:18:22'),
(65, 2, 29, 'A', 1, '2023-12-07 11:18:27'),
(66, 2, 30, 'C', 1, '2023-12-07 11:18:30'),
(67, 2, 31, 'A', 1, '2023-12-07 11:18:38'),
(68, 2, 32, 'B', 1, '2023-12-07 11:18:44'),
(69, 2, 33, 'C', 1, '2023-12-07 11:18:49'),
(70, 2, 34, 'D', 1, '2023-12-07 11:18:51'),
(71, 2, 35, 'C', 1, '2023-12-07 11:18:53'),
(72, 2, 36, 'B', 1, '2023-12-07 11:18:55'),
(73, 2, 37, 'A', 1, '2023-12-07 11:18:56'),
(74, 2, 38, 'C', 1, '2023-12-07 11:18:58'),
(75, 2, 39, 'D', 1, '2023-12-07 11:19:00'),
(76, 2, 40, 'B', 1, '2023-12-07 11:19:02'),
(77, NULL, 1, 'A', 1, '2023-12-12 04:44:26'),
(78, NULL, 1, 'A', 1, '2023-12-12 04:50:40'),
(79, NULL, 2, 'B', 1, '2023-12-12 04:50:44'),
(80, NULL, 1, 'A', 1, '2023-12-12 04:53:03'),
(81, NULL, 2, 'A', 1, '2023-12-12 04:53:09'),
(82, NULL, 3, 'D', 1, '2023-12-12 04:53:14'),
(83, NULL, 5, 'D', 1, '2023-12-12 04:55:43'),
(84, NULL, 7, 'D', 1, '2023-12-12 04:55:53'),
(85, NULL, 1, 'A', 1, '2023-12-12 04:56:51'),
(86, NULL, 6, 'D', 1, '2023-12-12 04:58:58'),
(87, NULL, 8, 'D', 1, '2023-12-12 04:59:18'),
(88, NULL, 1, 'A', 1, '2023-12-12 04:59:40'),
(89, NULL, 2, 'D', 1, '2023-12-12 04:59:46'),
(90, NULL, 4, 'C', 1, '2023-12-12 05:00:02'),
(91, NULL, 5, 'D', 1, '2023-12-12 05:00:11'),
(92, NULL, 2, 'A', 1, '2023-12-12 05:00:44'),
(93, NULL, 3, 'C', 1, '2023-12-12 05:00:49'),
(94, NULL, 2, 'A', 1, '2023-12-12 05:01:19'),
(95, NULL, 3, 'D', 1, '2023-12-12 05:01:23'),
(96, NULL, 4, 'D', 1, '2023-12-12 05:01:29'),
(97, NULL, 3, 'D', 1, '2023-12-12 05:02:46'),
(98, NULL, 5, 'D', 1, '2023-12-12 05:02:55'),
(99, NULL, 6, 'D', 1, '2023-12-12 05:03:13'),
(100, NULL, 1, 'A', 1, '2023-12-12 05:04:31'),
(101, NULL, 2, 'D', 1, '2023-12-12 05:04:35'),
(102, NULL, 4, 'D', 1, '2023-12-12 05:04:42'),
(103, NULL, 1, 'D', 1, '2023-12-12 05:05:16'),
(104, NULL, 3, 'D', 1, '2023-12-12 05:05:21'),
(105, NULL, 4, 'A', 1, '2023-12-12 05:05:27'),
(106, NULL, 6, 'D', 1, '2023-12-12 05:05:33'),
(107, NULL, 1, 'A', 1, '2023-12-12 05:06:33'),
(108, NULL, 2, 'D', 1, '2023-12-12 05:06:36'),
(109, NULL, 4, 'D', 1, '2023-12-12 05:06:40'),
(110, NULL, 5, 'A', 1, '2023-12-12 05:06:45'),
(111, NULL, 8, 'D', 1, '2023-12-12 05:06:51'),
(112, NULL, 10, 'D', 1, '2023-12-12 05:07:06'),
(113, NULL, 1, 'A', 1, '2023-12-12 05:10:13'),
(114, NULL, 2, 'D', 1, '2023-12-12 05:10:18'),
(115, NULL, 3, 'A', 1, '2023-12-12 05:10:25'),
(116, NULL, 6, 'A', 1, '2023-12-12 05:10:34'),
(117, NULL, 1, 'A', 1, '2023-12-12 05:10:53'),
(118, NULL, 4, 'D', 1, '2023-12-12 05:11:00'),
(119, NULL, 5, 'D', 1, '2023-12-12 05:11:11'),
(120, NULL, 1, 'C', 1, '2023-12-12 05:37:57'),
(121, NULL, 3, 'D', 1, '2023-12-12 05:38:02'),
(122, NULL, 1, 'A', 1, '2023-12-12 05:38:21'),
(123, NULL, 3, 'D', 1, '2023-12-12 05:38:25'),
(124, NULL, 18, 'D', 1, '2023-12-12 05:38:42'),
(125, NULL, 1, 'A', 1, '2023-12-12 05:41:44'),
(126, NULL, 1, 'D', 1, '2023-12-12 05:42:32'),
(127, NULL, 1, 'D', 1, '2023-12-12 05:43:32'),
(128, NULL, 1, 'A', 1, '2023-12-12 05:43:49'),
(129, NULL, 1, 'A', 1, '2023-12-12 05:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `aptitude`
--

CREATE TABLE `aptitude` (
  `ap_id` int(11) NOT NULL,
  `ap_question` text NOT NULL,
  `apo_1` text NOT NULL,
  `apo_2` text NOT NULL,
  `apo_3` text NOT NULL,
  `apo_4` text NOT NULL,
  `ap_status` int(1) NOT NULL DEFAULT 1,
  `create_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aptitude`
--

INSERT INTO `aptitude` (`ap_id`, `ap_question`, `apo_1`, `apo_2`, `apo_3`, `apo_4`, `ap_status`, `create_date_time`) VALUES
(1, 'The cost price of 20 articles is the same as the selling price of x articles. If the profit is 25%, then the value of x is:', '15', '16', '18', '25', 1, '2023-12-05 23:12:44'),
(2, 'A vendor bought toffees at 6 for a rupee. How many for a rupee must he sell to gain 20%?', '3', '4', '5', '6', 1, '2023-12-05 23:13:46'),
(3, 'A shopkeeper expects a gain of 22.5% on his cost price. If in a week, his sale was of Rs. 392, what was his profit?', 'Rs. 18.20', 'Rs. 70', 'Rs. 72', 'Rs. 88.25', 1, '2023-12-05 23:15:30'),
(4, 'the result of addition is', 'sum', 'difference', 'product', 'quotient', 1, '2023-11-29 10:37:38'),
(5, '56+44=', '700', '500', '1000', '100', 1, '2023-11-29 10:38:05'),
(6, 'the successor of 4678 is', '8946', '6487', '4679', '9746', 1, '2023-11-29 10:39:08'),
(7, '4678/200 in this find the quotient?', '78', '46', '67', '48', 1, '2023-11-29 10:41:38'),
(8, 'A person crosses a 600 m long street in 5 minutes. What is his speed in km per hour?', '3.6', '7.2', '8.4', '10', 1, '2023-11-30 10:42:46'),
(9, 'An aeroplane covers a certain distance at a speed of 240 kmph in 5 hours. To cover the same distance in 1 hours, it must travel at a speed of:', '300 kmph', '360 kmph', '600 kmph', '720 kmph', 1, '2023-11-30 10:43:52'),
(10, 'Excluding stoppages, the speed of a bus is 54 kmph and including stoppages, it is 45 kmph. For how many minutes does the bus stop per hour?', '9', '10', '12', '20', 1, '2023-11-30 10:44:57'),
(11, '', '12', '13', '11', '32', 1, '2023-12-08 10:09:32'),
(12, 'What is Span tag?', '1', '3', '2', '', 1, '2023-12-08 10:10:11'),
(13, '', '', '', '', '', 1, '2023-12-08 10:10:23'),
(14, '', '', '', '', '', 1, '2023-12-08 10:11:38'),
(15, '', '', '', '', '', 1, '2023-12-12 06:53:02'),
(16, '', '', '', '', '', 1, '2023-12-12 06:54:54'),
(17, '', '', '', '', '', 1, '2023-12-12 06:56:57'),
(18, 'wfegr,jbml.', 'fvv', 'vdv', 'gr', 'tgr', 1, '2023-12-12 06:57:32'),
(19, '', '', '', '', '', 1, '2023-12-12 07:11:36'),
(20, '', '', '', '', '', 1, '2023-12-13 06:37:28');

-- --------------------------------------------------------

--
-- Table structure for table `aptitudegen`
--

CREATE TABLE `aptitudegen` (
  `apg_id` int(11) NOT NULL,
  `apq_question` varchar(30) NOT NULL,
  `apg_status` int(1) NOT NULL,
  `c_d_t` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aptitudegen`
--

INSERT INTO `aptitudegen` (`apg_id`, `apq_question`, `apg_status`, `c_d_t`) VALUES
(1, '', 0, '2023-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `examdetails`
--

CREATE TABLE `examdetails` (
  `ex_id` int(11) DEFAULT NULL,
  `ex_name` varchar(30) NOT NULL,
  `ex_tques` int(11) NOT NULL,
  `ex_time` int(11) NOT NULL,
  `ex_nsec` int(11) NOT NULL,
  `ex_secnames` varchar(30) NOT NULL,
  `ex_qpsec` int(11) NOT NULL,
  `ex_status` int(1) NOT NULL DEFAULT 1,
  `c_d_t` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `examdetails`
--

INSERT INTO `examdetails` (`ex_id`, `ex_name`, `ex_tques`, `ex_time`, `ex_nsec`, `ex_secnames`, `ex_qpsec`, `ex_status`, `c_d_t`) VALUES
(NULL, 'ghjk', 5, 4, 45, 'tfy,ctyh,th,', 4, 1, '2023-11-26 10:04:54'),
(NULL, 'ghjk', 34, 4, 45, 'tfy,ctyh,th,', 56, 1, '2023-11-26 10:29:36'),
(NULL, 'ghjk', 45, 4, 5, 'tfy,ctyh,th,', 5, 1, '2023-11-26 10:30:18'),
(NULL, 'ghjk', 45, 4, 34, 'tfy,ctyh,th,', 4, 1, '2023-11-26 10:31:44'),
(NULL, 'ghjk', 3, 4, 3, 'tfy,ctyh,th,', 4, 1, '2023-11-26 10:32:41'),
(NULL, 'ghjk', 4, 4, 34, 'tfy,ctyh,th,', 34, 1, '2023-11-26 10:34:08'),
(NULL, 'ghjk', 44, 4, 5, 'tfy,ctyh,th,', 4, 1, '2023-11-26 10:39:30'),
(NULL, 'talent test', 10, 30, 2, 'ap,re.', 5, 1, '2023-11-26 14:46:46'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-11-26 14:52:13'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-11-26 14:55:49'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-11-26 15:16:24'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-11-26 15:17:45'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-11-26 15:18:23'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-11-27 05:44:54'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-11-28 10:00:56'),
(NULL, 'talent test', 43, 30, 4, 'tfy,ctyh,th,', 5, 1, '2023-11-28 10:36:15'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-11-29 05:46:21'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-11-29 10:36:49'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-11-30 10:25:30'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-12-02 00:52:18'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-12-04 11:34:56'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-12-04 11:59:07'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-12-04 12:01:35'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-04 12:01:56'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-12-04 12:04:57'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-04 12:05:12'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-04 12:06:05'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-04 12:06:14'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-04 12:06:52'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-04 12:07:06'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-04 12:07:31'),
(NULL, 'test', 11, 1, 4, '', 0, 1, '2023-12-04 12:54:07'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-12-05 11:22:10'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-05 12:24:12'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-05 14:54:32'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-05 23:42:43'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-06 15:36:30'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-06 15:55:32'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-07 04:19:45'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-07 05:01:29'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-07 05:16:44'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-12-07 12:30:23'),
(NULL, 'Aptitude', 0, 0, 0, '', 0, 1, '2023-12-08 10:07:09'),
(NULL, '', 0, 4, 4, '', 0, 1, '2023-12-08 10:07:26'),
(NULL, 'Technical test', 40, 1, 2, '', 0, 1, '2023-12-08 10:08:45'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-12-08 10:10:47'),
(NULL, 'talent test', 0, 0, 0, '', 0, 1, '2023-12-08 10:10:57'),
(NULL, 'talent test', 55, 555, 5, '', 0, 1, '2023-12-08 10:11:17'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-12-08 11:27:05'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-12-08 11:40:19'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-12-12 06:21:17'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-12-12 06:24:31'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-12-12 06:25:35'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-12-12 06:25:40'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-12 06:26:25'),
(NULL, 'talent test', 41, 1, 4, '', 0, 1, '2023-12-12 06:30:35'),
(NULL, 'talent test', 40, 1, 4, '', 0, 1, '2023-12-12 06:46:31'),
(NULL, '', 0, 0, 0, '', 0, 1, '2023-12-13 06:32:01'),
(NULL, 'talent test', 44, 1, 4, '', 0, 1, '2023-12-13 06:37:14'),
(NULL, 'dfghj', 5, 30, 4, '', 0, 1, '2024-03-02 07:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `examkey`
--

CREATE TABLE `examkey` (
  `k_id` int(11) NOT NULL,
  `kquestion_id` int(11) NOT NULL,
  `key_ans` varchar(30) NOT NULL,
  `k_status` int(1) NOT NULL DEFAULT 1,
  `c_d_t` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `examkey`
--

INSERT INTO `examkey` (`k_id`, `kquestion_id`, `key_ans`, `k_status`, `c_d_t`) VALUES
(1, 1, 'd', 1, '2023-12-05 06:29:45'),
(2, 2, 'c', 1, '2023-12-05 06:29:48'),
(3, 3, 'a', 1, '2023-12-05 06:29:54'),
(4, 4, 'a', 1, '2023-12-05 06:30:03'),
(5, 5, 'd', 1, '2023-12-05 06:30:21'),
(6, 6, 'a', 1, '2023-12-05 06:30:25'),
(7, 7, 'c', 1, '2023-12-05 06:30:34'),
(8, 8, 'b', 1, '2023-12-05 06:30:42'),
(9, 9, 'b', 1, '2023-12-05 06:30:47'),
(10, 10, 'c', 1, '2023-12-05 06:31:15'),
(11, 11, 'a', 1, '2023-12-05 06:31:20'),
(12, 12, 'd', 1, '2023-12-05 06:31:24'),
(13, 13, 'b', 1, '2023-12-05 06:31:30'),
(14, 14, 'b', 1, '2023-12-05 06:31:36'),
(15, 15, 'c', 1, '2023-12-05 06:31:42'),
(16, 16, 'd', 1, '2023-12-05 06:31:50'),
(17, 17, 'a', 1, '2023-12-05 06:32:15'),
(18, 18, 'b', 1, '2023-12-05 06:32:47'),
(19, 19, 'd', 1, '2023-12-05 06:33:03'),
(20, 20, 'c', 1, '2023-12-05 06:33:19'),
(21, 21, 'd', 1, '2023-12-05 06:33:24'),
(22, 22, 'a', 1, '2023-12-05 06:33:29'),
(23, 23, 'b', 1, '2023-12-05 06:34:27'),
(24, 24, 'c', 1, '2023-12-05 06:34:33'),
(25, 25, 'd', 1, '2023-12-05 06:34:38'),
(26, 26, 'a', 1, '2023-12-05 06:34:44'),
(27, 27, 'b', 1, '2023-12-05 06:34:58'),
(28, 28, 'a', 1, '2023-12-05 06:35:06'),
(29, 29, 'c', 1, '2023-12-05 06:35:11'),
(30, 30, 'd', 1, '2023-12-05 06:36:26'),
(31, 31, 'd', 1, '2023-12-05 06:36:33'),
(32, 33, 'a', 1, '2023-12-05 06:36:39'),
(33, 34, 'b', 1, '2023-12-05 06:36:49'),
(34, 35, 'c', 1, '2023-12-05 06:36:55'),
(35, 36, 'd', 1, '2023-12-05 06:37:24'),
(36, 37, 'd', 1, '2023-12-05 06:37:33'),
(37, 38, 'c', 1, '2023-12-05 06:37:49'),
(38, 39, 'c', 1, '2023-12-05 06:37:53'),
(39, 40, 'd', 1, '2023-12-05 06:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `reasoning`
--

CREATE TABLE `reasoning` (
  `r_id` int(11) NOT NULL,
  `re_question` text DEFAULT NULL,
  `reo_1` text DEFAULT NULL,
  `reo_2` text DEFAULT NULL,
  `reo_3` text DEFAULT NULL,
  `reo_4` text DEFAULT NULL,
  `re_status` int(1) DEFAULT 1,
  `c_d_t` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reasoning`
--

INSERT INTO `reasoning` (`r_id`, `re_question`, `reo_1`, `reo_2`, `reo_3`, `reo_4`, `re_status`, `c_d_t`) VALUES
(11, 'In a family, there are husband-wife, two sons and two daughters. All the ladies were invited to a dinner. Both sons went out to play. Husband did not return from the office. Who was at home?', 'Only wife was at home', 'Nobody was at home', 'Only sons were at home', 'All ladies were at home', 1, '2023-12-02 07:31:24'),
(12, 'If ‘X $ Y’ means ‘X is father of Y’; ‘X # Y’ means ‘X is mother of Y’; ‘X × Y’ means ‘X is sister of Y’, then how is D related to N in N # A $ B × D ?', 'Nephew', 'Grandson', 'Granddaughter', 'Cannot be Determined', 1, '2023-12-02 07:31:52'),
(13, 'In a code language if POSE is coded as OQNPRTDF, then the word TYPE will be coded as', 'SUXZOQFD', 'SUXZQOFD', 'SUXZOQDF', 'SUXZQODE', 1, '2023-12-02 07:32:02'),
(14, 'Find the missing element in the series given below:  ABD EFH IJL MNP QRT? ', 'ZXA', 'WXY', 'XYZ', 'UVX', 1, '2023-12-02 07:32:23'),
(15, 'Find the missing element in the series given below:  ACE ? MOQ …..SUW', 'EFH', 'GIL', 'GIK', 'GIM', 1, '2023-12-02 07:32:14'),
(16, 'Look at this series: 2, 1, (1/2), (1/4), ... What number should come next?', '(1/3)', '(1/8)', '(2/8)', '(1/16)', 1, '2023-12-02 07:32:56'),
(17, 'Look at this series: 7, 10, 8, 11, 9, 12, ... What number should come next?', '7', '10', '12', '13', 1, '2023-12-02 07:33:05'),
(18, 'Look at this series: 36, 34, 30, 28, 24, ... What number should come next?', '20', '22', '23', '26', 1, '2023-12-02 07:33:14'),
(19, 'Look at this series: 53, 53, 40, 40, 27, 27, ... What number should come next?', '12', '14', '27', '53', 1, '2023-12-02 07:33:26'),
(20, 'Look at this series: 1.5, 2.3, 3.1, 3.9, ... What number should come next?', '4.2', '4.4', '4.7', '5.1', 1, '2023-12-02 07:33:36'),
(22, '', '', '', '', '', 1, '2023-12-12 07:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `reasoninggen`
--

CREATE TABLE `reasoninggen` (
  `reg_id` int(11) NOT NULL,
  `req_question` varchar(30) NOT NULL,
  `reg_status` int(1) NOT NULL,
  `c_d_t` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sectiontable`
--

CREATE TABLE `sectiontable` (
  `sec_id` int(11) NOT NULL,
  `sec_name` varchar(30) NOT NULL,
  `sec_status` int(1) NOT NULL,
  `c_d_t` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sectiontable`
--

INSERT INTO `sectiontable` (`sec_id`, `sec_name`, `sec_status`, `c_d_t`) VALUES
(1, 'aptitude', 1, '2023-11-26 04:35:27'),
(2, 'reasoning', 1, '2023-11-26 04:35:42'),
(3, 'verbal', 1, '2023-11-26 04:35:56'),
(4, 'technical', 1, '2023-11-26 04:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `technical`
--

CREATE TABLE `technical` (
  `t_id` int(11) NOT NULL,
  `t_question` text DEFAULT NULL,
  `t_1` text DEFAULT NULL,
  `t_2` text DEFAULT NULL,
  `t_3` text DEFAULT NULL,
  `t_4` text DEFAULT NULL,
  `t_status` int(1) DEFAULT 1,
  `c_d_t` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technical`
--

INSERT INTO `technical` (`t_id`, `t_question`, `t_1`, `t_2`, `t_3`, `t_4`, `t_status`, `c_d_t`) VALUES
(31, 'What is the process at the most detailed level of the data flow diagrams known as?', 'interfaces', 'functional primitives', 'data flow ', 'transform descriptions', 1, '2023-12-02 07:40:54'),
(32, 'Total bits used by the IPv6 address is ________', '64 bits', '256 bits', '128 bits', '32 bits', 1, '2023-12-02 07:40:54'),
(33, 'Identify the language which is mainly used for Artificial Intelligence', 'Java', 'J2EE', 'prolog', 'C', 1, '2023-12-02 07:40:54'),
(34, 'Why is a firewall used in a computer?', 'monitoring', 'data transmission', 'authentication', 'security', 1, '2023-12-02 07:40:54'),
(35, 'How many levels are there in the architecture of the database?', '2', '3', '4', '5', 1, '2023-12-02 07:40:54'),
(36, 'Identify the total standard color names that HTML supports.', '30', '70', '140', '120', 1, '2023-12-02 07:40:54'),
(37, 'Choose the port number of FTP.', '23', '21', '110', '143', 1, '2023-12-02 07:40:54'),
(38, 'Total number of layers in OSI model is ___________', '5', '7', '9', '11', 1, '2023-12-02 07:40:54'),
(39, 'Which of the following is not a SQL command?', 'DELETE', 'ORDER BY', 'SELECT', 'WHERE', 1, '2023-12-02 07:40:54'),
(40, 'Which of the following commands in UNIX is used to send a signal?', 'send', 'kill', 'sigsend', 'null', 1, '2023-12-02 07:40:54'),
(41, NULL, NULL, NULL, NULL, NULL, 1, '2023-12-05 10:16:12'),
(42, NULL, NULL, NULL, NULL, NULL, 1, '2023-12-05 10:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `technicalgen`
--

CREATE TABLE `technicalgen` (
  `tg_id` int(11) NOT NULL,
  `tcq_question` varchar(30) NOT NULL,
  `tg_status` int(1) NOT NULL,
  `c_d_t` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technicalgen`
--

INSERT INTO `technicalgen` (`tg_id`, `tcq_question`, `tg_status`, `c_d_t`) VALUES
(1, '', 0, '2023-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `useranswers`
--

CREATE TABLE `useranswers` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `a25` varchar(30) NOT NULL,
  `a26` varchar(30) NOT NULL,
  `a27` varchar(30) NOT NULL,
  `a28` varchar(30) NOT NULL,
  `a29` varchar(30) NOT NULL,
  `a30` varchar(30) NOT NULL,
  `a31` varchar(30) NOT NULL,
  `a32` varchar(30) NOT NULL,
  `a33` varchar(30) NOT NULL,
  `a34` varchar(30) NOT NULL,
  `a35` varchar(30) NOT NULL,
  `a36` varchar(30) NOT NULL,
  `a37` varchar(30) NOT NULL,
  `a38` varchar(30) NOT NULL,
  `a39` varchar(30) NOT NULL,
  `a40` varchar(30) NOT NULL,
  `a_status` int(1) NOT NULL,
  `c_d_t` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useranswers`
--

INSERT INTO `useranswers` (`u_id`, `u_name`, `a25`, `a26`, `a27`, `a28`, `a29`, `a30`, `a31`, `a32`, `a33`, `a34`, `a35`, `a36`, `a37`, `a38`, `a39`, `a40`, `a_status`, `c_d_t`) VALUES
(1, 'durga lakshmi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2023-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_mail` varchar(30) DEFAULT NULL,
  `u_pwd` int(11) DEFAULT NULL,
  `u_status` int(1) DEFAULT NULL,
  `c_d_t` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`u_id`, `u_name`, `u_mail`, `u_pwd`, `u_status`, `c_d_t`) VALUES
(1, 'durga lakshmi', 'durgalaxmi417@gmail.com', 1234, 1, '2023-11-25 15:56:25'),
(2, 'ravi kumar', 'ravikumar01@gmail.com', 4321, 1, '2023-12-07 11:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `verbal`
--

CREATE TABLE `verbal` (
  `v_id` int(11) NOT NULL,
  `v_question` text DEFAULT NULL,
  `vo_1` text DEFAULT NULL,
  `vo_2` text DEFAULT NULL,
  `vo_3` text DEFAULT NULL,
  `vo_4` text DEFAULT NULL,
  `v_status` int(1) DEFAULT 1,
  `c_d_t` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `verbal`
--

INSERT INTO `verbal` (`v_id`, `v_question`, `vo_1`, `vo_2`, `vo_3`, `vo_4`, `v_status`, `c_d_t`) VALUES
(21, 'CUP : LIP :: BIRD : ?', 'BUSH', 'GRASS', 'FOREST', 'BEAK', 1, '2023-12-02 07:39:10'),
(22, 'Flow : River :: Stagnant : ?', 'Rain', 'Stream', 'Pool', 'Canal', 1, '2023-12-02 07:39:10'),
(23, 'A, P, R, X, S and Z are sitting in a row. S and Z are in the centre. A and P are at the ends. R is sitting to the left of A. Who is to the right of P ?', 'A', 'S', 'X', 'Z', 1, '2023-12-02 07:39:10'),
(24, 'A, B, C, D and E are sitting on a bench. A is sitting next to B, C is sitting next to D, D is not sitting with E who is on the left end of the bench. C is on the second position from the right. A is to the right of B and E. A and C are sitting together. In which position A is sitting ?', 'Between B and D', 'Between B and C', 'Between E and D', 'Between C and E', 1, '2023-12-02 07:39:10'),
(25, 'Y is in the East of X which is in the North of Z. If P is in the South of Z, then in which direction of Y, is P?', 'North', 'South', 'South-East', 'None of these', 1, '2023-12-02 07:39:25'),
(26, 'If South-East becomes North, North-East becomes West and so on. What will West become?', 'North-East', 'North-West', 'South-East', 'South-West', 1, '2023-12-02 07:39:10'),
(27, 'Rahul put his timepiece on the table in such a way that at 6 P.M. hour hand points to North. In which direction the minute hand will point at 9.15 P.M. ?', 'South-East', 'South', 'North', 'West', 1, '2023-12-02 07:39:10'),
(28, 'K is 40 m South-West of L. If M is 40 m South-East of L, then M is in which direction of K?', 'East', 'West', 'North-East', 'South', 1, '2023-12-02 07:39:10'),
(29, 'A train always has', 'Rails', 'Driver', 'Guard', 'Engine', 1, '2023-12-02 07:39:10'),
(30, 'A song always has', 'Word', 'Chorus', 'Musician', 'Tymbal', 1, '2023-12-02 07:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `verbalgen`
--

CREATE TABLE `verbalgen` (
  `vg_id` int(11) NOT NULL,
  `vq_question` varchar(30) NOT NULL,
  `vg_status` int(1) NOT NULL,
  `c_d_t` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `answerstable`
--
ALTER TABLE `answerstable`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `aptitude`
--
ALTER TABLE `aptitude`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indexes for table `aptitudegen`
--
ALTER TABLE `aptitudegen`
  ADD PRIMARY KEY (`apg_id`);

--
-- Indexes for table `examkey`
--
ALTER TABLE `examkey`
  ADD PRIMARY KEY (`k_id`);

--
-- Indexes for table `reasoning`
--
ALTER TABLE `reasoning`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `reasoninggen`
--
ALTER TABLE `reasoninggen`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `sectiontable`
--
ALTER TABLE `sectiontable`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indexes for table `technical`
--
ALTER TABLE `technical`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `technicalgen`
--
ALTER TABLE `technicalgen`
  ADD PRIMARY KEY (`tg_id`);

--
-- Indexes for table `useranswers`
--
ALTER TABLE `useranswers`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `verbal`
--
ALTER TABLE `verbal`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `verbalgen`
--
ALTER TABLE `verbalgen`
  ADD PRIMARY KEY (`vg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answerstable`
--
ALTER TABLE `answerstable`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `aptitude`
--
ALTER TABLE `aptitude`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `aptitudegen`
--
ALTER TABLE `aptitudegen`
  MODIFY `apg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `examkey`
--
ALTER TABLE `examkey`
  MODIFY `k_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `reasoning`
--
ALTER TABLE `reasoning`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `reasoninggen`
--
ALTER TABLE `reasoninggen`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sectiontable`
--
ALTER TABLE `sectiontable`
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `technical`
--
ALTER TABLE `technical`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `technicalgen`
--
ALTER TABLE `technicalgen`
  MODIFY `tg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `useranswers`
--
ALTER TABLE `useranswers`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `verbal`
--
ALTER TABLE `verbal`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `verbalgen`
--
ALTER TABLE `verbalgen`
  MODIFY `vg_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
