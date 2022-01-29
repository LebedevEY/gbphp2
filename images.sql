-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 25 2022 г., 22:34
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `images`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `good_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `img`, `price`) VALUES
(1, 'product_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', 'product_1.jpg', 58),
(2, 'product_2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', 'product_2.jpg', 100),
(3, 'product_3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', 'product_3.jpg', 76),
(4, 'product_4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', 'product_4.jpg', 47),
(5, 'product_5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', 'product_5.jpg', 30),
(6, 'product_6', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', 'product_6.jpg', 48),
(7, 'product_7', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 154),
(8, 'product_8', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 220),
(9, 'product_9', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 48),
(10, 'product_10', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 80),
(11, 'product_11', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 44),
(12, 'product_12', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 360),
(13, 'product_13', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 250),
(14, 'product_14', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 180),
(15, 'product_15', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 64),
(16, 'product_16', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 248),
(17, 'product_17', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 490),
(18, 'product_18', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 125),
(19, 'product_19', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 56),
(20, 'product_20', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 280);

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `views` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `path`, `size`, `views`) VALUES
(8, 'books.jpg', 'C:/OpenServer/domains/gbhwphp/img/', 531995, 2),
(9, 'cat.jpg', 'C:/OpenServer/domains/gbhwphp/img/', 172063, 1),
(10, 'city.jpg', 'C:/OpenServer/domains/gbhwphp/img/', 251603, 1),
(11, 'deer.jpg', 'C:/OpenServer/domains/gbhwphp/img/', 128085, 7),
(12, 'lion.jpg', 'C:/OpenServer/domains/gbhwphp/img/', 151136, 1),
(13, 'spaceman.jpg', 'C:/OpenServer/domains/gbhwphp/img/', 109857, 2),
(14, 'ufo.jpg', 'C:/OpenServer/domains/gbhwphp/img/', 67106, 2),
(15, 'soldat.jpg', 'C:/OpenServer/domains/gbhwphp/img/', 172144, 2),
(16, 'velosiped.jpg', 'C:/OpenServer/domains/gbhwphp/img/', 239387, 1),
(17, 'doroga.jpg', 'C:/OpenServer/domains/gbhwphp/img/', 266295, 15);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `review` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `review`, `date`) VALUES
(2, 'Евгений', 'Тест', '2021-12-12 13:56:04'),
(3, 'Анастасия', 'Hello', '2021-12-12 14:06:54');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
