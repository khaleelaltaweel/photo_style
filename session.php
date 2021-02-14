<?php
//  session_start();

 include('server.php');
//  $f=$row["email"];
// if(isset($ses_sql)){
//     $select1 = "select * from khaleel WHERE UserName='$f' "; 
// }
//$user_check=$_SESSION['login_user'];
// $select = "SELECT * FROM upload";
// $result = mysqli_query($connect , $select);
// $row1=mysqli_fetch_array($result,MYSQLI_ASSOC);
// $loggedin_session=$row1['email'];

$select1 = "select * from khaleel ";
$ses_sql=mysqli_query($connect,$select1);
$row11=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin=$row11['username'];
$loggedin_id=$row11['id'];
$loggedin_email=$row11['email'];



// $loggedin_=$row11['id'];

//$loggedin_session=$row['UserName'];
// if(($loggedin_session)==$loggedin) {
// 	//echo "Go back";
// 	header("Location: profile.php");
// }
?>