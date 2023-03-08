-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 07:05 PM
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
-- Table structure for table `contestant`
--

CREATE TABLE `contestant` (
  `id_contestant` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `team` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `candidate_no` int(100) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contestant`
--

INSERT INTO `contestant` (`id_contestant`, `gender`, `team`, `full_name`, `candidate_no`, `picture`) VALUES
(1, 'Male', 'TEAM URZA', 'Jemmy Lim II', 1, 'hera_male.jpg'),
(2, 'Female', 'TEAM URZA', 'Jephtah Jabez Krista Leigh Galon', 1, 'hera_female.jpg'),
(3, 'Male', 'TEAM PEGASUS', 'Geil Jadrian Valero', 2, 'athena_male.jpg'),
(4, 'Female', 'TEAM PEGASUS', 'Jersiel Ongotan', 2, 'athena_female.jpg'),
(5, 'Male', 'TEAM CENTAURUS', 'Prince Zeus Bandoja', 3, 'hermes_male.jpg'),
(6, 'Female', 'TEAM CENTAURUS', 'Crislyn Dango', 3, 'hermes_female.jpg'),
(7, 'Male', 'TEAM CRUX', 'Edward Esto', 4, 'poseidon_male.jpg'),
(8, 'Female', 'TEAM CRUX', 'Asuncion Angel Lagat', 4, 'poseidon_female.jpg'),
(9, 'Male', 'TEAM ORION', 'Rodel Paca', 5, 'hades_male.jpg'),
(10, 'Female', 'TEAM ORION', 'Christine Estrera', 5, 'hades_female.jpg'),
(11, 'Male', 'TEAM CASSIOPEIA', 'Christian Rey Montoya', 6, 'ares_male.jpg'),
(12, 'Female', 'TEAM CASSIOPEIA', 'Hannah Mae Gumisad', 6, 'ares_female.jpg');

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
(3, 'judge', 'judge3', '403d9917c3e950798601addf7ba82cd3c83f344b', 'logout'),
(4, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'logout'),
(5, 'judge', 'judge4', '06451fc3d7712c7e0126a328cf785f15ab603e2d', 'logout'),
(6, 'judge', 'judge5', '69df79bef9287d3bcb8f104a408b06de6a108fd8', 'logout'),
(7, 'judge', 'judge6', 'd7c300f4b515d190b701df2dbfda3cca772c705c', 'logout'),
(8, 'judge', 'judge7', '3ecb218f4314d5a6153d57016712607218cefd6e', 'logout');

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
-- Table structure for table `score_card`
--

CREATE TABLE `score_card` (
  `id` int(100) NOT NULL,
  `name_contestant` varchar(100) NOT NULL,
  `id_contestant` int(100) NOT NULL,
  `name_judge` varchar(100) NOT NULL,
  `talent_portion` double(100,2) NOT NULL,
  `talent_portion_vote` double(100,2) NOT NULL,
  `sports_wear` double(100,2) NOT NULL,
  `sports_wear_vote` double(100,2) NOT NULL,
  `preliminary_interview` double(100,2) NOT NULL,
  `preliminary_interview_vote` double(100,2) NOT NULL,
  `long_gown_formal_wear` double(100,2) NOT NULL,
  `long_gown_formal_wear_vote` double(100,2) NOT NULL,
  `advocacy` double(100,2) NOT NULL,
  `advocacy_vote` double(100,2) NOT NULL,
  `grand_total` double NOT NULL,
  `final_round` double(100,2) NOT NULL,
  `final_round_vote` double(100,2) NOT NULL,
  `sports_wear_edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `score_card`
--

INSERT INTO `score_card` (`id`, `name_contestant`, `id_contestant`, `name_judge`, `talent_portion`, `talent_portion_vote`, `sports_wear`, `sports_wear_vote`, `preliminary_interview`, `preliminary_interview_vote`, `long_gown_formal_wear`, `long_gown_formal_wear_vote`, `advocacy`, `advocacy_vote`, `grand_total`, `final_round`, `final_round_vote`, `sports_wear_edit`) VALUES
(1, 'Jemmy Lim II', 1, 'judge1', 0.00, 0.00, 15.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1.95, 0.00, 0.00, 1),
(2, 'Jemmy Lim II', 1, 'judge2', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 3.6, 0.00, 0.00, 1),
(3, 'Jemmy Lim II', 1, 'judge3', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(4, 'Jemmy Lim II', 1, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(5, 'Jemmy Lim II', 1, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(6, 'Jemmy Lim II', 1, 'judge6', 0.00, 0.00, 13.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1.95, 0.00, 0.00, 1),
(7, 'Jemmy Lim II', 1, 'judge7', 0.00, 0.00, 1.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 3.6, 0.00, 0.00, 1),
(8, 'Jephtah Jabez Krista Leigh Galon', 1, 'judge1', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(9, 'Jephtah Jabez Krista Leigh Galon', 1, 'judge2', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(10, 'Jephtah Jabez Krista Leigh Galon', 1, 'judge3', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(11, 'Jephtah Jabez Krista Leigh Galon', 1, 'judge4', 0.00, 0.00, 1.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.45, 0.00, 0.00, 0),
(12, 'Jephtah Jabez Krista Leigh Galon', 1, 'judge5', 0.00, 0.00, 2.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(13, 'Jephtah Jabez Krista Leigh Galon', 1, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(14, 'Jephtah Jabez Krista Leigh Galon', 1, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(15, 'Geil Jadrian Valero ', 2, 'judge1', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(16, 'Geil Jadrian Valero ', 2, 'judge2', 0.00, 0.00, 3.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.45, 0.00, 0.00, 1),
(17, 'Geil Jadrian Valero ', 2, 'judge3', 0.00, 0.00, 23.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 1),
(18, 'Geil Jadrian Valero ', 2, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(19, 'Geil Jadrian Valero ', 2, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(20, 'Geil Jadrian Valero ', 2, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(21, 'Geil Jadrian Valero ', 2, 'judge7', 0.00, 0.00, 6.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.75, 0.00, 0.00, 0),
(22, 'Jersiel Ongotan', 2, 'judge1', 0.00, 0.00, 12.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 1),
(23, 'Jersiel Ongotan', 2, 'judge2', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(24, 'Jersiel Ongotan', 2, 'judge3', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(25, 'Jersiel Ongotan', 2, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(26, 'Jersiel Ongotan', 2, 'judge5', 0.00, 0.00, 12.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.75, 0.00, 0.00, 1),
(27, 'Jersiel Ongotan', 2, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(28, 'Jersiel Ongotan', 2, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(29, 'Prince Zeus Bandoja', 3, 'judge1', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(30, 'Prince Zeus Bandoja', 3, 'judge2', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(31, 'Prince Zeus Bandoja', 3, 'judge3', 0.00, 0.00, 7.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.15, 0.00, 0.00, 0),
(32, 'Prince Zeus Bandoja', 3, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(33, 'Prince Zeus Bandoja', 3, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(34, 'Prince Zeus Bandoja', 3, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(35, 'Prince Zeus Bandoja', 3, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(36, 'Crislyn Dango', 3, 'judge1', 0.00, 0.00, 14.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.15, 0.00, 0.00, 1),
(37, 'Crislyn Dango', 3, 'judge2', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(38, 'Crislyn Dango', 3, 'judge3', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(39, 'Crislyn Dango', 3, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(40, 'Crislyn Dango', 3, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(41, 'Crislyn Dango', 3, 'judge6', 0.00, 0.00, 23.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 1),
(42, 'Crislyn Dango', 3, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(43, 'Edward Esto', 4, 'judge1', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(44, 'Edward Esto', 4, 'judge2', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(45, 'Edward Esto', 4, 'judge3', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(46, 'Edward Esto', 4, 'judge4', 0.00, 0.00, 1.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(47, 'Edward Esto', 4, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(48, 'Edward Esto', 4, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(49, 'Edward Esto', 4, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(50, 'Asuncion Angel Lagat', 4, 'judge1', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(51, 'Asuncion Angel Lagat', 4, 'judge2', 0.00, 0.00, 5.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(52, 'Asuncion Angel Lagat', 4, 'judge3', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(53, 'Asuncion Angel Lagat', 4, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(54, 'Asuncion Angel Lagat', 4, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(55, 'Asuncion Angel Lagat', 4, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(56, 'Asuncion Angel Lagat', 4, 'judge7', 0.00, 0.00, 5.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(57, 'Rodel Paca', 5, 'judge1', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(58, 'Rodel Paca', 5, 'judge2', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(59, 'Rodel Paca', 5, 'judge3', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(60, 'Rodel Paca', 5, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(61, 'Rodel Paca', 5, 'judge5', 0.00, 0.00, 3.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 1),
(62, 'Rodel Paca', 5, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(63, 'Rodel Paca', 5, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(64, 'Christine Estrera', 5, 'judge1', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(65, 'Christine Estrera', 5, 'judge2', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(66, 'Christine Estrera', 5, 'judge3', 0.00, 0.00, 12.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 1),
(67, 'Christine Estrera', 5, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(68, 'Christine Estrera', 5, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(69, 'Christine Estrera', 5, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(70, 'Christine Estrera', 5, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(71, 'Christian Rey Montoya', 6, 'judge1', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(72, 'Christian Rey Montoya', 6, 'judge2', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(73, 'Christian Rey Montoya', 6, 'judge3', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(74, 'Christian Rey Montoya', 6, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(75, 'Christian Rey Montoya', 6, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(76, 'Christian Rey Montoya', 6, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(77, 'Christian Rey Montoya', 6, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(78, 'Hannah Mae Gumisad', 6, 'judge1', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(79, 'Hannah Mae Gumisad', 6, 'judge2', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(80, 'Hannah Mae Gumisad', 6, 'judge3', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(81, 'Hannah Mae Gumisad', 6, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(82, 'Hannah Mae Gumisad', 6, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(83, 'Hannah Mae Gumisad', 6, 'judge6', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0),
(84, 'Hannah Mae Gumisad', 6, 'judge7', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 0);

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
  `average` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `talent_portion`
--

INSERT INTO `talent_portion` (`id`, `candidate_no`, `team`, `name`, `gender`, `name_judge`, `stage_present`, `mastery`, `uniqueness`, `audience_impact`, `average`) VALUES
(1, 1, 'TEAM URZA', 'Jemmy Lim II', 'Male', 'judge1', 15.00, 34.00, 17.00, 9.00, 0),
(2, 1, 'TEAM URZA', 'Jemmy Lim II', 'Male', 'judge2', 12.00, 25.00, 25.00, 9.00, 0),
(3, 1, 'TEAM URZA', 'Jemmy Lim II', 'Male', 'judge3', 9.00, 39.00, 27.00, 9.00, 0),
(4, 1, 'TEAM URZA', 'Jephtah Jabez Krista Leigh Galon', 'Female', 'judge1', 3.00, 2.00, 5.00, 9.00, 0),
(5, 1, 'TEAM URZA', 'Jephtah Jabez Krista Leigh Galon', 'Female', 'judge2', 0.00, 0.00, 0.00, 0.00, 0),
(6, 1, 'TEAM URZA', 'Jephtah Jabez Krista Leigh Galon', 'Female', 'judge3', 0.00, 0.00, 0.00, 0.00, 0),
(7, 2, 'TEAM PEGASUS', 'Geil Jadrian Valero', 'Male', 'judge1', 0.00, 0.00, 0.00, 0.00, 0),
(8, 2, 'TEAM PEGASUS', 'Geil Jadrian Valero', 'Male', 'judge2', 0.00, 0.00, 0.00, 0.00, 0),
(9, 2, 'TEAM PEGASUS', 'Geil Jadrian Valero', 'Male', 'judge3', 0.00, 0.00, 0.00, 0.00, 0),
(10, 2, 'TEAM PEGASUS', 'Jersiel Ongotan', 'Female', 'judge1', 0.00, 0.00, 0.00, 0.00, 0),
(11, 2, 'TEAM PEGASUS', 'Jersiel Ongotan', 'Female', 'judge2', 0.00, 0.00, 0.00, 0.00, 0),
(12, 2, 'TEAM PEGASUS', 'Jersiel Ongotan', 'Female', 'judge3', 0.00, 0.00, 0.00, 0.00, 0),
(13, 3, 'TEAM CENTAURUS', 'Prince Zeus Bandoja', 'Male', 'judge1', 0.00, 0.00, 0.00, 0.00, 0),
(14, 3, 'TEAM CENTAURUS', 'Prince Zeus Bandoja', 'Male', 'judge2', 0.00, 0.00, 0.00, 0.00, 0),
(15, 3, 'TEAM CENTAURUS', 'Prince Zeus Bandoja', 'Male', 'judge3', 0.00, 0.00, 0.00, 0.00, 0),
(16, 3, 'TEAM CENTAURUS', 'Crislyn Dango', 'Female', 'judge1', 0.00, 0.00, 0.00, 0.00, 0),
(17, 3, 'TEAM CENTAURUS', 'Crislyn Dango', 'Female', 'judge2', 0.00, 0.00, 0.00, 0.00, 0),
(18, 3, 'TEAM CENTAURUS', 'Crislyn Dango', 'Female', 'judge3', 0.00, 0.00, 0.00, 0.00, 0),
(19, 4, 'TEAM CRUX', 'Edward Esto', 'Male', 'judge1', 0.00, 0.00, 0.00, 0.00, 0),
(20, 4, 'TEAM CRUX', 'Edward Esto', 'Male', 'judge2', 0.00, 0.00, 0.00, 0.00, 0),
(21, 4, 'TEAM CRUX', 'Edward Esto', 'Male', 'judge3', 0.00, 0.00, 0.00, 0.00, 0),
(22, 4, 'TEAM CRUX', 'Asuncion Angel Lagat', 'Female', 'judge1', 0.00, 0.00, 0.00, 0.00, 0),
(23, 4, 'TEAM CRUX', 'Asuncion Angel Lagat', 'Female', 'judge2', 0.00, 0.00, 0.00, 0.00, 0),
(24, 4, 'TEAM CRUX', 'Asuncion Angel Lagat', 'Female', 'judge3', 0.00, 0.00, 0.00, 0.00, 0),
(25, 5, 'TEAM ORION', 'Rodel Paca', 'Male', 'judge1', 0.00, 0.00, 0.00, 0.00, 0),
(26, 5, 'TEAM ORION', 'Rodel Paca', 'Male', 'judge2', 0.00, 0.00, 0.00, 0.00, 0),
(27, 5, 'TEAM ORION', 'Rodel Paca', 'Male', 'judge3', 0.00, 0.00, 0.00, 0.00, 0),
(28, 5, 'TEAM ORION', 'Christine Estrera', 'Female', 'judge1', 0.00, 0.00, 0.00, 0.00, 0),
(29, 5, 'TEAM ORION', 'Christine Estrera', 'Female', 'judge2', 0.00, 0.00, 0.00, 0.00, 0),
(30, 5, 'TEAM ORION', 'Christine Estrera', 'Female', 'judge3', 0.00, 0.00, 0.00, 0.00, 0),
(31, 6, 'TEAM CASSIOPEIA', 'Christian Rey Montoya', 'Male', 'judge1', 0.00, 0.00, 0.00, 0.00, 0),
(32, 6, 'TEAM CASSIOPEIA', 'Christian Rey Montoya', 'Male', 'judge2', 0.00, 0.00, 0.00, 0.00, 0),
(33, 6, 'TEAM CASSIOPEIA', 'Christian Rey Montoya', 'Male', 'judge3', 0.00, 0.00, 0.00, 0.00, 0),
(34, 6, 'TEAM CASSIOPEIA', 'Hannah Mae Gumisad', 'Female', 'judge1', 0.00, 0.00, 0.00, 0.00, 0),
(35, 6, 'TEAM CASSIOPEIA', 'Hannah Mae Gumisad', 'Female', 'judge2', 0.00, 0.00, 0.00, 0.00, 0),
(36, 6, 'TEAM CASSIOPEIA', 'Hannah Mae Gumisad', 'Female', 'judge3', 0.00, 0.00, 0.00, 0.00, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advocacy`
--
ALTER TABLE `advocacy`
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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
