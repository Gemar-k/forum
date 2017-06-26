-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 26 jun 2017 om 12:56
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum_witcher3`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(10) UNSIGNED NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `themes`
--

CREATE TABLE `themes` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `themes`
--

INSERT INTO `themes` (`id`, `subject`, `description`, `user_id`, `created_at`) VALUES
(1, 'Thema 1', 'Witcher 3 is al 2 jaar oud maar nog steeds te gek.', 1, '2017-06-19 08:19:33'),
(2, 'Thema 2', 'Yennefer is een van de beste characters uit de witcher 3.', 1, '2017-06-19 09:10:14'),
(3, 'Thema 3', 'Please i need an answer.', 3, '2017-06-19 09:50:28');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `topics`
--

CREATE TABLE `topics` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `theme_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `topics`
--

INSERT INTO `topics` (`id`, `subject`, `description`, `created_at`, `theme_id`, `user_id`) VALUES
(1, 'first topic in Thema 3', 'Because hairworks is a very heavy physix simulation from nvidia many gpu''s can''t handle the simulation.', '2017-06-22 08:42:34', 3, 1),
(2, 'first topic in thema 1', 'here are some reasons :)', '2017-06-22 09:16:46', 1, 2),
(3, 'Subject2', 'description hierin', '2017-06-26 08:29:38', 3, 1),
(6, 'Dit is een topic in thema 2', 'test description', '2017-06-26 10:06:46', 2, 1),
(7, 'nog een topic in thema 2', 'het systeem werkt!', '2017-06-26 10:11:15', 2, 1),
(8, '2de topic in thema 1', 'het systeem werkt goed', '2017-06-26 10:13:27', 1, 1),
(9, 'nog een topic in thema 3', 'even een test doen', '2017-06-26 10:16:27', 3, 1),
(10, 'dit is een topic van alissa in thema 2', 'het systeem werkt!', '2017-06-26 10:52:03', 2, 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `sex`, `created_at`, `role`) VALUES
(1, 'gemar', 'gemar', '26bda7382f89fa4fb436965a675d2dadc06e885c', 'gemar.koning@gmail.com', 'male', '2017-06-15 13:52:05', 1),
(2, 'ariana grande', 'ariana', '35272bf81dfc11bdbded6fc272348b91e5e4d812', 'arianagrande@hotmail.com', 'female', '2017-06-17 20:42:02', 0),
(3, 'alissa violet', 'alissa', '26bda7382f89fa4fb436965a675d2dadc06e885c', 'administrator@gmail.com', 'female', '2017-06-17 20:43:16', 0),
(4, 'taylorhill', 'taylor', '26bda7382f89fa4fb436965a675d2dadc06e885c', 'taylorhill@gmail.com', 'female', '2017-06-17 21:23:11', 0),
(8, 'Frank', 'Boer', 'ccd1afbe7c4bd6f74e01c620d91e3dfd486acbf1', 'f02@student.alfa-college.nl', 'male', '2017-06-20 11:33:59', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
