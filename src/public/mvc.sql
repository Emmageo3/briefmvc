-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 10 mars 2022 à 09:35
-- Version du serveur :  8.0.28-0ubuntu0.20.04.3
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE `departements` (
  `id_departement` int NOT NULL,
  `nom_departement` varchar(50) DEFAULT NULL,
  `id_region` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`id_departement`, `nom_departement`, `id_region`) VALUES
(1, 'Dakar', 1),
(2, 'Guediawaye', 1),
(3, 'Pikine', 1),
(4, 'Rufisque', 1),
(5, 'Bambey', 2),
(6, 'Diourbel', 2),
(7, 'Mbacke', 2),
(8, 'Fatick', 3),
(9, 'Foundiougne', 3),
(10, 'Gossas', 3),
(11, 'Birkelane', 4),
(12, 'Kaffrine', 4),
(13, 'Koungheul', 4),
(14, 'Malem Hodar', 4),
(15, 'Guinguineo', 5),
(16, 'Kaolack', 5),
(17, 'Nioro du Rip', 5),
(18, 'Kedougou', 6),
(19, 'Kolda', 7),
(20, 'Medina Yoro Foulah', 7),
(21, 'Velingara', 7),
(22, 'Kebemer', 8),
(23, 'Linguere', 8),
(24, 'Louga', 8),
(25, 'Kanel', 9),
(26, 'Matam', 9),
(27, 'Ranerou Ferlo', 9),
(28, 'Dagana', 10),
(29, 'Podor', 10),
(30, 'Saint-Louis', 10),
(31, 'Salemata', 6),
(32, 'Saraya', 6),
(33, 'Bounkiling', 11),
(34, 'Goudomp', 11),
(35, 'Sedhiou', 11),
(36, 'Bakel', 12),
(37, 'Goudiry', 12),
(38, 'Koumpentoum', 12),
(39, 'Tambacounda', 12),
(40, 'Mbour', 13),
(41, 'Thies', 13),
(42, 'Tivaoune', 13),
(43, 'Bignona', 14),
(44, 'Oussouye', 14),
(45, 'Ziguinchor', 14);

-- --------------------------------------------------------

--
-- Structure de la table `dispositifs_de_formations`
--

