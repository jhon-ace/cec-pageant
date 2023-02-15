-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2019 at 05:38 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contestant`
--

INSERT INTO `contestant` (`id_contestant`, `gender`, `team`, `full_name`, `candidate_no`, `picture`) VALUES
(1, 'Male', 'TEAM HERA', 'Abdiel Czar Daguplo', 1, 'hera_male.jpg'),
(2, 'Female', 'TEAM HERA', 'Kate Grupp', 1, 'hera_female.jpg'),
(3, 'Male', 'TEAM ATHENA', 'Reymund Taer', 2, 'athena_male.jpg'),
(4, 'Female', 'TEAM ATHENA', 'Monique Tismo', 2, 'athena_female.jpg'),
(5, 'Male', 'TEAM HERMES', 'Ralph Vincent Hormachuelos', 3, 'hermes_male.jpg'),
(6, 'Female', 'TEAM HERMES', 'Jv Mia Marie Gilman', 3, 'hermes_female.jpg'),
(7, 'Male', 'TEAM POSEIDON', 'Angelito Flores', 4, 'poseidon_male.jpg'),
(8, 'Female', 'TEAM POSEIDON', 'Angelina Bompat', 4, 'poseidon_female.jpg'),
(9, 'Male', 'TEAM HADES', 'John Noel Sarong', 5, 'hades_male.jpg'),
(10, 'Female', 'TEAM HADES', 'Quenie Pargan', 5, 'hades_female.jpg'),
(11, 'Male', 'TEAM ARES', 'Albert Iman', 6, 'ares_male.jpg'),
(12, 'Female', 'TEAM ARES', 'Jonabrid Dinglasa', 6, 'ares_female.jpg'),
(13, 'Male', 'TEAM APOLLO', 'Edlizer Ko', 7, 'apollo_male.jpg'),
(14, 'Female', 'TEAM APOLLO', 'Shamaine Bandoja', 7, 'apollo_female.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `account_type`, `username`, `password`, `status`) VALUES
(1, 'judge', 'judge1', '7b21848ac9af35be0ddb2d6b9fc3851934db8420', 'logout'),
(2, 'judge', 'judge2', '1a9b9508b6003b68ddfe03a9c8cbc4bd4388339b', 'logout'),
(3, 'judge', 'judge3', '403d9917c3e950798601addf7ba82cd3c83f344b', 'logout'),
(4, 'admin', 'admin', 'ad9a450a089b72b3688cc4c8077f959c2e371320', 'logout'),
(5, 'judge', 'judge4', '3e511da7577d1864871b760ab30e05b56943c9b2', 'logout'),
(6, 'judge', 'judge5', '69df79bef9287d3bcb8f104a408b06de6a108fd8', 'logout');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `final_round_vote` double(100,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score_card`
--

