-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 11 avr. 2023 à 14:30
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `autocompletion`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `nom`) VALUES
(1, 'Piege de cristal'),
(2, 'Le Seigneur Des Anneaux'),
(3, 'Matrix'),
(4, 'Kill Bill'),
(5, 'Terminator'),
(6, 'Predator'),
(7, 'Alien'),
(8, 'L\ Arme Fatale'),
(9, 'James Bond - Skyfall'),
(10, 'Hot Fuzz'),
(11, 'Speed'),
(12, 'John Wick'),
(13, 'Avatar'),
(14, 'Halloween'),
(15, 'Evil Dead'),
(16, 'Marvel Avenger'),
(17, 'RoboCop'),
(18, 'Rambo'),
(19, 'Rocky'),
(20, 'Demolition Man');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
