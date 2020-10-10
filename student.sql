-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 02:02 PM
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
  `password` varchar(200) DEFAULT NULL,
  `profilephoto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email_id`, `phonenumber`, `password`, `profilephoto`) VALUES
(1, 'Meer.Shabana Anjum', 'shabana.webdeveloper@gmail.com', 8330918399, 'shabana123456', NULL),
(2, 'Etikala.Yashwanth Rahul', 'etikala.yashwanth005@gmail.com', 9866571009, 'dollar1234', NULL),
(3, 'admin', 'admin@gmail.com', 1234567890, 'admin', 'Koala.jpg');

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

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `phone`, `subject`, `email`, `country`, `address`, `message`) VALUES
(1, 'Shabana', 8330918399, 'Tennis', 'shabbuasgar@gmail.com', 'India', 'Hyderabad', 'Please Give me details about tennis practice in your club.'),
(2, 'Yashwanth', 9653821740, 'Order', 'yashwanth@gmail.com', 'India', 'Dilshuknagar', 'hgkchtg'),
(3, 'Anudeep', 67231659, 'Order', 'anudeep@gmail.com', 'India', 'Gachibowli', 'dbdsfbfgn'),
(4, 'bindub', 9658741230, 'Shipping', 'bindub@gmail.com', 'India', 'Mehdipatnam', 'zdvdzbvdfb'),
(5, 'bindub', 6546821541, 'Shipping', 'bindub@gmail.com', 'India', 'Mehdipatnam', 'asefgerg'),
(7, 'tanmayee', 314654156, 'asgebv', 'advefbfd@gmail.com', 'India', 'Hyderabad', 'asdfvsdbvdsfbdf');

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
(1, 'Cricket Helmet', '600', 'Shabana', '8330918399', 'shabbuasgar@gmail.com', 'Hyderabad'),
(2, 'cricket kit', '800', 'Yashwanth', '253698710', 'dollar@gmail.com', 'Hyderabad'),
(3, 'Tennis Racquet', '1200', 'Anudeep', '8563214790', 'anudeep@gmail.com', 'Gachibowli'),
(4, 'Tennis Ball', '100', 'Prem Kumar', 'prem@gmail.com', '78965413230', 'Filim Nagar'),
(5, 'Cricket Bat', '1800', 'Upendar', '6985332142', 'upendar@gmail.com', 'Ibrahim Patnam'),
(6, 'soccer ball', '500', 'chandrakanth', '654687419', 'chandrakanth@gmail.com', 'Kothapet');

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
(1, 'Etikala.Yashwanth Rahul', 9866571009, 'etikala.yashwanth005@gmail.com', 'yashwanth1234', '', '', '', '../IMAGES/Profile-img/Chrysanthemum.jpg'),
(2, 'Narayana', 7589641230, 'nani@gmail.com', 'nani1234', 'Male', '02/02/2019', 'English,Telugu', '../IMAGES/Profile-Img/Penguins.jpg'),
(3, 'anudeep', 8549763210, 'anudeepbablu@gmail.com', 'anudeep1234', 'Male', '05/05/1996', 'English,Telugu', '../IMAGES/Profile-img/'),
(4, 'premkumar', 753698410, 'prem@gmail.com', 'prem1234', 'Male', '03/03/1993', 'English,Telugu', '../IMAGES/Profile-img/Lighthouse.jpg'),
(5, 'Soundharya', 1135458452, 'soundharya@gmail.com', 'soundharya', 'Female', '02/02/1989', 'English,Urdu', 'Penguins.jpg'),
(6, 'Parashuram', 123654879, 'parashuram@gmail.com', 'parashuram', 'Male', '05/22/1992', 'Telugu,Hindi', '../IMAGES/Profile-Img/Penguins.jpg'),
(7, 'karthik', 1234567890, 'karthik@gmail.com', 'karthik', 'Male', '02/22/2020', 'English,Hindi', '../IMAGES/Profile-Img/Tulips.jpg'),
(8, 'shiva', 3659874120, 'shiva@gmail.com', 'shiva', 'Male', '11/20/2000', 'English,Telugu', 'Hydrangeas.jpg'),
(9, 'krishna', 9876543210, 'krishna@gmail.com', 'krishna1234', 'Male', '02/08/2020', 'English,Telugu', '../IMAGES/Profile-Img/Desert.jpg'),
(10, 'Shyam', 7869523140, 'shyam@gmail.com', 'shyam', 'Male', '02/02/2020', 'English,Hindi', '../IMAGES/Profile-Img/Hydrangeas.jpg'),
(11, 'vijaykumar', 7863254190, 'vijaykumar@gmail.com', 'vijay', 'Male', '02/15/2020', 'English,Hindi,Urdu', '../IMAGES/Profile-img/'),
(12, 'MeerShabana', 8330918399, 'shabbuasgar@gmail.com', 'shabana1234', 'Female', '07/02/1997', 'English,Telugu,Hindi,Urdu', '../IMAGES/Profile-img/MW-GY949_travel_20181122135819_ZH.jpg'),
(13, 'Premkumarphp', 8963548625, 'premkumar@gmail.com', 'prem123456', 'Male', '02/24/2020', 'Hindi,Urdu', '../IMAGES/Profile-Img/student.sql'),
(14, 'Bindubandaru', 9658741230, 'bindua@gmail.com', 'bindub', 'female', '25-02-1995', 'Telugu,English,Hindi', '../IMAGES/Profile-img/5.jpg'),
(15, 'Bindubandaru', 3246874556, 'bindub@gmail.com', '', '', '', '', '../IMAGES/Profile-Img/'),
(16, 'Tanmayee', 6578156492, 'tanmayee@gmail.com', '', NULL, NULL, NULL, NULL),
(17, 'Tejaswib', 324687898, 'teju@gmail.com', '', NULL, NULL, NULL, NULL),
(18, 'Kalyaniii', 254987154, 'kalyani@gmail.com', 'kalyani', NULL, NULL, NULL, NULL),
(19, 'Shalinicyberageis', 21654515, 'shalini@gmail.com', 'shalini12345', NULL, NULL, NULL, NULL),
(20, 'Vaniiiiiiiiiiiiiii', 549871654, 'vani@gmail.com', 'vani', NULL, NULL, NULL, NULL),
(21, 'Devioooooii', 1236544799, 'devi@gmail.com', 'Devi123_', NULL, NULL, NULL, NULL),
(22, 'Chandrakanth', 58746932140, 'chandu@gmail.com', 'chandu', NULL, NULL, NULL, NULL),
(23, 'NAniiiii', 125478963, 'naniii@gmail.com', 'Nani123@', NULL, NULL, NULL, NULL),
(24, 'Chandrashekar', 258741963, 'chandra@gmail.com', 'Chandu123@', NULL, NULL, NULL, NULL),
(25, 'Nikhillll', 1236547890, 'nikhil@gmail.com', 'Nikhil@123', NULL, NULL, NULL, NULL),
(26, 'Sadgdfgfbvd', 548541682565, 'wsfdsgdzfb@gmail.com', '', '', '', '', '../IMAGES/Profile-Img/'),
(27, 'Dfbdfsfdfb', 6548671684, 'szdfsdg@gmail.com', 'Sdcd@@xdfh12', 'Female', '02/19/2020', 'English,Hindi,Urdu', '../IMAGES/Profile-Img/2016-Honda-Civic-Sedan-Side-Exterior-Gray.jpg');

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
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `productsorder`
--
ALTER TABLE `productsorder`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
