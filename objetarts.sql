-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 23 Mai 2015 à 22:51
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `objetarts`
--
CREATE DATABASE IF NOT EXISTS `objetarts` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `objetarts`;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `lib_categorie` varchar(255) NOT NULL,
  `descripCat` text NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `lib_categorie`, `descripCat`) VALUES
(1, 'Masque', 'sculpture en bois portée sur le visage ou la tête\r\n'),
(2, 'Statue en bois', 'objet d''art africain en bois\r\n\r\n'),
(3, 'Statue en bronze', 'Objet d''art africain en bronze'),
(4, 'Bijoux', 'Objet de parure precieux'),
(5, 'Tableaux', 'Tableaux de peintres Maliens'),
(6, 'Tissus', 'Tout type de tissus maliens'),
(7, 'Divers', 'objets divers ');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `ville` varchar(255) NOT NULL,
  `motDePasse` varchar(255) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `age`, `sexe`, `tel`, `mail`, `pays`, `ville`, `motDePasse`) VALUES
(1, 'KANE', 'Djeneba', 22, 'femme', 674005502, 'kanedjene@yahoo.fr', 'France', 'Montpellier', 'medecine'),
(2, 'KANE', 'Mohamed', 23, 'homme', 674005503, 'mo@example.com', 'France', 'Montpellier', 'azerty'),
(3, 'KANE', 'papi', 19, 'homme', 674005504, 'papi@example.com', 'Maroc', 'Tanger', 'service'),
(6, 'Drame', 'fatoumata', 45, 'femme', 247015120, 'bigui@yahoo.fr', 'Mali', 'Bamako', 'fdds');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_client` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `comment` text NOT NULL,
  `note` int(11) NOT NULL,
  `date` date NOT NULL,
  KEY `id_produit` (`id_produit`),
  KEY `id_client` (`id_client`,`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `id_commande` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  KEY `id_commande` (`id_commande`,`id_produit`),
  KEY `id_produit` (`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `qteStock` int(11) NOT NULL,
  `prixU` float NOT NULL,
  `description` text NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `id_categorie` (`id_categorie`),
  KEY `id_categorie_2` (`id_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom`, `qteStock`, `prixU`, `description`, `id_categorie`) VALUES
(1, 'Masque_Dogon', 50, 30, 'Masque venant du pays dogon(Mali) en bois.\r\nHauteur:  58 cm\r\nLargeur:   12 cm\r\nProfondeur : 9 cm\r\nPoids:  0,7 kg\r\n ', 1),
(16, 'Jarre Dagari', 60, 100, 'objet en terre cuite\r\n- Hauteur : 	44 cm\r\n- Largeur : 	30 cm', 7),
(17, 'Pot à oracles Mossi', 150, 80, 'L''art africain peut revêtir différentes formes.\r\nOn peut admirer la finesse de ce pot à oracles Mossi(Burkina Faso)en bois et en cuivre.\r\n Hauteur : 	47 cm\r\n- Largeur : 	26 cm\r\n', 7);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`),
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
