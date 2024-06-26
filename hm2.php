<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shoe Store</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: "Roboto", sans-serif;
    line-height: 1.6;
    color: #333;
    background: url('https://th.bing.com/th?q=Blue+Gray+Solid+Color+Backgrounds&w=120&h=120&c=1&rs=1&qlt=90&cb=1&dpr=1.5&pid=InlineBlock&mkt=en-WW&cc=UG&setlang=en&adlt=moderate&t=1&mw=247') no-repeat center center/cover;
    background-attachment: fixed;
  }

  header {
    background: #333;
    color: #fff;
    padding: 1rem 0;
  }

  nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
  }

  .logo {
    font-size: 1.5rem;
    font-weight: 700;
  }

  .nav-links {
    list-style: none;
    display: flex;
  }

  .nav-links li {
    margin-right: 1rem;
  }

  .nav-links a {
    color: #fff;
    text-decoration: none;
  }

  .cart-icon {
    position: center;
  }

  .cart-icon a {
    color: #fff;
    text-decoration: none;
    font-size: 1.2rem;
  }

  .cart-count {
    background: #e74c3c;
    color: #fff;
    border-radius: 50%;
    padding: 10px 0.6rem;
    font-size: 0.8rem;
    position: absolute;
    top: 10px;
    right: 10px;
  }

  .menu-icon {
    display: none;
    font-size: 2rem;
    cursor: pointer;
  }

  .hero-section {
    background: url("hero-bg.jpg") no-repeat center center/cover;
    color: #fff;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  .hero-content h1 {
    font-size: 3rem;
  }

  .hero-content p {
    margin: 1rem 0;
  }

  .btn {
    background: #e74c3c;
    color: #fff;
    padding: 0.75rem 1.5rem;
    text-decoration: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .btn:hover {
    background: #c0392b;
  }

  .cart-section {
    padding: 2rem;
    text-align: center;
    color: #ddd;
  }

  .product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1rem;
    padding: 1rem;
  }

  .product-card {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
    text-align: center;
    padding: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .product-card img {
    max-width: 100%;
    height: auto;
    display: block;
  }

  footer {
    background: #333;
    color: #fff;
    text-align: center;
    padding: 1rem 0;
  }

  @media (max-width: 768px) {
    .nav-links {
      flex-direction: column;
      display: none;
    }

    .nav-links.active {
      display: flex;
    }

    .menu-icon {
      display: block;
    }
  }
  </style>
</head>

<body>
  <header>
    `
    <nav>
      <div class="logo">
        <img src="images/Re.png" alt="cone" width="85" height="75">
        Cone shoeStore
      </div>
      <ul class="nav-links">
        <li><a href="hm2.php">Home</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="Product.php"> Add Products</a></li>
        <li><a href="contact.php">Contact</a></li>

        <li><a href="display_data.php">displaydata</a></li>
      </ul>
      <div class="cart-icon">
        <a href="#cart">Cart <span class="cart-count">0</span></a>
      </div>
      <div class="menu-icon">&#9776;</div>
    </nav>
  </header>

  <section id="home" class="hero-section">
    <div class="hero-content">
      <h1>Welcome to ConeShoeStore</h1>
      <p>Your one-stop shop for the best shoes in town.</p>
      <a href="#products" class="btn">Shop Now</a>
    </div>
  </section>

  <section id="products" class="products-section">
    <h2>Our Featured Products</h2>
    <div class="product-grid">
      <div class="product-card">
        <img src="https://th.bing.com/th/id/OIP.78nYHr1T7Yv-AxU2LWiH7QHaHa?w=186&h=186&c=7&r=0&o=5&dpr=1.5&pid=1.7"
          alt="Shoe 1" />
        <h3>Running Shoes</h3>
        <p>Perfect for your daily run or the gym.</p>
        <a href="Product.php" class="btn">Add to Cart</a>
      </div>
      <div class="product-card">
        <img src="images/Re.png" alt="Shoe 2" />
        <h3>Formal Shoes</h3>
        <p>Elegance and comfort for any formal occasion.</p>
        <a href="Product.php" class="btn">Add to Cart</a>
      </div>
      <div class="product-card">
        <img src="https://th.bing.com/th/id/OIP.NKCPoP9hxmlbUbGgpO0_nQHaIK?w=178&h=195&c=7&r=0&o=5&dpr=1.5&pid=1.7"
          alt="Shoe 3" />
        <h3>Heel Shoes</h3>
        <p>Stylish and comfortable for everyday wear.</p>
        <a href="Product.php" class="btn">Add to Cart</a>
      </div>
      <div class="product-card">
        <img src="https://th.bing.com/th/id/OIP.4BE85wp_Vw2bOVX5z3PsKAHaHa?w=195&h=196&c=7&r=0&o=5&dpr=1.5&pid=1.7"
          alt="shoes4" />
        <h3>Classy heel</h3>
        <p>Stylish sexy open heel .</p>
        <a href="Product.php" class="btn">Add to Cart</a>
      </div>
      <div class="product-card">
        <img src="https://th.bing.com/th/id/OIP.P002dynaWZMy8Ak-p4aiBgHaHa?w=159&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7"
          alt="shoes4" />
        <h3>New Balance W587</h3>
        <p>Motion Control Accepted APMA

          Women's Running Shoes .</p>
        <a href="Product.php" class="btn">Add to Cart</a>
      </div>
      <div class="product-card">
        <img src="https://th.bing.com/th/id/OIP.owgta6Z8p5EA1GKcinmCdQHaEc?w=237&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7"
          alt="shoes4" />
        <h3>Sport shoes</h3>
        <p>

          Footbal Shoes .</p>
        <a href="Product.php" class="btn">Add to Cart</a>
      </div>
    </div>
  </section>
  <section id="home" class="container">
    <div class="row mt-5">
      <div class="col-lg-8">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
              <img
                src="https://th.bing.com/th/id/OIP.1FCSQVl1N0P3N-etVzhNNQHaEK?w=306&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7"
                class="d-block w-100" alt="Slide 1">
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
              <img
                src="https://th.bing.com/th/id/OIP.eEIKCPXvWPuBfEsL_ZT2iwHaE8?w=237&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7"
                class="d-block w-100" alt="Slide 2">
            </div>

          </div>
          <!-- Carousel Controls -->
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!-- Promotional Banners Section -->
      <div class="col-lg-4">
        <div class="card">
          <img src="https://th.bing.com/th/id/OIP.eEIKCPXvWPuBfEsL_ZT2iwHaE8?w=237&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7"
            class="card-img-top" alt="Banner 1">
          <div class="card-body">
            <h5 class="card-title">Special Offer</h5>
            <p class="card-text">Hurry, limited time offer! Get exclusive deals now!.</p>
            <a href="#" class="btn btn-primary">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Product Categories Section -->
    <div class="row mt-5">
      <div class="col-lg-12">
        <h2 class="text-center">Product Categories</h2>
      </div>
      <div class="col-lg-4">
        <a href="#" class="card">
          <img
            src="data:image/jpeg;base64,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"
            class="card-img-top" alt="Category 1">
          <div class="card-body">
            <h5 class="card-title">crystal open heel</h5>
          </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="#" class="card">
          <img src="https://th.bing.com/th?id=OIF.46SJLIy54Zz7Yo6fv%2bjr4Q&w=140&h=210&c=7&r=0&o=5&dpr=1.5&pid=1.7"
            class="card-img-top" alt="Category 2">
          <div class="card-body">
            <h5 class="card-title">Heels</h5>
          </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="#" class="card">
          <div class="card-body">
            <img src="https://th.bing.com/th/id/OIP.FOzGWYGqnQgLFJPHAJof3QHaHY?w=205&h=204&c=7&r=0&o=5&dpr=1.5&pid=1.7"
              class="card-img-top" alt="Category 2">

            <h5 class="card-title">Elegant shoe</h5>
          </div>
        </a>
      </div>
    </div>

    </div>
    </div>
    < </div>
      <div class="row mt-5">
        <div class="col-lg-12">
          <h2 class="text-center">Subscribe to Our Newsletter</h2>
          <form>
            <div class="form-group">
              <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp"
                placeholder="Enter your email">
            </div>
            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-12">
          <h2 class="text-center">Connect with Us</h2>
        </div>
        <div class="col-lg-4 offset-lg-4">
          <ul class="list-inline text-center">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-12">
          <h2 class="text-center">Contact Us</h2>
        </div>
        <div class="col-lg-6 offset-lg-3">
          <p class="text-center">123 Main Street, Kampala city, ABC 12345</p>
          <p class="text-center">Phone: (256) 779333304</p>



          <footer>
            <p>&copy; 2024 ShoeStore. All rights reserved.</p>
          </footer>

          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>