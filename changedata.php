<?php
include "./connection.php";
$selqry="select text from flag";
$eselqry=mysqli_query($con,$selqry);
$res=mysqli_fetch_array($eselqry);
echo $res["text"];
?>