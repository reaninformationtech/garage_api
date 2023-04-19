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
-- Table structure for table `provinces`
--

DROP TABLE IF EXISTS `provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `provinces` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `inputter` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `provinces_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provinces`
--

LOCK TABLES `provinces` WRITE;
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
INSERT INTO `provinces` VALUES (1,'Banteay Meanchey Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(2,'Battambang Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(3,'Kampong Cham Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(4,'Kampong Chhnang Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(5,'Kampong Speu Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(6,'Kampong Thom Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(7,'Kampot Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(8,'Kandal Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(9,'Koh Kong Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(10,'Kratie Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(11,'Mondul Kiri Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(12,'Phnom Penh Capital',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(13,'Preah Vihear Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(14,'Prey Veng Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(15,'Pursat Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(16,'Ratanak Kiri Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(17,'Siemreap Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(18,'Preah Sihanouk Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(19,'Stung Treng Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(20,'Svay Rieng Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(21,'Takeo Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(22,'Oddar Meanchey Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(23,'Kep Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(24,'Pailin Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00'),(25,'Tboung Khmum Province',1,'IT.SYSTEM','2023-03-23 01:29:00','2023-03-23 01:29:00');
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;
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
