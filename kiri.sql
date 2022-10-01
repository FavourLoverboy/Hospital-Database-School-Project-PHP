-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 01:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiri`
--

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` int(11) NOT NULL,
  `drug_name` varchar(30) NOT NULL,
  `man` varchar(50) NOT NULL,
  `man_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `qty` varchar(10) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`id`, `drug_name`, `man`, `man_date`, `exp_date`, `qty`, `cost`, `date`) VALUES
(1, 'Paracetamol', 'Emzor', '2021-12-03', '2021-12-31', '10', '100', '2021-12-10'),
(2, 'Paracetamol', 'Emzor', '2021-12-07', '2021-12-15', '20', '50', '2021-12-10'),
(3, 'Paracetamol', 'Emzor', '2021-12-09', '2021-12-31', '70', '70', '2021-12-10'),
(4, 'Procol', 'Procol Manufacturer', '2021-12-07', '2021-12-29', '45', '120', '2021-12-10'),
(6, 'Cypri Gold', 'Man', '2021-12-09', '2021-12-24', '16', '200', '2021-12-10'),
(7, 'Amperslin', 'Emzor', '2022-01-20', '2022-01-21', '20', '300', '2022-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `drug` varchar(30) NOT NULL,
  `dosage` varchar(10) NOT NULL,
  `prescription` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`id`, `name`, `drug`, `dosage`, `prescription`, `date`) VALUES
(2, 'Kiri Glory', 'Procol', '3', 'Take two time a day', '2021-12-10'),
(3, 'Kiri Glory', 'Paracetamol', '2', 'Morning and night', '2021-12-10'),
(4, 'Kiri Glory', 'Cypri Gold', '1 spoon ea', 'Two times', '2021-12-10'),
(5, 'Nwokamma Favour Ehio', 'Cypri Gold', '5', 'Malaria', '2021-12-11'),
(6, 'Nwokamma Favour Ehio', 'Paracetamol', '2', 'Every 10 hours', '2022-01-17'),
(7, 'Kiri Glory', 'Paracetamol', '3', 'Everyday', '2022-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `issue` text NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` varchar(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `ward_number` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `issue`, `sex`, `age`, `height`, `weight`, `ward_number`, `date`) VALUES
(1, 'Nwokamma Favour Ehio', 'Optician needed', 'Male', '25', '6.7', '125', 'B27', '2021-12-10'),
(3, 'Kiri Glory', 'Dentist needed', 'Male', '26', '9', '80', 'A30', '2021-12-10'),
(4, 'Steve John', 'Malaria', 'Male', '12', '6', '70.43', 'D23', '2021-12-11'),
(5, 'Bright Chuks', 'Bone fracture', 'Male', '30', '25.9', '125', 'W24', '2022-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `pword` varchar(25) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pword`, `date`) VALUES
(1, 'kiri', 'kiri', '2021-12-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
