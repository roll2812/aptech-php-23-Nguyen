<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_23_04";

//connect database

$connect = mysqli_connect($servername, $username, $password, $dbname);

// check connection

if(!$connect) {
    echo "Connection Failed: " . mysqli.connect.error();
}

//create table

$sql = "CREATE TABLE $dbname.users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255),
email VARCHAR(255) NOT NULL UNIQUE
)";

if(mysqli_query($connect, $sql)) {
    echo "Create Table Successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);
?>