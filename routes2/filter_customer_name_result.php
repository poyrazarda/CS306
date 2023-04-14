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

<div class="container center" style="width: 650px">
<div class="container" style="height: 30px">



<?php 

include "config.php"; // Makes mysql connection

$customername2 = $_POST['customer_name2']; 


echo "<h3>Customers with name: " . $customername2 ."</h3>";
echo "<div class='container center' style='height: 20px'>";
    echo "</div>  ";

$sql_statement = "SELECT * FROM customer"; 

$result = mysqli_query($db, $sql_statement); // Executing query

echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> ID </li>";
                        echo "<li class='list-group-item' style='width: 200px; background-color: pink;'> Name </li>";
                        echo "<li class='list-group-item' style='width: 200px'> Address </li>";
                        echo "<li class='list-group-item' style='width: 250px'> Mail </li>";
                        echo "</ul>";
                        echo "</html>";


while($row = mysqli_fetch_assoc($result)) 
                      { // Iterating the result

                        $customer_id = $row['customer_id']; 
                        $customer_name = $row['name']; 
                        $customer_address = $row['address']; 
                        $customer_mail = $row['mail'];   

if($customername2 == $customer_name) 
{
    
  echo "<html>";
  echo "<ul class='list-group list-group-horizontal'>";
  echo "<li class='list-group-item' style='width: 120px'> $customer_id </li>";
  echo "<li class='list-group-item' style='width: 200px; background-color: pink;'> $customer_name </li>";
  echo "<li class='list-group-item' style='width: 200px'> $customer_address </li>";
  echo "<li class='list-group-item' style='width: 250px'> $customer_mail </li>";
  echo "</ul>";
  echo "</html>";
}
} 
echo "<div class='container' style='height: 25px;'>";
    echo "</div>";
    echo "<form action='/ecommerce/adminpanel.php' method='get'>";
    echo "<button type='submit' class='btn btn-success' formaction='/ecommerce/adminpanel.php'>Go to Admin Panel</button>";
    echo "</form>";
    echo "<form action='/ecommerce/filter_customer_choice.html' method='get'>";
    echo "<button type='submit' class='btn btn-dark' formaction='/ecommerce/filter_customer_choice.html'>Filter again</button>";
    echo "</form>";

?>

</div>
</div>
