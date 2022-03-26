

<html !DOCTYPE>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, maximum-scale=1,minimum-scale=1,initial-scale=1" />
<link rel="shortcut icon" href="images/favicon.png" />
<link rel="stylesheet" type='text/css' href="bootstrap/bootstrap-4.1.3-dist/css/bootstrap.min.css"> 
<script lang="javascript" type="text/javascript" src="javascript/jquery-3.2.1.js"></script>

<link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Chilanka' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Libre Baskerville' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=EB Garamond' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Exo' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Permanent Marker' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Antic' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" type='text/css' href="fontawesome/fontawesomefiles/css/fontawesome.min.css">
<link rel="stylesheet" type='text/css' href="fontawesome/fontawesomefiles/css/all.min.css">
<script lang="javascript" type="text/javascript" src="fontawesome/fontawesomefiles/js/fontawesome.min.js"></script>
<script lang="javascript" type="text/javascript" src="fontawesome/fontawesomefiles/js/all.min.js"></script>
<script lang="javascript" type="text/javascript" src="bootstrap/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type='text/css' href="bootstrap/bootstrap-4.1.3-dist/css/bootstrap.min.css"> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/log.css">
<script lang="javascript" type="text/javascript" src="javascript/jquery-3.2.1.js"></script>
<style>
  
</style>
<title>Tee Properties | Admin Log in</title>
</head>

<body style='text-align:center;margin: auto;'>

    <div class='signin_container col-12 text-center' style="width: 80%;text-align: center;margin: auto;">
      
        <div class="wrapper ">

          <div id='signin-intro'>Admin Login</div>
                            
            <form action="adminpage.php" method='POST' id='style-me' autocomplete='off'>
                <i class="fas fa-user fa-4x"></i>
                    
                    <h5><span id='signin'>Sign in</span></h5>
                    
                    <div id="validation"></div>
                     
                    <div class="form-group">
                        <label id="email" class="row text-left" style='margin-left: .3rem'>Enter Login Ad </label>
                        <input type="varchar" class="form-control" name='login_identity' id="login_id" value="<?php echo @$_P['login_identity']?>" onplaceholder="enter email or name">
                    </div>
                    
                    <div class="form-group">
                        <label id="password" class="row text-left" style='margin-left: .3rem'>Password:</label>
                        <input type="password" class="form-control" name='password' id="passworded" onmouseout='loginCheck()' placeholder="enter password"><div style='clear:right;'></div>
                    </div>
                    
                    <div class="form-group row text-left" style="margin-left: .3rem">
                        <input type="submit" class="btn btn-lg btn-success" name='submit' id="submited-form" value='Login' title="login" >
                    </div>
                    
            </form>
        </div>
  </div>
<script type="text/javascript">

    function _(e) {
        return document.getElementById(e);
    }
    var error = document.getElementById("validation");

    function loginIdCheck() {
        var log = true;
        var loginId = document.getElementById("login_id").value;
        if(loginId != "" && loginId != null) {
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
            hr.send("login_identity="+loginId+"&log="+log);
        }else {
            error.style.display = 'block';
            error.style.color = 'red';
            error.innerHTML = 'enter your name or email';
            return false;
        }

    }

    function showPassword() {
        var ddd = document.getElementById("passworded");
        var hideP = document.getElementById("hideP");

        if(ddd.getAttribute('type') == 'password') {
            ddd.setAttribute("type",'varchar');
            hideP.innerHTML = 'hide';
            hideP.style.color = 'blue';
        }else {
            ddd.setAttribute("type",'password');
            hideP.innerHTML = 'show';
            hideP.style.color = 'green';
        }
      
      }

    function loginCheck() {
        
        var log = true;
        var loginId = document.getElementById("login_id").value;
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
            hr.send("login_identity="+loginId+"&password="+pass);
        }
        
    }


</script>

<script lang="javascript" type="text/javascript" src="javascript/jscript.js"></script>
</body>
</html>
