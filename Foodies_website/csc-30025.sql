-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 01:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csc-30025`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` varchar(5) NOT NULL,
  `CategoryName` varchar(255) DEFAULT NULL,
  `CategoryImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`, `CategoryImage`) VALUES
('1', 'Burger', NULL),
('2', 'Sandwich', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `EmailID` varchar(255) NOT NULL,
  `First_name` varchar(255) DEFAULT NULL,
  `Last_name` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`EmailID`, `First_name`, `Last_name`, `Phone`, `Password`) VALUES
('', '', '', 'admin', '1234'),
('aaa@sss.com', 'sadfsadf', 'dasdasd', '2121212121', '123'),
('admin', 'asdasd', 'sadasdsd', '1231233123', '1234'),
('asa@asd.com', 'afsafsaf', 'agsagsa', '3213123121', '123'),
('asd@gmail.com', '', '', '', 'qwer'),
('asda@gmail.com', '', '', '', 'fasdyhfga'),
('awa099@gmail.com', '', '', '', 'pass'),
('awa@gmail.com', '', '', '', '1234wsqdfwf'),
('awaasdasdasiaz099@gmail.com', '', '', '', '1234saf'),
('cust1', 'Elvin', 'Vincent', '0712345678', 'password1'),
('Cust2', 'Vincent', 'Elvin', '07234567891', 'password2'),
('qwe@asd.com', '', '', '3131313131', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `foodready`
--

CREATE TABLE `foodready` (
  `foodID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_options`
--

CREATE TABLE `menu_options` (
  `FoodID` varchar(5) NOT NULL,
  `FoodName` varchar(255) DEFAULT NULL,
  `FoodPrice` float DEFAULT NULL,
  `CategoryID` varchar(5) DEFAULT NULL,
  `FoodImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_options`
--

INSERT INTO `menu_options` (`FoodID`, `FoodName`, `FoodPrice`, `CategoryID`, `FoodImage`) VALUES
('1', 'Chicken Burger', 7.5, '1', 'ChickenBurger.png'),
('2', 'Beef Burger', 7.5, '1', 'BeefBurger.png'),
('3', 'Fish Burger', 5, '1', 'FishBurger.png'),
('4', 'Chicken Sandwich', 7, '2', 'ChickenSandwich.png'),
('5', 'Falafel', 7.5, '2', 'Falafel.png'),
('6', 'BBQ Sandwich', 6, '2', 'BBQSandwich.png'),
('7', 'Fish Sandwich', 7, '2', 'FishSandwich.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` varchar(255) NOT NULL,
  `EmailID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_information`
--

CREATE TABLE `order_information` (
  `OrderID` varchar(255) DEFAULT NULL,
  `FoodID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`EmailID`);

--
-- Indexes for table `menu_options`
--
ALTER TABLE `menu_options`
  ADD PRIMARY KEY (`FoodID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
