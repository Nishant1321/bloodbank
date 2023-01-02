-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2020 at 08:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `bloodinfo`
--

CREATE TABLE `bloodinfo` (
  `bid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `bg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodinfo`
--

INSERT INTO `bloodinfo` (`bid`, `hid`, `bg`) VALUES
(1, 1, 'B+'),
(2, 2, 'A+');

-- --------------------------------------------------------


--
-- Table structure for table `bloodinfo2`
--

CREATE TABLE `bloodinfo2` (
  `bid` int(11) NOT NULL,
  `bcid` int(11) NOT NULL,
  `bg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodinfo2`
--

INSERT INTO `bloodinfo2` (`bid`, `bcid`, `bg`) VALUES
(1, 1, 'B+'),
(2, 2, 'A+');

-- --------------------------------------------------------


--
-- Table structure for table `bloodrequest`
--

CREATE TABLE `bloodrequest` (
  `reqid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `bg` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodrequest`
--

INSERT INTO `bloodrequest` (`reqid`, `hid`, `rid`, `bg`, `status`) VALUES
(1, 1, 1, 'B+', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequest2`
--

CREATE TABLE `bloodrequest2` (
  `reqid` int(11) NOT NULL,
  `bcid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `bg` varchar(11) NOT NULL,
`rupload` blob(100) NOT NULL,


  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodrequest2`
--

INSERT INTO `bloodrequest2` (`reqid`, `bcid`, `rid`, `bg`,`rupload`,  `status`) VALUES
(1, 1, 1, 'B+',1,'Pending');

-- --------------------------------------------------------


--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `hemail` varchar(100) NOT NULL,
  `hpassword` varchar(100) NOT NULL,
  `hphone` varchar(100) NOT NULL,
  `hcity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hname`, `hemail`, `hpassword`, `hphone`, `hcity`) VALUES
(1, 'Satara hospital', 'info.acoden@gmail.com', 'satara@123', '02162227231', 'Satara'),
(2, 'civil hospital', 'civil@gmail.com', 'civil@123', '02162224561', 'Satara');


-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

CREATE TABLE `receivers` (
  `id` int(11) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `remail` varchar(100) NOT NULL,
  `rpassword` varchar(100) NOT NULL,
  `rphone` varchar(100) NOT NULL,
  `rbg` varchar(10) NOT NULL,
  `rcity` varchar(100) NOT NULL
  `rupload` blob(100) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receivers`
--

INSERT INTO `receivers` (`id`, `rname`, `remail`, `rpassword`, `rphone`, `rbg`, `rcity`,`rupload`) VALUES
(1, 'giriraj', 'giri@gmail.com', '853071', '8875643456', 'A+', 'satara'),
(2, 'akshta', 'akshata@gmail.com', '123456', '887564454', 'B+', 'satara');
-- --------------------------------------------------------


--
-- Table structure for table `bloodcenters`
--

CREATE TABLE `bloodcenters` (
  `id` int(11) NOT NULL,
  `bcname` varchar(100) NOT NULL,
  `bcemail` varchar(100) NOT NULL,
  `bcpassword` varchar(100) NOT NULL,
  `bcphone` varchar(100) NOT NULL,
  `bccity` varchar(100) NOT NULL

  `bcupload` blob(100) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodcenters`
--

INSERT INTO `bloodcenters` (`id`, `bcname`, `bcemail`, `bcpassword`, `bcphone`, `bccity`,`bcupload`) VALUES
(1, 'Akshay bloodbank', 'abbsatara@gmail.com', '935924', '02162231731', 'satara'),
(2, 'balaji bloodbank', 'balaji@gmail.com', '894200', '02162231765', 'satara');
-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `upload2`
--

CREATE TABLE `upload2` (
  `upid` int(11) NOT NULL,
  `upid` int(11) NOT NULL,
  `upid` int(11) NOT NULL,
  `imgf` blog(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------



--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `bloodinfo2`
--
ALTER TABLE `bloodinfo2`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `bcid` (`bcid`);


--
-- Indexes for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  ADD PRIMARY KEY (`reqid`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `bloodrequest2`
--
ALTER TABLE `bloodrequest2`
  ADD PRIMARY KEY (`reqid`),
  ADD KEY `bcid` (`bcid`);


--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hemail` (`hemail`);

--
-- Indexes for table `receivers`
--
ALTER TABLE `receivers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `remail` (`remail`);



--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bloodinfo2`
--
ALTER TABLE `bloodinfo2`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


--
-- AUTO_INCREMENT for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bloodrequest2`
--
ALTER TABLE `bloodrequest2`
  MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `receivers`
--
ALTER TABLE `receivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;



--
-- Constraints for dumped tables
--

--
-- Constraints for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
  ADD CONSTRAINT `bloodinfo_ibfk_1` FOREIGN KEY (`hid`) REFERENCES `hospitals` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- --------------------------------------------------------

--
-- Constraints for table `bloodinfo2`
--
ALTER TABLE `bloodinfo2`
  ADD CONSTRAINT `bloodinfo_ibfk_1` FOREIGN KEY (`bcid`) REFERENCES `bloodcenters` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- --------------------------------------------------------




