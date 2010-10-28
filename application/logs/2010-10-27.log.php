<?php defined('SYSPATH') or die('No direct script access.'); ?>

2010-10-27 20:34:00 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'name' in 'field list' - SELECT `id`, `name`
FROM (`carts`)
WHERE `store_id` = '1'
ORDER BY `carts`.`id` ASC
LIMIT 0, 20 in file system/libraries/drivers/Database/Mysql.php on line 371
