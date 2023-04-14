
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
            <li><a class="dropdown-item" href="customerpanel.php">Customer Panel</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Support 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="insert_as_client.php">Send a message to admin</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="adminlist.php">See messages coming from admin</a></li>    
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" style="height: 40px">
</div> 
<div class="row">
<div class="container center" style="width: 1400px">
<div class="card">
  <div class="card-body">
    MESSAGES COMING FROM ADMIN
  </div>
</div>
<div class="container" style="height: 40px">
</div>
<?php
                      include "dbcon.php"; // Makes firebase connection

                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 200px'> Sender </li>";
                        echo "<li class='list-group-item' style='width: 800px'> Message </li>";
                        echo "<li class='list-group-item' style='width: 300px'> Time </li>";
                        echo "</ul>";
                        echo "</html>";
                      
                      $ref_table = "messages";
                      $fetchdata = $database->getReference($ref_table)->getValue();

                      if($fetchdata > 0)
                      {
                          foreach($fetchdata as $key => $row)
                          {
                            if($row['sender'] == 'admin')
                            {
                            echo "<html>";
                            echo "<ul class='list-group list-group-horizontal'>";
                            echo "<li class='list-group-item' style='width: 200px'>" . $row['sender'] . "</li>";
                            echo "<li class='list-group-item' style='width: 800px'>" . $row['message'] . "</li>";
                            echo "<li class='list-group-item' style='width: 300px'>" . $row['time'] . "</li>";
                            echo "</ul>";
                            echo "</html>";
                            }
                          }
                      }
                      else
                      {
                        echo "There is no messages.";
                      }

?>

</div>
  </div>