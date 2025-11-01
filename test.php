<h1> One  </h1>
<?php
    $servername = "satserver01.mysql.database.azure.com";
    $username = "azureusergeneral";
    $password = "NGli5ESz@eq1b8RzsE";
    $dbname = "mysampledata";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>
<br/ ><br/ ><br/ ><br/ ><br/ >
<h1> Seocnd </h1>
<?php
    $host = "satserver01.mysql.database.azure.com";
    $username = "azureusergeneral";
    $password = "NGli5ESz@eq1b8RzsE";
    $database = "mysampledata"; 
    $sslcert = "DigiCertGlobalRootCA.pem";

    // Initialize MySQLi
    $conn = mysqli_init();

    // Set SSL options
    mysqli_ssl_set($conn, NULL, NULL, $sslcert, NULL, NULL);

    // Establish the connection
    if (!mysqli_real_connect($conn, $host, $username, $password, $database, 3306, MYSQLI_CLIENT_SSL)) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully to Azure Database for MySQL Flexible Server!";

    // Perform database operations here (e.g., create tables, insert, read, update, delete)

    // Close the connection
    mysqli_close($conn);
    ?>