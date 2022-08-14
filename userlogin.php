<?php
session_start();
ob_start();
include "connection.php";   


if(isset($_POST['LOGIN'])){
    $username=mysqli_real_escape_string($con,$_POST['username']);   //for taking username from keyboard-PS
    $password=mysqli_real_escape_string($con,$_POST['password']);   //for taking password from keyboard-PS

    $query="select pass from login where uname='$username'";
    

    $qry=mysqli_query($con,$query);
    // for checking the username in the database -PS
    $count=mysqli_num_rows($qry);           
    //for counting the no of emails in database-PS

    if($count){
    $hash=mysqli_fetch_array($qry);
    $pass=$hash['pass'];
         //fetching database password-PS

        $pass_decode=password_verify($password,$pass);   //verifying it-PS


        if($pass_decode){
             $_SESSION['username']='Admin';
             header('location:redirection.php');
        }
         else{
            header('location:login.php');
         }

     }
     else
     header('location:login.php');
}



?>