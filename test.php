<h1>340</h1>
<?php

    require "database/config.php";


    //Establish the connection
    $conn = mysqli_init();
    mysqli_ssl_set($conn,NULL,certificate: NULL,ca_certificate: $sslcert,NULL,cipher_algos: NULL);


    if(!mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, MYSQLI_CLIENT_SSL)){
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }else{
      echo "Connect";
    }
