-- MySQL dump 10.13  Distrib 5.7.36, for Win64 (x86_64)
--
-- Host: localhost    Database: biblio
-- ------------------------------------------------------
-- Server version	5.7.36

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `nomAd` varchar(30) DEFAULT NULL,
  `passwordAd` varchar(40) DEFAULT NULL,
  `emailAd` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'charlesatangana','atangana','atangana@mail.com');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cdes`
--

DROP TABLE IF EXISTS `cdes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cdes` (
  `IdCde` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `produits` varchar(200) NOT NULL DEFAULT '',
  `montantCde` float(10,2) unsigned NOT NULL DEFAULT '0.00',
  `nomPrenomCli` varchar(100) NOT NULL DEFAULT '',
  `adressecli` varchar(30) DEFAULT NULL,
  `dateCde` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`IdCde`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cdes`
--

LOCK TABLES `cdes` WRITE;
/*!40000 ALTER TABLE `cdes` DISABLE KEYS */;
INSERT INTO `cdes` VALUES (1,',2,3,6',23400.00,'elvira','sonkoue@elvira.com','2024-05-22 08:30:34'),(2,' ',8850.00,'yolie','murielle@mail.com','2024-05-26 05:37:35'),(3,' ',8850.00,'yolie','murielle@mail.com','2024-05-26 05:37:50'),(4,' ',8850.00,'yolie','murielle@mail.com','2024-05-26 05:38:27'),(5,' ',8850.00,'yolie','murielle@mail.com','2024-05-26 05:40:09'),(6,' ',8850.00,'yolie','murielle@mail.com','2024-05-26 05:40:18'),(7,' ',8850.00,'yolie','murielle@mail.com','2024-05-26 05:42:15'),(8,' ',8850.00,'yolie','murielle@mail.com','2024-05-26 05:42:21'),(9,' ,REF001,REF004',8850.00,'yolie','murielle@mail.com','2024-05-26 05:52:37'),(10,' ,REF001,REF004',8850.00,'yolie','murielle@mail.com','2024-05-26 05:53:16'),(11,' ,REF004',3850.00,'yolie','murielle@mail.com','2024-05-26 05:54:15'),(12,' ,REF003,REF004',7466.67,'yolie','murielle@mail.com','2024-05-26 05:55:40'),(13,' ,REF003,REF004',7466.67,'yolie','murielle@mail.com','2024-05-26 05:56:13'),(14,' ,REF003,REF004',7466.67,'yolie','murielle@mail.com','2024-05-26 05:57:09'),(15,' ,REF001',3500.00,'yolie','murielle@mail.com','2024-05-26 05:58:18'),(16,' ,REF001,REF005',9000.00,'yolie','murielle@mail.com','2024-05-26 06:01:46'),(17,' ,REF002',9000.00,'yolie','murielle@mail.com','2024-05-26 09:21:16');
/*!40000 ALTER TABLE `cdes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(25) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'elvira','sonkoue','sonkoue@elvira.com'),(2,'yolie','yolie','murielle@mail.com'),(3,'kateesther','kate','kate@esther.com');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `livres`
--

DROP TABLE IF EXISTS `livres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `livres` (
  `codeLivre` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ISBN` char(16) DEFAULT NULL,
  `auteur` char(30) DEFAULT NULL,
  `titre` char(60) DEFAULT NULL,
  `stock` tinyint(3) unsigned DEFAULT NULL,
  `pu` float(10,2) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `REF` varchar(30) DEFAULT NULL,
  `photo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`codeLivre`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `livres`
--

LOCK TABLES `livres` WRITE;
/*!40000 ALTER TABLE `livres` DISABLE KEYS */;
INSERT INTO `livres` VALUES (1,'978-2-300-014147','Marcel B.','Algebre lineaire',10,2500.00,'la reference pour accompagner votre pratique de mathematique lors des examens et dans la vie reel','REF001','livre1.jpg'),(2,'978-2-300-023918','Luke Welling','PHP&MySQL 2eme Edition',14,4000.00,'le livre le plus intriguant de toute la collection','REF002','livre2.jpg'),(3,'978-2-300-012435','Jean Laloi','Droits des Societes',30,3616.67,'la juridique et moi en un','REF003','livre3.jpg'),(4,'978-2-300-034152','Oban Guema','Lettres africaines',6,2850.00,'tous pour le developpement du pays','REF004','livre4.jpg'),(5,'978-2-300-087363','HelRiegel','Management des organisations',11,3000.00,'l\'economie est un art qui neccessite beaucoup de pratique','REF005','livre5.jpg'),(6,'978-2-300-013525','Gandouin','Redaction adn. en afrique',16,3100.00,'l\'afrique dans toute sa splendeur','REF006','livre6.jpg');
/*!40000 ALTER TABLE `livres` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-07-06 19:41:14
