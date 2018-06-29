-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2017 at 01:30 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bombay_v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `session_table`
--

CREATE TABLE `session_table` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session_table`
--

INSERT INTO `session_table` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('1537591ae3f46db5488733ea5d92f144fa0da5b1', '::1', 1504783387, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343738333337343b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('1c95ad6d25e2ea099934c3556437e6478cb7a9d1', '::1', 1504774269, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343737343231343b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('1e8dcbc79fe2d16129800f41fbdf5eb7c06eec92', '::1', 1504780687, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343738303536343b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('2a623c3074f180813c1d25159448e085e2429e54', '::1', 1504765088, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343736353038383b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('2ded0362f6963269a13215ce398358eb69634a70', '::1', 1504767651, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343736373335313b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('47c0b0b9a1099bd216ae28cf4ac2946c7f1778a9', '::1', 1504778634, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343737383433393b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('4b5fb3002a236ebd2f232bde9462e958f426099f', '::1', 1504783305, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343738333031303b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('4ebffff46d41a4fad10a8f8a3bc75afc96fc0776', '::1', 1504767705, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343736373636333b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('7f3b7eba58cb4bc60dc775fff3e362c365979bea', '::1', 1504766854, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343736363833343b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('953dbe2c739cf244412d257a43a1137f5e15ebb2', '::1', 1504781494, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343738313237323b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('99466dfecea7b67e1fb9e7897285a46afa38abe3', '::1', 1504782204, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343738323230323b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('9af3ea40e6a5bd89feb60b5e6ad0501c07d2db1a', '::1', 1504765594, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343736353538363b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('aa4e42d29cd95d44bea53376045f96610be83581', '::1', 1504764566, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343736343433303b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('b73d99b2879c5408ab73737082d0c5a6f306e194', '::1', 1504777250, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343737373139383b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('bfeb48fdf142eb4a260d5529a3f7057ce0d3a30a', '::1', 1504773765, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343737333533343b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('c1f3738661add7cfca9bf6667a012f8519f4e96d', '::1', 1504777801, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343737373633393b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b6e6f74696669636174696f6e7c613a323a7b733a373a226d657373616765223b733a32353a22446174612064656c65746564207375636365737366756c6c79223b733a353a22636c617373223b733a32363a22616c65727420616c6572742d64616e676572206661646520696e223b7d5f5f63695f766172737c613a313a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b7d),
('c98d6fc6d3aeae41ee2ea8cce9b9076fd50d53b3', '::1', 1504766430, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343736363239383b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('e737cb2549b87362b6774483bc436f74c9d6a45a', '::1', 1504781939, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343738313733373b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b),
('fb893d8ec30684099e07cf45e96465fff751fc3b', '::1', 1504776325, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530343737363038313b757365725f69647c733a313a2239223b757365725f747970657c733a323a224753223b66697273745f6e616d657c733a383a2247656e6572616c20223b6c6173745f6e616d657c733a303a22223b6d6964646c655f6e616d657c733a303a22223b656d61696c7c733a31323a22677340676d61696c2e636f6d223b70617373776f72647c733a353a223132333435223b6c6f676765645f696e7c733a343a2254525545223b);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE `tbl_color` (
  `id` int(11) NOT NULL,
  `color` varchar(250) NOT NULL,
  `color_code` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(11) NOT NULL,
  `ename` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `designation` varchar(255) NOT NULL,
  `scope` varchar(50) NOT NULL,
  `street1` varchar(255) DEFAULT NULL,
  `street2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone_number` varchar(25) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `branch_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `ename`, `dob`, `designation`, `scope`, `street1`, `street2`, `city`, `state`, `country`, `phone_number`, `email`, `password`, `photo`, `branch_no`) VALUES
(1, 'General Secretory        ', '2017-02-02', 'GS        ', '', 'street', 'aa', 'aa', 'aa', 'aa', '123', 'gs@nube.org', '', '1483948837036.jpg', 0),
(7, 'AGS', '1980-01-01', 'AGS', '', 's1', 's2', 'cc', 'ss', 'cc', '9787596516', 'ags@gmail.com', '', NULL, 9),
(9, 'ani', '1980-01-01', 'Manger', '', 'aa', 'aa', 'aa', 'aa', 'aaa', '123456789', 'admin@gmail.com', '', NULL, 1),
(12, 'Anitha', '1980-01-30', 'Officer', 'qq', 'qq', 'qq', 'qq', 'qq', 'qq', '12345678', 'ani@gmail.com', '12345', NULL, 1),
(13, 'ruth', '1980-01-15', 'Officer', 'ww', 'ww', 'ww', 'ww', 'ww', 'ww', '321456987', 'ruth@gmail.com', '12345', NULL, 8),
(14, 'General ', '1980-01-16', 'GS', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', '1233', 'gs@gmail.com', '12345', NULL, 1),
(15, 'Front Desk', '1980-01-17', 'FrontDesk', 'll', 'll', 'l', 'l', 'l', 'l', '123', 'fd1@gmail.com', '12345', NULL, 1),
(16, 'Front Desk', '1980-01-01', '', '', '', '', '', '', '', '', '', '', NULL, 0),
(17, 'Front Desk', '1980-01-08', 'FrontDesk', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', '123', 'fr2@gmail.com', '12345', NULL, 8),
(18, 'manager', '1980-01-01', '', '', '', '', '', '', '', '', '', '', NULL, 0),
(19, 'manager', '1980-01-16', 'Manger', 'ss', 'aa', 'aa', 'aa', 'aa', 'aa', '123', 'mg@gmail.com', '12345', NULL, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE `tbl_size` (
  `id` int(11) NOT NULL,
  `size` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category`
--

CREATE TABLE `tbl_sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `logged_in` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `emp_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `user_type`, `email`, `logged_in`, `last_login`, `first_name`, `middle_name`, `last_name`, `emp_no`) VALUES
(2, '123', 'FrontDesk', 'frontdesk@gmail.com', 'FALSE', '2017-03-14 03:33:11', 'Anitha', '', '', 5),
(7, '12345', 'Officer', 'ani@gmail.com', 'TRUE', '2017-03-14 07:08:08', 'Anitha', '', '', 12),
(8, '12345', 'Officer', 'ruth@gmail.com', 'FALSE', '2017-03-14 04:55:17', 'ruth', '', '', 13),
(9, '12345', 'GS', 'gs@gmail.com', 'TRUE', '2017-09-07 08:09:16', 'General ', '', '', 14),
(10, '12345', 'FrontDesk', 'fd1@gmail.com', 'FALSE', '2017-03-14 07:07:08', 'Front Desk', '', '', 15),
(11, '', '', '', '', '0000-00-00 00:00:00', 'Front Desk', '', '', 16),
(12, '12345', 'FrontDesk', 'fd2@gmail.com', 'FALSE', '2017-03-14 05:15:23', 'Front Desk', '', '', 17),
(13, '', '', '', '', '0000-00-00 00:00:00', 'manager', '', '', 18),
(14, '12345', 'Manger', 'mg@gmail.com', '', '0000-00-00 00:00:00', 'manager', '', '', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `session_table`
--
ALTER TABLE `session_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

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
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;