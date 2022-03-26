<?php
    session_start();
    require_once'dbh.php';
    require_once'config.php';

?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, maximum-scale=1,minimum-scale=1,initial-scale=1" />
<link rel="shortcut icon" href="images/favicon.png" />
<link rel="stylesheet" type='text/css' href="bootstrap/bootstrap-4.1.3-dist/css/bootstrap.min.css"> 
<script lang="javascript" type="text/javascript" src="javascript/jquery-3.2.1.js"></script>

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Chilanka' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Girassol' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Libre Baskerville' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Kulim Park' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=PT Sans' rel='stylesheet'>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type='text/css' href="fontawesome/fontawesomefiles/css/fontawesome.min.css">
<link rel="stylesheet" type='text/css' href="fontawesome/fontawesomefiles/css/all.min.css">
<script lang="javascript" type="text/javascript" src="fontawesome/fontawesomefiles/js/fontawesome.min.js"></script>
<script lang="javascript" type="text/javascript" src="fontawesome/fontawesomefiles/js/all.min.js"></script>
<script lang="javascript" type="text/javascript" src="bootstrap/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type='text/css' href="bootstrap/bootstrap-4.1.3-dist/css/bootstrap.min.css"> 
<link rel="stylesheet" type='text/css' href="css/footerstyle.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Tee Properties | Affordable homes for all</title>
<!--<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/3c09b1d8e352a85888073e6e1/a0bb71cefdd1fe7c172c61449.js");</script>-->

<!-- Facebook Pixel Code -->
<style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
.owl-carousel .owl-item {
    transition: all 0.3s ease-in-out
}

.owl-carousel .owl-item .card {
    padding: 10px;
    position: relative
}

.owl-carousel .owl-stage-outer {
    overflow-y: auto !important;
    padding-bottom: 40px
}

.owl-carousel .owl-item img {
    height: 200px;
    object-fit: cover;
    border-radius: 6px
}

.owl-carousel .owl-item .card .name {
    position: absolute;
    bottom: -20px;
    left: 33%;
    color: #ffffff;
    font-size: 1.1rem;
    font-weight: 600;
    background-color: #000115;
    padding: 0.3rem 0.4rem;
    border-radius: 5px;
    box-shadow: 2px 3px 15px #f9f9f9
}

.owl-carousel .owl-item .card {
    opacity: 0.2;
    transform: scale3d(0.8, 0.8, 0.8);
    transition: all 0.3s ease-in-out
}

.owl-carousel .owl-item.active.center .card {
    opacity: 1;
    transform: scale3d(1, 1, 1)
}

.owl-carousel .owl-dots {
    display: inline-block;
    width: 100%;
    text-align: center
}

.owl-theme .owl-dots .owl-dot span {
    height: 20px;
    background: #2a6ba3 !important;
    border-radius: 2px !important;
    opacity: 0.8
}

.owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span {
    height: 13px;
    width: 13px;
    opacity: 1;
    transform: translateY(2px);
    background: #83b8e7 !important
}

@media(min-width: 480.6px) and (max-width: 575.5px) {
    .owl-carousel .owl-item .card .name {
        left: 24%
    }
}

@media(max-width: 360px) {
    .owl-carousel .owl-item .card .name {
        left: 30%
    }
}

#map {
  height: 500px;
  width: 100%;
  /* display: none; */
  margin: 5rem auto;
}
</style>
<link rel="stylesheet" type='text/css' href="css/style.css">
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '767859103689521');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=767859103689521&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
    
<script>
  fbq('track', 'ViewContent');
</script>

<script>
  fbq('track', 'CompleteRegistration',{
        value: 1.10,
        currency: 'USD'
  });
</script>

<script>
  fbq('track', 'Search');
</script>

<script>
  fbq('track', 'Contact');
</script>

<script>
  fbq('track', 'Lead');
</script>
<!-- Start home section -->
<header id="home">

<!-- Navigation Start -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a href="#" class="navbar-brand"><img src="images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" > About Us </a>
                    <div class="dropdown-menu dropdown-warning" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#clients">
                            Clients Reports
                        </a>
                        <a class="dropdown-item" href="#whyus">
                            Why Choose Us
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sellwithus">
                        Sell A Property
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php" target="_blank">
                         Contact
                    </a>
                </li>
                <li class="nav-item rounded bg-dark text-white" style='font-size: .8rem;'>
                   <a class="nav-link p-3 text-white" href="signin.php">
                       <i class="fas fa-user"></i> SignIn
                   </a>
                </li>
                <!--<li class="nav-item" style='font-size: .8rem;'>-->
                <!--    <a class="nav-link" data-toggle='modal' data-target='#signupModal'>-->
                <!--        <i class="fas fa-user-plus"></i> SignUp-->
                <!--    </a>-->
                <!--</li> -->
            </ul>
        </div>
    </nav>
    
