<?php 
session_start();

// active navigation
$current_page = basename($_SERVER['PHP_SELF']);

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
            <li><a href="index.php"><svg class="<?= $current_page == 'index.php' ? 'active' : ''   ?>" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M160-120v-480l320-240 320 240v480H560v-280H400v280H160Z"/></svg></a></li>
            <li><a href="videos.php"><svg class="<?= $current_page == 'videos.php' ? 'active' : ''   ?>" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m380-340 280-180-280-180v360Zm-60 220v-80H160q-33 0-56.5-23.5T80-280v-480q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v480q0 33-23.5 56.5T800-200H640v80H320Z"/></svg></a></li>
            <li><a href="settings.php"><svg class="<?= $current_page == 'settings.php' ? 'active' : ''   ?>" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm112-260q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Z"/></svg></a></li>
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
                <div class="upload_area">
                <div class="up_logo">
                    <a href="#"><img src="./img/log.png" alt=""></a>
                </div>
                <div class="forms">
                    <form action="">
                    <textarea name="text" id="" placeholder="What's your mind, Sohel" required></textarea> <br><br>
                    <label class="image_inp" for="imageinput">
                       <i class="fa-solid fa-image"></i><span> Image</span>
                        <input type="file" id="imageinput" name="image" accept="image/*" style="display: none;">    
                    </label> <b>|</b>
                    <label class="video_inp" for="videoinput">
                        <i class="fa-solid fa-video"></i><span> Video</span>
                        <input type="file" id="videoinput" name="video" accept="video/*" style="display: none;">
                    </label> <br><br>
                    <button type="submit" class="btn">Post</button>
                </form>
                </div>
                </div>
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