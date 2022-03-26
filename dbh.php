<?php
@session_start();
ini_set('display_errors','on');
error_reporting(E_ALL);
ini_set('display_errors','1');
require_once'ranStrGen.php';

class dbh {

private $id;
private $name;
private $password;
private $Email;
private $phonenumber;
private $carrier;
private $post_id;

public $serverhost='localhost';
public $serverdbname='db2048099';
public $serverusername='root';
public $serverpassword='';

public function __construct (){
   $this->getServer();


try{ 
  $con= new PDO("mysql:host=$this->serverhost;dbname=db2048099;" , $this->serverusername, $this->serverpassword);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     } 
    catch( PDOException $e)
        {
        throw new exception($e->getmessage());
        }
    
     } 

//setting users in the database class

public function setUsers ($userid, $name,$password,$Email,$phonenumber) {
      $this->userid=$userid;
      $this->name=$name;
      $this->password=$password;
      $this->Email=$Email;
      $this->phonenumber=$phonenumber;
      
      }      


public function getUsers() {
      return $this->userid;
      return $this->name;
      return $this->password;
      return $this->Email;
      return $this->phonenumber;
      
      }

public function setServer($serverhost,$serverusername,$serverpassword,$serverdbname) {
        $this->serverhost=$serverhost;
        $this->serverusername=$serverusername;
        $this->serverpassword=$serverpassword;
        $this->serverdbName=$serverdbname;
      }

public function getServer() {
       return $this->serverhost;
       return $this->serverusername;
       return $this->serverpassword;
       return $this->serverdbname;
      }

public function getPropertyListingView() {
      try{
        
        if(preg_match("/^[a-zA-Z0-9]*$/",$_GET['property_no']) && isset($_GET['category'])) {
            $property_no = htmlentities(trim($_GET['property_no']));
            $pcateg = htmlentities(trim($_GET['category']));
            $c_Tegory = str_replace('-', ' ', $pcateg);
            $_SESSION['p-code'] = htmlentities(trim($_GET['property_no']));
            $con = new PDO("mysql:host=$this->serverhost;dbname=db2048099;" , $this->serverusername, $this->serverpassword);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $getItem = $con -> prepare("SELECT * FROM properties_table WHERE property_no = ? AND category = ? GROUP BY property_no");
            $getItem -> bindParam(1,$property_no);
            $getItem -> bindParam(2,$c_Tegory);
            if($getItem -> execute() && $getItem -> rowCount() > 0) {
                $selimg = $con -> prepare("SELECT images FROM property_images WHERE property_no = ?");
                $selim = $con -> prepare("SELECT images FROM property_images WHERE property_no= ?");
                $selimg -> bindParam(1,$property_no);
                $selim -> bindParam(1,$property_no);
                $selimg -> execute();
                $selim -> execute();
                    if($selim-> execute() && $selimg-> execute() && $selimg -> rowCount() > 0) {
                        $gtimg = $selim -> fetch(PDO::FETCH_ASSOC);
                        $getimg = $selimg -> fetchAll(PDO::FETCH_ASSOC);
                        $item = $getItem -> fetch(PDO::FETCH_ASSOC);
                        $time = $item['timestatus'];

                        $imgs = $gtimg['images'];

                        echo "<div class='col-12 view-p-listing'>";

                        echo "<div class='col-12 p-head-img'>";
                            echo "<div >
                                    <img src='$imgs' id='imshow' class='img-responsive' >
                                </div>";
                            
                            foreach($getimg as $img => $thmb) {
                                $rimg = $thmb['images'];
                                echo "<div class='inline-cont text-center'>
                                        <div class='imgslide' name='$rimg'>
                                            <img src='$rimg' class='img-responsive change img'>
                                        </div>
                                    </div>";
                            }
                            
                        echo "</div>";
        
                    }

                $category = $item['category'];
                $p_code = $item['property_no'];
                $p_loc = $item['location'];
                $p_name = $item['property_name'];
                $purpose = $item['purpose'];
                $status = $item['property_status'];
                $p_desc = $item['property_description'];
                $property_size = $item['property_size'];
                $pprice = $item['property_price'];
                $peroff = $item['percentoff'];
                $Fprice = $item['Fprice'];
                $price = number_format($pprice);
                $oprice = '£'.$price;
                $ffprice = number_format($Fprice);
                $fprice = '£'.$ffprice;
                $views = $item['views'];
                $currentUrl = '/'.$_SERVER['REQUEST_URI'];
                
                echo "<div class='col-12 p-display-content p-8 m-8' id='item-display-content'>
                        <h3 class='p-name' id='p-name' name='$p_name' style='font-size:1.3rem'> $p_name </h3>
                        <div class='row'>
                            <div class='col-md-4 p-price' style='font-size: 1.2rem;'>
                                $fprice
                            </div>
                            <div class='col-md-3 p-price' style='color:#989898;text-decoration-line:line-through;font-size: 1rem;'>
                                $oprice
                            </div>
                            <div class='col-md-3 p-price' style='color:red;text-decoration-line:line-through;font-size: 1rem;'>
                                $peroff
                            </div>
                        </div>
                        <h3 class='p-name' id='pac-input' name='$p_loc' style='font-size:.8rem'> $p_loc </h3>
                        <p id='p-desc' class='p-desc'>
                            <h5 id='descript'>Description </h5> $p_desc 
                        </p>

                        <div class='inline-list'>
                            <h5 class='p-info'>Property Information</h5>
                            <div class='row'>
                                <div class='p-inline'>
                                    $status
                                </div>    
                                <div class='p-inline'>
                                    $purpose
                                </div>
                                <div class='p-inline'>
                                    $property_size
                                </div>
                                <div class='p-inline'>
                                    <i class='fas fa-eye'></i> $views
                                </div>
                            </div>
                        </div>

                        <div class='col-12'>
                            <h5 class='p-info'>Contact Information</h5>
                            <div class='row'>
                                <div class='agent-contact'> 
                                    <span class='a-contact'><i class='far fa-envelope'></i> contact@db2048099.com </span>&nbsp;&nbsp;&nbsp;
                                    <span class='a-contact'><i class='fas fa-phone'></i> +4407459470852 </span>
                                </div>
                            </div>
                        </div>

                        <div class=' col-12 p-share'>
                            <div class='share-link'><i class='shares far fa-share-square' id='okay' name =".$property_no."></i> Share </div>
                            <div id='myModal' class='modala text-center'>
                                <div class='modal-content'>
                                    <div class='social-medial-channels'> 
                                        <span class='share-modal'><a href='https://facebook.com/beabujalandlord' target='_blank'><i class='fab fa-facebook-square fa-2x connect' style='color: #2a7fee'></i></a></span><span class='share-modal'><a href='https://wa.me/2348036599661' target='_blank'>
            <i class='fab fa-whatsapp-square fa-2x' style='color: #1dcf26'></i>
        </a></span><span class='share-modal' ><a href='#' target='blank'><i class='fab fa-instagram fa-2x connect' style='color: #752f1e'></i></a></span><span class='share-modal'><a href='#' target='blank'><i class='fab fa-twitter-square fa-2x connect' style='color: #349bca'></i></a></span>
                                    </div>    
                                    
                                    <div class='copy'> Copy and share the link below...</div>
                                    <div class='pasteurl' id='paste-url' value='here'>$currentUrl</div>
                                    <button class='row btn btn-xs btn-primary text-center cancelnow'> Close</button>
                                </div>
                            </div>
                        </div>

                    </div>";
                    
                echo "</div>";
                
                $views = 1;
                $time = date('Y-m-d H:i:s',time());
                $up_video = $con -> prepare("INSERT INTO properties_view (views,property_no,timestatus) VALUES (?,?,?)");
                $up_video -> bindParam(1,$views);
                $up_video -> bindParam(2,$property_no);
                $up_video -> bindParam(3,$time);
                if($up_video -> execute()) {
                    $select = $con -> prepare("SELECT views FROM properties_view WHERE property_no = ?");
                    $select -> bindParam(1,$property_no);
                    $select -> execute();
                    $count = $select ->rowCount();
                    
                    //update table videos column shares with shares counts of the video id
                    
                    $update = $con -> prepare("UPDATE properties_table SET views = ? WHERE property_no = ?");
                    $update -> bindParam(1,$count);
                    $update -> bindParam(2,$property_no);
                    $update -> execute();
                }
                echo "<div id='map'></div>";
            }
            else {
                $vid_no = "";
            }

        }
    }catch(PDOException $e) {
    throw new PDOException($e -> getMessage());
    }
}


public function getPropertyListing() {
    try{
    $pages = isset($_GET['page']) ? $_GET['page'] : 1;
    $page = intval($pages);
    if($page == 0) {
        $page = 1;
    }
    $limit = 4;
    $start = ($page - 1) * $limit;
    $con = new PDO("mysql:host=$this->serverhost;dbname=db2048099;" , $this->serverusername, $this->serverpassword);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $con -> prepare("SELECT * FROM properties_table");
    $query -> execute(); 
    $sql = $con -> prepare("SELECT properties_table.*,property_images.images FROM properties_table INNER JOIN property_images ON properties_table.property_no = property_images.property_no  WHERE property_images.images <> '' GROUP BY property_images.property_no ORDER BY RAND()  LIMIT $start,$limit");
    
    $sql -> execute();

    $paginate = $con->prepare("SELECT count(id) AS id FROM properties_table GROUP BY property_no");
    $paginate -> execute();
    
      if($sql -> execute() && $query -> execute() && $paginate -> execute() && $sql -> rowCount()> 0) {
            
        // pagination code

            $countd = $paginate -> fetchAll(PDO::FETCH_ASSOC);
            $totalcountd = $countd[0]['id'];
            $pages = ceil($totalcountd / $limit); 
            $Previous = $page - 1;
            $Next = $page + 1;

            $videoCount = $query -> rowCount(); 
            $rows = $sql -> fetchALL(PDO::FETCH_ASSOC);

            echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 p-show'>";
            
            echo "<div class='row mx-auto'>";

            foreach($rows as $row) {
                $property_no = $row['property_no'];
                $property_name = $row['property_name'];
                $propertyListingby = $row['property_listing_by'];
                $property_image = $row['images'];
                $property_o_price = $row['property_price'];
                $location = $row['location'];
                $desc = $row['property_description'];
                $pdesc = substr($desc,0,90).'...';
                $P_Category = $row['category'];
                $property_size = $row['property_size'];
                $purpose = $row['purpose'];
                $views = $row['views'];
                $pStatus = $row['property_status'];
                
                if($property_o_price =='' || $property_o_price == null){
                    $oprice = '';
                }else {
                    $price = number_format($property_o_price);
                    $oprice = '£'.$price;
                }
                
                $peroff = $row['percentoff'];
                $Fprice = $row['Fprice'];
                
                if($peroff =='' || $peroff == null){
                    $peroff = '';
                }else {
                    $peroff = $peroff;
                }
                
                $ffprice = number_format($Fprice);
                $fprice = '£'.$ffprice;
                
                $category = str_replace(' ', '-', $P_Category);
            
            echo "<div class='col-md-3 m-2 p-0 listview'>
                    
                    <a class='list-anchor' href='/teeproperties/property.php?category=$category&property_no=$property_no' style='text-decoration:none;'>
                        
                        <div class='col-md-12 p-img-holder'>
                            <img src='$property_image' class='img-responsive p-img'><div class='p-status'> $pStatus </div>
                        </div>

                        <div class='col-md-12 text-left'>
                            <div class='col-12 p-loc'>
                                $property_name
                            </div>
                            <div class='col-12 p-listing ' style='color: #000115;text-transform: capitalize;'>
                                $location
                            </div>
                            <div class='row'>
                                <div class='col-md-4 p-price ml-3' style='font-size: 1.1rem;'>
                                    $fprice
                                </div>
                                <div class='col-md-3 p-price in' style='color:#989898;text-decoration-line:line-through;font-size: .8rem;'>
                                    $oprice
                                </div>
                                <div class='col-md-3 p-price in' style='color:red;text-decoration-line:line-through;font-size: .8rem;'>
                                    $peroff
                                </div>
                            </div>
                            <div class='col-12 p-listing'>
                                <span class='alt-listing'> Listing by: </span>$propertyListingby
                            </div>
                            
                            <div class='col-12 inline-list'>
                                <div class='row'>
                                    <div class='p-inline'>
                                        $P_Category
                                    </div>
                                    <div class='p-inline'>
                                        $purpose
                                    </div>
                                    <div class='p-inline'>
                                        $property_size
                                    </div>
                                    <div class='p-inline'>
                                        <i class='fas fa-eye'></i> $views
                                    </div>
                                </div>
                            </div>
                                                
                        </div>
                    </a>
                </div>
                
                <hr>";
            }
            echo "</div>";
              
            echo "</div>";

            echo "<div class='row text-center col-12'>
                <div class='col-12 text-center paginate'>
                    <nav aria-label='Page navigation'>
                        <ul class='pagination text-center'>";
                    if($page > 1) {
                        echo "<li class='active'>
                                <a href='index.php?page=$Previous' aria-label='Previous'>
                                    <span aria-hidden='true'>
                                        &laquo; Previous                        
                                    </span>
                                </a>
                            </li>";
                    }       
                    
                            for($i = 1; $i <= $pages; $i++) {
                                echo "<li class='inner'><a href='index.php?page=$i'>$i</a></li>";
                            }
                    
                    echo "<li>
                                <a href='index.php?page=$Next' aria-label='Next'>
                                    <span aria-hidden='true'>
                                        Next &raquo;                        
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>";
            
      }else {
            echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 p-show'><h6 class='col-12 mt-4 mb-4 text-center'>No Property Found</div></h4>";
            return false;
         }    
      }catch(PDOException $e) {
      throw new PDOException($e -> getMessage());
      }
   }


