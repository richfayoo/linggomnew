-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2023 at 02:54 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linggom`
--

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `spantitle` varchar(30) NOT NULL,
  `spantitle2` varchar(30) NOT NULL,
  `spantitle3` varchar(30) NOT NULL,
  `descript` varchar(400) NOT NULL,
  `button` varchar(30) NOT NULL,
  `linkbutton` mediumtext NOT NULL,
  `img` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `title`, `spantitle`, `spantitle2`, `spantitle3`, `descript`, `button`, `linkbutton`, `img`) VALUES
(1, 'Tempat Usahamu', 'Berteduh', 'Berkembang', 'Bertumbuh', 'Linggom selalu ada untuk kamu yang mau mulai,\r\n<br> bergabung bersama kami dan tingkatkan penjualanmu', 'Jelajahi!', 'https://www.instagram.com/', '651c03d69e534.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(14) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'asda', '$2y$10$1KKzgDo6gV0LHZHIwlUyEOE9cgJIGFg4drzV66840vGEgUKSp9UCS'),
(7, 'richfayoo', '$2y$10$OMY3VprbOez1y/0VSwsnyu/B5xCTEy91MoKNpv5A/TyaniOmXxlzW'),
(8, 'satria', '$2y$10$2AjfR3KFqQVcCeOHjAVumOxTM0fuDedpE9iOJUsD3XXKPyHsBMcg.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
