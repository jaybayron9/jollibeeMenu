-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 08:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jollibee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `status`, `token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'orotskie@gmail.com', 'admin', NULL, NULL, '2023-04-07 09:53:07', '2023-04-07 09:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `meals` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `category`, `meals`, `price`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Best Sellers', NULL, '760.00, 880.00, 980.00, 435.00, 535.00, 211.00', NULL, '8 - pc. Chickenjoy Bucket w/ Jolly Spaghetti Family Pan, 6 - pc. Chickenjoy with Palabok Family Pan', NULL, NULL, '2023-03-24 17:42:43'),
(2, 'New Products', NULL, '105.00, 169.00, 250.00,', NULL, '2 2-pc Pancake Solo, 2 2-pc Pancake with Drink, 2 1-pc. Burger Steak w/ Drink and 2 Choco Mallow Pie', NULL, NULL, '2023-03-24 17:15:37'),
(3, 'Family Meals', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 14:44:31'),
(4, 'Breakfast', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 14:44:31'),
(5, 'Chickenjoy', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 14:44:31'),
(6, 'Burgers', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 14:44:31'),
(7, 'Jolly Spaghetti', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 14:44:31'),
(8, 'Burger Steak', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 14:44:31'),
(9, 'Super Meals', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 14:44:31'),
(10, 'Chicken Sandwich', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 14:44:31'),
(11, 'Jolly Hotdog & Pies', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 14:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `purchase` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=379;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
