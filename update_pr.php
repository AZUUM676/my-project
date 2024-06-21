<?php
require_once("db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>product</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>

<body>
  <form action=" process_update.php" method="POST">
    <div class="container">
      <label style="color: rgb(112, 34, 214); font-size: larger; margin-left: 25px; b">
      </label>
      <br />
      <br />
      <div>
        <?php
        $user_id=$_GET['param'];
        $query="SELECT * FROM products WHERE ID = ?";
        $stmt=mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($stmt, "i", $user_id);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        $row=mysqli_fetch_assoc($result);

        ?>
        <input type="hidden" name="id" value="<?php echo $row['ID']?>">

        <div class="form-group">
          <input type="text" name="product_name" class="form-control" placeholder="ProductName"
            value="<?php echo $row['product_name'];?>">
        </div>
        <div class="form-group">
          <input type="text" name="product_description" class="form-control" placeholder="Productdescription"
            value="<?php echo $row['product_discription'];?>" required />
          >
          <div class="form-group">
            <input type="text" name="product_price" class="form-control" placeholder="productprice"
              value="<?php echo $row['product_price'];?>">
          </div>
          <div class="form-group">
            <input type="text" name="product_image" class="form-control-file" value="<?php echo $row['choose_file'];?>">
            <div class="form-group">
              <label for="size">Size:</label>
              <select class="form-control" name="size">
  </form>
</body>

</html>