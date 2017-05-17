-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Mer 17 Mai 2017 à 11:26
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `architecture`
--

-- --------------------------------------------------------

--
-- Structure de la table `formulaire_client`
--

CREATE TABLE `formulaire_client` (
  `id` int(11) NOT NULL,
  `raisonsociale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codepostal` int(20) NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` int(30) NOT NULL,
  `fax` int(255) NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zonegeographique` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choixrevue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `formulaire_client`
--

INSERT INTO `formulaire_client` (`id`, `raisonsociale`, `fonction`, `activite`, `nom`, `adresse`, `codepostal`, `pays`, `telephone`, `fax`, `mail`, `zonegeographique`, `choixrevue`) VALUES
(1, 'ezkjfhkq', 'kqbfcjq', 'nksdnjv', 'kjkljsdf', 'kqjehfkdsn', 13090, 'kusgekf', 655556677, 655556677, 'le@gmail.com', 'zone3', 'revue3'),
(2, 'ezkjfhkq', 'kqbfcjq', 'nksdnjv', 'kjkljsdf', 'kqjehfkdsn', 13090, 'kusgekf', 655556677, 655556677, 'le@gmail.com', 'zone3', 'revue3');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `formulaire_client`
--
ALTER TABLE `formulaire_client`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `formulaire_client`
--
ALTER TABLE `formulaire_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;