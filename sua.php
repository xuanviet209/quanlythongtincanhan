<?php 
   require "condb.php";
?>

 <?php
     if(isset($_GET["id"])){
     	 $id=$_GET["id"];
     }
  ?>
<?php 
  if(isset($_POST['sua'])){
  	$Username=$_POST["Username"];
  	$Email=$_POST["Email"];
  	$Address=$_POST["Address"];
 
   if($Username == ""){echo "vui lòng nhập username <br />";}
   if($Email == ""){echo "vui lòng nhập email <br />";}
   if($Address == ""){echo "vui lòng nhập address <br />";}

   if($Username != "" && $Email != "" && $Address != ""){
	 $sql= "UPDATE hocsinh SET Username = '$Username', Email = '$Email', Address = '$Address' WHERE id = '$id'";
      $result=mysqli_query($conn,$sql);
      header("location:index.php");
    }
  }
  
?>
  <?php
      $sql= "SELECT * FROM hocsinh WHERE id = '$id'";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_array($result);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sửa</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h1>Sửa thông tin cá nhân</h1>
  <form class="form-inline" method="POST" action="">
    <label>Username</label><input type="text" class="form-control" name="Username" value="<?php echo $row["Username"]; ?>" />
    <label>Email</label><input type="text" class="form-control" name="Email" value="<?php echo $row["Email"]; ?>" />
    <label>Address</label><input type="text" class="form-control" name="Address" value="<?php echo $row["Address"]; ?>" /><br>
    <input type="submit" class="btn btn-success" name="sua" value="Sửa" />
  </form>
</div> 
</body>
</html>
