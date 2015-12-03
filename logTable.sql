-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 03 2015 г., 17:13
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `bike_service`
--

-- --------------------------------------------------------

--
-- Структура таблицы `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_date` datetime NOT NULL,
  `log_action` tinytext NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Дамп данных таблицы `log`
--

INSERT INTO `log` (`log_id`, `log_date`, `log_action`) VALUES
(14, '2015-12-03 04:56:43', 'delete row'),
(15, '2015-12-03 04:56:50', 'add user'),
(16, '2015-12-03 04:57:11', 'somthing else'),
(17, '2015-12-03 04:57:19', 'update row'),
(19, '2015-12-03 05:00:51', 'update row'),
(20, '2015-12-03 05:00:56', 'add user'),
(21, '2015-12-03 05:01:01', 'update row'),
(23, '2015-12-03 05:01:20', 'delete row'),
(24, '2015-12-03 11:11:13', 'delete row'),
(25, '2015-12-03 11:37:10', 'update row'),
(26, '2015-12-03 11:56:40', 'update row'),
(29, '2015-12-03 12:08:52', 'new'),
(30, '2015-12-03 12:11:02', 'new'),
(32, '2015-12-03 12:12:48', 'add user'),
(34, '2015-12-03 16:05:47', 'somthing else');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
