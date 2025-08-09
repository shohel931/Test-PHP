<?php 
include 'confige.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = ($_POST['fname']);
    $email = ($_POST['email']);
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    $confirm_password = ($_POST['confirm_password']);

}

if ($password !== $confirm_password) {
    echo "Passwords do not match!";
} else {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (fname, email, username, password) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $fname, $email, $username, $hashed_password);

    if (mysqli_stmt_execute($stmt)) {
        echo "Registation successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_stmt_close($stmt);

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
                    <input type="text" id="fname" name="fname" required>
                    <label for="fname">Full Name</label>
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
                <div class="input_field">
                    <input type="password" id="confirm_password" name="confirm_password" required>
                    <label for="confirm_password">Confirm Password</label>
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
            <p class="login_link">Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
    
</body>
</html>