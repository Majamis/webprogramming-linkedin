/*
SQLyog Community v11.21 (64 bit)
MySQL - 5.5.24-log : Database - baseapplication
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`baseapplication` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `baseapplication`;

/*Table structure for table `add_contact_notification` */

DROP TABLE IF EXISTS `add_contact_notification`;

CREATE TABLE `add_contact_notification` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `contact_userid` int(11) NOT NULL,
  `personal_note` varchar(255) DEFAULT NULL,
  `relationid` varchar(255) NOT NULL,
  `time_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `contact_userid` (`contact_userid`),
  CONSTRAINT `add_contact_notification_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
  CONSTRAINT `add_contact_notification_ibfk_2` FOREIGN KEY (`contact_userid`) REFERENCES `users` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `add_contact_notification` */

insert  into `add_contact_notification`(`id`,`userid`,`contact_userid`,`personal_note`,`relationid`,`time_date`) values (1,78,88,'Please accept','1','2013-10-23'),(3,78,99,'hello','1','2013-12-30');

/*Table structure for table `confirm` */

DROP TABLE IF EXISTS `confirm`;

CREATE TABLE `confirm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(128) NOT NULL DEFAULT '',
  `key` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

/*Data for the table `confirm` */

insert  into `confirm`(`id`,`userid`,`key`,`email`) values (64,'76','0eb991bb98c5bd99d9084c9dcee0e20b','omerzahidbajwa@gmail.com'),(65,'77','7c0ee3c1250fb5dca438030422cf2ac4','majamis@gmail.com'),(66,'78','0eb991bb98c5bd99d9084c9dcee0e20b','omerzahidbajwa@gmail.com'),(67,'79','77544b2e2ec960d0cda387650e3310d6','bajwa@gmail.com'),(68,'80','b81ff85a332eaf869918c62a4035beac','sbs@gmial.com'),(69,'81','7d2901dddbaa1ab2d7fe047f040a3770','nfbd@gmail.com'),(70,'82','102c0dfd0034a13b69af556f6d16a3f3','dhd@gmail.com'),(71,'83','8e39834c92c3d9d08dda2fa0571ede22','dgnd@gmail.com'),(72,'84','1ce4a5a3251359227d546fe9afe0bbf1','dghd@gmail.com'),(73,'85','9f44a3294119ebe017890f8a84816361','fnhf@gmail.com'),(74,'86','6a1b6221b74810da254fa53b8df4bd16','ngdbd@gmail.com'),(75,'87','d4d615291ac9776af4cc61fe85eecd6c','acasda@gmail.com'),(76,'88','6b1302828e8abe8f530fbb3c5483a89a',''),(77,'89','4a403ee523beb5f0c484ccc0e4ec7bd7','aada@gmail.com'),(78,'90','25d805746e23935972c2cd3c90c5c50a','hello@gmail.com'),(79,'91','f200a28ad6ced7be7520507ccdc85e11','qwer@gmail.com'),(80,'92','edd5a8ae2179bdfffc43f1c5036a1e6a','svsd@gmail.com'),(81,'93','2d29b1325f1e080908bfada8cdf337bf','adminyy@gmail.com'),(82,'94','36f8753cbb3e86173a592c8e46c417e1','adm2inyy@gmail.com'),(83,'95','91482b7ba025b1a6f199d8fb23d48832','adm2inyyy@gmail.com'),(84,'96','b1b4f20da175a44f9ffdc8512e81a7b1','adm2ittnyyy@gmail.com'),(85,'97','f17b80298e14eead87c994e815a82fcb','adm2it12tnyyy@gmail.com'),(86,'98','750f203b23a3998f4739ba38e8c14fe4','adm2its12tnyyy@gmail.com'),(87,'99','f20e8de0e0f6e42d3639d0690d7e7e40','adm2its1222tnyyy@gmail.com'),(88,'100','1a3037abf77cf4fb2c016942934a1857','adm2its1222tn12yyy@gmail.com'),(89,'101','5a7a7034aa36dc16e95225bb2a179e2a','adm2its1sds222tn12yyy@gmail.com'),(90,'102','d333a6ab9f38f3c2bacc782c2fc0adbf','admin123@gmail.com'),(91,'103','bac68eb798929e2567bc10b19d3dae0b','admin245@gmail.com'),(92,'104','525258c2e75f8d36a79fe53fb4d12134','adminsds245@gmail.com'),(93,'105','709c2cf39012527b78ca3b67acd6f386','adminsdasds245@gmail.com'),(94,'106','23715602118b5cff133cfc66d1f4ede8','asdh@gmail.com'),(95,'107','c853399a7738bcaae80241c903bdf98c','1234@gmail.com'),(96,'108','4e853602fb33f8bdc059d98b34db72b8','admin1234@gmail.com');

/*Table structure for table `contacts_info` */

DROP TABLE IF EXISTS `contacts_info`;

CREATE TABLE `contacts_info` (
  `ContactId` int(11) NOT NULL AUTO_INCREMENT,
  `UserIdd` int(11) DEFAULT NULL,
  `FName` varchar(40) NOT NULL,
  `LName` varchar(40) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Type` varchar(40) NOT NULL COMMENT 'Enter the name of API integration',
  PRIMARY KEY (`ContactId`),
  KEY `UserIdd` (`UserIdd`),
  CONSTRAINT `UserIdd` FOREIGN KEY (`UserIdd`) REFERENCES `users` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contacts_info` */

/*Table structure for table `relation_types` */

DROP TABLE IF EXISTS `relation_types`;

CREATE TABLE `relation_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `relation_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `relation_types` */

insert  into `relation_types`(`id`,`relation_name`) values (1,'Colleague'),(2,'Classmate'),(3,'We ve done buisness together'),(4,'Friend'),(5,'Other'),(6,'I dont know');

/*Table structure for table `tbl_key` */

DROP TABLE IF EXISTS `tbl_key`;

CREATE TABLE `tbl_key` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `userid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_key` */

/*Table structure for table `useradditionalinfo` */

DROP TABLE IF EXISTS `useradditionalinfo`;

CREATE TABLE `useradditionalinfo` (
  `UserId` int(11) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `PostalCode` int(11) NOT NULL,
  `JTitle` varchar(255) NOT NULL,
  `SelfEmp` tinyint(1) NOT NULL,
  `Company` varchar(255) DEFAULT NULL,
  `Industry` varchar(255) DEFAULT NULL,
  `TypeId` varchar(255) NOT NULL,
  `Picture` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`UserId`),
  KEY `UserId` (`UserId`),
  KEY `TypeId` (`TypeId`),
  CONSTRAINT `useradditionalinfo_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `useradditionalinfo` */

