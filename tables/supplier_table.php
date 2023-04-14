<?php
                      include "config.php"; // Makes mysql connection

                      $sql_statement = "SELECT * FROM supplier"; 

                      $result = mysqli_query($db, $sql_statement); // Executing query

                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> ID </li>";
                        echo "<li class='list-group-item' style='width: 200px'> Name </li>";
                        echo "<li class='list-group-item' style='width: 230px'> Mail </li>";
                        echo "</ul>";
                        echo "</html>";

                      while($row = mysqli_fetch_assoc($result)) 
                      { // Iterating the result

                         $supplier_id = $row['supp_id']; 
                         $supplier_name = $row['firm']; 
                         $supplier_mail = $row['mail'];  
   
                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> $supplier_id </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $supplier_name </li>";
                        echo "<li class='list-group-item' style='width: 230px'> $supplier_mail </li>";
                        echo "</ul>";
                        echo "</html>";

                       }
?>