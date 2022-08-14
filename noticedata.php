<?php
include "./connection.php";
$selqry="select * from notice";
$eselqry=mysqli_query($con,$selqry);
$j=0;
while($res=mysqli_fetch_array($eselqry))
{
  $ndata[]=array($res['text'],$res['id']);
  $j++;
}
?>