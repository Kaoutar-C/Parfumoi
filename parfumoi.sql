-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 24 juin 2026 à 13:56
-- Version du serveur : 8.0.44
-- Version de PHP : 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `parfumoi`
--

-- --------------------------------------------------------

--
-- Structure de la table `brands`
--

CREATE TABLE `brands` (
  `id` int NOT NULL,
  `slug` varchar(200) NOT NULL,
  `label` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `brands`
--

INSERT INTO `brands` (`id`, `slug`, `label`) VALUES
(2, 'affinessence', 'Affinessence'),
(3, 'amouage', 'Amouage'),
(4, 'annayake', 'Annayake'),
(5, 'armani', 'Armani'),
(6, 'atelier-cologne', 'Atelier Cologne'),
(7, 'azzaro', 'Azzaro'),
(8, 'balenciaga', 'Balenciaga'),
(9, 'balmain', 'Balmain'),
(10, 'barbewin', 'Barbewin'),
(11, 'bdk-parfums', 'Bdk Parfums'),
(12, 'berdoues', 'Berdoues'),
(13, 'biotherm', 'Biotherm'),
(14, 'biotherm-homme', 'Biotherm Homme'),
(15, 'boucheron', 'Boucheron'),
(16, 'brioni', 'Brioni'),
(17, 'burberry', 'Burberry'),
(18, 'by-kilian', 'By Kilian'),
(19, 'byredo', 'Byredo'),
(20, 'cacharel', 'Cacharel'),
(21, 'calvin-klein', 'Calvin Klein'),
(22, 'carolina-herrera', 'Carolina Herrera'),
(23, 'caron', 'Caron'),
(24, 'cartier', 'Cartier'),
(25, 'cerruti', 'Cerruti'),
(26, 'chanel', 'Chanel'),
(27, 'chantal-thomass', 'Chantal Thomass'),
(28, 'chloe', 'Chloé'),
(29, 'clarins', 'Clarins'),
(30, 'clarins-men', 'ClarinsMen'),
(31, 'clinique', 'Clinique'),
(32, 'coach', 'Coach'),
(33, 'courreges', 'Courrèges'),
(34, 'davidoff', 'Davidoff'),
(35, 'decleor', 'Decléor'),
(36, 'diesel', 'Diesel'),
(37, 'dior', 'Dior'),
(38, 'diptyque', 'Diptyque'),
(39, 'dolce-gabbana', 'Dolce & Gabbana'),
(40, 'elie-saab', 'Elie Saab'),
(41, 'emanuel-ungaro', 'Emanuel Ungaro'),
(42, 'escada', 'Escada'),
(43, 'etat-libre-d-orange', 'Etat Libre d\'Orange'),
(44, 'ex-nihilo', 'Ex Nihilo'),
(45, 'filorga', 'Filorga'),
(46, 'frederic-malle', 'Frederic Malle'),
(47, 'geoffrey-beene', 'Geoffrey Beene'),
(48, 'giorgio-beverly-hills', 'Giorgio Beverly Hills'),
(49, 'givenchy', 'Givenchy'),
(50, 'gres', 'Grès'),
(51, 'gucci', 'Gucci'),
(52, 'guerlain', 'Guerlain'),
(53, 'guess', 'Guess'),
(54, 'guy-laroche', 'Guy Laroche'),
(55, 'hair-rituel-by-sisley', 'Hair Rituel By Sisley'),
(56, 'hanae-mori', 'Hanae Mori'),
(57, 'hermes', 'Hermès'),
(58, 'herome', 'Hérôme'),
(59, 'hugo-boss', 'Hugo Boss'),
(60, 'ikks', 'IKKS'),
(61, 'initio-parfums-prives', 'Initio Parfums Privés'),
(62, 'issey-miyake', 'Issey Miyake'),
(63, 'jacomo', 'Jacomo'),
(64, 'jean-couturier', 'Jean Couturier'),
(65, 'jean-patou', 'Jean Patou'),
(66, 'jean-paul-gaultier', 'Jean Paul Gaultier'),
(67, 'juliette-has-a-gun', 'Juliette Has a Gun'),
(68, 'kenzo', 'Kenzo'),
(69, 'kilian-paris', 'Kilian Paris'),
(70, 'l-artisan-parfumeur', 'L\'Artisan Parfumeur'),
(71, 'laboratorio-olfattivo', 'Laboratorio Olfattivo'),
(72, 'lacoste', 'Lacoste'),
(73, 'lalique', 'Lalique'),
(74, 'lancaster', 'Lancaster'),
(75, 'lancome', 'Lancôme'),
(76, 'lanvin', 'Lanvin'),
(77, 'le-labo', 'Le Labo'),
(78, 'lolita-lempicka', 'Lolita Lempicka'),
(79, 'maison-crivelli', 'Maison Crivelli'),
(80, 'maison-francis-kurkdjian', 'Maison Francis Kurkdjian'),
(81, 'maison-margiela', 'Maison Margiela'),
(82, 'mancera', 'Mancera'),
(83, 'marc-jacobs', 'Marc Jacobs'),
(84, 'memo-paris', 'Memo Paris'),
(85, 'michael-kors', 'Michael Kors'),
(86, 'molinard', 'Molinard'),
(87, 'molyneux', 'Molyneux'),
(88, 'moncler', 'Moncler'),
(89, 'montale', 'Montale'),
(90, 'montana', 'Montana'),
(91, 'montblanc', 'Montblanc'),
(92, 'mugler', 'Mugler'),
(93, 'narciso-rodriguez', 'Narciso Rodriguez'),
(94, 'nasomatto', 'Nasomatto'),
(95, 'nina-ricci', 'Nina Ricci'),
(96, 'nishane', 'Nishane'),
(97, 'orto-parisi', 'Orto Parisi'),
(98, 'paloma-picasso', 'Paloma Picasso'),
(99, 'parfum-d-empire', 'Parfum d\'Empire'),
(100, 'parfums-de-marly', 'Parfums de Marly'),
(101, 'penhaligons', 'Penhaligon\'s'),
(102, 'police', 'Police'),
(103, 'prada', 'Prada'),
(104, 'rabanne', 'Rabanne'),
(105, 'ralph-lauren', 'Ralph Lauren'),
(106, 'reminiscence', 'Reminiscence'),
(107, 'repetto', 'Repetto'),
(108, 'rochas', 'Rochas'),
(109, 'scherrer', 'Scherrer'),
(110, 'serge-lutens', 'Serge Lutens'),
(111, 'shiseido', 'Shiseido'),
(112, 'sisley', 'Sisley'),
(113, 'storie-veneziane', 'Storie Veneziane'),
(114, 'tabac-original', 'Tabac Original'),
(115, 'tartine-et-chocolat', 'Tartine et Chocolat'),
(116, 'the-different-company', 'The Different Company'),
(117, 'tom-ford', 'Tom Ford'),
(118, 'valentino', 'Valentino'),
(119, 'valmont', 'Valmont'),
(120, 'van-cleef-arpels', 'Van Cleef & Arpels'),
(121, 'versace', 'Versace'),
(122, 'viktor-rolf', 'Viktor & Rolf'),
(123, 'xerjoff', 'Xerjoff'),
(124, 'yves-saint-laurent', 'Yves Saint Laurent'),
(125, 'zadig-voltaire', 'Zadig & Voltaire'),
(133, 'akro', 'Akro'),
(134, 'gritti', 'Gritti'),
(135, 'kajal', 'Kajal'),
(136, 'kayali', 'Kayali'),
(137, 'bon-parfumeur', 'Bon Parfumeur'),
(138, 'matiere-premiere', 'Matière Première'),
(338, 'vilhelm-parfumerie', 'Vilhelm Parfumerie'),
(339, 'sweet-anthem', 'Sweet Anthem'),
(340, 'experimentum-crucis', 'Experimentum Crucis'),
(341, 'd-s-durga', 'D.S. & Durga'),
(342, 'zoologist', 'Zoologist'),
(343, 'black-phoenix-alchemy', 'Black Phoenix Alchemy Lab'),
(344, 'andrea-maack', 'Andrea Maack'),
(345, 'roja-parfums', 'Roja Parfums'),
(346, 'clive-christian', 'Clive Christian'),
(347, 'creed', 'Creed'),
(348, 'tauer-perfumes', 'Tauer Perfumes'),
(349, 'comme-des-garcons', 'Comme des Garçons'),
(350, 'ann-gerard', 'Ann Gérard'),
(351, 'jovoy', 'Jovoy'),
(352, 'nicolai', 'Nicolaï'),
(353, 'histoires-de-parfums', 'Histoires de Parfums'),
(354, 'lubin', 'Lubin'),
(355, 'guerlain-les-legendes', 'Guerlain Les Légendes'),
(356, 'robert-piguet', 'Robert Piguet'),
(357, 'annick-goutal', 'Annick Goutal'),
(358, 'louis-vuitton', 'Louis Vuitton'),
(359, 'Maison Matine', 'Maison Matine');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `slug`, `label`) VALUES
(1, 'femme', 'femme'),
(6, 'homme', 'homme'),
(7, 'unisex', 'unisex'),
(8, 'enfant', 'enfant');

