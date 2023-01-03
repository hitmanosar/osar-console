-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 11:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `console`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(233) NOT NULL,
  `username` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `password` varchar(233) NOT NULL,
  `confirm password` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `email`, `password`, `confirm password`) VALUES
(1, 'osar', 'osar@g', '1234', '1234'),
(2, 'admin', 'admin@g', '12345', '12345'),
(3, 'moe', 'moe@g', '123', '123'),
(4, 'osar', 'osar21@g', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `message` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `email`, `message`) VALUES
(22, 'koesoe@gmail.com', 'wating for new AUGEX 2 pack controller for ps4	'),
(23, 'jhonjoe@gmail.com', 'how can i repair my ps3 g50 wireless controller.any services?'),
(24, 'lwin@gmail.com', 'can you review any low end console price less than $20.'),
(26, 'may@g', 'gfgfgfg');

-- --------------------------------------------------------

--
-- Table structure for table `order detail`
--

CREATE TABLE `order detail` (
  `order_id` int(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `customername` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `phone` varchar(233) NOT NULL,
  `address` varchar(233) NOT NULL,
  `order pname` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order detail`
--

INSERT INTO `order detail` (`order_id`, `total`, `size`, `color`, `customername`, `email`, `phone`, `address`, `order pname`) VALUES
(8, '$45.3', '164mm * 95mm * 51mm', 'Black/Purple', 'Ye Yint', 'yeyint2001@gmail.com', '09485763832', 'Sanchaung, baho street NO(36)', 'AUGEX 2 Pack Controller for PS4'),
(9, '$50.8', '162mm * 99mm * 54mm', 'Purple/Pink', 'james', 'james1997@gmail.com', '09253859933', '19th street , latha township', 'Playstation DualSense Wireless Controller'),
(11, '$47.3', '158mm * 98mm * 54mm', 'Black', 'sasas', 'osar10@g', '0943434538', 'ygn , latha', 'YU33 2 Pack Wireless Controller ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product description` text NOT NULL,
  `size` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `brand` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product description`, `size`, `color`, `picture`, `brand`, `category`, `price`) VALUES
(22, 'Wireless PS4 Controller', '   Wide Compatibility: The wireless controller is compatible with PS4/Pro/Slim console.', '160mm * 97mm * 55mm   ', 'Yellow   ', 'download (1).jpg', 'Sony', 'Playstation', '$36.5   '),
(23, 'PS4 Controller', ' Equipped with dual vibration, 6-axis motion sensor, 3.5mm stereo jack, multi-touch pad, speaker, light bar etc.', '162mm * 97mm * 52mm ', 'White ', 'OIP3.jpg', 'Navidia', 'Microsoft', '$40 '),
(24, 'AUGEX 2 Pack Controller for PS4', 'Prefect Xmas Gift:Impress any gift recipients with our gift box.', '164mm * 95mm * 51mm', 'Black/Purple', 'OIP.jpg', 'Nitendo', 'Nitendo', '$45.3'),
(25, 'TERIOS Wireless Controllers', ' The wireless controller has an 12 hours autonomy and is USB chargeable.', '161mm * 96mm * 54mm ', 'Black/White ', 'OIP (3).jpg', 'Sony', 'Playstation', '$35 '),
(26, 'YU33 2 Pack Wireless Controller ', 'The clickable touch pad and integrated light bar offer you a new way to play games.', '158mm * 98mm * 54mm', 'Black', 'download.jpg', 'Microsoft Gaming', 'Microsoft', '$47.3'),
(27, 'Playstation DualSense Wireless Controller', 'Experience varying levels of force and tension as you interact with your in-game gear and environments. ', '162mm * 99mm * 54mm', 'Purple/Pink', 'download (2).jpg', 'Sony', 'Playstation', '$50.8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `order detail`
--
ALTER TABLE `order detail`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order detail`
--
ALTER TABLE `order detail`
  MODIFY `order_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
