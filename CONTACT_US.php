<?php
include("server.php");


?>
<html>
<head lang="en">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <title>CONTACT_US</title>
  <style>
   body {
    color: #ffffff
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
    color: #fff;
  text-decoration: none;
  background: black;
  transition: .5s;

  }
  #check:checked ~ ul{
    left: 0;
  }
}

.box {
    margin: auto
}

.card {
    padding: 8%;
    padding-top: 35px;
    margin-top: 60px;
    margin-bottom: 80px
}

textarea[name="message"] {
    resize: none
}

#e-mail {
    height: 45px
}

#message {
    height: 120px
}

input.input-box,
textarea.input-box {
    background-color: #616161;
    border: #616161;
    color: #BDBDBD
}

input.input-box:focus,
textarea.input-box:focus {
    background-color: #000000;
    color: #BDBDBD
}

.rm-border:focus {
    border-color: inherit;
    -webkit-box-shadow: none;
    box-shadow: none
}

form .form-control::-webkit-input-placeholder {
    color: #9E9E9E
}

::-moz-placeholder {
    color: #9E9E9E !important
}

input.btn-purple {
    }

    .btn:hover{
        color: #9E9E9E;
    }
    footer{
    background: black;
    color:red;
}
  </style>
</head>
<body>
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
    </nav>
<div class="bg-light">
    <div class="container">
        <div class="row justify justify-content-center">
            <div class="col-11 col-md-8 col-lg-6 col-xl-5">
                <form class="" method="POST">
                    <div class="card bg-dark">
                        <div class="row mt-0">
                            <div class="col-md-12 ">
                                <h4 class="">Contact Us</h4>
                                <p>Use the form below to share your questions, ideas, comments and feedback</p>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-12 mb-0">
                                <p class="mb-1">Email</p> <input id="e-mail" type="text" placeholder="Enter your email" name="email1" class="form-control input-box rm-border"required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 mb-2">
                                <p class="mb-1">Message</p> <textarea id="message" type="text" placeholder="Enter your message" name="message" class="form-control input-box rm-border"required></textarea>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mb-0">
                            <div class="col-md-12 px-3"> <input type="submit" value="Submit" name="Submit" class="btn btn-block btn-purple rm-border"> </div>
                        </div>
                        <?php 
                        if (count($errors1)==0){
                        echo '<span >Thank you for contacting us</span>';
                        }
?>
                    </div>
                </form>
            </div>
        </div>
   
        <!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

<!-- Footer Elements -->
<div class="container">

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
<p style="color:red; font-size:18px;">© Copyright , All-Right Reserved design by khaleel altaweel</p>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../libs/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="js/jquery.vide.js"></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</body>
</html>