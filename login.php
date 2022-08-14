<?php
session_start();
ob_start();
if(isset($_SESSION['username'])){          //for back function-PS
  header('location:redirection.php');
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
    <link rel="stylesheet" href="log.css">
    <title>Login</title>
  </head>
  <body class="main-bg"  >
    <div class="login-container text-c animated flipInX " style=margin-top:60px;>
              <h3 style="color:white; font-family: cursive;">Login</h3>
                <small style="color:white;">Only For CR and CRC's</small>
              <div class="container-content" style="margin-top:40px;">
                <form class="margin-t" action="./userlogin.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="username"required="true">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="password" class="form-control"name="password" placeholder="*****" required="true">
                    </div>
                    <br>
                    <button type="submit" class="form-button button-l margin-b" name="LOGIN">Sign In</button>
               </form>
             </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>