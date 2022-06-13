-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2022 at 08:37 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thapasan_hotel_eternity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`) VALUES
(6, 'admin', '$2y$10$mRCVWIuN/Gr.7bxIzqzsLuLgAid61dGCBiHqWqVohzwrzKpDTE.LO', 'admin'),
(7, 'sajan', '$2y$10$mRCVWIuN/Gr.7bxIzqzsLuLgAid61dGCBiHqWqVohzwrzKpDTE.LO', 'manager'),
(11, 'HariB', '$2y$10$aQzQwVeI9wlaCW9A8yRYl.3FYC76c8KsEsroPH5s56kbT8hMOeYM6', 'reception'),
(12, 'sangam', '$2y$10$oByibJDGWfklxpJawQyibesm3kfJEguXYWaii79s5V96oBpucvafK', 'reception'),
(13, 'niroj', '$2y$10$mULdgwT6BySydxfhr1O3g./PPrjhQL1kxJ5JYEKUWam40xEUIKCdq', 'reception'),
(14, 'admin11', '$2y$10$XkxnBVENf.u8oWTeCM4/kOUFhKxvQF9RT7p5Ryvj9A9ekzyoYkj5u', 'reception');

-- --------------------------------------------------------

--
-- Table structure for table `ajsd`
--

CREATE TABLE `ajsd` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajsd`
--

INSERT INTO `ajsd` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `ajsda`
--

CREATE TABLE `ajsda` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajsda`
--

INSERT INTO `ajsda` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:38:58'),
(2, 'Chowmin', 1, 200, '2022/05/28', '12:41:39'),
(3, 'Chowmin', 1, 200, '2022/05/28', '12:43:19'),
(4, 'Chowmin', 1, 200, '2022/05/28', '12:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `ajsdaa`
--

CREATE TABLE `ajsdaa` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajsdaa`
--

