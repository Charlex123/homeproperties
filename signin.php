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
<!-- <link rel="stylesheet" href="keyboard/softkeys-0.0.1.css"> -->

</head>
<body>
	
<div class="main">

       

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image" class="rimage"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        
                        <div class="p-2 m-4 text-danger rounded" id="validation"></div>
                        <div id="validation1"></div>
                        <div class='alert-success text-center row b-1 w-80' style='display:none'><div id='errlog' class='text-center ml-3 mt-2 mb-2 mr-3'></div><span class='text-right close-logalert' style='cursor:pointer'>&times;</span></div>
          
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" onblur="loginIdCheck()" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="passworded" onblur="loginCheck()" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signin" class="form-submit" value="Log in"/>
                                <a href="reg.php" class=" text-left font-weight-bold m-4">Sign up</a>
                            </div>

                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
	<div id="dropDownSelect1"> </div>
	<!-- JS -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/main.js"></script>
        <script type="text/javascript">

          function _(e) {
              return document.getElementById(e);
          }
          var error = document.getElementById("validation");

          function loginIdCheck() {
              var log = true;
              var loginId = document.getElementById("email").value;
              if(loginId != "" && loginId != null) {
                  var hr = new XMLHttpRequest();
                  hr.open("POST","checklogin.php",true);
                  hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                  hr.onreadystatechange = function () {
                      if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                          error.style.display = 'block';
                          error.style.color = 'red';
                          error.innerHTML = hr.responseText;
                          console.log(hr.response);
                      }
                  }
                  hr.send("email="+loginId+"&log="+log);
              }else {
                  error.style.display = 'block';
                  error.style.color = 'red';
                  error.innerHTML = 'enter your name or email';
                  return false;
              }

          }

          function loginCheck() {
              
              var log = true;
              var loginId = document.getElementById("email").value;
              var pass = document.getElementById("passworded").value;
              if(loginId != "" && loginId != null && pass != "" && pass != null) {
                  var hr = new XMLHttpRequest();
                  hr.open("POST","checklogin.php",true);
                  hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                  hr.onreadystatechange = function () {
                      if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                          error.style.display = 'block';
                          error.style.color = 'red';
                          error.innerHTML = hr.responseText;
                      }
                  }
                  hr.send("email="+loginId+"&password="+pass);
              }
              
          }


          </script>

          <script lang="javascript" type="text/javascript" src="javascript/jscript.js"></script>  
      </body>

</html>
