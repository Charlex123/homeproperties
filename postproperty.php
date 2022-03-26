<?php
require_once'config.php';
require_once'dbh.php';

if(isset($_POST['category']) && $_POST['category'] != "" && isset($_POST['property_name']) && $_POST['property_name'] != "") {

$category = isset($_POST['category']) ? $_POST['category'] : false;
$property_name = isset($_POST['property_name']) ? $_POST['property_name'] : false;
$property_listing_by = isset($_POST['property_listing_by']) ? $_POST['property_listing_by'] : false;
$desc = isset($_POST['property_description']) ? $_POST['property_description'] : false;
$price = isset($_POST['property_price']) ? $_POST['property_price'] : false;
$location = isset($_POST['location']) ? $_POST['location'] : false;
$purpose = isset($_POST['purpose']) ? $_POST['purpose'] : false;
$property_status = isset($_POST['property_status']) ? $_POST['property_status'] : false;
$property_size = isset($_POST['property_size']) ? $_POST['property_size'] : false;
$finalprice = isset($_POST['Fprice']) ? $_POST['Fprice'] : false;
$percentoff = isset($_POST['percentoff']) ? $_POST['percentoff'] : false;

$_SESSION['p_name'] = $property_name;

$errorMe = "";

if(!preg_match("/^[a-z A-Z0-9.&!()?']*$/",$property_name) && !strip_tags(htmlentities($property_name))) {
    echo $errorMe = 'invalid, title must be alphanumerics with no special characters';
    exit();
}       
if(!strip_tags(htmlentities($desc)) && $desc != "") {
    echo $errorMe = 'incorrect text';
    exit();
}
    
if($errorMe == "" && $property_name != "" && $category != "" )  {
    
    $fPrice = intval($finalprice);
    $Price = intval($price);

    @$_SESSION['productName'] = $productName;

    if(isset($percentoff) && intval($percentoff)) {
        $percntoff = $percentoff.'% off';
    }else {
        $percntoff = '';
    }
    
    $listingBy = $property_listing_by;
    $property_no = randStrGen(25);
    $timestatus = date('Y-m-d H:i:s',time());
    $views = 0;
    $Finaldesc = urldecode($desc);
    $con = new PDO("mysql:host=$serverhost;dbname=teeproperties;" , $serverusername, $serverpassword);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $gem = $con -> prepare("SELECT * FROM properties_table WHERE property_no = ?");
    $gem -> bindParam(1,$property_no);
    if($gem -> execute() && $gem -> rowCount() > 0) { 
        echo 'property already listed';
        $getItem = $con -> prepare("SELECT * FROM properties_table WHERE property_name = ?");
        $getItem -> bindParam(1,$property_name);
        $getItem -> execute(); 
        $item = $getItem -> fetch(PDO::FETCH_ASSOC);
        $p_categ = $item['category'];
        $p_name = $item['property_name'];
        $p_no = $item['property_no'];
        $_SESSION['p_categ'] = $p_categ;
        $_SESSION['p_name'] = $p_name;
        $_SESSION['p_code'] = $p_no;
    }else {
            $q = $con -> prepare("INSERT INTO properties_table (category,property_price,percentoff,Fprice,property_size,property_status,property_listing_by,location,purpose,property_description,property_name,property_no,views,timestatus) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        
            $q -> bindParam(1,$category);
            $q -> bindParam(2,$price);
            $q -> bindParam(3,$percntoff);
            $q -> bindParam(4,$fprice);
            $q -> bindParam(5,$property_size);
            $q -> bindParam(6,$property_status);
            $q -> bindParam(7,$property_listing_by);
            $q -> bindParam(8,$location);
            $q -> bindParam(9,$purpose);
            $q -> bindParam(10,$Finaldesc);
            $q -> bindParam(11,$property_name);
            $q -> bindParam(12,$property_no);
            $q -> bindParam(13,$views);
            $q -> bindParam(14,$timestatus);
            if($q -> execute()) {
                echo 'post successful';
                $getItem = $con -> prepare("SELECT * FROM properties_table WHERE property_name = ?");
                $getItem -> bindParam(1,$property_name);
                $getItem -> execute(); 

                $item = $getItem -> fetch(PDO::FETCH_ASSOC);
                $p_categ = $item['category'];
                $p_name = $item['property_name'];
                $p_no = $item['property_no'];
                $_SESSION['p_categ'] = $p_categ;
                $_SESSION['p_sub_categ'] = $p_name;
                $_SESSION['p_code'] = $p_no;
                
            }

        }
    }
}

else if( (isset($_FILES['property_images_upload']) && $_FILES['property_images_upload'] != "")) {
    
    echo $property_code = @$_SESSION['p_code'];
    $filename = $_FILES['property_images_upload']["name"];
    $type = $_FILES['property_images_upload']["type"];
    $filesize = $_FILES['property_images_upload']['size'];
    $source =  $_FILES['property_images_upload']['tmp_name'];
    $path_to_image_directory = "images/property_images/";
    $destination = $path_to_image_directory.$filename;
    
    if(!isset($property_code) || $property_code == "") {
        echo 'post content first';
        exit();
    }

if(!preg_match('/[.](jpg)|(gif)|(jpeg)|(png)$/', $filename)) {
    echo "only image formats jpg or gif or jpeg or png are accepted";
    $uploadOk = 0;
    exit();
}if($filesize > 5000000) {
    echo "image size too big, images should be less than 5MB";
    $uploadOk = 0;
    exit();
}else {
   
    $image_final_width = 720;
    $image_final_height = 720;
    $path_to_image_directory = 'images/property_images/';
    $path_to_thumbnail_directory = 'images/property_images_thumbnails/';
    $ext = strtolower(pathinfo($_FILES['property_images_upload']['name'], PATHINFO_EXTENSION));
    $actual_file_name = $path_to_thumbnail_directory . basename($_FILES['property_images_upload']['name'], "." . $ext) . ".png";

    $source = $_FILES['property_images_upload']['tmp_name'];
    $target = $path_to_image_directory.$filename;
    move_uploaded_file($source,$target);

if(preg_match('/[.]jpg$/', $filename)) {
    $im = imagecreatefromjpeg($path_to_image_directory.$filename);
    
}else if(preg_match('/[.]jpeg$/', $filename)) {
    $im = imagecreatefromjpeg($path_to_image_directory.$filename);
    
}else if (preg_match('/[.]gif$/', $filename)) {
    $im = imagecreatefromgif($path_to_image_directory.$filename);
    
}else if (preg_match('/[.]png$/', $filename)) {
    $im = imagecreatefrompng($path_to_image_directory.$filename);
    
}


$ox = imagesx($im);
$oy = imagesy($im);

$nx = $image_final_width;
$ny = $image_final_height;

$nm = imagecreatetruecolor($nx,$ny);

imagecopyresized($nm, $im, 0,0,0,0, $nx,$ny,$ox,$oy);

if(!file_exists($path_to_thumbnail_directory)) {

    if(mkdir($path_to_thumbnail_directory,0777)) {
        imagepng($nm,$actual_file_name);
        $thumbnail = $actual_file_name;
        
        $con = new PDO("mysql:host=$serverhost;dbname=teeproperties;" , $serverusername, $serverpassword);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $select = $con -> prepare("SELECT * FROM property_images WHERE property_no = ? AND images = ?");
        $sel = $con -> prepare("SELECT * FROM images WHERE propert_no = ? ");
        $sel -> bindParam(1,$property_code);
        $select -> bindParam(1,$property_code);
        $select -> bindParam(2,$thumbnail);
        $select -> execute();
        $select -> execute();
        if($select -> execute() && $select -> rowCount() > 0 && $select-> rowCount() == 10) {
            echo 'maximum no of image upload exceeded';
            exit();
            }else {
                $insetThumb = $con -> prepare("INSERT INTO property_images (property_no,images) VALUES (?,?)");
                $insetThumb -> bindParam(1,$property_code);
                $insetThumb -> bindParam(2,$thumbnail);
                $insetThumb -> execute();
                echo 'image uploaded';
                exit();
                }
            
            }
        
    }else {
        
        imagepng($nm,$actual_file_name);
        $thumbnail = $actual_file_name;
        
        $con = new PDO("mysql:host=$serverhost;dbname=teeproperties;" , $serverusername, $serverpassword);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $select = $con -> prepare("SELECT images FROM property_images WHERE property_no = ? AND images = ?");
        $select -> bindParam(1,$property_code);
        $select -> bindParam(2,$thumbnail);
        $selectt = $con -> prepare("SELECT images FROM property_images WHERE property_no = ?");
        $selectt -> bindParam(1,$property_code);
        $select->execute();
        $selectt -> execute();

        if($select -> execute() && $select -> rowCount() > 0) {
            echo 'image uploaded';
            exit();
        }
        if($selectt  -> rowCount() >=  10) {
            echo 'Images upload cannot exceed 10';
        }
        else {
                $insetThumb = $con -> prepare("INSERT INTO property_images (property_no,images) VALUES (?,?)");
                $insetThumb -> bindParam(1,$property_code);
                $insetThumb -> bindParam(2,$thumbnail);
                $insetThumb -> execute();
                echo 'image uploaded';
                exit();
                }
            }
            
    }
}else {
    exit();
}
?>