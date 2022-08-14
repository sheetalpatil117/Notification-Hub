<?php
include "./connection.php";
$selqry="select * from class";
$eselqry=mysqli_query($con,$selqry);
$j=0;
while($res=mysqli_fetch_array($eselqry))
{
  $cdata[]=array($res['description'],$res['link'],$res['time'],$res['id']);
  $j++;
}
?>