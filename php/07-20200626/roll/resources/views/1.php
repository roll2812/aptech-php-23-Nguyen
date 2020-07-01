<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection

    $connect = mysqli_connect($servername, $username, $password);

    // Check connection 

    if (!$connect) {
        die("Connection Failed : " . mysqli_connect_error());
    } else {
        echo "Connection Success !!!";
    }