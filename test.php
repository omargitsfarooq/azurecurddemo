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