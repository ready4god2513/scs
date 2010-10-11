<?php defined('SYSPATH') or die('No direct script access.'); ?>

2010-10-11 13:46:11 -07:00 --- error: Uncaught PHP Error: mysql_connect() [<a href='function.mysql-connect'>function.mysql-connect</a>]: Can't connect to local MySQL server through socket '/Applications/MAMP/tmp/mysql/mysql.sock' (2) in file system/libraries/drivers/Database/Mysql.php on line 61
2010-10-11 14:05:40 -07:00 --- error: Uncaught Kohana_Exception: The requested view, /admin/pages/new, could not be found in file system/core/Kohana.php on line 1162
2010-10-11 14:24:35 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'title' in 'where clause' - SELECT `pages`.*
FROM (`pages`)
WHERE `title` = 'contact'
ORDER BY `pages`.`id` ASC
LIMIT 0, 1 in file system/libraries/drivers/Database/Mysql.php on line 371
