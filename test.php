<h1> 0357 </h1>
<?php

/**
 * @file
 * Example: Secure MySQL connection using SSL (Azure MySQL Flexible Server).
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "satserver01.mysql.database.azure.com";
$username = "azureusergeneral";
$password = "NGli5ESz@eq1b8RzsE";
$database = "mysampledata";
$port = 3306;

// Initialize connection.
$conn = mysqli_init();

// Set SSL parameters (adjust path if needed).
mysqli_ssl_set(
  $conn,
  NULL,
  NULL,
  'DigiCertGlobalRootCA.crt.pem',
  NULL,
  NULL
);

// Establish secure connection.
mysqli_real_connect(
  $conn,
  $host,
  $username,
  $password,
  $database,
  $port,
  NULL,
  MYSQLI_CLIENT_SSL
);

// Check for connection errors.
if (mysqli_connect_errno($conn)) {
  die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

print "Connection established.\n";
