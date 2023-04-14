<?php
                      include "config.php"; // Makes mysql connection

                      $sql_statement = "SELECT * FROM payment"; 

                      $result = mysqli_query($db, $sql_statement); // Executing query

                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> ID </li>";
                        echo "<li class='list-group-item' style='width: 250px'> Type </li>";                       
                        echo "</ul>";
                        echo "</html>";

                      while($row = mysqli_fetch_assoc($result)) 
                      { // Iterating the result

                         $payment_id = $row['payment_id']; 
                         $payment_type = $row['type']; 
                          
   
                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> $payment_id </li>";
                        echo "<li class='list-group-item' style='width: 250px'> $payment_type </li>";
                        echo "</ul>";
                        echo "</html>";

                       }
?>