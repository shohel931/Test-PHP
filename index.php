<?php 
session_start();

// if (!isset($_SESSION['user_id'])) {
//     header('Location: login.php');
//     exit();
// }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Home</title>
</head>
<body>

<header class="header_area">
    <div class="logo">
        <a href="index.php"><img src="./img/log.png" alt=""></a>
    </div>
    <div class="nav_area">
        <ul>
            <li><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
            <li><a href="videos.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000"><path d="m380-340 280-180-280-180v360Zm-60 220v-80H160q-33 0-56.5-23.5T80-280v-480q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v480q0 33-23.5 56.5T800-200H640v80H320ZM160-280h640v-480H160v480Zm0 0v-480 480Z"/></svg></a></li>
            <li><a href="settings.php">Contact</a></li>
        </ul>
    </div>
    <div class="login_area">
        <?php if (isset($_SESSION['username'])): ?>
            <span class="user_name">Welcome,<b>(<?php echo htmlspecialchars($_SESSION['username']); ?>)</b></span>
            <a class="btn btn-danger" href="logout.php">Logout</a>
            <?php else: ?>
            <a class="login" href="login.php">Login</a>
            <a class="register" href="register.php">Register</a>
        <?php endif; ?>
    </div>
    <!-- <div class="menu_bars">
        <i class="fa-solid fa-bars"></i>
    </div> -->
</header>

<div class="contant_area">
    <div class="sub_contant">
        <div class="left_box">
            <h2>Shortcute</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        </div>
        <div class="main_contant">
            <div class="sub_contain_area">
            <div class="create_post">
                <input type="text" placeholder="What's your mind,  ">
            </div>
            <div class="create_post">
                <input type="text" placeholder="What's your mind,  ">
            </div>
            <div class="create_post">

                <div class="profile_area">
                    <a href="#"><img src="./img/log.png" alt=""></a>
                    <div class="name_time">
                    <a href="#"><h3>Md. Shohel Rana</h3></a>
                    <p>2 min ago</p>
                    </div>
                </div>

                <div class="post_text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet non vero sapiente illum iure repellat praesentium ea reiciendis, libero dignissimos.</p>
                </div>

                <div class="post_image">
                    <img src="./img/post.jpg" alt="Post Image">
                </div>
            </div>
            </div>
        </div>
        <div class="right_box">
            <h2>Sponsered</h2>
            <div class="sp_box">
                <a href="#"><img src="" alt=""></a>
            </div>
        </div>
    </div>
</div>


</body>
</html>