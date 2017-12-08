-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2017 at 05:42 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2858660_mounika_proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `email` varchar(60) NOT NULL,
  `message` varchar(500) NOT NULL,
  `roc` varchar(20) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `username`, `subject`, `email`, `message`, `roc`, `time_stamp`) VALUES
(1, 'Nikitha Perla', 'New Form Submitted', 'nikitha.perla@gmail.com', 'Hello', 'Job Offer', '2017-12-07 22:44:37'),
(2, 'Vaishnavi', 'New Form Submitted', 'vaishnavi.krishna94@gmail.com', 'How are you??', 'Mentoring', '2017-12-01 22:45:08'),
(3, 'Julin', 'New Form Submitted', 'julin.sharp@marist.edu', 'Job Offer', 'Collaboration', '2017-12-01 22:45:33'),
(4, 'Corri Nicoletti', 'New Form Submitted', 'corri.nicoletti@marist.edu', 'Job Interview', 'Mentoring', '2017-12-01 22:46:17'),
(5, 'Priyanka', 'New Form Submitted', 'priyanka.gadde@marist.edu', 'Hi there', 'Job Offer', '2017-12-01 22:46:49'),
(6, 'Monica ', 'New Form Submitted', 'monica15993@gmail.com', 'hey all', 'Job Offer', '2017-12-01 22:47:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
