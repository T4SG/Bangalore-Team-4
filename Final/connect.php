<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'one');
define('DB_USER','sairam');
define('DB_PASSWORD','sairam');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$name = $_POST['name'];
$query = "INSERT INTO connect VALUES('$name')";
 $result = mysql_query($query);
 if($result)
{ echo "Successfully updated database"; } 
else { die('Error: '.mysql_error($con)); } 
mysql_close($con); 
?>