-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2018 at 12:43 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `email`, `password`) VALUES
('2', '1@k', '1'),
('a', '22@k', '1'),
('2', '2@kkk', '1'),
('2', '2@kkkk', '1'),
('2', '3333@kkkk', '2'),
('1', '333@k', '1'),
('22', 'aa@k', '221'),
('22', 'aa@kk', '221'),
('adas', 'asfafas', 'safasf'),
('adas', 'asfafasaa', 'safasf'),
('adas', 'asfafasaaa', 'safasf'),
('adas', 'asfafasaaaa', 'safasf'),
('adas', 'asfafasaaaaa', 'safasf'),
('adas', 'asfafasaaaaaa', 'safasf'),
('2', 'kk@y', '1'),
('11', 'kkk@y', '1'),
('1', 'll', '1'),
('11', 'yesh@', '1'),
('11', 'yesh@1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
