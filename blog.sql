-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2019 at 03:47 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `billet`
--

CREATE TABLE `billet` (
  `id` int(100) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `billet`
--

INSERT INTO `billet` (`id`, `titre`, `contenu`, `date_creation`) VALUES
(1, 'Ma france à moi', 'C\'est pas ma France à moi cette France profonde\r\nCelle qui nous fout la honte et aimerait que l\'on plonge', '2019-06-12 14:41:16'),
(3, 'foutue', 'Elle m\'a pas remixé c\'est juste moi qui aie eu un coup de mou\r\nMais j\'tiens debout', '2019-06-12 14:41:25'),
(5, 'sublime', 'A m\'asseoir sur un banc cinq minutes avec toi\r\nEt regarder les gens tant qu\'il en a', '2019-06-12 14:43:00'),
(7, 'Matrix', 'Depuis que je l\'ai vu te coller De tes potes tu t\'es séparé', '2019-06-19 14:44:50');

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(100) NOT NULL,
  `billet` int(100) NOT NULL,
  `auteur` varchar(200) NOT NULL,
  `commentaire` varchar(200) NOT NULL,
  `date_commentaire` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`id`, `billet`, `auteur`, `commentaire`, `date_commentaire`) VALUES
(8, 1, 'doro', 'super titre', '2019-06-12 12:30:17'),
(9, 1, 'Mona', 'au top', '2019-06-12 12:30:17'),
(24, 1, 'doro', 'super cette chanson', '2019-06-17 20:13:18'),
(25, 1, 'doro', 'super cette chanson', '2019-06-17 20:13:22'),
(26, 1, 'wendy', 'non je n\'aime pas', '2019-06-17 20:15:37'),
(27, 1, 'wendy', 'non je n\'aime pas', '2019-06-17 20:15:39'),
(28, 1, 'jp', 'c\'est de qui ca', '2019-06-17 20:18:18'),
(29, 1, 'jp', 'c\'est de qui ca', '2019-06-17 20:18:20'),
(30, 1, 'jp', 'c\'est de qui ca', '2019-06-17 20:18:22'),
(31, 1, 'jp', 'c\'est de qui ca', '2019-06-17 20:18:23'),
(32, 1, 'jp', 'c\'est de qui ca', '2019-06-17 20:18:24'),
(33, 1, 'jp', 'c\'est de qui ca', '2019-06-17 20:18:24'),
(34, 1, 'jp', 'c\'est de qui ca', '2019-06-17 20:18:25'),
(37, 3, 'mohamed', 'super cette chanson', '2019-06-17 22:25:01'),
(38, 3, 'mohamed', 'super cette chanson', '2019-06-17 22:25:03'),
(39, 3, 'mohamed', 'super cette chanson', '2019-06-17 22:25:50'),
(40, 3, 'mohamed', 'super cette chanson', '2019-06-17 22:25:51'),
(41, 3, 'mohamed', 'super cette chanson', '2019-06-17 22:25:51'),
(42, 5, 'gaston', 'fezfzef', '2019-06-19 12:20:03'),
(43, 5, 'gaston', 'fezfzef', '2019-06-19 12:21:09'),
(44, 5, 'gaston', 'fezfzef', '2019-06-19 12:21:09'),
(45, 5, 'doro', 'YES', '2019-06-19 12:21:30'),
(46, 5, 'doro', 'YES', '2019-06-19 12:21:35'),
(47, 5, 'DORO', 'COLL', '2019-06-19 12:23:22'),
(48, 5, 'DORO', 'COLL', '2019-06-19 12:23:27'),
(49, 5, 'DORO', 'COLL', '2019-06-19 12:28:23'),
(50, 3, 'gaston', 'ggggggggggg', '2019-06-19 13:23:08'),
(51, 3, 'gaston', 'ggggggggggg', '2019-06-19 13:23:12'),
(52, 5, 'francdeee', 'sdfsdfgsdgsdg', '2019-06-19 13:28:10'),
(53, 5, 'francdeee', 'sdfsdfgsdgsdg', '2019-06-19 13:28:23'),
(54, 5, 'cghfgcjfgtcj', 'jjjjjjjjjjjjjjjjjjjj', '2019-06-19 13:32:08'),
(55, 5, 'cghfgcjfgtcj', 'jjjjjjjjjjjjjjjjjjjj', '2019-06-19 13:32:11'),
(56, 1, 'mona', 'europ', '2019-06-19 14:17:58'),
(57, 1, 'mona', 'europ', '2019-06-19 14:18:00'),
(58, 3, 'guy', 'youpi', '2019-06-19 14:18:38'),
(59, 3, 'guy', 'youpi', '2019-06-19 14:18:41'),
(60, 3, 'guy', 'youpi', '2019-06-19 14:20:38'),
(61, 3, 'guy', 'youpi', '2019-06-19 14:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(200) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `pwd`, `mail`, `date_inscription`) VALUES
(5, 'dngfdfn', 'fghjfgh,', 'ndgn@dfbgdf.com', '2019-06-12 10:40:25'),
(6, 'dngfdfn', 'fghjfgh,', 'ndgn@dfbgdf.com', '2019-06-12 10:40:25'),
(7, 'dngfdfn', 'fghjfgh,', 'ndgn@dfbgdf.com', '2019-06-12 10:40:25'),
(8, 'dngfdfn', 'fghjfgh,', 'ndgn@dfbgdf.com', '2019-06-12 10:40:25'),
(9, 'doro', 'fghjfgh,', 'ndgn@dfbgdf.com', '2019-06-12 10:40:25'),
(10, 'doro', 'fghjfgh,', 'ndgn@dfbgdf.com', '2019-06-12 10:40:25'),
(11, 'doro', 'fghjfgh,', 'ndgn@dfbgdf.com', '2019-06-12 10:40:25'),
(12, 'doro', 'fghjfgh,', 'ndgn@dfbgdf.com', '2019-06-12 10:40:25'),
(13, 'doro', 'fghjfgh,', 'ndgn@dfbgdf.com', '2019-06-12 10:40:25'),
(14, 'france', 'dertyui', 'dertyyuu', '2019-06-12 10:40:25'),
(15, 'france', 'dertyui', 'dertyyuu', '2019-06-12 10:40:25'),
(16, 'guy', 'slflskfj', 'lzsrflkrsf', '2019-06-12 10:40:25'),
(17, 'tdhjxfyj', 'gdfhjnfgj', 'fdhdfwh', '2019-06-12 10:40:49'),
(18, 'tht', 'ythbty', 'ythty', '2019-06-12 14:13:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billet`
--
ALTER TABLE `billet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billet` (`billet`);

--
-- Indexes for table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billet`
--
ALTER TABLE `billet`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`billet`) REFERENCES `billet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
