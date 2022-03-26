<?php
@session_start();
require_once'config.php';

if(isset($_POST['requestorName']) && isset($_POST['requestorEmail']) && isset($_POST['requestorMessage'])) {
   
    $reqname = isset($_POST['requestorName']) ? $_POST['requestorName'] : false;
    $reqemail = isset($_POST['requestorEmail']) ? $_POST['requestorEmail'] : false;
    $reqmessage = isset($_POST['requestorMessage']) ? $_POST['requestorMessage'] : false;
    $reqloc = isset($_POST['requestedPropertyLocation']) ? $_POST['requestedPropertyLocation'] : false;
    $reqcateg = isset($_POST['requestedPropertyCategory']) ? $_POST['requestedPropertyCategory'] : false;
    $reqnumber = isset($_POST['requestorNumber']) ? $_POST['requestorNumber'] : false;

    if(strip_tags($reqname) && preg_match("/^[a-z `A-Z0-9.]*$/",$reqname)){
        $reqName = $reqname;
    }else {
        exit('invalid name format');
    }

    if(strip_tags($reqloc) ){
        $reqLoc = $reqloc;
    }else {
        exit('invalid location format');
    }

    if(strip_tags($reqcateg) ){
        $reqCateg = $reqcateg;
    }else {
        exit('invalid property category format');
    }

    if($reqnumber =="") {
        exit('phonenumber empty!!');
        
    }else if(!strip_tags($_POST['requestorNumber'])) {
        exit("invalid phonenumber");
    
    }else if(!preg_match("/^[ 0-9]*$/",$reqnumber) && !ctype_digit($reqnumber)) {
        exit('only numbers required!');
    }  

    if($_POST['requestorMessage'] = ""){
        exit('enter message');
    }else if(strip_tags($reqmessage)){
        $reqMessage = $reqmessage;
    }else{
        exit('invalid message format');
    }

    if(!filter_var($reqemail, FILTER_VALIDATE_EMAIL)) {
        exit('invalid email address, please verify your email address');
    }
    if(!preg_match("/^[a-z `A-Z0-9@.]*$/",$reqemail) && strip_tags($reqemail)) {
        exit('invalid, email format');
    }
    $time = date('Y-m-d H:i:s',time());

    $sql = $con -> prepare("INSERT INTO requestedproperties (requestorName,requestorEmail,requestedLocation,requestedCategory,requestorNumber,requestorMessage,timestatus) VALUES (?,?,?,?,?,?,?)");
    $sql -> bindParam(1,$reqName);
    $sql -> bindParam(2,$reqemail);
    $sql -> bindParam(3,$reqLoc);
    $sql -> bindParam(4,$reqCateg);
    $sql -> bindParam(5,$reqnumber);
    $sql -> bindParam(6,$reqMessage);
    $sql -> bindParam(7,$time);
    if($sql -> execute()) {
        exit('thank you, we will reply your message shortly');
        
    }else {
        exit('Email sub failed');
    }

}else {
    exit('All fields are required');
}

?>