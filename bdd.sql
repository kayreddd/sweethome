-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 14 sep. 2024 à 22:45
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sweethome`
--

-- --------------------------------------------------------

--
-- Structure de la table `feed_page_content`
--

DROP TABLE IF EXISTS `feed_page_content`;
CREATE TABLE IF NOT EXISTS `feed_page_content` (
  `product_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `product_img` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `product_description` varchar(800) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `feed_pages` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `feed_page_content`
--

INSERT INTO `feed_page_content` (`product_id`, `product_name`, `price`, `product_img`, `product_description`, `feed_pages`) VALUES
(1, 'Baguette', '1.00', 'baguette-pain-boulangerie.jpg', 'Dégustez notre Baguette, avec sa croûte légère et sa mie tendre. Parfaite pour tous les jours, elle est idéale pour accompagner vos repas ou pour faire de délicieux sandwiches. Un incontournable de votre table.', 'breads'),
(2, 'Baguette Tradition', '1.50', 'baguettes_tradition.jpg', 'Appréciez l\'authenticité de notre Baguette Tradition, à la croûte dorée et croustillante, avec une mie moelleuse et parfumée. Confectionnée selon des méthodes artisanales, elle incarne le goût authentique du bon pain. Idéale pour sublimer vos repas.', 'breads'),
(3, 'Baguette aux Graines', '1.50', 'baguette_aux_graines.jpeg', 'Découvrez notre Baguette aux Graines, alliant croustillant et saveurs riches. Enrichie d\'un mélange de graines croquantes, elle offre une mie tendre et parfumée. Parfaite pour ajouter une touche de gourmandise et de nutrition à vos repas.', 'breads'),
(4, 'Baguette Viennoise', '1.50', 'pain-viennois.jpeg', 'Savourez notre Baguette Viennoise, douce et moelleuse, avec une fine croûte dorée. Légèrement sucrée, elle est idéale pour le petit-déjeuner ou une pause gourmande. Parfaite à déguster nature ou accompagnée de confiture.', 'breads'),
(5, 'Baguette aux Noix', '1.50', 'pain-noix-grenoble-ithq.jpg', 'Régalez-vous avec notre Baguette aux Noix, croquante et savoureuse. Enrichie de morceaux de noix, elle offre une mie tendre et légèrement parfumée. Parfaite pour accompagner fromages et charcuteries ou pour ajouter une touche de caractère à vos repas.', 'breads'),
(6, 'Baguette Bio', '1.50', 'pains_bioo.jpg', 'Dégustez notre Baguette Bio, faite avec des ingrédients issus de l\'agriculture biologique. Sa croûte dorée et sa mie moelleuse offrent un goût authentique et naturel. Idéale pour ceux qui recherchent un pain sain et savoureux au quotidien.', 'breads'),
(7, 'Pain aux olives', '1.50', 'painolives1-scaled.jpg', 'Découvrez notre Pain aux Olives, une délicieuse alliance de pâte moelleuse et d\'olives savoureuses, gorgées de soleil. Chaque tranche révèle des éclats d\'olives qui apportent une touche méditerranéenne irrésistible. Un régal gourmand et aromatique.', 'breads'),
(8, 'Flan', '2.10', 'flan-parisien.jpg', 'Appréciez notre Flan, un dessert onctueux et délicat, offrant une texture veloutée et un goût raffiné de vanille. Un incontournable des douceurs traditionnelles qui comblera toutes vos envies sucrées.', 'pastries'),
(9, 'Tarte aux pommes', '3.10', 'tarte-aux-pommes-au-mascarpone.jpg', 'Savourez notre Tarte aux Pommes, un délice traditionnel avec une pâte dorée et croustillante, garnie de pommes tendres et parfumées. Un dessert classique qui marie parfaitement douceur et fruité pour un moment de gourmandise authentique.', 'pastries'),
(10, 'Éclair au Chocolat', '2.10', 'eclair-choco-carre.jpg', 'Dégustez notre Éclair au Chocolat, avec une pâte à choux légère et une garniture crémeuse au chocolat riche et velouté. Un dessert irrésistible qui allie douceur et intense saveur de chocolat pour une expérience gourmande parfaite.', 'pastries'),
(11, 'Mille-Feuille', '2.10', 'mille-feuilles-patisserie-feuilletage.jpg', 'Savourez notre Mille-Feuille, un chef-d\'œuvre de pâtisserie avec ses couches de pâte feuilletée dorée et croustillante, entrecoupées d\'une crème pâtissière veloutée. Décoré d’un glaçage subtil, il offre une harmonie parfaite entre légèreté et délices.', 'pastries'),
(12, 'Tartelettes aux fraises', '3.10', 'strawberry-tart.jpg', 'Dégustez notre Tartelette aux Fraises, un régal composé d’une pâte sablée dorée, d’une crème onctueuse et de fraises fraîches et savoureuses. Une harmonie délicate de textures et de saveurs qui égayera vos moments gourmands.', 'pastries'),
(13, 'Religieuse', '2.10', 'religieuse-au-chocolat.jpg', 'Découvrez notre Religieuse, une véritable œuvre d\'art pâtissière ! Deux choux légers et aérés sont délicatement garnis d\'une crème pâtissière onctueuse, le tout surmonté d\'un glaçage lisse et brillant. Un classique revisité avec élégance pour un plaisir gourmand inégalé.', 'pastries'),
(14, 'Paris-Brest', '2.10', 'recette-du-paris-brest.jpg', 'Laissez-vous séduire par notre Paris-Brest, une pâtisserie exquise en forme de couronne, réalisée avec une pâte à choux dorée et croustillante. Garni d\'une généreuse crème pralinée onctueuse et décoré de noisettes croquantes, c\'est une explosion de saveur et de textures qui ravira vos papilles à chaque bouchée. Un véritable chef-d\'œuvre de la pâtisserie française !', 'pastries'),
(15, 'Macaron framboise', '3.00', 'macaron-noel-framboise.jpeg', 'Craquez pour notre Macaron Framboise, une délicieuse gourmandise avec deux coques tendres et légèrement croquantes, garnies d’une ganache onctueuse à la framboise. Chaque bouchée offre un parfait équilibre entre la douceur sucrée et l’acidité fruitée, pour un moment de plaisir intense et raffiné.', 'pastries'),
(16, 'Sandwich au thon', '4.90', 'sandwich-thon.png', 'Savourez notre Sandwich au Thon, une combinaison irrésistible de thon tendre mélangé à une sauce crémeuse, accompagné de délicieux légumes croquants et de fines tranches de pain frais. Un délice équilibré et savoureux, parfait pour un déjeuner rapide ou une pause gourmande.', 'sandwiches'),
(17, 'Sandwich au saumon', '4.90', 'smoked-Salmon-cream-cheese-chive-breakfast-baguette.jpg', 'Découvrez notre Sandwich au Saumon, une délicieuse harmonie de saumon tendre et légèrement fumé, associé à des légumes croquants et servi dans un pain frais et moelleux. Une combinaison parfaite de saveurs et de textures qui offre une pause gourmande élégante et savoureuse.', 'sandwiches'),
(18, 'Sandwich au poulet', '4.90', 'sandwish_au_poulet.png', 'Délectez-vous avec notre Sandwich au Poulet, où des morceaux de poulet grillé parfaitement assaisonné rencontrent des légumes croquants et frais, le tout enveloppé dans un pain moelleux et légèrement doré. Chaque bouchée est une fusion exquise de saveurs et de textures, idéale pour une pause déjeuner savoureuse et réconfortante.', 'sandwiches'),
(19, 'Sandwich à la dinde', '4.90', 'Recettes-grilled-sandwich-dinde.jpg', 'Savourez notre Sandwich à la Dinde, composé de tranches de dinde tendre et légèrement épicée, accompagnées de légumes frais et croquants, le tout glissé dans un pain légèrement grillé. Un délice équilibré qui allie douceur et vivacité, parfait pour un déjeuner à la fois savoureux et satisfaisant.', 'sandwiches'),
(20, 'Coca Cola', '1.70', 'coca-cola-canette-slim-33cl.jpg', '', 'drinks'),
(21, 'Coca Cola Zéro', '1.70', 'coca-cola-zero-canette-slim-33cl.jpg', '', 'drinks'),
(22, 'Fanta Orange', '1.70', 'canette_fanta.jpg', '', 'drinks'),
(23, 'Fanta Citron', '1.70', 'fanta_citron.jpg', '', 'drinks'),
(24, 'Minute Maid Orange', '1.70', 'Minute-Maid-Orange-33-cl.jpg', '', 'drinks'),
(25, 'Orangina', '1.70', 'orangina.png', '', 'drinks'),
(26, 'Ice Tea Pêche', '1.70', 'lipton-ice-tea-peche-canette-33cl.jpg', '', 'drinks'),
(27, 'Tropico', '1.70', 'tropico-l-original-exotique-33cl.jpg', '', 'drinks'),
(28, 'Cristaline 50cl', '1.70', 'cristalline_fraise.jpg', '', 'drinks'),
(29, 'Fuze Tea', '1.70', 'fuzetea_peche.jpg', '', 'drinks'),
(30, 'Sprite', '1.70', 'sprite-33cl.jpg', '', 'drinks'),
(31, 'Café expresso', '1.20', 'expresso_simple.jpg', 'Réveillez vos sens avec notre Café Expresso, une explosion de saveurs riches et intenses dans chaque gorgée. Préparé avec des grains de café finement sélectionnés, il offre une crème veloutée et un arôme envoûtant qui enchantera les amateurs de café à chaque tasse. Un véritable moment de plaisir intense et revitalisant.', 'drinks'),
(32, 'Café double expresso', '1.40', 'expresso_simple.jpg', 'Plongez dans l\'intensité avec notre Café Double Expresso, une concentration de saveurs robustes et profondes. Chaque tasse offre une crème épaisse et veloutée, enrichie de deux doses de café finement moulu, pour un boost de caféine irrésistible et un plaisir gustatif intense. Idéal pour ceux qui recherchent une expérience de café véritablement puissante et revitalisante.', 'drinks'),
(33, 'Chocolat chaud', '1.30', 'chocolat_oncteux_latte.jpg', 'Découvrez notre Chocolat Chaud, une étreinte réconfortante à chaque tasse. Préparé avec une généreuse dose de chocolat fondant mélangé à du lait onctueux, il vous offre une expérience veloutée et intensément chocolatée. Idéal pour se détendre et se faire plaisir à tout moment de la journée.', 'drinks'),
(34, 'Café au lait', '1.30', 'café-au-lait-cappuchino.jpg', 'Savourez notre Café au Lait, une fusion exquise d\'expresso intense et de lait onctueux, parfaitement chauffé pour créer une mousse légère. Ce mélange équilibré offre une expérience douce et riche en saveurs, idéale pour un moment de plaisir tout en douceur.', 'drinks');

-- --------------------------------------------------------

--
-- Structure de la table `personalized_services`
--

DROP TABLE IF EXISTS `personalized_services`;
CREATE TABLE IF NOT EXISTS `personalized_services` (
  `product_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `feed_pages` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
