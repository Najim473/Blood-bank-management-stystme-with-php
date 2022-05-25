-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for online-blood-bank
DROP DATABASE IF EXISTS `online-blood-bank`;
CREATE DATABASE IF NOT EXISTS `online-blood-bank` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `online-blood-bank`;

-- Dumping structure for table online-blood-bank.blood_donation
DROP TABLE IF EXISTS `blood_donation`;
CREATE TABLE IF NOT EXISTS `blood_donation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bloodGroup` varchar(3) NOT NULL,
  `unit` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Pending',
  `date` varchar(50) NOT NULL,
  `disease` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table online-blood-bank.blood_request
DROP TABLE IF EXISTS `blood_request`;
CREATE TABLE IF NOT EXISTS `blood_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bloodGroup` varchar(3) NOT NULL,
  `unit` int(3) NOT NULL,
  `date` varchar(50) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table online-blood-bank.blood_stock
DROP TABLE IF EXISTS `blood_stock`;
CREATE TABLE IF NOT EXISTS `blood_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bloodGroup` varchar(3) NOT NULL,
  `unit` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table online-blood-bank.donors
DROP TABLE IF EXISTS `donors`;
CREATE TABLE IF NOT EXISTS `donors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `bloodGroup` varchar(3) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `lastDonation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table online-blood-bank.patients
DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `bloodGroup` varchar(3) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `lastDonation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table online-blood-bank.preusers
DROP TABLE IF EXISTS `preusers`;
CREATE TABLE IF NOT EXISTS `preusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `bloodGroup` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `age` int(3) NOT NULL DEFAULT '0',
  `disease` varchar(255) NOT NULL DEFAULT 'No Desease',
  `address` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lastDonation` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table online-blood-bank.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `gender` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
