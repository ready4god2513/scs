<?php defined('SYSPATH') or die('No direct script access.'); ?>

2010-10-15 15:26:44 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'created_at' in 'order clause' - SELECT `users`.*
FROM (`users`)
ORDER BY `created_at` DESC
LIMIT 0, 20 in file system/libraries/drivers/Database/Mysql.php on line 371
