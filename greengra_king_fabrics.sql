-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2021 at 07:24 AM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greengra_king_fabrics`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `pk_id` int(11) NOT NULL,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(120) NOT NULL,
  `admin_management` int(11) NOT NULL DEFAULT 0,
  `enquiry_management` int(11) NOT NULL DEFAULT 0,
  `livechat_management` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_reset_password`
--

CREATE TABLE `admin_reset_password` (
  `pk_id` int(11) NOT NULL,
  `username` varchar(254) DEFAULT NULL,
  `verification_code` varchar(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blogposts`
--

CREATE TABLE `blogposts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `pk_id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client_details`
--

CREATE TABLE `client_details` (
  `pk_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(120) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `c_name` varchar(55) DEFAULT NULL,
  `stn` varchar(55) DEFAULT NULL,
  `ntn` varchar(55) DEFAULT NULL,
  `address` varchar(155) DEFAULT NULL,
  `c_address` varchar(155) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_lastedit`
--

CREATE TABLE `enquiry_lastedit` (
  `pk_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `category` varchar(70) NOT NULL,
  `sub_category` varchar(191) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `weight_GSM` int(100) DEFAULT NULL,
  `weave` varchar(30) DEFAULT NULL,
  `reed` int(20) DEFAULT NULL,
  `weft` int(20) DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `delivery_date` varchar(30) DEFAULT NULL,
  `payments` varchar(45) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `warp` int(20) DEFAULT NULL,
  `pick` int(20) DEFAULT NULL,
  `width` float DEFAULT NULL,
  `widthunit` varchar(60) NOT NULL,
  `shipment` varchar(50) NOT NULL,
  `NTN_number` varchar(50) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `status` int(11) DEFAULT 0 COMMENT '0 for unapproved, 1 for accepted, 2 for edit by admin. 3 for edit by client',
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_submit`
--

CREATE TABLE `enquiry_submit` (
  `pk_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `category` varchar(70) NOT NULL,
  `sub_category` varchar(113) DEFAULT NULL,
  `type` varchar(253) DEFAULT NULL,
  `weight_GSM` int(100) DEFAULT NULL,
  `weave` varchar(30) DEFAULT NULL,
  `reed` int(10) DEFAULT NULL,
  `weft` int(20) DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `delivery_date` varchar(30) DEFAULT NULL,
  `payments` varchar(45) DEFAULT NULL,
  `color` text DEFAULT NULL,
  `warp` int(20) DEFAULT NULL,
  `pick` int(20) DEFAULT NULL,
  `width` float DEFAULT NULL,
  `widthunit` varchar(60) NOT NULL DEFAULT 'NA',
  `shipment` text DEFAULT NULL,
  `NTN_number` varchar(50) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `note` varchar(300) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 for unapproved, 1 for accepted, 2 for edit  by admin. 3 for edit by client',
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guest_enquiry`
--

CREATE TABLE `guest_enquiry` (
  `pk_id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `q` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `warp` varchar(255) DEFAULT NULL,
  `reed` varchar(255) DEFAULT NULL,
  `pick` varchar(255) DEFAULT NULL,
  `weft` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `delivery_date` varchar(255) DEFAULT NULL,
  `mode_of_ship` varchar(255) DEFAULT NULL,
  `STN` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `GSM` varchar(255) DEFAULT NULL,
  `weave` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `width` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `main_category` varchar(255) DEFAULT NULL,
  `sub_category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_tracking`
--

CREATE TABLE `order_tracking` (
  `pk_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `pk_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `verification_code` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `pk_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `main_category` varchar(255) DEFAULT NULL,
  `sub_category` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `GSM` varchar(255) DEFAULT NULL,
  `refrence` varchar(255) DEFAULT NULL,
  `weave` varchar(255) DEFAULT NULL,
  `width` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `finishing` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `thumbnail2` varchar(255) DEFAULT NULL,
  `thumbnail3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `pk_id` int(11) NOT NULL,
  `main_category` varchar(255) DEFAULT NULL,
  `sub_category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `pk_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` varchar(253) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `admin_reset_password`
--
ALTER TABLE `admin_reset_password`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `blogposts`
--
ALTER TABLE `blogposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `client_details`
--
ALTER TABLE `client_details`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `enquiry_lastedit`
--
ALTER TABLE `enquiry_lastedit`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `enquiry_submit`
--
ALTER TABLE `enquiry_submit`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `guest_enquiry`
--
ALTER TABLE `guest_enquiry`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `order_tracking`
--
ALTER TABLE `order_tracking`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`pk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_reset_password`
--
ALTER TABLE `admin_reset_password`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogposts`
--
ALTER TABLE `blogposts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_details`
--
ALTER TABLE `client_details`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry_lastedit`
--
ALTER TABLE `enquiry_lastedit`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry_submit`
--
ALTER TABLE `enquiry_submit`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guest_enquiry`
--
ALTER TABLE `guest_enquiry`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_tracking`
--
ALTER TABLE `order_tracking`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
