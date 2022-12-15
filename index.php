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
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Create Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


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
        <img src="images/cofee1.webp" alt="Los Angeles" class="d-block w-100">
      </div>

      <div class="carousel-item">
        <img src="images/cofee2.webp" alt="New York" class="d-block w-100">
      </div>
    </div>
  
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <section id="createorder">
    <h1>Create Your Order</h1>
    <form action="insert.php" method="post">
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">Customer Name</label>
          <input type="email" class="form-control" id="email" placeholder="Enter Your Name" name="cname">
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Your Address" name="address">
          </div>
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Contact No</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Your Contact No" name="cno">
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
            <label for="email" class="form-label">Product Quantity</label>
          <select class="form-select" name="product">
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
      </form>
  </section>
</body>
</html>