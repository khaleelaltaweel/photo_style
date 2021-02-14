<?php
$connect = mysqli_connect("localhost" , "root" , "" , "index");


 if (isset($_POST["search1"])){
//     $id = @$_POST["id"];  
// if(count($_POST)>0) {
  $x = @$_POST["search"];
  $cmdSearch = "SELECT * , khaleel.id AS user_id FROM khaleel , upload where upload.email = khaleel.email and (`sub_title` like '%$x%' or `tags` like '%$x%' ) ";
$result = mysqli_query($connect, $cmdSearch);
}


?>
<!doctype html>
<html lang="en-US" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title></title>
</head>
<style>
 /* // Within style tags in your html file */
/* * { box-sizing: border-box; } */
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
.grid:after {
  content: '';
  display: block;
  clear: both;
}

.grid-sizer,
.grid-item {
  width: 30%;
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

 /* To change the amount of columns on larger devices, uncomment the code below  */

 @media (min-width: 768px) and (max-width: 991px) {
  .grid-sizer,
  .grid-item {
    width: 33.333%;
  }
}

@media (min-width: 992px) and (max-width: 1199px) {
  .grid-sizer,
  .grid-item {
    width: 25%;
  }
}

@media (min-width: 1200px) {
  .grid-sizer,
  .grid-item {
    width: 20%;
  }
} 

.grid-item {
  float: left;
}

.grid-item img {
  display: block;
  max-width: 100%;
}
</style>
<body class="">
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
    <div class="con-btns">
            
            <?php if (isset($_SESSION["user_email"])){
               echo"<button class='btn btn-outline-danger'><a href='logout.php' tite='Logout'><i class='fas fa-user-plus'></i><br>Logout</a></button>";
            }else
            echo "<button class='btn btn-outline-primary'><a href='login.php'><i class='fas fa-sign-in-alt'></i><br>Login</a></button>";

                ?>
                </div>
    </nav
<div class="container-fluid">

  <h1 class="my-4 font-weight-bold">results for .. <?php echo $x;?></h1>
<?php while($row = mysqli_fetch_array($result)){?>
  <div class="grid">
    <div class=" grid-sizer"></div>
    <div class="col-lg-4 col-md-6 col-sm-12 grid-item">
      <img src="<?php echo $row["img"]?>" />
      
      <h5 class="card-title"><?php echo $row["tags"]; ?></h5>
      <a href="profile.php?id=<?php echo $row["user_id"]; ?>"><?php echo $row["email"]; ?></a>
    </div>
  
   
  
 
  
  
    
  </div>

</div>


    <?php
    }




?>
  
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


