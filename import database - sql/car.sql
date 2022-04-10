-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 12:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('mohon', '19301184');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `ID` varchar(30) NOT NULL,
  `Manufacturer` varchar(30) NOT NULL,
  `Product` varchar(30) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `Colors` varchar(30) NOT NULL,
  `Price` varchar(30) NOT NULL,
  `Features` varchar(100) NOT NULL,
  `Year_of_Creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`ID`, `Manufacturer`, `Product`, `Model`, `Colors`, `Price`, `Features`, `Year_of_Creation`) VALUES
('1', 'BMW Group', 'BMW CAR', 'BMW 6 Series GT', 'White, Grey', '$48,684', '48V mid hybrid tech, Mileage: 13.32 to 18.65 kmpl', '2020-05-27'),
('2', 'Bugatti Automobiles S.A.S.', 'BUGATTI ', 'Chiron Super Sport 300+', 'Black', '$3,900,000', '8.0L Quad-Turbo W16 Gas,7-Speed DSG ,All-Wheel Drive', '2020-01-01'),
('3', 'Ferrari N.V.', 'Ferrari', 'Ferrari 250 GTO ', 'Red, Blue, Grey, Black, Green', '$48,000,000', 'Sports car,300 PS,7500 rpm', '1962-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `mechanicdetails`
--

CREATE TABLE `mechanicdetails` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `phone number` int(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanicdetails`
--

INSERT INTO `mechanicdetails` (`username`, `email`, `adress`, `phone number`, `skill`, `password`) VALUES
('salman khan', 'salman@gmail.com', 'India', 1200233445, 'hardworking and expert in using technology', 'salman7'),
('tonmoy', 'tonmy@gmail.com', 'rangpur', 1200233445, 'Good at Problem Solving', 'tonmoy7'),
('alam', 'alam@gmail.com', 'bogra', 32342314, 'knows all details of car parts', 'alam7'),
('rocky', 'rocky@gmail.com', 'khulna', 42411414, 'active and hardworking', 'rocky7'),
('sarker', 'sarker@gmail.com', 'dhaka', 42213, 'have good knowledge about cars', 'sarker7');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `phone number` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`username`, `email`, `adress`, `phone number`, `password`) VALUES
('mohon', 'mohon@gmail.com', 'sylhet', 1221122, 'mohon7'),
('oni', 'smffoni@gmail.com', 'rangpur', 233442432, 'oni7'),
('fahim', 'fahim@gmail.com', 'dhaka', 3222223, 'fahim7'),
('sakib', 'sakib@gmail.com', 'Dinajpur', 32423412, 'sakib7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
