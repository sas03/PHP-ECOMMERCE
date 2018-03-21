-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 21 mars 2018 à 21:42
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_article`, `titre`, `texte`, `id_utilisateur`) VALUES
(1, 'rtrt', 'trtrtt', 0),
(2, 'erer', 'rghhhh', 0),
(3, 'erer', 'rghhhh', 0),
(4, 'err', 'ggggg', 0),
(5, 'err', 'ggggg', 0),
(6, 'rrt', 'v    rt', 0),
(7, 'rrt', 'v    rt', 0),
(8, 'rtrt', 'rtrttt', 0),
(9, 'rtrt', 'rtrttt', 0),
(10, 'rtrt', 'rtrttt', 0),
(11, '', 'Hum', 0),
(12, '', 'Hum', 0);

-- --------------------------------------------------------

--
-- Structure de la table `confirmuser`
--

CREATE TABLE `confirmuser` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `confirmuser`
--

INSERT INTO `confirmuser` (`id_utilisateur`, `pseudo`, `email`, `password`) VALUES
(1, 'admin', 'admin@ynov.com', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad'),
(12, 'bla', 'bla@ynov.com', '617b1f64f84be99543237a49d9a73933e36cd609'),
(13, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `confirmuser1`
--

CREATE TABLE `confirmuser1` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `confirmuser1`
--

INSERT INTO `confirmuser1` (`id_utilisateur`, `pseudo`, `email`, `password`) VALUES
(13, 'magic', 'magic@ynov.com', 'bcc58a23322dee1ca50bbf3ecd2cd36952c4ab60'),
(13, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `img_id` int(11) NOT NULL,
  `img_nom` varchar(255) NOT NULL,
  `img_taille` varchar(255) NOT NULL,
  `img_type` varchar(255) NOT NULL,
  `img_desc` varchar(255) NOT NULL,
  `img_blob` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`img_id`, `img_nom`, `img_taille`, `img_type`, `img_desc`, `img_blob`) VALUES
(1, '', '', '', '', 0x4172726179);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilconfirm`
--

CREATE TABLE `utilconfirm` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilconfirm`
--

INSERT INTO `utilconfirm` (`id_utilisateur`, `pseudo`, `email`, `password`) VALUES
(0, 'admin', 'admin@ynov.com', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `pseudo`, `email`, `password`) VALUES
(1, 'pseudo', 'pseudo@ynov.com', '02ec78c4a411d7c8f9ed4a7502dbb4a0bb5ac3b4'),
(2, 'pseudo', 'pseudo@ynov.com', '02ec78c4a411d7c8f9ed4a7502dbb4a0bb5ac3b4'),
(3, 'pseudo1', 'pseudo1@ynov.com', 'c53c584a7c58a0229df55249304b52317ea99dba'),
(4, 'pseudo1', 'pseudo1@ynov.com', 'c53c584a7c58a0229df55249304b52317ea99dba'),
(5, 'pseudo2', 'pseudo2@ynov.com', '6eedc007d9c296fe9036b72ba2d1b76a3759ad59'),
(6, 'pseudo3', 'pseudo3@ynov.com', '7e7c3bfe3de21598de7951c6724f614f5b1ed079'),
(7, 'pseudo4', 'pseudo4@ynov.com', '17e1871f83eebefcf803dc07b1aaef250dad4b7c'),
(8, 'pseudo5', 'pseudo5@ynov.com', '19bac7905e7438389d32182cece918dcb9601855'),
(9, 'pseudo6', 'pseudo6@ynov.com', '1e89fd763fc5d773eebe0d684220483adae6fe9b'),
(10, 'blabla', 'blabla@ynov.com', 'f869fa1be10d3c964b8887dd83405407810317f4'),
(11, 'user', 'user@ynov.com', '60bddb16409a2baf76936619afecf778dabe68de');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `confirmuser`
--
ALTER TABLE `confirmuser`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `confirmuser`
--
ALTER TABLE `confirmuser`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
