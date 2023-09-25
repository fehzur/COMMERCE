-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 09 juin 2023 à 14:15
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `messages` text COLLATE latin7_estonian_cs NOT NULL,
  `id_destinataire` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `etat` text COLLATE latin7_estonian_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_estonian_cs;

--
-- Déchargement des données de la table `msg`
--

INSERT INTO `msg` (`id`, `messages`, `id_destinataire`, `id_auteur`, `numero`, `date_debut`, `date_fin`, `etat`) VALUES
(5, 'izdddz', 2, 1, 1, '2023-06-05', '2023-06-13', 'MALADE'),
(6, 'izdddz', 2, 1, 1, '2023-06-05', '2023-06-13', 'MALADE'),
(7, 'Mba mangataka congé aho tompoko fa oany ambanivohitra', 2, 1, 1, '2023-06-06', '2023-06-20', 'Ravie'),
(8, 'DZZDZDZD', 1, 1, 2, '2023-06-06', '2023-06-07', 'DZZD');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
