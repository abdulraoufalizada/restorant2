-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 06:49 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recip_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `c_name` varchar(64) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `c_name`, `image`) VALUES
(1, 'potato', 'img/'),
(19, 'seral', 'img/jpg5.jpg'),
(29, 'Rice', 'img/jpg3.jpg'),
(31, 'meet', 'img/jpg5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `fd_id` int(11) NOT NULL,
  `name` varchar(23) NOT NULL,
  `picture` varchar(32) DEFAULT NULL,
  `description` varchar(128) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `time_needed` int(11) DEFAULT NULL,
  `ranking` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`fd_id`, `name`, `picture`, `description`, `c_id`, `time_needed`, `ranking`) VALUES
(5, 'meat', '', 'Is a humorous food', 1, 40, 'Hard'),
(6, 'rice1', 'j', 'This is really good food', 1, 30, 'Hardd'),
(12, 'Ø¨Ø±Ù†Ø¬', 'img/jpg5.jpg', 'This is really good food', 1, 40, 'Hard'),
(23, 'Ù‚Ø§Ø¨Ù„ÛŒ', 'img/jpg2.jpg', 'This is really good food', 1, 40, 'Hard'),
(24, 'Ø¨Ø±Ù†Ø¬', 'img/jpg3.jpg', 'This is really good food', 1, 40, 'Hard'),
(25, 'Ø¢Ø´Ú©', 'img/jpg1.jpg', 'Ø¨Ø³ÛŒØ§Ø± ØºØ°Ø§ÛŒ Ø¹Ø§Ù„ÛŒ Ø§ÙØºØ§Ù†ÛŒ Ø§Ø³Øª', 1, 20, 'Hard');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(1, 'ali', '123');

-- --------------------------------------------------------

--
-- Table structure for table `requirment`
--

CREATE TABLE `requirment` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  `f_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirment`
--

INSERT INTO `requirment` (`id`, `name`, `description`, `f_id`) VALUES
(2, '2', 'ØªØ®Ù… Ù…Ø±Øº', 0),
(3, '3', 'qdqw', 0),
(5, '2', 'oil', 0),
(6, '1', 'meat', 1),
(9, '3', 'meat', 0),
(10, '5', 'bad food', 0),
(11, '1', 'oil', 0),
(13, '2', 'sss', 1),
(14, '1', 'suger', 5),
(15, '5', '', 1),
(16, '6', 'sss', 1),
(24, '2', 'qdqw', 5),
(25, 'num1:', 'Ø±ÙˆØºÙ†', 23),
(26, 'num2:', 'Ø³Ø¨Ø²ÛŒ', 23),
(27, 'num3:', 'Ù„ÙˆØ¨ÛŒØ§', 23),
(28, '33', 'qdqw', 6),
(29, 'num1', 'qwdqwo', 6),
(30, 'num1:', 'great food', 24),
(31, 'num2:', 'Ø±ÙˆØºÙ† Ùˆ Ù¾ÛŒØ§Ø² Ø²Ø±Ø¯ Ø´ÙˆØ¯', 24),
(32, 'num3:', 'Ø¨ÛŒØ§Ø¯ Ø¨Ø±Ø§ÛŒ Ù†ÛŒÙ… Ø³Ø§Ø¹Øª Ø¯ÛŒÚ¯ Ø±Ø§ Ø¨Ø®Ø§Ø± Ø¯Ù‡ÛŒÙ…', 24),
(33, 'num1:', 'Ø±ÙˆØºÙ† Ùˆ Ù¾ÛŒØ§Ø² Ø²Ø±Ø¯ Ø´ÙˆØ¯', 25),
(34, 'num2:', 'great food', 25),
(35, 'num1', 'great food', 12),
(36, 'num4', 'oil', 23);

-- --------------------------------------------------------

--
-- Table structure for table `step`
--

CREATE TABLE `step` (
  `id` int(11) NOT NULL,
  `s_name` varchar(32) DEFAULT NULL,
  `des_step` varchar(128) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `f_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `step`
--

INSERT INTO `step` (`id`, `s_name`, `des_step`, `image`, `f_id`) VALUES
(37, '1st', 'Ø±ÙˆØºÙ† Ùˆ Ù¾ÛŒØ§Ø² Ø²Ø±Ø¯ Ø´ÙˆØ¯', 'img/jpg3.jpg', 23),
(38, '2st', 'Ø¨ÛŒØ§Ø¯ Ø¨Ø±Ø§ÛŒ Ù†ÛŒÙ… Ø³Ø§Ø¹Øª Ø¯ÛŒÚ¯ Ø±Ø§ Ø¨Ø®Ø§Ø± Ø¯Ù‡ÛŒÙ…', 'img/jpg4.jpg', 23),
(39, '1st', 'oil', 'img/jpg5.jpg', 5),
(40, '1st', 'oil', 'img/jpg4.jpg', 6),
(41, '2st', 'great food', 'img/jpg3.jpg', 6),
(42, '1st', 'great food', 'img/jpg4.jpg', 25),
(43, '2st', 'Ø±ÙˆØºÙ† Ùˆ Ù¾ÛŒØ§Ø² Ø²Ø±Ø¯ Ø´ÙˆØ¯', 'img/jpg5.jpg', 25),
(44, '3st', 'Ø¨Ø§ÛŒØ¯ Ù¾ÛŒØ§Ø² Ø²Ø±Ø¯ Ø´ÙˆØ¯ Ùˆ Ø±ÙˆØºÙ† Ø§Ù†Ø¯Ø§Ø®ØªÙ‡ Ø´ÙˆØ¯', 'img/jpg3.jpg', 25),
(45, '2st', 'oil', 'img/jpg6.jpg', 5),
(46, '3st', 'oil', 'img/jpg1.jpg', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`fd_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirment`
--
ALTER TABLE `requirment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `step`
--
ALTER TABLE `step`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_id` (`f_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `fd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requirment`
--
ALTER TABLE `requirment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `step`
--
ALTER TABLE `step`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `step`
--
ALTER TABLE `step`
  ADD CONSTRAINT `step_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `food` (`fd_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