</header>
<!-- Navigation end -->


<!-- Start landing page section -->
    <div class='carousel-slider'>
        <div className='bg-image-overlay'></div>
        <div id='carouselExample1' class='carousel slide z-depth-1-half' data-ride='carousel'>
            <div class='carousel-inner'>
                <div class='carousel-item active'>
                    <img class='d-block text-white w-100 img-responsive' src='images/home_png.png' alt=''>
                    <div class='caption text-center'>
                        <h1>
                            Welcome to Tee Properties 
                        </h1>
                        <h5>
                            Find The Best Homes Near You
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
<!-- End landing page section -->
<!-- End home section -->


<div class="container-fluid">

    <div class="row">

    <!-- left column starts -->
        <div class ='col-xs-12 col-sm-12 col-md-12'>

        <?php
        @session_start();
        require_once'dbh.php';
        require_once'config.php';

            $pages = isset($_GET['page']) ? $_GET['page'] : 1;
            if(isset($_GET['category']) && isset($_GET['property_no'])) { 
                
                
                echo "<div class='col-12 left-column'>";
                echo "<div class='latest-listing'>
                        <div class='o-latest-listing'> Property Information"; 
                            
                echo "</div></div>";
                echo    "<div class='row'>";
                            $_GET['property_no'];   
                            $p_no = htmlentities(trim($_GET['property_no']));
                            $p_categ = htmlentities(trim($_GET['property_no']));

                            $obj = new dbh();
                            $obj -> getPropertyListingView();
                echo    "</div>";
                echo "</div>";
                

                echo "<div class='col-12 left-column'>";
                    echo "<div class='latest-listing'>
                            <div class='o-listing text-white'> 
                                <i class='far fa-envelope'></i> Contact Seller Via Email
                            </div>
                        </div>";
                    
                    echo "<div class='col-12 email-contact'>
                                <div class='alert-success text-center row b-1 w-80' style='display:none'><div id='eReport' class='text-center ml-3 mt-2 mb-2 mr-3'></div><span class='text-right close-elert' style='cursor:pointer'>&times;</span></div>
                                <form action='' method='POST' class='form-input prevent-default-submit' id='prevent-submit' role='form'>
                                    <div class='form-group'>
                                        <label for=''>Name</label>
                                        <input type='text' class='form-control' id='clientname' name='clientName' placeholder='enter your name' required>
                                    </div>
                                    <div class='form-group'>
                                        <label for=''>Email</label>
                                        <input type='email' class='form-control' id='clientemail' name='clientEmail' placeholder='enter your email' required>
                                    </div>
                                    <div class='form-group'>
                                        <label for=''>Message content</label>
                                        <textarea type='text' class='form-control' id='clientmessage' name='clientMessage' placeholder='enter your email'> I am interested in this property, i am sending this message to indicate my interest, send me a reply as soon as possible</textarea>
                                    </div>
                                    <div class='form-group'>
                                        <button type='submit' class='btn btn-lg btn-warning' id='clientsubmit' name='submit'> <i class='fas fa-paper-plane'></i> Send Message </button>
                                    </div>
                                </form>
                            </div>";
                    echo "</div>";
                
            }else if (isset($_GET['category']) || (isset($_POST['category'])) && isset($_POST['submit-search-categ'])) {
                
                echo "<div class='col-12 left-column'>";
                echo "<div class='latest-listing'>
                        <div class='o-latest-listing p-1'> Affordable Homes Near You"; 
                            echo " <i class='fas fa-angle-double-right'></i>";
                            $categ = new dbh();
                            $categ-> getPropertyCategoryListingView();
                echo "</div></div>";
                echo "<div class='row' id='show-videos'>";
                            $obj = new dbh();
                            $obj -> getPropertyListingByCategory();
                echo "</div>"; 
                echo  "</div>";
            
            }else {
                
                echo "<div class='col-12 left-column'>";
                echo "<div class='latest-listing'>
                        <div class='o-latest-listing p-1'> Affordable Homes Near You</div>
                    </div>";
                echo "<div class='row' id='show-videos'>";
                            $obj = new dbh();
                            $obj -> getPropertyListing();
                echo "</div>"; 
                echo  "</div>";
                
            }
        ?>
    </div>
    <!-- left column layout ends -->

    </div>

    
    <!-- Start About us section -->
    <!-- Start Why choose us section -->
    <div class="w100 bg-white p-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="jumbotron text-center"><h1>Why Choose Us</h1></div>
                    <div class="col-12 container-fluid">
                        
                        <ul>
                            <li class="whyus-li">
                                <i class="fas fa-check"></i> We offer only genuine properties
                            </li>
                            <li class="whyus-li">
                                <i class="fas fa-check"></i> We work with government authourites to ensure that all our properties are verified 
                            </li>
                            <li class="whyus-li">
                                <i class="fas fa-check"></i> Our properties prices are affordable
                            </li>
                            <li class="whyus-li">
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="jumbotron text-center"><h1>About Us</h1></div>
                    <div class='col-12'>
                        <div class='lead text-left'>
                            
                            <div class='aboutus-text'>
                                <p class=''>
                                    Springvilleconcepts is a registered company in the real estate business platform with a CAC registration number RC: 900897
                                    <div>
                                        We are experts in procuring lands of all purposes within Abuja and its environs, our lawyers have done all the works for you, all you need is to visit the land for inspection 
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why choose us section -->
    
    <!-- End About us section -->

    <!-- Start clients section -->
            <div class="container">
                <div class="owl-carousel owl-theme mt-5">
                    <div class="owl-item">
                        <div class="card">
                            <div class="img-card"> <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""> </div>
                            <div class="testimonial mt-4 mb-2"> Tee properties has help me find a home for my lovely grandma </div>
                            <div class="name"> Denis Richie </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="card">
                            <div class="img-card"> <img src="https://images.pexels.com/photos/1024311/pexels-photo-1024311.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt=""> </div>
                            <div class="testimonial mt-4 mb-2"> I can now find a suitable home near me </div>
                            <div class="name"> Lisa Sthalekar </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="card">
                            <div class="img-card"> <img src="https://images.pexels.com/photos/1036622/pexels-photo-1036622.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""> </div>
                            <div class="testimonial mt-4 mb-2"> A real estate company that knows their onus </div>
                            <div class="name"> Elizabith Richie </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="card">
                            <div class="img-card"> <img src="https://images.pexels.com/photos/1212984/pexels-photo-1212984.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""> </div>
                            <div class="testimonial mt-4 mb-2"> With map guides and directions, i have bought a nice apartment for family </div>
                            <div class="name"> Daniel Xavier </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- End clients section -->


    <!-- Start Email Sub section -->

    <div id="email-us" class="email-sub">
        <div class="container-fluid about">
            <div class="row">
                <div class='text-right close'>&times;</div>
                <p class="lead text-center">
                    Be the first to know about properties near you
                </p>
            </div>
            <div class='alert-success text-center row b-1 w-80' style='display:none'><div id='errReport' class='text-center ml-3 mt-2 mb-2 mr-3'></div><span class='text-right close-ealert' style='cursor:pointer'>&times;</span></div>
            <form action='' method='POST' class='form-input prevent-emailsub-submit' id='prevent-emailsubscription-form' role="form">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="subname" id='subname' placeholder="enter name" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="subemail" id='subemail' placeholder="enter your email" required6>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-dark" name="subscribeemail" id='subscribe-email'> Subscribe </button>
                </div>
            </form>
        </div>
    </div>

    <!-- End Email Sub section -->
    
    <!--user reg wrapper starts-->
    
    <div class="user-reg-wrapper w-90 text-center" style='font-size:.8rem;'>

            <!-- signin modal starts here -->

            <div class='modal fade text-center' id='signinModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                <div class='modal-dialog' role='document'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='rate-vid-modal-title text-center m-auto' id='exampleModalLabel' style='color: #999999'> Log into your account </h5>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>
                        
                        <div class='alert-success text-center row b-1 w-80' style='display:none'><div id='errlog' class='text-center ml-3 mt-2 mb-2 mr-3'></div><span class='text-right close-logalert' style='cursor:pointer'>&times;</span></div>
                    
                        <form action="" method='POST' id='prevent-login-submit'>
                            <i class='fas fa-user fa-3x' style='color:#999999'></i>
                            <h5><span id='signin' style='color:#999999'>Sign in</span></h5>
                            <div id="validation"></div>
                            
                            <div class="form-group m-3">
                                <label class="row text-left" id="email">Email/Name:</label>
                                <input type="varchar" class="form-control" name='login_identity' id="login_id" onblur="loginIdCheck()" placeholder="enter email or name">
                            </div>
                            
                            <div class="form-group m-3">
                                <label class="row text-left" id="password">Password:</label>
                                <input type="password" class="form-control" name='password' id="passworded" onmouseout='loginCheck()' placeholder="enter password">
                            </div>
                            
                            <div class="form-group m-3">
                                <input type="submit" class="btn btn-md btn-outline" name='submit' id="submited-form" value='Login' title="login" onclick='SignIn()'>
                                <a href='recoverpass001.php' id="forgotpassword" title='reset passsword'>Forgot Password?</a> 
                            </div>
    
                            <div id="createaccount" class="col-12 mb-3" style='cursor:pointer'><a data-toggle='modal' data-target='#signupModal' onclick='showSignIn()'>don't have account! <span title='create account' style='color:#000080;font-style:italic;font-family:arial;'>create one</span></a></div>
                                
                        </form>
                    </div>
                </div>
            </div>
                                        
            <!-- sign in form ends here -->

            <!-- signup modal starts here -->
            
            <div class='modal fade text-center' id='signupModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                <div class='modal-dialog' role='document'>
                    <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='rate-vid-modal-title text-center m-auto' id='exampleModalLabel' style='color:#999999'> Create a secured account </h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <form action='register.php' method='POST' class='ajax-reg' id='reg-submit'>
        
                        <div class='alert-success text-center row b-1 w-80' style='display:none'><div id='errReg' class='text-center ml-3 mt-2 mb-2 mr-3'></div><span class='text-right close-regalert' style='cursor:pointer'>&times;</span></div>
                        
                        <div class='form-group m-3'>
                            <label id="name" class='row text-left'>Name of choice*</label>
                            <input type="text" class="form-control" name="Fullname" id ="nameer" onblur ="namecheck()" placeholder="Fullname required" value="<?php echo @$_POST['name']?>"  /><span id ="usernameStatus"></span><div style='clear:right'></div>
                        </div>
                        
                        <div class='form-group m-3' >
                            <label id="email" class='row text-left'>Email*</label>
                            <input type="email" class="form-control" name="Email" id ="emailer" onmouseout ="regemailcheck()" onmouseout="removeStatus()" placeholder="Enter your email" value="<?php echo @$_POST['Email']?>"  /><span id ="emailStatus"></span><div style='clear:right'></div>
                        </div>

                        <div class='form-group m-3' id='regphone'>
                            <label id='phonenumber' class='row text-left'>Phonenumber</label>
                            <input type='varchar' class='form-control' name='phonenumber' id = 'regphonenumber' placeholder='e.g +234XXXXXXXXXX' onmouseout ='phpcheck()' /><span id ='phonenumberStatus'></span>
                        </div>

                        <div class='form-group m-3'>
                            <label id="password" class='row text-left'>Password*</label>
                            <input type="password" class="form-control" name="password" id="regpassword" placeholder="Type in your password"   /><div style='clear:right'></div>
                        </div>
                    
                        <div class='form-group m-3'>
                            <label id="password1" class='row text-left'>RepeatPassword*</label>
                            <input type="password" class="form-control" name="password1" id ="regpassword1" onblur ="passcheck()" placeholder= "Retype in your password"  /><span id ="passwordStatus"></span><span id ="passStatus" style='margin-bottom:-10px;'></span><div style='clear:right'></div>
                        </div>
                    
                        <div class='form-group m-3 mt-5'>
                            <div id="terms"> By creating account you agree to our <a id='agree' href="terms.php" > T&C </a></div>
                        </div>

                        <div class='form-group m-3>
                            <div class='loper' style='cursor:pointer'><input type='submit' class='btn btn-md btn-warning submit btn' name='submit_account' onclick='SignUp()' value='Create account'/>  <div><a id="createnew" onclick='showSignUp()' style='cursor:pointer' data-toggle='modal' data-target='#signinModal'>Already have account? Sign in</a></div></div>
                        </div>

                    </form>
                    </div>
                </div>
            </div>
                                        
            <!-- sign up form ends here -->

            </div>
            

            <!-- user reg wrapper ends here -->


