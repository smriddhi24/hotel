-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 01:22 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Arvind', 'a@a.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `booking_request`
--

CREATE TABLE `booking_request` (
  `bid` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `rid` int(255) NOT NULL,
  `in_date` varchar(50) NOT NULL,
  `out_date` varchar(60) NOT NULL,
  `adults` varchar(60) NOT NULL,
  `children` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `bemail` varchar(50) NOT NULL,
  `bphone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_request`
--

INSERT INTO `booking_request` (`bid`, `user_id`, `rid`, `in_date`, `out_date`, `adults`, `children`, `message`, `date`, `time`, `status`, `bname`, `bemail`, `bphone`) VALUES
(5, 0, 0, '2018-12-08', '2019-03-05', '2', '', '', '', '', '', 'N', 'n@n.com', '2345678909'),
(6, 0, 0, '2019-12-22', '2020-01-02', '2', '', '', '', '', '', 'N', 'n@n.com', '2345678909'),
(7, 0, 0, '2019-02-01', '2019-04-05', '2', '', 'hsadghshfsdksxkhcbvhbdhbchsbx', '', '', '', 'N', 'n@n.com', '2345678909'),
(8, 0, 0, '1945-02-05', '1945-04-07', '2', '', 'iahsdasiihasbiha', '', '', '', 'sahil', 's@s.com', '9876077024'),
(9, 0, 0, '10000-12-04', '10001-01-23', '2', '', 'hsdhashsggasasg', '', '', '', 'sahil', 's@s.com', '9876077024'),
(10, 15, 0, '1999-02-03', '2000-01-04', '2', '', 'jxzcihgdgsuygcx', '', '', '', 'sahil', 's@s.com', '9876077024'),
(11, 15, 0, '10000-02-07', '10000-02-09', '2', '', 'dsjfdkkcsij', '', '', '', 'sahil', 's@s.com', '9876077024'),
(12, 15, 0, '2012-12-02', '2013-01-02', '4', '', 'nsadhfhihhifshdih', '', '', '', 'sahil', 's@s.com', '9876077024'),
(13, 15, 0, '2019-03-13', '2019-03-17', '2', '2', 'hgkjdhoijhhkikll', '', '', '', 'sahil', 's@s.com', '9876077024'),
(14, 15, 10, '2019-02-14', '2019-02-18', '2', '4', 'gfdshbdjnjugy', '', '', '', 'sahil', 's@s.com', '9876077024'),
(15, 15, 15, '2019-05-12', '2019-05-18', '4', '4', 'hghfeghytrdf', '20-07-2019', '13:26:01', 'approved', 'sahil', 's@s.com', '9876077024'),
(16, 14, 6, '2012-12-02', '2013-01-02', '4', '', 'asdsjdsfjsdfkdjsjsj', '21-07-2019', '13:26:04', 'approved', 'N', 'n@n.com', '2345678909'),
(17, 14, 2, '2011-12-03', '2012-01-22', '1', '', 'sfsgdtgdfgsxzgdf', '21-07-2019', '13:50:26', 'approved', 'N', 'n@n.com', '2345678909'),
(18, 14, 17, '2121-02-14', '2121-02-23', '2', '', 'tyfttftyydrydrydfdfd', '21-07-2019', '14:16:22', 'disapproved', 'N', 'n@n.com', '2345678909'),
(19, 17, 3, '2019-12-03', '0012-01-02', '2', '2', 'adjosdoasdhoacnjoaxjohduh', '22-07-2019', '14:49:35', 'disapproved', 'Arvind kumar', 'as@a.com', '0943287823');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `phone_number`, `message`) VALUES
(2, 'Arvind', 'ak2877045@gmail.com', '986348347', 'nice'),
(3, 'monu', 'g@g.com', '986348347', 'sabvhjasjxcbhg'),
(4, 'monu', 'g@g.com', '986348347', 'sabvhjasjxcbhg'),
(5, 'sahil', 'g@g.com', '986348347', 'Hello complete the project'),
(6, 'sahil', 'ak2877045@gmail.com', '986348347', 'dhsgsdvsdhch');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `rid` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `price` varchar(60) NOT NULL,
  `facilities` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rid`, `name`, `price`, `facilities`, `description`, `pic`, `quantity`) VALUES
(18, 'Super Deluxe', '20000', 'kadskkasddsxo', 'sadjjasjdnjasdasjdlkaks	', '84002973imj.jpg', 'ajhdsjdjash'),
(19, 'Deluxe', '1500', 'ldsfh', 'ldsjlfhsdjfnhif	', '24533600blog1.jpg', 'iasgcxuavsgx');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `email`, `phone_number`, `address`, `password`) VALUES
(1, 'deepak', '1234@123.com', '4932647962376', '3243253435424534545645657', '41'),
(2, 'monu', 'la@l.com', '9656554453', 'sgcsdgdscsdgs', '65'),
(3, 'monu', 'asa@a87536.com', '9867966212', 'gswdgufgdfsgtfug', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_request`
--
ALTER TABLE `booking_request`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_request`
--
ALTER TABLE `booking_request`
  MODIFY `bid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
