<?php
include 'connection.php';
if(isset($_POST['submit']))
{
  $desc=mysqli_real_escape_string($con,$_POST['desc']);
  $link=mysqli_real_escape_string($con,$_POST['link']);
  $ename=mysqli_real_escape_string($con,$_POST['ename']);
  if($desc!="" && $ename!="" && $link!="")
  {
    $inqry="insert into events(ename,text,link) values ('$ename','$desc','$link')";
    mysqli_query($con,$inqry);
  }
  header('location:redirection.php');
}
?>