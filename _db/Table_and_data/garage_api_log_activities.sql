-- MySQL dump 10.13  Distrib 8.0.32, for macos13 (x86_64)
--
-- Host: 127.0.0.1    Database: garage_api
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `log_activities`
--

DROP TABLE IF EXISTS `log_activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `log_activities` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `agent` varchar(255) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_activities`
--

LOCK TABLES `log_activities` WRITE;
/*!40000 ALTER TABLE `log_activities` DISABLE KEYS */;
INSERT INTO `log_activities` VALUES (1,'excute gb_sql_checking ','COFFEE@gmail.com',NULL,'192.168.1.1',NULL,NULL,'2023-03-23 01:31:08','2023-03-23 01:31:08'),(2,'after excute procedure','0',NULL,NULL,NULL,NULL,'2023-03-23 01:31:08','2023-03-23 01:31:08'),(3,'Step-0-History 0=>i,1=>0001,2=>COFFEE,3=>COFFEE@gmail.com,4=>COFFEE,5=>$2y$10$cP3M8.OyfD6P/haSYBm6UOpM9EmN.T7bqUlE0ApDiBLxqXggnR28G,6=>1,7=>1,8=>joincoder@gmail.com,','641c0e4c3894d',NULL,'',NULL,NULL,'2023-03-23 01:31:08','2023-03-23 01:31:08'),(4,'excute gb_sql_checking ','CODE@gmail.com',NULL,'192.168.1.1',NULL,NULL,'2023-03-23 02:03:09','2023-03-23 02:03:09'),(5,'after excute procedure','0',NULL,NULL,NULL,NULL,'2023-03-23 02:03:09','2023-03-23 02:03:09'),(6,'Step-0-History 0=>i,1=>0001,2=>CODE,3=>CODE@gmail.com,4=>CODE,5=>$2y$10$mNUew8cDm0A6kRjlL7mlHezb3ZE7BbCkKKw59g4uXqX.vUwepBTNO,6=>1,7=>,8=>COFFEE@gmail.com,','641c15cd7354f',NULL,'',NULL,NULL,'2023-03-23 02:03:09','2023-03-23 02:03:09'),(7,'excute gb_sql_checking ','COFFEE@gmail.com',NULL,'192.168.1.1',NULL,NULL,'2023-03-23 02:08:43','2023-03-23 02:08:43'),(8,'after excute procedure','1',NULL,NULL,NULL,NULL,'2023-03-23 02:08:43','2023-03-23 02:08:43'),(9,'excute gb_sql_checking ','COFFEE@gmail.com',NULL,'192.168.1.1',NULL,NULL,'2023-03-23 02:08:48','2023-03-23 02:08:48'),(10,'after excute procedure','1',NULL,NULL,NULL,NULL,'2023-03-23 02:08:48','2023-03-23 02:08:48'),(11,'excute gb_sql_checking ','COFFEE1@gmail.com',NULL,'192.168.1.1',NULL,NULL,'2023-03-23 02:08:53','2023-03-23 02:08:53'),(12,'after excute procedure','0',NULL,NULL,NULL,NULL,'2023-03-23 02:08:53','2023-03-23 02:08:53'),(13,'Step-0-History 0=>u,1=>0001,2=>COFFEE,3=>COFFEE1@gmail.com,4=>COFFEE,5=>$2y$10$uboO4VSxzVIdWXk6qfs6qe1DWW6Ec3pFw/RELxiO/rtT5zbm1qr8a,6=>1,7=>1,8=>COFFEE@gmail.com,','641c17260bf7d',NULL,'',NULL,NULL,'2023-03-23 02:08:54','2023-03-23 02:08:54'),(14,'excute gb_sql_checking ','CODE@gmail.com',NULL,'192.168.1.1',NULL,NULL,'2023-03-23 02:13:52','2023-03-23 02:13:52'),(15,'after excute procedure','1',NULL,NULL,NULL,NULL,'2023-03-23 02:13:52','2023-03-23 02:13:52'),(16,'excute gb_sql_checking ','CODING@gmail.com',NULL,'192.168.1.1',NULL,NULL,'2023-03-23 02:14:46','2023-03-23 02:14:46'),(17,'after excute procedure','0',NULL,NULL,NULL,NULL,'2023-03-23 02:14:46','2023-03-23 02:14:46'),(18,'Step-0-History 0=>i,1=>0001,2=>CODING,3=>CODING@gmail.com,4=>CODING,5=>$2y$10$BOVDLhPIurAQZKjJPMh60epQyB1rdDpLO9.onWez9SnFkx.5FKHnO,6=>2,7=>1,8=>COFFEE@gmail.com,','641c18866e467',NULL,'',NULL,NULL,'2023-03-23 02:14:46','2023-03-23 02:14:46'),(19,'excute gb_sql_checking ','CODING@gmail.com',NULL,'192.168.1.1',NULL,NULL,'2023-03-23 02:15:00','2023-03-23 02:15:00'),(20,'after excute procedure','1',NULL,NULL,NULL,NULL,'2023-03-23 02:15:00','2023-03-23 02:15:00'),(21,'excute gb_sql_checking ','CODE@gmail.com',NULL,'192.168.1.1',NULL,NULL,'2023-03-23 02:15:40','2023-03-23 02:15:40'),(22,'after excute procedure','1',NULL,NULL,NULL,NULL,'2023-03-23 02:15:40','2023-03-23 02:15:40'),(23,'excute gb_sql_checking ','COFFEE@gmail.com',NULL,'192.168.1.1',NULL,NULL,'2023-03-23 02:15:59','2023-03-23 02:15:59'),(24,'after excute procedure','1',NULL,NULL,NULL,NULL,'2023-03-23 02:15:59','2023-03-23 02:15:59'),(25,'excute gb_sql_checking ','CODE@gmail.com',NULL,'192.168.1.1',NULL,NULL,'2023-03-23 02:17:08','2023-03-23 02:17:08'),(26,'after excute procedure','1',NULL,NULL,NULL,NULL,'2023-03-23 02:17:08','2023-03-23 02:17:08');
/*!40000 ALTER TABLE `log_activities` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-24  9:35:57
