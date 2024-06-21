<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - Shoe Store</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <style>
  body {
    background: url("https://th.bing.com/th?q=Blue+Gray+Solid+Color+Backgrounds&w=120&h=120&c=1&rs=1&qlt=90&cb=1&dpr=1.5&pid=InlineBlock&mkt=en-WW&cc=UG&setlang=en&adlt=moderate&t=1&mw=247") no-repeat center center/cover;
    background-attachment: fixed;
  }
  </style>
</head>

<body>
  <header class="bg-dark text-white text-center py-3">
    <nav class="container navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="contact.php">Contact Us</a>
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
          <li class="nav-item">
            <a class="nav-link" href="display_data.php">displaydata</a>
          </li>
        </ul>
      </div>
      <div class="cart-icon">
        <a class="nav-link text-white" href="#cart">Cart <span class="badge badge-danger cart-count">0</span></a>
      </div>
    </nav>
  </header>

  <section class="container my-5">
    <!-- Contact Information Section -->
    <div class="row mb-5">
      <div class="col-lg-12">
        <h2 class="text-center">Get in Touch</h2>
      </div>
      <div class="col-lg-6">
        <h4>Contact Information</h4>
        <p>Email: info@shoestore.com</p>
        <p>Phone: (123) 456-7890</p>
        <p>Address: 123 Main Street, Cityville, ABC 12345</p>
      </div>
      <div class="col-lg-6">
        <h4>Store Hours</h4>
        <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
        <p>Saturday: 10:00 AM - 4:00 PM</p>
        <p>Sunday: Closed</p>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-lg-12">
        <h2 class="text-center">Send Us a Message</h2>
      </div>
      <div class="col-lg-8 offset-lg-2">
        <form>
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" />
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" />
          </div>
          <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" class="form-control" id="subject" placeholder="Enter the subject" />
          </div>
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

    </div>
  </section>

  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Shoe Store. All rights reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>