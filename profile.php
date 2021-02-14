<?php
include('logincheck.php');
// get id for user from logincheck page
$x11 = $_GET["id"];
// select and collect data from table
$connect1 = @mysqli_connect("localhost" ,"root" , "" , "index" );
$sele = "SELECT * FROM khaleel WHERE id ='$x11'";
$que = mysqli_query($connect1 , $sele);
?>
<!DOCTYPE html>
<html lang="en">
<head>
     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
<!-- bootstrap lir -->
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- for rating -- rater.js  -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js" charset="utf-8"></script>
    <script src="js/rater.js" charset="utf-8"></script>
    <script>
        $(document).ready(function(){
            var options = {
                max_value: 6,
                step_size: 0.5,
                selected_symbol_type: 'hearts',
                url: 'http://localhost/test.php',
                initial_value: 3,
                update_input_field_name: $("#input2"),
            }
            $(".rate").rate();

            $(".rate").rate("setFace", 5, '😘');
            $(".rate").rate("setFace", 4, '😊');
            $(".rate").rate("setFace", 3, '😉');
            $(".rate").rate("setFace", 2, '😒');
            $(".rate").rate("setFace", 1, '😰');

            $(".rate2").rate(options);

            $(".rate2").on("change", function(ev, data){
                console.log(data.from, data.to);
            });

            $(".rate2").on("updateError", function(ev, jxhr, msg, err){
                console.log("This is a custom error event");
            });

            $(".rate2").rate("setAdditionalData", {id: 42});
            $(".rate2").on("updateSuccess", function(ev, data){
                console.log(data);
            }); 
          });
    </script>
    <!-- bootstrap lir for collapes -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>@import url(https://fonts.googleapis.com/css?family=Roboto:900,300);
body {
  background-color: #f0f0f0;
  font-family: roboto;
}
/* navbar style */

nav{
  display: flex;
  box-sizing: border-box;
  background: #fff;
  height: 80px;
  width: 100%;
  box-shadow: 20px 0px 20px 0px rgba(0, 0, 0, 0.8);
 align-items: center;
   justify-content: space-between;
}
label.logo{
  list-style: none;
  color: white;
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}
nav ul{
  display: flex;
    align-items: center;
    justify-content: center;
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: black;
  text-decoration: none;

  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
a.active,a:hover{
  color: #fff;
  text-decoration: none;
  background: black;
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: black;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
@media (max-width: 952px){
  label.logo{
    font-size: 30px;
    padding-left: 50px;
  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 858px){
  .checkbtn{
    display: block;
  }
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    align-items: center;

    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  }
  a:hover,a.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }
}
/* style for contant  */

.container {
  width: 400px;
  margin: 120px auto 120px;
  background-color: #fff;
  padding: 0 20px 20px;
  border-radius: 6px;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.075);
  -webkit-box-shadow: 0 2px 5px rgba(0,0,0,0.075);
  -moz-box-shadow: 0 2px 5px rgba(0,0,0,0.075);
  text-align: center;
}
.container:hover .avatar-flip {
  transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
}
.container:hover .avatar-flip img:first-child {
  opacity: 0;
}
.container:hover .avatar-flip img:last-child {
  opacity: 1;
}
.avatar-flip {
  border-radius: 100px;
  overflow: hidden;
  height: 150px;
  width: 150px;
  position: relative;
  margin: auto;
  top: -60px;
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  box-shadow: 0 0 0 13px #f0f0f0;
  -webkit-box-shadow: 0 0 0 13px #f0f0f0;
  -moz-box-shadow: 0 0 0 13px #f0f0f0;
}
.avatar-flip img {
  position: absolute;
  left: 0;
  top: 0;
  border-radius: 100px;
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
}
.avatar-flip img:first-child {
  z-index: 1;
}
.avatar-flip img:last-child {
  z-index: 0;
  transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
  opacity: 0;
}
h2 {
  font-size: 32px;
  font-weight: 600;
  margin-bottom: 15px;
  color: #333;
}
h4 {
  font-size: 13px;
  color: #00baff;
  letter-spacing: 1px;
  margin-bottom: 25px
}
p {
  font-size: 16px;
  line-height: 26px;
  margin-bottom: 20px;
  color: #666;
}
.icons a{
  color:#2196f3;
    text-decoration: none;
    font-size: 25px;
    transition: 0.5s;

}
.icons li{
  

    list-style: none;
    float: left;
    margin-right: 50px;
    cursor: pointer;
}
.icons li:hover a{
    color:#2196f3;
    font-size: 20px;
}
/* for viem photo in grid.js */

.grid:after {
  content: '';
  display: block;
  clear: both;
}

.grid-sizer,
.grid-item {
  width: 33.333%;
}
@media (max-width: 575px) {
  .grid-sizer,
  .grid-item {
    width: 100%;
  }
}
@media (min-width: 576px) and (max-width: 767px) {
  .grid-sizer,
  .grid-item {
    width: 50%;
  }
}
.grid-item {
  float: left;
}

.grid-item img {
  /* display: block; */
  max-width: 100%;
}
/* for rating  */

.rate-base-layer
        {
            color: #aaa;
        }
        .rate-hover-layer
        {
            color: orange;
        }
        .rate
        {
            font-size: 35px;
            left:30%;
        }
        #fss1{
          left:90%;
        }

