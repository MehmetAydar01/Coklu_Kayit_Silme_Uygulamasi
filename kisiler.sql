-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 28 Mar 2023, 16:11:40
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `coklukayituygulamasi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisiler`
--

DROP TABLE IF EXISTS `kisiler`;
CREATE TABLE IF NOT EXISTS `kisiler` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `adi` varchar(100) NOT NULL,
  `soyadi` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kisiler`
--

INSERT INTO `kisiler` (`id`, `adi`, `soyadi`) VALUES
(1, 'Volkan', 'Alakent'),
(2, 'Hakan', 'Alakent'),
(3, 'Onur', 'Tatlı'),
(4, 'Ümit', 'Okudan'),
(5, 'Serkan', 'Çelik'),
(6, 'Cengiz', 'Kurtuluş'),
(7, 'Aslı', 'Tatlı'),
(8, 'Hale', 'Okudan'),
(9, 'Banu', 'Alakent'),
(10, 'Hatice', 'Alakent'),
(11, 'Mehmet', 'Aydar'),
(12, 'Elif', 'Aydar'),
(13, 'Nazlı', 'Aydar'),
(14, 'Serdar', 'Aydar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
