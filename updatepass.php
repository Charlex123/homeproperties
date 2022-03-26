<?php
session_start();
require_once'dbh.php';


if(isset($_POST['submit']) && isset($_POST['Email']) && $_POST['Email'] !=null && isset($_POST['password']) && $_POST['password'] !=null && isset($_POST['password1'])  && $_POST['password1'] !=null && isset($_POST['resetcode']) && $_POST['resetcode'] !=="" ) {
$Email = trim(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL));
$resetcode =  trim(strip_tags(filter_var(($_POST['resetcode']), FILTER_SANITIZE_STRING)));

$password = isset($_POST['password']) ? $_POST['password'] : false;
$password1 = isset($_POST['password1']) ? $_POST['password1'] : false;

$err_up = "";

if($password != $password1) {
           //$error_password1 = 'Password and RepeatPassword do not match';
           $err_up = 'Password and RepeatPassword do not match';
          
  }
if(strlen($password) < 5) {
           //$error_password1 = 'Weak password, Password must be more than 5 characters';
           $err_up = 'Weak password, Password must be more than 5 characters';
           
  }
if(!filter_var($_POST['Email'],FILTER_VALIDATE_EMAIL) && $resetcode != $_POST['resetcode'] ) {
          $err_up = 'invalid email and resetcode';
          
} elseif($err_up =="" && $resetcode != null && $Email != null) {
    $Email = ($_POST['Email']);
    $resetcode = $resetcode;
class passUpdate extends dbh {
   public function updatePassword($Email, $resetcode) {

    try{
      $connect= new PDO("mysql:host=$this->serverhost;dbname=starstv;" , $this->serverusername, $this->serverpassword);
      $checkmail=$connect->prepare("SELECT Email FROM users WHERE Email= ?");
      $checkmail ->bindParam(1,$Email,PDO::PARAM_STR);
      $checkmail->execute();
      $row=$checkmail->execute();

      if($row) {
        $row=$checkmail->fetch(PDO::FETCH_ASSOC);
          $results[]= $row;
          $checkmail->rowCount();

      if($checkmail->rowCount()>0) {
        $checkmail->rowCount();
       
        if(isset($_POST['password']) && ($_POST['password'])!=null) {
           $password = trim($_POST['password']);
           $password1 = trim($_POST['password1']);
           $passenc= password_hash($password, PASSWORD_DEFAULT, array('cost'=>11));

           if($password===$password1) {

             $update= $connect->prepare("UPDATE users SET lostpass=0, password= '".$passenc."' WHERE Email = ? ");
             $update -> bindParam(1, $Email,PDO::PARAM_STR);
              $update->execute();

             if($update) {
             header("Location: sign_in.php");
                exit();
              }else{
                 $err_up = 'sorry we could not update your password';
                 exit();
              }
           }else {
               $err_up = 'the passwords you supplied do not match';
               exit();
           }

        }else{
           
            $err_up = 'Please fill in your email, password and repeat password to update your password<br>';
        
            exit();
        }

      }else{
        $err_up = 'invalid email and resetcode combination';
        exit();
      }
    }else{
     $err_up = 'user does not exist';
     exit();
    }
  }catch(PDOExceoption $e) {
      throw new Exception($e->getMessage());

    }

}
 
}
$object = new passUpdate();
$object -> updatePassword($Email, $resetcode);

    
}

} 
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html !DOCTYPE>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name ="viewport" content="width=device-width,initial-scale=1.0" />
    <script lang="javascript" type="text/javascript" src="javascriptFiles/jquery-3.2.1.js"></script>
    <title>mymusicbaz.com | update new password</title>
    <style>
      #container {background:#f5fffa;margin:0px auto;width:100%;}
      header {
          background-color:#ccc;
          width:100%;
          height: 6em;
      }
      .form-input {margin:5% 10px 10px 25% ;background:#fff;width:40%;border-radius:15px;}
      footer {
          background-color:#ccc;
          width:100%;
          margin-top: 10em;
          height: 15em;
      }
    </style>
    </head>
        <body>
            <div id="container">
                <header>

                </header>
                        
      <form action="" method='POST' class='form-input'>
               
                <h5><span style="color:brown; margin-left:20px;margin-top:20px;font-size:20px;font-weight:bold;">&nbsp;UPDATE NEW PASSWORD</span></h5>    
              <br>
              <div class="form-group">
              
            
                <label style="margin-left:20px;font-weight:bold;font-size:15px;color:green;">Enter Your ResetCode:</label>
              
                  <input type="varchar" class="form-control" name='resetcode' id ="resetcode" onblur="checkResetcode()"placeholder="paste your resetcode" style="width:60%;height:35px;outline:none;border:none;border-bottom:2px solid gray;margin-left:10px;background:transparent;" required><span id="resetStatus"></span>
                </div>
                <br>
            <div class="form-group">
                <label style="margin-left:20px;font-weight:bold;font-size:15px;color:green;">Enter Your Email:</label>
             
                  <input type="varchar" class="form-control" name='Email' id ="Email" onblur="checkEmail()" placeholder="Email" style="width:60%;margin-left:7%;height:35px;outline:none;border:none;border-bottom:2px solid gray;background:transparent;" required><span id="E_mailStatus"></span>
                </div>
              <br>
              <div class="form-group">
             
                <label style="margin-left:20px;font-weight:bold;font-size:15px;color:green;">New Password:</label>
            
                  <input type="password" class="form-control" name='password' id ="password" onblur="checkPass()" placeholder="Enter Your New Password" style="width:60%;height:35px;outline:none;border:none;border-bottom:2px solid gray;margin-left:10%;background:transparent;" required>
                </div>
             <br>
              <div class="form-group">
                <label style="margin-left:20px;font-weight:bold;font-size:15px;color:green;">Repeat New Password:</label>
             
                  <input type="password" class="form-control" name='password1' id ="password1" onblur="checkPass()" placeholder="Re-Enter Your New Password" style="width:60%;height:35px;outline:none;border:none;border-bottom:2px solid gray;margin-left:10px;background:transparent;" required><span id="pStatus"></span>
                </div>
              <input type="submit" name="submit" value="Update New Password" style='margin-left:5%;margin-top:30px;cursor:pointer;border:none;background:green;height:35px;width:150px;font-weight:bold;'/><input type="reset" name="submit" value="cancel" style="margin-left:30px;border:none;background:violet;width:150px;font-weight:bold;text-decoration:none;padding: 8px;"/>
        </form>
      <footer>
        
      </footer>
      </div>
    </body>
  <script type="text/javascript" lang="javascript" src="javascript/jscript.js"></script>
</html>