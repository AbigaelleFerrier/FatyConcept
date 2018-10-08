-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : fatyconcjbfatyrt.mysql.db
-- Généré le :  jeu. 27 sep. 2018 à 17:56
-- Version du serveur :  5.6.40-log
-- Version de PHP :  7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fatyconcjbfatyrt`
--

-- --------------------------------------------------------

--
-- Structure de la table `Achat`
--

CREATE TABLE `Achat` (
  `qte` int(10) NOT NULL,
  `choix_couleur` char(50) NOT NULL DEFAULT '',
  `choix_taille` char(50) NOT NULL DEFAULT '',
  `id_cmd` int(10) NOT NULL,
  `id_prod` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `AdminRoot`
--

CREATE TABLE `AdminRoot` (
  `id_admin` char(50) NOT NULL,
  `cle_admin` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `AdminRoot`
--

INSERT INTO `AdminRoot` (`id_admin`, `cle_admin`) VALUES
('f2ea1173eaf10c2114d6123031d91e13', 'fc4dd07a6c9bf6dc5aa9fe6f86f7c6b2');

-- --------------------------------------------------------

--
-- Structure de la table `Client`
--

CREATE TABLE `Client` (
  `id_clt` int(10) NOT NULL,
  `nom_clt` char(50) DEFAULT NULL,
  `prenom_clt` char(50) DEFAULT NULL,
  `email` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Commande`
--

