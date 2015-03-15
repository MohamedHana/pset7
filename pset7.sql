-- MySQL dump 10.14  Distrib 5.5.32-MariaDB, for Linux (i686)
--
-- Host: localhost    Database: pset7
-- ------------------------------------------------------
-- Server version	5.5.32-MariaDB

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
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history` (
  `transaction_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id` int(10) unsigned NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `shares` int(11) NOT NULL,
  `price` decimal(6,2) unsigned NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`transaction_id`,`id`),
  KEY `id` (`id`),
  CONSTRAINT `history_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` VALUES (20,20,'Buy','abc',2,78.14,'2014-09-07 08:47:53'),(21,20,'Buy','amd',5,4.15,'2014-09-07 08:48:00'),(22,20,'Buy','ssl',1,59.73,'2014-09-07 08:48:21'),(23,20,'Sell','amd',5,4.15,'2014-09-07 08:48:37'),(24,20,'Sell','All',5,100.00,'2014-09-07 09:03:56'),(25,41,'Buy','abc',1,78.14,'2014-09-07 09:14:24'),(26,41,'Buy','amd',2,4.15,'2014-09-07 09:14:38'),(27,41,'Buy','dde',3,1.15,'2014-09-07 09:14:50'),(28,41,'Sell','All',6,89.89,'2014-09-07 09:15:10'),(29,41,'Buy','abc',3,78.14,'2014-09-07 09:15:34'),(30,41,'Buy','amd',2,4.15,'2014-09-07 09:15:47'),(31,41,'Buy','dde',1,1.15,'2014-09-07 09:15:56'),(32,41,'Sell','All',6,100.00,'2014-09-07 09:16:50'),(33,41,'Buy','ssl',1,59.73,'2014-09-07 09:17:31'),(34,41,'Buy','mcr',2,9.10,'2014-09-07 09:18:27'),(35,41,'Sell','All',3,77.93,'2014-09-07 09:18:41'),(36,41,'Buy','ssl',1,59.73,'2014-09-07 09:24:51'),(37,41,'Buy','mcr',2,9.10,'2014-09-07 09:25:00'),(38,41,'Sell','All',3,77.93,'2014-09-07 09:25:33'),(39,41,'Buy','amd',1,4.15,'2014-09-07 09:42:35'),(40,8,'Buy','abc',2,78.14,'2014-09-07 11:38:48'),(41,8,'Buy','abc',2,78.14,'2014-09-07 15:20:26'),(42,8,'Buy','dde',3,1.15,'2014-09-07 15:20:53'),(43,8,'Sell','dde',3,1.15,'2014-09-07 15:22:12'),(44,8,'Buy','ssl',5,59.73,'2014-09-07 15:22:24'),(45,6,'Buy','abc',1,78.14,'2014-09-08 05:20:08'),(46,6,'Buy','amd',3,4.15,'2014-09-08 05:20:16'),(47,6,'Buy','dde',5,1.15,'2014-09-08 05:20:26'),(48,6,'Buy','dde',5,1.15,'2014-09-08 05:20:27'),(49,6,'Buy','ssl',8,59.73,'2014-09-08 05:20:38'),(50,6,'Sell','amd',3,4.15,'2014-09-08 06:34:27'),(51,6,'Buy','abc',4,78.18,'2014-09-08 10:55:29'),(52,8,'Sell','All',9,100.00,'2014-09-08 11:18:45'),(53,43,'Buy','amd',2,4.15,'2014-09-08 11:51:23'),(54,43,'Buy','dde',2,1.17,'2014-09-08 12:06:39'),(55,43,'Buy','dde',4,1.18,'2014-09-08 12:19:30'),(56,43,'Buy','dde',4,1.18,'2014-09-08 12:32:30'),(57,43,'Buy','ssl',6,59.04,'2014-09-08 12:39:53'),(58,43,'Buy','abc',2,78.53,'2014-09-08 12:42:11'),(59,6,'Buy','sap',3,78.43,'2014-09-08 13:59:16'),(60,6,'Buy','abc',3,78.36,'2014-09-08 14:08:58'),(61,6,'Buy','dde',3,1.18,'2014-09-08 15:34:34'),(62,6,'Sell','abc',8,78.35,'2014-09-08 15:52:24'),(63,6,'Buy','goog',5,100.00,'2014-09-08 15:57:59'),(64,6,'Buy','goog',5,100.00,'2014-09-08 16:00:00'),(65,6,'Sell','ssl',8,58.88,'2014-09-08 16:04:41'),(66,6,'Sell','sap',3,78.04,'2014-09-08 16:08:11'),(67,6,'Sell','All',23,100.00,'2014-09-08 16:15:34'),(68,44,'Buy','goog',2,1177.96,'2014-09-08 16:53:47'),(69,44,'Buy','abc',4,78.43,'2014-09-08 16:54:26'),(70,44,'Buy','dde',20,1.18,'2014-09-08 16:54:57'),(71,44,'Buy','amd',5,4.14,'2014-09-08 16:55:31'),(72,44,'Buy','ssl',3,58.78,'2014-09-08 16:57:38'),(73,44,'Sell','abc',4,78.39,'2014-09-08 17:01:49'),(74,44,'Sell','dde',20,1.18,'2014-09-08 17:11:38'),(75,44,'Buy','amd',8,4.13,'2014-09-08 17:19:10'),(76,44,'Sell','goog',2,589.72,'2014-09-08 17:51:06');
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cash` decimal(65,4) unsigned NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'caesar','','$1$50$GHABNWBNE/o4VL7QjmQ6x0',10000.0000),(2,'hirschhorn','','$1$50$lJS9HiGK6sphej8c4bnbX.',10000.0000),(3,'jharvard','','$1$50$RX3wnAMNrGIbgzbRYrxM1/',10000.0000),(4,'malan','','$1$HA$azTGIMVlmPi9W9Y12cYSj/',10000.0000),(5,'milo','','$1$HA$6DHumQaK4GhpX8QE23C8V1',10000.0000),(6,'skroob','','$1$50$euBi4ugiJmbpIbvTTfmfI.',10878.7360),(7,'zamyla','','$1$50$uwfqB45ANW.9.6qaQ.DcF.',10000.0000),(8,'mohamed','','$1$qpFnJl8S$ZxratVhBPNxtfkaElJHt6/',9995.7400),(10,'ahmed','','$1$pdTWAhrF$B6WEgHCMGM7lGXmisd7hz0',9527.0100),(12,'ali','','$1$qTGDxYkt$oMd3pNKK4d7Ejifr8QSUf/',10000.0000),(13,'karim','','$1$e8lTrfqu$688hmnIPDCWu79ZbQgc6e1',9806.3700),(14,'mostafa','','$1$b5Pypk2m$QODytIHgRv.aepOIeA/Mp1',10000.0000),(15,'noor','','$1$TVDBKL2g$3XjnawNr1FlrM/Tedzx0w.',10000.0000),(16,'hala','','$1$eWXnOdKC$YOGixKHzi6gh8jPTisCF00',10000.0000),(17,'sara','','$1$LpqKU550$q2PM/1jOruBgW.bP4m6j/1',10000.0000),(18,'mahmoud','','$1$w5fxUiCK$a1DfaqkzJ4JDAzXJa7Uhb1',10000.0000),(19,'hend','','$1$X4IcXpk1$Nt4c3NVN9iEF/cMKzY25h/',9140.4600),(20,'heba','','$1$.GcF/aPb$QGBWaA9eLjHyon2RRw0gl.',10000.0000),(21,'amna','','$1$Ctesetmf$RdnuVC7tN26eJ/guPcMqB0',10000.0000),(23,'nada','','$1$pIbLmpAL$TaLPY8l.jHbbNeWCEpy0U1',10000.0000),(25,'yaser','','$1$vkxFsVzh$fek2J9r/XYaMrF3IAqwp11',10000.0000),(27,'sameh','','$1$OCUtHPT4$mwVdiygqy0qQs.4uY/mEw1',10000.0000),(29,'reda','','$1$ES1uy3hL$bWaw6AN6AC0BC6NFKE4Vz1',10000.0000),(31,'medo','','$1$sZYS/H/j$Go4BfA5A8Q31fTBNcIj2w/',10000.0000),(33,'ezzat','','$1$z4Ylg5ab$MIJTFioRz8T2aFdP8uphP1',10000.0000),(35,'mona','','$1$WFIBedFV$OepnQPIGV25GPO5UUfmsd1',10000.0000),(37,'noha','','$1$n0NE8aJq$geNOGqbke5NhSQaLaOuC31',10000.0000),(39,'karel','','$1$olh.jTkh$3YypABOW5nlxbgbPR7Dwz.',10000.0000),(41,'yara','','$1$53ly7YQL$0EYMqvJDR4RaHNLzpkOTT1',9995.8500),(42,'ibrahim','','$1$Mm0.WKbS$UqT5m0LfJ1UelIK6ywvNy/',10000.0000),(43,'jemy','mohamed.hana0@gmail.com','$1$qSgVX/ge$LqX/Pg8xmxvebhgFkHp2x.',9468.6274),(44,'coder','mohamed.hana1@yahoo.com','$1$8NviCk/U$OFbPfG7if9mZXIvyUCXoj0',9769.7250);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_data`
--

DROP TABLE IF EXISTS `users_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_data` (
  `id` int(10) unsigned NOT NULL,
  `symbol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `shares` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`symbol`),
  CONSTRAINT `users_data_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_data`
--

LOCK TABLES `users_data` WRITE;
/*!40000 ALTER TABLE `users_data` DISABLE KEYS */;
INSERT INTO `users_data` VALUES (7,'abc',2),(10,'abc',2),(10,'amd',2),(13,'abc',2),(13,'amd',2),(19,'abc',11),(41,'amd',1),(43,'abc',2),(43,'amd',2),(43,'dde',10),(43,'ssl',6),(44,'amd',13),(44,'ssl',3);
/*!40000 ALTER TABLE `users_data` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-08 17:55:10
