-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 06:27 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garage`
--

-- --------------------------------------------------------

--
-- Table structure for table `billtable`
--

CREATE TABLE `billtable` (
  `Bill_No` int(11) NOT NULL,
  `Order_No` int(11) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Spare_Parts` varchar(100) NOT NULL,
  `Total_Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billtable`
--

INSERT INTO `billtable` (`Bill_No`, `Order_No`, `Mobile`, `Spare_Parts`, `Total_Price`) VALUES
(1, 1, 8180979368, 'Engine Oil , Gear Oil , Break wire', 1450),
(2, 2, 856454545, 'Engine Oil ', 1850),
(3, 4, 8180979368, 'Engine Oil ', 900),
(4, 4, 8180979368, 'Engine Oil ', 900),
(5, 1, 8180979368, 'Engine Oil ', 1450),
(6, 5, 8180979368, 'Engine Oil ', 1320),
(7, 3, 8180979368, 'Engine Oil ', 1450),
(8, 1, 8180979368, 'Engine Oil ', 1450),
(9, 2, 856454545, 'Engine Oil ', 1850),
(10, 6, 8180979368, 'Engine Oil ', 900),
(11, 7, 8180979368, 'Engine Oil ', 900),
(12, 2, 856454545, 'jhkjhk', 1850);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Joining_Date` varchar(30) NOT NULL,
  `Specialist` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_ID`, `Name`, `Email`, `Password`, `Mobile`, `Joining_Date`, `Specialist`, `Address`) VALUES
(11, 'Sandesh Rathod', 'sd@gmail.com', 'sd1234', 965823542, '2019-03-02', 'Car', 'Kalika Nagar, Pachora'),
(12, 'Wasik shaikh', 'ws@gmail.com', 'ws1234', 852963852, '2019-03-14', 'BIke', 'jalgaon'),
(13, 'Devendra Lad', 'Dev@gmail.com', 'dev1234', 8529632114, '2019-03-31', 'Auto Rikshaw', 'Jalgoan'),
(15, 'Rohit Patil', 'rp@gmail.com', 'rp1234', 8569856525, '2019-03-16', 'Bike', 'Shivaji Nagar , Jalgoan');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` bigint(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `EDate` date NOT NULL,
  `ETime` varchar(100) NOT NULL,
  `VehicleType` varchar(100) NOT NULL,
  `VehicleNo` varchar(100) NOT NULL,
  `ServiceType` varchar(100) NOT NULL,
  `ServicingCharge` varchar(30) DEFAULT NULL,
  `PaymentStatus` varchar(30) NOT NULL,
  `OrderStatus` varchar(30) NOT NULL,
  `VehicleName` varchar(30) NOT NULL,
  `Machanical` varchar(30) NOT NULL,
  `AdditionInfo` varchar(1000) NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Id`, `Name`, `Email`, `Mobile`, `Address`, `EDate`, `ETime`, `VehicleType`, `VehicleNo`, `ServiceType`, `ServicingCharge`, `PaymentStatus`, `OrderStatus`, `VehicleName`, `Machanical`, `AdditionInfo`, `view`) VALUES
