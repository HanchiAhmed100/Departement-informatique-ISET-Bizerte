-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 17 jan. 2018 à 20:20
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dep_info`
--

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `userid`, `title`, `body`, `create_at`, `update_at`) VALUES
(10, 1, 'Google dev-fest iset', ' quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2018-01-14 22:07:55', '0000-00-00 00:00:00'),
(33, 1, 'DÃ©veloppement infomatique', 'Le problÃ¨me, c\'est que  contient quelque chose d\'inexploitable.  nous renvoie $reponse MySQL beaucoup d\'informations qu\'il faut organiser. Pour rÃ©cupÃ©rer une entrÃ©e, on prend la rÃ©ponse de  et on y exÃ©cute , ce qui nous MySQL fetch() renvoie la premiÃ¨re ligne.', '2018-01-16 15:52:40', '2018-01-16 15:35:05'),
(37, 1, 'Ahmed Hanchi dsi', 'ssssLorsque la connexion Ã  la base de donnÃ©es a rÃ©ussi, une instance de la classe  est retournÃ©e PDO', '2018-01-16 15:51:40', '2018-01-16 15:40:24'),
(41, 2, 'Generating Migrations laravel', 'The new migration will be placed in your database/migrations directory. Each migration file name contains a timestamp which allows Laravel to determine the order of the migrations.\n\nThe --table and --create options may also be used to indicate the name of the table and whether the migration will be creating a new table. These options simply pre-fill the generated migration stub file with the specified table:', '2018-01-17 16:47:30', '2018-01-17 16:47:30');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `motdepasse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `prenom`, `nom`, `mail`, `motdepasse`) VALUES
(1, 'hanchi', 'ahmed', 'hanchi.ahmed@yahoo.fr', 'caf37dbc55af686ab1cb72042af94f8b'),
(2, 'abbes', 'ines', 'ines.abbes@gmail.com', 'e1dbf51ccf436896826dac6c3db76fb7');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