</div>

<!-- Start footer section -->
<footer class="footer-10">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-4 mb-md-0 mb-4">
								<h2 class="footer-heading text-warning pt-4 mt-4 font-weight-bold">About</h2>
								<ul class="list-unstyled">
		              <li><a href="#" class="d-block text-white">Out story</a></li>
		              <li><a href="#" class="d-block text-white">Awards</a></li>
		              <li><a href="#" class="d-block text-white">Our Team</a></li>
		              <li><a href="#" class="d-block text-white">Career</a></li>
		            </ul>
							</div>
							<div class="col-md-4 mb-md-0 mb-4">
								<h2 class="footer-heading text-warning pt-4 mt-4 font-weight-bold">Company</h2>
								<ul class="list-unstyled">
		              <li><a href="#" class="d-block text-white">Our services</a></li>
		              <li><a href="#" class="d-block text-white">Clients</a></li>
		              <li><a href="#" class="d-block text-white">Contact</a></li>
		              <li><a href="#" class="d-block text-white">Press</a></li>
		            </ul>
							</div>
							<div class="col-md-4 mb-md-0 mb-4">
								<h2 class="footer-heading text-warning pt-4 mt-4 font-weight-bold">Resources</h2>
								<ul class="list-unstyled">
		              <li><a href="#" class="d-block text-white">Blog</a></li>
		              <li><a href="#" class="d-block text-white">Newsletter</a></li>
		              <li><a href="#" class="d-block text-white">Privacy Policy</a></li>
		            </ul>
							</div>
						</div>
					</div>
					<div class="col-md-5 mb-md-0 mb-4">
						<h2 class="footer-heading text-warning pt-4 mt-4 font-weight-bold">Subscribe</h2>
						<form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control rounded-left" placeholder="Enter email address">
                <button type="submit" class="form-control submit rounded bg-dark">Subscribe</button>
              </div>
              <span class="subheading">Get property updates in your mailbox</span>
            </form>
					</div>
				</div>
				<div class="row mt-5 pt-4 border-top">
          <div class="col-md-6 col-lg-8 mb-md-0 mb-4">
            <p class="copyright mb-0 text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved TeePropeerties
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
          <div class="col-md-6 col-lg-4 text-md-right">
          	<ul class="ftco-footer-social p-0">
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fab-twitter"></i></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fab-facebook"></i></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fab-instagram"></i></a></li>
            </ul>
          </div>
        </div>
			</div>
		</footer>
