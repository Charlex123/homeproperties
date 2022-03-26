<?php
@session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');
require_once'dbh.php';
require_once'config.php';
require_once'ranStrGen.php';
require_once'mailer.php';

    if( $_SERVER['REQUEST_METHOD']=='POST' &&  isset($_POST['Fullname']) && $_POST['Fullname'] !="" && isset($_POST['password']) && $_POST['password'] !="" && isset($_POST['Email'])) {
        
        $name = isset($_POST['Fullname']) ? $_POST['Fullname'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;
        $password1 = isset($_POST['password1']) ? $_POST['password1'] : false;
        $Email = isset($_POST['Email']) ? $_POST['Email'] : false;
        $explode = explode(' ',$name);

        $error_name = "";
        $eror_name = "";
        $errror_name = "";
        $eror_password = "";
        $errror_password = "";
        $error_password = "";
        $eror_email = "";
        $error_email = "";
        $errror_email = "";
        $eror_phonenumber = "";
        $error_phonenumber = "";
        $errror_phonenumber = "";
        $error_captcha = "";
        
        
        $errorSmt = "";
        
            
          //check referral Email
          $query = $con->prepare("SELECT Email FROM clientsTable WHERE clientEmail = ? LIMIT 1");
          $e_Check = $query->bindParam(1, $Email, PDO::PARAM_STR);
          $e_Check = $query->execute();
          $e_Check = $query->rowCount();
          if( $p_Check=$query->rowCount() > 0) {
              exit($Email.' already taken, please choose another');
              
          }
        
         if(!preg_match("/^[a-z `A-Z0-9.]*$/",$name) && strip_tags($name)) {
             exit('invalid, name format not accepted, special characters not allowed');
            
         }
         
         if(strlen($name) < 3 || strlen($name) > 80) {
          exit('Username must be between 3 - 80 characters');
          
         }
         if($password !== $password1) {
            exit('Password and RepeatPassword do not match');
            
         }
         if(strlen($password) < 5) {
            exit('Weak password, Password must be more than 5 characters');
            
         }

         if(!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
             exit(' invalid email address, please verify your email address');
             
         }
         if(!preg_match("/^[a-z `A-Z0-9@.]*$/",$Email) && strip_tags($Email)) {
             exit('invalid, name format not accepted, special characters not allowed');
         }
     

            class reg extends dbh {

            public function userCheck($name,$password,$Email,$phonenumber) {
            try {   
                    $passenc = password_hash($password, PASSWORD_DEFAULT, array('cost'=>11));
                    $email_code = rand().$phonenumber.'@'.randStrGen(50);
                    $explode  = explode('@',$email_code);
                    $emailCode = $explode[0];
                    if($emailCode == "" || $emailCode == null) {
                        exit();
                    }
                    $explode = explode(' ',$name);
                    $uname = @$explode[1];
                    if(@$explode[1] !="" || @$explode[1] != null) {
                        $uname = @$explode[1];
                    }else {
                        $uname = $explode[0];
                    }
                    $Active = 0;
                    $lostpass = "";
                    $reg_time = date('Y-m-d H:i:s',time()); 
                    $userIP = $_SERVER['REMOTE_ADDR'];
                    $profile_pics = "images/users_profilePics/default_profilePic.jpg";
                    // creating clientsTable table
                    $con = new PDO("mysql:host=$this->serverhost;dbname=teeproperties;", $this->serverusername, $this->serverpassword);
                    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // inserting clientsTable details into database
                    $sql = "INSERT INTO clientsTable (clientName,uname,password,clientEmail,emailCode,profile_pics,Active,lostpass,reg_time,user_ip) VALUES (?,?,?,?,?,?,?,?,?,?)";
                    $insert = $con->prepare($sql);
                    $insert->bindParam(1,$name,PDO::PARAM_STR);
                    $insert->bindParam(2,$uname,PDO::PARAM_STR);
                    $insert->bindParam(3,$passenc );
                    $insert->bindParam(4,$Email,PDO::PARAM_STR);
                    $insert->bindParam(5,$emailCode,PDO::PARAM_STR);
                    $insert->bindParam(6,$profile_pics,PDO::PARAM_STR);
                    $insert->bindParam(7,$Active,PDO::PARAM_INT);
                    $insert->bindParam(8,$lostpass,PDO::PARAM_STR);
                    $insert->bindParam(9,$reg_time);
                    $insert->bindParam(10,$userIP,PDO::PARAM_STR);
                    
                    $insert ->execute();
                    
                        if($insert==true){
                            
                            $eeeeee = $name . ' you have been successfully registered<br>';
                            // send email code to clientsTable
                            $to = $Email;
                            $subject = "Registration success";

                            $message = "Hello". $name . ", you have successfully registered with Tee properties, the best for affordable homes";

                            // Always set content-type when sending HTML email
                            $headers = "MIME-Version: 1.0" . "\r\n";
                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                            // // More headers
                            // $headers .= 'From: <webmaster@example.com>' . "\r\n";
                            // $headers .= 'Cc: myboss@example.com' . "\r\n";

                            mail($to,$subject,$message,$headers);;
                            $_SESSION['uname'] = $uname;
                            header("location:reg-succes.php");
                            exit();        

                    }else{
                    header("location:reg-failure.php");
                    exit();
                }

                
                
            } catch (PDOException $e){
                throw new PDOException($e->getMessage());
            }
        }


    }
    $object = new reg();
    $object->userCheck( $name, $password, $Email, $phonenumber);
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from martinassetize.com.com/ob/l/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jan 2022 05:47:22 GMT -->
<head>
	<title> Customer Registration | Tee Properties    </title>
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

</head>
<body>
	
<div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>

                        <div class="p-2 m-4 text-danger rounded" id="validation"></div>
                        <div id="validation1"></div>
                        <div class='alert-success text-center row b-1 w-80' style='display:none'><div id='errlog' class='text-center ml-3 mt-2 mb-2 mr-3'></div><span class='text-right close-logalert' style='cursor:pointer'>&times;</span></div>
                        
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Fullname" id="name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="Email" id="Email" onblur="emailCheck()" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" onblur="passwordCheck()" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password1" id="passworded" onmouseout="repasswordCheck()" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                            <div class="linka">
                              <a href="reg.php" class="font-weight-bold ml-0">Already have account? Sign in</a>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image" style="objective-position: center">
                        <figure><img src="images/signup-image.jpg" alt="sing up image" class="rimage"></figure>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- JS -->
    <script type="text/javascript">

          function _(e) {
              return document.getElementById(e);
          }
          var error = document.getElementById("validation");

          function emailCheck() {
              var log = true;
              var loginId = document.getElementById("Email").value;
              if(loginId != "" && loginId != null) {
                  var hr = new XMLHttpRequest();
                  hr.open("POST","check.php",true);
                  hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                  hr.onreadystatechange = function () {
                      if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                          error.style.display = 'block';
                          error.style.color = 'red';
                          error.innerHTML = hr.responseText;
                      }
                  }
                  hr.send("Email="+loginId);
              }else {
                  error.style.display = 'block';
                  error.style.color = 'red';
                  error.innerHTML = 'enter your Email';
                  return false;
              }

          }

          function passwordCheck() {
              var log = true;
              var pass = document.getElementById("password").value;
              if(pass != "" && pass != null) {
                  var hr = new XMLHttpRequest();
                  hr.open("POST","check.php",true);
                  hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                  hr.onreadystatechange = function () {
                      if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                          error.style.display = 'block';
                          error.style.color = 'red';
                          error.innerHTML = hr.responseText;
                      }
                  }
                  hr.send("password="+pass);
              }
              
          }

          function repasswordCheck() {
              var log = true;
              var pass = document.getElementById("password").value;
              var repass = document.getElementById("passworded").value;
              if(pass != "" && pass != null) {
                  var hr = new XMLHttpRequest();
                  hr.open("POST","check.php",true);
                  hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                  hr.onreadystatechange = function () {
                      if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                          error.style.display = 'block';
                          error.style.color = 'red';
                          error.innerHTML = hr.responseText;
                      }
                  }
                  hr.send("password="+pass+"&password1="+repass);
              }
              
          }


          </script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </body>

</html>
