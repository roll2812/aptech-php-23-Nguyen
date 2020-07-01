<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="aptech_php_23_04";

    $name = $_POST['thisIsName'];
    $email = $_POST['thisIsEmail'];
    //Connect database

    $connect = mysqli_connect($servername, $username, $password, $dbname);

    //Check connection

    if(!$connect) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO $dbname.users (name, email)
    VALUES ('$name', '$email')
    ";

    if(mysqli_query($connect, $sql)) {
        echo "Your register Success";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>