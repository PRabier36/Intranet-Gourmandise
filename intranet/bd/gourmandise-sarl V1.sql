-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 01 mars 2019 à 14:37
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gourmandise`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Code_c` int(11) NOT NULL AUTO_INCREMENT COMMENT 'code client',
  `Nom` varchar(35) NOT NULL COMMENT 'Nom et Prenom',
  `Adresse` varchar(50) DEFAULT NULL COMMENT 'Adresse client',
  `CP` varchar(5) NOT NULL COMMENT 'Code postal client',
  `Ville` varchar(25) NOT NULL COMMENT 'Ville client',
  `Telephone` varchar(25) DEFAULT NULL COMMENT 'Telephone client',
  PRIMARY KEY (`Code_c`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Code_c`, `Nom`, `Adresse`, `CP`, `Ville`, `Telephone`) VALUES
(17, 'TARINAUX Lucien', '12 rue de la Justice', '51100', 'REIMS', '03.26.25.48.87'),
(46, 'MARTUSE', '103 avenue Lear', '51100', 'REIMS', '03.26.03.25.26'),
(47, 'RABIN Sandrine', '21 rue de la MÃ©diterranÃ©e', '51100', 'REIMS', '03.26.14.15.25'),
(48, 'SILLARD Laurence', '15 rue Pasentiers', '51100', 'REIMS', '03.26.11.11.25'),
(49, 'COTOY Sylvie', '12 rue des Ã©cus', '51100', 'REIMS', '03.26.10.25.75'),
(50, 'HELLOU Bernard', '21 rue de la MÃ©diterranÃ©e', '51100', 'REIMS', '03.26.12.25.42'),
(51, 'HENTION Martine', '50 allÃ©e des bons enfants', '51100', 'REIMS', '03.26.12.25.86'),
(52, 'SIBAT Evelyne', '14 rue de la Baltique', '51100', 'REIMS', '03.26.12.23.33'),
(53, 'MARIN Dominique', '24 rue de la Baltique', '51100', 'REIMS', '03.26.10.10.23'),
(54, 'DURDUX Monique', '15 allÃ©e des BÃ©arnais', '51150', 'VITRY LE FRANCOIS', '03.26.42.42.33'),
(55, 'CANILLE Walter', '14 rue Lanterneau', '51100', 'REIMS', '03.26.12.12.87'),
(56, 'BOUQUET Antoinette', '1, rue de la MÃ©diterranÃ©e', '51140', 'ROMAIN', '03.26.78.89.54'),
(57, 'GAUTON Nadine', '5 place des Oiseaux', '51200', 'FISMES', '03.26.53.56.55'),
(58, 'LEGROS Christian', '18 place des Oiseaux', '51200', 'FISMES', '03.26.44.55.66'),
(59, 'DUMOITIERS Lucille', '12 place Centrale', '02320', 'LONGUEVAL', '03.26.86.43.25'),
(60, 'BOUCHE Carole', '4, rue BrulÃ©', '51200', 'FISMES', '03.26.33.96.85');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `Numero_Co` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Num Com',
  `Code_v` int(11) NOT NULL COMMENT 'indique le vendeur',
  `Code_c` int(11) NOT NULL COMMENT 'indique le client',
  `DateLiv` datetime DEFAULT NULL COMMENT 'Date de livraison',
  `DateCom` datetime DEFAULT NULL COMMENT 'Date de commende',
  `Total_ht` decimal(8,0) DEFAULT '0' COMMENT 'Total facture ht',
  `Total_tva` decimal(8,0) DEFAULT '0' COMMENT 'Total tva',
  `Etat` tinyint(3) UNSIGNED DEFAULT '0' COMMENT '0 stock non actu 1 stock MAJ',
  PRIMARY KEY (`Numero_Co`),
  KEY `cle_Cli` (`Code_c`),
  KEY `cle_Vend` (`Code_v`)
) ENGINE=InnoDB AUTO_INCREMENT=10193 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`Numero_Co`, `Code_v`, `Code_c`, `DateLiv`, `DateCom`, `Total_ht`, `Total_tva`, `Etat`) VALUES
(10178, 15, 47, '1998-09-05 00:00:00', '2008-09-05 00:00:00', '177', '10', 1),
(10179, 15, 47, '1998-10-13 00:00:00', '2008-10-13 00:00:00', '192', '11', 1),
(10180, 15, 48, '1998-10-10 00:00:00', '2008-10-10 00:00:00', '98', '5', 1),
(10181, 15, 49, '1998-10-11 00:00:00', '2008-10-11 00:00:00', '175', '10', 1),
(10182, 15, 50, '1998-10-11 00:00:00', '2008-10-11 00:00:00', '116', '6', 1),
(10183, 15, 51, '1998-10-11 00:00:00', '2008-10-11 00:00:00', '118', '7', 1),
(10184, 15, 52, '1998-10-12 00:00:00', '2008-10-12 00:00:00', '102', '6', 1),
(10185, 15, 53, '1998-10-12 00:00:00', '2008-10-12 00:00:00', '19', '1', 1),
(10186, 15, 54, '1998-10-10 00:00:00', '2008-10-10 00:00:00', '101', '6', 1),
(10187, 15, 55, '1998-10-10 00:00:00', '2008-10-10 00:00:00', '65', '4', 1),
(10188, 17, 56, '1998-10-12 00:00:00', '2008-10-12 00:00:00', '121', '7', 1),
(10189, 17, 57, '1998-10-10 00:00:00', '2008-10-10 00:00:00', '110', '6', 1),
(10190, 17, 58, '1998-10-13 00:00:00', '2008-10-13 00:00:00', '123', '7', 1),
(10191, 17, 59, '1998-10-13 00:00:00', '2008-10-13 00:00:00', '108', '6', 1),
(10192, 17, 60, '1998-11-10 00:00:00', '2008-11-10 00:00:00', '237', '13', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

DROP TABLE IF EXISTS `ligne_commande`;
CREATE TABLE IF NOT EXISTS `ligne_commande` (
  `Numero` int(11) NOT NULL COMMENT 'Num de commande',
  `Num_lign` smallint(6) NOT NULL COMMENT 'Numero de ligne',
  `Reference` int(11) NOT NULL COMMENT 'Reference produit',
  `Quantité_demandee` smallint(6) DEFAULT NULL COMMENT 'Quantité vendu',
  PRIMARY KEY (`Numero`,`Num_lign`),
  KEY `code_Pro` (`Reference`),
  KEY `code_Ncom` (`Numero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`Numero`, `Num_lign`, `Reference`, `Quantité_demandee`) VALUES
