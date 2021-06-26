-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 24 juin 2021 à 14:49
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `novel`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `discuson`
--

CREATE TABLE `discuson` (
  `id` int(11) NOT NULL,
  `sujet` text NOT NULL,
  `date-création` date NOT NULL,
  `detail` text NOT NULL,
  `actif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `discussion_user`
--

CREATE TABLE `discussion_user` (
  `id_user` int(11) NOT NULL,
  `id_discusion` int(11) NOT NULL,
  `date_post` date NOT NULL,
  `Contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `novel`
--

CREATE TABLE `novel` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `nbChapitres` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `recrutement`
--

CREATE TABLE `recrutement` (
  `id` int(11) NOT NULL,
  `titre annonce` text NOT NULL,
  `contenu` text NOT NULL,
  `date_en_ligne` date NOT NULL,
  `id_annonceur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reponse_annonce`
--

CREATE TABLE `reponse_annonce` (
  `id_user` int(11) NOT NULL,
  `date_reponse` date NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `Mot_passe` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `pseudo`, `Mot_passe`, `gender`, `role`) VALUES
(1, 'nh', 'vh', 'hn', 'bn', 'nhvb', 'b', 40);

-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

CREATE TABLE `vote` (
  `id_user` int(11) NOT NULL,
  `id_novel` int(11) NOT NULL,
  `commentaire` int(11) NOT NULL,
  `date_vote` int(11) NOT NULL,
  `note` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `discuson`
--
ALTER TABLE `discuson`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `discussion_user`
--
ALTER TABLE `discussion_user`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_discusion` (`id_discusion`);

--
-- Index pour la table `novel`
--
ALTER TABLE `novel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `recrutement`
--
ALTER TABLE `recrutement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_annonceur` (`id_annonceur`);

--
-- Index pour la table `reponse_annonce`
--
ALTER TABLE `reponse_annonce`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_annonce` (`id_annonce`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`Mot_passe`) USING HASH;

--
-- Index pour la table `vote`
--
ALTER TABLE `vote`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_novel` (`id_novel`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `discuson`
--
ALTER TABLE `discuson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `novel`
--
ALTER TABLE `novel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `discussion_user`
--
ALTER TABLE `discussion_user`
  ADD CONSTRAINT `discussion_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `discussion_user_ibfk_2` FOREIGN KEY (`id_discusion`) REFERENCES `discuson` (`id`);

--
-- Contraintes pour la table `recrutement`
--
ALTER TABLE `recrutement`
  ADD CONSTRAINT `recrutement_ibfk_1` FOREIGN KEY (`id_annonceur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `reponse_annonce`
--
ALTER TABLE `reponse_annonce`
  ADD CONSTRAINT `reponse_annonce_ibfk_1` FOREIGN KEY (`id_annonce`) REFERENCES `recrutement` (`id`),
  ADD CONSTRAINT `reponse_annonce_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`id_novel`) REFERENCES `novel` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
