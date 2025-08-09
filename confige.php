<?php 
$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die ("Connection failed:" . mysqli_connect_error());
}
echo "Connected Successfully";


// Create database
$sql = "CREATE DATABASE IF NOT EXISTS login_system";
if (mysqli_query($conn, $sql)) {
    echo "Database Created Successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}


mysqli_close($conn);


?>