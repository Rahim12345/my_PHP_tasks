-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Hazırlanma Vaxtı: 15 Sent, 2020 saat 12:40
-- Server versiyası: 10.4.10-MariaDB
-- PHP Versiyası: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Verilənlər Bazası: `dersim`
--

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `task_2`
--

DROP TABLE IF EXISTS `task_2`;
CREATE TABLE IF NOT EXISTS `task_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sxemi çıxarılan cedvel `task_2`
--

INSERT INTO `task_2` (`id`, `password`) VALUES
(1, 'c10736070248920c99c81c8bb5fc06bf'),
(2, '0a8f7cf63246e4d67adb9e560b6083a2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
