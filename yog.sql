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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `add_contact_notification` */

/*Table structure for table `comments_newsfeed` */

DROP TABLE IF EXISTS `comments_newsfeed`;

CREATE TABLE `comments_newsfeed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nf_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nf_id` (`nf_id`),
  KEY `userid` (`userid`),
  CONSTRAINT `comments_newsfeed_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
  CONSTRAINT `comments_newsfeed_ibfk_1` FOREIGN KEY (`nf_id`) REFERENCES `newsfeed` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `comments_newsfeed` */

insert  into `comments_newsfeed`(`id`,`nf_id`,`userid`,`text`,`time`) values (1,1,87,'SUP','2013-11-05'),(2,8,78,'EVERYONE','0000-00-00'),(3,7,78,'SSUPS','0000-00-00'),(5,1,87,'Gotcha','0000-00-00'),(6,1,87,'SUP','0000-00-00'),(10,2,78,'','2013-11-22'),(11,10,78,'','2013-11-22'),(12,8,78,'','2013-11-22'),(13,2,78,'asd','2013-11-22'),(14,2,78,'hi whatsup?','2013-11-22'),(15,6,78,'you there mate?','2013-11-22'),(16,1,88,'you head me nigga','2013-11-22'),(17,11,88,'hey mate','2013-11-22'),(18,2,78,'howdie!','2013-11-23');

/*Table structure for table `confirm` */

DROP TABLE IF EXISTS `confirm`;

CREATE TABLE `confirm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(128) NOT NULL DEFAULT '',
  `key` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

/*Data for the table `confirm` */

insert  into `confirm`(`id`,`userid`,`key`,`email`) values (102,'114','ba7c30275a0a77dc180d634a12f8af5e','zxc@gmail.com'),(103,'79','08daf44c0b254992959aec63c67aea68','adaaasaminasdasssdasasda@gmasi;.com'),(104,'127','93784180a643c97296f82ba212da84c6','123@gmail.com'),(105,'128','fb0aa711f115409ebc85445ecb31562b','azdadasd@gmail.com'),(106,'129','36c0a3b639648cdc72145ece5c7d79cd','admin@sdasdm.com'),(107,'130','d18527ec42ae2b8f2572339fb3051a59','admissn@sdasdm.com'),(108,'131','6927afedbc3bade9a1c1350a17bdb16b','admisdsdssn@sdasdm.com'),(109,'132','3cf0765cddd1cb86b289e0ce1ae3b907','bajwa@gmail.com123'),(110,'133','a85b2da2833b897787dbfdc7b04f367f','asdasdas@gmail.comasdasd'),(111,'134','ddecc5886722e2c891ddf2e3333dae87','unique@gmail.com'),(112,'135','540b4786de958b12d11d55ef71705482','123456@gmail.com'),(113,'136','c63fd833ebb6245816535b3cb9a063e6','1234256@gmail.com'),(114,'137','23eaf1c77c3e4466728fc8d6129a7ecc','azb@gmail.com');

/*Table structure for table `contacts_info` */

DROP TABLE IF EXISTS `contacts_info`;

