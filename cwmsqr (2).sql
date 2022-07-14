-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2022 at 06:09 AM
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
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `workshop_id` varchar(100) NOT NULL,
  `participant_qr` text NOT NULL,
  `participant_code` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `phone`, `email`, `workshop_id`, `participant_qr`, `participant_code`, `created_at`, `updated_at`) VALUES
(1, 'Christopher', 'Thompson', '919-902-9049', 'christoperthompson@gmail.com', '1', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://192.168.100.4/show_certificate/062cf889c33305&chco=black', '062cf889c33305', '2022-07-14 03:08:12', '2022-07-14 03:08:12'),
(2, 'Lynn', 'Madrid', '989-685-6300', 'lymmmadrid@gmail.com', '1', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://192.168.100.4/show_certificate/162cf889c33314&chco=black', '162cf889c33314', '2022-07-14 03:08:12', '2022-07-14 03:08:12'),
(3, 'Donald', 'Wheeler', '252-315-7813', 'donaldwheeler@gmail.com', '1', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://192.168.100.4/show_certificate/262cf889c33318&chco=black', '262cf889c33318', '2022-07-14 03:08:12', '2022-07-14 03:08:12'),
(4, 'Margaret', 'Washington', '936-854-0533', 'margaretwashington@gmail.com', '1', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://192.168.100.4/show_certificate/362cf889c3331c&chco=black', '362cf889c3331c', '2022-07-14 03:08:12', '2022-07-14 03:08:12'),
(5, 'William', 'Olivarez', '856-855-0612', 'williamolivaraz@gmail.com', '1', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://192.168.100.4/show_certificate/462cf889c3331f&chco=black', '462cf889c3331f', '2022-07-14 03:08:12', '2022-07-14 03:08:12'),
(6, 'Larry', 'Henson', '515-314-7896', 'larryhenson@gmail.com', '1', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://192.168.100.4/show_certificate/562cf889c33322&chco=black', '562cf889c33322', '2022-07-14 03:08:12', '2022-07-14 03:08:12'),
(7, 'Ladonna', 'Hughes', '601-637-7771', 'ladonnahugjes@gmail.com', '1', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://192.168.100.4/show_certificate/662cf889c33325&chco=black', '662cf889c33325', '2022-07-14 03:08:12', '2022-07-14 03:08:12'),
(8, 'Joshua', 'Tinker', '757-413-7159', 'joshuatinker@gmail.com', '1', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://192.168.100.4/show_certificate/762cf889c33328&chco=black', '762cf889c33328', '2022-07-14 03:08:12', '2022-07-14 03:08:12'),
(9, 'Damian', 'Salley', '330-302-5687', 'damiansalley@gmail.com', '1', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://192.168.100.4/show_certificate/862cf889c3332a&chco=black', '862cf889c3332a', '2022-07-14 03:08:12', '2022-07-14 03:08:12'),
(10, 'Joyce', 'Hollins', '412-374-0949', 'joycehollins@gmail.com', '1', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://192.168.100.4/show_certificate/962cf889c3332e&chco=black', '962cf889c3332e', '2022-07-14 03:08:12', '2022-07-14 03:08:12'),
(11, 'Jan', 'Schuman', '775-243-7818', 'janschuman@gmail.com', '1', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://192.168.100.4/show_certificate/1062cf889c33331&chco=black', '1062cf889c33331', '2022-07-14 03:08:12', '2022-07-14 03:08:12'),
(12, 'Millie', 'Richards', '802-694-4273', 'millierichards@gmail.com', '1', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://192.168.100.4/show_certificate/1162cf889c33334&chco=black', '1162cf889c33334', '2022-07-14 03:08:12', '2022-07-14 03:08:12'),
(13, 'Mary', 'Navarrete', '601-986-1079', 'marynavarrete@gmail.com', '1', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://192.168.100.4/show_certificate/1262cf889c33337&chco=black', '1262cf889c33337', '2022-07-14 03:08:12', '2022-07-14 03:08:12'),
(14, 'Maggie', 'Noble', '432-332-0287', 'maggienoble@gmail.com', '1', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://192.168.100.4/show_certificate/1362cf889c3333e&chco=black', '1362cf889c3333e', '2022-07-14 03:08:12', '2022-07-14 03:08:12'),
(15, 'Doris', 'Evans', '803-744-0440', 'dorisevans@gmail.com', '1', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://192.168.100.4/show_certificate/1462cf889c33342&chco=black', '1462cf889c33342', '2022-07-14 03:08:12', '2022-07-14 03:08:12');

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
(1, 'SEC Info Session: Detection and Avoidance of Investment Scams', 'Get to know more about the detection and avoidance of investment scams through this webinar learning session in partnership with SEC-Baguio Extension, hosted by UC-InTTO.', 'Atty. Regina May Cajucom - Deguzman', 'June 9, 2022', '10:00 AM - 12:00 (PST)', 'Zoom', 'bg-121.png', 'w62cf887b86f22', 'https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=http://192.168.100.4/show_workshop_by_link/w62cf887b86f22&chco=black', '2022-07-14 03:07:39', '2022-07-14 03:07:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
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
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