<!-- End footer section -->

<!-- Initialize Swiper -->
<script lang="javascript" type="text/javascript" src="javascript/jscript.js"></script>
<script>

    $(document).ready(function(){
        var silder = $(".owl-carousel");
        silder.owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        items: 1,
        stagePadding: 20,
        center: true,
        nav: false,
        margin: 50,
        dots: true,
        loop: true,
        responsive: {
        0: { items: 1 },
        480: { items: 2 },
        575: { items: 2 },
        768: { items: 2 },
        991: { items: 3 },
        1200: { items: 4 }
        }
        });
    }) 

    $("body").on('click',".share-link",function() {
        var shares = true;
        $(this).parent().children(".modala").toggle();
        $(".cancelnow").on('click',function() {
            $(".modala").hide();
        })
    })

    $("body").on('click','.close',function() {
        var emailForm = this.parentElement.parentElement.parentElement;
        emailForm.style.display = 'none';
    });
    
    $("body").on('mouseenter','.imgslide',function() {
        var newImg = this.getAttribute("name");
        this.parentElement.parentElement.firstElementChild.firstElementChild.src = newImg;
    });
    
    var emailSubForm = document.getElementById("prevent-emailsubscription-form");
    
$("#subscribe-email").on('click', function (){
        
    emailSubForm.onsubmit = function(event) {
    event.preventDefault();
    }
    var subName = document.getElementById("subname").value;
    var subEmail = document.getElementById("subemail").value;
    var errReport = document.getElementById("errReport");
    var closeeAlert = document.querySelector(".close-ealert");
    closeeAlert.onclick = function() {
        this.parentElement.style.display = 'none';
    }
    if(subName != "" && subEmail != "") {
         
        var hr = new XMLHttpRequest();
            hr.open("POST","subscribe_email.php",true);
            hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                    errReport.parentElement.style.display = 'block';
                   errReport.innerHTML = hr.responseText;
               }
            }
            hr.send("subName="+subName+"&subEmail="+subEmail);
          }
  
})