   public function getPropertyListingByCategory() {
    try{
    $pages = isset($_GET['page']) ? $_GET['page'] : 1;
    $page = intval($pages);
    if($page == 0) {
        $page = 1;
    }
    if(isset($_GET['category'])) {
        $category = htmlentities(trim($_GET['category']));
    }else if(isset($_POST['category'])) {
        $category = htmlentities(trim($_POST['category']));
    }
    $c_Tegory = str_replace('-', ' ', $category);
    $limit = 4;
    $start = ($page - 1) * $limit;
    $con = new PDO("mysql:host=$this->serverhost;dbname=db2048099;" , $this->serverusername, $this->serverpassword);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $con -> prepare("SELECT * FROM properties_table");
    $query -> execute(); 
    $sql = $con -> prepare("SELECT properties_table.*,property_images.images FROM properties_table INNER JOIN property_images ON properties_table.property_no = property_images.property_no  WHERE property_images.images <> '' AND properties_table.category = ? GROUP BY property_images.property_no ORDER BY RAND()  LIMIT $start,$limit");
    $sql -> bindParam(1,$c_Tegory);
    $sql -> execute();

    $paginate = $con->prepare("SELECT count(id) AS id FROM properties_table GROUP BY property_no");
    $paginate -> execute();
    
      if($sql -> execute() && $query -> execute() && $paginate -> execute()) {
            
        // pagination code

            $countd = $paginate -> fetchAll(PDO::FETCH_ASSOC);
            $totalcountd = $countd[0]['id'];
            $pages = ceil($totalcountd / $limit); 
            $Previous = $page - 1;
            $Next = $page + 1;

            $videoCount = $query -> rowCount(); 
            $rows = $sql -> fetchALL(PDO::FETCH_ASSOC);

            echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 p-show'>";
            
            echo "<div class='row mx-auto'>";

            foreach($rows as $row) {
                $property_no = $row['property_no'];
                $property_name = $row['property_name'];
                $propertyListingby = $row['property_listing_by'];
                $property_image = $row['images'];
                $property_o_price = $row['property_price'];
                $location = $row['location'];
                $desc = $row['property_description'];
                $pdesc = substr($desc,0,90).'...';
                $P_Category = $row['category'];
                $property_size = $row['property_size'];
                $purpose = $row['purpose'];
                $views = $row['views'];
                $pStatus = $row['property_status'];
                
                if($property_o_price =='' || $property_o_price == null){
                    $oprice = '';
                }else {
                    $price = number_format($property_o_price);
                    $oprice = '£'.$price;
                }
                
                $peroff = $row['percentoff'];
                $Fprice = $row['Fprice'];
                
                if($peroff =='' || $peroff == null){
                    $peroff = '';
                }else {
                    $peroff = $peroff;
                }
                
                $ffprice = number_format($Fprice);
                $fprice = '£'.$ffprice;
                
                
                $category = str_replace(' ', '-', $P_Category);
                echo "<div class='col-md-3 m-2 p-0 listview'>
                    
                <a class='list-anchor' href='/teeproperties/property.php?category=$category&property_no=$property_no' style='text-decoration:none;'>
                    
                    <div class='col-md-12 p-img-holder'>
                        <img src='$property_image' class='img-responsive p-img'><div class='p-status'> $pStatus </div>
                    </div>

                    <div class='col-md-12 text-left'>
                        <div class='col-12 p-loc'>
                            $property_name
                        </div>
                        <div class='col-12 p-listing ' style='color: #000115;text-transform: capitalize;'>
                            $location
                        </div>
                        <div class='row'>
                            <div class='col-md-4 p-price ml-3' style='font-size: 1.1rem;'>
                                $fprice
                            </div>
                            <div class='col-md-3 p-price in' style='color:#989898;text-decoration-line:line-through;font-size: .8rem;'>
                                $oprice
                            </div>
                            <div class='col-md-3 p-price in' style='color:red;text-decoration-line:line-through;font-size: .8rem;'>
                                $peroff
                            </div>
                        </div>
                        <div class='col-12 p-listing'>
                            <span class='alt-listing'> Listing by: </span>$propertyListingby
                        </div>
                        
                        <div class='col-12 inline-list'>
                            <div class='row'>
                                <div class='p-inline'>
                                    $P_Category
                                </div>
                                <div class='p-inline'>
                                    $purpose
                                </div>
                                <div class='p-inline'>
                                    $property_size
                                </div>
                                <div class='p-inline'>
                                    <i class='fas fa-eye'></i> $views
                                </div>
                            </div>
                        </div>
                                            
                    </div>
                </a>
            </div>
            
            <hr>";
        }
        echo "</div>";
          
        echo "</div>";
                
          
        echo "</div>";
            echo "<div class='row text-center col-12'>
                <div class='col-12 text-center paginate'>
                    <nav aria-label='Page navigation'>
                        <ul class='pagination text-center'>";
                    if($page > 1) {
                        echo "<li class='active'>
                                <a href='index.php?page=$Previous' aria-label='Previous'>
                                    <span aria-hidden='true'>
                                        &laquo; Previous                        
                                    </span>
                                </a>
                            </li>";
                    }       
                    
                            for($i = 1; $i <= $pages; $i++) {
                                echo "<li class='inner'><a href='index.php?page=$i'>$i</a></li>";
                            }
                    
                    echo "<li>
                                <a href='index.php?page=$Next' aria-label='Next'>
                                    <span aria-hidden='true'>
                                        Next &raquo;                        
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>";
            
      }else {
            echo "Video not found";
            return false;
         }    
      }catch(PDOException $e) {
      throw new PDOException($e -> getMessage());
      }
   }


