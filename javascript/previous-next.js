$(document).ready(function() {
$("#next-search").hide();
})

var start = 0;
var limit = 4;
var start1 = 0;
var limit1 = 4;
var start2 = 0;
var limit2 = 3;
var start3 = 0;
var limit3 = 4;
var start4 = 0;
var limit4 = 4;

var formInput = document.getElementById("prevent-default-form");
var submitButton = document.getElementById("search-result");
var search_query = document.getElementById("search-input").value;
var formInput1 = document.getElementById("asearchprevent-default-form");
reachedMax = false;

function loadnextartistSelect() {
    $("#circular-progress-bar8").show();
    getnextPreferredArtists();
    return false;
}

function loadnextpreferredArtist() {
        $("#circular-progress-bar5").show();
        getnextArtists();
        return false;
    }


function loadnextSearch() {
    $("#circular-progress-bar9").show();
    getnextSearch();
    $("#circular-progress-bar9").hide();
    return false; 
}


 function getnextArtists() {
   
     if (reachedMax){
        
     return false;
     }
     $.ajax({
         url: "next-selected-artists.php",
         method: "POST",
         dataType: "text",
         data:{
             getnextArtists:1,
             start:start,
             limit:limit
         },
         success: function (response) {
             if(response == reachedMax) {
                 reachedMax == true;
                 
                 $(".next-y").html('NO MORE DATA');
                 $("#circular-progress-bar5").hide();
                 return false;
                }else {
                 start += limit;
                 $(".artists-selection").append(response);
                 $("#circular-progress-bar5").hide();
                 return false;
                 }
             }
         })
 }



function getnextVideos() {
   
    if (reachedMax){
        
    return false;
    }
    $.ajax({
        url: "load_more_videos.php",
        method: "POST",
        dataType: "text",
        data:{
            getnextVideos:1,
            start1:start1,
            limit1:limit1
        },
        success: function (response) {
            if(response == reachedMax) {
                reachedMax == true;
                $(".next-xs").html('NO MORE DATA');
                $("#circular-progress-bar6").hide();
                return false;
               }else {
                start1 += limit1;
                $(".showVideos").append(response);
                $("#circular-progress-bar6").hide();
                return false;
                }
            }
        })
}




function getnextPreferredArtists() {
   
    if (reachedMax){
        
    return false;
    }
    $.ajax({
        url: "choose-preferred-artists.php",
        method: "POST",
        dataType: "text",
        data:{
            getnextPreferredArtists:1,
            start3:start3,
            limit3:limit3
        },
        success: function (response) {
            if(response == reachedMax) {
                reachedMax == true;
                
                $(".next-px").html('NO MORE DATA');
                $("#circular-progress-bar8").hide();
                return false;
                }else {
                start3 += limit3;
                $(".preferred-artists-select").append(response);
                $("#circular-progress-bar8").hide();
                return false;
                }
            }
        })
}







function getnextSearch() {
 
    if (reachedMax){
        
    return false;
    }
    $.ajax({
        url: "next-search.php",
        method: "POST",
        dataType: "text",
        data:{
            getnextSearch:1,
            start4:start4,
            limit4:limit4,
            search_query:search_query
        },
        success: function (response) {
            if(response == reachedMax) {
                reachedMax == true;
                $(".load-next-search").html('NO MORE DATA');
                $("#circular-progress-bar9").hide();
                return false;
                }else {
                start4 += limit4;
                $(".paste-videos").append(response);
                $("#circular-progress-bar9").hide();
                return false;
                }
            }
        })

}


//send keypress input to php............
//  $("#search-input").keypress(function(e) {
//      var keyPressed = String.fromCharCode(e.which);
//      var keep = document.getElementById("search-input");
    
//      var j = document.getElementById("kkkk");
//          j.style.display = 'block';
//       if(keyPressed != "") {
          
