-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 06:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `emailpass` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `confirmPassword` varchar(250) NOT NULL,
  `reset_token` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `username`, `emailpass`, `password`, `confirmPassword`, `reset_token`) VALUES
('Denis', 'King', '', '', '$2y$10$J.YpOlmyd5ZhO9L2t6kOuuD0dUsi1wnk.yHP6QmGhsLSFhNKw1J6a', '', ''),
('Jeff', 'Bezos', 'jeffbezos', 'dmytin@ymail.com', '$2y$10$DWFV43FReQ5Y1MWavkz2OOzgpVZlzA5/563PT.53n2rC8PAe3a1gu', '', 'ac1bca7a5d5a8314d6ba667f75caa5688a1ee39acab39971a59b17e031ad641d'),
('John', 'Kim', 'kimjohnun', '', '$2y$10$BBu9rjHblkJSSZjFJz0SLeZjw0tVNxlaL80aYKLh7U32vxKrElySS', '', ''),
('Dan', 'Kiriamiti', 'kiriamitidan', 'DENISMYTIN@GMAIL.COM', '$2y$10$AkvDUkzDpBoACZ3NAqFVuOGxRH7qc6ZZIf41nP0LS.AGRSrInx7CK', '', ''),
('Brian', 'Musili', 'musilibrian', 'dmytin@ymail.com', '$2y$10$4tXiutNOeNxMfL/gZYbUD./Uolotw9OKn1kkI7.LJ9c48W9xfDXD6', '', 'ac1bca7a5d5a8314d6ba667f75caa5688a1ee39acab39971a59b17e031ad641d'),
('Francis', 'Mwaniki', 'mwanikifra', 'dmytin@ymail.com', '$2y$10$oZOiRGTPkoDp0ksvhgFmyuAI2r1AKDB0t.Ff90LdbtidJ6VFDKBo.', '', 'ac1bca7a5d5a8314d6ba667f75caa5688a1ee39acab39971a59b17e031ad641d'),
('Karen', 'Njeri', 'njerikaren', '', '$2y$10$YV/mcRu4uhptNE5iSYSORu6Nv7dwqJlrkmDeOHy/Zcecok89Z7Z2y', '', ''),
('Rodgers', 'Osano', 'osanorodgers', 'dmytin@ymail.com', '$2y$10$npX79UJd.jngB8mEs3a6hO02tJnFbM3U4yQoLpFrIjl5OEOOzT4Xm', '', ''),
('Jim', 'Rohn', 'rohnjim', '', '$2y$10$DQJ0HH.R5Zfj/4yTjLLAY.kj9zf5hYUFjTqmlHx/6DS1AaVhbJNvK', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_preferences`
--

CREATE TABLE `user_preferences` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `layout` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_preferences`
--

INSERT INTO `user_preferences` (`id`, `username`, `color`, `layout`) VALUES
(1, 'njerikaren', '#ff0000', 'list'),
(2, 'mwanikifra', '#ff0000', 'grid'),
(3, 'jeffbezos', '#00ffff', 'grid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_preferences`
--
ALTER TABLE `user_preferences`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_preferences`
--
ALTER TABLE `user_preferences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
