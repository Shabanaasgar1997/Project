-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 02:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `email_id` varchar(200) DEFAULT NULL,
  `phonenumber` bigint(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email_id`, `phonenumber`, `password`) VALUES
(1, 'Meer.Shabana Anjum', 'shabana.webdeveloper@gmail.com', 8330918399, 'shabana123456'),
(2, 'Etikala.Yashwanth Rahul', 'etikala.yashwanth005@gmail.com', 9866571009, 'dollar1234');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(200) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `phone` bigint(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `productsorder`
--

CREATE TABLE `productsorder` (
  `id` int(200) NOT NULL,
  `productname` varchar(200) DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL,
  `consumername` varchar(200) DEFAULT NULL,
  `consumerphonenumber` varchar(200) DEFAULT NULL,
  `consumeremail` varchar(200) DEFAULT NULL,
  `consumeraddress` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productsorder`
--

INSERT INTO `productsorder` (`id`, `productname`, `price`, `consumername`, `consumerphonenumber`, `consumeremail`, `consumeraddress`) VALUES
(1, 'Cricket Helmet', '600', 'Shabana', '8330918399', 'shabbuasgar@gmail.com', 'Hyderabad');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(200) NOT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `phonenumber` bigint(15) DEFAULT NULL,
  `email_id` varchar(200) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `languages` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `fullname`, `phonenumber`, `email_id`, `password`, `gender`, `dob`, `languages`, `photo`) VALUES
(1, 'Meer Shabana Anjum', 8330918399, 'shabbuasgar@gmail.com', 'shabana1234', 'Female', '07/02/1997', 'Hindi,Urdu,Telugu', '../IMAGES/Profile-Img/Penguins.jpg'),
(2, 'Etikala.Yashwanth Rahul', 9866571009, 'etikala.yashwanth005@gmail.com', 'yashwanth1234', 'Male', '11/21/1999', 'Telugu,Hindi', '../IMAGES/Profile-Img/Penguins.jpg'),
(8, 'Narayana', 7589641230, 'nani@gmail.com', 'nani1234', 'Male', '02/02/2019', 'English,Telugu', '../IMAGES/Profile-Img/Penguins.jpg'),
(9, 'anudeep', 8549763210, 'anudeepbabli@gmail.com', 'anudeep1234', 'Male', '05/05/1996', 'English,Urdu', '../IMAGES/Profile-Img/Penguins.jpg'),
(10, 'premkumar', 753698410, 'prem@gmail.com', 'prem1234', 'Male', '03/03/1993', 'English,Telugu', '../IMAGES/Profile-Img/Penguins.jpg'),
(11, 'Soundharya', 1135458452, 'soundharya@gmail.com', 'soundharya', 'Female', '02/02/1999', 'English,Urdu', '../IMAGES/Profile-Img/Penguins.jpg'),
(12, 'Parashuram', 123654879, 'parashuram@gmail.com', 'parashuram', 'Male', '05/22/1992', 'Telugu,Hindi', '../IMAGES/Profile-Img/Penguins.jpg'),
(35, 'karthik', 1234567890, 'karthik@gmail.com', 'karthik', 'Male', '02/22/2020', 'English,Hindi', '../IMAGES/Profile-Img/Tulips.jpg'),
(36, 'shiva', 3659874120, 'shiva@gmail.com', 'shiva', 'Male', '11/20/2000', 'English,Telugu', 'Hydrangeas.jpg'),
(37, 'krishna', 9876543210, 'krishna@gmail.com', 'krishna1234', 'Male', '02/08/2020', 'English,Telugu', '../IMAGES/Profile-Img/Desert.jpg'),
(38, 'Shyam', 7869523140, 'shyam@gmail.com', 'shyam', 'Male', '02/02/2020', 'English,Hindi', '../IMAGES/Profile-Img/Hydrangeas.jpg'),
(39, 'vijay', 7863254190, 'vijay@gmail.com', 'vijay', 'Male', '02/15/2020', 'English,Hindi,Urdu', '../IMAGES/Profile-Img/Desert.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD UNIQUE KEY `phonenumber` (`phonenumber`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productsorder`
--
ALTER TABLE `productsorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD UNIQUE KEY `phonenumber` (`phonenumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productsorder`
--
ALTER TABLE `productsorder`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
