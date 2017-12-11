-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2017 at 07:47 PM
-- Server version: 5.7.20
-- PHP Version: 5.6.23-1+deprecated+dontuse+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogcategory`
--

CREATE TABLE `blogcategory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogcategory`
--

INSERT INTO `blogcategory` (`id`, `name`, `title`) VALUES
(1, 'Coxbazar tour', 'one day in coxbazar'),
(2, 'test', 'test'),
(3, 'AAAAAAAAAA', 'sss'),
(4, 'AAAAAAAAAA', 'sss'),
(5, 'raihan9419@gmail.com', 'sss'),
(6, 'raihan9419@gmail.com', 'sss'),
(7, 'qsxA', 'QS');

-- --------------------------------------------------------

--
-- Table structure for table `blogpost`
--

CREATE TABLE `blogpost` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `author` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogpost`
--

INSERT INTO `blogpost` (`id`, `title`, `category`, `date`, `image`, `description`, `author`) VALUES
(1, 'love in coxbazar', '0', '0000-00-00 00:00:00', 'uploads/1d5168a83f.jpeg', '<p>Cox bazar is the largest sea beach in the world.Cox bazar is the largest sea beach in the world.Cox bazar is the largest sea beach in the world.Cox bazar is the largest sea beach in the world.Cox bazar is the largest sea beach in the world.Cox bazar is the largest sea beach in the world.</p>', 'Raihan'),
(2, 'post', '6', '0000-00-00 00:00:00', 'uploads/1d658ec25e.png', '', 'Raihan');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(30) NOT NULL,
  `time` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `title`, `category`, `time`, `image`, `description`) VALUES
(1, 'q', 'sx', 'ZXAZ', 'QSZA', 'zq'),
(2, '', '', '', '', ''),
(3, 'Bitcoin & Blockchain in Financial sector of  Bangladesh', '7', '3 days', 'uploads/4c00be2c9b.png', '<p>AXAXz</p>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'raihan9419@gmail.com', 'daa6b8d04ce72d953d5501adc53ddd82'),
(2, 'm.shojol80@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `usertour`
--

CREATE TABLE `usertour` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(30) NOT NULL,
  `time` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertour`
--

INSERT INTO `usertour` (`id`, `title`, `category`, `time`, `image`, `description`) VALUES
(1, 'Bitcoin & Blockchain in Financial sector of  Bangladesh', '7', '3 days', 'uploads/28002bbc21.png', '<p>aaaaaaaaaaaa</p>'),
(2, '', '7', '', 'uploads/', ''),
(3, 'Bitcoin & Blockchain in Financial sector of  Bangladesh', '7', '3 days', 'uploads/5fd881d82d.png', '<p>aaa</p>'),
(4, 'Bitcoin & Blockchain in Financial sector of  Bangladesh', '7', '3 days', 'uploads/d3089d98e1.png', '<p>aaa</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogcategory`
--
ALTER TABLE `blogcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertour`
--
ALTER TABLE `usertour`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogcategory`
--
ALTER TABLE `blogcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usertour`
--
ALTER TABLE `usertour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
