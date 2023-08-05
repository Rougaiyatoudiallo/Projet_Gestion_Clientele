-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 05 août 2023 à 16:21
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_clientele`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sexe` enum('Masculin','Feminin') DEFAULT NULL,
  `statut` enum('Actif','Inactif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `adresse`, `telephone`, `email`, `sexe`, `statut`) VALUES
(1, 'Nouveau Nom', 'Mermor123', '781450912', 'nouveau@email.com', 'Feminin', 'Actif'),
(2, 'Rassoul SOW', '456 Mbour', '782345678', 'rassoulsow@gmail.com', 'Masculin', 'Inactif'),
(3, 'Mariam WANN', 'Grand Yoff', '775320978', 'mariamwann@gmail.com', '', 'Actif'),
(4, 'Hady BARRY', 'kolda34', '00221783456789', 'hadybarry@gmail.com', 'Masculin', 'Actif'),
(5, 'Alpha BARRY', 'medina567', '0021774561234', 'alphabarry@gmail.com', 'Masculin', 'Inactif');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
