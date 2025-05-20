-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.2
-- Время создания: Май 20 2025 г., 20:51
-- Версия сервера: 8.2.0
-- Версия PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fitness-coach`
--

-- --------------------------------------------------------

--
-- Структура таблицы `notes`
--

CREATE TABLE `notes` (
  `id_note` int NOT NULL,
  `id_user` int NOT NULL,
  `date` date NOT NULL,
  `note` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `notes`
--

INSERT INTO `notes` (`id_note`, `id_user`, `date`, `note`) VALUES
(3, 2, '2025-05-16', 'привет'),
(4, 2, '2025-05-30', 'ПРИВЕТ'),
(5, 1, '2025-05-15', 'Привет'),
(6, 2, '2025-05-07', 'gh\r\ngh\r\ngh');

-- --------------------------------------------------------

--
-- Структура таблицы `training-program`
--

CREATE TABLE `training-program` (
  `id_tprogram` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `hint` varchar(200) NOT NULL,
  `text` varchar(5000) NOT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `video` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `training-program`
--

INSERT INTO `training-program` (`id_tprogram`, `title`, `hint`, `text`, `img`, `video`) VALUES
(1, 'Силовая тренировка', 'Программа расчитана на усиление силовых показателей', '                Силовые тренировки — это эффективный способ укрепить мышцы, повысить выносливость и улучшить общее\r\n                физическое состояние. Они основаны на выполнении упражнений с сопротивлением, которое создается за счет\r\n                веса собственного тела, свободных снарядов, тренажеров или эластичных лент. Основная цель таких\r\n                тренировок — стимулировать рост мышечной ткани, увеличить силу и ускорить метаболизм, что способствует\r\n                поддержанию здорового веса и улучшению композиции тела. Регулярные силовые нагрузки не только формируют\r\n                рельеф мышц, но и укрепляют кости, суставы и связки, снижая риск травм в повседневной жизни. Кроме того,\r\n                они положительно влияют на сердечно-сосудистую систему, помогают контролировать уровень сахара в крови и\r\n                повышают эмоциональную устойчивость за счет выработки эндорфинов.<br><br>\r\n\r\n                Для достижения максимального результата важно соблюдать основные принципы силового тренинга: постепенное\r\n                увеличение нагрузки, правильная техника выполнения упражнений и сбалансированное восстановление.\r\n                Начинающим рекомендуется стартовать с базовых упражнений, таких как приседания, отжимания, тяги и жимы,\r\n                которые задействуют несколько групп мышц одновременно. Использование свободных весов, например, гантелей\r\n                или штанги, развивает не только силу, но и координацию, поскольку требует стабилизации тела. Тренажеры,\r\n                в свою очередь, позволяют изолированно проработать конкретные мышцы, минимизируя риск ошибок, что\r\n                особенно полезно на начальных этапах. Не менее эффективны тренировки с собственным весом — подтягивания,\r\n                планки, выпады — которые можно выполнять в любых условиях без специального оборудования.<br><br>\r\n\r\n                Важно помнить, что прогресс зависит не только от интенсивности занятий, но и от восстановления. Мышцы\r\n                растут во время отдыха, поэтому между тренировками должен быть перерыв в 24–48 часов для конкретной\r\n                группы мышц. Не менее критично питание: достаточное потребление белка, здоровых жиров и сложных\r\n                углеводов обеспечивает организм энергией и материалами для восстановления тканей. Для новичков ключевым\r\n                советом будет начать с умеренных весов, сосредоточившись на технике, а не на количестве подходов. Работа\r\n                с тренером поможет избежать травм и составить программу, учитывающую индивидуальные цели — будь то\r\n                похудение, набор массы или повышение функциональной силы.<br><br>\r\n\r\n                Силовые тренировки подходят людям любого возраста и уровня подготовки, но перед началом занятий,\r\n                особенно при наличии хронических заболеваний, стоит проконсультироваться с врачом. Помните, что\r\n                Consistency — главный секрет успеха. Даже небольшие, но регулярные усилия приведут к заметным\r\n                изменениям: вы станете сильнее, увереннее в себе и энергичнее. Начните с малого, ставьте реалистичные\r\n                цели и celebrate каждый шаг на пути к здоровому и сильному телу.', 'girl-athlete-keeps-disc-from-bar-weighting-agent-doing-crossfit-fitness-concept-sports-equipment-weight-loss.jpg', '<iframe src=\"https://rutube.ru/play/embed/d9f0c63a50a2670a23b2d0bc1a4b6e1c\"\r\n                frameBorder=\"0\" allow=\"clipboard-write; autoplay\" webkitAllowFullScreen mozallowfullscreen\r\n                allowFullScreen></iframe>');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `role` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `role`, `login`, `password`, `name`, `surname`) VALUES
(1, 'admin', 'admin', 'admin', 'Админ', 'Главный'),
(2, 'student', 'vimavy', 'vimavy', 'Виолетта', 'Матусяк');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id_note`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `training-program`
--
ALTER TABLE `training-program`
  ADD PRIMARY KEY (`id_tprogram`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `notes`
--
ALTER TABLE `notes`
  MODIFY `id_note` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `training-program`
--
ALTER TABLE `training-program`
  MODIFY `id_tprogram` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
