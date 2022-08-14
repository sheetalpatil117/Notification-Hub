<?php
session_start();
ob_start();
?>
<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" type="image/png" href="./logo.ico"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="front.css">
    <title>HOME</title>
    <style>
    .foo{

      margin-left:20px;margin-top:60px;
    }
      @media screen and (min-width: 1200px) 
      {
  .foo {
     position:absolute;
     bottom:0px;
      }
     }
    
    
    </style>

    
  </head>
  <body onload="change()">
      <?php
     include('nav.php');
      ?>
    
      
    <!--Image section-->
  
      <div class="row" style="margin-top:90px;">
        <div class="col"  >
          <h1 style="font-style: italic; color: black; margin-left:5%">National Institute Of Technology,<h1>
            <h2 style="font-style: italic; color: rgb(22, 21, 21); margin-left:5%"> Warangal</h2> <br>
          <ul style="list-style:none; position :relative;">
          <li> <a target="_blank" href="https://www.nitw.ac.in/">  <strong style="font-size: 18px; font-family: 'Gill Sans'; margin-top:20px;margin-left:8%;" >Visit Official link</strong></a> &nbsp
          </li>
          <li>
          <a target="_blank" href="https://firstchy-lms.nitwcloud.in/moodle/login/index.php">  <strong style="font-size: 18px; font-family: 'Gill Sans'; margin-top:20px;margin-left:8%;" >Visit Lms</strong></a></li>
        <li>   <a target="_blank" href="https://wsdc.nitw.ac.in/">  <strong style="font-size: 18px; font-family: 'Gill Sans'; margin-top:20px;margin-left:8%;" >Visit Wsdc</strong> </a> </li>
        <li> <a target="_blank" href="http://nitwhub.tech">  <strong style="font-size: 18px; font-family: 'Gill Sans'; margin-top:20px;margin-left:8%;" > Visit Nitw hub</strong></a> </li>
           </ul>
           <div class="col-xs-6"  style="position:relative; color:red;">
      <div class="centerBlock">
    <strong style="font-size:15px;" id="change"></strong>
      </div>
    </div>
          </div>

        <div class=" col-sm-6 ">
         <img  style="position:relative;" class="container img-responsive"src="NITWimg.jpg" style="width:400px;height:300px" alt="NITW IMAGE">
         <br>
        
         </div>
     </div>
    
  
    <!--Footer-->
    
   
    <ul class="footer d-sm-flex p-2 container-fluid foo" style="margin-top:150px;margin-left:0px;margin-right:0px;">
   
          <li> <a class = "container"  href="#" style="margin-right:12px;"> &nbsp; 	&#xf004; Team Legion<br>2020-23</a></li>
         <li> <a class = "container" href="mailto:cse_hod@nitw.ac.in" style="margin-right:10px;"> 	
          &#9993; &nbsp;  Mail HOD</a></li>
          <li> <a  href="mailto:adhoc_cse2@nitw.ac.in" style="margin-right:12px;"> &#9993 &nbsp  Mail OOPS Faculty</a></li>
           <li><a  href="mailto:kumar.sushil@nitw.ac.in" style="margin-right:10px;"> &#9993 &nbsp   Mail DS Faculty</a></li>
          <li> <a  href="mailto:iep@nitw.ac.in" style="margin-right:10px;"> &#9993 &nbsp  Mail DS LAB Faculty</a></li>
          <li> <a  href="mailto:adhoc_cse3@nitw.ac.in" style="margin-right:10px;"> &#9993 &nbsp  Mail UTP Faculty</a></li>
          <li> <a  href="mailto:padma@nitw.ac.in" style="margin-right:10px;"> &#9993 &nbsp  Mail AFM Faculty</a></li>
          <li><a  href="mailto:adhoc_cse4@nitw.ac.in" style="margin-right:10px;"> &#9993 &nbsp   Mail FWP Faculty</a></li>
       </ul>
    

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script  src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script  src="https://www.gstatic.com/firebasejs/8.6.8/firebase-analytics.js"></script>
    <script  src="https://www.gstatic.com/firebasejs/8.6.8/firebase-messaging.js"></script>
    <script  src="./init-firebase.js"></script>

    <script>
      const messaging = firebase.messaging();
  // Get registration token. Initially this makes a network call, once retrieved
// subsequent calls to getToken will return from cache.
messaging.getToken({ vapidKey: "BL51c_HPFYCE6syN7o2kxNCtBlDn9anR0OvwAOOy8o0DBKXcWnkz3sVoKJ4tbhKOQG0MndcuUtsN0FResfOxSVc"}).then((currentToken) => {
  if (currentToken) {
    // Send the token to your server and update the UI if necessary
    // ...
    const getCookieValue = (name) => (
  document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)')?.pop() || '')
  var prsnt=getCookieValue("fcmtoken");
  if(currentToken!=prsnt) {
    // Send the token to your server and update the UI if necessary
      var tkn="fcmtoken="+currentToken+";expires=Fri, 31 Dec 9999 23:59:59 GMT";
      document.cookie=tkn;
      xhttp = new XMLHttpRequest();
      xhttp.open("POST","inserttoken.php",true);
      xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      tkn="fcmtoken="+currentToken;
      xhttp.send(tkn);
      }
  } else {
    // Show permission request UI
    alert("Please allow push notification");
    // ...
  }
}).catch((err) => {
  console.log('An error occurred while retrieving token. ', err);
  // ...
});
    </script>
  <script>
  function change() {
    xhttp = new XMLHttpRequest();
    xhttp.open("GET","changedata.php",true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send();
    xhttp.onload = () => {
      let str=""
      if (xhttp.status != 200) { // analyze HTTP status of the response
      str="Error Please refresh" // e.g. 404: Not Found
  } else { // show the result
    str=xhttp.response; // response is the server response
  }
    document.querySelector("#change").innerHTML=str;
    }
  }
</script>
  </body>
</html>