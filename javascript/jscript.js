$(document).ready(function() {


});

//call namecheck function on register.php
    function namecheck(){
        
        $("#passwordStatus").hide();
        $("#emailStatus").hide();
        $("#phonenumberStatus").hide();
        var status1 = document.getElementById("usernameStatus");
        $("#usernameStatus").show();
        
        var u = document.getElementById("nameer").value;
        
        
        if(u !=="" && u !== null) {
            status1.innerHTML = '....checking';
            status1.style.color = 'red';
            var hr = new XMLHttpRequest();
            hr.open("POST","check.php",true);
            hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                    status1.style.color = 'green';
                    status1.innerHTML = hr.responseText;
                    
                }
            }
            hr.send("Fullname="+u);
        }else {
            status1.style.color = 'red';
            status1.innerHTML = 'name cannot be empty!!';
        }

    }

    
    function passcheck() {
        
        $("#emailStatus").hide();
        $("#phonenumberStatus").hide();
        $("#usernameStatus").hide();
        var status2 = document.getElementById("passwordStatus");
        var approved = document.getElementById("passStatus");
        $("#passwordStatus").show();
        var p = document.getElementById("regpassword").value;
        var p1 = document.getElementById("regpassword1").value;
        
        if(p !=="" && p1 !=="" && p !== null && p1 !== null) {

            status2.style.color = 'blue';  
            status2.innerHTML = '....checking';
            var hr = new XMLHttpRequest();
            hr.open("POST","check.php",true);
            hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304)) {
                    if(hr.responseText == "<i class='fas fa-check-square'><>"){
                        approved.innerHTML = hr.response;
                    }else {
                        status2.style.color = 'red';
                        status2.innerHTML = hr.responseText;
                    }
                    
                }
            }
            hr.send("password="+p+"&password1="+p1);
        }else {
            status2.style.color = 'red';
            status2.innerHTML = 'password cannot be empty!!';
        }

    }

    function regemailcheck() {
        
        $("#passwordStatus").hide();
        $("#usernameStatus").hide();
        $("#phonenumberStatus").hide();
        var status3 = document.getElementById("emailStatus");
        status3.style.display = 'block';
        var e = document.getElementById("emailer").value;
        
        if(e !=="" ) {
            status3.innerHTML = '....checking';
            status3.style.color = 'red';
            var hr = new XMLHttpRequest();
            hr.open("POST","check.php",true);
            hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                    status3.style.color = 'green';
                    status3.innerHTML = hr.responseText;
                    
                }
            }
            hr.send("Email="+e);
        }else {
            status3.style.color = 'red';
            status3.innerHTML = 'email required!!';
        }

    }
    
    
    $('input[id="remove"]').click(function() {
        $("#regphone").show();
    });

    $('input[id="remove"]').blur(function() {

    $(this).remove();
    });


    function phpcheck() {
        $("#passwordStatus").hide();
        $("#usernameStatus").hide();
        $("#emailStatus").hide();
        var status4 = document.getElementById("phonenumberStatus");
        status4.style.display = 'block';
        var ph = document.getElementById("regphonenumber").value;
        
        if(ph !=="" ) {
            status4.innerHTML = '....processing';
            status4.style.color = 'red';
            var hr = new XMLHttpRequest();
            hr.open("POST","check.php",true);
            hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                    status4.style.color = 'green';
                    status4.innerHTML = hr.responseText;
                    
                }
            }
            hr.send("phonenumber="+ph);
        }else {
            status4.style.color = 'red';
            status4.innerHTML = 'enter your phonenumber';
        }

    }
    
    function _(e) {
            return document.getElementById(e);
        }
    
    function showSignIn() {
        var signInCont = document.getElementById("signinModal");
        signInCont.style.display = 'none';
    }
    
    
    var pForm = document.getElementById("reg-submit");
    var jForm = document.getElementById("prevent-login-submit");
    
    var closeregAlert = document.querySelector(".close-regalert");
    closeregAlert.onclick = function() {
        this.parentElement.style.display = 'none';
    }
    
    var closelogAlert = document.querySelector(".close-logalert");
    closelogAlert.onclick = function() {
        this.parentElement.style.display = 'none';
    }
    
    function showSignUp() {
        var signUpCont = document.getElementById("signupModal");
        signUpCont.style.display = 'none';
    }
    
       
    function SignUp() {
        
        pForm.onsubmit = function(event) {
            event.preventDefault();
            }
            var p_name = _("nameer").value;
            var p_emailer = _("emailer").value;
            var phonenumber = _("regphonenumber").value;
            var password = _("regpassword").value;
            var pass2 = _("regpassword1").value;
            
            if(p_name == "") {
                return false;
            }
            if (p_emailer == "") {
                return false;
            }
            if(phonenumber == "") {
                return false;
            }
            if (password == "") {
                return false;
            }
            
            if(p_name != "" &&  p_emailer != "" && phonenumber != "" && password != "") {
                var hr = new XMLHttpRequest();
                    hr.open("POST","reg.php",true);
                    hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    hr.onreadystatechange = function () {
                        if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304)) {
                            closeregAlert.parentElement.style.display = 'block';
                            closeregAlert.innerHTML = hr.responseText;
                            }
                    }
                    hr.send("Fullname="+p_name+"&Email="+p_emailer+"&phonenumber="+phonenumber+"&password="+password+"&password1="+pass2);
                }
    }


    function SignIn() {
        
        jForm.onsubmit = function(event) {
            event.preventDefault();
            }
            var loginId = _("login_id").value;
            var password = _("regpassword").value;
            
            if(loginId == "") {
                return false;
            }
            if (password == "") {
                return false;
            }
            
            if(loginId != "" && password != "") {
                var hr = new XMLHttpRequest();
                    hr.open("POST","login.php",true);
                    hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    hr.onreadystatechange = function () {
                        if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304)) {
                            closelogAlert.parentElement.style.display = 'block';
                            closelogAlert.innerHTML = hr.responseText;
                            }
                    }
                    hr.send("login_identity="+loginId+"&password="+password);
                }
    }

