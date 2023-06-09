-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 24 2023 г., 22:08
-- Версия сервера: 10.6.7-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nailz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `call`
--

CREATE TABLE `call` (
  `id` int(11) NOT NULL,
  `name` varchar(124) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(124) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_answer` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `call`
--

INSERT INTO `call` (`id`, `name`, `phone`, `is_answer`) VALUES
(1, 'Арина', '+79994707929', 'n'),
(2, 'Василиса', '+79994707929', 'n');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(124) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_answer` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `phone`, `question`, `is_answer`) VALUES
(1, 'Алиша', '+79994707929', 'Здравствуйте, сколько стоит наращивание?', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`id`, `name`, `text`, `price`) VALUES
(3, 'а67а676', '7678е78п8ргрррироорир', 567),
(4, 'Маникюр без последующего покрытия', 'Аппаратный / комбинированный\r\n', 1500),
(5, 'Маникюр с последующим покрытием (лак/гель-лак)', 'Аппаратный / комбинированный\r\n', 1600),
(6, 'Пилочный маникюр ', 'Уникальная технология маникюра - безболезненная и деликатная обработка кутикулы специальными одноразовыми пилками, БЕЗ использования дополнительных режущих инструментов.\r\n', 1500),
(7, 'Японский маникюр P.Shine', 'Комплексный уход включает обработку кутикулы и глянцевание ногтей лечебными средствами и нанесение скваланового масла. Кожа выравнивается и увлажняется, а ногти обретают натуральный зеркальный блеск. В состав средств входят диоксид кремния (обеспечивает естественное воспроизводство коллагена, эластина и гиалуроновой кислоты), пчелиное маточное молочко (содержит более 400 полезных компонентов), протеины натурального шелка (создают тончайшую защитную пленку), пчелиный воск, диатомовая глина.\r\n', 1500);

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `f_name` varchar(124) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(124) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(124) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id`, `f_name`, `l_name`, `email`, `password`) VALUES
(1, 'Ирина', 'Кузнецова', 'irina@nailz.ru', 'root'),
(2, 'Ирина', 'Кузнецова', 'irina@nailz.ru', 'root');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `call`
--
ALTER TABLE `call`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `call`
--
ALTER TABLE `call`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
