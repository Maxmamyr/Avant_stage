-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 27 Février 2018 à 10:57
-- Version du serveur :  5.6.37
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `MDB`
--

-- --------------------------------------------------------

--
-- Structure de la table `mtable`
--

CREATE TABLE IF NOT EXISTS `mtable` (
  `userID` int(11) NOT NULL,
  `userPseudo` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPwd` varchar(255) NOT NULL,
  `Created at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=armscii8;

--
-- Contenu de la table `mtable`
--

INSERT INTO `mtable` (`userID`, `userPseudo`, `userEmail`, `userPwd`, `Created at`) VALUES
(16, 'maxmamy', 'maxmamy@fakemail.com', 'auieauie', '2018-02-27 10:37:07'),
(17, 'ato', 'ato@ato.ato', 'atoato123', '2018-02-27 10:38:06');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `mtable`
--
ALTER TABLE `mtable`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `mtable`
--
ALTER TABLE `mtable`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
