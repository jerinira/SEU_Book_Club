-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2018 at 06:52 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `Book Name` varchar(50) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Edition` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`Book Name`, `Author`, `Edition`, `Price`, `contact_no`) VALUES
('E-commerece', 'Kenneth C.Laudin', '2014', '100', '00789789789'),
('Java A Beginners Guide', 'Hebert Schild', '7th', '80', '00123123123'),
('Let Us C', 'Yashavant Kanetkar', '13th', '80', '0045645633'),
('C The Complete Reference', 'Herbert Schildt', '4th', '80', '00147147147'),
('The Complete E-Commerce Book', 'Janice Reynolds', '2004', '90', '0089653278'),
(' CompTIA Network+', 'Mike Meyers', '6th', '120', '009636963'),
('Data Mining: Concepts and Techniques', 'Jiawei Han and Micheline Kamber', '3rd', '150', '002585258'),
('E-commerece', 'Kenneth C.Laudin', '2016', '180', '0036987456');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Student_id` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Student_id`, `Name`, `Department`, `E-mail`, `Mobile`, `Password`) VALUES
('20200000011', 'ABC', 'CSE', 'abc@gmail.com', '123123123', '0000000'),
('202085858585', 'MNP', 'EEE', 'mnp@email.com', '4564656456', '123123'),
('202100000000', 'BCD', 'BBA', 'xyz@gmail.com', '56325632', '555555'),
('2021000000258', 'WEE', 'ENG', 'wwe@gmail.com', ' ', '222222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
