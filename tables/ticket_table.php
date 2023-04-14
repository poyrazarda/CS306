<?php
                      include "config.php"; // Makes mysql connection

                      $sql_statement = "SELECT * FROM support"; 

                      $result = mysqli_query($db, $sql_statement); // Executing query

                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> ID </li>";
                        echo "<li class='list-group-item' style='width: 140px'> Category </li>";                       
                        echo "</ul>";
                        echo "</html>";

                      while($row = mysqli_fetch_assoc($result)) 
                      { // Iterating the result

                         $ticket_id = $row['ticket_id']; 
                         $ticket_cat = $row['category']; 
                          
   
                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> $ticket_id </li>";
                        echo "<li class='list-group-item' style='width: 140px'> $ticket_cat </li>";
                        echo "</ul>";
                        echo "</html>";

                       }
?>