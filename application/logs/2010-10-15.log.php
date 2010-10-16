<?php defined('SYSPATH') or die('No direct script access.'); ?>

2010-10-15 15:26:44 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'created_at' in 'order clause' - SELECT `users`.*
FROM (`users`)
ORDER BY `created_at` DESC
LIMIT 0, 20 in file system/libraries/drivers/Database/Mysql.php on line 371
2010-10-15 15:49:19 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'created_at' in 'order clause' - SELECT `customers`.*
FROM (`customers`)
ORDER BY `created_at` DESC
LIMIT 0, 20 in file system/libraries/drivers/Database/Mysql.php on line 371
2010-10-15 16:00:35 -07:00 --- error: Uncaught Kohana_Exception: The requested config file, app_site, could not be found in file system/core/Kohana.php on line 1162
