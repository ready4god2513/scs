<?php defined('SYSPATH') or die('No direct script access.'); ?>

2010-10-20 08:29:08 -07:00 --- error: Uncaught Kohana_Exception: The requested view, themes//theme, could not be found in file system/core/Kohana.php on line 1162
2010-10-20 13:51:16 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Cannot add or update a child row: a foreign key constraint fails (`store/cart_items`, CONSTRAINT `cart_items_cart` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE) - INSERT INTO `cart_items` (`cart_id`, `product_id`, `quantity`) VALUES (0, 3, 1) in file system/libraries/drivers/Database/Mysql.php on line 371
2010-10-20 13:57:00 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Cannot add or update a child row: a foreign key constraint fails (`store/cart_items`, CONSTRAINT `cart_items_cart` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE) - INSERT INTO `cart_items` (`cart_id`, `product_id`, `quantity`) VALUES (0, 3, 1) in file system/libraries/drivers/Database/Mysql.php on line 371
2010-10-20 14:01:23 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Table 'store.kohana_sessions' doesn't exist - SELECT *
FROM (`kohana_sessions`)
WHERE `session_id` = '0be89d6438edff83e1518c731446a57c'
LIMIT 0, 1 in file system/libraries/drivers/Database/Mysql.php on line 371
