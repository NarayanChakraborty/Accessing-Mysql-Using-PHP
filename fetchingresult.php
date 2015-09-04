<?php
require_once 'login.php';
$db_server=mysql_connect($db_hostname,$db_username,$db_password);
if(!$db_server) die("Unable to connect to MySQL:" .mysql_error());
mysql_select_db($db_database)
or die("Unable to select database:".mysql.error());
$query="SELECT * FROM classes";
$result=mysql_query($query);
if(!$result) die("Database access field".mysql_error());
rows=mysql_num_rows($result);
for($j=0;$j<rows;++$j)
{
  echo 'Author: '.mysql_result($result,$j,'author').'<br>';
  echo 'Title:  '.mysql_result($result,$j,'title').'<br>';
  echo 'Category:'.mysql_result($result,$j,'category').'<br>';
  echo 'Year:  '.mysql_result($result,$j,'year').'<br>';
  echo 'ISBN:  '.mysql_result($result,$j,'isbn').'<br><br>';
}
?>