-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 27 2023 г., 10:00
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `alfa-test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id` int NOT NULL,
  `testname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `testname`, `body`) VALUES
(1, 'Все тесты', '<div id=\"search-container\">\r\n				<input type=\"search\" id=\"search-input\" placeholder=\"Введите запрос...\"/>\r\n				<button id=\"search\">Найти</button>\r\n            </div>\r\n			<div id=\"buttons\">\r\n				<button class=\"button-value\" onclick=\"filterProduct(\'all\')\">Все</button>\r\n				<button class=\"button-value\" onclick=\"filterProduct(\'html\')\">HTML</button>\r\n				<button class=\"button-value\" onclick=\"filterProduct(\'css\')\">CSS</button>\r\n				<button class=\"button-value\" onclick=\"filterProduct(\'js\')\">JS</button>\r\n				<button class=\"button-value\" onclick=\"filterProduct(\'php\')\">PHP</button>\r\n			</div>\r\n			<div id=\"products\">\r\n			</div>\r\n		</div>\r\n	</div>\r\n		<script src=\"js/test-categor.js\"></script>'),
(2, 'Тест по теме: Основы HTML', '\r\n			<div class=\"card\">\r\n				<p class=\"card-name\">Тест по теме: Основы HTML</p>\r\n				<button class=\"btn-click\" type=\"submit\" name=\"formBtn\" onclick=\"location.href=\'/курсовая/test/Основы HTML.html\'\">Пройти тест</button>\r\n			</div>\r\n\r\n		'),
(3, 'Тест:\"Тест по теме: Основы CSS\"', '\r\n					<div class=\"card\">\r\n				<p class=\"card-name\">Тест по теме: Основы HTML</p>\r\n				<button class=\"btn-click\" type=\"submit\" name=\"formBtn\" onclick=\"location.href=\'/курсовая/test/Основы CSS.html\'\">Пройти тест</button>\r\n			</div>\r\n'),
(4, 'Тест по теме: Основы JavaScript', '\r\n					<div class=\"card\">\r\n				<p class=\"card-name\">Тест по теме: Основы JavaScript</p>\r\n				<button class=\"btn-click\" type=\"submit\" name=\"formBtn\" onclick=\"location.href=\'/курсовая/test/Основы JS.html\'\">Пройти тест</button>\r\n			</div>'),
(5, 'Тест по теме: Основы PHP', '				<div class=\"card\">\r\n				<p class=\"card-name\">Тест по теме: Основы PHP</p>\r\n				<button class=\"btn-click\" type=\"submit\" name=\"formBtn\" onclick=\"location.href=\'/курсовая/test/Основы PHP.html\'\">Пройти тест</button>\r\n			</div>');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(25) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '$2y$10$G/epw.UdTSR2tSA9HlFO6eFaGlzYCKf2eN.gdgBhpXzzil8ryEnna', 'admin@mail.ru'),
(2, 'userHTML', '$2y$10$xLhB2OjQ5AkWmcETFq/yCeojWLrClMJ/UureVVmarG.4Is5hf.tRG', 'HTML@mail.ru'),
(3, 'userCSS', '$2y$10$ik19NSOSPqgAmuKAxC44F.BGnPQQZgtBfUqSqGjxDah4/.HQ5YUFG', 'CSS@mail.ru'),
(4, 'userJS', '$2y$10$d5wYNYfmvIgltYrSb4fqC.XaF/EpAtnN1jcEakkRZ2VirKgMdjjxe', 'JS@mail.ru'),
(5, 'userPHP', '$2y$10$5H5o2fOMdadTR522e2yaTOMq2UOWNbVjcDcUAGVFcQ/JHQEsivlEC', 'PHP@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `usertest`
--

CREATE TABLE `usertest` (
  `id` int NOT NULL,
  `userID` int NOT NULL,
  `testID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `usertest`
--

INSERT INTO `usertest` (`id`, `userID`, `testID`) VALUES
(1, 1, 1),
(2, 2, 2),
(10, 3, 3),
(11, 4, 4),
(14, 5, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `usertest`
--
ALTER TABLE `usertest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`),
  ADD KEY `testID` (`testID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `test`
--
ALTER TABLE `test`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `usertest`
--
ALTER TABLE `usertest`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `usertest`
--
ALTER TABLE `usertest`
  ADD CONSTRAINT `usertest_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `usertest_ibfk_3` FOREIGN KEY (`testID`) REFERENCES `test` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
