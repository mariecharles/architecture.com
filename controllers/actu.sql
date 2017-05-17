-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mer 17 Mai 2017 à 11:24
-- Version du serveur :  5.6.34
-- Version de PHP :  7.1.0

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
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `actu`
--

INSERT INTO `actu` (`id`, `date`, `architecte`, `realisations`, `rubrique`, `lieu`, `departement`, `contenu`, `img`) VALUES
(48, '21/05/2009', 'ABH Architectes', 'Projet Astrale - Construction dun ensemble de bureaux au Plessis Robinson (92)', 'Tertiaire - Bureau', 'Plessis Robinson', 92, 'Situé au coeur de NOVEOS Parc d’Affaires Paris Sud Ouest, en plein essor.	\\r\\nL\'immeuble tertiaire \"Astrale\" permet de répondre aussi bien à un mono utilisateur qu’à un grand nombre de locataires.\\r\\nD’une capacité d\'accueil de 1 500 personnes, avec une surface de 25 000 m2 SHON et 56 000m2 SHOB, il intègre 760 places de parkings sur 2 niveaux de sous-sol et un restaurant 1000 couverts.\\r\\nLe parti d\'implantation est de créer un bâtiment urbain périmétrique permettant de dégager un parc végétal de la plus grande dimension possible en son centre.\\r\\nLe restaurant tout en courbe devient lui même une partie de ce jardin en s\'agrémentant d\'une terrasse végétalisée.\\r\\nL\'ensemble des bâtiments s\'articule autour de ce parc où plateaux, paliers, escaliers, rue intérieure et restaurant ont des vues.\\r\\n\\r\\n\\r\\nDeux halls principaux ponctuent l’édifice en marquant fortement la volumétrie de l’ensemble.\\r\\nAu Nord une faille entièrement vitrée accompagnée par un voile en béton blanc courbe offre une transparence entre l’avenue et le jardin intérieur.\\r\\nAu Sud, un totem vitré lumineux visible depuis l’A86 englobe les salles de réunion rouges afin de former un signal identitaire.\\r\\nL’organisation en plan résulte d’une recherche de confort et de flexibilité des plateaux de bureaux ainsi que d’une optimisation de l’éclairage naturel, y compris pour l’ensemble des circulations verticales et horizontales. \\r\\nLes systèmes environnementaux développés sont le traitement de toiture végétalisée avec récupération des eaux de pluies, \\r\\nla mise en place de pompes à chaleur individuelles réversibles raccordées sur une boucle thermodynamique,\\r\\nun système de gestion technique centralisé.', 'img-content/photoprincipale1.jpg'),
(51, '20/05/2009', 'ARSENAULT Eric', 'Internat du lycée agricole à Château Chinon (58)', 'Enseignement - Lycée', 'Chinon', 58, 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité.\\r\\nDifférentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé. \\r\\nA l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct.', 'img-content/photoprincipale3.jpg'),
(52, '20/05/2009', 'BIK Architecture', 'Aménagement du bowling Le colisée à Angers (49)', 'Espace de loisir', 'Angers', 49, 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité.\\r\\nDifférentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé. \\r\\nA l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct.\\r\\n', 'img-content/photoprincipale5.jpg'),
(53, '20/05/2009', 'DUCLOS Architectes Associés', 'Construction de la délégation régionale du CNFPT à Poitiers (86)', 'Tertiaire - Bureau', 'Poitiers', 86, 'Le bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité.\\r\\nDifférentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé. \\r\\nA l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct.\\r\\n', 'img-content/photoprincipale2.jpg'),
(56, '20/05/2009', 'MICHEL Jean-Louis', 'Construction du nouveau siège social de la C.A.F. du Gard (30)', 'Tertiaire - Bureau', 'Gard', 30, '\\r\\nLe bâtiment est régi par une courbe à double inflexion qui s’avance dans le paysage vers le Morvan avec une tisanerie suspendue dans le vide à son extrémité.\\r\\nDifférentes loggias ponctuent le bâtiment et offrent depuis l’intérieur autant de vues sur Château Chinon et la campagne environnante. Une logique de traitement de façade est développée en fonction du degré d’exposition aux intempéries : zinc, enduit, bois et verre sont répartis du plus exposé au mieux protégé. \\r\\nA l’intérieur, les chambres permettent à chaque élève l’appropriation d’un sous-espace distinct.\\r\\n', 'img-content/photoprincipale4.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;