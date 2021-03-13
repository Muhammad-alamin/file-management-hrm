-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 04:38 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `megacommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(128) NOT NULL,
  `admin_email` varchar(128) NOT NULL,
  `admin_pass` varchar(128) NOT NULL,
  `admin_type` enum('System Admin','Opeartor') NOT NULL DEFAULT 'System Admin',
  `admin_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_type`, `admin_status`) VALUES
(1, 'Nirjhor Anjum', 'nirjhor@live.com', 'abc123', 'System Admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(64) NOT NULL,
  `category_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `category_file` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_status`, `category_file`, `created_at`, `updated_at`) VALUES
(1, 'Men', 'Active', 'banner1.jpg', '2018-11-30 14:42:59', '2019-01-11 15:31:53'),
(2, 'Women', 'Inactive', '', '2018-11-30 14:44:01', '2019-01-11 14:46:35'),
(3, 'Kids', 'Active', '', '2018-12-01 14:32:08', '0000-00-00 00:00:00'),
(4, 'Accessories', 'Inactive', '', '2018-12-01 14:32:08', '2019-01-11 13:31:19'),
(5, 'Electronics', 'Active', '', '2018-12-01 14:32:14', '0000-00-00 00:00:00'),
(6, 'Grocery', 'Active', '', '2018-12-01 14:32:20', '0000-00-00 00:00:00'),
(8, 'Beauty', 'Active', 'CATEGORY_20181221202812194152category_banner.jpg', '2018-12-21 14:28:12', '0000-00-00 00:00:00'),
(10, 'Someone 1', 'Inactive', 'banner1.jpg', '2019-01-11 13:48:20', '2019-01-11 13:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(128) NOT NULL,
  `customer_email` varchar(64) NOT NULL,
  `customer_pass` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `customer_mobile` varchar(12) NOT NULL,
  `customer_gender` enum('Male','Female','Other') NOT NULL,
  `customer_status` enum('Pending','Active','Inactive','Suspended') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_mobile`, `customer_gender`, `customer_status`, `created_at`, `updated_at`) VALUES
(1, 'Nirjhor Anjum', 'nirjhor@piit.us', 'abc123', '01730886655', 'Male', 'Pending', '2018-09-22 14:21:58', '0000-00-00 00:00:00'),
(2, 'Salina Ahamed', 'ahamedsalina44@gmail.com', 'abc123', '01987066037', 'Female', 'Pending', '2018-11-21 23:42:08', '0000-00-00 00:00:00'),
(5, 'Ahamed Salina', 'salina.ahamed@yahoo.com', 'bd123', '01987066036', 'Female', 'Pending', '2018-11-21 23:51:53', '0000-00-00 00:00:00'),
(6, 'Master Saheb', 'master@englishschool.com', 'abc123', '01711567890', 'Male', 'Pending', '2018-12-14 15:10:58', '0000-00-00 00:00:00'),
(10, 'Master Saheb 2', 'master2@gmail.com', 'abc1123', '01711567033', 'Male', 'Pending', '2018-12-14 15:22:32', '0000-00-00 00:00:00'),
(12, 'Master Saheb', 'mrmaster@gmail.com', 'abc123', '880194064234', 'Male', 'Pending', '2019-01-04 15:00:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `address_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address_title` int(11) NOT NULL,
  `address_details` int(11) NOT NULL,
  `address_type` enum('Shipping','Billing') NOT NULL,
  `address_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_status` enum('Placed','Halt','Accepted','Rejected','Cancelled','Shipped','Completed') NOT NULL DEFAULT 'Placed',
  `payment_total` float NOT NULL,
  `payment_status` enum('Unpaid','Paid','Fraud') NOT NULL DEFAULT 'Unpaid',
  `payment_method` enum('Cash','Online') DEFAULT 'Online',
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `order_status`, `payment_total`, `payment_status`, `payment_method`, `order_date`, `payment_date`) VALUES
(1, 1, 'Placed', 1000, 'Unpaid', 'Online', '2019-01-05 20:33:34', NULL),
(2, 1, 'Placed', 5617.5, 'Unpaid', 'Online', '2019-01-05 21:18:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL COMMENT 'Primary Key ID, Item ID',
  `order_id` int(11) NOT NULL COMMENT 'Order Table''s Order ID',
  `product_id` int(11) NOT NULL COMMENT 'Product Table''s Product ID',
  `product_price` double NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `sub_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_price`, `product_quantity`, `sub_total`) VALUES
(1, 2, 9, 300, 15, 4500),
(2, 2, 10, 350, 2, 700),
(3, 2, 6, 150, 1, 150);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(64) NOT NULL,
  `page_content` text NOT NULL,
  `page_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `product_name` varchar(128) NOT NULL,
  `product_price` double NOT NULL,
  `master_image` varchar(256) DEFAULT NULL,
  `product_summary` text NOT NULL,
  `product_description` text NOT NULL,
  `product_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `subcategory_id`, `product_name`, `product_price`, `master_image`, `product_summary`, `product_description`, `product_status`, `created_at`, `updated_at`) VALUES
