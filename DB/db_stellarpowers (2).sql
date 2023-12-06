-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 09:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_stellarpowers`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Steller', 'stellar@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_date` int(10) NOT NULL,
  `booking_status` varchar(100) NOT NULL DEFAULT '0',
  `payment_status` varchar(100) NOT NULL DEFAULT '0',
  `booking_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `user_id`, `booking_date`, `booking_status`, `payment_status`, `booking_amount`) VALUES
(32, 2, 20230929, '1', '1', 12300),
(34, 2, 20230930, '1', '1', 10000),
(35, 2, 20231005, '1', '1', 10000),
(36, 2, 20231005, '1', '1', 15000),
(37, 2, 20231005, '1', '1', 148456),
(38, 2, 20231006, '1', '0', 158456);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cart_qty` int(50) NOT NULL DEFAULT 1,
  `cart_status` varchar(300) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `booking_id`, `product_id`, `cart_qty`, `cart_status`) VALUES
(44, 30, 9, 1, '6'),
(47, 33, 8, 1, '2'),
(48, 34, 8, 1, '6'),
(49, 35, 11, 1, '1'),
(50, 35, 12, 1, '6'),
(51, 36, 13, 1, '6'),
(52, 37, 17, 1, '6'),
(53, 38, 12, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_title` varchar(200) NOT NULL,
  `complaint_content` varchar(500) NOT NULL,
  `complaint_date` int(20) NOT NULL,
  `complaint_status` int(11) NOT NULL DEFAULT 0,
  `complaint_replay` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complaint_title`, `complaint_content`, `complaint_date`, `complaint_status`, `complaint_replay`, `user_id`, `product_id`) VALUES
(10, 'not working', 'sdfjhgfdfghgvb', 20230930, 0, '', 2, 8),
(11, 'Beep Sound', 'Beeping COntinously\r\n', 20230930, 0, '', 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(1, 'Ernakulam'),
(2, 'Kottayam'),
(3, 'Idukki'),
(4, 'kollam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_content` varchar(300) NOT NULL,
  `feedback_date` int(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `district_id`) VALUES
(1, 'piravom', 1),
(2, 'thodupuzha', 3),
(3, 'peruva', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_image` varchar(300) NOT NULL,
  `producttype_id` int(11) NOT NULL,
  `product_rate` int(25) NOT NULL,
  `product_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_image`, `producttype_id`, `product_rate`, `product_description`) VALUES
(12, 'EXIDE', 'exide150.jpg', 16, 10000, 'Exide Solar Tubular\r\n6LMS 150Ah C10 Battery \r\n3 Year Full Warranty'),
(13, 'EXIDE', 'exide200ah_1.jpg', 16, 15000, 'Exide Solar C10 Tubular Battery - 200Ah Inverter Battery 6LMS 200L'),
(14, 'EXIDE', 'ExideSolar100AH.jpg', 16, 90000, 'Exide Solar Tubular C10 100AH Inverter Battery\r\nProduct Brand	:	Exide\r\nProduct Voltage	:	12 Volt\r\nPr'),
(15, 'TURBO', 'turbo200ahc10_1.jpg', 16, 10000, 'Turbo Solar C10 Tubular Battery - 200Ah Inverter Battery 6LMS 200L'),
(16, 'TURBO', 'turbo200ahc20_1.jpg', 16, 15000, 'Turbo Solar C20 Tubular Battery - 200Ah Inverter Battery 6LMS 200L'),
(17, 'amaze', 'amaze85.jpg', 15, 123456, 'asdfghjkjhgf'),
(18, 'Amaze', 'amaze1275.jpg', 15, 123456, 'ersdyrduyfsetues');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_producttype`
--

CREATE TABLE `tbl_producttype` (
  `producttype_id` int(11) NOT NULL,
  `producttype_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_producttype`
--

INSERT INTO `tbl_producttype` (`producttype_id`, `producttype_name`) VALUES
(14, 'UPS'),
(15, 'Home Inverter'),
(16, 'Battery'),
(17, 'Solar Panels'),
(18, 'ON GRID Machines'),
(19, 'OFF GRID Machines');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `user_review` varchar(200) NOT NULL,
  `review_count` int(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `user_review`, `review_count`, `product_id`, `user_id`, `review_date`) VALUES
(1, 'AedAED', 3, 8, 2, '20230930'),
(2, 'wehrtryhr', 5, 17, 2, '2023-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_servicerequest`
--

CREATE TABLE `tbl_servicerequest` (
  `request_id` int(11) NOT NULL,
  `request_date` int(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `request_status` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(50) NOT NULL,
  `stock_count` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`stock_id`, `product_id`, `stock_count`) VALUES
(2, 7, 12),
(5, 7, 15),
(6, 7, 12),
(7, 7, 5),
(8, 12, 2),
(9, 13, 4),
(10, 14, 2),
(11, 15, 5),
(12, 16, 3),
(13, 18, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_contact` varchar(50) NOT NULL,
  `place_id` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_image` varchar(500) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_address`, `user_contact`, `place_id`, `user_email`, `user_image`, `user_password`) VALUES
(2, 'joyal thomas', 'poomkottukuzhiyil', '8589931889', '1', 'joyalthomas2727@gmail.com', 'Screenshot (1).png', '12345678'),
(4, 'Thomas pj', 'poomkottukuzhiyil', '9446867022', '1', 'thomaspj@gmail.com', '', 'Thomas@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_producttype`
--
ALTER TABLE `tbl_producttype`
  ADD PRIMARY KEY (`producttype_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_servicerequest`
--
ALTER TABLE `tbl_servicerequest`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_producttype`
--
ALTER TABLE `tbl_producttype`
  MODIFY `producttype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_servicerequest`
--
ALTER TABLE `tbl_servicerequest`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