insert  into `useradditionalinfo`(`UserId`,`Country`,`PostalCode`,`JTitle`,`SelfEmp`,`Company`,`Industry`,`TypeId`,`Picture`,`thumbnail`) values (78,'pk',5440,'Student',0,'Fast-NU','8','student','','uploads/images/thumb/snake18.jpg'),(80,'pk',0,'sdfdf',0,'sdfsdfs','','student','','uploads/images/thumb/snake18.jpg'),(81,'pk',54850,'test',0,'','129','student','','uploads/images/thumb/snake18.jpg'),(82,'pk',5166,'test',0,'','129','looking','','uploads/images/thumb/snake18.jpg'),(83,'an',651616,'test111',0,'','138','looking','','uploads/images/thumb/snake18.jpg'),(88,'',0,'',0,'','','','','uploads/images/thumb/snake18.jpg'),(90,'pk',54600,'testing',0,'','54','student','','uploads/images/thumb/snake18.jpg'),(91,'pk',7894,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(92,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(93,'pk',544,'444',0,'123123','54','student','','uploads/images/thumb/snake18.jpg'),(94,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(95,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(96,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(97,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(98,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(99,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(100,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(101,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(102,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(103,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(104,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(105,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(107,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(108,'pk',0,'works at caramel tech',0,'apple','','employed','uploads/images/snake19.jpg','uploads/images/thumb/snake19.jpg');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `validate` tinyint(1) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`userid`,`fname`,`lname`,`username`,`password`,`validate`) values (78,'Omer','Zahid','omerzahidbajwa@gmail.com','hello123',1),(79,'omer','zahid','bajwa@gmail.com','asd1231',0),(80,'b dbsfb','bsfbsd','sbs@gmial.com','dhdfgdfgdf',0),(81,'vsfsdfs','sgsdfs','nfbd@gmail.com','svsgsdfsdf',0),(82,'nhrgbfgb','hdbfgn','dhd@gmail.com','sgsfsdfsdf',0),(83,'vsdvsdv','sbsbd','dgnd@gmail.com','sbdvdvss',0),(84,'gegfdgdf','dfgdfgdfg','dghd@gmail.com','sgfsgsdfsdf',0),(85,'afsdfsdf','sgdfgdf','fnhf@gmail.com','sgsfsdf',0),(86,'afasfds','dfgdfg','ngdbd@gmail.com','dsbgsfsd',0),(87,'svbsdc','bsvsdv','acasda@gmail.com','sfsdfsdgsd',0),(88,'','','admin','admin',1),(89,'vacasc','avasas','aada@gmail.com','fddasdasd',0),(90,'ahsen','arif','hello@gmail.com','qwerty',0),(91,'qwer','qqwer','qwer@gmail.com','qwerty',0),(92,'asda','afsva','svsd@gmail.com','sgsdfsdf',0),(93,'Omer','Zahid','adminyy@gmail.com','1234567',0),(94,'Omer','Zahid','adm2inyy@gmail.com','1234567',0),(95,'Omer','Zahid','adm2inyyy@gmail.com','1231232131231',0),(96,'Omer','Zahid','adm2ittnyyy@gmail.com','12312321321',0),(97,'Omer','Zahid','adm2it12tnyyy@gmail.com','12312321321321',0),(98,'Omer','Zahid','adm2its12tnyyy@gmail.com','12312312321',0),(99,'Omer','Zahid','adm2its1222tnyyy@gmail.com','123456',0),(100,'Omer','Zahid','adm2its1222tn12yyy@gmail.com','1234567',0),(101,'Omer','Zahid','adm2its1sds222tn12yyy@gmail.com','sadasdasdasda',0),(102,'omer','zahid','admin123@gmail.com','1234567',0),(103,'omerzahid','sdsds','admin245@gmail.com','1234567',0),(104,'omerzahidsd','sdsds','adminsds245@gmail.com','1235567',0),(105,'omerzahidsd','sdsds','adminsdasds245@gmail.com','12132131',1),(106,'ahsd','asdh','asdh@gmail.com','asdasdasdas',0),(107,'asdasdas','asdasdsa','1234@gmail.com','12345678',0),(108,'Ahsen','Arif','admin1234@gmail.com','12345678',0);

/*Table structure for table `usertype` */

DROP TABLE IF EXISTS `usertype`;

CREATE TABLE `usertype` (
  `TypeId` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(255) NOT NULL,
  PRIMARY KEY (`TypeId`,`Status`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `usertype` */

insert  into `usertype`(`TypeId`,`Status`) values (1,'Student'),(2,'Employed'),(3,'Job-Seeker');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
