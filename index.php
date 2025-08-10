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
            <li><a href="friends.php"><svg class="<?= $current_page == 'friends.php' ? 'active' : ''   ?>" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113Z"/></svg></a></li>
            <li><a href="profile.php"><svg class="<?= $current_page == 'profile.php' ? 'active' : ''   ?> xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z"/></svg></a></li>
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
            <li><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M160-120v-480l320-240 320 240v480H560v-280H400v280H160Z"/></svg></a></li>
            <li><a href="videos.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m380-340 280-180-280-180v360Zm-60 220v-80H160q-33 0-56.5-23.5T80-280v-480q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v480q0 33-23.5 56.5T800-200H640v80H320Z"/></svg></a></li>
            <li><a href="friends.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113Z"/></svg></a></li>
            <li><a href="profile.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z"/></svg></a></li>
            <li><a href="settings.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm112-260q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Z"/></svg></a></li>
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