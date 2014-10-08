-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Masin: localhost
-- Tegemisaeg: 08.10.2014 kell 11:17:08
-- Serveri versioon: 5.1.33
-- PHP versioon: 5.2.9

SET FOREIGN_KEY_CHECKS=0;

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Andmebaas: `blog`
--

-- --------------------------------------------------------

--
-- Struktuur tabelile `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `com_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `com_text` longtext NOT NULL,
  `com_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(20) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`com_id`),
  KEY `post_id` (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Tabeli andmete salvestamine `comment`
--


-- --------------------------------------------------------

--
-- Struktuur tabelile `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_subject` varchar(255) NOT NULL,
  `post_text` longtext NOT NULL,
  `post_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Tabeli andmete salvestamine `post`
--


-- --------------------------------------------------------

--
-- Struktuur tabelile `post_tags`
--

DROP TABLE IF EXISTS `post_tags`;
CREATE TABLE IF NOT EXISTS `post_tags` (
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`tag_id`,`post_id`),
  KEY `post_id` (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tabeli andmete salvestamine `post_tags`
--


-- --------------------------------------------------------

--
-- Struktuur tabelile `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `tag_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(25) NOT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Tabeli andmete salvestamine `tag`
--


-- --------------------------------------------------------

--
-- Struktuur tabelile `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `deleted` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Tabeli andmete salvestamine `user`
--


SET FOREIGN_KEY_CHECKS=1;
