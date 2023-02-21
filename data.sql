-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 21, 2023 at 07:21 PM
-- Server version: 8.0.32
-- PHP Version: 8.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capp 2`
--

-- --------------------------------------------------------

--
-- Table structure for table `account table`
--

CREATE TABLE `account table` (
  `Fname` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `accountID` int NOT NULL,
  `payment` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Delivery table`
--

CREATE TABLE `Delivery table` (
  `Fname` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(60) NOT NULL,
  `DeliveryID` int NOT NULL,
  `orderID` int NOT NULL,
  `payment` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Reservation table`
--

CREATE TABLE `Reservation table` (
  `Fname` varchar(60) NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `ReservationID` int NOT NULL,
  `schedule` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account table`
--
ALTER TABLE `account table`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `Delivery table`
--
ALTER TABLE `Delivery table`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `Reservation table`
--
ALTER TABLE `Reservation table`
  ADD PRIMARY KEY (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account table`
--
ALTER TABLE `account table`
  MODIFY `phone` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Delivery table`
--
ALTER TABLE `Delivery table`
  MODIFY `phone` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Reservation table`
--
ALTER TABLE `Reservation table`
  MODIFY `phone` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
