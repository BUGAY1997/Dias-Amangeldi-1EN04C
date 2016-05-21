-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 21 2016 г., 14:23
-- Версия сервера: 10.0.17-MariaDB
-- Версия PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(123) NOT NULL,
  `username` varchar(123) NOT NULL,
  `login` varchar(123) NOT NULL,
  `password` varchar(123) NOT NULL,
  `basket` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `login`, `password`, `basket`) VALUES
(46, 'aa', 'aa', '4124bc0a9335c27f086f24ba207a4912', 'a:2:{i:0;s:1:"3";i:1;s:1:"4";}'),
(55, 'DIAS', 'dias', '7815696ecbf1c96e6894b779456d330e', '');

-- --------------------------------------------------------

--
-- Структура таблицы `vewi`
--

CREATE TABLE `vewi` (
  `id` int(11) NOT NULL,
  `price` varchar(30) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `vewi`
--

INSERT INTO `vewi` (`id`, `price`, `image`) VALUES
(1, '12000', 'boys8.jpg'),
(2, '10000', 'kids3.jpg'),
(3, '13000', 'kids4.jpg'),
(4, '45666', 'kids5.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vewi`
--
ALTER TABLE `vewi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT для таблицы `vewi`
--
ALTER TABLE `vewi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
