
<?php
@session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');
require_once('dbh.php');
require_once'config.php';


if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['email']) && $_POST['email'] !="" && $_POST['email'] != null && isset($_POST['log']) && $_POST['log'] !="") {
    
    if(preg_match("/^[a-z `A-Z0-9@.]*$/",$_POST['email'])) {
        $email = $_POST['email'];

        $explode = explode('@',$email);
       
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             echo ' invalid email address, please verify your email address';
             exit();
            }
            $con = new PDO("mysql:host=$serverhost;dbname=teeproperties;" , $serverusername, $serverpassword);
            $login = $con->prepare("SELECT * FROM clientsTable WHERE clientEmail = ? ");
            $login -> bindParam(1, $email, PDO::PARAM_STR);
            
            if($login->execute() && $login->rowCount() > 0){
            $re = $login -> fetch(PDO::FETCH_ASSOC);
            $id = $re['id'];
            
            if($login->rowCount() > 0 && $re['Active'] === 0) {
            
            echo "Your account is inactive, we already sent you your activation code in your email";
            exit();
                }else if($login->rowCount() === 0 && $re['Active'] == null){
                echo "we can't find a match with email <span style='color:#808080;font-style:italic;'>$email</span>";
                
                exit();
            }else {
                echo 'match found, enter your password and click login';
                exit();
            }
            }else {
                echo "You don't have account with us <a href='reg.php'> create account </a>";
                exit();
            }
          
        exit();
          
    }else {
        echo 'Invalid Email details!';
        exit();
    }
    
}

?>


  <?php

    
    //requiring mydatabase and connection
    require_once('config.php');

    if( isset($_POST['email']) && $_POST['email'] != "" && $_POST['email'] != null && isset($_POST['password']) && $_POST['password'] != "" && $_POST['password'] != null){
        
        $error = ""; 

        if(preg_match("/^[a-z `A-Z0-9@.]*$/",$_POST['email'])) {
        $email = $_POST['email'];

        $explode = explode('@',$email);
    
        if(@$explode[1] == null) {

        if(strlen($email) < 3 || strlen($email) > 80) {
                //echo 'name must be alphanumerics between 3 and 80';
                
            }
        $password = trim($_POST['password']);
    
        $Active = 1;

            $con = new PDO("mysql:host=$serverhost;dbname=teeproperties;" , $serverusername, $serverpassword);
            $login = $con->prepare("SELECT * FROM clientsTable WHERE clientName = ? ");
            $login -> bindParam(1, $email, PDO::PARAM_STR);
            
            if($login->execute()){
            $re = $login -> fetch(PDO::FETCH_ASSOC);
            $id = $re['id'];
            
            if($login->rowCount() > 0 && $re['Active'] == 0) {
            
            echo $error = "Your account is inactive, we already sent you your activation code in your email";
            
                }else if($login->rowCount() == 0 && $re['Active'] == null){
                echo $error = "You do not have account with us <a href='register.php' style='color:#008;font-style:italic;text-decoration:none;'>create account</a>";
                
            }else if($login->rowCount() > 0 && $re['Active'] == 1){
                if(password_verify($password, $re['password'])) {
                    echo $error = "account verified, click login";
                    }else{
                    echo $error = "name and password does not match";
                    exit();
                }
            }
            }else {
                echo $error =  "oops something happened, check your login details and try again";
                exit();
            }
        }
        
        else {
        
        $password = trim($_POST['password']);
    
        $Active = 1;
       $con = new PDO("mysql:host=$serverhost;dbname=teeproperties;" , $serverusername, $serverpassword);
            $login = $con->prepare("SELECT * FROM clientsTable WHERE clientEmail = ? ");
            $login -> bindParam(1, $email, PDO::PARAM_STR);
            
            if($login->execute()){
            $re = $login -> fetch(PDO::FETCH_ASSOC);
            $id = $re['id'];
            
            if($login->rowCount() > 0 && $re['Active'] == 0) {
            
            echo $error = "Your account is inactive, we already sent you your activation code in your email";
            
                }else if($login->rowCount() == 0 && $re['Active'] == null){
                echo $error = "You do not have account with us, <a href='register.php' style='text-decoration;font-style:italic;color:#008;'>create account</a>";
                
            }else if($login->rowCount() > 0 && $re['Active'] == 1) {
                if(password_verify($password, $re['password'])) {
                    echo $error = "account verified, click login";
                    }else{
                        
                   echo $error = "email and password does not match";
                    exit();
                }
            }
            }else {
                echo $error = "oops something happened, check your login details and try again";
                exit();
            }
            
        }
    
        
    }else {
        echo $error = "unrecognized login details";
        exit();
    }

}
    
?>