-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 16 2022 г., 22:25
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
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
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
(20, 'product_20', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 280),
(21, 'product_21', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 256),
(22, 'product_22', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 330),
(23, 'product_23', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 256),
(24, 'product_24', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 1280),
(25, 'product_25', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 950),
(26, 'product_26', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 275),
(27, 'product_27', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 740),
(28, 'product_28', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 880),
(29, 'product_29', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 298),
(30, 'product_30', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 550),
(31, 'product_31', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 637),
(32, 'product_32', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 258),
(33, 'product_33', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 895),
(34, 'product_34', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 593),
(35, 'product_35', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 223),
(36, 'product_36', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 1850),
(37, 'product_37', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 8990),
(38, 'product_38', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 5974),
(39, 'product_39', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 499),
(40, 'product_40', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 7800),
(41, 'product_41', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis at facere, consequuntur error a corrupti enim magni quae iure sit provident, molestiae quia totam sunt consequatur dicta! Fugiat, voluptas quidem?', '360x420.png', 5500);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `good_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'in work'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`good_id`, `user_id`, `count`, `order_id`, `status`) VALUES
(4, 10, 1, 1, 'in work'),
(5, 10, 1, 1, 'in work'),
(6, 10, 1, 1, 'in work'),
(1, 10, 1, 2, 'in work'),
(3, 10, 1, 2, 'in work');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `gender`, `email`, `password`, `admin`) VALUES
(1, 'test', 'test', NULL, 'test@mail.ru', 'a061a718a899a42f5af503f695dc96bc098f6bcd4621d373cade4e832627b4f6', 1),
(2, 'test2', 'test2', NULL, 'test@gmail.com', '8508bd173e533a922e1574cd9d8bdea1ad0234829205b9033196ba818f7a872b', NULL),
(5, 'user', 'user', NULL, 'user@mail.ru', '0dcd13aefb6dbe1bfc6de8fc70320974ee11cbb19052e40b07aac0ca060c23ee', NULL),
(10, 'Евгений', 'Лебедев', NULL, 'evilhamster@yandex.ru', 'cc88ee8687b5fb93eb4a0f5714ea5ab525f9e794323b453885f5181f1b624d0b', NULL),
(11, 'Анастасия', 'Заруцкая', NULL, 'newuser@mail.ru', '04e184037a4c945ea54ea0410a64e54fe10adc3949ba59abbe56e057f20f883e', NULL);

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
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