//           var hr = new XMLHttpRequest();
//               hr.open("POST","quickpostsearch.php",true);
//               hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
//               hr.onreadystatechange = function () {
//                   if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
//                      j.innerHTML = hr.responseText;
//                  }
//               }
//               hr.send("keyPressed="+keyPressed);
//             }
    
//  });


$("#search-input-form").keypress(function(eve) {
    var keyPressed = String.fromCharCode(eve.which);
    var keep = document.getElementById("search-input-form");
    
    var u = document.getElementById("kkkkk");
    
        u.style.display = 'block';
        
     if(keyPressed != "") {
          
         var hr = new XMLHttpRequest();
             hr.open("POST","choose-artistquicksearch.php",true);
             hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
             hr.onreadystatechange = function () {
                 if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                    u.innerHTML = hr.responseText;
                    return false;
                }
             }
             hr.send("keyPressed="+keyPressed);
           }else {
               u.innerHTML = 'enter search';
               return false;
           }
    
});


$("#asearch-input-form").keypress(function(event) {
    var keypressed = String.fromCharCode(event.which);
    
    var l = document.getElementById("kkkkkk");
    
        l.style.display = 'block';
        
     if(keypressed != "") {
         
         var hr = new XMLHttpRequest();
             hr.open("POST","fav-artistsquicksearch.php",true);
             hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
             hr.onreadystatechange = function () {
                 if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                    l.innerHTML = hr.responseText;
                    return false;
                    }
             }
             hr.send("keyPressed="+keypressed);
           }
    
});

//put keypress search result in search input bar
var j = document.getElementById("kkkk");
$("body").on("click", ".result",function() {
var searchResult = $(this).attr("value");
$("#search-input").val(searchResult);
if($("#search-input").val(searchResult)) {
    j.style.display = 'none';
}
});


//put keypress search result in search input bar
var u = document.getElementById("kkkkk");
$("body").on("click", ".change",function() {
var searchResults = $(this).attr("value");
$("#search-input-form").val(searchResults);
if($("#search-input-form").val(searchResults)) {
    u.style.display = 'none';
}
});


//put keypress search result in search input bar
var l = document.getElementById("kkkkkk");
$("body").on("click", ".achange",function() {
var searchResults = $(this).attr("value");
$("#asearch-input-form").val(searchResults);
if($("#asearch-input-form").val(searchResults)) {
    l.style.display = 'none';
}
});


$("#search-result-submit").on('click', function (){

formInput.onsubmit = function(event) {
    event.preventDefault();
    }
    var dropClass = document.getElementById("select-me");
    var searchQuery = document.getElementById("search-input-form").value;
    
    if(dropClass != "" && searchQuery != "") {
        
        var hr = new XMLHttpRequest();
            hr.open("POST","get-search.php",true);
            hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                dropClass.innerHTML = hr.responseText;
                
            }
            }
            hr.send("search_query="+searchQuery);
        }

})



$("#asearch-result-submit").on('click', function (){
 
  formInput1.onsubmit = function(event) {
     event.preventDefault();
     }
     var dropedClass = document.getElementById("place-artists");
     var searchQuery1 = document.getElementById("asearch-input-form").value;
     
     if(dropedClass != "" && searchQuery1 != "") {
         console.log(dropedClass);
         console.log(searchQuery1); 
         var hr = new XMLHttpRequest();
             hr.open("POST","get-favartist.php",true);
             hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
             hr.onreadystatechange = function () {
                 if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                    dropedClass.innerHTML = hr.responseText;
                    
                }
             }
             hr.send("search_query="+searchQuery1);
           }
   
 })


//function to show loginrequest form

function showloginRequest() {
    var requestForm = document.getElementById("all-links");
        requestForm.style.display = 'block';
        
}


function _(e) {
    return document.getElementById(e);
}
// var y = _("close");

//     y.onclick = function() {
//         _("all-links").style.display = 'none';
//     }


// function to show signup request form

function showsignupRequest() {
    var requestForm = document.getElementById("regall-links");
        requestForm.style.display = 'block';
        
}


