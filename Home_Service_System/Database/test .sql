-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 06:49 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `admin_updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_creationDate`, `admin_updationDate`) VALUES
(1, 'admin', '2017-01-24 16:21:18', '02-12-2021 08:50:43 PM');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `booking_user_id` int(11) DEFAULT NULL,
  `booking_freelancer_id` varchar(255) DEFAULT NULL,
  `booking_category_id` int(11) NOT NULL,
  `booking_subcategory_id` int(11) NOT NULL,
  `booking_service_date` varchar(200) DEFAULT NULL,
  `booking_service_time` varchar(200) NOT NULL,
  `booking_remark` varchar(300) NOT NULL,
  `booking_orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `booking_bookstatus` int(11) NOT NULL,
  `booking_service_rating` int(11) NOT NULL,
  `booking_price_rating` int(11) NOT NULL,
  `booking_values_rating` int(11) NOT NULL,
  `booking_review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_user_id`, `booking_freelancer_id`, `booking_category_id`, `booking_subcategory_id`, `booking_service_date`, `booking_service_time`, `booking_remark`, `booking_orderDate`, `booking_bookstatus`, `booking_service_rating`, `booking_price_rating`, `booking_values_rating`, `booking_review`) VALUES
(46, 12, '11', 1, 3, '12/31/2021', '1:00 AM', 'sdfghj', '2021-12-19 21:56:51', 0, 0, 0, 0, ''),
(47, 12, '11', 1, 3, '12/30/2021', '1:15 AM', 'sdfgh', '2021-12-19 22:07:14', 0, 0, 0, 0, ''),
(48, 12, '11', 1, 3, '12/30/2021', '6:30 AM', 'sdfghj', '2021-12-20 03:25:41', 0, 0, 0, 0, ''),
(49, 12, '12', 1, 3, '01/03/2022', '6:45 AM', 'sdfghj', '2021-12-20 03:33:16', 2, 0, 0, 0, ''),
(50, 13, '12', 1, 3, '01/04/2022', '7:00 AM', 'dfghj', '2021-12-20 03:51:28', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_categoryName` varchar(255) DEFAULT NULL,
  `category_creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_categoryName`, `category_creationDate`, `category_updationDate`) VALUES
(1, 'Plumber', '2020-01-13 10:04:40', '02-12-2021 08:59:07 PM'),
(2, 'Electrician', '2020-01-13 10:06:42', NULL),
(3, 'Home Cleanings', '2020-02-14 06:13:08', '14-02-2020 11:52:59 AM'),
(4, 'Parlour', '2021-11-26 08:56:43', NULL),
(5, 'Cleaning', '2021-12-19 14:48:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contacts_id` int(11) NOT NULL,
  `contacts_name` varchar(200) NOT NULL,
  `contacts_email` varchar(200) NOT NULL,
  `contacts_mobile` varchar(200) NOT NULL,
  `contacts_message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `freelancer`
--

CREATE TABLE `freelancer` (
  `freelancer_id` int(11) NOT NULL,
  `freelancer_category_id` int(11) NOT NULL,
  `freelancer_subcategory_id` int(11) NOT NULL,
  `freelancer_firstname` varchar(255) NOT NULL,
  `freelancer_lastname` varchar(255) NOT NULL,
  `freelancer_email` varchar(255) NOT NULL,
  `freelancer_mobile` varchar(200) NOT NULL,
  `freelancer_address` varchar(200) NOT NULL,
  `freelancer_experience` varchar(200) NOT NULL,
  `freelancer_rate` varchar(255) NOT NULL,
  `freelancer_location` varchar(255) NOT NULL,
  `freelancer_image` varchar(255) NOT NULL,
  `freelancer_status` int(1) NOT NULL,
  `freelancer_regdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancer`
--

INSERT INTO `freelancer` (`freelancer_id`, `freelancer_category_id`, `freelancer_subcategory_id`, `freelancer_firstname`, `freelancer_lastname`, `freelancer_email`, `freelancer_mobile`, `freelancer_address`, `freelancer_experience`, `freelancer_rate`, `freelancer_location`, `freelancer_image`, `freelancer_status`, `freelancer_regdate`) VALUES
(11, 1, 3, 'You', 'youou', 'you@gmail.com', '5678', 'limuru', '6', '600', 'limuru', 'logo.png', 1, '2021-12-19 21:56:19'),
(12, 1, 3, 'me', 'mee', 'me@gmail.com', '543', 'limuru', '6', '600', 'limuru', 'logo.png', 1, '2021-12-20 03:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `login_username` varchar(70) NOT NULL,
  `login_password` varchar(100) NOT NULL,
  `login_user_id` int(11) DEFAULT NULL,
  `login_admin_id` int(11) DEFAULT NULL,
  `login_freelancer_id` int(11) DEFAULT NULL,
  `login_rank` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_username`, `login_password`, `login_user_id`, `login_admin_id`, `login_freelancer_id`, `login_rank`) VALUES
(4, 'you@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 12, NULL, NULL, 'user'),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 1, NULL, 'admin'),
(6, 'me@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, 12, 'freelancer'),
(7, 'today@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 13, NULL, NULL, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_category_id` int(11) DEFAULT NULL,
  `subcategory_name` varchar(255) DEFAULT NULL,
  `subcategory_creationDate` timestamp NULL DEFAULT current_timestamp(),
  `subcategory_updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `subcategory_category_id`, `subcategory_name`, `subcategory_creationDate`, `subcategory_updationDate`) VALUES
(2, 2, 'A.C/Refrigerator/Washing Machine', '2020-01-16 07:11:45', '17-01-2020 04:02:44 PM'),
(3, 1, 'Basin & Sink,Bath-Fitting', '2020-01-16 07:12:26', NULL),
(4, 2, 'Geyser, Water-Purifier, TV', '2020-01-16 07:14:32', '14-02-2020 12:19:41 PM'),
(5, 1, 'Minor Re-paring, Blockages', '2020-01-16 07:15:29', '17-01-2020 04:03:37 PM'),
(6, 4, 'Full Body Waxing', '2021-11-26 08:57:03', NULL),
(8, 5, 'house cleaning', '2021-12-19 14:49:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(200) NOT NULL,
  `user_lastname` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_mobile` varchar(200) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `user_creationdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_mobile`, `user_address`, `user_creationdate`) VALUES
(12, 'You', 'youu', 'you@gmail.com', '5678', 'limuru', '2021-12-19 21:54:09'),
(13, 'today', 'todayy', 'today@gmail.com', '4343', 'limuru', '2021-12-20 03:50:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contacts_id`);

--
-- Indexes for table `freelancer`
--
ALTER TABLE `freelancer`
  ADD PRIMARY KEY (`freelancer_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `login_user_id` (`login_user_id`),
  ADD KEY `login_admin_id` (`login_admin_id`),
  ADD KEY `login_freelancer_id` (`login_freelancer_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contacts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `freelancer`
--
ALTER TABLE `freelancer`
  MODIFY `freelancer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`login_user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `login_ibfk_2` FOREIGN KEY (`login_admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `login_ibfk_3` FOREIGN KEY (`login_freelancer_id`) REFERENCES `freelancer` (`freelancer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
