<?php
include "./connection.php";
if(isset($_POST["fcmtoken"]))
{
  $tkn=mysqli_real_escape_string($con,$_POST["fcmtoken"]);
  $inqry="insert into token(token) values ('$tkn')";
  mysqli_query($con,$inqry);
}
?>