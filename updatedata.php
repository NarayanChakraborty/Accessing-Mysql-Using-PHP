<?php
require_once 'login.php';
$db_server=mysql_connect($db_hostname,$db_username,$db_password);
if(!$db_server) die("Unable to connect to MySQL:".mysq.error());
mysql_select_db($db_database)
or die("Unable to select database:".mysql.error());
$query="Update cats set name='Tiger' where name='Leo'";
$result=mysql_query($query);
if(!$result) die("Database access failed:".mysql_error());

?>	