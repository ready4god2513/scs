/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50144
 Source Host           : localhost
 Source Database       : store

 Target Server Type    : MySQL
 Target Server Version : 50144
 File Encoding         : utf-8

 Date: 10/15/2010 15:51:06 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `blogs`
-- ----------------------------
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `content` text NOT NULL,
  `synopsis` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `blogs`
-- ----------------------------
BEGIN;
INSERT INTO `blogs` VALUES ('1', 'Christmas Offering Preview', 'This Christmas we will be offering the already mentioned Oro Negro which is a Spanish-style roast (coffee roasted with sugar). Oro Negro will be the pinnacle of our Christmas offerings but also the more limited.  For the rest of you non-elitists we have come up with something special.  \n\nClose your eyes and think of a lion, a witch and a wardrobe because our next offering is called Turkish Delight. This blend will come pre-ground (for drip brewers) and spiced with cardamom.  The inspiration of this spiced blend came from enjoying a Turkish cup of coffee with some missionaries from Jordan.  Get ready for a memorable cup of coffee which will enchant your senses and also serve as a great gift!  \n\nThis offering will come packaged in a red foil valve-bag (for freshness) and a special holiday label.  November 1st through 21st we will be offering an “early bird” special to those who want to order coffee for the Christmas season.  Stay posted more details…', 'November 1st through 21st we will be offering an “early bird” special to those who want to order coffee for the Christmas season. ', '2010-10-11 15:11:11', '2010-10-13 12:02:34'), ('2', 'Espresso Blend', '**After some experimenting** with different blends, Sara and I sat down to Star Wars Episode III.  \n\nWe reached for our cappuccinos, sipped and forgot about ObiWan and General Grevis.  The flavor we experienced took front stage and we  both agreed, the Force is strong in this blend.  \n\nHere is the blend summary… This is a three bean blend that has a very balanced character and body with some hints of carmel.  The overall flavor is sweet with a subtle acidic bite to make an exceptional cappuccino, latte, flavored drink, or just to have alone.  I will be offering espresso samples by request only; if you are interested, send me an email.', 'I will be offering espresso samples by request only; if you are interested, send me an email.', '2010-10-11 15:45:54', '2010-10-13 12:52:34');
COMMIT;

