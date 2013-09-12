-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Ven 13 Septembre 2013 à 00:43
-- Version du serveur: 5.5.27
-- Version de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `baddal`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PWD` varchar(50) NOT NULL,
  `Depart` varchar(20) NOT NULL,
  `Arive` varchar(20) NOT NULL,
  `Notes` varchar(300) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`Id`, `Nom`, `Prenom`, `Email`, `PWD`, `Depart`, `Arive`, `Notes`) VALUES
(21, 'test', 'testeur', 'test@test', 'ffa6706ff2127a749973072756f83c532e43ed02', '1a1', '1a2', ' test tes testt '),
(22, 'test2', 'testeur1', 'test@test', '7a7b95d784007b930599d491366e0c272d119eb0', '1a1', '1a2', ' test tes testt '),
(23, 'test2', 'testeur1', 'test@test', '7a7b95d784007b930599d491366e0c272d119eb0', '1a1', '1a2', ' test tes testt '),
(24, 'test2', 'testeur1', 'test@test', '7a7b95d784007b930599d491366e0c272d119eb0', '1a2', '1a1', ' test tes testt '),
(25, 'test2', 'testeur1', 'test@test', '7a7b95d784007b930599d491366e0c272d119eb0', '1a2', '1a1', ' test tes testt '),
(26, 'test2', 'testeur1', 'test@test', '7a7b95d784007b930599d491366e0c272d119eb0', '1a2', '1a1', ' test tes testt '),
(27, 'test2', 'testeur1', 'test@test', '7a7b95d784007b930599d491366e0c272d119eb0', '1a2', '1a1', ' test tes testt '),
(28, 'test2', 'testeur1', 'test@test', '7a7b95d784007b930599d491366e0c272d119eb0', '1a2', '1a1', ' test tes testt ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
