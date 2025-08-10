<?php 
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Videos</title>
</head>
<body>

<header class="header_area">
    <div class="logo">
        <a href="index.php"><img src="./img/log.png" alt=""></a>
    </div>
    <div class="nav_area">
        <ul>
            <li><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg></a></li>
            <li><a href="videos.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000"><path d="m380-340 280-180-280-180v360Zm-60 220v-80H160q-33 0-56.5-23.5T80-280v-480q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v480q0 33-23.5 56.5T800-200H640v80H320ZM160-280h640v-480H160v480Zm0 0v-480 480Z"/></svg></a></li>
            <li><a href="settings.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z"/></svg></a></li>
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

                <div class="post_video">
                    <video controls>
                        <source src="./img/video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="count_like">
                    <p><i class="fa-solid fa-thumbs-up"></i> 100 Likes</p>
                    <p><i class="fa-solid fa-comment"></i> 50 Comments</p>
                    <p><i class="fa-solid fa-share"></i> 20 Shares</p>
                </div>
                <hr>

                <div class="post_reaction">
                    <p><a href="#"><i class="fa-solid fa-thumbs-up"></i> Like</a></p>
                    <p><a href="#"><i class="fa-solid fa-comment"></i> Comment</a></p>
                    <p><a href="#"><i class="fa-solid fa-share"></i> Share</a></p>
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