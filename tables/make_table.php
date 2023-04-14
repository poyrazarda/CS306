<?php
                      include "config.php"; // Makes mysql connection

                      $sql_statement = "SELECT * FROM make_payment"; 

                      $result = mysqli_query($db, $sql_statement); // Executing query

                      echo "<html>";
                      echo "<ul class='list-group list-group-horizontal'>";
                      echo "<li class='list-group-item' style='width: 120px'> Payment ID </li>";
                      echo "<li class='list-group-item' style='width: 200px'> Payment Type </li>";
                      echo "<li class='list-group-item' style='width: 200px'> Customer ID </li>";
                      echo "<li class='list-group-item' style='width: 200px'> Amount </li>";
                      echo "</ul>";
                      echo "</html>";

                      while($row = mysqli_fetch_assoc($result)) 
                      { // Iterating the result

                        $payment_id2= $row['payment_id']; 
                        $payment_type2 = $row['payment_type']; 
                        $customer_id2 = $row['customer_id']; 
                        $amount2 = $row['amount']; 

                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> $payment_id2 </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $payment_type2 </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $customer_id2 </li>";
                        echo "<li class='list-group-item' style='width: 200px'> $amount2 </li>";
                        echo "</ul>";
                        echo "</html>";

                       }
?>