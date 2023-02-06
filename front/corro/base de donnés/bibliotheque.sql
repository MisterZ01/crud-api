-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 17 mars 2022 à 14:33
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `codeCl` varchar(10) NOT NULL,
  `LibelleCl` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codeCl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`codeCl`, `LibelleCl`) VALUES
('M1SITW', 'Master 1 securité'),
('M1SIGL', 'Master 1 GENIE LOGICIEL'),
('SRIT1', 'system reseau 1'),
('M1SITWs', 'Master 1 securité s'),
('dd', 'yuu'),
('sigl', 'classe de aicha'),
('sigl2', 'coulibaly'),
('M2SITW', 'Master 2 securité'),
('0', 'je suis cool'),
('tw', 'je_suis'),
('lk', 'vraiment_cool'),
('1234', 'MasterISER'),
('m2sigl', 'genie logiciel master 2'),
('sitw2', 'master 2 securite');

-- --------------------------------------------------------

--
-- Structure de la table `emprunter`
--

DROP TABLE IF EXISTS `emprunter`;
CREATE TABLE IF NOT EXISTS `emprunter` (
  `matricule` varchar(10) NOT NULL,
  `codeL` varchar(10) NOT NULL,
  `dateSortie` date DEFAULT NULL,
  `dateRetour` date DEFAULT NULL,
  PRIMARY KEY (`matricule`,`codeL`),
  KEY `FK_LIVRE_EMPRUNT` (`codeL`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `emprunter`
--

INSERT INTO `emprunter` (`matricule`, `codeL`, `dateSortie`, `dateRetour`) VALUES
('YYYYY', 'livre003', '2022-01-02', '2022-08-08');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `matricule` varchar(10) NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `dnais` date DEFAULT NULL,
  `lieux` varchar(50) DEFAULT NULL,
  `sexe` varchar(1) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `codeCl` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`matricule`),
  KEY `FK_ETUDIANT_CLASSE` (`codeCl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`matricule`, `nom`, `prenom`, `dnais`, `lieux`, `sexe`, `photo`, `codeCl`) VALUES
('11029775y', 'coulibaly', 'zoumana', '0000-00-00', 'YABAO', 'm', 'ZAZA', 'SITW1'),
('11029775G', 'coulibal', 'zouman', '0000-00-00', 'YABAO', 'f', 'MATOPHE', ''),
('11029775h', 'coulibaly', 'zoumana', '0000-00-00', '', 'm', 'MATOPHE', 'SITW2'),
('11029775s', 'coulibaly', 'zoumana', '0000-00-00', 'YABAO', 'm', 'ZAZAf', 'SITW1'),
('1245FG', 'aaaaaaaaa', 'zoumana', '0000-00-00', 'YABAO', 'm', 'fggf', 'SITW1'),
('11029775yS', 'zoumana', 'coulibaly1', '0000-00-00', 'YABAO', 'm', 'ZAZA', 'RTEL1');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `codeL` varchar(10) NOT NULL,
  `titreL` varchar(30) DEFAULT NULL,
  `auteurL` varchar(50) DEFAULT NULL,
  `genre` varchar(30) DEFAULT NULL,
  `dateCreation` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`codeL`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`codeL`, `titreL`, `auteurL`, `genre`, `dateCreation`) VALUES
('livre001', 'SOLEIL', 'coulibaly zoumana', 'comic', '0000-00-00 00:00:00.000000'),
('xxxxx', 'aaaaaaaaaaa', 'ssssssssss', 'Nouvelle', '0000-00-00 00:00:00.000000'),
('livr022', 'soleil2', 'cooul zza', 'Roman', '0000-00-00 00:00:00.000000'),
('livr023', 'soleil3', 'cooul zzam', 'Nouvelle', '0000-00-00 00:00:00.000000'),
('livr0222', 'soleil4', 'cooul zzam', 'Nouvelle', '0000-00-00 00:00:00.000000'),
('livr0211', 'soleil6', 'cooul zzam', 'Nouvelle', '0000-00-00 00:00:00.000000'),
('coul11', 'soleilS1', 'coulibaly', '1', '0000-00-00 00:00:00.000000'),
('livr002s', 'aaaaaaaaaaaq', 'cooul zzam', 'Recit', '0000-00-00 00:00:00.000000'),
('livr002wx', 'soleilq', 'cooul zzam', 'Roman', '0000-00-00 00:00:00.000000'),
('livr002cv', 'soleilqw', 'cooul zzq', 'Nouvelle', '0000-00-00 00:00:00.000000'),
('top001', 'top l\'arraignée', 'coulibaly', 'Roman', '0000-00-00 00:00:00.000000'),
('top004', 'top l\'arraignée', 'coulibaly', 'Roman', '2022-02-25 11:01:51.000000'),
('top0022', 'top l\'arraignéex', 'coulibalyq', 'Roman', '0000-00-00 00:00:00.000000'),
('top0022a', 'top l\'arraignéexw', 'coulibalyq', 'Roman', '0000-00-00 00:00:00.000000'),
('top0022ab', 'top l\'arraignéexwc', 'coulibalyq', 'Roman', '0000-00-00 00:00:00.000000'),
('livr045', 'top l\'arraignée', 'cooul zza', 'Roman', '0000-00-00 00:00:00.000000'),
('livr001q', 'soleil', 'ssssssssss', '1', '0000-00-00 00:00:00.000000'),
('livr002ws', 'top l\'arraignéeqs', 'wxwx', 'Roman', '0000-00-00 00:00:00.000000'),
('sdsfe', 'qsqs', 'wscdcs', 'Roman', '0000-00-00 00:00:00.000000'),
('', 'Les soleils', 'Camara', 'Roman', '0000-00-00 00:00:00.000000'),
('maman', 'maman', 'mom', 'Roman', '2022-02-25 11:11:00.000000'),
('aaa', 'qqqq', 'ssss', '1', '2022-02-25 12:12:09.000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
