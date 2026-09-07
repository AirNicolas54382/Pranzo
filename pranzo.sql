-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 12, 2024 at 03:48 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pranzo`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `Dish` varchar(40) NOT NULL,
  `Price` int(11) NOT NULL,
  `Type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `Dish`, `Price`, `Type`) VALUES
(1, 'BRUSCHETTA', 25, 'appetizers'),
(2, 'BURRATA', 34, 'appetizers'),
(3, 'CARCIOFI CON POMIDORI E GORGONZOLA', 38, 'appetizers'),
(4, 'CARPACCIO DI MANZO', 49, 'appetizers'),
(5, 'ANTIPASTI MISTI ALL’ITALIANO', 54, 'appetizers'),
(6, 'TOSCANA', 20, 'soup'),
(7, 'TRIPPA ITALIANA', 23, 'soup'),
(8, 'INSALATA DI CEASAR', 35, 'vegetables&salads'),
(9, 'INSALATA CON ZUCCHINE RIPIENE', 38, 'vegetables&salads'),
(10, 'INSALATA CON SALMONE', 44, 'vegetables&salads'),
(11, 'MELANZANE RIPIENE', 39, 'vegetables&salads'),
(12, 'CARBONARA', 33, 'paste'),
(13, 'POLO E FUNGHI', 36, 'paste'),
(14, 'SPINACI', 37, 'paste'),
(15, 'NDUJA PICCANTE', 41, 'paste'),
(16, 'PROSCIUTTO', 42, 'paste'),
(17, 'BURRATA', 39, 'paste'),
(18, 'SALMONE', 45, 'paste'),
(19, 'LACTARIUS', 48, 'paste'),
(20, 'FRUTTI DI MARE', 59, 'paste'),
(21, 'TAGLIOLINI NERO', 59, 'paste'),
(22, 'RISOTTO PRIMAVERA', 37, 'risotto'),
(23, 'RISOTTO AI TARTUFO E POLLO', 39, 'risotto'),
(24, 'RISOTTO NERO', 59, 'risotto'),
(25, 'RAVIOLI DI RICOTTA E SPINACI', 35, 'ravioli'),
(26, 'RAVIOLI AI FUNGHI', 38, 'ravioli'),
(27, 'RAVIOLETTI AL BRASATO DI MANZO', 39, 'ravioli');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezervation`
--

CREATE TABLE `rezervation` (
  `ID` int(11) NOT NULL,
  `Rezerved` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `rezervation`
--

INSERT INTO `rezervation` (`ID`, `Rezerved`) VALUES
(1, 'f'),
(2, 'f'),
(3, 'f'),
(4, 'f'),
(5, 'f'),
(6, 't'),
(7, 'f'),
(8, 't'),
(9, 'f'),
(10, 'f'),
(11, 'f'),
(12, 'f'),
(13, 't'),
(14, 't'),
(15, 't'),
(16, 't'),
(17, 't'),
(18, 'f'),
(19, 'f'),
(20, 'f'),
(21, 't'),
(22, 't'),
(23, 't'),
(24, 't'),
(25, 't'),
(26, 't'),
(27, 'f'),
(28, 't'),
(29, 't'),
(30, 't'),
(31, 't'),
(32, 't'),
(33, 't'),
(34, 'f'),
(35, 't'),
(36, 'f'),
(37, 'f'),
(38, 'f'),
(39, 'f'),
(40, 'f'),
(41, 'f'),
(42, 'f'),
(43, 'f'),
(44, 'f'),
(45, 'f'),
(46, 'f'),
(47, 'f'),
(48, 'f'),
(49, 't'),
(50, 't'),
(51, 't'),
(52, 't'),
(53, 't'),
(54, 't'),
(55, 't'),
(56, 'f'),
(57, 'f'),
(58, 'f'),
(59, 'f'),
(60, 'f'),
(61, 'f'),
(62, 'f'),
(63, 'f'),
(64, 'f'),
(65, 'f'),
(66, 'f'),
(67, 'f'),
(68, 'f'),
(69, 'f'),
(70, 'f'),
(71, 'f'),
(72, 'f'),
(73, 't'),
(74, 't'),
(75, 't'),
(76, 't'),
(77, 't'),
(78, 't'),
(79, 't'),
(80, 'f'),
(81, 'f'),
(82, 'f'),
(83, 'f'),
(84, 'f'),
(85, 'f'),
(86, 'f'),
(87, 'f'),
(88, 'f'),
(89, 'f'),
(90, 'f'),
(91, 'f'),
(92, 'f'),
(93, 't'),
(94, 'f'),
(95, 't'),
(96, 't'),
(97, 't'),
(98, 't'),
(99, 't'),
(100, 't'),
(101, 't'),
(102, 't'),
(103, 't'),
(104, 't'),
(105, 't'),
(106, 't'),
(107, 't'),
(108, 't'),
(109, 't'),
(110, 't'),
(111, 't'),
(112, 't'),
(113, 't'),
(114, 't'),
(115, 't'),
(116, 't'),
(117, 't'),
(118, 't'),
(119, 't'),
(120, 't');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `User` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User`, `Password`) VALUES
('kowalski@gmail.com', 'fhgvdjhbgldgh7'),
('Magda@gmail.com', 'ugabuga'),
('Stanislaw@gmail.com', 'Motyl'),
('Burak@gmail.com', '1234'),
('Harnas@gmail.com', '1234'),
('kaboom@gmail.com', '2');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `rezervation`
--
ALTER TABLE `rezervation`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `rezervation`
--
ALTER TABLE `rezervation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
