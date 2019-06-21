-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Salle
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

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
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms` (
  `ID` varchar(6) NOT NULL,
  `Name_Pg` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `accom` varchar(30) NOT NULL,
  `pic_num` int(11) NOT NULL,
  `ac` tinyint(1) NOT NULL,
  `tv` tinyint(1) NOT NULL,
  `bed` tinyint(1) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `food` tinyint(1) NOT NULL,
  `cooler` tinyint(1) NOT NULL,
  `water_cooler` tinyint(1) NOT NULL,
  `water_purifier` tinyint(1) NOT NULL,
  `bathroom` tinyint(1) NOT NULL,
  `electricity` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES ('RAI001','Brij Ghosan Sharma','Raipur','Kabirnagar','PG',2500,'Boys_Girls',9,0,0,1,0,0,0,0,0,1,1),('RAI002','Thakur Bhupendra Singh','Raipur','Kota','PG',2000,'Girls',6,0,0,1,0,0,1,0,0,1,1),('RAI003','Thakur Kuldeep Singh','Raipur','Kota','PG',1800,'Boys_Girls',2,0,0,1,0,0,0,0,0,1,1),('RAI004','Anshu Villa','Raipur','Kota','PG',4000,'Girls',8,1,0,1,1,1,1,1,1,1,1),('RAI005','Madhuri Nigam','Raipur','Hanuman Nagar','Flat',11000,'Boys',6,0,0,0,0,0,0,0,0,1,0),('RAI006','Queens Palace','Raipur','Hanuman Nagar','PG',4000,'Girls',6,0,1,1,1,1,1,1,1,0,1),('RAI007','Prerna Girls Hostel','Raipur','Hanuman Nagar','PG',2000,'Girls',7,0,0,1,1,0,1,1,1,1,1),('RAI008','Sandhya Girls Hostel','Raipur','Hanuman Nagar','PG',2000,'Girls',7,0,0,1,1,0,1,1,1,1,1),('RAI009','Ashiyana','Raipur','Sidhart Chowk','PG',1500,'Girls',9,0,1,1,1,0,1,1,1,1,1),('RAI010','Asha Guest House','Raipur','Pachpedi Naka','Flat',12000,'Family',6,0,0,0,1,0,0,0,0,1,0);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-01 20:55:38
