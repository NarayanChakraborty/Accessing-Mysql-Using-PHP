<?php
$result=mysql_query("SELECT * FROM Table_name");
if(!$result) di ("Database access failed".mysql_error());
?>