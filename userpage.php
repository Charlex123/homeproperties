<?php
session_start();
require_once'dbh.php';
    require_once'config.php';
    $user_data = @$_SESSION['user'];
    $userid = $user_data['id'];
    $name = $user_data['uname'];
if(isset($name) && isset($user_data) && isset($_SESSION['user'])) {
    
}else {
    // header('Location:index.php');
    // exit();
}
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
<link href='https://fonts.googleapis.com/css?family=cabin' rel='stylesheet'>
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type='text/css' href="fontawesome/fontawesomefiles/css/fontawesome.min.css">
<link rel="stylesheet" type='text/css' href="fontawesome/fontawesomefiles/css/all.min.css">
<script lang="javascript" type="text/javascript" src="fontawesome/fontawesomefiles/js/fontawesome.min.js"></script>
<script lang="javascript" type="text/javascript" src="fontawesome/fontawesomefiles/js/all.min.js"></script>
<script lang="javascript" type="text/javascript" src="bootstrap/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type='text/css' href="bootstrap/bootstrap-4.1.3-dist/css/bootstrap.min.css"> 
<link rel="stylesheet" type='text/css' href="css/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<title>Tee Properties | My account</title>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/3c09b1d8e352a85888073e6e1/a0bb71cefdd1fe7c172c61449.js");</script>
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
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
                    <a class="nav-link" href="#home">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" ><i class="fas fa-landmark"></i> About Us </a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#clients">
                            <i class="fas fa-users"></i> Clients Reports
                        </a>
                        <a class="dropdown-item" href="#whyus">
                            <i class="fas fa-handshake"></i> Why Choose Us
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sellwithus">
                        <i class="fas fa-hand-holding-heart"></i> Sell A Property
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php" target="_blank">
                        <i class="fas fa-phone"></i> Contact
                    </a>
                </li>
                <li class="nav-item" style='font-size: .8rem;'>
                    <a class="nav-link" href='logout.php'>
                         LogOut
                    </a>
                </li>
            </ul>
        </div>
    </nav>

</header>
<!-- Navigation end -->


<!-- Start landing page section -->
<?php
    @session_start();
    require_once'dbh.php';
    require_once'config.php';

    if(isset($_GET['category']) && isset($_GET['property_no'])) {
    }else{
        echo "<div class='carousel-slider'>

        <div id='carouselExample1' class='carousel slide z-depth-1-half' data-ride='carousel'>
            <div class='carousel-inner'>
                <div class='carousel-item active'>
                    <img class='d-block w-100 img-responsive' src='images/home_png.png' alt='First slide'>
                    <div class='caption text-center'>
                        <h2>
                            Welcome to springvilleconepts Real Estate 
                        </h2>
                        <h5>
                            Be a Land Owner in Abuja
                        </h5>
                    </div>
                </div>";
                
                    $getCarouselImages = new dbh();
                    $getCarouselImages -> getCarousel();
               
            echo"</div>
            <a class='carousel-control-prev' href='#carouselExample1' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
            </a>
            <a class='carousel-control-next' href='#carouselExample1' role='button' data-slide='next'>
                <span class'carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
            </a>
        </div>
    
    </div>";
    }
?>
<!-- End landing page section -->
<!-- End home section -->


