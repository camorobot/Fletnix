-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: Database
-- Generation Time: Dec 03, 2021 at 07:52 PM
-- Server version: 10.6.5-MariaDB-1:10.6.5+maria~focal
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Movie`
--

DROP DATABASE IF EXISTS testdb;
CREATE DATABASE testdb;
USE testdb;

CREATE TABLE `Movie` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desciption` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `imgDir` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Movie`
--

INSERT INTO `Movie` (`id`, `name`, `desciption`, `genre`, `imgDir`) VALUES
(1, 'Fish', 'The world of the fish', 'fam', NULL),
(2, '007', 'Man needs to survive', 'action', NULL),
(3, 'Spiderman', NULL, 'action', NULL),
(4, 'Superman', NULL, NULL, NULL),
(5, 'death', 'RUN BOYY', 'horror', NULL),
(6, 'The underground', 'The boys need to go to a safe place before a beer eats them', NULL, NULL),
(7, 'WELKOM01', 'TESTOMSCHRIJVING OFSO', 'HORROR', '/assets/img/db/7/7.jpeg'),
(8, 'Sapje', 'Wanneer je aapjes komen', 'familie', '/assets/img/db/8/8.jpeg'),
(9, 'Diehard', 'Een speedboot', 'actie', '/assets/img/db/9/9.jpg'),
(10, 'De aapjes', '', 'familie', '/assets/img/db/10/10.jpeg'),
(11, 'De aapjes', '', 'familie', '/assets/img/db/11/11.jpeg'),
(12, 'Zeekoeien', 'bij de boeren', 'horror', '/assets/img/db/12/12.jpg'),
(13, 'Zeekoeien', 'bij de boeren', 'horror', '/assets/img/db/13/13.jpg'),
(14, 'De goudvissen', 'WATER', 'horror', '/assets/img/db/14/14.jpeg'),
(15, 'hgvuewrbhuvewhuvbuewavyu', 'vbrwygvyiarwbvhewrbyv vgweiryvbiyrw', 'horror', '/assets/img/db/15/15.jpeg'),
(16, '1234', 'fhhfhfh', 'horror', '/assets/img/db/16/16.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Movie`
--
ALTER TABLE `Movie`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
