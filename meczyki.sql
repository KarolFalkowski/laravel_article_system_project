-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Mar 2023, 18:21
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `meczyki`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `author_entity`
--

CREATE TABLE `author_entity` (
  `author_id` int(11) NOT NULL,
  `entity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news_author`
--

CREATE TABLE `news_author` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `news_author`
--

INSERT INTO `news_author` (`id`, `name`) VALUES
(1, 'Kowalski'),
(2, 'Nowak'),
(3, 'Pawlak'),
(4, 'Malinowski');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news_entity`
--

CREATE TABLE `news_entity` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `author_entity`
--
ALTER TABLE `author_entity`
  ADD KEY `author_id` (`author_id`),
  ADD KEY `entity_id` (`entity_id`);

--
-- Indeksy dla tabeli `news_author`
--
ALTER TABLE `news_author`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `news_entity`
--
ALTER TABLE `news_entity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `news_author`
--
ALTER TABLE `news_author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `news_entity`
--
ALTER TABLE `news_entity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `author_entity`
--
ALTER TABLE `author_entity`
  ADD CONSTRAINT `author_entity_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `news_author` (`id`),
  ADD CONSTRAINT `author_entity_ibfk_2` FOREIGN KEY (`entity_id`) REFERENCES `news_entity` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
