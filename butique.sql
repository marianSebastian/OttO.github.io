-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 30 Sep 2018 la 05:56
-- Versiune server: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `butique`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `main_cat`
--

DROP TABLE IF EXISTS `main_cat`;
CREATE TABLE IF NOT EXISTS `main_cat` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `main_cat`
--

INSERT INTO `main_cat` (`cat_id`, `cat_name`) VALUES
(19, 'Pal-uri'),
(8, 'Accesorii pentru mobilier'),
(10, 'Blaturi pentru bucatarie'),
(11, 'Scule'),
(12, 'Pfl-uri'),
(13, 'Coli de MDF'),
(14, 'Fronturi din MDF');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `product_image1` text NOT NULL,
  `product_image2` text NOT NULL,
  `product_image3` text NOT NULL,
  `product_image4` text NOT NULL,
  `product_title1` text NOT NULL,
  `product_title2` text NOT NULL,
  `product_title3` text NOT NULL,
  `product_title4` text NOT NULL,
  `product_title5` text NOT NULL,
  `product_price` text NOT NULL,
  `product_brand` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_add_date` timestamp NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `cat_id`, `sub_cat_id`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_title1`, `product_title2`, `product_title3`, `product_title4`, `product_title5`, `product_price`, `product_brand`, `product_keywords`, `product_desc`, `product_add_date`) VALUES
(1, 'Balama aplicata', 8, 7, '110.JPG', 'aplic_mod.jpg', 'aplic_far_arc.jpg', 'aplic_blumotion.jpg', 'Balama aplicata clip', 'Balama aplicata modul', 'Balama aplicata fara arc', 'Balama aplicata cu blumotion incorporat', 'Schema balama ', '12,50', 'Blum', 'balama , blum, aplicata', 'Produse de top', '2018-09-09 03:04:43'),
(2, 'Circulkar de masa cu sina de ghidaj', 11, 11, 'quadro_V6.jpg', '', 'suporti_spate_144.jpg', 'laterale_innotech.jpg', 'circular', 'circalar', 'curcular', 'cherchelar', 'cacanar', '1250', 'Fesstool', 'festool, aspirator', 'Bun', '2018-09-09 03:15:30'),
(4, 'Glisiera tandem', 8, 7, 'asc_tot.jpg', 'tandembox.jpg', 'maner_sert_int_a2.jpg', 'movento.jpg', 'Glisiera Haffele ext. totala', 'Glisiera tandem Blum', 'Maner si piesa de antrenare sertar', 'Sertar movento', 'Glisiera', '41.00', 'Blum', 'blum, gliisera , sertar, antaro, movento', 'Produse de top', '2018-09-23 04:13:36'),
(5, 'Pal Melaminat', 19, 7, '', '', 'circular.jpg', 'pal.jpg', '18mm', '19mm', '12mm', '16mm', '22mm', '275.00', 'Kronospan', 'pal, melaminat, coala', '2700 x 2070', '2018-09-23 04:20:49');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `sub_cat`
--

DROP TABLE IF EXISTS `sub_cat`;
CREATE TABLE IF NOT EXISTS `sub_cat` (
  `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_cat_name` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `sub_cat`
--

INSERT INTO `sub_cat` (`sub_cat_id`, `sub_cat_name`, `cat_id`) VALUES
(1, 'Balamale', 7),
(2, 'Circular de mana', 11),
(18, 'Uni', 7),
(16, 'Glisiera', 7);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
