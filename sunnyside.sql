-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: May 22, 2026 at 09:34 AM
-- Server version: 8.4.8
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunnyside`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomadation`
--

CREATE TABLE `accomadation` (
  `accomadationID` int NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accomadation`
--

INSERT INTO `accomadation` (`accomadationID`, `location`, `description`) VALUES
(1, 'Egypt Hotel', 'Join us in Egypt where you can visit our iconic piramids, or maybe take a dive in the red sea. within 5 minutes from your hotel. '),
(2, 'Hotel Romania', 'description Romania'),
(3, 'Greece hotel', 'Greece description'),
(4, 'Denmark hotel', 'Denmark description'),
(5, 'China hotel', 'China description');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `flightID` int NOT NULL,
  `departure` varchar(255) DEFAULT NULL,
  `destiantion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flightID`, `departure`, `destiantion`) VALUES
(1, 'Netherlands', 'China'),
(2, 'Netherlands', 'Denmark'),
(3, 'Netherlands', 'Romania'),
(4, 'Nehterlands', 'Greece'),
(5, 'Netherlands', 'Egypt');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `tripID` int NOT NULL,
  `detination` varchar(255) NOT NULL,
  `maxPeople` int NOT NULL,
  `accomadationID` int DEFAULT NULL,
  `flightID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`tripID`, `detination`, `maxPeople`, `accomadationID`, `flightID`) VALUES
(1, 'Egypt', 8, 1, 5),
(2, 'China', 6, 5, 1),
(3, 'Greece', 5, 3, 4),
(4, 'Denmark', 4, 4, 2),
(5, 'Romania', 6, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomadation`
--
ALTER TABLE `accomadation`
  ADD PRIMARY KEY (`accomadationID`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`flightID`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`tripID`),
  ADD KEY `fk_flights` (`flightID`),
  ADD KEY `fk_accomadation` (`accomadationID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomadation`
--
ALTER TABLE `accomadation`
  MODIFY `accomadationID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `flightID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `tripID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `fk_accomadation` FOREIGN KEY (`accomadationID`) REFERENCES `accomadation` (`accomadationID`),
  ADD CONSTRAINT `fk_flights` FOREIGN KEY (`flightID`) REFERENCES `flights` (`flightID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