(6, 1, 1, 'T Shirt Blue', 150, 'chelsea-1.jpg', '', 'Product Type: T-shirt; Fabric: 100% Cotton; Color: Navy; Care: Normal wash;', 'Active', '2018-11-30 14:47:26', '2019-01-18 13:36:44'),
(7, 2, 1, 'T_Shirt_Red', 200, 'cm2-b.jpg', '', 'Product Type: T-shirt; Fabric: 100% Cotton; Color: Navy; Care: Normal wash;', 'Active', '2018-11-30 14:47:26', '2019-01-18 13:36:47'),
(8, 3, 1, 'T_Shirt_Black', 250, 'cm2-n.jpg', '', 'Product Type: T-shirt; Fabric: 100% Cotton; Color: Navy; Care: Normal wash;', 'Active', '2018-11-30 14:47:26', '2019-01-18 13:36:49'),
(9, 1, 1, 'T_Shirt_Green', 300, 'cm3-b.jpg', '', 'Product Type: T-shirt; Fabric: 100% Cotton; Color: Navy; Care: Normal wash;', 'Active', '2018-11-30 14:47:26', '2019-01-18 13:36:51'),
(10, 2, 1, 'T_Shirt_Gray', 350, 'star-1.jpg', '', 'Product Type: T-shirt; Fabric: 100% Cotton; Color: Navy; Care: Normal wash;', 'Active', '2018-11-30 14:47:26', '2019-01-18 13:36:59'),
(11, 3, 1, 'T_Shirt_Pink', 400, 'troopers-1.jpg', '', 'Product Type: T-shirt; Fabric: 100% Cotton; Color: Navy; Care: Normal wash;', 'Active', '2018-11-30 14:48:19', '2019-01-18 13:37:02'),
(12, 3, 1, 'Jhal Muri Pants', 1000, '', '<p>Great pant on Banijjo Mela</p>', '<p>Banijjo mela special</p>', 'Active', '2019-01-18 13:21:14', '2019-01-18 13:37:05'),
(14, 1, 1, 'Hello World Pant', 2000, 'PRODUCT_20190118192248863330ad.jpg', '<p>Lorem Ipsum</p>', '<p>Banijjo mela Lorem Ipsum</p>', 'Active', '2019-01-18 13:22:48', '2019-01-18 13:37:07'),
(20, 1, 2, 'Coffee Pant', 3000, 'M_PRODUCT_20190118204425752615asfdfasf.jpg', '<p>Coffee Jeans Pant</p>', '<p>Coffee Jeans Pant</p>', 'Active', '2019-01-18 14:44:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`image_id`, `product_id`, `image_file`) VALUES
(1, 6, 'chelsea-1.jpg'),
(2, 7, 'cm2-b.jpg'),
(3, 8, 'cm2-n.jpg'),
(4, 9, 'cm3-b.jpg'),
(5, 10, 'star-1.jpg'),
(6, 10, 'troopers-1.jpg'),
(7, 20, 'C_PRODUCT_20190118204425797576ffff.jpg'),
(8, 20, 'C_PRODUCT_20190118204425790573ff22.jpg'),
(9, 20, 'C_PRODUCT_20190118204425575598xxxfa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shopcart`
--

CREATE TABLE `shopcart` (
  `cart_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `adding_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shopcart`
--

INSERT INTO `shopcart` (`cart_id`, `customer_id`, `product_id`, `quantity`, `adding_time`, `product_price`) VALUES
(6, 1, 7, 1, '2019-01-12 21:05:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(64) NOT NULL,
  `slider_subtitle` varchar(128) NOT NULL,
  `slider_file` varchar(128) NOT NULL,
  `slider_url` varchar(128) DEFAULT NULL,
  `slider_type` enum('Left','Right') NOT NULL,
  `slider_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_subtitle`, `slider_file`, `slider_url`, `slider_type`, `slider_status`, `created_at`, `updated_at`) VALUES
(1, '50% Discount', 'All Men Tshirt', 'slide-1.jpg', 'https://facebook.com/Nirjhor.Net', 'Left', 'Active', '2018-12-01 14:11:10', '2018-12-01 14:28:49'),
(2, '10% Discount', 'Baby Products', 'slide-2.jpg', 'https://megamall.com/products?id=2', 'Right', 'Active', '2018-12-01 14:11:10', '2018-12-01 14:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(128) DEFAULT NULL,
  `subcategory_file` varchar(128) NOT NULL,
  `subcategory_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`subcategory_id`, `subcategory_name`, `subcategory_file`, `subcategory_status`, `category_id`) VALUES
(1, 'Tshirt', '', 'Active', 1),
(2, 'Jeans Pant', '', 'Active', 1),
(3, 'Silk', '', 'Active', 2),
(4, 'Katan', '', 'Active', 2),
(5, 'Baby Shirt', '', 'Active', 3),
(6, 'Baby Pants', '', 'Active', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`),
  ADD UNIQUE KEY `customer_mobile` (`customer_mobile`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_name` (`product_name`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `shopcart`
--
ALTER TABLE `shopcart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key ID, Item ID', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shopcart`
--
ALTER TABLE `shopcart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD CONSTRAINT `customer_address_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON UPDATE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON UPDATE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
