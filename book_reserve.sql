-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 02:27 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_reserve`
--

-- --------------------------------------------------------

--
-- Table structure for table `books1`
--

CREATE TABLE `books1` (
  `Technical_Writing` varchar(30) NOT NULL,
  `Physics` varchar(30) NOT NULL,
  `Programming_1` varchar(30) NOT NULL,
  `Math_0` varchar(30) NOT NULL,
  `Introduction_To_Computer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books1`
--

INSERT INTO `books1` (`Technical_Writing`, `Physics`, `Programming_1`, `Math_0`, `Introduction_To_Computer`) VALUES
('[Not_Available]', '[Not_Available]', '[Not_Available]', 'Available', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `books2`
--

CREATE TABLE `books2` (
  `Programming_2` varchar(30) NOT NULL,
  `Data_Structure` varchar(30) NOT NULL,
  `File_Structure` varchar(30) NOT NULL,
  `Operating_System` varchar(30) NOT NULL,
  `Logic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books2`
--

INSERT INTO `books2` (`Programming_2`, `Data_Structure`, `File_Structure`, `Operating_System`, `Logic`) VALUES
('Not_Available', 'Not_Available', 'Available', 'Not_Available', 'Not_Available');

-- --------------------------------------------------------

--
-- Table structure for table `books3`
--

CREATE TABLE `books3` (
  `Java_FX` varchar(30) NOT NULL,
  `Data_Base` varchar(30) NOT NULL,
  `Software_Engineering` varchar(30) NOT NULL,
  `Network` varchar(30) NOT NULL,
  `Modeling` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books3`
--

INSERT INTO `books3` (`Java_FX`, `Data_Base`, `Software_Engineering`, `Network`, `Modeling`) VALUES
('Available', 'Not_Available', 'Not_Available', 'Available', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `books4`
--

CREATE TABLE `books4` (
  `Machine_Learning` varchar(30) NOT NULL,
  `Network_2` varchar(30) NOT NULL,
  `Software_Engineering_2` varchar(30) NOT NULL,
  `Data_Base_2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books4`
--

INSERT INTO `books4` (`Machine_Learning`, `Network_2`, `Software_Engineering_2`, `Data_Base_2`) VALUES
('Not_Available', 'Available', 'Not_Available', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `grade_1`
--

CREATE TABLE `grade_1` (
  `name` varchar(30) NOT NULL,
  `Technical_Writing` varchar(30) NOT NULL,
  `Physics` varchar(30) NOT NULL,
  `Programming_1` varchar(30) NOT NULL,
  `Math_0` varchar(30) NOT NULL,
  `Introduction_To_Computer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grade_1`
--

INSERT INTO `grade_1` (`name`, `Technical_Writing`, `Physics`, `Programming_1`, `Math_0`, `Introduction_To_Computer`) VALUES
('samira', 'recieved', 'not reserved', 'not reserved', 'not reserved', 'not reserved'),
('nora', 'not reserved', 'not reserved', 'not reserved', 'not reserved', 'reserved');

-- --------------------------------------------------------

--
-- Table structure for table `grade_2`
--

CREATE TABLE `grade_2` (
  `name` varchar(30) NOT NULL,
  `Programming_2` varchar(30) NOT NULL,
  `Data_Structure` varchar(30) NOT NULL,
  `File_Structure` varchar(30) NOT NULL,
  `Operating_System` varchar(30) NOT NULL,
  `Logic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grade_2`
--

INSERT INTO `grade_2` (`name`, `Programming_2`, `Data_Structure`, `File_Structure`, `Operating_System`, `Logic`) VALUES
('nour', 'not reserved', 'recieved', 'not reserved', 'not reserved', 'not reserved');

-- --------------------------------------------------------

--
-- Table structure for table `grade_3`
--

CREATE TABLE `grade_3` (
  `name` varchar(30) NOT NULL,
  `Java_FX` varchar(30) NOT NULL,
  `Data_Base` varchar(30) NOT NULL,
  `Software_Engineering` varchar(30) NOT NULL,
  `Network` varchar(30) NOT NULL,
  `Modeling` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grade_3`
--

INSERT INTO `grade_3` (`name`, `Java_FX`, `Data_Base`, `Software_Engineering`, `Network`, `Modeling`) VALUES
('nada', 'not reserved', 'not reserved', 'not reserved', 'recieved', 'not reserved'),
('mai', 'not reserved', 'not reserved', 'not reserved', 'not reserved', 'reserved');

-- --------------------------------------------------------

--
-- Table structure for table `grade_4`
--

CREATE TABLE `grade_4` (
  `name` varchar(30) NOT NULL,
  `Machine_Learning` varchar(30) NOT NULL,
  `Network_2` varchar(30) NOT NULL,
  `Software_Engineering_2` varchar(30) NOT NULL,
  `Data_Base_2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grade_4`
--

INSERT INTO `grade_4` (`name`, `Machine_Learning`, `Network_2`, `Software_Engineering_2`, `Data_Base_2`) VALUES
('nada', 'not reserved', 'not reserved', 'not reserved', 'reserved'),
('heba', 'recieved', 'not reserved', 'not reserved', 'not reserved');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
