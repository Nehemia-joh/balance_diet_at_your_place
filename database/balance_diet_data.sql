-- MariaDB dump 10.19  Distrib 10.11.6-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: balance_diet
-- ------------------------------------------------------
-- Server version	10.11.6-MariaDB-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Vendor`
--

DROP TABLE IF EXISTS `Vendor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Vendor` (
  `Name` varchar(50) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `bussines_name` varchar(50) DEFAULT NULL,
  KEY `id` (`id`),
  CONSTRAINT `Vendor_ibfk_1` FOREIGN KEY (`id`) REFERENCES `username` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Vendor`
--

LOCK TABLES `Vendor` WRITE;
/*!40000 ALTER TABLE `Vendor` DISABLE KEYS */;
/*!40000 ALTER TABLE `Vendor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `breakfast`
--

DROP TABLE IF EXISTS `breakfast`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `breakfast` (
  `id` int(11) DEFAULT NULL,
  `food_id` int(11) NOT NULL AUTO_INCREMENT,
  `proteins` varchar(20) DEFAULT NULL,
  `carbohydrates` varchar(20) DEFAULT NULL,
  `vitmins` varchar(20) DEFAULT NULL,
  `fats` varchar(20) DEFAULT NULL,
  `minerals` varchar(20) DEFAULT NULL,
  `fiber` varchar(20) DEFAULT NULL,
  `how_it_read` text DEFAULT NULL,
  `Additional` text DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  PRIMARY KEY (`food_id`),
  KEY `id` (`id`),
  CONSTRAINT `breakfast_ibfk_1` FOREIGN KEY (`id`) REFERENCES `username` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `breakfast`
--

LOCK TABLES `breakfast` WRITE;
/*!40000 ALTER TABLE `breakfast` DISABLE KEYS */;
INSERT INTO `breakfast` VALUES
(12,1,'sdghjkl','cvjhj',';klkjhg','','','','yuiol;iuy','',5664),
(13,2,'jkgdklAH','HJHKJK','KLSS','','','','GHSGGSGSG','',7877),
(12,3,'kl;wd','tyuio','ghjkl','hjkl','hjkl','ghjkl','hjkl','hjhjkl',5664);
/*!40000 ALTER TABLE `breakfast` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cus_order`
--

DROP TABLE IF EXISTS `cus_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cus_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `Vendor_id` int(11) DEFAULT NULL,
  `food_id` int(11) DEFAULT NULL,
  `cus_email` varchar(50) DEFAULT NULL,
  `statues` text DEFAULT NULL,
  `food_time` text DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cus_order`
--

LOCK TABLES `cus_order` WRITE;
/*!40000 ALTER TABLE `cus_order` DISABLE KEYS */;
INSERT INTO `cus_order` VALUES
(1,1,1,'yu134@g.k','Not Served','dinner'),
(2,1,1,'yu@g.l','Not Served','dinner'),
(3,12,1,'yu@g.l','Served','lunch'),
(4,12,1,'yu@g.l','Not Served','lunch'),
(5,1,1,'yu@g.l','Not Served','dinner'),
(6,1,1,'yu@g.l','Not Served','dinner'),
(7,12,4,'yu@g.l','Not Served','lunch');
/*!40000 ALTER TABLE `cus_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dinner`
--

DROP TABLE IF EXISTS `dinner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dinner` (
  `id` int(11) DEFAULT NULL,
  `food_id` int(11) NOT NULL AUTO_INCREMENT,
  `proteins` varchar(20) DEFAULT NULL,
  `carbohydrates` varchar(20) DEFAULT NULL,
  `vitmins` varchar(20) DEFAULT NULL,
  `fats` varchar(20) DEFAULT NULL,
  `minerals` varchar(20) DEFAULT NULL,
  `fiber` varchar(20) DEFAULT NULL,
  `how_it_read` text DEFAULT NULL,
  `Additional` text DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  PRIMARY KEY (`food_id`),
  KEY `id` (`id`),
  CONSTRAINT `dinner_ibfk_1` FOREIGN KEY (`id`) REFERENCES `username` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dinner`
--

LOCK TABLES `dinner` WRITE;
/*!40000 ALTER TABLE `dinner` DISABLE KEYS */;
INSERT INTO `dinner` VALUES
(12,2,'tfygjhkjl','hjkl;','ghjkl','hjkl','jkl','jkl','hjk','uiop',5665);
/*!40000 ALTER TABLE `dinner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `gender` int(1) DEFAULT NULL,
  `Age` int(2) DEFAULT NULL,
  KEY `id` (`id`),
  CONSTRAINT `info_ibfk_1` FOREIGN KEY (`id`) REFERENCES `username` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info`
--

LOCK TABLES `info` WRITE;
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` VALUES
(1,'jokk lok',2,32),
(1,'jokk lok',2,32),
(2,'Fatume ally',1,34),
(3,NULL,NULL,NULL),
(4,NULL,NULL,NULL),
(5,NULL,NULL,NULL),
(6,NULL,NULL,NULL),
(7,NULL,NULL,NULL),
(8,NULL,NULL,NULL),
(9,NULL,NULL,NULL),
(10,NULL,NULL,NULL),
(11,NULL,NULL,NULL),
(12,'bell anna',1,34),
(13,'trtrtrftu',2,67);
/*!40000 ALTER TABLE `info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES
(1,-6.82270000,39.29100000,'2024-02-10 14:56:12'),
(2,-6.82270000,39.29100000,'2024-02-10 14:56:21'),
(3,-6.82270000,39.29100000,'2024-02-10 14:56:21'),
(4,-6.82270000,39.29100000,'2024-02-10 14:56:21'),
(5,-6.82270000,39.29100000,'2024-02-10 15:00:14');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lunch`
--

DROP TABLE IF EXISTS `lunch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lunch` (
  `id` int(11) DEFAULT NULL,
  `food_id` int(11) NOT NULL AUTO_INCREMENT,
  `proteins` varchar(20) DEFAULT NULL,
  `carbohydrates` varchar(20) DEFAULT NULL,
  `vitmins` varchar(20) DEFAULT NULL,
  `fats` varchar(20) DEFAULT NULL,
  `minerals` varchar(20) DEFAULT NULL,
  `fiber` varchar(20) DEFAULT NULL,
  `how_it_read` text DEFAULT NULL,
  `Additional` text DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  PRIMARY KEY (`food_id`),
  KEY `id` (`id`),
  CONSTRAINT `lunch_ibfk_1` FOREIGN KEY (`id`) REFERENCES `username` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lunch`
--

LOCK TABLES `lunch` WRITE;
/*!40000 ALTER TABLE `lunch` DISABLE KEYS */;
INSERT INTO `lunch` VALUES
(12,1,'yjsadfye','gdyahf','jgsduaw','','','','jhdaldiyqwuioyqw','',5655),
(13,2,'jsjjjjjj','kkk','k','kk','kkk','k','kuku','kkkk',5625);
/*!40000 ALTER TABLE `lunch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `snacks`
--

DROP TABLE IF EXISTS `snacks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `snacks` (
  `id` int(11) DEFAULT NULL,
  `food_id` int(11) NOT NULL AUTO_INCREMENT,
  `proteins` varchar(20) DEFAULT NULL,
  `carbohydrates` varchar(20) DEFAULT NULL,
  `vitmins` varchar(20) DEFAULT NULL,
  `fats` varchar(20) DEFAULT NULL,
  `minerals` varchar(20) DEFAULT NULL,
  `fiber` varchar(20) DEFAULT NULL,
  `how_it_read` text DEFAULT NULL,
  `Additional` text DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  PRIMARY KEY (`food_id`),
  KEY `id` (`id`),
  CONSTRAINT `snacks_ibfk_1` FOREIGN KEY (`id`) REFERENCES `username` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `snacks`
--

LOCK TABLES `snacks` WRITE;
/*!40000 ALTER TABLE `snacks` DISABLE KEYS */;
INSERT INTO `snacks` VALUES
(1,1,'','','','','','','pizaaaa baueger','',45252),
(12,2,'kloiuytfgh','ghjkl;','jkl;','jkl','jkl','jkl','hjkl','hjk',765),
(12,3,'kloiuytfgh','ghjkl;','jkl;','jkl','jkl','jkl','hjkl','hjk',765),
(12,4,'kloiuytfgh','ghjkl;','jkl;','jkl','jkl','jkl','hjkl','hjk',765);
/*!40000 ALTER TABLE `snacks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `username`
--

DROP TABLE IF EXISTS `username`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `username` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `role` int(1) DEFAULT NULL,
  `google_map_link` text DEFAULT NULL,
  `b_name` text DEFAULT NULL,
  PRIMARY KEY (`id`,`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `username`
--

LOCK TABLES `username` WRITE;
/*!40000 ALTER TABLE `username` DISABLE KEYS */;
INSERT INTO `username` VALUES
(1,'yu134@g.k','Nehe1234','ftrff',1,'ytgyitglhlo','jkkhjj'),
(2,'yu@g.l','Nehe1234','ftrff',2,'ttdflyiyiug',NULL),
(3,'yu2@g.l','bbjjakiqiyuiDfgt6','aas',2,NULL,NULL),
(4,'yu42@g.l','bbjjakiqiyuiDfgt6','aas',2,NULL,NULL),
(5,'yu62@g.l','bbjjakiqiyuiDfgt6','aas',2,NULL,NULL),
(6,'yu625@g.l','bbjjakiqiyuiDfgt6','aas',2,NULL,NULL),
(7,'yu6625@g.l','bbjjakiqiyuiDfgt6','aas',2,NULL,NULL),
(8,'yu66255@g.l','bbjjakiqiyuiDfgt6','aas',2,NULL,NULL),
(9,'yu662557@g.l','bbjjakiqiyuiDfgt6','aas',2,NULL,NULL),
(10,'njjj@hhh.my','4566DfttrS344','ytrertyu',1,NULL,NULL),
(11,'ntjjj@hhh.my','4566DfttrS344','ytrertyu',1,NULL,NULL),
(12,'yu134h@g.k','Nehe1234','ftrff',1,'dfghjkl',NULL),
(13,'yu134hg@g.k','Nehe1234','ftrff',1,'ghjjuujjkh','tuy');
/*!40000 ALTER TABLE `username` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-17 17:47:28
