<?php
$con = mysqli_connect("localhost" , "root" , "" , "index");
$sele = "SELECT * FROM khaleel";
$sele1 = "SELECT * FROM upload";
$sele2 = "SELECT * FROM contactus";

$que = mysqli_query($con , $sele);
$que1 = mysqli_query($con , $sele1);
$que2 = mysqli_query($con , $sele2);
?>
<?php
//    How To Creat Function To Buutons
//   Admin Can Add Users Or Items:

if (isset($_POST["add-button"])){
    $z1 = $_POST["name1"];
    $z2 = $_POST["name2"];
    $z3 = $_POST["name3"];
    $z4 = $_POST["name4"];
    $z5 = $_POST["name5"];
    $z6 = $_POST["name6"];
    $z7 = $_POST["name7"];
    $z8 = $_POST["name8"];
    $z9 = $_POST["name9"];
    $z10 = $_POST["name10"];
    $z11 = $_POST["name11"];

    $ins = "INSERT INTO khaleel (`id`, `fullname`, `username`, `email`, `password`, `photo`, `address`, `phone`, `des`, `instgrem`, `facebook`) VALUES
     ('$z1' , '$z2' , '$z3' , '$z4' , '$z5', '$z6', '$z7', '$z8', '$z9', '$z10', '$z11') ";
    mysqli_query($con ,  $ins );
}

//    Admin Can Delete Users Or Items:

$t1 = "";
$t2 = "";
$t3 = "";
$t4 = "";
$t5 = "";
$t6 = "";
$t7 = "";
$t8 = "";
$t9 = "";
$t10 = "";
$t11 = "";

if (isset($_POST["name1"])){
    $t1 = $_POST["name1"];
}

if (isset($_POST["name2"])){
    $t2 = $_POST["name2"];
}

if (isset($_POST["name3"])){
    $t3 = $_POST["name3"];
}

if (isset($_POST["name4"])){
    $t4 = $_POST["name4"];
}

if (isset($_POST["name5"])){
    $t5 = $_POST["name5"];
}
if (isset($_POST["name6"])){
    $t6 = $_POST["name6"];
}
if (isset($_POST["name7"])){
    $t7 = $_POST["name7"];
}
if (isset($_POST["name8"])){
    $t8 = $_POST["name8"];
}
if (isset($_POST["name9"])){
    $t9 = $_POST["name9"];
}
if (isset($_POST["name10"])){
    $t10 = $_POST["name10"];
}
if (isset($_POST["name11"])){
    $t11 = $_POST["name11"];
}


if (isset($_POST["delet-button"])){
    $delete = "DELETE FROM khaleel WHERE id = $t1 ";
    mysqli_query($con , $delete  );

}


//   Admin Can Modify Items r Users :


    $h1 = "";
    $h2 = "";
    $h3 = "";
    $h4 = "";
    $h5 = "";
    $h6 = "";
    $h7 = "";
    $h8 = "";
    $h9 = "";
    $h10 = "";
    $h11 = "";



    if (isset($_POST["name1"])){
        $h1 = $_POST["name1"];
    }

    if (isset($_POST["name2"])){
        $h2 = $_POST["name2"];
    }

    if (isset($_POST["name3"])){
        $h3 = $_POST["name3"];
    }

    if (isset($_POST["name4"])){
        $h4 = $_POST["name4"];
    }

    if (isset($_POST["name5"])){
        $h5 = $_POST["name5"];
    }
    if (isset($_POST["name6"])){
        $h6 = $_POST["name6"];
    }
    if (isset($_POST["name7"])){
        $h7 = $_POST["name7"];
    }
    if (isset($_POST["name8"])){
        $h8 = $_POST["name8"];
    }
    if (isset($_POST["name9"])){
        $h9 = $_POST["name9"];
    }
    if (isset($_POST["name10"])){
        $h10 = $_POST["name10"];
    }
    if (isset($_POST["name11"])){
        $h11 = $_POST["name11"];
    }

    if (isset($_POST["modify-button"])){
        $amman = "UPDATE khaleel SET fullname = '$h2' ,UserName ='$h3' , email = '$h4' , password = '$h5' , photo= '$h6', address= '$h7', phone= '$h8' , des= '$h9' , instgrem= '$h10', facebook= '$h11' WHERE id = '$h1' ";
        mysqli_query($con ,$amman );
    }


?>
<?php
//    How To Creat Function To Buutons
//   Admin Can Add a photo:

if (isset($_POST["add-button1"])){
    $z11 = $_POST["name11"];
    $z22 = $_POST["name22"];
    $z33 = $_POST["name33"];
    $z44 = $_POST["name44"];
    $z55 = $_POST["name55"];
    


    $ins1 = "INSERT INTO upload (id , email  , tags , sub_title ,img ) VALUES ('$z11' , '$z22' , '$z33' ,'$z55' ,'$z44') ";
    mysqli_query($con ,  $ins1 );
}

//    Admin Can Delete Users Or Items:

$t11 = "";
$t22 = "";
$t33 = "";
$t44 = "";
$t55 = "";