(10178, 1, 4015, 1),
(10178, 2, 4025, 1),
(10178, 3, 4031, 1),
(10178, 4, 4036, 1),
(10178, 5, 4004, 1),
(10178, 6, 4053, 1),
(10178, 7, 4042, 1),
(10179, 1, 4031, 1),
(10179, 2, 4032, 1),
(10179, 3, 4037, 1),
(10179, 4, 4002, 1),
(10179, 5, 4054, 1),
(10179, 6, 4057, 1),
(10179, 7, 1007, 2),
(10180, 1, 4053, 1),
(10180, 2, 4055, 1),
(10180, 3, 3016, 1),
(10181, 1, 4020, 1),
(10181, 2, 4026, 1),
(10181, 3, 4045, 1),
(10181, 4, 4002, 2),
(10181, 5, 4012, 2),
(10181, 6, 4054, 1),
(10182, 1, 4034, 1),
(10182, 2, 4012, 1),
(10182, 3, 4055, 1),
(10182, 4, 4057, 1),
(10183, 1, 4025, 1),
(10183, 2, 4027, 1),
(10183, 3, 4029, 1),
(10183, 4, 4039, 1),
(10183, 5, 4013, 1),
(10184, 1, 4025, 1),
(10184, 2, 4031, 2),
(10184, 3, 4004, 1),
(10185, 1, 4002, 1),
(10186, 1, 1016, 1),
(10186, 2, 3002, 2),
(10187, 1, 4015, 1),
(10187, 2, 4010, 1),
(10187, 3, 4011, 1),
(10188, 1, 1016, 2),
(10188, 2, 4052, 1),
(10188, 3, 1004, 1),
(10189, 1, 1017, 1),
(10189, 2, 4016, 1),
(10189, 3, 4031, 1),
(10189, 4, 4033, 1),
(10190, 1, 3010, 1),
(10190, 2, 4015, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `Reference` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Référence produit',
  `Designation` varchar(30) NOT NULL COMMENT 'Designation produit',
  `quantite` int(11) DEFAULT '0' COMMENT 'Poids ou nombre Pieces',
  `descriptif` varchar(1) DEFAULT 'G' COMMENT 'Unité de mesure G pour gramme et P pour piece',
  `prix_uni_ht` double DEFAULT '0' COMMENT 'Prix unitaire HT',
  `Stock` smallint(6) DEFAULT '0' COMMENT 'Etat du stock',
  `Poids_piece` int(11) DEFAULT '0' COMMENT 'Poids piece en gramme pour les article vendu par piece',
  PRIMARY KEY (`Reference`)
) ENGINE=InnoDB AUTO_INCREMENT=4058 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`Reference`, `Designation`, `quantite`, `descriptif`, `prix_uni_ht`, `Stock`, `Poids_piece`) VALUES
(1004, 'FEU DE JOIE LIQUEUR ASSORT.', 500, 'G', 23, 50, 0),
(1007, 'TENDRE FRUIT', 500, 'G', 18, 120, 0),
(1015, 'CARACAO', 500, 'G', 24.5, 50, 0),
(1016, 'COKTAIL', 500, 'G', 33, 40, 0),
(1017, 'ORFIN', 500, 'G', 32, 40, 0),
(3002, 'CARRE PECTO', 500, 'G', 29, 40, 0),
(3004, 'ZAN ALESAN', 25, 'P', 15, 50, 20),
(3010, 'PATES GRISES', 500, 'G', 35, 100, 0),
(3016, 'CARAMEL AU LAIT', 500, 'G', 20, 100, 0),
(3017, 'VIOLETTE TRADITION', 500, 'G', 25, 100, 0),
(4002, 'SUCETTE BOULE FRUIT', 25, 'P', 14, 100, 40),
(4004, 'SUCETTE BOULE POP', 25, 'P', 21, 50, 40),
(4010, 'CARAMBAR', 40, 'P', 18, 20, 15),
(4011, 'CARANOUGA', 40, 'P', 18, 100, 15),
(4012, 'CARAMBAR FRUIT', 40, 'P', 18, 100, 15),
(4013, 'CARAMBAR COLA', 40, 'P', 18, 50, 15),
(4015, 'SOURIS REGLISSE', 500, 'G', 24, 50, 0),
(4016, 'SOURIS CHOCO', 500, 'G', 24, 50, 0),
(4019, 'SCHTROUMPFS VERTS', 500, 'G', 24, 50, 0),
(4020, 'CROCODILE', 500, 'G', 21, 50, 0),
(4022, 'PERSICA', 500, 'G', 28, 20, 0),
(4025, 'COLA CITRIQUE', 500, 'G', 21, 50, 0),
(4026, 'COLA LISSE', 500, 'G', 25, 50, 0),
(4027, 'BANANE', 1000, 'G', 23, 20, 0),
(4029, 'OEUF SUR LE PLAT', 500, 'G', 25, 20, 0),
(4030, 'FRAISIBUS', 500, 'G', 25, 50, 0),
(4031, 'FRAISE TSOIN-TSOIN', 500, 'G', 25, 40, 0),
(4032, 'METRE REGLISSE ROULE', 500, 'G', 19, 50, 0),
(4033, 'MAXI COCOBAT', 1000, 'G', 19, 20, 0),
(4034, 'DENTS VAMPIRE', 500, 'G', 22, 50, 0),
(4036, 'LANGUE COLA CITRIQUE', 500, 'G', 21, 40, 0),
(4037, 'OURSON CANDI', 1000, 'G', 21, 50, 0),
(4039, 'SERPENT ACIDULE', 500, 'G', 21, 20, 0),
(4042, 'TETINE CANDI', 500, 'G', 20, 40, 0),
(4045, 'COLLIER PECCOS', 15, 'P', 21, 50, 50),
(4052, 'TWIST ASSORTIS', 500, 'G', 22, 50, 0),
(4053, 'OURSON GUIMAUVE', 500, 'G', 35, 10, 0),
(4054, 'BOULE COCO MULER', 500, 'G', 34, 10, 0),
(4055, 'COCOMALLOW', 500, 'G', 33, 10, 0),
(4057, 'CRIC-CRAC', 500, 'G', 33, 10, 0);

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `Code_V` int(11) NOT NULL AUTO_INCREMENT COMMENT 'code vendeur',
  `NomV` varchar(35) NOT NULL COMMENT 'Nom et Prenom vendeur',
  `Adresse` varchar(50) DEFAULT NULL COMMENT 'Adresse vendeur',
  `CP` varchar(5) NOT NULL COMMENT 'Code postal client',
  `VilleV` varchar(25) NOT NULL COMMENT 'Ville vendeur',
  `TelephoneV` varchar(25) DEFAULT NULL COMMENT 'Telephone vendeur',
  PRIMARY KEY (`Code_V`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`Code_V`, `NomV`, `Adresse`, `CP`, `VilleV`, `TelephoneV`) VALUES
(15, 'FILLARD Sylvain', '77 rue du l\'Adriatique', '51100', 'REIMS', '03.26.12.25.25'),
(17, 'BAUDOT Marc', '16 rue de Reims', '51000', 'CHALONS EN CHAMPAGNE', '03.26.10.58.59');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `cle_Cli` FOREIGN KEY (`Code_c`) REFERENCES `client` (`Code_c`),
  ADD CONSTRAINT `cle_Vend` FOREIGN KEY (`Code_v`) REFERENCES `vendeur` (`Code_V`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
