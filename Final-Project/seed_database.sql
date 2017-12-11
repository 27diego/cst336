-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 07:26 AM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `singles`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`id`, `username`, `password`, `fname`, `lname`) VALUES
(1, 'dvega', 'salinas', 'Diego', 'Vega'),
(2, 'Davega', 'salinas', 'Daniel', 'Vega');

-- --------------------------------------------------------

--
-- Table structure for table `Albums`
--

CREATE TABLE IF NOT EXISTS `Albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `Albums`
--

INSERT INTO `Albums` (`id`, `Name`) VALUES
(1, 'El Karma'),
(2, 'Hablemos'),
(3, 'La Suerte'),
(4, 'Recuerden Mi Estilo'),
(5, 'La Fuga del Dorian'),
(6, '15 Exitos 15'),
(7, 'Me Deje Llevar'),
(8, 'DAMN.'),
(9, 'Good Kidd Madd City'),
(10, '2001'),
(11, 'Greatest Hits'),
(12, 'Get Rich or Die Tryin'''),
(13, 'More Life'),
(14, 'So Far Gone'),
(15, 'Take Care'),
(16, 'Views'),
(17, 'Grateful'),
(18, 'Major Key'),
(19, 'Fetty Wap');

-- --------------------------------------------------------

--
-- Table structure for table `Genres`
--

CREATE TABLE IF NOT EXISTS `Genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeName` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Genres`
--

INSERT INTO `Genres` (`id`, `typeName`) VALUES
(1, 'Mexican'),
(2, 'Rap'),
(3, 'Pop');

-- --------------------------------------------------------

--
-- Table structure for table `Songs`
--

