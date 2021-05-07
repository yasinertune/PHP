-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 May 2021, 23:33:45
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
-- Veritabanı: `seo_friendly_url`
CREATE DATABASE seo_friendly_url;
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seo_friendly_url`
--

CREATE TABLE `seo_friendly_url` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `seo_url` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `seo_friendly_url`
--

INSERT INTO `seo_friendly_url` (`id`, `title`, `content`, `seo_url`) VALUES
(1, 'Seo dostu url nasıl yapılır?', '\"Seo dostu url nasıl yapılır?\" alanına hoşgeldiniz. ', 'seo-dostu-url-nasil-yapilir'),
(2, 'SQL veritabanı nedir? Nasıl kullanılır?', '\"SQL veritabanı nedir? Nasıl kullanılır?\" alanına hoşgeldiniz. ', 'sql-veritabani-nedir-nasil-kullanilir'),
(3, 'C++ hesap makinesi nasıl yapılır?', '\"C++ hesap makinesi nasıl yapılır?\" alanına hoşgeldiniz.', 'c-hesap-makinesi-nasil-yapilir'),
(4, 'C# functionlar nedir?', '\"C# functionlar nedir?\" alanına hoşgeldiniz.', 'c-functionlar-nedir'),
(9, 'Flutter ile mobil yazılım nasıl yapılır?', '\"Flutter ile mobil yazılım nasıl yapılır?\" alanına hoşgeldiniz.', 'flutter-ile-mobil-yazilim-nasil-yapilir');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `seo_friendly_url`
--
ALTER TABLE `seo_friendly_url`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `seo_friendly_url`
--
ALTER TABLE `seo_friendly_url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
