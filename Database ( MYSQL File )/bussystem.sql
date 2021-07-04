-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 06:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bussystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `busid1`
--

CREATE TABLE `busid1` (
  `id` int(11) NOT NULL,
  `dates` int(11) NOT NULL,
  `s1` int(11) DEFAULT NULL,
  `s2` int(11) DEFAULT NULL,
  `s3` int(11) DEFAULT NULL,
  `s4` int(11) DEFAULT NULL,
  `s5` int(11) DEFAULT NULL,
  `s6` int(11) DEFAULT NULL,
  `s7` int(11) DEFAULT NULL,
  `s8` int(11) DEFAULT NULL,
  `s9` int(11) DEFAULT NULL,
  `s10` int(11) DEFAULT NULL,
  `s11` int(11) DEFAULT NULL,
  `s12` int(11) DEFAULT NULL,
  `s13` int(11) DEFAULT NULL,
  `s14` int(11) DEFAULT NULL,
  `s15` int(11) DEFAULT NULL,
  `s16` int(11) DEFAULT NULL,
  `s17` int(11) DEFAULT NULL,
  `s18` int(11) DEFAULT NULL,
  `s19` int(11) DEFAULT NULL,
  `s20` int(11) DEFAULT NULL,
  `s21` int(11) DEFAULT NULL,
  `s22` int(11) DEFAULT NULL,
  `s23` int(11) DEFAULT NULL,
  `s24` int(11) DEFAULT NULL,
  `s25` int(11) DEFAULT NULL,
  `s26` int(11) DEFAULT NULL,
  `s27` int(11) DEFAULT NULL,
  `s28` int(11) DEFAULT NULL,
  `s29` int(11) DEFAULT NULL,
  `s30` int(11) DEFAULT NULL,
  `s31` int(11) DEFAULT NULL,
  `s32` int(11) DEFAULT NULL,
  `s33` int(11) DEFAULT NULL,
  `s34` int(11) DEFAULT NULL,
  `s35` int(11) DEFAULT NULL,
  `s36` int(11) DEFAULT NULL,
  `s37` int(11) DEFAULT NULL,
  `s38` int(11) DEFAULT NULL,
  `s39` int(11) DEFAULT NULL,
  `s40` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `busid1`
--

INSERT INTO `busid1` (`id`, `dates`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `s17`, `s18`, `s19`, `s20`, `s21`, `s22`, `s23`, `s24`, `s25`, `s26`, `s27`, `s28`, `s29`, `s30`, `s31`, `s32`, `s33`, `s34`, `s35`, `s36`, `s37`, `s38`, `s39`, `s40`) VALUES
(1, 0, 0, 3, 5, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 1, 13, 8, 13, 13, 3, 13, 45, 1, 0, 1, 1, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45),
(3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 3, 45, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 45, NULL, NULL, NULL, NULL, 14, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(7, 6, 14, NULL, NULL, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `busid2`
--

CREATE TABLE `busid2` (
  `id` int(11) NOT NULL,
  `dates` int(11) NOT NULL,
  `s1` int(11) DEFAULT NULL,
  `s2` int(11) DEFAULT NULL,
  `s3` int(11) DEFAULT NULL,
  `s4` int(11) DEFAULT NULL,
  `s5` int(11) DEFAULT NULL,
  `s6` int(11) DEFAULT NULL,
  `s7` int(11) DEFAULT NULL,
  `s8` int(11) DEFAULT NULL,
  `s9` int(11) DEFAULT NULL,
  `s10` int(11) DEFAULT NULL,
  `s11` int(11) DEFAULT NULL,
  `s12` int(11) DEFAULT NULL,
  `s13` int(11) DEFAULT NULL,
  `s14` int(11) DEFAULT NULL,
  `s15` int(11) DEFAULT NULL,
  `s16` int(11) DEFAULT NULL,
  `s17` int(11) DEFAULT NULL,
  `s18` int(11) DEFAULT NULL,
  `s19` int(11) DEFAULT NULL,
  `s20` int(11) DEFAULT NULL,
  `s21` int(11) DEFAULT NULL,
  `s22` int(11) DEFAULT NULL,
  `s23` int(11) DEFAULT NULL,
  `s24` int(11) DEFAULT NULL,
  `s25` int(11) DEFAULT NULL,
  `s26` int(11) DEFAULT NULL,
  `s27` int(11) DEFAULT NULL,
  `s28` int(11) DEFAULT NULL,
  `s29` int(11) DEFAULT NULL,
  `s30` int(11) DEFAULT NULL,
  `s31` int(11) DEFAULT NULL,
  `s32` int(11) DEFAULT NULL,
  `s33` int(11) DEFAULT NULL,
  `s34` int(11) DEFAULT NULL,
  `s35` int(11) DEFAULT NULL,
  `s36` int(11) DEFAULT NULL,
  `s37` int(11) DEFAULT NULL,
  `s38` int(11) DEFAULT NULL,
  `s39` int(11) DEFAULT NULL,
  `s40` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `busid2`
--

INSERT INTO `busid2` (`id`, `dates`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `s17`, `s18`, `s19`, `s20`, `s21`, `s22`, `s23`, `s24`, `s25`, `s26`, `s27`, `s28`, `s29`, `s30`, `s31`, `s32`, `s33`, `s34`, `s35`, `s36`, `s37`, `s38`, `s39`, `s40`) VALUES
(1, 0, 0, 3, 5, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 1, 13, 8, 13, 13, 3, 13, 45, 0, 0, 0, 0, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45),
(3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 3, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 6, NULL, NULL, NULL, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `pickup` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `timing` time NOT NULL,
  `bustype` varchar(20) DEFAULT NULL,
  `rupee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `pickup`, `destination`, `timing`, `bustype`, `rupee`) VALUES
(1, 'rajkot', 'nadiad', '21:47:13', 'deluxe', 200),
(4, 'rajkot', 'ahmedabad', '12:30:29', 'SUPER DE LUXE', 250),
(5, 'rajkot ', 'nadiad', '06:31:18', 'DE LUXE', 200),
(6, 'rajkot ', 'nadiad', '08:31:18', 'DE LUXE', 200),
(7, 'rajkot ', 'amhedabad', '06:32:12', 'SUPER DE LUXE', 300),
(8, 'rajkot ', 'amhedabad', '08:00:00', 'DE LUXE', 250),
(9, 'rajkot', 'nadiad', '10:35:04', 'SUPER DE LUXE', 275),
(10, 'rajkot', 'nadiad', '13:35:04', 'DE LUXE', 250);

-- --------------------------------------------------------

--
-- Table structure for table `totp`
--

CREATE TABLE `totp` (
  `id` int(11) NOT NULL,
  `otp` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totp`
--

INSERT INTO `totp` (`id`, `otp`) VALUES
(1, 784965);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobilenumber` bigint(10) NOT NULL,
  `adhar` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `birthdate`, `email`, `mobilenumber`, `adhar`) VALUES
(1, 'sahil nandaniya', 'Bus@12345', '2002-02-10', 'sahilnandaniya556@gmail.com', 8856974562, 745896325896),
(2, 'hemanshu faldu', 'Bus@12345', '2002-03-11', 'hemanshu@xyzbusservice.com', 7896974562, 771596325896),
(3, 'harshad javiya', 'Bus@12345', '2002-04-11', 'harshad@xyzbusservice.com', 4526974562, 879596325896);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `busid1`
--
ALTER TABLE `busid1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `busid2`
--
ALTER TABLE `busid2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totp`
--
ALTER TABLE `totp`
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
-- AUTO_INCREMENT for table `busid1`
--
ALTER TABLE `busid1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `busid2`
--
ALTER TABLE `busid2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `totp`
--
ALTER TABLE `totp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
