-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 13 juin 2021 à 15:45
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd1`
--

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `NumEnseignant` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`NumEnseignant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `NumEtudiant` int(50) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `filiere` varchar(50) NOT NULL,
  `niveau` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  PRIMARY KEY (`NumEtudiant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `examen`
--

DROP TABLE IF EXISTS `examen`;
CREATE TABLE IF NOT EXISTS `examen` (
  `idExamen` int(11) NOT NULL AUTO_INCREMENT,
  `NumExamen` int(100) NOT NULL,
  `Titre` varchar(100) NOT NULL,
  `Duree` int(200) NOT NULL,
  `DateExamen` date NOT NULL,
  `NumEnseignant` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`idExamen`),
  KEY `a1` (`NumEnseignant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `participation`
--

DROP TABLE IF EXISTS `participation`;
CREATE TABLE IF NOT EXISTS `participation` (
  `NumEtudiant` int(100) NOT NULL,
  `idExamen` int(11) NOT NULL,
  `DateAcces` date NOT NULL,
  `DateFin` date NOT NULL,
  PRIMARY KEY (`NumEtudiant`,`idExamen`),
  KEY `a3` (`idExamen`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `idQuestion` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(100) NOT NULL,
  `Duree` int(100) NOT NULL,
  `Ponderation` int(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `NumExamen` int(100) NOT NULL,
  PRIMARY KEY (`idQuestion`),
  KEY `a4` (`NumExamen`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `idReponse` int(11) NOT NULL AUTO_INCREMENT,
  `Contenu` varchar(100) NOT NULL,
  `idQuestion` int(11) NOT NULL,
  `CompteRendu` int(100) NOT NULL,
  `NumEtudiant` int(100) NOT NULL,
  PRIMARY KEY (`idReponse`),
  KEY `a5` (`NumEtudiant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reponsepossible`
--

DROP TABLE IF EXISTS `reponsepossible`;
CREATE TABLE IF NOT EXISTS `reponsepossible` (
  `idReponseP` int(50) NOT NULL,
  `Contenu` varchar(100) NOT NULL,
  `idQuestion` int(11) NOT NULL,
  PRIMARY KEY (`idReponseP`),
  KEY `a6` (`idQuestion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
