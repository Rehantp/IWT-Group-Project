-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 03:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `mid` int(11) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `m_Number` int(10) NOT NULL,
  `Messages` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `tel` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pw` varchar(20) NOT NULL,
  `image` varchar(250) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hid`, `name`, `address`, `tel`, `email`, `pw`, `image`, `Description`) VALUES
(1, 'Galadari', 'Colombo', 714444443, 'abc@gmail.com', '123', 'upload_image/hotel/628a3423c5ac51653224483.jpg', 'hdjhggjvjhk');

-- --------------------------------------------------------

--
-- Table structure for table `tour_driver`
--

CREATE TABLE `tour_driver` (
  `td_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `tel` int(10) NOT NULL,
  `veh_type` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pw` varchar(20) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_driver`
--

INSERT INTO `tour_driver` (`td_id`, `name`, `dob`, `tel`, `veh_type`, `email`, `pw`, `image`) VALUES
(0, 'Navam', '2022-05-11', 714444443, 'auto', 'sdc@gmail.com', '123asd', 'upload_image/tour_driver/628a33267cc7a1653224230.png');

-- --------------------------------------------------------

--
-- Table structure for table `traveler`
--

CREATE TABLE `traveler` (
  `t_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tel` int(10) NOT NULL,
  `email` char(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `travel_agent`
--

CREATE TABLE `travel_agent` (
  `ta_id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(250) CHARACTER SET latin1 NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel_agent`
--

INSERT INTO `travel_agent` (`ta_id`, `name`, `regno`, `tel`, `address`, `email`, `image`, `password`) VALUES
(3, 'Nevan', '0123456788', '0714444445', 'Polonnaruwa', 'abcd@gmail.com', 'upload_image/travel_agent/6288b87a519221653127290.png', '123asd'),
(4, 'Kamala', '0000000005', '0714444443', 'Maharagama', 'abc@gmail.com', 'upload_image/travel_agent/628a2b62422991653222242.jfif', '123asd'),
(5, 'Dulan', '0123456789', '0714444441', 'malabe', 'sdc@gmail.com', 'upload_image/travel_agent/6288badf7c90c1653127903.jpg', '123asd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `type`, `image`, `password`) VALUES
(2, 'Rehan', 'Athuorala', 'abcd@gmail.com', 'Type 1', 'upload_image/tour_guide/628a3172a1f031653223794.jpg', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `traveler`
--
ALTER TABLE `traveler`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `travel_agent`
--
ALTER TABLE `travel_agent`
  ADD PRIMARY KEY (`ta_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `traveler`
--
ALTER TABLE `traveler`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `travel_agent`
--
ALTER TABLE `travel_agent`
  MODIFY `ta_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
