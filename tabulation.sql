-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 11:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabulation`
--

-- --------------------------------------------------------

--
-- Table structure for table `advocacy`
--

CREATE TABLE `advocacy` (
  `id` int(11) NOT NULL,
  `candidate_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `judge1` double NOT NULL,
  `judge2` double NOT NULL,
  `judge3` double NOT NULL,
  `judge4` double NOT NULL,
  `judge5` double NOT NULL,
  `average` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `advocacy`
--

INSERT INTO `advocacy` (`id`, `candidate_no`, `name`, `gender`, `judge1`, `judge2`, `judge3`, `judge4`, `judge5`, `average`) VALUES
(1, 1, 'Abdiel Czar Daguplo', 'Male', 7, 9, 8, 0, 0, 0),
(2, 1, 'Kate Grupp', 'Female', 7, 8, 8, 0, 0, 0),
(3, 2, 'Reymund Taer', 'Male', 8, 8, 7, 0, 0, 0),
(4, 2, 'Monique Tismo', 'Female', 6, 7, 7, 0, 0, 0),
(5, 3, 'Ralph Vincent Hormachuelos', 'Male', 6, 7, 6, 0, 0, 0),
(6, 3, 'Jv Mia Marie Gilman', 'Female', 10, 8, 8, 0, 0, 0),
(7, 4, 'Angelito Flores', 'Male', 9, 8, 8, 0, 0, 0),
(8, 4, 'Angelina Bompat', 'Female', 8, 10, 6.5, 0, 0, 0),
(9, 5, 'John Noel Sarong', 'Male', 9, 9, 9, 0, 0, 0),
(10, 5, 'Quenie Pargan', 'Female', 8, 8, 7, 0, 0, 0),
(11, 6, 'Albert Iman', 'Male', 8, 7, 9, 0, 0, 0),
(12, 6, 'Jonabrid Dinglasa', 'Female', 8, 10, 5, 0, 0, 0),
(13, 7, 'Edlizer Ko', 'Male', 8, 9, 7, 0, 0, 0),
(14, 7, 'Shamaine Bandoja', 'Female', 10, 8, 7, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `status`) VALUES
(1, 'Talent', 'DONE'),
(2, 'Production', 'ONGOING'),
(3, 'Sports_Wear', 'ONGOING'),
(4, 'Preliminary_Interview', 'ONGOING'),
(5, 'Formal_Wear', 'ONGOING'),
(6, 'Final_Interview', 'ONGOING');

-- --------------------------------------------------------

--
-- Table structure for table `contestant`
--

