<?php

$serverhost = "localhost";
$serverdbname = "db2048099";
$serverusername = "root";
$serverpassword = "";

$con = new PDO("mysql:host=$serverhost;dbname=db2048099;" , $serverusername, $serverpassword);
 

if($con) {
    
}else {
    die('connection failed');
}  
?>