<?php 
include 'confige.php';
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $text = trim($_POST['text']);
    $image = "";
    $video = "";


    // Image Upload
    if (isset($_FILES['imageinput']) && $_FILES['imageinput']['error'] == 0) {
        $image_name = time() . '_' . $_FILES['imageinput']['name'];
        $target_dir = "uploads/image/";
        $target_file = $target_dir . basename($image_name);

        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        } 

        move_uploaded_file($_FILES['imageinput']['tmp_name'], $target_file);
        $image = $image_name;
    }



    // Video Upload
    if (isset($_FILES['videoinput']) && $_FILES['videoinput']['error'] == 0) {
        $video_name = time() . '_' . $_FILES['videoinput']['name'];
        $target_dir = "uploads/video/";
        $target_file = $target_dir . basename($video_name);

        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        } 

        move_uploaded_file($_FILES['videoinput']['tmp_name'], $target_file);
        $video = $video_name;
    }


    // Database Insertion
    $user_id = $_SESSION['user']['id'];
    $stmt = $conn->prepare("INSERT INTO posts (user_id, text, image, video) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $user_id, $text, $image, $video);
    if ($stmt->execute()) { 
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

 $conn->close();




?>