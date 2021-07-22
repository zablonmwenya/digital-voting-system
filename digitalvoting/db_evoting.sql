-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 11:08 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `aid` int(11) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `admin_username`, `admin_password`, `time_stamp`) VALUES
(1, 'Zablon', 'Mwenya', '2021-07-13 14:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(5) NOT NULL,
  `full_name` varchar(32) NOT NULL,
  `voter_id` int(10) NOT NULL,
  `voter_password` varchar(10) NOT NULL,
  `voted_gender` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `full_name`, `voter_id`, `voter_password`, `voted_gender`) VALUES
(18, 'Zablon', 556655, '123qwe5r', 'Male'),
(19, 'ianmoon', 25257727, '1123qwse5', 'Male'),
(20, 'wynead', 77887, '345wer5', 'Male'),
(21, 'zzxxbn', 12345, 'gghhjuty', 'Female'),
(22, 'Blackshadow', 998877, 'asdfgh', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_vote`
--

CREATE TABLE `tbl_users_vote` (
  `id` int(255) NOT NULL,
  `voted_for_president` varchar(255) NOT NULL,
  `voted_for_primeminister` varchar(255) NOT NULL,
  `voted_for_governor` varchar(255) NOT NULL,
  `voted_for_senetor` varchar(255) NOT NULL,
  `voted_for_mp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users_vote`
--

INSERT INTO `tbl_users_vote` (`id`, `voted_for_president`, `voted_for_primeminister`, `voted_for_governor`, `voted_for_senetor`, `voted_for_mp`) VALUES
(3, 'BJ', 'HA', 'LA', 'AE', 'SA'),
(4, 'SR', 'VR', 'CG', 'AE', 'SD'),
(5, 'JW', 'GS', 'CG', 'LP', 'MA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `voter_id` (`voter_id`);

--
-- Indexes for table `tbl_users_vote`
--
ALTER TABLE `tbl_users_vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_users_vote`
--
ALTER TABLE `tbl_users_vote`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
