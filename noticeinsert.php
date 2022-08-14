<?php
include 'connection.php';
if(isset($_POST['submit']))
{
  $desc=mysqli_real_escape_string($con,$_POST['desc']);
  if($desc!="")
  {
    $inqry="insert into notice(text) values ('$desc')";
    mysqli_query($con,$inqry);
  }
  header('location:redirection.php');
}
?>