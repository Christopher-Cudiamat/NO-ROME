-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2019 at 07:35 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginnorome`
--

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `googlemap` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `date`, `venue`, `googlemap`, `city`) VALUES
(1, 'MON, JUL 25', 'Madison Square Garden', 'https://www.google.com/maps/d/embed?mid=11jJN5DyY1DWb64pDKRMd1Qgx66O4UsKr', 'Brooklyn, NY'),
(2, 'FRI, JUL 30', 'Oracle Arena', 'https://www.google.com/maps/d/embed?mid=11jJN5DyY1DWb64pDKRMd1Qgx66O4UsKr', 'San Francisco, CA'),
(3, 'SAT, AUG 01', 'Staple Center', 'https://www.google.com/maps/d/embed?mid=11jJN5DyY1DWb64pDKRMd1Qgx66O4UsKr\" class=\"gmap\"', 'Los Angeles, CA'),
(4, 'TUE, AUG 05', 'Harden Auditorium', 'https://www.google.com/maps/d/embed?mid=11jJN5DyY1DWb64pDKRMd1Qgx66O4UsKr\" class=\"gmap\"', 'Houston, TX'),
(5, 'WED, AUG 13', 'Wembley Stadium', 'https://www.google.com/maps/d/embed?mid=11jJN5DyY1DWb64pDKRMd1Qgx66O4UsKr\" class=\"gmap\"', 'London, EN'),
(6, 'MON, AUG 22', 'Stadio Olimpico', 'https://www.google.com/maps/d/embed?mid=11jJN5DyY1DWb64pDKRMd1Qgx66O4UsKr\" class=\"gmap\"', 'Rome, LA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(265) NOT NULL,
  `user_last` varchar(265) NOT NULL,
  `user_email` varchar(265) NOT NULL,
  `user_uid` varchar(265) NOT NULL,
  `user_pwd` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(4, 'Francesco', 'Totti', 'totti10@gmail.com', 'totti', '$2y$10$JIqZ1mOczAxL6V5mGA1auOALhSKf0ty..jXiE5jroM285G7OaZ/fa'),
(5, 'Christopher', 'Cudiamat', 'chris@gmail.com', 'Christo_1213', '$2y$10$2e9fW86uUqYO4VodgWxmcug4cYC1y4JAFq45EiVuHZ.U6FOHPvXSW'),
(6, 'Christopher', 'Cudiamat', 'cris.cudi@gmail.com', 'Chris_1213', '$2y$10$I1Yc9JrPE7H68o5apuxOm.2bLrZqM7lu0JYRXVReBu9fR18k6Tffe'),
(7, 'James', 'Harden', 'james@gmail.com', 'HARDEN_13', '$2y$10$H1VgUvXe3w8twfCBJPd9hutAy93tBldpkBxj/xt.i114vVp7O/4nK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