-- --------------------------------------------------------

--
-- Structure de la table `collection`
--

CREATE TABLE `collection` (
  `id` int UNSIGNED NOT NULL,
  `creator_id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `collection`
--

INSERT INTO `collection` (`id`, `creator_id`, `name`) VALUES
(1, 17, 'favoris'),
(2, 18, 'favoris'),
(3, 22, 'favoris');

-- --------------------------------------------------------

--
-- Structure de la table `collection_item`
--

CREATE TABLE `collection_item` (
  `collection_id` int UNSIGNED NOT NULL,
  `item_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `collection_item`
--

INSERT INTO `collection_item` (`collection_id`, `item_id`) VALUES
(2, 19),
(3, 20);

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE `item` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `operator_id` int UNSIGNED NOT NULL,
  `short_description` text,
  `batch_code` varchar(20) NOT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'draft',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `theme_id` int UNSIGNED NOT NULL,
  `brands_id` int NOT NULL,
  `item_condition` enum('neuf','utilise','comme_neuf') NOT NULL,
  `quantity` int NOT NULL,
  `quantity_left` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id`, `slug`, `label`, `price`, `operator_id`, `short_description`, `batch_code`, `main_image`, `status`, `is_active`, `created_at`, `updated_at`, `category_id`, `theme_id`, `brands_id`, `item_condition`, `quantity`, `quantity_left`) VALUES
(19, 'sun-song', 'SUN SONG', 250.00, 18, 'parfum d\'été', 'KAJ2023H', 'sun-song.jpeg', 'deleted', 1, '2026-06-24 06:27:27', '2026-06-24 07:22:56', 8, 4, 358, 'neuf', 15, 1),
(20, 'soleil-blanc', 'soleil blanc', 250.00, 18, 'parfum parfait pour l\'éte', 'C55/25147', 'soleil-blanc.jpeg', 'published', 1, '2026-06-24 09:44:30', '2026-06-24 09:44:30', 7, 5, 117, 'utilise', 100, 5),
(21, 'soleil-blanc', 'soleil blanc', 250.00, 18, 'parfum florale ', 'C55/25147', 'soleil-blanc.jpeg', 'deleted', 1, '2026-06-24 13:15:03', '2026-06-24 13:15:03', 7, 5, 117, 'utilise', 100, 5),
(22, 'sun-song', 'SUN SONG', 270.00, 23, 'parfum parfait pour l\'été', 'KAJ2023B', 'sun-song.jpeg', 'published', 1, '2026-06-24 14:33:49', '2026-06-24 15:22:55', 7, 5, 358, 'neuf', 200, 5);

-- --------------------------------------------------------

--
-- Structure de la table `operator`
--

CREATE TABLE `operator` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `role` varchar(20) NOT NULL DEFAULT 'user',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `operator`
--

INSERT INTO `operator` (`id`, `email`, `firstname`, `lastname`, `avatar`, `created_at`, `password`, `last_login`, `is_active`, `role`, `is_admin`) VALUES
(17, 'omar@outlook.be', 'omar', 'akhazzan', 'homme.png', '2026-06-12 12:45:20', '$2y$10$ElnnQWYMNNT3Bd6x2M3M8unu2nf97im5cdPo.cmKmPR7RrIv5PkIu', NULL, 1, 'user', 0),
(18, 'kaoutar@gmail.com', 'Kaoutar', 'Chentouf', 'chat.png', '2026-06-12 23:23:03', '$2y$10$1TVxsnsQe3D1voAvLkMRSuTUQa4lTpHfLgzhmsBzMCyF44kSP5gjG', NULL, 1, 'user', 1),
(20, 'wiam@outlook.be', 'Wiam', 'Wissam', 'femme.jpeg', '2026-06-22 22:37:44', '$2y$10$J7.uyvHhtotwamVTSYYd1uR68.ro91s4A0lnl3taSWOwehBflFga6', NULL, 1, 'user', 0),
(23, 'anouar@gmail.be', 'anouar', 'pioud', 'homme.png', '2026-06-24 14:30:08', '$2y$10$KXt7PLo4uzWdfpOuKLvc/egy/ddYKjmk6Xix1OD6GV2O1LIKGXA8S', NULL, 1, 'user', 0);

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tag`
--

INSERT INTO `tag` (`id`, `slug`, `label`) VALUES
(1, 'floral', 'floral'),
(2, 'ambree', 'ambrée'),
(3, 'boisee', 'boisée'),
(4, 'fruite', 'fruité'),
(5, 'gourmand', 'gourmand'),
(6, 'hesperide', 'hespéridé'),
(7, 'aquatique', 'aquatique'),
(8, 'aromatique', 'aromatique'),
(9, 'chypre', 'chypré'),
(10, 'fougere', 'fougère'),
(11, 'vanille', 'vanille');

-- --------------------------------------------------------

--
-- Structure de la table `taguer`
--

CREATE TABLE `taguer` (
  `item_id` int UNSIGNED NOT NULL,
  `tag_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `taguer`
--

INSERT INTO `taguer` (`item_id`, `tag_id`) VALUES
(11, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1);

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE `theme` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `theme`
--

INSERT INTO `theme` (`id`, `slug`, `label`) VALUES
(1, 'quotidien', 'quotidien'),
(2, 'soiree', 'soirée'),
(3, 'travail', 'travail'),
(4, 'date', 'date romantique'),
(5, 'ete', 'été'),
(6, 'hiver', 'hiver'),
(7, 'sport', 'sport'),
(8, 'voyage', 'voyage'),
(9, 'plage', 'plage');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Index pour la table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `collection_item`
--
ALTER TABLE `collection_item`
  ADD PRIMARY KEY (`collection_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Index pour la table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `operator_id` (`operator_id`),
  ADD KEY `fk_item_category` (`category_id`),
  ADD KEY `fk_item_theme` (`theme_id`);

--
-- Index pour la table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Index pour la table `taguer`
--
ALTER TABLE `taguer`
  ADD PRIMARY KEY (`item_id`,`tag_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Index pour la table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=360;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `item`
--
ALTER TABLE `item`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `operator`
--
ALTER TABLE `operator`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `collection_item`
--
ALTER TABLE `collection_item`
  ADD CONSTRAINT `collection_item_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_item_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `fk_item_theme` FOREIGN KEY (`theme_id`) REFERENCES `tag` (`id`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`operator_id`) REFERENCES `operator` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `taguer`
--
ALTER TABLE `taguer`
  ADD CONSTRAINT `taguer_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
