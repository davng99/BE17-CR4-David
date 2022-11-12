-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 10:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be17_cr4_david_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be17_cr4_david_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be17_cr4_david_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `ISBN_code` varchar(13) DEFAULT NULL,
  `short_description` varchar(50) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `author_first_name` varchar(20) DEFAULT NULL,
  `author_last_name` varchar(20) DEFAULT NULL,
  `publisher_name` varchar(20) DEFAULT NULL,
  `publisher_address` varchar(30) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `ISBN_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(22, 'Avengers Endgame', '636e2dc0b25c5.jpg', '5378920543245', 'Marvel Superhero Movie', 'DVD', 'Kevin', 'Feige', 'Marvel', 'Burbank', '2019-09-05', 'Available'),
(23, 'Diary of a whimpy kid', '636e2eacb6879.png', '9200145733219', 'Story about a whimpy kid', 'Book', 'Jeff', 'Kinney', 'Amulet Books', '115 West 18th Street', '2007-04-01', 'Reserved'),
(24, 'Spongebob Squarepants', '636e2f3b3cfda.jpg', '8629306519038', 'Spongebob ', 'DVD', 'Steffen', 'Hillenburg', 'Nickelodeon', 'Colombus 32', '2006-06-02', 'Available'),
(25, 'Der Buchspazierer', '636e2fd7c4ebd.png', '8876236800311', 'Roman', 'Book', 'Carsten', 'Henn', 'Spiegel', 'Landgutgasse 25', '2020-04-21', 'Available'),
(26, 'Windows 10 Pro', '636e30abaa852.jpg', '3574421446432', 'Windows 10 Pro Installation', 'DVD', 'Windows', 'Windows', 'Microsoft', 'One Microsoft Way', '2018-10-10', 'Available'),
(27, 'Game of Thrones', '636e3143b33fe.jpeg', '3602843764377', 'A Feast for Crows', 'Book', 'George R.R', 'Martin', 'Bantam Books', 'New York 1996', '2005-10-07', 'Available'),
(28, 'Harry Potter and the deathly Hallows', '636e31b99b198.jpg', '7980234578932', 'The breathtaking series finale', 'Book', 'J.K.', 'Rowling', 'Scholastic', '557 Broadway', '2007-07-21', 'Reserved'),
(29, 'Learn PHP Advance', '636e326d112d1.jpg', '7937454421003', 'CD-PHP-Learning', 'CD', 'Satori', 'Consulting', 'CodeQuickly', 'Shift street 33', '2010-03-02', 'Available'),
(30, 'Learn JavaScript Quickly', '636e338f2979f.jpg', '1235444428733', 'Beginners guide to learning JavaScript', 'DVD', 'CodeQuickly', 'CodeQuickly', 'CodeQuickly', 'Teststraße 110', '2020-11-11', 'Available'),
(31, 'Im Westen Nichts Neues', '636e34f50da04.jpg', '2345978023722', 'World War I', 'DVD', 'Lew', 'Ayres', 'Universal', 'Universal street 228', '2005-02-07', 'Reserved'),
(33, 'Dr. Strange in the Multiverse of Madness', '636e8125c4199.jpg', '3154345999224', 'Test', 'DVD', 'CodeQuickly', 'CodeQuickly', 'Marvel', 'Burbank', '2022-07-11', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ISBN_code` (`ISBN_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
