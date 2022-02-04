-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 12:00 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `drink`
--

CREATE TABLE `drink` (
  `drink_id` int(12) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `drink_name` varchar(20) NOT NULL,
  `drink_stock` varchar(20) NOT NULL,
  `percent_alcohol` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `Category` varchar(20) NOT NULL,
  `Drink_Img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drink`
--

INSERT INTO `drink` (`drink_id`, `manager_id`, `drink_name`, `drink_stock`, `percent_alcohol`, `price`, `Category`, `Drink_Img`) VALUES
(1, 1, 'corona', '78', 4, 23, 'Beer', 'images/Corona.jpg'),
(7, 1, 'Jack daniels', '23', 69, 56, 'Whiskey', 'images/jack-daniels.jpg'),
(8, 1, 'Black Label', '125', 40, 124, 'Whiskey', 'images/Black Label.jpg'),
(9, 1, 'Skrewball', '50', 35, 200, 'Whiskey', 'images/Skrewball.jpg'),
(10, 1, 'Mozart', '250', 17, 67, 'Liqueur', 'images/Mozart.jpg'),
(11, 1, 'Sherry', '12', 15, 36, 'Liqueur', 'images/Sherry.jpg'),
(12, 1, 'Old Monk', '65', 42, 67, 'Vodka', 'images/Old-Monk.jpg'),
(13, 1, 'Van Gogh', '100', 40, 129, 'Vodka', 'images/Van Gogh.jpg'),
(14, 1, 'Russky Standart ', '275', 40, 85, 'Vodka', 'images/russian-standard.jpg'),
(15, 1, 'Dolf Fraise', '450', 18, 95, 'Liqueur', 'images/Dolfi.jpg'),
(16, 1, 'Kasteel ', '200', 11, 13, 'Beer', 'images/Kasteel.jpg'),
(17, 1, 'Guinness', '150', 4, 12, 'Beer', 'images/Guinness.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `manager_`
--

CREATE TABLE `manager_` (
  `manager_id` int(11) NOT NULL,
  `manager_name` varchar(20) NOT NULL,
  `manager_LastName` varchar(20) DEFAULT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager_`
--

INSERT INTO `manager_` (`manager_id`, `manager_name`, `manager_LastName`, `phone`, `password`, `email`) VALUES
(1, 'sharon', 'frank', '054-8798595', '123456789', 'sharon@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order_`
--

CREATE TABLE `order_` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `order_date` date NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_`
--

INSERT INTO `order_` (`order_id`, `user_id`, `quantity`, `order_date`, `price`) VALUES
(35, 9856, 1, '2022-01-24', 23),
(38, 9856, 56, '2022-01-12', 12),
(39, 9856, 56, '2022-01-12', 13),
(40, 9856, 1, '2022-01-24', 23),
(41, 9856, 1, '2022-01-24', 23);

-- --------------------------------------------------------

--
-- Table structure for table `order_drink`
--

CREATE TABLE `order_drink` (
  `drink_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_drink`
--

INSERT INTO `order_drink` (`drink_id`, `order_id`, `quantity`) VALUES
(1, 35, '1'),
(1, 40, '1'),
(1, 41, '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_`
--

CREATE TABLE `user_` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_LastName` varchar(20) DEFAULT NULL,
  `user_birthDay` date DEFAULT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_`
--

INSERT INTO `user_` (`user_id`, `user_name`, `user_LastName`, `user_birthDay`, `phone`, `password`, `email`) VALUES
(9856, 'ester', 'peretz', '2022-01-12', '05658086', '123456789', 'peretz398@gmail.com'),
(689857, 'ester', 'peretz', '2022-01-12', '05658086', '1234', 'peretz9865@gmail.com'),
(124587963, 'ester', 'peretz', '1999-01-20', '0536987452', '42563', 'peretz222@gmail.com'),
(158296354, 'ester', 'peretz', '1999-08-20', '0125896874', '456789', 'peretz555@gmail.com'),
(698547853, 'ester', 'peretz', '1999-08-20', '0598745268', '12345Peretz', 'peretz12345@gmail.co'),
(985674125, 'ester', 'peretz', '1999-01-11', '0536987452', '654654ghhgjh', 'sharon@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`drink_id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `manager_`
--
ALTER TABLE `manager_`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `order_`
--
ALTER TABLE `order_`
  ADD PRIMARY KEY (`order_id`) USING BTREE,
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_drink`
--
ALTER TABLE `order_drink`
  ADD PRIMARY KEY (`drink_id`,`order_id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `user_`
--
ALTER TABLE `user_`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drink`
--
ALTER TABLE `drink`
  MODIFY `drink_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1288;

--
-- AUTO_INCREMENT for table `order_`
--
ALTER TABLE `order_`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drink`
--
ALTER TABLE `drink`
  ADD CONSTRAINT `drink_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `manager_` (`manager_id`);

--
-- Constraints for table `order_`
--
ALTER TABLE `order_`
  ADD CONSTRAINT `order__ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_drink`
--
ALTER TABLE `order_drink`
  ADD CONSTRAINT `order_drink_idfk_2` FOREIGN KEY (`drink_id`) REFERENCES `drink` (`drink_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
