-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-04-08 23:20:19
-- 服务器版本： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `psicoderu_sfp`
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
  `sun` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `challenge`
--

CREATE TABLE IF NOT EXISTS `challenge` (
`id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `challenge`
--

INSERT INTO `challenge` (`id`, `uid`, `cid`, `total`) VALUES
(1, 1, 2, 100);

-- --------------------------------------------------------

--
-- 表的结构 `exercise`
--

CREATE TABLE IF NOT EXISTS `exercise` (
  `eid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `speed` varchar(10) NOT NULL,
  `load` varchar(10) NOT NULL,
  `calories` varchar(10) NOT NULL,
  `repetation` int(11) NOT NULL,
  `object` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `exercise_plan`
--

CREATE TABLE IF NOT EXISTS `exercise_plan` (
`id` int(11) NOT NULL,
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
  `ex4_level` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `exercise_plan`
--

INSERT INTO `exercise_plan` (`id`, `user_id`, `exercise_type`, `difficulty`, `ex1_type`, `ex1_level`, `ex2_type`, `ex2_level`, `ex3_type`, `ex3_level`, `ex4_type`, `ex4_level`) VALUES
(1, 1, 2, 5, 2, 5, 3, 15, 2, 5, 3, 15);

-- --------------------------------------------------------

--
-- 表的结构 `plan`
--

CREATE TABLE IF NOT EXISTS `plan` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `problem`
--

CREATE TABLE IF NOT EXISTS `problem` (
`id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `problem` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `problem`
--

INSERT INTO `problem` (`id`, `uid`, `type`, `problem`) VALUES
(1, 1, 'dumbbell', '123'),
(2, 1, 'bicycle', '');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(4) NOT NULL,
  `age` int(11) NOT NULL,
  `gravatar` varchar(20) NOT NULL,
  `language` varchar(10) NOT NULL,
  `experience` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `scores` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `uid`, `name`, `pass`, `email`, `gender`, `age`, `gravatar`, `language`, `experience`, `status`, `scores`) VALUES
(1, 1, 'Chenjing', '123456', 'Anna@gmail.com', '0', 23, '', 'english', 2, 'Big problem with my brain.', 1807),
(2, 2, 'Kenny', '123456', 'Kenny@gmail.com', '1', 34, '', 'english', 2, 'beer belly', 1612),
(3, 3, 'Jarmo', '123456', 'Jarmo@gmail.com', '1', 34, '', 'english', 2, '', 1400),
(4, 4, 'Kaimo', '123456', 'Kaimo@gmail.com', '1', 34, '', 'chinese', 2, '', 1228),
(5, 5, 'Tomi', '123456', 'Tomi@gmail.com', '1', 34, '', 'chinese', 2, '', 966);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `wiki`
--

CREATE TABLE IF NOT EXISTS `wiki` (
  `id` int(11) NOT NULL,
  `title` varchar(44) NOT NULL,
  `date` datetime NOT NULL,
  `author` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `challenge`
--
ALTER TABLE `challenge`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
 ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `exercise_plan`
--
ALTER TABLE `exercise_plan`
 ADD KEY `id` (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uid` (`id`), ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD KEY `id` (`id`);

--
-- Indexes for table `wiki`
--
ALTER TABLE `wiki`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `challenge`
--
ALTER TABLE `challenge`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `exercise_plan`
--
ALTER TABLE `exercise_plan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
