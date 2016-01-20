-- MySQL dump 10.13  Distrib 5.6.26, for osx10.8 (x86_64)
--
-- Host: localhost    Database: carerott
-- ------------------------------------------------------
-- Server version	5.6.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `campaigns`
--

DROP TABLE IF EXISTS `campaigns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campaigns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `url` varchar(55) NOT NULL,
  `main_banner` varchar(55) NOT NULL,
  `active` smallint(1) NOT NULL DEFAULT '1',
  `type` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaigns`
--

LOCK TABLES `campaigns` WRITE;
/*!40000 ALTER TABLE `campaigns` DISABLE KEYS */;
INSERT INTO `campaigns` VALUES (1,'Test Campaign','test url','',1,0,23,'2015-12-11 15:37:36','2015-12-11 15:37:58'),(2,'Test Campaign','test url s','',1,0,23,'2015-12-11 15:37:36','2015-12-11 15:37:58'),(3,'Test Campaign','test url s','',1,0,22,'2015-12-11 15:37:36','2015-12-11 15:37:58'),(4,'Luyanda Test','http://www.google.com','',1,0,23,'2015-12-11 15:37:36','2015-12-11 15:37:58'),(5,'Luyanda Test','http://www.facebook.com/','',1,0,23,'2015-12-11 15:37:36','2015-12-11 15:37:58'),(6,'This is my Campaign','check url','',1,0,23,'2015-12-17 08:30:03','2015-12-17 08:30:03'),(7,'sldNKOSND','LKNSACONDANC','',0,0,23,'2016-01-05 15:58:18','2016-01-05 15:58:18'),(8,'LKNCINLSKNCN','LKNSCONSALCN','',0,0,23,'2016-01-05 15:58:32','2016-01-05 15:58:32'),(9,'','','',1,0,23,'2016-01-06 20:38:32','2016-01-06 20:38:32'),(10,'Stack Overflow','http://stackoverflow.com/','',1,0,23,'2016-01-06 21:58:53','2016-01-06 21:58:53'),(11,'Stack Overflow','http://stackoverflow.com/','',1,0,23,'2016-01-06 22:01:42','2016-01-06 22:01:42'),(12,'','','',1,0,23,'2016-01-06 22:08:02','2016-01-06 22:08:02'),(13,'Stack Overflow','http://stackoverflow.com/','Screen Shot 2016-01-04 at 6.15.07 PM.png',1,0,23,'2016-01-06 22:08:26','2016-01-06 22:08:26');
/*!40000 ALTER TABLE `campaigns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credits`
--

DROP TABLE IF EXISTS `credits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `credits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `value` smallint(2) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credits`
--

LOCK TABLES `credits` WRITE;
/*!40000 ALTER TABLE `credits` DISABLE KEYS */;
INSERT INTO `credits` VALUES (1,23,50,'2015-12-11 15:13:48','2016-01-06 22:08:26');
/*!40000 ALTER TABLE `credits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field_of_study`
--

DROP TABLE IF EXISTS `field_of_study`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field_of_study` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field_of_study`
--

LOCK TABLES `field_of_study` WRITE;
/*!40000 ALTER TABLE `field_of_study` DISABLE KEYS */;
INSERT INTO `field_of_study` VALUES (1,'Acoounting'),(2,'Engineering'),(3,'Education');
/*!40000 ALTER TABLE `field_of_study` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `friend_status`
--

DROP TABLE IF EXISTS `friend_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `friend_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friend_status`
--

LOCK TABLES `friend_status` WRITE;
/*!40000 ALTER TABLE `friend_status` DISABLE KEYS */;
INSERT INTO `friend_status` VALUES (1,'pending'),(2,'approved'),(3,'declined');
/*!40000 ALTER TABLE `friend_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `friend_status_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `friends_friend_status` (`friend_status_id`),
  CONSTRAINT `friends_friend_status` FOREIGN KEY (`friend_status_id`) REFERENCES `friend_status` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friends`
--

LOCK TABLES `friends` WRITE;
/*!40000 ALTER TABLE `friends` DISABLE KEYS */;
INSERT INTO `friends` VALUES (2,1,1,5),(3,1,4,5),(8,1,7,13),(9,1,9,14),(10,1,10,15),(11,1,9,16),(12,1,10,13),(13,1,10,12),(14,1,10,14),(15,1,7,16),(16,1,10,16),(17,1,10,18),(18,1,10,20),(19,1,10,22),(20,1,22,7),(21,1,23,12),(22,1,23,20),(23,1,23,15),(24,1,23,13),(25,1,23,19),(26,1,19,7);
/*!40000 ALTER TABLE `friends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institutions`
--

DROP TABLE IF EXISTS `institutions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institutions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institutions`
--

LOCK TABLES `institutions` WRITE;
/*!40000 ALTER TABLE `institutions` DISABLE KEYS */;
INSERT INTO `institutions` VALUES (1,'UCT'),(2,'UWC'),(3,'WITS'),(4,'Phumlani');
/*!40000 ALTER TABLE `institutions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `student_topic_status_id` varchar(255) NOT NULL,
  `mentor_topic_status_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topics`
--

LOCK TABLES `topics` WRITE;
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
INSERT INTO `topics` VALUES (1,'Understanding field of study','0','0'),(2,'Understanding entry requirements','0','0'),(3,'Understanding application forms','0','0'),(4,'Understanding  financial aid','0','0');
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topics_status`
--

DROP TABLE IF EXISTS `topics_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topics_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topics_status`
--

LOCK TABLES `topics_status` WRITE;
/*!40000 ALTER TABLE `topics_status` DISABLE KEYS */;
INSERT INTO `topics_status` VALUES (1,'Not Started'),(2,'Started'),(3,'Done');
/*!40000 ALTER TABLE `topics_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_types`
--

DROP TABLE IF EXISTS `user_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_types`
--

LOCK TABLES `user_types` WRITE;
/*!40000 ALTER TABLE `user_types` DISABLE KEYS */;
INSERT INTO `user_types` VALUES (1,'Varsity Student'),(2,'High Scholar'),(3,'Company');
/*!40000 ALTER TABLE `user_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_types_id` int(11) NOT NULL,
  `institutions_id` int(11) NOT NULL,
  `field_of_study_id` int(11) NOT NULL,
  `auth_id` tinyint(1) NOT NULL DEFAULT '0',
  `role` varchar(55) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `users_field_of_study` (`field_of_study_id`),
  KEY `users_institutions` (`institutions_id`),
  KEY `users_user_types` (`user_types_id`),
  CONSTRAINT `users_field_of_study` FOREIGN KEY (`field_of_study_id`) REFERENCES `field_of_study` (`id`),
  CONSTRAINT `users_institutions` FOREIGN KEY (`institutions_id`) REFERENCES `institutions` (`id`),
  CONSTRAINT `users_user_types` FOREIGN KEY (`user_types_id`) REFERENCES `user_types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (7,'mary','jane@gmail.com','3456',2,1,1,0,'','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,'sammy','sammy@hotmail.com','4567',2,1,2,0,'','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,'sipho','sipho@hotmail.com','1234',2,1,3,0,'','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,'luvo','test@test.com','test',2,1,1,0,'','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,'bantu','bantumthi@gmail.com','5678',2,1,2,0,'','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(12,'Amnda','amanda@gmail.com','3333',1,1,1,0,'','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(13,'Shane','shane@webmail.com','2222',1,1,2,0,'','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(14,'Nceba','nceba@hotmail.com','5555',1,2,1,0,'','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(15,'Zimkita','zimkita@webmail.com','6666',1,3,2,0,'','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(16,'Siwe','siwe@hotmail.com','4444',1,2,3,0,'','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(17,'njos','slkjk@d.kd','hallo',2,1,2,0,'','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(18,'pip momota','ha@ll.o','hallo',1,3,3,0,'','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(19,'Test','test@test.com','test123',1,1,2,0,'','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(20,'Makabongwe Mpambani','pmpambani@carerott.com','pumelela',1,3,1,0,'','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(21,'ludz','ludz@test.test','ludz',2,1,1,0,'','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(22,'Qiqa','qiqa@gmail.com','123',1,2,2,0,'','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(23,'Phumlani','phumlani.nyati@gmail.com','admin123',3,1,1,0,'','0000-00-00 00:00:00','2016-01-10 15:11:50','2016-01-10 15:11:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-13  7:38:06
