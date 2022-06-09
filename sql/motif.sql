-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 29 May 2022, 10:23:41
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `motif`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iller`
--

DROP TABLE IF EXISTS `iller`;
CREATE TABLE IF NOT EXISTS `iller` (
  `il_no` int(11) NOT NULL,
  `isim` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`il_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iller`
--

INSERT INTO `iller` (`il_no`, `isim`) VALUES
(7, 'Antalya'),
(8, 'Artvin'),
(9, 'Aydın'),
(10, 'Balıkesir'),
(11, 'Bilecik'),
(12, 'Bingöl'),
(13, 'Bitlis'),
(14, 'Bolu'),
(15, 'Burdur'),
(16, 'Bursa'),
(17, 'Çanakkale'),
(18, 'Çankırı'),
(19, 'Çorum'),
(20, 'Denizli'),
(21, 'Diyarbakır'),
(22, 'Edirne'),
(23, 'Elazığ'),
(24, 'Erzincan'),
(25, 'Erzurum'),
(26, 'Eskişehir'),
(27, 'Gaziantep'),
(28, 'Giresun'),
(29, 'Gümüşhane'),
(30, 'Hakkari'),
(31, 'Hatay'),
(32, 'Isparta'),
(33, 'Mersin(İçel)'),
(34, 'İstanbul'),
(35, 'İzmir'),
(36, 'Kars'),
(37, 'Kastamonu'),
(38, 'Kayseri'),
(39, 'Kırklareli'),
(40, 'Kırşehir'),
(41, 'Kocaeli'),
(42, 'Konya'),
(43, 'Kütahya'),
(44, 'Malatya'),
(45, 'Manisa'),
(46, 'Kahramanmaraş'),
(47, 'Mardin'),
(48, 'Muğla'),
(49, 'Muş'),
(50, 'Nevşehir'),
(51, 'Niğde'),
(52, 'Ordu'),
(53, 'Rize'),
(54, 'Sakarya'),
(55, 'Samsun'),
(56, 'Siirt'),
(6, 'Ankara'),
(5, 'Amasya'),
(4, 'Ağrı'),
(3, 'Afyonkarahisar'),
(2, 'Adıyaman'),
(1, 'Adana'),
(57, 'Sinop'),
(58, 'Sivas'),
(59, 'Tekirdağ'),
(60, 'Tokat'),
(61, 'Trabzon'),
(62, 'Tunceli'),
(63, 'Şanlıurfa'),
(64, 'Uşak'),
(65, 'Van'),
(66, 'Yozgat'),
(67, 'Zonguldak'),
(68, 'Aksaray'),
(69, 'Bayburt'),
(70, 'Karaman'),
(71, 'Kırıkkale'),
(72, 'Batman'),
(73, 'Şırnak'),
(74, 'Bartın'),
(75, 'Ardahan'),
(76, 'Iğdır'),
(77, 'Yalova'),
(78, 'Karabük'),
(79, 'Kilis'),
(80, 'Osmaniye'),
(81, 'Düzce');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kampanya`
--

