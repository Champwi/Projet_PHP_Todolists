-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 08 avr. 2021 à 10:27
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dcp_b3_upload`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `picture_id` int(11) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `created`, `modified`, `user_id`, `picture_id`, `content`) VALUES
(1, '2021-04-08 12:03:42', '2021-04-08 12:03:42', 1, 2, 'First !'),
(2, '2021-04-08 12:03:42', '2021-04-08 12:03:42', 3, 2, 'Deuze !');

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `file` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pictures`
--

INSERT INTO `pictures` (`id`, `created`, `modified`, `user_id`, `file`, `description`) VALUES
(1, '2021-04-08 11:29:31', '2021-04-08 11:29:31', 2, 'pict-1617874171-1883440.jpg', 'sdfg'),
(2, '2021-04-08 11:56:41', '2021-04-08 11:56:41', 3, 'pict-1617875801-1163543.jpg', 'concept art');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `name` varchar(30) NOT NULL,
  `pass` varchar(130) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `created`, `modified`, `name`, `pass`) VALUES
(1, '2021-04-02 15:37:05', '2021-04-02 15:37:05', 'moi', '$2y$10$44F/biihlTvM4GIZdLCMl.RB5qsQQL.hOG4TKK5yDuzYoT24IxG9m'),
(2, '2021-04-08 09:19:50', '2021-04-08 09:19:50', 'jeudi', '$2y$10$tdBwdnAimKre6YECgUxRxewUvFkb/rHVXbFSCWgrThzN6jN/HJCku'),
(3, '2021-04-08 09:58:59', '2021-04-08 09:58:59', 'qwerty', '$2y$10$n2y3Bqag.zllG9i5aeVu3e4p4FBGoPPrnDTxwUxQL5sulbkKzSpSi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