INSERT INTO `ajsdaa` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:39:25'),
(2, 'Chowmin', 1, 200, '2022/05/28', '12:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `ajsdaaa`
--

CREATE TABLE `ajsdaaa` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajsdaaa`
--

INSERT INTO `ajsdaaa` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `ajsdad`
--

CREATE TABLE `ajsdad` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajsdad`
--

INSERT INTO `ajsdad` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `asdas`
--

CREATE TABLE `asdas` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asdas`
--

INSERT INTO `asdas` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:54:31'),
(2, 'Chowmin', 1, 200, '2022/05/28', '12:57:41'),
(3, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:57:41'),
(4, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:57:41'),
(5, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:57:41'),
(6, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:59:24'),
(7, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:59:24'),
(8, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:59:24'),
(9, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:59:24'),
(10, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:03:53'),
(11, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:03:53'),
(12, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:03:53'),
(13, 'Coke', 1, 434, '2022/05/28', '13:03:53'),
(14, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:05:13'),
(15, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:05:13'),
(16, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:05:13'),
(17, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:05:14'),
(18, 'Chowmin', 1, 200, '2022/05/28', '13:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `asdasa`
--

CREATE TABLE `asdasa` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asdasa`
--

INSERT INTO `asdasa` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:56:20'),
(2, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:56:20'),
(3, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:56:20'),
(4, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:56:20'),
(5, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:04:47'),
(6, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:04:47'),
(7, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:04:47'),
(8, 'Chowmin', 1, 200, '2022/05/28', '13:06:14'),
(9, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:06:14'),
(10, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:06:14'),
(11, 'Coke', 1, 434, '2022/05/28', '13:06:14');

-- --------------------------------------------------------

--
-- Table structure for table `asdasaa`
--

CREATE TABLE `asdasaa` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asdasaa`
--

INSERT INTO `asdasaa` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:57:16'),
(2, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:57:16'),
(3, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:57:16'),
(4, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:57:16'),
(5, 'Chowmin', 1, 200, '2022/05/28', '13:06:52'),
(6, 'Chowmin', 1, 200, '2022/05/28', '13:06:52'),
(7, 'Chowmin', 1, 200, '2022/05/28', '13:06:52'),
(8, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:06:52'),
(9, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:06:52'),
(10, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:06:52');

-- --------------------------------------------------------

--
-- Table structure for table `asdasd`
--

CREATE TABLE `asdasd` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asdasd`
--

INSERT INTO `asdasd` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Coke', 1, 434, '2022/05/28', '12:52:19'),
(2, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:52:19'),
(3, 'drinks', 1, 1000, '2022/05/28', '12:52:19'),
(4, 'drinks', 1, 124, '2022/05/28', '12:52:19'),
(5, 'Chowmin', 1, 200, '2022/05/28', '16:43:51'),
(6, 'Chowmin', 1, 200, '2022/05/28', '16:43:51'),
(7, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '16:43:51'),
(8, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '16:43:51'),
(9, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '16:43:51'),
(10, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '16:43:51'),
(11, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', -1, -123, '2022/05/28', '16:43:51'),
(12, 'teashasgsdjha jhagdjhasgdj gajhsdg', -1, -100, '2022/05/28', '16:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `asdasdsa`
--

CREATE TABLE `asdasdsa` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asdasdsa`
--

INSERT INTO `asdasdsa` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '16:52:23'),
(2, 'Chowmin', 1, 200, '2022/05/28', '16:52:23'),
(3, 'Chowmin', 1, 200, '2022/05/28', '16:52:23'),
(4, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '16:52:23'),
(5, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '16:52:23'),
(6, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '16:52:23'),
(7, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '16:52:23'),
(8, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '16:52:23'),
(9, 'teashasgsdjha jhagdjhasgdj gajhsdg', -1, -100, '2022/05/28', '16:52:23'),
(10, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', -1, -123, '2022/05/28', '16:52:23'),
(11, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '16:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `asdass`
--

CREATE TABLE `asdass` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asdass`
--

INSERT INTO `asdass` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:58:26'),
(2, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:58:26'),
(3, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:58:26'),
(4, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '12:58:26'),
(5, 'Chowmin', 1, 200, '2022/05/28', '13:02:04'),
(6, 'Chowmin', 1, 200, '2022/05/28', '13:02:04'),
(7, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:02:05'),
(8, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:02:05'),
(9, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:02:05'),
(10, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '13:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `asdksan`
--

CREATE TABLE `asdksan` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asdksan`
--

INSERT INTO `asdksan` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:36:17');

-- --------------------------------------------------------

--
-- Table structure for table `asdksana`
--

CREATE TABLE `asdksana` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asdksana`
--

INSERT INTO `asdksana` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `asdksand`
--

CREATE TABLE `asdksand` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asdksand`
--

INSERT INTO `asdksand` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `asdsa`
--

CREATE TABLE `asdsa` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asdsa`
--

INSERT INTO `asdsa` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '18:12:16'),
(2, 'Chowmin', 1, 200, '2022/05/28', '18:12:16'),
(3, 'Chowmin', 1, 200, '2022/05/28', '18:12:16'),
(4, 'drinks', 1, 1000, '2022/05/28', '18:12:16'),
(5, 'drinks', 1, 1000, '2022/05/28', '18:12:17'),
(6, 'drinks', 1, 124, '2022/05/28', '18:12:17'),
(7, 'drinks', 1, 124, '2022/05/28', '18:12:17'),
(8, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:22:03'),
(9, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `asdsaa`
--

CREATE TABLE `asdsaa` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asdsaa`
--

INSERT INTO `asdsaa` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'pizza', 1, 209, '2022/05/28', '18:18:08'),
(2, 'pizza', 1, 209, '2022/05/28', '18:18:08'),
(3, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:18:08'),
(4, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:18:08'),
(5, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:20:19'),
(6, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:20:19'),
(7, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '18:20:19'),
(8, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:20:52'),
(9, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:20:52'),
(10, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:20:53'),
(11, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:23:07'),
(12, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:23:07'),
(13, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:23:07'),
(14, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '18:23:07'),
(15, 'gjhg', 1, 123, '2022/05/28', '18:23:07'),
(16, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:27:02'),
(17, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:27:02'),
(18, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:27:02'),
(19, 'Coke', 1, 434, '2022/05/28', '18:27:02'),
(20, 'drinks', 1, 1000, '2022/05/28', '18:34:50'),
(21, 'Chowmin', 1, 200, '2022/05/28', '18:34:50'),
(22, 'drinks', 1, 124, '2022/05/28', '18:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `asdsaaa`
--

CREATE TABLE `asdsaaa` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asdsaaa`
--

INSERT INTO `asdsaaa` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'pizza', 1, 209, '2022/05/28', '18:18:52'),
(2, 'pizza', 1, 209, '2022/05/28', '18:18:52'),
(3, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:18:53'),
(4, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:18:53'),
(5, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '18:18:53'),
(6, 'drinks', 1, 1000, '2022/05/28', '18:25:26'),
(7, 'drinks', 1, 1000, '2022/05/28', '18:25:26'),
(8, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:25:26'),
(9, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:25:26'),
(10, 'drinks', 1, 124, '2022/05/28', '18:25:26'),
(11, 'drinks', 1, 124, '2022/05/28', '18:25:26'),
(12, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:28:54'),
(13, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:28:54'),
(14, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:28:54'),
(15, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '18:28:55'),
(16, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '18:28:55'),
(17, 'Coke', 1, 434, '2022/05/28', '18:28:55'),
(18, 'Coke', 1, 434, '2022/05/28', '18:32:14'),
(19, 'Coke', 1, 434, '2022/05/28', '18:32:15'),
(20, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:32:15');

-- --------------------------------------------------------

--
-- Table structure for table `asdsaaaa`
--

CREATE TABLE `asdsaaaa` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asdsaaaa`
--

INSERT INTO `asdsaaaa` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:27:50'),
(2, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:27:50'),
(3, 'gjhg', 1, 123, '2022/05/28', '18:27:50'),
(4, 'gjhg', 1, 123, '2022/05/28', '18:27:50'),
(5, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '18:27:50'),
(6, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '18:27:50'),
(7, 'teashasgsdjha jhagdjhasgdj gajhsdg', -1, -100, '2022/05/28', '18:27:50'),
(8, '123', 1, 2, '2022/05/28', '18:27:50'),
(9, 'sdas', 1, 123, '2022/05/28', '18:29:19'),
(10, 'sdas', 1, 123, '2022/05/28', '18:29:19'),
(11, 'sdas', 1, 123, '2022/05/28', '18:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `asdsaaaaa`
--

CREATE TABLE `asdsaaaaa` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asdsaaaaa`
--

INSERT INTO `asdsaaaaa` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'drinks', 1, 1000, '2022/05/28', '18:30:24'),
(2, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:30:24'),
(3, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '18:30:24'),
(4, 'drinks', 1, 124, '2022/05/28', '18:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  `check_in_date` varchar(12) NOT NULL,
  `check_out_date` varchar(12) NOT NULL,
  `amount_to_pay` double NOT NULL,
  `customer_name` varchar(40) NOT NULL,
  `email` varchar(79) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(70) NOT NULL,
  `certification_type` varchar(25) NOT NULL,
  `document_number` varchar(40) NOT NULL,
  `still_exist` tinyint(1) NOT NULL DEFAULT 1,
  `check_in_time` varchar(12) NOT NULL,
  `check_out_time` varchar(12) NOT NULL,
  `extra_bed` int(11) NOT NULL DEFAULT 0,
  `laundry` int(11) NOT NULL DEFAULT 0,
  `taxi_km` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `room_number`, `check_in_date`, `check_out_date`, `amount_to_pay`, `customer_name`, `email`, `contact`, `address`, `certification_type`, `document_number`, `still_exist`, `check_in_time`, `check_out_time`, `extra_bed`, `laundry`, `taxi_km`) VALUES
(10, 0, '2022-05-17', '2022-02-19', 0, 'Praman Silakar', 'bsportsnleis3ure@gmail.com', 23455452, 'Sipadol,Suryabinayak-8,Bhaktapur', 'citizenship', 'asdad', 1, '15:2:15', '', 0, 0, 0),
(1, 100, '2022-05-16', '2022-05-17', 0, 'Nikesh Thapa', 'thapanikita171@gmail.com', 1232131, 'Pikhel,changunarayan na pa-5', 'citizenship', '213', 1, '17:09:22', '0', 0, 0, 0),
(4, 100, '2022-05-18', '2022-05-21', 0, 'Praman Silakar', 'bsportsnleisure@gmail.com', 2132132423, 'Sipadol,Suryabinayak-8,Bhaktapur', 'citizenship', '43543', 1, '17:10:38', '0', 0, 0, 0),
(9, 102, '2022-05-16', '2021-10-10', 0, 'Nikesh Thapa', 'thapanikita171@gmail.com', 123, 'Pikhel,changunarayan na pa-5', 'citizenship', '678678', 1, '13:4:38', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cancelled_orders`
--

CREATE TABLE `cancelled_orders` (
  `id` int(11) NOT NULL,
  `itemname` varchar(40) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL,
  `table_number` varchar(5) NOT NULL,
  `room_number` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cancelled_orders`
--

INSERT INTO `cancelled_orders` (`id`, `itemname`, `quantity`, `date1`, `time1`, `table_number`, `room_number`) VALUES
(1, 'drinks', 1, '2021-09-21', '00:35:14', '2', ''),
(2, 'Chowmin', 5, '2021-09-21', '00:35:17', '2', ''),
(3, 'Chowmin', 1, '2021-09-21', '00:35:47', '3', ''),
(4, 'Chowmin', 1, '2021-09-21', '00:35:52', '3', ''),
(5, 'pizza', 2, '2021-09-21', '00:37:34', '3', ''),
(6, 'drinks', 1, '2021-09-21', '00:39:40', '2', ''),
(7, 'drinks', 3, '2021-09-21', '00:39:45', '2', ''),
(8, 'pizza', 3, '2021-09-21', '00:39:47', '2', ''),
(9, 'Coke', 2, '2021-09-21', '00:43:01', '3', ''),
(10, 'pizza', 2, '2021-09-21', '00:43:21', '2', ''),
(11, 'Chowmin', 3, '2021-09-21', '00:43:45', '2', ''),
(12, 'drinks', 12, '2021-09-21', '00:44:48', '3', ''),
(13, 'pizza', 2, '2021-09-21', '00:45:06', '3', ''),
(14, 'Chowmin', 12, '2021-09-21', '00:47:40', '1', ''),
(15, 'drinks', 2, '2021-09-21', '00:49:00', '1', ''),
(16, 'Chowmin', 1, '2021-09-21', '00:53:12', '2', ''),
(17, 'Chowmin', 11, '2021-09-21', '00:54:47', '2', ''),
(18, 'pizza', 2, '2021-09-21', '00:56:16', '2', ''),
(19, 'Chowmin', 13, '2021-09-21', '01:00:28', '2', ''),
(20, 'drinks', 2, '2021-09-21', '01:04:04', '2', ''),
(21, 'Chowmin', 13, '2021-09-21', '01:07:23', '2', ''),
(22, 'Chowmin', 1, '2021-09-21', '01:08:07', '2', ''),
(23, 'drinks', 1, '2021-09-21', '01:08:10', '1', ''),
(24, 'Chowmin', 1, '2021-09-21', '01:08:41', '1', ''),
(25, 'Chowmin', 1, '2021-09-21', '01:15:49', '2', ''),
(26, 'Chowmin', 12, '2021-09-21', '01:15:52', '2', ''),
(27, 'Chowmin', 2, '2021-09-21', '01:17:24', '1', ''),
(28, 'Chowmin', 13, '2021-09-22', '09:44:48', '2', ''),
(29, 'Chowmin', 12, '2021-09-22', '10:39:36', '2', ''),
(30, 'pizza', 12, '2021-10-03', '07:26:38', '1', ''),
(31, 'drinks', 121, '2022-05-16', '15:32:59', '1', ''),
(32, 'drinks', 124, '2022-05-16', '15:33:05', '1', ''),
(33, 'drinks', 201, '2022-05-27', '15:05:11', '3', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(38) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'starter'),
(2, 'lunch'),
(4, 'dinner'),
(5, 'drinks');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `address` varchar(140) NOT NULL,
  `certificationtype` varchar(60) NOT NULL,
  `documentnumber` varchar(50) NOT NULL,
  `roomnumber` int(11) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delete_inventory`
--

CREATE TABLE `delete_inventory` (
  `id` int(11) NOT NULL,
  `inventory_name` varchar(40) NOT NULL,
  `time1` varchar(13) NOT NULL,
  `date1` varchar(13) NOT NULL,
  `user` varchar(44) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delete_inventory`
--

INSERT INTO `delete_inventory` (`id`, `inventory_name`, `time1`, `date1`, `user`, `quantity`) VALUES
(1, 'Coke', '13:26:14', '2021-09-20', '', 22),
(2, 'fghfgh', '21:41:51', '2021-09-21', '', 79);

-- --------------------------------------------------------

--
-- Table structure for table `dfgfdg`
--

CREATE TABLE `dfgfdg` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dfgfdg`
--

INSERT INTO `dfgfdg` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '06:52:23'),
(2, 'Chowmin', 1, 200, '2022/05/28', '06:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `dfgfdgs`
--

CREATE TABLE `dfgfdgs` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dfgfdgs`
--

INSERT INTO `dfgfdgs` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '06:57:42'),
(2, 'Chowmin', 1, 200, '2022/05/28', '06:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `dfgfdgss`
--

CREATE TABLE `dfgfdgss` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dfgfdgss`
--

INSERT INTO `dfgfdgss` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '06:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `dfgfdgsss`
--

CREATE TABLE `dfgfdgsss` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dfgfdgsss`
--

INSERT INTO `dfgfdgsss` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'drinks', 1, 1000, '2022/05/28', '06:59:16'),
(2, 'drinks', 1, 1000, '2022/05/28', '06:59:16'),
(3, 'drinks', 1, 124, '2022/05/28', '06:59:16'),
(4, 'drinks', 1, 124, '2022/05/28', '06:59:16'),
(5, 'Chowmin', 1, 200, '2022/05/28', '07:22:27'),
(6, 'Chowmin', 1, 200, '2022/05/28', '07:22:27'),
(7, 'Chowmin', 1, 200, '2022/05/28', '07:24:43'),
(8, 'Chowmin', 1, 200, '2022/05/28', '07:24:43'),
(9, 'drinks', 1, 1000, '2022/05/28', '07:24:43'),
(10, 'drinks', 1, 124, '2022/05/28', '07:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `hgjhgh`
--

CREATE TABLE `hgjhgh` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hgjhgh`
--

INSERT INTO `hgjhgh` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/27', '15:21:42'),
(2, 'Chowmin', 1, 200, '2022/05/27', '15:21:42'),
(3, 'Chowmin', -1, -200, '2022/05/27', '15:21:42'),
(4, 'pizza', 1, 209, '2022/05/27', '15:21:42'),
(5, 'drinks', 1, 1000, '2022/05/27', '15:21:42'),
(6, 'drinks', -1, -1000, '2022/05/27', '15:21:42'),
(7, 'drinks', 1, 124, '2022/05/27', '15:21:42'),
(8, 'drinks', -1, -124, '2022/05/27', '15:21:42');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `barcode` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `minimum_stocks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`name`, `quantity`, `price`, `barcode`, `id`, `minimum_stocks`) VALUES
('drinks', 129, 124, 3345, 9, 13);

-- --------------------------------------------------------

--
-- Table structure for table `jdfghdf`
--

CREATE TABLE `jdfghdf` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jdfghdf`
--

INSERT INTO `jdfghdf` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/27', '15:56:49'),
(2, 'drinks', 1, 1000, '2022/05/27', '15:56:49'),
(3, 'drinks', 1, 1000, '2022/05/27', '15:56:49'),
(4, 'drinks', 1, 124, '2022/05/27', '15:56:49'),
(5, 'drinks', 1, 124, '2022/05/27', '15:56:49'),
(6, 'Chowmin', 1, 200, '2022/05/27', '15:57:26'),
(7, 'Chowmin', 1, 200, '2022/05/27', '15:57:26'),
(8, 'Chowmin', 1, 200, '2022/05/27', '15:58:10'),
(9, 'Chowmin', 1, 200, '2022/05/27', '15:58:10'),
(10, 'Chowmin', 1, 200, '2022/05/27', '15:58:10'),
(11, 'Chowmin', 1, 200, '2022/05/27', '15:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `khksas`
--

CREATE TABLE `khksas` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khksas`
--

INSERT INTO `khksas` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `khksasd`
--

CREATE TABLE `khksasd` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khksasd`
--

INSERT INTO `khksasd` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `khksjhd`
--

CREATE TABLE `khksjhd` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khksjhd`
--

INSERT INTO `khksjhd` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:48:30'),
(2, 'Chowmin', 1, 200, '2022/05/28', '12:48:30');

-- --------------------------------------------------------

--
-- Table structure for table `khksjhda`
--

CREATE TABLE `khksjhda` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khksjhda`
--

INSERT INTO `khksjhda` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `ksjdfk`
--

CREATE TABLE `ksjdfk` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ksjdfk`
--

INSERT INTO `ksjdfk` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'drinks', 1, 1000, '2022/05/28', '12:33:30'),
(2, 'drinks', 1, 124, '2022/05/28', '12:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `menu_photo` text NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT 1,
  `category` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `price`, `menu_photo`, `item_name`, `availability`, `category`) VALUES
(2, 200, 'menuphoto/1631905049.jpg', 'Chowmin', 1, 'dinner'),
(4, 1000, 'menuphoto/1631905096.jpg', 'drinks', 1, 'starter'),
(5, 209, 'menuphoto/1631962512.jpg', 'pizza', 1, 'lunch'),
(7, 434, 'menuphoto/1632155433.jpg', 'Coke', 1, 'lunch'),
(8, 123, 'menuphoto/1632191454.png', 'sdas', 1, 'dinner'),
(9, 2, 'menuphoto/1632191802.png', '123', 1, 'starter'),
(10, 100, 'menuphoto/1653721392.png', 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 'starter'),
(11, 123, 'menuphoto/1653725466.png', 'gjhg', 1, 'lunch'),
(12, 123, 'menuphoto/1653725524.png', 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 'lunch'),
(13, 6, 'menuphoto/1653727677.png', 'Coke 100', 1, 'starter');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `table_number` int(11) NOT NULL,
  `room_number` varchar(12) NOT NULL,
  `food_name` varchar(70) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_time` varchar(20) NOT NULL,
  `order_date` varchar(16) NOT NULL,
  `iscompleted` tinyint(1) NOT NULL DEFAULT 0,
  `ispaid` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_mode`
--

CREATE TABLE `payment_mode` (
  `id` int(11) NOT NULL,
  `payment_mode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_mode`
--

INSERT INTO `payment_mode` (`id`, `payment_mode`) VALUES
(1, 'Cash'),
(2, 'Card');

-- --------------------------------------------------------

--
-- Table structure for table `print_table`
--

CREATE TABLE `print_table` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` float NOT NULL,
  `price` float NOT NULL,
  `customer_name` varchar(40) NOT NULL,
  `tax` int(11) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roomnumber`
--

CREATE TABLE `roomnumber` (
  `roomnumber` varchar(15) NOT NULL,
  `roomname` varchar(48) DEFAULT NULL,
  `roomtype` varchar(255) NOT NULL,
  `isempty` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomnumber`
--

INSERT INTO `roomnumber` (`roomnumber`, `roomname`, `roomtype`, `isempty`) VALUES
('100', 'Sea side view', 'double', 'false'),
('102', 'Forest view', 'Tween', 'false'),
('FV1', 'Forest view', 'double', 'true'),
('SV1', 'Sea side view', 'Tween', 'false'),
('SV2', 'Sea side view', 'Tween', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `room_price` decimal(20,2) NOT NULL,
  `total_rooms` int(10) NOT NULL DEFAULT 0,
  `room_photo` varchar(255) NOT NULL,
  `occupied_rooms` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_name`, `room_price`, `total_rooms`, `room_photo`, `occupied_rooms`) VALUES
(15, 'Sea side view', '5000.00', 3, '61431aee1a0600.68552156.jpg', 8),
(16, 'Forest view', '3000.00', 2, '61431972d87444.86392104.jpg', 4),
(18, 'Pool view', '400.00', 0, '6143459c7353f4.31048091.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(11) NOT NULL,
  `roomtype` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`id`, `roomtype`) VALUES
(1, 'double'),
(2, 'Tween'),
(3, 'ccc');

-- --------------------------------------------------------

--
-- Table structure for table `sangam`
--

CREATE TABLE `sangam` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sangam`
--

INSERT INTO `sangam` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/27', '13:51:11'),
(2, 'Chowmin', 1, 200, '2022/05/27', '13:53:10'),
(3, 'pizza', 1, 209, '2022/05/27', '13:59:34'),
(4, 'pizza', 1, 209, '2022/05/27', '14:02:35'),
(5, 'pizza', 1, 209, '2022/05/27', '14:02:57'),
(6, 'pizza', -1, -209, '2022/05/27', '14:02:57'),
(7, 'pizza', 1, 209, '2022/05/27', '14:05:51'),
(8, 'pizza', -1, -209, '2022/05/27', '14:05:51'),
(9, 'pizza', 1, 209, '2022/05/27', '14:06:20'),
(10, 'pizza', -1, -209, '2022/05/27', '14:06:20'),
(11, 'pizza', 1, 209, '2022/05/27', '14:08:47'),
(12, 'pizza', 1, 209, '2022/05/27', '14:09:07'),
(13, 'pizza', -1, -209, '2022/05/27', '14:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `sangam_test`
--

CREATE TABLE `sangam_test` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sangam_test`
--

INSERT INTO `sangam_test` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/27', '15:45:09'),
(2, 'Chowmin', 1, 200, '2022/05/27', '15:45:09'),
(3, 'pizza', 1, 209, '2022/05/27', '15:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_booking`
--

CREATE TABLE `schedule_booking` (
  `id` int(11) NOT NULL,
  `room_number` varchar(15) NOT NULL,
  `estimated_check_in` varchar(14) NOT NULL,
  `estimated_check_out` varchar(16) NOT NULL,
  `booking_on_name` varchar(40) NOT NULL,
  `booking_on_email` varchar(51) NOT NULL,
  `booking_on_contact` int(11) NOT NULL,
  `address` varchar(62) NOT NULL,
  `payment` float DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_booking`
--

INSERT INTO `schedule_booking` (`id`, `room_number`, `estimated_check_in`, `estimated_check_out`, `booking_on_name`, `booking_on_email`, `booking_on_contact`, `address`, `payment`) VALUES
(5, 'SV1', '2022-02-18', '2022-02-22', 'Sangita Thapa', 'sipa222sangi@gmail.com', 12122, 'Basuki tar,Sipadol,Suryabinayak Na.Pa-8,Bhaktapur', 0),
(2, 'SV2', '2021-10-05', '2021-10-16', 'Praman Silakar', 'bsportsnleisure@gmail.com', 9999, 'Sipadol,Suryabinayak-8,Bhaktapur', 0),
(3, 'SV2', '2021-10-13', '2021-10-31', 'Nikesh Thapa', 'thapanikita17133@gmail.com', 55555, 'Pikhel,changunarayan na pa-5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sfsd`
--

CREATE TABLE `sfsd` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sfsd`
--

INSERT INTO `sfsd` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:15:56'),
(2, 'Chowmin', 1, 200, '2022/05/28', '12:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `sfsdd`
--

CREATE TABLE `sfsdd` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sfsdd`
--

INSERT INTO `sfsdd` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:20:09'),
(2, 'Chowmin', 1, 200, '2022/05/28', '12:20:09'),
(3, 'Chowmin', 1, 200, '2022/05/28', '12:22:34'),
(4, 'Chowmin', 1, 200, '2022/05/28', '12:31:24'),
(5, 'Chowmin', 1, 200, '2022/05/28', '12:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `sfsdds`
--

CREATE TABLE `sfsdds` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sfsdds`
--

INSERT INTO `sfsdds` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'drinks', 1, 1000, '2022/05/28', '12:22:05'),
(2, 'drinks', 1, 1000, '2022/05/28', '12:22:05'),
(3, 'drinks', 1, 124, '2022/05/28', '12:22:05'),
(4, 'drinks', 1, 124, '2022/05/28', '12:22:05'),
(5, 'Chowmin', 1, 200, '2022/05/28', '12:23:29'),
(6, 'Chowmin', 1, 200, '2022/05/28', '12:27:50'),
(7, 'Chowmin', 1, 200, '2022/05/28', '12:29:52'),
(8, 'Chowmin', 1, 200, '2022/05/28', '12:30:52'),
(9, 'Chowmin', 1, 200, '2022/05/28', '12:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `sfsddss`
--

CREATE TABLE `sfsddss` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sfsddss`
--

INSERT INTO `sfsddss` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '12:25:01'),
(2, 'drinks', 1, 1000, '2022/05/28', '12:28:15'),
(3, 'drinks', 1, 124, '2022/05/28', '12:28:15'),
(4, 'Chowmin', 1, 200, '2022/05/28', '12:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `sold_items`
--

CREATE TABLE `sold_items` (
  `id` int(11) NOT NULL,
  `table_number` varchar(10) NOT NULL,
  `customer_name` varchar(40) NOT NULL,
  `food_item` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `date1` varchar(15) NOT NULL,
  `time1` varchar(15) NOT NULL,
  `user` varchar(15) NOT NULL,
  `total` double NOT NULL,
  `payment_mode` varchar(10) NOT NULL,
  `day1` varchar(4) NOT NULL,
  `room_number` varchar(14) NOT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sold_items`
--

INSERT INTO `sold_items` (`id`, `table_number`, `customer_name`, `food_item`, `quantity`, `price`, `date1`, `time1`, `user`, `total`, `payment_mode`, `day1`, `room_number`, `payment_status`) VALUES
(1, '1', 'Sangita Thapaa', 'pizza', 1, 1, '2021/09/17', '11:22:45', '', 1, 'card', 'Sun', '100', 0),
(2, '1', 'Sangita Thapaa', 'pizza', 2, 2, '2021/09/17', '11:22:45', '', 4, 'card', 'Wed', '100', 0),
(3, '1', 'Sangita Thapaa', 'Refreshing ', 3, 3, '2021/09/17', '11:22:45', '', 9, 'card', 'Wed', '100', 0),
(4, '3', 'fff', 'pizza', 3, 3, '2021/09/17', '11:23:50', '', 9, 'card', 'Wed', '', 0),
(5, '4', 'sad', 'chowmein', 3, 3, '2021/09/17', '11:25:28', '', 9, 'card', 'Wed', '', 0),
(6, '4', 'sad', 'momo', 2, 2, '2021/09/17', '11:25:28', '', 4, 'card', 'Wed', '', 0),
(7, '3', 'sad', 'pizza', 12, 123, '2021/09/17', '12:13:48', '', 1476, 'card', 'Wed', '', 0),
(8, '2', 'ram', 'chowmein', 12, 200, '2021/09/17', '19:40:35', '', 2400, 'card', 'Wed', '', 0),
(9, '2', 'ram', 'momo', 3, 100, '2021/09/17', '19:40:35', '', 300, 'card', 'Wed', '', 0),
(10, '2', 'Sad', 'Pizza', 2, 300, '2021/09/17', '20:59:33', '', 600, 'card', 'Wed', '', 0),
(11, '2', 'Sad', 'Momo', 3, 120, '2021/09/17', '20:59:33', '', 360, 'card', 'Wed', '', 0),
(12, '4', 'sadddd', 'Chowmin', 3, 200, '2021/09/18', '19:28:46', '', 600, 'card', 'Wed', '', 0),
(13, '1', 'sadsa', 'pizza', 3, 123, '2021/09/18', '22:03:05', '', 369, 'Cash', 'Wed', '', 0),
(14, '1', 'sadsa', 'chowmein', 2, 200, '2021/09/18', '22:03:05', '', 400, 'Cash', 'Wed', '', 0),
(15, '1', 'sangam', 'drinks', 2, 1000, '2021-09-18', '23:14:53', '', 2000, 'Cash', 'Wed', '', 0),
(16, '3', 'ffffs', 'pizza', 2, 209, '2021-09-18', '23:37:18', '', 418, 'Cash', 'Wed', '', 0),
(17, '2', 'ddd', 'Chowmin', 3, 200, '2021-09-19', '00:08:39', '', 600, 'Cash', 'Wed', '', 0),
(18, '2', 'ddd', 'pizza', 4, 209, '2021-09-19', '00:08:39', '', 836, 'Cash', 'Wed', '', 0),
(19, '2', 'ddd', 'drinks', 4, 1000, '2021-09-19', '00:08:39', '', 4000, 'Cash', 'Wed', '', 0),
(20, '4', 'sdsad', 'drinks', 2, 1000, '2021-09-19', '00:08:54', '', 2000, 'Cash', 'Wed', 'SV1', 0),
(21, '4', 'sdsad', 'Momo', 2, 120, '2021-09-19', '00:08:54', '', 240, 'Cash', 'Wed', 'SV1', 0),
(22, '4', 'sdsad', 'Momo', 3, 120, '2021-09-19', '00:08:54', '', 360, 'Cash', 'Wed', 'SV1', 0),
(23, '4', 'sdsad', 'Chowmin', 2, 200, '2021-09-19', '00:08:54', '', 400, 'Cash', 'Wed', 'SV1', 0),
(24, '4', 'sdsad', 'pizza', 2, 209, '2021-09-19', '00:08:54', '', 418, 'Cash', 'Wed', 'SV1', 0),
(25, '5', 'asd', 'Refreshing ', 3, 300, '2021-09-19', '00:09:11', '', 900, 'Cash', 'Wed', '', 0),
(26, '5', 'asd', 'french frie', 3, 60, '2021-09-19', '00:09:11', '', 180, 'Cash', 'Wed', '', 0),
(27, '5', 'asd', 'Momo', 3, 120, '2021-09-19', '00:09:11', '', 360, 'Cash', 'Wed', '', 0),
(28, '5', 'asd', 'drinks', 1, 1000, '2021-09-19', '00:09:11', '', 1000, 'Cash', 'Wed', '', 0),
(29, '5', 'asd', 'pizza', 3, 209, '2021-09-19', '00:09:11', '', 627, 'Cash', 'Wed', '', 0),
(30, '5', 'asd', 'Momo', 6, 120, '2021-09-19', '00:09:11', '', 720, 'Cash', 'Wed', '', 0),
(31, '2', 'sdfs', 'pizza', 2, 100, '2021-08-18', '12:10:00', 'FSDF', 200, 'Cash', 'Wed', '', 0),
(32, '6', 'sad', 'Chowmin', 8, 200, '2021-09-20', '14:14:43', '', 1600, 'Cash', 'Wed', '', 0),
(33, '4', '', 'Chowmin', 3, 200, '2021-09-20', '14:36:52', '', 600, 'Cash', 'Wed', '', 0),
(34, '5', '', 'drinks', 3, 1000, '2021-09-20', '14:40:18', '', 3000, 'Cash', 'Wed', '', 0),
(35, '4', 'asd', 'Chowmin', 12, 200, '2021-09-20', '14:41:41', '', 2400, 'Cash', 'Wed', '', 0),
(36, '4', 'asd', 'pizza', 5, 209, '2021-09-20', '14:41:41', '', 1045, 'Cash', 'Wed', '', 0),
(37, '6', '', 'Momo', 12, 120, '2021-09-20', '14:44:00', '', 1440, 'Cash', 'Wed', '', 0),
(38, '5', 'sangam', 'Chowmin', 3, 200, '2021-09-20', '15:08:17', '', 600, 'Cash', 'Wed', '', 0),
(39, '5', 'asd', 'Chowmin', 3, 200, '2021-09-20', '15:09:08', '', 600, 'Cash', 'Wed', '', 0),
(40, '5', 'asd', 'Chowmin', 3, 200, '2021-09-20', '15:09:47', '', 600, 'Cash', 'Sun', '', 0),
(41, '5', 'asd', 'Chowmin', 3, 200, '2021-09-20', '15:10:50', '', 600, 'Cash', 'Wed', '', 0),
(42, '5', 'asd', 'Chowmin', 3, 200, '2021-09-20', '15:13:00', '', 600, 'Cash', 'Wed', '', 0),
(43, '5', 'asd', 'Chowmin', 3, 200, '2021-09-20', '15:14:29', '', 600, 'Cash', 'Wed', '', 0),
(44, '5', '', 'Chowmin', 3, 200, '2021-09-20', '15:32:17', '', 600, 'Cash', 'Tue', '', 0),
(45, '5', 'sad', 'Chowmin', 3, 200, '2021-09-20', '16:09:09', '', 600, 'Cash', 'Wed', '', 0),
(46, '2', '', 'Chowmin', 1, 0, '2021-09-20', '22:01:19', '', 0, 'Cash', 'Wed', '', 0),
(47, '1', 'asd', 'drinks', 3, 1000, '2021-09-21', '01:17:46', '', 3000, 'Card', 'Wed', '', 0),
(48, '2', 'ssdf', 'Chowmin', 2, 200, '2021-09-21', '12:48:33', '', 400, 'Cash', 'Mon', '', 0),
(49, '1', '', 'Chowmin', 2, 200, '2021-09-22', '09:46:37', '', 400, 'Cash', 'Wed', '', 0),
(50, '1', '', 'pizza', 2, 209, '2021-09-22', '09:46:38', '', 418, 'Cash', 'Wed', '', 0),
(51, '1', 'asd', 'Chowmin', 2, 200, '2021-09-22', '11:06:31', '', 400, 'Cash', 'Wed', '', 0),
(52, '2', '', 'Chowmin', 1, 200, '2021-10-01', '21:50:23', '', 200, 'Cash', 'Fri', '', 0),
(53, '2', '', 'Chowmin', 2, 200, '2021-10-01', '21:50:23', '', 400, 'Cash', 'Fri', '', 0),
(54, '2', '', 'Coke', 2, 434, '2021-10-01', '21:50:23', '', 868, 'Cash', 'Fri', '', 0),
(55, '2', '', '123', 3, 2, '2021-10-01', '21:50:23', '', 6, 'Cash', 'Fri', '', 0),
(56, '2', '', 'drinks', 1, 1000, '2021-10-01', '21:50:23', '', 1000, 'Cash', 'Fri', '', 0),
(57, '1', '', 'Chowmin', 1, 200, '2021-10-12', '08:05:11', '', 200, 'Cash', 'Tue', '', 0),
(58, '1', '', 'drinks', 2, 1000, '2021-10-12', '08:05:11', '', 2000, 'Cash', 'Tue', '', 0),
(59, '3', 'sangam thapa', 'Chowmin', 2, 200, '2021-10-12', '08:15:37', '', 400, 'Cash', 'Tue', '', 0),
(60, '3', 'sangam thapa', 'Chowmin', 2, 200, '2021-10-12', '08:15:37', '', 400, 'Cash', 'Tue', '', 0),
(61, '4', 'sangam thapa', 'sdas', 2, 123, '2021-10-12', '08:28:20', '', 246, 'Cash', 'Tue', '', 0),
(62, '4', 'sangam thapa', 'pizza', 2, 209, '2021-10-12', '08:28:20', '', 418, 'Cash', 'Tue', '', 0),
(63, '3', '', 'Chowmin', 1, 200, '2022-05-11', '20:53:52', '', 200, 'Cash', 'Wed', '', 0),
(64, '3', '', 'Chowmin', 1, 200, '2022-05-11', '20:53:52', '', 200, 'Cash', 'Wed', '', 0),
(65, '3', '', 'drinks', 1, 1000, '2022-05-11', '20:53:53', '', 1000, 'Cash', 'Wed', '', 0),
(66, '5', '', 'drinks', 1, 1000, '2022-05-15', '11:02:09', '', 1000, 'Cash', 'Sun', '', 0),
(67, '5', '', 'pizza', 1, 209, '2022-05-15', '11:02:09', '', 209, 'Cash', 'Sun', '', 0),
(68, '5', '', 'Chowmin', 1, 200, '2022-05-15', '11:02:09', '', 200, 'Cash', 'Sun', '', 0),
(69, '5', '', 'Chowmin', 1, 200, '2022-05-15', '11:02:09', '', 200, 'Cash', 'Sun', '', 0),
(70, '5', '', 'Chowmin', -1, -200, '2022-05-15', '11:02:09', '', 200, 'Cash', 'Sun', '', 0),
(71, '4', 'Nikesh Thapa', 'pizza', 1, 209, '2022-05-16', '13:00:46', '', 209, 'Cash', 'Mon', '', 0),
(72, '4', 'Nikesh Thapa', 'pizza', 1, 209, '2022-05-16', '13:00:46', '', 209, 'Cash', 'Mon', '', 0),
(73, '4', 'Nikesh Thapa', 'drinks', 1, 1000, '2022-05-16', '13:00:46', '', 1000, 'Cash', 'Mon', '', 0),
(74, '4', 'Nikesh Thapa', 'drinks', 1, 1000, '2022-05-16', '13:00:46', '', 1000, 'Cash', 'Mon', '', 0),
(75, '4', 'Nikesh Thapa', 'drinks', 1, 1000, '2022-05-16', '13:00:46', '', 1000, 'Cash', 'Mon', '', 0),
(76, '4', 'Nikesh Thapa', 'drinks', -1, -1000, '2022-05-16', '13:00:46', '', 1000, 'Cash', 'Mon', '', 0),
(77, '4', 'Nikesh Thapa', 'drinks', -1, -1000, '2022-05-16', '13:00:46', '', 1000, 'Cash', 'Mon', '', 0),
(78, '5', '', 'Chowmin', 1, 200, '2022-05-16', '13:09:55', '', 200, 'Cash', 'Mon', '', 0),
(79, '5', '', 'Coke', 1, 434, '2022-05-16', '13:09:55', '', 434, 'Cash', 'Mon', '', 0),
(80, '5', '', '123', 1, 2, '2022-05-16', '13:09:55', '', 2, 'Cash', 'Mon', '', 0),
(81, '3', 'asd', 'Chowmin', 1, 200, '2022-05-17', '09:23:36', '', 200, 'Cash', 'Tue', '', 0),
(82, '3', 'asd', 'Chowmin', 1, 200, '2022-05-17', '09:23:36', '', 200, 'Cash', 'Tue', '', 0),
(83, '3', 'asd', 'Chowmin', 1, 200, '2022-05-17', '09:23:36', '', 200, 'Cash', 'Tue', '', 0),
(84, '3', 'asd', 'Chowmin', -1, -200, '2022-05-17', '09:23:36', '', 200, 'Cash', 'Tue', '', 0),
(85, '3', 'asd', 'drinks', 1, 1000, '2022-05-17', '09:23:36', '', 1000, 'Cash', 'Tue', '', 0),
(86, '3', 'asd', 'pizza', 1, 209, '2022-05-17', '09:23:36', '', 209, 'Cash', 'Tue', '', 0),
(87, '2', 'sdsad', 'Chowmin', 1, 200, '2022-05-27', '15:33:53', '', 200, 'Cash', 'Fri', '', 0),
(88, '2', 'sdsad', 'Chowmin', 1, 200, '2022-05-27', '15:33:53', '', 200, 'Cash', 'Fri', '', 0),
(89, '2', 'sdsad', 'Chowmin', -1, -200, '2022-05-27', '15:33:53', '', 200, 'Cash', 'Fri', '', 0),
(90, '2', 'sdsad', 'pizza', 1, 209, '2022-05-27', '15:33:53', '', 209, 'Cash', 'Fri', '', 0),
(91, '2', 'sdsad', 'drinks', 1, 1000, '2022-05-27', '15:33:53', '', 1000, 'Cash', 'Fri', '', 0),
(92, '2', 'sdsad', 'drinks', -1, -1000, '2022-05-27', '15:33:53', '', 1000, 'Cash', 'Fri', '', 0),
(93, '3', 'sdfhkjsdhf', 'drinks', 1, 1000, '2022-05-27', '15:36:23', '', 1000, 'Cash', 'Fri', '', 0),
(94, '3', 'sdfhkjsdhf', 'drinks', 1, 1000, '2022-05-27', '15:36:23', '', 1000, 'Cash', 'Fri', '', 0),
(95, '3', 'sdfhkjsdhf', 'drinks', 1, 1000, '2022-05-27', '15:36:23', '', 1000, 'Cash', 'Fri', '', 0),
(96, '3', 'sdfhkjsdhf', 'drinks', 1, 1000, '2022-05-27', '15:36:23', '', 1000, 'Cash', 'Fri', '', 0),
(97, '3', 'sdfhkjsdhf', 'drinks', 1, 1000, '2022-05-27', '15:36:23', '', 1000, 'Cash', 'Fri', '', 0),
(98, '3', 'sdfhkjsdhf', 'drinks', 1, 1000, '2022-05-27', '15:36:23', '', 1000, 'Cash', 'Fri', '', 0),
(99, '3', 'sdfhkjsdhf', 'drinks', 1, 1000, '2022-05-27', '15:36:23', '', 1000, 'Cash', 'Fri', '', 0),
(100, '3', 'sdfhkjsdhf', 'drinks', 1, 1000, '2022-05-27', '15:36:23', '', 1000, 'Cash', 'Fri', '', 0),
(101, '3', 'sdfhkjsdhf', 'drinks', 1, 1000, '2022-05-27', '15:36:24', '', 1000, 'Cash', 'Fri', '', 0),
(102, '3', 'sdfhkjsdhf', 'Chowmin', 1, 200, '2022-05-27', '15:36:24', '', 200, 'Cash', 'Fri', '', 0),
(103, '3', 'sdfhkjsdhf', 'Chowmin', 1, 200, '2022-05-27', '15:36:24', '', 200, 'Cash', 'Fri', '', 0),
(104, '3', 'sdfhkjsdhf', 'Chowmin', 1, 200, '2022-05-27', '15:36:24', '', 200, 'Cash', 'Fri', '', 0),
(105, '3', 'sdfhkjsdhf', 'drinks', 1, 1000, '2022-05-27', '15:36:24', '', 1000, 'Cash', 'Fri', '', 0),
(106, '6', 'jkdhfgkfd', 'Chowmin', 1, 200, '2022-05-27', '15:37:08', '', 200, 'Cash', 'Fri', '', 0),
(107, '6', 'jkdhfgkfd', 'Chowmin', 1, 200, '2022-05-27', '15:37:08', '', 200, 'Cash', 'Fri', '', 0),
(108, '6', 'jkdhfgkfd', 'Chowmin', 1, 200, '2022-05-27', '15:37:08', '', 200, 'Cash', 'Fri', '', 0),
(109, '6', 'jkdhfgkfd', 'Chowmin', 1, 200, '2022-05-27', '15:37:08', '', 200, 'Cash', 'Fri', '', 0),
(110, '6', 'jkdhfgkfd', 'Chowmin', 1, 200, '2022-05-27', '15:37:08', '', 200, 'Cash', 'Fri', '', 0),
(111, '6', 'jkdhfgkfd', 'Chowmin', 1, 200, '2022-05-27', '15:37:08', '', 200, 'Cash', 'Fri', '', 0),
(112, '6', 'jkdhfgkfd', 'drinks', 1, 1000, '2022-05-27', '15:37:08', '', 1000, 'Cash', 'Fri', '', 0),
(113, '6', 'jkdhfgkfd', 'Chowmin', 1, 200, '2022-05-27', '15:37:08', '', 200, 'Cash', 'Fri', '', 0),
(114, '6', 'jkdhfgkfd', 'Chowmin', 1, 200, '2022-05-27', '15:37:08', '', 200, 'Cash', 'Fri', '', 0),
(115, '6', 'jkdhfgkfd', 'Chowmin', 1, 200, '2022-05-27', '15:37:08', '', 200, 'Cash', 'Fri', '', 0),
(116, '6', 'jkdhfgkfd', 'drinks', 1, 1000, '2022-05-27', '15:37:08', '', 1000, 'Cash', 'Fri', '', 0),
(117, '5', 'thapa1', 'Chowmin', 1, 200, '2022-05-27', '15:39:23', '', 200, 'Cash', 'Fri', '', 0),
(118, '5', 'thapa1', 'Chowmin', 1, 200, '2022-05-27', '15:39:23', '', 200, 'Cash', 'Fri', '', 0),
(119, '4', 'shdfkjsdf', 'Chowmin', 1, 200, '2022-05-27', '15:40:08', '', 200, 'Cash', 'Fri', '', 0),
(120, '4', 'shdfkjsdf', 'Chowmin', 1, 200, '2022-05-27', '15:40:08', '', 200, 'Cash', 'Fri', '', 0),
(121, '4', 'shdfkjsdf', 'pizza', 1, 209, '2022-05-27', '15:40:08', '', 209, 'Cash', 'Fri', '', 0),
(122, '2', 'pay1', 'Chowmin', 1, 200, '2022-05-28', '16:52:47', '', 200, 'Cash', 'Sat', '', 0),
(123, '2', 'pay1', 'teashasgsdj', 1, 100, '2022-05-28', '16:52:47', '', 100, 'Cash', 'Sat', '', 0),
(124, '2', 'pay1', 'teashasgsdj', 1, 100, '2022-05-28', '16:52:48', '', 100, 'Cash', 'Sat', '', 0),
(125, '2', 'pay1', 'sfdsfs sfsf', 1, 123, '2022-05-28', '16:52:48', '', 123, 'Cash', 'Sat', '', 0),
(126, '2', 'pay1', 'sfdsfs sfsf', 1, 123, '2022-05-28', '16:52:48', '', 123, 'Cash', 'Sat', '', 0),
(127, '2', 'pay1', 'sfdsfs sfsf', -1, -123, '2022-05-28', '16:52:48', '', 123, 'Cash', 'Sat', '', 0),
(128, '2', 'pay1', 'gjhg', 1, 123, '2022-05-28', '16:52:48', '', 123, 'Cash', 'Sat', '', 0),
(129, '1', 'asdsad', 'Chowmin', 1, 200, '2022-05-28', '17:53:14', '', 200, 'Cash', 'Sat', '', 0),
(130, '1', 'asdsad', 'drinks', 1, 1000, '2022-05-28', '17:53:14', '', 1000, 'Cash', 'Sat', '', 0),
(131, '1', 'asdsad', 'drinks', 1, 1000, '2022-05-28', '17:53:14', '', 1000, 'Cash', 'Sat', '', 0),
(132, '1', 'asdsad', 'Chowmin', 1, 200, '2022-05-28', '17:53:14', '', 200, 'Cash', 'Sat', '', 0),
(133, '1', 'asdsad', 'Chowmin', 1, 200, '2022-05-28', '17:53:14', '', 200, 'Cash', 'Sat', '', 0),
(134, '1', 'asdsad', 'Chowmin', 1, 200, '2022-05-28', '17:53:14', '', 200, 'Cash', 'Sat', '', 0),
(135, '1', 'asdsad', 'Chowmin', 1, 200, '2022-05-28', '17:53:14', '', 200, 'Cash', 'Sat', '', 0),
(136, '1', 'asdsad', 'Chowmin', 1, 200, '2022-05-28', '17:53:14', '', 200, 'Cash', 'Sat', '', 0),
(137, '1', 'asdsad', 'Chowmin', 1, 200, '2022-05-28', '17:53:14', '', 200, 'Cash', 'Sat', '', 0),
(138, '5', '', 'Chowmin', 1, 200, '2022-05-28', '17:54:34', '', 200, 'Cash', 'Sat', '', 0),
(139, '5', '', 'Chowmin', 1, 200, '2022-05-28', '17:54:34', '', 200, 'Cash', 'Sat', '', 0),
(140, '4', 'sadsad', 'drinks', 1, 1000, '2022-05-28', '17:55:35', '', 1000, 'Cash', 'Sat', '', 0),
(141, '4', 'sadsad', 'drinks', 1, 1000, '2022-05-28', '17:55:35', '', 1000, 'Cash', 'Sat', '', 0),
(142, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:35', '', 200, 'Cash', 'Sat', '', 0),
(143, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:35', '', 200, 'Cash', 'Sat', '', 0),
(144, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:35', '', 200, 'Cash', 'Sat', '', 0),
(145, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:35', '', 200, 'Cash', 'Sat', '', 0),
(146, '4', 'sadsad', 'drinks', 1, 1000, '2022-05-28', '17:55:35', '', 1000, 'Cash', 'Sat', '', 0),
(147, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(148, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(149, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(150, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(151, '4', 'sadsad', 'drinks', 1, 1000, '2022-05-28', '17:55:36', '', 1000, 'Cash', 'Sat', '', 0),
(152, '4', 'sadsad', 'drinks', 1, 1000, '2022-05-28', '17:55:36', '', 1000, 'Cash', 'Sat', '', 0),
(153, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(154, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(155, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(156, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(157, '4', 'sadsad', 'drinks', 1, 1000, '2022-05-28', '17:55:36', '', 1000, 'Cash', 'Sat', '', 0),
(158, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(159, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(160, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(161, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(162, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(163, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(164, '4', 'sadsad', 'drinks', 1, 1000, '2022-05-28', '17:55:36', '', 1000, 'Cash', 'Sat', '', 0),
(165, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(166, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(167, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:36', '', 200, 'Cash', 'Sat', '', 0),
(168, '4', 'sadsad', 'Coke', 1, 434, '2022-05-28', '17:55:37', '', 434, 'Cash', 'Sat', '', 0),
(169, '4', 'sadsad', 'teashasgsdj', 1, 100, '2022-05-28', '17:55:37', '', 100, 'Cash', 'Sat', '', 0),
(170, '4', 'sadsad', 'drinks', 1, 1000, '2022-05-28', '17:55:37', '', 1000, 'Cash', 'Sat', '', 0),
(171, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:37', '', 200, 'Cash', 'Sat', '', 0),
(172, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:37', '', 200, 'Cash', 'Sat', '', 0),
(173, '4', 'sadsad', 'teashasgsdj', 1, 100, '2022-05-28', '17:55:37', '', 100, 'Cash', 'Sat', '', 0),
(174, '4', 'sadsad', 'teashasgsdj', 1, 100, '2022-05-28', '17:55:37', '', 100, 'Cash', 'Sat', '', 0),
(175, '4', 'sadsad', 'teashasgsdj', 1, 100, '2022-05-28', '17:55:37', '', 100, 'Cash', 'Sat', '', 0),
(176, '4', 'sadsad', 'Chowmin', 1, 200, '2022-05-28', '17:55:37', '', 200, 'Cash', 'Sat', '', 0),
(177, '4', 'sadsad', 'teashasgsdj', 1, 100, '2022-05-28', '17:55:37', '', 100, 'Cash', 'Sat', '', 0),
(178, '4', 'sadsad', 'teashasgsdj', 1, 100, '2022-05-28', '17:55:37', '', 100, 'Cash', 'Sat', '', 0),
(179, '4', 'sadsad', 'teashasgsdj', 1, 100, '2022-05-28', '17:55:37', '', 100, 'Cash', 'Sat', '', 0),
(180, '6', 'asdsadas', 'Chowmin', 1, 200, '2022-05-28', '17:56:38', '', 200, 'Cash', 'Sat', '', 0),
(181, '6', 'asdsadas', 'Chowmin', 1, 200, '2022-05-28', '17:56:38', '', 200, 'Cash', 'Sat', '', 0),
(182, '6', 'asdsadas', 'teashasgsdj', 1, 100, '2022-05-28', '17:56:38', '', 100, 'Cash', 'Sat', '', 0),
(183, '6', 'asdsadas', 'teashasgsdj', 1, 100, '2022-05-28', '17:56:38', '', 100, 'Cash', 'Sat', '', 0),
(184, '6', 'asdsadas', 'sfdsfs sfsf', 1, 123, '2022-05-28', '17:56:39', '', 123, 'Cash', 'Sat', '', 0),
(185, '6', 'asdsadas', 'sfdsfs sfsf', 1, 123, '2022-05-28', '17:56:39', '', 123, 'Cash', 'Sat', '', 0),
(186, '6', 'asdsadas', 'sfdsfs sfsf', -1, -123, '2022-05-28', '17:56:39', '', 123, 'Cash', 'Sat', '', 0),
(187, '6', 'asdsadas', 'teashasgsdj', -1, -100, '2022-05-28', '17:56:39', '', 100, 'Cash', 'Sat', '', 0),
(188, '1', 'zxczx', 'sfdsfs sfsf', 1, 123, '2022-05-28', '18:22:55', '', 123, 'Cash', 'Sat', '', 0),
(189, '1', 'zxczx', 'sfdsfs sfsf', 1, 123, '2022-05-28', '18:22:55', '', 123, 'Cash', 'Sat', '', 0),
(190, '1', 'zxczx', 'Coke', 1, 434, '2022-05-28', '18:22:55', '', 434, 'Cash', 'Sat', '', 0),
(191, '1', 'zxczx', 'Coke', 1, 434, '2022-05-28', '18:22:55', '', 434, 'Cash', 'Sat', '', 0),
(192, '1', 'zxczx', 'sfdsfs sfsf', 1, 123, '2022-05-28', '18:22:55', '', 123, 'Cash', 'Sat', '', 0),
(193, '1', 'zxczx', 'drinks', 1, 1000, '2022-05-28', '18:22:55', '', 1000, 'Cash', 'Sat', '', 0),
(194, '1', 'zxczx', 'Chowmin', 1, 200, '2022-05-28', '18:22:55', '', 200, 'Cash', 'Sat', '', 0),
(195, '2', 'test12345', 'Chowmin', 1, 200, '2022-06-03', '07:11:46', '', 200, 'Cash', 'Fri', '', 0),
(196, '2', 'test12345', 'Chowmin', 1, 200, '2022-06-03', '07:11:46', '', 200, 'Cash', 'Fri', '', 0),
(197, '2', 'test12345', 'Chowmin', 1, 200, '2022-06-03', '07:11:46', '', 200, 'Cash', 'Fri', '', 0),
(198, '2', 'test12345', 'drinks', 1, 1000, '2022-06-03', '07:11:46', '', 1000, 'Cash', 'Fri', '', 0),
(199, '2', 'test12345', 'drinks', 1, 1000, '2022-06-03', '07:11:46', '', 1000, 'Cash', 'Fri', '', 0),
(200, '2', 'test12345', 'pizza', 1, 209, '2022-06-03', '07:11:46', '', 209, 'Cash', 'Fri', '', 0),
(201, '2', 'test12345', 'pizza', 1, 209, '2022-06-03', '07:11:46', '', 209, 'Cash', 'Fri', '', 0),
(202, '2', 'test12345', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:11:46', '', 123, 'Cash', 'Fri', '', 0),
(203, '2', 'test12345', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:11:46', '', 123, 'Cash', 'Fri', '', 0),
(204, '2', 'test12345', 'pizza', 1, 209, '2022-06-03', '07:11:46', '', 209, 'Cash', 'Fri', '', 0),
(205, '2', 'test12345', 'pizza', 1, 209, '2022-06-03', '07:11:46', '', 209, 'Cash', 'Fri', '', 0),
(206, '2', 'test12345', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:11:46', '', 123, 'Cash', 'Fri', '', 0),
(207, '2', 'test12345', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:11:46', '', 123, 'Cash', 'Fri', '', 0),
(208, '2', 'test12345', 'teashasgsdj', 1, 100, '2022-06-03', '07:11:46', '', 100, 'Cash', 'Fri', '', 0),
(209, '6', 'test6789', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:15:44', '', 123, 'Cash', 'Fri', '', 0),
(210, '6', 'test6789', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:15:44', '', 123, 'Cash', 'Fri', '', 0),
(211, '6', 'test6789', 'gjhg', 1, 123, '2022-06-03', '07:15:44', '', 123, 'Cash', 'Fri', '', 0),
(212, '6', 'test6789', 'gjhg', 1, 123, '2022-06-03', '07:15:44', '', 123, 'Cash', 'Fri', '', 0),
(213, '6', 'test6789', 'teashasgsdj', 1, 100, '2022-06-03', '07:15:44', '', 100, 'Cash', 'Fri', '', 0),
(214, '6', 'test6789', 'teashasgsdj', 1, 100, '2022-06-03', '07:15:44', '', 100, 'Cash', 'Fri', '', 0),
(215, '6', 'test6789', 'teashasgsdj', -1, -100, '2022-06-03', '07:15:44', '', 100, 'Cash', 'Fri', '', 0),
(216, '6', 'test6789', '123', 1, 2, '2022-06-03', '07:15:44', '', 2, 'Cash', 'Fri', '', 0),
(217, '3', 'testing1', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:18:19', '', 123, 'Cash', 'Fri', '', 0),
(218, '3', 'testing1', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:18:19', '', 123, 'Cash', 'Fri', '', 0),
(219, '3', 'testing1', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:18:19', '', 123, 'Cash', 'Fri', '', 0),
(220, '3', 'testing1', 'teashasgsdj', 1, 100, '2022-06-03', '07:18:19', '', 100, 'Cash', 'Fri', '', 0),
(221, '3', 'testing1', 'gjhg', 1, 123, '2022-06-03', '07:18:19', '', 123, 'Cash', 'Fri', '', 0),
(222, '3', 'testing1', 'drinks', 1, 1000, '2022-06-03', '07:18:19', '', 1000, 'Cash', 'Fri', '', 0),
(223, '3', 'testing1', 'drinks', 1, 1000, '2022-06-03', '07:18:19', '', 1000, 'Cash', 'Fri', '', 0),
(224, '3', 'testing1', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:18:19', '', 123, 'Cash', 'Fri', '', 0),
(225, '3', 'testing1', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:18:19', '', 123, 'Cash', 'Fri', '', 0),
(226, '5', '', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:19:37', '', 123, 'Cash', 'Fri', '', 0),
(227, '5', '', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:19:37', '', 123, 'Cash', 'Fri', '', 0),
(228, '5', '', 'teashasgsdj', 1, 100, '2022-06-03', '07:19:37', '', 100, 'Cash', 'Fri', '', 0),
(229, '5', '', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:19:37', '', 123, 'Cash', 'Fri', '', 0),
(230, '5', '', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:19:37', '', 123, 'Cash', 'Fri', '', 0),
(231, '5', '', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:19:37', '', 123, 'Cash', 'Fri', '', 0),
(232, '5', '', 'Coke', 1, 434, '2022-06-03', '07:19:37', '', 434, 'Cash', 'Fri', '', 0),
(233, '5', '', 'drinks', 1, 1000, '2022-06-03', '07:19:37', '', 1000, 'Cash', 'Fri', '', 0),
(234, '5', '', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:19:37', '', 123, 'Cash', 'Fri', '', 0),
(235, '5', '', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:19:37', '', 123, 'Cash', 'Fri', '', 0),
(236, '4', 'asdsa', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:23:12', '', 123, 'Cash', 'Fri', '', 0),
(237, '4', 'asdsa', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:23:12', '', 123, 'Cash', 'Fri', '', 0),
(238, '4', 'asdsa', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:23:12', '', 123, 'Cash', 'Fri', '', 0),
(239, '4', 'asdsa', 'teashasgsdj', 1, 100, '2022-06-03', '07:23:12', '', 100, 'Cash', 'Fri', '', 0),
(240, '4', 'asdsa', 'teashasgsdj', 1, 100, '2022-06-03', '07:23:12', '', 100, 'Cash', 'Fri', '', 0),
(241, '4', 'asdsa', 'Coke', 1, 434, '2022-06-03', '07:23:12', '', 434, 'Cash', 'Fri', '', 0),
(242, '4', 'asdsa', 'sdas', 1, 123, '2022-06-03', '07:23:12', '', 123, 'Cash', 'Fri', '', 0),
(243, '4', 'asdsa', 'sdas', 1, 123, '2022-06-03', '07:23:12', '', 123, 'Cash', 'Fri', '', 0),
(244, '4', 'asdsa', 'sdas', 1, 123, '2022-06-03', '07:23:12', '', 123, 'Cash', 'Fri', '', 0),
(245, '7', 'jksdhfjk', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:25:50', '', 123, 'Cash', 'Fri', '', 0),
(246, '7', 'jksdhfjk', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:25:50', '', 123, 'Cash', 'Fri', '', 0),
(247, '7', 'jksdhfjk', 'sfdsfs sfsf', 1, 123, '2022-06-03', '07:25:50', '', 123, 'Cash', 'Fri', '', 0),
(248, '3', 'test123', 'Chowmin', 1, 200, '2022-06-03', '07:58:38', '', 200, 'Cash', 'Fri', '', 0),
(249, '3', 'test123', 'Chowmin', 1, 200, '2022-06-03', '07:58:38', '', 200, 'Cash', 'Fri', '', 0),
(250, '3', 'test123', 'pizza', 1, 209, '2022-06-03', '07:58:38', '', 209, 'Cash', 'Fri', '', 0),
(251, '3', 'asdsad', 'Chowmin', 1, 200, '2022-06-03', '08:07:15', '', 200, 'Cash', 'Fri', '', 0),
(252, '3', 'asdsad', 'Chowmin', 1, 200, '2022-06-03', '08:07:16', '', 200, 'Cash', 'Fri', '', 0),
(253, '3', 'asdsad', 'pizza', 1, 209, '2022-06-03', '08:07:16', '', 209, 'Cash', 'Fri', '', 0),
(254, '3', 'asdsad', 'pizza', 1, 209, '2022-06-03', '08:07:16', '', 209, 'Cash', 'Fri', '', 0),
(255, '3', 'asdsad', 'drinks', 1, 1000, '2022-06-03', '08:07:16', '', 1000, 'Cash', 'Fri', '', 0),
(256, '4', '', 'pizza', 1, 209, '2022-06-03', '08:10:12', '', 209, 'Cash', 'Fri', '', 0),
(257, '4', '', 'pizza', 1, 209, '2022-06-03', '08:10:12', '', 209, 'Cash', 'Fri', '', 0),
(258, '4', '', 'pizza', 1, 209, '2022-06-03', '08:10:12', '', 209, 'Cash', 'Fri', '', 0),
(259, '5', '', 'Chowmin', 1, 200, '2022-06-03', '14:08:14', '', 200, 'Cash', 'Fri', '', 0),
(260, '5', '', 'Chowmin', 1, 200, '2022-06-03', '14:08:14', '', 200, 'Cash', 'Fri', '', 0),
(261, '5', '', 'Chowmin', 1, 200, '2022-06-03', '14:08:14', '', 200, 'Cash', 'Fri', '', 0),
(262, '5', '', 'pizza', 1, 209, '2022-06-03', '14:08:14', '', 209, 'Cash', 'Fri', '', 0),
(263, '5', '', 'pizza', 1, 209, '2022-06-03', '14:08:14', '', 209, 'Cash', 'Fri', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_details`
--

CREATE TABLE `table_details` (
  `table_number` varchar(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_details`
--

INSERT INTO `table_details` (`table_number`, `status`, `id`) VALUES
('1', 'occupied', 1),
('2', 'occupied', 2),
('3', 'empty', 3),
('4', 'occupied', 4),
('5', 'empty', 5),
('6', 'occupied', 6),
('7', 'occupied', 7);

-- --------------------------------------------------------

--
-- Table structure for table `temp_table`
--

CREATE TABLE `temp_table` (
  `id` int(11) NOT NULL,
  `table_number` varchar(11) NOT NULL,
  `food_item` varchar(11) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `date1` varchar(13) NOT NULL,
  `time1` varchar(15) NOT NULL,
  `total` double NOT NULL,
  `kot_printed` varchar(5) DEFAULT 'no',
  `room_number` varchar(15) NOT NULL,
  `customer_name` varchar(49) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_table`
--

INSERT INTO `temp_table` (`id`, `table_number`, `food_item`, `price`, `quantity`, `date1`, `time1`, `total`, `kot_printed`, `room_number`, `customer_name`) VALUES
(67, '23', 'Chowmin', 200, 2, '2021-09-22', '10:39:15', 400, 'no', '', ''),
(418, '6', 'pizza', 209, 1, '2022-06-03', '08:26:57', 209, 'no', '0', 'check1'),
(419, '6', 'pizza', 209, 1, '2022-06-03', '08:26:57', 209, 'no', '0', 'check1'),
(425, '4', 'Chowmin', 200, 1, '2022-06-03', '14:27:49', 200, 'no', '0', 'Sangam'),
(426, '4', 'drinks', 1000, 1, '2022-06-03', '14:27:49', 1000, 'no', '0', 'Sangam'),
(427, '4', 'pizza', 209, 1, '2022-06-03', '14:27:49', 209, 'no', '0', 'Sangam'),
(428, '1', 'Chowmin', 200, 1, '2022-06-03', '14:54:54', 200, 'no', '0', 'Sangam test1'),
(429, '1', 'Chowmin', 200, 1, '2022-06-03', '14:54:54', 200, 'no', '0', 'Sangam test1'),
(430, '4', 'Chowmin', 200, 1, '2022-06-03', '14:57:00', 200, 'no', '0', 'Sangam test2'),
(431, '4', 'Chowmin', 200, 1, '2022-06-03', '14:57:00', 200, 'no', '0', 'Sangam test2'),
(432, '4', 'pizza', 209, 1, '2022-06-03', '14:57:00', 209, 'no', '0', 'Sangam test2'),
(433, '4', 'Chowmin', 200, 1, '2022-06-03', '15:01:29', 200, 'no', '0', 'Sangam test23'),
(434, '4', 'Chowmin', 200, 1, '2022-06-03', '15:02:18', 200, 'no', '0', ''),
(435, '7', 'Chowmin', 200, 1, '2022-06-03', '15:05:14', 200, 'no', '0', 'ajksdhskaj'),
(436, '7', 'Chowmin', 200, 1, '2022-06-03', '15:05:14', 200, 'no', '0', 'ajksdhskaj'),
(437, '4', 'Chowmin', 200, 1, '2022-06-03', '15:08:34', 200, 'no', '0', 'Sangam test23'),
(438, '4', 'Chowmin', 200, 1, '2022-06-03', '15:09:01', 200, 'no', '0', 'Sangam test23'),
(439, '4', 'Chowmin', 200, 1, '2022-06-03', '15:09:01', 200, 'no', '0', 'Sangam test23'),
(440, '4', 'Chowmin', 200, 1, '2022-06-03', '15:10:32', 200, 'no', '0', 'Sangam test2'),
(441, '4', 'Chowmin', 200, 1, '2022-06-03', '15:14:21', 200, 'no', '0', ''),
(442, '2', 'Chowmin', 200, 1, '2022-06-03', '15:14:32', 200, 'no', '0', 'Sangam test23'),
(443, '6', 'Chowmin', 200, 1, '2022-06-03', '15:14:55', 200, 'no', '0', 'test2'),
(444, '6', 'Chowmin', 200, 1, '2022-06-03', '15:17:50', 200, 'no', '0', 'test2'),
(445, '6', 'pizza', 209, 1, '2022-06-03', '15:26:57', 209, 'no', '0', ''),
(446, '4', 'Chowmin', 200, 1, '2022-06-03', '15:30:05', 200, 'no', '0', 'Sangam test23'),
(447, '4', 'Chowmin', 200, 1, '2022-06-03', '15:32:36', 200, 'no', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `temp_table_print`
--

CREATE TABLE `temp_table_print` (
  `order_name` varchar(60) NOT NULL,
  `quantity` varchar(11) NOT NULL,
  `table_number` varchar(12) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thapa`
--

CREATE TABLE `thapa` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thapa`
--

INSERT INTO `thapa` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'drinks', 1, 1000, '2022/05/27', '14:12:03'),
(2, 'drinks', 1, 1000, '2022/05/27', '14:12:03'),
(3, 'drinks', 1, 1000, '2022/05/27', '14:12:03'),
(4, 'drinks', 1, 124, '2022/05/27', '14:12:03'),
(5, 'drinks', 1, 124, '2022/05/27', '14:12:03'),
(6, 'drinks', 1, 124, '2022/05/27', '14:12:03'),
(7, 'drinks', 1, 1000, '2022/05/27', '14:12:57'),
(8, 'drinks', 1, 1000, '2022/05/27', '14:12:57'),
(9, 'drinks', 1, 1000, '2022/05/27', '14:12:57'),
(10, 'drinks', 1, 124, '2022/05/27', '14:12:57'),
(11, 'drinks', 1, 124, '2022/05/27', '14:12:57'),
(12, 'drinks', 1, 124, '2022/05/27', '14:12:57'),
(13, 'drinks', 1, 1000, '2022/05/27', '14:13:34'),
(14, 'drinks', 1, 1000, '2022/05/27', '14:13:34'),
(15, 'drinks', 1, 1000, '2022/05/27', '14:13:34'),
(16, 'drinks', 1, 124, '2022/05/27', '14:13:34'),
(17, 'drinks', 1, 124, '2022/05/27', '14:13:34'),
(18, 'drinks', 1, 124, '2022/05/27', '14:13:34'),
(19, 'Chowmin', 1, 200, '2022/05/27', '14:28:02'),
(20, 'Chowmin', 1, 200, '2022/05/27', '14:34:40'),
(21, 'Chowmin', 1, 200, '2022/05/27', '14:34:40'),
(22, 'Chowmin', 1, 200, '2022/05/27', '14:38:41'),
(23, 'Chowmin', 1, 200, '2022/05/27', '14:39:11'),
(24, 'Chowmin', 1, 200, '2022/05/27', '14:39:11'),
(25, 'Chowmin', 1, 200, '2022/05/27', '14:39:11'),
(26, 'drinks', 1, 1000, '2022/05/27', '14:39:38'),
(27, 'drinks', 1, 124, '2022/05/27', '14:39:39'),
(28, 'Chowmin', 1, 200, '2022/05/27', '14:40:35'),
(29, 'Chowmin', 1, 200, '2022/05/27', '14:40:35'),
(30, 'Chowmin', 1, 200, '2022/05/27', '14:40:35'),
(31, 'drinks', 1, 1000, '2022/05/27', '14:42:57'),
(32, 'drinks', 1, 124, '2022/05/27', '14:42:57'),
(33, 'Chowmin', 1, 200, '2022/05/27', '14:43:45'),
(34, 'Chowmin', 1, 200, '2022/05/27', '14:43:45'),
(35, 'Chowmin', 1, 200, '2022/05/27', '14:54:06'),
(36, 'Chowmin', 1, 200, '2022/05/27', '14:54:06'),
(37, 'Chowmin', 1, 200, '2022/05/27', '14:54:06'),
(38, 'Chowmin', 1, 200, '2022/05/27', '14:55:11'),
(39, 'Chowmin', 1, 200, '2022/05/27', '14:55:11'),
(40, 'Chowmin', 1, 200, '2022/05/27', '14:55:11'),
(41, 'drinks', 1, 1000, '2022/05/27', '14:57:01'),
(42, 'drinks', 1, 1000, '2022/05/27', '14:57:01'),
(43, 'drinks', 1, 124, '2022/05/27', '14:57:01'),
(44, 'drinks', 1, 124, '2022/05/27', '14:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `thapa1`
--

CREATE TABLE `thapa1` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thapa1`
--

INSERT INTO `thapa1` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/27', '14:57:16'),
(2, 'Chowmin', 1, 200, '2022/05/27', '14:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token_number` varchar(17) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `date1` varchar(13) NOT NULL,
  `time1` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token_number`, `order_name`, `date1`, `time1`) VALUES
(1, '', 'Chowmin', '2021/09/27', '22:21:58'),
(3, '51', 'drinks', '2021/09/27', '22:24:12'),
(9, '81', 'drinks', '2021/09/27', '22:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `update_inventory`
--

CREATE TABLE `update_inventory` (
  `id` int(11) NOT NULL,
  `inventory_name` varchar(40) NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL,
  `user` varchar(40) NOT NULL,
  `initial_quantity` int(11) NOT NULL,
  `final_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `update_inventory`
--

INSERT INTO `update_inventory` (`id`, `inventory_name`, `date1`, `time1`, `user`, `initial_quantity`, `final_quantity`) VALUES
(1, 'Coke', '2021-09-20', '13:15:01', '', 1017, 3),
(2, 'Tuborg', '2021-09-21', '21:50:26', '', 122, 0),
(3, 'Tuborg', '2021-09-21', '21:50:34', '', 122, 4),
(4, 'Tuborg', '2021-09-21', '21:50:44', '', 126, 4);

-- --------------------------------------------------------

--
-- Table structure for table `utilized_inventory`
--

CREATE TABLE `utilized_inventory` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `selling_price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL,
  `profit` float NOT NULL,
  `user` varchar(20) NOT NULL,
  `barcode` int(11) NOT NULL,
  `cost_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilized_inventory`
--

INSERT INTO `utilized_inventory` (`id`, `name`, `quantity`, `selling_price`, `date1`, `time1`, `profit`, `user`, `barcode`, `cost_price`) VALUES
(1, 'sd', '2', 33, '2021-08-18', '12:10:00', 10, 'dsf', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ajsd`
--
ALTER TABLE `ajsd`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ajsda`
--
ALTER TABLE `ajsda`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ajsdaa`
--
ALTER TABLE `ajsdaa`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ajsdaaa`
--
ALTER TABLE `ajsdaaa`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ajsdad`
--
ALTER TABLE `ajsdad`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `asdas`
--
ALTER TABLE `asdas`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `asdasa`
--
ALTER TABLE `asdasa`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `asdasaa`
--
ALTER TABLE `asdasaa`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `asdasd`
--
ALTER TABLE `asdasd`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `asdasdsa`
--
ALTER TABLE `asdasdsa`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `asdass`
--
ALTER TABLE `asdass`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `asdksan`
--
ALTER TABLE `asdksan`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `asdksana`
--
ALTER TABLE `asdksana`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `asdksand`
--
ALTER TABLE `asdksand`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `asdsa`
--
ALTER TABLE `asdsa`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `asdsaa`
--
ALTER TABLE `asdsaa`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `asdsaaa`
--
ALTER TABLE `asdsaaa`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `asdsaaaa`
--
ALTER TABLE `asdsaaaa`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `asdsaaaaa`
--
ALTER TABLE `asdsaaaaa`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`room_number`,`check_in_date`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `cancelled_orders`
--
ALTER TABLE `cancelled_orders`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `delete_inventory`
--
ALTER TABLE `delete_inventory`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `dfgfdg`
--
ALTER TABLE `dfgfdg`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `dfgfdgs`
--
ALTER TABLE `dfgfdgs`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `dfgfdgss`
--
ALTER TABLE `dfgfdgss`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `dfgfdgsss`
--
ALTER TABLE `dfgfdgsss`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `hgjhgh`
--
ALTER TABLE `hgjhgh`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`barcode`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `jdfghdf`
--
ALTER TABLE `jdfghdf`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `khksas`
--
ALTER TABLE `khksas`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `khksasd`
--
ALTER TABLE `khksasd`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `khksjhd`
--
ALTER TABLE `khksjhd`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `khksjhda`
--
ALTER TABLE `khksjhda`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ksjdfk`
--
ALTER TABLE `ksjdfk`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `item_name` (`item_name`),
  ADD UNIQUE KEY `menu_photo` (`menu_photo`) USING HASH;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_mode`
--
ALTER TABLE `payment_mode`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `print_table`
--
ALTER TABLE `print_table`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `roomnumber`
--
ALTER TABLE `roomnumber`
  ADD PRIMARY KEY (`roomnumber`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `room_name` (`room_name`),
  ADD UNIQUE KEY `room_photo` (`room_photo`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`roomtype`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sangam`
--
ALTER TABLE `sangam`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sangam_test`
--
ALTER TABLE `sangam_test`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `schedule_booking`
--
ALTER TABLE `schedule_booking`
  ADD PRIMARY KEY (`room_number`,`estimated_check_in`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `booking_on_email` (`booking_on_email`);

--
-- Indexes for table `sfsd`
--
ALTER TABLE `sfsd`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sfsdd`
--
ALTER TABLE `sfsdd`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sfsdds`
--
ALTER TABLE `sfsdds`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sfsddss`
--
ALTER TABLE `sfsddss`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sold_items`
--
ALTER TABLE `sold_items`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `table_details`
--
ALTER TABLE `table_details`
  ADD PRIMARY KEY (`table_number`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `temp_table`
--
ALTER TABLE `temp_table`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `thapa`
--
ALTER TABLE `thapa`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `thapa1`
--
ALTER TABLE `thapa1`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`token_number`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `update_inventory`
--
ALTER TABLE `update_inventory`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `utilized_inventory`
--
ALTER TABLE `utilized_inventory`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ajsd`
--
ALTER TABLE `ajsd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ajsda`
--
ALTER TABLE `ajsda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ajsdaa`
--
ALTER TABLE `ajsdaa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ajsdaaa`
--
ALTER TABLE `ajsdaaa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ajsdad`
--
ALTER TABLE `ajsdad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asdas`
--
ALTER TABLE `asdas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `asdasa`
--
ALTER TABLE `asdasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `asdasaa`
--
ALTER TABLE `asdasaa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `asdasd`
--
ALTER TABLE `asdasd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `asdasdsa`
--
ALTER TABLE `asdasdsa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `asdass`
--
ALTER TABLE `asdass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `asdksan`
--
ALTER TABLE `asdksan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asdksana`
--
ALTER TABLE `asdksana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asdksand`
--
ALTER TABLE `asdksand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asdsa`
--
ALTER TABLE `asdsa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `asdsaa`
--
ALTER TABLE `asdsaa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `asdsaaa`
--
ALTER TABLE `asdsaaa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `asdsaaaa`
--
ALTER TABLE `asdsaaaa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `asdsaaaaa`
--
ALTER TABLE `asdsaaaaa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cancelled_orders`
--
ALTER TABLE `cancelled_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `delete_inventory`
--
ALTER TABLE `delete_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dfgfdg`
--
ALTER TABLE `dfgfdg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dfgfdgs`
--
ALTER TABLE `dfgfdgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dfgfdgss`
--
ALTER TABLE `dfgfdgss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dfgfdgsss`
--
ALTER TABLE `dfgfdgsss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hgjhgh`
--
ALTER TABLE `hgjhgh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jdfghdf`
--
ALTER TABLE `jdfghdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `khksas`
--
ALTER TABLE `khksas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khksasd`
--
ALTER TABLE `khksasd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khksjhd`
--
ALTER TABLE `khksjhd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khksjhda`
--
ALTER TABLE `khksjhda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ksjdfk`
--
ALTER TABLE `ksjdfk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_mode`
--
ALTER TABLE `payment_mode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `print_table`
--
ALTER TABLE `print_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sangam`
--
ALTER TABLE `sangam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sangam_test`
--
ALTER TABLE `sangam_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule_booking`
--
ALTER TABLE `schedule_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sfsd`
--
ALTER TABLE `sfsd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sfsdd`
--
ALTER TABLE `sfsdd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sfsdds`
--
ALTER TABLE `sfsdds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sfsddss`
--
ALTER TABLE `sfsddss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sold_items`
--
ALTER TABLE `sold_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `table_details`
--
ALTER TABLE `table_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `temp_table`
--
ALTER TABLE `temp_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=448;

--
-- AUTO_INCREMENT for table `thapa`
--
ALTER TABLE `thapa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `thapa1`
--
ALTER TABLE `thapa1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `update_inventory`
--
ALTER TABLE `update_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `utilized_inventory`
--
ALTER TABLE `utilized_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
