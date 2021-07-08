-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 03:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
`id` int(10) NOT NULL,
`name` varchar(255) NOT NULL,
`file_path` varchar(255) NOT NULL,
`description` varchar(255) NOT NULL,
`price` varchar(255) NOT NULL,
`updated_at` date NOT NULL,
`created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `file_path`, `description`, `price`, `updated_at`, `created_at`) VALUES
(10, 'olatokun ade', 'products/1uEUnHADAYdcQVfW3oWmexBZXyAUAzEO13WAihwE.jpg', 'wwwwwwwww', '34', '2021-07-05', '2021-07-05'),
(11, 'olatokun ade', 'products/ODLmb6tfZrW2UJtURe6s28UTjnhJiAXHuNB4K6th.jpg', 'wwwwwwwww', '34', '2021-07-05', '2021-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` int(11) NOT NULL,
`name` varchar(100) NOT NULL,
`email` varchar(100) NOT NULL,
`password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'olatokun adeshina', 'michaeladeshina015@gmail.com', '$2y$10$7ZSvN.cHIg/7bRMfjaRm6ui7GMLpnGs6rOBsENXh5T0Co4HxeBwf2'),
(2, 'olatokun adeshina', 'michaeladeshina015@gmail.com', '$2y$10$zL8FERahFZjAovDjQq9Og.BkukJE/HgUMg4.YQFq6i106dM8zJnn.'),
(3, 'olatokun adeshina2', 'michaeladeshina015@gmail.com', '$2y$10$btPUlpL9VR7B96dVotcgTORp0qnlQ/pbnzJ68B0hxt1gMqqa0vJ9G'),
(4, 'olatokun', 'michaeladeshina015@gmail.com', '$2y$10$PZ54pwVIm/aFhfH3qIzFUevKhTOotYiDlMhDy7VRDFtL4WhYwEXjm'),
(5, 'ajagbe', 'michaeladeshina01@gmail.com', '$2y$10$2dD8cmJAJM/q/uYn7s5V3OuG26uD2K1vwSWwzjke0NeaL/n6l5xZG'),
(6, 'aboyade', 'michealchidumaga4@gmail.com', '$2y$10$U6NzvXMQYxUYkfAQH/FZie.EC8IY3hrSV27I.6m7vIDu3LnAd0uMa'),
(7, 'ope', 'ayotunde.fatimehin@covenantuniversity.edu.ng', '$2y$10$iiCEUYg2Kc4EqOD5hwa4vO8Xz6r/9Dv5S0UfEWuH4jPmqLMKlrh8G'),
(10, 'ajagbe', 'mike@gmail.com', '$2y$10$MVOirFSBXYL/Y2JRPwo5i.YNcfIjgJcgMQNnaC4zNuKNFaJtQtGV.'),
(11, 'ajagbe', 'michaeladeshina015@gmail.com', '$2y$10$q8vS0vIhEJPmT3Ridl2dOOG.2H6TnNB1geZT0jcmAHjiPEoj5uWhK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
