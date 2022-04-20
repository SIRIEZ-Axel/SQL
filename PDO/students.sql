-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 20 avr. 2022 à 09:35
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
-- Structure de la table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `idstudent` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identifiant',
  `name` varchar(50) NOT NULL COMMENT 'personne',
  `firstname` varchar(50) NOT NULL COMMENT 'personne',
  `birthdate` date NOT NULL COMMENT 'date d''anniversaire',
  `gender` char(1) NOT NULL COMMENT 'm/f',
  `school` varchar(100) NOT NULL COMMENT 'Ecole',
  PRIMARY KEY (`idstudent`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`idstudent`, `name`, `firstname`, `birthdate`, `gender`, `school`) VALUES
(1, 'siriez', 'axel', '2022-10-07', 'm', 'Athénée Royal Jules Destrée'),
(3, 'Cuvelier', 'Océane', '2022-06-13', 'f', 'Condorcet '),
(6, 'Duquaine', 'Simon', '2022-04-06', 'm', 'Athénée Royal Jules Destrée'),
(7, 'Derieux', 'Mathieu', '2022-09-14', 'm', 'Aumonier du travail'),
(8, 'Jacques', 'Arnaud', '2022-12-12', 'm', 'Aumonier du travail'),
(9, 'Ghorbel', 'Radouane', '2022-12-21', 'm', 'Condorcet'),
(10, '', 'Alexandra', '2022-04-20', 'f', 'Athénée Royal Jules Destrée');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
