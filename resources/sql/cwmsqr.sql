-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2022 at 12:45 AM
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
-- Table structure for table `attendees`
--

CREATE TABLE `attendees` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `workshop_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `workshop_id` int(11) NOT NULL,
  `attendee_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `certificate_qr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `id` int(11) NOT NULL,
  `workshop_name` varchar(200) DEFAULT NULL,
  `workshop_description` text,
  `workshop_speaker` varchar(200) NOT NULL,
  `workshop_date` varchar(200) NOT NULL,
  `workshop_time` varchar(200) NOT NULL,
  `workshop_venue` text NOT NULL,
  `workshop_poster_link` text NOT NULL,
  `workshop_link` text NOT NULL,
  `workshop_qr_link` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `workshop_name`, `workshop_description`, `workshop_speaker`, `workshop_date`, `workshop_time`, `workshop_venue`, `workshop_poster_link`, `workshop_link`, `workshop_qr_link`, `created_at`, `updated_at`) VALUES
(1, 'Workshop 1', 'D1', 'Red', '12', '13', 'UC', '291697549_5617466928287561_6652050240144332170_n39.jpg', 'w62c3fd3accc01', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://localhost/show_workshop/w62c3fd3accc01&chco=black', '2022-07-05 08:58:34', '2022-07-05 08:58:34'),
(2, 'Workshop2', 'asdasd', 'Red', '12', '13', 'UC', '291697549_5617466928287561_6652050240144332170_n41.jpg', 'w62c41957d6ce3', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://localhost/show_workshop/w62c41957d6ce3&chco=black', '2022-07-05 10:58:31', '2022-07-05 10:58:31'),
(3, 'Workshop3', 'asdasdasd', 'Red', '12', '13', 'UC', '291697549_5617466928287561_6652050240144332170_n43.jpg', 'w62c53b23703d1', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://localhost/show_workshop/w62c53b23703d1&chco=black', '2022-07-06 07:34:59', '2022-07-06 07:34:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendees`
--
ALTER TABLE `attendees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendees`
--
ALTER TABLE `attendees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
