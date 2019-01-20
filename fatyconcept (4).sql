-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 28 Novembre 2018 à 22:26
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `fatyconcept`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

DROP TABLE IF EXISTS `achat`;
CREATE TABLE `achat` (
  `qte` int(10) NOT NULL,
  `choix_couleur` char(50) NOT NULL DEFAULT 'Couleur',
  `choix_taille` char(50) NOT NULL DEFAULT '',
  `id_cmd` int(10) NOT NULL,
  `id_prod` int(10) NOT NULL,
  PRIMARY KEY (`id_cmd`,`id_prod`,`choix_couleur`,`choix_taille`),
  KEY `Achat_id_prod_FK` (`id_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vider la table avant d'insérer `achat`
--

TRUNCATE TABLE `achat`;
-- --------------------------------------------------------

--
-- Structure de la table `adminroot`
--

DROP TABLE IF EXISTS `adminroot`;
CREATE TABLE `adminroot` (
  `id_admin` char(50) NOT NULL,
  `cle_admin` char(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vider la table avant d'insérer `adminroot`
--

TRUNCATE TABLE `adminroot`;
--
-- Contenu de la table `adminroot`
--

INSERT INTO `adminroot` (`id_admin`, `cle_admin`) VALUES
('4cd087ea2bcf04f3096f3797ab14a34c', '202cb962ac59075b964b07152d234b70'),
('52558228e5d554a728b4ff99ecc3424b', '52558228e5d554a728b4ff99ecc3424b'),
('f2ea1173eaf10c2114d6123031d91e13', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE `client` (
  `id_clt` int(10) NOT NULL AUTO_INCREMENT,
  `nom_clt` char(50) DEFAULT NULL,
  `prenom_clt` char(50) DEFAULT NULL,
  `email` char(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_clt`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Vider la table avant d'insérer `client`
--

TRUNCATE TABLE `client`;
--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_clt`, `nom_clt`, `prenom_clt`, `email`, `password`) VALUES
(1, 'Ferrier', 'Cirill', 'Cirill.Ferrier@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Ferrier', 'Cirill', 'cirill@asheart.fr', '202cb962ac59075b964b07152d234b70'),
(3, 'Faty', 'Faty', 'fatyclient@123.fr', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE `commande` (
  `id_cmd` int(10) NOT NULL AUTO_INCREMENT,
  `date_cmd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payer` tinyint(1) NOT NULL,
  `etat` char(20) NOT NULL,
  `adresseLivraison` varchar(300) NOT NULL,
  `id_clt` int(10) NOT NULL,
  PRIMARY KEY (`id_cmd`),
  KEY `Commande_id_clt_Fk` (`id_clt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Vider la table avant d'insérer `commande`
--

TRUNCATE TABLE `commande`;
-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--

DROP TABLE IF EXISTS `couleur`;
CREATE TABLE `couleur` (
  `id_couleur` int(10) NOT NULL AUTO_INCREMENT,
  `nom_couleur` char(50) DEFAULT NULL,
  `ref_couleur` varchar(50) NOT NULL,
  `activer_couleur` tinyint(1) NOT NULL DEFAULT '1',
  `couleurHexa` varchar(20) NOT NULL,
  PRIMARY KEY (`id_couleur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Vider la table avant d'insérer `couleur`
--

TRUNCATE TABLE `couleur`;
--
-- Contenu de la table `couleur`
--

INSERT INTO `couleur` (`id_couleur`, `nom_couleur`, `ref_couleur`, `activer_couleur`, `couleurHexa`) VALUES
(1, 'Blanc', '400', 1, '#fff'),
(2, 'Noir', '401', 1, '#000'),
(3, 'Orange', '420', 1, '#ff7b00'),
(4, 'Gris', '404', 1, '#a8a8a8'),
(5, 'Jaune', '412', 1, 'rgb(242, 213, 0)');

-- --------------------------------------------------------

--
-- Structure de la table `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE `footer` (
  `champ1` varchar(500) NOT NULL,
  `link1` varchar(100) DEFAULT NULL,
  `link2` varchar(100) DEFAULT NULL,
  `link3` varchar(100) DEFAULT NULL,
  `nomLink1` varchar(50) NOT NULL,
  `nomLink2` varchar(50) NOT NULL,
  `nomLink3` varchar(50) NOT NULL,
  `id_footer` int(1) NOT NULL,
  PRIMARY KEY (`id_footer`),
  KEY `id_footer` (`id_footer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vider la table avant d'insérer `footer`
--

TRUNCATE TABLE `footer`;
--
-- Contenu de la table `footer`
--

INSERT INTO `footer` (`champ1`, `link1`, `link2`, `link3`, `nomLink1`, `nomLink2`, `nomLink3`, `id_footer`) VALUES
('DESCRIPTION', 'www.facebook.com/fatyconcept/', '', NULL, 'Facebook', '', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `nav`
--

DROP TABLE IF EXISTS `nav`;
CREATE TABLE `nav` (
  `id_Nav` int(10) NOT NULL AUTO_INCREMENT,
  `nomNav` char(50) DEFAULT NULL,
  `link_nav` char(255) DEFAULT NULL,
  PRIMARY KEY (`id_Nav`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Vider la table avant d'insérer `nav`
--

TRUNCATE TABLE `nav`;
-- --------------------------------------------------------

--
-- Structure de la table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `nom_page` char(50) NOT NULL,
  `champ` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`nom_page`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vider la table avant d'insérer `page`
--

TRUNCATE TABLE `page`;
-- --------------------------------------------------------

--
-- Structure de la table `param`
--

DROP TABLE IF EXISTS `param`;
CREATE TABLE `param` (
  `listeProduitOuChoixProd` tinyint(1) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `siret` varchar(30) NOT NULL,
  `ape` varchar(30) NOT NULL,
  `tva` varchar(30) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `id_param` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_param`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Vider la table avant d'insérer `param`
--

TRUNCATE TABLE `param`;
--
-- Contenu de la table `param`
--

INSERT INTO `param` (`listeProduitOuChoixProd`, `adresse`, `telephone`, `siret`, `ape`, `tva`, `mail`, `id_param`) VALUES
(1, '3 Rue de la Chartreuse, 13090 Aix-en-Provence', '06 12 26 08 51', '', '', '', 'fb2c@hotmail.fr', 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE `produit` (
  `id_prod` int(10) NOT NULL AUTO_INCREMENT,
  `nom_prod` char(50) NOT NULL,
  `desc_prod` varchar(255) NOT NULL,
  `motcle` varchar(255) DEFAULT NULL,
  `image_prod` varchar(150) NOT NULL,
  `inverser` tinyint(1) NOT NULL DEFAULT '1',
  `id_type_prod` int(10) DEFAULT NULL,
  `id_typeTaille` int(10) DEFAULT NULL,
  `affichageHome` tinyint(1) NOT NULL DEFAULT '1',
  `Activer` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_prod`),
  KEY `Produit_Type_Produit_FK` (`id_type_prod`),
  KEY `Produit_Type_taille0_FK` (`id_typeTaille`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Vider la table avant d'insérer `produit`
--

TRUNCATE TABLE `produit`;
--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `nom_prod`, `desc_prod`, `motcle`, `image_prod`, `inverser`, `id_type_prod`, `id_typeTaille`, `affichageHome`, `Activer`) VALUES
(20, 'Sticker Cochon Français', 'Cochon français stickers autocollant', 'cochon français, bleu blanc rouge, sticker, autocollant, tee-shirt, broderie, brodage', '12.jpg', 0, 2, 1, 1, 0),
(22, 'Stickers Cochon corse', 'Stickers Cochon Corse tête de maure', 'Corse, Cochon Corse, tête de maure, patch, broderie, flocage ', 'COCHON CORSE PNG.png', 0, 2, 1, 1, 0),
(23, 'Stickers Cochon occitan', 'Stickers autocollant cochon drapeau occitan', 'Stickers, autocollant, drapeau occitan, cochon, occitanie, voiture, moto, sticer, stiker, patch, broderie', '4.png', 0, 2, 1, 1, 0),
(24, 'Stickers Cochon Savoie', 'Stickers autocollant cochon drapeau de Savoie', 'Stickers, autocollant, drapeau savoyard, cochon, savoie, voiture, moto, sticer, stiker, patch, broderie', '3.png', 0, 2, 1, 1, 1),
(25, 'Stickers Cochon Portugais', 'Stickers autocollant cochon drapeau Portugais', 'Stickers, autocollant, drapeau portugais, portugaise, cochon, portugal, voiture, moto, sticer, stiker, patch, brode', '5.png', 0, 2, 1, 1, 1),
(26, 'Stickers Cochon Belge', 'Stickers autocollant cochon drapeau Belge', 'Stickers, autocollant, drapeau belge, cochon, belgique, voiture, moto, sticer, stiker, patch, broderie', '6.png', 0, 2, 1, 1, 1),
(27, 'Stickers Cochon Italien', 'Stickers autocollant cochon drapeau Italien', 'Stickers, autocollant, drapeau italien, cochon, italienne, italie, voiture, moto, sticer, stiker, patch, broderie', '7.png', 0, 2, 1, 1, 1),
(28, 'Stickers Cochon Suisse', 'Stickers autocollant cochon drapeau Italie', 'Stickers, autocollant, drapeau italie, cochon, italien, italien, voiture, moto, sticer, stiker, patch, broderie', '8.png', 0, 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit_tag`
--

DROP TABLE IF EXISTS `produit_tag`;
CREATE TABLE `produit_tag` (
  `id_sousType` int(10) NOT NULL,
  `id_prod` int(10) NOT NULL,
  PRIMARY KEY (`id_sousType`,`id_prod`),
  KEY `Produit_Tag_id_prod_FK` (`id_prod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vider la table avant d'insérer `produit_tag`
--

TRUNCATE TABLE `produit_tag`;
-- --------------------------------------------------------

--
-- Structure de la table `sousnav`
--

DROP TABLE IF EXISTS `sousnav`;
CREATE TABLE `sousnav` (
  `id_SousNav` int(10) NOT NULL AUTO_INCREMENT,
  `nom_sousNav` char(50) DEFAULT NULL,
  `link_sousNav` char(255) DEFAULT NULL,
  `id_Nav` int(10) NOT NULL,
  PRIMARY KEY (`id_SousNav`),
  KEY `SousNav_Nav_FK` (`id_Nav`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Vider la table avant d'insérer `sousnav`
--

TRUNCATE TABLE `sousnav`;
-- --------------------------------------------------------

--
-- Structure de la table `soustype`
--

DROP TABLE IF EXISTS `soustype`;
CREATE TABLE `soustype` (
  `id_sousType` int(10) NOT NULL AUTO_INCREMENT,
  `nom_tag` char(25) DEFAULT NULL,
  PRIMARY KEY (`id_sousType`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Vider la table avant d'insérer `soustype`
--

TRUNCATE TABLE `soustype`;
--
-- Contenu de la table `soustype`
--

INSERT INTO `soustype` (`id_sousType`, `nom_tag`) VALUES
(1, 'Taille en cm'),
(2, 'Tee-shirt'),
(3, 'Ange'),
(4, 'Crane'),
(5, 'Aigle');

-- --------------------------------------------------------

--
-- Structure de la table `taille`
--

DROP TABLE IF EXISTS `taille`;
CREATE TABLE `taille` (
  `id_Taille` int(10) NOT NULL AUTO_INCREMENT,
  `Taille` char(20) DEFAULT NULL,
  `id_typeTaille` int(10) NOT NULL,
  `prix_taille` int(10) NOT NULL,
  PRIMARY KEY (`id_Taille`),
  KEY `Taille_Type_taille_FK` (`id_typeTaille`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Vider la table avant d'insérer `taille`
--

TRUNCATE TABLE `taille`;
--
-- Contenu de la table `taille`
--

INSERT INTO `taille` (`id_Taille`, `Taille`, `id_typeTaille`, `prix_taille`) VALUES
(6, 'XS', 2, 20),
(7, 'S', 2, 20),
(8, 'M', 2, 20),
(9, 'L', 2, 20),
(10, 'XL', 2, 20),
(11, '9cm', 1, 1),
(12, '20cm', 1, 2),
(13, '40cm', 1, 10),
(14, '70cm', 1, 50);

-- --------------------------------------------------------

--
-- Structure de la table `type_produit`
--

DROP TABLE IF EXISTS `type_produit`;
CREATE TABLE `type_produit` (
  `id_type_prod` int(10) NOT NULL AUTO_INCREMENT,
  `nom_type_produit` varchar(50) NOT NULL,
  `necessite_couleur` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_type_prod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Vider la table avant d'insérer `type_produit`
--

TRUNCATE TABLE `type_produit`;
--
-- Contenu de la table `type_produit`
--

INSERT INTO `type_produit` (`id_type_prod`, `nom_type_produit`, `necessite_couleur`) VALUES
(1, 'Stickers Monochrome', 1),
(2, 'Stickers Couleurs', 0),
(3, 'Patch', 0);

-- --------------------------------------------------------

--
-- Structure de la table `type_taille`
--

DROP TABLE IF EXISTS `type_taille`;
CREATE TABLE `type_taille` (
  `id_typeTaille` int(10) NOT NULL AUTO_INCREMENT,
  `nom_typeTaille` char(50) DEFAULT NULL,
  PRIMARY KEY (`id_typeTaille`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Vider la table avant d'insérer `type_taille`
--

TRUNCATE TABLE `type_taille`;
--
-- Contenu de la table `type_taille`
--

INSERT INTO `type_taille` (`id_typeTaille`, `nom_typeTaille`) VALUES
(1, 'Taille en cm'),
(2, 'Tee-shirt');

-- --------------------------------------------------------

--
-- Structure de la table `typo`
--

DROP TABLE IF EXISTS `typo`;
CREATE TABLE `typo` (
  `id_Typo` int(10) NOT NULL AUTO_INCREMENT,
  `nom_typo` char(50) DEFAULT NULL,
  `link_typo` varchar(250) NOT NULL,
  `class_typo` char(50) DEFAULT NULL,
  `activer_typo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_Typo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Vider la table avant d'insérer `typo`
--

TRUNCATE TABLE `typo`;
--
-- Contenu de la table `typo`
--

INSERT INTO `typo` (`id_Typo`, `nom_typo`, `link_typo`, `class_typo`, `activer_typo`) VALUES
(1, 'Fjalla One', '<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">', 'font-family: ''Fjalla One'', sans-serif;', 1),
(2, 'Roboto', '<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">', 'font-family: ''Roboto'', sans-serif;', 1),
(3, 'Noto Serif', '<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">', 'font-family: ''Noto Serif'', serif;', 1),
(4, 'Permanent Marker', '<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">', 'font-family: ''Permanent Marker'', cursive;', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `Achat_id_cmd_FK` FOREIGN KEY (`id_cmd`) REFERENCES `commande` (`id_cmd`),
  ADD CONSTRAINT `Achat_id_prod_FK` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id_prod`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `Commande_id_clt_Fk` FOREIGN KEY (`id_clt`) REFERENCES `client` (`id_clt`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `Produit_Type_Produit_FK` FOREIGN KEY (`id_type_prod`) REFERENCES `type_produit` (`id_type_prod`),
  ADD CONSTRAINT `Produit_Type_taille0_FK` FOREIGN KEY (`id_typeTaille`) REFERENCES `type_taille` (`id_typeTaille`);

--
-- Contraintes pour la table `produit_tag`
--
ALTER TABLE `produit_tag`
  ADD CONSTRAINT `Produit_Tag_id_prod_FK` FOREIGN KEY (`id_prod`) REFERENCES `produit` (`id_prod`),
  ADD CONSTRAINT `Produit_Tag_id_sousType_FK` FOREIGN KEY (`id_sousType`) REFERENCES `soustype` (`id_sousType`);

--
-- Contraintes pour la table `sousnav`
--
ALTER TABLE `sousnav`
  ADD CONSTRAINT `SousNav_Nav_FK` FOREIGN KEY (`id_Nav`) REFERENCES `nav` (`id_Nav`);

--
-- Contraintes pour la table `taille`
--
ALTER TABLE `taille`
  ADD CONSTRAINT `Taille_Type_taille_FK` FOREIGN KEY (`id_typeTaille`) REFERENCES `type_taille` (`id_typeTaille`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
