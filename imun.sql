-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2019 at 04:13 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `submission_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `conference_location`, `full_name`, `sex`, `dob`, `email`, `nationality`, `residence_country`, `enrolled_as`, `field_of_study`, `univ_name`, `food_preference`, `tshirt_size`, `funded_by`, `known_from`, `prev_experience`, `referral_code`, `motivation_letter`, `status`, `submission_time`) VALUES
(1, 'MAL', 'Rahul', 'M', '2019-03-08', 'rs280599@gmail.com', 'Indian', 'India', 'SNRH', 'CSE', 'IIT Roorkee', 'VEG', 'S', 'PRT', 'Google', 'None', '', 'Im batman', 'PEN', '2019-03-27 18:04:53'),
(3, 'EGY', 'Rahul', 'M', '2019-03-10', 'rsingh@cs.iitr.ac.in', 'Indian', 'India', 'GRAD', 'CSE', 'IIT Roorkee', 'VEG', 'L', 'PRT', 'Google', 'None', '', 'Some reasons!', 'ACC', '2019-03-28 05:34:17'),
(4, 'EGY', 'Rahul Singh', 'Male', '1999-03-28', 'rs280599@gmail.com', 'Indian', 'India', 'Senior High School', 'CSE', 'IIT Roorkee', 'Veg', 'large', 'MYSELF', 'None', 'None', 'y', 'I\'m Batman', 'ACC', '2019-04-11 04:10:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
