<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_23_04";

// Connect database

$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection

if (!$connect) {
    die("Connection Failed: " . mysqli_connect_error());
};

// Insert data in to table

$sql = "INSERT INTO $dbname.users
( name, email)
VALUES ('Nguyen', 'roll@gmail.com'),
('Nhi', 'Nhi@gmail.com')
";

if(mysqli_query($connect, $sql)) {

    echo "New Record Created Successfully";
} else {
    echo "Error Insert Data: " . mysqli_error($connect);
}

mysqli_close($connect);
?>
