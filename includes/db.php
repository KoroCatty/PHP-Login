<?php 

// 1. localhost 2. username 3. password 4. database name
$connection = new mysqli('localhost', 'root', 'root', 'login');

if ($connection->connect_error) {
  die('Could not connect: ' . $connection->connect_error);
} else {
  echo 'Connected successfully';
}


?>