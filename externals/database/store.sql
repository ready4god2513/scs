SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) default NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `cart_items`;

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) default NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `carts`;

CREATE TABLE `carts` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) default NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) default NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `coupons`;

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) default NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `missing_pages`;

CREATE TABLE `missing_pages` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) default NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `order_billing_shipping`;

CREATE TABLE `order_billing_shipping` (
  `id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
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
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `order_comments`;

CREATE TABLE `order_comments` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) default NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `order_details`;

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(11) NOT NULL auto_increment,
  `status` enum('pending','complete','refunded') NOT NULL,
  `notes` text NOT NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `page_categories`;

CREATE TABLE `page_categories` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) default NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) NOT NULL auto_increment,
  `page_category_id` int(11) NOT NULL,
  `name` varchar(150) default NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `product_attributes`;

CREATE TABLE `product_attributes` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) default NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `product_files`;

CREATE TABLE `product_files` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) default NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `product_images`;

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) default NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) default NULL,
  `description` text NOT NULL,
  `short_description` varchar(500) NOT NULL,
  `marketing_description` varchar(250) NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `roles_users`;

CREATE TABLE `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `session_id` varchar(127) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY  (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) default NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `user_addresses`;

CREATE TABLE `user_addresses` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) default NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `user_tokens`;

CREATE TABLE `user_tokens` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(32) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `email` varchar(127) NOT NULL,
  `username` varchar(32) NOT NULL default '',
  `password` char(50) NOT NULL,
  `logins` int(10) unsigned NOT NULL default '0',
  `last_login` int(10) unsigned default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


SET FOREIGN_KEY_CHECKS = 1;