CREATE TABLE `contacts_info` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserIdd` int(11) NOT NULL,
  `ContactId` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `UserIdd` (`UserIdd`),
  KEY `ContactId` (`ContactId`),
  CONSTRAINT `contacts_info_ibfk_1` FOREIGN KEY (`ContactId`) REFERENCES `users` (`userid`),
  CONSTRAINT `UserIdd` FOREIGN KEY (`UserIdd`) REFERENCES `users` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

/*Data for the table `contacts_info` */

insert  into `contacts_info`(`Id`,`UserIdd`,`ContactId`) values (96,78,78),(97,78,94),(98,78,95),(99,78,108),(100,78,90),(101,78,102),(102,78,93);

/*Table structure for table `newsfeed` */

DROP TABLE IF EXISTS `newsfeed`;

CREATE TABLE `newsfeed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `time` date NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  CONSTRAINT `newsfeed_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `newsfeed` */

insert  into `newsfeed`(`id`,`userid`,`text`,`status`,`time`,`picture`) values (1,78,'1','EVERYONE','2013-11-20',NULL),(2,78,'2','CONNECTIONS','0000-00-00',NULL),(3,88,'3','CONNECTIONS','2013-11-19',NULL),(4,94,'4','CONNECTIONS','0000-00-00',NULL),(5,110,'5','EVERYONE','0000-00-00',NULL),(6,78,'6','EVERYONE','2013-11-22',NULL),(7,78,'7','EVERYONE','2013-11-22',NULL),(8,78,'8','EVERYONE','2013-11-22',NULL),(9,78,'9','EVERYONE','2013-11-22',NULL),(10,78,'10','CONNECTIONS','2013-11-22',NULL),(11,78,'11','EVERYONE','2013-11-22',NULL),(12,78,'12','CONNECTIONS','2013-11-22',NULL),(13,78,'13','CONNECTIONS','2013-11-22',NULL),(14,78,'here you go','EVERYONE','2013-11-23',NULL),(15,78,'sup?','EVERYONE','2013-11-23',NULL),(16,78,'thats it!','EVERYONE','2013-11-23',NULL),(17,78,'weehaa','EVERYONE','2013-11-23',NULL),(18,78,'supaaa!','EVERYONE','2013-11-23',NULL),(19,78,'','EVERYONE','2013-11-23',NULL),(20,78,'','EVERYONE','2013-11-23',NULL),(21,78,'','EVERYONE','2013-11-23',NULL),(22,78,'','EVERYONE','2013-11-23',NULL),(23,78,'','EVERYONE','2013-11-23',NULL),(24,78,'','EVERYONE','2013-11-23',NULL),(25,78,'','EVERYONE','2013-11-23',NULL),(26,78,'','EVERYONE','2013-11-23',NULL),(27,78,'','EVERYONE','2013-11-23',''),(28,78,'','EVERYONE','2013-11-23',''),(29,78,'','EVERYONE','2013-11-23',''),(30,78,'herere','EVERYONE','2013-11-23',''),(31,78,'','EVERYONE','2013-11-23',''),(32,78,'asdsad','EVERYONE','2013-11-23',''),(33,78,'asdsadasda','EVERYONE','2013-11-23',''),(34,78,'asdsa','EVERYONE','2013-11-23',''),(35,78,'asdsa','EVERYONE','2013-11-23',''),(36,78,'asdsa','EVERYONE','2013-11-23',''),(37,78,'sd','EVERYONE','2013-11-23',''),(38,78,'sd','EVERYONE','2013-11-23',''),(39,78,'sdasda','EVERYONE','2013-11-23',''),(40,78,'asdas','EVERYONE','2013-11-23',''),(41,78,'asdas','EVERYONE','2013-11-23',''),(42,78,'asdasasd','EVERYONE','2013-11-23',NULL),(43,78,'asdasasd','EVERYONE','2013-11-23',NULL),(44,78,'this is it !','EVERYONE','2013-11-23',''),(45,78,'asdasdas sup!','EVERYONE','2013-11-23',NULL),(46,78,'12345','EVERYONE','2013-11-23',NULL),(47,78,'az','EVERYONE','2013-11-23','uploads/images/snake23.jpg');

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

insert  into `useradditionalinfo`(`UserId`,`Country`,`PostalCode`,`JTitle`,`SelfEmp`,`Company`,`Industry`,`TypeId`,`Picture`,`thumbnail`) values (78,'pk',5440,'Student',0,'Fast-NU','8','student','','uploads/images/thumb/snake18.jpg'),(80,'pk',0,'sdfdf',0,'sdfsdfs','','student','','uploads/images/thumb/snake18.jpg'),(81,'pk',54850,'test',0,'Fast-NU','129','student','','uploads/images/thumb/snake18.jpg'),(82,'pk',5166,'test',0,'Fast-NU','129','looking','','uploads/images/thumb/snake18.jpg'),(83,'an',651616,'test111',0,'Fast-NU','138','looking','','uploads/images/thumb/snake18.jpg'),(88,'',0,'',0,'Fast-NU','','','','uploads/images/thumb/snake18.jpg'),(90,'pk',54600,'testing',0,'Fast-NU','54','student','uploads/images/thumb/snake18.jpg','uploads/images/thumb/snake18.jpg'),(91,'pk',7894,'',0,'Fast-NU','','employed','','uploads/images/thumb/snake18.jpg'),(92,'pk',0,'',0,'Fast-NU','','employed','','uploads/images/thumb/snake18.jpg'),(93,'pk',544,'444',0,'123123','54','student','','uploads/images/thumb/snake18.jpg'),(94,'pk',0,'',0,'Fast-NU','','employed','','uploads/images/thumb/snake18.jpg'),(95,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(96,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(97,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(98,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(99,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(100,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(101,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(102,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(103,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(104,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(105,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(107,'pk',0,'',0,'','','employed','','uploads/images/thumb/snake18.jpg'),(108,'pk',0,'works at caramel tech',0,'apple','','employed','uploads/images/snake19.jpg','uploads/images/thumb/snake19.jpg'),(110,'pk',0,'',0,'','','employed',NULL,NULL),(113,'pk',544,'student',0,'','94','employed','','uploads/images/thumb/'),(114,'pk',142,'asdsada',0,'asdasdas','','employed','uploads/images/snake20.jpg','uploads/images/thumb/snake20.jpg'),(127,'pk',0,'asdasd',0,'asdasd','','employed','','uploads/images/thumb/'),(132,'pk',0,'asd',0,'asd','','employed','uploads/images/snake21.jpg','uploads/images/thumb/snake21.jpg'),(133,'pk',5444,'12321',0,'123123','','employed','','uploads/images/thumb/'),(134,'pk',323,'student',0,'Fastnu','','employed','uploads/images/snake22.jpg','uploads/images/thumb/snake22.jpg'),(136,'pk',1234,'12333',0,'12312321','','employed','','uploads/images/thumb/'),(137,'pk',5442,'Student',0,'Fast-NU','','employed',NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`userid`,`fname`,`lname`,`username`,`password`,`validate`) values (78,'Omer1','Zahid','omerzahidbajwa@gmail.com','hello123',1),(79,'omer2','zahid','bajwa@gmail.com','asd1231',0),(80,'b dbsfb','bsfbsd','sbs@gmial.com','dhdfgdfgdf',0),(81,'vsfsdfs','sgsdfs','nfbd@gmail.com','svsgsdfsdf',0),(82,'nhrgbfgb','hdbfgn','dhd@gmail.com','sgsfsdfsdf',0),(83,'vsdvsdv','sbsbd','dgnd@gmail.com','sbdvdvss',0),(84,'gegfdgdf','dfgdfgdfg','dghd@gmail.com','sgfsgsdfsdf',0),(85,'afsdfsdf','sgdfgdf','fnhf@gmail.com','sgsfsdf',0),(86,'afasfds','dfgdfg','ngdbd@gmail.com','dsbgsfsd',0),(87,'svbsdc','bsvsdv','acasda@gmail.com','sfsdfsdgsd',0),(88,'','','admin','admin',1),(89,'vacasc','avasas','aada@gmail.com','fddasdasd',0),(90,'ahsen','arif','hello@gmail.com','qwerty',0),(91,'qwer','qqwer','qwer@gmail.com','qwerty',0),(92,'asda','afsva','svsd@gmail.com','sgsdfsdf',0),(93,'Omer3','Zahid','adminyy@gmail.com','1234567',0),(94,'Omer4','Zahid','adm2inyy@gmail.com','1234567',0),(95,'Omer5','Zahid','adm2inyyy@gmail.com','1231232131231',0),(96,'Omer6','Zahid','adm2ittnyyy@gmail.com','12312321321',0),(97,'Omer7','Zahid','adm2it12tnyyy@gmail.com','12312321321321',0),(98,'Omer8','Zahid','adm2its12tnyyy@gmail.com','12312312321',0),(99,'Omer9','Zahid','adm2its1222tnyyy@gmail.com','123456',0),(100,'Omer10','Zahid','adm2its1222tn12yyy@gmail.com','1234567',0),(101,'Omer11','Zahid','adm2its1sds222tn12yyy@gmail.com','sadasdasdasda',0),(102,'omer12','zahid','admin123@gmail.com','1234567',0),(103,'omerzahid13','sdsds','admin245@gmail.com','1234567',0),(104,'omerzahidsd14','sdsds','adminsds245@gmail.com','1235567',0),(105,'omerzahidsd15','sdsds','adminsdasds245@gmail.com','12132131',1),(106,'ahsd','asdh','asdh@gmail.com','asdasdasdas',0),(107,'asdasdas','asdasdsa','1234@gmail.com','12345678',0),(108,'Ahsen','Arif','admin1234@gmail.com','12345678',0),(109,'omer','zahid','admin@gmail.com','adminad',0),(110,'omer','zahid','admingasdas@gmail.com','asdadasdasdasdasdas',0),(111,'omer','aazaz','admingd@gmail.com','123456',1),(112,'asd','asd','adminsad@gmail.com','asd123213',1),(113,'','','','',0),(114,'omer','zxc','zxc@gmail.com','123456',1),(115,'omerzasd','asdasd','omere@zahidbajwa.com','123456',0),(116,'asdas','asdsa','admin@gmailsds.com','asdasdas',0),(117,'asdasdasdas','asdasdasdas','admin@gmail.cp','asdasdasdasd',0),(118,'asdasdasdas','asdasdasdas','admiwe@gmail.cp','qwewqeqweqwewqeqw',0),(119,'asdasda','asdasda','admiasdasdasdn@gmail.com','asdasdasdasd',0),(120,'asdasdasda','asdasdasda','admin@gmaisd.com','asdasdasdas',0),(121,'asdasdasda','asdasdasda','adminasdasdas@gmaisd.com','asdasdasdas',0),(122,'asdasdasdasd','asdasdasdasd','admin@gmasi;.com','asdasdasdas',0),(123,'asdasdasdasd','asdasdasdasd','adminasdasda@gmasi;.com','asdasdasdasdsa',0),(124,'asdasdasdasd','asdasdasdasd','adminasdasdasasda@gmasi;.com','asdasdasdasda',0),(125,'asdasdasdasd','asdasdasdasd','adaaminasdasssdasasda@gmasi;.com','sadasdasdasdsadasda',0),(126,'asdasdasdasd','asdasdasdasd','adaaasaminasdasssdasasda@gmasi;.com','asdasdasda',0),(127,'asdasdasdasd','asdasdasdasd','123@gmail.com','asdasdasda',0),(128,'asdsadas','asdasdasda','azdadasd@gmail.com','asdasdasdas',0),(129,'asdadas','asdsadas','admin@sdasdm.com','asdasdasda',0),(130,'asdadas','asdsadas','admissn@sdasdm.com','asdasdasdasdas',0),(131,'asdadas','asdsadas','admisdsdssn@sdasdm.com','sdsdsdsds',0),(132,'omer','zahid','bajwa@gmail.com123','asdasdasdas',0),(133,'asdasdas','asdasdasd','asdasdas@gmail.comasdasd','asdasdasdasdasdasdas',0),(134,'omer','zahid','unique@gmail.com','123456',1),(135,'12345','12345','123456@gmail.com','123456',0),(136,'12345','12345','1234256@gmail.com','12321312',0),(137,'Ali','Usman','azb@gmail.com','123456',0);

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
