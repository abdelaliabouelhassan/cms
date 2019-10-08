-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 08, 2019 at 03:01 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `annual_profits`
--

DROP TABLE IF EXISTS `annual_profits`;
CREATE TABLE IF NOT EXISTS `annual_profits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profits` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `annual_profits_g`
--

DROP TABLE IF EXISTS `annual_profits_g`;
CREATE TABLE IF NOT EXISTS `annual_profits_g` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profits` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id_cart` int(11) NOT NULL,
  `added_by` varchar(55) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `day_g`
--

DROP TABLE IF EXISTS `day_g`;
CREATE TABLE IF NOT EXISTS `day_g` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profit` float NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day_g`
--

INSERT INTO `day_g` (`id`, `profit`, `time`) VALUES
(1, 41100, '2019-10-07 15:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `day_net`
--

DROP TABLE IF EXISTS `day_net`;
CREATE TABLE IF NOT EXISTS `day_net` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Profit` float NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day_net`
--

INSERT INTO `day_net` (`id`, `Profit`, `time`) VALUES
(3, 4200, '2019-10-07 15:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_profits`
--

DROP TABLE IF EXISTS `monthly_profits`;
CREATE TABLE IF NOT EXISTS `monthly_profits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profits` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monthly_profits_g`
--

DROP TABLE IF EXISTS `monthly_profits_g`;
CREATE TABLE IF NOT EXISTS `monthly_profits_g` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profits` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `month_g`
--

DROP TABLE IF EXISTS `month_g`;
CREATE TABLE IF NOT EXISTS `month_g` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profit` float NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month_g`
--

INSERT INTO `month_g` (`id`, `profit`, `time`) VALUES
(1, 0, '2019-10-07 15:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `month_net`
--

DROP TABLE IF EXISTS `month_net`;
CREATE TABLE IF NOT EXISTS `month_net` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Profit` float NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month_net`
--

INSERT INTO `month_net` (`id`, `Profit`, `time`) VALUES
(1, 0, '2019-10-07 15:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

DROP TABLE IF EXISTS `notif`;
CREATE TABLE IF NOT EXISTS `notif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_p` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`id`, `title`, `date`, `id_p`) VALUES
(16, ' This product is no longer available in Stock', '2019-10-08 13:32:23', 86),
(17, ' This product is no longer available in Stock', '2019-10-08 14:07:27', 85);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `net_profit` float NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_size` varchar(11) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `product_count` int(11) NOT NULL,
  `product_cat_id` int(11) NOT NULL,
  `product_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `net_profit`, `product_code`, `product_image`, `product_description`, `product_color`, `product_size`, `product_type`, `product_count`, `product_cat_id`, `product_date`, `date_update`) VALUES
(68, 'abdelali', 5300, 55, '#p1818561230', 'uploads/black cover2.png', 'There are several factors as to why the product descriptions didnÃ¢â‚¬â„¢t convert well. ItÃ¢â‚¬â„¢s possible they werenÃ¢â‚¬â„¢t written correctly for the audience, they were placed in a less visible area, or were written in the wrong format. However, when it comes', '#000000', 'No', 'No', 20, 29, '2019-09-25 20:06:26', '2019-10-06 13:22:35'),
(69, 'singed', 600, 55, '#p1412288782', 'uploads/bblack cover21446230129.png', 'There are several factors as to why the product descriptions didnÃ¢â‚¬â„¢t convert well. ItÃ¢â‚¬â„¢s possible they werenÃ¢â‚¬â„¢t written correctly for the audience, they were placed in a less visible area, or were written in the wrong format. However, when it comes', '#000000', 'No', 'No', 5, 29, '2019-09-25 20:06:33', '2019-10-06 12:24:39'),
(70, 'jhin', 1000, 55, '#p1400835298', 'uploads/bblack cover2491824071.png', 'There are several factors as to why the product descriptions didnÃ¢â‚¬â„¢t convert well. ItÃ¢â‚¬â„¢s possible they werenÃ¢â‚¬â„¢t written correctly for the audience, they were placed in a less visible area, or were written in the wrong format. However, when it comes', '#000000', 'No', 'No', 2, 29, '2019-09-25 20:06:35', '2019-10-08 13:17:06'),
(71, 'warwick', 10, 55, '#p182532320', 'uploads/bblack cover21728989794.png', 'There are several factors as to why the product descriptions didnÃ¢â‚¬â„¢t convert well. ItÃ¢â‚¬â„¢s possible they werenÃ¢â‚¬â„¢t written correctly for the audience, they were placed in a less visible area, or were written in the wrong format. However, when it comes', '#000000', 'No', 'No', 14, 29, '2019-09-25 20:06:37', '2019-10-06 14:00:37'),
(72, 'yasou', 95.5, 55, '#p1243264966', 'uploads/bblack cover21848681006.png', 'There are several factors as to why the product descriptions didnÃ¢â‚¬â„¢t convert well. ItÃ¢â‚¬â„¢s possible they werenÃ¢â‚¬â„¢t written correctly for the audience, they were placed in a less visible area, or were written in the wrong format. However, when it comes', '#000000', 'No', 'No', 14, 29, '2019-09-25 20:06:39', '2019-10-06 13:23:29'),
(73, 'janna', 17000, 55, '#p1446507381', 'uploads/bblack cover21666379837.png', 'There are several factors as to why the product descriptions didnÃ¢â‚¬â„¢t convert well. ItÃ¢â‚¬â„¢s possible they werenÃ¢â‚¬â„¢t written correctly for the audience, they were placed in a less visible area, or were written in the wrong format. However, when it comes', '#000000', 'No', 'No', 4, 29, '2019-09-25 20:06:41', '2019-10-06 13:24:32'),
(74, 'thresh', 98500, 55, '#p1435364419', 'uploads/bblack cover2711629996.png', 'There are several factors as to why the product descriptions didnÃ¢â‚¬â„¢t convert well. ItÃ¢â‚¬â„¢s possible they werenÃ¢â‚¬â„¢t written correctly for the audience, they were placed in a less visible area, or were written in the wrong format. However, when it comes', '#000000', 'No', 'No', 15, 29, '2019-09-25 20:06:43', '2019-10-06 12:24:46'),
(75, 'pc accer', 4000, 55, '#p1476961150', 'uploads/bblack cover2435100598.png', 'There are several factors as to why the product descriptions didnÃ¢â‚¬â„¢t convert well. ItÃ¢â‚¬â„¢s possible they werenÃ¢â‚¬â„¢t written correctly for the audience, they were placed in a less visible area, or were written in the wrong format. However, when it comes', '#000000', 'No', 'No', 15, 29, '2019-09-25 20:06:46', '2019-10-06 12:24:47'),
(85, 'khobza', 5300, 55, '#p142594542', 'uploads/bblack cover21816532679.png', 'There are several factors as to why the product descriptions didnÃ¢â‚¬â„¢t convert well. ItÃ¢â‚¬â„¢s possible they werenÃ¢â‚¬â„¢t written correctly for the audience, they were placed in a less visible area, or were written in the wrong format. However, when it comes', '#000000', 'No', 'No', 0, 29, '2019-10-07 20:43:31', '2019-10-08 14:07:27'),
(86, 'khobza', 5300, 55, '#p796733033', 'uploads/bblack cover2640553825.png', 'There are several factors as to why the product descriptions didnÃ¢â‚¬â„¢t convert well. ItÃ¢â‚¬â„¢s possible they werenÃ¢â‚¬â„¢t written correctly for the audience, they were placed in a less visible area, or were written in the wrong format. However, when it comes', '#000000', 'No', 'No', 0, 29, '2019-10-07 20:43:33', '2019-10-08 13:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `products_categorys`
--

DROP TABLE IF EXISTS `products_categorys`;
CREATE TABLE IF NOT EXISTS `products_categorys` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_categorys`
--

INSERT INTO `products_categorys` (`cat_id`, `cat_name`) VALUES
(30, 'meriam'),
(29, 'pikala'),
(28, 'triyat'),
(27, 'btata'),
(26, 'khobz');

-- --------------------------------------------------------

--
-- Table structure for table `the_sales`
--

DROP TABLE IF EXISTS `the_sales`;
CREATE TABLE IF NOT EXISTS `the_sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Profit` float NOT NULL,
  `product_id` int(11) NOT NULL,
  `timeOfSalling` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `the_sales`
--

INSERT INTO `the_sales` (`id`, `Quantity`, `Price`, `Profit`, `product_id`, `timeOfSalling`) VALUES
(32, 1, 5000, 400, 86, '2019-10-08 12:58:47'),
(33, 1, 5000, 600, 85, '2019-10-08 12:59:41'),
(4, 1, 5000, 300, 69, '2019-09-26 17:06:55'),
(5, 1, 5000, 400, 68, '2019-09-28 14:53:21'),
(6, 1, 5200, 500, 68, '2019-09-28 14:54:26'),
(7, 1, 5200, 700, 68, '2019-09-28 14:54:43'),
(8, 1, 5300, 900, 68, '2019-09-28 14:55:34'),
(9, 1, 5000, 400, 68, '2019-09-28 15:01:51'),
(10, 4, 8000, 600, 68, '2019-09-29 10:00:09'),
(11, 1, 5000, 100, 68, '2019-10-04 22:10:38'),
(12, 1, 900, 100, 70, '2019-10-05 23:59:02'),
(13, 1, 5000, 300, 68, '2019-10-06 00:01:29'),
(14, 1, 5000, 400, 68, '2019-10-06 00:03:18'),
(15, 1, 5000, 600, 73, '2019-10-06 00:03:47'),
(16, 1, 5000, 400, 68, '2019-10-06 00:04:49'),
(17, 1, 5000, 20, 68, '2019-10-06 00:05:46'),
(18, 1, 5000, 20, 68, '2019-10-06 00:06:28'),
(19, 1, 5000, 20, 68, '2019-10-06 00:08:19'),
(20, 1, 5000, 20, 68, '2019-10-06 00:11:44'),
(21, 1, 5000, 600, 68, '2019-10-06 01:56:55'),
(22, 1, 9000, 50, 70, '2019-10-06 12:25:01'),
(23, 1, 5000, 400, 70, '2019-10-06 12:25:27'),
(24, 1, 10, 1, 70, '2019-10-06 12:26:04'),
(25, 1, 5000, 20, 70, '2019-10-06 12:28:31'),
(26, 1, 4000, 600, 70, '2019-10-06 12:28:49'),
(27, 1, 5000, 400, 68, '2019-10-06 13:22:35'),
(28, 1, 77, 20, 72, '2019-10-06 13:23:29'),
(29, 1, 1600.5, 500.6, 73, '2019-10-06 13:24:32'),
(30, 1, 5, 2, 71, '2019-10-06 14:00:37'),
(35, 1, 900, 400, 70, '2019-10-08 13:16:09'),
(38, 1, 5000, 400, 86, '2019-10-08 13:32:23'),
(39, 1, 5000, 400, 85, '2019-10-08 14:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `log_name` varchar(300) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `monthly` float NOT NULL,
  `status` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(300) NOT NULL,
  `adress` text NOT NULL,
  `id_firTime` varchar(5) NOT NULL,
  `date_beginning` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_active` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `log_name`, `roll`, `monthly`, `status`, `email`, `phone`, `image`, `adress`, `id_firTime`, `date_beginning`, `last_active`) VALUES
(1, 'abdelali abouelhassan', '$2y$10$Vx.QpdlcUs4homeeLG18ZexQO5.ZXMxokQB1bStnhS1O75OFhHrEu', 'black', 'Admin', 9000, 'online', 'abdelaliabouelhassan@gmail.com', '0641884659', 'uploads/image_prof/bblack cover2167489380.png', 'undefined', 'no', '2019-09-29 11:03:34', '2019-10-08 14:56:58'),
(9, 'hazo9a', '$2y$10$Wo/Z7wt649luoQmNqNlEhu80ZMCmJSC1H7usjBTtbLn0AR8NpyN3K', 'hamza', 'Moderator', 6000, 'Online', 'abdelaliabouelhassan@gmail.com', '0638261291', 'uploads/avatar-1.jpg', 'ben gurir hey 1', 'no', '2019-10-02 14:45:19', '2019-10-08 13:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `week_g`
--

DROP TABLE IF EXISTS `week_g`;
CREATE TABLE IF NOT EXISTS `week_g` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profit` float NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week_g`
--

INSERT INTO `week_g` (`id`, `profit`, `time`) VALUES
(1, 6682.5, '2019-10-07 15:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `week_net`
--

DROP TABLE IF EXISTS `week_net`;
CREATE TABLE IF NOT EXISTS `week_net` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Profit` float NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week_net`
--

INSERT INTO `week_net` (`id`, `Profit`, `time`) VALUES
(1, 922.6, '2019-10-07 15:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `year_g`
--

DROP TABLE IF EXISTS `year_g`;
CREATE TABLE IF NOT EXISTS `year_g` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profit` float NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_g`
--

INSERT INTO `year_g` (`id`, `profit`, `time`) VALUES
(1, 0, '2019-10-07 15:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `year_net`
--

DROP TABLE IF EXISTS `year_net`;
CREATE TABLE IF NOT EXISTS `year_net` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Profit` float NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_net`
--

INSERT INTO `year_net` (`id`, `Profit`, `time`) VALUES
(1, 0, '2019-10-07 15:45:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
