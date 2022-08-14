<?php
include 'connection.php';
if(isset($_POST['submit']))
{
  $class=mysqli_real_escape_string($con,$_POST['class']);
  $link=mysqli_real_escape_string($con,$_POST['link']);
  $time=mysqli_real_escape_string($con,$_POST['time']);
  if($class!="" && $link!="" && $time!="")
  {
    $inqry="insert into class(description,link,time) values ('$class','$link','$time')";
    mysqli_query($con,$inqry);
  }
  header('location:redirection.php');
}
?>