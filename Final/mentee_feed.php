<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'jpmc');
define('DB_USER','sairam');
define('DB_PASSWORD','sairam');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$t=$_POST['emid'];
$query="select y,r from feedback where x='$t' ";
$result = mysql_query($query) or die(mysql_error());
for($i = 0; $array[$i] = mysql_fetch_assoc($result); $i++) ;
array_pop($array);
$a=$array[0]['y'];
$b=$array[0]['r'];
echo "$a gave $b rating to $x";
?>