</style>
<body>
<!-- navbar -->

<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <div class="con-logo"><img src="img/logo.png" width="250px" height="200px"> </div>
      <ul>
        <li><a href="home.php"target="_blank"><i class="fas fa-house-damage"></i> Home</a></li>
        <li><a href="categories.php" target="_blank"><i class="fas fa-project-diagram"></i> Categories</a></li>
        <li><a href="upload.php"target="_blank"><i class="fas fa-upload"></i> Upload</a></li>
        <li><a href="CONTACT_US.php" target="_blank"><i class="fas fa-question"></i> Contact as</a></li>
    </ul>
    </nav>
        <!-- print info  -->

<?php
   while ($test = mysqli_fetch_array($que)){
     ?>
<div class="container">
  <div class="avatar-flip">
  <img src="<?php echo $test["photo"]?>" height="150" width="150">
  <h4> <?php echo $test["id"]?></h4>
    <!-- <img src="http://i1112.photobucket.com/albums/k497/animalsbeingdicks/abd-3-12-2015.gif~original" height="150" width="150"> -->
  </div>
  <?php if (!empty($_SESSION['user_id'])){
    if($x11==$_SESSION['user_id']){

 echo "<a id='fss1' href='#square' title='edit your information and profile photo'><i id='fss1' class='fas fa-user-edit'></i></a>"; } } ?>
         <h2 style="text-transform: uppercase;"> <?php echo $test["fullname"]?></h2>
         <hr>
         <h4> <i class="zmdi zmdi-email"></i> <br> <?php echo $test["email"]?></h4>
         <hr>
         <h4 style="text-transform: uppercase;"> <i class="zmdi zmdi-pin"></i> <br> <?php echo $test["address"]?></h4>
         <hr>
         <p>rating</p>
         <div class="rate"></div>
         <hr>

         <div class="icons">
                    <ul>
                        <li><a title='phone namber' href = "tel:0<?php echo $test["phone"]?>"><i class="zmdi zmdi-phone"></i></a></li>
                        <li><a title='link facebook' href = "<?php echo $test["facebook"]?>"><i class="zmdi zmdi-facebook"></i></i></li>
                        <li><a title='link instgrem' href = "<?php echo $test["instgrem"]?>"><i class="zmdi zmdi-instagram"></i></a></li>
                    </ul>
                </div>
               
<br>
<br>

   <p> status: <?php echo $test["des"]?>.</p>
  <p>welcome <?php echo $test["fullname"]?> to go to home page <a title='home page' href = "home.php" target="_blank">click here</a></p>
  
  Click here to <a href="logout.php" title="Logout">Logout.</a>
</div>
<?php
//save email to select a img for user

     $img_user = $test["email"];
      //save info to view in  input(textbox)  

      $h1 = $test["id"];
      $h2 = $test["fullname"];
     $h3 = $test["username"];
     $h4 = $test["email"];
     $h5 = $test["password"];
     $h6 = $test["password"];
     $h7 = $test["photo"];
     $h8 = $test["address"];
     $h9 = $test["phone"];
     $h10 = $test["des"];
     $h11 = $test["instgrem"];
     $h12 = $test["facebook"];
}


// select a img for user

$select = "SELECT *   FROM upload  WHERE email = '$img_user' ";
   $r = mysqli_query($connect , $select);
   while ($ro = mysqli_fetch_array($r)){ ?>
   <div class="grid">
    <div class=" grid-sizer"></div>
    <div class="col-lg-4 col-md-6 col-sm-12 grid-item">
      <img src="<?php echo $ro["img"]?>" />
      
      <h5 class="card-title"><?php echo $ro["tags"]; ?></h5>
            <!-- print count of like -->

      <?php
      $z10 = $ro ['id'];
      $select1 = "SELECT count(*) AS num_like from likes WHERE likes.postid = $z10";
      $result1 = mysqli_query($connect , $select1);
      $result2 = mysqli_fetch_array($result1);
      $num_likes = $result2 ['num_like'];
      ?>
      <p>Total likes for this photo &#x2764 <?php echo $num_likes;?></p><br>
    </div>
  </div>
</div>

   <?php
    }
?>
<!-- collapse for edit info -->
<?php 
if (!empty($_SESSION['user_id'])){
if($x11==$_SESSION['user_id']){
  echo "<p>
  <button title='edit info' id='square' class='btn btn-primary btn-lg btn-block' type='button' data-toggle='collapse' data-target='.multi-collapse' aria-expanded='false' aria-controls='multiCollapseExample1 '>Modify your information</button>
  </p>";
}}

