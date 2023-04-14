<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
  ->withServiceAccount('cs306-11791-firebase-adminsdk-4rjp7-f2af3afa14.json')
  ->withDatabaseUri('https://cs306-11791-default-rtdb.europe-west1.firebasedatabase.app/');

$database = $factory->createDatabase();



?>