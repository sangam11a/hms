-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2022 at 08:50 AM
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
-- Database: `thapasan_temp_hotel_eternity`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajksdhskaj`
--

CREATE TABLE `ajksdhskaj` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajksdhskaj`
--

INSERT INTO `ajksdhskaj` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/06/03', '15:05:14'),
(2, 'Chowmin', 1, 200, '2022/06/03', '15:05:14');

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
-- Table structure for table `check1`
--

CREATE TABLE `check1` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check1`
--

INSERT INTO `check1` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'pizza', 1, 209, '2022/06/03', '08:26:57'),
(2, 'pizza', 1, 209, '2022/06/03', '08:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `check12`
--

CREATE TABLE `check12` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check12`
--

INSERT INTO `check12` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/06/03', '08:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `check123`
--

CREATE TABLE `check123` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check123`
--

INSERT INTO `check123` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/06/03', '08:30:18'),
(2, 'Chowmin', 1, 200, '2022/06/03', '08:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `check1234`
--

CREATE TABLE `check1234` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check1234`
--

INSERT INTO `check1234` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'pizza', 1, 209, '2022/06/03', '08:38:23'),
(2, 'pizza', 1, 209, '2022/06/03', '08:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `check_check`
--

CREATE TABLE `check_check` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_check`
--

INSERT INTO `check_check` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/06/03', '08:20:01'),
(2, 'Chowmin', 1, 200, '2022/06/03', '08:20:01'),
(3, 'pizza', 1, 209, '2022/06/03', '08:20:01'),
(4, 'pizza', 1, 209, '2022/06/03', '08:20:01'),
(5, 'drinks', 1, 1000, '2022/06/03', '08:20:01'),
(6, 'drinks', 1, 124, '2022/06/03', '08:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `check_check1`
--

CREATE TABLE `check_check1` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_check1`
--

INSERT INTO `check_check1` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'pizza', 1, 209, '2022/06/03', '08:21:40'),
(2, 'pizza', 1, 209, '2022/06/03', '08:21:40'),
(3, 'pizza', 1, 209, '2022/06/03', '08:21:40');

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
-- Table structure for table `fdgfdg`
--

CREATE TABLE `fdgfdg` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fdgfdg`
--

INSERT INTO `fdgfdg` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/06/03', '08:10:45'),
(2, 'Chowmin', 1, 200, '2022/06/03', '08:10:45'),
(3, 'pizza', 1, 209, '2022/06/03', '08:10:45');

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
-- Table structure for table `Sangam`
--

CREATE TABLE `Sangam` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sangam`
--

INSERT INTO `Sangam` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/06/03', '14:27:49'),
(2, 'drinks', 1, 1000, '2022/06/03', '14:27:49'),
(3, 'pizza', 1, 209, '2022/06/03', '14:27:49'),
(4, 'drinks', 1, 124, '2022/06/03', '14:27:49');

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
-- Table structure for table `Sangam_test1`
--

CREATE TABLE `Sangam_test1` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sangam_test1`
--

INSERT INTO `Sangam_test1` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/06/03', '14:54:54'),
(2, 'Chowmin', 1, 200, '2022/06/03', '14:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `Sangam_test2`
--

CREATE TABLE `Sangam_test2` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sangam_test2`
--

