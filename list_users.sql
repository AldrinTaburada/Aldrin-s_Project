-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 04:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dokyo_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `activ_table`
--

CREATE TABLE `activ_table` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(50) NOT NULL,
  `ootd` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activ_table`
--

INSERT INTO `activ_table` (`id`, `title`, `date`, `time`, `location`, `ootd`, `status`, `remarks`) VALUES
(1, 'hello', '2023-10-21', '03:20:00', 'talamban', 'SININA', 'pending', ''),
(2, 'kaon2x', '2023-10-27', '15:27:00', 'Lapulapu', 't-shirt and short', 'Done', ''),
(65, 'Push Ups', '2023-11-09', '11:47:00', 'Elizabeth Place', 't-shirt and short', 'pending', ''),
(66, 'dstwetwetwtw', '2023-10-06', '09:17:00', 'cener', '45654', 'pending', ''),
(67, 'kaon', '2023-11-09', '23:26:00', 'usc', 'wa;a', 'pending', ''),
(68, 'wa', '2023-11-03', '11:29:00', 'moa', 'wa;a', 'pending', ''),
(69, 'wa', '2023-11-04', '11:32:00', 'moa', 'Uniform Attire', 'pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `announcement` varchar(500) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `announcement`, `createdAt`) VALUES
(7, 'no class', '2023-11-07 03:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` enum('active','de-active','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `gender`, `role`, `status`) VALUES
(1, 'aldrin', 'aldrin@gmail.com', '123', 'male', 'admin', 'active'),
(2, 'mama', 'mama@gmail.com', '123', 'female', 'user', 'de-active'),
(3, 'akoa', 'taburada@gmail.com', '123', 'male', 'user', 'active'),
(4, 'christian', 'christian@gmail.com', '1234', 'male', 'user', 'active'),
(5, 'Lovelie', 'lovelie@gmail.com', '123', 'female', 'user', 'active'),
(6, 'marvs', 'marvs@gmail.com', '123', 'male', 'user', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activ_table`
--
ALTER TABLE `activ_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activ_table`
--
ALTER TABLE `activ_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
