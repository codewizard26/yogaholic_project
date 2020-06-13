-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 11:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yoga`
--

-- --------------------------------------------------------

--
-- Table structure for table `yoga_blogs`
--

CREATE TABLE `yoga_blogs` (
  `id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `full_blog` longtext NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yoga_blogs`
--

INSERT INTO `yoga_blogs` (`id`, `title`, `full_blog`, `username`) VALUES
(1, 'garmi', 'bhut jada hi lag rhi\r\n', ''),
(2, 'klasdjaskldj', 'alskdjaslkdj', ''),
(3, '', '', 'check'),
(4, '', '', 'nik'),
(5, 'ndtrjbflkymblk', 'wnserkflnerklgnl', 'gjs'),
(7, 'ndtrjbflkymblk', 'wnserkflnerklgnl', 'gjs'),
(8, 'ndtrjbflkymblk', 'wnserkflnerklgnl', 'gjs'),
(9, 'ndtrjbflkymblk', 'wnserkflnerklgnl', 'gjs'),
(10, 'Chall Beyy', 'Haa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiivHaa BhaiiiiiiiHaa BhaiiiiiiiHaa BhaiiiiiiivHaa Bhaiiiiiii', 'gjs'),
(11, '1', '1', 'gjs'),
(12, 'Welcome', 'Normal', 'gjs');

-- --------------------------------------------------------

--
-- Table structure for table `yoga_contact`
--

CREATE TABLE `yoga_contact` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `yoga_login`
--

CREATE TABLE `yoga_login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yoga_login`
--

INSERT INTO `yoga_login` (`username`, `password`, `email`) VALUES
('gjs', '68695c48876f2cf695aa5c45dd40fb91912bb175', 'g@s.com'),
('n', '9f210bbd62dc30b7ba6fb21f85df5244526c4049', 'n@m.com'),
('test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@nikk.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yoga_blogs`
--
ALTER TABLE `yoga_blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username_2` (`username`);

--
-- Indexes for table `yoga_contact`
--
ALTER TABLE `yoga_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yoga_login`
--
ALTER TABLE `yoga_login`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yoga_blogs`
--
ALTER TABLE `yoga_blogs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `yoga_contact`
--
ALTER TABLE `yoga_contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
