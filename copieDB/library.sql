-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 09 fév. 2021 à 03:38
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

CREATE TABLE `emprunt` (
  `idEmprunt` int(255) NOT NULL,
  `emprunteur` varchar(500) NOT NULL,
  `livre` varchar(500) NOT NULL,
  `dateExpiration` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `emprunt`
--

INSERT INTO `emprunt` (`idEmprunt`, `emprunteur`, `livre`, `dateExpiration`) VALUES
(2, '', 'tarzan', '2021-03-09'),
(3, '', 'La belle au bois dormant', '2021-03-09'),
(4, '', 'Shingeki no Kyugin', '2021-03-09'),
(5, '', 'Scooby-Doo', '2021-03-09'),
(6, '', 'tarzan', '2021-03-09');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `idLivre` int(255) NOT NULL,
  `titre` varchar(500) NOT NULL,
  `auteur` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`idLivre`, `titre`, `auteur`) VALUES
(1, 'tarzan', 'jamal'),
(3, 'La belle au bois dormant', 'Disney'),
(4, 'Scooby-Doo', 'Grand corps malade'),
(5, 'Shingeki no Kyugin', 'Hisayama');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `idMembre` int(255) NOT NULL,
  `identifiant` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`idMembre`, `identifiant`) VALUES
(1, 'Jamal'),
(4, 'Giovani'),
(5, 'Giovani'),
(6, 'Giovani'),
(7, 'Giovani'),
(8, 'Giovani'),
(9, 'Giovani'),
(10, 'Giovani'),
(11, 'Giovani'),
(12, 'Giovani'),
(13, 'Giovani'),
(14, 'Jamal'),
(15, 'Jamal'),
(16, 'Jamal'),
(17, 'Jamal'),
(18, 'Jamal'),
(19, 'Jamal'),
(20, 'Jamal'),
(21, 'Jamal'),
(22, 'Jamal'),
(23, 'Jamal'),
(24, 'Jamal'),
(25, 'Jamal'),
(26, 'Giga'),
(27, 'Jamal'),
(28, 'Jamal'),
(29, 'sidikoua');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD PRIMARY KEY (`idEmprunt`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`idLivre`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`idMembre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `emprunt`
--
ALTER TABLE `emprunt`
  MODIFY `idEmprunt` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `idLivre` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `idMembre` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
