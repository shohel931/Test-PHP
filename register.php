<?php 
include 'confige.php';


















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