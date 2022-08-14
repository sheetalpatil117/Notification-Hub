<?php
include "./connection.php";
$selqry="select * from events";
$eselqry=mysqli_query($con,$selqry);
$j=0;
while($res=mysqli_fetch_array($eselqry))
{
  $edata[]=array($res['ename'],$res['text'],$res['link'],$res['id']);
  $j++;
}
?>