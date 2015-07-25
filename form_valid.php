<?php 
extract($_POST);
$log=0;
$db=mysql_connect("127.0.0.1","root","jalisatgi3!");
mysql_select_db("jpmc") or die(mysql_error());

$q = mysql_query("SELECT pass FROM users WHERE user='$username'");
$db_pass = mysql_result($q, 0);

if(md5($password) == $db_pass)
{
    echo 1;
}

else echo 0;



/*

$query="SELECT * FROM users Where name='$username' AND pass='$password'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_ASSOC);
foreach ($row as $key => $value) {
	echo "<h2> $key ---------> $value </h2><br /><br />";
	/*if(strcmp($key,"pass")==0)
		if(strcmp($value,'$password')==0)
			$log=1;

echo '$log';
}
*/
?>