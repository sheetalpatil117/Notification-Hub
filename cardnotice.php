<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="./logo.ico"/>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Card Notice</title>
</head>
<body style="background-image:url('cardimage.jpg') ;background-size:cover; ">
    
<?php
include "navstu.php"; ?>
    <div class="container  py-5 ">
    <div class="row ">
    <?php
       include "noticedata.php";
       if($j)
           {
               $j=0;
               foreach($ndata as $i)
               {
                   ?>
                     <div class="col-md-4 mt-4 "  >
                     <div class="card " style="overflow:auto;height:auto;  border: 3px solid  #ffd600; " >
                         <div class="card-body " style="background-color:  white;">
                         <h4 class="card-title" style="font-family: serif; font-weight: bold;" > Notice </h4>
                         <p style="border-bottom-style:solid; border-bottom-color:rgb(165, 10, 36);border-bottom-width:2px;"></p> 
                             
                             <p class="card-text " style="font-family: Times, 'Times New Roman', Georgia, serif; font-weight:600px; font-size:20px;" ><?php  echo $i[0]; ?></p>
                           
                             <?php
                            if(isset($_SESSION['username']))
                            {
                                ?>
                                 
                            <hr><a href='./delete.php?id=<?php echo $i[1];?> & tbl=<?php echo "notice";?> & loc=<?php echo "cardnotice";?>' class="btn" style='background-color:rgb(204, 31, 19); color:white;'>Delete</a>
                            <?php
                            }
                            ?>
                            
                            
                             <br>
                         </div>
                     </div>
                 </div>
                  <?php
              }
           }
       else
       {
        
        echo "<h2 style='color:white; text-align:center; margin-top:240px;' > Nothing to Show </h2>"; 
       }

    ?>
</div>
 </div>
</body>
</html>
  