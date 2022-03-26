<?php
@session_start();

    //requiring mydatabase and connection
    require_once('config.php');
    if( isset($_POST['email']) && $_POST['email'] != "" && isset($_POST['password']) && $_POST['password'] != ""&& isset($_POST['submit'])){
        
        $error = ""; 

        if(preg_match("/^[a-z `A-Z0-9@.]*$/",$_POST['email'])) {
        $email = $_POST['email'];

            $password = strip_tags($_POST['password']);
            

          if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
              
                  $Active = 1;
      
                  $con = new PDO("mysql:host=$serverhost;dbname=teeproperties;" , $serverusername, $serverpassword);
                  $login = $con->prepare("SELECT * FROM clientsTable WHERE clientEmail = ? ");
                  $login -> bindParam(1, $email, PDO::PARAM_STR);
                  
                  if($login->execute() && $login->rowCount() > 0){
                  $re = $login -> fetch(PDO::FETCH_ASSOC);
                  $id = $re['id'];
                  
                  if($login->rowCount() > 0 && $re['Active'] == 0) {
                  
                  $error = "<div style='background:#ffc0cb;width:85%;text-align:center;border-radius:5px;padding:2%;margin: 0 auto;color: #ff0000;'>Your account is inactive, we already sent you your activation code in your email</div>";
                  
                      }else if($login->rowCount() == 0 && $re['Active'] == null){
                      $error = "<div style='background:#ffc0cb;width:85%;text-align:center;border-radius:5px;padding:2%;margin: 0 auto;'>You do not have account with us <a href='register.php' style='color:#008;font-style:italic;text-decoration:none;'>create account</a></div>";
                      
                  }else if($login->rowCount() > 0 && $re['Active'] == 1){
                      if(password_verify($password, $re['password'])) {
                          // $ul = $con->prepare("UPDATE clientsTable SET WHERE id = ? ");
                          // $ul -> bindParam(1,$id);
                          // $ul -> execute();
                          $g = $con->prepare("SELECT * FROM clientsTable WHERE id = ? ");
                          $g -> bindParam(1,$id);
                          $g ->execute();
                          $h = $g ->fetch(PDO::FETCH_ASSOC);
                          $_SESSION['user'] = $h;
                          $name = $h['uname'];
      
                          $expiry = time()+20*60*60;
                                      
                          setcookie('myName',htmlentities(trim($name)),$expiry,'','','',  TRUE); 
      
                          $mycookie = $_COOKIE['myName'];
                          header("Location:userpage.php?user=$name");
                          exit();
                          }else{
                          $error = "<div style='background:#ffc0cb;width:85%;text-align:center;border-radius:5px;margin: 0 auto;padding:2%;color: #ff0000;'>name and password does not match</div>";
                          
                      }
                  }
                  }else {
                      $error =  "<div style='background:#ffc0cb;width:85%;text-align:center;border-radius:5px;padding:2%;margin: 0 auto;color: #ff0000;'>oops something happened, check your login details and try again</div>";
                      
                  }
              }else {

              }
        
    }else {
        $error = "<div style='background:#ffc0cb;width:85%;text-align:center;border-radius:5px;padding:2%;margin: 0 auto;color: #ff0000;'>unrecognized login details</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from martinassetize.com.com/ob/l/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jan 2022 05:47:22 GMT -->
<head>
	<title> Registration Success | Tee Properties    </title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/logo.png"/>
  <script lang="javascript" type="text/javascript" src="bootstrap/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type='text/css' href="bootstrap/bootstrap-4.1.3-dist/css/bootstrap.min.css"> 
<!-- Font Icon -->
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style2.css">
<!-- <link rel="stylesheet" href="keyboard/softkeys-0.0.1.css"> -->

</head>
<body>
	
<div class="main">

       

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    

                    <div class="signin-form mx-auto">
                        <h5 class=" font-weight-light ">Hurray!!! <span class="text-success font-weight-bold font-italic"><?php echo @ucwords($_SESSION['uname']);?></span>, you have succesfully registered your account with us <a href="signin.php" class=" text-left font-weight-bold m-1">Sign in</a></h5>
                    </div>
                </div>
            </div>
        </section>

    </div>
	<!-- JS -->
  <script src="vendor/jquery/jquery.min.js"></script>
 
          <script lang="javascript" type="text/javascript" src="javascript/jscript.js"></script>  
      </body>

</html>
