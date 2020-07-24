-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 03:56 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `breed`
--

CREATE TABLE `breed` (
  `id` int(11) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `origin` varchar(100) NOT NULL,
  `benefit` varchar(100) NOT NULL,
  `cons` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `breed`
--

INSERT INTO `breed` (`id`, `breed`, `origin`, `benefit`, `cons`) VALUES
(1, 'Shiba Inu', 'Japanese', 'Independent, Clean, Smart', 'Strong Willed, Stubborn, Drama Queen'),
(2, 'Toy Poodle', 'Germany', 'Adaptable, Friendly, Intelligent', 'Bad Guard, Grooming, Noise'),
(3, 'Husky', 'Siberian', 'Lovely, Playful, Independant', 'Stubborn, Destroyer, Bad Guard'),
(4, 'Golden Retriever', 'Scotland', 'Intelligent, Playful, Sweet', 'Big Size, Holy Shed, Cannot Alone'),
(5, 'Corgi', 'Pembrokeshire', 'Companionship, Smart, Cute Look', 'Quality Food, Holy Shed, Noisy'),
(6, 'German Shepherd', 'Germany', 'Good Guard, Loyal, Intelligent', 'Health Problem, Big Size, Cannot Alone'),
(7, 'Pomeranian', 'Germany', 'Nice Look, Small Size, Trainable', 'Bad Guard, Health Issue, Cannot Alone'),
(8, 'Beagle', 'United Kingdom', 'Playful, Love People, Adorable', 'Noisy, Fur Problem, Cannot Alone'),
(9, 'Rottweiler', 'Germany', 'Good Guard, Long Lifespan, Trainable', 'Health Issue, Time Spend, Expensive'),
(11, 'poodle', 'germany', 'talent', 'lousy');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `phoneNumber` int(20) NOT NULL,
  `problem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `firstName`, `lastName`, `emailAddress`, `phoneNumber`, `problem`) VALUES
(1, 'Lim', 'Chee Keong', 'cheekeong@gmail.com', 1121221232, 'Hi, there are a stray dog near Paya Terubong which need helps. Can contact me for further information. Thanks'),
(2, 'ali', 'ong', 'ali@gmail.com', 1121223444, 'There is a stray cat at air itam . Contact Me for further information'),
(3, 'ahmad', 'ong', 'a@gmail.com', 1121232443, 'Dog in air itam, information call me.'),
(4, 'ah', 'kau', 'ahkau@gmail.com', 1233321232, 'Jelutong stray dog, call me if need.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'cheelam', 'cheelam@gmail.com', 'b4f8651091f4439ff969a53b177f75dc'),
(2, 'ali', 'ong', '86318e52f5ed4801abe1d13d509443de'),
(3, 'ahmad', 'a@gmail.com', '0cc175b9c0f1b6a831c399e269772661'),
(4, 'kau', 'kau@gmail.com', 'c4efdd2e1da74076e57f58f8d4b35667');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breed`
--
ALTER TABLE `breed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
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
-- AUTO_INCREMENT for table `breed`
--
ALTER TABLE `breed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
