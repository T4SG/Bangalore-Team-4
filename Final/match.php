<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'jpmc');
define('DB_USER','sairam');
define('DB_PASSWORD','sairam');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$x=$_POST['id'];
$query="select loc,gender,lang from mentee where email='$x'";
//echo $query;
$result = mysql_query($query) or die(mysql_error());

for($i = 0; $array[$i] = mysql_fetch_assoc($result); $i++) ;
   
array_pop($array);

//print_r($array);
$a=$array[0]['loc'];
$b=$array[0]['gender'];
$c=$array[0]['lang'];
$result1 = mysql_query("select name from mentor where loc='$a' and gender='$b' and lang='$c' ");
for($j = 0; $array1[$j] = mysql_fetch_assoc($result1); $j++) ;
array_pop($array1);
$s=$array1[0]['name'];
echo "MATCH FOR $x IS $s";
?>