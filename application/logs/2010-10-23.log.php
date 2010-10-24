<?php defined('SYSPATH') or die('No direct script access.'); ?>

2010-10-23 22:17:02 -07:00 --- error: Uncaught Kohana_Exception: The requested view, stores/index, could not be found in file system/core/Kohana.php on line 1162
2010-10-23 23:07:03 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'name' in 'field list' - SELECT `id`, `name`
FROM (`customers`)
WHERE `store_id` = '1'
ORDER BY `customers`.`id` ASC
LIMIT 0, 20 in file system/libraries/drivers/Database/Mysql.php on line 371