CREATE TABLE `contestant` (
  `id_contestant` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `team` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `candidate_no` int(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `talent_portion_sequenceNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contestant`
--

INSERT INTO `contestant` (`id_contestant`, `gender`, `team`, `full_name`, `candidate_no`, `picture`, `talent_portion_sequenceNo`) VALUES
(1, 'Male', 'TEAM URSA', 'Jemmy Lim II', 1, '3-male-ursa-talent.jpg', 3),
(2, 'Female', 'TEAM URSA', 'Jephtah Jabez Krista Leigh Galon', 1, '1-female-ursa-talent.jpg', 1),
(3, 'Male', 'TEAM PEGASUS', 'Geil Jadrian Valero', 2, '6-male-pegasus-talent.jpg', 6),
(4, 'Female', 'TEAM PEGASUS', 'Jersiel Ongotan', 2, '2-female-pegasus-talent.jpg', 2),
(5, 'Male', 'TEAM CENTAURUS', 'Prince Zeus Bandoja', 3, '1-male-centaurus-talent.jpg', 1),
(6, 'Female', 'TEAM CENTAURUS', 'Crislyn Dango', 3, '5-female-centaurus-talent.jpg', 5),
(7, 'Male', 'TEAM CRUX', 'Edward Esto', 4, '2-male-crux-talent.jpg', 2),
(8, 'Female', 'TEAM CRUX', 'Asuncion Angel Lagat', 4, '4-female-crux-talent.jpg', 4),
(9, 'Male', 'TEAM ORION', 'Rodel Paca', 5, '5-male-orion-talent.jpg', 5),
(10, 'Female', 'TEAM ORION', 'Christine Estrera', 5, '6-female-orion-talent.jpg', 6),
(11, 'Male', 'TEAM CASSIOPEIA', 'Christian Rey Montoya', 6, '4-male-cassiopeia-talent.jpg', 4),
(12, 'Female', 'TEAM CASSIOPEIA', 'Hannah Mae Gumisad', 6, '3-female-cassiopeia-talent.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `final_round`
--

CREATE TABLE `final_round` (
  `id` int(11) NOT NULL,
  `candidate_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `judge1` double NOT NULL,
  `judge2` double NOT NULL,
  `judge3` double NOT NULL,
  `judge4` double NOT NULL,
  `judge5` double NOT NULL,
  `average` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `final_round`
--

INSERT INTO `final_round` (`id`, `candidate_no`, `name`, `gender`, `judge1`, `judge2`, `judge3`, `judge4`, `judge5`, `average`) VALUES
(1, 1, 'Abdiel Czar Daguplo', 'Male', 0, 0, 0, 0, 0, 0),
(2, 1, 'Kate Grupp', 'Female', 0, 0, 0, 0, 0, 0),
(3, 2, 'Reymund Taer', 'Male', 0, 0, 0, 0, 0, 0),
(4, 2, 'Monique Tismo', 'Female', 0, 0, 0, 0, 0, 0),
(5, 3, 'Ralph Vincent Hormachuelos', 'Male', 0, 0, 0, 0, 0, 0),
(6, 3, 'Jv Mia Marie Gilman', 'Female', 0, 0, 0, 0, 0, 0),
(7, 4, 'Angelito Flores', 'Male', 0, 0, 0, 0, 0, 0),
(8, 4, 'Angelina Bompat', 'Female', 0, 0, 0, 0, 0, 0),
(9, 5, 'John Noel Sarong', 'Male', 0, 0, 0, 0, 0, 0),
(10, 5, 'Quenie Pargan', 'Female', 0, 0, 0, 0, 0, 0),
(11, 6, 'Albert Iman', 'Male', 0, 0, 0, 0, 0, 0),
(12, 6, 'Jonabrid Dinglasa', 'Female', 0, 0, 0, 0, 0, 0),
(13, 7, 'Edlizer Ko', 'Male', 0, 0, 0, 0, 0, 0),
(14, 7, 'Shamaine Bandoja', 'Female', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `account_type` varchar(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `account_type`, `username`, `password`, `status`) VALUES
(1, 'judge', 'judge1', '0e5836f8093ae1c6d241d39815b2d726b996196a', 'logout'),
(2, 'judge', 'judge2', '16c2e1116a08e11a22f10d4fcdc53071aa074540', 'logout'),
(3, 'judge', 'judge3', 'b9d9004bc201732c69f5caea688f65101d52a9c6', 'logout'),
(4, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'logout'),
(5, 'judge', 'judge4', '06451fc3d7712c7e0126a328cf785f15ab603e2d', 'logout'),
(6, 'judge', 'judge5', 'c60bd1240e85b24f5fa669a6845dce719863abbf', 'logout'),
(7, 'judge', 'judge6', 'd7c300f4b515d190b701df2dbfda3cca772c705c', 'logout'),
(8, 'judge', 'judge7', '3ecb218f4314d5a6153d57016712607218cefd6e', 'logout'),
(9, 'judge', 'judge8', '02616246e093008a92811f27413a644531dc5c3e', 'logout');

-- --------------------------------------------------------

--
-- Table structure for table `long_gown_formal_wear`
--

CREATE TABLE `long_gown_formal_wear` (
  `id` int(11) NOT NULL,
  `candidate_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `judge1` double NOT NULL,
  `judge2` double NOT NULL,
  `judge3` double NOT NULL,
  `judge4` double NOT NULL,
  `judge5` double NOT NULL,
  `average` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `long_gown_formal_wear`
--

INSERT INTO `long_gown_formal_wear` (`id`, `candidate_no`, `name`, `gender`, `judge1`, `judge2`, `judge3`, `judge4`, `judge5`, `average`) VALUES
(1, 1, 'Abdiel Czar Daguplo', 'Male', 0, 0, 0, 0, 0, 0),
(2, 1, 'Kate Grupp', 'Female', 0, 0, 0, 0, 0, 0),
(3, 2, 'Reymund Taer', 'Male', 0, 0, 0, 0, 0, 0),
(4, 2, 'Monique Tismo', 'Female', 0, 0, 0, 0, 0, 0),
(5, 3, 'Ralph Vincent Hormachuelos', 'Male', 0, 0, 0, 0, 0, 0),
(6, 3, 'Jv Mia Marie Gilman', 'Female', 0, 0, 0, 0, 0, 0),
(7, 4, 'Angelito Flores', 'Male', 0, 0, 0, 0, 0, 0),
(8, 4, 'Angelina Bompat', 'Female', 0, 0, 0, 0, 0, 0),
(9, 5, 'John Noel Sarong', 'Male', 0, 0, 0, 0, 0, 0),
(10, 5, 'Quenie Pargan', 'Female', 0, 0, 0, 0, 0, 0),
(11, 6, 'Albert Iman', 'Male', 0, 0, 0, 0, 0, 0),
(12, 6, 'Jonabrid Dinglasa', 'Female', 0, 0, 0, 0, 0, 0),
(13, 7, 'Edlizer Ko', 'Male', 0, 0, 0, 0, 0, 0),
(14, 7, 'Shamaine Bandoja', 'Female', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `preliminary_interview`
--

CREATE TABLE `preliminary_interview` (
  `id` int(11) NOT NULL,
  `candidate_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `judge1` double NOT NULL,
  `judge2` double NOT NULL,
  `judge3` double NOT NULL,
  `judge4` double NOT NULL,
  `judge5` double NOT NULL,
  `average` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `preliminary_interview`
--

INSERT INTO `preliminary_interview` (`id`, `candidate_no`, `name`, `gender`, `judge1`, `judge2`, `judge3`, `judge4`, `judge5`, `average`) VALUES
(1, 1, 'Abdiel Czar Daguplo', 'Male', 0, 0, 0, 0, 0, 0),
(2, 1, 'Kate Grupp', 'Female', 0, 0, 0, 0, 0, 0),
(3, 2, 'Reymund Taer', 'Male', 0, 0, 0, 0, 0, 0),
(4, 2, 'Monique Tismo', 'Female', 0, 0, 0, 0, 0, 0),
(5, 3, 'Ralph Vincent Hormachuelos', 'Male', 0, 0, 0, 0, 0, 0),
(6, 3, 'Jv Mia Marie Gilman', 'Female', 0, 0, 0, 0, 0, 0),
(7, 4, 'Angelito Flores', 'Male', 0, 0, 0, 0, 0, 0),
(8, 4, 'Angelina Bompat', 'Female', 0, 0, 0, 0, 0, 0),
(9, 5, 'John Noel Sarong', 'Male', 0, 0, 0, 0, 0, 0),
(10, 5, 'Quenie Pargan', 'Female', 0, 0, 0, 0, 0, 0),
(11, 6, 'Albert Iman', 'Male', 0, 0, 0, 0, 0, 0),
(12, 6, 'Jonabrid Dinglasa', 'Female', 0, 0, 0, 0, 0, 0),
(13, 7, 'Edlizer Ko', 'Male', 0, 0, 0, 0, 0, 0),
(14, 7, 'Shamaine Bandoja', 'Female', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `id` int(11) NOT NULL,
  `candidate_no` int(11) NOT NULL,
  `team` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `name_judge` varchar(255) NOT NULL,
  `poiseandbearing` double(100,2) NOT NULL,
  `mastery` double(100,2) NOT NULL,
  `self_introduction` double(100,2) NOT NULL,
  `audience_impact` double(100,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`id`, `candidate_no`, `team`, `name`, `gender`, `name_judge`, `poiseandbearing`, `mastery`, `self_introduction`, `audience_impact`) VALUES
(1, 1, 'TEAM URZA', 'Jemmy Lim II', 'Male', 'judge1', 12.00, 15.00, 25.00, 10.00),
(2, 1, 'TEAM URZA', 'Jemmy Lim II', 'Male', 'judge2', 0.00, 0.00, 0.00, 0.00),
(3, 1, 'TEAM URZA', 'Jemmy Lim II', 'Male', 'judge3', 0.00, 0.00, 0.00, 0.00),
(4, 1, 'TEAM URZA', 'Jemmy Lim II', 'Male', 'judge4', 0.00, 0.00, 0.00, 0.00),
(5, 1, 'TEAM URZA', 'Jemmy Lim II', 'Male', 'judge5', 0.00, 0.00, 0.00, 0.00),
(6, 1, 'TEAM URZA', 'Jemmy Lim II', 'Male', 'judge6', 0.00, 0.00, 0.00, 0.00),
(7, 1, 'TEAM URZA', 'Jemmy Lim II', 'Male', 'judge7', 0.00, 0.00, 0.00, 0.00),
(8, 1, 'TEAM URZA', 'Jephtah Jabez Krista Leigh Galon', 'Female', 'judge1', 2.00, 2.00, 2.00, 2.00),
(9, 1, 'TEAM URZA', 'Jephtah Jabez Krista Leigh Galon', 'Female', 'judge2', 0.00, 0.00, 0.00, 0.00),
(10, 1, 'TEAM URZA', 'Jephtah Jabez Krista Leigh Galon', 'Female', 'judge3', 0.00, 0.00, 0.00, 0.00),
(11, 1, 'TEAM URZA', 'Jephtah Jabez Krista Leigh Galon', 'Female', 'judge4', 0.00, 0.00, 0.00, 0.00),
(12, 1, 'TEAM URZA', 'Jephtah Jabez Krista Leigh Galon', 'Female', 'judge5', 0.00, 0.00, 0.00, 0.00),
(13, 1, 'TEAM URZA', 'Jephtah Jabez Krista Leigh Galon', 'Female', 'judge6', 0.00, 0.00, 0.00, 0.00),
(14, 1, 'TEAM URZA', 'Jephtah Jabez Krista Leigh Galon', 'Female', 'judge7', 0.00, 0.00, 0.00, 0.00),
(15, 2, 'TEAM PEGASUS', 'Geil Jadrian Valero', 'Male', 'judge1', 27.00, 25.00, 12.00, 5.00),
(16, 2, 'TEAM PEGASUS', 'Geil Jadrian Valero', 'Male', 'judge2', 0.00, 0.00, 0.00, 0.00),
(17, 2, 'TEAM PEGASUS', 'Geil Jadrian Valero', 'Male', 'judge3', 0.00, 0.00, 0.00, 0.00),
(18, 2, 'TEAM PEGASUS', 'Geil Jadrian Valero', 'Male', 'judge4', 0.00, 0.00, 0.00, 0.00),
(19, 2, 'TEAM PEGASUS', 'Geil Jadrian Valero', 'Male', 'judge5', 0.00, 0.00, 0.00, 0.00),
(20, 2, 'TEAM PEGASUS', 'Geil Jadrian Valero', 'Male', 'judge6', 0.00, 0.00, 0.00, 0.00),
(21, 2, 'TEAM PEGASUS', 'Geil Jadrian Valero', 'Male', 'judge7', 0.00, 0.00, 0.00, 0.00),
(22, 2, 'TEAM PEGASUS', 'Jersiel Ongotan', 'Female', 'judge1', 16.00, 30.00, 14.00, 3.00),
(23, 2, 'TEAM PEGASUS', 'Jersiel Ongotan', 'Female', 'judge2', 0.00, 0.00, 0.00, 0.00),
(24, 2, 'TEAM PEGASUS', 'Jersiel Ongotan', 'Female', 'judge3', 0.00, 0.00, 0.00, 0.00),
(25, 2, 'TEAM PEGASUS', 'Jersiel Ongotan', 'Female', 'judge4', 0.00, 0.00, 0.00, 0.00),
(26, 2, 'TEAM PEGASUS', 'Jersiel Ongotan', 'Female', 'judge5', 0.00, 0.00, 0.00, 0.00),
(27, 2, 'TEAM PEGASUS', 'Jersiel Ongotan', 'Female', 'judge6', 0.00, 0.00, 0.00, 0.00),
(28, 2, 'TEAM PEGASUS', 'Jersiel Ongotan', 'Female', 'judge7', 0.00, 0.00, 0.00, 0.00),
(29, 3, 'TEAM CENTAURUS', 'Prince Zeus Bandoja', 'Male', 'judge1', 13.00, 14.00, 15.00, 10.00),
(30, 3, 'TEAM CENTAURUS', 'Prince Zeus Bandoja', 'Male', 'judge2', 0.00, 0.00, 0.00, 0.00),
(31, 3, 'TEAM CENTAURUS', 'Prince Zeus Bandoja', 'Male', 'judge3', 0.00, 0.00, 0.00, 0.00),
(32, 3, 'TEAM CENTAURUS', 'Prince Zeus Bandoja', 'Male', 'judge4', 0.00, 0.00, 0.00, 0.00),
(33, 3, 'TEAM CENTAURUS', 'Prince Zeus Bandoja', 'Male', 'judge5', 0.00, 0.00, 0.00, 0.00),
(34, 3, 'TEAM CENTAURUS', 'Prince Zeus Bandoja', 'Male', 'judge6', 0.00, 0.00, 0.00, 0.00),
(35, 3, 'TEAM CENTAURUS', 'Prince Zeus Bandoja', 'Male', 'judge7', 0.00, 0.00, 0.00, 0.00),
(36, 3, 'TEAM CENTAURUS', 'Crislyn Dango', 'Female', 'judge1', 30.00, 30.00, 30.00, 8.00),
(37, 3, 'TEAM CENTAURUS', 'Crislyn Dango', 'Female', 'judge2', 0.00, 0.00, 0.00, 0.00),
(38, 3, 'TEAM CENTAURUS', 'Crislyn Dango', 'Female', 'judge3', 0.00, 0.00, 0.00, 0.00),
(39, 3, 'TEAM CENTAURUS', 'Crislyn Dango', 'Female', 'judge4', 0.00, 0.00, 0.00, 0.00),
(40, 3, 'TEAM CENTAURUS', 'Crislyn Dango', 'Female', 'judge5', 0.00, 0.00, 0.00, 0.00),
(41, 3, 'TEAM CENTAURUS', 'Crislyn Dango', 'Female', 'judge6', 0.00, 0.00, 0.00, 0.00),
(42, 3, 'TEAM CENTAURUS', 'Crislyn Dango', 'Female', 'judge7', 0.00, 0.00, 0.00, 0.00),
(43, 4, 'TEAM CRUX', 'Edward Esto', 'Male', 'judge1', 20.00, 20.00, 20.00, 9.00),
(44, 4, 'TEAM CRUX', 'Edward Esto', 'Male', 'judge2', 0.00, 0.00, 0.00, 0.00),
(45, 4, 'TEAM CRUX', 'Edward Esto', 'Male', 'judge3', 0.00, 0.00, 0.00, 0.00),
(46, 4, 'TEAM CRUX', 'Edward Esto', 'Male', 'judge4', 0.00, 0.00, 0.00, 0.00),
(47, 4, 'TEAM CRUX', 'Edward Esto', 'Male', 'judge5', 0.00, 0.00, 0.00, 0.00),
(48, 4, 'TEAM CRUX', 'Edward Esto', 'Male', 'judge6', 0.00, 0.00, 0.00, 0.00),
(49, 4, 'TEAM CRUX', 'Edward Esto', 'Male', 'judge7', 0.00, 0.00, 0.00, 0.00),
(50, 4, 'TEAM CRUX', 'Asuncion Angel Lagat', 'Female', 'judge1', 11.00, 11.00, 11.00, 9.00),
(51, 4, 'TEAM CRUX', 'Asuncion Angel Lagat', 'Female', 'judge2', 0.00, 0.00, 0.00, 0.00),
(52, 4, 'TEAM CRUX', 'Asuncion Angel Lagat', 'Female', 'judge3', 0.00, 0.00, 0.00, 0.00),
(53, 4, 'TEAM CRUX', 'Asuncion Angel Lagat', 'Female', 'judge4', 0.00, 0.00, 0.00, 0.00),
(54, 4, 'TEAM CRUX', 'Asuncion Angel Lagat', 'Female', 'judge5', 0.00, 0.00, 0.00, 0.00),
(55, 4, 'TEAM CRUX', 'Asuncion Angel Lagat', 'Female', 'judge6', 0.00, 0.00, 0.00, 0.00),
(56, 4, 'TEAM CRUX', 'Asuncion Angel Lagat', 'Female', 'judge7', 0.00, 0.00, 0.00, 0.00),
(57, 5, 'TEAM ORION', 'Rodel Paca', 'Male', 'judge1', 13.00, 13.00, 13.00, 10.00),
(58, 5, 'TEAM ORION', 'Rodel Paca', 'Male', 'judge2', 0.00, 0.00, 0.00, 0.00),
(59, 5, 'TEAM ORION', 'Rodel Paca', 'Male', 'judge3', 0.00, 0.00, 0.00, 0.00),
(60, 5, 'TEAM ORION', 'Rodel Paca', 'Male', 'judge4', 0.00, 0.00, 0.00, 0.00),
(61, 5, 'TEAM ORION', 'Rodel Paca', 'Male', 'judge5', 0.00, 0.00, 0.00, 0.00),
(62, 5, 'TEAM ORION', 'Rodel Paca', 'Male', 'judge6', 0.00, 0.00, 0.00, 0.00),
(63, 5, 'TEAM ORION', 'Rodel Paca', 'Male', 'judge7', 0.00, 0.00, 0.00, 0.00),
(64, 5, 'TEAM ORION', 'Christine Estrera', 'Female', 'judge1', 13.00, 16.00, 15.00, 8.00),
(65, 5, 'TEAM ORION', 'Christine Estrera', 'Female', 'judge2', 0.00, 0.00, 0.00, 0.00),
(66, 5, 'TEAM ORION', 'Christine Estrera', 'Female', 'judge3', 0.00, 0.00, 0.00, 0.00),
(67, 5, 'TEAM ORION', 'Christine Estrera', 'Female', 'judge4', 0.00, 0.00, 0.00, 0.00),
(68, 5, 'TEAM ORION', 'Christine Estrera', 'Female', 'judge5', 0.00, 0.00, 0.00, 0.00),
(69, 5, 'TEAM ORION', 'Christine Estrera', 'Female', 'judge6', 0.00, 0.00, 0.00, 0.00),
(70, 5, 'TEAM ORION', 'Christine Estrera', 'Female', 'judge7', 0.00, 0.00, 0.00, 0.00),
(71, 6, 'TEAM CASSIOPEIA', 'Christian Rey Montoya', 'Male', 'judge1', 26.00, 26.00, 26.00, 8.00),
(72, 6, 'TEAM CASSIOPEIA', 'Christian Rey Montoya', 'Male', 'judge2', 0.00, 0.00, 0.00, 0.00),
(73, 6, 'TEAM CASSIOPEIA', 'Christian Rey Montoya', 'Male', 'judge3', 0.00, 0.00, 0.00, 0.00),
(74, 6, 'TEAM CASSIOPEIA', 'Christian Rey Montoya', 'Male', 'judge4', 0.00, 0.00, 0.00, 0.00),
(75, 6, 'TEAM CASSIOPEIA', 'Christian Rey Montoya', 'Male', 'judge5', 0.00, 0.00, 0.00, 0.00),
(76, 6, 'TEAM CASSIOPEIA', 'Christian Rey Montoya', 'Male', 'judge6', 0.00, 0.00, 0.00, 0.00),
(77, 6, 'TEAM CASSIOPEIA', 'Christian Rey Montoya', 'Male', 'judge7', 0.00, 0.00, 0.00, 0.00),
(78, 6, 'TEAM CASSIOPEIA', 'Hannah Mae Gumisad', 'Female', 'judge1', 24.00, 24.00, 26.00, 9.00),
(79, 6, 'TEAM CASSIOPEIA', 'Hannah Mae Gumisad', 'Female', 'judge2', 0.00, 0.00, 0.00, 0.00),
(80, 6, 'TEAM CASSIOPEIA', 'Hannah Mae Gumisad', 'Female', 'judge3', 0.00, 0.00, 0.00, 0.00),
(81, 6, 'TEAM CASSIOPEIA', 'Hannah Mae Gumisad', 'Female', 'judge4', 0.00, 0.00, 0.00, 0.00),
(82, 6, 'TEAM CASSIOPEIA', 'Hannah Mae Gumisad', 'Female', 'judge5', 0.00, 0.00, 0.00, 0.00),
(83, 6, 'TEAM CASSIOPEIA', 'Hannah Mae Gumisad', 'Female', 'judge6', 0.00, 0.00, 0.00, 0.00),
(84, 6, 'TEAM CASSIOPEIA', 'Hannah Mae Gumisad', 'Female', 'judge7', 0.00, 0.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`no`) VALUES
(1),
(2),
(3),
(4),
(5),
(6);

-- --------------------------------------------------------

--
-- Table structure for table `score_card`
--

CREATE TABLE `score_card` (
  `id` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `name_contestant` varchar(100) NOT NULL,
  `id_contestant` int(100) NOT NULL,
  `name_judge` varchar(100) NOT NULL,
  `talent_portion_stagePresent` double(100,2) NOT NULL,
  `talent_portion_stagePresent_vote` double(100,2) NOT NULL,
  `talent_portion_mastery` double(100,2) NOT NULL,
  `talent_portion_mastery_vote` double(100,2) NOT NULL,
  `talent_portion_uniqueness` double(100,2) NOT NULL,
  `talent_portion_uniqueness_vote` double(100,2) NOT NULL,
  `talent_portion_audience_impact` double(100,2) NOT NULL,
  `talent_portion_audience_impact_vote` double(100,2) NOT NULL,
  `production_PoiseandBearing` double(100,2) NOT NULL,
  `production_PoiseandBearing_vote` double(100,2) NOT NULL,
  `production_mastery` double(100,2) NOT NULL,
  `production_mastery_vote` double(100,2) NOT NULL,
  `production_self_introduction` double(100,2) NOT NULL,
  `production_self_introduction_vote` double(100,2) NOT NULL,
  `production_audience_impact` double(100,2) NOT NULL,
  `production_audience_impact_vote` double(100,2) NOT NULL,
  `sports_wear_figure` double(100,2) NOT NULL,
  `sports_wear_figure_vote` double(100,2) NOT NULL,
  `sports_wear_sports_identity` double(100,2) NOT NULL,
  `sports_wear_sports_identity_vote` double(100,2) NOT NULL,
  `sports_wear_PoiseandBearing` double(100,2) NOT NULL,
  `sports_wear_PoiseandBearing_vote` double(100,2) NOT NULL,
  `sports_wear_overall_impact` double(100,2) NOT NULL,
  `sports_wear_overall_impact_vote` double(100,2) NOT NULL,
  `preliminary_interview_WitandContext` double(100,2) NOT NULL,
  `preliminary_interview_WitandContext_vote` double(100,2) NOT NULL,
  `preliminary_interview_stagePresent` double(100,2) NOT NULL,
  `preliminary_interview_stagePresent_vote` double(100,2) NOT NULL,
  `preliminary_interview_ProjectionandDelivery` double(100,2) NOT NULL,
  `preliminary_interview_ProjectionandDelivery_vote` double(100,2) NOT NULL,
  `preliminary_interview_overall_impact` double(100,2) NOT NULL,
  `preliminary_interview_overall_impact_vote` double(100,2) NOT NULL,
  `formal_wear_DesignandFitting` double(100,2) NOT NULL,
  `formal_wear_DesignandFitting_vote` double(100,2) NOT NULL,
  `formal_wear_stageDeportment` double(100,2) NOT NULL,
  `formal_wear_stageDeportment_vote` double(100,2) NOT NULL,
  `formal_wear_PoiseandBearing` double(100,2) NOT NULL,
  `formal_wear_PoiseandBearing_vote` double(100,2) NOT NULL,
  `formal_wear_overall_impact` double(100,2) NOT NULL,
  `formal_wear_overall_impact_vote` double(100,2) NOT NULL,
  `final_interview_WitandContext` double(100,2) NOT NULL,
  `final_interview_WitandContext_vote` double(100,2) NOT NULL,
  `final_interview_stagePresence` double(100,2) NOT NULL,
  `final_interview_stagePresence_vote` double(100,2) NOT NULL,
  `final_interview_ProjectionandDelivery` double(100,2) NOT NULL,
  `final_interview_ProjectionandDelivery_vote` double(100,2) NOT NULL,
  `final_interview_overall_impact` double(100,2) NOT NULL,
  `final_interview_overall_impact_vote` double(100,2) NOT NULL,
  `grand_total` double(100,2) NOT NULL,
  `talent_portion_stagePresent_edit` int(11) NOT NULL,
  `talent_portion_mastery_edit` int(11) NOT NULL,
  `talent_portion_uniqueness_edit` int(11) NOT NULL,
  `talent_portion_audience_impact_edit` int(11) NOT NULL,
  `production_PoiseandBearing_edit` int(11) NOT NULL,
  `production_mastery_edit` int(11) NOT NULL,
  `production_self_introduction_edit` int(11) NOT NULL,
  `production_audience_impact_edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `score_card`
--

INSERT INTO `score_card` (`id`, `gender`, `name_contestant`, `id_contestant`, `name_judge`, `talent_portion_stagePresent`, `talent_portion_stagePresent_vote`, `talent_portion_mastery`, `talent_portion_mastery_vote`, `talent_portion_uniqueness`, `talent_portion_uniqueness_vote`, `talent_portion_audience_impact`, `talent_portion_audience_impact_vote`, `production_PoiseandBearing`, `production_PoiseandBearing_vote`, `production_mastery`, `production_mastery_vote`, `production_self_introduction`, `production_self_introduction_vote`, `production_audience_impact`, `production_audience_impact_vote`, `sports_wear_figure`, `sports_wear_figure_vote`, `sports_wear_sports_identity`, `sports_wear_sports_identity_vote`, `sports_wear_PoiseandBearing`, `sports_wear_PoiseandBearing_vote`, `sports_wear_overall_impact`, `sports_wear_overall_impact_vote`, `preliminary_interview_WitandContext`, `preliminary_interview_WitandContext_vote`, `preliminary_interview_stagePresent`, `preliminary_interview_stagePresent_vote`, `preliminary_interview_ProjectionandDelivery`, `preliminary_interview_ProjectionandDelivery_vote`, `preliminary_interview_overall_impact`, `preliminary_interview_overall_impact_vote`, `formal_wear_DesignandFitting`, `formal_wear_DesignandFitting_vote`, `formal_wear_stageDeportment`, `formal_wear_stageDeportment_vote`, `formal_wear_PoiseandBearing`, `formal_wear_PoiseandBearing_vote`, `formal_wear_overall_impact`, `formal_wear_overall_impact_vote`, `final_interview_WitandContext`, `final_interview_WitandContext_vote`, `final_interview_stagePresence`, `final_interview_stagePresence_vote`, `final_interview_ProjectionandDelivery`, `final_interview_ProjectionandDelivery_vote`, `final_interview_overall_impact`, `final_interview_overall_impact_vote`, `grand_total`, `talent_portion_stagePresent_edit`, `talent_portion_mastery_edit`, `talent_portion_uniqueness_edit`, `talent_portion_audience_impact_edit`, `production_PoiseandBearing_edit`, `production_mastery_edit`, `production_self_introduction_edit`, `production_audience_impact_edit`) VALUES
(1, 'Male', 'Jemmy Lim II', 1, 'judge1', 18.00, 1.00, 35.00, 1.00, 25.00, 1.00, 8.00, 1.00, 12.00, 1.00, 15.00, 1.00, 25.00, 1.00, 10.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 15.75, 0, 0, 0, 0, 1, 1, 1, 1),
(2, 'Male', 'Jemmy Lim II', 1, 'judge2', 17.00, 1.00, 32.00, 1.00, 30.00, 1.00, 9.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 13.34, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Male', 'Jemmy Lim II', 1, 'judge3', 16.00, 1.00, 35.00, 1.00, 25.00, 1.00, 8.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 14.08, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Male', 'Jemmy Lim II', 1, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Male', 'Jemmy Lim II', 1, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Male', 'Jemmy Lim II', 1, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Male', 'Jemmy Lim II', 1, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'Female', 'Jephtah Jabez Krista Leigh Galon', 1, 'judge1', 17.00, 1.00, 38.00, 1.00, 28.00, 1.00, 8.00, 1.00, 2.00, 1.00, 2.00, 1.00, 2.00, 1.00, 2.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 15.75, 0, 0, 0, 0, 1, 1, 1, 1),
(9, 'Female', 'Jephtah Jabez Krista Leigh Galon', 1, 'judge2', 15.00, 1.00, 30.00, 1.00, 20.00, 1.00, 7.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 13.34, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'Female', 'Jephtah Jabez Krista Leigh Galon', 1, 'judge3', 17.00, 1.00, 35.00, 1.00, 25.00, 1.00, 8.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 14.08, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'Female', 'Jephtah Jabez Krista Leigh Galon', 1, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'Female', 'Jephtah Jabez Krista Leigh Galon', 1, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'Female', 'Jephtah Jabez Krista Leigh Galon', 1, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'Female', 'Jephtah Jabez Krista Leigh Galon', 1, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'Male', 'Geil Jadrian Valero ', 2, 'judge1', 17.00, 1.00, 35.00, 1.00, 25.00, 1.00, 8.00, 1.00, 27.00, 1.00, 25.00, 1.00, 12.00, 1.00, 5.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 13.41, 0, 0, 0, 0, 1, 1, 1, 1),
(16, 'Male', 'Geil Jadrian Valero ', 2, 'judge2', 10.00, 1.00, 30.00, 1.00, 15.00, 1.00, 8.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'Male', 'Geil Jadrian Valero ', 2, 'judge3', 15.00, 1.00, 33.00, 1.00, 21.00, 1.00, 8.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'Male', 'Geil Jadrian Valero ', 2, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'Male', 'Geil Jadrian Valero ', 2, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'Male', 'Geil Jadrian Valero ', 2, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'Male', 'Geil Jadrian Valero ', 2, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'Female', 'Jersiel Ongotan', 2, 'judge1', 14.00, 1.00, 34.00, 1.00, 24.00, 1.00, 4.00, 1.00, 16.00, 1.00, 30.00, 1.00, 14.00, 1.00, 3.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 13.41, 0, 0, 0, 0, 1, 1, 1, 1),
(23, 'Female', 'Jersiel Ongotan', 2, 'judge2', 10.00, 1.00, 30.00, 1.00, 15.00, 1.00, 8.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'Female', 'Jersiel Ongotan', 2, 'judge3', 14.00, 1.00, 32.00, 1.00, 22.00, 1.00, 7.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'Female', 'Jersiel Ongotan', 2, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'Female', 'Jersiel Ongotan', 2, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'Female', 'Jersiel Ongotan', 2, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 'Female', 'Jersiel Ongotan', 2, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 'Male', 'Prince Zeus Bandoja', 3, 'judge1', 14.00, 1.00, 34.00, 1.00, 24.00, 1.00, 4.00, 1.00, 13.00, 1.00, 14.00, 1.00, 15.00, 1.00, 10.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 13.67, 0, 0, 0, 0, 1, 1, 1, 1),
(30, 'Male', 'Prince Zeus Bandoja', 3, 'judge2', 10.00, 1.00, 20.00, 1.00, 16.00, 1.00, 5.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 11.25, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 'Male', 'Prince Zeus Bandoja', 3, 'judge3', 15.00, 1.00, 32.00, 1.00, 23.00, 1.00, 8.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 13.00, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 'Male', 'Prince Zeus Bandoja', 3, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 'Male', 'Prince Zeus Bandoja', 3, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 'Male', 'Prince Zeus Bandoja', 3, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 'Male', 'Prince Zeus Bandoja', 3, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 'Female', 'Crislyn Dango', 3, 'judge1', 17.00, 1.00, 37.00, 1.00, 26.00, 1.00, 8.00, 1.00, 30.00, 1.00, 30.00, 1.00, 30.00, 1.00, 8.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 13.67, 0, 0, 0, 0, 1, 1, 1, 1),
(37, 'Female', 'Crislyn Dango', 3, 'judge2', 18.00, 1.00, 35.00, 1.00, 23.00, 1.00, 8.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 11.25, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 'Female', 'Crislyn Dango', 3, 'judge3', 15.00, 1.00, 34.00, 1.00, 24.00, 1.00, 8.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 13.00, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 'Female', 'Crislyn Dango', 3, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 'Female', 'Crislyn Dango', 3, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 'Female', 'Crislyn Dango', 3, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 'Female', 'Crislyn Dango', 3, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 'Male', 'Edward Esto', 4, 'judge1', 18.00, 1.00, 39.00, 1.00, 29.00, 1.00, 9.00, 1.00, 20.00, 1.00, 20.00, 1.00, 20.00, 1.00, 9.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 16.11, 0, 1, 1, 1, 1, 1, 1, 1),
(44, 'Male', 'Edward Esto', 4, 'judge2', 20.00, 1.00, 38.00, 1.00, 28.00, 1.00, 10.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 6.17, 1, 1, 1, 1, 0, 0, 0, 0),
(45, 'Male', 'Edward Esto', 4, 'judge3', 15.00, 1.00, 35.00, 1.00, 26.00, 1.00, 8.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 6.33, 0, 1, 1, 1, 0, 0, 0, 0),
(46, 'Male', 'Edward Esto', 4, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 'Male', 'Edward Esto', 4, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 'Male', 'Edward Esto', 4, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 'Male', 'Edward Esto', 4, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 'Female', 'Asuncion Angel Lagat', 4, 'judge1', 17.00, 1.00, 35.00, 1.00, 26.00, 1.00, 10.00, 1.00, 11.00, 1.00, 11.00, 1.00, 11.00, 1.00, 9.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 16.11, 0, 0, 0, 0, 1, 1, 1, 1),
(51, 'Female', 'Asuncion Angel Lagat', 4, 'judge2', 16.00, 1.00, 33.00, 1.00, 20.00, 1.00, 10.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 6.17, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 'Female', 'Asuncion Angel Lagat', 4, 'judge3', 17.00, 1.00, 35.00, 1.00, 23.00, 1.00, 9.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 6.33, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 'Female', 'Asuncion Angel Lagat', 4, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 'Female', 'Asuncion Angel Lagat', 4, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 'Female', 'Asuncion Angel Lagat', 4, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 'Female', 'Asuncion Angel Lagat', 4, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 'Male', 'Rodel Paca', 5, 'judge1', 16.00, 1.00, 36.00, 1.00, 26.00, 1.00, 6.00, 1.00, 13.00, 1.00, 13.00, 1.00, 13.00, 1.00, 10.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 13.92, 0, 0, 0, 0, 1, 1, 1, 1),
(58, 'Male', 'Rodel Paca', 5, 'judge2', 18.00, 1.00, 35.00, 1.00, 15.00, 1.00, 8.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 'Male', 'Rodel Paca', 5, 'judge3', 15.00, 1.00, 33.00, 1.00, 22.00, 1.00, 7.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 'Male', 'Rodel Paca', 5, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 'Male', 'Rodel Paca', 5, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 'Male', 'Rodel Paca', 5, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 'Male', 'Rodel Paca', 5, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 'Female', 'Christine Estrera', 5, 'judge1', 16.00, 1.00, 35.00, 1.00, 25.00, 1.00, 7.00, 1.00, 13.00, 1.00, 16.00, 1.00, 15.00, 1.00, 8.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 13.92, 0, 0, 0, 0, 1, 1, 1, 1),
(65, 'Female', 'Christine Estrera', 5, 'judge2', 15.00, 1.00, 30.00, 1.00, 15.00, 1.00, 7.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 'Female', 'Christine Estrera', 5, 'judge3', 15.00, 1.00, 34.00, 1.00, 23.00, 1.00, 8.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 'Female', 'Christine Estrera', 5, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 'Female', 'Christine Estrera', 5, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 'Female', 'Christine Estrera', 5, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 'Female', 'Christine Estrera', 5, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 'Male', 'Christian Rey Montoya', 6, 'judge1', 14.00, 1.00, 33.00, 1.00, 24.00, 1.00, 4.00, 1.00, 26.00, 1.00, 26.00, 1.00, 26.00, 1.00, 8.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 13.99, 0, 0, 0, 0, 1, 1, 1, 1),
(72, 'Male', 'Christian Rey Montoya', 6, 'judge2', 8.00, 1.00, 20.00, 1.00, 13.00, 1.00, 5.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 9.25, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 'Male', 'Christian Rey Montoya', 6, 'judge3', 14.00, 1.00, 30.00, 1.00, 20.00, 1.00, 6.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 12.16, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 'Male', 'Christian Rey Montoya', 6, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 'Male', 'Christian Rey Montoya', 6, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 'Male', 'Christian Rey Montoya', 6, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 'Male', 'Christian Rey Montoya', 6, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 'Female', 'Hannah Mae Gumisad', 6, 'judge1', 15.00, 1.00, 36.00, 1.00, 24.00, 1.00, 5.00, 1.00, 24.00, 1.00, 24.00, 1.00, 26.00, 1.00, 9.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 13.99, 0, 0, 0, 0, 1, 1, 1, 1),
(79, 'Female', 'Hannah Mae Gumisad', 6, 'judge2', 10.00, 1.00, 30.00, 1.00, 20.00, 1.00, 5.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 9.25, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 'Female', 'Hannah Mae Gumisad', 6, 'judge3', 14.00, 1.00, 32.00, 1.00, 23.00, 1.00, 7.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 12.16, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 'Female', 'Hannah Mae Gumisad', 6, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 'Female', 'Hannah Mae Gumisad', 6, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 'Female', 'Hannah Mae Gumisad', 6, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 'Female', 'Hannah Mae Gumisad', 6, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sports_wear`
--

CREATE TABLE `sports_wear` (
  `id` int(11) NOT NULL,
  `candidate_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `judge1` double NOT NULL,
  `judge2` double NOT NULL,
  `judge3` double NOT NULL,
  `judge4` double NOT NULL,
  `judge5` double NOT NULL,
  `average` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sports_wear`
--

INSERT INTO `sports_wear` (`id`, `candidate_no`, `name`, `gender`, `judge1`, `judge2`, `judge3`, `judge4`, `judge5`, `average`) VALUES
(1, 1, 'Abdiel Czar Daguplo', 'Male', 15, 0, 0, 0, 0, 0),
(2, 1, 'Kate Grupp', 'Female', 13, 28, 0, 0, 0, 0),
(3, 2, 'Reymund Taer', 'Male', 3, 2, 0, 0, 0, 0),
(4, 2, 'Monique Tismo', 'Female', 3, 23, 0, 0, 0, 0),
(5, 3, 'Ralph Vincent Hormachuelos', 'Male', 6, 12, 0, 0, 0, 0),
(6, 3, 'Jv Mia Marie Gilman', 'Female', 12, 0, 0, 0, 0, 0),
(7, 4, 'Angelito Flores', 'Male', 0, 0, 0, 0, 0, 0),
(8, 4, 'Angelina Bompat', 'Female', 14, 0, 0, 0, 0, 0),
(9, 5, 'John Noel Sarong', 'Male', 23, 0, 0, 0, 0, 0),
(10, 5, 'Quenie Pargan', 'Female', 1, 0, 0, 0, 0, 0),
(11, 6, 'Albert Iman', 'Male', 5, 0, 0, 0, 0, 0),
(12, 6, 'Jonabrid Dinglasa', 'Female', 5, 0, 0, 0, 0, 0),
(13, 7, 'Edlizer Ko', 'Male', 3, 0, 0, 0, 0, 0),
(14, 7, 'Shamaine Bandoja', 'Female', 12, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `talent_portion`
--

CREATE TABLE `talent_portion` (
  `id` int(11) NOT NULL,
  `candidate_no` int(11) NOT NULL,
  `team` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `name_judge` varchar(255) NOT NULL,
  `stage_present` double(100,2) NOT NULL,
  `mastery` double(100,2) NOT NULL,
  `uniqueness` double(100,2) NOT NULL,
  `audience_impact` double(100,2) NOT NULL,
  `talent_portion_sequence` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `talent_portion`
--

INSERT INTO `talent_portion` (`id`, `candidate_no`, `team`, `name`, `gender`, `name_judge`, `stage_present`, `mastery`, `uniqueness`, `audience_impact`, `talent_portion_sequence`) VALUES
(1, 1, 'TEAM URZA', 'Jemmy Lim II', 'Male', 'judge1', 18.00, 35.00, 25.00, 8.00, 3),
(2, 1, 'TEAM URZA', 'Jemmy Lim II', 'Male', 'judge2', 17.00, 32.00, 30.00, 9.00, 3),
(3, 1, 'TEAM URZA', 'Jemmy Lim II', 'Male', 'judge3', 16.00, 35.00, 25.00, 8.00, 3),
(4, 1, 'TEAM URZA', 'Jephtah Jabez Krista Leigh Galon', 'Female', 'judge1', 17.00, 38.00, 28.00, 8.00, 1),
(5, 1, 'TEAM URZA', 'Jephtah Jabez Krista Leigh Galon', 'Female', 'judge2', 15.00, 30.00, 20.00, 7.00, 1),
(6, 1, 'TEAM URZA', 'Jephtah Jabez Krista Leigh Galon', 'Female', 'judge3', 17.00, 35.00, 25.00, 8.00, 1),
(7, 2, 'TEAM PEGASUS', 'Geil Jadrian Valero', 'Male', 'judge1', 17.00, 35.00, 25.00, 8.00, 6),
(8, 2, 'TEAM PEGASUS', 'Geil Jadrian Valero', 'Male', 'judge2', 10.00, 30.00, 15.00, 8.00, 6),
(9, 2, 'TEAM PEGASUS', 'Geil Jadrian Valero', 'Male', 'judge3', 15.00, 33.00, 21.00, 8.00, 6),
(10, 2, 'TEAM PEGASUS', 'Jersiel Ongotan', 'Female', 'judge1', 14.00, 34.00, 24.00, 4.00, 2),
(11, 2, 'TEAM PEGASUS', 'Jersiel Ongotan', 'Female', 'judge2', 10.00, 30.00, 15.00, 8.00, 2),
(12, 2, 'TEAM PEGASUS', 'Jersiel Ongotan', 'Female', 'judge3', 14.00, 32.00, 22.00, 7.00, 2),
(13, 3, 'TEAM CENTAURUS', 'Prince Zeus Bandoja', 'Male', 'judge1', 14.00, 34.00, 24.00, 4.00, 1),
(14, 3, 'TEAM CENTAURUS', 'Prince Zeus Bandoja', 'Male', 'judge2', 10.00, 20.00, 16.00, 5.00, 1),
(15, 3, 'TEAM CENTAURUS', 'Prince Zeus Bandoja', 'Male', 'judge3', 15.00, 32.00, 23.00, 8.00, 1),
(16, 3, 'TEAM CENTAURUS', 'Crislyn Dango', 'Female', 'judge1', 17.00, 37.00, 26.00, 8.00, 5),
(17, 3, 'TEAM CENTAURUS', 'Crislyn Dango', 'Female', 'judge2', 18.00, 35.00, 23.00, 8.00, 5),
(18, 3, 'TEAM CENTAURUS', 'Crislyn Dango', 'Female', 'judge3', 15.00, 34.00, 24.00, 8.00, 5),
(19, 4, 'TEAM CRUX', 'Edward Esto', 'Male', 'judge1', 18.00, 39.00, 29.00, 9.00, 2),
(20, 4, 'TEAM CRUX', 'Edward Esto', 'Male', 'judge2', 20.00, 38.00, 28.00, 10.00, 2),
(21, 4, 'TEAM CRUX', 'Edward Esto', 'Male', 'judge3', 15.00, 35.00, 26.00, 8.00, 2),
(22, 4, 'TEAM CRUX', 'Asuncion Angel Lagat', 'Female', 'judge1', 17.00, 35.00, 26.00, 10.00, 4),
(23, 4, 'TEAM CRUX', 'Asuncion Angel Lagat', 'Female', 'judge2', 16.00, 33.00, 20.00, 10.00, 4),
(24, 4, 'TEAM CRUX', 'Asuncion Angel Lagat', 'Female', 'judge3', 17.00, 35.00, 23.00, 9.00, 4),
(25, 5, 'TEAM ORION', 'Rodel Paca', 'Male', 'judge1', 16.00, 36.00, 26.00, 6.00, 5),
(26, 5, 'TEAM ORION', 'Rodel Paca', 'Male', 'judge2', 18.00, 35.00, 15.00, 8.00, 5),
(27, 5, 'TEAM ORION', 'Rodel Paca', 'Male', 'judge3', 15.00, 33.00, 22.00, 7.00, 5),
(28, 5, 'TEAM ORION', 'Christine Estrera', 'Female', 'judge1', 16.00, 35.00, 25.00, 7.00, 6),
(29, 5, 'TEAM ORION', 'Christine Estrera', 'Female', 'judge2', 15.00, 30.00, 15.00, 7.00, 6),
(30, 5, 'TEAM ORION', 'Christine Estrera', 'Female', 'judge3', 15.00, 34.00, 23.00, 8.00, 6),
(31, 6, 'TEAM CASSIOPEIA', 'Christian Rey Montoya', 'Male', 'judge1', 14.00, 33.00, 24.00, 4.00, 4),
(32, 6, 'TEAM CASSIOPEIA', 'Christian Rey Montoya', 'Male', 'judge2', 8.00, 20.00, 13.00, 5.00, 4),
(33, 6, 'TEAM CASSIOPEIA', 'Christian Rey Montoya', 'Male', 'judge3', 14.00, 30.00, 20.00, 6.00, 4),
(34, 6, 'TEAM CASSIOPEIA', 'Hannah Mae Gumisad', 'Female', 'judge1', 15.00, 36.00, 24.00, 5.00, 3),
(35, 6, 'TEAM CASSIOPEIA', 'Hannah Mae Gumisad', 'Female', 'judge2', 10.00, 30.00, 20.00, 5.00, 3),
(36, 6, 'TEAM CASSIOPEIA', 'Hannah Mae Gumisad', 'Female', 'judge3', 14.00, 32.00, 23.00, 7.00, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advocacy`
--
ALTER TABLE `advocacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contestant`
--
ALTER TABLE `contestant`
  ADD PRIMARY KEY (`id_contestant`);

--
-- Indexes for table `final_round`
--
ALTER TABLE `final_round`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `long_gown_formal_wear`
--
ALTER TABLE `long_gown_formal_wear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preliminary_interview`
--
ALTER TABLE `preliminary_interview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `score_card`
--
ALTER TABLE `score_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports_wear`
--
ALTER TABLE `sports_wear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `talent_portion`
--
ALTER TABLE `talent_portion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advocacy`
--
ALTER TABLE `advocacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contestant`
--
ALTER TABLE `contestant`
  MODIFY `id_contestant` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `final_round`
--
ALTER TABLE `final_round`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `long_gown_formal_wear`
--
ALTER TABLE `long_gown_formal_wear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `preliminary_interview`
--
ALTER TABLE `preliminary_interview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `score_card`
--
ALTER TABLE `score_card`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `sports_wear`
--
ALTER TABLE `sports_wear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `talent_portion`
--
ALTER TABLE `talent_portion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
