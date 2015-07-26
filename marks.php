<?php
$conn = mysql_connect(localhost,sairam,sairam);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'INSERT INTO mentee '.
       '(Name,Marks) '.
       'VALUES (uname,marks)';
	   mysql_conn($conn);
	   ?>