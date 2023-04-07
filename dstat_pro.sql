-- MySQL dump 10.19  Distrib 10.3.28-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: dstat_pro
-- ------------------------------------------------------
-- Server version	10.3.28-MariaDB

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
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `redirect` text NOT NULL,
  `expiring` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,'BlazingCloud','https://i.imgur.com/lyx2AR4.gif','https://blazingcloud.pro/','101621795250'),(2,'Vtoxicity','https://i.imgur.com/sVKyoHg.gif','https://vtoxicity.net/','1622328419'),(3,'Nstresser','https://i.imgur.com/pxyXzDP.gif','https://nstresser.net/','1622366570'),(4,'Flood.to','https://i.imgur.com/amfruCd.gif','https://flood.to/','1622368749'),(5,'Vipbooter','https://i.imgur.com/yklfRYM.gif','https://www.vipbooter.city/','1622400026'),(6,'BOTTOM #2','/assets/images/dafaultbanner.png','',''),(7,'BOTTOM #3','/assets/images/dafaultbanner.png','',''),(8,'BOTTOM #4','/assets/images/dafaultbanner.png','','');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ddosforhire`
--

DROP TABLE IF EXISTS `ddosforhire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ddosforhire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site` text NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL,
  `ownerid` int(11) NOT NULL,
  `l3l4` int(11) NOT NULL,
  `l7` int(11) NOT NULL,
  `logging` int(11) NOT NULL,
  `api` int(11) NOT NULL,
  `payment` text NOT NULL,
  `status` int(11) NOT NULL,
  `lmodified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ddosforhire`
--

LOCK TABLES `ddosforhire` WRITE;
/*!40000 ALTER TABLE `ddosforhire` DISABLE KEYS */;
/*!40000 ALTER TABLE `ddosforhire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (3,'Welcome!','Welcome, dstat.pro is back again, now with new design and functions!','1621721417'),(7,'advertising','Banners available on dstat.pro, if you are interested contact us on telegram','1621837996');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket_answ`
--

DROP TABLE IF EXISTS `ticket_answ`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket_answ` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `supportID` text NOT NULL,
  `message` text NOT NULL,
  `date` text NOT NULL,
  `lastactivity` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket_answ`
--

LOCK TABLES `ticket_answ` WRITE;
/*!40000 ALTER TABLE `ticket_answ` DISABLE KEYS */;
/*!40000 ALTER TABLE `ticket_answ` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL,
  `date` text NOT NULL,
  `userID` text NOT NULL,
  `lastactivity` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tools_logs`
--

DROP TABLE IF EXISTS `tools_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tools_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `type` text NOT NULL,
  `value` text NOT NULL,
  `date` text NOT NULL,
  `ip` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=402 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tools_logs`
--

