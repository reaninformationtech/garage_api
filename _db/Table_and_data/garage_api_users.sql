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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `branch_code` varchar(10) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(250) NOT NULL,
  `profile_id` varchar(10) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `sysdoc` varchar(100) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `inputter` varchar(250) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'0002','Rodolfo Fadel','lockman.estefania@example.net','2023-03-23 01:29:00','$2y$10$BOF5oU6EKbnIAmJqK5Jq5OPTgehifz8MHq5SfT2AZhP/zpzitMptm','2',1,NULL,'JS7Nr5vHCk','IT.SYSTEM',NULL,'2023-03-23 01:29:00','2023-03-23 01:29:00'),(2,'0002','Mrs. Magdalena McClure','jose.kulas@example.com','2023-03-23 01:29:00','$2y$10$BOF5oU6EKbnIAmJqK5Jq5OPTgehifz8MHq5SfT2AZhP/zpzitMptm','2',1,NULL,'w78CWrlFVt','IT.SYSTEM',NULL,'2023-03-23 01:29:00','2023-03-23 01:29:00'),(3,'0002','Zella Klein','floy23@example.net','2023-03-23 01:29:00','$2y$10$BOF5oU6EKbnIAmJqK5Jq5OPTgehifz8MHq5SfT2AZhP/zpzitMptm','2',1,NULL,'RLmCVSkJgd','IT.SYSTEM',NULL,'2023-03-23 01:29:00','2023-03-23 01:29:00'),(4,'0001','joincoder','joincoder@gmail.com','2023-03-23 01:29:00','$2y$10$BOF5oU6EKbnIAmJqK5Jq5OPTgehifz8MHq5SfT2AZhP/zpzitMptm','1',1,NULL,'5QCOOIlilf','IT.SYSTEM',NULL,'2023-03-23 01:29:00','2023-03-23 01:29:00'),(5,'0003','admin','admin@gmail.com','2023-03-23 01:29:00','$2y$10$BOF5oU6EKbnIAmJqK5Jq5OPTgehifz8MHq5SfT2AZhP/zpzitMptm','1',1,NULL,'ixVBmf7Irr','IT.SYSTEM',NULL,'2023-03-23 01:29:00','2023-03-23 01:29:00'),(6,'0001','COFFEE','COFFEE@gmail.com',NULL,'$2y$10$BOF5oU6EKbnIAmJqK5Jq5OPTgehifz8MHq5SfT2AZhP/zpzitMptm','1',1,'0f2ca9d0-c955-11ed',NULL,'joincoder@gmail.com',NULL,NULL,NULL),(7,'0001','CODE','CODE@gmail.com',NULL,'$2y$10$mNUew8cDm0A6kRjlL7mlHezb3ZE7BbCkKKw59g4uXqX.vUwepBTNO','1',0,'8852d088-c959-11ed',NULL,'COFFEE@gmail.com',NULL,NULL,NULL),(8,'0001','CODING','CODING@gmail.com',NULL,'$2y$10$BOVDLhPIurAQZKjJPMh60epQyB1rdDpLO9.onWez9SnFkx.5FKHnO','2',1,'27c13adc-c95b-11ed',NULL,'COFFEE@gmail.com',NULL,NULL,NULL);
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

-- Dump completed on 2023-03-24  9:35:56
