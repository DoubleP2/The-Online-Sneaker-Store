-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2023 at 02:13 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sndb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`) VALUES
(1, 'JORDAN', '12345'),
(2, 'momo', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mesg` varchar(50) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`con_id`, `name`, `email`, `phone`, `mesg`) VALUES
(11, 'aung', 'aa@gmail.com', '09777777777', 'Hello'),
(12, 'Ni Ni', 'Nini23@gmail.com', '09-755028545', 'How about you?'),
(13, 'NINI', 'Nini@gmail.com', '09876543', 'hi'),
(14, 'NINI', 'Nini@gmail.com', '09876543', 'hi'),
(15, 'NINI', 'Nini@gmail.com', '09876543', 'hi'),
(16, 'NINI', 'Nini@gmail.com', '09876543', 'hi'),
(17, 'NINI', 'Nini@gmail.com', '09876543', 'hi'),
(18, 'NINI', 'Nini@gmail.com', '09876543', 'hi'),
(19, 'NINI', 'Nini@gmail.com', '09876543', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `prod_no` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `img`, `prod_no`, `price`) VALUES
(1, 'af-1.jpg', 'Air-force-1', '$70'),
(2, 'men15.jpg', 'Adidas', '$29'),
(3, 'airmax.jpg', 'Air Max', '$190'),
(4, 'Nike-Air-Force-1-Low-Hare-Product.jpg', 'Air-force 1 low ', '$300'),
(5, 'a02748c_a_107x1.jpg', 'converse', '$100'),
(6, 'men9.jpg', 'Adidas', '$60'),
(7, 's-l1200.jpg', 'Converse-red', '$199'),
(8, 'dsc01859_1.jpg', 'LV-orange', '$999'),
(9, 'wm7.jpg', 'Adidas(girl)', '$50'),
(10, 'men1.jpg', 'Ad -white', '$99'),
(11, '411938_08.jpg.jpeg', 'Jordan', '$399'),
(13, '9f861ac19fb24558fc52b77b6a9aef46.jpg', 'Girl Sneaker', '$199');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ord_id` int(11) NOT NULL AUTO_INCREMENT,
  `productno` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `order_no` varchar(30) NOT NULL,
  PRIMARY KEY (`ord_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_id`, `productno`, `price`, `name`, `phone`, `address`, `order_no`) VALUES
(14, 'LV-orange', '$999', 'Paing Paing', '09876543', 'NO34,mahaw st,ygn', 'ord203'),
(15, 'converse', '$100', 'Poker Joker', '0923456789', 'mandalay', 'ord229');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `reg_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(20) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `name`, `pass`, `email`, `phone`, `city`, `country`) VALUES
(1, 'NiKo', '1234', 'Niko23@gmail.com', 2147483647, 'Ygn', 'MM'),
(2, 'nini', '12345', 'nini@gmail.com', 974567854, 'ygn', 'MM'),
(3, 'mimi', '2345', 'Mi@gmail.com', 345678789, 'mdy', 'MM'),
(4, 'tttt', '1234', 'tt@gmail.com', 9876543, 'ygn', 'mm'),
(5, 'Baka', '12345', 'Baka@gmail.com', 983456776, 'Yangon', 'Myanmar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
