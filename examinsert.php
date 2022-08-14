<?php
include 'connection.php';
if(isset($_POST['submit']))
{
  $desc=mysqli_real_escape_string($con,$_POST['exname']);
  $date=mysqli_real_escape_string($con,$_POST['date']);
  $time=mysqli_real_escape_string($con,$_POST['time']);
  if($desc!="" && $date!="" && $time!="")
  {
    $inqry="insert into exam(description,date,time) values ('$desc','$date','$time')";
    mysqli_query($con,$inqry);
  }
  header('location:redirection.php');
}
?>