 
<?php
                      include "config.php"; // Makes mysql connection

                      $sql_statement = "SELECT * FROM ticket_cus"; 

                      $result = mysqli_query($db, $sql_statement); // Executing query

                        echo "<html>";
                        echo "<ul class='list-group list-group-horizontal'>";
                        echo "<li class='list-group-item' style='width: 120px'> Support ID </li>";
                        echo "<li class='list-group-item' style='width: 120px'> Customer ID </li>";
                        echo "<li class='list-group-item' style='width: 120px'> Ticket ID </li>";
                        echo "<li class='list-group-item' style='width: 700px'> Message </li>";
                        echo "</ul>";
                        echo "</html>";


                      while($row = mysqli_fetch_assoc($result)) 
                      { // Iterating the result

                         $supportid = $row['sup_id']; 
                         $customerid = $row['customer_id']; 
                         $ticketid = $row['ticket_id']; 
                         $message = $row['message']; 
                         
   
                         echo "<html>";
                         echo "<ul class='list-group list-group-horizontal'>";
                         echo "<li class='list-group-item' style='width: 120px'> $supportid </li>";
                         echo "<li class='list-group-item' style='width: 120px'> $customerid </li>";
                         echo "<li class='list-group-item' style='width: 120px'> $ticketid </li>";
                         echo "<li class='list-group-item' style='width: 700px'> $message </li>";
                         echo "</ul>";
                         echo "</html>";

                       }
?>