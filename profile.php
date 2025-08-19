<?php 
include 'confige.php';
session_start();

// active navigation
$current_page = basename($_SERVER['PHP_SELF']);

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
    <link rel="shortcut icon" href="./img/logos.png" type="image/x-icon">
    <title>Profile</title>
</head>
<body>

<header class="header_area">
    <div class="logo">
        <a href="index.php"><img src="./img/log.png" alt=""></a>
        <div class="search">
            <form action="search.php" method="POST">
                <input type="text" name="query" placeholder="Search..." required>
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
    <div class="nav_area">
       <ul>
            <li><a href="index.php"><svg class="<?= $current_page == 'index.php' ? 'active' : ''   ?>" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M160-120v-480l320-240 320 240v480H560v-280H400v280H160Z"/></svg></a></li>
            <li><a href="videos.php"><svg class="<?= $current_page == 'videos.php' ? 'active' : ''   ?>" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m380-340 280-180-280-180v360Zm-60 220v-80H160q-33 0-56.5-23.5T80-280v-480q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v480q0 33-23.5 56.5T800-200H640v80H320Z"/></svg></a></li>
            <li><a href="friends.php"><svg class="<?= $current_page == 'friends.php' ? 'active' : ''   ?>" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113Z"/></svg></a></li>
            <li><a href="profile.php"><svg class="<?= $current_page == 'profile.php' ? 'active' : ''   ?>" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z"/></svg></a></li>
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



<!-- <div class="Profile_areas">
    <div class="sub_profiles_area">
        <div class="covar_image">
            <img src="./img/cover.jpg" alt="Cover Image">
            <form action="update_photos.php" method="POST" enctype="multipart/form-data">
                <label class="edit_cover_photo">
                    <i class="fa-solid fa-camera"></i> Edit Cover Photo
                    <input type="file" name="cover_photo" accept="image/*" onchange="this.form.submit()" hidden>
                </label>
            </form>
        </div>
    </div>
</div> -->


<div class="main_profile_area">
    <div class="cover_area">
        <div class="cover_image">
            <img src="./img/cover.jpg" alt="Cover Image">
            <form action="update_photos.php" method="POST" enctype="multipart/form-data">
                <label class="edit_cover_photo">
                  <i class="fa-solid fa-camera"></i> Edit Cover Photo
                    <input type="file" name="cover_photo" onchange="this.form.submit()" hidden>
                </label>
            </form>
        </div>
        <div class="profile_image">
            <img src="./img/logos.png" alt="Profile Picture">
            <form class="profile_upload" action="update_photos.php" method="POST" enctype="multipart/form-data">
                <label class="edit_profile_photo">
                    <a ><i class="fa-solid fa-camera"></i></a>
                    <input type="file" name="profile_pic" onchange="this.form.submit()" hidden>
                </label>
            </form>
        </div>
        <div class="profile_name">
            <h2>MD. Shohel Rana</h2>
            <a href="friends.php"><p><span>100</span> friends</p></a>
        </div>

        <div class="profile_status">
            <a href="#" class="status_button"><i class="fa-solid fa-pen-to-square"></i> Edit Profile</a>
            <a href="" class="status_button"><i class="fa-solid fa-plus"></i> Add Friend</a>
            <a href="" class="status_button"><i class="fa-solid fa-message"></i> Message</a>
        </div>

        <div class="profile_nav">
            <ul>
                <li><a href="#">Post</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Photos</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Friends</a></li>
                <li><a href="#">More <i class="fa-solid fa-angle-down"></i></a></li>
            </ul>
        </div>
    </div>
</div>




<div class="profile_contants">
    <div class="sub_profile_contans">
        <div class="contant_box1">
            <div class="bio_area">
                <h3>Bio</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="contant_box2"></div>
    </div>
</div>










<script src="./js/all_pages.js"></script>
</body>
</html>