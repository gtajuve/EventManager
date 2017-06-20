-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 17 юни 2017 в 22:22
-- Версия на сървъра: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EventsManager`
--

-- --------------------------------------------------------

--
-- Структура на таблица `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `location` varchar(50) NOT NULL,
  `time_start` varchar(25) NOT NULL,
  `time_end` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `events`
--

INSERT INTO `events` (`id`, `name`, `location`, `time_start`, `time_end`) VALUES
(3, 'ItTech', 'Plovdiv', '2017-06-24T00:00', '2017-06-25T16:00'),
(4, 'ItTech1', 'Sofia', '2200-05-12T10:10', '2200-06-12T10:10'),
(5, 'ItTech2', 'Sofia', '2018-03-02T10:00', '2018-03-05T15:00'),
(6, 'WebTech', 'Sofia', '2017-07-22T10:00', '2017-07-29T16:00'),
(7, 'Seminar', 'Plovdiv', '2017-08-12T10:00', '2017-09-01T15:00'),
(8, 'Sea', 'Bourgas', '2017-06-07', '2017-06-14'),
(9, 'Ski', 'Aspen', '2017-11-02T20:50', '2017-12-09T13:04'),
(10, 'Exam', 'Plovdiv', '2017-06-17T05:10', '2017-06-17T22:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
