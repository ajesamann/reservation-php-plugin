<?php
    $servername = "us-cdbr-east-02.cleardb.com";
    $username = "b30fe36cb113f5";
    $password = "18105516";
    $db = 'heroku_694b181c1860cc7';

    $dsn = 'mysql:host=' . $servername . ';dbname=' . $db;
    
    try {
      $conn = new PDO($dsn, $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
?>