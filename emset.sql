-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 31 août 2021 à 14:40
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `emset`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`cpses_wavdp0ufm6`@`localhost` PROCEDURE `LOGIN` (IN `email` TEXT, IN `passwd` VARCHAR(32))  NO SQL
BEGIN
 SELECT * 
 FROM user
 WHERE email_id = email and password = passwd;
 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `descrip` varchar(1000) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id`, `titre`, `descrip`, `type`) VALUES
(12, 'journee mondiale de la femme', 'A l\'occasion de la journee mondiale de la femme 8 Mars, l\'ecole EMSET-P a travers ses stagiaires, ses professeurs et ses administrateurs, souhaite bonne fete a toutes les femmes du monde.', 'Parascolaire'),
(13, 'l\'entretien d\'embauche : se preparer en efficience', 'L\'ecole EMSET-P a organise au profit de ses etudiants le jeudi 20/06/2019 un seminaire intitule \" l\'entretien d\'embauche : se preparer en efficience\" encadre par Mr Moussaid Rahali Directeur regional de la banque Attijari Wafabank et les directeurs d\'agences Mme Chabbak et Mr Alami que nous remercions infinimente', 'Scolaire');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `avis` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Filiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `biblio`
--

CREATE TABLE `biblio` (
  `id` int(11) NOT NULL,
  `URL` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Cadre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `biblio`
--

INSERT INTO `biblio` (`id`, `URL`, `Date`, `Cadre`) VALUES
(1, 'Capture.PNG', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `cadre`
--

CREATE TABLE `cadre` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `userid` int(11) NOT NULL,
  `CIN` varchar(200) NOT NULL,
  `tele` varchar(50) NOT NULL,
  `Cadre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cadre`
--

INSERT INTO `cadre` (`id`, `nom`, `userid`, `CIN`, `tele`, `Cadre`) VALUES
(1, 'walid admin', 1, 'I728777', '0666', 2),
(2, 'walid prof', 3, 'I728777', '0661168553', 1);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `URL` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Cadre` int(11) NOT NULL,
  `filiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `URL`, `Date`, `Cadre`, `filiere`) VALUES
(1, 'Capture.PNG', '0000-00-00', 1, 1),
(2, 'Capture.PNG', '0000-00-00', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `emplois`
--

CREATE TABLE `emplois` (
  `id` int(11) NOT NULL,
  `URL` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `filiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `emplois`
--

INSERT INTO `emplois` (`id`, `URL`, `Date`, `filiere`) VALUES
(2, 'Capture.PNG', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `filiere` int(11) NOT NULL,
  `Nom` varchar(200) NOT NULL,
  `Prenom` varchar(200) NOT NULL,
  `CIN` varchar(200) NOT NULL,
  `anne_univ` varchar(50) NOT NULL,
  `Date_naissance` date NOT NULL,
  `Lieu_naissance` varchar(200) NOT NULL,
  `niv_scolaire` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `nationalité` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `num_dincription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `userid`, `filiere`, `Nom`, `Prenom`, `CIN`, `anne_univ`, `Date_naissance`, `Lieu_naissance`, `niv_scolaire`, `adresse`, `mail`, `nationalité`, `phone`, `num_dincription`) VALUES
(1, 2, 1, 'Legliti', 'Simo', 'test', '2019/2020', '2000-01-29', 'BM', 'bac', 'BM', 'blala@groupeemset.com', 'marocaine', 6000, 'BALLA00');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `id` int(11) NOT NULL,
  `Filiere` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id`, `Filiere`) VALUES
(1, 'Gestion des Entreprises'),
(2, 'Developpement Informatique'),
(3, 'Commerce International'),
(4, 'Systèmes et Reseaux'),
(5, 'Gestion en Transport et Logistique'),
(6, 'Financier Comptable'),
(7, 'Exploitation en Transport et Logistique'),
(8, 'Gestion Informatisee'),
(9, 'Commercial'),
(10, 'Comptable'),
(11, 'Operateur de Saisie');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `id_image` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `id_image`, `image`) VALUES
(23, 12, 'march81.jpg'),
(24, 12, 'march82.jpg'),
(25, 12, 'march83.jpg'),
(26, 13, 'attijari1.jpg'),
(27, 13, 'attijari2.jpg'),
(28, 13, 'attijari3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `Stat` int(11) NOT NULL,
  `Session` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email_id`, `password`, `Stat`, `Session`) VALUES
(1, 'walid@emset.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, '597c61e89bf25b8a35244ca1ad02f6c4'),
(2, 'etudiant@emset.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, '00abdb090b4e0b6d91fb21e111cc3036'),
(3, 'prof@emset.com ', '81dc9bdb52d04dc20036dbd8313ed055', 1, '5aec8b5ebadf98a093ffb637979f8928');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filiere2` (`Filiere`);

--
-- Index pour la table `biblio`
--
ALTER TABLE `biblio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cadre1` (`Cadre`);

--
-- Index pour la table `cadre`
--
ALTER TABLE `cadre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id user` (`userid`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cadre` (`Cadre`),
  ADD KEY `filiere1` (`filiere`);

--
-- Index pour la table `emplois`
--
ALTER TABLE `emplois`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filiere` (`filiere`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cadre` (`userid`),
  ADD KEY `filiere1` (`filiere`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_image` (`id_image`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `biblio`
--
ALTER TABLE `biblio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cadre`
--
ALTER TABLE `cadre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `emplois`
--
ALTER TABLE `emplois`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `filiere2` FOREIGN KEY (`Filiere`) REFERENCES `filiere` (`id`);

--
-- Contraintes pour la table `biblio`
--
ALTER TABLE `biblio`
  ADD CONSTRAINT `cadre1` FOREIGN KEY (`Cadre`) REFERENCES `cadre` (`id`);

--
-- Contraintes pour la table `cadre`
--
ALTER TABLE `cadre`
  ADD CONSTRAINT `id user` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cadre` FOREIGN KEY (`Cadre`) REFERENCES `cadre` (`id`),
  ADD CONSTRAINT `filiere1` FOREIGN KEY (`filiere`) REFERENCES `filiere` (`id`);

--
-- Contraintes pour la table `emplois`
--
ALTER TABLE `emplois`
  ADD CONSTRAINT `filiere` FOREIGN KEY (`filiere`) REFERENCES `filiere` (`id`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `filiere5` FOREIGN KEY (`filiere`) REFERENCES `filiere` (`id`),
  ADD CONSTRAINT `id user1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `id_image` FOREIGN KEY (`id_image`) REFERENCES `activite` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
