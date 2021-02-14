<?php
error_reporting(0);
require("server.php");

//$test = mysqli_connect("localhost" , "root" , "" , "index");

?> 

<?php
$fileinfo = $_FILES["uploadfile"];
if (isset($_POST["upload"])) {
  $x1 = $_SESSION["user_email"];
  $x2 = @$_POST["tage"];
  $x3 = @$_POST["tage1"];
  if (empty($x1)){
    header("location:register.php");
}
$select_uname = "SELECT username FROM  khaleel  WHERE  email = '$x1'  ";
$result_uname = mysqli_query($connect , $select_uname);
$row_uname = mysqli_fetch_array($result_uname);
$x4 = $row_uname["username"] ;

    // Get Image Dimension
    $fileinfo = @getimagesize($_FILES["uploadfile"]["tmp_name"]);
    // $width = $fileinfo[0];
    // $height = $fileinfo[1];
    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg",
        "JPG"
    );
    
    // Get image file extension
    $file_extension = pathinfo($_FILES["uploadfile"]["name"], PATHINFO_EXTENSION);
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["uploadfile"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "Choose image file to upload."
        );
    }    // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "error",
            "message" => "Upload valiid images. Only PNG and JPEG are allowed."
        );
        // echo $result;
    }    // Validate image file size
    else if (($_FILES["uploadfile"]["size"] < 204800)) {
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds 2MB"
        );
    }    // Validate image file dimension
    // else if ($width > "300" || $height > "200") {
    //     $response = array(
    //         "type" => "error",
    //         "message" => "Image dimension should be within 300X200"
    //     );
    // }
     else {
       // $sql =  "INSERT INTO `upload`(`img`) VALUES ('$fileinfo')";
       // $sql = "INSERT INTO `upload`(`img`) VALUES ('$fileinfo')";
      // mysqli_query($test, $sql)
        $target = "image/" . $x4. "_".date("Y-m-d__h-i-sa").($_FILES["uploadfile"]["name"]);
        if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target)){
            $fileinfo = $_FILES["uploadfile"];

            $sql = "INSERT INTO `upload`(`img`,`email`,`tags`, `sub_title`) VALUES ('$target', '$x1', '$x2' , '$x3')";  
    
            mysqli_query($connect,$sql);
            
            $response = array(
                "type" => "success",
                "message" => "Image uploaded successfully."
            );  
        }
        else{
            $response = array(
                "type" => "error",
                "message" => "Problem in uploading image files."
            );
        }
     
    }
    
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- ****Get Fontausom lib***** -->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animate.css">

    
    <title>Upload Photo </title>
</head>
<style>@import url(https://fonts.googleapis.com/css?family=Roboto:900,300);
      body {
background: #000;
height: 800px;
}
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





body h1{  
    color :cyan;
    font-weight: bolder;
    /*font-family: Andora Demo;*/
  font-size: 35px;}
  body li{
    list-style-type: none;  
    color :cyan;
    font-weight: bolder;}
    ul li::before {
  
  display: inline-block;
  margin-right: 0.2rem;
}
.section1{
  border: 5px solid black;
height:100%; width:100%;
color:#fff;
font-size:25px;

}
.btn{
  font-size:40px;

}
.response {
    padding: 10px;
    margin-top: 10px;
    border-radius: 2px;
}
#footer{
  bottom: 0%;

}
.video{
  top: 80px;
    left:100px;
}
       
       
   
   
</style>
<body data-vide-bg="img/background"> 
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <div class="con-logo"><img src="img/logo.png" width="250px" height="200px"> </div>
      <ul>
        <li><a href="home.php"><i class="fas fa-house-damage"></i> Home</a></li>
        <li><a href="categories.php"><i class="fas fa-project-diagram"></i> Categories</a></li>
        <li><a href="upload.php"><i class="fas fa-upload"></i> Upload</a></li>
        <li><a href="CONTACT_US.php"><i class="fas fa-question"></i> Contact Us</a></li>
    </ul>
    </nav>
    <section class="section1 container text-center">
    <form id="regForm" action="" method="POST" enctype="multipart/form-data">
        <h1> Image-Upload </h1>
     
    <div class="form-group text-center">
      <label class="float-left">Tags And Your Title : </label>
      <select class="form-control 1" name="tage" id="inputState" required/>

      <!-- <select id="inputState" class="form-control 1" name="tage" required> -->
        <option selected>Choose Your Tags...</option>
        <option>wallpapers</option>
        <option>travel</option>
        <option>nature</option>
        <option>textures-patterns</option>
        <option>widding</option>
        <option>people1</option>
        <option>arts-culture</option>
        <option>history</option>
        <option>kids</option>
        <option>food-drink</option>
        <option>flower</option>
        <option>waterfall</option>
        <option>space</option>
        <option>city</option>
        <option>moon</option>
        <option>other</option>
      </select>
    </div>
    <!-- <div class="form-group text-center"> 
    <label class="float-left">Sub Title : </label>
                      
      <input type="text" name="tage1" id="inputState" placeholder="Sub Title and decreption" required/>
   </div> -->
   <div class="form-group text-center">
      <label class="float-left">Sub Title :</label>
            <input type="text" name="tage1" class="form-control" id="inputEmail4" placeholder="example (nature,tree,flower,rose , etc...)" required> 
    </div>

    
   
    <div class="form-group ">
    <input class="uploadfile" name="uploadfile" onchange="loadFile(event)" type="file" class="form-control-file file-outline-danger" id="exampleFormControlFile1">
  </div>
  
  <div class="">
      <button name="upload" type="submit" class="btn btn-lg btn-outline-danger ">Upload</button>
    </div>
    <p class="float-left"><img id="output" width="200" /></p>
    <strong class="text-slider text-center" style = "color: red; "></strong>
    <br>
    <strong class="video text-center" style = "color: yellow; "></strong>
    </form>
    
    <?php if(!empty($response)) { ?>
    <div class="response <?php echo $response["type"]; ?>"><?php echo $response["message"]; ?></div>
    <?php }?>
    
   
</section>
<br>
<br><br><br><br><br><br>
<footer class="page-footer font-small mdb-color lighten-3 pt-4" id="footer">

  <!-- Footer Elements -->
  <div class="container" id="footer">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(78).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(79).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(81).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(82).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(84).jpg" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
  <p>© Copyright , All-Right Reserved design by khaleel altaweel</p>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>


<script>
    var x = new Typed ('.text-slider',{
        strings:["" , "<i class='fas fa-exclamation-triangle'></i> Instructions"],
        typeSpeed: 0,
    backSpeed: 0,
    backDelay: 500,
    startDelay: 1000,
    loop: false,
        

    });

</script>
<script>
    var x = new Typed ('.video',{
        strings:["" , "<i class='fas fa-smile-wink'></i>Must be have an account" , "<i class='far fa-angry'></i></i>The image must be larger than 2 MB" , "<i class='far fa-smile'></i>You must be photographed" , " <i class='far fa-question-circle'></i> select your tags.. If tag does not exist, write your own tag in the subtitle "],
        // typeSpeed:250,
        typeSpeed: 40,
        backSpeed:50,
        loop:true,
        smartBackspace: true,
        fadeOut: true,

    });

</script>
<script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
 </script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/vide/0.5.1/jquery.vide.min.js" integrity="sha512-xbl0smDcemxvxGBO15P8UbrrP1TWMfT2VQq0uggureCJQGr7umzx72azYCQLospxRd9RvMqRGJcKjrmbJ5cWQA==" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/jquery.vide.min.js"></script>
   
    


</body>
</html>