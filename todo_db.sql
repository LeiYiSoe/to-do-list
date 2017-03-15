/*
SQLyog Ultimate v12.14 (64 bit)
MySQL - 5.0.45-community-nt : Database - todo_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`todo_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `todo_db`;

/*Table structure for table `todo_table` */

CREATE TABLE `todo_table` (
  `id` int(11) NOT NULL auto_increment,
  `description` varchar(255) default NULL,
  `status` int(1) default NULL,
  `created_date` datetime default NULL,
  `modified_date` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `todo_table` */

insert  into `todo_table`(`id`,`description`,`status`,`created_date`,`modified_date`) values 
(1,'To have dinner',1,'2017-03-14 21:21:53','2017-03-15 15:51:50'),
(4,'To cook dinner',1,'2017-03-15 15:51:08','2017-03-15 15:51:27'),
(5,'To read a book',0,'2017-03-15 15:51:40','2017-03-15 15:55:30'),
(6,'To Have lime juice',0,'2017-03-15 15:55:04','2017-03-15 15:55:04');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
