-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 10 Sie 2015, 10:26
-- Wersja serwera: 10.0.15-MariaDB-cll-lve
-- Wersja PHP: 5.5.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `csgoshoa_shop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ceny`
--

CREATE TABLE IF NOT EXISTS `ceny` (
  `ID` int(11) NOT NULL,
  `cena` varchar(100) NOT NULL,
  `tresc` text NOT NULL,
  `numer` text NOT NULL,
  `zapas1` text NOT NULL,
  `zapas2` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Struktura tabeli dla tabeli `klucze`
--

CREATE TABLE IF NOT EXISTS `klucze` (
  `ID` int(11) NOT NULL,
  `klucz` text NOT NULL,
  `use1` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kody`
--

CREATE TABLE IF NOT EXISTS `kody` (
  `ID` int(11) NOT NULL,
  `kod` text NOT NULL,
  `koszt` int(11) NOT NULL,
  `kto` int(11) NOT NULL,
  `data` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=317 DEFAULT CHARSET=latin1;


--
-- Struktura tabeli dla tabeli `kodysmsklucze`
--

CREATE TABLE IF NOT EXISTS `kodysmsklucze` (
  `ID` int(11) NOT NULL,
  `kod` text NOT NULL,
  `data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kodyzwrotnesms`
--

CREATE TABLE IF NOT EXISTS `kodyzwrotnesms` (
  `ID` int(11) NOT NULL,
  `kod` text NOT NULL,
  `idceny` text NOT NULL,
  `zapas1` text NOT NULL,
  `zapas2` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1611 DEFAULT CHARSET=latin1;


--
-- Struktura tabeli dla tabeli `kupione`
--

CREATE TABLE IF NOT EXISTS `kupione` (
  `ID` int(11) NOT NULL,
  `cokupil` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `tradelink` text NOT NULL,
  `zapas1` text NOT NULL,
  `zapas2` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=322 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `kupione`
--

INSERT INTO `kupione` (`ID`, `cokupil`, `tradelink`, `zapas1`, `zapas2`, `data`) VALUES
(320, 'Glock 18 Grzechocząca Śmierć', 'https://steamcommunity.com/tradeoffer/new/?partner=273499380&amp;token=pH4dStNk', '0', '0', '2015-08-08 21:05:26'),
(277, 'AUG Moment Obrotowy', 'https://steamcommunity.com/tradeoffer/new/?partner=242371175&amp;token=n_b89hQV', '0', '0', '2015-07-09 19:36:08'),
(318, 'Skrzynia Chroma 2', 'https://steamcommunity.com/tradeoffer/new/?partner=276928748&amp;token=yGQtKAqr', '0', '0', '2015-08-07 16:30:43'),
(315, 'SSG 08 Pazury', 'https://steamcommunity.com/tradeoffer/new/?partner=264193112&amp;token=cM_uTjus', '0', '0', '2015-08-05 09:51:01'),
(319, 'UMP 45 Labirynt', 'https://steamcommunity.com/tradeoffer/new/?partner=241868213&amp;token=cZ5F_OcE', '0', '0', '2015-08-08 15:03:54'),
(281, 'SSG 08 Pazury', 'https://steamcommunity.com/tradeoffer/new/?partner=242136710&amp;token=b4n9NM05', '0', '0', '2015-07-13 11:46:49'),
(317, 'UMP 45 Labirynt - ST', 'https://steamcommunity.com/tradeoffer/new/?partner=131090658&amp;token=KbQ2k5xy', '0', '0', '2015-08-07 07:59:11'),
(301, 'LOS UMP-45 (StatTrak™) | Labirynt', 'https://steamcommunity.com/tradeoffer/new/?partner=219426565&amp;token=q6alnYVn', '0', '0', '2015-07-24 18:24:20'),
(310, 'M249 Aligator', 'https://steamcommunity.com/tradeoffer/new/?partner=166895706&amp;token=nXU5Aj61', '0', '0', '2015-07-28 21:17:55'),
(241, 'Tec-9 Burza Piaskowa', 'https://steamcommunity.com/tradeoffer/new/?partner=238118890&token=waXj1Y7x\n\n', '0', '0', '2015-06-23 16:35:32'),
(285, 'Klucz Skrzyni Chroma', 'https://steamcommunity.com/tradeoffer/new/?partner=274595680&amp;token=cvqm6pXW', '0', '0', '2015-07-13 21:34:02'),
(306, 'Tec-9 Burza Piaskowa', 'https://steamcommunity.com/tradeoffer/new/?partner=206156425&amp;token=3O5MMRcd', '0', '0', '2015-07-27 15:07:01'),
(321, 'SSG 08 Pazury', 'https://steamcommunity.com/tradeoffer/new/?partner=75261919&amp;token=SLfI4kti', '0', '0', '2015-08-09 09:58:15'),
(299, 'Glock 18 Grzechocząca Śmierć', 'https://steamcommunity.com/tradeoffer/new/?partner=230764310&amp;token=clFHvvck', '0', '0', '2015-07-23 19:45:00'),
(278, 'Klucz Operacji Phoenix', 'https://steamcommunity.com/tradeoffer/new/?partner=228145841&amp;token=PqfBLEt4', '0', '0', '2015-07-09 21:14:19'),
(316, 'Desert Eagle Miejski Gruz', 'https://steamcommunity.com/tradeoffer/new/?partner=223654199&amp;token=nhGsrJ9a', '0', '0', '2015-08-06 16:04:46'),
(311, 'Mag 7 Strażnik Niebios', 'https://steamcommunity.com/tradeoffer/new/?partner=109515252&amp;token=xwnGuOes', '0', '0', '2015-07-30 13:19:05'),
(312, 'CZ75 Tygrys', 'https://steamcommunity.com/tradeoffer/new/?partner=248837919&amp;token=1ZHmrtsp', '0', '0', '2015-08-02 17:09:39'),
(314, 'AUG Uwaga Promieniowanie', 'https://steamcommunity.com/tradeoffer/new/?partner=199144224&amp;token=Mm7ow3Dh', '0', '0', '2015-08-04 16:16:23');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmioty`
--

CREATE TABLE IF NOT EXISTS `przedmioty` (
  `ID` int(11) NOT NULL,
  `nazwa` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `opis` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `obrazek` text NOT NULL,
  `typ` text NOT NULL,
  `cena1` text NOT NULL,
  `cena2` text NOT NULL,
  `sprzedanych` text NOT NULL,
  `zapas1` text NOT NULL,
  `zapas2` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `przedmioty`
--

INSERT INTO `przedmioty` (`ID`, `nazwa`, `opis`, `obrazek`, `typ`, `cena1`, `cena2`, `sprzedanych`, `zapas1`, `zapas2`, `data`) VALUES
(16, '5x Skrzynia Łowcy', '5 Skrzyń Łowcy', '/ikony/skrzynie/16.png', 'inne', '7', '9999', '0', '0', '0', '2015-02-19 21:04:24'),
(17, '5x Zimowa Walizka eSports', '5 Zimowych Walizek eSports 2013', '/ikony/skrzynie/17.png', 'inne', '6', '9999', '0', '0', '0', '2015-02-19 21:08:23'),
(18, '5x Skrzynia Phoenix', '5 Skrzyń Operacji Phoneix', '/ikony/skrzynie/18.png', 'inne', '5', '9999', '0', '0', '0', '2015-02-19 21:15:01'),
(19, '5x Chroma Case', '5 Chroma Case-ów', '/ikony/skrzynie/19.png', 'inne', '5', '9999', '0', '0', '0', '2015-02-19 21:21:49'),
(20, '5x Skrzynia Breakout', '5 Skrzyń Breakout', '/ikony/skrzynie/20.png', 'inne', '3', '9999', '0', '0', '0', '2015-02-19 21:28:28'),
(21, '5x Skrzynia Vanguard', '5 Skrzyń Operacji Vanguard', '/ikony/skrzynie/21.png', 'inne', '4', '9999', '0', '0', '0', '2015-02-19 21:30:19'),
(22, 'Skrzynia Zimowej Ofensywy', 'Skrzynia Zimowej Ofensywy', '/ikony/skrzynie/22.png', 'inne', '7', '9999', '0', '0', '0', '2015-02-19 21:33:01'),
(23, 'P2000 Pulse - ST', 'P2000 Pulse StatTrak (lekko używana)', '/ikony/stattrak/23.png', 'stat', '7', '9999', '0', '0', '0', '2015-02-19 22:00:42'),
(24, 'USP Krwawy Tygrys - ST', 'USP Krwawy Tygrys StatTrak (lekko używana)', '/ikony/stattrak/24.png', 'stat', '9', '9999', '0', '0', '0', '2015-02-19 22:06:13'),
(25, 'P250 Stalowy Zamęt - ST', 'P250 Stalowy Zamęt StatTrak (fabrycznie nowa)', '/ikony/stattrak/25.png', 'stat', '8', '9999', '0', '0', '0', '2015-02-19 22:17:05'),
(27, 'Dwie Baretty Limba Czarna - ST', 'Dwie Baretty Limba Czarna StatTrak (przetestowana w boju)', '/ikony/stattrak/27.png', 'stat', '8', '9999', '0', '0', '0', '2015-02-19 22:34:49'),
(35, 'XM1014 Czerwony Pyton - ST', 'XM1014 Czerwony Pyton StatTrak (lekko używana)', '/ikony/stattrak/35.png', 'stat', '7', '9999', '0', '0', '0', '2015-02-20 16:28:51'),
(31, 'FiveSeven Kami - ST', 'FiveSeven Kami StatTrak (lekko używana)', '/ikony/stattrak/31.png', 'stat', '8', '9999', '0', '0', '0', '2015-02-20 16:23:43'),
(32, 'Tec-9 Izaak - ST', 'Tec-9 Izaak StatTrak (ślady używania)', '/ikony/stattrak/32.png', 'stat', '7', '9999', '0', '0', '0', '2015-02-20 16:24:02'),
(37, 'P2000 Srebro', 'P2000 Srebro (fabrycznie nowa)', '/ikony/bronie/37.png', 'bronie', '8', '9999', '0', '0', '0', '2015-02-24 18:49:20'),
(38, 'P2000 Pulse', 'P2000 Pulse (fabrycznie nowa)', '/ikony/bronie/38.png', 'bronie', '4', '9999', '0', '0', '0', '2015-02-24 18:50:26'),
(39, 'USP-S Nierdzewny', 'USP-S Nierdzewny (przetestowana w boju)', '/ikony/bronie/39.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-24 18:53:10'),
(40, 'USP-S Królewski Błękit', 'USP-S Królewski Błękit (lekko używana)', '/ikony/bronie/40.png', 'bronie', '8', '9999', '0', '0', '0', '2015-02-24 18:55:12'),
(41, 'Glock 18 Jabłko Kandyzowane', 'Glock 18 Jabłko Kandyzowane (lekko używana)', '/ikony/bronie/41.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-24 18:57:20'),
(42, 'Glock 18 Grzechocząca Śmierć', 'Glock 18 Grzechocząca Śmierć (Ślady Używania)', '/ikony/bronie/42.png', 'bronie', '2', '9999', '0', '0', '0', '2015-02-24 18:58:33'),
(43, 'P250 Rój', 'P250 Rój (fabrycznie nowa)', '/ikony/bronie/43.png', 'bronie', '6', '9999', '0', '0', '0', '2015-02-24 19:00:42'),
(44, 'P250 Metaliczny DDPAT', 'P250 Metaliczny DDPAT (fabrycznie nowa)', '/ikony/bronie/44.png', 'bronie', '2', '9999', '0', '0', '0', '2015-02-24 19:01:19'),
(45, 'Desert Eagle Meteoryt', 'Desert Eagle Meteoryt (fabrycznie nowa)', '/ikony/bronie/45.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-24 19:03:11'),
(46, 'Desert Eagle Miejski Gruz', 'Desert Eagle Miejski Gruz (lekko używana)', '/ikony/bronie/46.png', 'bronie', '3', '9999', '0', '0', '0', '2015-02-24 19:04:46'),
(47, 'Dwie Baretty Anodowany Granatowy', 'Dwie Baretty Anodowany Granatowy (fabrycznie nowa)', '/ikony/bronie/47.png', 'bronie', '4', '9999', '0', '0', '0', '2015-02-24 19:07:59'),
(48, 'Dwie Baretty Pantera', 'Dwie Baretty Pantera (fabrycznie nowa)', '/ikony/bronie/48.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-24 19:08:50'),
(49, 'Five SeveN Skórka Pomarańczy', 'Five SeveN Skórka Pomarańczy (lekko używana)', '/ikony/bronie/49.png', 'bronie', '3', '9999', '0', '0', '0', '2015-02-24 19:11:07'),
(50, 'Five SeveN Zasłona Nocy', 'Five SeveN Zasłona Nocy (fabrycznie nowa)', '/ikony/bronie/50.png', 'bronie', '5', '9999', '0', '0', '0', '2015-02-24 19:12:19'),
(51, 'Tec-9 Burza Piaskowa', 'Tec-9 Burza Piaskowa (ślady używania)', '/ikony/bronie/51.png', 'bronie', '2', '9999', '0', '0', '0', '2015-02-24 19:15:09'),
(52, 'Tec-9 Zielono Mi', 'Tec-9 Zielono Mi (fabrycznie nowa)', '/ikony/bronie/52.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-24 19:15:56'),
(53, 'CZ75 Tygrys', 'CZ75 Tygrys (fabrycznie nowa)', '/ikony/bronie/53.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-24 19:18:16'),
(54, 'CZ75 Heksan', 'CZ75 Heksan (fabrycznie nowa)', '/ikony/bronie/54.png', 'bronie', '5', '9999', '0', '0', '0', '2015-02-24 19:19:11'),
(55, 'Nova Nawałnica', 'Nova Nawałnica (lekko używana)', '/ikony/bronie/55.png', 'bronie', '6', '9999', '0', '0', '0', '2015-02-24 19:20:57'),
(56, 'Nova Koi', 'Nova Koi (fabrycznie nowa)', '/ikony/bronie/56.png', 'bronie', '6', '9999', '0', '0', '0', '2015-02-24 19:21:34'),
(57, 'XM1014 Miejski Podziurawiony', 'XM1014 MIejski Podziurawiony (lekko używana)', '/ikony/bronie/57.png', 'bronie', '5', '9999', '0', '0', '0', '2015-02-26 08:41:41'),
(58, 'XM1014 Kościana Machina', 'XM1014 Kościana Machina (przetestowana w boju)', '/ikony/bronie/58.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-26 08:42:43'),
(59, 'Mag 7 Srebro', 'Mag 7 Srebro (fabrycznie nowa)', '/ikony/bronie/59.png', 'bronie', '6', '9999', '0', '0', '0', '2015-02-26 08:44:54'),
(60, 'Mag 7 Strażnik Niebios', 'Mag 7 Strażnik Niebios (fabrycznie nowa)', '/ikony/bronie/60.png', 'bronie', '2', '9999', '0', '0', '0', '2015-02-26 08:45:27'),
(61, 'Obrzym Szałwia', 'Olbrzym Szałwia (lekko używana)', '/ikony/bronie/61.png', 'bronie', '3', '9999', '0', '0', '0', '2015-02-26 08:46:51'),
(62, 'Obrzym Kropka', 'Olbrzym Kropka (przetestowana w boju)', '/ikony/bronie/62.png', 'bronie', '5', '9999', '0', '0', '0', '2015-02-26 08:48:00'),
(63, 'M249 Magma', 'M249 Magma (fabrycznie nowa)', '/ikony/bronie/63.png', 'bronie', '4', '9999', '0', '0', '0', '2015-02-26 08:49:13'),
(64, 'M249 Aligator', 'M249 Aligator (fabrycznie nowa)', '/ikony/bronie/64.png', 'bronie', '2', '9999', '0', '0', '0', '2015-02-26 08:49:45'),
(65, 'Negev Bratatat', 'Negev Bratatat (fabrycznie nowa)', '/ikony/bronie/65.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-26 08:51:00'),
(66, 'Negev Pustynne Uderzenie', 'Negev Pustynne Uderzenie (fabrycznie nowa)', '/ikony/bronie/66.png', 'bronie', '2', '9999', '0', '0', '0', '2015-02-26 08:51:29'),
(68, 'Mac 10 Spłowiały Bursztyn', 'Mac 10 Spłowiały Bursztyn (lekko używana)', '/ikony/bronie/68.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-26 15:32:06'),
(69, 'PP Bizon Mosiądz', 'PP Bizon Mosiądz (ślady używania)', '/ikony/bronie/69.png', 'bronie', '2', '9999', '0', '0', '0', '2015-02-26 15:33:05'),
(70, 'PP Bizon Ozyrys', 'PP Bizon Ozyrys (fabrycznie nowa)', '/ikony/bronie/70.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-26 15:33:47'),
(71, 'P90 Moduł', 'P90 Moduł (fabrycznie nowa)', '/ikony/bronie/71.png', 'bronie', '5', '9999', '0', '0', '0', '2015-02-26 15:34:24'),
(72, 'P90 Martwy Punkt', 'P90 Martwy Punkt (fabrycznie nowa)', '/ikony/bronie/72.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-26 15:35:13'),
(73, 'MP9 Hot Rod', 'MP9 Hot Rod (fabrycznie nowa)', '/ikony/bronie/73.png', 'bronie', '9', '9999', '0', '0', '0', '2015-02-26 15:36:14'),
(74, 'MP9 Zachodzące Słońce', 'MP9 Zachodzące Śłońce (przetestowana w boju)', '/ikony/bronie/74.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-26 15:36:57'),
(75, 'UMP 45 Ostrzeżenie Przed Opadem', 'UMP 45 Ostrzeżenie Przed Opadem (lekko używana)', '/ikony/bronie/75.png', 'bronie', '9', '9999', '0', '0', '0', '2015-02-26 15:38:07'),
(76, 'UMP 45 Labirynt', 'UMP 45 Labirynt (fabrycznie nowa)', '/ikony/bronie/76.png', 'bronie', '2', '9999', '0', '0', '0', '2015-02-26 15:38:52'),
(77, 'MP7 Anodowy Granatowy', 'MP7 Anodowy Granatowy (fabrycznie nowa)', '/ikony/bronie/77.png', 'bronie', '6', '9999', '0', '0', '0', '2015-02-26 15:39:48'),
(78, 'MP7 Wybielenie', 'MP7 Wybielenie (przetestowana w boju)', '/ikony/bronie/78.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-26 15:41:02'),
(81, 'M249 Magma - ST', 'M249 Magma StatTrak (fabrycznie nowa)', '/ikony/stattrak/81.png', 'stat', '7', '9999', '0', '0', '0', '2015-02-27 12:01:01'),
(82, 'Negev Bratatat - ST', 'Negev Bratatat StatTrak (lekko używana)', '/ikony/stattrak/82.png', 'stat', '7', '9999', '0', '0', '0', '2015-02-27 12:04:22'),
(83, 'Mac 10 Gorąco - ST', 'Mac 10 Gorąco StatTrak (ślady używania)', '/ikony/stattrak/83.png', 'stat', '9', '9999', '0', '0', '0', '2015-02-27 12:07:58'),
(85, 'UMP 45 Labirynt - ST', 'UMP 45 Labirynt StatTrak (fabrycznie nowa)', '/ikony/stattrak/85.png', 'stat', '6', '9999', '0', '0', '0', '2015-02-27 12:16:59'),
(86, 'Famas Sierżant - ST', 'Famas Sierżant StatTrak (ślady używania)', '/ikony/stattrak/86.png', 'stat', '9', '9999', '0', '0', '0', '2015-02-27 12:19:18'),
(87, 'P90 Moduł - ST', 'P90 Moduł StatTrak (fabrycznie nowa)', '/ikony/stattrak/87.png', 'stat', '9', '9999', '0', '0', '0', '2015-02-27 12:21:54'),
(88, 'Galil AR Niebieski Tytan - ST', 'Galil AR Niebieski Tytan StatTrak (fabrycznie nowa)', '/ikony/stattrak/88.png', 'stat', '8', '9999', '0', '0', '0', '2015-02-27 12:24:37'),
(89, 'SSG 08 Otchłań - ST', 'SSG 08 Otchłań StatTrak (ślady używania)', '/ikony/stattrak/89.png', 'stat', '6', '9999', '0', '0', '0', '2015-02-27 12:27:06'),
(6, 'Skrzynia Chroma 2', '1x Skrzynia Chroma 2', '/ikony/skrzynie/6.png', 'inne', '4', '9999', '0', '0', '0', '2015-05-13 20:40:00'),
(92, 'SCAR-20 Szkarłatna Sieć - ST', 'SCAR-20 Szkarłatna Sieć StatTrak (ślady używania)', '/ikony/stattrak/92.png', 'stat', '8', '9999', '0', '0', '0', '2015-02-27 12:35:08'),
(93, 'SG 553 Ultrafiolet - ST', 'SG 553 Ultrafiolet StatTrak (przetestowana w boju)', '/ikony/stattrak/93.png', 'stat', '9', '9999', '0', '0', '0', '2015-02-27 12:37:47'),
(94, 'G3SG1 Lazurowa Zebra - ST', 'G3SG1 Lazurowa Zebra StatTrak (fabrycznie nowa)', '/ikony/stattrak/94.png', 'stat', '8', '9999', '0', '0', '0', '2015-02-27 12:40:25'),
(95, 'Famas Pulse', 'Famas Pulse (fabrycznie nowa)', '/ikony/bronie/95.png', 'bronie', '9', '9999', '0', '0', '0', '2015-02-27 14:03:16'),
(96, 'Famas Łza Strachu', 'Famas Łza Strachu (fabrycznie nowa)', '/ikony/bronie/96.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-27 14:04:00'),
(97, 'Galil AR Smoking', 'Galil AR Smoking (ślady używania)', '/ikony/bronie/97.png', 'bronie', '6', '9999', '0', '0', '0', '2015-02-27 14:04:52'),
(98, 'Galil AR Burza Piaskowa', 'Galil AR Burza Piaskowa (lekko używana)', '/ikony/bronie/98.png', 'bronie', '6', '9999', '0', '0', '0', '2015-02-27 14:05:47'),
(99, 'M4A4 Miejski DDPAT', 'M4A1 Miejski DDPAT (lekko używana)', '/ikony/bronie/99.png', 'bronie', '5', '9999', '0', '0', '0', '2015-02-27 14:06:55'),
(101, 'M4A1-S Krwawy Tygrys', 'M4A1-S Krwawy Tygrys (lekko używana)', '/ikony/bronie/101.png', 'bronie', '9', '9999', '0', '0', '0', '2015-02-27 14:08:43'),
(102, 'M4A1-S VariCamo', 'M4A1-S VariCamo (ślady używania)', '/ikony/bronie/102.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-27 14:09:34'),
(103, 'AK-47 Predator', 'AK-47 Predator (lekko używana)', '/ikony/bronie/103.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-27 14:10:37'),
(105, 'SSG 08 Pazury', 'SSG 08 Pazury (ślady używania)', '/ikony/bronie/105.png', 'bronie', '2', '9999', '0', '0', '0', '2015-02-27 14:12:16'),
(106, 'SSG 08 Otchłań', 'SSG 08 Otchłań (fabrycznie nowa)', '/ikony/bronie/106.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-27 14:13:03'),
(107, 'AUG Moment Obrotowy', 'AUG Moment Obrotowy (fabrycznie nowa)', '/ikony/bronie/107.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-27 14:14:00'),
(108, 'AUG Uwaga Promieniowanie', 'AUG Uwaga Promieniowanie (lekko używana)', '/ikony/bronie/108.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-27 14:14:58'),
(109, 'SG 553 Anodowy Granatowy', 'SG 553 Anodowy Granatowy (fabrycznie nowa)', '/ikony/bronie/109.png', 'bronie', '4', '9999', '0', '0', '0', '2015-02-27 14:15:43'),
(110, 'SG 553 Pulse', 'SG 553 Pulse (ślady używania)', '/ikony/bronie/110.png', 'bronie', '7', '9999', '0', '0', '0', '2015-02-27 14:16:36'),
(111, 'AWP Siatka Safari', 'AWP Siatka Safari (ślady używania)', '/ikony/bronie/111.png', 'bronie', '6', '9999', '0', '0', '0', '2015-02-27 14:17:15'),
(114, 'Scar-20 Szkarłatna Sieć', 'Scar-20 Szkarłatna Sieć (lekko używana)', '/ikony/bronie/114.png', 'bronie', '6', '9999', '0', '0', '0', '2015-02-27 14:20:53'),
(115, 'G3SG1 Lazurowa Zebra', 'G3SG1 Lazurowa Zebra (fabrycznie nowa)', '/ikony/bronie/115.png', 'bronie', '5', '9999', '0', '0', '0', '2015-02-27 14:21:46'),
(116, 'G3SG1 Kafelki', 'G3SG1 Kafelki (ślady używania)', '/ikony/bronie/116.png', 'bronie', '6', '9999', '0', '0', '0', '2015-02-27 14:22:35');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `ID` int(11) NOT NULL DEFAULT '1',
  `nazwastrony` varchar(50) NOT NULL DEFAULT 'Nazwa Strony',
  `opisstrony` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL DEFAULT 'Twoj opis strony',
  `numer1` varchar(50) NOT NULL DEFAULT 'numer',
  `tresc1` varchar(50) NOT NULL DEFAULT 'tresc',
  `cena1` varchar(50) NOT NULL DEFAULT 'cena',
  `numer2` varchar(50) NOT NULL DEFAULT 'numer',
  `tresc2` varchar(50) NOT NULL DEFAULT 'tresc',
  `cena2` varchar(50) NOT NULL DEFAULT 'cena',
  `numer3` varchar(50) NOT NULL DEFAULT 'numer',
  `tresc3` varchar(50) NOT NULL DEFAULT 'tresc',
  `cena3` varchar(50) NOT NULL DEFAULT 'cena',
  `news` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `settings`
--

INSERT INTO `settings` (`ID`, `nazwastrony`, `opisstrony`, `numer1`, `tresc1`, `cena1`, `numer2`, `tresc2`, `cena2`, `numer3`, `tresc3`, `cena3`, `news`, `data`) VALUES
(1, 'CSGO-Shop.pl', 'Skiny za SMS do CS:GO', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE IF NOT EXISTS `uzytkownicy` (
  `ID` int(11) NOT NULL,
  `nick` varchar(50) NOT NULL,
  `haslo` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ranga` int(11) NOT NULL,
  `adverty` text NOT NULL,
  `ip` text NOT NULL,
  `ban` text NOT NULL,
  `kupil` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`ID`, `nick`, `haslo`, `email`, `ranga`, `adverty`, `ip`, `ban`, `kupil`, `data`) VALUES
(1, 'inferno', '3d11c7953af2092a4834ad96005e3e31', 'email@email.com', 5, '0', '178.43.194.109', '0', '0', '2015-02-02 17:47:49'),

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `ceny`
--
ALTER TABLE `ceny`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `klucze`
--
ALTER TABLE `klucze`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kody`
--
ALTER TABLE `kody`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kodysmsklucze`
--
ALTER TABLE `kodysmsklucze`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kodyzwrotnesms`
--
ALTER TABLE `kodyzwrotnesms`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kupione`
--
ALTER TABLE `kupione`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `przedmioty`
--
ALTER TABLE `przedmioty`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ceny`
--
ALTER TABLE `ceny`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT dla tabeli `klucze`
--
ALTER TABLE `klucze`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `kody`
--
ALTER TABLE `kody`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=317;
--
-- AUTO_INCREMENT dla tabeli `kodysmsklucze`
--
ALTER TABLE `kodysmsklucze`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `kodyzwrotnesms`
--
ALTER TABLE `kodyzwrotnesms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1611;
--
-- AUTO_INCREMENT dla tabeli `kupione`
--
ALTER TABLE `kupione`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=322;
--
-- AUTO_INCREMENT dla tabeli `przedmioty`
--
ALTER TABLE `przedmioty`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
