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

<div class="container center" style="width: 1200px">
<div class="container" style="height: 30px">



<?php 

include "config.php"; // Makes mysql connection

$supid2 = $_POST['sup_id2']; 


echo "<h3>Messages with ID: " . $supid2 ."</h3>";
echo "<div class='container center' style='height: 20px'>";
    echo "</div>  ";

$sql_statement = "SELECT * FROM ticket_cus"; 

$result = mysqli_query($db, $sql_statement); // Executing query
                       
echo "<html>";
echo "<ul class='list-group list-group-horizontal'>";
echo "<li class='list-group-item' style='width: 120px; background-color: pink;'> Support ID </li>";
echo "<li class='list-group-item' style='width: 120px'> Customer ID </li>";
echo "<li class='list-group-item' style='width: 120px'> Ticket ID </li>";
echo "<li class='list-group-item' style='width: 700px'> Message </li>";
echo "</ul>";
echo "</html>";

while($row = mysqli_fetch_assoc($result)) 
                      { // Iterating the result

                        $supportid = $row['sup_id']; 
                        $customerid = $row['customer_id']; 
                        $ticketid = $row['ticket_id']; 
                        $message = $row['message']; 
                        
                          

if($supid2 == $supportid) 
{
    
    echo "<html>";
    echo "<ul class='list-group list-group-horizontal'>";
    echo "<li class='list-group-item' style='width: 120px; background-color: pink;'> $supportid </li>";
    echo "<li class='list-group-item' style='width: 120px'> $customerid </li>";
    echo "<li class='list-group-item' style='width: 120px'> $ticketid </li>";
    echo "<li class='list-group-item' style='width: 700px'> $message </li>";
    echo "</ul>";
    echo "</html>";

}
} 
echo "<div class='container' style='height: 25px;'>";
    echo "</div>";
    echo "<form action='/ecommerce/adminpanel.php' method='get'>";
    echo "<button type='submit' class='btn btn-success' formaction='/ecommerce/adminpanel.php'>Go to Admin Panel</button>";
    echo "</form>";
    echo "<form action='/ecommerce/filter_tc_choice.html' method='get'>";
    echo "<button type='submit' class='btn btn-dark' formaction='/ecommerce/filter_tc_choice.html'>Filter again</button>";
    echo "</form>";

?>

</div>
</div>