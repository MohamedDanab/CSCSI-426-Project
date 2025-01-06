-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2025 at 09:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_admin`
--

CREATE TABLE `add_admin` (
  `id` int(11) NOT NULL,
  `db_FullName` varchar(50) NOT NULL,
  `db_email` varchar(50) NOT NULL,
  `db_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_admin`
--

INSERT INTO `add_admin` (`id`, `db_FullName`, `db_email`, `db_password`) VALUES
(1, 'Mohamed Danab', 'mohamed@gmail.com', '123456'),
(2, 'Hamza Saadieh', 'hamza@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `db_car_model` varchar(50) NOT NULL,
  `db_car_brand` varchar(50) NOT NULL,
  `db_purchase_price` varchar(20) NOT NULL,
  `db_car_price` varchar(20) NOT NULL,
  `db_car_color` varchar(15) NOT NULL,
  `db_car_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `db_car_model`, `db_car_brand`, `db_purchase_price`, `db_car_price`, `db_car_color`, `db_car_status`) VALUES
(1, '2024', 'Toyota', '50000', '55000', 'White', 'Available'),
(5, '2024', 'BMW', '50000', '60000', 'White', 'Sold'),
(6, 'Chevrolet', '2024', '80000', '100000', 'Black', 'Available'),
(7, 'Dodge', '2024', '35000', '50000', 'Gold', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `car_images`
--

CREATE TABLE `car_images` (
  `car_id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_images`
--

INSERT INTO `car_images` (`car_id`, `img`) VALUES
(1, 'toyota.jpeg'),
(5, 'bmw.jpg'),
(6, 'chevrolet.webp'),
(7, 'Dodge.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `db_feedback_nb` int(11) NOT NULL,
  `db_name` varchar(50) NOT NULL,
  `db_email` varchar(50) NOT NULL,
  `db_feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`db_feedback_nb`, `db_name`, `db_email`, `db_feedback`) VALUES
(3, 'mohamed', 'm@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `db_message_nb` int(11) NOT NULL,
  `db_name` varchar(60) NOT NULL,
  `db_email` varchar(50) NOT NULL,
  `db_message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`db_message_nb`, `db_name`, `db_email`, `db_message`) VALUES
(1, 'Mohamed', 'mohamed@gmail.com', 'Test'),
(2, 'Mohamed', 'mohamed2@gmail.com', 'Test2'),
(3, 'mhmd', 'test3@gmail.com', 'test3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_admin`
--
ALTER TABLE `add_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_images`
--
ALTER TABLE `car_images`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`db_feedback_nb`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`db_message_nb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_admin`
--
ALTER TABLE `add_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `car_images`
--
ALTER TABLE `car_images`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `db_feedback_nb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `db_message_nb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
