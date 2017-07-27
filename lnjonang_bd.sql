-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 27 Juillet 2017 à 18:36
-- Version du serveur :  5.5.52-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lnjonang_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_competences`
--

CREATE TABLE `t_competences` (
  `id_competence` int(11) NOT NULL,
  `competence` varchar(45) NOT NULL,
  `niveau` int(4) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_competences`
--

INSERT INTO `t_competences` (`id_competence`, `competence`, `niveau`, `utilisateur_id`) VALUES
(1, 'HTML5', 80, 1),
(2, 'CSS3', 40, 1),
(3, 'JavaScript', 30, 1),
(4, 'PHP7', 60, 1),
(5, 'MySql', 85, 1),
(6, 'WordPress', 35, 1),
(7, 'Boostrap', 70, 1),
(8, 'Ajax', 30, 1),
(9, 'jQuery', 20, 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_experiences_formations`
--

CREATE TABLE `t_experiences_formations` (
  `id_experience_formation` int(11) NOT NULL,
  `type` enum('experience','formation') NOT NULL DEFAULT 'experience',
  `dates` varchar(45) NOT NULL,
  `intitule` varchar(100) NOT NULL,
  `localisation` varchar(100) NOT NULL,
  `description` text,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_experiences_formations`
--

INSERT INTO `t_experiences_formations` (`id_experience_formation`, `type`, `dates`, `intitule`, `localisation`, `description`, `utilisateur_id`) VALUES
(13, 'formation', 'F&eacute;vrier 2017 - Juin 2017', 'Formation techniques de d&eacute;veloppement et int&eacute;gration web', 'WebForce3 Pierrefitte-Sur-Seine', NULL, 1),
(17, 'experience', 'Janvier 2017', 'D&eacute;veloppeur / Int&eacute;grateur Web Junior', 'LePoleS Pierrefitte-Sur-Seine', '<p>- Langages web : HTML5 , CSS3, JavaScript, PHP7, Ajax<br />- Base de donn&eacute;es : MySql, Oracle<br />- Framework : Bootstrap, Jquery<br />- Wordpress, Gestion de projet Collaboratif, W3C<br />- Architecture MVC </p>', 1),
(18, 'experience', 'Mai 2016 - Janvier 2017', 'Agent d\'acceuil', 'Il&ocirc;t Chemin Vert Paris XI', '', 1),
(19, 'experience', '', 'Employe polyvalent', 'P&ocirc;le Emploi Aubervilliers', '<p>- M&eacute;diation num&eacute;rique</p>', 1),
(20, 'experience', 'Janvier 2012 - D&eacute;cembre 2016', 'Agent polyvalent', 'Wouri Production Paris X', '<p>- Bar<br />- Guichet<br />- Vestiaire<br />- Rangement</p>', 1),
(21, 'formation', 'Septembre 2014 - Juin 2015', 'Niveau bac S', '&Eacute;cole nationale physique chimie biologie', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_intertitres`
--

CREATE TABLE `t_intertitres` (
  `id_intertitre` int(11) NOT NULL,
  `intertitre_1` varchar(45) NOT NULL,
  `intertitre_2` varchar(45) NOT NULL,
  `intertitre_3` varchar(45) NOT NULL,
  `intertitre_4` varchar(45) NOT NULL,
  `intertitre_5` varchar(45) NOT NULL,
  `intertitre_6` varchar(45) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_loisirs`
--

CREATE TABLE `t_loisirs` (
  `id_loisir` int(11) NOT NULL,
  `intitule` varchar(45) NOT NULL,
  `loisir` varchar(150) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_loisirs`
--

INSERT INTO `t_loisirs` (`id_loisir`, `intitule`, `loisir`, `photo`, `utilisateur_id`) VALUES
(1, 'Serie TV ', 'Action, policier (Game of thrones, Walking dead, Sherlock, Limitless)', 'http://belleetcultivee.com/wp-content/uploads/2012/06/television.png', 1),
(2, 'JeuxVideo', 'MMORPG, FPS, Moba - &Eacute;change sur Discord', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Dualshock_4_Layout.svg/405px-Dualshock_4_Layout.svg.png', 1),
(4, 'Manga', 'Naruto, Bleach, One punch man, One piece, Hunnter x hunter', 'http://avesnes-natation.wifeo.com/images/livre-20d-20or.gif', 1),
(5, 'Informatique', 'Nouveaut&eacute; high teck, Application et mise &agrave; jour', 'http://www.xn--icne-wqa.com/images/icones/2/2/computer-3.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_realisations`
--

CREATE TABLE `t_realisations` (
  `id_realisation` int(11) NOT NULL,
  `titre_r` varchar(45) NOT NULL,
  `sous_titre_r` varchar(45) DEFAULT NULL,
  `dates_r` varchar(45) NOT NULL,
  `description_r` text NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_realisations`
--

INSERT INTO `t_realisations` (`id_realisation`, `titre_r`, `sous_titre_r`, `dates_r`, `description_r`, `utilisateur_id`) VALUES
(1, 'ok', 'ok', 'ok', 'ok', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_titres_cv`
--

CREATE TABLE `t_titres_cv` (
  `id_titre_cv` int(11) NOT NULL,
  `titre_cv` text NOT NULL,
  `accroche` text NOT NULL,
  `logo` varchar(25) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_titres_cv`
--

INSERT INTO `t_titres_cv` (`id_titre_cv`, `titre_cv`, `accroche`, `logo`, `utilisateur_id`) VALUES
(1, 'Recherche de stage', 'D&eacute;veloppeur full-stack Junior', 'ok', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateurs`
--

CREATE TABLE `t_utilisateurs` (
  `id_utilisateur` int(11) NOT NULL COMMENT 'identifiant utilisateur',
  `prenom` varchar(25) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mdp` varchar(13) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `age` smallint(5) NOT NULL,
  `date_naissance` date NOT NULL,
  `sexe` enum('Femme','Homme') NOT NULL,
  `etat_civil` enum('M.','Mme') NOT NULL,
  `statut_marital` varchar(13) NOT NULL,
  `adresse` text NOT NULL,
  `code_postal` varchar(5) NOT NULL,
  `ville` varchar(25) NOT NULL,
  `pays` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_utilisateurs`
--

INSERT INTO `t_utilisateurs` (`id_utilisateur`, `prenom`, `nom`, `email`, `telephone`, `mdp`, `pseudo`, `avatar`, `age`, `date_naissance`, `sexe`, `etat_civil`, `statut_marital`, `adresse`, `code_postal`, `ville`, `pays`) VALUES
(1, 'cedric', 'NJONANG', 'cedricnjonang@hotmail.fr', '0782917180', 'gargono2', 'haztek', 'Observatoire_Custom-bloc_440x320_shutterstock_195147365_Bloc[1].jpg', 22, '1994-10-04', 'Homme', 'M.', 'celibataire', '15 Chemin des haras', '95160', 'Montmorency', 'France');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `t_competences`
--
ALTER TABLE `t_competences`
  ADD PRIMARY KEY (`id_competence`);

--
-- Index pour la table `t_experiences_formations`
--
ALTER TABLE `t_experiences_formations`
  ADD PRIMARY KEY (`id_experience_formation`);

--
-- Index pour la table `t_intertitres`
--
ALTER TABLE `t_intertitres`
  ADD PRIMARY KEY (`id_intertitre`);

--
-- Index pour la table `t_loisirs`
--
ALTER TABLE `t_loisirs`
  ADD PRIMARY KEY (`id_loisir`);

--
-- Index pour la table `t_realisations`
--
ALTER TABLE `t_realisations`
  ADD PRIMARY KEY (`id_realisation`);

--
-- Index pour la table `t_titres_cv`
--
ALTER TABLE `t_titres_cv`
  ADD PRIMARY KEY (`id_titre_cv`);

--
-- Index pour la table `t_utilisateurs`
--
ALTER TABLE `t_utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `t_competences`
--
ALTER TABLE `t_competences`
  MODIFY `id_competence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `t_experiences_formations`
--
ALTER TABLE `t_experiences_formations`
  MODIFY `id_experience_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `t_intertitres`
--
ALTER TABLE `t_intertitres`
  MODIFY `id_intertitre` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_loisirs`
--
ALTER TABLE `t_loisirs`
  MODIFY `id_loisir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `t_realisations`
--
ALTER TABLE `t_realisations`
  MODIFY `id_realisation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t_titres_cv`
--
ALTER TABLE `t_titres_cv`
  MODIFY `id_titre_cv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t_utilisateurs`
--
ALTER TABLE `t_utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant utilisateur', AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
