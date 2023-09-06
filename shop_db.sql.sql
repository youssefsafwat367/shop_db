-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: shop_db
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty` varchar(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (1,'16',' 4','423432','1'),(2,'16',' 4','423432','1'),(3,'16',' 16','423432','1'),(4,'16','','423432','1'),(5,'16','','423432','1'),(6,'16',' 7','17','1'),(7,'16',' 4','12','1'),(8,'16',' 5','16','1'),(9,'20',' 5','16','1');
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (0,'hello','2023-08-18 10:41:08'),(2,'GO TO SCHOOL ','2023-08-18 10:41:08'),(3,'Les Bases Airport','2023-08-18 10:41:08'),(4,'what are you doing','2023-08-18 10:41:08'),(5,'Fond du Lac County Airport','2023-08-18 10:41:08'),(6,'Northwest Florida Beaches International Airport','2023-08-18 10:41:08'),(7,'Diamantino Airport','2023-08-18 10:41:08'),(8,'Anápolis Airport','2023-08-18 10:41:08'),(9,'Rimatara Airport','2023-08-18 10:41:08'),(10,'Mulka Airport','2023-08-18 10:41:08'),(11,'Sur Airport','2023-08-18 10:41:08'),(12,'Elko Regional Airport','2023-08-18 10:41:08'),(13,'Malé International Airport','2023-08-18 10:41:08'),(14,'Narita International Airport','2023-08-18 10:41:08'),(15,'Salgado Filho Airport','2023-08-18 10:41:08'),(16,'Buta Zega Airport','2023-08-18 10:41:08'),(17,'Maury County Airport','2023-08-18 10:41:08'),(18,'Tougan Airport','2023-08-18 10:41:08'),(19,'Muskegon County Airport','2023-08-18 10:41:08'),(20,'Maiana Airport','2023-08-18 10:41:08'),(21,'Black Hills Airport-Clyde Ice Field','2023-08-18 10:41:08'),(22,'Amahai Airport','2023-08-18 10:41:08'),(23,'Amazon Bay Airport','2023-08-18 10:41:08'),(24,'Eskilstuna Airport','2023-08-18 10:41:08'),(25,'Whiteman Airport','2023-08-18 10:41:08'),(26,'Roland Garros Airport','2023-08-18 10:41:08'),(27,'Walgett Airport','2023-08-18 10:41:08'),(28,'Oktyabrskiy Airport','2023-08-18 10:41:08'),(29,'Fada N\'gourma Airport','2023-08-18 10:41:08'),(30,'Longdongbao Airport','2023-08-18 10:41:08'),(31,'Atsugi Naval Air Facility','2023-08-18 10:41:08'),(32,'Manzhouli Xijiao Airport','2023-08-18 10:41:08'),(33,'Blackpool International Airport','2023-08-18 10:41:09'),(34,'Daly River Airport','2023-08-18 10:41:09'),(35,'Qishn Airport','2023-08-18 10:41:09'),(36,'Diego Garcia Naval Support Facility','2023-08-18 10:41:09'),(37,'Cowarie Airport','2023-08-18 10:41:09'),(38,'Louisa County Airport/Freeman Field','2023-08-18 10:41:09'),(39,'Jacksonville Executive at Craig Airport','2023-08-18 10:41:09'),(40,'Turlatovo Airport','2023-08-18 10:41:09'),(41,'Buckeye Municipal Airport','2023-08-18 10:41:09'),(42,'Broadus Airport','2023-08-18 10:41:09'),(43,'Lordsburg Municipal Airport','2023-08-18 10:41:09'),(44,'Stephens County Airport','2023-08-18 10:41:09'),(45,'Wamena Airport','2023-08-18 10:41:09'),(46,'Kennett Memorial Airport','2023-08-18 10:41:09'),(47,'Ust-Nera Airport','2023-08-18 10:41:09'),(48,'Propriano Airport','2023-08-18 10:41:09'),(49,'Castle Airport','2023-08-18 10:41:09'),(50,'Cumaná (Antonio José de Sucre) Airport','2023-08-18 10:41:09'),(51,'Mukalla International Airport','2023-08-18 10:41:09'),(52,'Wau Airport','2023-08-18 10:41:09'),(53,'Lawrenceville Vincennes International Airport','2023-08-18 10:41:09'),(54,'Guillermo León Valencia Airport','2023-08-18 10:41:09'),(55,'Kuini Lavenia Airport','2023-08-18 10:41:09'),(56,'Girona Airport','2023-08-18 10:41:09'),(57,'Laoag International Airport','2023-08-18 10:41:09'),(58,'Adıyaman Airport','2023-08-18 10:41:09'),(59,'Baicheng Chang\'an Airport','2023-08-18 10:41:09'),(60,'Antsalova Airport','2023-08-18 10:41:09'),(61,'Santa Paula Airport','2023-08-18 10:41:09'),(62,'Seshutes Airport','2023-08-18 10:41:09'),(63,'Malmö Sturup Airport','2023-08-18 10:41:09'),(64,'Dorado Beach Airport','2023-08-18 10:41:09'),(65,'Gunnison Crested Butte Regional Airport','2023-08-18 10:41:09'),(66,'Manas International Airport','2023-08-18 10:41:09'),(67,'Sitka Rocky Gutierrez Airport','2023-08-18 10:41:09'),(68,'Waterloo Airport','2023-08-18 10:41:09'),(69,'Frankfurt am Main Airport','2023-08-18 10:41:09'),(70,'Antsirabe Airport','2023-08-18 10:41:09'),(71,'NASA Crows Landing Airport','2023-08-18 10:41:09'),(72,'Foshan Shadi Airport','2023-08-18 10:41:09'),(73,'Daup Airport','2023-08-18 10:41:09'),(74,'Huatugou Airport','2023-08-18 10:41:09'),(75,'Puerto Berrio Airport','2023-08-18 10:41:09'),(76,'Bismarck Municipal Airport','2023-08-18 10:41:09'),(77,'Lake Macquarie Airport','2023-08-18 10:41:09'),(78,'Dalnerechensk Airport','2023-08-18 10:41:09'),(79,'Inhaminga Airport','2023-08-18 10:41:09'),(80,'Bathurst Airport','2023-08-18 10:41:09'),(81,'Playa del Carmen Airport','2023-08-18 10:41:09'),(82,'Quillayute Airport','2023-08-18 10:41:09'),(83,'Rotorua Regional Airport','2023-08-18 10:41:09'),(84,'Enrique Malek International Airport','2023-08-18 10:41:09'),(85,'Arua Airport','2023-08-18 10:41:09'),(86,'Wasilla Airport','2023-08-18 10:41:09'),(87,'Barimunya Airport','2023-08-18 10:41:09'),(88,'Puerto Deseado Airport','2023-08-18 10:41:09'),(89,'Francis S Gabreski Airport','2023-08-18 10:41:09'),(90,'Lamar Municipal Airport','2023-08-18 10:41:09'),(91,'Flinders Island Airport','2023-08-18 10:41:09'),(92,'Edmonton City Centre (Blatchford Field) Airport','2023-08-18 10:41:09'),(93,'Camp Bastion Airport','2023-08-18 10:41:09'),(94,'Gothenburg City Airport','2023-08-18 10:41:09'),(95,'Sintang(Susilo) Airport','2023-08-18 10:41:09'),(96,'Kasungu Airport','2023-08-18 10:41:09'),(97,'Changhai Airport','2023-08-18 10:41:09'),(98,'Avenger Field','2023-08-18 10:41:09'),(99,'Vadsø Airport','2023-08-18 10:41:09'),(100,'Jefferson County International Airport','2023-08-18 10:40:12');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `total` float DEFAULT '0',
  `user_id` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1000,1,'2023-08-18 10:37:31'),(2,2000,2,'2023-08-18 10:37:31'),(3,3000,2,'2023-08-18 10:37:31'),(4,4000,2,'2023-08-18 10:37:31');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `category_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (6,'youssef','1778970780','1693931701.jpg',4),(16,'carot','423432','1693933111.jpg',2);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'youssef','youser@youser.com','123','user'),(2,'youssef','Keromamdouh2002@gmail.com','b2a85d6fa6272112db3ac069746079b7bdf7cded','user'),(3,'youssef@a.a','yousefsafwat367@gmail.com','b2a85d6fa6272112db3ac069746079b7bdf7cded','user'),(4,'eccsdvsd','yousefsafwat367@gmail.com','56c5ed849ba4e5ed8cfff7e02c7abb86ba9ae9c8','user'),(5,'youssef@a.a','yousefsafwat367@gmail.com','45284928ee8a3983097a420873d5ff98546228e6','user'),(6,'youssef','mo5295035@gmail.com','3db305389c427af3236a1d6df0781d401db08e7c','user'),(7,'youssef','yousefsafwat367@gmail.com','a0799cee7337dda15f6994e5699463d08665d949','user'),(8,'youssef','mo5295035@gmail.com','01dc9c40d93e300302c0bee80f7aaaa29f54d6e9','user'),(9,'youssef','yousefsafwat367@gmail.com','01dc9c40d93e300302c0bee80f7aaaa29f54d6e9','user'),(10,'youssef','yousefsafwat367@gmail.com','216352196d6af3e817799bd920adc04562e93978','admin'),(11,'youssef','yousefsafwat367214124@gmail.com','8ef4e15db88f04beda685345364b6565ff9a8535','user'),(12,'youssef','yousefsafwat367234235@gmail.com','01b307acba4f54f55aafc33bb06bbbf6ca803e9a','user'),(13,'youssef','yousefsafwat367qweqwrqw@gmail.com','b2a85d6fa6272112db3ac069746079b7bdf7cded','user'),(14,'youssef','yousefsafwat36778@gmail.com','01b307acba4f54f55aafc33bb06bbbf6ca803e9a','user'),(15,'youssef','yousefsafwat367235235235@gmail.com','b2a85d6fa6272112db3ac069746079b7bdf7cded','user'),(16,'youssef34','yousefsafwat3677789@gmail.com','01b307acba4f54f55aafc33bb06bbbf6ca803e9a','user'),(17,'youssef','yousefsafwat3677878@gmail.com','01b307acba4f54f55aafc33bb06bbbf6ca803e9a','admin'),(18,'hussein','yousefsafwat36789101112@gmail.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','user'),(21,'Ahmed','ksnsdbdjxb124@gmail.com','354a07b37cb36ff63651b9c2c3f2a6d58de51c75','user'),(22,'ahmed','ksnsdbdjxb1242414@gmail.com','e8248cbe79a288ffec75d7300ad2e07172f487f6','user');
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

-- Dump completed on 2023-09-07  0:03:30
