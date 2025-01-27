-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 27 jan. 2025 à 13:02
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bookmarket`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresses`
--

DROP TABLE IF EXISTS `adresses`;
CREATE TABLE IF NOT EXISTS `adresses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `street` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal_code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `country` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
CREATE TABLE IF NOT EXISTS `announcement` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_condition` varchar(255) NOT NULL,
  `id_books` bigint NOT NULL,
  `id_state` bigint NOT NULL,
  `price` int NOT NULL,
  `date_at` date NOT NULL,
  `is_available` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `announcement_id_books_foreign` (`id_books`),
  KEY `announcement_id_condition_foreign` (`id_condition`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `resum` varchar(255) NOT NULL,
  `edition` varchar(50) NOT NULL,
  `dimension` varchar(50) NOT NULL,
  `author` varchar(255) NOT NULL,
  `pages` varchar(150) NOT NULL,
  `ISBN` int NOT NULL,
  `publication_date` date NOT NULL,
  `language` varchar(50) NOT NULL,
  `binding` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_annoucement` bigint NOT NULL,
  `date_at` date NOT NULL,
  `id_user_seller` bigint NOT NULL,
  `id_user_buyer` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `purchase_id_user_buyer_foreign` (`id_user_buyer`),
  KEY `purchase_id_user_seller_foreign` (`id_user_seller`),
  KEY `purchase_id_annoucement_foreign` (`id_annoucement`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `identity` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `identity`) VALUES
(1, 'ADMIN'),
(2, 'ACHETEUR'),
(3, 'ACHETEUR et VENDEUR');

-- --------------------------------------------------------

--
-- Structure de la table `status_book`
--

DROP TABLE IF EXISTS `status_book`;
CREATE TABLE IF NOT EXISTS `status_book` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `condition` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `id_announcements` bigint NOT NULL,
  `id_views` bigint NOT NULL,
  `id_role` bigint NOT NULL,
  `isPro` tinyint(1) NOT NULL DEFAULT '0',
  `id_adresses` bigint NOT NULL,
  `name_compagny` varchar(255) DEFAULT NULL,
  `phone_company` varchar(255) DEFAULT NULL,
  `id_adress_company` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_mail_unique` (`mail`),
  KEY `user_id_adress_company_foreign` (`id_adress_company`(250)),
  KEY `user_id_announcements_foreign` (`id_announcements`),
  KEY `user_id_adresses_foreign` (`id_adresses`),
  KEY `user_id_role_foreign` (`id_role`),
  KEY `user_id_views_foreign` (`id_views`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `views`
--

DROP TABLE IF EXISTS `views`;
CREATE TABLE IF NOT EXISTS `views` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_comment` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `note` int NOT NULL,
  `id_announce` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `views_id_announce_foreign` (`id_announce`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wantpro`
--

DROP TABLE IF EXISTS `wantpro`;
CREATE TABLE IF NOT EXISTS `wantpro` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` bigint NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `wantpro_id_user_foreign` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
