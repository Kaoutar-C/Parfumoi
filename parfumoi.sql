-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 10 avr. 2026 à 14:17
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
(97, '4711', '4711'),
(98, 'annayake', 'Annayake'),
(99, 'armani', 'Armani'),
(100, 'azzaro', 'Azzaro'),
(101, 'balenciaga', 'Balenciaga'),
(102, 'balmain', 'Balmain'),
(103, 'barbewin', 'Barbewin'),
(104, 'berdoues', 'Berdoues'),
(105, 'biotherm', 'Biotherm'),
(106, 'biotherm-homme', 'Biotherm Homme'),
(107, 'boucheron', 'Boucheron'),
(108, 'brioni', 'Brioni'),
(109, 'burberry', 'Burberry'),
(110, 'cacharel', 'Cacharel'),
(111, 'calvin-klein', 'Calvin Klein'),
(112, 'carolina-herrera', 'Carolina Herrera'),
(113, 'caron', 'Caron'),
(114, 'cartier', 'Cartier'),
(115, 'cerruti', 'Cerruti'),
(116, 'chanel', 'Chanel'),
(117, 'chantal-thomass', 'Chantal Thomass'),
(118, 'chloe', 'Chloé'),
(119, 'clarins', 'Clarins'),
(120, 'clarins-men', 'ClarinsMen'),
(121, 'clinique', 'Clinique'),
(122, 'coach', 'Coach'),
(123, 'courreges', 'Courrèges'),
(124, 'davidoff', 'Davidoff'),
(125, 'decleor', 'Decléor'),
(126, 'diesel', 'Diesel'),
(127, 'dior', 'Dior'),
(128, 'dolce-gabbana', 'Dolce & Gabbana'),
(129, 'elie-saab', 'Elie Saab'),
(130, 'emanuel-ungaro', 'Emanuel Ungaro'),
(131, 'escada', 'Escada'),
(132, 'filorga', 'Filorga'),
(133, 'geoffrey-beene', 'Geoffrey Beene'),
(134, 'giorgio-beverly-hills', 'Giorgio Beverly Hills'),
(135, 'givenchy', 'Givenchy'),
(136, 'gres', 'Grès'),
(137, 'gucci', 'Gucci'),
(138, 'guerlain', 'Guerlain'),
(139, 'guess', 'Guess'),
(140, 'guy-laroche', 'Guy Laroche'),
(141, 'hair-rituel-by-sisley', 'Hair Rituel By Sisley'),
(142, 'hanae-mori', 'Hanae Mori'),
(143, 'hermes', 'Hermès'),
(144, 'herome', 'Hérôme'),
(145, 'hugo-boss', 'Hugo Boss'),
(146, 'ikks', 'IKKS'),
(147, 'issey-miyake', 'Issey Miyake'),
(148, 'jacomo', 'Jacomo'),
(149, 'jean-couturier', 'Jean Couturier'),
(150, 'jean-patou', 'Jean Patou'),
(151, 'jean-paul-gaultier', 'Jean Paul Gaultier'),
(152, 'kenzo', 'Kenzo'),
(153, 'lacoste', 'Lacoste'),
(154, 'lalique', 'Lalique'),
(155, 'lancaster', 'Lancaster'),
(156, 'lancome', 'Lancôme'),
(157, 'lanvin', 'Lanvin'),
(158, 'lolita-lempicka', 'Lolita Lempicka'),
(159, 'marc-jacobs', 'Marc Jacobs'),
(160, 'michael-kors', 'Michael Kors'),
(161, 'molinard', 'Molinard'),
(162, 'molyneux', 'Molyneux'),
(163, 'moncler', 'Moncler'),
(164, 'montana', 'Montana'),
(165, 'montblanc', 'Montblanc'),
(166, 'mugler', 'Mugler'),
(167, 'narciso-rodriguez', 'Narciso Rodriguez'),
(168, 'nina-ricci', 'Nina Ricci'),
(169, 'paloma-picasso', 'Paloma Picasso'),
(170, 'parfum-d-empire', 'Parfum d\'Empire'),
(171, 'police', 'Police'),
(172, 'prada', 'Prada'),
(173, 'rabanne', 'Rabanne'),
(174, 'ralph-lauren', 'Ralph Lauren'),
(175, 'reminiscence', 'Reminiscence'),
(176, 'repetto', 'Repetto'),
(177, 'rochas', 'Rochas'),
(178, 'scherrer', 'Scherrer'),
(179, 'serge-lutens', 'Serge Lutens'),
(180, 'shiseido', 'Shiseido'),
(181, 'sisley', 'Sisley'),
(182, 'storie-veneziane', 'Storie Veneziane'),
(183, 'tabac-original', 'Tabac Original'),
(184, 'tartine-et-chocolat', 'Tartine et Chocolat'),
(185, 'tom-ford', 'Tom Ford'),
(186, 'valentino', 'Valentino'),
(187, 'valmont', 'Valmont'),
(188, 'van-cleef-arpels', 'Van Cleef & Arpels'),
(189, 'versace', 'Versace'),
(190, 'viktor-rolf', 'Viktor & Rolf'),
(191, 'yves-saint-laurent', 'Yves Saint Laurent'),
(192, 'zadig-voltaire', 'Zadig & Voltaire'),
(223, 'byredo', 'Byredo'),
(224, 'initio-parfums-prives', 'Initio Parfums Privés'),
(225, 'maison-crivelli', 'Maison Crivelli'),
(226, 'maison-francis-kurkdjian', 'Maison Francis Kurkdjian'),
(227, 'parfums-de-marly', 'Parfums de Marly'),
(228, 'kilian-paris', 'Kilian Paris'),
(229, 'ex-nihilo', 'Ex Nihilo'),
(230, 'memo-paris', 'Memo Paris'),
(231, 'diptyque', 'Diptyque'),
(232, 'le-labo', 'Le Labo'),
(233, 'juliette-has-a-gun', 'Juliette Has a Gun'),
(234, 'frederic-malle', 'Frederic Malle'),
(235, 'amouage', 'Amouage'),
(236, 'xerjoff', 'Xerjoff'),
(237, 'nishane', 'Nishane'),
(238, 'mancera', 'Mancera'),
(239, 'montale', 'Montale'),
(240, 'atelier-cologne', 'Atelier Cologne'),
(241, 'by-kilian', 'By Kilian'),
(242, 'orto-parisi', 'Orto Parisi'),
(243, 'nasomatto', 'Nasomatto'),
(244, 'maison-margiela', 'Maison Margiela'),
(245, 'etat-libre-d-orange', 'Etat Libre d\'Orange'),
(246, 'penhaligons', 'Penhaligon\'s'),
(247, 'l-artisan-parfumeur', 'L\'Artisan Parfumeur'),
(248, 'the-different-company', 'The Different Company'),
(249, 'bdk-parfums', 'Bdk Parfums'),
(250, 'laboratorio-olfattivo', 'Laboratorio Olfattivo'),
(251, 'affinessence', 'Affinessence');

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