?>
<!--  view info in  input(textbox)   -->
<div class="container">
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
      <form class="card" action="" method="POST" enctype="multipart/form-data">
<input type="hidden" name="name11" id="id1"  value="<?php echo $h1;?>"> <br>

<!-- <p>Full Name</p> -->
<input type="hidden" name="name22" id="id2"  value="<?php echo $h2 ;?>"> <br>

<p>UserName</p>
<input type="text" name="name33" id="id3"value="<?php echo $h3;?>"> <br>

<p>Email</p>
<input type="email" name="name44" id="id4"value="<?php echo $h4;?>"> <br>

 <div class="col-sm-6">
                            <div class="input-group">
                            <!-- <p>Adderss</p> -->
                                <input type="hidden" name="name111" id="id8"value="<?php echo $h8;?>"/>
                                <p>Status </p>
    <input name="name133"  id="id10" value="<?php echo $h10;?>">
                            </div>
                            </div>
                            <div class="col-sm-6">
                             <div class=" input-group">
                             <p> Number Phone</p>
    	       <input name="name122"  id="id9" value="<?php echo $h9;?>" type="tel">
                 </div> 
                 </div> 
<br>
     <!-- <div class="col-sm-12">
    <div class="form-group">
    
  </div>
  </div> -->
                          <div class="col-sm-6">
                          <div class="form-group">
                          <p>Link Instgrem </p>
                                <input type="text" name="name144"  id="id10" value="<?php echo $h11;?>"/>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                            <p>Link Facebook </p>
                                <input type="text" name="name155"  id="id11" value="<?php echo $h12;?>"/>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                            <p>Password</p>
                                <input type="text" name="name55" id="id5"value="<?php echo $h5;?>" required/>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                            <p>Re Password</p>
                                <input type="text" name="name66" id="id5"value="<?php echo $h5;?>" required/>
                            </div>
                            </div>

                            <div class='form-group'>

                            <label for='re-pass'><i class='zmdi zmdi-image-alt'></i></label>
                            <input type="hidden" name="name99" id="id9" value="<?php echo $h7;?>"> <br>

                            <input class='file-input' name='name99'  id='id9'value="<?php echo $h7;?>" type='file' > 
                           </div>
                           
                            </div>
<br> <br>
  <!-- action for change info and valdition -->
<?php  
if (isset($_POST["modify-button"])){
  $fileinfo = @getimagesize($_FILES["name99"]["tmp_name"]);
    //$width = $fileinfo[0];
   // $height = $fileinfo[1];
    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg",
        "JPG"
    );
    
    // Get image file extension
    $file_extension = pathinfo($_FILES["name99"]["name"], PATHINFO_EXTENSION);
    if (! file_exists($_FILES["name99"]["tmp_name"])) {
      $response = array(
          "type" => "error",
          "message" => "Choose image file to upload."
      );
      $target= $h7;
  }
        // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        // echo $result;
    }    // Validate image file size
    else if (($_FILES["name99"]["size"] > 2000000)) {
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds 1MB"
        );
    }    // Validate image file dimension
    else  {
        $target = "profile/" . basename($_FILES["name99"]["name"]);
        if (move_uploaded_file($_FILES["name99"]["tmp_name"], $target)) {
           
            $response = array(
                "type" => "success",
                "message" => "Image uploaded successfully."
     
    
            );
        
        } else {
          $response = array(
                "type" => "error",
                "message" => "Problem in uploading image files."
            );
        }
    }
    
    
    $x1 = $_POST["name22"];
    $x2 = $_POST["name33"];
    $x3 = $_POST["name44"];
    $x4 = $_POST["name55"];
    $x5 = $_POST["name66"];
    $x7 = $target;
    $x8 = $_POST["name111"];
    $x9 = $_POST["name122"];
    $x10 = $_POST["name133"];
    $x11 = $_POST["name144"];
    $x12 = $_POST["name155"];

    if ($x4!=$x5){
      $response = array(
        "type" => "error",
        "message" => "the Passwords Dont Match"
    );
    }
    elseif($h5=md5 ($x4)){
      $W1 =$h5;
    }
    else{
      $W1 = md5 ($x4);

    }
      
  

  $amman = "UPDATE khaleel SET fullname = '$x1' ,UserName ='$x2' , email = '$x3' , password = '$W1' , photo= '$x7', address= '$x8'
  , phone = '$x9', des= '$x10', instgrem= '$x11', facebook = '$x12' WHERE id = '$h1' ";
  mysqli_query($connect ,$amman );
}
?>
<!-- button modify -->
<button class="btn btn-success" name="modify-button">modify items</button>

<span  class="text-danger"><?php if (isset($response["message"])) echo $response["message"]; ?></span>
</form>     
 </div>
 </div>
  </div>
  </div>
  </div>
<!-- fontawesome -->

   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <script>// init Masonry
var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,
  columnWidth: '.grid-sizer'
});

// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});</script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/masonry.pkgd.js"></script>
</body>
</html>