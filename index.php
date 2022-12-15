<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">The Cofee Shop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#Home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#createorder">Create Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<Section id="Home">
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      
    </div>
  
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/cofee1.webp" alt="cofee" class="d-block w-100">
      </div>

      <div class="carousel-item">
        <img src="images/cofee2.webp" alt="cofee" class="d-block w-100">
      </div>
    </div>
  </Section>
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <section id="createorder">
    <h1 class="formh">Create Your Order</h1>
    <form action="insert.php" method="post">
        <div class="mb-3 mt-3">
          <label for="text" class="form-label">Customer Name</label>
          <input type="text" class="form-control"  placeholder="Enter Your Name" name="cname">
        </div>
        <div class="mb-3 mt-3">
            <label for="text" class="form-label">Address</label>
            <input type="text" class="form-control"  placeholder="Enter Your Address" name="address">
          </div>
          <div class="mb-3 mt-3">
            <label for="text" class="form-label">Contact No</label>
            <input type="text" class="form-control"  placeholder="Enter Your Contact No" name="contactno">
          </div>
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Order Product</label>
          <select class="form-select" name="product">
            <option>Select Product</option>
            <option>capatino</option>
            <option>Dark Cofee</option>
            <option>Ice Cofee</option>
           
          </select>
          </div>
          <div class="mb-3 mt-3">
            <label >Product Quantity</label>
          <select class="form-select" name="quantity">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
           
          </select>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
     <br>
     <br>
      </form>
  </section>

  <section id="contact" class="contact">
    <h1 class="contacth">Contact Us</h1>
<br>
<br>
<br>
    <dl>
      <dt>Open Hours</dt>
      <dd>8.00Am To 8.00 Pm</dd>
      <dt>Location</dt>
      <dd>Avissawella Road Hanwella</dd>
      <dt>Contact No</dt>

      <dd>0112121212</dd>
    </dl>
    <br>
    <br>
  </section>
  <footer>
<br>
<br>
    <h1 class="footerh">&copy Design By Isahani</h1>
  </footer>
</body>
</html>