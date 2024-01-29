-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2016 at 02:03 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `im`
--

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

CREATE TABLE IF NOT EXISTS `conversation` (
  `id` int(11) NOT NULL,
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conversation`
--

INSERT INTO `conversation` (`id`, `user_one`, `user_two`) VALUES
(1, 6, 5),
(2, 1, 6),
(3, 2, 1),
(4, 2, 4),
(5, 2, 3),
(6, 2, 5),
(7, 2, 6),
(8, 1, 3),
(9, 1, 5),
(10, 1, 4),
(11, 42, 1),
(12, 42, 2),
(13, 42, 3),
(14, 42, 4),
(15, 42, 6),
(16, 0, 2),
(17, 42, 7),
(18, 42, 5),
(19, 40, 4),
(20, 42, 8),
(21, 39, 3),
(22, 39, 4),
(23, 39, 2),
(24, 39, 6),
(25, 42, 41),
(26, 42, 40),
(27, 42, 43),
(28, 42, 44),
(29, 44, 43),
(30, 45, 43),
(31, 44, 45),
(32, 42, 45),
(33, 44, 46),
(34, 45, 46),
(35, 42, 46),
(36, 47, 48),
(37, 48, 45),
(38, 48, 44),
(39, 46, 43),
(40, 48, 46),
(41, 46, 47),
(42, 48, 43),
(43, 49, 46),
(44, 47, 49),
(45, 47, 45),
(46, 46, 50),
(47, 50, 47),
(48, 51, 46),
(49, 51, 47),
(50, 47, 52),
(51, 51, 48),
(52, 51, 52),
(53, 51, 53),
(54, 51, 50),
(55, 53, 52),
(56, 54, 52),
(57, 54, 53);

-- --------------------------------------------------------

--
-- Table structure for table `distrbutors`
--

CREATE TABLE IF NOT EXISTS `distrbutors` (
  `distrbutor_id` int(100) NOT NULL,
  `message_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company` varchar(233) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `profile_pic` varchar(233) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distrbutors`
--

INSERT INTO `distrbutors` (`distrbutor_id`, `message_id`, `product_id`, `orders_id`, `name`, `company`, `address`, `contact`, `country`, `city`, `date_added`, `location`, `profile_pic`) VALUES
(16, 0, 0, 0, 'demo', 'Dashion', 'antn@gmail.com', '9999', 'ccc', 'xxxxxxx', '234587', 'mmm', 'upload/product5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `user_from` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `conversation_id`, `user_from`, `user_to`, `message`) VALUES
(121, 37, 45, 48, 'yet neh'),
(122, 37, 48, 45, 'addis'),
(123, 52, 51, 52, 'nnnn'),
(124, 52, 51, 52, 'nnn'),
(125, 54, 51, 50, 'nnn'),
(126, 55, 53, 52, 'nn'),
(127, 55, 52, 53, 'vvvv'),
(128, 56, 54, 52, 'wwwwwww'),
(129, 57, 54, 53, 'wwwwww'),
(130, 57, 54, 53, 'kkk'),
(131, 55, 53, 52, 'bbbbbbbbbbbb'),
(132, 57, 53, 54, 'vvvvvvvv');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `confirmation` varchar(30) NOT NULL,
  `total` varchar(100) NOT NULL,
  `design` varchar(300) NOT NULL,
  `note` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=572 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product`, `qty`, `confirmation`, `total`, `design`, `note`) VALUES
(1, 'Magic Mug', 1000, 'TKE-KMS', '150000', 'design/wire_transfer_256.png', 'rewewe'),
(2, 'Mug', 5, 'DSO-4CH', '500', 'design/', 'small'),
(3, 'Magic Mug', 1111, 'TKE-KMS', '166650', 'design/ownerpic.png', 'ewewewe'),
(4, 'Magic Mug', 2222, 'TKE-KMS', '333300', 'design/ownerpic.png', 'sdsdsdsd'),
(6, 'Magic Mug', 22222, 'HXF-MII', '3333300', 'design/New Picture.png', 'eweewe'),
(8, 'Echo Bag', 8, 'RUO-FQX', '200', 'design/', 'wallet size'),
(9, 'Thumbler', 4, 'KSD-BYN', '360', 'design/', 'small'),
(10, 'Thumbler', 100, 'OQF-6YC', '9000', 'design/hAnNah018.jpg', ''),
(11, 'keychain', 90, 'QMJ-HRX', '2250', 'design/hAnNah018.jpg', 'butterfly'),
(12, 'Mug', 9, 'QY-FJ3', '900', 'design/hAnNah018.jpg', ''),
(13, 'T-shirt', 100, 'WYQW-5OZ', '18000', 'design/wire_transfer_256.png', 'small, black 100'),
(15, 'Keychain', 3, 'MM-MDE', '75', 'design/hAnNah018.jpg', 'butterfly'),
(16, 'Magic Mug', 143, 'IUJ-B44', '21450', 'design/ownerpic.png', ''),
(17, 'Mug', 1, 'GLM-VO3', '100', 'design/537484_234955419971298_1129768462_n.jpg', ''),
(18, 'Magic Mug', 1001, 'OLV-M5C', '150150', 'design/wire_transfer_256.png', ''),
(19, 'keychain', 1, 'AS-TED', '25', 'design/ownerpic.png', 'heart'),
(20, 'Magic Mug', 1, 'MCK-UJG', '150', 'design/wire_transfer_256.png', ''),
(21, 'PVC Bag Tag', 6, 'FGX-W0Y', '72', 'design/537484_234955419971298_1129768462_n.jpg', 'wallet size'),
(22, 'Mug', 1, 'CMZ-TZ4', '100', 'design/', ''),
(23, 'watch', 3, 'CEC-DHJ', '600', 'design/', ''),
(24, 'watch', 3, 'WLBK-VAW', '600', 'design/', ''),
(25, 'Mug', 2, 'IPWC-STR', '200', 'design/', ''),
(27, 'Thumbler', 1, 'IPWC-STR', '90', 'design/', ''),
(29, 'Thumbler', 4, 'IPWC-STR', '360', 'design/', ''),
(30, 'Keychain', 6, 'IPWC-STR', '150', 'design/', ''),
(31, 'watch', 4, 'GSR-KPY', '800', 'design/', ''),
(32, 'Mug', 3, 'O-CMZ', '300', 'design/', ''),
(33, 'watch', 2, 'UYK-6JT', '400', 'design/', ''),
(34, 'Thumbler', 1, 'EKG-CP1', '90', 'design/', ''),
(35, 'Toy', 0, 'JASA-COD', '3000', 'design/', ''),
(36, 'Black_ipod', 0, 'LQIG-QN6', '35000', 'design/', ''),
(37, 'HP laptop', 6, 'AVS-DZ5', '5400000', 'design/demo_p15090.jpeg', 'Cool one'),
(38, 'Slim White Mouse', 6, 'VOA-0LY', '210', 'design/', ''),
(39, 'Ear_phone', 7, 'EWW-ITO', '10500', 'design/', ''),
(40, 'Plasma TV', 4, 'LOA-4AC', '200000', 'design/demo_store_p4026.jpeg', 'White color'),
(41, 'HP laptop', 2, 'ZCUG-K2L', '1800000', 'design/', ''),
(42, 'HP laptop', 3, 'ZIN-TIB', '2700000', 'design/', ''),
(43, 'Toy', 2, 'TTAE-2LK', '6000', 'design/', ''),
(45, 'Apple PC', 2, 'XPZW-FOE', '240000', 'design/', ''),
(46, 'Plasma TV', 9, 'YI-51J', '450000', 'design/', ''),
(47, 'Apple PC', 2, 'BLC-SWT', '240000', 'design/', ''),
(48, 'Toy', 2, 'GEPC-O3Z', '6000', 'design/wire_transfer_256.png', 'I prefer Green color'),
(50, 'Apple', 2, 'GEPC-O3Z', '600', 'design/', ''),
(52, 'Plasma TV', 1, 'GEPC-O3Z', '50000', 'design/', ''),
(53, 'Apple PC', 1, 'GEPC-O3Z', '120000', 'design/', ''),
(54, 'bvb', 12, 'VXS-AKM', '528', 'design/', ''),
(55, 'Plasma TV', 5, 'VXS-AKM', '250000', 'design/', ''),
(56, 'White_ipod', 23, 'VXS-AKM', '920000', 'design/', ''),
(57, 'HP laptop', 8, 'VXS-AKM', '7200000', 'design/', ''),
(58, 'White_ipod', 12, 'DN-13G', '480000', 'design/', ''),
(59, 'Plasma TV', 133, 'DN-13G', '6650000', 'design/', ''),
(60, 'Ear_phone', 7, 'DN-13G', '10500', 'design/', ''),
(61, 'Black_ipod', 0, 'KRJQ-R20', '35000', 'design/', '78'),
(62, 'Apple PC', 1, 'WUS-5L2', '120000', 'design/', '54'),
(63, 'White_ipod', 1, 'WUS-5L2', '40000', 'design/', '546'),
(64, 'Black_iphone', 1, 'WUS-5L2', '80000', 'design/', '234'),
(65, 'Mouse', 1, 'PRWJ-KNA', '1000', 'design/', 'rrrrrrrr'),
(66, 'Mouse', 1, 'PVHX-C34', '1000', 'design/', ''),
(67, 'Plasma TV', 15, 'VGZN-K2H', '750000', 'design/', ''),
(68, 'Mouse', 12, 'WEF-6DG', '12000', 'design/', ''),
(69, 'White_ipod', 14, 'WEF-6DG', '560000', 'design/', ''),
(70, 'Plasma TV', 15, 'WEF-6DG', '750000', 'design/', ''),
(71, 'Black_iphone', 165, 'WEF-6DG', '13200000', 'design/', ''),
(72, 'HP laptop', 188, 'LFWF-SPG', '169200000', 'design/', ''),
(73, 'Slim White Mouse', 9, 'LFWF-SPG', '315', 'design/', ''),
(74, 'Plasma TV', 1, 'ED-0YE', '50000', 'design/', ''),
(75, 'Mouse', 13, '', '13000', 'design/', ''),
(76, 'Black_iphone', 19, '', '1520000', 'design/', ''),
(77, 'Mouse', 133, '', '133000', 'design/', ''),
(78, 'Ear_phone', 132, '', '198000', 'design/', ''),
(79, 'Toy', 134, '', '402000', 'design/', ''),
(80, 'Plasma TV', 7, '', '350000', 'design/', ''),
(81, 'Ear_phone', 12, 'CIAZ-SVF', '18000', 'design/', ''),
(82, 'Mouse', 177, 'CIAZ-SVF', '177000', 'design/', ''),
(83, 'Toy', 15, '', '45000', 'design/', ''),
(84, 'qqqqqq', 1, '', '12', 'design/212_MASK.JPG', ''),
(85, 'White_ipod', 10, '', '400000', 'design/', ''),
(86, 'Mouse', 13, '', '13000', 'design/', ''),
(87, '', 0, '', '', 'design/', ''),
(88, '', 0, '', '', 'design/', ''),
(89, '', 0, '', '', 'design/', ''),
(90, '', 0, '', '', 'design/', ''),
(91, '', 0, '', '', 'design/', ''),
(92, '', 0, '', '', 'design/', ''),
(93, '', 0, '', '', 'design/', ''),
(94, '', 0, '', '', 'design/', ''),
(95, '', 0, '', '', 'design/', ''),
(96, '', 0, '', '', 'design/', ''),
(97, '', 0, '', '', 'design/', ''),
(98, '', 0, '', '', 'design/', ''),
(99, '', 0, '', '', 'design/', ''),
(100, '', 0, '', '', 'design/', ''),
(101, '', 0, '', '', 'design/', ''),
(102, '', 0, '', '', 'design/', ''),
(103, '', 0, '', '', 'design/', ''),
(104, '', 0, '', '', 'design/', ''),
(105, '', 0, '', '', 'design/', ''),
(106, '', 0, '', '', 'design/', ''),
(107, '', 0, '', '', 'design/', ''),
(108, '', 0, '', '', 'design/', ''),
(109, '', 0, '', '', 'design/', ''),
(110, '', 0, '', '', 'design/', ''),
(111, '', 0, '', '', 'design/', ''),
(112, '', 0, '', '', 'design/', ''),
(113, '', 0, '', '', 'design/', ''),
(114, '', 0, '', '', 'design/', ''),
(115, '', 0, '', '', 'design/', ''),
(116, '', 0, '', '', 'design/', ''),
(117, '', 0, '', '', 'design/', ''),
(118, '', 0, '', '', 'design/', ''),
(119, '', 0, '', '', 'design/', ''),
(120, '', 0, '', '', 'design/', ''),
(121, '', 0, '', '', 'design/', ''),
(122, '', 0, '', '', 'design/', ''),
(123, '', 0, '', '', 'design/', ''),
(124, '', 0, '', '', 'design/', ''),
(125, '', 0, '', '', 'design/', ''),
(126, '', 0, '', '', 'design/', ''),
(127, '', 0, '', '', 'design/', ''),
(128, '', 0, '', '', 'design/', ''),
(129, '', 0, '', '', 'design/', ''),
(130, '', 0, '', '', 'design/', ''),
(131, '', 0, '', '', 'design/', ''),
(132, '', 0, '', '', 'design/', ''),
(133, '', 0, '', '', 'design/', ''),
(134, '', 0, '', '', 'design/', ''),
(135, '', 0, '', '', 'design/', ''),
(136, '', 0, '', '', 'design/', ''),
(137, '', 0, '', '', 'design/', ''),
(138, '', 0, '', '', 'design/', ''),
(139, '', 0, '', '', 'design/', ''),
(140, '', 0, '', '', 'design/', ''),
(141, '', 0, '', '', 'design/', ''),
(142, '', 0, '', '', 'design/', ''),
(143, '', 0, '', '', 'design/', ''),
(144, '', 0, '', '', 'design/', ''),
(145, '', 0, '', '', 'design/', ''),
(146, '', 0, '', '', 'design/', ''),
(147, '', 0, '', '', 'design/', ''),
(148, '', 0, '', '', 'design/', ''),
(149, '', 0, '', '', 'design/', ''),
(150, '', 0, '', '', 'design/', ''),
(151, '', 0, '', '', 'design/', ''),
(152, '', 0, '', '', 'design/', ''),
(153, '', 0, '', '', 'design/', ''),
(154, '', 0, '', '', 'design/', ''),
(155, '', 0, '', '', 'design/', ''),
(156, '', 0, '', '', 'design/', ''),
(157, '', 0, '', '', 'design/', ''),
(158, '', 0, '', '', 'design/', ''),
(159, '', 0, '', '', 'design/', ''),
(160, '', 0, '', '', 'design/', ''),
(161, '', 0, '', '', 'design/', ''),
(162, '', 0, '', '', 'design/', ''),
(163, '', 0, '', '', 'design/', ''),
(164, '', 0, '', '', 'design/', ''),
(165, '', 0, '', '', 'design/', ''),
(166, '', 0, '', '', 'design/', ''),
(167, '', 0, '', '', 'design/', ''),
(168, '', 0, '', '', 'design/', ''),
(169, '', 0, '', '', 'design/', ''),
(170, '', 0, '', '', 'design/', ''),
(171, '', 0, '', '', 'design/', ''),
(172, '', 0, '', '', 'design/', ''),
(173, '', 0, '', '', 'design/', ''),
(174, '', 0, '', '', 'design/', ''),
(175, '', 0, '', '', 'design/', ''),
(176, '', 0, '', '', 'design/', ''),
(177, '', 0, '', '', 'design/', ''),
(178, '', 0, '', '', 'design/', ''),
(179, '', 0, '', '', 'design/', ''),
(180, '', 0, '', '', 'design/', ''),
(181, '', 0, '', '', 'design/', ''),
(182, '', 0, '', '', 'design/', ''),
(183, '', 0, '', '', 'design/', ''),
(184, '', 0, '', '', 'design/', ''),
(185, '', 0, '', '', 'design/', ''),
(186, '', 0, '', '', 'design/', ''),
(187, '', 0, '', '', 'design/', ''),
(188, '', 0, '', '', 'design/', ''),
(189, '', 0, '', '', 'design/', ''),
(190, '', 0, '', '', 'design/', ''),
(191, '', 0, '', '', 'design/', ''),
(192, '', 0, '', '', 'design/', ''),
(193, '', 0, '', '', 'design/', ''),
(194, '', 0, '', '', 'design/', ''),
(195, '', 0, '', '', 'design/', ''),
(196, '', 0, '', '', 'design/', ''),
(197, '', 0, '', '', 'design/', ''),
(198, '', 0, '', '', 'design/', ''),
(199, '', 0, '', '', 'design/', ''),
(200, '', 0, '', '', 'design/', ''),
(201, '', 0, '', '', 'design/', ''),
(202, '', 0, '', '', 'design/', ''),
(203, '', 0, '', '', 'design/', ''),
(204, '', 0, '', '', 'design/', ''),
(205, '', 0, '', '', 'design/', ''),
(206, '', 0, '', '', 'design/', ''),
(207, '', 0, '', '', 'design/', ''),
(208, '', 0, '', '', 'design/', ''),
(209, '', 0, '', '', 'design/', ''),
(210, '', 0, '', '', 'design/', ''),
(211, '', 0, '', '', 'design/', ''),
(212, '', 0, '', '', 'design/', ''),
(213, '', 0, '', '', 'design/', ''),
(214, '', 0, '', '', 'design/', ''),
(215, '', 0, '', '', 'design/', ''),
(216, '', 0, '', '', 'design/', ''),
(217, '', 0, '', '', 'design/', ''),
(218, '', 0, '', '', 'design/', ''),
(219, '', 0, '', '', 'design/', ''),
(220, '', 0, '', '', 'design/', ''),
(221, '', 0, '', '', 'design/', ''),
(222, '', 0, '', '', 'design/', ''),
(223, '', 0, '', '', 'design/', ''),
(224, '', 0, '', '', 'design/', ''),
(225, '', 0, '', '', 'design/', ''),
(226, '', 0, '', '', 'design/', ''),
(227, '', 0, '', '', 'design/', ''),
(228, '', 0, '', '', 'design/', ''),
(229, '', 0, '', '', 'design/', ''),
(230, '', 0, '', '', 'design/', ''),
(231, '', 0, '', '', 'design/', ''),
(232, '', 0, '', '', 'design/', ''),
(233, '', 0, '', '', 'design/', ''),
(234, '', 0, '', '', 'design/', ''),
(235, '', 0, '', '', 'design/', ''),
(236, '', 0, '', '', 'design/', ''),
(237, '', 0, '', '', 'design/', ''),
(238, '', 0, '', '', 'design/', ''),
(239, '', 0, '', '', 'design/', ''),
(240, '', 0, '', '', 'design/', ''),
(241, '', 0, '', '', 'design/', ''),
(242, '', 0, '', '', 'design/', ''),
(243, '', 0, '', '', 'design/', ''),
(244, '', 0, '', '', 'design/', ''),
(245, '', 0, '', '', 'design/', ''),
(246, '', 0, '', '', 'design/', ''),
(247, '', 0, '', '', 'design/', ''),
(248, '', 0, '', '', 'design/', ''),
(249, '', 0, '', '', 'design/', ''),
(250, '', 0, '', '', 'design/', ''),
(251, '', 0, '', '', 'design/', ''),
(252, '', 0, '', '', 'design/', ''),
(253, '', 0, '', '', 'design/', ''),
(254, '', 0, '', '', 'design/', ''),
(255, '', 0, '', '', 'design/', ''),
(256, '', 0, '', '', 'design/', ''),
(257, '', 0, '', '', 'design/', ''),
(258, '', 0, '', '', 'design/', ''),
(259, '', 0, '', '', 'design/', ''),
(260, '', 0, '', '', 'design/', ''),
(261, '', 0, '', '', 'design/', ''),
(262, '', 0, '', '', 'design/', ''),
(263, '', 0, '', '', 'design/', ''),
(264, '', 0, '', '', 'design/', ''),
(265, '', 0, '', '', 'design/', ''),
(266, '', 0, '', '', 'design/', ''),
(267, '', 0, '', '', 'design/', ''),
(268, '', 0, '', '', 'design/', ''),
(269, '', 0, '', '', 'design/', ''),
(270, '', 0, '', '', 'design/', ''),
(271, '', 0, '', '', 'design/', ''),
(272, '', 0, '', '', 'design/', ''),
(273, '', 0, '', '', 'design/', ''),
(274, '', 0, '', '', 'design/', ''),
(275, '', 0, '', '', 'design/', ''),
(276, '', 0, '', '', 'design/', ''),
(277, '', 0, '', '', 'design/', ''),
(278, '', 0, '', '', 'design/', ''),
(279, '', 0, '', '', 'design/', ''),
(280, '', 0, '', '', 'design/', ''),
(281, '', 0, '', '', 'design/', ''),
(282, '', 0, '', '', 'design/', ''),
(283, '', 0, '', '', 'design/', ''),
(284, '', 0, '', '', 'design/', ''),
(285, '', 0, '', '', 'design/', ''),
(286, '', 0, '', '', 'design/', ''),
(287, '', 0, '', '', 'design/', ''),
(288, '', 0, '', '', 'design/', ''),
(289, '', 0, '', '', 'design/', ''),
(290, '', 0, '', '', 'design/', ''),
(291, '', 0, '', '', 'design/', ''),
(292, '', 0, '', '', 'design/', ''),
(293, '', 0, '', '', 'design/', ''),
(294, '', 0, '', '', 'design/', ''),
(295, '', 0, '', '', 'design/', ''),
(296, '', 0, '', '', 'design/', ''),
(297, '', 0, '', '', 'design/', ''),
(298, '', 0, '', '', 'design/', ''),
(299, '', 0, '', '', 'design/', ''),
(300, '', 0, '', '', 'design/', ''),
(301, '', 0, '', '', 'design/', ''),
(302, '', 0, '', '', 'design/', ''),
(303, '', 0, '', '', 'design/', ''),
(304, '', 0, '', '', 'design/', ''),
(305, '', 0, '', '', 'design/', ''),
(306, '', 0, '', '', 'design/', ''),
(307, '', 0, '', '', 'design/', ''),
(308, '', 0, '', '', 'design/', ''),
(309, '', 0, '', '', 'design/', ''),
(310, '', 0, '', '', 'design/', ''),
(311, '', 0, '', '', 'design/', ''),
(312, '', 0, '', '', 'design/', ''),
(313, '', 0, '', '', 'design/', ''),
(314, '', 0, '', '', 'design/', ''),
(315, '', 0, '', '', 'design/', ''),
(316, '', 0, '', '', 'design/', ''),
(317, '', 0, '', '', 'design/', ''),
(318, '', 0, '', '', 'design/', ''),
(319, '', 0, '', '', 'design/', ''),
(320, '', 0, '', '', 'design/', ''),
(321, '', 0, '', '', 'design/', ''),
(322, '', 0, '', '', 'design/', ''),
(323, '', 0, '', '', 'design/', ''),
(324, '', 0, '', '', 'design/', ''),
(325, '', 0, '', '', 'design/', ''),
(326, '', 0, '', '', 'design/', ''),
(327, '', 0, '', '', 'design/', ''),
(328, '', 0, '', '', 'design/', ''),
(329, '', 0, '', '', 'design/', ''),
(330, '', 0, '', '', 'design/', ''),
(331, '', 0, '', '', 'design/', ''),
(332, '', 0, '', '', 'design/', ''),
(333, '', 0, '', '', 'design/', ''),
(334, '', 0, '', '', 'design/', ''),
(335, '', 0, '', '', 'design/', ''),
(336, '', 0, '', '', 'design/', ''),
(337, '', 0, '', '', 'design/', ''),
(338, '', 0, '', '', 'design/', ''),
(339, '', 0, '', '', 'design/', ''),
(340, '', 0, '', '', 'design/', ''),
(341, '', 0, '', '', 'design/', ''),
(342, '', 0, '', '', 'design/', ''),
(343, '', 0, '', '', 'design/', ''),
(344, '', 0, '', '', 'design/', ''),
(345, '', 0, '', '', 'design/', ''),
(346, '', 0, '', '', 'design/', ''),
(347, '', 0, '', '', 'design/', ''),
(348, '', 0, '', '', 'design/', ''),
(349, '', 0, '', '', 'design/', ''),
(350, '', 0, '', '', 'design/', ''),
(351, '', 0, '', '', 'design/', ''),
(352, '', 0, '', '', 'design/', ''),
(353, '', 0, '', '', 'design/', ''),
(354, '', 0, '', '', 'design/', ''),
(355, '', 0, '', '', 'design/', ''),
(356, '', 0, '', '', 'design/', ''),
(357, '', 0, '', '', 'design/', ''),
(358, '', 0, '', '', 'design/', ''),
(359, '', 0, '', '', 'design/', ''),
(360, '', 0, '', '', 'design/', ''),
(361, '', 0, '', '', 'design/', ''),
(362, '', 0, '', '', 'design/', ''),
(363, '', 0, '', '', 'design/', ''),
(364, '', 0, '', '', 'design/', ''),
(365, '', 0, '', '', 'design/', ''),
(366, '', 0, '', '', 'design/', ''),
(367, '', 0, '', '', 'design/', ''),
(368, '', 0, '', '', 'design/', ''),
(369, '', 0, '', '', 'design/', ''),
(370, '', 0, '', '', 'design/', ''),
(371, '', 0, '', '', 'design/', ''),
(372, '', 0, '', '', 'design/', ''),
(373, '', 0, '', '', 'design/', ''),
(374, '', 0, '', '', 'design/', ''),
(375, '', 0, '', '', 'design/', ''),
(376, '', 0, '', '', 'design/', ''),
(377, '', 0, '', '', 'design/', ''),
(378, '', 0, '', '', 'design/', ''),
(379, '', 0, '', '', 'design/', ''),
(380, '', 0, '', '', 'design/', ''),
(381, '', 0, '', '', 'design/', ''),
(382, '', 0, '', '', 'design/', ''),
(383, '', 0, '', '', 'design/', ''),
(384, '', 0, '', '', 'design/', ''),
(385, '', 0, '', '', 'design/', ''),
(386, '', 0, '', '', 'design/', ''),
(387, '', 0, '', '', 'design/', ''),
(388, '', 0, '', '', 'design/', ''),
(389, '', 0, '', '', 'design/', ''),
(390, '', 0, '', '', 'design/', ''),
(391, '', 0, '', '', 'design/', ''),
(392, '', 0, '', '', 'design/', ''),
(393, '', 0, '', '', 'design/', ''),
(394, '', 0, '', '', 'design/', ''),
(395, '', 0, '', '', 'design/', ''),
(396, '', 0, '', '', 'design/', ''),
(397, '', 0, '', '', 'design/', ''),
(398, '', 0, '', '', 'design/', ''),
(399, '', 0, '', '', 'design/', ''),
(400, '', 0, '', '', 'design/', ''),
(401, '', 0, '', '', 'design/', ''),
(402, '', 0, '', '', 'design/', ''),
(403, '', 0, '', '', 'design/', ''),
(404, '', 0, '', '', 'design/', ''),
(405, '', 0, '', '', 'design/', ''),
(406, '', 0, '', '', 'design/', ''),
(407, '', 0, '', '', 'design/', ''),
(408, '', 0, '', '', 'design/', ''),
(409, '', 0, '', '', 'design/', ''),
(410, '', 0, '', '', 'design/', ''),
(411, '', 0, '', '', 'design/', ''),
(412, '', 0, '', '', 'design/', ''),
(413, '', 0, '', '', 'design/', ''),
(414, '', 0, '', '', 'design/', ''),
(415, '', 0, '', '', 'design/', ''),
(416, '', 0, '', '', 'design/', ''),
(417, '', 0, '', '', 'design/', ''),
(418, '', 0, '', '', 'design/', ''),
(419, '', 0, '', '', 'design/', ''),
(420, '', 0, '', '', 'design/', ''),
(421, '', 0, '', '', 'design/', ''),
(422, '', 0, '', '', 'design/', ''),
(423, '', 0, '', '', 'design/', ''),
(424, '', 0, '', '', 'design/', ''),
(425, '', 0, '', '', 'design/', ''),
(426, '', 0, '', '', 'design/', ''),
(427, '', 0, '', '', 'design/', ''),
(428, '', 0, '', '', 'design/', ''),
(429, '', 0, '', '', 'design/', ''),
(430, '', 0, '', '', 'design/', ''),
(431, '', 0, '', '', 'design/', ''),
(432, '', 0, '', '', 'design/', ''),
(433, '', 0, '', '', 'design/', ''),
(434, '', 0, '', '', 'design/', ''),
(435, '', 0, '', '', 'design/', ''),
(436, 'Mouse', 166, '', '166000', 'design/', ''),
(437, 'Plasma TV', 99, '', '4950000', 'design/', ''),
(438, 'Mouse', 99, '', '99000', 'design/', ''),
(439, 'White_ipod', 15, 'YZKB-L6Z', '600000', 'design/', ''),
(440, 'HP laptop', 145, 'YZKB-L6Z', '130500000', 'design/', ''),
(441, 'Mouse', 144, 'YZKB-L6Z', '144000', 'design/', ''),
(442, 'Ear_phone', 1, 'W-JEM', '1500', 'design/', ''),
(443, 'Toy', 133, 'MFOF-TP5', '39000', 'design/', ''),
(444, 'Plasma TV', 166, 'XWZR-FWF', '8300000', 'design/', ''),
(445, 'Plasma TV', 156, 'XWZR-FWF', '7800000', 'design/', ''),
(446, 'Black_ipod', 123, 'XWZR-FWF', '4305000', 'design/', ''),
(447, 'White_ipod', 144, 'OLN-1DA', '5760000', 'design/', ''),
(448, 'qqqqqq', 134, 'UPL-6A5', '1608', 'design/', ''),
(449, 'ccccc', 10, 'MLR-NLX', '340', 'design/', ''),
(450, 'Apple', 19, 'MLR-NLX', '5700', 'design/', ''),
(451, 'White_ipod', 1, 'MLR-NLX', '40000', 'design/', ''),
(452, 'welcome', 11, 'PQP-3VL', '495', 'design/1747.gif', 'tata is my first website'),
(453, 'lllll', 15, 'KRD-EMR', '34995', 'design/', ''),
(454, 'White_ipod', 19, 'PI-KU4', '760000', 'design/', ''),
(456, 'ppppppppppp', 1, 'QDVQ-JRG', '231', 'design/', ''),
(457, 'ppppppppppp', 1, 'QPX-ZGA', '231', 'design/97fea302.jpg', 'welcome to my project'),
(458, 'White_ipod', 144, 'QPX-ZGA', '5760000', 'design/', ''),
(459, 'HP laptop', 33, 'QPX-ZGA', '29700000', 'design/', ''),
(460, 'Apple', 13, 'QPX-ZGA', '3900', 'design/', ''),
(461, 'Black_iphone', 11, 'QPX-ZGA', '880000', 'design/', ''),
(462, 'Mouse', 50, 'BDFS-NVZ', '50000', 'design/', ''),
(463, 'lllll', 1333, 'BDFS-NVZ', '3109889', 'design/', ''),
(464, 'White_ipod', 10, 'NGYZ-UQI', '400000', 'design/', ''),
(465, 'lllll', 144, 'NGYZ-UQI', '335952', 'design/', ''),
(467, 'White_ipod', 1, 'NGYZ-UQI', '40000', 'design/', ''),
(468, 'Black_ipod', 1, 'NGYZ-UQI', '35000', 'design/', ''),
(469, 'lllll', 145, 'NGYZ-UQI', '32662', 'design/', ''),
(470, 'Ear_phone', 1, 'NGYZ-UQI', '1500', 'design/', ''),
(471, 'Mouse', 1, 'NGYZ-UQI', '1000', 'design/', ''),
(472, 'Black_ipod', 1, 'NGYZ-UQI', '35000', 'design/', 'mmmmmmmmm'),
(475, 'White_ipod', 199, 'RLYZ-VIQ', '7960000', 'design/', ''),
(476, 'Toy', 1456, 'RLYZ-VIQ', '4368000', 'design/', ''),
(477, 'Mouse', 1333, 'RLYZ-VIQ', '1333000', 'design/', ''),
(478, 'HP laptop', 17777, 'RLYZ-VIQ', '15999300000', 'design/', ''),
(479, 'Mouse', 1, 'RLYZ-VIQ', '1000', 'design/', ''),
(480, 'Black_ipod', 1, 'RLYZ-VIQ', '35000', 'design/', ''),
(481, 'Mouse', 1, 'RLYZ-VIQ', '1000', 'design/', ''),
(482, 'Mouse', 1, 'RLYZ-VIQ', '1000', 'design/', ''),
(483, 'Plasma TV', 1, 'RLYZ-VIQ', '50000', 'design/', ''),
(484, 'Black_ipod', 1, 'RLYZ-VIQ', '35000', '', ''),
(485, 'HP laptop', 155, 'RLYZ-VIQ', '139500000', '', ''),
(486, 'lllll', 9, 'RLYZ-VIQ', '20997', '', ''),
(487, 'qqqqqq', 166, 'EP-WIT', '1992', '', ''),
(488, 'paper', 30, 'SKH-6JG', '1500', '', ''),
(489, 'Plasma TV', 20, 'SKH-6JG', '1000000', '', ''),
(492, 'HP laptop', 1, 'LZJS-JUV', '900000', '', ''),
(493, 'HP laptop', 1, 'DYOO-X53', '900000', '', ''),
(494, 'Apple', 1, 'BKI-IV0', '300', '', ''),
(495, 'Apple', 1, 'AG-P03', '300', '', ''),
(496, 'Black_iphone', 1, 'SJD-C20', '80000', '', ''),
(497, 'Black_ipod', 1, 'SJD-C20', '35000', '', ''),
(500, 'Black_ipod', 1, 'FYN-ENB', '35000', '', ''),
(501, 'White_ipod', 1, 'AW-LLF', '40000', '', ''),
(502, 'Armata steel', 1, 'TTW-B35', '50000', '', ''),
(503, 'ATM Calculator', 1, 'DUCL-STO', '1500', '', ''),
(504, 'Key typing mashion', 15, 'RF-MBJ', '600000', '', ''),
(505, 'Storing mashion', 155, 'RF-MBJ', '465000', '', ''),
(506, 'Key typing mashion', 1, 'OD-4RS', '40000', '', ''),
(507, 'calculator', 10, 'NX-TB5', '1500', '', ''),
(508, 'ATM Calculator', 14, 'NX-TB5', '21000', '', ''),
(509, 'Armata steel', 24, 'NX-TB5', '1200000', '', ''),
(512, 'oo', 1, 'SXQ-RMF', '9', '', ''),
(513, 'n', 14, 'SRM-SKD', '70', '', ''),
(514, 'zz', 122, 'SRM-SKD', '244', '', ''),
(515, 'zz', 1000, 'ILB-H05', '2000', '', ''),
(516, 'gg', 90, 'ILB-H05', '540', '', ''),
(517, 'n', 178, 'ILB-H05', '890', '', ''),
(518, 'n', 123, 'UYM-IFL', '615', '', ''),
(519, 'zz', 908, 'UYM-IFL', '1816', '', ''),
(520, 'gg', 11, 'IYG-J1L', '66', '', ''),
(521, 'tt', 14567, 'IYG-J1L', '87402', '', ''),
(522, 'zz', 1890, 'IYG-J1L', '3780', '', ''),
(523, 'tt', 88, 'WZ-DCT', '528', '', ''),
(524, 'tt', 22, 'WZ-DCT', '132', '', ''),
(525, 'n', 1, 'MXK-BKV', '5', '', ''),
(526, 'tt', 17, 'MXK-BKV', '102', '', ''),
(527, 'zz', 12, 'TRZ-BSM', '24', '', ''),
(528, 'tt', 66, 'TRZ-BSM', '396', '', ''),
(529, 'n', 50, 'TRZ-BSM', '250', '', ''),
(530, 'gg', 5, 'IAIV-BO1', '30', '', ''),
(531, 'tt', 66, 'IAIV-BO1', '396', '', ''),
(532, 'gg', 1, 'OZR-CFC', '6', '', ''),
(533, 'tt', 19, 'OZR-CFC', '114', '', ''),
(534, 'gg', 166, 'UVHN-VYV', '996', '', ''),
(535, 'tt', 88, 'UVHN-VYV', '528', '', ''),
(536, 'n', 1, 'JEW-5HD', '5', '', ''),
(537, 'zz', 13, 'AMXO-BVY', '26', '', ''),
(538, 'kk', 22, 'AMXO-BVY', '2178', '', ''),
(539, 'shoose', 176, 'TNX-FHU', '61600', '', ''),
(542, 'Black_iphone', 456, 'SGR-VUG', '36480000', '', ''),
(543, 'White_ipod', 23, 'SGR-VUG', '920000', '', ''),
(544, 'Slim White Mouse', 67, 'SGR-VUG', '2345', '', ''),
(545, 'Apple', 155, 'BSL-1BT', '46500', '', ''),
(546, 'White_ipod', 1, 'WSX-5JH', '40000', '', ''),
(547, 'oo', 1, 'IX-EIZ', '50', '', ''),
(548, 'oo', 1, 'ZLST-S0E', '50', '', ''),
(552, 'oo', 987, 'ZKN-6UP', '49350', '', ''),
(553, 'oo', 89, 'SSEN-Y2V', '4450', '', ''),
(554, 'oo', 18, 'OO-EH5', '900', '', ''),
(557, 'oo', 34, 'IZ-TN1', '1700', '', ''),
(558, 'hhhhh', 1897, 'UTM-NOL', '166936', '', ''),
(559, 'hhhhh', 1, 'BPO-I05', '88', '', ''),
(560, 'oo', 13, 'DW-3JI', '650', '', ''),
(561, 'oo', 56, 'DW-3JI', '2800', '', ''),
(562, 'oo', 34, 'TZDY-0CU', '1700', '', ''),
(563, 'oo', 1, 'BYCS-V5S', '50', '', ''),
(564, 'oo', 167, 'GWS-U04', '14863', '', ''),
(565, '88888', 190, 'DZFS-5UQ', '1710', '', ''),
(566, 'hhhhh', 99, 'KB-J4W', '8712', '', ''),
(567, 'hhhhh', 111, 'IIJA-NGI', '9768', '', ''),
(568, 'hhhhh', 10, 'ZC-H0G', '880', '', ''),
(569, '88888', 1, 'ERF-MJD', '9', '', ''),
(570, '88888', 8, 'ERU-XGR', '72', '', ''),
(571, '88888', 188, 'BCO-5XY', '1692', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `paymentm`
--

CREATE TABLE IF NOT EXISTS `paymentm` (
  `id` int(11) NOT NULL,
  `dmethodid` varchar(30) NOT NULL,
  `methodname` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentm`
--

INSERT INTO `paymentm` (`id`, `dmethodid`, `methodname`) VALUES
(1, '1', 'Cash On Delivery'),
(2, '2', 'Dashion bank '),
(3, '2', 'Ethiopian Commercial bank '),
(4, '2', 'China construction bank'),
(5, '3', 'Dashion bank '),
(6, '3', 'Ethiopian Commercial bank '),
(7, '3', 'China construction bank');

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE IF NOT EXISTS `process` (
  `process_id` int(11) NOT NULL,
  `user` varchar(222) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `payable` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `confirmation` varchar(20) NOT NULL,
  `delivery` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `delivery_type` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`process_id`, `user`, `firstname`, `lastname`, `city`, `address`, `country`, `email`, `contact`, `payable`, `status`, `confirmation`, `delivery`, `date`, `time`, `payment`, `delivery_type`) VALUES
(104, '3', 'aaaaaaaa', 'dddddddd', 'xxxxxxx', 'kkkkkkkkkkkkk', '', 'antnh55@yahoo.com', 'bbbbbbbbbb', 4450, 'Pending', 'SSEN-Y2V', 'ssssssss', '2016-06-05', '', 'Dashion bank ', ' Inside Ethiopia'),
(114, '3', 'Belayneh', 'haimanot', 'adama', 'bole', '', 'antnh55@yahoo.com', '0923456789', 50, 'Delivered', 'BYCS-V5S', 'addis ababa', '2016-06-05', '', 'Dashion bank ', ' Inside Ethiopia'),
(101, '2', 'mickel', 'haimanot', 'addis ababa', 'adama', '', 'antnh55@yahoo.com', '0923456789', 7238, 'Pending', 'ZKN-6UP', 'gggggg', '2016-06-07', '', 'Ethiopian Commercial bank ', ' Outside Ethiopia'),
(99, '2', 'aaaaaaaa', 'cccccccccc', 'adama', 'bole', '', 'antnh55@yahoo.com', 'wwwwwww', 50, 'Pending', 'ZLST-S0E', 'ssssssss', '2016-06-05', '', 'Dashion bank ', ' Inside Ethiopia'),
(98, '1', 'aaaaaaaa', 'cccccccccc', 'adama', 'bole', '', 'antnh55@yahoo.com', 'wwwwwww', 50, 'Delivered', 'ZLST-S0E', 'ssssssss', '2016-06-05', '', 'Dashion bank ', ' Inside Ethiopia'),
(116, '1', 'mickel', 'haimanot', 'addis ababa', 'adama', '', 'antnh55@yahoo.com', '0923456789', 1710, 'Pending', 'DZFS-5UQ', 'gggggg', '2016-06-05', '', 'Dashion bank ', ' Inside Ethiopia'),
(119, '3', 'ethiopia', 'ethiopia', 'ethiopia', 'ethiopia', '', 'ethiopia', 'ethiopia', 72, 'Pending', 'ERU-XGR', 'ethiopia', '2016-06-10', '', 'Dashion bank ', ' Inside Ethiopia'),
(120, '3', 'tt', 'gutema', 'addis', 'aaaa', '', 'aa', '0923251075', 2192, 'Pending', 'BCO-5XY', 'addis', '2016-06-12', '', 'China construction bank', ' Outside Ethiopia');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(6) NOT NULL,
  `user` int(11) NOT NULL,
  `img` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `user`, `img`, `name`, `description`, `price`) VALUES
(48, 1, 'product2.jpg', 'ww', 'ww', 77),
(43, 1, 'product3.jpg', 'oo', 'it is the best', 50),
(47, 2, 'product6.jpg', 'hhhhh', 'bbbb', 88),
(46, 2, 'images (2).jpg', 'hhhhh', 'mmmmm', 987),
(51, 1, 'product4.jpg', '88888', '89999', 9);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `supplier_id` int(100) NOT NULL,
  `message_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company` varchar(233) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `profile_pic` varchar(233) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `message_id`, `product_id`, `orders_id`, `name`, `company`, `address`, `contact`, `country`, `city`, `date_added`, `location`, `profile_pic`) VALUES
