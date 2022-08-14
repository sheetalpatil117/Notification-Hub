<?php

$username="root";
$password=""; //password needed in production-jd
$server='localhost';
$db='notification';             

$con=mysqli_connect($server,$username,$password,$db);
if(!$con)
header('location:index.php');

?>