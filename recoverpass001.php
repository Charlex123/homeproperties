<?php
session_start();
require_once('dbh.php');


if(isset($_POST['submit']) && isset($_POST['Email']) && ($_POST['Email'] !='')){
  $Email= trim(filter_var($_POST['Email'],FILTER_VALIDATE_EMAIL));//get users emails for password reset
  $_SESSION['email'] = trim(filter_var($_POST['Email'],FILTER_VALIDATE_EMAIL));
  $_SESSION['email'];
  $emailcut = substr($Email, 0, 5);
  $hash = md5(uniqid(true)); //get alphanumeric code for users password reset
  $resetcode = $emailcut.$hash;
  $_SESSION['resetcode'] = $resetcode;
  $_SESSION['resetcode'];

class passRecover extends dbh {
    
    public function recoverPassword($Email, $resetcode) {

      try{
    
    
      if(!filter_var($Email, FILTER_VALIDATE_EMAIL)===false) {
      $con= new PDO("mysql:host=$this->serverhost;dbname=starstv;" , $this->serverusername, $this->serverpassword);
      $checkmail= $con->prepare("SELECT Email FROM users WHERE Email = ? LIMIT 1");
      $checkmail -> bindParam(1,$Email,PDO::PARAM_STR);
      $row=$checkmail->execute();

      if($row){

        $row= $checkmail->fetch(PDO::FETCH_ASSOC);
        $results[]=$row;
        $checkmail->rowCount();
        if($row=$checkmail->rowCount()>0) {
        $lostpass=$resetcode;
        $updat=$con->prepare("UPDATE users SET lostpass ='".$resetcode."'  WHERE Email=? LIMIT 1");
        $updat ->bindParam(1,$Email,PDO::PARAM_STR);  
             
        //update our users table with unique password hash
        //sending them their password code
         if($updat->execute()){ 
        $headers= " From: Support@greensharescommunity.net\r\n ";
        $headers .= " Do not Reply\r\n";
        $headers .= " CC:greensharescommunity.net\r\n";
        $headers .= " MIME-Version:1.0\r\n";
        $headers .= " Content-Type: text/html; charset=utf-8\r\n";                    
         $to.= $email;
         $subject.= "Your Password Recover Link\r\n";
         $header.= "From https://www.silverhub.com\r\n";
         $message.="Dear Esteemed participant, here is Your link to Reset and Recover Your Password<br>\r\n";
         $message.="To recover your password and Activate your account, COPY THE GENERATED PASSWORD BELOW:<br><strong>$resetcode</strong><br> \r\n";
         $message.="AND PASTE IT IN THE UPDATE PASSWORD PAGE THAT WILL OPEN ON CLICKING THE BELOW LINK\r\n";
         $message.= '<h4>'.$_SERVER['SERVER_NAME'].'/silverhub/forgotpass.php?email='.$Email.'&resetcode='.$resetcode.'</h4>';
         
         $message= mail($to, $subject, $message, $header);
  
         header("location:forgotpass0023.php");
             
            return false;
          }else{
            echo 'password update failed, invalid email address';
            return false;
          }

            }else{
               echo 'Hello the email you provided does not exist in our database';
              return false;
            }
          }
          else{
               echo 'Hello the email you provided does not belong to any account';
               return false;
            }
          }
        }catch(PDOException $e) {
          throw new Exception($e->getMessage());

        }

    }

} 
$object = new passRecover();
$object ->recoverPassword($Email, $resetcode);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html !DOCTYPE>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name ="viewport" content="width=device-width,initial-scale=1.0" />
    <script lang="javascript" type="text/javascript" src="javascriptFiles/jquery-3.2.1.js"></script>
    <style>


      @media screen and (max-width:420px) {
      * {margin:0;padding:0;}
      body {margin: 0;padding:0;background:#f9f9f9;}
      .center {
        background-color:#ccc;
        width:100%;
        height: 6em;
        }
      .center #site-intro {width:100%;padding: .5%;}
      .center img{padding:0% 1%;width: 4em;margin: 1em 0 0 0;}
      .center #site-intro #head-title {float: left;padding: 3.5% 0;margin: 2em 0 0 -1em;width: 80%;color: #800;font-weight: 700;font-style: italic;font-size: 14px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;}
      form {
        background-color:#fff;border:1px solid #f1f1f1;width:75%;height:30%;border-top-right-radius:10px;border-top-left-radius:10px;border-bottom-right-radius:10px;border-bottom-left-radius:10px;text-align:center;margin: 5% auto;
      }
      h5 {color:brown; margin: 2% auto;font-weight:700;font-family: cambria;}
      form label#formgroup {margin-left:-20px;font-weight:700;font-size:12px;color:#888;}
      form input[type=email] {width:60%;height:20px;outline:none;border:none;border-bottom:1px solid #f1f1f1;margin-left:10px;background:#f9f9f9;}
      form input[type=submit] {background:transparent;color:#800080;text-decoration:none; font-weight:700;font-size:11px; border:none ;padding: 5px;margin:2% auto;width:75%;}

      }

      @media screen and (min-width:420px) and (max-width: 800px) {
      * {margin:0;padding:0;}
      body {margin: 0;padding:0;background:#f9f9f9;}
      .center {
        background-color:#ccc;
        width:100%;
        height: 6em;
        }
      .center #site-intro {width:100%;padding: .5%;}
      .center img{padding:0% 1%;width: 4em;margin: 1em 0 0 0;}
      .center #site-intro #head-title {float: left;padding: 3.5% 0;margin: 2em 0 0 -1em;width: 80%;color: #800;font-weight: 700;font-style: italic;font-size: 14px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;}
      form {
        background-color:#fff;border:1px solid #f1f1f1;width:75%;height:30%;border-top-right-radius:10px;border-top-left-radius:10px;border-bottom-right-radius:10px;border-bottom-left-radius:10px;text-align:center;margin: 5% auto;
      }
      h5 {color:brown; margin: 2% auto;font-weight:700;font-family: cambria;}
      form label#formgroup {margin-left:-20px;font-weight:700;font-size:12px;color:#888;}
      form input[type=email] {width:60%;height:25px;outline:none;border:none;border-bottom:1px solid #f1f1f1;margin-left:10px;background:#f9f9f9;}
      form input[type=submit] {background:transparent;color:#800080;text-decoration:none; font-weight:700;font-size:11px; border:none ;padding: 5px;margin:2% auto;width:15%;}

      }


      @media screen and (min-width:800px) and (max-width: 1032px) {
      * {margin:0;padding:0;}
      body {margin: 0;padding:0;background:#f9f9f9;}
      .center {
        background-color:#ccc;
        width:100%;
        height: 6em;
        }
      .center #site-intro {width:100%;padding: .5%;}
      .center img{padding:0% 1%;width: 5em;}
      .center #site-intro #head-title {float: left;padding: 4.5% 0;color: #800;font-weight: 700;font-style: italic;font-size: 14px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;}
      form {
        background-color:#fff;border:1px solid #f1f1f1;width:65%;height:30%;border-top-right-radius:10px;border-top-left-radius:10px;border-bottom-right-radius:10px;border-bottom-left-radius:10px;text-align:center;margin: 5% auto;
      }
      h5 {color:brown; margin: 2% auto;font-weight:700;font-family: cambria;}
      form label#formgroup {margin-left:-20px;font-weight:700;font-size:12px;color:#888;}
      form input[type=email] {width:60%;height:25px;outline:none;border:none;border-bottom:1px solid #f1f1f1;margin-left:10px;background:#f9f9f9;}
      form input[type=submit] {background:transparent;color:#800080;text-decoration:none; font-weight:700;font-size:11px; border:none ;padding: 5px;margin:2% auto;width:15%;}
    
      }

      @media screen and (min-width:1032px) {
      * {margin:0;padding:0;}
      body {margin: 0;padding:0;background:#f9f9f9;}
      .center {
        background-color:#ccc;
        width:100%;
        height: 6em;
        }
      .center #site-intro {width:80%;padding: .5%;}
      .center img{padding:0% 1%;width: 5em;}
      .center #site-intro #head-title {float: left;padding: 4.5% 0;color: #800;font-weight: 700;font-style: italic;font-size: 14px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;}
      form {
        background-color:#fff;border:1px solid #f1f1f1;width:40%;height:30%;border-top-right-radius:10px;border-top-left-radius:10px;border-bottom-right-radius:10px;border-bottom-left-radius:10px;text-align:center;margin: 5% auto;
      }
      h5 {color:brown; margin: 2% auto;font-weight:700;font-family: cambria;}
      form label#formgroup {margin-left:-20px;font-weight:700;font-size:12px;color:#888;}
      form input[type=email] {width:60%;height:25px;outline:none;border:none;border-bottom:1px solid #f1f1f1;margin-left:10px;background:#f9f9f9;}
      form input[type=submit] {background:transparent;color:#800080;text-decoration:none; font-weight:700;font-size:11px; border:none ;padding: 5px;margin:2% auto;width:15%;}
    
      }
    </style>
    <title>Tee properties | recover password</title>
    
    </head>
        <body>
            <div id="container">
                <header class="center">
                    <div id='site-intro' style="float:left;"><img src="images/sitelogo4.svg" style="float:left;"> <div id="head-title">....... tailoring your music and entertainment experience to your entertainment needs.</div></div>
                </header>
                       
        <form action="" method='POST' autocomplete="off">
                    
              <h5><span>&nbsp;Recover Your Password</span></h5>
              <br>
              <div class="form-group">
            
                <label id='formgroup'>Email:</label>
               
                  <input type="email" class="form-control" name='Email' placeholder="Email" required>
                </div>
              
             <input type="submit" class="form-control" name='submit' value="Submit" />

        </form>
       <footer>

       </footer>
       </div>
        </body>
</html>