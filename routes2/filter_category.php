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
<div class="container center" style="width: 600px">
<div class="container" style="height: 30px">
</div>  

<?php 

include "config.php";

?>

<h2> Select category from below. </h2>

<form action="filter_categoryresult.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT category FROM products";
$myarray = array();
$myresult = mysqli_query($db, $sql_command);
$arraysize = count($myarray);
$count = 0;

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $prodcat = $id_rows['category'];
        if($arraysize == 0)
        {
        array_push($myarray, $prodcat);
        $arraysize = count($myarray);
        }
        else
        {
            for ($x = 0; $x < $arraysize; $x++)
            {
                if($myarray[$x] == $prodcat)
                {
                    $count = $count + 1;
                }
            }
        }
        if($count == 0)
        {
        echo "$prodcat is adding when count: $count" . "<br>";
        array_push($myarray, $prodcat);
        $arraysize = count($myarray);
        echo "$arraysize" . "<br>";
        }
        else
        {
            echo "Count is bigger than 0" . "<br>";
        }
        $count = 0;
    }
    $secondarray = array();
    
    for ($y = 1; $y < $arraysize; $y++)
     {
           if(($myarray[$y] != $myarray[$y-1]) || ($y == 1))
           {
              echo $myarray[$y] . "<br>";
              $secondarray[] = $myarray[$y];
           }
     }
    
          print_r($myarray);
      $arraysize2 = count($secondarray);
          for ($z = 0; $z < $arraysize2; $z++)
          {
            $a = $secondarray[$z];
            echo "<option value=$a>". $a . "</option>";
          }
    

    

?>

</select>
<button>SELECT</button>
</form>

</div>
  </div>
