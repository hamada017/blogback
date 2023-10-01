<?php
  $host = 'localhost';
  $user = 'root';
  $pass = 'root';
  $db_name = 'hamblog';

  $conn = new mysqli($host, $user, $pass, $db_name);

  if($conn->connect_error){
    die('Database connection error:' . $conn->connect_error);
  } else{
    echo "database connecté avec succee";
  }

?>