if (isset($_POST["name11"])){
    $t11 = $_POST["name11"];
}

if (isset($_POST["name22"])){
    $t22 = $_POST["name22"];
}

if (isset($_POST["name33"])){
    $t33 = $_POST["name33"];
}

if (isset($_POST["name44"])){
    $t44 = $_POST["name44"];
}
if (isset($_POST["name55"])){
    $t55 = $_POST["name55"];
}


if (isset($_POST["delet-button1"])){
    $delete1 = "DELETE FROM upload WHERE id = $t11 ";
    mysqli_query($con , $delete1  );

}


//   Admin Can Modify Items r Users :


    $h11 = "";
    $h22 = "";
    $h33 = "";
    $h44 = "";
    $h55 = "";

    


    if (isset($_POST["name11"])){
        $h11 = $_POST["name11"];
    }

    if (isset($_POST["name22"])){
        $h22 = $_POST["name22"];
    }

    if (isset($_POST["name33"])){
        $h33 = $_POST["name33"];
    }

    if (isset($_POST["name44"])){
        $h44 = $_POST["name44"];
    }
    if (isset($_POST["name55"])){
        $h55 = $_POST["name55"];
    }
  

    if (isset($_POST["modify-button1"])){
        $amman1 = "UPDATE upload SET email = '$h22' ,tags ='$h33' , sub_title ='$h55', img = '$h44'  WHERE id = '$h11' ";
        mysqli_query($con ,$amman1 );
    }
//    Admin Can Delete contects: 
$t111 = "";
$t222 = "";
$t333 = "";


if (isset($_POST["name111"])){
    $t111 = $_POST["name111"];
}

if (isset($_POST["name222"])){
    $t222 = $_POST["name222"];
}

if (isset($_POST["name333"])){
    $t333 = $_POST["name333"];
}




