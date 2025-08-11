<?php 
include 'confige.php';

// Create table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    username VARCHAR(30) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


// $fullname = "Abul Khan";
// $email = "abul@gmail.com";
// $username = "Abul123";
// $password = "Password123@#";

// Insert data into users table
$sql = "INSERT INTO users (fullname, email, username, password) VALUES ($fullname, $email, $username, $password)";


$sql = "INSERT INTO users (fullname, email, username, password) VALUES ($fullname, $email, $username, $password)";


$sql = "INSERT INTO users (fullname, email, username, password) VALUES ($fullname, $email, $username, $password)";


$sql = "INSERT INTO users (fullname, email, username, password) VALUES ($fullname, $email, $username, $password)";


$sql = "INSERT INTO users (fullname, email, username, password) VALUES ($fullname, $email, $username, $password)";


$sql = "INSERT INTO users (fullname, email, username, password) VALUES ($fullname, $email, $username, $password)";



mysqli_close($conn);
?>