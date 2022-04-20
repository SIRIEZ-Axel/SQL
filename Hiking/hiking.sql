-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 20 avr. 2022 à 13:42
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `becode`
--

-- --------------------------------------------------------

--
-- Structure de la table `hiking`
--

DROP TABLE IF EXISTS `hiking`;
CREATE TABLE IF NOT EXISTS `hiking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(400) NOT NULL,
  `difficulty` char(30) NOT NULL,
  `distance` int(11) NOT NULL,
  `duration` time NOT NULL,
  `height_difference` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `hiking`
--

INSERT INTO `hiking` (`id`, `name`, `difficulty`, `distance`, `duration`, `height_difference`) VALUES
(1, 'Le Sentier Jacky Inard par le Sentier Bœuf et le Sentier Mal au Ventre', 'Difficile', 21, '07:00:00', 1350),
(2, 'D\'Aurère à l\'Ilet à Malheur par Grand Place', 'Difficile', 14, '05:30:00', 1200),
(3, 'Le Sentier Scout jusqu\'à Aurère et retour par le sentier Augustave\r\n', 'Difficile', 16, '07:00:00', 960),
(4, 'Point de vue sur la Plaine des Sables par le sentier marron de Grand Coude', 'Difficile', 16, '00:00:07', 1400),
(5, 'La montée du Piton Argamasse et de Caille depuis le Nez de Bœuf', 'Facile', 11, '04:15:00', 350);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
