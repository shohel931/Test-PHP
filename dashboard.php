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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Dashboard</title>
</head>
<body>

<div class="Dashboard_area">
    <div class="sub_dashboard">
        <div class="sidebar_area">
            <h2>NetWork</h2>
            <div class="menu_area">
                <ul>
                    <li><a href="dashboard.php"><i class="fa-solid fa-house"></i> Dashboard</a></li>
                    <li><a href="profile.php"><i class="fa-solid fa-user"></i> Profile</a></li>
                    <li><a href="settings.php"><i class="fa-solid fa-gear"></i> Settings</a></li>
                    <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="mainbar_area">
            .
        </div>
    </div>
</div>

    




</body>
</html>