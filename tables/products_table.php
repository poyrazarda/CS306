 
<?php
                      include "config.php"; // Makes mysql connection

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

                         $prodid = $row['prod_id']; 
                         $prodname = $row['name']; 
                         $prodcat = $row['category']; 
                         $prodstock = $row['stock']; 
                         $prodprice = $row['price']; 
   
                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 70px'> $prodid </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $prodname </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $prodcat </li>";
                        echo "<li class='list-group-item' style='width: 90px'> $prodstock </li>";
                        echo "<li class='list-group-item' style='width: 90px'> $prodprice </li>";
                        echo "</ul>";
                        echo "</html>";

                       }
?>