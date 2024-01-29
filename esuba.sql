-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 29. led 2024, 19:03
-- Verze serveru: 10.4.25-MariaDB
-- Verze PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `esuba`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `clanky`
--

CREATE TABLE `clanky` (
  `id` int(11) UNSIGNED NOT NULL,
  `nazev` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `kategorie` varchar(255) NOT NULL,
  `obsah` text NOT NULL,
  `datum_vydani` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `clanky`
--

INSERT INTO `clanky` (`id`, `nazev`, `autor`, `kategorie`, `obsah`, `datum_vydani`) VALUES
(4, 'vyhra', 'Pavel', 'Lolko', 'hjgjghj', '2024-01-09');

-- --------------------------------------------------------

--
-- Struktura tabulky `hraci`
--

CREATE TABLE `hraci` (
  `id` int(11) UNSIGNED NOT NULL,
  `jmeno` varchar(255) NOT NULL,
  `pozice` varchar(255) NOT NULL,
  `vek` int(3) NOT NULL,
  `zeme` varchar(255) NOT NULL,
  `datum_pripojeni` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `hraci`
--

INSERT INTO `hraci` (`id`, `jmeno`, `pozice`, `vek`, `zeme`, `datum_pripojeni`) VALUES
(3, 'Pavel', 'Fortnite', 18, 'Čr', '2024-01-05');

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'Jokie', '123456a_', 'Jokie');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `clanky`
--
ALTER TABLE `clanky`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `hraci`
--
ALTER TABLE `hraci`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `clanky`
--
ALTER TABLE `clanky`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pro tabulku `hraci`
--
ALTER TABLE `hraci`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
