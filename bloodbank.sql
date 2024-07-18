-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 08:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Id`, `Name`, `Email`) VALUES
(1, 'Monik', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contectrequest`
--

CREATE TABLE `contectrequest` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contectrequest`
--

INSERT INTO `contectrequest` (`id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(1, 'udsv', 'monik@gmail.com', 'dsfgs', 'jqwfoihn');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalregistration`
--

CREATE TABLE `hospitalregistration` (
  `Hosptal_Id` int(10) NOT NULL,
  `Hospital_Name` varchar(50) NOT NULL,
  `Hospital_Owner` varchar(50) NOT NULL,
  `Hospital_Type` varchar(15) NOT NULL,
  `Hospital_contect_No1` varchar(12) NOT NULL,
  `Hospital_contect_No2` varchar(12) NOT NULL,
  `Hospital_Email` varchar(50) NOT NULL,
  `Hospital_Address` text NOT NULL,
  `Hospital_city` varchar(20) NOT NULL,
  `Hospital_State` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitalregistration`
--

INSERT INTO `hospitalregistration` (`Hosptal_Id`, `Hospital_Name`, `Hospital_Owner`, `Hospital_Type`, `Hospital_contect_No1`, `Hospital_contect_No2`, `Hospital_Email`, `Hospital_Address`, `Hospital_city`, `Hospital_State`) VALUES
(1, 'xyz', 'me', 'NGO', '0123456789', 'fewf', 'xyz@gmail.com', 'gergregerg', 'jnd', 'Gujrat'),
(2, 'jh', 'oij', 'jhil', 'kl', 'jn', 'xyzabc@gmail.com', 'ewfr', 'jnd', 'Gujrat'),
(15, 'sdf', 'dsf', 'NGo', 'sdf', 'esf', 'raj@gmail.com', 'sd', 'sd', 'sd'),
(16, 'fdgd', 'ewwfre', 'Private', 'dfsd', 'erg', 'abcsdf@gmail.com', 'ert', 'ert', 'ert'),
(17, 'fdhb', 'dsfb', 'Private', 'dfg', 'df', 'xyzzz@gmail.com', 'fdvsd', 'fdvsd', 'fdvsd');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `User_Id` int(10) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `User_Age` int(3) NOT NULL,
  `User_Father_Name` varchar(50) NOT NULL,
  `User_Gender` varchar(8) NOT NULL,
  `User_Mobile_No` varchar(12) NOT NULL,
  `User_Email` varchar(50) NOT NULL,
  `User_Address` text NOT NULL,
  `User_City` varchar(20) NOT NULL,
  `User_State` varchar(15) NOT NULL,
  `User_Blood_Group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`User_Id`, `User_Name`, `User_Age`, `User_Father_Name`, `User_Gender`, `User_Mobile_No`, `User_Email`, `User_Address`, `User_City`, `User_State`, `User_Blood_Group`) VALUES
(1, 'fddf', 2, 'fasdg', 'Male', '15616', 'abc@gmail.com', 'ergre', 'rg', 'reg', 'A+'),
(4, 'wdf', 45, 'ewf', 'ef', 'ewf', 'xy@gmail.com', 'frs', 'qef', 'wef', 'B-'),
(5, 'sd', 13, 'r', 'Male', 'reg', 'abcz@gmail.com', 'erg', 'wef', 'Gujarat', 'O-'),
(6, 'fgd', 0, 'fdg', 'Male', 'dfsg', 'abcxyz@gmail.com', 'sdf', 'dfg', 'Maharashtra', 'B+'),
(7, 'Raj ', 20, 'Kishorbhai', 'Male', '7990437337', 'rajahir79904@gmail.com', 'talala', 'Talala', 'Gujarat', 'AB+'),
(8, 'fgd', 0, 'fdg', 'Male', 'dfsg', 'abcxyz@gmail.com', 'sdf', 'dfg', 'Maharashtra', 'AB+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `contectrequest`
--
ALTER TABLE `contectrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitalregistration`
--
ALTER TABLE `hospitalregistration`
  ADD PRIMARY KEY (`Hosptal_Id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contectrequest`
--
ALTER TABLE `contectrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospitalregistration`
--
ALTER TABLE `hospitalregistration`
  MODIFY `Hosptal_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `User_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
