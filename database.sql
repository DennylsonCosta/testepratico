-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: testepratico
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2017_07_24_192619_problema1',1),(2,'2017_07_24_203059_problema2',2),(3,'2017_07_24_210409_problema3',3),(4,'2017_07_24_212156_problema4',4),(5,'2017_07_24_215510_problema5',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `problema1`
--

DROP TABLE IF EXISTS `problema1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `problema1` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dias` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `problema1`
--

LOCK TABLES `problema1` WRITE;
/*!40000 ALTER TABLE `problema1` DISABLE KEYS */;
INSERT INTO `problema1` VALUES (1,'Game of Thrones','professor',10,'2017-07-24 20:14:22','2017-07-24 20:14:22'),(2,'Harry Potter','aluno',3,'2017-07-24 20:14:36','2017-07-24 20:14:36');
/*!40000 ALTER TABLE `problema1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `problema2`
--

DROP TABLE IF EXISTS `problema2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `problema2` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numeros` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `problema2`
--

LOCK TABLES `problema2` WRITE;
/*!40000 ALTER TABLE `problema2` DISABLE KEYS */;
INSERT INTO `problema2` VALUES (1,'72,40,31,85,10,8,89,49,14,51,85,78,2,50,40,85,82,36,70,14,37,93,48,24,68','2017-07-24 23:02:00','2017-07-24 23:02:00');
/*!40000 ALTER TABLE `problema2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `problema3`
--

DROP TABLE IF EXISTS `problema3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `problema3` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altura` double(4,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `problema3`
--

LOCK TABLES `problema3` WRITE;
/*!40000 ALTER TABLE `problema3` DISABLE KEYS */;
INSERT INTO `problema3` VALUES (1,'Chico',1.50,'2017-07-24 21:07:26','2017-07-24 21:07:26'),(2,'Juca',1.10,'2017-07-24 21:07:33','2017-07-24 21:07:33');
/*!40000 ALTER TABLE `problema3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `problema4`
--

DROP TABLE IF EXISTS `problema4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `problema4` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `palavra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `problema4`
--

LOCK TABLES `problema4` WRITE;
/*!40000 ALTER TABLE `problema4` DISABLE KEYS */;
INSERT INTO `problema4` VALUES (1,'Sonho','2017-07-24 23:02:11','2017-07-24 23:02:11');
/*!40000 ALTER TABLE `problema4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `problema5`
--

DROP TABLE IF EXISTS `problema5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `problema5` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numeros` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `problema5`
--

LOCK TABLES `problema5` WRITE;
/*!40000 ALTER TABLE `problema5` DISABLE KEYS */;
INSERT INTO `problema5` VALUES (1,'1,13,55,21,5,83','2017-07-24 23:02:15','2017-07-24 23:02:15');
/*!40000 ALTER TABLE `problema5` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-24 23:02:37
