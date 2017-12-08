/*
SQLyog Professional v12.4.1 (64 bit)
MySQL - 10.1.22-MariaDB : Database - web
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`web` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `web`;

/*Table structure for table `jenis_kelamin` */

DROP TABLE IF EXISTS `jenis_kelamin`;

CREATE TABLE `jenis_kelamin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `jenis_kelamin` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jenis_kelamin` */

/*Table structure for table `level` */

DROP TABLE IF EXISTS `level`;

CREATE TABLE `level` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `level` */

insert  into `level`(`id`,`level`) values 
(1,'pemilik'),
(2,'pencari'),
(3,'admin');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_level` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_level` (`id_level`),
  CONSTRAINT `id_level` FOREIGN KEY (`id_level`) REFERENCES `level` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`id_level`,`nama`,`jenis_kelamin`,`username`,`password`,`alamat`,`kontak`) values 
(1,3,'basirudin','Laki-Laki','admin','admin','Banyuwangi','082332581431'),
(3,1,'shofi','Laki-Laki','pemilik','pemilik','pemilik','082333442452'),
(6,1,'dowi','Laki - Laki','q','q','na','08'),
(7,1,'fgd','Laki - Laki','rf','hg','g','097');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
