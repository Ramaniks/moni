<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-02-18 10:27:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH/views/html/movement/add.php [ 13 ]
2011-02-18 13:15:06 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''NULL' ORDER BY `equities`.`id` ASC' at line 1 [ SELECT `equities`.* FROM `equities` WHERE `parent_id` IS 'NULL' ORDER BY `equities`.`id` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 179 ]