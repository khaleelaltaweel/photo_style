<?php
session_start();
//  connect this page with all pages in my project



//  Connect to my database :

$connect = @mysqli_connect("localhost" ,"root" , "" , "index" );


                 // regsiter page

//   Collect all the Data From mY form:
    
    $x1 = @$_POST["fullname"];
    $x2 = @$_POST["username"];
    $x3 = @$_POST["email"];
    $x4 = @$_POST["password"];
    $x5 = @$_POST["password10"];
    $x7 = @$_POST["adderss"];
    $x8 = @$_POST["phone"];
    $x9 = @$_POST["instgrem"];
    $x10= @$_POST["facebook"];
    $x11= @$_POST["text"];
    $x6 = @$_POST["submit"];
    

    $errors = array();


    //  Validation:

    if (!preg_match("/^[a-zA-Z ]+$/",$x1)) {
        array_push($errors , "Name must contain only alphabets and space");
        }
    if (empty($x1)){
        array_push($errors , "Full Name is empty");
    }

    if (empty($x2)){
        array_push($errors , "UserName is empty");
    }

    if (empty($x3)){
        array_push($errors , "Email is empty");
    }
    if(strlen($x4) < 6) {
        array_push($errors , "Password must be minimum of 6 characters");

        } 
    if (empty($x4)){
        array_push($errors , "Password is empty or wrong");
    }

    if (empty($x5)){
        array_push($errors , "re_password is empty or wrong");
    }

    if ($x4!=$x5){

        array_push($errors , "the Passwords Dont Match");
    }
    if (empty($x7)){
        array_push($errors , "address is empty");
    }
    if(strlen($x8) < 10) {
        array_push($errors ,"Mobile number must be minimum of 10 characters");
        }
  
    


if (isset($_POST["submit"])) {
    // Get Image Dimension
    $fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
    //$width = $fileinfo[0];
   // $height = $fileinfo[1];
    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg",
        "JPG"
    );
    
    // Get image file extension
    $file_extension = pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION);
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["file-input"]["tmp_name"])) {
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
    else if (($_FILES["file-input"]["size"] > 2000000)) {
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds 1MB"
        );
    }    // Validate image file dimension
    else  {
        $target = "profile/" . basename($_FILES["file-input"]["name"]);
        if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target)) {
           
            $response = array(
                "type" => "success",
                "message" => "Image uploaded successfully."
     
    
            );
        
        } else {
            $errors = array(
                "type" => "error",
                "message" => "Problem in uploading image files."
            );
        }
      
    }

    if (count($errors)==0){
          $W1 = md5 ($x4);
        
        $insert1 = "INSERT INTO khaleel (fullname , username , email , password , photo , address , phone , des , instgrem , facebook)
         VALUES ('$x1' , '$x2' , '$x3' , '$W1' , '$target' ,'$x7','$x8','$x11','$x9','$x10')";
        $result1 = mysqli_query($connect , $insert1);
        $response = array(
            "type" => "success",
            "message" => "Seccessfully Register"
        );
        array_push($errors , ">>Registertion");

      
        //header("location:profile.php");
    
    
    }else{

        // $response = $errors;

        // foreach($errors as $err){
        //     $response[] = array(
        //         "type" => "error",
        //         "message" => $err
        //     );
        // }
        
    }

}
  





   
    
// admin login


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset ( $_POST["admin"])){
    $a = @$_POST["admin1"];
    $a1 = @$_POST["admin2"];
    $sel = "SELECT * FROM admin WHERE username = '$a' and password ='$a1'";
    $re = mysqli_query($connect , $sel);
    if (mysqli_num_rows($re)==1){
     $_SESSION['admin1'] = $a;
     echo 'welcome  ' . $_SESSION['admin1'] . ' you are in a control panel now' ;

        header('REFRESH:3;URL=dashboard.php');
    }
        else
        { 
            header('location: admin.php');
            array_push($errors , "password or email is incorrect");

        

    }
 }
}

// contact us excute


    $c1 = @$_POST["Submit"];
    $c2 = @$_POST["email1"];
    $c3 = @$_POST["message"];
    $c4 = @$_POST["id"];
    $errors1 = array();


    //  Validation:

    if (empty($c2)){
        array_push($errors1 , "email is empty");
    }

    if (empty($c3)){
        array_push($errors1 , "massage is empty");
    }
     if (count($errors1)==0){
        
        $c5 = "INSERT INTO contactus (email , massege) VALUES ('$c2' , '$c3')";
        $c6 = mysqli_query($connect , $c5);
        echo '<span style="color:black;text-align:center;margin-left: 50%;margin-top: 30%;">Thank you for contacting us</span>';
        

    }


// get image and like
    function getImageMounth(){
        $connect = @mysqli_connect("localhost" ,"root" , "" , "index" );
        $CMD  = "SELECT postid, count(*) as `NoLikes` FROM `likes` GROUP BY `postid` order by `NoLikes` DESC";
        $res = mysqli_query($connect , $CMD);
        $imageLike = array();
        while($row = mysqli_fetch_array($res)){
            $imageLike[] = [
                'image_id' => $row['postid'],
                'nolikes' => $row['NoLikes']
            ];
        }

        return $imageLike;
    }
    // get user for image like

    function getImage($id){
        $connect = @mysqli_connect("localhost" ,"root" , "" , "index" );
        $CMD  = "SELECT * ,khaleel.id AS user_id , upload.id AS img_id  FROM upload , khaleel WHERE upload.email = khaleel.email AND upload.id = '$id'";
        $res = mysqli_query($connect , $CMD);
        $imageLike = array();
        $row = mysqli_fetch_array($res);

        return $row;
    }





    ?>