   public function getPropertyCategoryListing() {
    try{
    
        $con = new PDO("mysql:host=$this->serverhost;dbname=db2048099;" , $this->serverusername, $this->serverpassword);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $con -> prepare("SELECT category FROM properties_table GROUP BY category");
        
        if($sql -> execute()) {
            
            $rows = $sql -> fetchALL(PDO::FETCH_ASSOC);
            foreach($rows as $row) {
                $P_Category = $row['category'];
                $category = str_replace(' ', '-', $P_Category);
                
            echo "<div class='co-12 p-category-listing'>
            
                        <ul class='list-item'>
                            <li class='categ list-item'>
                                <a href='/teeproperties/property/$category'>$P_Category</a>
                            </li>
                            <hr>
                        </ul>
                    
                </div>";
            }
        }   
      }catch(PDOException $e) {
      throw new PDOException($e -> getMessage());
      }
   }


   public function getCarousel(){
    try{
    
        $con = new PDO("mysql:host=$this->serverhost;dbname=db2048099;" , $this->serverusername, $this->serverpassword);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $con -> prepare("SELECT properties_table.*,property_images.images FROM properties_table INNER JOIN property_images ON properties_table.property_no = property_images.property_no  WHERE property_images.images <> '' GROUP BY property_images.property_no ORDER BY RAND() ");
        
        if($sql -> execute()) {
            
            $rows = $sql -> fetchALL(PDO::FETCH_ASSOC);
            foreach($rows as $row) {
                $propertyListingby = $row['property_listing_by'];
                $property_image = $row['images'];
                $property_price = $row['Fprice'];
                $property_name = $row['property_name'];
                $location = $row['location'];
                $property_size = $row['property_size'];
                $purpose = $row['purpose'];
                $price = number_format($property_price);
                $p_price = '£'.$price;
                
                
            echo "<div class='carousel-item'>
                    <img class='d-block w-100 img-responsive' src='$property_image' alt='Second slide'>
                    <div class='carousel-caption'>
                        <ul>
                            <li class='list-item text-left' style='text-transform: capitalize;'>
                                <h4 class=''> $property_name</h4> 
                            </li>
                            <li class='list-item text-left' style='color: #cccccc;text-transform: capitalize;font-family:'Exo''>
                                <h4 class='land-loc'> $location</h4> 
                            </li>
                            <li class='list-item text-left'>
                                <i class='fas fa-check-square'></i> Size: <span class='land-size'> $property_size </span>
                            </li>
                            <li class='list-item text-left'>
                                <i class='fas fa-check-square'></i> Purpose: <span class='land-purpose'> $purpose </span>
                            </li>
                            <li class='list-item text-left'>
                                <i class='fas fa-check-square'></i> Price: <span class='land-price'> $p_price </span>
                            </li>
                        </ul>
                    </div>
                </div>";
            }
        }   
      }catch(PDOException $e) {
      throw new PDOException($e -> getMessage());
      }
   }


   public function getPropertyCategoryListingView() {
    try{
        
        if(isset($_GET['category'])) {
            $category = htmlentities(trim($_GET['category']));
        }else if(isset($_POST['category'])) {
            $category = htmlentities(trim($_POST['category']));
        }
        $c_Tegory = str_replace('-', ' ', $category);
        $con = new PDO("mysql:host=$this->serverhost;dbname=db2048099;" , $this->serverusername, $this->serverpassword);
        $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $con -> prepare("SELECT category FROM properties_table WHERE category = ?");
        $sql -> bindParam(1,$c_Tegory);
        if($sql -> execute()) {
            
            $result = $sql -> fetch(PDO::FETCH_ASSOC);
            $category = $result['category'];
            echo "<span class='text-capitalize'>
                    $category
                </span>";
            }
    
      }catch(PDOException $e) {
      throw new PDOException($e -> getMessage());
      }
   }





}


?>
