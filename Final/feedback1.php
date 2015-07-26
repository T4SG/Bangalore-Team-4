<?php
$k = $_POST['mentee'];
$l = $_POST['mentor'];
$a = $_POST['one'];
$b = $_POST['two'];
$c = $_POST['three'];
$d= $_POST['four'];
$avg= ($a+$b+$c+$d)/4;
$query="insert into feedback values('$k','$l','$avg')";
$result = mysql_query($query);
echo "over all rating is:$avg ";
?>