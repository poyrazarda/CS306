<?php
                      include "config.php"; // Makes mysql connection

                      $sql_statement = "SELECT * FROM sellers"; 

                      $result = mysqli_query($db, $sql_statement); // Executing query

                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> ID </li>";
                        echo "<li class='list-group-item' style='width: 200px'> Name </li>";
                        echo "<li class='list-group-item' style='width: 200px'> Budget </li>";
                        echo "<li class='list-group-item' style='width: 250px'> Mail </li>";
                        echo "</ul>";
                        echo "</html>";

                      while($row = mysqli_fetch_assoc($result)) 
                      { // Iterating the result

                         $seller_id = $row['seller_id']; 
                         $seller_name = $row['name']; 
                         $seller_budget = $row['budget']; 
                         $seller_mail = $row['mail'];  
   
                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> $seller_id </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $seller_name </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $seller_budget </li>";
                        echo "<li class='list-group-item' style='width: 250px'> $seller_mail </li>";
                        echo "</ul>";
                        echo "</html>";

                       }
?>