CREATE TABLE `Commande` (
  `id_cmd` int(10) NOT NULL,
  `date_cmd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payer` tinyint(1) NOT NULL,
  `etat` char(20) NOT NULL,
  `id_clt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Couleur`
--

CREATE TABLE `Couleur` (
  `id_couleur` int(10) NOT NULL,
  `nom_couleur` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Footer`
--

CREATE TABLE `Footer` (
  `champ1` varchar(500) NOT NULL,
  `champ2` varchar(500) DEFAULT NULL,
  `link1` varchar(100) DEFAULT NULL,
  `link2` varchar(100) DEFAULT NULL,
  `link3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Nav`
--

CREATE TABLE `Nav` (
  `id_Nav` int(10) NOT NULL,
  `nomNav` char(50) DEFAULT NULL,
  `link_nav` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Page`
--

CREATE TABLE `Page` (
  `nom_page` char(50) NOT NULL,
  `champ` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Produit`
--

CREATE TABLE `Produit` (
  `id_prod` int(10) NOT NULL,
  `nom_prod` char(50) DEFAULT NULL,
  `desc_prod` varchar(300) DEFAULT NULL,
  `stock_prod` int(10) DEFAULT NULL,
  `Activer` tinyint(1) NOT NULL,
  `id_type_prod` int(10) NOT NULL,
  `id_typeTaille` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Produit_Tag`
--

CREATE TABLE `Produit_Tag` (
  `id_sousType` int(10) NOT NULL,
  `id_prod` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `SousNav`
--

CREATE TABLE `SousNav` (
  `id_SousNav` int(10) NOT NULL,
  `nom_sousNav` char(50) DEFAULT NULL,
  `link_sousNav` char(255) DEFAULT NULL,
  `id_Nav` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `SousType`
--

CREATE TABLE `SousType` (
  `id_sousType` int(10) NOT NULL,
  `nom_tag` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Taille`
--

CREATE TABLE `Taille` (
  `id_Taille` int(10) NOT NULL,
  `Taille` char(20) DEFAULT NULL,
  `id_typeTaille` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Type_Produit`
--

CREATE TABLE `Type_Produit` (
  `id_type_prod` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Type_taille`
--

CREATE TABLE `Type_taille` (
  `id_typeTaille` int(10) NOT NULL,
  `nom_typeTaille` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Typo`
--

CREATE TABLE `Typo` (
  `id_Typo` int(10) NOT NULL,
  `nom_typo` char(50) DEFAULT NULL,
  `class_typo` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Achat`
--
ALTER TABLE `Achat`
  ADD PRIMARY KEY (`id_cmd`,`id_prod`,`choix_couleur`,`choix_taille`),
  ADD KEY `Achat_id_prod_FK` (`id_prod`);

--
-- Index pour la table `AdminRoot`
--
ALTER TABLE `AdminRoot`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`id_clt`);

--
-- Index pour la table `Commande`
--
ALTER TABLE `Commande`
  ADD PRIMARY KEY (`id_cmd`),
  ADD KEY `Commande_id_clt_Fk` (`id_clt`);

--
-- Index pour la table `Couleur`
--
ALTER TABLE `Couleur`
  ADD PRIMARY KEY (`id_couleur`);

--
-- Index pour la table `Footer`
--
ALTER TABLE `Footer`
  ADD PRIMARY KEY (`champ1`);

--
-- Index pour la table `Nav`
--
ALTER TABLE `Nav`
  ADD PRIMARY KEY (`id_Nav`);

--
-- Index pour la table `Page`
--
ALTER TABLE `Page`
  ADD PRIMARY KEY (`nom_page`);

--
-- Index pour la table `Produit`
--
ALTER TABLE `Produit`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `Produit_Type_Produit_FK` (`id_type_prod`),
  ADD KEY `Produit_Type_taille0_FK` (`id_typeTaille`);

--
-- Index pour la table `Produit_Tag`
--
ALTER TABLE `Produit_Tag`
  ADD PRIMARY KEY (`id_sousType`,`id_prod`),
  ADD KEY `Produit_Tag_id_prod_FK` (`id_prod`);

--
-- Index pour la table `SousNav`
--
ALTER TABLE `SousNav`
  ADD PRIMARY KEY (`id_SousNav`),
  ADD KEY `SousNav_Nav_FK` (`id_Nav`);

--
-- Index pour la table `SousType`
--
ALTER TABLE `SousType`
  ADD PRIMARY KEY (`id_sousType`);

--
-- Index pour la table `Taille`
--
ALTER TABLE `Taille`
  ADD PRIMARY KEY (`id_Taille`),
  ADD KEY `Taille_Type_taille_FK` (`id_typeTaille`);

--
-- Index pour la table `Type_Produit`
--
ALTER TABLE `Type_Produit`
  ADD PRIMARY KEY (`id_type_prod`);

--
-- Index pour la table `Type_taille`
--
ALTER TABLE `Type_taille`
  ADD PRIMARY KEY (`id_typeTaille`);

--
-- Index pour la table `Typo`
--
ALTER TABLE `Typo`
  ADD PRIMARY KEY (`id_Typo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Client`
--
ALTER TABLE `Client`
  MODIFY `id_clt` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Commande`
--
ALTER TABLE `Commande`
  MODIFY `id_cmd` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Couleur`
--
ALTER TABLE `Couleur`
  MODIFY `id_couleur` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Nav`
--
ALTER TABLE `Nav`
  MODIFY `id_Nav` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Produit`
--
ALTER TABLE `Produit`
  MODIFY `id_prod` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `SousNav`
--
ALTER TABLE `SousNav`
  MODIFY `id_SousNav` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `SousType`
--
ALTER TABLE `SousType`
  MODIFY `id_sousType` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Taille`
--
ALTER TABLE `Taille`
  MODIFY `id_Taille` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Type_Produit`
--
ALTER TABLE `Type_Produit`
  MODIFY `id_type_prod` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Type_taille`
--
ALTER TABLE `Type_taille`
  MODIFY `id_typeTaille` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Typo`
--
ALTER TABLE `Typo`
  MODIFY `id_Typo` int(10) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Achat`
--
ALTER TABLE `Achat`
  ADD CONSTRAINT `Achat_id_cmd_FK` FOREIGN KEY (`id_cmd`) REFERENCES `Commande` (`id_cmd`),
  ADD CONSTRAINT `Achat_id_prod_FK` FOREIGN KEY (`id_prod`) REFERENCES `Produit` (`id_prod`);

--
-- Contraintes pour la table `Commande`
--
ALTER TABLE `Commande`
  ADD CONSTRAINT `Commande_id_clt_Fk` FOREIGN KEY (`id_clt`) REFERENCES `Client` (`id_clt`);

--
-- Contraintes pour la table `Produit`
--
ALTER TABLE `Produit`
  ADD CONSTRAINT `Produit_Type_Produit_FK` FOREIGN KEY (`id_type_prod`) REFERENCES `Type_Produit` (`id_type_prod`),
  ADD CONSTRAINT `Produit_Type_taille0_FK` FOREIGN KEY (`id_typeTaille`) REFERENCES `Type_taille` (`id_typeTaille`);

--
-- Contraintes pour la table `Produit_Tag`
--
ALTER TABLE `Produit_Tag`
  ADD CONSTRAINT `Produit_Tag_id_prod_FK` FOREIGN KEY (`id_prod`) REFERENCES `Produit` (`id_prod`),
  ADD CONSTRAINT `Produit_Tag_id_sousType_FK` FOREIGN KEY (`id_sousType`) REFERENCES `SousType` (`id_sousType`);

--
-- Contraintes pour la table `SousNav`
--
ALTER TABLE `SousNav`
  ADD CONSTRAINT `SousNav_Nav_FK` FOREIGN KEY (`id_Nav`) REFERENCES `Nav` (`id_Nav`);

--
-- Contraintes pour la table `Taille`
--
ALTER TABLE `Taille`
  ADD CONSTRAINT `Taille_Type_taille_FK` FOREIGN KEY (`id_typeTaille`) REFERENCES `Type_taille` (`id_typeTaille`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
