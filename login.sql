-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 11:45 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(200) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `Developers` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `code`, `genre`, `rating`, `Developers`, `price`, `image`) VALUES
(1, 'Far Cry 5', 'far', 'Free roam', 4, 'Ubisoft', 2999, 'product-images/far.png'),
(2, 'GTA 5', 'gta', 'Adventure', 5, 'Rockstar Games', 2099, 'product-images/gta.png'),
(3, 'Red Dead Redemption 2', 'red2', 'Adventure', 5, 'Rockstar Games', 3199, 'product-images/red.png'),
(4, 'Resident Evil: Village', 'res', 'Horror', 5, 'Capcom', 2499, 'product-images/res.png'),
(5, 'PUBG', 'pubg', 'Shooting', 4, 'Tencent Games', 499, 'product-images/pubg.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `game` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `genre`, `game`) VALUES
(1, '', '', 'navin@gmail.com', 'navin', 0, '', ''),
(460200, 'abc', 'bfc', 'abc@gmail.com', 'aaa', 766678543, 'survival', 'gta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=460201;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
