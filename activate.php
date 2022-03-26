<?php
@session_start();
require_once('dbh.php');

if(!isset($_GET['active']) && empty($_GET['active']) && $_GET['active'] == null ) {
    echo 'Email Codes required !!!!';
    exit();
}elseif(isset($_GET['active']) && !empty($_GET['active']) && $_GET['active'] != null ) {
    $email_code = filter_var(($_GET['active']), FILTER_SANITIZE_STRING);
    $explode = explode('@',$email_code);
    $emailCode = $explode[0];
    if($emailCode == "" || $emailCode == null) {
        exit();
    }
class activate extends dbh {
    
 public function getUserByUserid($emailCode) {
     try{
        $email_code = filter_var(($_GET['active']), FILTER_SANITIZE_STRING);
        $explode = explode('@',$email_code);
        $emailCode = $explode[0];
        $con = new PDO("mysql:host=$this->serverhost;dbname=teeproperties;" , $this->serverusername, $this->serverpassword);

        $lon = $con->prepare("SELECT * FROM clientsTable WHERE emailCode = ? LIMIT 1");
        $lon -> bindParam(1, $emailCode);
        $lon -> execute();
        if(!$lon){
        die("Execute query error, because:".print_r($connect->errorinfo()));
        }else{
        $result = $lon->fetch(PDO::FETCH_ASSOC);
        $_SESSION['emailcode'] = $result['emailCode'];
        return $result;
             }
             
        }catch(PDOException $e){
       throw new PDOException($e->getMessage());
     }
}



public function activateMe($emailCode){
   try{ 
        $email_code = filter_var(($_GET['active']), FILTER_SANITIZE_STRING);
        $explode = explode('@',$email_code);
        $emailCode = $explode[0];
        $_SESSION['emailcode'];
        if($emailCode === $_SESSION['emailcode']) {
            $con = new PDO("mysql:host=$this->serverhost;dbname=teeproperties;" , $this->serverusername, $this->serverpassword);
            $activateme = $con->prepare("UPDATE clientsTable SET Active = 1, emailCode = 0 WHERE emailCode = ?");
            $activateme->bindParam(1, $emailCode, PDO::PARAM_STR);
            
            if($activateme->execute()){
                header("Location:signin.php");
                exit();
                }else{
                echo 'Account Activation failed, kindly verify your email code';
                exit();
                }

                }else{
                    echo 'invalid email code';
                    exit();
                }
                
            }catch(PDOException $e) {
            throw new PDOException($e->getMessage());
        }
        }

        }
        $activated = new activate();
        $activated->getUserByUserid($emailCode);
        $activated ->activateMe($emailCode);

}
