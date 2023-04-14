<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">E-Commerce Website</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Main Page</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Panels
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./adminpanel.php">Admin Panel</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Customer Panel</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" style="height: 10px"></div>
<div class="container" style="height: 80px">
   <div>
      <h2 style="text-align: center">
        Insert new Product
      </h2>
      <hr class="border border-primary border2 opacity-75" style="border-color:blueviolet; background-color: red">
   </div>
</div>

<?php
if(isset($_SESSION['status']))
{
    echo "Success!";
}
?>
<div class="row">
    <div class="container center" style="width: 400px">
        <form action="./insert_add.php" method="POST">
            <div class="mb-3">
              <label for="productId" class="form-label">Product ID</label>
              <input type="text" class="form-control" id="prod_id" name = "prod_id" aria-describedby="idHelp">
              <div id="idHelp" class="form-text">Give the ID of the product.</div>
            </div>
            <div class="mb-3">
              <label for="productName" class="form-label">Product Name</label>
              <input type="text" class="form-control" id="name" name="name">
              <div id="idHelp" class="form-text">Give the name of the product.</div>
            </div>
            <div class="mb-3">
                <label for="productCategory" class="form-label">Product Category</label>
                <input type="text" class="form-control" id="category" name="category">
                <div id="idHelp" class="form-text">Give the product's category.</div>
              </div>
              <div class="mb-3">
                <label for="productStock" class="form-label">Product Stock</label>
                <input type="text" class="form-control" id="stock" name="stock">
                <div id="idHelp" class="form-text">Give stock of the product.</div>
              </div>
              <div class="mb-3">
                <label for="productPrice" class="form-label">Product Price</label>
                <input type="text" class="form-control" id="price" name="price">
                <div id="idHelp" class="form-text">Give the price of the product</div>
              </div>
            <button type="submit" name="submission" value="Submit" class="btn btn-primary">Insert</button>
          </form>      
    </div>
</div>

