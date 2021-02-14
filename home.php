<?php
    // require_once('server.php');
    include('logincheck.php');

?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/cc.css">‪
    <link rel="stylesheet" href="venobox.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/form-validation.css">
    <!-- <link rel="stylesheet" href="css/nav.css"> -->


    <!--**** Get BootStrap css**** -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- ****Get Fontausom lib***** -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    
</head>
<title>Home</title>
<style>@import url(https://fonts.googleapis.com/css?family=Roboto:900,300);
 
    * {
        /* margin: 0;
        padding: 0;
        box-sizing: border-box; */

    }

    body {

        /*background: #f1f3f6;*/
        background: #000;

    }
    hr{
        margin: auto;
    background-color: white;
    text-align:center;
    width : 5%;
    height:2px;
}
nav{
  display: flex;
  box-sizing: border-box;
  background: #fff;
  height: 80px;
  width: 100%;
  box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.8);
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


    .bgVideo {


        background-image: url("img/4.jpg");
        width: 100%;
        height: 100%;
        background-size: cover;
        background-attachment: fixed;
        /* position: relative; */
        color: red;
    }

    .bgVideo .title {
        width: 100%;
        margin: auto;
        text-align: left;
        position: absolute;
        top: 35%;
        margin-left: 30%;
    }

    .bgVideo .title p {
        font-size: 20px;
        font-weight: bolder;
        color: white;
        word-spacing: 2px;

    }

    .bgVideo a {
        position: relative;
        padding: 15px 30px;
        color: #2196f3;
        letter-spacing: 3px;
        text-decoration: none;
        text-transform: uppercase;
        transition: 0.5s;
        font-weight: bold;
        font-size: 40px;
        top: 30px;
    }


    .bgVideo a {
        position: relative;
        padding: 15px 30px;
        color: #f1f3f6;
        letter-spacing: 3px;
        text-decoration: none;
        /*transition: 0.5s;*/
        font-weight: bold;
        font-size: 40px;
        top: 30px;
        border-radius: 18px
    }

    .bgVideo a button {
        background: #000;
        cursor: pointer;
    }

    /*.bgVideo a:hover {
        /* background: red; 
        color: black;
    }*/

    .bgVideo h1 {
        font-size: 20px;
        font-weight: bolder;
        color: white;
        word-spacing: 2px;
    }

    #p1 {
        font-size: 60px;
    }

    #logo{
        color: blue;
    }

    #logo:hover{
        background-color: white;
    }
    .about{
        padding: 80px 0px;

        height: 750px;
        /* padding: 40px; */

        top:50%;
        margin-top: 50px;
        margin-bottom: 50px;

    }
    .about .row {
        padding-top: 80px;
        
  display: flex;
  /* flex-wrap: wrap; */
  padding: 20px 20px;
}
.mydiv{
    padding-top: 80px;

}
    .img2{
        margin-top: 10px;
        max-width: 100%;
    /* height: 150px; */
    padding: 0 4px;
    margin: 10px; 
    vertical-align: middle;
 }
    .P1{font-size: 16px;
        
        color: white;
        word-spacing: 2px;
        text-transform: uppercase;
}
h1{
    color: white;
    text-transform: uppercase;

}


p{
 
    font-family:Felix Titling;
}

a{text-decoration: none;
}
    /************  end header bg video *********/
</style>

