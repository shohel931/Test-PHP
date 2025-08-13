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
    <link rel="stylesheet" href="./css/home_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <link rel="shortcut icon" href="./img/logos.png" type="image/x-icon">
    <title>Dashboard</title>
</head>
<body>

<div id="preloded" class="preloder">
    <div class="loder">
        <img src="./img/logos.png" alt="">
    </div>
    <div class="logo_text">
        <p>Powered by <span>Network</span></p>
    </div>
</div>

<div class="Dashboard_area">
    <div class="sub_dashboard">
        <div class="sidebar_area">
            <h2>NetWork</h2>
            <div class="menu_area">
                <ul>
                    <li><a href="dashboard.php"><i class="fa-solid fa-gauge-high"></i> Dashboard</a></li>
                    <li><a href="index.php"><i class="fa-solid fa-home"></i> Home</a></li>
                    <li><a href="profile.php"><i class="fa-solid fa-user"></i> Profile</a></li>
                    <li><a href="settings.php"><i class="fa-solid fa-gear"></i> Settings</a></li>
                    <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="mainbar_area">
            <div class="Main_comtent_header">
                <h2>Welcome to the Dashboard</h2>
                <p>Welcome, <b>(<?php echo htmlspecialchars($_SESSION['username']); ?>)</b></p>
            </div>
            <div class="Main_content">
                <div class="content_box"></div>
                <div class="content_box"></div>
                <div class="content_box"></div>
        </div>
    </div>
</div>

    



<script src="./js/all_pages.js"></script>
</body>
</html>