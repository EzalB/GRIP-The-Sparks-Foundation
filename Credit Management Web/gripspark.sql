-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 02:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14976122_gripspark`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `ID` int(20) NOT NULL,
  `Sender` varchar(50) NOT NULL,
  `Receiver` varchar(50) NOT NULL,
  `Credits` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`ID`, `Sender`, `Receiver`, `Credits`) VALUES
(1, 'Cypher', 'Jett', 100),
(2, 'Brimstone', 'Omen', 200),
(5, 'Breach', 'Cypher', 1000),
(13, 'Breach', 'Jett', 1000),
(14, 'Quantum', 'Brimstone', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Credits` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Email`, `Credits`) VALUES
('Breach', 'breach.val@riot.com', 2000),
('Brimstone', 'brim.val@riot.com', 9000),
('Cypher', 'cypher.val@riot.com', 6000),
('Jett', 'jett.val@riot.com', 4000),
('Killjoy', 'killjoy.val@riot.com', 7000),
('Omen', 'omen.val@riot.com', 5000),
('Phoenix', 'phoenix.val@riot.com', 4500),
('Quantum', 'quantum.val@riot.com', 2000),
('Raze', 'raze.val@riot.com', 3000),
('Reyna', 'reyna.val@riot.com', 2500),
('Sage', 'sage.val@riot.com', 3000),
('Sova', 'sova.val@riot.com', 4000),
('Viper', 'viper.val@riot.com', 8000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