(1, 'Mohit', 'mkmohit368@gmail.com', 8180979368, 'DESHMUKHWADI , PACHORA', '2019-03-09', '12:00 PM - 3:00 PM', 'Bike', 'MH 20 WE 1234', 'Comprehensive Check-Up', '1100', 'Paid', 'Confirm', 'HERO Splendar 100', 'Wasik shaikh', 'hg', 1),
(2, 'Vishal', 'vishalpatil1497@gmail.com', 856454545, 'jalgoan', '2019-03-14', '12:00 PM - 3:00 PM', 'Car', 'MH 19 AB 3180', 'Standard service', '1500', 'Paid', 'Confirm', 'SUZUKI Baleno', 'Sandesh Rathod', 'jhk', 1),
(3, 'Mohit', 'mkmohit368@gmail.com', 8180979368, 'DESHMUKHWADI , PACHORA', '2019-03-09', '12:00 PM - 3:00 PM', 'Bike', 'MH 20 WE 1234', 'Comprehensive Check-Up', '1100', 'Paid', 'Confirm', 'YAMAHA Fz', 'Wasik shaikh', 'Please repair bike carefully... ', 1),
(4, 'Mohit', 'mkmohit368@gmail.com', 8180979368, 'DESHMUKHWADI , PACHORA', '2019-03-03', '12:00 PM - 3:00 PM', 'Bike', 'MH 20 WE 1234', 'Standard service', '550', 'Paid', 'Confirm', 'HERO Splendar 100', 'Wasik shaikh', 'gff', 1),
(5, 'Mohit', 'mkmohit368@gmail.com', 8180979368, 'DESHMUKHWADI , PACHORA', '2019-03-07', '3:00 PM - 6:00 PM', 'Auto Rikshaw', 'MH 20 WE 1234', 'Standard service', '970', 'Paid', 'Confirm', 'BAJAJ Teja Handy AUTO', 'Devendra Lad', 'kljlk', 1),
(6, 'Mohit', 'mkmohit368@gmail.com', 8180979368, 'DESHMUKHWADI , PACHORA', '2019-03-16', '12:00 PM - 3:00 PM', 'Bike', 'MH 19 DA 6471 ', 'Standard service', '550', 'Paid', 'Confirm', 'HERO Karizma ZMR', 'Rohit Patil', 'Please repair my bike .. handle lightly bend just check it and check engine oil.', 1),
(7, 'Mohit', 'mkmohit368@gmail.com', 8180979368, 'DESHMUKHWADI , PACHORA', '2019-04-21', '12:00 PM - 3:00 PM', 'Bike', 'MH 20 WE 1234', 'Standard service', '550', 'Paid', 'Confirm', 'Honda Shine', 'Rohit Patil', 'jhkh', 1),
(8, 'Mohit', 'mkmohit368@gmail.com', 8180979368, 'DESHMUKHWADI , PACHORA', '2019-07-13', '3:00 PM - 6:00 PM', 'Bike', 'MH 19 DA 1234', 'Standard service', '550', 'Pending', 'Pending', 'HERO Splendar 100', 'NULL', 'lkjakajlkjdf', 0),
(9, 'Mohit', 'mkmohit368@gmail.com', 8180979368, 'DESHMUKHWADI , PACHORA', '2019-10-26', '12:00 PM - 3:00 PM', 'Bike', 'MH 19 DA 1234', 'Standard service', '550', 'Pending', 'Pending', 'HERO Splendar 100', 'NULL', 'ihkjh', 0),
(10, 'pratik', 'p@gmail.com', 56585565565, 'DESHMUKHWADI , PACHORA', '2019-10-11', '12:00 PM - 3:00 PM', 'Car', 'MH 19 DA 1234', 'Standard service', '1500', 'Pending', 'Pending', 'SUZUKI Baleno', 'NULL', ';lk;ljljhkjh', 0),
(11, 'Mohit', 'mkmohit368@gmail.com', 8180979368, 'DESHMUKHWADI , PACHORA', '2019-12-06', '12:00 PM - 3:00 PM', 'Car', 'MH 20 CD 2525', 'Comprehensive Check-Up', '3450', 'Paid', 'Pending', '', 'NULL', 'wefd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Mobile` bigint(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `FirstName`, `LastName`, `Email`, `Password`, `Mobile`, `Address`, `City`, `State`) VALUES
(1, 'Mohit', 'Kushwah', 'mkmohit368@gmail.com', 'mk1234', 8180979368, 'DESHMUKHWADI , PACHORA', 'Jalgaon', 'Maharshtra'),
(2, 'Nikita', 'Wadhwa', 'nikitawadhwa99@gmail.com', 'niki1234', 8585858585, 'jalgoan', 'Jalgaon', 'Maharshtra'),
(3, 'Vishal', 'Patil', 'vishalpatil1497@gmail.com', 'vishal123', 856454545, 'jalgoan', 'Jalgaon', 'Maharshtra'),
(4, 'Admin', 'Master', 'Admin@gmail.com', 'admin1234', 8668519500, 'GHRIBM', 'Jalgaon', 'Maharshtra'),
(6, 'Rohit ', 'Patil', 'rp@gmail.com', 'rp1234', 545646546, 'adsfa', 'adsf', 'Uttar Pradesh'),
(7, 'Faizan ', 'Mohommad', 'faizan@gmail.com', 'f1234', 858585855, 'Reliance Petrol pump', 'Jalgaon', 'Maharshtra'),
(8, 'pratik', 'ahire', 'p@gmail.com', 'p1234', 56585565565, 'DESHMUKHWADI , PACHORA', 'Jalgaon', 'Maharshtra');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `Id` int(11) NOT NULL,
  `VehicleName` varchar(30) NOT NULL,
  `VehicleBrand` varchar(30) NOT NULL,
  `VehicleType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`Id`, `VehicleName`, `VehicleBrand`, `VehicleType`) VALUES
(1, 'Shine', 'Honda', 'Bike'),
(3, 'Splendar 100', 'HERO', 'Bike'),
(4, 'City', 'HONDA', 'Car'),
(5, 'Baleno', 'SUZUKI', 'Car'),
(6, 'Teja Handy AUTO', 'BAJAJ', 'Auto Rikshaw'),
(8, 'Ape Xtra Ld Diesel', 'PIAGGIO', 'Auto Rikshaw'),
(9, 'Fz', 'YAMAHA', 'Bike'),
(11, 'Vista', 'TATA', 'Car'),
(13, 'Swift Dzire', 'SUZUKI', 'Car'),
(15, 'Karizma ZMR', 'HERO', 'Bike'),
(17, 'R15', 'YAMAHA', 'Bike');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billtable`
--
ALTER TABLE `billtable`
  ADD PRIMARY KEY (`Bill_No`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billtable`
--
ALTER TABLE `billtable`
  MODIFY `Bill_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Emp_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
