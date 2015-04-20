-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Jeu 20 Mars 2014 à 21:38
-- Version du serveur: 5.5.9
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `SearchEngine`
--

-- --------------------------------------------------------

--
-- Structure de la table `Result`
--

CREATE TABLE `Result` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) NOT NULL,
  `meta` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 DATA DIRECTORY='./searchEngine/' INDEX DIRECTORY='./searchEngine/' AUTO_INCREMENT=10 ;

--
-- Contenu de la table `Result`
--

INSERT INTO `Result` VALUES(1, 'http://coucou.com', 'test abcd');
INSERT INTO `Result` VALUES(2, 'http://hello.com', 'test efgh');
INSERT INTO `Result` VALUES(3, 'http://bonsoir.com', 'test ijkl');
INSERT INTO `Result` VALUES(4, 'http://guttendach.com', 'test mnop');
INSERT INTO `Result` VALUES(5, 'http://konichoha.com', 'test qrst');
INSERT INTO `Result` VALUES(6, 'http://hallo.com', 'test uvwx');
