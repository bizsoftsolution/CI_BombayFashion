-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2017 at 01:29 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bombay_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category`) VALUES
(9, 'bsaxsx'),
(10, 'c'),
(11, 'ccxxzc'),
(12, 'zfwdsfr'),
(13, 'sadsd'),
(14, 'xsax');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE `tbl_color` (
  `id` int(11) NOT NULL,
  `color` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_color`
--

INSERT INTO `tbl_color` (`id`, `color`) VALUES
(1, 'black'),
(2, 'red');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_public_holiday`
--

CREATE TABLE `tbl_public_holiday` (
  `id` int(11) NOT NULL,
  `holiday_date` date NOT NULL,
  `event_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_public_holiday`
--

INSERT INTO `tbl_public_holiday` (`id`, `holiday_date`, `event_name`) VALUES
(2, '0000-00-00', 'dfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_details`
--

CREATE TABLE `tbl_room_details` (
  `id` int(11) NOT NULL,
  `room_type` varchar(150) NOT NULL,
  `room_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_room_details`
--

INSERT INTO `tbl_room_details` (`id`, `room_type`, `room_no`) VALUES
(2, 'Golden Arowana', 101),
(3, 'Blue Arowana I, II & III', 201),
(4, 'Blue Arowana I, II & III', 202),
(5, 'Blue Arowana I, II & III', 203),
(6, 'Harmony Rooms', 301),
(7, 'Harmony Rooms', 302),
(8, 'Harmony Rooms', 303),
(9, 'Harmony Rooms', 304),
(10, 'Harmony Rooms', 305),
(11, 'Harmony Rooms', 306),
(12, 'Harmony Rooms', 307),
(13, 'Harmony Rooms', 308),
(14, 'Harmony Rooms', 309),
(15, 'Harmony Rooms', 310),
(16, 'Harmony Rooms', 311),
(17, 'Harmony Rooms', 312),
(18, 'Harmony Rooms', 313),
(19, 'Harmony Rooms', 314),
(20, 'Harmony Rooms', 315),
(21, 'Harmony Rooms', 316),
(22, 'Harmony Rooms', 317),
(23, 'Harmony Rooms', 318),
(24, 'Harmony Rooms', 319),
(25, 'Harmony Rooms', 320),
(26, 'Harmony Rooms', 321),
(27, 'Harmony Rooms', 322),
(28, 'Harmony Rooms', 323),
(29, 'Harmony Rooms', 324),
(30, 'Harmony Rooms', 325),
(33, 'Harmony Rooms', 326),
(34, 'Harmony Rooms', 327),
(35, 'Harmony Rooms', 328),
(36, 'Harmony Rooms', 329),
(37, 'Harmony Rooms', 330),
(38, 'Harmony Rooms', 331),
(39, 'Harmony Rooms', 332),
(40, 'Harmony Rooms', 333),
(41, 'Harmony Rooms', 334),
(42, 'Harmony Rooms', 335),
(43, 'Harmony Rooms', 336),
(44, 'Harmony Rooms', 337),
(45, 'Harmony Rooms', 338),
(46, 'Harmony Rooms', 339),
(47, 'Harmony Rooms', 340),
(48, 'Harmony Rooms', 341),
(49, 'Harmony Rooms', 342),
(50, 'Harmony Rooms', 343),
(51, 'Harmony Rooms', 344),
(52, 'Harmony Rooms', 345),
(53, 'Harmony Rooms', 346),
(54, 'Harmony Rooms', 347),
(55, 'Harmony Rooms', 348),
(56, 'Harmony Rooms', 349),
(57, 'Solidarity Dorms', 401),
(58, 'Solidarity Dorms', 501),
(59, 'Solidarity Dorms', 502),
(60, 'Solidarity Dorms', 503),
(61, 'Solidarity Dorms', 504),
(62, 'Solidarity Dorms', 601),
(63, 'Solidarity Dorms', 602),
(64, 'Solidarity Dorms', 603),
(65, 'Solidarity Dorms', 604),
(66, 'Solidarity Dorms', 605);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_tariff`
--

CREATE TABLE `tbl_room_tariff` (
  `id` int(11) NOT NULL,
  `room_type` varchar(150) NOT NULL,
  `nube_weekdays` double(18,2) NOT NULL,
  `nube_weekend` double(18,2) NOT NULL,
  `public_weekdays` double(18,2) NOT NULL,
  `public_weekend` double(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_room_tariff`
--

INSERT INTO `tbl_room_tariff` (`id`, `room_type`, `nube_weekdays`, `nube_weekend`, `public_weekdays`, `public_weekend`) VALUES
(5, 'Golden Arowana', 140.00, 180.00, 220.00, 260.00),
(6, 'Blue Arowana I, II & III', 90.00, 120.00, 160.00, 190.00),
(7, 'Harmony Rooms', 40.00, 60.00, 80.00, 100.00),
(8, 'Solidarity Dorms', 9.00, 12.00, 15.00, 19.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE `tbl_size` (
  `id` int(11) NOT NULL,
  `size` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_size`
--

INSERT INTO `tbl_size` (`id`, `size`) VALUES
(1, 'xl'),
(2, 'xxl');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category`
--

CREATE TABLE `tbl_sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sub_category`
--

INSERT INTO `tbl_sub_category` (`id`, `category_id`, `sub_category`) VALUES
(9, 11, 'sdsdsd'),
(12, 11, 'saxsax'),
(13, 9, 'ghjhgjgh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_color`
--
ALTER TABLE `tbl_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_public_holiday`
--
ALTER TABLE `tbl_public_holiday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_room_details`
--
ALTER TABLE `tbl_room_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_room_tariff`
--
ALTER TABLE `tbl_room_tariff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_public_holiday`
--
ALTER TABLE `tbl_public_holiday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_room_details`
--
ALTER TABLE `tbl_room_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `tbl_room_tariff`
--
ALTER TABLE `tbl_room_tariff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
