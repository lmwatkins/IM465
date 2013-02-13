<?php

//db_connect.php

require_once 'login.php';

// connect to mysql database

$db_server = mysql_connect($db_hostname, $db_username, $db_password);

// check connection

if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());

// select database
mysql_select_db($db_database) or die("Unable to select database: " . mysql_error());

?>