-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 07 nov. 2022 à 16:10
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `association`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nomA` varchar(50) NOT NULL,
  `prenomA` varchar(50) NOT NULL,
  `sexeA` varchar(25) NOT NULL,
  `adresseA` varchar(50) NOT NULL,
  `codePostalA` int(11) NOT NULL,
  `villeA` varchar(50) NOT NULL,
  `telA` int(11) NOT NULL,
  `mailA` varchar(50) NOT NULL,
  `passwordA` varchar(50) NOT NULL,
  `roleA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nomA`, `prenomA`, `sexeA`, `adresseA`, `codePostalA`, `villeA`, `telA`, `mailA`, `passwordA`, `roleA`) VALUES
(1, 'Haouili', 'yani', 'M', '10 rue christian mariey', 77500, 'chelles', 646181818, 'y.haouili@ecole-ipssi.net', '112001', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `surnomAnimal` varchar(50) NOT NULL,
  `especeAnimal` varchar(50) NOT NULL,
  `raceAnimal` varchar(50) NOT NULL,
  `ageAnimal` int(11) NOT NULL,
  `couleurAnimal` varchar(50) NOT NULL,
  `descriptionAnimal` varchar(255) NOT NULL,
  `imageAnimal` longblob NOT NULL,
  `dateArivee` date DEFAULT NULL,
  `statutAnimal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `animal`
--

INSERT INTO `animal` (`id`, `surnomAnimal`, `especeAnimal`, `raceAnimal`, `ageAnimal`, `couleurAnimal`, `descriptionAnimal`, `imageAnimal`, `dateArivee`, `statutAnimal`) VALUES
(11, 'test', 'test', 'test', 45, 'est', 'tesssst', '', NULL, NULL),
(12, 'test', 'test', 'test', 15, 'test', 'test', '', NULL, NULL),
(13, 'test', 'test', 'test', 15, 'test', 'test', '', NULL, NULL),
(14, 'test', 'test', 'test', 12, 'est', 'test', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `codePostal` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `montant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `donation`
--

INSERT INTO `donation` (`id`, `nom`, `prenom`, `adresse`, `codePostal`, `ville`, `tel`, `mail`, `montant`) VALUES
(14, 'az', 'aze', 'za', 77800, 'zaz', '2147483647', 'az@azea', 150),
(17, 'ets', 'test', 'test', 77500, 'yhuidok', '2147483647', 'yanihaouili1@gmail.com', 150),
(20, 'KIRAT', 'Denis', '5 rue des setiB', 91000, 'Ã‰vry-Courcouronnes', '1234567890123456', 'denis.kirat@gmail.com', 1000000),
(21, 'Haouili', 'Yani', '5 rue des snigaV', 123456, 'Sfuem', '1234567890123456', 'yani.ipssi@outlook.fr', 7000000),
(24, 'ZZZZ', 'ZZZZ', 'ZZZZ', 14615, 'ZZZZ', '1234567890123456', 'yani.ipssi@outlook.fr', 151),
(25, 'ZZZZ', 'ZZZZ', 'ZZZZ', 41515, 'ZZZZ', '1234567890123456', 'yani.ipssi@outlook.fr', 5515);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `libelleProduit` varchar(255) NOT NULL,
  `marqueProduit` varchar(50) NOT NULL,
  `quantiteProduit` int(11) NOT NULL,
  `descriptionProduit` varchar(255) NOT NULL,
  `prixProduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `libelleProduit`, `marqueProduit`, `quantiteProduit`, `descriptionProduit`, `prixProduit`) VALUES
(9, 'tesAAt', 'teAAst', 1200, 'tAAest', 10),
(11, 'test', 'test', 18165, 'test', 12540);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `codePostal` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `Tel` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `verifMail` tinyint(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `statut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `sexe`, `adresse`, `codePostal`, `ville`, `Tel`, `mail`, `verifMail`, `password`, `statut`) VALUES
(13, 'qefqfd', 'qefefe', 'F', ' F455FF', 77, 'FF', 606060606, 'dwvwc@dsvs', 0, '$2y$10$ehAXAqyicNDeV6s.A2/5q.aF5eY.TJpITulRbGbzlRy4NfoGcuDVC', 'user'),
(14, 'DDD', 'DDD', 'M', 'DDD', 12345, 'DDD', 606060606, 'dc@dsvs', 0, '$2y$10$Fcvtgu/QCdWDl//bBHT4NubI6NMZcq8Cg474Rdy2JL/Lye1ysKM4O', 'user'),
(21, 'DDD', 'DDD', 'M', 'DDD', 1234, 'DDD', 606060606, 'yani.ipssi@outlook.fr', 0, '$2y$10$f1IFYuyPplWyyXm8S7gTwOdOIBRp/e8UVidTXNVjKtt8tFp/FFrhu', 'user'),
(22, 'test', 'test', 'M', 'test', 75000, 'test', 646183355, 'yanihaouili1@gmail.com', 0, '$2y$10$vT7Udfm8vhfkeJIX7XLavunDoe7HEF2.Yy4pq075lUuLz9WkF8Kim', 'user'),
(23, 'test', 'test', 'M', 'azezr', 75000, 'test', 646183351, 'yanihaouili@gmail.com', 0, '$2y$10$z4tpqggnvbYJs7k8.a4/LeYxZyxHQtghYtniz0pnLMzaJy6/gtir6', 'user'),
(24, 'hayaiopia', 'yani', 'M', 'yaniioh', 77500, 'aiutzhp', 646183355, 'yani@gmail.com', 0, '$2y$10$oPvJDBTCJuiRtXvRmUecH.rNLXkMFHjqCD8/wBAyV615XpQOaJnV6', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
