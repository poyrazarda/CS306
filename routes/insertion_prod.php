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
<div class="row">
<div class="container center" style="width: 700px">
<div class="container" style="height: 30px">
</div>
<?php 

include "config.php"; 

if (!empty($_POST['prod_id'])){ 
    $prodid = $_POST['prod_id']; 
    $prodname = $_POST['name']; 
    $prodcat = $_POST['category']; 
    $prodstock = $_POST['stock']; 
    $prodprice = $_POST['price']; 
    $sql_statement = "INSERT INTO products(prod_id, name, category, stock, price) VALUES ($prodid,'$prodname','$prodcat',$prodstock,$prodprice)"; 

    $result = mysqli_query($db, $sql_statement);
    echo "<div class='card' style='width: 650px'>";
      echo "<div class='card-body'>";
      echo $prodname . " with ID: " . $prodid . " is successfully inserted.";
      echo "</div>";
    echo "</div>";
    echo "<div class='container' style='height: 25px'></div>";
    echo "<form action='/ecommerce/adminpanel.php' method='get'>";
    echo "<button type='submit' class='btn btn-success' formaction='/ecommerce/adminpanel.php'>Go to Admin Panel</button>";
    echo "</form>";
    echo "<form action='/ecommerce/insertion_prod.html' method='get'>";
    echo "<button type='submit' class='btn btn-info' formaction='/ecommerce/insertion_prod.html'>Insert Again</button>";
    echo "</form>";
} 
else 
{
    echo "You did not enter product id." . "<br>";
    echo "To go back and give proper values:";
    echo "<form action='/ecommerce/insertion_prod.html method='get'>";
    echo "<button type='submit' class='btn btn-success' formaction='/ecommerce/insertion_prod.html'>Go to Insertion page</button>";
    echo "</form>";
}
?>

<?php
if (!empty($_POST['prod_id']))
{
  echo "<h1>Product list with added one.</h1>";

                      $sql_statement = "SELECT * FROM products"; 

                      $result = mysqli_query($db, $sql_statement); // Executing query

                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 70px'> ID </li>";
                        echo "<li class='list-group-item' style='width: 200px'> Name </li>";
                        echo "<li class='list-group-item' style='width: 200px'> Category </li>";
                        echo "<li class='list-group-item' style='width: 90px'> Stock </li>";
                        echo "<li class='list-group-item' style='width: 90px'> Price </li>";
                        echo "</ul>";
                        echo "</html>";


                      while($row = mysqli_fetch_assoc($result)) 
                      { // Iterating the result

                         $prodid2 = $row['prod_id']; 
                         $prodname2 = $row['name']; 
                         $prodcat2 = $row['category']; 
                         $prodstock2 = $row['stock']; 
                         $prodprice2 = $row['price']; 
                         
                      if($prodid2 == $prodid)
                      {      
                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 70px; background-color: pink;'> $prodid2 </li>";
                        echo "<li class='list-group-item' style='width: 200px; background-color: pink;'> $prodname2 </li>";
                        echo "<li class='list-group-item' style='width: 200px; background-color: pink;'> $prodcat2 </li>";
                        echo "<li class='list-group-item' style='width: 90px; background-color: pink;'> $prodstock2 </li>";
                        echo "<li class='list-group-item' style='width: 90px; background-color: pink;'> $prodprice2 </li>";
                        echo "</ul>";
                        echo "</html>";
                      }
                      else
                      {
                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 70px'> $prodid2 </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $prodname2 </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $prodcat2 </li>";
                        echo "<li class='list-group-item' style='width: 90px'> $prodstock2 </li>";
                        echo "<li class='list-group-item' style='width: 90px'> $prodprice2 </li>";
                        echo "</ul>";
                        echo "</html>";
                      }
                       }
                      }
?>

</div>
</div>
