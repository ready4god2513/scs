-- MySQL dump 10.13  Distrib 5.1.44, for apple-darwin8.11.1 (i386)
--
-- Host: localhost    Database: store
-- ------------------------------------------------------
-- Server version	5.1.44

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
-- Table structure for table `attributes`
--

DROP TABLE IF EXISTS `attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attributes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attributes`
--

LOCK TABLES `attributes` WRITE;
/*!40000 ALTER TABLE `attributes` DISABLE KEYS */;
/*!40000 ALTER TABLE `attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit_trails`
--

DROP TABLE IF EXISTS `audit_trails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit_trails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `object_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit_trails`
--

LOCK TABLES `audit_trails` WRITE;
/*!40000 ALTER TABLE `audit_trails` DISABLE KEYS */;
INSERT INTO `audit_trails` VALUES (1,0,1,'categories','index',0,'2010-10-27 03:38:28','2010-10-27 03:38:28'),(2,0,1,'categories','edit',0,'2010-10-27 03:40:17','2010-10-27 03:40:17'),(3,0,1,'categories','edit',0,'2010-10-27 03:46:15','2010-10-27 03:46:15'),(4,0,1,'categories','edit',0,'2010-10-27 03:59:01','2010-10-27 03:59:02'),(5,0,1,'categories','edit',0,'2010-10-27 03:59:17','2010-10-27 03:59:17'),(6,0,1,'categories','edit',0,'2010-10-27 03:59:40','2010-10-27 03:59:40'),(7,0,1,'products','index',0,'2010-10-27 03:59:45','2010-10-27 03:59:45'),(8,0,1,'products','edit',0,'2010-10-27 03:59:46','2010-10-27 03:59:46'),(9,0,1,'orders','index',0,'2010-10-27 03:59:53','2010-10-27 03:59:53'),(10,0,1,'orders','show',0,'2010-10-27 03:59:54','2010-10-27 03:59:54'),(11,0,1,'products','index',0,'2010-10-27 03:59:56','2010-10-27 03:59:56'),(12,0,1,'blogs','index',0,'2010-10-27 03:59:57','2010-10-27 03:59:57'),(13,0,1,'blogs','edit',0,'2010-10-27 03:59:58','2010-10-27 03:59:58'),(14,0,1,'blogs','index',0,'2010-10-27 04:00:00','2010-10-27 04:00:00'),(15,0,1,'pages','index',0,'2010-10-27 04:00:01','2010-10-27 04:00:01'),(16,0,1,'pages','edit',0,'2010-10-27 04:00:02','2010-10-27 04:00:02'),(17,0,1,'pages','edit',0,'2010-10-27 04:00:23','2010-10-27 04:00:23'),(18,0,1,'pages','index',0,'2010-10-27 04:00:33','2010-10-27 04:00:33'),(19,0,1,'pages','edit',0,'2010-10-27 04:00:35','2010-10-27 04:00:35'),(20,0,1,'orders','index',0,'2010-10-27 04:00:38','2010-10-27 04:00:38'),(21,0,1,'products','index',0,'2010-10-27 04:04:12','2010-10-27 04:04:12'),(22,0,1,'products','edit',0,'2010-10-27 04:04:13','2010-10-27 04:04:13'),(23,0,1,'products','edit',0,'2010-10-27 04:36:42','2010-10-27 04:36:42'),(24,0,1,'orders','index',0,'2010-10-27 04:36:49','2010-10-27 04:36:49'),(25,0,1,'customers','index',0,'2010-10-27 04:36:50','2010-10-27 04:36:50'),(26,0,1,'orders','index',0,'2010-10-27 04:36:51','2010-10-27 04:36:51'),(27,0,1,'orders','index',0,'2010-10-27 04:43:12','2010-10-27 04:43:12'),(28,0,1,'products','index',0,'2010-10-27 04:43:13','2010-10-27 04:43:13'),(29,0,1,'products','edit',0,'2010-10-27 04:43:14','2010-10-27 04:43:14'),(30,0,1,'products','edit',0,'2010-10-27 04:44:29','2010-10-27 04:44:29'),(31,0,1,'customers','index',0,'2010-10-27 04:44:31','2010-10-27 04:44:31'),(32,0,1,'orders','index',0,'2010-10-27 04:44:32','2010-10-27 04:44:32'),(33,0,1,'orders','show',0,'2010-10-27 04:44:33','2010-10-27 04:44:33'),(34,0,1,'customers','index',0,'2010-10-27 04:44:36','2010-10-27 04:44:36'),(35,0,1,'products','index',0,'2010-10-27 04:44:37','2010-10-27 04:44:37'),(36,0,1,'blogs','index',0,'2010-10-27 04:44:38','2010-10-27 04:44:38'),(37,0,1,'blogs','edit',0,'2010-10-27 04:44:39','2010-10-27 04:44:39'),(38,0,1,'pages','index',0,'2010-10-27 04:44:40','2010-10-27 04:44:40'),(39,0,1,'pages','index',0,'2010-10-27 04:51:13','2010-10-27 04:51:13'),(40,0,1,'pages','edit',0,'2010-10-27 04:51:14','2010-10-27 04:51:14'),(41,0,1,'pages','index',0,'2010-10-27 04:51:16','2010-10-27 04:51:16'),(42,0,1,'blogs','index',0,'2010-10-27 04:51:19','2010-10-27 04:51:19'),(43,0,1,'blogs','edit',0,'2010-10-27 04:51:19','2010-10-27 04:51:19'),(44,0,1,'customers','index',0,'2010-10-27 04:51:21','2010-10-27 04:51:21'),(45,0,1,'orders','index',0,'2010-10-27 04:51:22','2010-10-27 04:51:22'),(46,0,1,'products','index',0,'2010-10-27 04:51:23','2010-10-27 04:51:23'),(47,0,1,'products','edit',0,'2010-10-27 04:51:24','2010-10-27 04:51:24'),(48,0,1,'products','edit',0,'2010-10-27 04:52:14','2010-10-27 04:52:14'),(49,0,1,'products','edit',0,'2010-10-27 05:00:24','2010-10-27 05:00:24'),(50,0,1,'products','edit',0,'2010-10-27 05:00:53','2010-10-27 05:00:53'),(51,0,1,'products','edit',0,'2010-10-27 05:01:21','2010-10-27 05:01:21'),(52,0,1,'products','edit',0,'2010-10-27 05:06:17','2010-10-27 05:06:17'),(53,0,1,'products','edit',0,'2010-10-27 05:06:18','2010-10-27 05:06:18'),(54,0,1,'products','edit',0,'2010-10-27 05:18:38','2010-10-27 05:18:38'),(55,0,1,'products','update',0,'2010-10-27 05:18:47','2010-10-27 05:18:47'),(56,0,1,'products','index',0,'2010-10-27 05:18:47','2010-10-27 05:18:47'),(57,0,1,'products','edit',0,'2010-10-27 05:18:48','2010-10-27 05:18:48'),(58,0,1,'pages','index',0,'2010-10-27 05:19:16','2010-10-27 05:19:16'),(59,0,1,'pages','index',0,'2010-10-27 05:19:19','2010-10-27 05:19:19'),(60,0,1,'blogs','index',0,'2010-10-27 05:19:20','2010-10-27 05:19:20'),(61,0,1,'products','index',0,'2010-10-27 05:19:22','2010-10-27 05:19:22'),(62,0,1,'categories','index',0,'2010-10-27 05:19:24','2010-10-27 05:19:24'),(63,0,1,'categories','edit',0,'2010-10-27 05:19:25','2010-10-27 05:19:25'),(64,0,1,'categories','index',0,'2010-10-27 05:19:39','2010-10-27 05:19:39'),(65,0,1,'categories','new_one',0,'2010-10-27 05:19:40','2010-10-27 05:19:40'),(66,0,1,'categories','create',0,'2010-10-27 05:21:50','2010-10-27 05:21:50'),(67,0,1,'categories','new_one',0,'2010-10-27 05:21:50','2010-10-27 05:21:50'),(68,0,1,'products','index',0,'2010-10-27 05:21:53','2010-10-27 05:21:53'),(69,0,1,'categories','index',0,'2010-10-27 05:21:55','2010-10-27 05:21:55'),(70,0,1,'categories','edit',0,'2010-10-27 05:21:57','2010-10-27 05:21:57'),(71,0,1,'categories','index',0,'2010-10-27 05:21:59','2010-10-27 05:21:59'),(72,0,1,'categories','index',0,'2010-10-27 05:22:41','2010-10-27 05:22:41'),(73,0,1,'products','index',0,'2010-10-27 05:22:43','2010-10-27 05:22:43'),(74,0,1,'products','edit',0,'2010-10-27 05:22:44','2010-10-27 05:22:44'),(75,0,1,'products','edit',0,'2010-10-27 05:23:47','2010-10-27 05:23:47'),(76,0,1,'products','index',0,'2010-10-27 05:23:49','2010-10-27 05:23:49'),(77,0,1,'categories','index',0,'2010-10-27 05:23:50','2010-10-27 05:23:50'),(78,0,1,'categories','index',0,'2010-10-27 05:24:11','2010-10-27 05:24:11'),(79,0,1,'categories','index',0,'2010-10-27 05:24:13','2010-10-27 05:24:13'),(80,0,1,'products','index',0,'2010-10-27 05:24:14','2010-10-27 05:24:14'),(81,0,1,'categories','index',0,'2010-10-27 05:24:14','2010-10-27 05:24:14'),(82,0,1,'categories','index',0,'2010-10-27 05:24:53','2010-10-27 05:24:53'),(83,0,1,'categories','index',0,'2010-10-27 05:24:58','2010-10-27 05:24:58'),(84,0,1,'categories','new_one',0,'2010-10-27 05:25:01','2010-10-27 05:25:01'),(85,0,1,'categories','new_one',0,'2010-10-27 05:31:41','2010-10-27 05:31:41'),(86,0,1,'products','index',0,'2010-10-27 05:31:42','2010-10-27 05:31:42'),(87,0,1,'products','edit',0,'2010-10-27 05:31:43','2010-10-27 05:31:43'),(88,0,1,'products','update',0,'2010-10-27 05:31:55','2010-10-27 05:31:55'),(89,0,1,'products','index',0,'2010-10-27 05:31:55','2010-10-27 05:31:55'),(90,0,1,'products','edit',0,'2010-10-27 05:31:56','2010-10-27 05:31:56'),(91,0,1,'products','index',0,'2010-10-27 05:31:57','2010-10-27 05:31:57'),(92,0,1,'products','edit',0,'2010-10-27 05:31:58','2010-10-27 05:31:58'),(93,0,1,'products','update',0,'2010-10-27 05:32:01','2010-10-27 05:32:01'),(94,0,1,'products','index',0,'2010-10-27 05:32:01','2010-10-27 05:32:01'),(95,0,1,'products','edit',0,'2010-10-27 05:32:02','2010-10-27 05:32:02'),(96,0,1,'products','update',0,'2010-10-27 05:32:05','2010-10-27 05:32:05'),(97,0,1,'products','index',0,'2010-10-27 05:32:05','2010-10-27 05:32:05'),(98,0,1,'products','edit',0,'2010-10-27 05:32:06','2010-10-27 05:32:06'),(99,0,1,'products','update',0,'2010-10-27 05:32:09','2010-10-27 05:32:09'),(100,0,1,'products','index',0,'2010-10-27 05:32:09','2010-10-27 05:32:09'),(101,0,1,'dashboard','index',0,'2010-10-27 05:32:12','2010-10-27 05:32:12');
/*!40000 ALTER TABLE `audit_trails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `content` text NOT NULL,
  `synopsis` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `store` (`store_id`),
  CONSTRAINT `blogs_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,1,'Christmas Offering Preview','This Christmas we will be offering the already mentioned Oro Negro which is a Spanish-style roast (coffee roasted with sugar). Oro Negro will be the pinnacle of our Christmas offerings but also the more limited.  For the rest of you non-elitists we have come up with something special.  \n\nClose your eyes and think of a lion, a witch and a wardrobe because our next offering is called Turkish Delight. This blend will come pre-ground (for drip brewers) and spiced with cardamom.  The inspiration of this spiced blend came from enjoying a Turkish cup of coffee with some missionaries from Jordan.  Get ready for a memorable cup of coffee which will enchant your senses and also serve as a great gift!  \n\nThis offering will come packaged in a red foil valve-bag (for freshness) and a special holiday label.  November 1st through 21st we will be offering an “early bird” special to those who want to order coffee for the Christmas season.  Stay posted more details…','November 1st through 21st we will be offering an “early bird” special to those who want to order coffee for the Christmas season. ','2010-10-11 22:11:11','2010-10-18 17:12:44'),(2,1,'Espresso Blend','**After some experimenting** with different blends, Sara and I sat down to Star Wars Episode III.  \n\nWe reached for our cappuccinos, sipped and forgot about ObiWan and General Grevis.  The flavor we experienced took front stage and we  both agreed, the Force is strong in this blend.  \n\nHere is the blend summary… This is a three bean blend that has a very balanced character and body with some hints of carmel.  The overall flavor is sweet with a subtle acidic bite to make an exceptional cappuccino, latte, flavored drink, or just to have alone.  I will be offering espresso samples by request only; if you are interested, send me an email.','I will be offering espresso samples by request only; if you are interested, send me an email.','2010-10-11 22:45:54','2010-10-18 17:12:42');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart_items`
--

DROP TABLE IF EXISTS `cart_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_id` int(150) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_each` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `cart_id` (`cart_id`),
  CONSTRAINT `cart_items_cart` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart_items`
--

LOCK TABLES `cart_items` WRITE;
/*!40000 ALTER TABLE `cart_items` DISABLE KEYS */;
INSERT INTO `cart_items` VALUES (1,1,2,1,0,'2010-10-20 03:49:42','0000-00-00 00:00:00'),(2,1,3,1,0,'2010-10-20 05:53:59','0000-00-00 00:00:00'),(3,2,4,1,0,'2010-10-23 02:55:35','0000-00-00 00:00:00'),(4,9,3,1,0,'2010-10-27 03:14:38','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `cart_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `store` (`store_id`),
  KEY `customer_ind` (`customer_id`),
  CONSTRAINT `carts_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carts`
--

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
INSERT INTO `carts` VALUES (1,1,0,'2010-10-20 02:51:55','2010-10-20 02:51:55'),(2,1,0,'2010-10-23 02:55:29','0000-00-00 00:00:00'),(3,1,0,'2010-10-24 05:10:09','0000-00-00 00:00:00'),(4,1,0,'2010-10-24 06:45:46','0000-00-00 00:00:00'),(5,1,0,'2010-10-24 21:04:29','0000-00-00 00:00:00'),(6,1,0,'2010-10-25 02:46:56','0000-00-00 00:00:00'),(7,1,0,'2010-10-25 04:47:00','0000-00-00 00:00:00'),(8,1,0,'2010-10-26 05:10:32','0000-00-00 00:00:00'),(9,1,0,'2010-10-27 03:03:25','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL DEFAULT '',
  `slug` varchar(150) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` enum('published','hidden') NOT NULL DEFAULT 'published',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `store` (`store_id`),
  CONSTRAINT `categories_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (4,1,'Dark Roasts','dark-roasts',0,'published','2010-10-19 05:56:31','2010-10-27 03:29:38'),(5,1,'Light Roast','light-roasts',0,'published','2010-10-19 06:08:19','2010-10-19 06:08:19'),(6,1,'High Caffeine','high-caffeine',0,'published','2010-10-27 05:21:50','2010-10-27 05:21:50');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_products`
--

DROP TABLE IF EXISTS `categories_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories_products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_products`
--

LOCK TABLES `categories_products` WRITE;
/*!40000 ALTER TABLE `categories_products` DISABLE KEYS */;
INSERT INTO `categories_products` VALUES (0,4,3,'2010-10-27 05:18:47','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `categories_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coupons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `store` (`store_id`),
  CONSTRAINT `coupons_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupons`
--

LOCK TABLES `coupons` WRITE;
/*!40000 ALTER TABLE `coupons` DISABLE KEYS */;
/*!40000 ALTER TABLE `coupons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_addresses`
--

DROP TABLE IF EXISTS `customer_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_addresses`
--

LOCK TABLES `customer_addresses` WRITE;
/*!40000 ALTER TABLE `customer_addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_tokens`
--

DROP TABLE IF EXISTS `customer_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) unsigned NOT NULL,
  `customer_agent` varchar(40) NOT NULL,
  `token` varchar(32) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_customer_id` (`customer_id`),
  CONSTRAINT `customer_tokens_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_tokens`
--

LOCK TABLES `customer_tokens` WRITE;
/*!40000 ALTER TABLE `customer_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `email` varchar(127) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` char(50) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_customername` (`username`),
  UNIQUE KEY `uniq_email` (`email`),
  KEY `store` (`store_id`),
  CONSTRAINT `customers_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,1,'brandonh@ibethel.org','brandon','0d7a46209402870be223f88a1b56e4706744dd908b3807dbd1',2,1286930692,'2010-10-19 06:22:57','2010-10-19 06:25:25');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers_roles`
--

DROP TABLE IF EXISTS `customers_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers_roles` (
  `customer_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`customer_id`,`role_id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `customers_roles_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `customers_roles_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers_roles`
--

LOCK TABLES `customers_roles` WRITE;
/*!40000 ALTER TABLE `customers_roles` DISABLE KEYS */;
INSERT INTO `customers_roles` VALUES (1,1);
/*!40000 ALTER TABLE `customers_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `order_confirmation` text,
  `order_notification` text NOT NULL,
  `shipping_confirmation` text NOT NULL,
  `order_complete` text NOT NULL,
  `order_refunded` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `store` (`store_id`),
  CONSTRAINT `emails_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails`
--

LOCK TABLES `emails` WRITE;
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
INSERT INTO `emails` VALUES (1,1,'This is the order confirmation email.  ','I am letting you know that you have made a sale.','We have shipped your stuff.','Your order is complete.  Let us know if you have any questions.','We have refunded your order.  Sorry that everything didn\'t work out perfect for you.','2010-10-24 23:41:54','2010-10-24 23:41:54');
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgurl` varchar(150) DEFAULT NULL,
  `thumburl` varchar(150) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links`
--

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` VALUES (1,1,'products','Shop',0,'2010-10-20 03:42:12','0000-00-00 00:00:00'),(2,1,'page/about','About',1,'2010-10-20 03:42:29','0000-00-00 00:00:00'),(3,1,'blog','Blog',2,'2010-10-20 03:42:41','0000-00-00 00:00:00'),(4,1,'page/contact','Contact',3,'2010-10-20 03:42:55','0000-00-00 00:00:00'),(5,1,'cart','Cart',4,'2010-10-20 03:51:09','0000-00-00 00:00:00'),(6,1,'/','Home',-1,'2010-10-20 03:52:06','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `missing_pages`
--

DROP TABLE IF EXISTS `missing_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `missing_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `store` (`store_id`),
  CONSTRAINT `missing_pages_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `missing_pages`
--

LOCK TABLES `missing_pages` WRITE;
/*!40000 ALTER TABLE `missing_pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `missing_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_billing_shipping`
--

DROP TABLE IF EXISTS `order_billing_shipping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_billing_shipping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `type` enum('billing','shipping') NOT NULL,
  `first_name` varchar(75) NOT NULL,
  `last_name` varchar(75) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `postal_code` int(12) NOT NULL,
  `country` varchar(50) NOT NULL,
  `card_last_four` int(4) NOT NULL,
  `card_type` varchar(4) NOT NULL,
  `expiration_month` int(2) NOT NULL,
  `expiration_year` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_billing_shipping`
--

LOCK TABLES `order_billing_shipping` WRITE;
/*!40000 ALTER TABLE `order_billing_shipping` DISABLE KEYS */;
INSERT INTO `order_billing_shipping` VALUES (1,5,'billing','Brandon','Hansen','1390 College View Dr. #5','Redding','CA',96003,'United States',4456,'VISA',12,2012,'2010-10-23 04:01:47','2010-10-23 04:01:47'),(2,5,'shipping','Dave','Hansen','55 Essex Ct.','Oakley','CA',94561,'United States',0,'',0,0,'2010-10-23 04:02:36','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `order_billing_shipping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_comments`
--

DROP TABLE IF EXISTS `order_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `comment` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_comments`
--

LOCK TABLES `order_comments` WRITE;
/*!40000 ALTER TABLE `order_comments` DISABLE KEYS */;
INSERT INTO `order_comments` VALUES (1,5,'I need this order shipped to me as soon as possible, please','2010-10-24 04:54:22','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `order_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` VALUES (1,2,3,37.47,3,'2010-10-18 04:42:48','2010-10-18 04:42:48'),(2,2,4,11.99,1,'2010-10-18 04:42:48','2010-10-18 04:42:48'),(3,4,1,179.82,18,'2010-10-18 05:03:06','2010-10-18 05:03:06'),(4,4,2,16.98,2,'2010-10-18 05:03:06','2010-10-18 05:03:06'),(5,5,3,12.49,1,'2010-10-19 06:42:30','2010-10-19 06:42:30'),(6,5,4,11.99,1,'2010-10-19 06:42:30','2010-10-19 06:42:30'),(7,5,1,199.8,20,'2010-10-19 06:42:30','2010-10-19 06:42:30');
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_emails`
--

DROP TABLE IF EXISTS `order_emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `recipient` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_emails`
--

LOCK TABLES `order_emails` WRITE;
/*!40000 ALTER TABLE `order_emails` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_histories`
--

DROP TABLE IF EXISTS `order_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_histories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_histories`
--

LOCK TABLES `order_histories` WRITE;
/*!40000 ALTER TABLE `order_histories` DISABLE KEYS */;
INSERT INTO `order_histories` VALUES (1,4,'Started the order','2010-10-18 05:03:06','2010-10-18 05:03:06'),(2,4,'Payment Confirmed','2010-10-18 05:03:06','2010-10-18 05:03:06'),(3,5,'Started the order','2010-10-19 06:42:30','2010-10-19 06:42:30'),(4,5,'Payment Confirmed','2010-10-19 06:42:30','2010-10-19 06:42:30'),(5,5,'Order Complete','2010-10-24 05:10:46','2010-10-24 05:10:46'),(6,5,'Order Refunded','2010-10-24 05:10:54','2010-10-24 05:10:54'),(7,4,'Order Complete','2010-10-24 06:10:02','2010-10-24 06:10:02'),(8,1,'Order Shipped','2010-10-24 06:36:56','2010-10-24 06:36:56'),(9,1,'Sent Shipping Status to Customer','2010-10-24 06:36:56','2010-10-24 06:36:56'),(10,1,'Order Complete','2010-10-24 06:37:01','2010-10-24 06:37:01'),(11,1,'Order Complete','2010-10-24 06:37:13','2010-10-24 06:37:13'),(12,1,'Sent Order Complete Email to Customer','2010-10-24 06:37:13','2010-10-24 06:37:13'),(13,2,'Order Refunded','2010-10-24 06:43:59','2010-10-24 06:43:59'),(14,2,'Sent Refund Notice to Customer','2010-10-24 06:43:59','2010-10-24 06:43:59');
/*!40000 ALTER TABLE `order_histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` enum('new','declined','paid','shipped','complete','refunded') NOT NULL,
  `notes` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `store` (`store_id`),
  CONSTRAINT `orders_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,1,'complete','','2010-10-18 04:42:16','2010-10-23 06:13:09'),(2,1,0,'refunded','','2010-10-18 04:42:48','2010-10-23 06:12:12'),(4,1,0,'complete','','2010-10-18 05:03:06','2010-10-23 06:11:55'),(5,1,0,'refunded','','2010-10-19 06:42:30','2010-10-23 06:11:59');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_categories`
--

DROP TABLE IF EXISTS `page_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `store` (`store_id`),
  CONSTRAINT `page_categories_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_categories`
--

LOCK TABLES `page_categories` WRITE;
/*!40000 ALTER TABLE `page_categories` DISABLE KEYS */;
INSERT INTO `page_categories` VALUES (1,1,'information','2010-10-11 21:34:56','2010-10-11 21:34:56');
/*!40000 ALTER TABLE `page_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `page_category_id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `content` text NOT NULL,
  `synopsis` varchar(250) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `store` (`store_id`),
  CONSTRAINT `pages_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,1,1,'About','This is a bunch of stuff','',0,'2010-10-11 21:43:42','2010-10-18 17:12:47'),(2,1,1,'Contact','This is going to be a contact form','',0,'2010-10-11 21:49:39','2010-10-18 17:12:49');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL DEFAULT '',
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `store` (`store_id`),
  CONSTRAINT `products_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,1,0,'Moka Java Blend','moka-java-blend','A single sip of this stuff and you will be hooked.',0,'2010-10-11 22:23:17','2010-10-27 05:32:05'),(2,1,0,'Swiss Water Decaf Brazilian','swiss-water-decaf-brazilian','Nunc tortor ligula, malesuada in blandit nec, rutrum in nulla. Nullam pharetra mattis justo, vel consequat sem ultrices vel. Integer tempus mauris et eros blandit ac fermentum mauris laoreet. Quisque pretium dolor quis erat fringilla eget scelerisque nulla aliquam. Pellentesque vel pellentesque arcu. Ut scelerisque interdum elit ut molestie. Nullam lobortis lectus sed neque mollis condimentum. Etiam sollicitudin justo at lectus porttitor sollicitudin. Praesent vel nisl non diam tristique rutrum. Donec viverra dictum dolor vel convallis. Duis ullamcorper dui a tellus auctor volutpat. Morbi felis dolor, accumsan vel laoreet eu, hendrerit at lorem.  Ut sollicitudin elementum nisl, in fermentum mi tincidunt eget. Fusce molestie nisl in ligula gravida posuere. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec vehicula suscipit leo at fringilla. Cras eget ligula enim, egestas pellentesque enim. Donec ut nibh id massa pellentesque porttitor accumsan non ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed semper sem non erat sodales hendrerit. Vivamus bibendum dapibus elit at volutpat. Cras mollis euismod malesuada. Cras a arcu eu dolor tincidunt congue ut et odio.',1,'2010-10-11 23:52:37','2010-10-27 05:32:09'),(3,1,1,'Oro Negro','oro-negro','This Christmas we will be offering the already mentioned Oro Negro which is a Spanish-style roast (coffee roasted with sugar). Oro Negro will be the pinnacle of our Christmas offerings but also the more limited.',-1,'2010-10-13 05:22:05','2010-10-27 05:31:55'),(4,1,0,'Turkish Delight','turkish-delight','For the rest of you non-elitists we have come up with something special.  Close your eyes and think of a lion, a witch and a wardrobe because our next offering is called Turkish Delight. This blend will come pre-ground (for drip brewers) and spiced with cardamom.  The inspiration of this spiced blend came from enjoying a Turkish cup of coffee with some missionaries from Jordan.  Get ready for a memorable cup of coffee which will enchant your senses and also serve as a great gift!  This offering will come packaged in a red foil valve-bag (for freshness) and a special holiday label.',-1,'2010-10-13 05:24:27','2010-10-27 05:32:01');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_variants`
--

DROP TABLE IF EXISTS `products_variants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_variants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `compare_price` float NOT NULL,
  `weight` float NOT NULL,
  `taxable` tinyint(4) NOT NULL DEFAULT '1',
  `physical` tinyint(4) NOT NULL DEFAULT '1',
  `track_stock` tinyint(4) NOT NULL DEFAULT '1',
  `stock` int(11) NOT NULL DEFAULT '0',
  `allow_out_of_stock_purchases` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_variants`
--

LOCK TABLES `products_variants` WRITE;
/*!40000 ALTER TABLE `products_variants` DISABLE KEYS */;
/*!40000 ALTER TABLE `products_variants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'login','Login privileges, granted after account confirmation'),(2,'admin','Administrative customer, has access to everything.');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles_customers`
--

DROP TABLE IF EXISTS `roles_customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles_customers` (
  `customer_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`customer_id`,`role_id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `roles_customers_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `roles_customers_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles_customers`
--

LOCK TABLES `roles_customers` WRITE;
/*!40000 ALTER TABLE `roles_customers` DISABLE KEYS */;
INSERT INTO `roles_customers` VALUES (1,1);
/*!40000 ALTER TABLE `roles_customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `store` (`store_id`),
  CONSTRAINT `sections_ibfk_1` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES (1,1,'main','2010-10-20 03:41:38','2010-10-20 03:41:38');
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `session_id` varchar(127) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('9df90fc9b7bd5b8f307ef039e40ae7be',1288158095,'c2Vzc2lvbl9pZHxzOjMyOiI5ZGY5MGZjOWI3YmQ1YjhmMzA3ZWYwMzllNDBhZTdiZSI7dG90YWxfaGl0c3xpOjE2NTtfa2ZfZmxhc2hffGE6MDp7fXVzZXJfYWdlbnR8czoxMjU6Ik1vemlsbGEvNS4wIChNYWNpbnRvc2g7IFU7IEludGVsIE1hYyBPUyBYIDEwXzZfNDsgZW4tVVMpIEFwcGxlV2ViS2l0LzUzNC43IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzcuMC41MTcuNDEgU2FmYXJpLzUzNC43IjtpcF9hZGRyZXNzfHM6OToiMTI3LjAuMC4xIjtsYXN0X2FjdGl2aXR5fGk6MTI4ODE1ODA5NTtjYXJ0XzF8czoxOiI5Ijs=');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stores`
--

DROP TABLE IF EXISTS `stores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `domain` varchar(150) NOT NULL,
  `active_theme_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stores`
--

LOCK TABLES `stores` WRITE;
/*!40000 ALTER TABLE `stores` DISABLE KEYS */;
INSERT INTO `stores` VALUES (1,'Stu\'s Coffee Shoppe','stu',1,'2010-10-18 17:07:30','2010-10-18 17:07:30'),(2,'Brandon\'s Car','brandon',1,'2010-10-20 05:30:20','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `stores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `store` (`store_id`),
  CONSTRAINT `tags_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `themes`
--

DROP TABLE IF EXISTS `themes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `themes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `store` (`store_id`),
  CONSTRAINT `themes_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `themes`
--

LOCK TABLES `themes` WRITE;
/*!40000 ALTER TABLE `themes` DISABLE KEYS */;
INSERT INTO `themes` VALUES (1,1,'scs','2010-10-14 04:31:13','2010-10-18 17:12:21'),(2,2,'scs','2010-10-20 05:37:32','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `themes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `variants`
--

DROP TABLE IF EXISTS `variants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `variants` (
  `id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `variants`
--

LOCK TABLES `variants` WRITE;
/*!40000 ALTER TABLE `variants` DISABLE KEYS */;
/*!40000 ALTER TABLE `variants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendors`
--

LOCK TABLES `vendors` WRITE;
/*!40000 ALTER TABLE `vendors` DISABLE KEYS */;
INSERT INTO `vendors` VALUES (1,1,'South African Coffee','2010-10-27 05:18:37','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `vendors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-10-26 22:41:50
