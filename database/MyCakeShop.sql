-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2019 at 07:06 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khanstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(145, 1, '127.0.0.1', 1, 1),
(146, 2, '127.0.0.1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'E/L Cakes'),
(2, 'Customized Cakes'),
(3, 'Photo Cakes'),
(4, 'Designer Cakes'),
(5, 'Wedding Cakes'),
(6, 'Fancy Cakes'),
(7, 'Desserts'),
(8, 'Bakery'),
(9, 'Chocolates');

-- --------------------------------------------------------

--
-- Table structure for table `name_form`
--

CREATE TABLE `name_form` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(1, 1, 7, 1, '07M47684BS5725041', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 'Black Forest Cake', 400, 'Chocolate Sponge With Cherries And Fresh Cream', 'bf.jpg', 'black forest'),
(2, 1, 'Pineapple Cake', 400, 'Vanilla Sponge With Pineapple And Fresh Cream', 'pineapple.jpg', 'pineapple cake'),
(3, 1, 'Rainbow Cake', 600, 'Rainbow Flavor Sponge With Cheesy Cream', 'rainbow.jpg', 'rainbow cake'),
(4, 1, 'Red Velvet Cake', 500, 'Red Sponge with Cheesy Cream', 'red.jpeg', 'Red velvet cake'),
(5, 1, 'Chocolate Cake', 450, 'Chocolate Sponge with chocolate cream', 'choco.jpg', 'chocolate cake'),
(6, 1, 'Butterscotch Cake', 450, 'Vanilla Sponge With Crunchy Butterscotch', 'butter.jpg', 'butterscotch cake'),
(7, 2, 'Pooh Cake 3 kg', 4200, 'Chocolate Sponge with Foundant', '1.jpg', 'customized cake'),
(8, 2, 'Paw Petrol Cake (3 kg)', 4200, 'Chocolate Sponge with Foundant', '2.jpg', 'customized cake'),
(9, 2, 'Minion Cake (2.5 kg)', 3500, 'Chocolate Sponge with Foundant', '3.jpg', 'customized cake'),
(10, 2, 'No 1 Car Cake (2 kg)', 2800, 'Chocolate Sponge with Foundant', '4.jpg', 'customized cake'),
(11, 3, 'Chota Bheem Cake', 1000, 'Photo cake', 'bheem.jpg', 'Chota Bheem Cake'),
(12, 3, 'Barbie cake', 1000, 'Photo cake', 'Barbie.jpg', 'Barbie cake'),
(13, 3, 'Frozen Cake', 1000, 'Photo cake', 'frozen.jpeg', 'Frozen Cake'),
(14, 3, 'Super Speedo Cake', 1000, 'Photo cake', 'super speedo.png', 'Super Speedo Cake'),
(15, 3, 'Doremon Cake', 1000, 'Photo cake', 'doremon.jpeg', 'Doremon Cake'),
(16, 3, 'Mickey Mouse Cake', 1000, 'Photo cake', 'mickey mouse.jpg', 'Mickey Mouse Cake'),
(17, 3, 'Pikachu Cake', 1000, 'Photo cake', 'pikachu.jpg', 'Pikachu Cake'),
(19, 3, 'Power Rangers Cake', 1000, 'Photo cake', 'power_rangers.jpg', 'Power Rangers Cake'),
(20, 4, 'Flowerish Cake', 1100, 'Pink Flowers with Chocolate falvour', 'flowercake.jpeg', 'Flower Cake'),
(21, 4, 'No.1 Flowerish Cake', 1100, 'Creamish Colour Flowers with Chocolate Flavour', 'flower2.jpeg', 'No 1 cake'),
(22, 4, 'Celebration cake 1', 950, 'White cake with flower garnish', 'white.jpg', 'white cake'),
(23, 5, 'Wedding Cake 1', 8250, 'White cake with Flower Garnish (5.5 kg)', 'wed1 (1).jpeg', 'wedding cake'),
(24, 5, 'Wedding Cake 2', 5250, 'White Cake with Strawberry And Blueberry Garnish(3.5 kg)', 'wed2.jpeg', 'wedding cake'),
(25, 5, 'Wedding Cake 3', 6750, 'White Cake with Couple doll(4.5 kg)', 'wed3.jpeg', 'wedding cake'),
(26, 5, 'Wedding Cake 4', 4500, 'white cake with Mr Mrs Logo(3 kg)', 'wed4.jpeg', 'wedding cake'),
(27, 5, 'Wedding Cake 5', 4500, 'Premium Cake With flower garnish and Alpahbet(3 kg)', 'wed5.jpeg', 'Wedding cake Premium'),
(32, 5, 'Wedding Cake 6', 9000, 'White Cake with Creamy flowers(6kg)', 'wed6.jpeg', 'wedding cake'),
(33, 6, 'Teddy Bear cake', 3750, 'Teddy Bear Shape(3 kg) Cake', 'Teddy1.jpg', 'Teddy '),
(34, 6, 'Emotions cake', 3750, 'Emotions cake (3 kg)', '12red.jpg', 'Emotions'),
(35, 6, 'Tweety Cake', 3750, 'Tweety cut-out cake(3 kg)', 'twety.jpg', 'twetty '),
(36, 6, 'Mickey Cake', 5000, 'Mickey mouse cut-out cake(3kg)', 'f4.jpg', 'mickey'),
(37, 6, 'Colourfull cake', 2500, 'Colourfull cake with chocolates(2kg)', 'f2.jpg', 'colourfull'),
(38, 6, 'Chota Bheem Face', 2500, 'chota bheem face cake (2kg)', 'chota.jpeg', 'Chota bheem'),
(39, 7, 'Chocolate Brownie', 70, 'Chocolate Brownie', 'brownie.jpeg', 'brownie'),
(40, 7, 'Donuts', 50, 'Donut', 'donut.jpeg', 'donut'),
(45, 7, 'Cake Pops', 30, 'Cake Pops', 'cake-pops.jpg', 'cake pops'),
(46, 7, 'Lava Cake Chocolate', 80, 'Chocolate lava cake', 'lava-cake.jpeg', 'chocolate lava'),
(47, 7, 'Chocolate Eclair', 60, 'Crunchy Bread with chocolate cream filled and coated with dark chocolate', 'eclair.jpg', 'Eclair'),
(48, 7, 'Chocolate Mouse', 50, 'Chocolate Cream', 'mouse.jpg', 'Chocolate Mouse'),
(49, 8, 'Multigrain Bread', 50, 'Multigrain Bread Loaf', 'multi-loaf.jpeg', 'Multigrain'),
(50, 8, 'Brown Bread Loaf', 40, 'Brown bread Loaf', 'brownbreads.jpeg', 'Brown Bread'),
(51, 8, 'Chocolate Chips Loaf ', 60, 'Chocolate Loaf With Choco chips', 'ccloaf.jpeg', 'Choco chips loaf'),
(52, 8, 'Marble Loaf', 60, 'Marble Loaf ', 'ccloaf.jpeg', 'Marble Loaf'),
(53, 8, 'Chocolate Chip Muffin', 50, 'Chocolate Chip muffin', 'chocolate-muffin.jpeg', 'Muffin'),
(54, 8, 'Cup Cakes', 100, 'Vanilla Cup cakes (6pcs)', 'muffin1.jpeg', 'cupcake'),
(55, 9, 'Chocolate Basket', 800, 'Assorted Rock Chocolate Basket', 'basket.jpeg', 'Chocoalte Basket'),
(56, 9, 'Chocolate Bouquet', 500, 'Assorted Chocolate Bouquet', 'bou.jpg', 'bouquet'),
(57, 9, 'Chocolate Celebration', 400, 'Assorted Chocolate Celebration Box', 'cele.jpg', 'Celebration'),
(58, 9, 'Handmade chocolates', 400, 'Handmade chocolates 16pcs', 'hand.jpg', 'handmade chocolates'),
(59, 9, 'Ferrerochar Chocolate bouquet', 600, 'Chocolate Bouquet', 'ferro.jpeg', 'bouquet');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'umesh', 'patel', 'umeshpatel00000@gmail.com', '71ce8bc67e2262b5e58d8b7ba3d987e7', '1234567890', 'abbc', 'xyz'),
(2, 'umesh', 'patel', 'abc@gmail.com', '71ce8bc67e2262b5e58d8b7ba3d987e7', '1223456789', 'abc', 'kbc'),
(3, 'umesh', 'patel', 'umeshpatel000@gmail.com', '71ce8bc67e2262b5e58d8b7ba3d987e7', '9619995362', 'xyz', 'xyz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `name_form`
--
ALTER TABLE `name_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `name_form`
--
ALTER TABLE `name_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
