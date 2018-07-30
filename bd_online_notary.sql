-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 30 2018 г., 20:26
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_online_notary`
--
CREATE DATABASE IF NOT EXISTS `db_online_notary` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_online_notary`;

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `services` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `passport_1` varchar(50) NOT NULL,
  `passport_2` varchar(50) NOT NULL,
  `treaty_1` varchar(50) NOT NULL,
  `treaty_2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `user_id`, `services`, `price`, `passport_1`, `passport_2`, `treaty_1`, `treaty_2`) VALUES
(11, 5, 'Доверенность на продажу жилого дома', 1200, 'ArcLauncher.exe', 'ice_video_20180426-164910.webm', 'shop.rar', 'Без имени 1.odt'),
(12, 4, 'Доверенность на продажу жилого дома', 1200, 'html5.jpg', 'Qanelas+Soft.zip', 'Console.png', '841912.png'),
(13, 4, 'Доверенность на продажу жилого дома', 1200, 'html5.jpg', 'Qanelas+Soft.zip', 'Console.png', '841912.png'),
(14, 4, 'Доверенность на продажу жилого дома', 1200, 'html5.jpg', 'Qanelas+Soft.zip', 'Console.png', '841912.png'),
(15, 4, 'Доверенность на продажу жилого дома', 1200, 'html5.jpg', 'Qanelas+Soft.zip', 'Console.png', '841912.png'),
(16, 4, 'Доверенность на продажу жилого дома', 1200, 'html5.jpg', 'Qanelas+Soft.zip', 'Console.png', '841912.png'),
(17, 4, 'Доверенность на продажу жилого дома', 1200, 'html5.jpg', 'Qanelas+Soft.zip', 'Console.png', '841912.png'),
(18, 4, 'Доверенность на продажу жилого дома', 1200, 'ArcLauncher.exe', 'ArcLauncher.exe', 'ArcOverlayAssist_64.exe', 'Arc.manifest'),
(19, 3, 'Доверенность на продажу жилого дома', 1200, 'ArcLauncher.exe', 'ArcLauncher.exe', 'ArcOverlayStub.dll', 'cef.pak'),
(20, 3, 'Займ', 300, 'ArcLauncher.exe', 'ArcLauncher.exe', 'ArcLauncher.exe', 'ArcLauncher.exe'),
(21, 3, 'Доверенность на продажу жилого дома', 1200, 'ArcLauncher.exe', 'ArcLauncher.exe', 'ArcLauncher.exe', 'ArcLauncher.exe'),
(22, 3, 'Доверенность на продажу жилого дома', 1200, 'паспорт1.bmp', 'паспорт2.bmp', 'договор1.bmp', 'договор2.bmp'),
(23, 3, 'Займ', 300, 'паспорт1.bmp', 'паспорт2.bmp', 'договор1.bmp', 'договор2.bmp'),
(24, 3, 'Займ', 300, 'паспорт1.bmp', 'паспорт2.bmp', 'договор1.bmp', 'договор2.bmp'),
(25, 3, 'Доверенность на продажу жилого дома', 1200, 'chrome.exe.sig', 'chrome_200_percent.pak', 'chrome_100_percent.pak', 'chrome.dll'),
(26, 3, 'Доверенность на продажу жилого дома', 1200, 'chrome.exe.sig', 'chrome_100_percent.pak', 'chrome_100_percent.pak', 'chrome.exe.sig'),
(27, 3, 'Доверенность на продажу жилого дома', 1200, 'chrome.dll', 'chrome_200_percent.pak', 'chrome.exe.sig', 'chrome.dll.sig'),
(28, 3, 'Займ', 300, 'chrome.exe.sig', 'chrome_200_percent.pak', 'chrome_200_percent.pak', 'chrome_200_percent.pak');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `patronymic` text NOT NULL,
  `dob` date NOT NULL,
  `bpl` text NOT NULL,
  `residence` text NOT NULL,
  `passportID` varchar(15) NOT NULL,
  `issued` text NOT NULL,
  `division_code` varchar(15) NOT NULL,
  `doi` date NOT NULL,
  `mail` varchar(25) NOT NULL,
  `telf` varchar(15) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `ip` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `patronymic`, `dob`, `bpl`, `residence`, `passportID`, `issued`, `division_code`, `doi`, `mail`, `telf`, `login`, `password`, `ip`) VALUES
(2, 'Евгений', 'Губин', 'Михайлович', '1983-03-25', 'Самарская обл. г. Самара', 'г. Москва, ул. Ленина, д. 76, кв. 33', '635289653', 'Отделом УФМС России г. Самары', '532159', '1997-04-10', 'test@mail.ru', '79253641515', 'user1', 'password1', 1270),
(3, ' Алёна', 'Сумбаева', 'Алексеевна', '1998-01-16', 'Саратовская обл. г. Саратов', 'г. Саратов, ул. Северная, д. 5, кв. 12', '        2145631', 'Отделом УФМС России г. Саратова', '147156', '2012-01-30', 'test@mail.ru', '79424632525', 'user2', '123456', 1270),
(4, 'Сергей', 'Воронов', 'Дмитриевич', '1965-11-10', 'Соколовская область, рп. Рябинка д. 4', 'Соколовская область, рп. Рябинка д. 4', '323285951', 'Отделом УФМС России', '123456', '2012-01-30', 'voronov@mail.ru', '454580', 'user3', '123456', 11111),
(5, 'Дмитрий', 'Воронин', 'Станиславович', '1999-06-19', 'Самарская обл. г. Самара', 'г. Москва, ул. Ленина, д. 76, кв. 33', '362188455', 'Отделом УФМС России г. Самары', '450600', '2013-06-30', 'temnikovmaks73@mail.ru', '79061435252', 'user5', '123456', 1270);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
