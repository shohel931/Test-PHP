<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_system";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die ("Connection failed:" . mysqli_connect_error());
}

// Create database 
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

// db selection
mysqli_select_db($conn, $dbname);


if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "Last inserted ID is: " . $last_id . "<br>";
}

if (mysqli_multi_query($conn, $sql)) {
    echo "Created";
} else {
    echo "Error";
}

?>