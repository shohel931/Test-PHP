<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_register.css">
    <title>Login</title>
</head>
<body>

    <div class="container">
        <div class="form_container">
            <h2>Login</h2>
            <form action="" method="POST">
                <div class="input_field">
                    <input type="text" id="username" name="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input_field">
                    <input type="password" id="password" name="password" required>
                    <label for="password">Password</label>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
            <p class="register_link">Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </div>
    
</body>
</html>