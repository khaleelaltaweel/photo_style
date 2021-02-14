
<?php

//include("server.php");

// include ("logincheck.php"); 


?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="css/LOGIN.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>LOGIN</title>
        </head>
 <style>
   body {
        background-image: url("img/login.jpg");
        background-repeat: no-repeat;
        background-size: cover;

    }
  
 </style>
 <body>
    <h1> welcome to our company</h1>

    <!-- ******* Start Form Login******* -->
    <div class="login text-center"> 

        <img src="img/download.png" width="100px" height="100x">
        <h2>Login</h2>

        <form action="logincheck.php" method="POST">
            <label for="">Email:</label><br>
            <input type="email" name="name1" placeholder="enter your email" required autocomplete="on" autofocus> <br> <br>

            <label for="">Password:</label><br>
            
            <input type="password" name="name2" placeholder="enter your password"> <br>
    
            <input type="submit" value="Login" name="name3"> <br>
            <a href="register.php"> Register</a>
        </form>
    </div> 
 </body>
</html>