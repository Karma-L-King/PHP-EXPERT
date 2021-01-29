-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 nov 2020 om 10:13
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voetbalclubasd`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(11) NOT NULL,
  `voornaam` varchar(100) NOT NULL,
  `achternaam` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `wachtwoord` varchar(60) NOT NULL,
  `team` int(3) NOT NULL,
  `contributie` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `voornaam`, `achternaam`, `email`, `wachtwoord`, `team`, `contributie`) VALUES
(1, 'Johan', 'Piter', 'wewewe@gmail.com', 'peepee', 0, 0),
(2, 'Karma', 'King', 'karma@king.nl', 'peepee', 0, 0),
(3, 'Jan', 'WIlhelmus', 'jannus@rmil.c', 'peepee', 0, 0),
(4, 'pieter', 'curry', 'steph@gmail.com', 'curry', 1, 50),
(5, 'Tarik', 'Turk', 'tarik@gmail.com', 'tarik', 0, 0),
(6, 'fred', 'vanvleet', 'VanVleet@gmail.com', 'vanveelt', 2, 30),
(7, 'pascal', 'john', 'pascal@gmail.com', 'teen', 2, 5),
(8, 'OG', 'popopop', 'anunoby@gmail.com', 'zulu', 2, 30),
(9, 'jayson', 'tatum', 'taum@gmail.com', 'jesus', 3, 50),
(10, 'gordon', 'hayward', 'hayward@gmail.com', 'horselover', 3, 30);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
