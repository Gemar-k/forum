-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 jun 2017 om 21:24
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

--
-- Gegevens worden geëxporteerd voor tabel `replies`
--

INSERT INTO `replies` (`id`, `content`, `created_at`, `user_id`, `topic_id`) VALUES
(9, 'A reply from alissa', '2017-06-29 19:18:57', 3, 22),
(10, 'Hi alissa', '2017-06-29 19:20:35', 2, 23),
(11, 'Who thinks im right about my topic?', '2017-06-29 19:23:46', 3, 24);

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
(8, 'Theme 1 Witcher 3', 'Welcome on the witcher 3 forum', 1, '2017-06-29 19:16:30'),
(9, 'Witcher 3 Yennefer', 'Here you can find topics all related about Yennefer', 1, '2017-06-29 19:21:55');

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
(22, 'Please feel free to make more topics', 'gr Gemar Koning', '2017-06-29 19:17:22', 8, 1),
(23, 'Topic made by alissa', 'Feel free to leave a reply', '2017-06-29 19:19:29', 8, 3),
(24, 'Yennefer', 'I think yennefer is one of the best characters of the game', '2017-06-29 19:23:18', 9, 3);

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
(4, 'taylorhill', 'taylor', '26bda7382f89fa4fb436965a675d2dadc06e885c', 'taylorhill@gmail.com', 'female', '2017-06-17 21:23:11', 0);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT voor een tabel `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT voor een tabel `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
