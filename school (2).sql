-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 13 2019 г., 23:20
-- Версия сервера: 5.6.41
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
-- База данных: `school`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `content` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ads`
--

INSERT INTO `ads` (`id`, `content`) VALUES
(1, 'Уважаемые родители (законные представители) и учащиеся!На территории Красносулинского района с 11 по 22 марта 2019 г. стартовала Общероссийская антинаркотическая акция «Сообщи, где торгуют смертью!»\r\nЕсли Вы знаете, о фактах возможного совершения преступлений и административных правонарушений, связанных с незаконным оборотом наркотических средств и психотропных веществ (в том числе, о распространении, употреблении, безрецептурной продаже кодеиносодержащих препаратов и пр.), то сообщите об этом:\r\nтелефон круглосуточной «горячей линии» МО МВД России «Красносулинский» - 112, 02;\r\n'),
(2, '');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `content` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `name`, `content`) VALUES
(1, 'В мире интересного', 'Открытие недели началось с выставки стенгазет «В мире интересного». Много познавательного открыли для себя ребята во время проведения игр, конкурсов и других внеклассных мероприятий, организованных учителями Шкодой Е.Н и Перепелкиной Е.В.\r\nЛучшим знатоком географии признан ученик 8а класса Мелешко Михаил. В форме командных соревнований прошли мероприятия «Юный биолог. Своя игра» и « За золотым свитком». Что значит товарищеская взаимовыручка, даже самые пассивные включались в игру с огромным желанием. Как горели глаза учащихся 4-7 классов, когда наблюдали опыты в кабинете химии «Фараоновы змеи», «Зубная паста для слона» и другие. А ученики 4 классов подарили мамам букет цветов, самостоятельно раскрашенных «водой», наблюдая при этом волшебное превращение цвета: из бесцветного в малиновый. Удивительно!? Но объяснимо. Ведь опыты проводили их старшие товарищи учащиеся 10 класса, уже «асы» в химии.\r\nРавнодушных не было. Все участники получили заряд эмоций и положительного настроения.\r\nУважаемые родители (законные представители) и учащиеся!На территории Красносулинского района с 11 по 22 марта 2019 г. стартовала Общероссийская антинаркотическая акция «Сообщи, где торгуют смертью!»\r\nЕсли Вы знаете, о фактах возможного совершения преступлений и административных правонарушений, связанных с незаконным оборотом наркотических средств и психотропных веществ (в том числе, о распространении, употреблении, безрецептурной продаже кодеиносодержащих препаратов и пр.), то сообщите об этом:\r\nтелефон круглосуточной «горячей линии» МО МВД России «Красносулинский» - 112, 02;\r\n'),
(3, '9 Мая', 'День Победы — праздник победы Красной Армии и советского народа над нацистской Германией в Великой Отечественной войне 1941—1945 годов. Установлен Указом Президиума Верховного Совета СССР от 8 мая 1945 года и отмечается 9 мая каждого года. С 1965 года День Победы — нерабочий праздничный день.\r\n'),
(4, '1 Мая', 'Первое мая — отмечается во многих странах и территориях мира 1 мая или в первый понедельник мая. В современной России 1 мая отмечается как Праздник Весны и Труда.\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `id_role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `surname`, `id_role`) VALUES
(1, 'test', '098f6bcd4621d373cade4e832627b4f6', 'Тест', 'Тест', 2),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', 1),
(8, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 2),
(79, 'Tatyana', '0a8005f5594bd67041f88c6196192646', 'татьяна', 'иванова', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `vaz`
--

CREATE TABLE `vaz` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vaz`
--

INSERT INTO `vaz` (`id`, `name`, `content`) VALUES
(1, '', ''),
(2, 'Важно знать', 'При регистрации появляются новые возможности использования сайтом, а именно-это возможность просматривать дополнительные важные страницы, такие как \"Расписание\", \"Школьная жизнь\", а так же очень важный момент это возможность отправлять вопросы на прямую к администрации школы.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vaz`
--
ALTER TABLE `vaz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;