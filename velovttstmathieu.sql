-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 06, 2025 at 11:24 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `velovttstmathieu`
--

-- --------------------------------------------------------

--
-- Table structure for table `couleurs`
--

DROP TABLE IF EXISTS `couleurs`;
CREATE TABLE IF NOT EXISTS `couleurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lib` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `couleurs`
--

INSERT INTO `couleurs` (`id`, `lib`) VALUES
(1, 'orange'),
(3, 'Rouge'),
(4, 'Bleu'),
(5, 'Vert'),
(6, 'Noir'),
(7, 'srav');

-- --------------------------------------------------------

--
-- Table structure for table `entretiens`
--

DROP TABLE IF EXISTS `entretiens`;
CREATE TABLE IF NOT EXISTS `entretiens` (
  `id` int NOT NULL AUTO_INCREMENT,
  `horodatage` date DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `velo_id` int NOT NULL,
  `piece2_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `velo_id` (`velo_id`),
  KEY `fk_piece2` (`piece2_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `entretiens`
--

INSERT INTO `entretiens` (`id`, `horodatage`, `description`, `velo_id`, `piece2_id`) VALUES
(1, '2023-10-01', 'Changement des freins', 1, NULL),
(2, '2023-10-15', 'Révision générale', 2, NULL),
(3, NULL, 'bdsf', 1, 1),
(4, '2025-01-29', 'bdsf', 1, 1),
(5, NULL, 'bdsf', 1, 1),
(6, '0233-05-04', 'sfdgfd', 1, 1),
(7, NULL, 'sfdgfd', 1, 1),
(8, NULL, 'fdtugh', 2, 3),
(9, NULL, 'Entretien automatique', 1, 0),
(10, NULL, 'Entretien automatique', 1, 0),
(11, NULL, 'Entretien automatique', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `velo_id` int NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `prix_annuel` float NOT NULL,
  `prix_mensuel` float NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `velo_id` (`velo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `velo_id`, `nom`, `prenom`, `prix_annuel`, `prix_mensuel`, `date_debut`, `date_fin`) VALUES
(1, 1, 'boyer', 'mael', 15, 0, '0000-00-00', '2025-10-17'),
(2, 1, 'cfvgjhbn', 'mael', 15, 0, '0000-00-00', '2026-10-29'),
(3, 2, 'mael', 'mael', 20, 0, '0000-00-00', '2025-11-13'),
(4, 12, 'cfvgjhbn', 'cgvhbj', 14, 0, '0000-00-00', '2025-07-19'),
(5, 1, 'fds', 'sdfsg', 23, 54, '2025-06-05', '2025-06-20'),
(6, 1, 'mael', 'boyer', 1000, 10, '2025-06-10', '2026-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `marque_pieces`
--

DROP TABLE IF EXISTS `marque_pieces`;
CREATE TABLE IF NOT EXISTS `marque_pieces` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lib` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `marque_pieces`
--

INSERT INTO `marque_pieces` (`id`, `lib`) VALUES
(1, 'Shimano'),
(2, 'SRAM'),
(3, 'Campagnolo'),
(4, 'continental');

-- --------------------------------------------------------

--
-- Table structure for table `marque_velos`
--

DROP TABLE IF EXISTS `marque_velos`;
CREATE TABLE IF NOT EXISTS `marque_velos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lib` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `marque_velos`
--

INSERT INTO `marque_velos` (`id`, `lib`) VALUES
(1, 'Giant'),
(2, 'Trek'),
(3, 'Specialized'),
(4, 'b'),
(5, 'Nakamura');

-- --------------------------------------------------------

--
-- Table structure for table `pieces`
--

DROP TABLE IF EXISTS `pieces`;
CREATE TABLE IF NOT EXISTS `pieces` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tag` varchar(50) NOT NULL,
  `modele` varchar(50) DEFAULT NULL,
  `prix_achat` int DEFAULT NULL,
  `marque_piece_id` int NOT NULL,
  `type_piece_id` int NOT NULL,
  `prix_revente` int NOT NULL,
  `URL` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `marque_piece_id` (`marque_piece_id`),
  KEY `fk_type_piece` (`type_piece_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pieces`
--

INSERT INTO `pieces` (`id`, `tag`, `modele`, `prix_achat`, `marque_piece_id`, `type_piece_id`, `prix_revente`, `URL`) VALUES
(1, 'P123', 'Frein à disque', 120, 1, 1, 0, ''),
(3, '23-21', 'sdfsdf', 12, 1, 1, 0, ''),
(4, '23-21', 'av13', 4, 4, 2, 0, ''),
(6, 'V123', 'dsaffdsa', 14143, 1, 1, 234523, 'asbjoidasdfasfadsf');

-- --------------------------------------------------------

--
-- Table structure for table `pieces_entretiens`
--

DROP TABLE IF EXISTS `pieces_entretiens`;
CREATE TABLE IF NOT EXISTS `pieces_entretiens` (
  `piece_id` int NOT NULL,
  `entretien_id` int NOT NULL,
  PRIMARY KEY (`piece_id`,`entretien_id`),
  KEY `entretien_id` (`entretien_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pieces_entretiens`
--

INSERT INTO `pieces_entretiens` (`piece_id`, `entretien_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tailles`
--

DROP TABLE IF EXISTS `tailles`;
CREATE TABLE IF NOT EXISTS `tailles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lib` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tailles`
--

INSERT INTO `tailles` (`id`, `lib`) VALUES
(1, 'Petite'),
(2, 'Moyenne'),
(3, 'Grande'),
(4, '15\"'),
(5, '20\"');

-- --------------------------------------------------------

--
-- Table structure for table `type_pieces`
--

DROP TABLE IF EXISTS `type_pieces`;
CREATE TABLE IF NOT EXISTS `type_pieces` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lib` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `type_pieces`
--

INSERT INTO `type_pieces` (`id`, `lib`) VALUES
(1, 'roue'),
(2, 'chambre a air');

-- --------------------------------------------------------

--
-- Table structure for table `velos`
--

DROP TABLE IF EXISTS `velos`;
CREATE TABLE IF NOT EXISTS `velos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tag` varchar(50) DEFAULT NULL,
  `modele` varchar(50) DEFAULT NULL,
  `gravage` varchar(50) DEFAULT NULL,
  `date_achat` date DEFAULT NULL,
  `prix_achat` float DEFAULT NULL,
  `photo` blob,
  `prix_location` float DEFAULT NULL,
  `nom_locataire` varchar(50) DEFAULT NULL,
  `prenom_locataire` varchar(50) DEFAULT NULL,
  `taille_id` int NOT NULL,
  `couleur_id` int NOT NULL,
  `marque_velo_id` int NOT NULL,
  `numero_serie` varchar(50) NOT NULL,
  `debut_location` date NOT NULL,
  `fin_location` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `taille_id` (`taille_id`),
  KEY `couleur_id` (`couleur_id`),
  KEY `marque_velo_id` (`marque_velo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `velos`
--

INSERT INTO `velos` (`id`, `tag`, `modele`, `gravage`, `date_achat`, `prix_achat`, `photo`, `prix_location`, `nom_locataire`, `prenom_locataire`, `taille_id`, `couleur_id`, `marque_velo_id`, `numero_serie`, `debut_location`, `fin_location`) VALUES
(2, 'V124', 'Domane', 'G654321', '2023-07-15', 1500, NULL, 20, 'xfcgvh', 'cgvhbj', 3, 3, 2, '21452524', '0000-00-00', '0000-00-00'),
(12, '23-21', 'sdfsdf', 'dsfsqfsdqgfdsqg', '2025-02-05', 48, NULL, 14, '', '', 1, 1, 1, 'vkjdscqs', '0000-00-00', '0000-00-00'),
(13, '23-21', 'vyh', 'drtfgyhuijo', '2025-02-05', 545, NULL, 45, '', '', 1, 1, 1, 'dxcfvgh', '0000-00-00', '0000-00-00'),
(17, 'bhk', 'sdfsdf', '3453456', '4543-02-22', 1200, NULL, 789, 'mael', 'mael', 1, 1, 1, '43275890765823470698', '0000-00-00', '0000-00-00'),
(18, 'v342', 'dfss', '268952', '2025-06-19', 213, NULL, 34, 'sfgs', 'gsgdsds', 1, 2, 1, '2673842', '0000-00-00', '0000-00-00'),
(19, '234', 'resdg', 'gssd', '2025-06-05', 324, NULL, 324, 'dsgfs', 'dsfs', 1, 1, 1, '452332', '0000-00-00', '0000-00-00'),
(22, '25-3', 'mystic', 'n/a', '2025-06-10', 30, NULL, 0, NULL, NULL, 5, 7, 5, 'n/a', '0000-00-00', '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
