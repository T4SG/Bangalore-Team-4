
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'jpmc');
define('DB_USER','sairam');
define('DB_PASSWORD','sairam');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$name = $_POST['uname'];
$pwd=$_POST['pwd'];
$result1 = mysql_query("select password from mentor where email='$name' ");
//for($j = 0; $array1[$j] = mysql_fetch_assoc($result1); $j++) ;
//array_pop($array1);
//$s=$array1[0]['uname'];
//$t=$array1[0]['pwd'];
function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}
if( $pwd==$t)
{
redirect('mentor_dash.html', false);
}
?>