DROP TABLE IF EXISTS `kampanya`;
CREATE TABLE IF NOT EXISTS `kampanya` (
  `kampanya_id` int(11) NOT NULL AUTO_INCREMENT,
  `kampanya_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kampanya_yuzdesi` int(11) DEFAULT NULL,
  `kampanya_tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kampanya_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kampanya`
--

INSERT INTO `kampanya` (`kampanya_id`, `kampanya_adi`, `kampanya_yuzdesi`, `kampanya_tarih`) VALUES
(1, '%35 Ä°ndirim', 35, '20.01.2021 18:57:45'),
(2, '%20 Ä°ndirim', 20, '20.01.2021 18:56:52'),
(3, '%50 Ä°ndirim', 50, '20.01.2021 18:56:04'),
(4, 'YÄ±lbaÅŸÄ± Ã–zel', 25, '20.01.2021 18:57:06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kargolar`
--

DROP TABLE IF EXISTS `kargolar`;
CREATE TABLE IF NOT EXISTS `kargolar` (
  `kargo_id` int(11) NOT NULL AUTO_INCREMENT,
  `kargo_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kargo_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kargo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kargolar`
--

INSERT INTO `kargolar` (`kargo_id`, `kargo_adi`, `kargo_resim`) VALUES
(1, 'Aras Kargo', 'img/kargo/aras.png'),
(2, 'MNG Kargo', 'img/kargo/mng.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kargo_ucret`
--

DROP TABLE IF EXISTS `kargo_ucret`;
CREATE TABLE IF NOT EXISTS `kargo_ucret` (
  `kargo_ucret_id` int(11) NOT NULL AUTO_INCREMENT,
  `kargo_id` int(11) NOT NULL,
  `il_id` int(11) NOT NULL,
  `kargo_ucret` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kargo_ucret_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kargo_ucret`
--

INSERT INTO `kargo_ucret` (`kargo_ucret_id`, `kargo_id`, `il_id`, `kargo_ucret`) VALUES
(1, 1, 34, '15,00'),
(2, 1, 45, '15,00'),
(3, 2, 34, '22,00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori_alt`
--

DROP TABLE IF EXISTS `kategori_alt`;
CREATE TABLE IF NOT EXISTS `kategori_alt` (
  `kategori_alt_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_alt_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ust_id` int(11) NOT NULL,
  PRIMARY KEY (`kategori_alt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori_alt`
--

INSERT INTO `kategori_alt` (`kategori_alt_id`, `kategori_alt_adi`, `ust_id`) VALUES
(11, 'deneme', 3),
(26, 'Mehmet', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori_baslik`
--

DROP TABLE IF EXISTS `kategori_baslik`;
CREATE TABLE IF NOT EXISTS `kategori_baslik` (
  `kategori_baslik_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_baslik_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ust_id` int(11) NOT NULL,
  PRIMARY KEY (`kategori_baslik_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori_baslik`
--

INSERT INTO `kategori_baslik` (`kategori_baslik_id`, `kategori_baslik_adi`, `ust_id`) VALUES
(3, 'Deneme Kumas', 0),
(15, 'Deneme kumaÅŸlar v2', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori_grup`
--

DROP TABLE IF EXISTS `kategori_grup`;
CREATE TABLE IF NOT EXISTS `kategori_grup` (
  `grup_id` int(11) NOT NULL,
  `grup_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

DROP TABLE IF EXISTS `siparisler`;
CREATE TABLE IF NOT EXISTS `siparisler` (
  `siparis_id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_id` int(11) DEFAULT NULL,
  `siparis_kodu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_odeme_id` int(11) NOT NULL,
  `siparis_kargo_id` int(11) NOT NULL,
  `siparis_tutar` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_tarihi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_durumu` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`siparis_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`siparis_id`, `uye_id`, `siparis_kodu`, `siparis_odeme_id`, `siparis_kargo_id`, `siparis_tutar`, `siparis_tarihi`, `siparis_durumu`) VALUES
(7, NULL, '8ca22', 1, 1, '8.64', '19.01.2021 18:09:20', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_adres`
--

DROP TABLE IF EXISTS `siparis_adres`;
CREATE TABLE IF NOT EXISTS `siparis_adres` (
  `adres_id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ulke` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `il` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `ilce` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `ad` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `tc_no` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `cep_tel` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `adres_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sipkod` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`adres_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis_adres`
--

INSERT INTO `siparis_adres` (`adres_id`, `uye_id`, `email`, `ulke`, `il`, `ilce`, `ad`, `soyad`, `tc_no`, `tel`, `cep_tel`, `adres`, `adres_baslik`, `sipkod`) VALUES
(38, NULL, 'deneme@deneme.com', 'TÃ¼rkiye', '34', 'kartal', 'mehmet', 'coskun', '123456789852', '05354744381', '05354744381', 'dadasdadasdasdada', 'deneme', '8ca22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_adres_fatura`
--

DROP TABLE IF EXISTS `siparis_adres_fatura`;
CREATE TABLE IF NOT EXISTS `siparis_adres_fatura` (
  `f_adres_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_uye_id` int(11) DEFAULT NULL,
  `f_email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `f_ulke` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `f_il` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `f_ilce` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `f_ad` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `f_soyad` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `f_tc_no` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `f_tel` varchar(256) COLLATE utf8_turkish_ci DEFAULT NULL,
  `f_cep_tel` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `f_adres` text COLLATE utf8_turkish_ci NOT NULL,
  `f_adres_baslik` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `f_sipkod` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`f_adres_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis_adres_fatura`
--

INSERT INTO `siparis_adres_fatura` (`f_adres_id`, `f_uye_id`, `f_email`, `f_ulke`, `f_il`, `f_ilce`, `f_ad`, `f_soyad`, `f_tc_no`, `f_tel`, `f_cep_tel`, `f_adres`, `f_adres_baslik`, `f_sipkod`) VALUES
(14, NULL, 'deneme@deneme.com', 'TÃ¼rkiye', '34', 'kartal', 'mehmet', 'coskun', '123456789852', '05354744381', '05354744381', 'dadasdadasdasdada', 'deneme', '8ca22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sip_urunler`
--

DROP TABLE IF EXISTS `sip_urunler`;
CREATE TABLE IF NOT EXISTS `sip_urunler` (
  `sip_urun_id` int(11) NOT NULL AUTO_INCREMENT,
  `sip_urun_kodu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sip_urun_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sip_urun_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sip_urun_miktar` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sip_urun_birim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sip_urun_fiyat` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sip_urun_kdv` int(11) NOT NULL,
  `sip_kodu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`sip_urun_id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sip_urunler`
--

INSERT INTO `sip_urunler` (`sip_urun_id`, `sip_urun_kodu`, `sip_urun_adi`, `sip_urun_resim`, `sip_urun_miktar`, `sip_urun_birim`, `sip_urun_fiyat`, `sip_urun_kdv`, `sip_kodu`) VALUES
(28, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(26, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(27, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(25, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(24, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(23, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(22, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(21, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(20, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(29, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(30, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(31, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(32, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(33, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(34, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(35, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(36, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(37, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(38, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(39, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(40, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(41, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(42, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(43, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(44, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(45, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(46, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(47, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(48, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(49, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(50, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(51, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(52, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(53, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(54, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(55, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(56, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(57, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(58, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(59, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(60, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22'),
(61, 'dnm001', 'Deneme ÃœrÃ¼n', 'img/urunler/bfc4803539.jpg', '2', '1', '3.8', 8, '8ca22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `urun_id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_kodu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_bilgi_1` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_bilgi_2` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_stok` int(11) NOT NULL,
  `urun_fiyat` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `urun_kdv` int(11) NOT NULL,
  `urun_kampanya_fiyat` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_kategori_id` int(11) NOT NULL,
  `urun_kampanya_id` int(11) DEFAULT NULL,
  `urun_tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_birim` int(11) NOT NULL,
  `urun_yeni` varchar(11) COLLATE utf8_turkish_ci DEFAULT '0',
  `urun_resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`urun_id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_kodu`, `urun_adi`, `urun_bilgi_1`, `urun_bilgi_2`, `urun_stok`, `urun_fiyat`, `urun_kdv`, `urun_kampanya_fiyat`, `urun_kategori_id`, `urun_kampanya_id`, `urun_tarih`, `urun_birim`, `urun_yeni`, `urun_resim`) VALUES
(53, 'dnm001', 'Deneme ÃœrÃ¼n', 'dsadasdasdasd', 'asdasdasdasdas', 2, '19,50', 8, '3.8', 11, 2, '19.01.2021 16:40:30', 1, '', 'img/urunler/bfc4803539.jpg'),
(54, 'dnm005', 'dasdasd', 'dasdasdsa', 'dasdasd', 5, '5', 18, '1', 11, 2, '07.11.2021 20:59:03', 1, '', 'img/urunler/34c651d7ac.jpg'),
(52, 'dnm09', 'Deneme ÃœrÃ¼nÃ¼', 'dasdasdasd', 'dasdasdas', 5, '13,00', 8, '6.5', 11, 1, '19.01.2021 16:27:41', 1, '', 'img/urunler/9711177017.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler_resimler`
--

DROP TABLE IF EXISTS `urunler_resimler`;
CREATE TABLE IF NOT EXISTS `urunler_resimler` (
  `resimler_id` int(11) NOT NULL AUTO_INCREMENT,
  `urunler_id` int(11) NOT NULL,
  `resimler_yol` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`resimler_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler_resimler`
--

INSERT INTO `urunler_resimler` (`resimler_id`, `urunler_id`, `resimler_yol`) VALUES
(2, 6, 'img/deneme2.jpg'),
(3, 6, 'img/deneme3.jpg'),
(4, 6, 'img/deneme4.jpg'),
(5, 6, 'img/deneme5.jpg'),
(6, 53, 'img/urunler/a1456606cf.jpg'),
(7, 54, 'img/urunler/5bc6eecdd2'),
(8, 54, 'img/urunler/2ad7e5a524'),
(9, 54, 'img/urunler/39fbd418aa'),
(10, 54, 'img/urunler/7b677797d1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `uye_id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_kodu` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_adi` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_soyadi` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_email` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_tel` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_sifre` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_tekrar_sifre` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_cinsiyet` int(11) NOT NULL,
  `uye_ip` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_tarih` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`uye_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler_adres_defter`
--

DROP TABLE IF EXISTS `uyeler_adres_defter`;
CREATE TABLE IF NOT EXISTS `uyeler_adres_defter` (
  `uye_adres_id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_id` int(11) NOT NULL,
  `uye_adres_baslik` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_adres_ad` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_adres_soyad` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_adres_ulke` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_adres_sehir` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_adres_semt` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_adres_telefon` varchar(256) COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye_adres_cep` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_adres_adres` text COLLATE utf8_turkish_ci NOT NULL,
  `uye_adres_tc` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`uye_adres_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler_fatura_defter`
--

DROP TABLE IF EXISTS `uyeler_fatura_defter`;
CREATE TABLE IF NOT EXISTS `uyeler_fatura_defter` (
  `uye_fatura_id` int(11) NOT NULL AUTO_INCREMENT,
  `uye_id` int(11) NOT NULL,
  `uye_fatura_baslik` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_fatura_ad` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_fatura_soyad` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_fatura_ulke` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_fatura_sehir` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_fatura_semt` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_fatura_telefon` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_fatura_cep` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_fatura_adres` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `uye_fatura_tc` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`uye_fatura_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
