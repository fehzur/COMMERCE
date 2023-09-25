-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 23 juin 2023 à 19:05
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(1) NOT NULL,
  `code` varchar(255) COLLATE latin7_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `code`) VALUES
(1, 'fehzur');

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
  `time` date NOT NULL DEFAULT current_timestamp(),
  `hours` time NOT NULL DEFAULT current_timestamp(),
  `etat` text COLLATE latin7_estonian_cs NOT NULL,
  `decision` text COLLATE latin7_estonian_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_estonian_cs;

--
-- Déchargement des données de la table `msg`
--

INSERT INTO `msg` (`id`, `messages`, `id_destinataire`, `id_auteur`, `numero`, `date_debut`, `date_fin`, `time`, `hours`, `etat`, `decision`) VALUES
(32, 'je ne vous aimes pas', 1, 14, 1, '2023-06-24', '2023-06-30', '2023-06-23', '18:22:32', 'Cong?© pay?©', 'REFUSER'),
(50, 'va vous faire foutre', 1, 15, 2, '2023-06-27', '2023-06-30', '2023-06-23', '19:44:27', 'Cong?© sans solde', 'REFUSER');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id_produits` int(11) NOT NULL,
  `name` varchar(255) COLLATE latin7_estonian_cs NOT NULL,
  `post` varchar(255) COLLATE latin7_estonian_cs NOT NULL,
  `pics` text COLLATE latin7_estonian_cs NOT NULL,
  `description` text COLLATE latin7_estonian_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_estonian_cs;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produits`, `name`, `post`, `pics`, `description`) VALUES
