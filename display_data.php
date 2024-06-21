<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>display</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <?php  require_once("db_connect.php");
  
  ?>
  <script>
  function confirmDelete(varld) {
    if (confirm("Are you sure you want to delete this?")) {
      window.location.href = "process_delete.php?param=" + varld;

    }
  }
  </script>
  <style>
  body {
    background: url('https://th.bing.com/th?q=Blue+Gray+Solid+Color+Backgrounds&w=120&h=120&c=1&rs=1&qlt=90&cb=1&dpr=1.5&pid=InlineBlock&mkt=en-WW&cc=UG&setlang=en&adlt=moderate&t=1&mw=247') no-repeat center center/cover;
    background-attachment: fixed;
  }
  </style>
</head>

<body>

  <header class="bg-dark text-white text-center43 PY-3">
    <nav class="container navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#">Displaydata</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Product.php"> Add Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="display_data.php">Displaydata</a>
          </li>
        </ul>
      </div>
      <div class="cart-icon">
        <a class="nav-link text-white" href="#cart">Cart <span class="badge badge-danger cart-count">0</span></a>
      </div>
    </nav>
  </header>
  <div class="container">
    <div class="row">
      <?php
      
      
      ?>
    </div>
    <div class="row">
      <table class="table">
        <thead class="thead-light">

          <tr>
            <th>ID</th>

            <th>Product_name</th>
            <th>Product_description</th>
            <th>Product_Price</th>
            <th>choose_file</th>
            <th>size</th>

          </tr>
        </thead>
        <tbody>
          <?php
        $sql="SELECT * FROM products";
        $result=mysqli_query($connect, $sql);
        while($row=mysqli_fetch_assoc($result)){

        
        ?>
          <tr>
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['product_name'];?></td>
            <td><?php echo $row['product_discription'];?></td>
            <td><?php echo $row['product_price'];?></td>
            <td><?php echo $row['choose_file'];?></td>
            <td><?php echo $row['size'];?></td>

            <td><a href="update_pr.php?param=<?php echo $row['ID'];?>">Update From</a></td>
            <td>
              <button class="btn btn-danger" onclick="confirmDelete(<?php echo $row['ID'];?>)">Delete</button>
            </td>



          </tr>
        </tbody>
        <?php } ?>
      </table>
    </div>
  </div>
  </div>
</body>
</head>

</html>