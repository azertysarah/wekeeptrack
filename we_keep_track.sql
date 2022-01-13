-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 13 jan. 2022 à 16:09
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `we_keep_track`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `id_animal` int(11) NOT NULL AUTO_INCREMENT,
  `specie` text COLLATE ascii_bin NOT NULL,
  `name` text COLLATE ascii_bin NOT NULL,
  `age` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  PRIMARY KEY (`id_animal`),
  KEY `Id_Person` (`id_person`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

DROP TABLE IF EXISTS `association`;
CREATE TABLE IF NOT EXISTS `association` (
  `association_name` varchar(50) COLLATE ascii_bin NOT NULL,
  `email` text COLLATE ascii_bin NOT NULL,
  `address` text COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`association_name`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Structure de la table `persons`
--

DROP TABLE IF EXISTS `persons`;
CREATE TABLE IF NOT EXISTS `persons` (
  `id_person` int(20) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE ascii_bin,
  `password` text COLLATE ascii_bin,
  `profile_picture` longblob,
  `email` text COLLATE ascii_bin,
  `creation_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `secret` text COLLATE ascii_bin,
  `association_name` varchar(50) COLLATE ascii_bin DEFAULT NULL,
  PRIMARY KEY (`id_person`),
  KEY `Association_Name` (`association_name`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Structure de la table `q&a`
--

DROP TABLE IF EXISTS `q&a`;
CREATE TABLE IF NOT EXISTS `q&a` (
  `questions` varchar(200) COLLATE ascii_bin NOT NULL,
  `answers` varchar(200) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`questions`,`answers`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Déchargement des données de la table `q&a`
--

INSERT INTO `q&a` (`questions`, `answers`) VALUES
('Is it possible to manage more than one animal on the website ?', 'With our website, it is possible to manage as many animals as you want.'),
('What is the utility of our website ?', 'Our site permits the user to follow their animals with cardiac and GPS informations.'),
('Who are we ?', 'We are a group of assciations who fight for animals with the help of new technologies.');

-- --------------------------------------------------------

--
-- Structure de la table `sensors`
--

DROP TABLE IF EXISTS `sensors`;
CREATE TABLE IF NOT EXISTS `sensors` (
  `id_gps` int(11) NOT NULL,
  `id_heartrate` int(11) NOT NULL,
  `gps_sensor_value` varchar(20) COLLATE ascii_bin NOT NULL,
  `heart_sensor_value` varchar(20) COLLATE ascii_bin NOT NULL,
  `time` timestamp(6) NOT NULL,
  `id_animal` int(11) NOT NULL,
  PRIMARY KEY (`id_gps`,`id_heartrate`),
  KEY `Id_Animal` (`id_animal`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `persons` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `persons`
--
ALTER TABLE `persons`
  ADD CONSTRAINT `persons_ibfk_1` FOREIGN KEY (`association_name`) REFERENCES `association` (`association_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sensors`
--
ALTER TABLE `sensors`
  ADD CONSTRAINT `sensors_ibfk_1` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id_animal`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
