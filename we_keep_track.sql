-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 14 déc. 2021 à 10:54
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
  `Id_Animal` int(11) NOT NULL AUTO_INCREMENT,
  `Specie` text COLLATE ascii_bin NOT NULL,
  `Name` text COLLATE ascii_bin NOT NULL,
  `Age` int(11) NOT NULL,
  `Id_Person` int(11) NOT NULL,
  PRIMARY KEY (`Id_Animal`),
  KEY `Id_Person` (`Id_Person`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

DROP TABLE IF EXISTS `association`;
CREATE TABLE IF NOT EXISTS `association` (
  `Association_Name` varchar(50) COLLATE ascii_bin NOT NULL,
  `Email` text COLLATE ascii_bin NOT NULL,
  `Address` text COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`Association_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Structure de la table `persons`
--

DROP TABLE IF EXISTS `persons`;
CREATE TABLE IF NOT EXISTS `persons` (
  `Id_Person` int(20) NOT NULL AUTO_INCREMENT,
  `Username` text COLLATE ascii_bin NOT NULL,
  `Password` text COLLATE ascii_bin NOT NULL,
  `Profile_Picture` longblob NOT NULL,
  `Email` text COLLATE ascii_bin NOT NULL,
  `Creation_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Secret` text COLLATE ascii_bin NOT NULL,
  `Association_Name` varchar(50) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`Id_Person`),
  KEY `Association_Name` (`Association_Name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Structure de la table `q&a`
--

DROP TABLE IF EXISTS `q&a`;
CREATE TABLE IF NOT EXISTS `q&a` (
  `Questions` varchar(200) COLLATE ascii_bin NOT NULL,
  `Réponses` varchar(200) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`Questions`,`Réponses`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Déchargement des données de la table `q&a`
--

INSERT INTO `q&a` (`Questions`, `Réponses`) VALUES
('Is it possible to manage more than one animal on the website ?', 'With our website, it is possible to manage as many animals as you want.'),
('What is the utility of our website ?', 'Our site permits the user to follow their animals with cardiac and GPS informations.'),
('Who are we ?', 'We are a group of assciations who fight for animals with the help of new technologies.');

-- --------------------------------------------------------

--
-- Structure de la table `sensors`
--

DROP TABLE IF EXISTS `sensors`;
CREATE TABLE IF NOT EXISTS `sensors` (
  `Id_GPS` int(11) NOT NULL,
  `Id_Heartrate` int(11) NOT NULL,
  `GPS_Sensor_Value` varchar(20) COLLATE ascii_bin NOT NULL,
  `Heart_Sensor_Value` varchar(20) COLLATE ascii_bin NOT NULL,
  `Time` timestamp(6) NOT NULL,
  `Id_Animal` int(11) NOT NULL,
  PRIMARY KEY (`Id_GPS`,`Id_Heartrate`),
  KEY `Id_Animal` (`Id_Animal`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`Id_Person`) REFERENCES `persons` (`Id_Person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `persons`
--
ALTER TABLE `persons`
  ADD CONSTRAINT `persons_ibfk_1` FOREIGN KEY (`Association_Name`) REFERENCES `association` (`Association_Name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sensors`
--
ALTER TABLE `sensors`
  ADD CONSTRAINT `sensors_ibfk_1` FOREIGN KEY (`Id_Animal`) REFERENCES `animal` (`Id_Animal`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
