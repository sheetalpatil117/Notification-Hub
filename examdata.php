<?php
include "./connection.php";
$selqry="select * from exam";
$eselqry=mysqli_query($con,$selqry);
$j=0;
while($res=mysqli_fetch_array($eselqry))
{
  $xdata[]=array($res['description'],$res['date'],$res['time'],$res['id']);
  $j++;
}
?>