<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboard.css">
    <title>Dashboard</title>
</head>
<body>

<div class="Dashboard_area">
    <div class="sub_dashboard">
        <div class="sidebar_area"></div>
        <div class="mainbar_area"></div>
    </div>
</div>

    
<h2>Welcome to the Dashboard</h2>
<p>You are logged in as <b>(<?php echo htmlspecialchars($_SESSION['username']); ?>)</b></p>

<p><a href="logout.php">Logout</a></p>



</body>
</html>