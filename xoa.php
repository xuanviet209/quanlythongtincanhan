<?php 
   require "condb.php";
?>

<?php
     if(isset($_GET["id"])){
     	 $id=$_GET["id"];
     }
?>

<?php
   $sql= "DELETE FROM hocsinh WHERE id = $id";
   $result=mysqli_query($conn,$sql);
   header("location: index.php");
?>