<?php
   require "condb.php";
   $sql="SELECT * FROM hocsinh";
   $result=mysqli_query($conn,$sql);
   if(!$result){
     die('Lỗi'.mysql_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Quản lý thông tin cá nhân</title>
</head>
<body>
<div class="container">
  <h1 align="center">Quản lý thông tin cá nhân</h1>
	<table class="table">
        <tr>
        	<th>Username</th>
        	<th>Email</th>
        	<th>Address</th>
        	<th><a href="them.php" class="btn btn-info">Thêm</th>
        </tr>
        
        <?php
          while($row=mysqli_fetch_array($result)){  //mysqli_fetch_assoc đều đc
        ?>
         <tr>
            <td ><?php echo $row["Username"]; ?></td>
            <td><?php echo $row["Email"]; ?></td>
            <td><?php echo $row["Address"]; ?></td>
            <td>
              <a class="btn btn-success" href="sua.php?id=<?php echo $row["id"]; ?>">Sửa</a> 
              <a class=" btn btn-danger" href="xoa.php?id=<?php echo $row["id"]; ?>">Xóa</a>
            </td>
        </tr>
      <?php } ?>
	</table>
</div>
</body>
</html>