-- --------------------------------------------------------

--
-- Structure de la table `collection_item`
--

CREATE TABLE `collection_item` (
  `collection_id` int UNSIGNED NOT NULL,
  `item_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE `item` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `short_description` text,
  `content` longtext,
  `main_image` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'draft',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `theme_id` int UNSIGNED NOT NULL,
  `marque_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `status` varchar(20) DEFAULT 'new',
  `assigned_to` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `slug`, `label`) VALUES
(14, 'vanille', 'Vanille'),
(15, 'ambre', 'Ambre'),
(16, 'musc', 'Musc'),
(17, 'oud', 'Oud'),
(18, 'rose', 'Rose'),
(19, 'jasmin', 'Jasmin'),
(20, 'patchouli', 'Patchouli'),
(21, 'cuir', 'Cuir'),
(22, 'tabac', 'Tabac'),
(23, 'bergamote', 'Bergamote'),
(24, 'citron', 'Citron'),
(25, 'orange', 'Orange'),
(26, 'mandarine', 'Mandarine'),
(27, 'pamplemousse', 'Pamplemousse'),
(28, 'neroli', 'Néroli'),
(29, 'fleur-d-oranger', 'Fleur d\'oranger'),
(30, 'lavande', 'Lavande'),
(31, 'vetiver', 'Vétiver'),
(32, 'santal', 'Santal'),
(33, 'cedre', 'Cèdre'),
(34, 'bois-de-gaiac', 'Bois de gaïac'),
(35, 'bois-de-cachemire', 'Bois de cachemire'),
(36, 'iris', 'Iris'),
(37, 'violette', 'Violette'),
(38, 'tubereuse', 'Tubéreuse'),
(39, 'ylang-ylang', 'Ylang-Ylang'),
(40, 'gardenia', 'Gardénia'),
(41, 'figue', 'Figue'),
(42, 'noix-de-coco', 'Noix de coco'),
(43, 'pomme', 'Pomme'),
(44, 'poire', 'Poire'),
(45, 'peche', 'Pêche'),
(46, 'fraise', 'Fraise'),
(47, 'framboise', 'Framboise'),
(48, 'cassis', 'Cassis'),
(49, 'prune', 'Prune'),
(50, 'ananas', 'Ananas'),
(51, 'litchi', 'Litchi'),
(52, 'cerise', 'Cerise'),
(53, 'amande', 'Amande'),
(54, 'pistache', 'Pistache'),
(55, 'caramel', 'Caramel'),
(56, 'praline', 'Praliné'),
(57, 'miel', 'Miel'),
(58, 'chocolat', 'Chocolat'),
(59, 'cafe', 'Café'),
(60, 'tonka', 'Tonka'),
(61, 'cannelle', 'Cannelle'),
(62, 'cardamome', 'Cardamome'),
(63, 'poivre', 'Poivre'),
(64, 'safran', 'Safran'),
(65, 'gingembre', 'Gingembre'),
(66, 'clou-de-girofle', 'Clou de girofle'),
(67, 'encens', 'Encens'),
(68, 'myrrhe', 'Myrrhe'),
(69, 'benjoin', 'Benjoin'),
(70, 'resine', 'Résine'),
(71, 'aldehydes', 'Aldéhydes'),
(72, 'notes-marines', 'Notes marines'),
(73, 'sel', 'Sel'),
(74, 'the', 'Thé'),
(75, 'mate', 'Maté'),
(76, 'cypres', 'Cyprès'),
(77, 'mousse-de-chene', 'Mousse de chêne'),
(78, 'genevrier', 'Genévrier');

-- --------------------------------------------------------

--
-- Structure de la table `operator`
--

CREATE TABLE `operator` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(1, 'florale', 'Florale'),
(2, 'ambree', 'Ambrée'),
(3, 'boisee', 'Boisée'),
(4, 'fruite', 'Fruité'),
(5, 'gourmand', 'Gourmand'),
(6, 'hesperide', 'Hespéridé'),
(7, 'aquatique', 'Aquatique'),
(8, 'aromatique', 'Aromatique'),
(9, 'chypre', 'Chypré'),
(10, 'fougere', 'Fougère');

-- --------------------------------------------------------

--
-- Structure de la table `taguer`
--

CREATE TABLE `taguer` (
  `item_id` int UNSIGNED NOT NULL,
  `tag_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  ADD UNIQUE KEY `slug` (`slug`),
  ADD UNIQUE KEY `marque_id` (`marque_id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

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
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `item`
--
ALTER TABLE `item`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT pour la table `operator`
--
ALTER TABLE `operator`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
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
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`marque_id`) REFERENCES `brands` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `taguer`
--
ALTER TABLE `taguer`
  ADD CONSTRAINT `taguer_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
