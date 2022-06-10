-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2022 at 09:02 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cwmsqr`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `honorific` varchar(10) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `suffix` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_number` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `salt` varchar(100) DEFAULT NULL,
  `user_level` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `honorific`, `lastname`, `firstname`, `middlename`, `suffix`, `email`, `contact_number`, `password`, `salt`, `user_level`, `created_at`, `updated_at`) VALUES
(1, 'chrizien', '', 'Balidoy', 'Christian', 'Alonzo', '', 'redchristian20@gmail.com', '092845698771', '29b7f9c0ff2aa21b84e39267508cc391', 'c5628e48e1311b52b630f5f74e9ee853f8c7f323c2ed', 10, '2022-06-10 05:41:59', '2022-06-10 05:41:59'),
(16, 'zian', '', 'Gray', 'Red', 'Blue', '', 'gray123@gmail.com', '09124324321', '30677c19e74d1948e5959a2f8838eebd', '8bec40d667467f2cd30dfd7fc8db7081f7d9a81ef0d0', 0, '2022-06-10 05:57:24', '2022-06-10 05:57:24'),
(17, 'Adamoulis', '', 'Blanza', 'Adam', '', '', 'smurfing69@gmail.com', '2247032608', 'efe60cf33deed9a70140e64d1f05283a', '149611d1227fe2062d9face6ad1e89d5351371906b3b', 10, '2022-06-10 06:00:25', '2022-06-10 06:00:25'),
(18, 'red', '', 'Red', 'Christian', '', '', 'red123@gmail.com', '092845698771', '773ce36fe3772ff22a19eff5f42e6864', 'd7b96886345f46d8bf65b4be35fb53b0d09c3f9d1280', 0, '2022-06-10 06:01:40', '2022-06-10 06:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `id` int(11) NOT NULL,
  `workshop_name` varchar(100) DEFAULT NULL,
  `workshop_description` varchar(500) DEFAULT NULL,
  `venue` varchar(500) DEFAULT NULL,
  `workshop_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `workshop_name`, `workshop_description`, `venue`, `workshop_date`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1, 'Techno101', 'Design etc.', 'UC Legarda', '2022-06-10', '15:35:00', '17:35:00', '2022-06-10 07:35:07', '2022-06-10 07:35:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
