-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 06 août 2022 à 21:46
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_examen`
--

-- --------------------------------------------------------

--
-- Structure de la table `app`
--

CREATE TABLE `app` (
  `id` int(250) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `objet` blob NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `app`
--

INSERT INTO `app` (`id`, `nom`, `email`, `objet`, `message`) VALUES
(230, 'ldmfmslfmdslfdsfk', '', '', ''),
(238, '', '', 0x323130313934362d31302d636f6e7365696c732d706f75722d646576656e69722d756e2d61757468656e74697175652d6c65616465722d3137313932392d312e6a7067, '');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(10) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_de_naissance` varchar(50) NOT NULL,
  `Genre` varchar(50) NOT NULL,
  `CIN` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telephone` varchar(10) NOT NULL,
  `Addresse` varchar(100) NOT NULL,
  `compte_facebook` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `prenom`, `date_de_naissance`, `Genre`, `CIN`, `Email`, `Telephone`, `Addresse`, `compte_facebook`) VALUES
(0, 'b', 'b', '2022-08-11', 'Select', 'n', 'n', 'n', 'n', 0),
(0, '1', '1', '2022-07-26', 'Select', '1', '2', '2', '2', 2);

-- --------------------------------------------------------

--
-- Structure de la table `mdl_modules`
--

CREATE TABLE `mdl_modules` (
  `code_module` int(10) NOT NULL,
  `nom_module` varchar(100) NOT NULL,
  `volume_horaire` int(5) NOT NULL,
  `credit_module` int(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mdl_modules`
--

INSERT INTO `mdl_modules` (`code_module`, `nom_module`, `volume_horaire`, `credit_module`, `id`) VALUES
(7, 'Test', 5, 8, 2),
(4, 'sdf', 7, 75, 3),
(1, 'Info', 8, 2, 4),
(85, '85', 85, 85, 5),
(55, 'sdf', 456, 75, 6),
(12, '12', 12, 12, 7),
(12, '12', 12, 12, 8),
(45, '45', 45, 45, 9),
(0, '', 0, 0, 10),
(0, '', 0, 0, 11),
(6, '6', 6, 6, 12),
(89, '89', 89, 89, 13),
(0, '45', 45, 78, 14),
(0, '45', 45, 78, 15),
(45, '45', 45, 45, 16),
(45, '45', 45, 45, 17),
(1, 'Mark', 8, 7, 18),
(45, '45', 45, 45, 19);

-- --------------------------------------------------------

--
-- Structure de la table `mdl_profs`
--

CREATE TABLE `mdl_profs` (
  `NOM` varchar(50) NOT NULL,
  `EMAIL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `app`
--
ALTER TABLE `app`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mdl_modules`
--
ALTER TABLE `mdl_modules`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mdl_profs`
--
ALTER TABLE `mdl_profs`
  ADD PRIMARY KEY (`NOM`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `app`
--
ALTER TABLE `app`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT pour la table `mdl_modules`
--
ALTER TABLE `mdl_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
