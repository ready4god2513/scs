<?php defined('SYSPATH') or die('No direct script access.'); ?>

2010-11-01 20:58:26 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'name' in 'field list' - SELECT `id`, `name`
FROM (`orders`)
WHERE `store_id` = '1'
ORDER BY `orders`.`created_at` DESC
LIMIT 0, 20 in file system/libraries/drivers/Database/Mysql.php on line 371
2010-11-01 20:59:19 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'name' in 'field list' - SELECT `id`, `name`
FROM (`orders`)
WHERE `store_id` = '1'
ORDER BY `orders`.`created_at` DESC
LIMIT 0, 20 in file system/libraries/drivers/Database/Mysql.php on line 371
2010-11-01 20:59:52 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'name' in 'field list' - SELECT `id`, `name`
FROM (`orders`)
WHERE `store_id` = '1'
ORDER BY `orders`.`created_at` DESC
LIMIT 0, 20 in file system/libraries/drivers/Database/Mysql.php on line 371
2010-11-01 23:44:05 -07:00 --- error: Uncaught PHP Error: Argument 2 passed to Cart_Model::update_quantity() must be an instance of Variant_Model, integer given, called in /Users/ready4god2513/Documents/workspace/scs/application/models/cart.php on line 71 and defined in file application/models/cart.php on line 91
2010-11-01 23:45:55 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Cannot add or update a child row: a foreign key constraint fails (`store`.`cart_items`, CONSTRAINT `cart_items_cart` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE) - INSERT INTO `cart_items` (`cart_id`, `product_id`, `quantity`, `variant_id`, `created_at`, `updated_at`) VALUES (0, 5, 1, 0, '2010-11-01 23:45:55', '2010-11-01 23:45:55') in file system/libraries/drivers/Database/Mysql.php on line 371
2010-11-01 23:56:23 -07:00 --- error: Uncaught Kohana_Exception: The variant property does not exist in the Product_Model class. in file system/libraries/ORM.php on line 364
