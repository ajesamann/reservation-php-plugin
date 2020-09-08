<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = 'myreservations';

    $dsn = 'mysql:host=' . $servername . ';dbname=' . $db;
    
    try {
      $conn = new PDO($dsn, $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
?>