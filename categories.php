 <?php
 include('session.php');
 if(isset ($_POST['likeid'])){
     $z1= $_POST['likeid'];
    $z2 = $_SESSION ["user_id"];
    if (empty($z2)){
        header("location:register.php");
    }
    $s1 = "SELECT * FROM likes WHERE userid= '$z2' and postid ='$z1' ";
    $q1 =  mysqli_query($connect , $s1);
    $nr = mysqli_num_rows($q1);
    if ($nr== 0) {
        $in = "INSERT into `likes`(`userid` , `postid`) VALUES ('$z2','$z1')";
        mysqli_query($connect , $in);
    }
    
 }
        
        ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="venobox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<title>Categories</title>
<style>
    @media screen and (min-width : 400px){
        img.resp {
          width : 300px;
}
      }

      @media screen and (min-width : 800px){
        img.resp
         { width : 800px;
        }
      }
body { background-color:#fff;
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
    /* color: #0082e6; */
  }
  #check:checked ~ ul{
    left: 0;
  }
}
    
body { background-color:#fff;
    top:100px;
}

.section2{
    top:100px;
}


        .section2 .btn{
            border-radius: 5px 5px;
            margin-left: 0px;
            margin-bottom: 2px;
            color:black;           
        }
   .section2 .row{
 margin-left: 2px;}

       .section2 .mydiv{
       position: relative;
       width : 100%;
   height: 500px; 
    margin-left: 2px;
   margin-bottom: 2px;
   margin: 2px;
   } 
  .section2 img{
   
            width:100%;
            height:100%;
            border-radius: 2% 2%;
        }
         .overlay .img1 img{
         top : 50%;
        left:0%;
        border-radius:100%;
        width:70px;
        height:70px;
        
         }
          .overlay .img1  a {
           margin-left: 2px;
          text-decoration: none;
          font-size:10px; 
          color: black;
          }
       


        .overlay{
        left:0%;
         top:0%;
        margin-left: 1px;
            position: absolute ;
            width: 100%;
            height: 100%;
            background-color: rgba(0 , 0 , 0 , 0.2);
            opacity: 0;
            transition: 0.5s;
        }

       

         .overlay h5{
        font-size:10px;    
        color: red;
        }
        .overlay .img1 {
        bottom:0%;
        left:0%;
        border-radius: 50% 50% 50% 50%;
        width:50px;
        height:50px;
        
         }
          .overlay .img1 a {
          font-size:10px; 
          }


        .section2 .mydiv:hover .overlay{
            opacity: 1;
        }
    
.overlay .Card .card-img-top { 
 border-radius: 25% 10%;
}




.section2 .content h3{
    font-size: 24px;
    font-weight: 500;
    color: #0F0;
}
.section2 .content p{
    font-size: 16px;
    margin-top: 25px;
    line-height: 30px;
}
/*.section2 .content i{
    border: 1px solid #2196f3;
}
    width: 120px;
    height: 120px;
    font-size: 70px;
    line-height: 120px;
    border-radius: 50%;
    margin: 15px 0 25px 0;
    background: linear-gradient(45deg,#4b00ff,#ca0a91);*/


/************ end sevices *********/
   /*.section2 .container .mydiv .overlay .fontausom ul li {
        list-style: none;
         color: yallow;
       padding: 0px;
       margin: 0px;
       
    }*/
 .fontausom{
 /* position: relative; */
 display: flex; 
 list-style: none;
text-decoration: none;
}
    .section2 .overlay ul{
   
         /* position: absolute;
         transform: translateY (-50%); */
    }
    .fontausom .A1 {
       border: 1px #2196f3;
       bottom:50%;
        left:50%;
        font-size: 20px;
        color:white;
         margin-top: 300px;
         margin-left: 40px;
         
       
        }
        footer{
    text-align: center;
    background: #1c222e;
    color:red;
    padding: 20px 0;
}
/* ::-webkit-scrollbar {
width: 12px;
height: 12px;
} */
#timelineContainer {
overflow-x: scroll;
overflow-y: hidden;
 white-space: webkit-scrollbar;  border: 1px solid #353b48;
width: 95%;
margin: 0 auto;
position: relative;
/* background-color:  #5bc0de;  */
 }
 
 .page-footer {
        background-color: black;
    }
    

</style>
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
        <li><a href="CONTACT_US.php"><i class="fas fa-question"></i> Contact as</a></li>
    </ul>
    <div class="con-btns">
            
            <?php if (isset($_SESSION["user_email"])){
               echo"<button class='btn btn-outline-danger'><a href='logout.php' tite='Logout'><i class='fas fa-user-plus'></i><br>Logout</a></button>";
            }else
            echo "<button class='btn btn-outline-primary'><a href='login.php'><i class='fas fa-sign-in-alt'></i><br>Login</a></button>";

                ?>
                </div>
    </nav>
<section class="section2 text-center">
        <div class="headtitle">
            <h1>Categories & Trends</h1>
        </div>
        <form action="search.php" method="POST">
      <div class="d-flex justify-content-center ">
        <div class="searchbar" style=" background-color:#1c222e;">
          <input class="search_input" type="text" name="search" style="  color: white;" placeholder="Search..." >
          <button class="search_icon" name="search1"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </div> 