var formSubmit = document.getElementById("prevent-submit");
$("#clientsubmit").on('click', function (){
    formSubmit.onsubmit = function(e) {
    e.preventDefault();
    }
    var clientName = document.getElementById("clientname").value;
    var clientEmail = document.getElementById("clientemail").value;
    var clientMessage = document.getElementById("clientmessage").value;
    var eReport = document.getElementById("eReport");
    var closelert = document.querySelector(".close-elert");
    closelert.onclick = function() {
        this.parentElement.style.display = 'none';
    }
    if(clientName != "" && clientEmail != "" && clientMessage != "") {
        
        var hr = new XMLHttpRequest();
            hr.open("POST","email_messages.php",true);
            hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                    eReport.parentElement.style.display = 'block';
                   eReport.innerHTML = hr.responseText;
               }
            }
            hr.send("clientName="+clientName+"&clientEmail="+clientEmail+"&clientMessage="+clientMessage);
          }
  
})


var reqformSubmit = document.getElementById("prevent-requestsubmit");
$("#reqSubmit").on('click', function (){
    reqformSubmit.onsubmit = function(e) {
    e.preventDefault();
    }
    
    var reqName = document.getElementById("requestorname").value;
    var reqEmail = document.getElementById("requestoremail").value;
    var reqLoc = document.getElementById("reqp_Location").value;
    var reqNum = document.getElementById("req_number").value;
    var reqCateg = document.getElementById("requestedPropertyCategory").value;
    var reqMessage = document.getElementById("req-message").value;
    var eReport = document.getElementById("eAlert");

    var closeAlert = document.querySelector(".close-alert");
    closeAlert.onclick = function() {
        this.parentElement.style.display = 'none';
    }

    if(reqName != "" && reqEmail != "" && reqMessage != "") {
        var hr = new XMLHttpRequest();
            hr.open("POST","requested.php",true);
            hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304) ) {
                   eReport.parentElement.style.display = 'block';
                   eReport.innerHTML = hr.responseText;
               }
            }
            hr.send("requestorName="+reqName+"&requestorEmail="+reqEmail+"&requestedPropertyLocation="+reqLoc+"&requestorNumber="+reqNum+"&requestedPropertyCategory="+reqCateg+"&requestorMessage="+reqMessage);
          }
  
  $('#exampleModal').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var recipient = button.data('whatever') // Extract info from data-* attributes
                    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                    var modal = $(this)
                    modal.find('.modal-title').text('New message to ' + recipient)
                    modal.find('.modal-body input').val(recipient)
                    })
})


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
                    console.log(hr.response);
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
<script>
      // This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.
// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
    function showMap() {
        document.getElementById("map").style.display = "block";
    }
function initAutocomplete() {
  const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -33.8688, lng: 151.2195 },
    zoom: 13,
    mapTypeId: "roadmap",
  });
  // Create the search box and link it to the UI element.
  const input = document.getElementById("pac-input");
  const searchBox = new google.maps.places.SearchBox(input);

  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  // Bias the SearchBox results towards current map's viewport.
  map.addListener("bounds_changed", () => {
    searchBox.setBounds(map.getBounds());
  });

  let markers = [];

  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener("places_changed", () => {
    const places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach((marker) => {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    const bounds = new google.maps.LatLngBounds();

    places.forEach((place) => {
      if (!place.geometry || !place.geometry.location) {
        console.log("Returned place contains no geometry");
        return;
      }

      const icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25),
      };

      // Create a marker for each place.
      markers.push(
        new google.maps.Marker({
          map,
          icon,
          title: place.name,
          position: place.geometry.location,
        })
      );
      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
}
    
    </script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfd-SN7oBZJZ3SINlhJwAvknn9t0krcSY&callback=initAutocomplete&libraries=places&v=weekly"
      async
    ></script>
<div style="position: relative;bottom: 0;left: 0;" id="juicier-container" data-account-id="RZXL3jwlTmO89HLKypxhjBkSqrY2"><a style="font-size: 8px;color: #19191f36;text-decoration: none;" href="https://prooffactor.com" target="_blank">Powered by ProofFactor - Social Proof Notifications</a></div><script type="text/javascript" src="https://cdn.prooffactor.com/javascript/dist/1.0/jcr-widget.js"></script>
</body>
</html>