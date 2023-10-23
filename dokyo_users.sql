-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 07:41 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activ_table`
--

INSERT INTO `activ_table` (`id`, `title`, `date`, `time`, `location`, `ootd`, `status`, `remarks`) VALUES
(1, 'hello', '2023-10-21', '03:20:00', 'talamban', 'SININA', 'pending', ''),
(2, 'kaon2x', '2023-10-27', '15:27:00', 'Lapulapu', 't-shirt and short', 'Done', ''),
(65, 'Push Ups', '2023-11-09', '11:47:00', 'Elizabeth Place', 't-shirt and short', 'pending', '');

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
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `gender`, `role`) VALUES
(1, 'aldrin', 'aldrin@gmail.com', '123', 'male', 'admin'),
(2, 'mama', 'mama@gmail.com', '123', 'female', 'user'),
(3, 'akoa', 'taburada@gmail.com', '123', 'male', 'user'),
(4, 'christian', 'christian@gmail.com', '1234', 'male', 'user'),
(5, 'Lovelie', 'lovelie@gmail.com', '123', 'female', 'user'),
(6, 'marvs', 'marvs@gmail.com', '123', 'male', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activ_table`
--
ALTER TABLE `activ_table`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
