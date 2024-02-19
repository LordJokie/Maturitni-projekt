-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Úte 13. úno 2024, 23:28
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
-- Struktura tabulky `hraci`
--

CREATE TABLE `hraci` (
  `id` int(11) UNSIGNED NOT NULL,
  `prezdivka` varchar(255) NOT NULL,
  `jmeno` varchar(255) NOT NULL,
  `kategorie` varchar(255) NOT NULL,
  `vek` int(3) NOT NULL,
  `zeme` varchar(255) NOT NULL,
  `pozice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `hraci`
--

INSERT INTO `hraci` (`id`, `prezdivka`, `jmeno`, `kategorie`, `vek`, `zeme`, `pozice`) VALUES
(1, 'Smarty', 'Matyáš Rozvoral', 'LoL', 18, 'Česká republika', 'Support'),
(2, 'Savero', 'Jiři Odehnal', 'LoL', 19, 'Česká republika', 'Jungle'),
(3, 'Rylle', 'Mikkel Rylander Christiansen', 'LoL', 0, 'Dánsko', 'Midlane'),
(4, 'Lunddorf', 'Søren Lunddorf', 'LoL', 21, 'Dánsko', 'Toplane'),
(7, 'Dany', 'Daniel Novák', 'LoL', 0, 'Česká republika', 'AD Carry'),
(8, 'Elmo', 'Tomáš Bielik', 'LoL', 0, 'Česká republika', 'Assistant Coach'),
(9, 'DON LAFFSON', 'Radek Mikušovský', 'LoL', 28, 'Česká republika', 'Týmový manažer'),
(10, 'Tusi', 'Luboš Tusjak', 'CS:GO', 21, 'Česká republika', '-'),
(11, 'teCkoO', 'Tomáš Koširer', 'CS:GO', 28, 'Slovensko', '-'),
(12, 'naturalg', 'Peter Turčan', 'CS:GO', 0, 'Slovensko', '-'),
(13, 'Kozlik', 'Jiří Kozel', 'CS:GO', 0, 'Česká republika', '-'),
(14, 'iNte_', 'Petr Sehnal', 'CS:GO Youngsters', 0, 'Česká republika', 'Rifler'),
(15, 'HenkkyG', 'Luboš Ilko', 'CS:GO', 26, 'Slovensko', '-'),
(16, 'garzeN', 'Dávid Hrušovský', 'CS:GO', 0, 'Slovensko', '-'),
(17, 'Whitemish', 'Michaela Vrkoslavová', 'Ambasador', 20, 'Česká republika', '-'),
(18, 'Marcek', 'Ondřej Mareš', 'Ambasador', 0, 'Česká republika', '-'),
(19, 'Herdyn', 'Pavel Mikeš', 'Ambasador', 32, 'Česká republika', '-'),
(20, 'Charlien', 'Lenka Brázdilová', 'Ambasador', 0, 'Česká republika', '-');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `hraci`
--
ALTER TABLE `hraci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `hraci`
--
ALTER TABLE `hraci`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
