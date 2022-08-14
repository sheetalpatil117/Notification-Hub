<?php
include 'connection.php';
$id=$_GET["id"];
$tbl=$_GET["tbl"];
$loc=$_GET["loc"];
$dlqry="delete from {$tbl} where id=$id";
mysqli_query($con,$dlqry);
header("Location:{$loc}.php");
?>