-- ----------------------------
--  Table structure for `cart_items`
-- ----------------------------
DROP TABLE IF EXISTS `cart_items`;
CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_id` int(150) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `cart_items`
-- ----------------------------
BEGIN;
INSERT INTO `cart_items` VALUES ('1', '1', '1', '10', '2010-10-12 16:41:44', '2010-10-12 16:41:44'), ('11', '0', '4', '2', '2010-10-12 22:26:14', '0000-00-00 00:00:00'), ('12', '0', '1', '1', '2010-10-12 22:26:19', '0000-00-00 00:00:00'), ('13', '0', '2', '1', '2010-10-12 22:26:23', '0000-00-00 00:00:00');
COMMIT;

-- ----------------------------
--  Table structure for `carts`
-- ----------------------------
DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `carts`
-- ----------------------------
BEGIN;
INSERT INTO `carts` VALUES ('1', '1', '2010-10-12 16:40:29', '0000-00-00 00:00:00');
COMMIT;

-- ----------------------------
--  Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `categories_products`
-- ----------------------------
DROP TABLE IF EXISTS `categories_products`;
CREATE TABLE `categories_products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `coupons`
-- ----------------------------
DROP TABLE IF EXISTS `coupons`;
CREATE TABLE `coupons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `customer_addresses`
-- ----------------------------
DROP TABLE IF EXISTS `customer_addresses`;
CREATE TABLE `customer_addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `customer_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `customer_tokens`;
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

-- ----------------------------
--  Table structure for `customers`
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(127) NOT NULL,
  `customername` varchar(32) NOT NULL DEFAULT '',
  `password` char(50) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_customername` (`customername`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `customers`
-- ----------------------------
BEGIN;
INSERT INTO `customers` VALUES ('1', 'brandonh@ibethel.org', 'brandon', '0d7a46209402870be223f88a1b56e4706744dd908b3807dbd1', '2', '1286930692', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
COMMIT;

-- ----------------------------
--  Table structure for `missing_pages`
-- ----------------------------
DROP TABLE IF EXISTS `missing_pages`;
CREATE TABLE `missing_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `order_billing_shipping`
-- ----------------------------
DROP TABLE IF EXISTS `order_billing_shipping`;
CREATE TABLE `order_billing_shipping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `type` enum('billing','shipping') NOT NULL,
  `first_name` int(75) NOT NULL,
  `last_name` varchar(75) NOT NULL,
  `street_address` varchar(150) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `order_comments`
-- ----------------------------
DROP TABLE IF EXISTS `order_comments`;
CREATE TABLE `order_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `order_details`
-- ----------------------------
DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` enum('pending','complete','refunded') NOT NULL,
  `notes` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `page_categories`
-- ----------------------------
DROP TABLE IF EXISTS `page_categories`;
CREATE TABLE `page_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `page_categories`
-- ----------------------------
BEGIN;
INSERT INTO `page_categories` VALUES ('1', 'information', '2010-10-11 14:34:56', '2010-10-11 14:34:56');
COMMIT;

-- ----------------------------
--  Table structure for `pages`
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_category_id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `content` text NOT NULL,
  `synopsis` varchar(250) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `pages`
-- ----------------------------
BEGIN;
INSERT INTO `pages` VALUES ('1', '1', 'about', 'This is a bunch of stuff', '', '0', '2010-10-11 14:43:42', '2010-10-11 14:44:54'), ('2', '1', 'contact', 'This is going to be a contact form', '', '0', '2010-10-11 14:49:39', '2010-10-11 14:49:39');
COMMIT;

-- ----------------------------
--  Table structure for `product_attributes`
-- ----------------------------
DROP TABLE IF EXISTS `product_attributes`;
CREATE TABLE `product_attributes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `product_files`
-- ----------------------------
DROP TABLE IF EXISTS `product_files`;
CREATE TABLE `product_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `product_images`
-- ----------------------------
DROP TABLE IF EXISTS `product_images`;
CREATE TABLE `product_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `description` text NOT NULL,
  `short_description` varchar(500) NOT NULL,
  `marketing_description` varchar(250) NOT NULL,
  `price` float NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `products`
-- ----------------------------
BEGIN;
INSERT INTO `products` VALUES ('1', 'moka java blend', 'A single sip of this stuff and you will be hooked.', 'rich and bold with a clean finish', 'our boldest offering. not for sissies', '9.99', '0', '2010-10-11 15:23:17', '2010-10-11 15:23:17'), ('2', 'swiss water decaf brazilian', 'Nunc tortor ligula, malesuada in blandit nec, rutrum in nulla. Nullam pharetra mattis justo, vel consequat sem ultrices vel. Integer tempus mauris et eros blandit ac fermentum mauris laoreet. Quisque pretium dolor quis erat fringilla eget scelerisque nulla aliquam. Pellentesque vel pellentesque arcu. Ut scelerisque interdum elit ut molestie. Nullam lobortis lectus sed neque mollis condimentum. Etiam sollicitudin justo at lectus porttitor sollicitudin. Praesent vel nisl non diam tristique rutrum. Donec viverra dictum dolor vel convallis. Duis ullamcorper dui a tellus auctor volutpat. Morbi felis dolor, accumsan vel laoreet eu, hendrerit at lorem.  Ut sollicitudin elementum nisl, in fermentum mi tincidunt eget. Fusce molestie nisl in ligula gravida posuere. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec vehicula suscipit leo at fringilla. Cras eget ligula enim, egestas pellentesque enim. Donec ut nibh id massa pellentesque porttitor accumsan non ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed semper sem non erat sodales hendrerit. Vivamus bibendum dapibus elit at volutpat. Cras mollis euismod malesuada. Cras a arcu eu dolor tincidunt congue ut et odio.', 'for the coffee lover with plenty of energy to go around.  a great decaf blend.', 'decaf, but not at all weak', '8.49', '1', '2010-10-11 16:52:37', '2010-10-11 16:52:37'), ('3', 'Oro Negro', 'This Christmas we will be offering the already mentioned Oro Negro which is a Spanish-style roast (coffee roasted with sugar). Oro Negro will be the pinnacle of our Christmas offerings but also the more limited.', 'A spanish-style roast that is sure to pique your interest', 'Coffee roasted in sugar.  Need I say more?', '12.49', '-1', '2010-10-12 22:22:05', '2010-10-12 22:22:35'), ('4', 'Turkish Delight', 'For the rest of you non-elitists we have come up with something special.  Close your eyes and think of a lion, a witch and a wardrobe because our next offering is called Turkish Delight. This blend will come pre-ground (for drip brewers) and spiced with cardamom.  The inspiration of this spiced blend came from enjoying a Turkish cup of coffee with some missionaries from Jordan.  Get ready for a memorable cup of coffee which will enchant your senses and also serve as a great gift!  This offering will come packaged in a red foil valve-bag (for freshness) and a special holiday label.', 'Get ready for a memorable cup of coffee which will enchant your senses and also serve as a great gift!  This offering will come packaged in a red foil valve-bag (for freshness) and a special holiday label.', 'A pre-ground blend spiced with cardamom', '11.99', '-1', '2010-10-12 22:24:27', '2010-10-12 22:24:32');
COMMIT;

-- ----------------------------
--  Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `roles`
-- ----------------------------
BEGIN;
INSERT INTO `roles` VALUES ('1', 'login', 'Login privileges, granted after account confirmation'), ('2', 'admin', 'Administrative customer, has access to everything.');
COMMIT;

-- ----------------------------
--  Table structure for `roles_customers`
-- ----------------------------
DROP TABLE IF EXISTS `roles_customers`;
CREATE TABLE `roles_customers` (
  `customer_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`customer_id`,`role_id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `roles_customers_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `roles_customers_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `roles_customers`
-- ----------------------------
BEGIN;
INSERT INTO `roles_customers` VALUES ('1', '1');
COMMIT;

-- ----------------------------
--  Table structure for `sessions`
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `session_id` varchar(127) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `stores`
-- ----------------------------
DROP TABLE IF EXISTS `stores`;
CREATE TABLE `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `tags`
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `themes`
-- ----------------------------
DROP TABLE IF EXISTS `themes`;
CREATE TABLE `themes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `status` enum('disabled','active') NOT NULL DEFAULT 'disabled',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `themes`
-- ----------------------------
BEGIN;
INSERT INTO `themes` VALUES ('1', 'scs', 'active', '2010-10-13 21:31:13', '2010-10-13 21:32:28');
COMMIT;

