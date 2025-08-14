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


// Create table for Post
$sql = "CREATE TABLE IF NOT EXISTS posts (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  user_id INT UNSIGNED NULL,              
  content TEXT NOT NULL,
  image_path VARCHAR(255) DEFAULT NULL,
  video_path VARCHAR(255) DEFAULT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
    echo "Table posts created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}




mysqli_close($conn);
?>