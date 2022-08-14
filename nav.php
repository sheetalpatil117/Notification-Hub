<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="nav.css">
    <title>NAVIGATION</title>
  </head>
  <body>
    <!--HOME-->
    <nav class="navbar navbar-expand-lg mt-1" style="background-color:rgb(15, 52, 82);">
      <a class="navbar-brand " href="./index.php" style="color:white;">
        <i class="fa fa-fw fa-home"></i>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span ><i class="fa fa-align-justify" title="Align Justify"></i></span>
       </button>
    <!--class="navbar-toggler-icon"-->

    <!--nav buttons-->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active" >
            <a id="class" class="nav-link" href="./cardclass.php" style="color:white;">Class Schedule<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./cardnotice.php" style="color:white;">Notice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./cardexam.php" style="color:white;">Exam</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./cardevent.php" style="color:white;">Events</a>
          </li>
          <?php
          
          if(isset($_SESSION['username']))
          echo "<li class='nav-item'>
          <a class='nav-link' href='./redirection.php' style='color:white;'>Admin Panel</a>
          </li>";
          ?>
        </ul>
        <ul>
        <?php
        if(!isset($_SESSION['username']))
        echo "<li class='nav-item' style='list-style-type:none;padding:10px;'>
        <a href='./login.php' class='acti' style='color:white;'><i class='fa fa-sign-in' aria-hidden='true'></i> &nbsp;Login</a> 
      </li>";
      else
      echo "<li class='nav-item' style='list-style-type:none;padding:10px;'>
      <a href='./logout.php' class='acti' style='color:white;'><i class='fa fa-sign-in' aria-hidden='true'></i> &nbsp;Logout</a> 
      </li>";
        ?>
        </ul>
      </div>
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>