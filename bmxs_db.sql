-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 20 Février 2017 à 18:17
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bmxs_00.1`
--

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(150) NOT NULL,
  `link` varchar(45) NOT NULL,
  `slug` varchar(45) NOT NULL,
  `view` tinyint(1) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `link`, `slug`, `view`, `content`) VALUES
(1, 'Accueil', 'Page d\'accueil', 'Accueil', 'home', 1, 'Content Home'),
(2, 'Evénements', 'Liste des événements', 'Evénements', 'events', 1, 'Content Events'),
(3, 'A Propos', 'Causons de nous', 'A Propos', 'about', 1, 'Content About'),
(4, 'Admin', 'Administration du site', 'Admin', 'admin', 0, 'Content Admin');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `niveau` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idusers`, `name`, `pass`, `niveau`) VALUES
(1, 'admin', '$2y$10$IAh3P5EHMpUv0mQUuU5W6.f81.IgVwxgHIm9HAzd3Y/0QRi1zajfG', 2),
(2, 'superAdmin', '$2y$10$iuTbSefL1BvQZS/MmCHUG.9TqD7clfSLef1NdPjfSxQAQfU82zFkS', 1),
(3, 'moderateur', '$2y$10$0tJakvEo4nCfKtOYNAuqEuOZ9zcEUy89RJiEfUAEpdF1vXjxHDXiK', 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
