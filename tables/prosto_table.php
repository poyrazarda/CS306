<?php
                      include "config.php"; // Makes mysql connection

                      $sql_statement = "SELECT * FROM pro_sto"; 

                      $result = mysqli_query($db, $sql_statement); // Executing query

                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> Product ID </li>";
                        echo "<li class='list-group-item' style='width: 250px'> Storage ID </li>";                       
                        echo "</ul>";
                        echo "</html>";

                      while($row = mysqli_fetch_assoc($result)) 
                      { // Iterating the result

                         $p_id = $row['product_id']; 
                         $s_id = $row['storage_id']; 
                          
   
                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> $p_id </li>";
                        echo "<li class='list-group-item' style='width: 250px'> $s_id </li>";
                        echo "</ul>";
                        echo "</html>";

                       }
?>