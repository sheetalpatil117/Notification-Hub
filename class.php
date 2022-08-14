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
  <title>Class</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <style>
         .img
         {
           background: url('pageimg.jpg') ;
           background-repeat: no-repeat;
           background-size:cover;
           background-attachment: fixed;
           background-position: center;
     
     
          }
  </style>
</head>
<body class="img">
   <div class="container col-sm-4 offset-lg-3 ml-2 " style="margin-top:190px;">
    <form action="classinsert.php" method="post" >
    <div class="mb-3">
        <div class="mb-3">
            <label for="class" class="form-label" style="color:rgb(245, 237, 237); font-style:italic"><strong>Class Name </strong></label> <br>
            <input type="text" class="form-control" id="class" name="class">
          </div>
    <div class="mb-3">
      <label for="link" class="form-label" style="color:rgb(241, 237, 237); font-style:italic"><strong>link</strong></label> <br>
      <input type="text" class="form-control" id="link" name="link" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="time" class="form-label" style="color:rgb(247, 239, 239);font-style:italic"><strong>Time</strong></label> <br>
        <input type="text" class="form-control" id="time" name="time" placeholder="hh:mm">
      </div>
      <div class="mb-3">
     
     <button type="submit" class="btn btn-success" style=" background-color:rgb(226, 222, 222);color:black;" name="submit"><b>Submit</b></button>
       <br><br>
    
   </div>
  </form>
  </div>
  
</body>
</html>