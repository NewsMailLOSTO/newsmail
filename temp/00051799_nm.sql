-- phpMyAdmin SQL Dump
-- version home.pl
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 15 Lis 2016, 10:36
-- Wersja serwera: 5.5.51-38.1-log
-- Wersja PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `00051799_nm`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `historia_logowan`
--

CREATE TABLE IF NOT EXISTS `historia_logowan` (
  `id_historia` int(6) NOT NULL AUTO_INCREMENT,
  `data` datetime DEFAULT NULL,
  `poprawnosc` tinyint(1) DEFAULT NULL,
  `ip` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `host` varchar(16) COLLATE utf8_bin DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_historia`),
  KEY `fk_historia_logowan_user1_idx` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kat_newsow`
--

CREATE TABLE IF NOT EXISTS `kat_newsow` (
  `id_kat_newsow` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa_kategorii` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_kat_newsow`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kat_uzytkownikow`
--

CREATE TABLE IF NOT EXISTS `kat_uzytkownikow` (
  `id_kategoria` int(6) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(16) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_kategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(6) NOT NULL AUTO_INCREMENT,
  `data` datetime DEFAULT NULL,
  `redaktor` int(6) DEFAULT NULL,
  `tytul` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `wstep` blob,
  `tresc` blob,
  `id_kat_newsow` int(11) DEFAULT NULL,
  `user_id_user` int(6) NOT NULL,
  PRIMARY KEY (`id_news`,`user_id_user`),
  KEY `fk_news_user1_idx` (`redaktor`),
  KEY `fk_news_kat_newsow1_idx` (`id_kat_newsow`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(6) NOT NULL AUTO_INCREMENT,
  `imie` varchar(16) COLLATE utf8_bin DEFAULT NULL,
  `nazwisko` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `haslo` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `kat_uzytkownikow` int(11) DEFAULT NULL,
  `aktywny` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `SECONDARY` (`nazwisko`),
  KEY `fk_user_kat_uzytkownikow_idx` (`kat_uzytkownikow`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_kat_newsow`
--

CREATE TABLE IF NOT EXISTS `user_kat_newsow` (
  `id_user_kat_newsow` int(6) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_kat_newsow` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user_kat_newsow`),
  KEY `fk_user_kat_newsow_user1_idx` (`id_user`),
  KEY `fk_user_kat_newsow_kat_newsow1_idx` (`id_kat_newsow`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `historia_logowan`
--
ALTER TABLE `historia_logowan`
  ADD CONSTRAINT `fk_historia_logowan_user1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_news_user1` FOREIGN KEY (`redaktor`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_news_kat_newsow1` FOREIGN KEY (`id_kat_newsow`) REFERENCES `kat_newsow` (`id_kat_newsow`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_kat_uzytkownikow` FOREIGN KEY (`kat_uzytkownikow`) REFERENCES `kat_uzytkownikow` (`id_kategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `user_kat_newsow`
--
ALTER TABLE `user_kat_newsow`
  ADD CONSTRAINT `fk_user_kat_newsow_user1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_kat_newsow_kat_newsow1` FOREIGN KEY (`id_kat_newsow`) REFERENCES `kat_newsow` (`id_kat_newsow`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
