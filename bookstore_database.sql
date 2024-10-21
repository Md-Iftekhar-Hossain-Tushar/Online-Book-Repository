-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 03:14 PM
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
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_book`
--

CREATE TABLE `add_book` (
  `book_id` int(10) NOT NULL,
  `book_title` varchar(500) NOT NULL,
  `book_writer` varchar(100) NOT NULL,
  `book_price` int(5) NOT NULL,
  `book_quantity` int(11) NOT NULL,
  `book_description` varchar(1000) NOT NULL,
  `book_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_book`
--

INSERT INTO `add_book` (`book_id`, `book_title`, `book_writer`, `book_price`, `book_quantity`, `book_description`, `book_image`) VALUES
(21, 'C Programming', 'E balaguruswami', 100, 35, 'programming book', 'books_image/imgrok0602_9612.gif'),
(23, 'algo', 'E balaguruswami', 475, 1, 'fgfhjuhopgffdfg', 'books_image/imgrok0602_9612.gif');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `book_id` int(20) NOT NULL,
  `book_title` varchar(200) NOT NULL,
  `q_books` int(2) NOT NULL,
  `t_amount` int(6) NOT NULL,
  `account_type` varchar(100) NOT NULL,
  `a_number` int(10) NOT NULL,
  `t_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `name`, `contact`, `email`, `address`, `book_id`, `book_title`, `q_books`, `t_amount`, `account_type`, `a_number`, `t_id`) VALUES
(61, 'tushar', 153815222, 'mdihtushar@gmail.com', 'tkg', 4, 'C Programming', 3, 500, 'bKash', 2147483647, '7857887878'),
(62, 'utsho', 1710255560, 'utsho@gmail.com', 'rangpur\r\n', 1, 'c++', 1, 500, 'bKash', 1710244420, '7857887878dd'),
(63, 'tushark', 153815222, 'mdihtushar@gmail.com', 'sdfghhjgg', 1, 'C Programming', 11, 345654, 'bKash', 2147483647, '7857887878d');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_password` varchar(20) NOT NULL DEFAULT 'password',
  `permission` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`u_name`, `u_email`, `u_password`, `permission`) VALUES
('abida', 'abida@gmail.com', 'abida', ''),
('tania', 'tania@gmail.com', 'tania', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_book`
--
ALTER TABLE `add_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`u_email`),
  ADD UNIQUE KEY `u_password` (`u_password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_book`
--
ALTER TABLE `add_book`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
