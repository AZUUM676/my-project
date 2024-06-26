<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product Management</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="styles.css" />
</head>
<style>
body {
  background: url("https://th.bing.com/th?q=Blue+Gray+Solid+Color+Backgrounds&w=120&h=120&c=1&rs=1&qlt=90&cb=1&dpr=1.5&pid=InlineBlock&mkt=en-WW&cc=UG&setlang=en&adlt=moderate&t=1&mw=247") no-repeat center center/cover;
  background-attachment: fixed;
}
</style>

<body>
  <header class="bg-dark text-white py-3">
    <nav class="container navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="product.php">Product Management</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="hm2.php">Home</a>
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
        </ul>
      </div>
      <div class="cart-icon">
        <a class="nav-link text-white" href="#cart">Cart <span class="badge badge-danger cart-count">0</span></a>
      </div>
    </nav>
  </header>

  <section id="home" class="hero-section text-center text-white d-flex justify-content-center align-items-center"
    style="height: 50vh">
    <div>
      <h1>Welcome to Product Management</h1>
      <p>Manage your products efficiently.</p>
    </div>
  </section>

  <section id="products" class="products-section container my-5">
    <h2 class="text-center">Products</h2>
    <div class="row" id="product-grid"></div>
  </section>

  <section id="add-product" class="add-product-section container my-5">
    <h2 class="text-center">Add a New Product</h2>
    <form action="processProduct.php" method="POST" id="product-form">
      <input type="hidden" id="product-id" />
      <div class="form-group">
        <input type="text" name="product_name" class="form-control" placeholder="ProductName" required />
      </div>
      <div class="form-group">
        <input type="text" name="product_description" class="form-control" placeholder="ProductDescription" required />
      </div>
      <div class="form-group">
        <input type="text" name="product_price" class="form-control" placeholder="ProductPrice" required />
      </div>
      <div class="form-group">
        <input type="text" name="product_image" class="form-control-file" required />
        <div class="form-group">
          <label for="size">Size:</label>
          <select class="form-control" name="size">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
          </select>
        </div>
        <div class="form-group">
          <label for="color">Color:</label>
          <select class="form-control" id="color">
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="green">Grey</option>
            <option value="green">yellow</option>
            <option value="green">orange</option>



          </select>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Save Product</button>
    </form>
  </section>

  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Product Management. All rights reserved.</p>
  </footer>

  <!-- JavaScript files -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>