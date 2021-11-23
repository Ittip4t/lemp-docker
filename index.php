<?php
ini_set('display_errors', 1);

$servername = "app-mysql";
$username = "root";
$password = "test";
$dbname = 'mysql';
try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo phpinfo();
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$conn = null;