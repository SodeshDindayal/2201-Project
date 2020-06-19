-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2020 at 02:39 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `illustriousmarketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

DROP TABLE IF EXISTS `electronics`;
CREATE TABLE IF NOT EXISTS `electronics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(32, 'Motorola G7 Phone', 50000, 'Assets/product4.png'),
(33, 'ATH Series 3 headphones', 14000, 'Assets/product2.jpg'),
(34, 'JBL OUtdoor Speaker', 6000, 'Assets/product5.png'),
(35, 'IPad Pro 11-Inch', 65000, 'Assets/product8.png'),
(36, 'Dell  Gaming Monitor', 25000, 'Assets/product12.png');

-- --------------------------------------------------------

--
-- Table structure for table `fashion`
--

DROP TABLE IF EXISTS `fashion`;
CREATE TABLE IF NOT EXISTS `fashion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fashion`
--

INSERT INTO `fashion` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(27, 'Denim Shorts', 45000, 'Assets/new1.png'),
(28, 'Women\'s Sundress', 14000, 'Assets/new9.png'),
(29, 'Buttoned Gents Shirt', 2500, 'Assets/product9.png'),
(30, 'Nike Jogger Shorts', 4500, 'Assets/product10.png'),
(31, 'Nike Jogger Shorts', 4500, 'Assets/product11.png');

-- --------------------------------------------------------

--
-- Table structure for table `featuredproducts1`
--

DROP TABLE IF EXISTS `featuredproducts1`;
CREATE TABLE IF NOT EXISTS `featuredproducts1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featuredproducts1`
--

INSERT INTO `featuredproducts1` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Dualshock 4 Controller', 14000, 'Assets/product1.jpg'),
(2, 'Vans Off The Wall', 10000, 'Assets/image6.jpg'),
(3, 'ATH Series 3 headphones', 14000, 'Assets/product2.jpg'),
(4, 'Michael Kors Watch', 20000, 'Assets/product3.jpg'),
(5, 'Dell Gaming Monitor', 25000, 'Assets/product12.png'),
(6, 'Ipad Pro 11-Inch', 65000, 'Assets/product8.png');

-- --------------------------------------------------------

--
-- Table structure for table `featuredproducts2`
--

DROP TABLE IF EXISTS `featuredproducts2`;
CREATE TABLE IF NOT EXISTS `featuredproducts2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featuredproducts2`
--

INSERT INTO `featuredproducts2` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(7, 'JBL Outdoor Speakers', 6000, 'Assets/product5.png'),
(8, 'Nike Gym Shorts', 2500, 'Assets/product10.png'),
(9, 'Motorola G7 Phone', 50000, 'Assets/product4.png'),
(10, 'Sony  WH-1000XM3', 25000, 'Assets/product6.png'),
(11, 'Steel Series headphones', 14000, 'Assets/product7.png'),
(12, 'Nike Gym Shorts', 4500, 'Assets/product11.png');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

DROP TABLE IF EXISTS `furniture`;
CREATE TABLE IF NOT EXISTS `furniture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(13, 'Red Velvet Sofa', 30000, 'Assets/new10.png'),
(14, 'Outdoor Style Sofa', 25000, 'Assets/new11.png'),
(15, 'Home Office Sofa', 15000, 'Assets/new12.png'),
(16, 'Living Room Sofa', 35000, 'Assets/new13.png'),
(17, 'Home Office Sofa', 15000, 'Assets/new14.png'),
(18, 'Living Room Sofa', 15000, 'Assets/new15.png');

-- --------------------------------------------------------

--
-- Table structure for table `gaming`
--

DROP TABLE IF EXISTS `gaming`;
CREATE TABLE IF NOT EXISTS `gaming` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaming`
--

INSERT INTO `gaming` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(19, 'Forza Motorsport', 10000, 'Assets/new6.png'),
(20, 'Batman Arkham City', 10000, 'Assets/new7.png'),
(21, 'Killzone Shadow Fall', 10000, 'Assets/new8.png'),
(22, 'XBOX Just Cause 3', 10000, 'Assets/new5.png'),
(23, 'Dualshock 4 Controller', 14000, 'Assets/product1.jpg'),
(24, 'Gaming Headphones', 20000, 'Assets/product6.png'),
(25, 'Dell Gaming Monitor', 24000, 'Assets/product12.png'),
(26, 'ATH Series 3 Headphones', 24000, 'Assets/product2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

DROP TABLE IF EXISTS `loginform`;
CREATE TABLE IF NOT EXISTS `loginform` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(22) NOT NULL,
  `lastname` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`ID`, `firstname`, `lastname`, `email`, `password`) VALUES
(5, 'sodesh', 'Dindayal', 'sodesh21@gmail.com', '5d9a2b70810ca6739304db3aad97a097');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

DROP TABLE IF EXISTS `sports`;
CREATE TABLE IF NOT EXISTS `sports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(37, 'Racing Sports Helmet', 8000, 'Assets/new4.png'),
(38, 'Cricket Saftey Gloves', 4000, 'Assets/new3.png'),
(39, 'Football Padded Shorts', 9000, 'Assets/new2.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