<body>
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <div class="con-logo"><img src="img/logo.png" width="250px" height="200px"> </div>

      <label class="logo"></label>
      <ul>
        <li><a href="home.php"><i class="fas fa-house-damage"></i> Home</a></li>
        <li><a href="categories.php"><i class="fas fa-project-diagram"></i> Categories</a></li>
        <li><a href="upload.php"><i class="fas fa-upload"></i> Upload</a></li>
        <li><a href="#about"> <i class="fas fa-info"></i> About Us</a></li>
        <li><a href="#FAQs"> <i class="fa fa-question-circle"></i> FAQs</a></li>
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
    
    <!-- fthdtyhjdtyjdtyjtfj -->
    <section class="bgVideo">

        <div class="title">
            <p>Are You A Photography Lover?</p>
            <p id="p1">Professional</p>
            <p>Website For Thousands Of Arabic Photographers.</p>
            <a id="logo" href="upload.php"> START NOW</a>       
            </div>
    </section>

    <!-- ghfhfhhg -->

    <section class="section1 text-center">
        <div class="headtitle">
            <br>
            <h1 class="text-center">  Best Photos Of The Month</h1>
            <hr>
        </div>

        <div class="container">
            <div class="row">
                <?php
                
                    $BestImage = getImageMounth();
                    for($i = 0; $i< count($BestImage) AND $i < 4; $i++){
                        $ImageInfo = getImage($BestImage[$i]['image_id']); ?>


                    
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="content wow slideInRight" data-wow-duration="3s" data-wow-offset="500">

                                    <div class="mydiv">
                                        <div class="images">
                                            <a href="">
                                                <img class="img1" height="250px" src="<?php echo $ImageInfo['img'];?>">
                                            </a>
                                            <!-- <ul class="fontausom">
                                                <li><a href="" data-tip="Add To Cart"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><a href="" data-tip="Wishlist"><i class="fas fa-heart"></i></a></li>
                                                <li><a href="" data-tip="Compare"><i class="fas fa-desktop"></i></a></li>
                                                <li><a href=""><i class="fas fa-user-circle"></i></a></li>
                                            </ul> -->
                                        </div>
                                    </div>

                                    <div class="price">
                                        <h3 id="p2">
                                            <p><?php
                                                switch ($i){
                                                    case 0:
                                                        echo "Diamond";
                                                        break;

                                                    case 1:
                                                        echo "Gold";
                                                        break;

                                                    case 2:
                                                        echo "Silver";
                                                        break;

                                                    case 3:
                                                        echo "Bronze";
                                                        break;
                                                }
                                            
                                            ?></p>
                                        </h3>
                                        <a href="profile.php?id=<?php echo $ImageInfo['user_id'];?>"><?php echo $ImageInfo['fullname'];?></a>

                                    </div>

                                </div>


                            </div>
            <?php } ?>


        </div>
    </section>
    <!------------- start about us --------------->
    <div class="about container text-center" id="about">
        <h1 class="text-center">OUR TEAM </h1>

        <hr>
         <div class="row">
            <div class="col-md-4">
            <div class="mydiv text-center">
            <img class="img2" src="img/1 (2).jpg">
            <p class= "p1">Fuelling your favourite platforms</p>
            </div>
            </div>
            <div class="col-md-4">
            <div class="mydiv text-center">
            <img class="img2" src="img/1 (3).jpg">
            <p class= "p1">Over one million curated photos</p>
            </div>
            </div>
            <div class="col-md-4">
            <div class="mydiv text-center">
            <img class="img2" src="img/1 (1).jpg">
            <p class= "p1">This is home to a growing community </p>
            </div>
            </div>
        </div>
        <p class= "p1">Photo Style is a professional website with a unique platform powered by an amazing community that has hundreds of thousands of  gifted photographers with their own photos to fuel up creativity around the world. So sign up for free now.</p>
   </div>
       <!------------- end about us --------------->
    <!------------- start faq --------------->

   <div class="about container text-center" id="FAQs">
        <h1 class="text-center">FAQs </h1>

        <hr>
         <div class="row">
            <div class="col-md-6">
            <div class="mydiv text-center">
            <img class="img2" src="img/14.jpg">
            </div>
            </div>
            <div class="col-md-6">
            <div class="mydiv text-center">
            
            <p class= "p1"> 1- What is the acceptable image size on the site?<br>Size must be larger than 2 MB</p>
<p class= "p1">2- What is the appropriate format for uploading photos?<br>The appropriate format for uploading images is (JPEG - JPG - png ) </p>
<p class= "p1">3- Am I allowed to upload a certain number of photos?<br>
First, you must be registered with us. Yes, you are allowed to upload an unlimited number of photos</p>
<p class= "p1">
4- How does the best system work in this month?<br>
The system works on most pictures with likes from users</p>

            </div>
            </div>
           
        </div>
   </div>


    <!-- *************************** mixitup **************************************-->

   

    <section class="section12 text-center">
        <div class="headtitle12">
            <h1> TRY IT NOW</h1>
        </div>
        

        <div class="container-fluide">
            <div class="row">
                <!-- -->
                <div class="swiper-container">
                
                    <div class="swiper-wrapper">
                        <!-- ********Start Slid One***** -->
                        <?php  $sele = "SELECT * FROM khaleel ";
$que = mysqli_query($connect , $sele);

