-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 May 2021, 14:50:48
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `navbar`
--
CREATE DATABASE navbar;
-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `navbar`
--

CREATE TABLE `navbar` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `navbar`
--

INSERT INTO `navbar` (`menu_id`, `menu_name`, `parent_id`, `link`, `status`) VALUES
(1, 'Yazılım', 0, '#', '1'),
(2, 'C#', 1, 'c#', '1'),
(3, 'C++', 1, '#', '1'),
(4, 'Yapay Zeka', 0, '#', '1'),
(5, 'Python', 4, '#', '1'),
(6, 'Mobil', 0, '#', '1'),
(7, 'Flutter', 6, '#', '1'),
(8, 'React Native', 6, '#', '1'),
(9, 'Flutter', 6, '#', '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`menu_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `navbar`
--
ALTER TABLE `navbar`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
