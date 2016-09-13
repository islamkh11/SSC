-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2016 at 06:30 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `password`, `name`, `email`, `level`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'admin adminstrator', 'hamo856@yahoo.com', 1),
(7, 'islam', '123', 'islam khamis', 'islamkhamis@yahoo.com', 2),
(8, 'Morsy', '123', 'Morsy Abdelhady', 'Morsy@yahoo.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ans` varchar(1000) CHARACTER SET utf16 NOT NULL,
  `username` varchar(50) NOT NULL,
  `queId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `ans`, `username`, `queId`) VALUES
(1, 'abem reden abem reden abem reden ', 'ahmed14', 1),
(2, 'abem reden abem reden abem reden abem reden abem reden abem reden ', 'ahmed14', 2),
(3, 'بالطبع تاريخ علوم و علم نفس', 'ahmed14', 9),
(4, 'بالطبع تاريخ علوم و علم نفس', 'ahmed14', 9),
(5, 'اذا كنت اقرب لدراسة الاقتصاد فاساسيات الادارة بالتاكيد ', 'ahmed14', 9),
(6, 'علم النفس الافضل تماما', 'ahmed14', 9),
(7, 'اعتقد ان متطلبات خوارزميات هى مقدمة برمجة حاسب 1 و تراكيب متقطعة و تراكيب بيانات', 'ahmed14', 4),
(8, 'ربما تراكيب بيانات ليست متطلب للخوارزميات', 'sara11', 4);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `post_id` varchar(20) DEFAULT NULL,
  `writer_username` varchar(20) DEFAULT NULL,
  `body` varchar(500) CHARACTER SET utf16 DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=244 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `post_id`, `writer_username`, `body`, `date`) VALUES
(1, '136', 'ahmed11', 'lif;sougf;iu gds ;igf', '2016-02-23 17:36:00'),
(2, '27', 'ahmed11', '', '2016-02-14 00:38:51'),
(3, '136', 'ahmed11', 'errrr', '2016-02-23 17:36:45'),
(4, '27', 'ahmed11', 'dkbgisbgiu', '2016-02-14 00:44:19'),
(5, '27', 'ahmed11', 'kbkfubgub', '2016-02-14 00:45:18'),
(6, '27', 'ahmed11', 'lol', '2016-02-14 00:45:32'),
(7, '27', 'ahmed11', 'tt', '2016-02-14 00:49:55'),
(8, '27', 'morsy11', 'very ok', '2016-02-14 01:16:39'),
(9, '27', 'morsy11', 'do you no', '2016-02-14 01:18:06'),
(10, '27', 'morsy11', 'tewt', '2016-02-14 01:19:11'),
(11, '27', 'morsy11', '27 comment', '2016-02-14 01:20:41'),
(12, '28', 'morsy11', 'comment 28', '2016-02-14 01:20:57'),
(13, '27', 'ahmed11', 'why not', '2016-02-14 01:21:57'),
(14, '28', 'ahmed11', 'yyy', '2016-02-14 01:22:24'),
(15, '31', 'ahmed11', 'yyuu', '2016-02-14 01:24:16'),
(16, '32', 'ahmed11', 'ha', '2016-02-15 19:39:20'),
(17, '35', 'sarr11', 'yeh', '2016-02-16 21:41:11'),
(18, '35', 'sarr11', 'yy', '2016-02-16 21:41:17'),
(19, '118', 'ahmed14', 'yes it is', '2016-02-22 06:59:30'),
(20, '118', 'ahmed14', 'my comment', '2016-02-22 07:00:25'),
(21, '116', 'ahmed14', 'my comment', '2016-02-22 07:29:05'),
(22, '116', 'ahmed14', 'my new comment', '2016-02-22 17:32:56'),
(23, '116', 'ahmed14', 'my comm', '2016-02-22 17:37:13'),
(24, '116', 'ahmed14', 'rrr', '2016-02-22 17:38:39'),
(25, '116', 'ahmed14', 'serl', '2016-02-22 17:39:24'),
(26, '120', 'ahmed14', 'yyyy commme', '2016-02-22 18:58:18'),
(27, '120', 'ahmed14', 'that it', '2016-02-22 18:58:29'),
(28, '119', 'ahmed14', 'fe elard', '2016-02-22 18:58:48'),
(29, '119', 'ahmed14', 'allah ya allah', '2016-02-22 18:58:59'),
(30, '130', 'ahmed14', 'my yyy comment', '2016-02-23 13:45:56'),
(31, '130', 'ahmed14', 'yyyy', '2016-02-23 14:16:24'),
(32, '130', 'ahmed14', 'yyy', '2016-02-23 14:17:12'),
(33, '130', 'ahmed14', 'ttttt', '2016-02-23 14:17:40'),
(34, '130', 'ahmed14', 'yyyyri ygdiy sg', '2016-02-23 14:29:50'),
(35, '130', 'ahmed14', 'ddd', '2016-02-23 14:31:15'),
(36, '130', 'ahmed14', 'yyyttt', '2016-02-23 14:31:48'),
(37, '129', 'ahmed14', 'ffff', '2016-02-23 14:33:14'),
(38, '123', 'ahmed14', 'yaaaaaa', '2016-02-23 15:28:07'),
(39, '123', 'ahmed14', 'ahhhhhhhhh', '2016-02-23 15:28:17'),
(40, '123', 'ahmed14', 'yyiavfya ', '2016-02-23 15:28:32'),
(41, '120', 'ahmed14', 'ttt', '2016-02-23 15:28:47'),
(42, '130', 'ahmed14', 'tttt', '2016-02-23 15:37:02'),
(43, '130', 'ahmed14', 'rrrr', '2016-02-23 15:38:13'),
(44, '130', 'ahmed14', 'crwr', '2016-02-23 15:40:06'),
(45, '130', 'morsy11', 'tttt', '2016-02-23 15:45:04'),
(46, '130', 'morsy11', 'eee', '2016-02-23 15:45:11'),
(47, '130', 'morsy11', 'rrrr', '2016-02-23 15:49:47'),
(48, '130', 'morsy11', 'fff', '2016-02-23 15:52:52'),
(49, '130', 'morsy11', 'cdv', '2016-02-23 15:53:42'),
(50, '130', 'morsy11', 'vvv', '2016-02-23 15:55:07'),
(51, '130', 'morsy11', 'vsdg', '2016-02-23 15:55:37'),
(52, '130', 'morsy11', 'cdshbfks', '2016-02-23 15:55:50'),
(53, '130', 'morsy11', 'fgvgv', '2016-02-23 15:56:15'),
(54, '130', 'morsy11', 'gdgfg', '2016-02-23 15:56:43'),
(55, '130', 'morsy11', 'djbgjjb g', '2016-02-23 15:57:09'),
(56, '130', 'morsy11', 'lkxnlljbnl jbk', '2016-02-23 15:58:00'),
(57, '130', 'morsy11', 'jfgbkjfbkg', '2016-02-23 15:59:15'),
(58, '130', 'morsy11', 'ngfbuif bigu di', '2016-02-23 15:59:29'),
(59, '130', 'morsy11', 'dfdsbkj ', '2016-02-23 16:00:24'),
(60, '130', 'morsy11', 'fdjbf h dbhfbhj ', '2016-02-23 16:00:34'),
(61, '129', 'morsy11', 'dhbsfhdb ', '2016-02-23 16:00:47'),
(62, '137', 'morsy11', 'jkbkjfbgkj', '2016-02-23 16:42:48'),
(63, '137', 'morsy11', 'jkdbkjb kjb', '2016-02-23 16:43:08'),
(64, '137', 'morsy11', 'jcbvkfk jbfj ', '2016-02-23 16:43:25'),
(65, '136', 'morsy11', 'djkbfjkdb ', '2016-02-23 16:43:35'),
(66, '136', 'morsy11', 'jdkbjk dbk', '2016-02-23 16:43:41'),
(67, '136', 'morsy11', 'djkbkdbf k', '2016-02-23 17:48:06'),
(68, '136', 'morsy11', 'my net', '2016-02-23 17:48:16'),
(69, '142', 'ahmed14', 'jfkb fbd bfk jdk ', '2016-02-23 19:46:55'),
(70, '146', 'ahmed14', 'yyy', '2016-02-24 19:04:19'),
(71, '150', 'ahmed14', 'yes', '2016-02-25 07:00:21'),
(72, '148', 'ahmed14', 'eoe', '2016-02-25 20:00:52'),
(73, '148', 'ahmed14', 'seee', '2016-02-25 20:01:20'),
(74, '161', 'dina11', 'yes it is', '2016-02-26 16:54:59'),
(75, '161', 'dina11', 'yes it is', '2016-02-26 16:55:07'),
(76, '159', 'dina11', 'new sun', '2016-02-26 17:07:55'),
(77, '150', 'ahmed14', 'no', '2016-02-26 17:08:45'),
(78, '150', 'dina11', 'first comment', '2016-02-26 17:23:09'),
(79, '150', 'ahmed14', 'second comment', '2016-02-26 17:48:43'),
(80, '150', 'ahmed14', 'second comment', '2016-02-26 17:48:54'),
(81, '159', 'dina11', 'sun', '2016-02-26 17:49:07'),
(82, '150', 'dina11', 'third comment', '2016-02-27 06:49:21'),
(83, '150', 'ahmed14', 'forth comment', '2016-02-27 06:49:56'),
(84, '164', 'dina11', 'comm', '2016-02-27 06:57:52'),
(85, '158', 'dina11', 'my comment', '2016-02-27 07:07:08'),
(86, '158', 'ahmed14', 'new comment', '2016-02-27 07:07:35'),
(87, '158', 'dina11', 'newest commet', '2016-02-27 07:08:08'),
(88, '126', 'dina11', 'global', '2016-02-27 07:09:02'),
(89, '158', 'ahmed14', 'game', '2016-02-27 07:11:11'),
(90, '158', 'ahmed14', 'game', '2016-02-27 07:11:22'),
(91, '158', 'dina11', 'wall', '2016-02-27 07:12:10'),
(92, '158', 'dina11', 'wall', '2016-02-27 07:14:12'),
(93, '158', 'dina11', 'wall2', '2016-02-27 07:14:46'),
(94, '158', 'dina11', 'ret', '2016-02-27 07:18:23'),
(95, '158', 'dina11', 'ete', '2016-02-27 07:22:17'),
(96, '158', 'dina11', 'return', '2016-02-27 07:31:05'),
(97, '158', 'ahmed14', 'sub', '2016-02-27 07:35:32'),
(98, '158', 'dina11', 'submit', '2016-02-27 07:36:07'),
(99, '150', 'dina11', 'final comment', '2016-02-27 07:38:47'),
(100, '148', 'ahmed14', 'seen', '2016-02-27 07:39:14'),
(101, '150', 'ahmed14', 'project', '2016-02-27 07:39:41'),
(102, '163', 'ahmed14', 'yes', '2016-02-28 06:17:19'),
(103, '163', 'ahmed14', 'yes2', '2016-02-28 06:24:53'),
(104, '115', 'ahmed14', 'solid', '2016-03-01 11:01:57'),
(105, '114', 'ahmed14', 'solid comment', '2016-03-01 11:02:16'),
(106, '178', 'ahmed14', 'alert comment', '2016-03-01 11:27:38'),
(107, '174', 'ahmed14', 'alert comment A', '2016-03-01 11:27:53'),
(108, '178', 'ahmed14', 'comment d', '2016-03-01 11:34:22'),
(109, '176', 'ahmed14', 'c comment', '2016-03-01 12:02:37'),
(110, '175', 'ahmed14', 'b comment', '2016-03-01 12:03:06'),
(111, '176', 'ahmed14', 'c comment dash', '2016-03-01 12:03:23'),
(112, '178', 'ahmed14', 'comment B', '2016-03-01 12:04:00'),
(113, '174', 'ahmed14', 'comment A', '2016-03-01 12:04:20'),
(114, '175', 'ahmed14', 'b comment dash', '2016-03-01 12:05:00'),
(115, '176', 'ahmed14', 'c comment dash dash', '2016-03-01 12:05:28'),
(116, '180', 'ahmed14', 'new advanced comment ', '2016-03-01 12:09:07'),
(117, '178', 'ahmed14', 'comment B dash', '2016-03-01 12:09:33'),
(118, '179', 'ahmed14', 'course in comment', '2016-03-01 12:09:55'),
(119, '178', 'ahmed14', 'comment B dash dash', '2016-03-01 12:10:13'),
(120, '179', 'ahmed14', 'course comment dash', '2016-03-01 12:10:32'),
(121, '180', 'ahmed14', 'new avanced dash', '2016-03-01 12:10:58'),
(122, '174', 'ahmed14', 'comment A dash', '2016-03-01 12:11:22'),
(123, '', 'ahmed14', '', '2016-03-01 12:13:52'),
(124, '179', 'ahmed14', 'ci', '2016-03-01 12:16:36'),
(125, '', 'ahmed14', '$', '2016-03-01 12:16:48'),
(126, '181', 'ahmed14', 'rr', '2016-03-01 12:40:30'),
(127, '181', 'ahmed14', 'comment rr', '2016-03-01 12:40:44'),
(128, '179', 'ahmed14', 'ci comment', '2016-03-01 12:41:13'),
(129, '181', 'ahmed14', 'comment rr dash', '2016-03-01 12:42:02'),
(130, '179', 'ahmed14', 'ci comment dash dash', '2016-03-01 12:42:27'),
(131, '182', 'ahmed14', 'theroy 1 comment', '2016-03-01 12:44:35'),
(132, '182', 'ahmed14', 'theory comment dash', '2016-03-01 12:44:46'),
(133, '178', 'ahmed14', 'comment B', '2016-03-01 12:45:27'),
(134, '185', 'ahmed14', 'A comment', '2016-03-01 12:52:58'),
(135, '185', 'ahmed14', 'A 2 comment', '2016-03-01 12:53:21'),
(136, '185', 'ahmed14', 'A3 comment', '2016-03-01 13:14:02'),
(137, '185', 'ahmed14', 'A', '2016-03-01 13:14:16'),
(138, '158', 'ali11', 'my comment', '2016-03-02 07:43:51'),
(139, '157', 'ali11', 'second comment', '2016-03-02 07:44:08'),
(140, '156', 'ali11', 'third comment', '2016-03-02 07:44:22'),
(141, '160', 'ali11', 'very new comment', '2016-03-02 07:49:16'),
(142, '159', 'ali11', 'new comment', '2016-03-02 07:49:31'),
(143, '193', 'ali11', 'new post mechanic', '2016-03-02 07:50:11'),
(144, '185', 'ali11', 'post a comment', '2016-03-02 07:50:41'),
(145, '181', 'ali11', 'refresh comment', '2016-03-02 07:51:00'),
(146, '186', 'ali11', 'comment b', '2016-03-02 07:51:27'),
(147, '179', 'ali11', 'comment in course', '2016-03-02 07:51:44'),
(148, '185', 'ahmed14', 'yes', '2016-03-03 07:09:11'),
(149, '172', 'dina11', 'post 3 comment', '2016-03-03 18:49:30'),
(150, '164', 'dina11', 'new comment', '2016-03-03 18:49:55'),
(151, '143', 'dina11', 'new math', '2016-03-03 18:50:28'),
(152, '185', 'ahmed14', 'this comment for test', '2016-03-06 17:15:58'),
(153, '190', 'ahmed14', 'this for data structure post', '2016-03-06 17:16:46'),
(154, '189', 'ahmed14', 'cs comment', '2016-03-06 17:17:14'),
(155, '139', 'dina11', 'comment d', '2016-03-11 15:11:12'),
(156, '189', 'ahmed14', 'cs comment cs', '2016-03-11 15:12:01'),
(157, '189', 'dina11', 'comment sc', '2016-03-11 15:12:20'),
(158, '189', 'ahmed14', 'new comment cs', '2016-03-11 15:12:52'),
(159, '186', 'ahmed14', 'bcomment', '2016-03-11 16:58:53'),
(160, '199', 'ahmed14', 'comment', '2016-03-12 07:35:34'),
(161, '198', 'ahmed14', 'comment', '2016-03-12 07:35:46'),
(162, '196', 'ahmed14', 'new', '2016-03-12 14:43:22'),
(163, '196', 'ahmed14', 'new ', '2016-03-14 06:59:46'),
(164, '195', 'ahmed14', 'ne w ', '2016-03-14 07:14:48'),
(165, '185', 'ahmed14', 'new new ', '2016-03-14 10:10:10'),
(166, '195', 'ahmed14', 'new comm', '2016-03-14 10:10:25'),
(167, '194', 'ahmed14', 'new comment', '2016-03-14 10:47:20'),
(168, '194', 'ahmed14', 'comment comment', '2016-03-14 10:47:29'),
(169, '190', 'ahmed14', 'data comment', '2016-03-14 10:47:45'),
(170, '190', 'ahmed14', 'dat comm', '2016-03-14 13:18:42'),
(171, '202', 'ahmed14', 'new comm', '2016-03-20 19:50:30'),
(172, '196', 'ahmed14', 'my new ', '2016-03-20 19:50:41'),
(173, '186', 'ahmed14', 'new commm', '2016-03-20 19:51:05'),
(174, '179', 'ahmed14', 'comment 1', '2016-03-20 19:51:25'),
(175, '157', 'ahmed14', 'new cooo', '2016-03-20 19:52:07'),
(176, '156', 'ahmed14', 'new comment', '2016-03-20 19:52:23'),
(177, '203', 'ahmed14', 'new comment', '2016-03-21 07:54:15'),
(178, '203', 'dina11', 'referanc', '2016-03-25 09:15:19'),
(179, '195', 'dina11', 'doen', '2016-03-25 09:15:31'),
(180, '202', 'dina11', 'new comment', '2016-03-26 10:41:46'),
(181, '196', 'dina11', 'data comment', '2016-03-26 10:42:00'),
(182, '182', 'dina11', 'theory comment', '2016-03-26 10:42:24'),
(183, '209', 'ahmed14', 'oh wow ', '2016-03-26 11:22:15'),
(184, '209', 'dina11', 'amazing', '2016-03-26 11:22:29'),
(185, '216', 'ahmed14', 'fgndfn', '2016-03-26 14:45:57'),
(186, '186', 'dina11', 'my not', '2016-03-26 16:01:55'),
(187, '260', 'dina11', 'jbkc b ???? ????? ?', '2016-03-26 16:44:43'),
(188, '260', 'dina11', 'كومنت', '2016-03-26 16:46:18'),
(189, '263', 'ahmed14', 'تعليق عن المنشور', '2016-03-26 16:48:18'),
(190, '264', 'ahmed14', 'تعليق عن المحاضرة', '2016-03-26 16:48:54'),
(191, '264', 'dina11', 'نعم نعم ', '2016-03-26 16:49:29'),
(192, '266', 'ahmed14', 'تعليق ', '2016-03-26 17:22:51'),
(193, '266', 'dina11', 'تعليق اخر', '2016-03-26 17:23:10'),
(194, '265', 'ahmed14', 'تعليق تعليق', '2016-03-26 17:28:12'),
(195, '259', 'ahmed14', 'jbjkbjhv', '2016-04-12 15:23:27'),
(196, '195', 'ahmed14', 'seo', '2016-04-12 15:23:42'),
(197, '267', 'samy11', 'الاسماء', '2016-04-17 16:57:03'),
(198, '261', 'samy11', 'follow', '2016-04-17 16:57:15'),
(199, '186', 'samy11', 'follow', '2016-04-17 16:57:42'),
(200, '270', 'samy11', 'jfbjdb', '2016-04-17 17:11:38'),
(201, '270', 'samy11', 'jbkjbjk', '2016-04-17 17:11:44'),
(202, '260', 'samy11', 'been viewed', '2016-04-17 17:16:22'),
(203, '271', 'ahmed14', 'jkdb ghbfgh', '2016-04-17 19:34:35'),
(204, '266', 'dina11', 'yes recomment', '2016-04-30 14:24:31'),
(205, '1009', 'dina11', 'تعليق اخر', '2016-04-30 14:26:49'),
(206, '1009', 'ahmed14', 'final exam', '2016-04-30 14:27:21'),
(207, '269', 'ahmed14', 'beer', '2016-05-02 07:41:45'),
(208, '261', 'ahmed14', 'ok', '2016-05-02 07:42:00'),
(209, '259', 'ahmed14', 'am in', '2016-05-02 07:42:10'),
(210, '264', 'ahmed14', 'okk', '2016-05-02 07:42:28'),
(211, '192', 'ahmed14', 'lol', '2016-05-02 07:42:40'),
(212, '261', 'ahmed14', 'near', '2016-05-16 06:25:45'),
(213, '1011', 'ahmed14', '9 AM', '2016-05-16 06:57:12'),
(214, '1009', 'ahmed14', '9AM', '2016-05-16 06:57:25'),
(215, '265', 'ahmed14', 'اليوم ندوة قسم حاسب', '2016-05-16 06:59:19'),
(216, '1013', 'ahmed14', 'follow', '2016-05-20 12:41:13'),
(217, '1007', 'ahmed14', 'grad is 2.3', '2016-05-20 19:01:43'),
(218, '1012', 'samy11', 'اتمنى التوفيق للادارة الجديدة', '2016-05-20 19:05:37'),
(219, '1014', 'samy11', 'ارجو ان تتوفر للمناقشة قبل اقرارها', '2016-05-20 19:27:31'),
(220, '1014', 'ahmed14', 'بالتاكيد سنعمل على هذا الامر', '2016-05-20 19:27:50'),
(221, '260', 'mo11', 'followed', '2016-05-21 17:29:23'),
(222, '260', 'mo11', 'i have a book of that tobic', '2016-05-21 17:56:02'),
(223, '196', 'mo11', 'please upload it ', '2016-05-21 17:56:26'),
(224, '1020', 'ahmed14', 'سنحرص على ايضاح لى معبوملت جديدة عن هذا المشروع', '2016-05-21 17:58:51'),
(225, '1020', 'mo11', 'ساكون بالانتظار', '2016-05-21 17:59:05'),
(226, '260', 'dina11', 'ارجو ان ترسل هذا الكتاب ', '2016-05-21 18:10:35'),
(227, '260', 'mo11', 'OK', '2016-05-22 06:27:14'),
(228, '1026', 'ahmed14', 'good one', '2016-06-14 21:57:04'),
(229, '1026', 'dina11', 'self note', '2016-06-14 21:57:30'),
(230, '1025', 'ahmed14', 'this content related to new course', '2016-06-15 06:30:25'),
(231, '1025', 'dina11', 'foolwed', '2016-06-15 06:31:01'),
(232, '1025', 'dina11', 'newed', '2016-06-15 06:45:05'),
(233, '1025', 'dina11', 'related', '2016-06-15 06:46:16'),
(234, '1025', 'ahmed14', 'near new info', '2016-06-15 06:55:13'),
(235, '1025', 'ahmed14', 'سنقرر هذا الفصل الدراسى القادم', '2016-06-15 08:17:56'),
(236, '1031', 'ahmed14', 'ساقوم بتحميل كتاب متخصص فى هذا الموضوع', '2016-06-17 08:39:40'),
(237, '1031', 'sara11', 'may be you shoudle make a a comm video before adding the book', '2016-06-17 09:17:57'),
(239, '1031', 'ahmed14', 'سافعل باذن الله', '2016-06-17 08:48:45'),
(240, '1029', 'sara11', 'يمكنك السؤال فى الصفحة الرئيسية افضل', '2016-06-17 09:15:33'),
(241, '1032', 'sara11', 'may be a link will help', '2016-06-17 09:19:24'),
(242, '1029', 'ahmed14', 'I well do this ', '2016-06-17 09:57:41'),
(243, '1012', 'sara11', 'بعون الله', '2016-06-17 11:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `code` varchar(30) DEFAULT NULL,
  `start` varchar(2) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `day` varchar(2) NOT NULL,
  `place` varchar(50) NOT NULL,
  `Aname` varchar(100) CHARACTER SET utf16 NOT NULL,
  `pict` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=925 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`code`, `start`, `id`, `name`, `day`, `place`, `Aname`, `pict`) VALUES
('Math 101', '8', 3, 'Dynamics analytical ', 'Sa', 'm1 & Sh', 'تحليل متغيرات', ''),
('Math 202', '12', 5, 'Mathematical analysis 2 ', 'Su', 'h2 bf b', 'تحليل رياضى 2', ''),
('Math 311', NULL, 15, 'Operations Research 1 ', '', '', '', ''),
('Stat 102', '2', 25, 'Introduction to Probability and Statisti', 'We', 'm2 & Sh', '', ''),
('Stat 321', NULL, 36, 'Statistically non-parametric ', '', '', '', ''),
('Stat 412', NULL, 39, 'Data Mining ', '', '', '', ''),
('CS 202', '8', 44, 'Data Structures and Process files ', 'Sa', 'sh 5&g', 'تراكيب بيانات و معالجة ملفات', '../uploads/site/4681_15-06-2016_img_1374276696_152_-_Copy.jpg'),
('Phy 317', NULL, 74, 'Advanced statistical physics ', '', '', '', ''),
('Phy 318', NULL, 75, 'Practical Physics 7 ', '', '', '', ''),
('Phy 417', NULL, 89, 'Advanced Quantum Physics ', '', '', '', ''),
('Phy 418', NULL, 90, 'Practical Physics 8 ', '', '', '', ''),
('BP 201', NULL, 101, 'Fundamentals and Methods of Biophysics 1', '', '', '', ''),
('BP 302', NULL, 104, 'Healthy biophysical ', '', '', '', ''),
('BP 305', NULL, 105, 'Biophysical ultrasound and laser ', '', '', '', ''),
('BP 306', NULL, 106, 'Ways in Angiography ', '', '', '', ''),
('BP 308', NULL, 107, 'Methods in Medical Bioinformatics ', '', '', '', ''),
('BP 407', NULL, 109, 'Biophysical medical imaging ', '', '', '', ''),
('BP 408', NULL, 110, 'Fundamentals in tissue engineering ', '', '', '', ''),
('BP 410', NULL, 111, 'Nucleic acid and protein biophysical ', '', '', '', ''),
('Z 224', NULL, 115, 'General Zoology ', '', '', '', ''),
('Bioc 231', NULL, 118, 'General Biochemistry ', '', '', '', ''),
('C 251', NULL, 125, 'Thermodynamics and base class ', '', '', '', ''),
('C 312', NULL, 127, 'Analytical Chemistry practical 2 ', '', '', '', ''),
('C 314', NULL, 129, 'Instrumental Analysis 1 ', '', '', '', ''),
('C 331', NULL, 130, 'Chemistry of transition metal ', '', '', '', ''),
('C 333', NULL, 132, 'Practical Coordination chemistry ', '', '', '', ''),
('C 355', NULL, 137, 'Kinetics of reactions and electrical che', '', '', '', ''),
('C 356', NULL, 138, 'Chemistry and Catalysis surfaces ', '', '', '', ''),
('C 357', NULL, 139, 'Physical Chemistry practical 2 ', '', '', '', ''),
('C 413', NULL, 142, 'Practical Instrumental Analysis 2 ', '', '', '', ''),
('C 425', NULL, 148, 'Combustion and air pollution ', '', '', '', ''),
('C 426', NULL, 149, 'Chemistry dyes and dyeing ', '', '', '', ''),
('C 448', NULL, 160, 'Practical Organic Chemistry 4 ', '', '', '', ''),
('C 458', NULL, 168, 'Quantum chemistry 2 ', '', '', '', ''),
('Phy', NULL, 169, 'Applied Electronics ', '', '', '', ''),
('C 102', '', 177, 'C 102', '', '', '', './resources/uploads/1789_20-05-2016_rt.PNG'),
('C 104', NULL, 179, 'C 104', '', '', '', ''),
('Bot 211', NULL, 183, 'Water fluid relations and Plant Nutritio', '', '', '', ''),
('Bot 303', NULL, 187, 'Biotechnology of the plant and the survi', '', '', '', ''),
('Bot 306', NULL, 188, 'The division of non-flowering plants ', '', '', '', ''),
('BT 202', NULL, 196, 'Basics of biotechnology ', '', '', '', ''),
('MB 201', NULL, 199, 'Basics of microbiology ', '', '', '', ''),
('C 204', NULL, 212, 'Practical Analytical Chemistry ', '', '', '', ''),
('BT 405', NULL, 215, 'Genes techniques', '', '', '', ''),
('Bot 226', NULL, 240, 'Basics of genetics ', '', '', '', ''),
('E 214', NULL, 248, 'Insects and human civilization ', '', '', '', ''),
('Bioc 221', NULL, 284, 'Biomolecules Chemistry ', '', '', '', ''),
('C 103', NULL, 314, 'C 103', '', '', '', ''),
('Math 201', '2', 336, 'Mathematical analysis 1 and solid geomet', 'Th', 'fb bue3', 'تحليل رياضى و هندسة ', ''),
('Math 252', NULL, 340, 'Mathematical modeling ', '', '', '', ''),
('Math 301', NULL, 341, 'Abstract Algebra 1 ', '', '', '', ''),
('Math 302', NULL, 342, 'Mathematical logic 1 ', '', '', '', ''),
('Math 304', NULL, 344, 'Private functions ', '', '', '', ''),
('Math 306', NULL, 346, 'Numerical analysis 1 ', '', '', '', ''),
('Math 307', NULL, 347, 'number theory ', '', '', '', ''),
('Math 308', NULL, 348, 'Integral equations ', '', '', '', ''),
('Math 353', NULL, 353, 'Electrical Dynamics ', '', '', '', ''),
('Math 354', NULL, 354, 'Methods of Applied Mathematics 1 ', '', '', '', ''),
('Math 356', NULL, 355, 'The special theory of relativity ', '', '', '', ''),
('Math 401', NULL, 356, 'Abstract Algebra 2 ', '', '', '', ''),
('Math 402', NULL, 357, 'Mathematical logic 2 ', '', '', '', ''),
('Math 403', NULL, 358, 'Partial Differential Equations ', '', '', '', ''),
('Math 404', NULL, 359, 'Real Analysis ', '', '', '', ''),
('Math 405', NULL, 360, 'Complex Functions 2 ', '', '', '', ''),
('Math 406', NULL, 361, 'Numerical Analysis 2 ', '', '', '', ''),
('Math 408', NULL, 362, 'Functional Analysis 2 ', '', '', '', ''),
('Math 409', NULL, 363, 'Differential geometry ', '', '', '', ''),
('Math 410', NULL, 364, 'Measurement theory and the integration o', '', '', '', ''),
('Math 415', NULL, 365, 'poolean Algebra ', '', '', '', ''),
('Math 420', NULL, 366, 'Selected topics in pure mathematics ', '', '', '', ''),
('Math 451', NULL, 367, 'Flexibility linear theory ', '', '', '', ''),
('Math 452', NULL, 368, 'Fluid Dynamics2 ', '', '', '', ''),
('Math 453', NULL, 369, 'Quantum Mechanics 1 ', '', '', '', ''),
('Math 454', NULL, 370, 'Methods of Applied Mathematics 2 ', '', '', '', ''),
('Math 456', NULL, 371, 'Advanced flexibility theory ', '', '', '', ''),
('Math 458', NULL, 372, 'Quantum mechanics ', '', '', '', ''),
('Math 459', NULL, 373, 'statistical mechanics ', '', '', '', ''),
('Math 470', NULL, 374, 'Selected Topics in Applied Mathematics ', '', '', '', ''),
('Math 490', NULL, 375, 'Research project ', '', '', '', ''),
('Stat 203', NULL, 379, 'Statistical theory 1 ', '', '', '', ''),
('Stat 301', NULL, 381, 'Non-parameteric statistics ', '', '', '', ''),
('Stat 302', NULL, 382, 'Methods of simulation and preview ', '', '', '', ''),
('Stat 303', NULL, 383, 'Statistical theory 2 ', '', '', '', ''),
('Stat 304', NULL, 384, 'Multivariate analysis ', '', '', '', ''),
('Stat 305', NULL, 385, 'Time series analysis ', '', '', '', ''),
('Stat 307', NULL, 386, 'Statistical quality control ', '', '', '', ''),
('Stat 311', NULL, 387, 'Statistical packages ', '', '', '', ''),
('Stat 312', NULL, 388, 'Applied probability ', '', '', '', ''),
('Stat 314', NULL, 389, 'Qualitative data analysis ', '', '', '', ''),
('Stat 316', NULL, 390, 'Mathematical statistics ', '', '', '', ''),
('Stat 401', NULL, 391, 'Design of Experiments ', '', '', '', ''),
('Stat 402', NULL, 392, 'Random operations ', '', '', '', ''),
('Stat 411', NULL, 393, 'Operations Research 2 ', '', '', '', ''),
('Stat 413', NULL, 394, 'Life and fitness tests ', '', '', '', ''),
('Stat 415', NULL, 395, 'Selected Topics in Statistics ', '', '', '', ''),
('Stat 416', NULL, 396, 'Probability theory ', '', '', '', ''),
('Stat 417', NULL, 397, 'Sequential Analysis ', '', '', '', ''),
('Stat 418', NULL, 398, 'Statistics ordinal ', '', '', '', ''),
('Stat 490', NULL, 399, 'Research project in statistics ', '', '', '', ''),
('Math 203', '8', 400, 'Linear algebra ', 'Tu', 'f yv y3', '', './resources/uploads/6135_20-05-2016_Capturettc.PNG'),
('Math 312', NULL, 403, 'Equations differences ', '', '', '', ''),
('CS 102', '2', 408, 'Computer Programming 1 ', 'Th', 'm1 & Sh', 'برمجة حاسب 1', '../uploads/site/2430_21-05-2016_1789_20-05-2016_rt.PNG'),
('CS 201', '6', 409, 'Computer Programming 2 ', 'Mo', 'm5 & Sh', 'برمجة حاسب 2', '../uploads/site/4969_21-05-2016_6135_20-05-2016_Capturettc.PNG'),
('CS 203', '10', 411, 'Discrete Structures ', 'We', '', 'تراكيب متقطعة', ''),
('CS 204', NULL, 412, 'Theory of Computing ', '', '', 'نظرية الحسابات', ''),
('CS 206', NULL, 413, 'Advanced Programming ', '', '', 'برمجة متقدمة', ''),
('CS 208', '4', 414, 'Computer architecture and organization ', 'Mo', '', 'عمارة حاسب و تنظيم', '../uploads/site/6880_15-06-2016_images_027.jpg'),
('CS 210', '2', 415, 'Programming networks and the Internet ', 'We', '', 'برمجة شبكات و انترنت', ''),
('CS 212', NULL, 416, 'Concepts of programming languages ', '', '', '', ''),
('CS 214', '10', 417, 'Simulation and modeling systems ', 'Sa', '', 'محاكاة و نمذجة نظم', ''),
('CS 301', '4', 418, 'Operating systems and programming system', 'Tu', '', 'نظم تشغيل و برمجة نظم', ''),
('CS 302', NULL, 419, 'Database Systems ', '', '', '', ''),
('CS 303', NULL, 420, 'Artificial intelligence ', '', '', '', ''),
('CS 304', NULL, 421, 'Architecture and protocols ', '', '', '', ''),
('CS 305', NULL, 422, 'OOD ', '', '', '', ''),
('CS 306', NULL, 423, 'Logic ', '', '', '', ''),
('CS 307', NULL, 424, 'Data and analysis of algorithms ', '', '', '', ''),
('CS 308', NULL, 425, 'Software Engineering ', '', '', '', ''),
('CS 309', NULL, 426, 'Computer algorithms ', '', '', '', ''),
('CS 310', NULL, 427, 'The ability of computers ', '', '', '', ''),
('CS 311', NULL, 428, 'Middleware software engineering ', '', '', '', ''),
('CS 313', NULL, 429, 'HCL ', '', '', '', ''),
('CS 314', NULL, 430, 'Parallel Computing ', '', '', '', ''),
('CS 315', NULL, 431, 'Microprocessor ', '', '', '', ''),
('CS 316', NULL, 432, 'Design Compilers ', '', '', '', ''),
('CS 317', NULL, 433, 'Data compression ', '', '', '', ''),
('CS 318', NULL, 434, 'Algorithms in bioremediation ', '', '', '', ''),
('CS 319', NULL, 435, 'E-learning methods ', '', '', '', ''),
('CS 320', NULL, 436, 'The theory of algorithms ', '', '', '', ''),
('CS 321', NULL, 437, 'multimedia ', '', '', '', ''),
('CS 323', NULL, 439, 'Store and retrieve information ', '', '', '', ''),
('CS 324', NULL, 440, 'Machine learning ', '', '', '', ''),
('CS 403', NULL, 442, 'Distributed systems ', '', '', '', ''),
('CS 404', NULL, 443, 'Mathematical models of the robot and com', '', '', '', ''),
('CS 405', NULL, 444, 'Secret computer ', '', '', '', ''),
('CS 406', NULL, 445, 'Imaginary environment ', '', '', '', ''),
('CS 407', NULL, 446, 'System Analysis and Design ', '', '', '', ''),
('CS 408', NULL, 447, 'Image Processing ', '', '', '', ''),
('CS 409', NULL, 448, 'Digital libraries ', '', '', '', ''),
('CS 411', NULL, 449, 'Data mining ', '', '', '', ''),
('CS 490', NULL, 450, 'Research project ', '', '', '', ''),
('Math 303', NULL, 455, 'Differential Equations ', '', '', '', ''),
('Stat 201', '4', 459, 'Statistical methods ', 'Su', 'm5 & Sh', '', ''),
('Stat 204', NULL, 460, 'Regression Analysis ', '', '', '', ''),
('Phy 250', NULL, 461, 'Electronic circuits ', '', '', '', ''),
('Phy 207', NULL, 467, 'Physical Optics and optical devices ', '', '', '', ''),
('Phy 208', NULL, 468, 'Vibrations and waves ', '', '', '', ''),
('Phy 301', NULL, 471, 'Quantum Physics ', '', '', '', ''),
('Phy 302', NULL, 472, 'Nuclear Physics ', '', '', '', ''),
('Phy 303', NULL, 473, 'Solid State Physics ', '', '', '', ''),
('Phy 304', NULL, 474, 'Atomic and molecular spectra ', '', '', '', ''),
('Phy 307', NULL, 477, 'Physics low temperature and vacuum techn', '', '', '', ''),
('Phy 308', NULL, 478, 'Physics calculations ', '', '', '', ''),
('Phy 309', NULL, 479, 'Materials Science ', '', '', '', ''),
('Phy 310', NULL, 480, 'Detectors and accelerators ', '', '', '', ''),
('Phy 312', NULL, 481, 'Applied spectrum ', '', '', '', ''),
('Phy 401', NULL, 482, 'Elementary particles and atomic spectra ', '', '', '', ''),
('Phy 402', NULL, 483, 'Quantum theory of solids ', '', '', '', ''),
('Phy 403', NULL, 484, 'Laser Physics and Applications ', '', '', '', ''),
('Phy 404', NULL, 485, 'Practical Physics 5 ', '', '', '', ''),
('Phy 405', NULL, 486, 'Practical Physics 6 ', '', '', '', ''),
('Phy 409', NULL, 487, 'Physics reactors ', '', '', '', ''),
('Phy 410', NULL, 488, 'Physics and semiconductor devices ', '', '', '', ''),
('Phy 411', NULL, 489, 'Applied Electronics ', '', '', '', ''),
('Phy 412', NULL, 490, 'Electrical conductivity Ultra ', '', '', '', ''),
('Phy 413', NULL, 491, 'Plasma Physics ', '', '', '', ''),
('Phy 414', NULL, 492, 'Physics thin-film ', '', '', '', ''),
('Phy 415', NULL, 493, 'Magnetic Resonance ', '', '', '', ''),
('Phy 416', NULL, 494, 'Nano science and its applications ', '', '', '', ''),
('Phy 490', NULL, 495, 'Research project ', '', '', '', ''),
('Math 221', NULL, 496, 'Mathematical analysis ', '', '', '', ''),
('Math 223', NULL, 497, 'Matrices ', '', '', '', ''),
('Math 251', NULL, 498, 'Mechanics 3 ', '', '', '', ''),
('Math 305', NULL, 499, 'Complex functions 1 ', '', '', '', ''),
('Math 351', '4', 501, 'Dynamics analytical ', 'Tu', 'fs fb3', '', ''),
('Math 352', NULL, 502, 'Differential Equations and private funct', '', '', '', ''),
('BP 202', NULL, 505, 'Fundamentals and Methods of Biophysics 2', '', '', '', ''),
('BP 203', NULL, 506, 'Molecular biophysical ', '', '', '', ''),
('BP 221', NULL, 507, 'Mathematical analysis ', '', '', '', ''),
('BP 224', NULL, 508, 'General Zoology ', '', '', '', ''),
('BP 231', NULL, 509, 'General Biochemistry ', '', '', '', ''),
('BP 301', NULL, 510, 'Radiological biophysical ', '', '', '', ''),
('BP 303', NULL, 512, 'Spectrum atomic biomedical ', '', '', '', ''),
('BP 304', NULL, 513, 'Quantum electronics and bio-mechanics ', '', '', '', ''),
('BP 401', NULL, 514, 'Radiological and biophysical measuring d', '', '', '', ''),
('BP 402', NULL, 515, 'Advanced biophysical ', '', '', '', ''),
('BP 403', NULL, 516, 'Especially in biophysics material ', '', '', '', ''),
('BP 404', NULL, 517, 'Biophysical medical and physiotherapy ', '', '', '', ''),
('BP 405', NULL, 518, 'Technological methods in biophysics ', '', '', '', ''),
('BP 490', NULL, 519, 'Research project ', '', '', '', ''),
('Math 222', NULL, 520, 'Numerical Methods ', '', '', '', ''),
('Math 224', NULL, 521, 'Advanced Mathematics ', '', '', '', ''),
('Phy 202', NULL, 523, 'Thermodynamics and statistical physics ', '', '', '', ''),
('Phy 203', NULL, 524, 'Modern atomic and radiation physics ', '', '', '', ''),
('C 243', NULL, 527, 'organic chemistry ', '', '', '', ''),
('C 244', NULL, 528, 'Practical Organic Chemistry ', '', '', '', ''),
('Bot 123', NULL, 530, 'General Botany ', '', '', '', ''),
('Bot 323', NULL, 531, 'Biologically light ', '', '', '', ''),
('MICB 203', NULL, 532, 'General Microbiology ', '', '', '', ''),
('Z 324', NULL, 533, 'Comparative Anatomy and Physiology ', '', '', '', ''),
('Z 403', NULL, 534, 'The physiology of the nervous system ', '', '', '', ''),
('Bioc 331', NULL, 535, 'Dynamic membrane and transmission ', '', '', '', ''),
('Bioc 409', NULL, 536, 'Biochemistry of cancer cells ', '', '', '', ''),
('C 211', NULL, 537, 'The foundations of analytical chemistry ', '', '', '', ''),
('C 212', NULL, 538, 'Analytical Chemistry practical ', '', '', '', ''),
('C 231', NULL, 539, 'Chemistry elements actress ', '', '', '', ''),
('C 242', NULL, 541, 'Organic chemistry 2 ', '', '', '', ''),
('C 252', NULL, 544, 'Electrical chemistry and chemistry of su', '', '', '', ''),
('C 311', NULL, 545, 'Instrumental Analysis 1 ', '', '', '', ''),
('C ', NULL, 546, 'Chemistry and chemistry of the transitio', '', '', '', ''),
('C 313', NULL, 547, 'Equilibrium solutions ', '', '', '', ''),
('C 332', NULL, 548, 'Organic metal compounds ', '', '', '', ''),
('C 342', NULL, 549, 'Chemistry heterogeneous ring compounds a', '', '', '', ''),
('C 343', NULL, 550, 'Organic chemistry of polymers ', '', '', '', ''),
('C 344', NULL, 551, 'Practical Organic Chemistry 2 ', '', '', '', ''),
('C 345', NULL, 552, 'organic chemistry 3 ', '', '', '', ''),
('C 351', NULL, 553, 'Kinetics of chemical reactions and catal', '', '', '', ''),
('C 352', NULL, 554, 'Electrical chemistry is counterproductiv', '', '', '', ''),
('C 353', NULL, 555, 'Quantum chemistry 1 ', '', '', '', ''),
('C 354', NULL, 556, 'Physical Chemistry practical 1 ', '', '', '', ''),
('C 411', NULL, 557, 'Instrumental Analysis 2 ', '', '', '', ''),
('C 412', NULL, 558, 'Analysis and treatment of water ', '', '', '', ''),
('C 414', NULL, 559, 'Analysis and processing results ', '', '', '', ''),
('C 421', NULL, 560, 'Petrochemistry ', '', '', '', ''),
('C 422', NULL, 561, 'Environmental Chemistry ', '', '', '', ''),
('C 423', NULL, 562, 'Therapeutic Chemistry and Toxicology ', '', '', '', ''),
('C 424', NULL, 563, 'Legitimacy Chemistry ', '', '', '', ''),
('C', NULL, 564, 'Combustion and air pollution ', '', '', '', ''),
('C 431', NULL, 565, 'Chemistry dyes and dyeing ', '', '', '', ''),
('C 432', NULL, 566, 'Nuclear chemistry and actinides ', '', '', '', ''),
('C 433', NULL, 567, 'Inorganic Chemical Industries ', '', '', '', ''),
('C 434', NULL, 568, 'Chemistry Solid State Chemistry and Nano', '', '', '', ''),
('C 435', NULL, 569, 'Selected Topics in Inorganic Chemistry ', '', '', '', ''),
('C 441', NULL, 570, 'Organic Chemistry Spectroscopic ', '', '', '', ''),
('C 442', NULL, 571, 'Practical Organic Chemistry 3 ', '', '', '', ''),
('C 443', NULL, 572, 'Nuclear and amino acids ', '', '', '', ''),
('C 444', NULL, 573, 'Special Topics in Chemistry ', '', '', '', ''),
('C 445', NULL, 574, 'Stereochemistry ', '', '', '', ''),
('C 341', NULL, 575, 'Physical Organic Chemistry 1 ', '', '', '', ''),
('C 446', NULL, 576, 'Physical Organic Chemistry 2 ', '', '', '', ''),
('C 447', NULL, 577, 'Molecular photochemistry ', '', '', '', ''),
('C 451', NULL, 578, 'Molecular spectra ', '', '', '', ''),
('C 452', NULL, 579, 'Thermodynamics of solutions ', '', '', '', ''),
('C 453', NULL, 580, 'Corrosion Chemistry ', '', '', '', ''),
('C 454', NULL, 581, 'Gluten Surface active agents ', '', '', '', ''),
('C 455', NULL, 582, 'Chemistry colloids ', '', '', '', ''),
('C 456', NULL, 583, 'Selected Topics in Chemistry ', '', '', '', ''),
('C 457', NULL, 584, 'Physical Chemistry for large materials ', '', '', '', ''),
('C 490', NULL, 585, 'Research project ', '', '', '', ''),
('Math 213', NULL, 586, 'Mathematics Chemistry 1 ', '', '', '', ''),
('Math 233', NULL, 587, 'Mathematics Chemistry 2 ', '', '', '', ''),
('Phy 211', NULL, 589, 'Applied Electronics ', '', '', '', ''),
('Bot 201', NULL, 600, 'Anatomy and environment Plant ', '', '', '', ''),
('Bot 204', NULL, 601, 'Molecular Plant Physiology ', '', '', '', ''),
('Bot 208', NULL, 602, 'Algae Biologically ', '', '', '', ''),
('Bot 232', NULL, 605, 'Economic plant ', '', '', '', ''),
('Bot 301', NULL, 606, 'Diversity in the non-floral plants ', '', '', '', ''),
('Bot 302', NULL, 607, 'Diversity of flowering plants ', '', '', '', ''),
('Bot 305', NULL, 609, 'Physiology of plant stress ', '', '', '', ''),
('Bot 308', NULL, 610, 'Biochemistry and metabolism plant ', '', '', '', ''),
('Bot 311', NULL, 611, 'The physiology of algae ', '', '', '', ''),
('Bot 321', NULL, 612, 'Dynamics and ecosystem functions ', '', '', '', ''),
('Bot 401', NULL, 614, 'Hormonal regulation of plant growth ', '', '', '', ''),
('Bot 402', NULL, 615, 'Plant geography ', '', '', '', ''),
('Bot 408', NULL, 616, 'Plant membranes ', '', '', '', ''),
('Bot 412', NULL, 617, 'Anatomy of a plant ', '', '', '', ''),
('Bot 490', NULL, 618, 'Research project ', '', '', '', ''),
('MICB 301', NULL, 624, 'The biology of microorganisms ', '', '', '', ''),
('BT 302', NULL, 627, 'Biotechnology algae ', '', '', '', ''),
('BT 312', NULL, 628, 'Plant reproduction ', '', '', '', ''),
('BT 321', NULL, 629, 'Agriculture Plant tissue ', '', '', '', ''),
('MICB 201', NULL, 632, 'Basics of microbiology ', '', '', '', ''),
('MICB 206', NULL, 633, 'Microorganisms environment ', '', '', '', ''),
('MICB 303', NULL, 634, 'Physiology of Microorganisms ', '', '', '', ''),
('MICB 306', NULL, 635, 'General fungi ', '', '', '', ''),
('MICB 307', NULL, 636, 'Viruses ', '', '', '', ''),
('MICB 312', NULL, 638, 'The division of bacteria ', '', '', '', ''),
('MICB 315', NULL, 639, 'Marine Microbiology ', '', '', '', ''),
('MICB 401', NULL, 641, 'Food Microbiology ', '', '', '', ''),
('MICB 402', NULL, 642, 'Medical Microbiology and Immunology ', '', '', '', ''),
('MICB 406', NULL, 643, 'Yeasts and enzymes Technology ', '', '', '', ''),
('MICB 411', NULL, 644, 'Oktinomaysts ', '', '', '', ''),
('MICB 415', NULL, 645, 'Plant disease ', '', '', '', ''),
('MICB 490', NULL, 646, 'Research project ', '', '', '', ''),
('Math 220', NULL, 647, 'Biomathematics ', '', '', '', ''),
('CS 332', NULL, 649, 'Computer Applications ', '', '', '', ''),
('Phy 232', NULL, 651, 'Nuclear physics ', '', '', '', ''),
('C 202', NULL, 653, 'The foundations of analytical chemistry ', '', '', '', ''),
('Bot 331', NULL, 656, 'Soil Science ', '', '', '', ''),
('BT 301', NULL, 657, 'Fermentation Technology ', '', '', '', ''),
('BT 401', NULL, 659, 'Industrial Microbiology ', '', '', '', ''),
('BT 402', NULL, 660, 'Environmental Biotechnology ', '', '', '', ''),
('Z 263', NULL, 663, 'Dual purpose and initial medical insects', '', '', '', ''),
('Bioc 222', NULL, 667, 'Chemistry biomolecules ', '', '', '', ''),
('Bot 101', NULL, 675, 'Bot 101', '', '', '', ''),
('Bot 102', NULL, 676, 'Bot 102', '', '', '', ''),
('Z 201', NULL, 679, 'Biologically non-vertebrates 1 and insec', '', '', '', ''),
('Z 204', NULL, 681, 'Vertebrate biology and genetics ', '', '', '', ''),
('Z 209', NULL, 686, 'Tissue and Biotechnology ', '', '', '', ''),
('Z 211', NULL, 688, 'Animal Behavior ', '', '', '', ''),
('Z 301', NULL, 690, 'Non-vertebrate Biologically 2 ', '', '', '', ''),
('Z 303', NULL, 691, 'Ecology ', '', '', '', ''),
('Z 307', NULL, 692, 'Embryos chordates ', '', '', '', ''),
('Z 308', NULL, 693, 'Desert environment ', '', '', '', ''),
('Z 407', NULL, 696, 'Environmental Physiology ', '', '', '', ''),
('Z 408', NULL, 697, 'Soil Science and toxins environment ', '', '', '', ''),
('Z 490', NULL, 698, 'Research project ', '', '', '', ''),
('E 201', NULL, 712, 'Introduction to entomology ', '', '', '', ''),
('E 202', NULL, 713, 'Environment and biological diversity of ', '', '', '', ''),
('E 204', NULL, 714, 'Parasitology and insects environment ', '', '', '', ''),
('E 205', NULL, 715, 'Morphology insects ', '', '', '', ''),
('E 207', NULL, 716, 'Primitives Sciences ', '', '', '', ''),
('E 208', NULL, 717, 'Classification and the emergence of inse', '', '', '', ''),
('E 210', NULL, 718, 'Insect techniques ', '', '', '', ''),
('E 216', NULL, 719, 'Beneficial and harmful insects ', '', '', '', ''),
('E 301', NULL, 720, 'Installation of insects ', '', '', '', ''),
('E 304', NULL, 722, 'Introduction to biological control ', '', '', '', ''),
('E 305', NULL, 723, 'Pesticides and toxicology ', '', '', '', ''),
('E 306', NULL, 724, 'Insect Physiology ', '', '', '', ''),
('E 308', NULL, 725, 'Entomology ', '', '', '', ''),
('E 309', NULL, 726, 'Collecting and preserving insects ', '', '', '', ''),
('E 310', NULL, 727, 'Water insects ', '', '', '', ''),
('E 312', NULL, 728, 'Indicative chemicals ', '', '', '', ''),
('E 401', NULL, 729, 'Chemistry of the environment for insects', '', '', '', ''),
('E 403', NULL, 730, 'Medical Insects and legitimacy of insect', '', '', '', ''),
('E 404', NULL, 731, 'Insect behavior ', '', '', '', ''),
('E 405', NULL, 732, 'Economic Entomology ', '', '', '', ''),
('E 406', NULL, 733, 'Special study in entomology ', '', '', '', ''),
('E 407', NULL, 734, 'IPM ', '', '', '', ''),
('E 408', NULL, 735, 'Bilateral wings ', '', '', '', ''),
('E 409', NULL, 736, 'Physiology and endocrinology of insects ', '', '', '', ''),
('E 410', NULL, 737, 'Insects adapt in the desert environment ', '', '', '', ''),
('E 411', NULL, 738, 'Insects and Immunology ', '', '', '', ''),
('E 412', NULL, 739, 'EIA ', '', '', '', ''),
('E 413', NULL, 740, 'Treatment by fly larvae ', '', '', '', ''),
('E 490', NULL, 741, 'Research project ', '', '', '', ''),
('C 241', NULL, 744, 'Organic chemistry 1 ', '', '', '', ''),
('Z 210', NULL, 749, 'Electron Microscopy techniques ', '', '', '', ''),
('Z 402', NULL, 750, 'Physiology of nerve and endocrine ', '', '', '', ''),
('MB 301', NULL, 755, 'Molecular Biology 1 ', '', '', '', ''),
('MB 302', NULL, 756, 'developmental genetics ', '', '', '', ''),
('MB 303', NULL, 757, 'Contrast cell and tissue culture ', '', '', '', ''),
('MB 304', NULL, 758, 'Micro-cellular imaging techniques ', '', '', '', ''),
('MB 309', NULL, 759, 'The molecular basis of disease ', '', '', '', ''),
('MB 312', NULL, 760, 'Molecular drugs ', '', '', '', ''),
('MB 402', NULL, 761, 'Cellular mechanism of catalysis ', '', '', '', ''),
('MB 403', NULL, 762, 'Molecular Biology 2 ', '', '', '', ''),
('MB 404', NULL, 763, 'Molecular biology of nerves ', '', '', '', ''),
('MB 409', NULL, 764, 'The molecular basis for diseases of the ', '', '', '', ''),
('MB 411', NULL, 765, 'Molecular biological cancer ', '', '', '', ''),
('MB 412', NULL, 766, 'Human Genetics ', '', '', '', ''),
('MB 413', NULL, 767, 'Professional ethics in biology ', '', '', '', ''),
('MB 490', NULL, 768, 'Research project ', '', '', '', ''),
('Stat 122', NULL, 769, 'Biostatistics ', '', '', '', ''),
('CS 322', NULL, 770, 'Computer Applications in Biology ', '', '', '', ''),
('CS 401', NULL, 771, 'Bioinformatics ', '', '', '', ''),
('Phy 222', NULL, 772, 'Radiological Biophysics ', '', '', '', ''),
('C 200', NULL, 773, 'Analytic chemistry ', '', '', '', ''),
('C 300', NULL, 774, 'Chromatographic separation ', '', '', '', ''),
('MICB 221', NULL, 776, 'General Microbiology ', '', '', '', ''),
('MICB 311', NULL, 777, 'Virology ', '', '', '', ''),
('MICB 322', NULL, 778, 'microbial genetics ', '', '', '', ''),
('BT 311', NULL, 780, 'Endocrinologist ', '', '', '', ''),
('BT 342', NULL, 781, 'Introduction to Economics ', '', '', '', ''),
('BT 351', NULL, 782, 'Introduction to control vital ', '', '', '', ''),
('BT 432', NULL, 786, 'Quality standards ', '', '', '', ''),
('Z 202', NULL, 787, 'Animal Physiology ', '', '', '', ''),
('Z 205', NULL, 788, 'Parasitology and infectious diseases ', '', '', '', ''),
('Z 206', NULL, 789, 'Anatomy and Evolution ', '', '', '', ''),
('Z 207', NULL, 790, 'Aware of vertebrate embryos ', '', '', '', ''),
('Z 208', NULL, 791, 'Aware of non-vertebrate embryos ', '', '', '', ''),
('Z 221', NULL, 792, 'Cell biology ', '', '', '', ''),
('Z 401', NULL, 793, 'Parasites and immunity ', '', '', '', ''),
('E 303', NULL, 794, 'Medical insects ', '', '', '', ''),
('Bioc 303', NULL, 796, 'Clinical Biochemistry ', '', '', '', ''),
('Bioc 307', NULL, 797, 'Feed ', '', '', '', ''),
('Bioc 321', NULL, 798, 'General Metabolism ', '', '', '', ''),
('Bioc 327', NULL, 799, 'Basics of enzymology ', '', '', '', ''),
('G 201', NULL, 800, 'Optics metals ', '', '', '', ''),
('G 202', NULL, 801, 'Science classes ', '', '', '', ''),
('G 203', NULL, 802, 'Paleontology ', '', '', '', ''),
('G 204', NULL, 803, 'Igneous and metamorphic ', '', '', '', ''),
('G 205', NULL, 804, 'Geology synthetic ', '', '', '', ''),
('G 206', NULL, 805, 'Geophysics ', '', '', '', ''),
('G 208', NULL, 806, 'Remote Sensing ', '', '', '', ''),
('G 210', NULL, 807, 'Geomorphology ', '', '', '', ''),
('G 303', NULL, 810, 'Geochemistry ', '', '', '', ''),
('G 305', NULL, 812, 'Geology freely ', '', '', '', ''),
('G 306', NULL, 813, 'Pelvic analysis ', '', '', '', ''),
('G 307', NULL, 814, 'Tectonic plates ', '', '', '', ''),
('G 308', NULL, 815, 'Geology environment ', '', '', '', ''),
('G 309', NULL, 816, 'Logs ', '', '', '', ''),
('G 311', NULL, 817, 'Exploration geophysics ', '', '', '', ''),
('G 315', NULL, 818, 'Rock mechanics ', '', '', '', ''),
('G 320', NULL, 821, 'Environmental Geochemistry ', '', '', '', ''),
('G 322', NULL, 822, 'Geologist count ', '', '', '', ''),
('G 326', NULL, 823, 'Experimental Methods ', '', '', '', ''),
('G 401', NULL, 824, 'Paleontology class ', '', '', '', ''),
('G 409', NULL, 826, 'Isotope Geology ', '', '', '', ''),
('G 411', NULL, 827, 'Geology and mining engineering in the me', '', '', '', ''),
('G 413', NULL, 828, 'Industry Geochemistry of organic ', '', '', '', ''),
('G 417', NULL, 829, 'Geochemistry water ', '', '', '', ''),
('G 490', NULL, 830, 'Research project ', '', '', '', ''),
('GP 302', NULL, 831, 'Processing and interpretation of data on', '', '', '', ''),
('GP 303', NULL, 832, 'Principles of seismic data processing ', '', '', '', ''),
('GP 401', NULL, 833, 'The interpretation of seismic data ', '', '', '', ''),
('GP 304', NULL, 834, 'Principles of earthquake ', '', '', '', ''),
('GP 306', NULL, 835, 'Computer Applications in Geophysics ', '', '', '', ''),
('GP 311', NULL, 836, 'Magnetism in ancient rocks ', '', '', '', ''),
('GP 312', NULL, 837, 'Electromagnetic Methods ', '', '', '', ''),
('GP 402', NULL, 838, 'Marine seismic ', '', '', '', ''),
('GP 403', NULL, 839, 'Excavations ', '', '', '', ''),
('GP 404', NULL, 840, 'Seismic of layers ', '', '', '', ''),
('GP 405', NULL, 841, 'Marine magnetic and gravitational Navy ', '', '', '', ''),
('GP 406', NULL, 842, 'Remote sensing and exploration ', '', '', '', ''),
('GP 407', NULL, 843, 'Mining Geophysics ', '', '', '', ''),
('GP 408', NULL, 844, 'Geophysics reservoirs ', '', '', '', ''),
('GP 412', NULL, 845, 'The use of radar in Geophysics ', '', '', '', ''),
('GP 490', NULL, 846, 'Research project ', '', '', '', ''),
('Math 325', NULL, 847, 'Differential equations and special funct', '', '', '', ''),
('Math 350', NULL, 848, 'Fortran 2 ', '', '', '', ''),
('Stat 132', NULL, 849, 'Applied Statistics ', '', '', '', ''),
('Phy 204', NULL, 850, 'Crystal structure and electrons ', '', '', '', ''),
('Phy 205', NULL, 851, 'Practical Physics 1 ', '', '', '', ''),
('Phy 206', NULL, 852, 'Practical Physics 2 ', '', '', '', ''),
('Phy 209', NULL, 853, 'Energy physics and microwave ', '', '', '', ''),
('Phy 210', NULL, 854, 'Electromagnetic ', '', '', '', ''),
('Phy 305', NULL, 855, 'Practical Physics 3 ', '', '', '', ''),
('Phy 306', NULL, 856, 'Practical Physics 4 ', '', '', '', ''),
('G 301', NULL, 857, 'Sedimentary rocks Science ', '', '', '', ''),
('G 302', NULL, 858, 'Economic Geology ', '', '', '', ''),
('G 304', NULL, 859, 'Petroleum Geology and Water ', '', '', '', ''),
('G 316', NULL, 860, 'Geological eras fourth ', '', '', '', ''),
('G 402', NULL, 861, 'Geological Egypt ', '', '', '', ''),
('MS 304', NULL, 862, 'Marine Meteorology ', '', '', '', ''),
('MS 305', NULL, 863, 'Marine sediments ', '', '', '', ''),
('M 111', NULL, 874, 'M 111', '', '', '', ''),
('P 112', NULL, 875, 'P 112', '', '', '', ''),
('M 101', NULL, 884, 'M 101', '', '', '', ''),
('M 102', NULL, 885, 'M 102', '', '', '', ''),
('M 150', NULL, 886, 'M 150', '', '', '', ''),
('M 152', NULL, 887, 'M 152', '', '', '', ''),
('P 101', NULL, 888, 'P 101', '', '', '', ''),
('P 102', NULL, 889, 'P 102', '', '', '', ''),
('Math 102', '6', 896, 'Calculus 2 and algebra ', 'Sa', 'm1 & Sh', 'جبر و تفاضل', ''),
('Math 151', NULL, 897, 'Mechanics 1 ', '', '', '', ''),
('Math 152', '2', 898, 'Mechanics 2 ', 'Sa', 'm2 & T', '', ''),
('Phy 101', NULL, 899, 'General Physics 1 ', '', '', '', ''),
('Phy 102', NULL, 900, 'General Physics 2 ', '', '', '', ''),
('C 101', NULL, 901, 'General Chemistry 1 ', '', '', '', ''),
('Z 101', NULL, 907, 'General Zoology 1 ', '', '', '', ''),
('Z 102', NULL, 908, 'Biodiversity ', '', '', '', ''),
('Math 111', NULL, 915, 'General Mathematics ', '', '', '', ''),
('Phy 112', NULL, 916, 'General Physics ', '', '', '', ''),
('Z 111', NULL, 921, 'General Zoology ', '', '', '', ''),
('G 101', NULL, 923, 'General Geology 1 ', '', '', '', ''),
('G 102', NULL, 924, 'General Geology 2 ', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `course_section`
--

CREATE TABLE IF NOT EXISTS `course_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `desq` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `date_event`
--

CREATE TABLE IF NOT EXISTS `date_event` (
  `event_id` varchar(20) NOT NULL DEFAULT '',
  `username` varchar(20) DEFAULT NULL,
  `event` varchar(50) DEFAULT NULL,
  `stat` varchar(10) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `elect`
--

CREATE TABLE IF NOT EXISTS `elect` (
  `username` varchar(50) NOT NULL,
  `choose` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `elect`
--

INSERT INTO `elect` (`username`, `choose`, `id`) VALUES
('dina11', 'ahmed14', 10),
('ali11', 'dina11', 12),
('sarr11', 'dina11', 13),
('dina11', 'dina11', 44),
('morsy11', 'ahmed14', 45),
('sarr11', 'dina11', 46),
('ahmed22', 'ahmed14', 47),
('islam11', 'dina11', 48),
('ahmed14', 'ahmed14', 49),
('samy11', 'ahmed14', 51),
('ali11', 'dina11', 52),
('ali12', 'ahmed14', 53),
('ali13', 'dina11', 54),
('ssl', 'ahmed14', 55),
('mena11', 'dina11', 56),
('tareq11', 'ahmed14', 57),
('sali12', 'dina11', 58),
('dina11', 'dina11', 59),
('morsy11', 'ahmed14', 60),
('sarr11', 'dina11', 61),
('ahmed22', 'ahmed14', 62),
('islam11', 'dina11', 63),
('ahmed14', 'ahmed14', 64),
('samy11', 'ahmed14', 66),
('ali11', 'dina11', 67),
('ali12', 'ahmed14', 68),
('ali13', 'dina11', 69),
('ssl', 'ahmed14', 70),
('mena11', 'dina11', 71),
('tareq11', 'ahmed14', 72),
('sali12', 'dina11', 73),
('sara11', 'ahmed14', 88);

-- --------------------------------------------------------

--
-- Table structure for table `fav_post`
--

CREATE TABLE IF NOT EXISTS `fav_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `code` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `fav_post`
--

INSERT INTO `fav_post` (`id`, `post_id`, `username`, `code`) VALUES
(13, 122, 'ahmed14', 'global'),
(14, 125, 'ahmed14', 'global'),
(20, 142, 'ahmed14', 'global'),
(27, 157, 'ahmed14', 'global'),
(28, 150, 'ahmed14', 'global'),
(30, 175, 'ahmed14', 'CS 201'),
(31, 185, 'ahmed14', 'CS 203'),
(32, 190, 'ahmed14', 'CS 202'),
(33, 189, 'ahmed14', 'CS 202'),
(35, 192, 'ahmed14', 'CS 203'),
(37, 196, 'ahmed14', 'CS 202'),
(38, 195, 'ahmed14', 'CS 201'),
(39, 194, 'ahmed14', 'CS 202'),
(40, 203, 'ahmed14', 'CS 201'),
(42, 189, 'ahmed14', 'CS 202'),
(43, 203, 'dina11', 'CS 102'),
(44, 182, 'dina11', 'CS 204'),
(45, 202, 'dina11', 'CS 202'),
(46, 210, 'ahmed14', 'CS 202'),
(48, 261, 'ahmed14', 'CS 102'),
(49, 262, 'ahmed14', 'CS 301'),
(50, 259, 'dina11', 'CS 102'),
(51, 261, 'dina11', 'CS 102'),
(52, 181, 'dina11', 'CS 102'),
(53, 186, 'dina11', 'CS 201'),
(54, 270, 'samy11', 'CS 102'),
(55, 271, 'ahmed14', 'global'),
(56, 1010, 'ahmed14', 'CS 202'),
(57, 1012, 'ahmed14', 'CS 102'),
(59, 260, 'mo11', 'Math 101'),
(60, 186, 'mo11', 'Math 101'),
(68, 1026, 'ahmed14', 'CS 102'),
(69, 1027, 'ahmed14', 'CS 202'),
(70, 1024, 'ahmed14', 'CS 102'),
(71, 1018, 'ahmed14', 'CS 102'),
(72, 1028, 'ahmed14', 'CS 210'),
(73, 1032, 'sara11', 'CS 214');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE IF NOT EXISTS `help` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `que` varchar(250) CHARACTER SET utf16 NOT NULL,
  `ans` varchar(1000) CHARACTER SET utf16 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `que`, `ans`) VALUES
(1, 'how i control my profile privacy ?', 'go to sitting then choose privacy the check on what you want to display to other'),
(2, 'how i control my profiprivacy ?', 'go to sitting then choose privacy then check on what you want to display to other'),
(3, 'How do I view stories on my News Feed in most recent order? ', 'go to sitting then choose privacy the check on what you want to display to other'),
(4, 'how i control my profile privacy ?', 'go to sitting then choose privacy the check on what you want to display to other'),
(5, 'How do I upload photos? ', 'go to sitting then choose privacy the check on what you want to display to other'),
(6, 'Where are my red alert notifications? ', 'go to sitting then choose privacy the check on what you want to display to other'),
(7, 'How do I adjust what I get notifications about? ', 'go to sitting then choose privacy the check on what you want to display to other'),
(8, 'Who can see a story in their News Feed about something I share? ', 'go to sitting then choose privacy the check on what you want to display to other'),
(9, 'how i control my profile privacy ?', 'go to sitting then choose privacy the check on what you want to display to other'),
(10, 'how i control my profile privacy ?', 'go to sitting then choose privacy the check on what you want to display to other');

-- --------------------------------------------------------

--
-- Table structure for table `join_course`
--

CREATE TABLE IF NOT EXISTS `join_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=349 ;

--
-- Dumping data for table `join_course`
--

INSERT INTO `join_course` (`id`, `username`, `code`) VALUES
(131, 'morsy11', 'Math 202'),
(132, 'morsy11', 'Math 203'),
(133, 'morsy11', 'Stat 201'),
(139, 'sarr11', 'Math 101'),
(140, 'sarr11', 'Math 102'),
(141, 'sarr11', 'Math 152'),
(175, 'ali11', 'Math 101'),
(176, 'ali11', 'Math 102'),
(177, 'ali11', 'Math 151'),
(178, 'ali11', 'CS 102'),
(179, 'ali11', 'CS 201'),
(180, 'ali11', 'CS 202'),
(214, 'tareq11', 'Math 201'),
(215, 'tareq11', 'Math 202'),
(216, 'tareq11', 'Math 203'),
(217, 'tareq11', 'Math 251'),
(218, 'tareq11', 'CS 202'),
(288, 'ahmed22', 'Math 101'),
(289, 'ahmed22', 'Math 102'),
(290, 'ahmed22', 'Math 151'),
(291, 'ahmed22', 'Math 201'),
(292, 'ahmed22', 'Math 202'),
(293, 'ahmed22', 'Math 203'),
(294, 'ahmed22', 'Math 251'),
(295, 'dina11', 'CS 102'),
(296, 'dina11', 'CS 201'),
(297, 'dina11', 'CS 202'),
(298, 'dina11', 'CS 203'),
(299, 'dina11', 'CS 204'),
(300, 'dina11', 'CS 206'),
(314, 'ahmed14', 'CS 102'),
(315, 'ahmed14', 'CS 201'),
(316, 'ahmed14', 'CS 202'),
(317, 'ahmed14', 'CS 203'),
(318, 'ahmed14', 'CS 208'),
(319, 'ahmed14', 'CS 210'),
(320, 'ahmed14', 'CS 214'),
(321, 'ahmed14', 'CS 301'),
(330, 'samy11', 'CS 102'),
(331, 'samy11', 'CS 201'),
(332, 'samy11', 'CS 202'),
(333, 'mo11', 'Math 101'),
(334, 'mo11', 'Math 102'),
(335, 'mo11', 'CS 102'),
(336, 'mo11', 'CS 201'),
(337, 'mo11', 'CS 202'),
(338, 'mo11', 'CS 203'),
(339, 'mo11', 'CS 208'),
(340, 'mo11', 'CS 210'),
(341, 'sara11', 'CS 102'),
(342, 'sara11', 'CS 201'),
(343, 'sara11', 'CS 202'),
(344, 'sara11', 'CS 203'),
(345, 'sara11', 'CS 214'),
(346, 'sara11', 'CS 301'),
(347, 'sara11', 'CS 302'),
(348, 'sara11', 'CS 303');

-- --------------------------------------------------------

--
-- Table structure for table `latest_message`
--

CREATE TABLE IF NOT EXISTS `latest_message` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `sender_username` varchar(20) DEFAULT NULL,
  `recieve_username` varchar(20) DEFAULT NULL,
  `body` varchar(500) CHARACTER SET utf16 DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=129 ;

--
-- Dumping data for table `latest_message`
--

INSERT INTO `latest_message` (`id`, `sender_username`, `recieve_username`, `body`, `date`) VALUES
(18, 'ahmed22', 'dina11', 'yes message', '2016-03-05 13:51:49'),
(21, 'dina11', 'ahmed22', 'find value', '2016-03-07 20:56:22'),
(40, 'ahmed14', 'ali13', 'new message', '2016-03-14 07:10:03'),
(43, 'ahmed14', 'ali12', 'newc', '2016-03-14 10:10:54'),
(46, 'ali11', 'ahmed14', 'new message 2', '2016-03-14 10:26:21'),
(51, 'samy11', 'ali11', 'new message', '2016-04-17 17:09:52'),
(52, 'ali11', 'samy11', 'yes', '2016-04-17 17:22:26'),
(55, 'dina11', 'samy11', 'yes', '2016-04-22 08:34:32'),
(58, 'ali11', 'ahmed14', 'new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new message 2new me', '2016-03-14 10:26:21'),
(59, 'ahmed14', 'ahmed22', 'eeee', '2016-05-12 20:13:44'),
(104, 'ahmed14', 'ali11', 'رسالة جديدة', '2016-05-16 07:06:31'),
(110, 'ahmed14', 'dina11', 'what about re arrang SIG', '2016-05-20 12:38:35'),
(111, 'dina11', 'ahmed14', 'why not ?', '2016-05-20 12:38:50'),
(114, 'ahmed14', 'mo11', ' just go to patton page and comment the post of superPi write your name and Id then we will send you message of the detailes', '2016-05-21 13:45:18'),
(115, 'mo11', 'ahmed14', 'thank you i well do it now', '2016-05-21 13:45:45'),
(120, 'dina11', 'mo11', 'للاسف ليس لدينا مشتركين لقسم الفيزياء', '2016-05-21 18:09:50'),
(121, 'mo11', 'dina11', 'اذن ارجو فى الفصل القادم ان يكون لديكم مشتركين فى قسم الفيزياء', '2016-05-22 06:26:40'),
(127, 'sara11', 'ahmed14', 'sorry no .', '2016-06-17 09:54:05'),
(128, 'ahmed14', 'sara11', 'ok', '2016-06-17 09:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `username` varchar(20) NOT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `signup` date NOT NULL DEFAULT '0000-00-00',
  `activated` varchar(1) DEFAULT NULL,
  `fname` varchar(100) CHARACTER SET utf16 NOT NULL,
  `branch` varchar(50) NOT NULL,
  `major` varchar(50) NOT NULL,
  `minor` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `sname` varchar(50) CHARACTER SET utf16 NOT NULL,
  `id` varchar(50) NOT NULL,
  `pict` varchar(250) NOT NULL DEFAULT '../resourcese/images/05.png',
  `login` varchar(1) NOT NULL DEFAULT 'F',
  `color` varchar(20) NOT NULL DEFAULT 'default',
  `privacy` varchar(30) NOT NULL DEFAULT 'AC',
  `lang` varchar(2) NOT NULL DEFAULT 'en',
  PRIMARY KEY (`username`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username`, `gender`, `date_of_birth`, `email`, `password`, `signup`, `activated`, `fname`, `branch`, `major`, `minor`, `level`, `sname`, `id`, `pict`, `login`, `color`, `privacy`, `lang`) VALUES
('', '', '--', NULL, 'd41d8cd98f00b204e9800998ecf8427e', '2016-05-01', '0', '', '', '', '', '', '', '', './resources/images/05.png', 'F', 'default', 'AC', 'en'),
('ahmed14', 'M', '22-11-99', 'islamkhamis93@yahoo.com', '202cb962ac59075b964b07152d234b70', '2016-02-09', '0', 'ahmed', '', 'CS', 'CS', '01', 'samir', '20131403690', '../uploads/images/7379_21-05-2016_6000_20-02-2016_02.jpg', 'F', 'default', 'AC/TT/FC/SSH/', 'en'),
('ahmed22', 'm', '5-4-2012', 'ahmed22@yahoo.com', '202cb962ac59075b964b07152d234b70', '2016-02-28', '0', 'ahmed', 'Natural Science', 'Math', 'CS', '', 'ali', '201314036888', './resources/images/05.png', 'F', 'default', '', 'en'),
('ali11', 'm', '6-5-2011', 'ali@yahoo.com', '202cb962ac59075b964b07152d234b70', '2016-03-02', '0', 'ali', 'Natural Science', 'CS', '', '', 'aymen', '2013400', './resources/images/05.png', 'F', 'default', '', 'en'),
('ali12', 'm', '6-5-2011', 'ali@yahoo.comu', '202cb962ac59075b964b07152d234b70', '2016-03-02', '0', 'ali', 'Natural Science', 'CS', '', '', 'aymen', '20134008', './resources/images/05.png', 'F', 'default', '', 'en'),
('ali13', 'm', '6-5-2011', 'ali@yahoo.comi', '202cb962ac59075b964b07152d234b70', '2016-03-02', '0', 'ali', 'Natural Science', 'CS', '', '', 'aymen', '20134009', './resources/images/05.png', 'F', 'default', '', 'en'),
('dina11', 'M', '12-1-93', 'dina11@yahoo.com', '202cb962ac59075b964b07152d234b70', '2016-02-26', '0', 'dina', 'Natural Science', 'CS', 'Math', '01', 'gamal', '20131403333', '../uploads/images/5815_21-05-2016_4310_26-02-2016_images_072.jpg', 'F', 'green', 'AC/TT/CR/P/SP/FC/SSH/', 'ar'),
('ehab11', '', '--', 'ert@gfdg.fu', '202cb962ac59075b964b07152d234b70', '2016-05-01', '0', 'ehab', 'Natural Science', '', '', '', 'elbadry', '56374345', './resources/images/05.png', 'F', 'default', 'AC', 'en'),
('islam11', 'm', '6-4-2010', 'islamkhamis900@yahoo.com', '202cb962ac59075b964b07152d234b70', '2016-02-09', '0', 'islam', 'Natural Science', 'CS', 'Stat', '', 'khamis', '20131403689', '../resources/images/05.png', 'T', 'red', '', 'en'),
('mena11', 'm', '4-5-2010', 'mena112@yahoo.com', '202cb962ac59075b964b07152d234b70', '2016-03-17', '0', 'mena', 'Natural Science', 'Math', 'Phy', '', 'danial', '289216968712', './resources/images/05.png', 'F', 'default', '', 'en'),
('mo11', 'm', '5-5-1993', 'mosa@yy.com', '81dc9bdb52d04dc20036dbd8313ed055', '2016-05-21', '0', 'محمد', 'Natural Science', 'CS', 'CS', '', 'صلاح', '4522663424', '../uploads/images/2987_21-05-2016_01.png', 'F', 'default', 'AC', 'en'),
('morsy11', 'm', '3-6-2012', 'morsy.altukhy@yahoo.com', '202cb962ac59075b964b07152d234b70', '2016-02-09', '0', 'morsy', 'Natural Science', 'Computer Science', 'none', '01', 'hady', '20131403668', '../site/resources/images/05.png', 'F', 'red', '', 'en'),
('sali12', 'M', '12-34-1993', 'sali11@yahoo.com', '202cb962ac59075b964b07152d234b70', '2016-04-20', '0', 'sali', 'Natural Science', 'CS', '', '', 'samir', '563553452426', './resources/images/05.png', 'F', 'default', 'AC/TT/FC/SSH/', 'en'),
('samy11', 'M', '23-11-1993', 'samy33@rr.com', '202cb962ac59075b964b07152d234b70', '2016-04-17', '0', 'sami', '', 'CS', 'CS', '', 'shrif', '2013149965', './resources/images/05.png', 'F', 'default', 'AC/TT/FC/SSH/SP', 'en'),
('sara11', 'F', '2-3-2012', 'sara@edu.com', '202cb962ac59075b964b07152d234b70', '2016-03-19', '0', 'sara', 'Natural Science', 'CS', 'CS', '', 'ahmed', '2013144572542432', '../uploads/images/2334_17-06-2016_images.png', 'F', 'default', '', 'en'),
('sarr11', 'F', '4-4-2011', 'sih@ndih.dud', '202cb962ac59075b964b07152d234b70', '2016-02-16', '0', 'sara', 'Biological Science', 'CS', 'CS', '01', 'samer', '20131403682', './resources/member_resource/4310_26-02-2016_images_072.jpg', 'T', 'default', '', 'en'),
('ssl', 'm', '6-5-2010', 'hksvjhav@hvs.dsy', '202cb962ac59075b964b07152d234b70', '2016-02-28', '0', 's', 'Natural Science', 'CS', 'BP', '', 'l', '23123', './resources/images/05.png', 'F', 'default', '', 'en'),
('tareq11', 'm', '6-5-2010', 'tareq11@yaghfk.jkbfgj', '202cb962ac59075b964b07152d234b70', '2016-03-19', '0', 'طارق', '', 'Math', 'CS', '', 'عامر', '35235357353', './resources/images/05.png', 'F', 'default', '', 'ar');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `sender_username` varchar(20) DEFAULT NULL,
  `recieve_username` varchar(20) DEFAULT NULL,
  `body` varchar(500) CHARACTER SET utf16 DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sender_username`, `recieve_username`, `body`, `date`) VALUES
(10, 'ahmed14', 'dina11', 'new message', '2016-03-04 12:14:56'),
(11, 'ahmed14', 'dina11', 'new new message', '2016-03-04 12:14:56'),
(12, 'ahmed22', 'dina11', 'new new message', '2016-03-04 12:14:56'),
(13, 'ahmed22', 'dina11', 'new new messageenew new messageenew new messageenew new messageenew new messageenew new messageenew new messagee', '2016-03-04 12:14:56'),
(14, 'dina11', 'ahmed22', 'new new messageee', '2016-03-04 12:14:56'),
(15, 'dina11', 'ahmed22', 'my message', '2016-03-05 12:27:46'),
(16, 'dina11', 'ahmed22', 'my new message', '2016-03-05 12:28:50'),
(17, 'dina11', 'ahmed22', 'yyyy', '2016-03-05 12:32:49'),
(18, 'dina11', 'ahmed22', 'new new new', '2016-03-05 12:34:20'),
(19, 'dina11', 'ahmed22', 'new new new', '2016-03-05 12:34:20'),
(20, 'dina11', 'ahmed22', 'new j', '2016-03-05 13:50:22'),
(21, 'dina11', 'ahmed22', 'new jj', '2016-03-05 13:50:42'),
(22, 'dina11', 'ahmed22', 'new jjjj', '2016-03-05 13:51:25'),
(23, 'ahmed22', 'dina11', 'yes message', '2016-03-05 13:51:49'),
(24, 'dina11', 'ahmed22', 'wow', '2016-03-07 20:55:40'),
(25, 'dina11', 'ahmed22', 'i get it', '2016-03-07 20:56:00'),
(26, 'dina11', 'ahmed22', 'find value', '2016-03-07 20:56:22'),
(27, 'ahmed14', 'ali11', 'eeeeeeeeee', '2016-03-11 14:07:59'),
(28, 'ahmed14', 'dina11', 'eeeeeeeeeeee', '2016-03-11 14:11:50'),
(29, 'ahmed14', 'dina11', 'rwrwer', '2016-03-11 14:13:08'),
(30, 'ahmed14', 'dina11', 'hjvfjvsjhf', '2016-03-11 14:13:43'),
(31, 'ahmed14', 'dina11', 'hjvfjvsjhf', '2016-03-11 14:13:44'),
(32, 'ahmed14', 'dina11', 'erwe', '2016-03-11 14:14:57'),
(33, 'dina11', 'ahmed14', 'lol', '2016-03-11 14:17:11'),
(34, 'ahmed14', 'dina11', 'thank you', '2016-03-11 14:17:33'),
(35, 'dina11', 'ahmed14', '', '2016-03-11 14:17:41'),
(36, 'dina11', 'ahmed14', 'jhdfdh', '2016-03-11 14:18:07'),
(37, 'dina11', 'ahmed14', 'rrealy', '2016-03-11 14:18:31'),
(38, 'ahmed14', 'dina11', 'rrrr', '2016-03-11 14:19:03'),
(39, 'ahmed14', 'ahmed22', 'goooo', '2016-03-12 07:17:25'),
(40, 'ahmed14', 'ali11', 'goooorr', '2016-03-12 07:17:43'),
(41, 'ahmed14', 'ali12', 'new', '2016-03-12 14:43:40'),
(42, 'dina11', 'ahmed14', 'message message message', '2016-03-14 06:42:29'),
(43, 'ahmed14', 'ali12', 'new new ', '2016-03-14 06:42:48'),
(44, 'ahmed14', 'ali11', 'new ', '2016-03-14 06:59:02'),
(45, 'ahmed14', 'ali13', 'new message', '2016-03-14 07:10:03'),
(46, 'ahmed14', 'dina11', 'new new new', '2016-03-14 07:10:27'),
(47, 'ahmed14', 'ali11', 'new ', '2016-03-14 07:15:53'),
(48, 'ahmed14', 'ali12', 'newc', '2016-03-14 10:10:54'),
(49, 'ahmed14', 'dina11', 'new message', '2016-03-14 10:23:40'),
(50, 'ali11', 'ahmed14', 'new message', '2016-03-14 10:26:05'),
(51, 'ali11', 'ahmed14', 'new message 2', '2016-03-14 10:26:21'),
(52, 'ahmed14', 'ahmed22', 'tttt', '2016-03-20 19:49:23'),
(53, 'ahmed14', 'ahmed22', 'new new ', '2016-03-21 05:41:38'),
(54, 'ahmed14', 'ali11', 'nre', '2016-03-21 08:19:52'),
(55, 'ahmed14', 'ali11', 'bb', '2016-03-21 08:32:15'),
(56, 'samy11', 'ali11', 'new message', '2016-04-17 17:09:52'),
(57, 'ali11', 'samy11', 'yes', '2016-04-17 17:22:27'),
(58, 'ahmed14', 'ahmed14', 'new ', '2016-04-21 08:06:20'),
(59, 'ahmed14', 'dina11', 'new mess', '2016-04-21 08:06:33'),
(60, 'dina11', 'samy11', 'yes', '2016-04-22 08:34:32'),
(61, 'dina11', 'ahmed14', 'yes', '2016-04-22 08:35:26'),
(62, 'ahmed14', 'ahmed22', 'eeee', '2016-05-12 20:13:44'),
(63, 'ahmed14', 'ali11', 'yes yes yes', '2016-05-13 07:40:58'),
(64, 'ahmed14', 'dina11', 'yyy', '2016-05-13 12:59:59'),
(65, 'ahmed14', 'ahmed14', 'new new new', '2016-05-13 13:08:25'),
(66, 'ahmed14', 'ali11', 'hhhh', '2016-05-13 13:10:04'),
(67, 'ahmed14', 'dina11', 'rrrr', '2016-05-13 13:11:27'),
(68, 'ahmed14', 'ali11', 'uiugu', '2016-05-13 13:13:29'),
(69, 'ahmed14', 'dina11', 'kbhjvjh', '2016-05-13 13:16:12'),
(70, 'ahmed14', 'dina11', 'yjfytyftyd', '2016-05-13 13:19:30'),
(71, 'ahmed14', 'ali11', 'yjvyvv', '2016-05-13 13:23:44'),
(72, 'ahmed14', 'ali11', 'i am here', '2016-05-13 13:23:53'),
(73, 'ahmed14', 'dina11', 'i am there', '2016-05-13 13:24:14'),
(74, 'dina11', 'ahmed14', 'i', '2016-05-13 15:20:12'),
(75, 'dina11', 'ahmed14', 'i under stand', '2016-05-13 15:20:51'),
(76, 'ahmed14', 'dina11', 'ok', '2016-05-13 15:25:32'),
(77, 'dina11', 'ahmed14', 'lets', '2016-05-13 15:26:14'),
(78, 'ahmed14', 'dina11', 'get', '2016-05-13 16:10:12'),
(79, 'ahmed14', 'dina11', 'dam', '2016-05-13 16:10:26'),
(80, 'ahmed14', 'dina11', 'ok', '2016-05-13 16:14:17'),
(81, 'dina11', 'ahmed14', 'yes message', '2016-05-13 16:14:44'),
(82, 'ahmed14', 'dina11', 'deal', '2016-05-13 16:15:45'),
(83, 'dina11', 'ahmed14', 'seal', '2016-05-13 16:16:19'),
(84, 'dina11', 'ahmed14', 'seal2', '2016-05-13 16:16:31'),
(85, 'ahmed14', 'dina11', 'seeee', '2016-05-13 16:34:34'),
(86, 'dina11', 'ahmed14', 'hvjhh', '2016-05-13 16:42:11'),
(87, 'ahmed14', 'dina11', 'uuuu', '2016-05-13 16:42:26'),
(88, 'dina11', 'ahmed14', 'i reviewed 90% of alg course', '2016-05-13 16:43:27'),
(89, 'ahmed14', 'dina11', 'ok i will confirm you', '2016-05-13 16:44:12'),
(90, 'dina11', 'ahmed14', 'seen', '2016-05-13 16:45:56'),
(91, 'ahmed14', 'dina11', 'yuuyfy', '2016-05-13 17:00:49'),
(92, 'ahmed14', 'dina11', 'contact with dr', '2016-05-13 17:01:10'),
(93, 'dina11', 'ahmed14', 'hope', '2016-05-13 17:01:35'),
(94, 'dina11', 'ahmed14', 'hope2', '2016-05-13 17:02:02'),
(95, 'ahmed14', 'dina11', 'you think', '2016-05-13 17:38:50'),
(96, 'dina11', 'ahmed14', 'duel think', '2016-05-13 17:43:09'),
(97, 'ahmed14', 'dina11', 'so review', '2016-05-13 17:43:40'),
(98, 'ahmed14', 'dina11', 'good', '2016-05-13 19:58:36'),
(99, 'ahmed14', 'dina11', 'my new message', '2016-05-13 21:24:08'),
(100, 'ahmed14', 'dina11', 'powerful project', '2016-05-15 07:02:03'),
(101, 'ahmed14', 'ali11', 'answer that', '2016-05-15 07:02:58'),
(102, 'ahmed14', 'dina11', '?????? ??? ????', '2016-05-16 07:00:28'),
(103, 'ahmed14', 'dina11', 'الموقع متاح بالفرنسية', '2016-05-16 07:02:12'),
(104, 'ahmed14', 'dina11', 'الموقع متاح بالفرنسية', '2016-05-16 07:03:26'),
(105, 'ahmed14', 'dina11', 'الموقع متاح بالفرنسية', '2016-05-16 07:05:30'),
(106, 'ahmed14', 'ali11', 'رسالة جديدة', '2016-05-16 07:06:31'),
(107, 'ahmed14', 'dina11', 'الجدول موجود', '2016-05-16 07:25:28'),
(108, 'ahmed14', 'dina11', 'الندوة الاسبوعية', '2016-05-16 07:38:54'),
(109, 'ahmed14', 'dina11', 'جارى تسليم الادارة الى الخلية الجديدة و عقد الندوة الاسبوعية فى موعدها', '2016-05-16 07:44:03'),
(110, 'ahmed14', 'dina11', 'think again in electing ali11 for patton', '2016-05-20 12:01:58'),
(111, 'dina11', 'ahmed14', 'no way', '2016-05-20 12:37:11'),
(112, 'ahmed14', 'dina11', 'what about re arrang SIG', '2016-05-20 12:38:35'),
(113, 'dina11', 'ahmed14', 'why not ?', '2016-05-20 12:38:50'),
(114, 'ahmed14', 'mo11', 'hi i am admin of patton 71 any help ?', '2016-05-21 13:42:40'),
(115, 'mo11', 'ahmed14', 'oh thank go , i want to know how to join the superPI course ?', '2016-05-21 13:43:37'),
(116, 'ahmed14', 'mo11', ' just go to patton page and comment the post of superPi write your name and Id then we will send you message of the detailes', '2016-05-21 13:45:18'),
(117, 'mo11', 'ahmed14', 'thank you i well do it now', '2016-05-21 13:45:45'),
(118, 'mo11', 'dina11', 'ما هى افضل التصورات لمشروع الحاسبات الفائقة ؟', '2016-05-21 18:06:00'),
(119, 'dina11', 'mo11', 'نعم اننا نخطط لاستخدام الحاسوب الفائق كمرجعية لقسم الرياضيات', '2016-05-21 18:07:42'),
(120, 'mo11', 'dina11', 'الا تفكرون فى استخدامه لقسم الفيزياء', '2016-05-21 18:09:10'),
(121, 'mo11', 'dina11', '؟', '2016-05-21 18:09:17'),
(122, 'dina11', 'mo11', 'للاسف ليس لدينا مشتركين لقسم الفيزياء', '2016-05-21 18:09:50'),
(123, 'mo11', 'dina11', 'اذن ارجو فى الفصل القادم ان يكون لديكم مشتركين فى قسم الفيزياء', '2016-05-22 06:26:41'),
(124, 'sara11', 'ahmed14', 'please send me robotex report', '2016-06-17 09:28:46'),
(125, 'ahmed14', 'sara11', 'i did not merge them yet', '2016-06-17 09:29:24'),
(126, 'sara11', 'ahmed14', 'well keep in touch', '2016-06-17 09:29:59'),
(127, 'ahmed14', 'sara11', 'thanks', '2016-06-17 09:30:29'),
(128, 'ahmed14', 'sara11', 'by the are you have the ppt of AI ?', '2016-06-17 09:53:40'),
(129, 'sara11', 'ahmed14', 'sorry no .', '2016-06-17 09:54:05'),
(130, 'ahmed14', 'sara11', 'ok', '2016-06-17 09:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `multimedia`
--

CREATE TABLE IF NOT EXISTS `multimedia` (
  `title` varchar(200) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `view` int(11) NOT NULL,
  `resourceID` int(6) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `multimedia`
--

INSERT INTO `multimedia` (`title`, `link`, `view`, `resourceID`, `id`) VALUES
('', '773_17-06-2016_1 Android Introduction (in Arabic).mp4', 0, 29, 15),
('', '5569_17-06-2016_4 Android eclipse plugin (in Arabic).mp4', 0, 29, 16),
('', '7902_17-06-2016_5 Android SDK Installation (in Arabic).mp4', 0, 29, 17),
('', '8926_17-06-2016_6  Android Virtual Device Manager (in Arabic).mp4', 0, 29, 18);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news` varchar(250) CHARACTER SET utf16 NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'en',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `lang`) VALUES
(2, 'Fourth Students Research Conference for Egyptian Faculties of Science', 'en'),
(3, '\r\n\r\nScientific cooperation between Faculty of Science and AMIDEAST organization\r\n', 'en'),
(4, '\r\n\r\nFourth Students Research Conference for Egyptian Faculties of Science\r\n', 'en'),
(5, '\r\n\r\nVisit British School of the College of Sciences\r\n', 'en'),
(6, '\r\n\r\nFourth Students Research Conference for Egyptian Faculties of Science\r\n1', 'en'),
(15, 'أالمؤتمر الرابع الطلاب البحث كليات العلوم المصرية', 'ar'),
(16, 'لاسكندرية تحتفل بتحقيق علوم الادارة مدير ادارة رعاية الشباب', 'ar'),
(17, 'التعاون العلمى بين كلية العلوم', 'ar'),
(18, 'المؤتمر الرابع الطلاب البحث كليات العلوم المصرية', 'ar'),
(19, 'زيارة مدرسة بريطانية فى كلية العلوم', 'ar'),
(20, 'التعاون العلمى بين كلية العلوم المؤسسة الامريكية لخدمات التعليم والتدريب فى الشرق الاوسط', 'ar');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE IF NOT EXISTS `notify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `stat` varchar(50) NOT NULL,
  `page` varchar(50) NOT NULL,
  `num` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=228 ;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`id`, `username`, `stat`, `page`, `num`) VALUES
(132, 'ali11', 'comment', '158', 0),
(133, 'ali11', 'comment', '157', 1),
(134, 'ali11', 'comment', '156', 1),
(135, 'ali11', 'comment', '160', 0),
(136, 'ali11', 'comment', '159', 0),
(138, 'ali11', 'comment', '193', 0),
(139, 'ali11', 'comment', '185', 3),
(140, 'ali11', 'comment', '181', 0),
(141, 'ali11', 'comment', '186', 4),
(142, 'ali11', 'comment', '179', 1),
(145, 'ali11', 'post', 'CS 202', 3),
(146, 'dina11', 'comment', '172', 0),
(147, 'dina11', 'comment', '164', 0),
(148, 'dina11', 'comment', '143', 0),
(151, 'dina11', 'comment', '139', 0),
(152, 'dina11', 'comment', '189', 1),
(154, 'ali11', 'post', 'CS 102', 2),
(159, 'ahmed14', 'comment', '199', 0),
(160, 'ahmed14', 'comment', '198', 0),
(165, 'tareq11', 'post', 'Math 201', 1),
(166, 'tareq11', 'post', 'CS 202', 1),
(170, 'ahmed14', 'comment', '179', 0),
(171, 'ahmed14', 'comment', '157', 0),
(172, 'ahmed14', 'comment', '156', 0),
(173, 'dina11', 'comment', '203', 0),
(174, 'dina11', 'comment', '195', 1),
(175, 'dina11', 'comment', '202', 0),
(176, 'dina11', 'comment', '196', 1),
(177, 'dina11', 'comment', '182', 0),
(178, '', 'post', '', 66),
(179, 'ahmed14', 'comment', '209', 1),
(180, 'dina11', 'comment', '209', 0),
(181, 'ahmed14', 'comment', '216', 0),
(184, 'dina11', 'comment', '186', 2),
(185, 'ahmed14', 'comment', '262', 0),
(186, 'ahmed14', 'comment', '263', 0),
(187, 'ahmed14', 'comment', '264', 2),
(188, 'dina11', 'comment', '264', 1),
(189, 'ahmed14', 'comment', '266', 2),
(190, 'dina11', 'comment', '266', 1),
(191, 'ahmed14', 'comment', '265', 1),
(192, 'ahmed14', 'comment', '259', 1),
(193, 'samy11', 'comment', '267', 0),
(194, 'samy11', 'comment', '261', 2),
(195, 'samy11', 'comment', '186', 0),
(197, 'samy11', 'comment', '260', 4),
(198, 'ahmed14', 'comment', '271', 0),
(199, 'dina11', 'comment', '1009', 2),
(200, 'ahmed14', 'comment', '1009', 1),
(201, 'ahmed14', 'comment', '269', 0),
(202, 'ahmed14', 'comment', '192', 0),
(203, 'ahmed14', 'comment', '261', 0),
(204, 'ahmed14', 'comment', '1010', 0),
(205, 'ahmed14', 'comment', '1011', 0),
(206, 'ahmed14', 'comment', '1013', 0),
(207, 'ahmed14', 'comment', '1007', 0),
(208, 'samy11', 'comment', '1012', 1),
(209, 'samy11', 'comment', '1014', 1),
(210, 'ahmed14', 'comment', '1014', 0),
(212, 'mo11', 'comment', '196', 0),
(213, 'ahmed14', 'comment', '1020', 1),
(214, 'mo11', 'comment', '1020', 0),
(215, 'dina11', 'comment', '260', 1),
(216, 'mo11', 'comment', '260', 0),
(217, 'ahmed14', 'comment', '1026', 2),
(218, 'dina11', 'comment', '1026', 0),
(220, 'dina11', 'comment', '1025', 4),
(221, 'ahmed14', 'comment', '1025', 0),
(222, 'ahmed14', 'comment', '1031', 3),
(225, 'sara11', 'comment', '1032', 0),
(226, 'ahmed14', 'comment', '1029', 0),
(227, 'sara11', 'comment', '1012', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patton`
--

CREATE TABLE IF NOT EXISTS `patton` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `patton`
--

INSERT INTO `patton` (`id`, `username`) VALUES
(22, 'ahmed14'),
(23, 'dina11');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `stat` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `username` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `body` varchar(2500) DEFAULT NULL,
  `perm` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=1033 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `stat`, `username`, `body`, `perm`) VALUES
(3, 'Data Structures and Process files (CS 20', 'adsad', 'advcxvxcvxc', 'vxvxcv'),
(4, 'Data Structures and Process files (CS 20', 'fdsfsdfsd', 'xvxcvx', 'xvxcvcx'),
(5, 'Data Structures and Process files (CS 20', 'ddd', 'ddddddd', 'dd'),
(9, 'Data Structures and Process files (CS 20', 'ddd', 'ddd', 'ddd'),
(10, 'Data Structures and Process files (CS 20', 'ahmed11', 'my first post', NULL),
(11, 'Data Structures and Process files (CS 20', 'ahmed11', 'my first post', NULL),
(12, 'Data Structures and Process files (CS 20', 'ahmed11', 'my first post', NULL),
(13, 'Data Structures and Process files (CS 20', 'ahmed11', 'my first post', NULL),
(14, 'Data Structures and Process files (CS 20', 'ahmed11', 'my first post', NULL),
(15, 'Data Structures and Process files (CS 20', 'ahmed11', 'my first post', NULL),
(16, 'Data Structures and Process files (CS 20', 'ahmed11', 'my first post', NULL),
(17, 'Data Structures and Process files (CS 20', 'ahmed11', 'my first post', NULL),
(18, 'Data Structures and Process files (CS 20', 'ahmed11', 'my first post', NULL),
(19, 'Data Structures and Process files (CS 20', 'ahmed11', 'my first post', NULL),
(20, 'Data Structures and Process files (CS 20', 'ahmed11', 'my first post', NULL),
(21, 'Data Structures and Process files (CS 20', 'ahmed11', 'my first post', NULL),
(22, 'Data Structures and Process files (CS 20', 'ahmed11', 'my first post', NULL),
(23, 'Data Structures and Process files (CS 20', 'ahmed11', 'my first post', NULL),
(24, 'Data Structures and Process files (CS 20', 'ahmed11', 'my first post', NULL),
(25, 'Data Structures and Process files (CS 20', 'ahmed11', 'my oi', NULL),
(26, 'Data Structures and Process files (CS 20', 'ahmed11', 'this is com this is com this is com this ithis is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is s com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is com this is ', NULL),
(27, 'Computer Programming 1 (CS 102)', 'ahmed11', 'yes it is', NULL),
(28, 'Computer Programming 1 (CS 102)', 'morsy11', 'ok am too', NULL),
(29, 'Data Structures and Process files (CS 20', 'morsy11', 'am no hy', NULL),
(30, 'Computer Programming 2 (CS 201)', 'ahmed11', 'the programming', NULL),
(31, 'Computer Programming 2 (CS 201)', 'ahmed11', 'goooo go', NULL),
(32, 'Mathematical analysis 2 (Math 202)', 'ahmed11', 'mat is math', NULL),
(33, 'Mathematical analysis 2 (Math 202)', 'ahmed11', 'new math is here', NULL),
(34, 'Statistical methods (Stat 201)', 'ahmed11', 'ffff', NULL),
(35, 'Calculus 2 and algebra (Math 102)', 'sarr11', 'yes', NULL),
(36, 'Dynamics analytical (Math 351)', 'sarr11', 'this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math this is my math ', NULL),
(37, 'Dynamics analytical (Math 351)', 'sarr11', 'this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit this is unit ', NULL),
(38, '\0', 'sarr11', '?kgnr', NULL),
(39, '\0', 'sarr11', '"hvjv', NULL),
(40, '\0', 'sarr11', '$r', NULL),
(41, '\0', 'sarr11', 'YFFUWFEU', NULL),
(42, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(43, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(44, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(45, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(46, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(47, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(48, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(49, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(50, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(51, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(52, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(53, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(54, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(55, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(56, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(57, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(58, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(59, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(60, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(61, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(62, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(63, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(64, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(65, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(66, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(67, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(68, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(69, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(70, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(71, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(72, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(73, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(74, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(75, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(76, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(77, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(78, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(79, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(80, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(81, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(82, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(83, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(84, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(85, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(86, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(87, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(88, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(89, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(90, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(91, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(92, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(93, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(94, 'Dynamics analytical (Math 351)', 'ahmed14', 'new post', NULL),
(95, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(96, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(97, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(98, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(99, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(100, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(101, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(102, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(103, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(104, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(105, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(106, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(107, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(108, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(109, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(110, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(111, 'Dynamics analytical (Math 351)', 'ahmed14', 'my post', NULL),
(112, 'Mathematical analysis 2 ', 'ahmed14', 'my math ana 2', NULL),
(113, 'Mathematical analysis 2 ', 'ahmed14', 'my math ana 2', NULL),
(114, 'Mathematical analysis 2 ', 'ahmed14', 'my math ana 2', NULL),
(115, 'Mathematical analysis 2 ', 'ahmed14', 'my ana2', NULL),
(116, 'Mathematical analysis 2 ', 'ahmed14', 'my liner alg', NULL),
(117, 'Linear algebra ', 'ahmed14', 'my linar alg', NULL),
(118, 'Mathematical analysis 2 ', 'ahmed14', 'math u', NULL),
(119, 'Mathematical analysis 2 ', 'ahmed14', 'mmmmmmm\nAsk For Second Lecuture of Data Structure Ask For Second Lecuture of Data Structure Ask For Second Lecuture of Data Structure Ask For Second Lecuture of Data Structure Ask For Second Lecuture of Data Structure Ask For Second Lecuture of Data Structure\n', NULL),
(120, 'Mathematical analysis 2 ', 'ahmed14', 'yyyyy\r\nAsk For Second Lecuture of Data Structure Ask For Second Lecuture of Data Structure Ask For Second Lecuture of Data Structure Ask For Second Lecuture of Data Structure Ask For Second Lecuture of Data Structure Ask For Second Lecuture of Data Structure\r\n', NULL),
(121, 'global', 'ahmed14', 'this global post', NULL),
(122, 'global', 'ahmed14', 'this new post', NULL),
(123, 'Mathematical analysis 2 ', 'ahmed14', 'tjtj', NULL),
(124, 'Mathematical analysis 2 ', 'ahmed14', 'this new all', NULL),
(125, 'global', 'ahmed14', 'ddd', NULL),
(126, 'global', 'ahmed14', 'my new post in global ', NULL),
(127, 'global', 'ahmed14', 'new math ', NULL),
(128, 'global', 'ahmed14', 'ksfgs', NULL),
(129, 'Mathematical analysis 2 ', 'ahmed14', 'my new course', NULL),
(130, 'Mathematical analysis 2 ', 'ahmed14', 'yyy', NULL),
(131, 'Mathematical analysis 2 ', 'morsy11', 'kjdbk bkf b', NULL),
(132, 'Mathematical analysis 2 ', 'morsy11', 'knkglnfklgn lf', NULL),
(133, 'Mathematical analysis 2 ', 'morsy11', 'ertrbetb', NULL),
(134, 'Mathematical analysis 2 ', 'morsy11', 'bghbdghjb', NULL),
(135, 'Mathematical analysis 2 ', 'morsy11', 'dhfjvsf', NULL),
(136, 'Mathematical analysis 2 ', 'morsy11', 'djskdbjkb ', NULL),
(137, 'Mathematical analysis 2 ', 'morsy11', 'jfbgkjbfkj gbkjf b', NULL),
(138, 'Linear algebra ', 'morsy11', 'jkbgkjbfjkbgj kf ', NULL),
(139, 'Linear algebra ', 'morsy11', 'jbgkbjfgjk bf', NULL),
(140, 'Mathematical analysis 2 ', 'ahmed14', 'my lett', NULL),
(141, 'global', 'ahmed14', 'djnfkjbd', NULL),
(142, 'global', 'ahmed14', 'my dj', NULL),
(143, 'Linear algebra ', 'ahmed14', 'this is math', NULL),
(144, 'Mathematical analysis 2 ', 'ahmed14', 'this is analysis 2', NULL),
(145, 'Mathematical analysis 2 ', 'ahmed14', 'is this analysiis', NULL),
(146, 'global', 'ahmed14', 'my global', NULL),
(147, 'Mathematical analysis 2 ', 'morsy11', 'this is math analysis content this is math analysis content this is math analysis content this is math analysis content this is math analysis content this is math analysis content this is math analysis content this is math analysis content this is math analysis content this is math analysis content this is math analysis content this is math analysis content this is math analysis content this is math analysis content this is math analysis content this is math analysis content this is math analysis content this is math analysis content this is math analysis content ', NULL),
(148, 'Mathematical analysis 2 ', 'ahmed14', 'this is new content in math analysis', NULL),
(149, 'global', 'morsy11', 'new post added', NULL),
(150, 'Mathematical analysis 2 ', 'ahmed14', 'this is statistical co=', NULL),
(153, 'Statistical methods ', 'ahmed14', 'this is statistical methods', NULL),
(154, 'Statistical methods ', 'ahmed14', 'free active source <h1>h1<h1/>', NULL),
(155, 'global', 'ahmed14', 'uuu', NULL),
(156, 'global', 'ahmed14', 'uuu', NULL),
(157, 'global', 'ahmed14', 'uuu', NULL),
(158, 'global', 'ahmed14', 'uuu', NULL),
(159, 'Dynamics analytical ', 'dina11', 'post new ', NULL),
(160, 'Dynamics analytical ', 'dina11', 'very new post', NULL),
(161, 'Calculus 2 and algebra ', 'dina11', 'calculus 2', NULL),
(162, 'Calculus 2 and algebra ', 'dina11', 'claculus post ', NULL),
(163, 'Mathematical analysis 2 ', 'dina11', 'new post', NULL),
(164, 'Mechanics 3 ', 'dina11', 'new post mechanic', NULL),
(165, 'Mathematical analysis 2 ', 'ahmed14', 'Ø¨Ø³Ù… Ø§Ù„Ù„Ù‡', NULL),
(166, 'Mathematical analysis 2 ', 'ahmed14', 'Ø¨Ø³Ù… Ø§Ù„Ù„Ù‡', NULL),
(167, 'Mathematical analysis 1 and solid geomet', 'ahmed14', 'ÙƒÙˆÙ…Ù†Øª', NULL),
(168, 'Mathematical analysis 1 and solid geomet', 'ahmed14', 'Ù…Ù†Ø´ÙˆØ±', NULL),
(169, 'Mathematical analysis 2 ', 'ahmed14', 'Ù…Ù†Ø´ÙˆØ± Ø¨', NULL),
(170, 'Mathematical analysis 1 and solid geomet', 'ahmed14', 'post 1', NULL),
(171, 'Mathematical analysis 2 ', 'ahmed14', 'post 2', NULL),
(172, 'Mathematical analysis 2 ', 'ahmed14', 'post 3', NULL),
(173, 'Mathematical analysis 2 ', 'ahmed14', 'seral', NULL),
(174, 'CS 102', 'ahmed14', 'post A', NULL),
(175, 'CS 201', 'ahmed14', 'post B', NULL),
(176, 'CS 202', 'ahmed14', 'post C', NULL),
(177, 'CS 203', 'ahmed14', 'post D', NULL),
(178, 'CS 102', 'ahmed14', 'post B', NULL),
(179, 'CS 201', 'ahmed14', 'post in course ', NULL),
(180, 'CS 206', 'ahmed14', 'new advanced programming', NULL),
(181, 'CS 102', 'ahmed14', 'new advanced programming', NULL),
(182, 'CS 204', 'ahmed14', 'theory of computing', NULL),
(183, 'CS 204', 'ahmed14', 'new post computer programming 1', NULL),
(184, 'CS 206', 'ahmed14', 'advanced proramming', NULL),
(185, 'CS 102', 'ahmed14', 'A', 'hidden'),
(186, 'CS 201', 'ahmed14', 'B', NULL),
(187, 'CS 202', 'ahmed14', 'C', NULL),
(188, 'CS 203', 'ahmed14', 'D', NULL),
(189, 'CS 202', 'ahmed14', 'C2', NULL),
(190, 'CS 202', 'ahmed14', 'data structure post', NULL),
(191, 'CS 203', 'ahmed14', 'discrete structure post', NULL),
(192, 'CS 203', 'ahmed14', 're descrite', NULL),
(193, 'Mechanics 1 ', 'ali11', 'new post mechanic', NULL),
(194, 'CS 202', 'ahmed14', 'new post in data structure', NULL),
(195, 'CS 102', 'ahmed14', 'computre programming lecture', NULL),
(196, 'CS 202', 'ahmed14', 'Data lectr', NULL),
(197, 'CS 206', 'ahmed14', 'adva', NULL),
(198, 'CS 302', 'ahmed14', 'Database Systems', NULL),
(199, 'CS 302', 'ahmed14', 'Database system post ', NULL),
(259, 'CS 102', 'ahmed14', 'المحاضرة ملغية ', NULL),
(260, 'CS 201', 'dina11', 'multi lec', NULL),
(261, 'CS 102', 'ahmed14', 'المحاضرة غدا', NULL),
(262, 'CS 301', 'ahmed14', 'منشور عن نظم تشغيل ', NULL),
(263, 'CS 301', 'ahmed14', 'منشور عن نظم تشغيل ', NULL),
(264, 'CS 203', 'ahmed14', 'محاضرة تراكيب الان', NULL),
(265, 'global', 'ahmed14', 'ugu', NULL),
(266, 'global', 'dina11', 'nice', NULL),
(267, 'CS 102', 'samy11', 'امتحان الشفوى غدا الساعة 8', NULL),
(268, 'CS 102', 'samy11', 'امتحان الشفوى غدا الساعة 8', 'hidden'),
(269, 'CS 102', 'samy11', 'امتحان الشفوى غدا الساعة 8', NULL),
(270, 'CS 102', 'samy11', 'امتحان الشفوى غدا الساعة 8', 'hidden'),
(271, 'global', 'ahmed14', 'new post', NULL),
(272, 'CS 214', 'ahmed14', 'موضوع للبحث', NULL),
(988, 'patton', 'ahmed14', '<h4 style="width:350px">what is your main catchword ?</h4><h5>hi future </h5>', NULL),
(989, 'patton', 'ahmed14', '<h4 style="width:350px">what is your professional skills?</h4><h5>web dev , design , database admin</h5>', NULL),
(990, 'patton', 'ahmed14', '<h4 style="width:350px">what is your personal skills?</h4><h5>made plans</h5>', NULL),
(991, 'patton', 'ahmed14', '<h4 style="width:350px">what is your ideas to improve social site ?</h4><h5>add sound clerck </h5>', NULL),
(992, 'patton', 'ahmed14', '<h4 style="width:350px">what is your ideas to use the learning open sources and contact it with the site ?</h4><h5>add wolf rame search</h5>', NULL),
(993, 'patton', 'ahmed14', '<h4 style="width:350px">what is your ideas to build parllel learning methodology ?</h4><h5>add android course</h5>', NULL),
(994, 'patton', 'ahmed14', '<h4 style="width:350px">what is your ideas to improve students personal skills ?</h4><h5>make hour to spea</h5>', NULL),
(995, 'patton', 'ahmed14', '<h4 style="width:350px">are you member of GSI ? if yes what is your ideas to improve it ?</h4><h5>yes add more project</h5>', NULL),
(996, 'patton', 'ahmed14', '<h4 style="width:350px">what you want to add ?</h4><h5>our future is now</h5>', NULL),
(997, 'patton', 'dina11', '<h4 style="width:350px"> ما هو شعارك العام للخلية 71 ؟ </h4><h5>العمل بلا حدود</h5>', NULL),
(998, 'patton', 'dina11', '<h4 style="width:350px"> ما هى مهاراتك المهنية ؟ </h4><h5>الخوارزميات و الذكاء الاصطناعى و تعليم الالة</h5>', NULL),
(999, 'patton', 'dina11', '<h4 style="width:350px"> ما هى مهاراتك الشخصية ؟ </h4><h5>التخطيط و الابداع</h5>', NULL),
(1000, 'patton', 'dina11', '<h4 style="width:350px"> ما هى افكارك لتطوير موقع التواصل ؟ </h4><h5>اضافة وسائط للمطورين</h5>', NULL),
(1001, 'patton', 'dina11', '<h4 style="width:350px"> ما هى افكارك عن الاستفادة من  مصادر التعلم الحر و ربطها بالموقع ؟ </h4><h5>محركات البحث غير التقليدية</h5>', NULL),
(1002, 'patton', 'dina11', '<h4 style="width:350px"> ما هى افكارك لبناء منهج تعلم موازى ؟ </h4><h5>البى دى او</h5>', NULL),
(1003, 'patton', 'dina11', '<h4 style="width:350px"> ما هى افكارك لتطوير مهارات الطلاب الاساسية   ؟ </h4><h5>المقابلات</h5>', NULL),
(1004, 'patton', 'dina11', '<h4 style="width:350px"> هل انت عضو فى مجموعة مستثمرى علوم  ؟ و اذا كانت اجابتك نعم هل لديك افكار لتطويرها ؟ </h4><h5>نعم بورصة مصغرة</h5>', NULL),
(1005, 'patton', 'dina11', '<h4 style="width:350px"> ماذا تحب ان تضيف ؟ </h4><h5>نعم بورصة مصغرة</h5>', NULL),
(1006, 'global', 'dina11', 'test for grad', NULL),
(1007, 'admin', 'dina11', 'new post for grad', NULL),
(1008, 'global', 'dina11', 'new post for grad', NULL),
(1009, 'global', 'dina11', 'الامتحان النهائى', NULL),
(1010, 'CS 202', 'ahmed14', 'i will recieve posted to home', 'hidden'),
(1011, 'global', 'ahmed14', 'the final exam table has been publish in university link', NULL),
(1012, 'admin', 'ahmed14', 'الادارة الجديدة', NULL),
(1013, 'admin', 'ahmed14', ' a new course avilable now in C++', NULL),
(1014, 'global', 'ahmed14', 'يتم حاليا تعديل اللائحة نرجو المتابعة بالاقتراحات و الاستفسارات ', NULL),
(1015, 'CS 102', 'ahmed14', 'new post with per', NULL),
(1016, 'CS 102', 'samy11', 'new post with notify', NULL),
(1017, 'CS 102', 'samy11', 'new post with notify 2 ', NULL),
(1018, 'CS 102', 'ahmed14', 'new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#new course c#', NULL),
(1019, 'Math 101', 'mo11', 'dr . mohamed had cancel the lecture and he share that on FB', NULL),
(1020, 'global', 'mo11', 'هل هناك معلومات جديدة عن مشروع الحاسبات الفائقة ؟', NULL),
(1021, 'Math 101', 'mo11', 'klcnvlknlcnlv', NULL),
(1022, 'Math 102', 'mo11', 'هل هناك معلومات عن المحاضرة القادمة', NULL),
(1023, 'CS 102', 'ahmed14', 'lgdm;lfn gl ndl ', NULL),
(1024, 'CS 102', 'ahmed14', '""', 'hidden'),
(1025, 'CS 102', 'ahmed14', 'my new post', 'hidden'),
(1026, 'CS 102', 'dina11', 'المقرر تم تعديله', 'hidden'),
(1027, 'CS 202', 'dina11', 'ما هو افضل خوارزمية ترتيب ؟', NULL),
(1028, 'CS 210', 'ahmed14', 'nn', NULL),
(1029, 'CS 102', 'ahmed14', 'i need 3 partner for my class project ', NULL),
(1030, 'CS 102', 'ahmed14', 'C# is a  modern, general-purpose,  object-oriented programming language developed by Microsoft and \napproved by Ecma and ISO.\nC# was developed by Anders Hejlsberg and his team during the development of .Net Framework.C# is  designed for Common Language Infrastructure (CLI), which consists of the executable code and runtime \nenvironment that allows use of various high-level languages to be used on different computer platforms and \narchitectures.\n', NULL),
(1031, 'CS 102', 'dina11', 'ارجو ان يقوم احد بشرح فكرة الرسم داخل السى بالمعادلات الرياضية و وضع قواعد عامة ', NULL),
(1032, 'CS 214', 'sara11', 'ما هي المواضيع المقترحة لعمل أبحاث عليها ؟', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `postreported`
--

CREATE TABLE IF NOT EXISTS `postreported` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `reporter` varchar(50) NOT NULL,
  `reported_for` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `postreported`
--

INSERT INTO `postreported` (`id`, `post_id`, `reporter`, `reported_for`) VALUES
(2, 32, '', 'vio'),
(3, 32, 'ahmed11', 'vio'),
(4, 32, 'ahmed11', 'vio2'),
(5, 34, 'ahmed11', 'yyy'),
(6, 116, 'ahmed14', 'it has no meaning'),
(7, 116, 'ahmed14', 'this is fall'),
(8, 116, 'ahmed14', 'no comment'),
(9, 116, 'ahmed14', 'sss'),
(10, 116, 'ahmed14', 'dddd'),
(11, 116, 'ahmed14', 'suck'),
(12, 120, 'ahmed14', 'so sucks'),
(13, 123, 'ahmed14', 'null'),
(14, 126, 'ahmed14', ''),
(15, 126, 'ahmed14', ''),
(16, 126, 'ahmed14', ''),
(17, 126, 'ahmed14', 'ttt'),
(18, 130, 'ahmed14', 'null'),
(19, 130, 'ahmed14', 'null'),
(20, 145, 'ahmed14', 'null'),
(21, 145, 'ahmed14', 'null'),
(22, 145, 'ahmed14', 'null'),
(23, 145, 'ahmed14', 'null'),
(24, 145, 'ahmed14', 'null'),
(25, 146, 'ahmed14', 'jfbdkj'),
(26, 150, 'ahmed14', 'yes'),
(27, 160, 'dina11', 'tt'),
(28, 150, 'dina11', 'false'),
(29, 163, 'ahmed14', 'suck'),
(30, 174, 'ahmed14', 'very bad'),
(31, 175, 'ahmed14', 'not verified'),
(32, 185, 'ahmed14', 'rrrrrrrr'),
(33, 194, 'ahmed14', 'very very '),
(34, 203, 'ahmed14', 'vyft'),
(35, 203, 'dina11', 'rery'),
(36, 262, 'ahmed14', '?? '),
(37, 268, 'samy11', 'kslk'),
(38, 268, 'samy11', 'not verfied'),
(39, 271, 'ahmed14', 'jnngjb'),
(40, 273, 'ahmed14', 'ttt'),
(41, 1008, 'dina11', 'no waay'),
(42, 1010, 'ahmed14', 'hvshdv'),
(43, 185, 'ahmed14', 'no way'),
(44, 260, 'mo11', 'jbvjhv'),
(45, 1026, 'ahmed14', 'very bad language'),
(46, 192, 'sara11', 'so agressive');

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE IF NOT EXISTS `ques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `que` varchar(500) CHARACTER SET utf16 NOT NULL,
  `username` varchar(50) CHARACTER SET utf16 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`id`, `que`, `username`) VALUES
(2, 'why we have to study alg', 'ahmed14'),
(3, 'ما هى متطلبات قسم حاسب  ', 'dina11'),
(4, 'ما هى متطلبات مقرر الخوارزميات ؟  ', 'dina11'),
(5, 'ما هى اقسام الكلية', 'ahmed14'),
(6, 'ما هو التقدير العام ', 'ahmed14'),
(8, 'ما هو مشروع التخرج ؟', 'dina11'),
(9, 'ما هى افضل الاقتراحات لمواد الاختيار الحر : اخلاقيات المهنة او اساسيات ادارة او تاريخ علوم او علم نفس او علوم بيئة', 'dina11'),
(10, 'what is augmanted reality', 'ahmed14'),
(11, '', 'ahmed14');

-- --------------------------------------------------------

--
-- Table structure for table `rate_post`
--

CREATE TABLE IF NOT EXISTS `rate_post` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `post_id` varchar(20) NOT NULL DEFAULT '',
  `value` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`username`,`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE IF NOT EXISTS `resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(250) NOT NULL,
  `title` varchar(100) CHARACTER SET utf16 NOT NULL,
  `desq` varchar(250) CHARACTER SET utf16 NOT NULL,
  `type` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `downloud` int(11) NOT NULL,
  `perm` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`id`, `src`, `title`, `desq`, `type`, `code`, `username`, `downloud`, `perm`) VALUES
(6, './resources/member_resource/lectures/284_12-03-2016_D1_Introuction.ppt', 'introduction', 'an introduction to course content', 'lecture', 'Database Systems ', 'ahmed14', 0, ''),
(7, './resources/member_resource/lectures/4144_12-03-2016_D1_Introuction.ppt', 'rtert', 'trtr', 'lecture', 'Database Systems ', 'dina11', 0, ''),
(8, './resources/member_resource/lectures/4746_12-03-2016_D1_Introuction.ppt', 'eeei', 'iiii', 'lecture', 'multimedia ', 'ahmed14', 0, ''),
(9, './resources/member_resource/lectures/3108_12-03-2016_D1_Introuction.ppt', 'eeei', 'iiii', 'lecture', 'Database Systems ', 'ahmed14', 0, ''),
(10, './resources/member_resource/lectures/7406_12-03-2016_D1_Introuction.ppt', 'eeei', 'iiii', 'lecture', 'multimedia ', 'ahmed14', 0, ''),
(12, './resources/member_resource/lectures/3694_12-03-2016_D1_Introuction.ppt', 'mathematical', 'inddd', 'lecture', 'CS 202', '', 10, ''),
(13, './resources/member_resource/lectures/6102_12-03-2016_Database_Lect1_Introuction.ppt', 'kbkxgfug', 'kjbjsbfjh', 'lecture', 'CS 202', 'dina11', 2, ''),
(14, './resources/member_resource/lectures/7400_12-03-2016_Database_Lect3_ER_-Examples.ppt', 'linear algebra 1', 'newest lec', 'lecture', 'Linear algebra ', 'dina11', 0, ''),
(15, './resources/member_resource/lectures/4049_14-03-2016_Database_Lect2_ER.ppt', 'second lecture ', 'new new new new new new new new new new new ', 'lecture', 'CS 202', 'ahmed14', 2, ''),
(16, './resources/member_resource/lectures/8543_27-03-2016_Database_Lect7_Algebra.ppt', 'new lec', 'very newer lecture ', 'lecture', 'CS 102', 'ahmed14', 0, ''),
(17, './resources/member_resource/lectures/3657_27-03-2016_Database_Lect7_SQL.ppt', '??? ??????', '?????? ?? ?????? ????????', 'lecture', 'CS 102', 'ahmed14', 0, ''),
(18, './resources/member_resource/lectures/5047_27-03-2016_Database_Lect7_SQL.ppt', 'اول محاضرة', 'محاضرة عن الرسوم البيانية', 'lecture', 'CS 102', 'ahmed14', 1, ''),
(19, './resources/member_resource/lectures/8454_27-03-2016_Database_Lect7_SQL.ppt', 'اول محاضرة', 'محاضرة عن الرسوم البيانية', 'lecture', 'CS 102', 'ahmed14', 2, ''),
(20, './resources/member_resource/lectures/2938_28-03-2016_D1_Introuction.ppt', 'النظم', 'محاضرة تمهيدية', 'lecture', 'CS 214', 'ahmed14', 6, ''),
(21, '../uploads/files/4847_28-03-2016_058.pdf', 'البيانات', 'كتاب مرجع فى تراكيب البيانات', 'book', 'CS 102', 'ahmed14', 1, ''),
(22, '../uploads/files/9209_28-03-2016_Advanced_PHP_Programming.pdf', 'تراكيب', 'كتاب مرجع فى تراكيب البيانات', 'book', 'CS 202', 'ahmed14', 3, ''),
(23, '../uploads/files/5110_28-03-2016_Advanced_PHP_Programming.pdf', 'php ', 'php book', 'book', 'CS 102', 'dina11', 3, ''),
(24, './resources/member_resource/lectures/371_29-03-2016_csharp_tutorial.pdf', 'kjfdb k', 'kjbjk vjh', '', 'CS 102', 'ahmed14', 0, ''),
(25, './resources/member_resource/lectures/4915_29-03-2016_csharp_tutorial.pdf', 'kjfdb k', 'kjbjk vjh', 'lecture', 'CS 102', 'ahmed14', 3, ''),
(26, '', 'C', 'C resources', 'resource', 'CS 102', 'ahmed14', 0, ''),
(27, '', 'C', 'C resources', 'resource', 'CS 102', 'ahmed14', 0, ''),
(28, '', 'C advanced', 'C advaned course', 'resource', 'CS 102', 'ahmed14', 0, ''),
(29, '', 'C++', 'C++ resources', 'resource', 'CS 102', 'ahmed14', 0, ''),
(30, './resources/member_resource/lectures/9530_22-04-2016_371_29-03-2016_csharp_tutorial.pdf', '', 'hhv', 'lecture', 'CS 102', 'ahmed14', 0, ''),
(31, '../uploads/files/9872_22-04-2016_Simply_Raspberry_Pi.pdf', 'راسبيرى باى ', 'راسبيرى باى اللوحة التجريبية', 'book', 'CS 202', 'dina11', 5, ''),
(32, '../uploads/files/2766_21-05-2016_284_12-03-2016_D1_Introuction.ppt', 'المحاضرة الاولى', 'مقدمة عامة عن المنهج و عن نظام توزيع الدرجات ', 'lecture', 'Math 101', 'mo11', 1, ''),
(33, '../uploads/files/2192_21-05-2016_371_29-03-2016_csharp_tutorial.pdf', 'الكتاب الاول', 'كتاب مرجع عن الرياضيات العامة', 'book', 'Math 101', 'mo11', 1, ''),
(34, '', 'Concepts', 'concepts of computer programming', '', 'CS 102', 'ahmed14', 0, ''),
(39, '../uploads/files/6125_15-06-2016_compilerDesignInC.pdf', 'Compilers', 'compiler by C', 'book', 'CS 102', 'ahmed14', 2, ''),
(40, '../uploads/files/8286_15-06-2016_01-IRintroduction.ppt', 'my lecyut', 'vnklnf klnfk nklfnknf kn', 'lecture', 'CS 102', 'ahmed14', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `mini_logo` varchar(250) NOT NULL,
  `brand` varchar(250) NOT NULL,
  `map` varchar(250) NOT NULL,
  `copy` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `banner` varchar(250) NOT NULL,
  `regist` varchar(250) NOT NULL,
  `new_sem` varchar(5) NOT NULL DEFAULT 'F',
  `new_patton` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `title`, `logo`, `mini_logo`, `brand`, `map`, `copy`, `name`, `banner`, `regist`, `new_sem`, `new_patton`) VALUES
(1, 'Science Society', './resources/uploads/9129_07-02-2016_01.png', '../uploads/site/2948_21-05-2016_00.png', 'Science <span>Society</span>', './resources/uploads/5180_07-02-2016_03.png', 'Science <span> Society</span>', ' The First Social Network For Faculty Of Science 1', './resources/uploads/2824_08-02-2016_banner.jpg', '', 'T', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `site-dep-banner`
--

CREATE TABLE IF NOT EXISTS `site-dep-banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `desq` varchar(1000) NOT NULL,
  `banner` varchar(250) CHARACTER SET latin1 NOT NULL,
  `lang` varchar(1) CHARACTER SET latin1 NOT NULL DEFAULT 'E',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `site-dep-banner`
--

INSERT INTO `site-dep-banner` (`id`, `title`, `desq`, `banner`, `lang`) VALUES
(3, 'Mathematics and Computer Sciences', 'The Department of Mathematics was established as one of the departments in the Faculty of Science, Alexandria University in the year of 1942 by his founder Prof. Dr. Mohamed Ali Hegab Beh.', '../uploads/images/8226_21-05-2016_7073_20-02-2016_01.jpg', 'E'),
(4, 'Physics', 'The Department of physics, Faculty of science-Alexandria University is the oldest department of physics in Egypt. It is established in 1942. Now it includes seventy faculty staff members in various fields of Physics.', '../uploads/site/4704_26-02-2016_02.jpg', 'E'),
(5, 'Chemistry', 'The Chemistry Department was one of the first departments constituting the Faculty of Science that was established in 1942. It started with teaching the chemistry courses for first year students and pre-medicine students.', '../uploads/site/7817_26-02-2016_03.jpg', 'E'),
(6, 'Botany and Microbiology', 'The Botany Department was one of the first seven departments constituting the Faculty of Science at King Farouk the first University in 1942. The department started with five academic staff members raised to seven after one year and Professor Mohamme', '../uploads/site/9489_26-02-2016_04.jpg', 'E'),
(7, 'Zoology', 'The Department of Zoology and Entomology were established 1946 independently, then were merged 1954 and named Zoology Department. Since then the department continues its academic mission for more than sixty years.', '../uploads/site/7145_26-02-2016_05.jpg', 'E'),
(8, 'Geology', 'The Department of Geology, Alexandria University was founded in 1944, two years after the establishment of the Faculty of Science in 1942. Through the years, there have been some curriculum revisions which have taken into account new ideas and advanc', '../uploads/site/7803_26-02-2016_06.jpeg', 'E'),
(9, 'Oceanography', 'The Department of Oceanography was found in 1948 by Prof. H. Fawzy and Prof. A.F. Mohammed within the Faculty of Science, Alexandria University. Until now it is still the principal leading university department in Egypt, education and research in oce', '../uploads/site/2188_26-02-2016_07.jpg', 'E'),
(10, 'Biochemistry', 'The Department of Biochemistry was established at 1973 by the late Prof. Sayed Amin and Prof. Olfat Muhyiddin.', '../uploads/site/585_26-02-2016_08.jpg', 'E'),
(11, 'Environmental Sciences', 'The Department of Environmental Sciences was established as one of the departments in the Faculty of Science, Alexandria University in the the academic year 1995/1996 by his founder Prof. Dr.M. Ayaad. Prof. Dr. Assem Barakat was the first head of the', '../uploads/site/3773_26-02-2016_09.jpg', 'E'),
(21, 'قسم الرياضيات وعلوم الحاسوب  ', 'تأسس قسم الرياضيات فى كلية العلوم جامعة الإسكندرية عام 1942 على يد مؤسسه الدكتور محمد على حاجب بك</p>', '../uploads/site/6297_26-02-2016_01.jpg', 'A'),
(22, 'قسم الفيزياء  ', 'قسم الفيزياء كلية العلوم جامعة الاسكندرية اقدم قسم الفيزياء فى مصر. ثبت فى عام 1942. يشمل 70 عضو فى مختلف مجالات الفيزياء', '../uploads/site/4704_26-02-2016_02.jpg', 'A'),
(23, 'قسم الكيمياء  ', 'قسم الكيمياء هو من أول الأقسام التى تشكلت فى كلية العلوم الذى انشئت فى عام 1942. بدات دورات تعليم الكيمياء لطلاب السنة الاولى وطلاب إعدادى صيدلة.', '../uploads/site/7817_26-02-2016_03.jpg', 'A'),
(24, 'قسم علم النبات وعلم الجراثيم  ', 'قسم النباتات احد اول سبع أقسام شكلت بكلية العلوم بجامعة الملك فاروق الاول فى عام 1942. وبدات القسم بخمسة من موظفى الاكاديمية الى سبعة بعد سنة واحدة وكان الاستاذ محمد العزيز فكرى اول رئيس للقسم.', '../uploads/site/9489_26-02-2016_04.jpg', 'A'),
(25, 'قسم علم الحيوان  ', 'قسم علم الحيوان وعلم الحشرات اقيم عام 1946 بصورة مستقلة, ثم تم دمجهم عام 1954 واطلق عليهم اسم علم الحيوان. ومنذ ذلك الحين أستمرت مهام القسم الأكاديمية لأكثر من ستين عام', '../uploads/site/7145_26-02-2016_05.jpg', 'A'),
(26, 'قسم علم طبقات الأرض  ', 'قسم الجيولوجيا بجامعة الاسكندرية تاسست عام 1944 بعد سنتين من انشاء كلية العلوم فى عام 1942. وعلى مر السنين, كان هناك بعض عمليات مراجعة المناهج الدراسية التى اخذت فى الاعتبار الافكار الجديدة واوجه التقدم فى العلوم الجيولوجية.', '../uploads/site/7803_26-02-2016_06.jpeg', 'A'),
(27, 'قسم دراسة علمية للظواهر الجغرافية والمادية في المحيطات والبحار  ', 'قسم المحيطات تأسس عام 1948 بواسطة البروفيسور. فوزى والبروفيسور ا. ف. محمد فى كلية العلوم جامعة الاسكندرية. وحتى الان لا يزال اكبر قسم جامعى فى مصر للتعليم والأبحاث فى علم المحيطات.</p>', '../uploads/site/2188_26-02-2016_07.jpg', 'A'),
(28, 'قسم الكيمياء الحيوية  ', 'قسم الكيمياء الحيوية انشئ فى عام 1973, فى نهاية فترة البروفيسور سيد امين والبروفيسور الفت محى الدين.', '../uploads/site/585_26-02-2016_08.jpg', 'A'),
(29, 'قسم العلوم البيئية  ', 'قسم العلوم البيئية احدى الأقسام فى كلية العلوم جامعة الاسكندرية فى العام الدراسى 1995/1996 من مؤسسيه الاستاذ الدكتور م عياد. الاستاذ الدكتور عاصم بركات اول رئيس القسم.', '../uploads/site/3773_26-02-2016_09.jpg', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `sitecontact`
--

CREATE TABLE IF NOT EXISTS `sitecontact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) CHARACTER SET utf16 NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(1000) CHARACTER SET utf16 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `sitecontact`
--

INSERT INTO `sitecontact` (`id`, `username`, `email`, `message`) VALUES
(6, 'abs', 'eee@dd.dd', 'iiiii'),
(7, 'mord', 'dxfd@fxgf.xr', 'fxgfx'),
(8, 'jhhctc', 'eee@dd.dd', 'www'),
(9, 'islam11', 'islamkhamis900@yahoo.com', 'my contact'),
(10, 'hgchds452', 'islamkhamis900@yahoo.com', 'xgfxgd'),
(12, 'isis', 'issis@isis.ss', 'yes yes ');

-- --------------------------------------------------------

--
-- Table structure for table `siteopinion`
--

CREATE TABLE IF NOT EXISTS `siteopinion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `desq` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `siteopinion`
--

INSERT INTO `siteopinion` (`id`, `name`, `desq`) VALUES
(8, 'Morsi Abdelhady', 'Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu estLorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placera'),
(9, 'Islam Khmais', 'Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu estLorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat'),
(10, 'Mohamed Atef', 'Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu estLorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat.'),
(11, 'Mohamed Elsayed', 'Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu estLorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat.'),
(12, 'Mohamed Elsayed', 'Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu estLorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat.');

-- --------------------------------------------------------

--
-- Table structure for table `siteprof`
--

CREATE TABLE IF NOT EXISTS `siteprof` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `desq` varchar(250) NOT NULL,
  `pict` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `siteprof`
--

INSERT INTO `siteprof` (`id`, `title`, `desq`, `pict`) VALUES
(1, 'Youssef', 'Biotechnology Progress Journal USA', './resources/uploads/4241_20-02-2016_Alaa_El-Din_Ahmed.jpg'),
(3, 'jvjv', 'jvjcckcjvjcckcjvjcckcjvjcckc', './resources/uploads/9264_20-02-2016_Usama_Abdalla.gif'),
(4, 'zzzz', 'yyyy', './resources/uploads/1536_20-02-2016_Mohamed_Abdel-Aziz.gif');

-- --------------------------------------------------------

--
-- Table structure for table `siteteam`
--

CREATE TABLE IF NOT EXISTS `siteteam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pict` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `google` varchar(250) NOT NULL,
  `work` varchar(250) NOT NULL,
  `Aname` varchar(50) CHARACTER SET utf16 NOT NULL,
  `Awork` varchar(50) CHARACTER SET utf16 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `siteteam`
--

INSERT INTO `siteteam` (`id`, `pict`, `name`, `facebook`, `twitter`, `google`, `work`, `Aname`, `Awork`) VALUES
(2, '../uploads/site/7157_20-02-2016_01.jpg', 'Morsy abdelhady', 'www.facebook.com/morsy.eltukhy94/', 'www.twitter.com/morsy.eltukhy94/', 'www.google.com/morsy.eltukhy94/', 'Web Designer', 'مرسى عبد الهادى ', 'مصمم ويب'),
(3, '../uploads/site/6757_20-02-2016_02.jpg', 'Islam Khamis', 'ff', 'tt', 'gg', 'Web Developer', 'اسلام خميس', 'مطور ويب'),
(4, '../uploads/site/7157_20-02-2016_01.jpg', 'Mohamed  Atef', 'ff', 'tt', 'gg', 'Sever Adminstration', 'محمد عاطف', 'ادارة الخادم'),
(5, '../uploads/site/6757_20-02-2016_02.jpg', 'Ihab Elbadry', 'ff', 'tt', 'gg', 'Web Designer', 'ايهاب البدرى', 'مصمم ويب'),
(6, '../uploads/site/5425_17-06-2016_6757_20-02-2016_02.jpg', 'Mohamed Elsaid', 'momo77/facebook', 'ttttt', 'ggggggg', 'Android Dev', 'محمد السيد', 'مطور اندرويد');

-- --------------------------------------------------------

--
-- Table structure for table `site_rate`
--

CREATE TABLE IF NOT EXISTS `site_rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rate` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `site_rate`
--

INSERT INTO `site_rate` (`id`, `rate`) VALUES
(1, 4),
(2, 4),
(8, 4),
(11, 4),
(12, 2),
(13, 2),
(14, 1),
(15, 1),
(16, 5),
(17, 5),
(18, 2),
(19, 3),
(20, 3),
(21, 4),
(22, 5),
(23, 4),
(24, 4),
(25, 4),
(26, 4),
(27, 4),
(28, 4),
(29, 4),
(30, 4),
(31, 4),
(32, 4),
(33, 4),
(34, 4),
(35, 4),
(36, 4),
(37, 4),
(38, 4),
(39, 4),
(40, 4),
(41, 4),
(42, 4),
(43, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