while ($test = mysqli_fetch_array($que)){
  ?>
                        <div class="swiper-slide">
     
                            <div class="mydiv12">
                            <?php  
$pic = array('img/people/(3).jpg','img/people/(2).jpg','img/people/(4).jpg','img/people/(5).jpg','img/people/(6).jpg','img/people/(7).jpg','img/people/(8).jpg','img/people/(10).jpg','img/people/(9).jpg','img/people/(11).jpg');  
shuffle($pic);  
?>  
<?php  
   for( $i = 0; $i < 1; $i++)  
      echo "
                         <img src=\"$pic[$i]\" width=\"250\" height=\"250\"> 
                       ";  
   
?>
                 
                                <!-- <img  alt="" id="myPicture" name="myPicture" alt="some image"> -->
   
                                <h1> <a href="profile.php?id=<?php echo $test["id"]?>"><?php echo $test["fullname"]?></a> </h1>
                                <div class="img1">
                                <a href="profile.php?id=<?php echo $test["id"]?>"><img id="1" src="<?php echo $test["photo"]?>" alt="Card image cap" style="width:70px;
                              height:70px; border-radius:100%;"></a>

                                </div>
                                <p> <?php echo $test["des"]?></p>
                                


                                <button class="slideUpBtn"><a href="register.php">JOIN NOW</button>

                            </div>
                        </div>
                        <?php } ?>
                        

                        <!-- ********Start Slid One***** -->
                        <!-- <div class="swiper-slide">
                            <div class="mydiv12">
                                <img src="img/people/(2).jpg" alt="">
                                <h1> <a href="profile.php">tome </a> </h1>
                                <div class="img1">
                                    <img id="1" src="img/people/(7).jpg" alt="Card image cap" style="width:70px;
                                       height:70px; border-radius:100%;">

                                </div>

                                <p> welcome all my friend we can take a proffesional photo in your camera</p>

                                <button class="slideUpBtn"><a href="login.php">JOIN NOW</button>

                            </div>
                        </div>

                        <!-- ********Start Slid One***** 
                        <div class="swiper-slide">
                            <div class="mydiv12">
                                <img src="img/people/(3).jpg" alt="">
                                <h1> <a href="profile.php">sameer </a> </h1>
                                <div class="img1">
                                    <img id="1" src="img/people/(11).jpg" alt="Card image cap" style="width:70px;
                                     height:70px; border-radius:100%;">

                                </div>
                                <p> welcome all my friend we can take a proffesional photo in your camera</p>

                                <button class="slideUpBtn"><a href="login.php">JOIN NOW</button>

                            </div>
                        </div>

                        <!-- ********Start Slid One***** 
                        <div class="swiper-slide">
                            <div class="mydiv12">
                                <img src="img/people/(4).jpg" alt="">
                                <h1> <a href="profile.php"> toleen</a> </h1>
                                <div class="img1">
                                    <img id="1" src="img/people/1.jpg" alt="Card image cap" style="width:70px;
                                         height:70px; border-radius:100%;">

                                </div>
                                <p> welcome all my friend we can take a proffesional photo in your camera</p>

                                <button class="slideUpBtn"><a href="login.html">JOIN NOW</button>

                            </div>
                        </div>


                        <!-- ********Start Slid One***** 
                        <div class="swiper-slide">
                            <div class="mydiv12">
                                <img src="img/people/(5).jpg" alt="">
                                <h1> <a href="profile.html">raneem</a> </h1>
                                <div class="img1">
                                    <img id="1" src="img/people/2.jpg" alt="Card image cap" style="width:70px;
                                      height:70px; border-radius:100%;">

                                </div>
                                <p> welcome all my friend we can take a proffesional photo in your camera</p>

                                <button class="slideUpBtn"><a href="login.html">JOIN NOW</button>

                            </div>
                        </div>



                        <!-- ********Start Slid One***** 
                        <div class="swiper-slide">
                            <div class="mydiv12">
                                <img src="img/people/(6).jpg" alt="">
                                <h1> <a href="profile.php">akram </a> </h1>
                                <div class="img1">
                                    <img id="1" src="img/people/3.jpg" alt="Card image cap" style="width:70px;
                                          height:70px; border-radius:100%;">

                                </div>
                                <p> welcome all my friend we can take a proffesional photo in your camera</p>

                                <button class="slideUpBtn"><a href="login.php">JOIN NOW</button>

                            </div>
                        </div>



                        <!-- ********Start Slid One***** 
                        <div class="swiper-slide">
                            <div class="mydiv12">
                                <img src="img/people/(7).jpg" alt="">
                                <h1> <a href="profile.php">ahmad </a> </h1>
                                <div class="img1">
                                    <img id="1" src="img/people/4.jpg" alt="Card image cap" style="width:70px;
                                      height:70px; border-radius:100%;">

                                </div>
                                <p> welcome all my friend we can take a proffesional photo in your camera</p>

                                <button class="slideUpBtn"><a href="login.php">JOIN NOW</button>
                            </div>
                        </div>


                        <!-- ********Start Slid One***** 
                        <div class="swiper-slide">
                            <div class="mydiv12">
                                <img src="img/people/(8).jpg" alt="">
                                <h1> <a href="profile.php">abood </a> </h1>
                                <div class="img1">
                                    <img id="1" src="img/people/5.jpg" alt="Card image cap" style="width:70px;
                                         height:70px; border-radius:100%;">

                                </div>
                                <p> welcome all my friend we can take a proffesional photo in your camera</p>

                                <button class="slideUpBtn"><a href="login.php">JOIN NOW</button>

                            </div>
                        </div>


                        <!-- ********Start Slid One***** 
                        <div class="swiper-slide">
                            <div class="mydiv12">
                                <img src="img/people/(9).jpg" alt="">
                                <h1> <a href="profile.php">tmam </a> </h1>
                                <div class="img1">
                                    <img id="1" src="img/people/6.jpg" alt="Card image cap" style="width:70px;
                                     height:70px; border-radius:100%;">

                                </div>
                                <p> welcome all my friend we can take a proffesional photo in your camera</p>

                                <button class="slideUpBtn"><a href="login.php">JOIN NOW</button>

                            </div>
                        </div>


                        <!-- ********Start Slid One***** 
                        <div class="swiper-slide">
                            <div class="mydiv12">
                                <img src="img/people/(10).jpg" alt="">
                                <h1> <a href="profile.php">mohammad </a> </h1>
                                <div class="img1">
                                    <img id="1" src="img/people/8.jpg" alt="Card image cap" style="width:70px;
                              height:70px; border-radius:100%;">

                                </div>
                                <p> welcome all my friend we can take a proffesional photo in your camera</p>

                                <button class="slideUpBtn"><a href="login.php">JOIN NOW</button>

                            </div>
                        </div>


                        <!-- ********Start Slid One***** -
                        <div class="swiper-slide">
                            <div class="mydiv12">
                                <img src="img/people/(11).jpg" alt="">
                                <h1> <a href="profile.php">hala </a> </h1>
                                <div class="img1">
                                    <img id="1" src="img/people/8.jpg" alt="Card image cap" style="width:70px;
                                   height:70px; border-radius:100%;">

                                </div>
                                <p> welcome all my friend we can take a proffesional photo in your camera</p>

                                <button class="slideUpBtn"><a href="login.php">JOIN NOW</button>
                            </div>

                        </div> -->
                        <!-- ********End all Slide Show******** -->
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
               
            </div>
            <!-- *******************Creat Buttons****************** -->

        </div>
    </section>
    <br>
    <br>
    
   
    <footer class="page-footer font-small cyan darken-3 text-center">

