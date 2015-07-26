<?php
$k = $_POST['mentee'];
$s = $_POST['mentor'];
$a = $_POST['one'];
$b = $_POST['two'];
$c = $_POST['three'];
$d= $_POST['four'];
$avg= ($a+$b+$c+$d)/4;
$query="INSERT INTO feedback VALUES('$k','$s','$avg')";
$result = mysql_query($query);
echo "over all rating is:$avg ";
?>