if (isset($_POST["delet-button2"])){
    $delete2 = "DELETE FROM contactus WHERE id = $t111 ";
    mysqli_query($con , $delete2  );

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTROL PANEL</title>
</head>
<style>
body {
     background-image: url("img/(218).jpg");
     background-repeat: no-repeat;
     background-size: cover;

 }

 table{margin-left: 0%;
    top: 150px;
 }

</style>
<body>
<div class= "container">
    <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">DASHBOARD FOR USER</a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">DASHBOARD FOR PHOTO</button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" href="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">CONTANT US</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
      <form action="" method="POST">
<h1>User Control</h1>
<!-- <div class="col-lg-12"> -->
<div class="form-group text-center">


<p>Id</p>
<input  class="form-control" type="number" name="name1" id="id1"> 
</div>
<!-- <div class="col-md-6"> -->
<div class="form-group text-center col-md-6">

<p>name</p>
<input class="form-control" type="text" name="name2" id="id2"> 
</div>
<!-- <div class="col-sm-6"> -->
<div class="form-group text-center col-md-6">

<p>username</p>
<input class="form-control" type="text" name="name3" id="id3"> 
</div>

<div class="form-group text-center col-md-6">
<p>email</p>
<input class="form-control" type="email" name="name4" id="id4"> 
</div>

<div class="form-group text-center col-md-6">
<p>password</p>
<input class="form-control" type="password" name="name5" id="id5"> 
</div>

<div class="form-group text-center col-md-6"><p>profile picture</p>
<input class="form-control" type="text" name="name6" id="id6"> 
</div>

<div class="form-group text-center col-md-6"> 
<p>num phone</p>
<input class="form-control" type="text" name="name7" id="id7">
</div>

<div class="form-group text-center col-md-6">
<p>address</p>
<input class="form-control" type="text" name="name8" id="id8"> 
</div>

<div class="form-group text-center col-md-6">
<p>stutes</p>
<input class="form-control" type="text" name="name9" id="id9"> 
</div>

<div class="form-group text-center col-md-6">
<p>instgram</p>
<input class="form-control" type="text" name="name10" id="id10"> 
</div>

<div class="form-group text-center col-md-6">
<p>facebook</p>
<input class="form-control" type="text" name="name11" id="id11"> 
<br> <br>

</div>

<button class="btn btn-primary" name="add-button"> add Items</button>
<button class="btn btn-danger"  name="delet-button">delet items</button>
<button class="btn btn-success" name="modify-button">modify items</button> 
<br>
<br> <br>
<table border="2" id="amman" class="table table-dark">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>username</th>
        <th>email</th>
        <th>password</th>
        <th>photo</th>
        <th>num phone</th>
        <th>address</th>
        <th>stutes</th>
        <th>link instgrem</th>
        <th>link facebook</th>

    </tr>

    <?php

    while (@$test = mysqli_fetch_array($que)){
        echo "<tr>";
        echo "<td>" .$test["id"] ."</td>";
        echo "<td>" .$test["fullname"] ."</td>";
        echo "<td>" .$test["username"] ."</td>";
        echo "<td>" .$test["email"] ."</td>";
        echo "<td>" .$test["password"] ."</td>";
        echo "<td><a href='" .$test["photo"] ."'>".$test['photo']."</a></td>";
        echo "<td>" .$test["address"] ."</td>";
        echo "<td>" .$test["phone"] ."</td>";
        echo "<td>" .$test["des"] ."</td>";
        echo "<td><a href='" .$test["instgrem"] ."'>".$test["instgrem"] ."</a></td>";
        echo "<td><a href='" .$test["facebook"] ."'>".$test["facebook"] ."</a></td>";
        echo "</tr>";
    }

    ?>
</table>

</form>      
</div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
      <form action="" method="POST">
<h1>Photo From Upload Control</h1>
<p>Id</p>
<input type="number" name="name11" id="id11"> <br>

<p>email</p>
<input type="text" name="name22" id="id22"> <br>

<p>tags</p>
<input type="text" name="name33" id="id33"> <br>
<p>sub title</p>
<input type="text" name="name55" id="id55"> <br>
<p>img</p>
<input type="text" name="name44" id="id44"> <br>

 <br> <br> <br>

<button class="btn btn-primary" name="add-button1"> add Items</button>
<button class="btn btn-danger"  name="delet-button1">delet items</button>
<button class="btn btn-success" name="modify-button1">modify items</button> 
<br>
<br> <br>
<table border="2" id="amman1" class="table table-striped table-dark" >

    <tr>
        <th>id</th>
        <th>email</th>
        <th>tags</th>
        <th>sub title</th>
        <th>src:img</th>
        <th>photo</th>

    </tr>

    <?php

    while (@$test1 = mysqli_fetch_array($que1)){
        echo "<tr>";
        echo "<td>" .$test1["id"] ."</td>";
        echo "<td>" .$test1["email"] ."</td>";
        echo "<td>" .$test1["tags"] ."</td>";
        echo "<td>" .$test1["sub_title"] ."</td>";
        echo "<td>" .$test1["img"] ."</td>";
     echo '<td><img  src="'.$test1["img"].'" style="max-width:100%;height:500px;"></td>';
        echo "</tr>";
    }

    ?>
</table>

</form>     
 </div>
    </div>
  </div>




</div>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample3">
      <div class="card card-body">
      <form action="" method="POST">
<h1> Review User And Comments</h1>


<p>Id</p>
<input type="number" name="name111" id="id99"> <br

<p>email</p>
<input type="email" name="name222" id="id100"> <br>

<p>massage</p>
<input type="text" name="name333" id="id101"> <br> <br> <br>

<button class="btn btn-primary" name=""> constant now</button>
<button class="btn btn-danger"  name="delet-button2">delete items</button>
<br>
<br> <br>
<table border="2" id="amman2" class="table table-dark">
    <tr>
    <th>id</th>        
        <th>email</th>
        <th>massage</th>
    </tr>

    <?php

    while (@$test = mysqli_fetch_array($que2)){
        echo "<tr>";
        echo "<td>" .$test["id"] ."</td>";
        echo "<td>" .$test["email"] ."</td>";
        echo "<td>" .$test["massege"] ."</td>";
        echo "</tr>";
    }

    ?>
</table>

</form>      </div>
    </div>
  </div>


<script>
    var test = document.getElementById("amman");

    for (var x = 1 ;x<test.rows.length ;x++){
        test.rows[x].onclick = function(){
            document.getElementById("id1").value = this.cells["0"].innerHTML;
            document.getElementById("id2").value = this.cells["1"].innerHTML;
            document.getElementById("id3").value = this.cells["2"].innerHTML;
            document.getElementById("id4").value = this.cells["3"].innerHTML;
            document.getElementById("id5").value = this.cells["4"].innerHTML;
            document.getElementById("id6").value = this.cells["5"].innerHTML;
            document.getElementById("id7").value = this.cells["6"].innerHTML;
            document.getElementById("id8").value = this.cells["7"].innerHTML;
            document.getElementById("id9").value = this.cells["8"].innerHTML;
            document.getElementById("id10").value = this.cells["9"].innerHTML;
            document.getElementById("id11").value = this.cells["10"].innerHTML;

        }
    }

</script>
<script>
    var test = document.getElementById("amman1");

    for (var x = 1 ;x<test.rows.length ;x++){
        test.rows[x].onclick = function(){
            document.getElementById("id11").value = this.cells["0"].innerHTML;
            document.getElementById("id22").value = this.cells["1"].innerHTML;
            document.getElementById("id33").value = this.cells["2"].innerHTML;
            document.getElementById("id55").value = this.cells["3"].innerHTML;
            document.getElementById("id44").value = this.cells["4"].innerHTML;
        }
    }

</script>
<script>
    var test = document.getElementById("amman2");

    for (var x = 1 ;x<test.rows.length ;x++){
        test.rows[x].onclick = function(){
            document.getElementById("id99").value = this.cells["0"].innerHTML;
            document.getElementById("id100").value = this.cells["1"].innerHTML;
            document.getElementById("id101").value = this.cells["2"].innerHTML;
        }
    }

</script>


<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>



</body>
</html>





















