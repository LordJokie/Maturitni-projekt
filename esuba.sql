-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 08. dub 2024, 00:13
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
(22, 'Výhra....', 'iDNES.cz', 'LoL', 'neco neco neco neco neco neco neco neco', '2024-02-04');

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
  `pozice` varchar(255) NOT NULL,
  `imageurl` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `hraci`
--

INSERT INTO `hraci` (`id`, `prezdivka`, `jmeno`, `kategorie`, `vek`, `zeme`, `pozice`, `imageurl`) VALUES
(1, 'Smarty', 'Matyáš Rozvoral', 'LoL', 18, 'Česká republika', 'Support', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/smarty.png?itok=JRj72iAZ'),
(2, 'Savero', 'Jiři Odehnal', 'LoL', 19, 'Česká republika', 'Jungle', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/savero.png?itok=WjzNAUI0'),
(3, 'Rylle', 'Mikkel Rylander Christiansen', 'LoL', 0, 'Dánsko', 'Midlane', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/rylle.png?itok=cAIoqPZ6'),
(4, 'Lunddorf', 'Søren Lunddorf', 'LoL', 21, 'Dánsko', 'Toplane', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/lund.png?itok=DrpKUC02'),
(7, 'Dany', 'Daniel Novák', 'LoL', 0, 'Česká republika', 'AD Carry', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/dany.png?itok=XOCKL24u'),
(8, 'Elmo', 'Tomáš Bielik', 'LoL', 0, 'Česká republika', 'Assistant Coach', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/elmo.png?itok=eXB_7RZb'),
(9, 'DON LAFFSON', 'Radek Mikušovský', 'LoL', 28, 'Česká republika', 'Týmový manažer', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/donlaf.png?itok=3a4BYkDL'),
(10, 'Tusi', 'Luboš Tusjak', 'CS:GO', 21, 'Česká republika', '-', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/tusi.png?itok=9krlkDmF'),
(11, 'teCkoO', 'Tomáš Koširer', 'CS:GO', 28, 'Slovensko', '-', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/teckoo.png?itok=NaqKILl1'),
(12, 'naturalg', 'Peter Turčan', 'CS:GO', 0, 'Slovensko', '-', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/hrac_52_0.png?itok=Q9aY4T6u'),
(13, 'Kozlik', 'Jiří Kozel', 'CS:GO', 0, 'Česká republika', '-', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/kozlik_web.jpg?itok=1KHP3D7M'),
(14, 'iNte_', 'Petr Sehnal', 'CS:GO Youngsters', 0, 'Česká republika', 'Rifler', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/inte_web.jpg?itok=ABkfqdji'),
(15, 'HenkkyG', 'Luboš Ilko', 'CS:GO', 26, 'Slovensko', '-', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/henky.jpg?itok=j3qGwx7B'),
(16, 'garzeN', 'Dávid Hrušovský', 'CS:GO', 0, 'Slovensko', '-', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/hrac_52.png?itok=CwAVZWiS'),
(17, 'Whitemish', 'Michaela Vrkoslavová', 'Ambasador', 20, 'Česká republika', '-', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/mish_web_fixed.png?itok=tbi1Lz9t'),
(18, 'Marcek', 'Ondřej Mareš', 'Ambasador', 0, 'Česká republika', '-', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/marcek_web_fixed.png?itok=gKPz9oYu'),
(19, 'Herdyn', 'Pavel Mikeš', 'Ambasador', 32, 'Česká republika', '-', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/herdyn_web_fixed.png?itok=3aM6ycgd'),
(20, 'Charlien', 'Lenka Brázdilová', 'Ambasador', 0, 'Česká republika', '-', 'https://www.esuba.eu/sites/default/files/styles/360x360/public/charlien_web_fix.png?itok=L4NCUTce');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pro tabulku `hraci`
--
ALTER TABLE `hraci`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
