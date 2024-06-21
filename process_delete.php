<?php

require_once("db_connect.php");

$query ="DELETE FROM products WHERE ID =?";
$stmt= mysqli_prepare($connect, $query);
$id= $_GET['param'];

mysqli_stmt_bind_param($stmt,"i",$id );
mysqli_stmt_execute($stmt);
// waxey kuusurto galine iney kugu so celiso marka delete gareeso kadib
header("Location: display_data.php?message=Item%20deleted%20successfully");


?>