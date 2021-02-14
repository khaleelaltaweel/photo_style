<?php
include("server.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- <link rel="stylesheet" href="css/regs css.css"> -->
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<style>
.response {
    padding: 10px;
    margin-top: 10px;
    border-radius: 2px;
}
/* body {
        background-image: url("img/login.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    } */
</style>

<body>
<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-sm-6">
                            <div class="input-group">
                                <label for="name"><i class="zmdi zmdi-account-circle"></i></label>
                                <input type="text" name="fullname" id="name" placeholder="Full Name" maxlength="50" required/>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="input-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="name" placeholder="User Name" maxlength="50" required/>
                            </div>
                            </div>
                            <div class="col-sm-6">

                            <div class="input-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="input-group">
                                <label for="email"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="adderss" id="email" placeholder="Your address"required/>
                            </div>
                            </div>

                             <div class=" input-group">
                            <label for="name"><i class="zmdi zmdi-phone"></i></label>
    	       <input name="phone"  id="email" placeholder="Phone number(optional)" type="tel">
                 </div> 

     <div class="col-sm-7">
    <div class="form-group">
     <!-- <label ><i class="zmdi zmdi-file-text"></i></label>  -->
    <textarea name="text"  placeholder="decreption(optional)"  rows="3"></textarea>
  </div>
  </div>
                          <div class="col-sm-6">
                          <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-instagram"></i></label>
                                <input type="text" name="instgrem" id="name" placeholder="link instgrem(optional)"/>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-facebook"></i></label>
                                <input type="text" name="facebook" id="facebook" placeholder="link facebook(optional)"/>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" required/>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password10" id="re_pass" placeholder="Re password" required/>
                            </div>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-image-alt"></i></label>
                            <input class="file-input" name="file-input"  type="file" required> 
                           </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit"  class="form-submit" value="Register"/>
                            </div>
                            </div>
                        </form>
                    </div>
                     
                    <div class="signup-image">
                    <div style="border: 5px solid black;" class="response">
                    <span  class="text-danger"><?php if (isset($response["message"])) echo $response["message"]; ?></span>
                    <span class="text-danger"><?php if (isset($errors[0])) echo $errors["0"]; ?></span> </div>
                    <!-- <?php 
        
        if(!empty($response)) {
    
           ?>
                <div style="border: 5px solid black;" class="response"> <?php echo $response["message"];?> <?php echo $errors[0];?></div>
    
                    
                <?php }?> -->
                        <figure><img src="img/cam.png" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
     <!-- <div class="login text-center">
        <h1>Creat An Account</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <p> Full Name :</p>
            <input type="text" name="fullname"> <br>

            <p>Username :</p>
            <input type="text" name="username"> <br>

            <p>Your Email :</p>
            <input type="email" name="email"> <br>

            <p>Password: </p>
            <input type="password" name="password"> <br>

            <p>Re-enter Password :</p>
            <input type="password" name="password10"> <br>
            <p>choose your image:</p>
            <input class="file-input" name="file-input"  type="file">

            <input type="submit" value="Register" name="submit"> <br> <br>

            <p>You Have An Account?</p>
            <a href="login.php"> <input type="button"  value="Login" name=""> </a> 
            
    </form>
    

    </div>  -->
   
           
  
       <script src="js/jquery.min.js"></script>
       <script src="js/main.js"></script>
    
</body>
</html>

