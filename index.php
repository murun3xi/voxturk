<?php
echo 'deneme';

$servername = "mysql://b37f567b3f741c:f43585bf@eu-cdbr-west-03.cleardb.net/heroku_123bc0464991a9f?reconnect=true";
$username = "b37f567b3f741c";
$password = "f43585bf";

try {
  $conn = new PDO("mysql:host=$servername;dbname="heroku_123bc0464991a9f", $username, $password);
  //$conn = new PDO("mysql://b37f567b3f741c:f43585bf@eu-cdbr-west-03.cleardb.net/heroku_123bc0464991a9f?reconnect=true");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
