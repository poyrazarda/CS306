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
<div class="container center" style="width: 550px">
<div class="container" style="height: 30px">
</div>   

<?php

include "config.php";

if(!empty($_POST['ids']))
{
    $paymentid = $_POST['ids'];
    $sql_statement = "DELETE FROM make_payment WHERE payment_id = $paymentid";
    $result = mysqli_query($db, $sql_statement);
   
    echo "<div class='card' style='width: 520px'>";
    echo "<div class='card-body'>";
    echo "Payment with ID: ". $paymentid . " is successfully deleted.";
    echo "</div>";
    echo "</div>";
    echo "<div class='container' style='height: 25px'></div>";
    echo "<form action='/ecommerce/adminpanel.php' method='get'>";
    echo "<button type='submit' class='btn btn-success' formaction='/ecommerce/adminpanel.php'>Go to Admin Panel</button>";
    echo "</form>";
    echo "<form action='/ecommerce/deletion_make_select.php' method='get'>";
    echo "<button type='submit' class='btn btn-warning' formaction='/ecommerce/deletion_make_select.php'>Delete Again</button>";
    echo "</form>";
}

?>

<h1>Payment list without deleted one.</h1>
<?php
                      include "config.php"; // Makes mysql connection

                      $sql_statement = "SELECT * FROM make_payment"; 

                      $result = mysqli_query($db, $sql_statement); // Executing query

                      echo "<html>";
                      echo "<ul class='list-group list-group-horizontal'>";
                      echo "<li class='list-group-item' style='width: 120px'> Payment ID </li>";
                      echo "<li class='list-group-item' style='width: 200px'> Payment Type </li>";
                      echo "<li class='list-group-item' style='width: 200px'> Customer ID </li>";
                      echo "<li class='list-group-item' style='width: 200px'> Amount </li>";
                      echo "</ul>";
                      echo "</html>";

                      while($row = mysqli_fetch_assoc($result)) 
                      { // Iterating the result

                        $payment_id2= $row['payment_id']; 
                        $payment_type2 = $row['payment_type']; 
                        $customer_id2 = $row['customer_id']; 
                        $amount2 = $row['amount']; 

                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> $payment_id2 </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $payment_type2 </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $customer_id2 </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $amount2 </li>";
                        echo "</ul>";
                        echo "</html>";

                       }
?>
</div>
</div>