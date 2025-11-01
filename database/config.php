<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Configuration for database connection

$host       = getenv('DB_HOST');
$username   = getenv('DB_USERNAME');
$password   = getenv('DB_PASSWORD');
$db_name    = getenv('DB_DATABASE');
$sslcert    = "ssl/DigiCertGlobalRootCA.crt.pem";
