-- Adminer 4.8.1 MySQL 8.0.42-0ubuntu0.24.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `Netology` /*!40100 DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `Netology`;

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `ptoducts`;
CREATE TABLE `ptoducts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `ptoducts` (`id`, `category`, `product`) VALUES
(1,	'Стройматериалы',	'Кирпич'),
(2,	'Стройматериалы',	'Доска'),
(3,	'Электротоваты',	'Кабель'),
(4,	'Электротоваты',	'Лампа');

-- 2025-05-12 09:51:04