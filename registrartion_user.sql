-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2024 at 06:22 AM
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
-- Database: `my_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrartion_user`
--

CREATE TABLE `registrartion_user` (
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrartion_user`
--

INSERT INTO `registrartion_user` (`full_name`, `username`, `email`, `password`) VALUES
('mahi', 'mahian', 'mahi@gmail.com', '12345'),
('ioui', 'opiutr', 'oiuro', '8930'),
('ram', 'ram', 'ram@gmail.com', '123'),
('shiv', 'shiva', 'shiv@gmail.com', '$2y$10$k1LI4oQtixcI3DFGiQrJW.hGV1BM2OnUYSFzCGC7wi7989wvyaYPq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrartion_user`
--
ALTER TABLE `registrartion_user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `userame` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
