-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 07:41 PM
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
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `hint` varchar(100) DEFAULT NULL,
  `answer` varchar(100) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `email`, `password`, `status`, `hint`, `answer`, `token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', NULL, 'Favorite color?', 'blue', NULL, '2023-04-17 17:21:46', '2023-04-17 17:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `meals` varchar(100) DEFAULT NULL,
  `price` varchar(500) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `category`, `meals`, `price`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Best Sellers ', NULL, '760.00, 880.00, 980.00, 435.00, 535.00, 211.00', NULL, '8 - pc. Chickenjoy Bucket w/ Jolly Spaghetti Family Pan, 6 - pc. Chickenjoy with Palabok Family Pan, 8 - pc. Chickenjoy with Palabok Family Pan, 6 - pc. Chickenjoy Solo, 8 - pc. Chickenjoy Solo, 1 - pc. Chickenjoy w/ Burger Steak & Half Jolly Spaghetti Super Meal', NULL, '2023-04-16 15:54:56', '2023-04-16 15:57:08'),
(2, 'New Products ', NULL, '59.00, 59.00, 63.00, 105.00, 169.00, 250.00, 154.00, 52.00, 149.00', NULL, 'Choco Float, Coffee Float, Mango Graham Fudge Sundae, 2 2-pc Pancake Solo, 2 2-pc Pancake with Drink, 2 1-pc. Burger Steak w/ Drink and 2 Choco Mallow Pie, 2 2-pc Pancake Solo, 2 2-pc Pancake with Drink, 2 1-pc. Burger Steak w/ Drink and 2 Choco Mallow Pie', NULL, '2023-04-16 15:54:56', '2023-04-16 16:04:56'),
(3, 'Family Meals', NULL, '760.00, 880.00, 980.00, 435.00, 535.00, 325.00, 758.00, 235.00, 366.00, 265.00, 250.00, 297.00, 348.00', NULL, '8 - pc. Chickenjoy Bucket w/ Jolly Spaghetti Family Pan, \n6 - pc. Chickenjoy with PalabokFamily Pan, 8 - pc. Chickenjoy with Palabok Family Pan, 6 - pc. Chickenjoy Solo,  \n8 - pc. Chickenjoy Solo,\n 4 - pc. Chickenjoy Family Box Solo, Chickenjoy Bucket Family Meals,\n Jolly Spaghetti & Palabok Family Pan,\nBurger Bundle,\n Yumburger Family Savers, 2 1-pc. Burger Steak w/ Drink and 2 Choco Mallow Pie, Burger Steak Family Savers ', NULL, '2023-04-16 15:54:56', '2023-04-16 16:19:12'),
(4, 'Breakfast ', NULL, '105.00, 169.00, 158.00, 158.00, 158.00, 148.00', NULL, '2 2-pc Pancake Solo, 2 2-pc Pancake with Drink, Longganisa, Beef Tapa, Corned Beef, 1 - pc. Breakfast Chickenjoy', NULL, '2023-04-16 15:54:56', '2023-04-16 16:25:41'),
(5, 'Chickenjoy ', NULL, '760.00, 880.00, 980.00, 435.00, 535.00, 325.00', NULL, '8 - pc. Chickenjoy Bucket w/ Jolly Spaghetti Family Pan, 6 - pc. Chickenjoy with Palabok Family Pan, 8 - pc. Chickenjoy with Palabok Family Pan, 6 - pc. Chickenjoy Solo, 8 - pc. Chickenjoy Solo, 4 - pc. Chickenjoy Family Box Solo', NULL, '2023-04-16 15:54:56', '2023-04-17 16:49:53'),
(6, 'Burgers', NULL, '366.00, 265.00, 40.00, 66.00, 91.00, 117.00', NULL, 'Burger Bundle, Yumburger Family Savers, Yumburger, Cheesy Yumburger, Bacon Cheesy Yumburger, Amazing Aloha Champ Jr.', NULL, '2023-04-16 15:54:56', '2023-04-17 16:53:40'),
(7, 'Jolly Spaghetti ', NULL, '760.00, 235.00, 758.00, 550.00, 630.00, 59.00', NULL, '8 - pc. Chickenjoy Bucket w/ Jolly Spaghetti Family Pan, Jolly Spaghetti Family Pan, Chickenjoy Bucket w/ Rice. Jolly Spaghetti & Drinks, 6-pc. Burger Steak w/ Jolly Spaghetti Family Pan, 8-pc. Burger Steak w/ Jolly Spaghetti Family Pan, Jolly Spaghetti', NULL, '2023-04-16 15:54:56', '2023-04-17 16:57:48'),
(8, 'Burger Steak ', NULL, '154.00, 250.00, 297.00, 348.00, 450.00, 550.00', NULL, '2 1pc Burger Steak w/ Drink, 2 1-pc. Burger Steak w/ Drink and 2 Choco Mallow Pie, Burger Steak Family Savers, 6-pc. Burger Steak Family Pan, 8-pc. Burger Steak Family Pan, 6-pc. Burger Steak w/ Jolly Spaghetti Family Pan', NULL, '2023-04-16 15:54:56', '2023-04-17 16:59:24');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
