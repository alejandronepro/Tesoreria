<?php

//database_connection.php

// $connect = new PDO("mysql:host=localhost;dbname=iglesie5_tesoreria", "iglesie5_admin", "ICASD5241");
// $conn = mysqli_connect("localhost", "iglesie5_avaldez", "SobreTodo7?", "iglesie5_subscribers");  

try {
  $connect = new PDO("mysql:host=localhost;dbname=iglesie5_tesoreria", "iglesie5_admin", "ICASD5241");
  // set the PDO error mode to exception
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully"; 
  }
catch(PDOException $e)
  {
  echo "Connection failed: " . $e->getMessage();
  }
?>