INSERT INTO `Sangam_test2` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/06/03', '14:57:00'),
(2, 'Chowmin', 1, 200, '2022/06/03', '14:57:00'),
(3, 'pizza', 1, 209, '2022/06/03', '14:57:00'),
(4, 'Chowmin', 1, 200, '2022/06/03', '15:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `Sangam_test23`
--

CREATE TABLE `Sangam_test23` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sangam_test23`
--

INSERT INTO `Sangam_test23` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/06/03', '15:01:29'),
(2, 'Chowmin', 1, 200, '2022/06/03', '15:08:34'),
(3, 'Chowmin', 1, 200, '2022/06/03', '15:09:01'),
(4, 'Chowmin', 1, 200, '2022/06/03', '15:09:01'),
(5, 'Chowmin', 1, 200, '2022/06/03', '15:14:32'),
(6, 'Chowmin', 1, 200, '2022/06/03', '15:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `sangam_ttt`
--

CREATE TABLE `sangam_ttt` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sangam_ttt`
--

INSERT INTO `sangam_ttt` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/06/13', '21:25:34'),
(2, 'Chowmin', 1, 200, '2022/06/13', '21:25:34');

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
-- Table structure for table `test2`
--

CREATE TABLE `test2` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test2`
--

INSERT INTO `test2` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/06/03', '15:14:55'),
(2, 'Chowmin', 1, 200, '2022/06/03', '15:17:50');

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
-- Table structure for table `zxcxz`
--

CREATE TABLE `zxcxz` (
  `id` int(11) NOT NULL,
  `order_name` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date1` varchar(12) NOT NULL,
  `time1` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zxcxz`
--

INSERT INTO `zxcxz` (`id`, `order_name`, `quantity`, `price`, `date1`, `time1`) VALUES
(1, 'Chowmin', 1, 200, '2022/05/28', '17:04:19'),
(2, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '17:04:19'),
(3, 'teashasgsdjha jhagdjhasgdj gajhsdg', 1, 100, '2022/05/28', '17:04:19'),
(4, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '17:04:20'),
(5, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', 1, 123, '2022/05/28', '17:04:20'),
(6, 'sfdsfs sfsfdsfsf fsfdsdfsfds sdffs', -1, -123, '2022/05/28', '17:04:20'),
(7, 'gjhg', 1, 123, '2022/05/28', '17:04:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajksdhskaj`
--
ALTER TABLE `ajksdhskaj`
  ADD UNIQUE KEY `id` (`id`);

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
-- Indexes for table `check1`
--
ALTER TABLE `check1`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `check12`
--
ALTER TABLE `check12`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `check123`
--
ALTER TABLE `check123`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `check1234`
--
ALTER TABLE `check1234`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `check_check`
--
ALTER TABLE `check_check`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `check_check1`
--
ALTER TABLE `check_check1`
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
-- Indexes for table `fdgfdg`
--
ALTER TABLE `fdgfdg`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `hgjhgh`
--
ALTER TABLE `hgjhgh`
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
-- Indexes for table `Sangam`
--
ALTER TABLE `Sangam`
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
-- Indexes for table `Sangam_test1`
--
ALTER TABLE `Sangam_test1`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `Sangam_test2`
--
ALTER TABLE `Sangam_test2`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `Sangam_test23`
--
ALTER TABLE `Sangam_test23`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sangam_ttt`
--
ALTER TABLE `sangam_ttt`
  ADD UNIQUE KEY `id` (`id`);

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
-- Indexes for table `test2`
--
ALTER TABLE `test2`
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
-- Indexes for table `zxcxz`
--
ALTER TABLE `zxcxz`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajksdhskaj`
--
ALTER TABLE `ajksdhskaj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `check1`
--
ALTER TABLE `check1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `check12`
--
ALTER TABLE `check12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `check123`
--
ALTER TABLE `check123`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `check1234`
--
ALTER TABLE `check1234`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `check_check`
--
ALTER TABLE `check_check`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `check_check1`
--
ALTER TABLE `check_check1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `fdgfdg`
--
ALTER TABLE `fdgfdg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hgjhgh`
--
ALTER TABLE `hgjhgh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `Sangam`
--
ALTER TABLE `Sangam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `Sangam_test1`
--
ALTER TABLE `Sangam_test1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Sangam_test2`
--
ALTER TABLE `Sangam_test2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Sangam_test23`
--
ALTER TABLE `Sangam_test23`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sangam_ttt`
--
ALTER TABLE `sangam_ttt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `test2`
--
ALTER TABLE `test2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `zxcxz`
--
ALTER TABLE `zxcxz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
