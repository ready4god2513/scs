<?php defined('SYSPATH') or die('No direct script access.'); ?>

2010-10-18 10:10:36 -07:00 --- error: Uncaught Kohana_Exception: The requested view, themes//application, could not be found in file system/core/Kohana.php on line 1162
2010-10-18 10:10:39 -07:00 --- error: Uncaught Kohana_Exception: The requested view, themes//application, could not be found in file system/core/Kohana.php on line 1162
2010-10-18 10:38:17 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Table 'store.emails' doesn't exist - SHOW COLUMNS FROM `emails` in file system/libraries/drivers/Database/Mysql.php on line 371
2010-10-18 11:13:35 -07:00 --- error: Uncaught Kohana_Exception: The requested view, themes//application, could not be found in file system/core/Kohana.php on line 1162
2010-10-18 11:14:33 -07:00 --- error: Uncaught Kohana_Exception: The requested view, themes//application, could not be found in file system/core/Kohana.php on line 1162
2010-10-18 11:15:40 -07:00 --- error: Uncaught Kohana_Exception: The requested view, themes//application, could not be found in file system/core/Kohana.php on line 1162
2010-10-18 11:19:41 -07:00 --- error: Uncaught Kohana_Exception: The requested view, themes//application, could not be found in file system/core/Kohana.php on line 1162
2010-10-18 22:40:00 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'product_attributes.product_id' in 'where clause' - SELECT `product_attributes`.*
FROM (`product_attributes`)
WHERE `product_attributes`.`product_id` = 0
ORDER BY `product_attributes`.`id` ASC
LIMIT 0, 20 in file system/libraries/drivers/Database/Mysql.php on line 371
2010-10-18 22:52:09 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Cannot add or update a child row: a foreign key constraint fails (`store`.`products`, CONSTRAINT `products_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE) - INSERT INTO `products` (`name`, `description`, `short_description`, `marketing_description`, `price`, `updated_at`) VALUES ('', '', '', '', 0.000000, '2010-10-18 22:52:09') in file system/libraries/drivers/Database/Mysql.php on line 371
2010-10-18 22:53:15 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Cannot add or update a child row: a foreign key constraint fails (`store`.`categories`, CONSTRAINT `categories_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE) - INSERT INTO `categories` (`name`, `updated_at`) VALUES ('Dark Roasts', '2010-10-18 22:53:15') in file system/libraries/drivers/Database/Mysql.php on line 371
2010-10-18 22:55:02 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Cannot add or update a child row: a foreign key constraint fails (`store`.`categories`, CONSTRAINT `categories_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE) - INSERT INTO `categories` (`name`, `updated_at`) VALUES ('Dark Roast', '2010-10-18 22:55:02') in file system/libraries/drivers/Database/Mysql.php on line 371
2010-10-18 22:55:16 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Cannot add or update a child row: a foreign key constraint fails (`store`.`categories`, CONSTRAINT `categories_store` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE) - INSERT INTO `categories` (`name`, `updated_at`) VALUES ('Dark Roast', '2010-10-18 22:55:16') in file system/libraries/drivers/Database/Mysql.php on line 371
