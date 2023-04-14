<?php
                      include "config.php"; // Makes mysql connection

                      $sql_statement = "SELECT * FROM product_order"; 

                      $result = mysqli_query($db, $sql_statement); // Executing query

                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 150px'> Order ID </li>";
                        echo "<li class='list-group-item' style='width: 150px'> Customer ID </li>";
                        echo "<li class='list-group-item' style='width: 150px'> Product ID </li>";
                        echo "<li class='list-group-item' style='width: 150px'> Seller ID </li>";
                        echo "</ul>";
                        echo "</html>";

                      while($row = mysqli_fetch_assoc($result)) 
                      { // Iterating the result

                         $order_id = $row['order_id']; 
                         $customer_id = $row['customer_id']; 
                         $product_id = $row['product_id']; 
                         $seller_id = $row['seller_id'];  
   
                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 150px'> $order_id </li>";
                        echo "<li class='list-group-item' style='width: 150px'> $customer_id </li>";
                        echo "<li class='list-group-item' style='width: 150px'> $product_id </li>";
                        echo "<li class='list-group-item' style='width: 150px'> $seller_id </li>";
                        echo "</ul>";
                        echo "</html>";

                       }
?>