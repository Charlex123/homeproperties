 <?php

    session_start();

    //requiring mydatabase and connection
    require_once('config.php');

    if( isset($_POST['login_identity']) && $_POST['login_identity'] != "" && isset($_POST['password']) && $_POST['password'] != ""){
        
        $error = ""; 

        if(preg_match("/^[a-z `A-Z0-9@.]*$/",$_POST['login_identity'])) {
        $login_identity = $_POST['login_identity'];

        $explode = explode('@',$login_identity);
       
        if(@$explode[1] == null) {

        if(strlen($login_identity) < 3 || strlen($login_identity) > 80) {
                echo 'name must be alphanumerics between 3 and 80';
                
            }
        $password = strip_tags($_POST['password']);
    
        $Active = 1;

            $con = new PDO("mysql:host=$serverhost;dbname=teeproperties;" , $serverusername, $serverpassword);
            $login = $con->prepare("SELECT * FROM clientsTable WHERE clientName = ? ");
            $login -> bindParam(1, $login_identity, PDO::PARAM_STR);
            
            if($login->execute()){
            $re = $login -> fetch(PDO::FETCH_ASSOC);
            $id = $re['id'];
            
            if($login->rowCount() > 0 && $re['Active'] == 0) {
            
            $error = "<div style='background:#ffc0cb;width:85%;text-align:center;border-radius:5px;padding:2%;margin: 0 auto;color: #ff0000;'>Your account is inactive, we already sent you your activation code in your email</div>";
            
                }else if($login->rowCount() == 0 && $re['Active'] == null){
                $error = "<div style='background:#ffc0cb;width:85%;text-align:center;border-radius:5px;padding:2%;margin: 0 auto;'>You do not have account with us <a href='register.php' style='color:#008;font-style:italic;text-decoration:none;'>create account</a></div>";
                
            }else if($login->rowCount() > 0 && $re['Active'] == 1){
                if(password_verify($password, $re['password'])) {
                    $ul = $con->prepare("UPDATE clientsTable SET WHERE id = ? ");
                    $ul -> bindParam(1,$id);
                    $ul -> execute();
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
        $password = strip_tags($_POST['password']);
    
        $Active = 1;

            $con = new PDO("mysql:host=$serverhost;dbname=teeproperties;" , $serverusername, $serverpassword);
            $login = $con->prepare("SELECT * FROM clientsTable WHERE clientEmail = ? ");
            $login -> bindParam(1, $login_identity, PDO::PARAM_STR);
            
            if($login->execute()){
            $re = $login -> fetch(PDO::FETCH_ASSOC);
            $id = $re['id'];
            
            if($login->rowCount() > 0 && $re['Active'] == 0) {
            
            $error = "<div style='background:#ffc0cb;width:85%;text-align:center;border-radius:5px;padding:2%;margin: 0 auto;color: #ff0000;'>Your account is inactive, we already sent you your activation code in your email</div>";
            
                }else if($login->rowCount() == 0 && $re['Active'] == null){
                $error = "<div style='background:#ffc0cb;width:85%;text-align:center;border-radius:5px;padding:2%;margin: 0 auto;color: #ff0000;'>You do not have account with us <a href='register.php' style='text-decoration;font-style:italic;color:#008;'>create account</a></div>";
                
            }else if($login->rowCount() > 0 && $re['Active'] == 1) {
                if(password_verify($password, $re['password'])) {
                    $ul = $con->prepare("UPDATE clientsTable SET WHERE id = ? ");
                    $ul -> bindParam(1,$id);
                    $ul -> execute();
                    $g = $con->prepare("SELECT * FROM clientsTable WHERE id = ? ");
                    $g -> bindParam(1,$id);
                    $g ->execute();
                    $h = $g ->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['user'] = $h;
                    $name = $h['uname'];

                    $expiry = time()+20*60*60;
                                
                    setcookie('myName',htmlentities(trim($name)),$expiry,'','','',  TRUE); 
                    
                    header("Location:userpage.php?user=$name");
                    exit();
                    }else{
                    $error = "<div style='background:#ffc0cb;width:85%;text-align:center;border-radius:5px;margin: 0 auto;color:#ff0000;padding:2%;'>email and password does not match</div>";
                }
            }
            }else {
                $error = "<div style='background:#ffc0cb;width:85%;text-align:center;border-radius:5px;padding:2%;margin: 0 auto;color: #ff0000;'>oops something happened, check your login details and try again</div>";
            }
        }
    }else {
        $error = "<div style='background:#ffc0cb;width:85%;text-align:center;border-radius:5px;padding:2%;margin: 0 auto;color: #ff0000;'>unrecognized login details</div>";
    }
}
    