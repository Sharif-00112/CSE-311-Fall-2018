-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 12:08 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddonator`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `Name` varchar(255) DEFAULT NULL,
  `Company` varchar(100) DEFAULT NULL,
  `usages` varchar(10) DEFAULT NULL,
  `quantities` varchar(10) DEFAULT NULL,
  `price` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`Name`, `Company`, `usages`, `quantities`, `price`) VALUES
('Ace Plus', 'Square', 'Faver,Pain', '100', 30),
('Alatrol', 'Square', 'Allergy', '89', 10),
('Benzapen', 'Square', 'Pain', '70', 12),
('Ciprocin', 'Square', 'Diarrhoea', '80', 5),
('Clofenac DT', 'Square', 'Gastric', '60', 8),
('Flexi', 'Beximco', 'Allergy', '45', 7),
('Osmosol', 'Beximco', 'Oinment', '97', 56),
('Napa', 'Beximco', 'Fever', '59', 8),
('CVnor', 'Beximco', 'Gastric', '77', 6),
('Quidex', 'Navana', 'Burn', '67', 15),
('Toma', 'Navana', 'Oinment', '55', 14);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
