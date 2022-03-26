<?php
require_once'dbh.php';
require_once'config.php';
require_once 'PHPMailer/PHPMailerAutoload.php';
require_once 'PHPMailer/class.phpmailer.php';
require_once 'PHPMailer/class.smtp.php';


function sendregistrationMail($Email,$email_code,$uname) {

$mail = new PHPMailer;
    
$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'charlesmuoka1@gmail.com';                 // SMTP username
$mail->Password = 'secret';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('charlesmuoka1@gmail.com', 'do not reply');
$mail->addAddress($Email, $uname);     // Add a recipient
$mail->addReplyTo('charlesmuoka1@gmail.com', 'Information');

$mail->addAttachment('images/svclogo.png');         // Add attachments
$mail->addAttachment('images/svclogo.png', 'newsitelogo.svg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Springvilleconcepts registration verification';
$mail->Body    = "<img src='images/house.jpg'/><br><p>Hello $uname, you have successfully registered with Springvilleconcepts Real Estate Company
                <b>to complete your registration process, click the link below to verify and activate your account</b>
                <h4 style='color:blue;'><a>".$_SERVER['SERVER_NAME']."/springvilleconcepts.com.ng/activate.php?active=".$email_code."</a></h4>
                </body></html>";
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    
} else {
    $_SESSION['code'] = $email_code;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $Email;
    
    header("Location:email-send-verification.php");
    exit();  

}
}



function accountverificationSuccess($to,$email,$body,$subject,$name) {
    
$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'charlemuoka1@gmail.com';                 // SMTP username
$mail->Password = 'secret';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('charlesmuoka1@gmail.com', 'do not reply');
$mail->addAddress($Email, $name);     // Add a recipient
$mail->addReplyTo('charlesmuoka1@gmail.com', 'Information');

$mail->addAttachment('images/sitelogo4.svg');         // Add attachments
$mail->addAttachment('images/sitelogo4.svg', 'newsitelogo.svg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'account verification successful';
$mail->Body    = "<img src='images/fine.jpg'/><br><p>Yes $name, you have successfully verified and activated your account with us, <br><span style='color:#555;'> you are now a bonafide member of mymusicbaz community and we hope to keep your music and entertainment experience with us the best you can image</span></p>";
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit();
} else {
    echo 'Message has been sent';
    exit();
}

}


function commentMAil($Email,$rname,$name) {
    
$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'charlemuoka1@gmail.com';                 // SMTP username
$mail->Password = 'secret';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('charlesmuoka1@gmail.com', 'do not reply');
$mail->addAddress($Email, $name);     // Add a recipient
$mail->addReplyTo('charlesmuoka1@gmail.com', 'Information');

$mail->addAttachment('images/sitelogo4.svg');         // Add attachments
$mail->addAttachment('images/sitelogo4.svg', 'newsitelogo.svg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'replies to your comment on a video';
$mail->Body    = "<img src='images/fine.jpg'/><br><p>Hello $name, ".$rname.", replied to your comment on a video, reply back to him</p>";
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    
} else {
    echo 'Message has been sent';
    
}
}

