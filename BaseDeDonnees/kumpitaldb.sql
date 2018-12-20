-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2018 at 05:50 PM
-- Server version: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kumpitaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `types_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `dateAnnonce` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_39E8AA798EB23357` (`types_id`),
  KEY `IDX_39E8AA79A21214B7` (`categories_id`),
  KEY `IDX_39E8AA79A76ED395` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `annonce`
--

INSERT INTO `annonce` (`id`, `types_id`, `categories_id`, `titre`, `prix`, `description`, `dateAnnonce`, `user_id`) VALUES
(19, 1, 1, 'Polo 5', 2500, 'Vend une polo  5\r\nCirca hos dies Lollianus primae lanuginis adulescens, Lampadi filius ex praefecto, exploratius causam Maximino spectante, convictus codicem noxiarum artium nondum per aetatem firmato consilio descripsisse, exulque mittendus, ut sperabatur, patris inpulsu provocavit ad principem, et iussus ad eius comitatum duci, de fumo, ut aiunt, in flammam traditus Phalangio Baeticae consulari cecidit funesti carnificis manu.\r\n\r\nEquitis Romani autem esse filium criminis loco poni ab accusatoribus neque his iudicantibus oportuit neque defendentibus nobis. Nam quod de pietate dixistis, est quidem ista nostra existimatio, sed iudicium certe parentis; quid nos opinemur, audietis ex iuratis; quid parentes sentiant, lacrimae matris incredibilisque maeror, squalor patris et haec praesens maestitia, quam cernitis, luctusque declarat.\r\n\r\nQuod si rectum statuerimus vel concedere amicis, quidquid velint, vel impetrare ab iis, quidquid velimus, perfecta quidem sapientia si simus, nihil habeat res vitii; sed loquimur de iis amicis qui ante oculos sunt, quos vidimus aut de quibus memoriam accepimus, quos novit vita communis. Ex hoc numero nobis exempla sumenda sunt, et eorum quidem maxime qui ad sapientiam proxime accedunt.\r\n\r\nNec piget dicere avide magis hanc insulam populum Romanum invasisse quam iuste. Ptolomaeo enim rege foederato nobis et socio ob aerarii nostri angustias iusso sine ulla culpa proscribi ideoque hausto veneno voluntaria morte deleto et tributaria facta est et velut hostiles eius exuviae classi inpositae in urbem advectae sunt per Catonem, nunc repetetur ordo gestorum.\r\n\r\nCyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat.', '2018-12-20 10:16:12', 17),
(21, 2, 4, 'Cherche un chien', 50, 'Quibus ita sceleste patratis Paulus cruore perfusus reversusque ad principis castra multos coopertos paene catenis adduxit in squalorem deiectos atque maestitiam, quorum adventu intendebantur eculei uncosque parabat carnifex et tormenta. et ex is proscripti sunt plures actique in exilium alii, non nullos gladii consumpsere poenales. nec enim quisquam facile meminit sub Constantio, ubi susurro tenus haec movebantur, quemquam absolutum.\r\n\r\nEt quia Montius inter dilancinantium manus spiritum efflaturus Epigonum et Eusebium nec professionem nec dignitatem ostendens aliquotiens increpabat, qui sint hi magna quaerebatur industria, et nequid intepesceret, Epigonus e Lycia philosophus ducitur et Eusebius ab Emissa Pittacas cognomento, concitatus orator, cum quaestor non hos sed tribunos fabricarum insimulasset promittentes armorum si novas res agitari conperissent.\r\n\r\nSed quid est quod in hac causa maxime homines admirentur et reprehendant meum consilium, cum ego idem antea multa decreverim, que magis ad hominis dignitatem quam ad rei publicae necessitatem pertinerent? Supplicationem quindecim dierum decrevi sententia mea. Rei publicae satis erat tot dierum quot C. Mario ; dis immortalibus non erat exigua eadem gratulatio quae ex maximis bellis. Ergo ille cumulus dierum hominis est dignitati tributus.', '2018-12-20 10:50:33', 17),
(22, 1, 2, 'Peugeot 206', 1500, 'Quibus ita sceleste patratis Paulus cruore perfusus reversusque ad principis castra multos coopertos paene catenis adduxit in squalorem deiectos atque maestitiam, quorum adventu intendebantur eculei uncosque parabat carnifex et tormenta. et ex is proscripti sunt plures actique in exilium alii, non nullos gladii consumpsere poenales. nec enim quisquam facile meminit sub Constantio, ubi susurro tenus haec movebantur, quemquam absolutum.', '2018-12-20 12:23:24', 18),
(23, 1, 2, 'Clio 2', 5, 'je propose une clio 2 pas chere', '2018-12-20 12:35:17', 18),
(24, 1, 2, 'CLIO 2', 5, 'je propose une clio 2 au pris d\'un kebab', '2018-12-20 12:55:39', 18),
(25, 1, 2, 'clio 2', 200, 'je propose une clio contre une bonne note en lifprojet', '2018-12-20 15:03:06', 18);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`) VALUES
(1, 'IMMOBILIER'),
(2, 'VEHICULE'),
(3, 'LIVRE'),
(4, 'ANIMAL');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `annonce_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploadAt` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E01FBE6A8805AB2F` (`annonce_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `annonce_id`, `nom`, `uploadAt`) VALUES
(21, 19, '5c1b6bec9ce61_S7-modele--volkswagen-polo-5-gti.jpg', '2018-12-20 10:16:12'),
(22, 19, '5c1b6bec9f92d_vw-polo-m-02.jpg', '2018-12-20 10:16:12'),
(23, 21, '5c1b73f96eb90_chien 2.jpg', '2018-12-20 10:50:33'),
(24, 21, '5c1b73f96faaa_chien1.jpg', '2018-12-20 10:50:33'),
(25, 22, '5c1b89bcb3505_peugeot-206-11289-1.jpg', '2018-12-20 12:23:24'),
(26, 23, '5c1b8c85b6b43_S7-modele--volkswagen-polo-5-gti.jpg', '2018-12-20 12:35:17'),
(27, 24, '5c1b914c23127_p0543543-520-360.jpg', '2018-12-20 12:55:40'),
(28, 25, '5c1baf2a94b6c_vw-polo-m-02.jpg', '2018-12-20 15:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `libelle`) VALUES
(1, 'Offres'),
(2, 'Demandes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `numTelephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `numTelephone`, `roles`) VALUES
(17, 'aliou', 'aliou', 'aliou-sadio.barry@etu.univ-lyon1.fr', 'aliou-sadio.barry@etu.univ-lyon1.fr', 1, NULL, '$2y$13$kbXmKlbtqUk76pCn0i6G4OLDTI3p4IIx97LRiLBtAqYpyl37RV7xS', '2018-12-20 11:07:14', NULL, NULL, '0605508591', 'a:0:{}'),
(18, 'lydiaa', 'lydiaa', 'lydia.saidj@etu.univ-lyon1.fr', 'lydia.saidj@etu.univ-lyon1.fr', 1, NULL, '$2y$13$PLUdgBp9sPzvt5n8SRVLUOfC1nPnybeA/2a/B87APp53kPA1q.W/.', '2018-12-20 15:02:13', NULL, NULL, '0662819896', 'a:0:{}');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `FK_F65593E58EB23357` FOREIGN KEY (`types_id`) REFERENCES `type` (`id`),
  ADD CONSTRAINT `FK_F65593E5A21214B7` FOREIGN KEY (`categories_id`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `FK_F65593E5A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_E01FBE6A8805AB2F` FOREIGN KEY (`annonce_id`) REFERENCES `annonce` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
