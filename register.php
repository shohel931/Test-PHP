<?php 
include 'confige.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = ($_POST['fullname']);
    $email = ($_POST['email']);
    $username = ($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

}

if (!empty($fullname) && !empty($email) && !empty($username) && !empty($password)) {
    $sql = "INSERT INTO users (fullname, email, username, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $fullname, $email, $username, $password);


    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!');</script>";
    } else {
        echo "<script>alert('Registration failed. Please try again.');</script>";
    }

    $stmt->close();
} else {
    echo "<script>alert('Please fill in all fields.');</script>";
    header("Location: register.php");
    exit();
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_register.css">
    <title>Register</title>
</head>
<body>

    <div class="container">
        <div class="form_container">
            <h2>Register</h2>
            <form action="" method="POST">
                <div class="input_field">
                    <input type="text" id="fullname" name="fullname" required>
                    <label for="fullname">Full Name</label>
                </div>
                <div class="input_field">
                    <input type="email" id="email" name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input_field">
                    <input type="text" id="username" name="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input_field">
                    <input type="password" id="password" name="password" required>
                    <label for="password">Password</label>
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
            <p class="login_link">Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
    
</body>
</html>