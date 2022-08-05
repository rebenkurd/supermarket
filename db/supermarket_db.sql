-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 07:40 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supermarket_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `recycle` int(11) NOT NULL DEFAULT 0,
  `addedby` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `recycle`, `addedby`, `created_at`, `updated_at`) VALUES
(1, 'وشکە', '', 1, '1', '2022-07-24 22:50:35', '2022-07-25 14:22:03'),
(2, 'شەربەت', '', 1, '1', '2022-07-24 22:50:48', '2022-07-24 22:50:48'),
(5, 'برنج', '', 0, '1', '2022-07-25 16:06:51', '0000-00-00 00:00:00'),
(6, 'گۆشت', '', 0, '1', '2022-07-25 16:07:01', '0000-00-00 00:00:00'),
(7, 'وشکە', '', 0, '1', '2022-07-25 16:07:10', '0000-00-00 00:00:00'),
(8, 'چەرەزات', '', 0, '1', '2022-07-25 16:07:18', '0000-00-00 00:00:00'),
(9, 'پاکەرەوە', '', 0, '1', '2022-07-25 16:07:28', '0000-00-00 00:00:00'),
(10, 'شیرنەمەنی', '', 0, '1', '2022-07-25 16:07:57', '0000-00-00 00:00:00'),
(11, 'خواردنەوە', '', 0, '1', '2022-07-25 16:09:22', '0000-00-00 00:00:00'),
(12, 'پسکیت', '', 0, '1', '2022-07-25 16:09:38', '0000-00-00 00:00:00'),
(13, 'شەربەت', '', 0, '1', '2022-07-25 16:09:46', '0000-00-00 00:00:00'),
(14, 'بنێشت', '', 0, '1', '2022-07-25 16:10:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `recycle` int(11) NOT NULL DEFAULT 0,
  `addedby` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `description`, `recycle`, `addedby`, `created_at`, `updated_at`) VALUES
(1, 'ئاڵطونسا', '', 0, '1', '0000-00-00 00:00:00', '2022-07-25 14:34:45'),
(6, 'زێڕ', '', 0, '1', '2022-07-25 16:11:34', '0000-00-00 00:00:00'),
(7, 'نەورەس', '', 0, '1', '2022-07-25 16:14:25', '0000-00-00 00:00:00'),
(8, 'تاک', '', 0, '1', '2022-07-25 16:14:28', '0000-00-00 00:00:00'),
(9, 'پیپسی', '', 0, '1', '2022-07-25 16:15:07', '0000-00-00 00:00:00'),
(10, 'کۆکاکۆلا', '', 0, '1', '2022-07-25 16:15:12', '0000-00-00 00:00:00'),
(11, 'ئامادە', '', 0, '1', '2022-07-25 16:15:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `pr_id` int(11) NOT NULL,
  `pr_code` varchar(255) NOT NULL,
  `pr_name` varchar(255) NOT NULL,
  `pr_quantity` int(11) NOT NULL,
  `pr_price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `recycle` tinyint(1) NOT NULL,
  `saledby` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `company` int(11) NOT NULL,
  `description` text NOT NULL,
  `manufacture_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `recycle` int(11) NOT NULL DEFAULT 0,
  `addedby` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `name`, `category`, `price`, `quantity`, `company`, `description`, `manufacture_date`, `expire_date`, `recycle`, `addedby`, `created_at`, `updated_at`) VALUES
(27, '8697449910964', 'ئاوە تەماتەی ئاڵتونسا', 11, '2500', 6, 1, '', '2022-05-09', '2024-05-08', 0, '1', '2022-08-05 14:36:33', '0000-00-00 00:00:00'),
(28, '8991102024099', 'فڵچەی ددان', 9, '1000', 78, 1, '', '2022-08-05', '2023-06-05', 0, '1', '2022-08-05 14:43:04', '0000-00-00 00:00:00'),
(29, '6930258184259', 'کەتیرەی dr. fon', 8, '1000', 76, 7, '', '2022-08-05', '2022-08-31', 0, '1', '2022-08-05 15:11:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'بەڕێوبەری سەرەکی', '2022-07-24 23:09:29', '2022-07-24 23:09:29'),
(2, 'بەرێوبەری ئاسای', '2022-07-24 23:09:29', '2022-07-24 23:09:29'),
(3, 'کاشێر', '2022-07-24 23:09:29', '2022-07-24 23:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pr_code` varchar(255) NOT NULL,
  `pr_name` varchar(255) NOT NULL,
  `pr_quantity` int(11) NOT NULL,
  `pr_price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `saledby` varchar(255) NOT NULL,
  `recycle` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `product_id`, `pr_code`, `pr_name`, `pr_quantity`, `pr_price`, `total_price`, `saledby`, `recycle`, `status`, `created_at`, `updated_at`) VALUES
(254, 29, '6930258184259', 'کەتیرەی dr. fon', 1, 1000, 1000, '1', 0, 0, '2022-08-05 15:24:35', '0000-00-00 00:00:00'),
(255, 28, '8991102024099', 'فڵچەی ددان', 6, 1000, 6000, '1', 0, 0, '2022-08-05 15:26:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 2 COMMENT '1 super admin\r\n2 admin\r\n3 cashier',
  `phone` varchar(255) NOT NULL,
  `recycle` int(11) DEFAULT 0,
  `addedby` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type_image` varchar(255) NOT NULL,
  `tmp_image` varchar(255) NOT NULL,
  `size_image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role`, `phone`, `recycle`, `addedby`, `image`, `type_image`, `tmp_image`, `size_image`, `created_at`, `updated_at`) VALUES
(1, 'ڕێبین', 'ڕفیق', 'rebinrafiq980@gmail.com', '123', 1, '123 456 7890', 0, '1', '', '', '', '', '2022-07-24 23:10:57', '2022-07-25 00:01:03'),
(31, 'ff', 'ff', 'ff', '', 2, '', 0, '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `company` (`company`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `company` FOREIGN KEY (`company`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role` FOREIGN KEY (`role`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
