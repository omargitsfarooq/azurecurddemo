<?php 
require "database/config.php";

    $servername = "satserver01.mysql.database.azure.com";
    $username = "azureusergeneral";
    $password = "NGli5ESz@eq1b8RzsE";
    $dbname = "mysampledata";

?>
<h1> 0313  </h1>

<?php 

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootG2.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'satserver01.mysql.database.azure.com', 'azureusergeneral', 'NGli5ESz@eq1b8RzsE', 'mysampledata', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno()) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}