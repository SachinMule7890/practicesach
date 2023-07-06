-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 11:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`) VALUES
('admin', 'password'),
('customer1', 'customer1'),
('customer2', 'customer2');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `Order_Date` date DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Owner` varchar(50) NOT NULL,
  `Items` char(50) NOT NULL,
  `Quantity` int(50) NOT NULL,
  `Weight` double NOT NULL,
  `Request_for_Shipment` char(50) NOT NULL,
  `Tracking_ID` char(50) NOT NULL,
  `Shipment_Size` int(50) NOT NULL,
  `Box_Count` int(50) NOT NULL,
  `Specification` char(50) NOT NULL,
  `Checklist_Quantity` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Order_Date`, `username`, `Company`, `Owner`, `Items`, `Quantity`, `Weight`, `Request_for_Shipment`, `Tracking_ID`, `Shipment_Size`, `Box_Count`, `Specification`, `Checklist_Quantity`) VALUES
('2023-07-07', '', 'Student  ', 'sachin', 'phone', 10, 5.5, 'sm', 'sachin10', 45, 12, 'sm', 'sp'),
('2023-07-06', 'customer1', 'Student  ', 'sachin', 'phone', 5, 50, '10', 'sachin10', 45, 5, 'sm', 'sp'),
('2023-07-06', 'customer1', 'dsv ', 'sdv', 'phone', 4, 60, '10', 'sachin10', 45, 6, 'sm', 'dsv'),
('0000-00-00', 'customer1', 'anil ', 'sachin', 'phone', 21, 2.3, '10', 'sachin10', 45, 56, 'sm', 'sp'),
('2023-07-06', 'customer2', 'Anil ', 'anil1', 'phone', 41, 22.3, 'drg', 'srts45', 78, 54, 'Ag', 'agp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
