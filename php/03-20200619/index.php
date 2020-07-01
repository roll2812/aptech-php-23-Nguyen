<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection

    $connect = mysqli_connect($servername, $username, $password);

    // Check connection 

    if (!$connect) {
        die("Connection Failed : " . mysqli_connect_error());
    }

    //Create database

    $sql = "CREATE DATABASE aptech_php_23_04";
    if (mysqli_query($connect, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($connect);
    }

    mysqli_close($connect);

?>