</form>
 

        <div class="btn" id= "timelineContainer">
            
            <li class="btn btn-outline-secondary" data-filter="all">all tags</li>
            <li class="btn btn-outline-secondary" data-filter=".wallpapers">#wallpapers</li >
            <li class="btn btn-outline-secondary" data-filter=".travel">#travel</li >
            <li class="btn btn-outline-secondary" data-filter=".nature">#nature</li>
            <li class="btn btn-outline-secondary" data-filter=".textures-patterns">#textures-patterns</li>
            <li class="btn btn-outline-secondary" data-filter=".widding">#widding</li>
            <li class="btn btn-outline-secondary" data-filter=".people1">#people</li>
            <li class="btn btn-outline-secondary" data-filter=".arts-culture">#arts-culture</li>
            <li class="btn btn-outline-secondary" data-filter=".history">#history</li>
            <li class="btn btn-outline-secondary" data-filter=".kids">#kids</li>
            <li class="btn btn-outline-secondary" data-filter=".food-drink">#food&drink</li>
            <li class="btn btn-outline-secondary" data-filter=".flower">#flower</li>
            <li class="btn btn-outline-secondary" data-filter=".waterfall">#waterfall</li>
            <li class="btn btn-outline-secondary" data-filter=".space">#space</li>
            <li class="btn btn-outline-secondary" data-filter=".city">#city</li>
            <li class="btn btn-outline-secondary" data-filter=".moon">#moon</li>
            <li class="btn btn-outline-secondary" data-filter=".other">#other</li>

        </div>
 




        <?php
// require("server.php");

?>
<!-- wallpapers-->

<div class="container">
 <div class="row">
<?php
// $x11 = $_GET["id"];

   $select = "SELECT * ,khaleel.id AS user_id , upload.id AS img_id  FROM upload , khaleel  WHERE upload.email = khaleel.email ORDER BY `img_id`desc ";
   $result = mysqli_query($connect , $select);

if (isset($result)){
    while ($row = mysqli_fetch_array($result )){?>
<?php $files=$row["img"];
$z10 = $row ['img_id'];
$select1 = "SELECT count(*) AS num_like from likes WHERE likes.postid = $z10";
$result1 = mysqli_query($connect , $select1);
$result2 = mysqli_fetch_array($result1);
$num_likes = $result2 ['num_like'];
?>
         <!-- Displaying file name !-->
<div class="col-lg-4 col-md-6 col-sm-12 mix <?php echo $row["tags"]?>">
                <div class="mydiv">
                <a class="venobox" data-gall="veno-gallary"  href="<?php echo $row["img"]?>">

                     <div class="overlay">
                            <div class="img1">
    <img src="<?php echo $row["photo"]?>" alt="Card image cap" >
    <a class= "h1"  href="profile.php?id=<?php echo $row ['user_id'] ;?>" style="color:#fff"><?php echo $row["email"]?></a>
    <label style="color:#fff ; float:right"> &#x2764 <?php echo $num_likes;?></label>  

                              <ul class="fontausom">

                              <li id = "heart"><button class="btn btn-outline-secondary A1 fa fa-3x fa-heart" onclick='dolike("like-<?php echo $row["img_id"]?>");'> </button></li>
                            <li><button class="btn btn-outline-secondary A1"> <i class="  fas fa-plus"></i></button> </li>
                
                            <li><a href="<?php echo $files; ?>" download="<?php echo $files; ?>">
                            <button class="btn btn-outline-secondary A1 far fa-arrow-alt-circle-down"></button></a></li>
                            

                               </ul>
                               </div>
                               </div>

  <img  src="<?php echo $row["img"]?>" id="img-size" class="img-size" alt="">  
                        
                        <form id="like-<?php echo $row["img_id"]?>" action="" method= "POST"> 
                        <input  type="hidden" name ="likeid" value="<?php echo $row["img_id"]?>" >
                        </form>
                        </a>

                    </div>
                </div>
                <?php
                // $loggedin_session=$row['email'];

            

    }

}

?>
                

            </div>
        </div>

    </section>
    <footer class="page-footer font-small text-center">

<!-- Footer Elements -->
<div class="container">

  <!-- Grid row-->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12 py-5">
      <div class="mb-5 flex-center">

        <!-- Facebook -->
        <a class="fb-ic"href="https://www.facebook.com/">
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
 function dolike(x1){
    document.getElementById(x1).submit() ;
};
</script>
<script> 
    $(document).ready(function(){
    
    //    $(#img-size).change(function(){
           $(.img-size).css("width","80%");
    //    });
      });
      </script>
    




<!-- With jQuery -->
<script>
$(".grid").imagesLoaded(function() {
    $(".grid").masonry({
      itemSelector: ".grid-item"
    });
  });
</script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="venobox.min.js"></script>
<script>
    var mixer = mixitup('.container');
</script>
<script src="js/masonry.pkgd.min.js"></script>

<script>
    $(document).ready(function(){
        $('.venobox').venobox(); 
      });
</script>

</body>
    </html>