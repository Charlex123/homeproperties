<?php
    require_once'dbh.php'; 
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']) && isset($_POST['login_identity']) && $_POST['login_identity'] == 'admin@loginnotnow' && isset($_POST['password']) && $_POST['password'] == 'svcenterin') {

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html !DOCTYPE>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
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
    <link rel="stylesheet" type='text/css' href="bootstrap/bootstrap-4.1.3-dist/css/bootstrap.min.css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <title>Admin Page</title>
    </head>
        <body >
            <div class="container" >
                <h1 class='text-center mt-2 mb-2'> Post Properties Into Database</h1>
                <div>
                    <form action="postproperty.php" method="POST" autocomplete="off" enctype="multipart/form-data" id='p-submit'>
                        
                        <div class="form-group">
                            <label class='row text-left' style='margin-left:.4rem;'>Property Name</label>
                            <input type="varchar" name="property_name" class="form-control" id="p-name" value="<?php echo @$_POST['property_name'];?>" placeholder="enter property name" required>
                        </div>
                        
                        <div class="form-group">
                            <label class='row text-left' style='margin-left:.4rem;'>Property Category</label>
                            <input type="varchar" class="form-control" name="category" id="p-category" value="<?php echo @$_POST['category'];?>" placeholder="Enter property category" required>
                        </div>

                        <div class="form-group">
                            <label class='row text-left' style='margin-left:.4rem;'>Property Listing By</label>
                            <input type="varchar" class="form-control" name="property_listing_by" id="listing-by" value="<?php echo @$_POST['property_listing_by'];?>" placeholder="Property listing by" required>
                        </div>

                        <div class="form-group">
                            <label class='row text-left' style='margin-left:.4rem;'>Property Location</label>
                            <input type="varchar" class="form-control" name="location" id="p-location" value="<?php echo @$_POST['location'];?>" placeholder="Enter property location" required>
                        </div>

                        <div class="form-group">
                            <label class='row text-left' style='margin-left:.4rem;'>Property Price</label>
                            <input type="number" class="form-control" name="property_price" id="p-price" value="<?php echo @$_POST['property_price'];?>" placeholder="Enter property price">
                        </div>

                        <div class='form-group'>
                            <div class='alert-warning outline mt-2 mb-2 text-left pt-2 pb-2 pl-2' style='font-size:.8rem;'> How many percent off do you want to for this property (this is optional) </div>
                            <label class="percentoff">% Off (Optional)</label>
                            <input type="number" class="form-control" name = "percentoff" id = 'percent_off' onmouseout='showFPrice()' placeholder="enter percent off" value="<?php echo @$_POST['name']?>"  /> <div style='clear:right'></div>
                        </div>

                        <div class='form-group' id='hidprice' style='display: none;'>
                            <label class="name"> Final Price of Product </label>
                            <div class='pounds'><input type="varchar" class="form-control" name="Fprice" id ="finalPrice" placeholder="final price of property" /></div><div style='clear:right'></div>
                            <div id='de'></div>
                        </div>

                        <div class="form-group">
                            <label class='row text-left' style='margin-left:.4rem;'>Property Size</label>
                            <input type="varchar" class="form-control" name="property_size" id="p-size" value="<?php echo @$_POST['property_size'];?>" placeholder="Enter property size">
                        </div>

                        <div class="form-group">
                            <label class='row text-left' style='margin-left:.4rem;'>Property Status</label>
                            <input type="varchar" class="form-control" name="property_status" id="p-status" value="<?php echo @$_POST['status'];?>" placeholder="Enter property purpose" required>
                        </div>

                        <div class="form-group">
                            <label class='row text-left' style='margin-left:.4rem;'>Property Purpose</label>
                            <input type="varchar" class="form-control" name="purpose" id="p-purpose" value="<?php echo @$_POST['purpose'];?>" placeholder="Enter property purpose" required>
                        </div>
                        
                        <div class="form-group">
                            <label class='row text-left' style='margin-left:.4rem;'>Property  Description</label>
                            <textarea rows="5" cols="4" placeholder="Property Description" class='form-control' name="property_description" id='property_description'></textarea>
                        </div>

                        <div class="col-12 alert-success mt-3 mb-3 text-center" id="sub-alert"></div>

                        <div class="row text-ceenter" style=''>
                            <input type="submit" name="submit" class='btn btn-lg btn-success text-center' value="POST" onclick='postProperty()' ><button type="reset" class='btn btn-lg btn-danger text-center' name="reset" id="reset" >RESET</button>
                        </div>

                    </form>
                    
                </div>

                <!-- upload property images to database -->

                <div id='show-images-upload' class="container">
                
                <h4> Upload Property Images </h4>

                <div id='loaded-n-total1'></div>
                <div id='item-image'></div>
                <div id='status1'></div>

                <form action="postproperty.php" method="POST" autocomplete="off" enctype="multipart/form-data" id='img-submit'>
                    <div class='row' style=''>
                        <div style='' id='item-image'>
                            <i class="fas fa-upload fa-2x padding" id='selectfileds' onclick="customSelect('property_images_upload')" style="cursor:pointer;margin-right: 1rem;"></i>
                            <input type="file"  name="property_images_upload" id="property_images_upload" hidden/>
                        </div>
                    </div>
                </form>

            </div>
            <script>
                        CKEDITOR.replace( 'property_description' );
                </script>
        </body>
     
        
        <script lang="javascript" type="text/javascript">
        
        $(document).ready(function(){

        })

        function _(e) {
            return document.getElementById(e);
        }

        var pForm = document.getElementById("p-submit");
        var imgUploadForm = document.getElementById("img-submit");

        function postProperty() {
            pForm.onsubmit = function(event) {
            event.preventDefault();
            }
            var p_name = document.getElementById("p-name").value;
            var p_categ = document.getElementById("p-category").value;
            var p_listing = document.getElementById("listing-by").value;
            var p_loc = document.getElementById("p-location").value;
            var p_price = document.getElementById("p-price").value;
            var p_size = document.getElementById("p-size").value;
            var p_status = document.getElementById("p-status").value;
            var p_purpose = document.getElementById("p-purpose").value;
            var p_desc = document.getElementById("property_description").value;
            var peroff = document.getElementById("percent_off").value;
            
            if(p_name == "") {
                return false;
            }
            if (p_categ == "") {
                return false;
            }
            if(p_loc == "") {
                return false;
            }
            if (p_desc == "") {
                return false;
            }
            
            if(peroff) {
                var fprice = document.getElementById("finalPrice").value
            }else {
                fprice = p_price;
            }
            
            if(p_name != "" &&  p_categ != "" && p_loc != "" && p_desc != "") {
                
                var hr = new XMLHttpRequest();
                    hr.open("POST","postproperty.php",true);
                    hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    hr.onreadystatechange = function () {
                        if((hr.readyState == 4) && (hr.status == 200 || hr.status == 304)) {
                            document.getElementById("sub-alert").innerHTML = hr.responseText;
                            }
                    }
                    hr.send("category="+p_categ+"&property_name="+p_name+"&property_listing_by="+p_listing+"&location="+p_loc+"&property_price="+p_price+"&purpose="+p_purpose+"&property_size="+p_size+"&property_status="+p_status+"&property_description="+p_desc+"&percentoff="+peroff+"&Fprice="+fprice);
                }
                
        }

        function showFPrice() {

            var p_pprice = document.getElementById("p-price").value;
            var perroff = document.getElementById("percent_off").value;
            calc_peroff = p_pprice * (perroff/100);
            finalprice_of_product = p_pprice - calc_peroff;
            fprice = Math.floor(finalprice_of_product);
            document.getElementById("hidprice").style.display = 'block';
            document.getElementById("finalPrice").value = fprice;
        }
        
        function uploadPropertyImage() {
            imgUploadForm.onsubmit = function(event) {
            event.preventDefault();
            }   
        }

        function customSelect(e) {
            
            var customtarget = document.getElementById(e);
            var actualid = customtarget.getAttribute("id");
            
            customtarget.click();
            var file = customtarget.files;
            
            customtarget.addEventListener("change",function() {
                if(actualid === "property_images_upload") {
                    if(file.length === 1) {
                        var file1 = document.getElementById("property_images_upload").files[0];
                        var formdata1 = new FormData();

                            formdata1.append("property_images_upload", file1);

                        var ajax = new XMLHttpRequest();
                        ajax.upload.addEventListener("progress", progressHandler, false);
                        ajax.addEventListener("load", completeHandler, false);
                        ajax.addEventListener("error", errorHandler, false);
                        ajax.addEventListener("abort", abortHandler, false);
                        ajax.open("POST","postproperty.php",true);
                        ajax.send(formdata1);
                    }
                }
            },false)
            return false;
        }


        function progressHandler(event) {
            document.getElementById("status1").innerHTML = "Uploaded"+Math.round(event.loaded/1000)+"KB of"+Math.round(event.total/1000)+"KB";
            var percent = (event.loaded / event.total) * 100;
        }

        function completeHandler(event) {
            document.getElementById("status1").innerHTML = event.target.responseText; 
            
        }
        function errorHandler(event) {

        }
        function abortHandler(event) {
            
        }

</script>

</html>
<?php } else {?>
<?php header("location:adminlogin.php"); exit();}?>