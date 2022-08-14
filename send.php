<?php
session_start();
ob_start();
include "./skey.php";
include "./connection.php";
/** Google URL with which notifications will be pushed */
$url = "https://fcm.googleapis.com/fcm/send";
/** 
 * Firebase Console -> Select Projects From Top Naviagation 
 *      -> Left Side bar -> Project Overview -> Project Settings
 *      -> General -> Scroll Down and you will be able to see KEYS
 */

/** We will need to set the following header to make request work */
$request_headers = array(
    "Authorization:" . $subscription_key,
    "Content-Type: application/json"
);

/** Data that will be shown when push notifications get triggered */
$msg="new notification check website";
if(isset($_POST['submit']))
    {
        $msg=mysqli_real_escape_string($con,$_POST['desc']);
        $inqry="UPDATE flag SET text='$msg' where id=1";
        mysqli_query($con,$inqry);
    }
    
$selqry="select token from token";
$tknselqry=mysqli_query($con,$selqry);
while($res=mysqli_fetch_array($tknselqry))
{
  $postRequest = [
    "notification" => [
        "title" =>  "NITW",
        "body" =>  $msg,
        "icon" =>  "./logo.ico",
        "click_action" =>  "https://notificationhub.000webhostapp.com/"
    ],
    /** Customer Token, As of now I got from console. You might need to pull from database */
    "to" => $res['token']
];

/** CURL POST code */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postRequest));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);

$season_data = curl_exec($ch);

if (curl_errno($ch)) {
    print "Error: " . curl_error($ch);
    exit();
}
// Show me the result
curl_close($ch);
}
header('location:redirection.php');

