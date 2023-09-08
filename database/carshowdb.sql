-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 05:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carshowdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'AbhiGokul', 'AbhiGokul@123');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `chassis_no` int(11) NOT NULL,
  `model_no` int(11) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`chassis_no`, `model_no`, `color`) VALUES
(1000011, 100, 'Red'),
(1000012, 100, 'Blue'),
(1000013, 101, 'Black'),
(1000014, 101, 'Blue'),
(1000015, 102, 'silver'),
(1000016, 102, 'White'),
(1000017, 103, 'silver'),
(1000018, 103, 'White'),
(1000019, 104, 'Red'),
(1000020, 104, 'White'),
(1000021, 105, 'Red'),
(1000022, 105, 'White'),
(1000023, 106, 'White'),
(1000024, 106, 'Black'),
(1000026, 107, 'Black'),
(1000027, 108, 'White'),
(1000028, 108, 'Blue'),
(1000029, 109, 'White'),
(1000030, 109, 'Black'),
(1000031, 110, 'silver'),
(1000032, 110, 'red'),
(1000033, 111, 'Red'),
(1000034, 111, 'Blue'),
(1000035, 112, 'Blue'),
(1000036, 112, 'White'),
(1000037, 113, 'White'),
(1000038, 113, 'Black'),
(1000039, 114, 'Red'),
(1000040, 114, 'Black'),
(1000041, 115, 'Red'),
(1000042, 115, 'white'),
(1000043, 116, 'Black'),
(1000044, 116, 'white'),
(1000045, 117, 'White'),
(1000046, 117, 'Black'),
(1000047, 118, 'white'),
(1000048, 118, 'Black'),
(1000049, 119, 'Black'),
(1000050, 119, 'Red'),
(1000051, 120, 'Red'),
(1000052, 120, 'Blue'),
(1000053, 121, 'White'),
(1000054, 121, 'Blue'),
(1000055, 122, 'White'),
(1000056, 122, 'Black'),
(1000057, 107, 'White');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` double NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `name`, `email`, `password`, `phone`, `address`) VALUES
(1, 'Akshay', 'Akshay56@gmail.com', '5656', 9108161056, 'Mysore');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `mf_id` int(11) NOT NULL,
  `mf_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`mf_id`, `mf_name`) VALUES
(1001, 'BMW'),
(1002, 'Mercedes Benz'),
(1003, 'Audi'),
(1004, 'Mahindra'),
(1005, 'KIA'),
(1006, 'Renault');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `model_no` int(11) NOT NULL,
  `model_name` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `mf_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`model_no`, `model_name`, `year`, `mf_id`) VALUES
(100, 'BMW3series', 2019, 1001),
(101, 'BMWX3', 2016, 1001),
(102, 'BMWi4', 2018, 1001),
(103, 'BMW7series', 2020, 1001),
(104, 'Mercedes_C_Class', 2020, 1002),
(105, 'Mercedes_GLA', 2019, 1002),
(106, 'Mercedes_E_Class', 2018, 1002),
(107, 'Mercedes_S_Class', 2021, 1002),
(108, 'Audi_A6', 2020, 1003),
(109, 'Audi_A8_L', 2021, 1003),
(110, 'Audi_Etron_GT', 2021, 1003),
(111, 'Audi_S5_Sportback', 2022, 1003),
(112, 'XUV700', 2022, 1004),
(113, 'Scorpio_S11', 2022, 1004),
(114, 'Thar', 2022, 1004),
(115, 'XUV500', 2019, 1004),
(116, 'Kia_Seltos', 2022, 1005),
(117, 'Kia_Carnival', 2022, 1005),
(118, 'Kia_Carens', 2021, 1005),
(119, 'Kia_Sonet', 2022, 1005),
(120, 'Kiger', 2022, 1006),
(121, 'Triber', 2020, 1006),
(122, 'Duster', 2020, 1006);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `model_no` int(11) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `model_no`, `order_date`) VALUES
(1, 1, 107, '2023-01-29 21:57:59');

--
-- Triggers `orders`
--
DELIMITER $$
CREATE TRIGGER `Transaction` BEFORE INSERT ON `orders` FOR EACH ROW BEGIN
	SET NEW.order_date = NOW();
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`chassis_no`),
  ADD KEY `model` (`model_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`mf_id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`model_no`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `chassis_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000058;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`model_no`) REFERENCES `model` (`model_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
