-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 11:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oishe_create_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(64) NOT NULL,
  `admin_email` varchar(64) NOT NULL,
  `admin_password` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `admin_status` enum('Active','Inactive') NOT NULL,
  `admin_type` enum('Admin','Operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `admin_email`, `admin_password`, `created_at`, `admin_status`, `admin_type`) VALUES
(1, 'Nirjhor Anjum', 'nirjhor@piit.us', 'e99a18c428cb38d5f260853678922e03', '2019-11-19 00:00:00', 'Active', 'Admin'),
(4, 'Md. Al Mamun', 'mr.mamun@gmail.com', 'e99a18c428cb38d5f260853678922e03', '2019-11-22 11:01:34', 'Active', 'Operator'),
(5, 'Rohan', 'rohan@gmail.com', 'e99a18c428cb38d5f260853678922e03', '2019-11-22 11:54:57', 'Active', 'Operator'),
(6, 'Sumit', 'sumit@gmail.com', 'e99a18c428cb38d5f260853678922e03', '2019-11-23 11:16:12', 'Active', 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(64) NOT NULL,
  `category_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_status`) VALUES
(1, 'Men', 'Active'),
(2, 'Women', 'Active'),
(3, 'Kids', 'Active'),
(4, 'Electronics', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(64) NOT NULL,
  `customer_email` varchar(64) NOT NULL,
  `customer_password` varchar(128) NOT NULL,
  `customer_mobile` varchar(16) NOT NULL,
  `created_at` datetime NOT NULL,
  `customer_status` enum('Active','Inactive') NOT NULL DEFAULT 'Inactive',
  `bill_address` varchar(512) NOT NULL,
  `shipping_address` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_email`, `customer_password`, `customer_mobile`, `created_at`, `customer_status`, `bill_address`, `shipping_address`) VALUES
(8, 'Nirjhor Anjum', 'nirjhor@piit.us', 'e99a18c428cb38d5f260853678922e03', '01735522558', '2019-12-13 10:27:13', 'Inactive', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_status` enum('Pending','Processing','Completed','Halt','Cancelled') NOT NULL DEFAULT 'Pending',
  `order_date` datetime NOT NULL,
  `cart_total` int(11) NOT NULL,
  `delivery_charge` int(11) NOT NULL,
  `payment_status` enum('Unpaid','Paid','Fraud') NOT NULL DEFAULT 'Unpaid',
  `transaction_id` int(11) DEFAULT NULL,
  `transaction_type` enum('COD','PG') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_status`, `order_date`, `cart_total`, `delivery_charge`, `payment_status`, `transaction_id`, `transaction_type`) VALUES
(8, 8, 'Pending', '2019-12-21 13:10:15', 7000, 120, 'Unpaid', NULL, 'COD'),
(9, 8, 'Pending', '2019-12-21 13:15:02', 7000, 120, 'Unpaid', NULL, 'COD'),
(10, 8, 'Pending', '2020-01-10 10:55:57', 500, 60, 'Unpaid', NULL, 'COD'),
(11, 8, 'Pending', '2020-01-10 11:03:17', 2000, 120, 'Unpaid', NULL, 'COD'),
(12, 8, 'Pending', '2020-01-10 11:24:34', 3000, 120, 'Unpaid', NULL, 'COD'),
(13, 8, 'Pending', '2020-01-10 11:44:14', 3000, 60, 'Unpaid', NULL, 'COD'),
(14, 8, 'Pending', '2020-01-10 11:50:08', 3000, 120, 'Unpaid', NULL, 'COD'),
(15, 8, 'Pending', '2020-01-10 11:51:34', 2000, 120, 'Unpaid', NULL, 'COD'),
(16, 8, 'Pending', '2020-01-10 11:57:37', 2000, 60, 'Paid', NULL, 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `order_item_status` enum('Pending','Accepted','Cancelled') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `customer_id`, `product_id`, `product_price`, `product_quantity`, `order_item_status`) VALUES
(11, 9, 8, 1, 500, 4, 'Pending'),
(12, 9, 8, 2, 3000, 1, 'Pending'),
(13, 9, 8, 3, 2000, 1, 'Pending'),
(14, 10, 8, 1, 500, 1, 'Pending'),
(15, 11, 8, 3, 2000, 1, 'Pending'),
(16, 12, 8, 2, 3000, 1, 'Pending'),
(17, 13, 8, 2, 3000, 1, 'Pending'),
(18, 14, 8, 2, 3000, 1, 'Pending'),
(19, 15, 8, 3, 2000, 1, 'Pending'),
(20, 16, 8, 3, 2000, 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `product_summary` text NOT NULL,
  `product_details` text NOT NULL,
  `regular_price` double NOT NULL,
  `discounted_price` double DEFAULT NULL,
  `discount_end_date` datetime DEFAULT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_default_image` text NOT NULL,
  `product_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `product_name`, `product_summary`, `product_details`, `regular_price`, `discounted_price`, `discount_end_date`, `product_quantity`, `product_default_image`, `product_status`) VALUES
(1, 1, 1, 'Polo TShirt', '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>\r\n<ul>\r\n    <li><i class=\"icon-ok\"></i>Any Product types that You want - Simple, Configurable</li>\r\n    <li><i class=\"icon-ok\"></i>Downloadable/Digital Products, Virtual Products</li>\r\n    <li><i class=\"icon-ok\"></i>Inventory Management with Backordered items</li>\r\n</ul>\r\n<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>', 500, 400, '2019-12-31 11:22:30', 100, 'PRODUCT_20191207112428_191897_pp05.jpg', 'Active'),
(2, 1, 1, 'Men\'s Bijoy Dibosh T-Shirt-SW5255T', 'Special Bijoy Dibosh Brand Name: Swapon\'s World  Sleeve: Full Sleeve  Fabric: 100 % Cotton  Type: Round Neck  180 GSM  Size- M, L, XL, XXL', '<ul><li>Special Bijoy Dibosh</li><li>Brand Name: Swapon\'s World&nbsp;</li><li>Sleeve: Full Sleeve&nbsp;</li><li>Fabric: 100 % Cotton&nbsp;</li><li>Type: Round Neck&nbsp;</li><li>180 GSM&nbsp;</li><li>Size- M, L, XL, XXL</li></ul><div>Measurement</div><ul><li>M - Length 27\" chest 38\".</li><li>L - Length 28\" chest: 40\".</li><li>XL - Length 29\" chest 42\"</li><li>XXL - Length 30\" chest 44\"</li></ul>', 3000, 2500, '2020-01-31 10:58:15', 100, 'PRODUCT_20191214110102_700813_sw5255t.jpg', 'Active'),
(3, 1, 1, 'Green National Anthem Tshirt For Men', 'Product Name: Amar Sonar Bangla (National Anthem)', '<ul><li>Product Name: Amar Sonar Bangla (National Anthem)</li><li>Clothing Material:Cotton</li><li>Fabric: 160 GSM</li><li>Size Chart: M (Width - 19\", length - 27\") L (Width - 20\", length - 28\") XL (Width - 21\", Length - 29\") XXL (Width - 23\", Length - 31\"</li></ul>', 2000, 1400, '0000-00-00 00:00:00', 100, 'PRODUCT_20191214110310_992136_Aamar-sonar-bangla-ami-tomai-bhalobashi2.png', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `shopcart`
--

CREATE TABLE `shopcart` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `cart_add_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `slider_title` varchar(128) NOT NULL,
  `slider_file` text NOT NULL,
  `slider_status` enum('Active','Inactive') NOT NULL,
  `created_at` datetime NOT NULL,
  `slider_sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `slider_file`, `slider_status`, `created_at`, `slider_sequence`) VALUES
(7, 'Best Women Garments', 'SLIDER_20191207123003_481306_slide-1.jpg', 'Active', '2019-12-07 12:30:03', 1),
(8, 'Best Fashion Products for Boys', 'SLIDER_20191207123020_908470_slide-2.jpg', 'Active', '2019-12-07 12:30:20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(64) NOT NULL,
  `subcategory_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `subcategory_status`) VALUES
(1, 1, 'Tshirt', 'Active'),
(2, 2, 'Sharee', 'Active'),
(3, 2, 'Salwar', 'Active'),
(4, 1, 'Panjabi', 'Active'),
(5, 1, 'Polo Shirt', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_items_ibfk_3` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `shopcart`
--
ALTER TABLE `shopcart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shopcart`
--
ALTER TABLE `shopcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_3` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `shopcart`
--
ALTER TABLE `shopcart`
  ADD CONSTRAINT `shopcart_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `shopcart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
