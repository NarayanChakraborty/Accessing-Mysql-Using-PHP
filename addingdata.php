<?php
require_once 'login.php';
$db_server=mysql_connect($db_hostname,$db_username,$db_password);
if(!$db_server) die ("Unable to connect mysql_server");
mysql_select_db($db_database) or die("Unable to select database".mysql_error());
$query="INSERT INTO cats Values(NULL,'Lion','Leo',4)";
$result=mysql_query($query);
if(!$result) die ("Database access failed:".mysq_error());
?>