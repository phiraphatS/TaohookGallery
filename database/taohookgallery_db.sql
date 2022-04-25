-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2022 at 03:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taohookgallery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_db`
--

CREATE TABLE `book_db` (
  `cus_no` int(11) NOT NULL,
  `cus_fullname` varchar(100) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `cus_tel` varchar(10) NOT NULL,
  `time_book` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_db`
--

INSERT INTO `book_db` (`cus_no`, `cus_fullname`, `cus_email`, `cus_tel`, `time_book`) VALUES
(3, 'นายพีรพัฒน์ สุขเกษม', 'phiraphat.sukkasem@e-tech.ac.th', '0612865929', '2022-02-18T10:00');

-- --------------------------------------------------------

--
-- Table structure for table `picture_work`
--

CREATE TABLE `picture_work` (
  `pic_no` int(11) NOT NULL,
  `pic_name` varchar(60) NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `picture_work`
--

INSERT INTO `picture_work` (`pic_no`, `pic_name`, `album_id`) VALUES
(1, 'BA0_7852.jpg', 1),
(2, 'BA0_7859.jpg', 1),
(3, 'BA0_7878.jpg', 1),
(4, 'BA0_7897.jpg', 1),
(5, 'BA0_7900.jpg', 1),
(6, 'BA0_7915.jpg', 1),
(7, 'BA0_7917.jpg', 1),
(8, 'BA0_7918.jpg', 1),
(9, 'BA0_7919.jpg', 1),
(10, 'BA0_7921.jpg', 1),
(11, 'BA0_7922.jpg', 1),
(12, 'DSC_1294.jpg', 2),
(13, 'DSC_1307.jpg', 2),
(14, 'DSC_1308.jpg', 2),
(15, 'DSC_1313.jpg', 2),
(16, 'DSC_1314.jpg', 2),
(17, 'DSC_1315.jpg', 2),
(18, 'DSC_1328.jpg', 2),
(19, 'DSC_1335.jpg', 2),
(20, 'DSC_1339.jpg', 2),
(21, 'DSC_1338.jpg', 2),
(37, 'BA0_7920.jpg', 1),
(44, 'DSC_0443.jpg', 3),
(45, 'DSC_0486.jpg', 3),
(46, 'DSC_0494.jpg', 3),
(47, 'DSC_0496.jpg', 3),
(48, 'DSC_0507.jpg', 3),
(49, 'DSC_0522.jpg', 3),
(50, 'DSC_0530.jpg', 3),
(51, 'DSC_0548.jpg', 3),
(52, 'DSC_0670.jpg', 3),
(53, 'DSC_0671.jpg', 3),
(54, 'DSC_0741.jpg', 3),
(55, 'DSC_0841.jpg', 3),
(56, 'DSC_0845.jpg', 3),
(57, 'DSC_0847.jpg', 3),
(58, 'DSC_0853.jpg', 3),
(59, 'DSC_0895.jpg', 4),
(60, 'DSC_0915.jpg', 4),
(61, 'DSC_0916.jpg', 4),
(62, 'DSC_0917.jpg', 4),
(63, 'DSC_5781.jpg', 4),
(64, 'DSC_5783.jpg', 4),
(65, 'DSC_5826.jpg', 4),
(66, 'DSC_5827.jpg', 4),
(67, 'DSC_5856.jpg', 4),
(68, 'DSC_5857.jpg', 4),
(69, 'DSC_5862.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(2, 'Preemmy', 'thipsuda.karn-ngern@e-tech.ac.th', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'seazz', 'kamonpan.ornchorn@e-tech.ac.th', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `work_sample`
--

CREATE TABLE `work_sample` (
  `album_id` int(11) NOT NULL,
  `album_pic` varchar(50) NOT NULL,
  `album_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work_sample`
--

INSERT INTO `work_sample` (`album_id`, `album_pic`, `album_type`) VALUES
(1, 'BA0_7915.jpg', 'คอสเพลย์'),
(2, 'DSC_1307.jpg', 'รับปริญญา'),
(3, 'DSC_0522.jpg', 'วิวสวยๆ'),
(4, 'DSC_0917.jpg', 'อี.เทค');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_db`
--
ALTER TABLE `book_db`
  ADD PRIMARY KEY (`cus_no`);

--
-- Indexes for table `picture_work`
--
ALTER TABLE `picture_work`
  ADD PRIMARY KEY (`pic_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_sample`
--
ALTER TABLE `work_sample`
  ADD PRIMARY KEY (`album_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_db`
--
ALTER TABLE `book_db`
  MODIFY `cus_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `picture_work`
--
ALTER TABLE `picture_work`
  MODIFY `pic_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work_sample`
--
ALTER TABLE `work_sample`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
