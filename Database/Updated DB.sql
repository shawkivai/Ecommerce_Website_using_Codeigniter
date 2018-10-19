-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 07:09 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommerce_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_full_name` varchar(50) NOT NULL,
  `admin_email_address` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `access_lavel` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_full_name`, `admin_email_address`, `admin_password`, `access_lavel`) VALUES
(9, 'Md. Habibullah Noor', 'habib@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bill_info`
--

CREATE TABLE `tbl_bill_info` (
  `bill_id` int(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `city` text NOT NULL,
  `country` text NOT NULL,
  `mobile_phone` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bill_info`
--

INSERT INTO `tbl_bill_info` (`bill_id`, `company_name`, `first_name`, `last_name`, `address`, `zip`, `city`, `country`, `mobile_phone`, `fax`) VALUES
(20, '', '', '', '', '', 'Dhaka', 'Bangladesh', '', ''),
(2, '', '', '', '', '', 'Rajshahi', 'England', '', ''),
(3, '', '', '', '', '', 'Dhaka', 'England', '', ''),
(4, '', '', '', '', '', 'Dhaka', 'England', '', ''),
(5, '', '', '', '', '', 'Dhaka', 'England', '', ''),
(6, '', '', '', '', '', 'Dhaka', 'England', '', ''),
(7, '', '', '', '', '', 'Dhaka', 'England', '', ''),
(8, '', '', '', '', '', 'Dhaka', 'England', '', ''),
(9, '', '', '', '', '', 'Dhaka', 'England', '', ''),
(10, '', '', '', '', '', 'Dhaka', 'England', '', ''),
(11, '', '', '', '', '', 'Dhaka', 'England', '', ''),
(12, '', '', '', '', '', 'Dhaka', 'England', '', ''),
(13, '', '', '', '', '', 'Dhaka', 'England', '', ''),
(14, '', '', '', '', '', 'Dhaka', 'England', '', ''),
(15, '', '', '', '', '', 'Dhaka', 'Bangladesh', '', ''),
(16, '', '', '', '', '', 'Dhaka', 'Bangladesh', '', ''),
(17, '', '', '', '', '', 'Dhaka', 'Bangladesh', '', ''),
(18, '', '', '', '', '', 'Dhaka', 'Bangladesh', '', ''),
(19, '', '', '', '', '', 'Dhaka', 'Bangladesh', '', ''),
(21, '', '', '', '', '', 'Dhaka', 'Bangladesh', '', ''),
(22, '', '', '', '', '', 'Dhaka', 'Bangladesh', '', ''),
(23, '', '', '', '', '', 'Dhaka', 'Bangladesh', '', ''),
(24, '', '', '', '', '', 'Dhaka', 'Bangladesh', '', ''),
(25, '', '', '', '', '', 'Dhaka', 'Bangladesh', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart1`
--

CREATE TABLE `tbl_cart1` (
  `id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cart1`
--

INSERT INTO `tbl_cart1` (`id`, `category_id`, `qty`, `price`, `name`, `image`, `count`) VALUES
(51, 3, 1, 95000, 'MacBook Pro', 'images/product_images/images3.jpg', 0),
(51, 3, 1, 95000, 'MacBook Pro', 'images/product_images/images3.jpg', 0),
(55, 4, 1, 34444, 'ipad', 'images/product_images/beats_by_dr_dre_900_00109_01_studio_wireless_headphones_red_101636911.jpg', 0),
(48, 3, 1, 78999, 'Viao S1E', 'images/product_images/sony_laptop7.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(2) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(1, 'Computer', '  computer......', 1),
(4, 'Mobile', '----------------', 1),
(3, 'Laptop', '  Laptop Category Description Here............<br>', 1),
(6, 'Desktop ', 'various accessories', 0),
(7, 'Router', '', 1),
(8, 'Digital Camera', '', 1),
(9, 'headphones', '', 0),
(10, 'HTC', '', 0),
(11, 'charger', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(2) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `activation_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `first_name`, `last_name`, `email_address`, `password`, `company`, `address`, `gender`, `city`, `country`, `zip_code`, `activation_status`) VALUES
(66, '', '', 'shaw@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '0', '', 'Select Country.....', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_login`
--

CREATE TABLE `tbl_customer_login` (
  `customer_id` int(100) NOT NULL,
  `customer_full_name` varchar(100) NOT NULL,
  `customer_email_address` varchar(100) NOT NULL,
  `customer_password` varchar(100) NOT NULL,
  `access_level` tinyint(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer_login`
--

INSERT INTO `tbl_customer_login` (`customer_id`, `customer_full_name`, `customer_email_address`, `customer_password`, `access_level`) VALUES
(1, 'ahmed shawki', 'mustakim@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE `tbl_manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL,
  `manufacturer_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_description`, `publication_status`) VALUES
(1, 'Nokia', '  Nokia international', 1),
(2, 'Samsung', 'Samsung Category Description Here.......<br>', 1),
(4, 'Asus', '', 1),
(5, 'APPLE', 'Mac Book,IPAD,IPHONE', 1),
(6, 'TP-LINK', '', 1),
(7, 'BITS', '', 1),
(8, 'LENEVO', '', 1),
(9, 'VIAO', '', 1),
(10, 'HTC', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category_id` int(3) NOT NULL,
  `manufacturer_id` int(3) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL DEFAULT '',
  `product_description` mediumtext NOT NULL,
  `product_image` varchar(256) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `product_quantity` int(3) NOT NULL,
  `featured_product` tinyint(1) NOT NULL DEFAULT '1',
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `manufacturer_id`, `manufacturer_name`, `product_description`, `product_image`, `product_price`, `product_quantity`, `featured_product`, `created_date_time`, `publication_status`) VALUES
(33, 'Lenevo Y50', 3, 8, '', 'ddd', 'images/product_images/lenovo-laptop-ideapad-z500-touch-side-105.jpg', '45000', 4, 1, '2016-12-19 08:03:50', 1),
(34, 'HTC', 4, 10, '', 'dddfg', 'images/product_images/htc-one-max-en_US-phone-listing3.jpg', '20999', 4, 1, '2016-12-19 08:06:06', 1),
(43, 'Iphone 7', 4, 5, '', '<div xss=removed><br></div><div><font color="#222222" face="arial, sans-serif" size="2"><span xss=removed>Iphone ,Mac OS</span></font></div>', 'images/product_images/iphone712.jpg', '78999', 4, 1, '2016-12-19 10:15:53', 1),
(47, 'Beats Solo3 Wireless', 9, 7, '', '3D headphone', 'images/product_images/bits_white3.jpg', '78999', 4, 1, '2016-12-19 10:20:35', 1),
(48, 'Viao S1E', 3, 9, '', 'Processor-Core I7<div>Ram- DDR4</div><div>HDD-1TB</div>', 'images/product_images/sony_laptop7.jpg', '78999', 4, 1, '2016-12-19 10:23:38', 1),
(51, 'MacBook Pro', 3, 5, '', '<div><ul xss=removed><li xss=removed>Intel Core i7 processor</li><li xss=removed>Radeon Pro 450 with 2GB of GDDR5 memory</li><li xss=removed>Ultrafast flash storage</li><li xss=removed>Up to 9 hours of battery life²</li><li xss=removed>802.11ac Wi-Fi</li><li xss=removed>Force Touch trackpad</li></ul></div>', 'images/product_images/images3.jpg', '95000', 4, 1, '2016-12-19 10:27:20', 1),
(52, 'Lenevo Y98', 3, 8, '', '<div><ul xss=removed><li xss=removed>Intel Core i7 processor</li><li xss=removed>Radeon Pro 450 with 2GB of GDDR5 memory</li><li xss=removed>Ultrafast flash storage</li><li xss=removed>Up to 9 hours of battery life²</li><li xss=removed>802.11ac Wi-Fi</li><li xss=removed>Force Touch trackpad</li></ul></div>', 'images/product_images/41P-pLdd-CL.jpg', '60000', 4, 1, '2016-12-19 10:29:32', 1),
(53, 'TP-Link', 1, 6, '', 'IEEE-803.1<div>Range-50meter</div>', 'images/product_images/508971-the-best-wireless-routers-of-2016-linksys.jpg', '2999', 4, 1, '2016-12-19 10:30:43', 1),
(55, 'ipad', 4, 5, '', 'dfdfdfdf', 'images/product_images/beats_by_dr_dre_900_00109_01_studio_wireless_headphones_red_101636911.jpg', '34444', 5, 1, '2017-12-30 05:27:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wish_id` int(5) NOT NULL,
  `product_id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` blob NOT NULL,
  `product_price` int(100) NOT NULL,
  `customer_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_bill_info`
--
ALTER TABLE `tbl_bill_info`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_customer_login`
--
ALTER TABLE `tbl_customer_login`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_bill_info`
--
ALTER TABLE `tbl_bill_info`
  MODIFY `bill_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `tbl_customer_login`
--
ALTER TABLE `tbl_customer_login`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wish_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
