-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2020 at 05:55 PM
-- Server version: 5.7.28
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "-03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guigo_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambient`
--

DROP TABLE IF EXISTS `ambient`;
CREATE TABLE IF NOT EXISTS `ambient` (
  `data` timestamp NOT NULL,
  `temperatura` float NOT NULL,
  `umidade` float NOT NULL,
  `luminosidade` float NOT NULL,
  PRIMARY KEY (`data`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `attempt`
--

DROP TABLE IF EXISTS `attempt`;
CREATE TABLE IF NOT EXISTS `attempt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) CHARACTER SET latin1 NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cultures`
--

DROP TABLE IF EXISTS `cultures`;
CREATE TABLE IF NOT EXISTS `cultures` (
  `codCultura` int(11) NOT NULL,
  `nomeCultura` varchar(15) NOT NULL,
  `variedade` varchar(15) NOT NULL,
  `cicloEmDias` int(4) NOT NULL,
  `dtGerminacao` timestamp NULL DEFAULT NULL,
  `dtBercario` timestamp NULL DEFAULT NULL,
  `dtEngorda` timestamp NULL DEFAULT NULL,
  `dtColheita` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`codCultura`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `senha`, `dataCriacao`) VALUES
(21, 'Joaozinho', 'gustavorodrigues@outlook.com', '$2y$10$Kpi4QNFJS/ibMtbs841LTO7I.uJeLI2r6fJR2iNVrchIRrjHviGnq', '2020-01-28 22:36:00'),
(22, 'Eduao', 'eduao@gmail.com', '$2y$10$IYhUJluqLFRox0reXGv3Y.O5CBKanymf6VhZNmcxTd3QtmRPInjd.', '2020-01-29 16:23:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
