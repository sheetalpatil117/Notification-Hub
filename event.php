<?php
session_start();
ob_start();
if(!isset($_SESSION['username'])){          //for back function-PS
  header('location:index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <style>
          .img
            {
                background: url('pageimg.jpg') ;
                background-repeat: no-repeat;
                background-size:cover;
                background-attachment: fixed;
                background-position: center;
                image-rendering: -webkit-optimize-contrast;
            }
  </style>
</head>
<body class="img">
  
  <div class="container col-lg-6 offset-lg-3 ml-2 " style="margin-top:200px;">
    <form action="eventinsert.php" method="post" >
    <div class="mb-3">
      <label for="ename" class="form-label" style="color:rgb(241, 235, 233); font-style:italic"><strong>Event / Company Name</strong></label>
     <br> 
      <input type="text" class="form-control" id="ename" name="ename" >
    </div>
    <div class="mb-3">
      <label for="desc" class="form-label" style="color:rgb(233, 227, 225); font-style:italic"><strong>Description</strong></label> <br>
      <textarea class="form-control" id="desc" rows="3" autocomplete="off" name="desc"></textarea>
    </div>
    <div class="mb-3">
      <label for="link" class="form-label" style="color:rgb(241, 235, 233); font-style:italic"><strong>Link</strong></label>
     <br> 
      <input type="text" class="form-control" id="link" name="link" >
    </div>
    <div class="mb-3">
     
      <button type="submit" class="btn btn-success" style=" background-color:rgb(226, 222, 222);color:black;" name="submit"><b>Submit</b></button>
        <br><br>
     
    </div>
      
  </form>
  </div>

</body>
</html>