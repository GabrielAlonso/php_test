<?php
$servername = "localhost";
$dbname = "online_shopping_bd";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  //echo "Connection failed: " . $e->getMessage();
}




function listProduct(){
  //$dbs = $dbh->query( 'SHOW DATABASES' );
}
