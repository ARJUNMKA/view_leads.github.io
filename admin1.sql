-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 11:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbproperties`
--

CREATE TABLE `tbproperties` (
  `id` int(50) NOT NULL,
  `uploaded_by` varchar(50) NOT NULL,
  `current_date1` date NOT NULL,
  `propertyname` varchar(50) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `expiry_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbproperties`
--

INSERT INTO `tbproperties` (`id`, `uploaded_by`, `current_date1`, `propertyname`, `property_type`, `location`, `contact_number`, `expiry_date`) VALUES
(12, 'admin', '2023-02-10', 'Thane', 'Residential', 'Thane', '8693018148', ''),
(13, 'admin', '2023-02-10', 'Thane', 'Residential', 'Thane', 'arjun', '2023-03-12'),
(14, 'Arjun', '2023-02-10', 'Tirumala', 'Residential', 'Mulund', '9137285779', '2023-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbregistration`
--

CREATE TABLE `tbregistration` (
  `id` int(11) NOT NULL,
  `registrationdate` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobilenumber` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbregistration`
--

INSERT INTO `tbregistration` (`id`, `registrationdate`, `username`, `password`, `usertype`, `email`, `mobilenumber`, `address`) VALUES
(1, '', 'Arjun', '12345', 'admin', 'arjunvarma613@gmail.com', '8693018148', 'shree nagar'),
(2, '04/02/2023', 'arjun', '12345', 'admin', 'varmaarjun613@gmail.com', '8693018148', 'Thane West'),
(3, '04/02/2023', 'sarika', '12345', 'sarika', 'sariak943@gmail.com', '0000000000', 'Dombivali East'),
(4, '09/02/2023', 'admin', '123456', 'abc', 'kirtee@gmail.com', '9763074943', 'ggdytg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbproperties`
--
ALTER TABLE `tbproperties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbregistration`
--
ALTER TABLE `tbregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbproperties`
--
ALTER TABLE `tbproperties`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbregistration`
--
ALTER TABLE `tbregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
