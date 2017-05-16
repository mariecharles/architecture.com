-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Mer 17 Mai 2017 à 01:54
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `architecture`
--

-- --------------------------------------------------------

--
-- Structure de la table `actu`
--

CREATE TABLE `actu` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `architecte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realisations` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rubrique` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` int(11) NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `actu`
--

INSERT INTO `actu` (`id`, `date`, `architecte`, `realisations`, `rubrique`, `lieu`, `departement`, `contenu`) VALUES
(1, '21 mai 2009  ', 'ABH Architectes', 'Projet Astrale - Construction d''un ensemble de bureaux au Plessis Robinson (92)   ', 'Tertiaire - Bureau', 'Plessis Robinson  ', 92, 'Situé au coeur de NOVEOS Parc d’Affaires Paris Sud Ouest, en plein essor.<br/>  \r\nL''immeuble tertiaire "Astrale" permet de répondre aussi bien à un mono utilisateur qu’à un grand nombre de locataires.<br/>\r\nD’une capacité d''accueil de 1 500 personnes, avec une surface de 25 000 m2 SHON et 56 000m2 SHOB, il intègre 760 places de parkings sur 2 niveaux de sous-sol et un restaurant 1000 couverts.\r\nLe parti d''implantation est de créer un bâtiment urbain périmétrique permettant de dégager un parc végétal de la plus grande dimension possible en son centre.\r\nLe restaurant tout en courbe devient lui même une partie de ce jardin en s''agrémentant d''une terrasse végétalisée.\r\nL''ensemble des bâtiments s''articule autour de ce parc où plateaux, paliers, escaliers, rue intérieure et restaurant ont des vues.<br/><br/>\r\nDeux halls principaux ponctuent l’édifice en marquant fortement la volumétrie de l’ensemble.<br/>\r\nAu Nord une faille entièrement vitrée accompagnée par un voile en béton blanc courbe offre une transparence entre l’avenue et le jardin intérieur.<br/>\r\nAu Sud, un totem vitré lumineux visible depuis l’A86 englobe les salles de réunion rouges afin de former un signal identitaire.<br/>\r\nL’organisation en plan résulte d’une recherche de confort et de flexibilité des plateaux de bureaux ainsi que d’une optimisation de l’éclairage naturel, y compris pour l’ensemble des circulations verticales et horizontales.<br/> \r\nLes systèmes environnementaux développés sont le traitement de toiture végétalisée avec récupération des eaux de pluies, la mise en place de pompes à chaleur individuelles réversibles raccordées sur une boucle thermodynamique,\r\nun système de gestion technique centralisé.'),
(2, '', 'yolo', 'fefe', 'hfsss', 'algeee', 0, ''),
(3, '', 'yolo', 'fefe', 'hfsss', 'algeee', 0, ''),
(4, '', 'yolo', 'fefe', 'hfsss', 'algeee', 0, ''),
(13, '', 'yolo', 'fefe', 'hfsss', 'algeee', 0, ''),
(18, '', 'yolo', 'fefe', 'hfsss', 'algeee', 0, '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actu`
--
ALTER TABLE `actu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actu`
--
ALTER TABLE `actu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;