-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 24 juil. 2022 à 20:04
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
-- Structure de la table `mdl_contact`
--

CREATE TABLE `mdl_contact` (
  `nom` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `objet` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `mdl_etudiants`
--

CREATE TABLE `mdl_etudiants` (
  `id` int(11) NOT NULL,
  `nom` int(20) NOT NULL,
  `prénoms` int(70) NOT NULL,
  `date de naissance` date NOT NULL,
  `CIN` int(20) NOT NULL,
  `Email` int(30) NOT NULL,
  `telephone` int(10) NOT NULL,
  `compte fb` varchar(50) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Index pour la table `mdl_etudiants`
--
ALTER TABLE `mdl_etudiants`
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
-- AUTO_INCREMENT pour la table `mdl_etudiants`
--
ALTER TABLE `mdl_etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `mdl_modules`
--
ALTER TABLE `mdl_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