<div class="container-fluid">

    <div class='search-property-category' >
    <form action='index.php' method='POST' class='form-input prevent-default-submit' id='prevent-default-form' role="search">
            <div class="input-group md-form form-sm form-2 pl-0">
                <input type="text" class="form-control my-0 py-1 red-border" name="category" value="<?php echo @$_POST['category']?>" id="search-input-form" placeholder= "search property category"/>
                <div class="input-group-append">
                    <button type="submit"  name="submit-search-categ" class="btn btn-primary categ-search-btn" id ="search-result-submit"><span class="input-group-text lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
                    aria-hidden="true"></i></span>
                    </button>
                </div>
            </div>
            <div id="kkkkk"></div>
        </form>
    </div>

    <div class="col-12 text-left">
        
        <div class="arr-categ">
            Home <i class="fas fa-angle-double-right"></i>
            <span> 
                Category <i class="fas fa-angle-double-right"></i> 
                <?php
                    require_once'dbh.php';
                    require_once'config.php';

                    if(isset($_GET['category'])) {
                        if(htmlentities(trim($_GET['category']))) {
                            $categ = new dbh();
                            $categ-> getPropertyCategoryListingView();
                        }
                    }else {
                        echo "<span> All </span>";
                    }
                ?>
            </span> 
        </div>

    </div>

    <!-- property listing section -->

    <div class="row">

        <!-- right column layout starts-->

        <div class="col-xs-12 col-md-4 col-md-offset-4 ">
            <div class="col-12 right-column">
                <div class='property-category'>
                    <div class='o-property-category'>Property Category</div>
                </div>
                <div class="p-categ">
                    <?php
                        require_once'dbh.php';
                        require_once'config.php';

                        $p_categ = new dbh();
                        $p_categ -> getPropertycategoryListing();
                    ?>
                </div>

            </div>
        </div>

        <!-- right column layout ends here -->

    <!-- left column starts -->
        <div class ='col-xs-12 col-sm-12 col-md-8'>

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
                                <i class='far fa-envelope'></i> Contact Agent Via Email
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
                                        <button type='submit' class='btn btn-lg btn-primary' id='clientsubmit' name='submit'> <i class='fas fa-paper-plane'></i> Send Message </button>
                                    </div>
                                </form>
                            </div>";
                    echo "</div>";
                
            }else if (isset($_GET['category']) || (isset($_POST['category'])) && isset($_POST['submit-search-categ'])) {
                
                echo "<div class='col-12 left-column'>";
                echo "<div class='latest-listing'>
                        <div class='o-latest-listing'> Latest Listings"; 
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
                        <div class='o-latest-listing'> Latest Listings</div>
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

    <!-- property listing ends here -->

    <!-- Start Why choose us section -->
    
    <div id="whyus" class="offsets">
        <div class='latest-listing'>
            <div class='o-latest-listing text-center'> <i class='fas fa-handshake'></i> Why Choose Us </div>
        </div>
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
    <!-- End Why choose us section -->

    
    
        <?php
            if(isset($_GET['category']) && isset($_GET['property_no'])) {
            }else {
            echo "<div class='offsets fixed'>

                    <div class='container-fluid'>
                
                    <div class='row text-center'>
                    <div id='sellwithus' class='col-md-6 spaceout'>
                        <div class='o-sell'>
                            <div class='latest-listing'>
                                <div class='o-latest-listing text-center'> <i class='fas fa-hand-holding-heart'></i> SELL A PROPERTY </div>
                            </div>
                            <div class='row text-center padding'>
                                <div class='sell-with-us col-12'>
                                    <div class='text-left'>
                                        <div class='aboutuss-text'>
                                            <p class='text-capitalize'>
                                                Do You have a Real Estate property including lands, estates, structures, buildings that you are offering for sale, contact us today.
                                                <div>
                                                    We are a marketing agency, we help Real Estate property owners market their properties at good rates <a href='contact.php'>contact us now</a>  
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                    <div class='agent-contact text-left'> 
                                        <div class='text-black text-center phone-request'>Contact Via Phone</div>
                                        <span class='a-contact text-white'><i class='far fa-envelope'></i> contact@springvilleconcepts.com.ng </span>&nbsp;&nbsp;&nbsp;
                                        <span class='a-contact text-white'><i class='fas fa-phone'></i> 080 36599661, 080 66387342 </span> &nbsp;
                                        <span class='a-contact'><a href='https://wa.me/2348036599661'>
            <i class='fab fa-whatsapp-square' style='color: #1dcf26'></i> Whatsapp Us
        </a> </span>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                    </div>";

                    echo "<div id='request-property' class='col-md-6 spaceout'>
                            <div class='o-sell'>
                            <div class='latest-listing'>
                                <div class='o-latest-listing text-center'> <i class='fas fa-home'></i> REQUEST A PROPERTY </div>
                            </div>
                            <div class='col-12 requested'>
                                <div class='text-left'>
                                    <div class='alert-success text-center row b-1 w-80' style='display:none'><div id='eAlert' class='text-center ml-3 mt-2 mb-2 mr-3'></div><span class='text-right close-alert' style='cursor:pointer'>&times;</span></div>
                                    <p class='text-left text-capitalize'>We can help you procure any property of your choice within Abuja and its environs at affordable rates, all you need is to send us a message with your choice of property details and we will do the rest for you</p>
                                    <form action='' method='POST' class='form-input prevent-default-submit' id='prevent-requestsubmit' role='form'>
                                        <div class='form-group'>
                                            <label for=''>*Name</label>
                                            <input type='text' class='form-control' id='requestorname' name='requestorName' placeholder='enter your name' required>
                                        </div>
                                        <div class='form-group'>
                                            <label for=''>*Email</label>
                                            <input type='email' class='form-control' id='requestoremail' name='requestorEmail' placeholder='enter your email' required>
                                        </div>
                                        <div class='form-group'>
                                            <label for=''>*Property Location</label>
                                            <input type='varchar' class='form-control' id='reqp_Location' name='requestedPropertyLocation' placeholder='enter property location' required>
                                        </div>
                                        <div class='form-group'>
                                            <label for=''> <iclass='fabfa-whatsapp'></i>*Whatsapp Number</label>
                                            <input type='varchar' class='form-control' id='req_number' name='requestorNumber' placeholder='enter your whatsapp' required>
                                        </div>
                                        <div class='form-group'>
                                            <label for=''>*Select Property Category</label>
                                            <select class='form-control' id='requestedPropertyCategory' name='requestedPropertyCategory'>
                                                <option>Choose Property Category</option>
                                                <option value='Land'>Land</option>
                                                <option value='House'>House</option>
                                                <option value='Esate'>Estate</option>
                                            </select>
                                        </div>
                                        <div class='form-group'>
                                            <label for=''>*Describe your property of choice</label>
                                            <textarea type='text' class='form-control' id='req-message' name='requestorMessage'> Give property details here including your preferrences</textarea>
                                        </div>
                                        <div class='form-group'>
                                            <button type='submit' class='btn btn-sm btn-primary' id='reqSubmit' name='submit'> <i class='fas fa-paper-plane'></i> Send Request </button>
                                        </div>
                                    </form>
                                </div>
                                <div class='agent-contact text-left'> 
                                    <div class='text-black text-center phone-request'>Contact Via Phone</div>
                                    <span class='a-contact text-white'><i class='far fa-envelope'></i> contact@springvilleconcepts.com.ng </span>&nbsp;&nbsp;&nbsp;
                                    <span class='a-contact text-white'><i class='fas fa-phone'></i> 080 36599661, 080 66387342 </span>
                                    &nbsp;
                                        <span class='a-contact'><a href='https://wa.me/2348036599661'>
            <i class='fab fa-whatsapp-square' style='color: #1dcf26'></i> Whatsapp Us
        </a> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
            }?>
            

    <!-- Start Be OurAgent  section -->

    <div id="aboutus" class="offsets svc-agents">
        <div class='latest-listing'>
            <div class='o-latest-listing text-center'> <i class='fas fa-handshake'></i> BE OUR REAL ESTATE AGENT AND EARN WITH US </div>
        </div>
        <div class="container-fluid about">

            <div class="row text-center padding">
                <div class="col-12">
                    <div class="lead text-center">
                        <div class="agent-cont text-left row">
                            <div class="col-md-6 col-lg-6">
                                We are looking for Real estate property marketing agents all over Abuja.
                                We are waiting to do business with you <i class='fas fa-handshake'></i>, contact us today 
                                <div class='agent-contact'> 
                                    <span class='a-contact'><i class='far fa-envelope'></i> contact@springvilleconcepts.com.ng </span>&nbsp;&nbsp;&nbsp;
                                    <span class='a-contact'><i class='fas fa-phone'></i> 080 36599661, 080 66387342 </span> &nbsp;
                                    <span class='a-contact'><a href='https://wa.me/2348036599661' style='color: #38445c;'>
                                    <i class='fab fa-whatsapp-square' style='color: #1dcf26'></i> Whatsapp Us
                                    </a> </span>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-6">
                                <img src="images/contact.png" alt="" class="img-responsive contact-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Be OurAgent section -->

    <!-- Start About us section -->
    <?php
        if(isset($_GET['category']) && isset($_GET['property_no'])) {
        }else {
            echo "<div id='aboutus' class='offsets'>
                    <div class='latest-listing'>
                        <div class='o-latest-listing'> About Us </div>
                    </div>
                    <div class='container-fluid about'>

                        <div class='row text-center padding'>
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
                </div>";
        }
    ?>
    <!-- End About us section -->

    <!-- Start clients section -->
    <div id="clients" class="offsets">
        <div class='latest-listing'>
            <div class='o-latest-listing text-center'> See What Our Clients Have To Say</div>
        </div>
        <div class="container-fluid">
        
            <div class="row text-center">

                <div class="col-md-6 clients">
                    <div class="row">
                        <div class="col-md-4">
                        <img src="images/testimony1.jpg" alt="image thumbnail" class="customer-thumbnail">
                        </div>

                        <div class="col-md-8">
                            <blockquote>
                                <i class="fas fa-quote-left"></i>
                                    I have purchased few landed properties with Springvilleconcepts Real Estate Company and I am happy doing business with them.
                                <hr class="clients-hr">
                                <cite>&#8212; Happiness, Abuja Based Business Owner</cite>    
                            </blockquote>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 clients">
                    <div class="row">
                        <div class="col-md-4">
                        <img src="images/testimony2.jpg" alt="image thumbnail" class="customer-thumbnail">
                        </div>

                        <div class="col-md-8">
                            <blockquote>
                                <i class="fas fa-quote-left"></i>
                                    My Real Estate businesses with Springvilleconcepts Real Estate Company has been all successful, I strongly recommend them, all their properties are geniune and verifiable before purchase.
                                <hr class="clients-hr">
                                <cite>&#8212; Engr. Joe, Abuja Based Engineer and Real Estate Developer</cite>    
                            </blockquote>
                        </div>
                    </div>
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
                    Get the latest promo/discount deals we offer on all our properties
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
                    <button type="submit" class="btn btn-sm btn-primary" name="subscribeemail" id='subscribe-email'> Subscribe </button>
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
                    
                        <form action="login.php" method='POST' id='prevent_sign_in_reload'>
                            <i class='fas fa-user fa-3x' style='color:#999999'></i>
                            <h5><span id='signin' style='color:#999999'>Sign in</span></h5>
                            <div id="validation"></div>
                            <div id="validation1"></div>
                            
                            <div class="form-group m-3">
                                <label class="row text-left" id="email">Email/Name:</label>
                                <input type="varchar" class="form-control" name='login_identity' id="login_id" onblur="loginIdCheck()" placeholder="enter email or name">
                            </div>
                            
                            <div class="form-group m-3">
                                <label class="row text-left" id="password">Password:</label>
                                <input type="password" class="form-control" name='password' id="passworded" onmouseout='loginCheck()' placeholder="enter password">
                            </div>
                            
                            <div class="form-group m-3">
                                <input type="submit" class="btn btn-md btn-outline" name='submit' id="submited-form" value='Login' title="login" >
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
                            <div class='loper' style='cursor:pointer'><input type='submit' class='btn btn-md btn-primary submit btn' name='submit_account' onclick='SignUp()' value='Create account'/>  <div><a id="createnew" onclick='showSignUp()' style='cursor:pointer' data-toggle='modal' data-target='#signinModal'>Already have account? Sign in</a></div></div>
                        </div>

                    </form>
                    </div>
                </div>
            </div>
                                        
            <!-- sign up form ends here -->

            </div>
            

            <!-- user reg wrapper ends here -->

    
    <div class='whatsapp-link'>
        <a href='https://wa.me/2348036599661'>
            <i class='fab fa-whatsapp-square'></i>
        </a>
    </div>

</div>

<!-- Start footer section -->
<footer class="container-fluid">
    <div class="row text-center">
        
    
        <hr class='dark'>

        <div class="col-12 padding"> 
            <div class="foo"> <span class='font-cs'><i class="far fa-envelope"></i> Email Us at:</span> contact@springvilleconcepts.com.ng </div>
            <div class="foo"> <span class='font-cs'><i class="far fa-building"></i> Office Address:</span> Road 14 C Close Efab, Lokogoma, Abuja </div>
            <div class="foo"> <span class='font-cs'><i class="fas fa-phone"></i> Contact Details:</span> 080 36599661, 080 66387342 </div>

            <div class="foo"> <span class='font-cs'> Connect Us On Social Media</span> <a href="facebook.com/bealandinAbuja"> <i class="fab fa-facebook fa-2x"></i></a> <a href='https://wa.me/2348036599661'>
            <i class='fab fa-whatsapp-square fa-2x' style='color: #1dcf26'></i>
        </a></div>
        </div>
            
        <div class="col-12 font-italic padding">&copy; 2019 Springvilleconcepts - All Rights Reserved </div>

    </div>
</footer>
<!-- End footer section -->

<!-- Initialize Swiper -->
<script lang="javascript" type="text/javascript" src="javascript/jscript.js"></script>
<script>

    $(document).ready(function(){
        
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

</script>
<div style="position: relative;bottom: 0;left: 0;" id="juicier-container" data-account-id="RZXL3jwlTmO89HLKypxhjBkSqrY2"><a style="font-size: 8px;color: #19191f36;text-decoration: none;" href="https://prooffactor.com" target="_blank">Powered by ProofFactor - Social Proof Notifications</a></div><script type="text/javascript" src="https://cdn.prooffactor.com/javascript/dist/1.0/jcr-widget.js"></script>
</body>
</html>