INSERT INTO `score_card` (`id`, `name_contestant`, `id_contestant`, `name_judge`, `talent_portion`, `talent_portion_vote`, `sports_wear`, `sports_wear_vote`, `preliminary_interview`, `preliminary_interview_vote`, `long_gown_formal_wear`, `long_gown_formal_wear_vote`, `advocacy`, `advocacy_vote`, `grand_total`, `final_round`, `final_round_vote`) VALUES
(1, 'Abdiel Czar Daguplo', 1, 'judge1', 70.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 7.00, 1.00, 23, 0.00, 0.00),
(2, 'Abdiel Czar Daguplo', 1, 'judge2', 88.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 9.00, 1.00, 0, 0.00, 0.00),
(3, 'Abdiel Czar Daguplo', 1, 'judge3', 80.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8.00, 1.00, 24, 0.00, 0.00),
(4, 'Abdiel Czar Daguplo', 1, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(5, 'Abdiel Czar Daguplo', 1, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(6, 'Kate Grupp', 1, 'judge1', 80.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 7.00, 1.00, 23, 0.00, 0.00),
(7, 'Kate Grupp', 1, 'judge2', 87.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8.00, 1.00, 0, 0.00, 0.00),
(8, 'Kate Grupp', 1, 'judge3', 80.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8.00, 1.00, 24, 0.00, 0.00),
(9, 'Kate Grupp', 1, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(10, 'Kate Grupp', 1, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(11, 'Reymund Taer', 2, 'judge1', 70.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8.00, 1.00, 20, 0.00, 0.00),
(12, 'Reymund Taer', 2, 'judge2', 87.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8.00, 1.00, 0, 0.00, 0.00),
(13, 'Reymund Taer', 2, 'judge3', 86.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 7.00, 1.00, 0, 0.00, 0.00),
(14, 'Reymund Taer', 2, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(15, 'Reymund Taer', 2, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(16, 'Monique Tismo', 2, 'judge1', 70.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 6.00, 1.00, 20, 0.00, 0.00),
(17, 'Monique Tismo', 2, 'judge2', 70.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 7.00, 1.00, 0, 0.00, 0.00),
(18, 'Monique Tismo', 2, 'judge3', 73.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 7.00, 1.00, 0, 0.00, 0.00),
(19, 'Monique Tismo', 2, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(20, 'Monique Tismo', 2, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(21, 'Ralph Vincent Hormachuelos', 3, 'judge1', 70.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 6.00, 1.00, 0, 0.00, 0.00),
(22, 'Ralph Vincent Hormachuelos', 3, 'judge2', 88.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 7.00, 1.00, 0, 0.00, 0.00),
(23, 'Ralph Vincent Hormachuelos', 3, 'judge3', 93.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 6.00, 1.00, 0, 0.00, 0.00),
(24, 'Ralph Vincent Hormachuelos', 3, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(25, 'Ralph Vincent Hormachuelos', 3, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(26, 'Jv Mia Marie Gilman', 3, 'judge1', 80.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 10.00, 1.00, 0, 0.00, 0.00),
(27, 'Jv Mia Marie Gilman', 3, 'judge2', 87.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8.00, 1.00, 0, 0.00, 0.00),
(28, 'Jv Mia Marie Gilman', 3, 'judge3', 96.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8.00, 1.00, 0, 0.00, 0.00),
(29, 'Jv Mia Marie Gilman', 3, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(30, 'Jv Mia Marie Gilman', 3, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(31, 'Angelito Flores', 4, 'judge1', 50.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 9.00, 1.00, 0, 0.00, 0.00),
(32, 'Angelito Flores', 4, 'judge2', 85.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8.00, 1.00, 0, 0.00, 0.00),
(33, 'Angelito Flores', 4, 'judge3', 74.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8.00, 1.00, 0, 0.00, 0.00),
(34, 'Angelito Flores', 4, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(35, 'Angelito Flores', 4, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(36, 'Angelina Bompat', 4, 'judge1', 100.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8.00, 1.00, 0, 0.00, 0.00),
(37, 'Angelina Bompat', 4, 'judge2', 90.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 10.00, 1.00, 0, 0.00, 0.00),
(38, 'Angelina Bompat', 4, 'judge3', 99.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 6.50, 1.00, 0, 0.00, 0.00),
(39, 'Angelina Bompat', 4, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(40, 'Angelina Bompat', 4, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(41, 'John Noel Sarong', 5, 'judge1', 90.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 9.00, 1.00, 0, 0.00, 0.00),
(42, 'John Noel Sarong', 5, 'judge2', 89.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 9.00, 1.00, 0, 0.00, 0.00),
(43, 'John Noel Sarong', 5, 'judge3', 77.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 9.00, 1.00, 0, 0.00, 0.00),
(44, 'John Noel Sarong', 5, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(45, 'John Noel Sarong', 5, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(46, 'Quenie Pargan', 5, 'judge1', 70.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8.00, 1.00, 0, 0.00, 0.00),
(47, 'Quenie Pargan', 5, 'judge2', 79.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8.00, 1.00, 0, 0.00, 0.00),
(48, 'Quenie Pargan', 5, 'judge3', 75.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 7.00, 1.00, 0, 0.00, 0.00),
(49, 'Quenie Pargan', 5, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(50, 'Quenie Pargan', 5, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(51, 'Albert Iman', 6, 'judge1', 50.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8.00, 1.00, 0, 0.00, 0.00),
(52, 'Albert Iman', 6, 'judge2', 78.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 7.00, 1.00, 0, 0.00, 0.00),
(53, 'Albert Iman', 6, 'judge3', 72.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 9.00, 1.00, 0, 0.00, 0.00),
(54, 'Albert Iman', 6, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(55, 'Albert Iman', 6, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(56, 'Jonabrid Dinglasa', 6, 'judge1', 100.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8.00, 1.00, 0, 0.00, 0.00),
(57, 'Jonabrid Dinglasa', 6, 'judge2', 92.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 10.00, 1.00, 0, 0.00, 0.00),
(58, 'Jonabrid Dinglasa', 6, 'judge3', 95.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 5.00, 1.00, 0, 0.00, 0.00),
(59, 'Jonabrid Dinglasa', 6, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(60, 'Jonabrid Dinglasa', 6, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(61, 'Edlizer Ko', 7, 'judge1', 90.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8.00, 1.00, 0, 0.00, 0.00),
(62, 'Edlizer Ko', 7, 'judge2', 90.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 9.00, 1.00, 0, 0.00, 0.00),
(63, 'Edlizer Ko', 7, 'judge3', 75.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 7.00, 1.00, 0, 0.00, 0.00),
(64, 'Edlizer Ko', 7, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(65, 'Edlizer Ko', 7, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(66, 'Shamaine Bandoja', 7, 'judge1', 80.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 10.00, 1.00, 0, 0.00, 0.00),
(67, 'Shamaine Bandoja', 7, 'judge2', 84.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 8.00, 1.00, 0, 0.00, 0.00),
(68, 'Shamaine Bandoja', 7, 'judge3', 77.00, 1.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 7.00, 1.00, 0, 0.00, 0.00),
(69, 'Shamaine Bandoja', 7, 'judge4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00),
(70, 'Shamaine Bandoja', 7, 'judge5', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports_wear`
--

INSERT INTO `sports_wear` (`id`, `candidate_no`, `name`, `gender`, `judge1`, `judge2`, `judge3`, `judge4`, `judge5`, `average`) VALUES
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
-- Table structure for table `talent_portion`
--

CREATE TABLE `talent_portion` (
  `id` int(11) NOT NULL,
  `candidate_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `judge1` double NOT NULL,
  `judge2` double NOT NULL,
  `judge3` double NOT NULL,
  `average` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `talent_portion`
--

INSERT INTO `talent_portion` (`id`, `candidate_no`, `name`, `gender`, `judge1`, `judge2`, `judge3`, `average`) VALUES
(1, 1, 'Abdiel Czar Daguplo', 'Male', 70, 88, 80, 0),
(2, 1, 'Kate Grupp', 'Female', 80, 87, 80, 0),
(3, 2, 'Reymund Taer', 'Male', 70, 87, 86, 0),
(4, 2, 'Monique Tismo', 'Female', 70, 70, 73, 0),
(5, 3, 'Ralph Vincent Hormachuelos', 'Male', 70, 88, 93, 0),
(6, 3, 'Jv Mia Marie Gilman', 'Female', 80, 87, 96, 0),
(7, 4, 'Angelito Flores', 'Male', 50, 85, 74, 0),
(8, 4, 'Angelina Bompat', 'Female', 100, 90, 99, 0),
(9, 5, 'John Noel Sarong', 'Male', 90, 89, 77, 0),
(10, 5, 'Quenie Pargan', 'Female', 70, 79, 75, 0),
(11, 6, 'Albert Iman', 'Male', 50, 78, 72, 0),
(12, 6, 'Jonabrid Dinglasa', 'Female', 100, 92, 95, 0),
(13, 7, 'Edlizer Ko', 'Male', 90, 90, 75, 0),
(14, 7, 'Shamaine Bandoja', 'Female', 80, 84, 77, 0);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `sports_wear`
--
ALTER TABLE `sports_wear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `talent_portion`
--
ALTER TABLE `talent_portion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
