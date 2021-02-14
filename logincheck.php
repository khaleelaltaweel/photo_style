<?php
include("server.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {


$username=mysqli_real_escape_string($connect,$_POST['name1']);
$password = md5(mysqli_real_escape_string($connect,$_POST['name2']));
$x3=@$_POST["name3"];
$errors=array();
if(isset($x3)){
    $select ="SELECT * FROM khaleel WHERE email = '$username' and password ='$password'";
        $result10 = mysqli_query($connect , $select);
        if (mysqli_num_rows($result10)==1){
			while($row1=mysqli_fetch_array($result10)){
            $x4= $row1["id"];
            $x5= $row1["email"];

$_SESSION["user_id"] = $x4;
$_SESSION["user_email"] = $x5;

            // $id = (isset($_GET['id'])) ? $_GET['id'] : $_SESSION['id'];
            // $query = "SELECT * FROM khaleel WHERE id = $id";
            // // if session is not set this will redirect to login page
            // if( !isset($_SESSION['id']) ) {
            // header("Location:profile.php?id=" .$_SESSION['id']);
            // exit;
            // }
header("Location:profile.php?id=".$x4);
			}

        // header("location:home.php");
    }else{
          echo "password or email is incorrect";
			}
		}}
	



// 	$username=mysqli_real_escape_string($connect,$_POST['name1']);
// 	$password=mysqli_real_escape_string($connect,$_POST['name2']);
// 	$result = mysqli_query($connect,"SELECT * FROM khaleel");
// 	$c_rows = mysqli_num_rows($result);
// 	if ($c_rows==$username) {
// 		header("location: login.php?remark_login=failed");	
// 	}
// 	$sql="SELECT * FROM khaleel WHERE email='$username' and password='$password'";
// 	$result=mysqli_query($connect,$sql);
// 	$row=mysqli_fetch_array($result);
// 	//$active=$row['active'];
// 	$count=mysqli_num_rows($result);
// 	if($count==1) {
// 		// echo $_POST ['name1'];

// 		include("profile.php");

		
// 	}
// }

?>