<?php
                      include "config.php"; // Makes mysql connection

                      $sql_statement = "SELECT * FROM storage"; 

                      $result = mysqli_query($db, $sql_statement); // Executing query

                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> ID </li>";
                        echo "<li class='list-group-item' style='width: 200px'> Location </li>";
                        echo "<li class='list-group-item' style='width: 200px'> Capacity </li>";
                        echo "</ul>";
                        echo "</html>";

                      while($row = mysqli_fetch_assoc($result)) 
                      { // Iterating the result

                         $storage_id = $row['storage_id']; 
                         $storage_location = $row['location']; 
                         $storage_capacity = $row['capacity'];  
   
                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> $storage_id </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $storage_location </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $storage_capacity </li>";
                        echo "</ul>";
                        echo "</html>";

                       }
?>