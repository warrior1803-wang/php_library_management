-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 年 06 月 16 日 13:18
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `tushu`
--

-- --------------------------------------------------------

--
-- 表的结构 `board`
--

CREATE TABLE IF NOT EXISTS `board` (
  `user` varchar(50) NOT NULL,
  `time` varchar(30) NOT NULL,
  `message` varchar(300) NOT NULL,
  KEY `time` (`time`),
  KEY `time_2` (`time`),
  KEY `user` (`user`),
  KEY `user_2` (`user`),
  KEY `time_3` (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `board`
--

INSERT INTO `board` (`user`, `time`, `message`) VALUES
('admin', '2020-06-16 03:15:49pm', '欢迎你使用'),
('admin', '2020-06-16 03:16:35pm', '润体乳人人人 ');

-- --------------------------------------------------------

--
-- 表的结构 `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `sy` int(15) NOT NULL DEFAULT '0',
  `book_title` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `add_time` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `money` float DEFAULT NULL,
  `number` int(15) DEFAULT NULL,
  `num` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`num`),
  KEY `num` (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `book`
--

INSERT INTO `book` (`sy`, `book_title`, `author`, `add_time`, `type`, `money`, `number`, `num`) VALUES
(2, 'asp.net程序设计', '郑平', '2020-06-15 08:15:28pm', '程序语言', 20, 18, 19),
(1, 'PHP网站开发实例', '郑正红', '2020-06-16 01:53:53pm', '程序语言', 64, 19, 21),
(1, 'JAVA程序设计', '木子', '2020-06-16 02:24:19pm', '程序语言', 50, 19, 22),
(0, '平凡的世界', '路遥', '2020-06-16 03:03:41pm', '其它', 20, 30, 24);

-- --------------------------------------------------------

--
-- 表的结构 `borrow`
--

CREATE TABLE IF NOT EXISTS `borrow` (
  `user` varchar(20) NOT NULL,
  `book_id` int(15) DEFAULT NULL,
  `time` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `borrow`
--

INSERT INTO `borrow` (`user`, `book_id`, `time`) VALUES
('0001', 19, '2020-06-16 02:51:07pm'),
('0001', 21, '2020-06-16 02:51:13pm'),
('0001', 22, '2020-06-16 02:51:18pm');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL,
  `age` int(10) NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `account` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `password` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `nickname` varchar(50) NOT NULL DEFAULT '',
  `class` varchar(15) CHARACTER SET latin1 NOT NULL DEFAULT '',
  PRIMARY KEY (`account`,`password`,`nickname`,`class`),
  KEY `account` (`account`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `age`, `phone`, `account`, `password`, `nickname`, `class`) VALUES
(1, 0, '15285361222', '0001', '123456', '普通用户1', '0'),
(2, 0, '1526665777', '0002', '123456', '普通用户2', '0'),
(3, 0, '1563666565', 'admin', 'admin', '管理员', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