// var f = _("regclose");
// var op = _("regall-links");

// f.onclick = function() {
//     op.style.display = 'none';
// }


//call namecheck function on register.php
    function namecheck() {
        
        $("#passwordStatus").hide();
        $("#emailStatus").hide();
        $("#phonenumberStatus").hide();
        var status1 = document.getElementById("usernameStatus");
        $("#usernameStatus").show();
        
        var u = document.getElementById("nameer").value;
        
        
        if(u !="" && u != null) {
            status1.innerHTML = '....checking';
            status1.style.color = 'red';
            var hr = new XMLHttpRequest();
            hr.open("POST","check.php",true);
            hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                    status1.style.color = 'red';
                    status1.innerHTML = hr.responseText;
                    
                }
            }
            hr.send("name="+u);
        }else {
            status1.style.color = 'red';
            status1.innerHTML = 'name cannot be empty!!';
        }

    };

    
    function passcheck() {
        
        $("#emailStatus").hide();
        $("#phonenumberStatus").hide();
        $("#usernameStatus").hide();
        var status2 = document.getElementById("passwordStatus");
        var approved = document.getElementById("passStatus");
        $("#passwordStatus").show();
        var p = document.getElementById("regpassword").value;
        var p1 = document.getElementById("regpassword1").value;
        
        if(p !="" && p1 !="" && p != null && p1 != null) {

            status2.style.color = 'blue';  
            status2.innerHTML = '....checking';
            var hr = new XMLHttpRequest();
            hr.open("POST","check.php",true);
            hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304)) {
                    if(hr.responseText == "<img src='images/images(226).jpg' style='height:35px;width:30px;'>"){
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

    };  

    function regemailcheck() {
        
        $("#passwordStatus").hide();
        $("#usernameStatus").hide();
        $("#phonenumberStatus").hide();
        var status3 = document.getElementById("emailStatus");
        status3.style.display = 'block';
        var e = document.getElementById("emailer").value;
        
        if(e !="" ) {
            status3.innerHTML = '....checking';
            status3.style.color = 'red';
            var hr = new XMLHttpRequest();
            hr.open("POST","check.php",true);
            hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                    status3.style.color = 'red';
                    status3.innerHTML = hr.responseText;
                    
                }
            }
            hr.send("Email="+e);
        }else {
            status3.style.color = 'red';
            status3.innerHTML = 'email required!!';
        }

    };

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
        
        if(ph !="" ) {
            status4.innerHTML = '....processing';
            status4.style.color = 'red';
            var hr = new XMLHttpRequest();
            hr.open("POST","check.php",true);
            hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                    status4.style.color = 'red';
                    status4.innerHTML = hr.responseText;
                    
                }
            }
            hr.send("phonenumber="+ph);
        }else {
            status4.style.color = 'red';
            status4.innerHTML = 'enter your phonenumber';
        }

    };


    function removeStatus() {
        $("#emailStatus").hide();
    }


    function acknowledgeAge() {
        var toggleMe = document.getElementById("toggleMe");
        
        $("#toggleMe").toggle();
    }

var closereg = document.getElementById("closereg");
if(closereg) {
    closereg.addEventListener("click",function(){
        var pastecontainer = document.getElementById("pasteContent");
        pastecontainer.style.display = 'none';
        document.getElementById("layer").style.display = 'none';
    },false);
}

