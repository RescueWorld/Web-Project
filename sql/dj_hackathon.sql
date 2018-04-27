-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 06:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dj_hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `email`) VALUES
(1, 'ngo@hospital.com'),
(2, 'dj@hospital.org'),
(3, 'rescue@help.com');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `pwd` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `name`, `email`, `pwd`, `contact`) VALUES
(1, 'priyam', 'priyamshah112@gmail.com', '$2y$10$dMGBgHig6N2635P72Ba7Mu6zjx2za85rQXuxYp3Jh6JE0Ijb8VYiG', '07738478888'),
(2, 'devansh_org', 'devanshslnk98@gmail.com', '$2y$10$IBhMLXiIsY84T6xkmKzbKOzYrf90d0hjnkNED6vG/6esrAO17g1h.', '9819854457'),
(3, 'save', 'save@ngo.com', '$2y$10$pDrbD5nfeVSiCkfaG8We/.QD9WrAAvCvIBaDVom4SqaJ7RiKI0s6a', '7738478888'),
(4, 'refuse', 'refuse@gmail.com', '$2y$10$ClL3R/7/WmuBIvwq142jbu2nyWFGA5FoRslbNs.NA3.x3EaOOyRmm', '12345678'),
(5, 'cry', 'cry@gmail.com', '$2y$10$mPaI.rmtcfs0NJ4keYCnqe/qpVAfuEUPrYwNyhQLQ1hOICWLrj2oi', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `refugee`
--

CREATE TABLE `refugee` (
  `id` int(11) NOT NULL,
  `OG_NAME` text NOT NULL,
  `F_NAME` text NOT NULL,
  `L_NAME` text NOT NULL,
  `EMAIL` text NOT NULL,
  `AGE` int(11) NOT NULL,
  `GENDER` text NOT NULL,
  `PLACE` text NOT NULL,
  `IMAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refugee`
--

INSERT INTO `refugee` (`id`, `OG_NAME`, `F_NAME`, `L_NAME`, `EMAIL`, `AGE`, `GENDER`, `PLACE`, `IMAGE`) VALUES
(16, 'priyam', 'a', 'b', '', 18, 'MALE', 'mum', '5a7f1596b54fa9.36128413.jpeg'),
(17, 's', 'm', 'g', '', 12, 'MALE', 'parle', '5a7f15c48bee58.69403164.png'),
(20, 'Save', 'Chirag', 'Shetty', '', 18, 'MALE', 'mumbai', '5a7fa0e25080f2.58161027.jpg'),
(24, 'cscc', 'devansh', 'solanki', '', 14, 'MALE', 'parle', '5a7fe10ead2ef6.53938797.png'),
(25, 'dev', 'devansh', 'solanki', '', 18, 'MALE', 'parle', '5a7fe1429cecf1.12026202.png'),
(26, 'CRY', 'priyam', 'shah', '', 18, 'MALE', 'MUMBAI', '5a7ff02b718563.82422930.jpg'),
(27, 'a', 'b', 'b', '', 18, 'MALE', '123', '5a800242d6b154.46678631.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refugee`
--
ALTER TABLE `refugee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `refugee`
--
ALTER TABLE `refugee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