(1, 'FEHIZORO', 'Le président-directeur général, ou PDG', 'image/299636949_883624005939912_1181566725089750459_n.jpg', 'Les devoirs et les responsabilités d\'un DG couvrent beaucoup de spécialités et t?ches, mais ceux-ci sont parmi les plus communs. Il doit typiquement:\r\n\r\nSuperviser les opérations quotidiennes de l\'unité commerciale ou de l\'organisation.\r\nAssurer la création et la mise en ?uvre d\'une stratégie destinée ? développer l\'activité.\r\nCoordonner le développement d\'objectifs de performance clés pour les fonctions et les rapports directs.\r\nFournir une gestion directe des principaux gestionnaires fonctionnels et des cadres dans l\'unité d\'affaires.\r\nAssurer le développement de programmes tactiques pour poursuivre des buts et des objectifs ciblés.\r\nAssurer la livraison globale et la qualité des offres de l\'unité aux clients.\r\nS\'engager dans des activités client clés ou ciblées.\r\nSuperviser les principaux programmes d\'embauche et de développement des talents.\r\nÉvaluer et décider des investissements clés dans l\'équipement, l\'infrastructure et le talent.\r\nCommuniquer la stratégie et les résultats aux employés de l\'unité.\r\nRapporter les résultats clés aux mandataires sociaux.\r\nS\'engager avec les dirigeants dans une planification stratégique organisationnelle plus large.'),
(2, 'DARISSE', 'Directeur General ou DG', 'image/darisse.jpg', 'Le directeur général est nommé par le conseil d\'administration ou directoire d\'une société. Il représente la société et a pour r?le d\'alléger la t?che du président. Il poss?de, au m?me titre que le président, des pouvoirs qui lui ont été concédés par le conseil d\'administration. Il définit les stratégies globales du fonctionnement de l\'entreprise ? court et moyen termes. Il a pour mission de gérer l\'activité commerciale, technique, technologique et tout ce qui n\'a pas trait ? l\'administratif. Il conseille et dirige les directeurs et responsables des différents services de l\'entreprise dans la gestion et le pilotage de projets. Il effectue également un travail de veille concurrentielle sur le marché national et international du domaine d\'activité de l\'entreprise qu\'il dirige. Il doit également ?tre en mesure d\'anticiper et de préparer l\'entreprise aux changements ? venir, en fonction des orientations qu\'il sugg?re.\r\n\r\nDes compétences managériales sont indispensables au métier de directeur général ainsi qu\'une excellente capacité d\'adaptation. Il doit savoir jongler entre les différents services et représenter un soutien pour les employés et la direction. Le directeur général poss?de le sens de la communication. Il ma?trise la globalité de l\'entreprise et pour cela doit avoir de bonnes connaissances en gestion, comptabilité, management et marketing. Il peut traiter directement avec les clients les plus importants de son entreprise. Il adapte les orientations de l\'entreprise en fonction de la demande et de l\'évolution du marché. Pour cela il poss?de une excellente culture générale et économique. Le directeur général doit ?tre disponible tant pour l\'interne que pour l\'externe. Il exerce un r?le de représentation de l\'entreprise aupr?s de ses collaborateurs et partenaires.'),
(3, 'MAHEFA', 'DIRECTEUR MARKETING', 'image/20230614_143015.jpg', 'Le directeur général est nommé par le conseil d\'administration ou directoire d\'une société. Il représente la société et a pour r?le d\'alléger la t?che du président. Il poss?de, au m?me titre que le président, des pouvoirs qui lui ont été concédés par le conseil d\'administration. Il définit les stratégies globales du fonctionnement de l\'entreprise ? court et moyen termes. Il a pour mission de gérer l\'activité commerciale, technique, technologique et tout ce qui n\'a pas trait ? l\'administratif. Il conseille et dirige les directeurs et responsables des différents services de l\'entreprise dans la gestion et le pilotage de projets. Il effectue également un travail de veille concurrentielle sur le marché national et international du domaine d\'activité de l\'entreprise qu\'il dirige. Il doit également ?tre en mesure d\'anticiper et de préparer l\'entreprise aux changements ? venir, en fonction des orientations qu\'il sugg?re.\r\n\r\nDes compétences managériales sont indispensables au métier de directeur général ainsi qu\'une excellente capacité d\'adaptation. Il doit savoir jongler entre les différents services et représenter un soutien pour les employés et la direction. Le directeur général poss?de le sens de la communication. Il ma?trise la globalité de l\'entreprise et pour cela doit avoir de bonnes connaissances en gestion, comptabilité, management et marketing. Il peut traiter directement avec les clients les plus importants de son entreprise. Il adapte les orientations de l\'entreprise en fonction de la demande et de l\'évolution du marché. Pour cela il poss?de une excellente culture générale et économique. Le directeur général doit ?tre disponible tant pour l\'interne que pour l\'externe. Il exerce un r?le de représentation de l\'entreprise aupr?s de ses collaborateurs et partenaires.'),
(4, 'ITOKIANA', 'INFORMATICIEN', 'image/img_1_1684840312939.jpg', 'Le directeur général est nommé par le conseil d\'administration ou directoire d\'une société. Il représente la société et a pour r?le d\'alléger la t?che du président. Il poss?de, au m?me titre que le président, des pouvoirs qui lui ont été concédés par le conseil d\'administration. Il définit les stratégies globales du fonctionnement de l\'entreprise ? court et moyen termes. Il a pour mission de gérer l\'activité commerciale, technique, technologique et tout ce qui n\'a pas trait ? l\'administratif. Il conseille et dirige les directeurs et responsables des différents services de l\'entreprise dans la gestion et le pilotage de projets. Il effectue également un travail de veille concurrentielle sur le marché national et international du domaine d\'activité de l\'entreprise qu\'il dirige. Il doit également ?tre en mesure d\'anticiper et de préparer l\'entreprise aux changements ? venir, en fonction des orientations qu\'il sugg?re.\r\n\r\nDes compétences managériales sont indispensables au métier de directeur général ainsi qu\'une excellente capacité d\'adaptation. Il doit savoir jongler entre les différents services et représenter un soutien pour les employés et la direction. Le directeur général poss?de le sens de la communication. Il ma?trise la globalité de l\'entreprise et pour cela doit avoir de bonnes connaissances en gestion, comptabilité, management et marketing. Il peut traiter directement avec les clients les plus importants de son entreprise. Il adapte les orientations de l\'entreprise en fonction de la demande et de l\'évolution du marché. Pour cela il poss?de une excellente culture générale et économique. Le directeur général doit ?tre disponible tant pour l\'interne que pour l\'externe. Il exerce un r?le de représentation de l\'entreprise aupr?s de ses collaborateurs et partenaires.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `nom` varchar(50) COLLATE latin7_estonian_cs NOT NULL,
  `email` varchar(50) COLLATE latin7_estonian_cs NOT NULL,
  `mdp` varchar(50) COLLATE latin7_estonian_cs NOT NULL,
  `images` text COLLATE latin7_estonian_cs NOT NULL,
  `post` varchar(255) COLLATE latin7_estonian_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_estonian_cs;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`, `mdp`, `images`, `post`) VALUES
(1, 'FEHIZORO', 'antsaniainafehizoro@gmail.com', 'fehzur', '../image/FEHZUR-20220630_091619622_8.4.400.PORTRAIT.jpg', 'ADMINISTRATEUR'),
(14, 'TOMMY', 'tommy@gmail.com', 'tommy', '../image/20230614_143015.jpg', ''),
(15, 'IRIANTSOA', 'iriantsoa@gmail.com', 'iriantsoa', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_produits`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_produits` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