LOCK TABLES `tools_logs` WRITE;
/*!40000 ALTER TABLE `tools_logs` DISABLE KEYS */;
INSERT INTO `tools_logs` VALUES (282,4,'PING','1.1.1.1','1621765008','84.16.242.160'),(283,4,'PING','1.1.1.1','1621765009','84.16.242.160'),(284,4,'PING','1.1.1.1','1621765010','84.16.242.160'),(285,4,'PASSGEN','6','1621765481','84.16.242.160'),(286,4,'PASSGEN','6','1621765483','84.16.242.160'),(287,4,'PASSGEN','6','1621765483','84.16.242.160'),(288,4,'PASSGEN','6','1621765484','84.16.242.160'),(289,4,'PASSGEN','6','1621765484','84.16.242.160'),(290,4,'PASSGEN','6','1621765745','84.16.242.160'),(291,4,'PASSGEN','6','1621765747','84.16.242.160'),(292,4,'PASSGEN','6','1621765748','84.16.242.160'),(293,4,'PASSGEN','6','1621765748','84.16.242.160'),(294,4,'PASSGEN','6','1621765749','84.16.242.160'),(295,4,'PASSGEN','6','1621765767','84.16.242.160'),(296,4,'PASSGEN','6','1621765767','84.16.242.160'),(297,4,'PASSGEN','6','1621765767','84.16.242.160'),(298,4,'PASSGEN','6','1621765899','84.16.242.160'),(299,4,'PASSGEN','6','1621765900','84.16.242.160'),(300,4,'PASSGEN','6','1621765901','84.16.242.160'),(301,4,'PASSGEN','6','1621765902','84.16.242.160'),(302,4,'PASSGEN','6','1621765902','84.16.242.160'),(303,4,'PASSGEN','6','1621765902','84.16.242.160'),(304,4,'PASSGEN','6','1621765903','84.16.242.160'),(305,4,'PASSGEN','6','1621765903','84.16.242.160'),(306,4,'PASSGEN','6','1621765903','84.16.242.160'),(307,4,'PASSGEN','6','1621765903','84.16.242.160'),(308,4,'PASSGEN','6','1621765903','84.16.242.160'),(309,4,'PASSGEN','6','1621765904','84.16.242.160'),(310,4,'PASSGEN','6','1621765904','84.16.242.160'),(311,4,'PASSGEN','6','1621765905','84.16.242.160'),(312,4,'PASSGEN','6','1621765906','84.16.242.160'),(313,4,'PASSGEN','6','1621765906','84.16.242.160'),(314,4,'PASSGEN','6','1621765906','84.16.242.160'),(315,4,'PASSGEN','6','1621765906','84.16.242.160'),(316,4,'PASSGEN','6','1621765906','84.16.242.160'),(317,4,'PASSGEN','6','1621765916','84.16.242.160'),(318,4,'PASSGEN','6','1621765916','84.16.242.160'),(319,4,'PASSGEN','6','1621765917','84.16.242.160'),(320,4,'PASSGEN','6','1621765917','84.16.242.160'),(321,4,'PASSGEN','6','1621765917','84.16.242.160'),(322,4,'PASSGEN','6','1621765919','84.16.242.160'),(323,4,'PASSGEN','6','1621765920','84.16.242.160'),(324,4,'PASSGEN','6','1621765920','84.16.242.160'),(325,4,'PASSGEN','6','1621765920','84.16.242.160'),(326,4,'PASSGEN','6','1621765932','84.16.242.160'),(327,4,'PASSGEN','6','1621765933','84.16.242.160'),(328,4,'PASSGEN','6','1621765934','84.16.242.160'),(329,4,'PASSGEN','6','1621765934','84.16.242.160'),(330,4,'PASSGEN','6','1621765935','84.16.242.160'),(331,4,'PASSGEN','6','1621765935','84.16.242.160'),(332,4,'PASSGEN','6','1621765972','84.16.242.160'),(333,4,'PASSGEN','6','1621765982','84.16.242.160'),(334,4,'PASSGEN','6','1621766010','84.16.242.160'),(335,4,'PASSGEN','6','1621766020','84.16.242.160'),(336,4,'PASSGEN','6','1621766109','84.16.242.160'),(337,4,'PING','1.1.1.1','1621766119','84.16.242.160'),(338,4,'PING','1.1.1.1','1621766207','84.16.242.160'),(339,4,'PING','1.1.1.1','1621766226','84.16.242.160'),(340,4,'PING','1.1.1.1','1621766236','84.16.242.160'),(341,4,'WHOIS','google.com','1621766295','84.16.242.160'),(342,4,'WHOIS','google.com','1621766472','84.16.242.160'),(343,0,'GEOIP','1.1.1.1','1621766656','77.173.50.88'),(344,0,'PASSGEN','6','1621771123','91.150.113.33'),(345,4,'PASSGEN','6','1621771137','91.150.113.33'),(346,4,'PING','1.1.1.1','1621771600','91.150.113.33'),(347,4,'WHOIS','google.com','1621771611','91.150.113.33'),(348,4,'GEOIP','1.1.1.1','1621771625','91.150.113.33'),(349,4,'PASSGEN','6','1621771635','91.150.113.33'),(350,4,'PING','1.1.1.1','1621771728','91.150.113.33'),(351,4,'WHOIS','google.com','1621771739','91.150.113.33'),(352,4,'PING','1.1.1.1','1621771793','91.150.113.33'),(353,4,'PASSGEN','23','1621771808','91.150.113.33'),(354,4,'PING','1.1.1.1','1621772785','91.150.113.33'),(355,4,'PING','1.1.1.1','1621772788','91.150.113.33'),(356,4,'PING','1.1.1.1','1621772791','91.150.113.33'),(357,4,'PING','1.1.1.1','1621772896','91.150.113.33'),(358,4,'PING','1.1.1.1','1621772899','91.150.113.33'),(359,0,'PING','1.1.1.1','1621772909','91.150.113.33'),(360,0,'PING','1.1.1.1','1621772919','91.150.113.33'),(361,0,'WHOIS','google.com','1621772944','91.150.113.33'),(362,0,'WHOIS','google.com','1621772954','91.150.113.33'),(363,4,'WHOIS','google.com','1621772969','91.150.113.33'),(364,4,'WHOIS','google.com','1621772972','91.150.113.33'),(365,0,'PING','1.1.1.1','1621776471','46.193.3.219'),(366,0,'WHOIS','daaa.com&amp;key=d','1621776496','46.193.3.219'),(367,0,'WHOIS','daaa.com%26key=d','1621776509','46.193.3.219'),(368,12,'WHOIS','google.com','1621778565','178.79.46.150'),(369,12,'PING','8.8.8.8','1621778586','178.79.46.150'),(370,4,'PASSGEN','6','1621781877','91.150.113.33'),(371,4,'PASSGEN','6','1621781880','91.150.113.33'),(372,4,'PASSGEN','6','1621781986','91.150.113.33'),(373,4,'PASSGEN','6','1621781989','91.150.113.33'),(374,0,'PING','8.8.8.8','1621782242','2a03:1b20:a:f011::2d'),(375,0,'PING','179.43.175.74','1621782260','2a03:1b20:a:f011::2d'),(376,4,'PING','179.43.175.74','1621792894','91.150.113.33'),(377,0,'WHOIS','google.com','1621800390','81.19.208.115'),(378,0,'HASH GEN','lol','1621805666','77.173.50.88'),(379,0,'PASSGEN','6','1621822188','95.168.120.15'),(380,0,'PASSGEN','18','1621822199','95.168.120.15'),(381,0,'WHOIS','Xnxx.com','1621822270','95.168.120.15'),(382,0,'HASH GEN','Kkkkkkkk','1621824677','46.155.36.72'),(383,12,'WHOIS','velocitynode.net','1621828008','178.79.46.150'),(384,12,'WHOIS','dstat.pro','1621828064','178.79.46.150'),(385,12,'WHOIS','cyber-hub.pw','1621828078','178.79.46.150'),(386,12,'WHOIS','cyber-hub.pw','1621828088','178.79.46.150'),(387,12,'WHOIS','stressit.wtf','1621828100','178.79.46.150'),(388,12,'WHOIS','stressit.wtf','1621828701','178.79.46.150'),(389,12,'WHOIS','stressit.wtf','1621829302','178.79.46.150'),(390,0,'HASH GEN','165413405','1621854485','178.221.46.10'),(391,0,'GET STRING BEFORE','165413405 before s','1621854496','178.221.46.10'),(392,0,'PASSGEN','60','1621854507','178.221.46.10'),(393,0,'PASSGEN','6','1621865236','2a02:a443:9d1a:1:1f7:fe43:4727:265a'),(394,0,'GEOIP','8.8.8.8','1621869124','193.32.127.155'),(395,4,'PASSGEN','6','1621884639','109.92.200.65'),(396,4,'PASSGEN','6','1621884642','109.92.200.65'),(397,0,'PASSGEN','29','1621925735','2001:fb1:160:3166:51e5:66f:8d6f:751c'),(398,0,'PASSGEN','60','1621976256','78.190.140.24'),(399,0,'DELETE DUPLICATE LINES','|| wget','1622062536','145.239.26.249'),(400,0,'WHOIS','nstresser.net','1622200980','176.41.27.103'),(401,0,'WHOIS','nstresser.net','1622206868','176.41.27.103');
/*!40000 ALTER TABLE `tools_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_logs`
--

DROP TABLE IF EXISTS `user_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` text NOT NULL,
  `username` text NOT NULL,
  `action` text NOT NULL,
  `date` text NOT NULL,
  `ip` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_logs`
--

LOCK TABLES `user_logs` WRITE;
/*!40000 ALTER TABLE `user_logs` DISABLE KEYS */;
INSERT INTO `user_logs` VALUES (65,'0','HAZZE','User logged in!','1621771131','91.150.113.33'),(66,'0','HAZZE','User logged in!','1621772961','91.150.113.33'),(67,'0','HAZZE','User logged in!','1621779217','91.150.113.33'),(68,'0','4','User failed login!','1621782141','2a03:1b20:a:f011::2d'),(69,'0','HAZZE','User failed login!','1621792867','91.150.113.33'),(70,'0','HAZZE','User logged in!','1621792871','91.150.113.33'),(71,'0','HAZZE','User failed login!','1621795186','91.150.113.33'),(72,'0','HAZZE','User logged in!','1621795190','91.150.113.33'),(73,'0','RootSec','User logged in!','1621799698','162.55.57.21'),(74,'0','Shegspir','User logged in!','1621826612','178.79.46.150'),(75,'0','HAZZE','User failed login!','1621877321','109.92.200.65'),(76,'0','HAZZE','User logged in!','1621877324','109.92.200.65'),(77,'0','stfu123','User registered!','1621879312','89.38.99.188'),(78,'0','stfu123','User logged in!','1621879320','89.38.99.188'),(79,'0','HAZZE','User logged in!','1621962187','91.150.113.149'),(80,'0','RootSec','User logged in!','1622011302','89.216.127.19'),(81,'0','HAZZE','User logged in!','1622047253','93.86.125.162'),(82,'0','HAZZE','User failed login!','1622132826','178.221.100.48'),(83,'0','HAZZE','User logged in!','1622132832','178.221.100.48'),(84,'0','wefwefwe','User registered!','1622141544','84.16.242.160'),(85,'0','HAZZE','User logged in!','1622141888','84.16.242.160');
/*!40000 ALTER TABLE `user_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `registerdate` text NOT NULL,
  `telegram` text NOT NULL,
  `fullname` text NOT NULL,
  `website` text NOT NULL,
  `rank` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'HAZZE','hazze.dev@gmail.com','b1770d59ff4411430054fb694ca204ea','1621546719','@hqzzz','Hazze Hazze','dstat.pro',5),(10,'RootSec','rootsec@blazingcloud.pro','97e6102181b289b7c25c7464631a70ff','1621731900','','','',5),(11,'0x0FF','0x0FF@lightstress.pw','6702795563fc58f4825f71fcd36f698c','1621755181','','','',0),(12,'Shegspir','shegspir@dstat.pro','10c71d879b9e1fadf292dcec3b9b5397','1621757767','@shegspir','Shegspir Shegspir','dstat.pro',5),(15,'stfu123','stfu123@gmail.com','3e48a8f669e289c371c4138b2c79ecf4','1621879312','','','',0),(16,'wefwefwe','wefwefwe@asfas.ccc','a77bec4436fee72325819fddc3d280d0','1622141544','','','',0);
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

-- Dump completed on 2021-05-30 12:02:52
