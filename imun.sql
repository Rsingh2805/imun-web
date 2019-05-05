-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 09:10 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imun`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `conference_location` varchar(10) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `sex` varchar(10) NOT NULL DEFAULT 'M',
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `residence_country` varchar(50) NOT NULL,
  `enrolled_as` varchar(30) NOT NULL,
  `field_of_study` varchar(100) NOT NULL,
  `univ_name` varchar(200) NOT NULL,
  `food_preference` varchar(30) NOT NULL,
  `tshirt_size` varchar(20) NOT NULL,
  `funded_by` varchar(30) NOT NULL,
  `known_from` varchar(200) NOT NULL,
  `prev_experience` text NOT NULL,
  `referral_code` varchar(10) NOT NULL,
  `motivation_letter` text NOT NULL,
  `status` varchar(30) DEFAULT 'PEN',
  `submission_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `promo` varchar(200) NOT NULL,
  `payment` varchar(200) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `conference_location`, `full_name`, `sex`, `dob`, `email`, `nationality`, `residence_country`, `enrolled_as`, `field_of_study`, `univ_name`, `food_preference`, `tshirt_size`, `funded_by`, `known_from`, `prev_experience`, `referral_code`, `motivation_letter`, `status`, `submission_time`, `promo`, `payment`) VALUES
(49, 'China', 'vaibhav bhansari', 'Male', '2019-05-01', 'vbhansari@gmail.com', 'India', 'India', 'Graduate', 'COmputer ENg', 'sv', 'Veg', 'small', 'MYSELF', 'g', '2', 'y', 'hvjhvjh', 'ACCEPTED', '2019-05-05 06:50:26', 'nbbb', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`) VALUES
(5, ''),
(2, 'damn@gmail.com'),
(1, 'rsingh@cs.iitr.ac.in'),
(71, 'vbhansari@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'root@gmail.com', '000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
