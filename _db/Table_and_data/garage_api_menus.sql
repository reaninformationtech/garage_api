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
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) NOT NULL,
  `pagename` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `ignore` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `ordering` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Home','side-menu-dashboard','Dashboard',NULL,0,1,1,'2023-03-23 01:29:00','2023-03-23 01:29:00'),(2,'Activity','side-menu-dashboard-overview-1','Overview 1',1,0,1,2,'2023-03-23 01:29:00','2023-03-23 01:29:00'),(3,'Activity','side-menu-dashboard-overview-2','Overview 2',1,0,1,3,'2023-03-23 01:29:00','2023-03-23 01:29:00'),(4,'Activity','side-menu-dashboard-overview-3','Overview 3',1,0,1,4,'2023-03-23 01:29:00','2023-03-23 01:29:00'),(5,'ShoppingBag','side-menu-ecommerce','E-Commerce',NULL,0,1,5,'2023-03-23 01:29:00','2023-03-23 01:29:00'),(6,'Activity','side-menu-categories','Categories',5,0,1,6,'2023-03-23 01:29:00','2023-03-23 01:29:00'),(7,'Activity','side-menu-add-product','Add Product',5,0,1,7,'2023-03-23 01:29:00','2023-03-23 01:29:00'),(8,'Settings','side-menu-setting','Settings',NULL,0,1,8,'2023-03-23 01:29:00','2023-03-23 01:29:00'),(9,'Activity','side-menu-add-branch','Add Branch',8,0,1,9,'2023-03-23 01:29:00','2023-03-23 01:29:00'),(10,'Activity','side-menu-add-user','Add User',8,0,1,10,'2023-03-23 01:29:00','2023-03-23 01:29:00'),(11,'Activity','side-menu-add-menu','Add Menu',8,0,1,11,'2023-03-23 01:29:00','2023-03-23 01:29:00');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
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
