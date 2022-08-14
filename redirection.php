<?php
session_start();
ob_start();
if(!isset($_SESSION['username'])){          //for back function-PS
  header('location:index.php');
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Redirection Login</title>
  </head>
  <body style="background-image:url('pageimg.jpg'); background-size:cover;">
    
  <ul class="list-group col-xs-3 d-grid gap-3 col-6 mx-auto " style="margin-top:100px;">   
        <li class="list-group-item  " style="text-align:center; padding:20px; background-color: #ccff99; FONT-WEIGHT:BOLD;"> <a href="./index.php" style="color: black; text-decoration: none;">Home</a></li>  
        <li class="list-group-item  " style="text-align:center; padding:20px; background-color: #8FBC8F; FONT-WEIGHT:BOLD;"> <a href="./exam.php" style="color: black; text-decoration: none;">Exam Notice</a></li>  
        <li class="list-group-item " style="text-align:center; padding:20px; background-color:#CD5C5C; FONT-WEIGHT:BOLD; ">   <a href="./event.php"  style="color: black; text-decoration: none;"> Event Information </a></li>  
        <li class="list-group-item " style="text-align:center; padding:20px; background-color: #D2691E; FONT-WEIGHT:BOLD;"> <a href="./class.php"  style="color: black; text-decoration: none;">  Class Schedule </a></li>  
        <li class="list-group-item " style="text-align:center; padding:20px; background-color: #008B8B; FONT-WEIGHT:BOLD;"> <a href="./notice.php"  style="color: black; text-decoration: none;"> Notice</a></li>  
        <li class="list-group-item " style="text-align:center; padding:20px; background-color:yellowgreen; FONT-WEIGHT:BOLD;"> <a href="./notification.php"  style="color: black; text-decoration: none;">Send Notification</a></li>
        <li class="list-group-item " style="text-align:center; padding:20px; background-color:#B22222; FONT-WEIGHT:BOLD;"> <a href="./logout.php"  style="color: black; text-decoration: none;"> Log-Out</a></li>
  </ul>


  </body>
</html>