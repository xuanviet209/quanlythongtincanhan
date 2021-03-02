<?php

   require "condb.php";
 //   $sql="SELECT * FROM hocsinh";
 //   $result=mysqli_query($conn,$sql);
 //   if(!$result){
 //     die('Lỗi'.mysql_error($conn));

 // }
?>
<?php 
  if(isset($_POST['them'])){
  	$Username=$_POST["Username"];
  	$Email=$_POST["Email"];
  	$Address=$_POST["Address"];
 
   if($Username == ""){echo "vui lòng nhập username <br />";}
   if($Email == ""){echo "vui lòng nhập email <br />";}
   if($Address == ""){echo "vui lòng nhập address <br />";}

   if($Username != "" && $Email != "" && $Address != ""){
	 $sql= "INSERT INTO hocsinh(Username,Email,Address) VALUES('$Username','$Email','$Address')";
      $result=mysqli_query($conn,$sql);
      header("location:index.php");
    }
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h1>Thêm thông tin cá nhân</h1>
      <form class="form-inline"  method="POST" action="">
        <label>Username</label><input type="text" class="form-control" name="Username"/>
        <label>Email</label><input type="text" class="form-control" name="Email"/>
        <label>Address</label><input type="text" class="form-control" name="Address"/><br>
        <input type="submit" name="them" class="btn btn-info"  value="Thêm" />
     </form>
 </div>
 
</body>
</html>