CREATE TABLE IF NOT EXISTS `Songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `artist` varchar(40) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `album` varchar(25) NOT NULL,
  `price` float NOT NULL,
  `typeName` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `Songs`
--

INSERT INTO `Songs` (`id`, `name`, `artist`, `genre`, `album`, `price`, `typeName`) VALUES
(2, 'Te Metiste', 'Ariel Camacho y Los Plebes Del Racho', 'Romantic', 'El Karma', 1.29, 'Mexican'),
(3, 'El Toro Encartado', 'Ariel Camacho y Los Plebes Del Racho', 'Story Telling', 'El Karma', 1.29, 'Mexican'),
(4, 'Reflejos del Viejo', 'Ariel Camacho y Los Plebes Del Racho', 'Story Telling', 'El Karma', 1.29, 'Mexican'),
(5, 'El Corrido del Dorian', 'Ariel Camacho y Los Plebes Del Racho', 'Story Telling', 'El Karma', 1.29, 'Mexican'),
(6, 'La Vida Ruina', 'Ariel Camacho y Los Plebes Del Racho', 'Story Telling', 'Hablemos', 1.29, 'Mexican'),
(7, 'El Karma', 'Ariel Camacho y Los Plebes Del Racho', 'Story Telling', 'El Karma', 1.29, 'Mexican'),
(8, 'Secreto Mexicano', 'Ariel Camacho y Los Plebes Del Racho', 'Story Telling', 'El Karma', 1.29, 'Mexican'),
(9, 'Los Talibanes del Prieto', 'Ariel Camacho y Los Plebes Del Racho', 'Story Telling', 'El Karma', 1.29, 'Mexican'),
(10, 'Hablemos', 'Ariel Camacho y Los Plebes Del Racho', 'Romantic', 'Hablemos', 1.29, 'Mexican'),
(11, 'La Suerte', 'Los Plebes del Rancho de Ariel Camacho', 'Story Telling', 'La Suerte', 1.29, 'Mexican'),
(12, 'Por Enamorarme', 'Los Plebes del Rancho de Ariel Camacho', 'Romantic', 'La Suerte', 1.29, 'Mexican'),
(13, 'Aqui Andamos', 'Los Plebes del Rancho de Ariel Camacho', 'Story Telling', 'La Suerte', 1.29, 'Mexican'),
(14, 'No Lo Hice Bien', 'Los Plebes del Rancho de Ariel Camacho', 'Romantic', 'Recuerden Mi Estilo', 1.29, 'Mexican'),
(15, 'Que Caro Estoy Pagando', 'Los Plebes del Rancho de Ariel Camacho', 'Romantic', 'Recuerden Mi Estilo', 1.29, 'Mexican'),
(16, 'Recuerden Mi Estilo', 'Los Plebes del Rancho de Ariel Camacho', 'Story Telling', 'Recuerden Mi Estilo', 1.29, 'Mexican'),
(17, 'Ya lo Supere', 'Los Plebes del Rancho de Ariel Camacho', 'Romantic', 'Recuerden Mi Estilo', 1.29, 'Mexican'),
(18, 'La Fuga del Dorian', 'Grupo Fernandez', 'Story Telling', 'La Fuga del Dorian', 1.29, 'Mexican'),
(19, 'Nieves de Enero', 'Chalino Sanchéz', 'Romantic', '15 Exitos 15', 1.29, 'Mexican'),
(20, 'Me Deje Llevar', 'Christian Nodal', 'Romantic', 'Me Deje Llevar', 1.5, 'Mexican'),
(21, 'Eres', 'Christian Nodal', 'Romantic', 'Me Deje Llevar', 1.5, 'Mexican'),
(22, 'HUMBLE.', 'Kendrick Lamar', 'Lyricism', 'DAMN.', 1.99, 'Rap'),
(23, 'DUCKWORTH.', 'Kendrick Lamar', 'Lyricism', 'DAMN.', 1.99, 'Rap'),
(24, 'Money Trees', 'Kendrick Lamar', 'Story Telling', 'Good Kidd Madd City', 1.99, 'Rap'),
(25, 'Swimming Pools', 'Kendrick Lamar', 'Story Telling', 'Good Kidd Madd City', 1.99, 'Rap'),
(26, 'Still D.R.E.', 'Dr. Dre', 'Story Telling', '2001', 1.99, 'Rap'),
(27, 'California Love', '2Pac', 'Party', 'Greatest Hits', 1.99, 'Rap'),
(28, 'Keep ya Head Up', '2Pac', 'Story Telling', 'Greatest Hits', 1.99, 'Rap'),
(29, 'How do you Want It', '2Pac', 'Party', 'Greatest Hits', 1.99, 'Rap'),
(30, 'To Live and Die in L.A.', '2Pac', 'Story Telling', 'Greatest Hits', 1.99, 'Rap'),
(31, 'P.I.M.P.', '50 Cent', 'Party', 'Get Rich or Die Tryin''', 1.99, 'Rap'),
(32, '21 Questions', '50 Cent', 'Romantic', 'Get Rich or Die Tryin''', 1.99, 'Rap'),
(33, 'Passion Fruit', 'Drake', 'Party', 'More Life', 1.99, 'Pop'),
(34, 'Blem', 'Drake', 'Party', 'More Life', 1.99, 'Pop'),
(35, 'Successful', 'Drake', 'Story Telling', 'So Far Gone', 1.5, 'Pop'),
(36, 'Headlines', 'Drake', 'Lyricism', 'Take Care', 1.5, 'Pop'),
(37, 'Controlla', 'Drake', 'Party', 'Views', 1.99, 'Pop'),
(38, 'Wild Thoughts', 'Dj Khaled', 'Party', 'Grateful', 1.99, 'Pop'),
(39, 'For Free', 'Dj Khaled', 'Party', 'Major Key', 1.99, 'Pop'),
(40, 'Again', 'Fetty Wap', 'Party', 'Fetty Wap', 1.29, 'Pop'),
(41, 'Trap Queen', 'Fetty Wap', 'Party', 'Fetty Wap', 1.29, 'Pop'),
(42, 'One More Chance/Stay With Me (Remix)', 'The Notorious BIG', 'Party', 'Greatest Hits', 1.29, 'Pop'),
(43, 'El Mentado', 'Ariel Camacho', 'Mexican', 'El Karma', 1.59, ''),
(44, 'Tu Sabes Que', 'Ariel Camacho', 'Romantic', 'El Karma', 1.5, 'Mexican');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;seed_database