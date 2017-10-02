-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 28 Septembre 2017 à 14:08
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mesclics`
--

-- --------------------------------------------------------

--
-- Structure de la table `mc_clients`
--

CREATE TABLE `mc_clients` (
  `id` int(5) NOT NULL,
  `ref` text NOT NULL COMMENT 'numéro client type MES_001',
  `name` text NOT NULL COMMENT 'nom du client',
  `last_connection` datetime DEFAULT NULL COMMENT 'datetime de la dernière connection'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `mc_clients`
--

INSERT INTO `mc_clients` (`id`, `ref`, `name`, `last_connection`) VALUES
(1, 'MES_001', 'mesclics', '2017-09-28 09:24:24'),
(2, 'SOP_001', 'Sophro et Energies - Maryline Rossi', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `mc_clients`
--
ALTER TABLE `mc_clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `mc_clients`
--
ALTER TABLE `mc_clients`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
