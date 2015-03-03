-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 03 月 03 日 04:00
-- 服务器版本: 5.1.73-log
-- PHP 版本: 5.5.16-pl0-gentoo

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `psicoderu_sfp`
--

-- --------------------------------------------------------

--
-- 表的结构 `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(11) NOT NULL,
  `mon` int(11) NOT NULL,
  `tue` int(11) NOT NULL,
  `wed` int(11) NOT NULL,
  `thu` int(11) NOT NULL,
  `fri` int(11) NOT NULL,
  `sat` int(11) NOT NULL,
  `sun` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `exercise`
--

CREATE TABLE IF NOT EXISTS `exercise` (
  `eid` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `speed` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `load` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `calories` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `repetation` int(11) NOT NULL,
  `object` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `exercise_plan`
--

CREATE TABLE IF NOT EXISTS `exercise_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `exercise_type` int(11) NOT NULL,
  `difficulty` int(11) NOT NULL,
  `ex1_type` int(11) NOT NULL,
  `ex1_level` int(11) NOT NULL,
  `ex2_type` int(11) NOT NULL,
  `ex2_level` int(11) NOT NULL,
  `ex3_type` int(11) NOT NULL,
  `ex3_level` int(11) NOT NULL,
  `ex4_type` int(11) NOT NULL,
  `ex4_level` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `exercise_plan`
--

INSERT INTO `exercise_plan` (`id`, `user_id`, `exercise_type`, `difficulty`, `ex1_type`, `ex1_level`, `ex2_type`, `ex2_level`, `ex3_type`, `ex3_level`, `ex4_type`, `ex4_level`) VALUES
(1, 1, 1, 5, 1, 10, 2, 10, 3, 10, 4, 10);

-- --------------------------------------------------------

--
-- 表的结构 `plan`
--

CREATE TABLE IF NOT EXISTS `plan` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gravatar` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `experience` int(11) NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `scores` int(11) NOT NULL,
  FULLTEXT KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `gender`) VALUES
(1, 'Test', 'User', 30, 1);

-- --------------------------------------------------------

--
-- 表的结构 `wiki`
--

CREATE TABLE IF NOT EXISTS `wiki` (
  `id` int(11) NOT NULL,
  `title` varchar(44) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `author` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
