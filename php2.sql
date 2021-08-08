-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 08 août 2021 à 18:14
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php2`
--

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `floor` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `price` int(11) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rooms`
--

INSERT INTO `rooms` (`id`, `room_no`, `floor`, `image`, `detail`, `price`, `updated_at`, `created_at`) VALUES
(1, '1101', 11, 'public/uploads/610f0665f0005-Thiết kế không tênokok - Copy.png', 'okokokokok\r\n', 1000, '2021-08-15', '2021-08-08'),
(2, '22222', 22222, 'public/uploads/610fbcbb5657a-ccc42d385d74aa2af365.jpg', '22222', 22, '2021-08-08', '2021-08-08'),
(53, '', 0, '', '', 0, '0000-00-00', '0000-00-00'),
(56, '', 0, '', '', 0, '2021-08-08', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `room_services`
--

CREATE TABLE `room_services` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `additional_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `room_services`
--

INSERT INTO `room_services` (`id`, `room_id`, `service_id`, `additional_price`) VALUES
(1, 1, 1, 0),
(2, 2, 2, 0),
(3, 1, 2, 0),
(4, 1, 4, 0),
(5, 2, 4, 0);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `name`, `icon`) VALUES
(1, 'tẩm quất', '0'),
(2, 'mát xa', '0'),
(4, 'đặc biệt', '0'),
(5, 'quét rọn', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `room_services`
--
ALTER TABLE `room_services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `room_services`
--
ALTER TABLE `room_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
