-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 26 avr. 2022 à 15:55
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `store`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'lifestyle@gmail.com', 'e64b78fc3bc91bcbc7dc232ba8ec59e0'),
(20, 'charfahazem99@gmail.com', 'b34078ef2ac2729e9f52672c590c4ffc');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Iphone X', 1200),
(2, 'Iphone XS', 1400),
(3, 'Iphone 11', 1550),
(4, 'Iphone 11 Pro', 2150),
(5, 'Iphone 11 Pro Max', 2500),
(6, 'Iphone 12', 2800),
(7, 'Iphone 12 Pro', 3199),
(8, 'Iphone 12 Pro Max', 3600),
(9, 'Apple Watch SE', 950),
(10, 'Apple Watch Series 6', 1250),
(11, 'Apple Watch Series 4', 850),
(12, 'Apple Watch Series 3', 700),
(13, 'Apple AirPods 2', 550),
(14, 'Coque', 30),
(15, 'Protection Ecran', 20),
(16, 'Magsafe Charger', 150);

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`id`, `name`, `lname`, `email`, `number`, `address`, `city`, `country`) VALUES
(1, 'hazem', 'charfa', 'charfahazem99@gmail.com', '55877630', 'fouchena', 'Ben arous', 'tunisia'),
(2, 'hazem', 'charfa', 'charfahazem99@gmail.com', '55877630', 'fouchena', 'Ben arous', 'tunisia');

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`id`, `item_id`, `name`, `quantity`) VALUES
(1, 1, 'Iphone X', 15),
(2, 2, 'Iphone XS', 15),
(3, 3, 'Iphone 11', 13),
(4, 4, 'Iphone 11 Pro', 13),
(5, 5, 'Iphone 11 Pro Max', 10),
(6, 6, 'Iphone 12', 15),
(7, 7, 'Iphone 12 Pro', 15),
(8, 8, 'Iphone 12 Pro Max', 10),
(9, 9, 'Apple Watch SE', 10),
(10, 10, 'Apple Watch Series 6', 20),
(11, 11, 'Apple Watch Series 4', 14),
(12, 12, 'Apple Watch Series 3', 5),
(13, 13, 'Apple AirPods 2', 10),
(14, 14, 'Coque', 20),
(15, 15, 'Protection Ecran', 20),
(16, 16, 'Magsafe Charger', 15);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(8, 'Hazem Charfa', 'charfahazem99@gmail.com', 'b34078ef2ac2729e9f52672c590c4ffc', '55877630', 'Ben Arous', '9rue ibn tachfin, cite el amal 2, fouchena'),
(9, 'Hazem Charfa', 'charfahazem199@gmail.com', 'b34078ef2ac2729e9f52672c590c4ffc', '55877631', 'Ben Arous', '9rue ibn tachfin, cite el amal 2, fouchena');

-- --------------------------------------------------------

--
-- Structure de la table `user_item`
--

CREATE TABLE `user_item` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed','','') NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_item`
--

INSERT INTO `user_item` (`id`, `user_id`, `item_id`, `status`, `date_time`) VALUES
(14, 8, 7, 'Confirmed', '2022-04-25 15:04:51'),
(15, 8, 3, 'Confirmed', '2022-04-25 15:07:07'),
(17, 8, 2, 'Confirmed', '2022-04-25 16:24:58'),
(20, 9, 3, 'Confirmed', '2022-04-25 17:59:38'),
(21, 8, 16, 'Confirmed', '2022-04-26 13:31:08'),
(22, 8, 15, 'Confirmed', '2022-04-26 13:31:12'),
(23, 8, 14, 'Confirmed', '2022-04-26 13:31:15'),
(24, 8, 1, 'Confirmed', '2022-04-26 14:50:03');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_item`
--
ALTER TABLE `user_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user_item`
--
ALTER TABLE `user_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
