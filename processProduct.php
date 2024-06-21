<?php
require_once("db_connect.php");
$query="INSERT INTO products(product_name,product_discription,product_price,choose_file,size) VALUES(?,?,?,?,?)";
$stmt= mysqli_prepare($connect, $query);
if($stmt){
  echo "prepared statement failed".mysqli_error($connect);

}
$pn=$_POST['product_name'];
$pd=$_POST['product_description'];
$pp=$_POST['product_price'];
$pi=$_POST['product_image'];
$s=$_POST['size'];
mysqli_stmt_bind_param($stmt,"sssss", $pn, $pd,$pp,$pi,$s);
if(mysqli_stmt_execute($stmt)){

  echo"data inserted successfully";
}
else{
  echo"you have an error";
}

?>