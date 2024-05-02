-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 20 Avril 2024 à 23:05
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cvven`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `adt_id` int(11) NOT NULL,
  `adt_nb_jour` varchar(50) DEFAULT NULL,
  `adt_nom` varchar(50) DEFAULT NULL,
  `adt_prenom` varchar(50) DEFAULT NULL,
  `adt_email` varchar(50) DEFAULT NULL,
  `adt_téléphone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id_chambre` int(11) NOT NULL,
  `chambre_libre` tinyint(1) DEFAULT NULL,
  `type_chambre` varchar(50) DEFAULT NULL,
  `adt_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `organisateur`
--

CREATE TABLE `organisateur` (
  `org_id` int(11) NOT NULL,
  `org_nom` varchar(50) NOT NULL,
  `org_prenom` varchar(50) DEFAULT NULL,
  `org_mail` varchar(50) DEFAULT NULL,
  `org_tel` int(11) DEFAULT NULL,
  `id_reunion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `organisation_réunion`
--

CREATE TABLE `organisation_réunion` (
  `reu_id` int(11) NOT NULL,
  `reu_nom` varchar(50) DEFAULT NULL,
  `reu_nbparticipant` int(11) DEFAULT NULL,
  `horaire_reu` datetime DEFAULT NULL,
  `org_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

CREATE TABLE `participants` (
  `id_participants` int(11) NOT NULL,
  `telephone_parti` int(11) DEFAULT NULL,
  `nom_parti` varchar(50) DEFAULT NULL,
  `prenom_parti` varchar(50) DEFAULT NULL,
  `mail_parti` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reunion`
--

CREATE TABLE `reunion` (
  `id_reunion` int(11) NOT NULL,
  `theme_reu` varchar(50) DEFAULT NULL,
  `nom_reu` varchar(50) DEFAULT NULL,
  `horaire_reu` datetime DEFAULT NULL,
  `id_participants` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `réservation_chambre_hotel`
--

CREATE TABLE `réservation_chambre_hotel` (
  `id_résérvation` int(11) NOT NULL,
  `adt_id` int(11) DEFAULT NULL,
  `id_chambre` int(11) DEFAULT NULL,
  `date_arrivée` datetime DEFAULT NULL,
  `date_départ` datetime DEFAULT NULL,
  `total_prix` int(11) DEFAULT NULL,
  `id_reunion` int(11) DEFAULT NULL,
  `sejour_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sondage`
--

CREATE TABLE `sondage` (
  `song_id` int(11) NOT NULL,
  `song_nom` varchar(50) DEFAULT NULL,
  `song_nb_participant` int(11) DEFAULT NULL,
  `song_nom_adt` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `séjour`
--

CREATE TABLE `séjour` (
  `sejour_id` int(11) NOT NULL,
  `sejour_quotient` decimal(15,2) DEFAULT NULL,
  `sejour_nb_jour` int(11) DEFAULT NULL,
  `sejour_nom_adt` varchar(50) DEFAULT NULL,
  `sejour_tarif` decimal(15,2) DEFAULT NULL,
  `sejour_prenom_adt` varchar(50) DEFAULT NULL,
  `adt_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`adt_id`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id_chambre`),
  ADD KEY `adt_id` (`adt_id`);

--
-- Index pour la table `organisateur`
--
ALTER TABLE `organisateur`
  ADD PRIMARY KEY (`org_id`),
  ADD KEY `id_reunion` (`id_reunion`);

--
-- Index pour la table `organisation_réunion`
--
ALTER TABLE `organisation_réunion`
  ADD PRIMARY KEY (`reu_id`),
  ADD KEY `org_id` (`org_id`);

--
-- Index pour la table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id_participants`);

--
-- Index pour la table `reunion`
--
ALTER TABLE `reunion`
  ADD PRIMARY KEY (`id_reunion`),
  ADD KEY `id_participants` (`id_participants`);

--
-- Index pour la table `réservation_chambre_hotel`
--
ALTER TABLE `réservation_chambre_hotel`
  ADD PRIMARY KEY (`id_résérvation`),
  ADD KEY `adt_id` (`adt_id`),
  ADD KEY `id_chambre` (`id_chambre`),
  ADD KEY `fk_id_reunion` (`id_reunion`),
  ADD KEY `fk_sejour_id` (`sejour_id`);

--
-- Index pour la table `sondage`
--
ALTER TABLE `sondage`
  ADD PRIMARY KEY (`song_id`);

--
-- Index pour la table `séjour`
--
ALTER TABLE `séjour`
  ADD PRIMARY KEY (`sejour_id`),
  ADD KEY `adt_id` (`adt_id`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`adt_id`) REFERENCES `adherent` (`adt_id`);

--
-- Contraintes pour la table `organisateur`
--
ALTER TABLE `organisateur`
  ADD CONSTRAINT `organisateur_ibfk_1` FOREIGN KEY (`id_reunion`) REFERENCES `reunion` (`id_reunion`);

--
-- Contraintes pour la table `organisation_réunion`
--
ALTER TABLE `organisation_réunion`
  ADD CONSTRAINT `organisation_réunion_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `organisateur` (`org_id`);

--
-- Contraintes pour la table `reunion`
--
ALTER TABLE `reunion`
  ADD CONSTRAINT `reunion_ibfk_1` FOREIGN KEY (`id_participants`) REFERENCES `participants` (`id_participants`);

--
-- Contraintes pour la table `réservation_chambre_hotel`
--
ALTER TABLE `réservation_chambre_hotel`
  ADD CONSTRAINT `fk_id_reunion` FOREIGN KEY (`id_reunion`) REFERENCES `reunion` (`id_reunion`),
  ADD CONSTRAINT `fk_sejour_id` FOREIGN KEY (`sejour_id`) REFERENCES `séjour` (`sejour_id`),
  ADD CONSTRAINT `réservation_chambre_hotel_ibfk_1` FOREIGN KEY (`adt_id`) REFERENCES `adherent` (`adt_id`),
  ADD CONSTRAINT `réservation_chambre_hotel_ibfk_2` FOREIGN KEY (`id_chambre`) REFERENCES `chambre` (`id_chambre`);

--
-- Contraintes pour la table `séjour`
--
ALTER TABLE `séjour`
  ADD CONSTRAINT `séjour_ibfk_1` FOREIGN KEY (`adt_id`) REFERENCES `adherent` (`adt_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
