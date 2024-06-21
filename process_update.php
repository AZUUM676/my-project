<?php
require_once("db_connect.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $query = "UPDATE products SET product_name =?, product_discription =?, product_price=?, choose_file=?
  size=? WHERE ID=?";
  $stmt= mysqli_prepare($connect, $query);
  $id=$_POST['id'];
  $pn=$_POST['Product_name'];
  $pd=$_POST['product_description'];
  $pp=$_POST['product_price'];
  $pi=$_POST['product_image'];
$s=$_POST['size'];

  mysqli_stmt_bind_param($stmt, "sssss", $pn, $pd,$pp,$pi,$s);
  mysqli_stmt_execute($stmt);
  echo "data updated successfully";
  exit();

  

}

?>