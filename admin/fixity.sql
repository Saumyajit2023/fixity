-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 08:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fixity`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `is_active` int(11) NOT NULL COMMENT '0-de-active , 1 - active',
  `created_dt` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_deleted` int(11) NOT NULL DEFAULT 0 COMMENT '0-not deleted,1-deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `title`, `description`, `is_active`, `created_dt`, `is_deleted`) VALUES
(3, 'demo', 'demo', 1, '2023-04-15 19:49:12', 0),
(4, 'demo', 'demo details', 1, '2023-04-15 19:54:21', 0),
(5, 'demo', 'demo details demo', 1, '2023-04-15 19:55:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `url` varchar(1500) NOT NULL,
  `is_active` int(1) NOT NULL COMMENT '0-De-active,1-Active',
  `created_dt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_dt` timestamp NULL DEFAULT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT 0 COMMENT '0-not deleted,1-deleted',
  `created_by` int(1) NOT NULL,
  `modified_by` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `image_name`, `url`, `is_active`, `created_dt`, `updated_dt`, `is_deleted`, `created_by`, `modified_by`) VALUES
(15, 'download.jpg', '', 1, '2023-04-15 18:08:37', NULL, 0, 1, 0),
(16, 'demo1.jpg', '', 1, '2023-04-15 18:08:48', NULL, 0, 1, 0),
(17, 'download.jpg', '', 1, '2023-04-15 18:09:02', NULL, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_dt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `url`, `is_active`, `parent_id`, `created_dt`) VALUES
(1, 'Dashboard', 'dashboard', 1, 0, '2023-04-16 00:23:23'),
(2, 'Home', 'home', 1, 0, '2023-04-15 23:16:32'),
(3, 'Career', 'career', 1, 0, '2023-04-15 23:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_dt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_dt` timestamp NULL DEFAULT NULL,
  `lastlogin` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `image`, `created_dt`, `updated_dt`, `lastlogin`) VALUES
(1, 'demo@gmail.com', 'e14c05f0dc27e6be1fc127abaf474a59', 'demo1.jpg', '2023-04-15 22:55:29', NULL, '2023-04-15 19:15:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
