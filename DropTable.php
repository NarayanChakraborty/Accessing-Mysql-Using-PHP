<?php
require_once 'login.php';
$db_server=mysql_connect($db_hostname,$db_username,$db_password);
if(!$db_server)die("Unable to connect to Mysql:".mysql_error());
mysql_select_db($db_database)
or die("Unable to select database:".mysql_error());
$query="DROP TABLE cats";
$query=mysql_query($query);
if(!$query) die("Database acces failed".mysql_error());
?>