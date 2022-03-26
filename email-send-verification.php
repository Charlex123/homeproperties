<?php
session_start();
require_once'dbh.php';
require_once'config.php';
require_once'mailer.php';


if(isset($_POST['submit']) && $_POST['submit'] != "" && $_POST['submit'] != null ) {

    // $Email = $_SESSION['email'];
    // $name = $_SESSION['name'];
    // $emailCode = $_SESSION['code'];
    // $errorStmt = $_SESSION['output'];
    $Email = 'charlesmuoka1@gmail.com';
    $uname = 'mr charles';
    $email_code = rand().'09087876575'.'@'.randStrGen(50);
    
    sendregistrationMail($Email,$uname,$email_code);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html !DOCTYPE>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name ="viewport" content="width=device-width,initial-scale=1.0" />
    <script lang="javascript" type="text/javascript" src="javascriptFiles/jquery-3.2.1.js"></script>
    <title>Account Activation | Trust Hub</title>
    <style>

        /*for mobile phones */
        @media screen and (max-width: 420px) {
        * {padding: 0; margin: 0;}
        body {padding: 0; margin: 0;background:#f5f8f8;}
        #container {padding: 0; margin:0;}
        .center {
        background-color:#ccc;
        width:100%;
        height: 6em;
        }
        .center #site-intro {width:100%;padding: .5%;}
        .center img{padding:0% 1%;width: 3em;margin: 4% 0 0 0;}
        .center #site-intro #head-title {float: left;padding: 3.5% 0;margin: 2em 0 0 -1em;width: 80%;color: #800;font-weight: 700;font-style: italic;font-size: 12px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;}

        #wrapper {text-align:center;margin:6% auto;border: 1px solid #f1f1f1;background:#fff;width:80%;border-radius: 10px;font-size: 14px;}
        #arrange-contents {font-size:14px;text-align:center;}
        #arrange-contents h2 {color:#b000b0;font-size:12px;padding:2%;}
        #arrange-contents ul {list-style: lower-roman;text-align:left;width:90%;padding:1%;}
        #arrange-contents ul li {padding: 1%;font-family:verdana;margin-left:10%;font-size:11px;}
        #arrange-contents #resend-code {background:#f1f1f1;padding:0%;width:30%;border-radius: 5px;margin:5% auto;color:#444;font-weight:300;font-size:11px;font-family:cambria;padding: .5%;}
        #arrange-contents #resend-code input[type=submit]#resend {margin-left:-1%;cursor:pointer;border:none;background:transparent;color:#0000ff;width:100%;font-weight:700;font-size:11px;}
        form {text-align:center;padding-bottom:5%;margin: 0 auto;}


        }

        /*for medium phones and ipad*/
        @media screen and (min-width:420px) and (max-width: 800px) {
        * {padding: 0; margin: 0;}
        body {padding: 0; margin: 0;background:#f5f8f8;}
        #container {padding: 0; margin:0;}
        .center {
        background-color:#ccc;
        width:100%;
        height: 6em;
        }
        .center #site-intro {width:100%;padding: .5%;}
        .center img{padding:0% 1%;width: 4em;margin: 2% 0 0 0;}
        .center #site-intro #head-title {float: left;padding: 3.5% 0;margin: 2em 0 0 -1em;width: 80%;color: #800;font-weight: 700;font-style: italic;font-size: 14px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;}

        #wrapper {text-align:center;margin:6% auto;border: 1px solid #f1f1f1;background:#fff;width:70%;border-radius: 10px;font-size: 14px;}
        #arrange-contents {font-size:14px;text-align:center;}
        #arrange-contents h2 {color:#b000b0;font-size:12px;padding:2%;}
        #arrange-contents ul {list-style: lower-roman;text-align:left;width:90%;padding:1%;}
        #arrange-contents ul li {padding: 1%;font-family:verdana;margin-left:10%;font-size:11px;}
        #arrange-contents #resend-code {background:#f1f1f1;padding:0%;width:30%;border-radius: 5px;margin:5% auto;color:#444;font-weight:300;font-size:12px;font-family:cambria;padding: .5%;}
        #arrange-contents #resend-code input[type=submit]#resend {margin-left:-1%;cursor:pointer;border:none;background:transparent;color:#0000ff;width:100%;font-weight:700;font-size:11px;}
        form {text-align:center;padding-bottom:5%;margin: 0 auto;}


        }


        
        /*for large phones and ipad*/
        @media screen and (min-width:800px) and (max-width: 1032px) {
        * {padding: 0; margin: 0;}
        body {padding: 0; margin: 0;background:#f5f8f8;}
        #container {padding: 0; margin:0;}
        .center {
        background-color:#ccc;
        width:100%;
        height: 6em;
        }
        .center #site-intro {width:100%;padding: .5%;}
        .center img{padding:0% 1%;width: 10%;}
        .center #site-intro #head-title {float: left;padding: 4.5% 0;color: #800;font-weight: 700;font-style: italic;font-size: 15px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;}

        #wrapper {text-align:center;margin:6% auto;border: 1px solid #f1f1f1;background:#fff;width:60%;border-radius: 10px;font-size: 14px;}
        #arrange-contents {font-size:14px;text-align:center;}
        #arrange-contents h2 {color:#b000b0;font-size:12px;padding:2%;}
        #arrange-contents ul {list-style: lower-roman;text-align:left;width:90%;padding:1%;}
        #arrange-contents ul li {padding: 1%;font-family:verdana;margin-left:10%;font-size:11.5px;}
        #arrange-contents #resend-code {background:#f1f1f1;padding:0%;width:30%;border-radius: 5px;margin:5% auto;color:#444;font-weight:300;font-size:13px;font-family:cambria;padding: .5%;}
        #arrange-contents #resend-code input[type=submit]#resend {margin-left:-1%;cursor:pointer;border:none;background:transparent;color:#0000ff;width:100%;font-weight:700;font-size:11px;}
        form {text-align:center;padding-bottom:5%;margin: 0 auto;}


        }


        /*for pc*/
        @media screen and (min-width:1032px) {
        * {padding: 0; margin: 0;}
        body {padding: 0; margin: 0;background:#f5f8f8;}
        #container {padding: 0; margin:0;}
        .center {
        background-color:#ccc;
        width:100%;
        height: 6em;
        }
        .center #site-intro {width:80%;padding: .5%;}
        .center img{padding:0% 1%;width: 10%;}
        .center #site-intro #head-title {float: left;padding: 4.5% 0;color: #800;font-weight: 700;font-style: italic;font-size: 18px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;}
        #wrapper {text-align:center;margin:6% auto;border: 1px solid #f1f1f1;background:#fff;width:50%;border-radius: 10px;font-size: 14px;}
        #arrange-contents {font-size:14px;text-align:center;}
        #arrange-contents h2 {color:#b000b0;font-size:12px;padding:2%;}
        #arrange-contents ul {list-style: lower-roman;text-align:left;width:90%;padding:1%;}
        #arrange-contents ul li {padding: 1%;font-family:verdana;margin-left:10%;font-size:11.5px;}
        #arrange-contents #resend-code {background:#f1f1f1;padding:0%;width:30%;border-radius: 5px;margin:5% auto;color:#444;font-weight:300;font-size:13px;font-family:cambria;padding: .5%;}
        #arrange-contents #resend-code input[type=submit]#resend {margin-left:-1%;cursor:pointer;border:none;background:transparent;color:#0000ff;width:100%;font-weight:700;font-size:11px;}
        form {text-align:center;padding-bottom:5%;margin: 0 auto;}


        }
    </style>
    </head>
        <body>
            <div id="container">
                <header class="center">
                    <div id='site-intro' style="float:left;"><img src="images/sitelogo4.svg" style="float:left;"> <div id="head-title">....... tailoring your entertainment experience to your needs.</div></div>
                </header>

                <div id="wrapper">
                        <div id="arrange-contents"><h2> Activate Your Account</h2>
                        <div><?php echo @$errorStmt;?></div>
                            <ul>
                                <li>
                                    Check your email, you have been sent an email CODE during your time of registration, it might take 10 to 15minutes to arrive.
                                </li>
                                <li>
                                    Follow the instructions as sent to your mail
                                </li>
                                <li>
                                    If you have not received a mail, please verify that you registered with your correct email address
                                </li>
                            </ul>
                            <div id="resend-code" title="resend code;">Did not receive email after 10 to 15 minutes?<form action="" method="POST"><input type="submit" name="submit" id ="resend" value="resend email"></form></div>
                        </div>
                        
                </div>

        </div>                
    </body>
  <script type="text/javascript" lang="javascript" src="ajaxfiles.js"></script>
</html>



