/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.5.23 : Database - school
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`school` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `school`;

/*Table structure for table `attendance` */

DROP TABLE IF EXISTS `attendance`;

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roll_no` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` enum('present','absent','leave') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `attendance` */

insert  into `attendance`(`id`,`roll_no`,`class_id`,`date`,`status`) values (3,19,11,'2013-09-22','absent'),(4,17,1,'2013-09-23','present'),(5,18,1,'2013-09-23','present'),(6,12,7,'2013-10-01','leave'),(7,17,7,'2013-10-29','absent');

/*Table structure for table `class` */

DROP TABLE IF EXISTS `class`;

CREATE TABLE `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(255) DEFAULT NULL,
  `strength` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `class` */

insert  into `class`(`id`,`class`,`strength`) values (7,'6th',1),(11,'7th',1),(12,'8th',0),(13,'one',0),(14,'sdfd',0),(15,'sdfd',0);

/*Table structure for table `class_detail` */

DROP TABLE IF EXISTS `class_detail`;

CREATE TABLE `class_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `roll_no` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `class_detail` */

insert  into `class_detail`(`id`,`student_id`,`class_id`,`roll_no`) values (3,11,7,17),(7,12,19,19),(8,15,12,20),(10,16,3,20),(11,12,6,12),(12,12,11,77777),(13,12,7,17);

/*Table structure for table `class_subjects` */

DROP TABLE IF EXISTS `class_subjects`;

CREATE TABLE `class_subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `class_subjects` */

insert  into `class_subjects`(`id`,`class_id`,`subject_id`) values (3,11,10),(4,11,11),(5,2147483647,2147483647),(6,7,3),(7,11,4),(8,7,10);

/*Table structure for table `marks` */

DROP TABLE IF EXISTS `marks`;

CREATE TABLE `marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roll_no` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `total_marks` int(11) DEFAULT NULL,
  `obtain_marks` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `marks` */

insert  into `marks`(`id`,`roll_no`,`class_id`,`total_marks`,`obtain_marks`) values (3,17,11,2147483647,400000000),(4,18,2,0,0),(28,19762,1,200,670);

/*Table structure for table `marks_detail` */

DROP TABLE IF EXISTS `marks_detail`;

CREATE TABLE `marks_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roll_no` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `total_marks` int(11) DEFAULT NULL,
  `obtain_marks` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `marks_detail` */

insert  into `marks_detail`(`id`,`roll_no`,`class_id`,`subject_id`,`total_marks`,`obtain_marks`) values (6,34,7,4,4334,0),(7,0,11,8,0,0);

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `admission_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `student` */

insert  into `student`(`id`,`name`,`father_name`,`admission_date`) values (12,'ahmed','dd','2013-09-04'),(15,'sohail','Assadullah','2013-10-02'),(16,'Muzaffar','Fida Hussain','2013-09-02'),(17,'shsf','dsfgg','2013-10-06');

/*Table structure for table `subject` */

DROP TABLE IF EXISTS `subject`;

CREATE TABLE `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `subject` */

insert  into `subject`(`id`,`name`) values (8,'Economicd'),(10,'URDU'),(11,'English'),(12,'Economic'),(13,'rrrrrr');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` enum('admin','user') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`first_name`,`last_name`,`email`,`password`,`user_type`) values (1,'shahid','yasin','shahid@yahoo.com','123456','admin');

/* Trigger structure for table `class_detail` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `on_class_detail_create` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'127.0.0.1' */ /*!50003 TRIGGER `on_class_detail_create` BEFORE INSERT ON `class_detail` FOR EACH ROW BEGIN
	UPDATE class SET class.strength = class.strength + 1 WHERE class.id = new.class_id;
    END */$$


DELIMITER ;

/* Trigger structure for table `class_detail` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `on_class_detail_delete` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'127.0.0.1' */ /*!50003 TRIGGER `on_class_detail_delete` AFTER DELETE ON `class_detail` FOR EACH ROW BEGIN
	
UPDATE class SET class.strength = class.strength - 1 WHERE class.id = old.class_id;
    
END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
