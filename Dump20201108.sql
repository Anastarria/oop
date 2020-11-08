-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: calling
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `author_email` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (20,'Can I update it now?','makesure@gmail.com','2020-11-07 23:24:28','Yes!'),(22,'Karma','makesure@gmail.com','2020-11-08 10:51:12','Ð’ÑÐµ ÐµÐ¼Ñƒ Ð¿Ð¾ÐºÐ¾Ñ€Ð¸Ñ‚ÑÑ: Ð·Ð²ÐµÑ€ÑŒ, Ñ†Ð²ÐµÑ‚, Ð»Ð¸ÑÑ‚, Ð¿Ñ‚Ð¸Ñ†Ð°; Ð¶ÐµÐ»ÐµÐ·Ð¾, Ð¿Ñ€Ð¾Ñ‡Ð½Ñ‹Ð¹ Ð¼ÐµÑ‡ - Ð½Ð¸Ñ‡Ñ‚Ð¾ Ð½Ðµ ÑƒÐ±ÐµÑ€ÐµÑ‡ÑŒ. ÐŸÐ¾Ð¹Ð¼Ð¸: Ð½Ð°ÑˆÐ° Ð´Ð¾Ð»Ñ - Ð¿Ñ€Ð¸Ð½ÑÑ‚ÑŒ ÐµÐ³Ð¾ Ð²Ð¾Ð»ÑŽ.');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'karma@gmail.com','iUe3D£R8ARu','2020-11-02 19:30:13'),(2,'tired@gmail.com','feE*efehg','2020-11-02 19:30:45'),(4,'session@gmail.com','9fc676427cb5a836639e5bec97518ee1','2020-11-05 17:07:40'),(7,'makesure@gmail.com','97db1846570837fce6ff62a408f1c26a','2020-11-05 17:56:29'),(9,'cocococombo@gmail.com','97db1846570837fce6ff62a408f1c26a','2020-11-07 16:29:43'),(10,'dovakin@gmail.com','97db1846570837fce6ff62a408f1c26a','2020-11-07 16:32:16');
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

-- Dump completed on 2020-11-08 13:34:20
