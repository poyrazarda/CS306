<?php
session_start();
include ('dbcon.php');

$sender = "client";

if (isset($_POST['submission']))
{
     $message = $_POST['message_client'];

     $postData = [
        'sender' => $sender,
        'message'=> $message,
        'time' => date('jS F Y h:i:s A'),
     ];

     $ref_table = "messages";
     $postRef_result = $database->getReference($ref_table)->push($postData);

     if($postRef_result)
     {
         $_SESSION['status'] = "Successfully sent!";
         header('Location: insert_as_client.php');

     }
     else
     {
         $_SESSION['status'] = "Unsuccessfull!";
         header('Location: insert_as_client.php');

     }

}


?>