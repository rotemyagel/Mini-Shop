-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 05, 2020 at 06:21 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `email`, `password`) VALUES
(7, 'iintoo', 'a@b.c', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `price` int(255) NOT NULL,
  `sale_price` varchar(255) DEFAULT NULL,
  `sale` tinyint(1) DEFAULT NULL,
  `content` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `author` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `price`, `sale_price`, `sale`, `content`, `image`, `author`, `date`) VALUES
(22, 'Suede', 100, '50', 1, 'Stiletto courts special occasion glossy embellished upper peep toe high heel twiste pretty lace detailing sultry finish.\r\n\r\n', '/uploads/5fcac6de7c6338.76412116.jpg', 7, '2020-12-04 23:31:42'),
(24, 'Staple', 150, '', 0, 'Bow detail metallic eyelets leather lining luxurious finish classic courts formal slingback square toe contrasting cap.\r\n\r\n', '/uploads/5fcac98f444e19.56645644.jpg', 7, '2020-12-04 23:43:11'),
(25, 'Workwear', 300, '150', 1, 'Stiletto courts special occasion glossy embellished upper peep toe high heel twiste pretty lace detailing sultry finish.\r\n\r\n', '/uploads/5fcaca45766516.73821507.jpg', 7, '2020-12-04 23:46:13'),
(26, 'Stiletto', 300, '200', 1, 'Flats elegant pointed toe design cut-out sides luxe leather lining versatile shoe must-have new season glamorous.\r\n\r\n', '/uploads/5fcbb3d2481044.35288825.jpg', 7, '2020-12-05 16:22:42'),
(27, 'Foam', 120, '80', 1, 'Foam padding in the insoles leather finest quality staple flat slip-on design pointed toe off-duty shoe.\r\n\r\n', '/uploads/5fcbb9735f9b91.42853926.jpg', 7, '2020-12-05 16:46:43'),
(28, 'Effortless', 220, '', 0, 'Stiletto courts special occasion glossy embellished upper peep toe high heel twiste pretty lace detailing sultry finish.\r\n\r\n', '/uploads/5fcbb9bc9c3122.10149910.jpg', 7, '2020-12-05 16:47:56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
