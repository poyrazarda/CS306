<?php
                      include "config.php"; // Makes mysql connection

                      $sql_statement = "SELECT * FROM customer"; 

                      $result = mysqli_query($db, $sql_statement); // Executing query

                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> ID </li>";
                        echo "<li class='list-group-item' style='width: 200px'> Name </li>";
                        echo "<li class='list-group-item' style='width: 200px'> Address </li>";
                        echo "<li class='list-group-item' style='width: 250px'> Mail </li>";
                        echo "</ul>";
                        echo "</html>";

                      while($row = mysqli_fetch_assoc($result)) 
                      { // Iterating the result

                         $customer_id = $row['customer_id']; 
                         $customer_name = $row['name']; 
                         $customer_address = $row['address']; 
                         $customer_mail = $row['mail'];  
   
                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> $customer_id </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $customer_name </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $customer_address </li>";
                        echo "<li class='list-group-item' style='width: 250px'> $customer_mail </li>";
                        echo "</ul>";
                        echo "</html>";

                       }
?>