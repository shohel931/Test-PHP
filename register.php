<?php 
include 'confige.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

}

if (!empty($fullname) && !empty($email) && !empty($username) && !empty($password)) {

    $check_sql = "SELECT * FROM users WHERE username = ? OR email = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("ss", $username, $email);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();
    if ($check_result->num_rows > 0) {
        echo "<script>alert('Username or Email already exists. Please try again.');</script>";
        $check_stmt->close();
        exit();
    }
    $check_stmt->close();


    $sql = "INSERT INTO users (fullname, email, username, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $fullname, $email, $username, $password);


    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!');</script>";
        header("Location: login.php");
        exit();
    } else {
        echo "<script>alert('Registration failed. Please try again.');</script>";
    }

    $stmt->close();
} 



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login_register.css">
    <link rel="shortcut icon" href="./img/logos.png" type="image/x-icon">
    <title>Register</title>
</head>
<body>

    <div class="container">
        <div class="form_container">
            <h2>Register</h2>
            <form action="" method="POST" >
                <div class="input_field">
                    <input type="text" id="fullname" name="fullname" required>
                    <label for="fullname">Full Name</label>
                </div>
                <div class="input_field">
                    <input type="email" id="email" name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input_field">
                    <input type="text" id="username" name="username" pattern="^[a-zA-Z0-9_.]{6,}$" title="Username must be at least 6 characters and contain only letters, numbers, underscore (_) or dot (.)" required>
                    <label for="username">Username</label>
                </div>
                <div class="input_field">
                    <input type="password" id="password" name="password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}" title="Password must be at least 8 characters long and include uppercase, lowercase, number, and special character." required>
                    <label for="password">Password</label>
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
            <p class="login_link">Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
    
</body>
</html>