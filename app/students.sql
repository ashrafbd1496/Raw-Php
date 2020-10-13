-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 04:19 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `day10crudapps`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cell` varchar(15) NOT NULL,
  `age` int(2) NOT NULL,
  `location` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `cell`, `age`, `location`, `gender`, `photo`, `status`) VALUES
(20, 'delowar', 'delowar@gmail.com', '12456', 35, 'Uttara', 'Male', '6d1521696f1fe2c6c4c03c82b973a3b1.jpg', 'active'),
(21, 'fahima', 'fahima@gmail.com', '1243', 29, 'Bashundhara', 'Female', 'ef7931fbaa3a2c2a45bde62181651c2e.webp', 'active'),
(22, 'ferdous', 'ferdous@gmail.com', '1243', 34, 'Bashundhara', 'Male', '467e8e8eb27d89e6d2707a3c4525e83e.jpeg', 'active'),
(23, 'jakia', 'jakia@gmail.com', '78554', 28, 'Gulsan', 'Female', '357c40b738a9507553559b9ad320894c.jpg', 'active'),
(24, 'jakir Hossain', 'jakirhossain@gmail.com', '78554', 37, 'Gulsan', 'Male', 'a713ad08f3af2472cb0a9e9c77988065.jpg', 'active'),
(25, 'Laboni', 'laboni@gmail.com', '01551', 27, 'Mirpur', 'Female', 'd858ca78cd3f5347b10b9c9e282e2a10.jpg', 'active'),
(28, 'robiul', 'robiul@gmail.com', '545415', 37, 'Uttara', 'Male', 'cb290fcf6c2421b40ccf7b29e2a5afc7.jpg', 'active'),
(30, 'Sima akter', 'sima@gmail.com', '1243', 22, 'Bashundhara', 'Female', '34b8fae4688a0e50cad7a08ac2a15c3e.jpg', 'active'),
(34, 'Ratul', 'ratul@gmail.com', '154654', 35, 'Banani', 'Male', '49b21f98b5b15fb7bbbec84837a3eb08.jpg', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
