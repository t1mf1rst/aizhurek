-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 03 2018 г., 19:24
-- Версия сервера: 10.1.28-MariaDB
-- Версия PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aizhurek-db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `adults`
--

CREATE TABLE `adults` (
  `name` text NOT NULL COMMENT 'name of organization',
  `direction` text NOT NULL COMMENT 'work direction',
  `website` text NOT NULL COMMENT 'website address',
  `contactsname` text NOT NULL COMMENT 'person to contact',
  `address` text NOT NULL COMMENT 'address of organization',
  `auditory` text NOT NULL COMMENT 'target auditory',
  `phone` text NOT NULL COMMENT 'phone number',
  `email` text NOT NULL COMMENT 'email',
  `social` text NOT NULL COMMENT 'social media links',
  `point` text NOT NULL COMMENT 'aid point',
  `logoname` text NOT NULL COMMENT 'organization''s logo name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `adults`
--

INSERT INTO `adults` (`name`, `direction`, `website`, `contactsname`, `address`, `auditory`, `phone`, `email`, `social`, `point`, `logoname`) VALUES
('«Молодежное общество инвалидов»', 'Социальная помощь молодым инвалидам', '', 'Абдумомынов Мурат Усербаевич, председатель', 'г. Астана, мкр. 4, д.8,  кв. 25', 'Молодежь с ограниченными  физическими или ментальными особенностями', '7 (7172) 482808, 7 (7172) 625272, 7-701-5208994, +7-700-4593393\r\n ', 'astana-moi@mail.ru', '', '', ''),
('Ассоциация «Жас Нұр»', 'Социальная помощи людям с ограниченными возможностями', '', 'Жасанова Камка Мадиевна, председатель', 'г. Астана, пр.Республика, 34, офис406', 'Люди с ограниченными  физическими или ментальными особенностями', '7 (7172) 320640', 'deafzhasnu@mail.ru', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `animals`
--

CREATE TABLE `animals` (
  `name` text NOT NULL COMMENT 'organization name',
  `auditory` text NOT NULL COMMENT 'target auditory',
  `direction` text NOT NULL COMMENT 'work direction',
  `website` text NOT NULL COMMENT 'website address',
  `contactsname` text NOT NULL COMMENT 'person to contact',
  `address` text NOT NULL COMMENT 'address of organization',
  `phone` text NOT NULL COMMENT 'telephone number',
  `email` text NOT NULL COMMENT 'email of organization',
  `social` text NOT NULL COMMENT 'social media links',
  `point` text NOT NULL COMMENT 'aid point',
  `logoname` text NOT NULL COMMENT 'organization''s logo name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='help to animals';

--
-- Дамп данных таблицы `animals`
--

INSERT INTO `animals` (`name`, `auditory`, `direction`, `website`, `contactsname`, `address`, `phone`, `email`, `social`, `point`, `logoname`) VALUES
('Неправительственный экологический фонд', 'Экология', 'Основной и главной целью фонда является создание научно-исследовательского, образовательного центра на основе историко-культурного наследия академиков.', 'http://vernadsky.kz/', '', 'г. Астана, ул. Кабанбай батыра, 40', '7 (7172) 908800, 7 (7172) 908888', '', '', '', ''),
('Клуб добряков Астаны', 'Малообеспеченное население', 'Помощь нуждающимся людям продуктами и вещами, различные благотворительные акции', '', '', '', '', '', 'https://www.instagram.com/club_dobryakov_astany/', 'Склад', '');

-- --------------------------------------------------------

--
-- Структура таблицы `children`
--

CREATE TABLE `children` (
  `name` text NOT NULL COMMENT 'organization name',
  `auditory` text NOT NULL COMMENT 'target auditory',
  `direction` text NOT NULL COMMENT 'work direction',
  `website` text NOT NULL COMMENT 'website address',
  `contactsname` text NOT NULL COMMENT 'person to contact',
  `address` text NOT NULL COMMENT 'address of organization',
  `phone` text NOT NULL COMMENT 'telephone number',
  `email` text NOT NULL COMMENT 'email of organization',
  `social` text NOT NULL COMMENT 'social media links',
  `point` text NOT NULL COMMENT 'aid point',
  `logoname` text NOT NULL COMMENT 'Input name of organization''s logo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='organizations helping children';

--
-- Дамп данных таблицы `children`
--

INSERT INTO `children` (`name`, `auditory`, `direction`, `website`, `contactsname`, `address`, `phone`, `email`, `social`, `point`, `logoname`) VALUES
('\"Общество детей-инвалидов г. Астана\"', 'Дети с ограниченными физическими или ментальными особенностями', 'Социальная помощь детям-инвалидам', '', 'Жасанова Камка Мадиевна, Председатель', 'г. Астана, ул. Республика, 34, офис 406', '7 (7172) 321055, 7 (7172) 320640, +7-701- 2061155, +7-701-1853086', 'Kamka_zhasanova@mail.ru', '', '', ''),
('ОО «Наследие»', 'Дети и подростки с ограниченными  физическими или ментальными особенностями', 'Работа с детьми от 3 до 18 лет с врожденными физическими и умственными недостатками, коррекция речи, работа психологов', '', 'Егерь Людмила Георгиевна, председатель', 'г. Астана, мкр. Самал, д. 8', '7 (7172) 438943, 7 (7172) 432785', 'nasledie_2002@mail.ru, egerludmila@rambler.ru', '', '', ''),
('ОО «Общество инвалидов-матерей г.Астаны, имеющих детей»', 'Люди с ограниченными  физическими или ментальными особенностями и их опекуны', 'Социальная защита инвалидов, инвалидов-матерей и их детей', '', 'Жекебаева Магира Саукембековнаб председатель', 'г. Астана, ул. Кошкарбаева, 123', '7 (7172) 210929, 7 (7172) 481864', '', '', '', ''),
('ОО \"Центр социальной адаптации детей\"', 'Дети', 'Защита законных прав и интересов детей, оказание социально-психологической и правовой помощи, социальная адаптация детей, поддержка детей с ограниченными возможностями', 'www.sadkz.org', 'Колмогорова Елена Анатольевна, председатель', 'г. Астана,  Казахстанско – Российский университет,  ул. Кабанбай батыра,  8, каб.109', '7 (7172) 240573, 7 (7172) 244871, +7-701-2331818', 'sadkz@ya.ru,\r\notebek@bk.kz', '', '', 'logo4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `elderly`
--

CREATE TABLE `elderly` (
  `name` text NOT NULL COMMENT 'organization name',
  `auditory` text NOT NULL COMMENT 'target auditory',
  `direction` text NOT NULL COMMENT 'work direction',
  `website` text NOT NULL COMMENT 'website address',
  `contactsname` text NOT NULL COMMENT 'person to contact',
  `address` text NOT NULL COMMENT 'address of organization',
  `phone` text NOT NULL COMMENT 'telephone number',
  `email` text NOT NULL COMMENT 'email of organization',
  `social` text NOT NULL COMMENT 'social media links',
  `point` text NOT NULL COMMENT 'aid point',
  `logoname` text NOT NULL COMMENT 'organization''s logo name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `elderly`
--

INSERT INTO `elderly` (`name`, `auditory`, `direction`, `website`, `contactsname`, `address`, `phone`, `email`, `social`, `point`, `logoname`) VALUES
('Шұғыла', 'Малообеспеченное население', 'Социальная помощь, благотворительный склад, помощь детям с болезнью ДЦП, различные акции по улучшению качества жизни малообеспеченных сограждан', 'http://shugyla.kz/', 'Абдрахманов Меирхан, Умиржанов Алибек', 'г. Астана, ул. Кабанбай батыра, 42', '7 (7172) 452404', '', '', '', ''),
('Пища для жизни, общественный благотворительный фонд', 'Малообеспенное население', 'Миссия фонда — разработка и практическая реализация долгосрочных социальных проектов по поддержке малоимущих, необеспеченных слоев населения и людей, оказавшихся в сложных жизненных ситуациях. Деятельность проводится в партнерстве с государственными и частными организациями.\r\nФонд «Пища жизни» регулярно реализует программы по оказанию материальной и психологической помощи нуждающимся. В рамках социальных программ, действующих на постоянной основе фонда «Пища Жизни», предоставляются горячие обеды для нуждающихся, проводятся программы по психологической помощи и реабилитации.', '', '', '	г.Астана, ул.Брусиловского, 80, кв.57', '7 (7172) 345116', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