<!-- Footer Elements -->
<div class="container">

  <!-- Grid row-->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12 py-5">
      <div class="mb-5 flex-center">

        <!-- Facebook -->
        <a class="fb-ic"href="https://www.facebook.com/Khaleel Altaweel">
          <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic"href="https://www.twitter.com/">
          <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!-- Google +-->
        <a class="gplus-ic" href="https://mail.google.com/mail/u/0/#inbox">
          <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!--Linkedin -->
        <a class="li-ic"href="https://www.linkedin.com/login">
          <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!--Instagram-->
        <a class="ins-ic" href="https://www.instagram.com/">
          <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!--Pinterest-->
        <a class="pin-ic"href="https://www.pinterest.com/">
          <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
        </a>
      </div>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row-->

</div>

<div class="footer-copyright text-center py-3">
<p style="color:red; font-size:18px;">© Copyright , All-Right Reserved design by khaleel altaweel</p>
</div>
<!-- Copyright -->

</footer>


<script>
window.onload = choosePic;
var myPix = new Array("img/people/(11).jpg","img/people/(10).jpg","img/people/(8).jpg","img/people/(9).jpg","img/people/(7).jpg");


function choosePic() {
     var randomNum = Math.floor(Math.random() * myPix.length);
     document.getElementById("myPicture").src = myPix[randomNum];
}
     </script>

    <script src="https://kit.fontawesome.com/dd8c49730d.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"
        integrity="sha512-VHsNaV1C4XbgKSc2O0rZDmkUOhMKPg/rIi8abX9qTaVDzVJnrDGHFnLnCnuPmZ3cNi1nQJm+fzJtBbZU9yRCww=="
        crossorigin="anonymous"></script>
    <script src="mixitup.min.js"></script>
    <script src="venobox.min.js"></script>

    <script>
        var mixer = mixitup('.container');
    </script>


    <script>
        $(document).ready(function () {
            $('.venobox').venobox();
        });


    </script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            loop: false,
            coverflowEffect: {
                rotate: 300,
                stretch: 0,
                depth: 300,
                modifier: 2,
                slideShadows: true,
            },
            pagination: {
                el: '.swiper-pagination'
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });
        swiper.slideTo(3, false, false);
    </script>
    <script type="text/javascript"></script>
    <script src="jquery-3.4.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.vide.js"></script>
    <script src="js/typed.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- <script>new WOW().init();</script>  -->
</body>

    </html>