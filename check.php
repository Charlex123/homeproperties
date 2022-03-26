<?php
@session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');
require_once('dbh.php');
require_once'config.php';


if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['password']) && $_POST['password'] !="") {
    
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    
    
    // if(in_array($passArray,$specialChar) || in_array($passArray1,$specialChar) || in_array($passArray2,$specialChar) || in_array($passArray3,$specialChar) || in_array($passArray4,$specialChar)) {
    //     echo 'contains special char';
    // }else {
    //     echo 'no special char';
    // }

    if(strlen($password) < 5) {
           echo 'Password must be more than 5 characters';
         exit();
        }
        else if(strlen($password) >= 5 && strlen($password) <= 10) {
            echo 'Password strength .....<span style="color:#800;"> Weak ';
            exit();
         }
        else if(strlen($password) > 10 && strlen($password) <= 16) {
            echo 'Password strength .....<span style="color:#adff2f;"> Good ';
            exit();
         }
         else if(strlen($password) > 16 ) {
            echo 'Password strength .....<span style="color:#008000;"> Very Good ';
            exit();
         }
         

         if(strlen($password) > 16 ) {
            echo 'Password strength .....<span style="color:#008000;"> Very Good ';
            exit();
         }
            
    
    
    }
    
    ?>

<?php
@session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');
require_once('dbh.php');
require_once'config.php';


if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['password']) && isset($_POST['password1'])) {
    
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    $password1 = isset($_POST['password1']) ? $_POST['password1'] : false;
   
    
    if($password === $password1) {
        echo "<span style='color:#008000'>password matched</span>";
        exit();
    }
    else {
        
        echo 'Passwords do not match';
        exit();
    }    
    
    
    }else if(isset($_POST['password']) && !isset($_POST['password1'])) {
        echo 'PasswordRepeat cannot be empty!!';
      exit();
     }
?>

<?php
@session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');
require_once('dbh.php');
require_once'config.php';


if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['Email']) && $_POST['Email'] !="") {
    
    $Email = isset($_POST['Email']) ? $_POST['Email'] : false;

     if($Email == "") {
         echo 'email empty!!';
         exit();
     }

     if(!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            echo ' invalid email address, please verify your email address';
            exit();
        }else if(!preg_match("/^[a-z `A-Z0-9@.]*$/",$Email) && strip_tags($Email)) {
             echo 'invalid, email format not accepted, special characters not allowed';
             exit();
            
         }else{
            //check Email
            $con= new PDO("mysql:host=$serverhost;dbname=teeproperties;" , $serverusername, $serverpassword);
            $query = $con->prepare("SELECT clientEmail FROM clientsTable WHERE clientEmail=? LIMIT 1");
            $e_Check = $query->bindParam(1, $Email, PDO::PARAM_STR);
            $e_Check = $query->execute();
            $e_Check = $query->rowCount();
            if( $p_Check=$query->rowCount() > 0) {
                echo  'email already taken, please choose another';
                exit();
            }else{
                echo $Email. ' is OK';
                exit();
            }
        }
    
    }
?>