function signUp() {
    $("#circular-progress-bar9").show();

    var winH = window.innerHeight;
    var winW = window.innerWidth;
    var reg = document.getElementById("regall-links");
    var signupform = document.getElementById("contain");
    var h = document.getElementById("layer");
    var x = document.getElementById("pasteContent");
    var signinform = document.getElementById("signin_container");

    if(signupform) {
        signupform.style.display = 'block';
        $("#circular-progress-bar9").hide();
        signinform.style.display = 'none';
        h.style.display = 'block';
        h.style.height = winH +"px";
        h.style.position = "fixed";
        alert(winW);
        if(winW <= 360) {
            x.style.left = (winW/2) - (680 * .2) + "px";
            x.style.top = "0px";
        }else if(winW > 360 && winW < 480) {
            x.style.left = (winW/2) - (680 * .28) + "px";
            x.style.top = "0px";
        }else if (winW > 480 && winW < 620){
            x.style.left = (winW/2) - (680 * .3) + "px";
            x.style.top = "0px";
        }else if (winW > 620 && winW < 800){
            x.style.left = (winW/2) - (680 * .4) + "px";
            x.style.top = "0px";
        }else if (winW > 800 && winW < 1030){
            x.style.left = (winW/2) - (680 * .6) + "px";
            x.style.top = "0px";
        }else {
            x.style.left = (winW/2) - (680 * .75) + "px";
            x.style.top = "0px";
        }
        x.style.display = 'block';
        reg.style.display= 'none';
    }
    

}

var closesignin = document.getElementById("closesignin");
if(closesignin) {
    closesignin.addEventListener("click",function(){
        var pastecontainer = document.getElementById("pasteContent");
        pastecontainer.style.display = 'none';
        document.getElementById("layer").style.display = 'none';
    },false);
}

function signIn() {
    $("#circular-progress-bar9").show();

    var winH = window.innerHeight;
    var winW = window.innerWidth;
    var reg = document.getElementById("all-links");
    var signinform = document.getElementById("signin_container");
    var h = document.getElementById("layer");
    var j = document.getElementById("pasteContent");
    var signupform = document.getElementById("contain");
    if(signinform) {
        signinform.style.display = 'block';
        signupform.style.display = 'none';
        $("#circular-progress-bar9").hide();
        h.style.display = 'block';
        h.style.height = winH +"px";
        h.style.overflow = 'hidden';
        h.style.overflowY = 'hidden';
        j.style.overflow = 'hidden';
        j.style.overflowY = 'hidden';
        h.style.position = "fixed";
        if(winW <= 360) {
            j.style.left = (winW/2) - (680 * .2) + "px";
            j.style.top = "0px";
        }else if(winW > 360 && winW < 480) {
            j.style.left = (winW/2) - (680 * .24) + "px";
            j.style.top = "0px";
        }else if (winW > 480 && winW < 620){
            j.style.left = (winW/2) - (680 * .28) + "px";
            j.style.top = "0px";
        }else if (winW > 620 && winW < 800){
            j.style.left = (winW/2) - (680 * .4) + "px";
            j.style.top = "0px";
        }else if (winW > 800 && winW < 1030){
            j.style.left = (winW/2) - (680 * .6) + "px";
            j.style.top = "0px";
        }else {
            j.style.left = (winW/2) - (680 * .75) + "px";
            j.style.top = "0px";
        }
        
        j.style.display = 'block';
        reg.style.display= 'none';
    }
    
    console.log(signinform);
    
}
  

    var error = document.getElementById("validation");
    var error1 = document.getElementById("validation1");

    function loginIdCheck() {
        
        var log = true;
        var loginId = document.getElementById("login_id").value;
        var pass = document.getElementById("passworded").value;
        if(loginId != "" && loginId != null) {
            var hr = new XMLHttpRequest();
            hr.open("POST","checklogin.php",true);
            hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                    error1.style.display = 'none';
                    error.style.display = 'block';
                    error.style.color = 'red';
                    error.innerHTML = hr.responseText;
                    console.log(hr.response);
                }
            }
            hr.send("login_identity="+loginId+"&log="+log);
        }
        else {
            error.style.display = 'block';
            error.style.color = 'red';
            error.innerHTML = 'enter your name or email';
            return false;
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
                    error1.style.display = 'block';
                    error.style.display = 'none';
                    error1.style.color = 'red';
                    error1.innerHTML = hr.responseText;
                }
            }
            hr.send("login_identity="+loginId+"&password="+pass);
        }
        
    }

