-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Трв 16 2020 р., 11:51
-- Версія сервера: 10.4.11-MariaDB
-- Версія PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `smartphone_world`
--

-- --------------------------------------------------------

--
-- Структура таблиці `andzejbunchuk`
--

CREATE TABLE `andzejbunchuk` (
  `id` int(6) UNSIGNED NOT NULL,
  `phone_name` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `prise` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблиці `anna123`
--

CREATE TABLE `anna123` (
  `id` int(6) UNSIGNED NOT NULL,
  `phone_name` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `prise` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблиці `client`
--

CREATE TABLE `client` (
  `id` int(4) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `login` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `client`
--

INSERT INTO `client` (`id`, `first_name`, `last_name`, `login`, `email`, `password`) VALUES
(38, 'Veronika', 'Dumalo', 'veronikadumalo', 'dumalo44084@gmail.com', '1234'),
(39, 'Anna', 'Kruk', 'anna123', 'gfgyy@gmail.com', '123456'),
(40, 'Andzej', 'Bunchuk', 'andzejbunchuk', 'andzej@gmail.com', 'qwerasd123'),
(41, 'Jan', 'Cola', 'colaJan', 'jan@gmail.com', 'dfgertqwsa'),
(42, 'Veronika', 'Dumalo', 'vdumalo', 'dumalo44084@gmail.com', 'dw1234'),
(43, 'Maksym', 'Naumov', 'mnaumov', 'maximius1998@gmail.com', 'qazwsxedc'),
(44, 'Alina', 'Strong', 'strong123', 'gfyhj@gmail.com', 'gtfc23');

-- --------------------------------------------------------

--
-- Структура таблиці `colajan`
--

CREATE TABLE `colajan` (
  `id` int(6) UNSIGNED NOT NULL,
  `phone_name` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `prise` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблиці `mnaumov`
--

CREATE TABLE `mnaumov` (
  `id` int(6) UNSIGNED NOT NULL,
  `phone_name` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `prise` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблиці `phone`
--

CREATE TABLE `phone` (
  `id` int(4) NOT NULL,
  `marka` varchar(15) NOT NULL,
  `model` varchar(15) NOT NULL,
  `cena` int(10) NOT NULL,
  `ekran` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `memory` int(10) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `phone`
--

INSERT INTO `phone` (`id`, `marka`, `model`, `cena`, `ekran`, `system`, `memory`, `img`) VALUES
(1, 'Samsung', 'Galaxy Note 10 ', 2650, '6,7\"', 'Android 10', 128, 'Samsung Galaxy Note 10 Lite.jpg'),
(2, 'Samsung', 'Galaxy S10', 3300, '6,1\"', 'Android 9.0 Pie', 128, 'Samsung Galaxy S10.jpg'),
(3, 'Samsung', 'Galaxy A20e', 750, '5,8\"', 'Android 9.0 Pie', 32, 'Samsung Galaxy A20e.jpg'),
(4, 'Samsung', 'Galaxy S9', 2500, '5,8\"', 'Android 8.0 Oreo', 64, 'Samsung Galaxy s9.jpg'),
(5, 'Samsung', 'Galaxy A51', 1700, '6,5\"', 'Android 10', 128, 'Samsung Galaxy A51.jpg'),
(6, 'Apple', 'iPhone Xs', 3100, '5,8\"', 'iOS 12', 64, 'Apple iPhone Xs.jpg'),
(7, 'Apple', 'iPhone 7', 1500, '4,7\"', 'iOS 10', 32, 'Apple iPhone 7.jpg'),
(8, 'Apple', 'iPhone 8', 2200, '4,7\"', 'iOS 11', 64, 'Apple iPhone 8.jpg'),
(9, 'Apple', 'iPhone 11', 3850, '6,1\"', 'iOS 13', 128, 'Apple iPhone 11.jpg'),
(10, 'Apple ', 'iPhone Xr', 3000, '6,1\"', 'iOS 12 ', 64, 'Apple iPhone Xr.jpg'),
(11, 'Xiaomi', 'Redmi Note 8 PR', 1100, '6,53\"', 'Android 9.0 Pie', 64, 'Xiaomi Redmi Note 8 PRO.jpg'),
(12, 'Xiaomi', 'Redmi 7A', 350, '5,45\"', 'Android 9.0 Pie', 16, 'Xiaomi Redmi 7A.jpg'),
(13, 'Xiaomi', 'Mi 9T', 1600, '6,39\"', 'Android 9.0 Pie', 128, 'Xiaomi Mi 9T.jpg'),
(14, 'Xiaomi', 'Redmi Note 7', 850, '6,3\"', 'Android 9.0 Pie', 128, 'Xiaomi Redmi Note 7.jpg'),
(15, 'Xiaomi', 'Redmi 8', 600, '6,22\"', 'Android 9.0 Pie', 32, 'Xiaomi Redmi 8.jpg'),
(16, 'Huawei', 'Mate 20 Lite', 900, '6,3\"', 'Android 8.1 Oreo', 64, 'Huawei Mate 20 Lite.jpg'),
(17, 'Huawei', 'P30', 2100, '6,1\"', 'Android 9.0 Pie', 128, 'Huawei P30.jpg'),
(18, 'Huawei', 'P20', 2000, '5,8\"', 'Android 8.1 Oreo', 128, 'Huawei P20.jpg'),
(19, 'Huawei', 'Y7', 599, '6,26\"', 'Android 8.1 Oreo', 32, 'Huawei Y7.jpg'),
(20, 'Huawei', 'P smart', 700, '6,21\"', 'Android 9.0 Pie', 64, 'Huawei P smart.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `strong123`
--

CREATE TABLE `strong123` (
  `id` int(6) UNSIGNED NOT NULL,
  `phone_name` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `prise` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблиці `vdumalo`
--

CREATE TABLE `vdumalo` (
  `id` int(6) UNSIGNED NOT NULL,
  `phone_name` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `prise` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблиці `veronikadumalo`
--

CREATE TABLE `veronikadumalo` (
  `id` int(6) UNSIGNED NOT NULL,
  `phone_name` varchar(30) NOT NULL,
  `model` varchar(50) NOT NULL,
  `prise` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `veronikadumalo`
--

INSERT INTO `veronikadumalo` (`id`, `phone_name`, `model`, `prise`, `image`) VALUES
(65, 'Huawei', 'Mate 20 Lite', '900', 'Huawei Mate 20 Lite.jpg'),
(66, 'Xiaomi', 'Redmi Note 8 PR', '1100', 'Xiaomi Redmi Note 8 PRO.jpg');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `andzejbunchuk`
--
ALTER TABLE `andzejbunchuk`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `anna123`
--
ALTER TABLE `anna123`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Індекси таблиці `colajan`
--
ALTER TABLE `colajan`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `mnaumov`
--
ALTER TABLE `mnaumov`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `strong123`
--
ALTER TABLE `strong123`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `vdumalo`
--
ALTER TABLE `vdumalo`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `veronikadumalo`
--
ALTER TABLE `veronikadumalo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `andzejbunchuk`
--
ALTER TABLE `andzejbunchuk`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `anna123`
--
ALTER TABLE `anna123`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `client`
--
ALTER TABLE `client`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT для таблиці `colajan`
--
ALTER TABLE `colajan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `mnaumov`
--
ALTER TABLE `mnaumov`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблиці `strong123`
--
ALTER TABLE `strong123`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `vdumalo`
--
ALTER TABLE `vdumalo`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `veronikadumalo`
--
ALTER TABLE `veronikadumalo`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
