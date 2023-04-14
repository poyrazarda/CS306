<?php
                      include "config.php"; // Makes mysql connection

                      $sql_statement = "SELECT * FROM shipper"; 

                      $result = mysqli_query($db, $sql_statement); // Executing query

                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> ID </li>";
                        echo "<li class='list-group-item' style='width: 200px'> Name </li>";
                        echo "<li class='list-group-item' style='width: 200px'> Mail </li>";
                        echo "</ul>";
                        echo "</html>";

                      while($row = mysqli_fetch_assoc($result)) 
                      { // Iterating the result

                         $shipper_id = $row['shipper_id']; 
                         $shipper_name = $row['firm']; 
                         $shipper_mail = $row['mail'];  
   
                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> $shipper_id </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $shipper_name </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $shipper_mail </li>";
                        echo "</ul>";
                        echo "</html>";

                       }
?>