(1, 0, 0, 0, 'bbbbbb', 'ssssss', 'vvvvvv', '23454', 'hhhhhhh', 'nnmm', 'ooioi', 'kkkkkkk', 'upload/_____(01).gif'),
(2, 0, 0, 0, '22222', '2222', 'admin', 'admin', '222222', '2222222', '2222222', '22222', 'upload/product1.jpg'),
(3, 0, 0, 0, 'betelihem ', 'mmm', 'root', '99999', 'Ethiopia', '22', 'dd', 'dd', 'upload/product3.jpg'),
(4, 0, 0, 0, 'betelihem ', 'mmm', 'Asella', '77', 'ooo', 'addis ababa', '65656', 'west shewa', 'upload/product4.jpg'),
(5, 0, 0, 0, 'betelihem ', 'mmm', 'Asella', '09234', 'ooo', 'addis ababa', '65656', 'west shewa', 'upload/product5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `distrbutor_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `user` varchar(233) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `supplier_id`, `message_id`, `product_id`, `distrbutor_id`, `orders_id`, `firstname`, `lastname`, `user`, `username`, `password`, `contact`, `date_added`, `profile_pic`) VALUES
(52, 0, 0, 0, 0, 0, 'taye', 'taye', '3', 'diss', 'diss', '0924876179', '', 'upload/download (1).jpg'),
(53, 0, 0, 0, 0, 0, 'aaaaaaa', 'addis bbb', '1', 'admin', 'admin', '0924876179', '', 'upload/happy-black-businessman-17490523.jpg'),
(54, 0, 0, 0, 0, 0, 'yechalem', 'addis', '2', 'sup', 'sup', '0923457689', '', 'upload/475236252.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distrbutors`
--
ALTER TABLE `distrbutors`
  ADD PRIMARY KEY (`distrbutor_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentm`
--
ALTER TABLE `paymentm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`process_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `img` (`img`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`), ADD KEY `admin_id` (`id`), ADD KEY `supplier_id` (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `distrbutors`
--
ALTER TABLE `distrbutors`
  MODIFY `distrbutor_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=572;
--
-- AUTO_INCREMENT for table `paymentm`
--
ALTER TABLE `paymentm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `process_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
