<?php defined('SYSPATH') or die('No direct script access.'); ?>

2010-10-19 20:40:22 -07:00 --- error: Uncaught Kohana_Database_Exception: There was an SQL error: Unknown column 'links.0' in 'order clause' - SELECT `links`.*
FROM (`links`)
WHERE `links`.`section_id` = 0
ORDER BY `links`.`0` ASC, `links`.`1` ASC
LIMIT 0, 20 in file system/libraries/drivers/Database/Mysql.php on line 371
2010-10-19 21:39:36 -07:00 --- error: Uncaught Kohana_Exception: Invalid method find_all_no_limit called in Product_Model in file system/libraries/ORM.php on line 257