CREATE TABLE `dispositifs_de_formations` (
  `id_dispositif` int NOT NULL,
  `libelle_dispositif` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `dispositifs_de_formations`
--

INSERT INTO `dispositifs_de_formations` (`id_dispositif`, `libelle_dispositif`) VALUES
(1, '0-15'),
(2, '16-30'),
(3, '31-45'),
(4, '46-60'),
(5, '61-plus');

-- --------------------------------------------------------

--
-- Structure de la table `domaines`
--

CREATE TABLE `domaines` (
  `id_domaine` int NOT NULL,
  `libelle_domaine` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `domaines`
--

INSERT INTO `domaines` (`id_domaine`, `libelle_domaine`) VALUES
(2, 'Agroalimentaire'),
(3, 'Banque / Assurance'),
(4, 'Bois / Papier / Carton / Imprimerie'),
(5, 'BTP / Matériaux de construction'),
(6, 'Chimie / Parachimie'),
(7, 'Commerce / Négoce / Distribution'),
(8, 'Édition / Communication / Multimédia'),
(9, 'Électronique / Électricité'),
(1, 'Ventes');

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

CREATE TABLE `entreprises` (
  `id_entreprise` int NOT NULL,
  `nom_entreprise` varchar(30) DEFAULT NULL,
  `coordonnees` varchar(255) DEFAULT NULL,
  `ninea` varchar(100) DEFAULT NULL,
  `rccm` varchar(50) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `page_web` varchar(100) DEFAULT NULL,
  `nombre_employe` int DEFAULT '1',
  `organigramme` tinyint(1) DEFAULT '1',
  `cotisations_sociales` tinyint(1) DEFAULT '1',
  `contrat` varchar(200) DEFAULT NULL,
  `id_repondant` int DEFAULT NULL,
  `id_domaine` int DEFAULT NULL,
  `id_dispositif` int DEFAULT NULL,
  `id_regime` int DEFAULT NULL,
  `id_quartier` int DEFAULT NULL,
  `id_utilisateur` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`id_entreprise`, `nom_entreprise`, `coordonnees`, `ninea`, `rccm`, `date_creation`, `page_web`, `nombre_employe`, `organigramme`, `cotisations_sociales`, `contrat`, `id_repondant`, `id_domaine`, `id_dispositif`, `id_regime`, `id_quartier`, `id_utilisateur`) VALUES
(8, 'Sen Free Software community', 'keur Daouda Sarr', 'NINEAMVC1234', 'HONORABLERCCM', '1998-01-30', 'bayedame.com', 32, 1, 1, 'prestations', 6, 9, 3, 2, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `fonctions`
--

CREATE TABLE `fonctions` (
  `id_fonction` int NOT NULL,
  `libelle_fonction` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `fonctions`
--

INSERT INTO `fonctions` (`id_fonction`, `libelle_fonction`) VALUES
(10, 'Community Manager'),
(6, 'Developpeur Web'),
(5, 'Directeur General'),
(13, 'Directeur Systeme dinformation'),
(11, 'Photographe'),
(7, 'Referent digital'),
(4, 'Responsable administratif'),
(1, 'Responsable comptable'),
(9, 'Responsable Ressources Humaines'),
(8, 'Secretaire'),
(12, 'Talend Developer');

-- --------------------------------------------------------

--
-- Structure de la table `quartiers`
--

CREATE TABLE `quartiers` (
  `id_quartier` int NOT NULL,
  `nom_quartier` varchar(30) DEFAULT NULL,
  `id_departement` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `quartiers`
--

INSERT INTO `quartiers` (`id_quartier`, `nom_quartier`, `id_departement`) VALUES
(1, 'Bopp', 1),
(2, 'Cité Bissap', 1),
(3, 'Ouagou Niayes 1', 1),
(4, 'Usine ben Tally', 1),
(5, 'Usine niari Tally', 1);
-- --------------------------------------------------------

--
-- Structure de la table `regimes`
--

CREATE TABLE `regimes` (
  `id_regime` int NOT NULL,
  `libelle_regime` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `regimes`
--

INSERT INTO `regimes` (`id_regime`, `libelle_regime`) VALUES
(4, 'GIE'),
(2, 'SA'),
(1, 'SARL'),
(5, 'SAS'),
(3, 'SUARL');

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `id_region` int NOT NULL,
  `nom_region` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`id_region`, `nom_region`) VALUES
(1, 'Dakar'),
(2, 'Diourbel'),
(3, 'Fatick'),
(4, 'Kaffrine'),
(5, 'Kaolack'),
(6, 'Kédougou'),
(7, 'Kolda'),
(8, 'Louga'),
(9, 'Matam'),
(10, 'Saint-Louis'),
(11, 'Sedhiou'),
(12, 'Tambacounda'),
(13, 'Thies'),
(14, 'Ziguinchor');

-- --------------------------------------------------------

--
-- Structure de la table `repondants`
--

CREATE TABLE `repondants` (
  `id_repondant` int NOT NULL,
  `prenom_repondant` varchar(100) DEFAULT NULL,
  `nom_repondant` varchar(50) DEFAULT NULL,
  `telephone_repondant` varchar(15) DEFAULT NULL,
  `courriel` varchar(100) DEFAULT NULL,
  `id_fonction` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `repondants`
--

INSERT INTO `repondants` (`id_repondant`, `prenom_repondant`, `nom_repondant`, `telephone_repondant`, `courriel`, `id_fonction`) VALUES
(6, ' Baye Dame', 'LEYE', '771045609', 'dame@gmail.com', 6);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int NOT NULL,
  `prenom_utilisateur` varchar(50) DEFAULT NULL,
  `nom_utilisateur` varchar(20) DEFAULT NULL,
  `login` varchar(15) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `prenom_utilisateur`, `nom_utilisateur`, `login`, `telephone`, `password`) VALUES
(1, 'Papa Ibrahima', 'NDIAYE', 'papi', '776692537', '183d77328dfe90dececd6217f57fdf559bed2d4c'),
(2, 'Mohamed', 'THIARE', 'thiare', '771234567', '1f23ee51685f1fbf2d45c75e17fad6002b4a686f');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id_departement`),
  ADD UNIQUE KEY `nom_departement` (`nom_departement`),
  ADD KEY `FK_REGION_DEPARTEMENT` (`id_region`);

--
-- Index pour la table `dispositifs_de_formations`
--
ALTER TABLE `dispositifs_de_formations`
  ADD PRIMARY KEY (`id_dispositif`),
  ADD UNIQUE KEY `libelle_dispositif` (`libelle_dispositif`);

--
-- Index pour la table `domaines`
--
ALTER TABLE `domaines`
  ADD PRIMARY KEY (`id_domaine`),
  ADD UNIQUE KEY `libelle_domaine` (`libelle_domaine`);

--
-- Index pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`id_entreprise`),
  ADD UNIQUE KEY `ninea` (`ninea`),
  ADD UNIQUE KEY `rccm` (`rccm`),
  ADD KEY `FK_UTILISATEUR_ENTREPRISE` (`id_utilisateur`),
  ADD KEY `FK_DISPOSITIF_ENTREPRISE` (`id_dispositif`),
  ADD KEY `FK_DOMAINE_ENTREPRISE` (`id_domaine`),
  ADD KEY `FK_QUARTIER_ENTREPRISE` (`id_quartier`),
  ADD KEY `FK_REGIME_ENTREPRISE` (`id_regime`),
  ADD KEY `FK_REPONDANT_ENTREPRISE` (`id_repondant`);

--
-- Index pour la table `fonctions`
--
ALTER TABLE `fonctions`
  ADD PRIMARY KEY (`id_fonction`),
  ADD UNIQUE KEY `libelle_fonction` (`libelle_fonction`);

--
-- Index pour la table `quartiers`
--
ALTER TABLE `quartiers`
  ADD PRIMARY KEY (`id_quartier`),
  ADD UNIQUE KEY `nom_quartier` (`nom_quartier`),
  ADD KEY `FK_DEPARTEMENT_QUARTIER` (`id_departement`);

--
-- Index pour la table `regimes`
--
ALTER TABLE `regimes`
  ADD PRIMARY KEY (`id_regime`),
  ADD UNIQUE KEY `libelle_regime` (`libelle_regime`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id_region`),
  ADD UNIQUE KEY `nom_region` (`nom_region`);

--
-- Index pour la table `repondants`
--
ALTER TABLE `repondants`
  ADD PRIMARY KEY (`id_repondant`),
  ADD UNIQUE KEY `telephone_repondant` (`telephone_repondant`),
  ADD UNIQUE KEY `courriel` (`courriel`),
  ADD KEY `FK_FONCTION_REPONDANT` (`id_fonction`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `telephone` (`telephone`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
  MODIFY `id_departement` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `dispositifs_de_formations`
--
ALTER TABLE `dispositifs_de_formations`
  MODIFY `id_dispositif` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `domaines`
--
ALTER TABLE `domaines`
  MODIFY `id_domaine` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `id_entreprise` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `fonctions`
--
ALTER TABLE `fonctions`
  MODIFY `id_fonction` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `quartiers`
--
ALTER TABLE `quartiers`
  MODIFY `id_quartier` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `regimes`
--
ALTER TABLE `regimes`
  MODIFY `id_regime` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id_region` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `repondants`
--
ALTER TABLE `repondants`
  MODIFY `id_repondant` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `departements`
--
ALTER TABLE `departements`
  ADD CONSTRAINT `FK_REGION_DEPARTEMENT` FOREIGN KEY (`id_region`) REFERENCES `regions` (`id_region`);

--
-- Contraintes pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD CONSTRAINT `FK_DISPOSITIF_ENTREPRISE` FOREIGN KEY (`id_dispositif`) REFERENCES `dispositifs_de_formations` (`id_dispositif`),
  ADD CONSTRAINT `FK_DOMAINE_ENTREPRISE` FOREIGN KEY (`id_domaine`) REFERENCES `domaines` (`id_domaine`),
  ADD CONSTRAINT `FK_QUARTIER_ENTREPRISE` FOREIGN KEY (`id_quartier`) REFERENCES `quartiers` (`id_quartier`),
  ADD CONSTRAINT `FK_REGIME_ENTREPRISE` FOREIGN KEY (`id_regime`) REFERENCES `regimes` (`id_regime`),
  ADD CONSTRAINT `FK_REPONDANT_ENTREPRISE` FOREIGN KEY (`id_repondant`) REFERENCES `repondants` (`id_repondant`),
  ADD CONSTRAINT `FK_UTILISATEUR_ENTREPRISE` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`);

--
-- Contraintes pour la table `quartiers`
--
ALTER TABLE `quartiers`
  ADD CONSTRAINT `FK_DEPARTEMENT_QUARTIER` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id_departement`);

--
-- Contraintes pour la table `repondants`
--
ALTER TABLE `repondants`
  ADD CONSTRAINT `FK_FONCTION_REPONDANT` FOREIGN KEY (`id_fonction`) REFERENCES `fonctions` (`id_fonction`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
