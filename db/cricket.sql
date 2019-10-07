-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2019 at 02:47 PM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.2.22-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket`
--

-- --------------------------------------------------------

--
-- Table structure for table `match`
--

CREATE TABLE `match` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `match_date` datetime(6) DEFAULT NULL,
  `match_result` varchar(100) DEFAULT NULL,
  `team1_id` int(11) NOT NULL,
  `team2_id` int(11) NOT NULL,
  `created_at` datetime(6) NOT NULL DEFAULT '1970-01-02 00:00:00.000000',
  `updated_at` datetime(6) NOT NULL DEFAULT '1970-01-02 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `image_uri` varchar(200) DEFAULT NULL,
  `player_jersey_number` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `matches` int(10) DEFAULT NULL,
  `run` int(10) DEFAULT NULL,
  `highest_score` varchar(100) DEFAULT NULL,
  `fifties` int(10) DEFAULT NULL,
  `hundreds` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `first_name`, `last_name`, `image_uri`, `player_jersey_number`, `country`, `matches`, `run`, `highest_score`, `fifties`, `hundreds`) VALUES
(1, 'test 1', 'test', 'shopping1569480022.png', '', '', NULL, 120, '', NULL, NULL),
(2, 'fasfs', 'fsafd', '', '', '', NULL, NULL, '', NULL, NULL),
(3, 'test222', 'fwfew', '', '', '', NULL, NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `logo_uri` text NOT NULL,
  `club_state` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `logo_uri`, `club_state`) VALUES
(7, 'A12', 'ticket1569320881.png', ''),
(8, 'A11', 'ticket1569473814.png', ''),
(10, 'Ass', 'ticket1569473804.png', ''),
(11, 'fdafdafdadfa', 'ticket1569473826.png', '21211');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `match`
--
ALTER TABLE `match`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `match`
--
ALTER TABLE `match`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
